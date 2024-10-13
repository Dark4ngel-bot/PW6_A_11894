<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(): Factory|View{
        $products = Product::get();

        return view(view: 'product', data: compact(var_name: 'products'));
    }
};
