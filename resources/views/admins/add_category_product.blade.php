@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Danh Mục Sản Phẩm
                </header>
                <button class="btn btn-sm " style="background: red; margin: 20px"><a href="{{ asset('/all-category-product') }}" style="color: white; font-weight: bold;">Quay Lại</a></button>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ asset('save-category-product') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Danh Mục</label>
                            <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Chọn Ảnh</label>
                            <input type="file" name="img_category" id="exampleInputFile">
                        </div>
                        <button type="submit" name="category_submit" class="btn btn-info">Thêm Danh Mục</button>
                    </form>
                    </div>
                </div>
            </section>

    </div>
    {{-- <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Horizontal Forms
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-danger">Sign in</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </section>

    </div> --}}
</div>  
@endsection