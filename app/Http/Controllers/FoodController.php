<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\DanhMuc;


class FoodController extends Controller
{
    //
    public function index()
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
}
