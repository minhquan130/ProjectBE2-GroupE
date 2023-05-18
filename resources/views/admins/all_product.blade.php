@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Sản Phẩm
      </div>
      <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
          <button class="btn btn-sm " style="background: blue;"><a href="{{ asset('/add-product') }}" style="color: white; font-weight: bold;">Thêm Mới Sản Phẩm +</a></button>                
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th style="width:20px;">
                <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>Tên Sản Phẩm</th>
              <th>Giá Sản Phẩm</th>
              <th>Ảnh</th>
              <th>Danh Mục</th>
              <th>Status</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($all_product as $item) 
              <tr>
                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                <td>{{ $item->product_name }}</td>
                <td>{{ number_format($item->product_price) }} VNĐ</td>
                <td><img src="uploads/product/{{ $item->product_image }}" alt="category" style="height: 100px; width: 100px"></td>
                <td>{{ $item->name_type }}</td>
                <td>{{ $item->product_status }}</td>
                <td>
                  <a href="{{ ('edit-product/'.$item->product_id) }}" ui-toggle-class="" style="font-size: 20px;">
                    <i class="fa fa-pencil-square-o text-success text-active"></i>
                  </a>

                  <a onclick="return confirm('Bạn Có Muốn Xóa Danh Mục')" href="{{ ('delete-product/'.$item->product_id) }}" ui-toggle-class="" style="font-size: 20px;">
                    <i class="fa fa-times text-danger text"></i>
                  </a>
                </td>
              </tr>
            @endforeach
           
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
          
          <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
          </div>
          <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection