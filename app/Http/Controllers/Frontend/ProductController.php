<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product; //加入model路徑
use App\Models\Website;
class ProductController extends Controller
{
    public function index ()
{
    $products = Product::orderBy('id')->get();
    $website = Website::find(1);
    return view('frontend.products', compact('products', 'website'));
}
}
