<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopping</title>


    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/responsive.css') }}" rel="stylesheet">

    {{-- Font awesome --}}
    <script src="https://kit.fontawesome.com/750526b3dd.js" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ 'frontend/images/ico/favicon.ico' }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ 'frontend/images/ico/apple-touch-icon-144-precomposed.png' }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ 'frontend/images/ico/apple-touch-icon-114-precomposed.png' }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ 'frontend/images/ico/apple-touch-icon-72-precomposed.png' }}">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
        </div>
    </div><!--/header_top-->
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/trang-chu')}}"><span style="color: #1a202c; font-size: 3rem">E-SHOPPING</span></a>
                            </a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                    VN
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Chinese</a></li>
                                    <li><a href="#">USA</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                    VND
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Bad People</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

          <!--/header-middle-->
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                @if ($user)
                                    <li><a href="{{ route('show', $user->id) }}"><i
                                                class="fa fa-user"></i>{{ $user->name }}</a></li>
                                    <li><a href="{{ route('signout') }}"><i class="fa fa-user"></i>Logout</a></li>
                                    <li><a href="checkout.html"><i class="fa fa-crosshairs"></i>Thanh Toán</a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-cart"></i>Giỏ Hàng</a></li>
                                @else
                                    <li>
                                        @if (Session::has('alert'))
                                            <script>
                                                var alertType = "{{ Session::get('status') }}";
                                                var message = "{{ Session::get('alert') }}";
                                                alert(message);
                                            </script>
                                        @endif
                                    </li>
                                    <li><a href="{{ url('cus_login') }}"><i class="fa fa-lock"></i>Đăng Nhập</a></li>
                                    <li><a href="{{ url('cus_register') }}"><i class="fa fa-lock"></i>Đăng Ký</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->
            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang Chủ</a></li>
                                    <li class="dropdown"><a href="#">Cửa Hàng<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="#">Điện Thoại</a></li>
                                            <li><a href="#">Máy Tính</a></li>
                                            <li><a href="#">Máy Tính Bảng</a></li>
                                            <li><a href="#">Laptop</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Khuyến Mãi</a>
                                    </li>
                                    <li><a href="#">Hàng Cũ</a></li>
                                    <li><a href="#">Liên Hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <form action="{{ url('tim-kiem') }}" method="get">
                                    <input type="text" name="keyword" placeholder="Tìm sản phẩm"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        <style type="text/css">
                            img.img.img-responsive.img-slider {
                                height: 350px;
                            }
                        </style>
                        <div class="carousel-inner">
                            @php
                                $i = 0;
                            @endphp
                            @foreach($slider as $key => $slide)
                                @php
                                    $i++;
                                @endphp
                                <div class="item {{$i==1 ? 'active' : '' }}">
                                    <div class="col-sm-12">
                                        <img alt="{{$slide->slider_desc}}" src="{{asset('public/uploads/slider/'.$slide->slider_image)}}" height="200" width="100%" class="img img-responsive img-slider">
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh Mục</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Hãng
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Apple</a></li>
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Oppo</a></li>
                                            <li><a href="#">Huawei</a></li>
                                            <li><a href="#">Nokia</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Điện Thoại</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Máy Tính Bảng</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Laptop</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Máy Tính Bàn</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Phụ Kiện</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Hàng Cũ</a></h4>
                                </div>
                            </div>

                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>Apple</a></li>
                                    <li><a href="#"> <span class="pull-right">(56)</span>Samsung</a></li>
                                    <li><a href="#"> <span class="pull-right">(27)</span>Oppo</a></li>
                                    <li><a href="#"> <span class="pull-right">(32)</span>Nokia</a></li>
                                    <li><a href="#"> <span class="pull-right">(5)</span>MSI</a></li>
                                    <li><a href="#"> <span class="pull-right">(9)</span>ASUS</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>ACER</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{('frontend/images/home/shipping.jpg')}}" alt=""/>
                        </div><!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

    <footer id="footer"><!--Footer-->

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Tổng đài hỗ trợ miễn phí</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Gọi mua hàng 1800.2097 (7h30 - 22h00)</a></li>
                                <li><a href="#">Gọi khiếu nại 1800.2063 (8h00 - 21h30)</a></li>
                                <li><a href="#">Gọi bảo hành 1800.2064 (8h00 - 21h00)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Thông tin</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Mua hàng và thanh toán Online</a></li>
                                <li><a href="#">Mua hàng trả góp Online</a></li>
                                <li><a href="#">Tra thông tin đơn hàng</a></li>
                                <li><a href="#">Tra điểm Smember</a></li>
                                <li><a href="#">Xem ưu đãi Smember</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Chính Sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Tra thông tin bảo hành</a></li>
                                <li><a href="#">Tra cứu hoá đơn điện tử</a></li>
                                <li><a href="#">Thông tin hoá đơn mua hàng</a></li>
                                <li><a href="#">Trung tâm bảo hành chính hãng</a></li>
                                <li><a href="#">Quy định về việc sao lưu dữ liệu</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Dịch vụ và thông tin khác</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Khách hàng doanh nghiệp (B2B)</a></li>
                                <li><a href="#">Ưu đãi thanh toán</a></li>
                                <li><a href="#">Quy chế hoạt động</a></li>
                                <li><a href="#">Chính sách Bảo hành</a></li>
                                <li><a href="#">Liên hệ hợp tác kinh doanh</a></li>
                                <li><a href="#">Tuyển dụng</a></li>
                                <li><a href="#">Dịch vụ bảo hành điện thoại</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Muốn được tư vấn, hãy để lại mail</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Email" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">TDC - 2023</p>
                    <p class="pull-right"><span>Nhóm E</span></p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->



    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
