<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $cats = Category::orderBy('id','ASC')->paginate();
        return view('home', compact('cats'));
    }
}