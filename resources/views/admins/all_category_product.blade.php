@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Danh Mục Sản Phẩm
      </div>
      <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
          <button class="btn btn-sm " style="background: blue;"><a href="{{ asset('/add-category-product') }}" style="color: white; font-weight: bold;">Thêm Mới Danh Mục +</a></button>                
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
              <th>Tên Danh Mục</th>
              <th>ID</th>
              <th>Img</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($all_category_product as $item) 
              <tr>
                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                <td>{{ $item->name_type }}</td>
                <td>{{ $item->id_category }}</td>
                <td><img src="uploads/category/{{ $item->img_category }}" alt="category" style="height: 100px; width: 100px"></td>
                <td>
                  <a href="{{ ('edit-category-product/'.$item->id_category) }}" ui-toggle-class="" style="font-size: 20px;">
                    <i class="fa fa-pencil-square-o text-success text-active"></i>
                  </a>

                  <a onclick="return confirm('Bạn Có Muốn Xóa Danh Mục')" href="{{ ('delete-category-product/'.$item->id_category) }}" ui-toggle-class="" style="font-size: 20px;">
                    <i class="fa fa-times text-danger text"></i>
                  </a>
                </td>
              </tr>
            @endforeach
            {{-- <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>Avatar system</td>
              <td>15c</td>
              <td>Jul 15, 2013</td>
              <td>
                <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>Throwdown</td>
              <td>4c</td>
              <td>Jul 11, 2013</td>
              <td>
                <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>Idrawfast</td>
              <td>4c</td>
              <td>Jul 7, 2013</td>
              <td>
                <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>Formasa</td>
              <td>8c</td>
              <td>Jul 3, 2013</td>
              <td>
                <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>Avatar system</td>
              <td>15c</td>
              <td>Jul 2, 2013</td>
              <td>
                <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>Videodown</td>
              <td>4c</td>
              <td>Jul 1, 2013</td>
              <td>
                <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr> --}}
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