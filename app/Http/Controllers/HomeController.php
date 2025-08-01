<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
public function index()
    {
        // Fetch all products from the database
        $products = Product::all();
        return view('home', compact('products'));
    }
}