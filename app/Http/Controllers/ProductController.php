<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderByDesc("created_at")->paginate(10);
        return response()->json([
            "status" => 200,
            "message" => $products,
        ]);
    }

    public function product($product_id)
    {
        $product = Product::where("id", $product_id)->first();
        return response()->json([
            "status" => 200,
            "message" => $product,
        ]);
    }

    public function specific($numbers)
    {
        $products = Product::all()->random($numbers);
        return response()->json([
            "status" => 200,
            "message" => $products,
        ]);
    }
}
