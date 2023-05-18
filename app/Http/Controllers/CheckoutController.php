<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
    //
    public function login_checkout()
    {
        # code...
        return view('checkout.login_checkout');
    }
}
