<?php

namespace App\Classes;

use App\Models\Product as ProductModel;
use App\Models\ProductImage as ProductImageModel;
use App\Classes\HelperManager as Common;

class ProductManager
{
    public static function add($req)
    {
        $data = [
            'name' => $req->name,
            'category_id' => $req->category_id,
            'purchase_price' => $req->purchase_price,
            'sale_price' => $req->sale_price,
            'description' => $req->description,
            'status' => (int)$req->status,
            'is_accessory' => (int)$req->is_accessory,
        ];
        if ($product = ProductModel::create($data)) {
            if ($req->image) {
                foreach ($req->image as $image) {
                    $file_name = Common::uploadFile($image, 'upload/product');
                    ProductImageModel::create([
                        'product_id' => $product->id,
                        'image' => $file_name
                    ]);
                }
            }
            return true;
        } else {
            return false;
        }
    }

    public static function edit($req)
    {
        $product = null;
        if ($exist = self::getProductById($req->id)) {
            $product = $exist;
        } else {
            return false;
        }

        $data = [
            'name' => $req->name,
            'category_id' => $req->category_id,
            'purchase_price' => $req->purchase_price,
            'sale_price' => $req->sale_price,
            'stock_qty' => $req->stock_qty,
            'description' => $req->description,
            'status' => (int)$req->status,
            'is_accessory' => (int)$req->is_accessory,
            
        ];
        if ($product->fill($data)->save()) {
            if (isset($req->storeimage) && is_array($req->storeimage) && $req->storeimage !== null) {
                ProductImageModel::whereNotIn("id", array_keys($req->storeimage))->where('product_id', $req->id)->delete();
            }
            if ($req->image) {
                foreach ($req->image as $key => $image) {
                    $file_name = Common::uploadFile($image, 'upload/product');
                    if (is_array($req->storeimage) && in_array($key, array_keys($req->storeimage))) {
                        ProductImageModel::where("id", $key)->where('product_id', $product->id)->update(['image' => $file_name]);
                    } else {
                        ProductImageModel::create([
                            'product_id' => $product->id,
                            'image' => $file_name
                        ]);
                    }
                }
            }
            return true;
        } else {
            return false;
        }
    }

    public static function delete($id)
    {
        if ($category = self::getProductById($id)) {
            $category->delete();
            return true;
        } else {
            return false;
        }
    }

    public static function getProductList()
    {
        return ProductModel::with('images')->get();
    }

    public static function getProductListPaginated($req)
    {
        if (
            $req->product_name !== null
            || $req->stock_less !== null
            || $req->product_status !== null
        ) {
            $order = ProductModel::with('images');
            if ($req->product_status) {
                $order->where('status', $req->product_status);
            }
            if($req->product_name){
                $order->where('name', 'like', '%' . $req->product_name . '%');
            }
            if ($req->stock_less) {
                $order->where('stock_qty', '<=', $req->stock_less);
            }
            return $order->orderBy('id', 'desc')->paginate(10);
        } else {
            return ProductModel::with('images')->orderBy('id', 'desc')->paginate(10);
        }
    }

    public static function getProductById($id)
    {
        return ProductModel::with('images')->find($id);
    }

    public function getProducts($paginate)
    {
        $products = ProductModel::with('images', 'catergory')->paginate($paginate);
        return $products;
    }

    public function getProduct($productId)
    {
        $product = ProductModel::with('images', 'catergory')->find($productId);
        return $product;
    }
    public function getProductWithReview($productId)
    {
        $product[] = ProductModel::with('images', 'catergory')->find($productId);
        $product[] = $product[0]->getRecentRatings($product[0]->id, 5, 'desc');
        return $product;
    }
}
