<!-- HEADER DESKTOP-->
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
               <div class="form-header"></div>
                <div class="header-button">
                    <div class="noti-wrap">
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-comment-more"></i>
                            <span class="quantity">1</span>
                            <div class="mess-dropdown js-dropdown">
                                <div class="mess__title">
                                    <p>You have 2 news message</p>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                    </div>
                                    <div class="content">
                                        <h6>Michelle Moreno</h6>
                                        <p>Have sent a photo</p>
                                        <span class="time">3 min ago</span>
                                    </div>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                    </div>
                                    <div class="content">
                                        <h6>Diane Myers</h6>
                                        <p>You are now connected on message</p>
                                        <span class="time">Yesterday</span>
                                    </div>
                                </div>
                                <div class="mess__footer">
                                    <a href="#">View all messages</a>
                                </div>
                            </div>
                        </div>
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-email"></i>
                            <span class="quantity">1</span>
                            <div class="email-dropdown js-dropdown">
                                <div class="email__title">
                                    <p>You have 3 New Emails</p>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, 3 min ago</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, Yesterday</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, April 12,,2018</span>
                                    </div>
                                </div>
                                <div class="email__footer">
                                    <a href="#">See all emails</a>
                                </div>
                            </div>
                        </div>
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity">3</span>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-wrap">
                            @guest('admin')
                            <div class="account-item clearfix js-item-menu">
                                <a class="js-acc-btn" href="{{route('admin.login')}}">{{ ucfirst(config('multiauth.prefix')) }} Login</a>
                            </div>
                            @else
                            <div class="account-item clearfix js-item-menu">
                                <div class="image">
                                    <img src="{{asset('images/avatar-01.png')}}" alt="" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{ auth('admin')->user()->name }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{asset('images/avatar-01.png')}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{ auth('admin')->user()->name }}</a>
                                            </h5>
                                            <span class="email">willow@gmail.com.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        @admin('super')
                                    
                                        <div class="account-dropdown__item">
                                            <a class="dropdown-item" href="{{ route('admin.show') }}">{{ ucfirst(config('multiauth.prefix')) }}</a>
                                            {{-- <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a> --}}
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a class="dropdown-item" href="{{ route('admin.roles') }}">Roles</a>
                                            {{-- <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a> --}}
                                        </div>
                                        @endadmin
                                     
                                        <div class="account-dropdown__item">
                                                <a class="dropdown-item" href="{{ url('/') }}">Main Site</a>
                                            {{-- <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a> --}}
                                        </div>
                                        <div class="account-dropdown__item">
                                                <a class="dropdown-item" href="{{ route('admin.password.change') }}">Change Password</a>
                                                {{-- <a href="#">
                                                    <i class="zmdi zmdi-money-box"></i>Billing</a> --}}
                                        </div>
                                        
                                    
                                    <div class="account-dropdown__footer">
                                            <a class="dropdown-item" href="/admin/logout" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i>
                               {{ __('Logout') }}
                           </a>
                           <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                                        {{-- <a href="#">
                                            <i class="zmdi zmdi-power"></i>Logout</a> --}}
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    @endguest
            </div>
                </div>
            </div>
        </div>
    </div>
</header>