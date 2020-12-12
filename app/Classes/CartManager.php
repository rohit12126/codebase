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

        return $qty;
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

        return $qty;
        
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
            'price'=> $product->sale_price,
            'options' => ['image' => @$product->images[0]->image]
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
        $productId = '';
        $contains = $this->getCartContain();
        foreach ($contains as $key => $item) {
            if ($item->id == $product->id) {
                $rowId = $item->rowId;
                $productId = $product->id;
                $set = true;
                break;
            }
        }
        if ($set == 1 || $set == true) {
            $data = ['qty'=> $qty];
            $this->updateProduct($rowId, $data, $productId);
            /* row */
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
        $cart = CartModel::where('user_id', $user_id)
            ->first();
        if (!is_null($cart)) {
            $cartId = $cart->id;

            $cartSessionData = $this->getCartContain();
            $cartData = json_decode($cart->cart_data);
            $productIds = array_column($cartData,'id');
            
            foreach ($cartData as $key => $item) {
                foreach ($cartSessionData as $key1 => $itemSess) {
                    $desIndex = array_search($itemSess->id, $productIds);
				    if ($desIndex !== false) { 
                        if ($item->id == $itemSess->id) {
                            $cartData[$key]->qty = $itemSess->qty;
                        }
                    }
                }       
            }

            CartModel::where('id', $cartId)
                ->update(['cart_data' => json_encode($cartData)]);
            
        } else {
            $cartData = $this->getCartContain();
            $cartDB = [];
            foreach ($cartData as $key => $item) {
                $cartDB[] = [
                    'id'=> $item->id,
                    'name'=> $item->name,
                    'qty'=> $item->qty,
                    'price'=> $item->price
                ];
            }

            $insertId = CartModel::create([
                'user_id' => $user_id,
                'cart_data' => json_encode($cartDB)
            ]);
        }
    }

    /**
     * Destroy User cart
     * 
     */
    public function destroyCartDB($user_id)
    {
        CartModel::where('user_id', $user_id)
        ->delete();
    }
}
