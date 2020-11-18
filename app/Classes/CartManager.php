<?php

namespace App\Classes;

use App\Models\Cart as CartModel;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Classes\HelperManager as Common;

class CartManager
{

    public function addToCart($product)
    {
        $set = false;
        $qty = 1;
        $rowId = '';
        $contains = $this->getCartContain();
        foreach ($contains as $key => $item) {
            if ($item->id === $product->id) {
                $qty = $item->qty + $qty;
                $rowId = $item->rowId;
                $set = true;
                break;
            }
        }
        if ($set == 1 || $set == true) {
            $data = ['qty'=> $qty];
            $this->updateProduct($rowId, $data);
        } else {
            $this->addProduct($product);
        }
    }

    public function addProduct($product)
    {
        Cart::add([
            'id'=> $product->id,
            'name'=> $product->name,
            'qty'=> 1,
            'price'=> $product->purchase_price,
        ]);
    }

    public function updateProduct($rowId, $data)
    {
        Cart::update($rowId, $data); 
    }

    public function removeProduct($product)
    {
        Cart::remove($rowId);
    }

    public function getProduct($productId)
    {
        $rowId = '';
        $contains = $this->getCartContain();
        foreach ($contains as $key => $item) {
            if ($item->id === $productId) {
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
    
    public function getCartContain()
    {
        return Cart::content();
    }

    public function destroy()
    {
        Cart::destroy();
    }

    public function count()
    {
        return Cart::count();
    }

    public function total()
    {
        return Cart::total();
    }

}
