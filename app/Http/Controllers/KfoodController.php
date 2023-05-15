<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\Food;
use App\Models\Cart;
use DB;

class KfoodController extends Controller
{
    public function index()
    {
        
         # code...
         $foods = Food::all();
         $index = true;
         $types = DanhMuc::all();
         // dd($foods);
         return view('index', [
             'foods' => $foods,
             'index' => $index,
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
        # code...
        
        $carts = DB::select('SELECT * FROM food, carts WHERE food.id = carts.id');
        $cart = true;
        $total = 0;
        $count = 0;
        // dd($foods);
        return view('cart', [
            'carts' => $carts,
            'cart' => $cart,
            'total' => $total,
            'count' => $count,
        ]);
    }
}
