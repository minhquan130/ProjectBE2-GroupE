<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
    //
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

    public function all_product()
    {
        # code...
        $this->AuthLogin();
        $all_product = DB::table('products')->join('danh_mucs', 'danh_mucs.id_category', '=', 'products.category_id')->orderby('product_id', 'desc')->get();
        $manager_product = view('admins.all_product')->with('all_product', $all_product);
        return view('admin_layout')->with('admins.all_product', $manager_product);
    }

    public function add_product()
    {
        # code...
        $this->AuthLogin();
        $cate_product = DB::table('danh_mucs')->orderby('id_category', 'desc')->get();

        return view('admins.add_product')->with('cate_product', $cate_product);
    }

    public function save_product(Request $request)
    {
        # code...
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['category_id'] = $request->product_cate;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['product_price'] = $request->product_price;
        $data['product_status'] = $request->product_status;

        // dd($get_image);
        if ($request->has('product_image')) {
            # code...
            $file = $request->product_image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads/product'), $file_name);
            // $new_image = $get_image->getClientOriginalName();
            // $get_image->move(public_path('uploads'), $new_image);
            $data['product_image'] = $file_name;
            DB::table('products')->insert($data);
            Session::put('message1', 'Thêm sản phẩm thành công');
            return redirect::to('/add-product');
        }
        $data['product_image'] = "";
        DB::table('products')->insert($data);
        Session::put('message1', 'Thêm sản phẩm không thành công');
        return redirect::to('/add-product');
    }

    public function edit_product($product_id)
    {
        # code...
        $this->AuthLogin();
        $edit_product = DB::table('products')->where('product_id', $product_id)->get();
        $cate_product = DB::table('danh_mucs')->orderby('id_category', 'desc')->get();
        $manager_product = view('admins.edit_product')->with('edit_product', $edit_product)->with('cate_product', $cate_product);
        return view('admin_layout')->with('admins.edit_product', $manager_product);
    }

    public function update_product(Request $request, $product_id)
    {
        # code...
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['category_id'] = $request->product_cate;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['product_status'] = $request->product_status;

        if ($request->has('product_image')) {
            # code...
            $file = $request->product_image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads/product'), $file_name);
            // $new_image = $get_image->getClientOriginalName();
            // $get_image->move(public_path('uploads'), $new_image);
            $data['product_image'] = $file_name;
            DB::table('products')->where('product_id' ,$product_id)->update($data);
            Session::put('message1', 'Thêm danh mục thành công');
            return redirect::to('/all-product');
        }
        DB::table('products')->where('product_id' ,$product_id)->update($data);
        return redirect::to('/all-product');
    }

    public function delete_product($product_id)
    {
        # code...
        $this->AuthLogin();
        DB::table('products')->where('product_id', $product_id)->delete();
        return redirect::to('/all-product');
    }
}
