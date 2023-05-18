<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class KfoodController extends Controller
{
    public function index()
    {
        
         # code...
         $foods = DB::select('SELECT * FROM `danh_mucs`, `products` WHERE `danh_mucs`.`id_category` = `products`.`category_id` LIMIT 9');
         $index = true;
         $types = DB::table('danh_mucs')->get();
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
        $foods = DB::select('SELECT * FROM `danh_mucs`, `products` WHERE `danh_mucs`.`id_category` = `products`.`category_id`');
        $menu = true;
        $types = DB::table('danh_mucs')->get();
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
        
        $carts = DB::select('SELECT * FROM products, carts WHERE products.product_id = carts.id');
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

    public function add_or_edit_cart($cart_id, $page)
    {
        # code...
        $cart = DB::table('carts')->where('carts.id', $cart_id)->first();
        $product = DB::table('products')->where('product_id', $cart_id)->get();
        // dd($cart);
        // dd((integer)$product[0]->product_price);
        // dd($page);
        $data = array();
        if(!isset($cart)){
        // dd($product[0]->product_id);
        $data['id'] = $product[0]->product_id;
        $data['count'] = 1;
        $data['total'] = $product[0]->product_price;
        $new_cart = DB::table('carts')->insert($data);
        if($page == "menu"){
            return redirect::to('/menu');
        }
        return redirect::to('/');
        }else{
            $data['count'] = $cart->count + 1;
            $data['total'] = $cart->total + (integer)$product[0]->product_price;
            $new_cart = DB::table('carts')->where('id', $cart_id)->update($data);
            if($page == "menu"){
                return redirect::to('/menu');
            }
            return redirect::to('/');
        }
        
    }

    public function delete_cart($cart_id)
    {
        # code...
        DB::table('carts')->where('cart_id', $cart_id)->delete();
        return redirect::to('/cart');
    }

    public function edit_cart(Request $request, $cart_id)
    {
        # code...
        // dd($request->qty);
        $product = DB::table('products')->where('product_id', $request->product_id)->first();
        // dd($product);
        $data = array();
        // $date['id'] = $request->product_id;
        $data['count'] = $request->qty;
        $data['total'] = $request->qty * (integer)$product->product_price;
        // dd($data);
        $new_cart = DB::table('carts')->where('cart_id', $cart_id)->update($data);
        return redirect::to('/cart');
    }
}
