<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;


class FoodController extends Controller
{
    //
    public function index()
    {
        # code...
        $foods = Food::all();
        $menu = true;
        // dd($foods);
        return view('menu', [
            'foods' => $foods,
            'menu' => $menu,
        ]);
    }
}
