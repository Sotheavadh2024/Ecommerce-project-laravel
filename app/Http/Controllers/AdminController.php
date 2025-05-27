<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        // Apply auth middleware to all methods except login
        $this->middleware('auth')->except('login');

        // Apply is_admin middleware to index method
        $this->middleware('is_admin')->only('index');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function login()
    {
        // If already logged in and is admin, redirect to admin dashboard
        if (Auth::check() && Auth::user()->is_admin == 1) {
            return redirect('/admins');
        }

        // If logged in but not admin, redirect to home
        if (Auth::check()) {
            return redirect('/');
        }

        return view('auth.login');
    }
}