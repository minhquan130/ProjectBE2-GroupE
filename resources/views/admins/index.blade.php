<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Mobile Admin</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="./images/logo.png" type="image/icon type">
        <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-responsive.min.css') }} " />
        <link rel="stylesheet" href="{{ asset('admin/css/uniform.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/css/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/css/matrix-style.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/css/matrix-media.css') }}" />
        <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
        <link
            href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800'
            rel='stylesheet' type='text/css'>
        <style type="text/css">
        ul.pagination {
            list-style: none;
            float: right;
        }

        ul.pagination li.active {
            font-weight: bold
        }

        ul.pagination li {
            display: flex;
            padding: 10px
        }
    </style>
    </head>

    <body>
        <!--Header-part-->
        <div id="header">
            <h1><a href="#"><img src="./images/logo.png" alt=""></a></h1>
        </div>
        <!--close-Header-part-->
        <!--top-Header-menu-->
        <div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav">
                <li class="dropdown" id="profile-messages"><a title="" href="#"
                        data-toggle="dropdown"
                        data-target="#profile-messages" class="dropdown-toggle"><i
                            class="icon icon-user"></i> <span
                            class="text">Welcome Super Admin</span><b
                            class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.html"><i class="icon-key"></i> Log
                                Out</a></li>
                    </ul>
                </li>
                <li class="dropdown" id="menu-messages"><a href="#"
                        data-toggle="dropdown" data-target="#menu-messages"
                        class="dropdown-toggle"><i class="icon icon-envelope"></i>
                        <span class="text">Messages</span> <span
                            class="label label-important">5</span> <b
                            class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#"><i
                                    class="icon-plus"></i> new message</a></li>
                        <li class="divider"></li>
                        <li><a class="sInbox" title="" href="#"><i
                                    class="icon-envelope"></i> inbox</a></li>
                        <li class="divider"></li>
                        <li><a class="sOutbox" title="" href="#"><i
                                    class="icon-arrow-up"></i> outbox</a></li>
                        <li class="divider"></li>
                        <li><a class="sTrash" title="" href="#"><i
                                    class="icon-trash"></i> trash</a></li>
                    </ul>
                </li>
                <li class=""><a title="" href="#"><i class="icon icon-cog"></i>
                        <span class="text">Settings</span></a></li>
                <li class=""><a title="" href="#"><i class="icon
                            icon-share-alt"></i> <span class="text">Logout</span></a>
                </li>
            </ul>
        </div>
        <!--start-top-serch-->
        <div id="search">
            <form action="result.html" method="get">
                <input type="text" placeholder="Search here..." />
                <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
            </form>  
        </div>
        <!--close-top-serch-->
        <!--sidebar-menu-->
        <div id="sidebar"> <a href="#" class="visible-phone"><i class="icon
                    icon-th"></i>Tables</a>
            <ul>
                <li><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a>
                </li>
                <li> <a href="manufactures.html"><i class="icon icon-th-list"></i>
                        <span>Manufactures</span></a></li>
                <li> <a href="protypes.html"><i class="icon icon-th-list"></i>
                        <span>Product type</span></a></li>
                <li> <a href="users.html"><i class="icon icon-th-list"></i>
                        <span>Users</span></a></li>

            </ul>
        </div> <!-- BEGIN CONTENT -->
        <div id="content">
            <div id="content-header">
                <div id="breadcrumb"> <a href="index.html" title="Go to Home"
                        class="tip-bottom current"><i
                            class="icon-home"></i> Home</a></div>
                <h1>Manage Products</h1>
            </div>
            <div class="container-fluid">
                <hr>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"><a
                                        href="form.html"> <i class="icon-plus"></i>
                                    </a></span>
                                <h5>Products</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <table class="table table-bordered
                                    table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Manufactures</th>
                                            <th>Product type</th>
                                            <th>Description</th>
                                            <th>Price (VND)</th>
                                            <th>Feature</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td width="250">
                                                <img
                                                    src="./images/lenovo-phab-2gb-400x460-400x460.png"
                                                    />
                                            </td>
                                            <td>Máy tính bảng Lenovo Phab 2GB</td>
                                            <td>SamSung</td>
                                            <td>Tablet</td>
                                            <td>Bút S-pen giúp Galaxy Tab A Plus
                                                trở thành 1 trợ thủ đắc lực cho
                                                người dùng
                                                văn p...</td>
                                            <td>4,490,000 VND</td>
                                            <td>1</td>
                                            <td>2016-04-29 00:00:00</td>
                                            <td>
                                                <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                                <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td width="250">
                                                <img
                                                    src="./images/samsung-galaxy-tab-a-70-400x460.png"
                                                    />
                                            </td>
                                            <td>Máy tính bảng Samsung Galaxy Tab
                                                A6 7.0</td>
                                            <td>SamSung</td>
                                            <td>Tablet</td>
                                            <td>Bút S-pen giúp Galaxy Tab A Plus
                                                trở thành 1 trợ thủ đắc lực cho
                                                người dùng
                                                văn p...</td>
                                            <td>4,490,000 VND</td>
                                            <td>1</td>
                                            <td>2016-04-29 00:00:00</td>
                                            <td>
                                                <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                                <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td width="250">
                                                <img
                                                    src="./images/samsung-galaxy-tab-a-plus-97-sm-p555-n-190x190.jpg"
                                                    />
                                            </td>
                                            <td>Galaxy Tab S2 8</td>
                                            <td>SamSung</td>
                                            <td>Tablet</td>
                                            <td>Bút S-pen giúp Galaxy Tab A Plus
                                                trở thành 1 trợ thủ đắc lực cho
                                                người dùng
                                                văn p...</td>
                                            <td>9,990,000 VND</td>
                                            <td>1</td>
                                            <td>2016-04-29 00:00:00</td>
                                            <td>
                                                <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                                <a href="#" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td width="250">
                                                <img
                                                    src="./images/samsung-galaxy-tab-a-plus-97-sm-p555-n-190x190.jpg"
                                                    />
                                            </td>
                                            <td>Galaxy Tab A 9.7</td>
                                            <td>SamSung</td>
                                            <td>Tablet</td>
                                            <td>Bút S-pen giúp Galaxy Tab A Plus
                                                trở thành 1 trợ thủ đắc lực cho
                                                người dùng
                                                văn p...</td>
                                            <td>7,990,000 VND</td>
                                            <td>1</td>
                                            <td>2016-04-29 00:00:00</td>
                                            <td>
                                                <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                                <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td width="250">
                                                <img
                                                    src="./images/ipad-pro-wifi-cellular-128gb-300-200x200.jpg"
                                                    />
                                            </td>
                                            <td>iPad Pro wifi 32GB</td>
                                            <td>Apple</td>
                                            <td>Tablet</td>
                                            <td>iPad Pro được trang bị màn hình
                                                12.9 inch, lớn nhất từ trước đến
                                                nay đối
                                                vớ...</td>
                                            <td>19,999,000 VND</td>
                                            <td>1</td>
                                            <td>2016-04-28 00:00:00</td>
                                            <td>
                                                <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                                <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td width="250">
                                                <img
                                                    src="./images/ipad-pro-wifi-cellular-128gb-300-200x200.jpg"
                                                    />
                                            </td>
                                            <td>iPad Pro 3G 128GB</td>
                                            <td>Apple</td>
                                            <td>Tablet</td>
                                            <td>iPad Pro được trang bị màn hình
                                                12.9 inch, lớn nhất từ trước đến
                                                nay đối
                                                vớ...</td>
                                            <td>26,999,000 VND</td>
                                            <td>1</td>
                                            <td>2016-04-29 00:00:00</td>
                                            <td>
                                                <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                                <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td width="250">
                                                <img
                                                    src="./images/samsung-galaxy-s6-edge-plus-400x533.png"
                                                    />
                                            </td>
                                            <td>Điện thoại Samsung Galaxy S6
                                                32GB</td>
                                            <td>SamSung</td>
                                            <td>Cellphone</td>
                                            <td>Màn hình: Quad HD, 5.7", 1440 x
                                                2560 pixels
                                                Camera sau: 16 MP, Quay phim 4K
                                                2160p@30fps
                                                Camera t...</td>
                                            <td>14,500,000 VND</td>
                                            <td>1</td>
                                            <td>2016-01-08 00:00:00</td>
                                            <td>
                                                <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                                <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td width="250">
                                                <img
                                                    src="./images/samsung-galaxy-s6-edge-plus-400x533.png"
                                                    />
                                            </td>
                                            <td>Điện thoại Samsung Galaxy S6
                                                Edge 32GB</td>
                                            <td>SamSung</td>
                                            <td>Cellphone</td>
                                            <td>Màn hình: Quad HD, 5.7", 1440 x
                                                2560 pixels
                                                Camera sau: 16 MP, Quay phim 4K
                                                2160p@30fps
                                                Camera t...</td>
                                            <td>17,500,000 VND</td>
                                            <td>0</td>
                                            <td>2016-01-04 00:00:00</td>
                                            <td>
                                                <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                                <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td width="250">
                                                <img
                                                    src="./images/samsung-galaxy-s6-edge-plus-400x533.png"
                                                    />
                                            </td>
                                            <td>Điện thoại Samsung Galaxy Note 5</td>
                                            <td>SamSung</td>
                                            <td>Cellphone</td>
                                            <td>Màn hình: Quad HD, 5.7", 1440 x
                                                2560 pixels
                                                Camera sau: 16 MP, Quay phim 4K
                                                2160p@30fps
                                                Camera t...</td>
                                            <td>18,000,000 VND</td>
                                            <td>0</td>
                                            <td>2016-01-04 00:00:00</td>
                                            <td>
                                                <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                                <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td width="250">
                                                <img
                                                    src="./images/samsung-galaxy-s6-edge-plus-400x533.png"
                                                    />
                                            </td>
                                            <td>Điện thoại Samsung Galaxy S6
                                                Edge 64GB</td>
                                            <td>SamSung</td>
                                            <td>Cellphone</td>
                                            <td>Màn hình: Quad HD, 5.7", 1440 x
                                                2560 pixels
                                                Camera sau: 16 MP, Quay phim 4K
                                                2160p@30fps
                                                Camera t...</td>
                                            <td>18,500,000 VND</td>
                                            <td>0</td>
                                            <td>2016-01-05 00:00:00</td>
                                            <td>
                                                <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                                <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row" style="margin-left: 18px;">
                                    <ul class="pagination">
                                        <li class="active"><a href="">1</a>
                                        </li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->
        <div class="row-fluid">
            <div id="footer" class="span12"> 2017 &copy; TDC - Lập trình web 1</div>
        </div>
        <!--end-Footer-part-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.ui.custom.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.uniform.js"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/matrix.js"></script>
        <script src="js/matrix.tables.js"></script>
    </body>

</html>