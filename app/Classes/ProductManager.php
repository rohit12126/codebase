<?php

namespace App\Classes;

use App\Models\Product as ProductModel;
use App\Models\ProductImage as ProductImageModel;
use App\Models\PricingMatrix as PricingMatrixModel;
use App\Classes\HelperManager as Common;
use App\Classes\ReviewManager;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductManager
{
    public static function add($req)
    {
        dd($req);
        $description = Common::parseEditorContentAndImages($req->input('description'), 'upload/product/content/');

        $slug = self::generateSlug($req->name);

        $data = [
            'name' => $req->name,
            'category_id' => $req->category_id,
            'sale_price' => $req->sale_price,
            'max_cart_qty' => '1000',
            'sku'=> $req->sku,
            'description' => $description,
            'slug' => $slug,
            'status' => (int)$req->status,
            'is_accessory' => (int)$req->is_accessory,
            'configure_id' => $req->configure_id ?? NULL,
            'weight' => $req->weight ?? NULL,
            'per_foot' => ($req->per_foot == 'on') ? 1 : 0,
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
        
        $description = Common::parseEditorContentAndImages($req->input('description'), 'upload/product/content/');

        $slug = self::generateSlug($req->name, $req->id);

        $data = [
            'name' => $req->name,
            'category_id' => $req->category_id,
            'sale_price' => $req->sale_price,
            'max_cart_qty'=>'1000',
            'sku'=>$req->sku,
            'description' => $req->description,
            'slug' => $slug,
            'status' => (int)$req->status,
            'is_accessory' => (int)$req->is_accessory,
            'configure_id' => $req->configure_id ?? NULL,
            'weight' => $req->weight ?? NULL
        ];
        if ($product->fill($data)->save()) {
            
            if (is_null($req->storeimage)) {
                ProductImageModel::where('product_id', $req->id)->delete();
            } else {
                ProductImageModel::whereNotIn("id", array_keys($req->storeimage))
                                    ->where('product_id', $req->id)
                                    ->delete();
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

    public static function generateSlug($name, $productId = 0, $recall = false) {
        $slug = Common::generateSlug($name);
        
        if ($recall) {
            $slug = $slug . '-' . rand(1,999);
        }

        $isExist = self::checkExistSlug($slug, $productId);
        
        if ($isExist) {
          $slug = self::generateSlug($name, $productId, true);
          return $slug;
        } 

        return $slug;
    }

    public static function checkExistSlug($slug, $productId = 0)
    {
        if (!empty($productId)) {
            $product = ProductModel::where('slug', '=', $slug)
                ->where('id', '!=', $productId)
                ->first();
        } else {
            $product = ProductModel::where('slug', '=', $slug)->first();
        }

        if (!is_null($product)) {
            return true;
        } else {
            /* slug not exist */
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
            || $req->product_status !== null
            || $req->type !== null
        ) {
            $order = ProductModel::with('images');
            if ($req->product_status) {
                $order->where('status', $req->product_status);
            }
            if($req->product_name){
                $order->where('name', 'like', '%' . $req->product_name . '%');
            }
            if($req->type){
                $order->where('is_accessory', $req->type);
            }
            
            return $order->orderBy('id', 'desc')->paginate(10);
        } else {
            return ProductModel::with('images', 'catergory')->orderBy('id', 'desc')->paginate(10);
        }
    }

    public static function getProductById($id)
    {
        return ProductModel::with('images')->find($id);
    }

    public function getProducts()
    {
        $products = ProductModel::with('images', 'catergory')->where('status', 1)
        ->orderBy('id', 'DESC')->paginate(8);
        return $products;
    }

    public function getProductsByCategorySlug($catSlug) {
        $categoryId = '';
        $category = Category::where('slug', $catSlug)->first();

        if(!is_null($category)) {
            $categoryId = $category->id;
        }

        $products = ProductModel::with('images', 'catergory');
        if (!empty($categoryId)) {
            $products = $products->where('category_id', $categoryId);
        }
        $products = $products->where('status', 1)
            ->orderBy('sale_price')
            ->get()
            ->partition(function ($item) {
                return $item->category_id != 1;
            })->flatten();
        return $products;
    }

    public function getProductsByCategoryId($categoryId, $productId = 0) {
        
        $products = ProductModel::with('images', 'catergory');
        if (!empty($categoryId)) {
            $products = $products->where('category_id', $categoryId);
        }

        if (!empty($productId)) {
            $products = $products->where('id', '!=', $productId);
        }
        $products = $products->where('status', 1)
            ->get();
        return $products;
    }

    public function getProduct($productId)
    {
        $product = ProductModel::with('images', 'catergory')->find($productId);
        return $product;
    }

    public function getProductWithReviewBySlug($slug)
    {   
        $product = ProductModel::with('images', 'catergory', 'productDescription')
            ->where('slug', $slug)
            ->where('status', 1)
            ->first();

        if (is_null($product)){
            return false;
        }

        $productData = [
            'product' => $product,
            'productReview' => "",
            'reviewCount'=>'',
            'averageRating'=>''
        ];
        
        if (!is_null($product)) {
            
            $productData['productReview'] = ReviewManager::getAllActiveReviewsByProductId($product->id); 
            //$product->getRecentRatings($product->id, 5, 'desc');
            
            $productData['reviewCount'] = $this->reviewCount($product->id);

            $productData['averageRating'] =  DB::table('reviews')
                //->where('reviewrateable_type', 'App/Models/Product') /* In case of product only open it. */
                // ->where('reviewrateable_id', $product->id)
                ->where('approved', '=' , 1)
                ->avg('rating');
        }
        return $productData;
    }

    public function reviewCount($id){
        $count = DB::table('reviews')
            ->where('approved', '=' , 1)
            ->count();
        return $count;
    }

    public function checkHardware($id)
    {
        $assesory = ProductModel::where('id', $id)
            ->where('is_accessory', 1)
            ->first();
        return $assesory;
    }
    public function getPriceByArticlenumber($articleNu , $parts)
    {
        $price = PricingMatrixModel::where('model', '=', $articleNu)->pluck('retail');

        if(!$price->isEmpty())
        {
        // define $saddlePrice = $saddleFinishPrice 
        //because getting shaddelfinish response from roomlie on every condition.
        $addonPrice = $saddlePrice = $saddleFinishPrice = 0;

        foreach($parts as $parts)
        {
            if($parts['key'] == 'widthChoice' && $parts['value'] =='custom')
            {
                $addonPrice += 100; // add 100 USD on current
            }
            else if($parts['key'] == 'heightChoice' && $parts['value'] =='custom')
            {
                $addonPrice += 100;  // add 100 USD on current
            }
            else if($parts['key'] == 'hasSaddle' && $parts['value'] == '1')
            { 
                $saddlePrice = 1;  // check weather to add shadel price or not
            }
            else if($parts['key'] == 'saddleFinish' && $parts['value'] == 'finished')
            {
                $saddleFinishPrice = 50;  // add 50 USD on current
            }
            else if($parts['key'] == 'hasElongatePanel' && $parts['value'] =='true')
            {
                $addonPrice += 50;  // add 50 USD on current
            }
            else if($parts['key'] == 'hasJambBracket' && $parts['value'] =='true')
            {
                $addonPrice += 10;  // add 10 USD on current
            }
            else if($parts['key'] == 'handle' && $parts['value'] =='premium')
            {
                $addonPrice += 5;  // add 5 USD on current
            }
        }

        $price = str_replace( ',', '', $price[0]) + $addonPrice + ($saddleFinishPrice * $saddlePrice);

        return number_format($price,2);
    }
        return FALSE;
    }
}
