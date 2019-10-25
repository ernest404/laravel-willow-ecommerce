<header class="theme-main-header2 fixed">
    <div class="container">
        <a href="{{ url('/') }}" class=" logo float-left "><img height="50" width="80" src="{{asset('img/logo.png')}}" alt="Logo"><small style="font-weight:bolder; color: white;">willow<sub><small>TM</small></sub></small></a>
        
        <!-- ========================= Theme Feature Page Menu ======================= -->
        <nav class="navbar float-right theme-main-menu one-page-menu">
           {{--  <!-- Brand and toggle get grouped for better mobile display -->  --}}
           <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               Menu
               <i class="fa fa-bars" aria-hidden="true"></i>
             </button>
           </div>
           {{--  <!-- Collect the nav links, forms, and other content for toggling -->  --}}
           <div class="collapse navbar-collapse" id="navbar-collapse-1" style="width: 100%;">
             <ul class="nav navbar-nav">
                   <li ><a href="{{ url('/') }}">HOME</a></li>
            
            <li>
                <form class="header-search-form">
                    <input style="opacity: 0.5" type="text" placeholder="Search  ....">
                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </li>
                
                
                
                
                <li><a href="#contact-section">About us</a></li>


                @guest
                <li><a href="{{route('login')}}"><small>login</small></a></li>
                @if (Route::has('register'))
                <li><a href="{{ route('register') }}"><small>register</small> </a></li>
                @endif
            @else

            <li class="dropdown-holder" style="z-index: 100;">
                    <a  href="#">
                        <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="sub-menu">
                        <li>
                                <a class="tran3s"  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>
     
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                        </li>
                    </ul>      
                </li>
            @endguest
                <li class="checkout">
                        <a href="{{route('cart.index')}}">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span id="checkout_items" class="checkout_items">{{Cart::count()}}</span>
                        </a>
                </li>
                
             </ul>
           </div><!-- /.navbar-collapse -->
        </nav> <!-- /.theme-feature-menu -->
    </div>
</header> <!-- /.theme-main-header -->