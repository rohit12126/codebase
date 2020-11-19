<?php

namespace App\Classes;

use App\Models\Cart as CartModel;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Classes\HelperManager as Common;
use Illuminate\Support\Facades\Auth;

class CartManager
{

    /**
     * Add product to cart (Increase product qty to cart)
     *
     */
    public function addToCart($product)
    {
        $set = false;
        $qty = 1;
        $rowId = '';
        $contains = $this->getCartContain();
        foreach ($contains as $key => $item) {
            if ($item->id == $product->id) {
                $qty = $item->qty + $qty;
                $rowId = $item->rowId;
                $set = true;
                break;
            }
        }
        if ($set == 1 || $set == true) {
            $data = ['qty'=> $qty];
            $this->updateProduct($rowId, $data, $product->id);
        } else {
            $this->addProduct($product);
        }
    }

    /**
     * Remove product From cart (Decrease product qty from cart)
     *
     */
    public function removeFromCart($product)
    {
        $set = false;
        $qty = 1;
        $rowId = '';
        $contains = $this->getCartContain();
        foreach ($contains as $key => $item) {
            if ($item->id == $product->id) {
                $qty = $item->qty - $qty;
                $rowId = $item->rowId;
                $set = true;
                break;
            }
        }
        if ($set == 1 || $set == true) {
            if ($qty != 0) {
                $data = ['qty'=> $qty];
                $this->updateProduct($rowId, $data, $product->id);
            } else {
                $this->removeProduct($rowId, $product->id);
            }
        } else {
            return false;
        }
    }

    /**
     * Add to cart
     *
     */
    public function addProduct($product, $qty = 1)
    {
        $productData = [
            'id'=> $product->id,
            'name'=> $product->name,
            'qty'=> $qty,
            'price'=> $product->purchase_price,
        ];

        Cart::add($productData);
        
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $this->addToCartDB($productData, $user_id);
        }
    }

    /**
     * Update cart product
     *
     */
    public function updateProduct($rowId, $data, $productId)
    {
        Cart::update($rowId, $data); 

        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $this->updateToCartDB($data, $user_id, $productId);
        }
    }

    /**
     * Remove product from cart
     *
     */
    public function removeProduct($rowId)
    {
        Cart::remove($rowId);
    }

    /**
     * Get Product info from cart
     *
     */
    public function getProduct($productId)
    {
        $rowId = '';
        $contains = $this->getCartContain();
        foreach ($contains as $key => $item) {
            if ($item->id == $productId) {
                $rowId = $item->rowId;
                break;
            }
        }
        
        if (!empty($rowId)) {
            return Cart::get($rowId);
        } else {
            return false;
        }
    }

    /**
     * Get Cart contain
     *
     */
    public function getCartContain()
    {
        return Cart::content();
    }

    /**
     * Empty cart or remove all product from cart
     *
     */
    public function destroy()
    {
        Cart::destroy();
    }

    /**
     * Count for cart contain products
     *
     */
    public function count()
    {
        return Cart::count();
    }

    /**
     * Cart subtotal
     *
     */
    public function subTotal()
    {
        return Cart::subtotal();
    }

    /**
     * Cart total
     *
     */
    public function total()
    {
        return Cart::total();
    }

    /**
     * Update cart product
     *
     */
    public function updateCart($product, $qty)
    {
        $set = false;
        $rowId = '';
        $contains = $this->getCartContain();
        foreach ($contains as $key => $item) {
            if ($item->id == $product->id) {
                $rowId = $item->rowId;
                $set = true;
                break;
            }
        }
        if ($set == 1 || $set == true) {
            $data = ['qty'=> $qty];
            $this->updateProduct($rowId, $data);
        } else {
            $this->addProduct($product, $qty);
        }
    }

    /**
     * User Cart DB Product add first time
     * 
     */
    public function addToCartDB($productData, $user_id)
    {
        $cartData = CartModel::where('user_id', $user_id)
            ->first();

        if (!is_null($cartData)) {
            $cartId = $cartData->id;
            
            $cartArr = (array) json_decode($cartData->cart_data);
            
            array_push($cartArr, $productData);

            CartModel::where('id', $cartId)
                ->update(['cart_data' => json_encode($cartArr)]);
        } else {
            $insertId = CartModel::create([
                'user_id' => $user_id,
                'cart_data' => json_encode([$productData])
            ]);
        }
    }

    /**
     * User cart updated
     * 
     */
    public function updateToCartDB($data, $user_id, $productId)
    {
        $cartData = CartModel::where('user_id', $user_id)
            ->first();

        if (!is_null($cartData)) {
            $cartId = $cartData->id;
            
            $cartArr = (array) json_decode($cartData->cart_data);
            
            foreach ($cartArr as $key => $item) {
                if ($item->id == $productId) {
                    $cartArr[$key]->qty = $data['qty'];
                }
            }
            CartModel::where('id', $cartId)
                ->update(['cart_data' => json_encode($cartArr)]);
        }
    }
    
    /**
     * Synch cart on logged in
     *
     */
    public function synchCart($user_id)
    {
        $cartData = CartModel::where('user_id', $user_id)
            ->first();
        if (!is_null($cartData)) {
            //dd($cartData);
        } else {
            $cartData = $this->getCartContain();
            //dd($cartData);
            /* $insertId = CartModel::create([
                'user_id' => $user_id,
                'cart_data' => json_encode($productData)
            ]); */
        }
    }
}
