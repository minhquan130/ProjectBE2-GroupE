<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function AuthLogin()
    {
        # code...
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admins')->send();
        }
    }
    public function index()
    {
        return view('admin_login');
    }

    public function show_dashboard()
    {
        # code...
        $this->AuthLogin();
        return view('admins.dashboard');
    }

    public function dashboard(Request $request)
    {
        # code...
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message', '(*) Tài khoản không đúng hoặc mật khẩu bị sai!');
            return Redirect::to('/admins');
        }
    }

    public function logout()
    {
        $this->AuthLogin();
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admins');
    }
}
