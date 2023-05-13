<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KfoodController extends Controller
{
    public function index()
    {
        
        return view('index')->with('');
    }

    public function menu()
    {
        return view('menu');
    }

    public function about()
    {
        return view('about');
    }

    public function book()
    {
        return view('book');
    }

    public function cart()
    {
        return view('cart');
    }
}
