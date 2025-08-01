<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

     public function index()
    {
        if (Auth::check() && Auth::user()->is_admin) {
            $categories = Category::all();
            return view('admin_home', ['categories' => $categories]);
        } else {
            $products = Product::all();
            return view('user_home', ['products' => $products]);
        }
    }
}
