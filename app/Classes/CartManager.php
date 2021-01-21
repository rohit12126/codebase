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
    public function addToCart($product, $configuredProductData = 0)
    {
        $set = false;
        $qty = 1;
        $rowId = '';
        $contains = $this->getCartContain();

        $response = ['status' => true, 'message'=> "", 'qty'=> $qty];
        foreach ($contains as $key => $item) {

            if ($item->id == $product->id) {

                if(!empty($configuredProductData))
                {
                    if (
                        $item->options['configureDetails']['configurationId'] == 
                        $configuredProductData['configurationId']
                        )
                    {
                        break;
                    }
                }
                else
                {
                    $qty = $item->qty + $qty;
                    $rowId = $item->rowId;
                    $set = true;
                    break;
                }
            }
        }

        if ($set == 1 || $set == true) {
            $data = ['qty'=> $qty];
            
            if ($product->max_cart_qty >= $qty) {

                $this->updateProduct($rowId, $data, $product->id);
                
                $response['qty'] = $qty;
            } else {
                $response['status'] = false;
                $response['message'] = "Unable to update cart (your product cart limit exceeded.)";
                $response['qty'] = $qty - 1;
            }
        } else {
            $this->addProduct($product,$qty = 1, $configuredProductData);
        }

        return $response;
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
        $productCartQty = 0;
        $response = ['status' => true, 'message'=> "", 'qty'=> $qty];

        foreach ($contains as $key => $item) {
            if ($item->id == $product->id) {
                $rowId = $item->rowId;
                $productId = $product->id;
                $productCartQty = $item->qty;
                $set = true;
                break;
            }
        }
        
        if ($product->max_cart_qty >= $qty) { 
            if ($set == 1 || $set == true) {
                $data = ['qty'=> $qty];
                $this->updateProduct($rowId, $data, $productId);
            } else {
                $this->addProduct($product, $qty);
            }
        } else {
            $response = [
                'status' => false,
                'message'=> "Unable to update cart (your product cart limit exceeded.)",
                'qty'=> $productCartQty
            ];
        } 

        return $response;
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
    public function addProduct($product, $qty = 1, $configuredProductData = 0)
    {
        $productData = [
            'id'=> $product->id,
            'name'=> $product->name,
            'qty'=> $qty,
            'price'=> $product->sale_price + (( !empty($configuredProductData)) ? 1254 : 0), //romlie price here
            'options' => 
            [
                'image' => @$product->images[0]->image,
                'configureDetails' => $configuredProductData
            ]
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
