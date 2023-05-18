@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Chỉnh Sửa Sản Phẩm
                </header>
                <button class="btn btn-sm " style="background: red; margin: 20px"><a href="{{ asset('/all-product') }}" style="color: white; font-weight: bold;">Quay Lại</a></button>
                <div class="panel-body">
                    @foreach ($edit_product as $item)
                        
                    <form role="form" action="{{ asset('update-product/'.$item->product_id) }}" method="post" enctype="multipart/form-data"> 
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="" value="{{ $item->product_name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá Sản Phẩm</label>
                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ $item->product_price }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh Mục Sản Phẩm</label>
                            <select name="product_cate" id="" class="form-control input-sm m-bot15">
                                @foreach ($cate_product as $i)
                                    @if ($i->id_category == $item->category_id)
                                        <option selected value="{{$i->id_category}}">{{$i->name_type}}</option>
                                    @else
                                        <option value="{{$i->id_category}}">{{$i->name_type}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô Tả Sản Phẩm</label>
                            <textarea style="resize: none" class="form-control" name="product_desc" id="" rows="8" placeholder="Mô tả Sản Phẩm">{{ $item->product_desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội Dung Sản Phẩm</label>
                            <textarea style="resize: none" class="form-control" name="product_content" id="" rows="8" placeholder="Nội Dung Sản Phẩm">{{ $item->product_content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Trạng Thái</label>
                            <select name="product_status" id="" class="form-control input-sm m-bot15">
                                @if ($item->product_status == 0)
                                <option selected value="0">0</option>
                                <option value="1">1</option>
                                @else
                                <option value="0">0</option>
                                <option selected value="1">1</option>
                                @endif
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Chọn Ảnh</label>
                            <input type="file" name="product_image" id="exampleInputFile">
                            <img src="{{ asset('uploads/product/'.$item->product_image) }}" alt="" style="height: 200px">
                        </div>
                        <button type="submit" name="category_submit" class="btn btn-info">Chỉnh Sửa Sản Phẩm</button>
                    </form>

                    @endforeach
                    </div>
                </div>
            </section>

    </div>
</div>  
@endsection