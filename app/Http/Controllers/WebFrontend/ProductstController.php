<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductstController extends Controller
{
    public function productsPage($id, $shop_id)
    {
        return "This is Products Page for  product_id " . $id . " For Shop_id " . $shop_id;
    }
    public function productList()
    {
        $product_lists = "Hello Product";
        return view('products', [
            "products" => $product_lists,
        ]);
    }
}
