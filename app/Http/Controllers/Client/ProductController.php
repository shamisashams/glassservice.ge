<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(string $locale,  $id = null) {
        $productPage = Page::where("key", "product")->firstOrFail();
//        $categories = Category::with(["product"=>function ($query) {
//            $query->where('status', 1);
//        }])->where("status", 1)->get();
        $categories = Category::whereHas("product", function (Builder $query){
            $query->where("status", 1);
        })->where("status", 1)->get();
        if ($id){
            $currentCategory = Category::with(["product"=>function ($query) {
                $query->where('status', 1);
            }])->where(["status" => 1, "id" => $id])->firstOrFail();
        }else{
            $currentCategory = Category::with(["product"=>function ($query) {
                $query->where('status', 1);
            }])->where("status", 1)->firstOrFail();
        }
//        dd($currentCategory);
        return view("client.pages.product.index", [
            "productPage" => $productPage,
            "categories" => $categories,
            "currentCategory"=>$currentCategory
        ]);
    }

    public function show(string $locale,  $id) {
//        $category = Category::with(["product"=>function($query) use ($id) {
//            $query->where(["id"=>$id]);
//        }])->where("status", 1)->get();

        $product = Product::where(["status"=>1, "id" => $id])->whereHas("category", function (Builder $query){
            $query->where("status", 1);
        })->firstOrFail();
//        dd($product);
        return view("client.pages.product_detail.index", [
            "product" => $product
        ]);
    }

//    public function category(string $locale,  $id = null) {
//        $productPage = Page::where("key", "product")->firstOrFail();
//        $categories = Category::with(["product"=>function ($query) {
//            $query->where('status', 1);
//        }])->where("status", 1)->get();
//        $currentCategory = Category::with(["product"=>function ($query) {
//            $query->where('status', 1);
//        }])->where(["status" => 1, "id" => $id])->firstOrFail();
//        return view("client.pages.product.index", [
//            "productPage" => $productPage,
//            "categories" => $categories,
//            "currentCategory"=>$currentCategory
//        ]);
//    }




}
