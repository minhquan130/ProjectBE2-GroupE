<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\Food;

class KfoodController extends Controller
{
    public function index()
    {
        
         # code...
         $foods = Food::all();
         $menu = true;
         $types = DanhMuc::all();
         // dd($foods);
         return view('index', [
             'foods' => $foods,
             'menu' => $menu,
             'types' => $types,
         ]);
    }

    public function menu()
    {
        
        # code...
        $foods = Food::all();
        $menu = true;
        $types = DanhMuc::all();
        // dd($foods);
        return view('menu', [
            'foods' => $foods,
            'menu' => $menu,
            'types' => $types,
        ]);
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
