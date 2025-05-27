<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Slideshow;
use Illuminate\Support\Facades\Auth;

class MyHomeController extends Controller
{
    function index()
    {
        // Check if user is authenticated
        if (Auth::check()) {
            // Check if the user is an admin
            if (Auth::user()->is_admin == 1) {
                // If admin, redirect to the home route
                return redirect()->route('home');
            }
            // If authenticated but not admin, show the public home page
            // This allows non-admin users to see the public page after login
        }

        // For non-authenticated users or non-admin users, show the public home page
        $slideshows = Slideshow::where('enable', 1)
            ->orderBy('ssorder')
            ->get();
        $featuredproducts = Product::where('featured', 1)->get();
        $categories = Category::all();
        $products = Product::all();

        // Get any error messages from session
        $error = session('error');

        // Use a different view for the public home page
        return view('welcome', compact('slideshows', 'featuredproducts', 'categories', 'error'));
    }
}