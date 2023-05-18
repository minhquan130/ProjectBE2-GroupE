@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Sản Phẩm
                </header>
                <button class="btn btn-sm " style="background: red; margin: 20px"><a href="{{ asset('/all-product') }}" style="color: white; font-weight: bold;">Quay Lại</a></button>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ asset('save-product') }}" method="post" enctype="multipart/form-data"> 
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá Sản Phẩm</label>
                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh Mục Sản Phẩm</label>
                            <select name="product_cate" id="" class="form-control input-sm m-bot15">
                                @foreach ($cate_product as $item)
                                    <option value="{{$item->id_category}}">{{$item->name_type}}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô Tả Sản Phẩm</label>
                            <textarea style="resize: none" class="form-control" name="product_desc" id="" rows="8" placeholder="Mô tả Sản Phẩm"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội Dung Sản Phẩm</label>
                            <textarea style="resize: none" class="form-control" name="product_content" id="" rows="8" placeholder="Nội Dung Sản Phẩm"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Trạng Thái</label>
                            <select name="product_status" id="" class="form-control input-sm m-bot15">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Chọn Ảnh</label>
                            <input type="file" name="product_image" id="exampleInputFile">
                        </div>
                        <button type="submit" name="category_submit" class="btn btn-info">Thêm Sản Phẩm</button>
                    </form>
                    </div>
                </div>
            </section>

    </div>
</div>  
@endsection