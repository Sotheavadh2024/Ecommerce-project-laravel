<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Check if the user is an admin
        if (Auth::user()->is_admin != 1) {
            // If not an admin, redirect to the welcome page with a message
            return redirect('/')->with('error', 'You do not have access to the dashboard');
        }

        // If admin, show the dashboard
        return view('home');
    }
}
