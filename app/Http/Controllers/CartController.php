<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, Product $product)
    {
        // Initialize the cart in session if it doesn't exist
        $cart = session()->get('cart', []);

        // Add or update the product in the cart
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1,
            ];
        }

        // Save the cart back to the session
        session()->put('cart', $cart);

        // Redirect back with success message
        return redirect()->route('home')->with('success', 'Product added to cart!');
    }

  public function index()
    {
        // Retrieve the cart from session
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }
}