<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class DanhMucController extends Controller
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

    public function all_category_product()
    {
        # code...
        $this->AuthLogin();
        $all_category_productuct = DB::table('danh_mucs')->get();
        $manager_category_product = view('admins.all_category_product')->with('all_category_product', $all_category_productuct);
        return view('admin_layout')->with('admins.all_category_product', $manager_category_product);
    }

    public function add_category_product()
    {
        # code...
        $this->AuthLogin();
        return view('admins.add_category_product');
    }

    public function save_category_product(Request $request)
    {
        # code...
        $this->AuthLogin();
        $data = array();
        $data['name_type'] = $request->category_name;
        if ($request->has('img_category')) {
            # code...
            $file = $request->img_category;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads/category'), $file_name);
            // $new_image = $get_image->getClientOriginalName();
            // $get_image->move(public_path('uploads'), $new_image);
            $data['img_category'] = $file_name;
            DB::table('danh_mucs')->insert($data);
            Session::put('message1', 'Thêm danh mục thành công');
            return redirect::to('/add-category-product');
        }

        DB::table('danh_mucs')->insert($data);
        Session::put('message1', 'Thêm danh mục thành công');
        return redirect::to('/add-category-product');
    }

    public function edit_category_product($category_id)
    {
        # code...
        $this->AuthLogin();
        $edit_category_product = DB::table('danh_mucs')->where('id_category', $category_id)->get();
        $manager_category_product = view('admins.edit_category_product')->with('edit_category_product', $edit_category_product);
        return view('admin_layout')->with('admins.edit_category_product', $manager_category_product);
    }

    public function update_category_product(Request $request, $category_id)
    {
        # code...
        $this->AuthLogin();
        $data = array();
        $data['name_type'] = $request->category_name;

        if ($request->has('img_category')) {
            # code...
            $file = $request->img_category;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads/category'), $file_name);
            // $new_image = $get_image->getClientOriginalName();
            // $get_image->move(public_path('uploads'), $new_image);
            $data['img_category'] = $file_name;
            DB::table('danh_mucs')->where('id_category', $category_id)->update($data);
            Session::put('message1', 'Thêm danh mục thành công');
            return redirect::to('/all-category-product');
        }
        DB::table('danh_mucs')->where('id_category', $category_id)->update($data);
        return redirect::to('/all-category-product');
    }

    public function delete_category_product($category_id)
    {
        # code...
        $this->AuthLogin();
        DB::table('danh_mucs')->where('id_category', $category_id)->delete();
        return redirect::to('/all-category-product');
    }
}
