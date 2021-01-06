<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Device;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $banners = Banner::all();
        return view('products.index', compact('products', 'banners'));
    }

    public function show(Product $product)
    {
        $devices = Device::all();
        return view('products.show', compact('product', 'devices'));
    }
}
