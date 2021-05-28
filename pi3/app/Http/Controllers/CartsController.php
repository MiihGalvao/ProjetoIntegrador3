<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartsController extends Controller
{
    public function add(Product $product){
        dd($product)
    }
}
