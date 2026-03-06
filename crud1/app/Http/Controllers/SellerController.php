<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class SellerController extends Controller
{
    //

    function list()
    {

        // return Seller::all();
        return Seller::find(2)->productData;
    }

    function manyToOne()
    {
        // return Product::all();
        $data = Product::with('seller')->get();
        return $data;
    }

    // Route model binding
    function index(Product $key)
    {
        // return $key;
        return $key->all();
    }
    function productData()
    {
        $totalProduct = 20;
        return Blade::render('<h1> {{$total}} Product list</h1>', ['total' => $totalProduct]);
    }
}
