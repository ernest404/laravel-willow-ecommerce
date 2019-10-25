<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} {{ ucfirst(config('multiauth.prefix')) }}</title>
 <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" ></script>
    <style>
        body i {
            font-family:'FontAwesome'!important;
            }
    </style>
   
</head>

<body>
    <div id="app">
        @include('inc.admin_header')

            <div class="row">
                <div class="col-md-2">
                    <div class="sidebar content-box" style="display: block;">
                        <ul class="nav">
                            <!-- Main menu -->
                            <li class="current"><a href=""><i class="fas fa-home"></i>
                                {{ ucfirst(config('multiauth.prefix')) }} Dashboard</a></li>
                            <li class="submenu">
                                <a href="#">
                                    <i class="fas fa-align-justify"></i> Products
                                    <span class="caret pull-right"></span>
                                </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="{{route('product.index')}}">Products</a></li>
                                    <li><a href="{{route('product.create')}}">Add Product</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                    <a href="#">
                                        <i class="fas fa-align-justify"></i> Category
                                        <span class="caret pull-right"></span>
                                    </a>
                                    <!-- Sub menu -->
                                    <ul>
                                        <li><a href="{{route('category.index')}}">Categories</a></li>
                                    </ul>
                            </li>

                            <li class="submenu">
                                    <a href="#">
                                        <i class="fas fa-align-justify"></i> Address
                                        <span class="caret pull-right"></span>
                                    </a>
                                    <!-- Sub menu -->
                                    <ul>
                                        <li><a href="{{route('area.index')}}">Addresses</a></li>
                                    </ul>
                            </li>
                            
                            <li class="submenu"> 
                                 <a href="#">
                                        <i class="fas fa-align-justify"></i> Banner
                                        <span class="caret pull-right"></span>
                                 </a>
                                 <ul>
                                  <li><a href="{{ route('banner.create')}}">Add Banner</a></li>
                                  <li><a href="{{ route('banner.index')}}">View Banners</a></li>
                                </ul>
                              </li>
                        </ul>
                    </div>
                </div> <!-- ADMIN SIDE NAV-->
                <div class="col-md-10 display-area">
                    <div class="row text-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="content-box-large">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div><!--/Display area after sidenav-->
            </div>
        
        </div><!--/Page Content-->
        <script>
            $(document).ready(function () {
                $(".submenu > a").click(function (e) {
                    e.preventDefault();
                    var $li = $(this).parent("li");
                    var $ul = $(this).next("ul");
        
                    if ($li.hasClass("open")) {
                        $ul.slideUp(350);
                        $li.removeClass("open");
                    } else {
                        $(".nav > li > ul").slideUp(350);
                        $(".nav > li").removeClass("open");
                        $ul.slideDown(350);
                        $li.addClass("open");
                    }
                });
            });
        </script>
        <script>
            function colorchange(){
                document.getElementsById("nav-item").style.color="red";
            }
        </script>
</body>

</html>

