<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
                    <div class="bookmark-input search-input">
                        <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                        <ul class="search-list search-list-bookmark"></ul>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
                                <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon
                                    @if(App::isLocale('ar')) flag-icon-sa @else flag-icon-us @endif"></i><span class="selected-language">@if(App::isLocale('ar')) عربى @else English @endif</span></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                        <a class="dropdown-item" href="{{route('dashboard.lang-en')}}" data-language="en">
                                            <i class="flag-icon flag-icon-us"></i> English
                                        </a>
                                        <a class="dropdown-item" href="{{route('dashboard.lang-ar')}}" data-language="ar">
                                            <i class="flag-icon flag-icon-sa"></i> عربى
                                        </a>

                                    </div>
                                </li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                <div class="search-input">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search">
                    <div class="search-input-close"><i data-feather="x"></i></div>
                    <ul class="search-list search-list-main"></ul>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-cart mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="shopping-cart"></i><span class="badge badge-pill badge-primary badge-up cart-item-count">6</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 mr-auto">My Cart</h4>
                            <div class="badge badge-pill badge-light-primary">4 Items</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list">
                        <div class="media align-items-center"><img class="d-block rounded mr-1" src="../../../app-assets/images/pages/eCommerce/1.png" alt="donuts" width="62">
                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> Apple watch 5</a></h6><small class="cart-item-by">By Apple</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="1">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$374.90</h5>
                            </div>
                        </div>
                        <div class="media align-items-center"><img class="d-block rounded mr-1" src="../../../app-assets/images/pages/eCommerce/7.png" alt="donuts" width="62">
                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> Google Home Mini</a></h6><small class="cart-item-by">By Google</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="3">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$129.40</h5>
                            </div>
                        </div>
                        <div class="media align-items-center"><img class="d-block rounded mr-1" src="../../../app-assets/images/pages/eCommerce/2.png" alt="donuts" width="62">
                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> iPhone 11 Pro</a></h6><small class="cart-item-by">By Apple</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="2">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$699.00</h5>
                            </div>
                        </div>
                        <div class="media align-items-center"><img class="d-block rounded mr-1" src="../../../app-assets/images/pages/eCommerce/3.png" alt="donuts" width="62">
                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> iMac Pro</a></h6><small class="cart-item-by">By Apple</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="1">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$4,999.00</h5>
                            </div>
                        </div>
                        <div class="media align-items-center"><img class="d-block rounded mr-1" src="../../../app-assets/images/pages/eCommerce/5.png" alt="donuts" width="62">
                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> MacBook Pro</a></h6><small class="cart-item-by">By Apple</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="1">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$2,999.00</h5>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown-menu-footer">
                        <div class="d-flex justify-content-between mb-1">
                            <h6 class="font-weight-bolder mb-0">Total:</h6>
                            <h6 class="text-primary font-weight-bolder mb-0">$10,999.00</h6>
                        </div><a class="btn btn-primary btn-block" href="app-ecommerce-checkout.html">Checkout</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                            <div class="badge badge-pill badge-light-primary">6 New</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img
                                            @if(auth()->user()->image != null)
                     src = "{{url(auth()->user()->image)}}"
                 @else
                 src="{{asset('assets/dashboard2/resources')}}/app-assets/images/portrait/small/avatar-s-11.jpg"
                @endif
                                            alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content">MD</div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                                </div>
                            </div>
                        </a>
                        <div class="media d-flex align-items-center">
                            <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                            <div class="custom-control custom-control-primary custom-switch">
                                <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
                                <label class="custom-control-label" for="systemNotification"></label>
                            </div>
                        </div><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to hight CPU usage</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-success">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-warning">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Read all notifications</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">John Doe</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">

                                            <a class="dropdown-item" href="{{route('dashboard.home.edit')}}">
                                                <i class="feather icon-user"></i> {{__('Profile')}}
                                            </a>

                                            <div class="dropdown-divider"></div>

                                            <form method="post" action="{{route('logout')}}">
                                                {{ csrf_field() }}
                                            <button type=submit class="dropdown-item" style="width: 100%"><i
                                                    class="feather icon-power"></i>
                                                {!! __('Log out') !!}
                                            </button>
                                            </form>
                                        </div>
            </li>
        </ul>
    </div>
</nav>


{{--<!-- BEGIN: Header-->--}}

{{--<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">--}}
{{--    <div class="navbar-wrapper">--}}
{{--        <div class="navbar-container content">--}}
{{--            <div class="navbar-collapse" id="navbar-mobile">--}}
{{--                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">--}}
{{--                    <ul class="nav navbar-nav">--}}
{{--                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>--}}
{{--                    </ul>--}}
{{--                    <ul class="nav navbar-nav bookmark-icons">--}}
{{--                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="sk-layout-2-columns.html" data-toggle="tooltip" data-placement="top" title="2-Columns"><i class="ficon feather icon-sidebar"></i></a></li>--}}
{{--                    </ul>--}}
{{--                    <ul class="nav navbar-nav">--}}
{{--                        <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>--}}
{{--                            <div class="bookmark-input search-input">--}}
{{--                                <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>--}}
{{--                                <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="starter-list">--}}
{{--                                <ul class="search-list"></ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <ul class="nav navbar-nav float-right">--}}
{{--                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon--}}
{{--                        @if(App::isLocale('ar')) flag-icon-sa @else flag-icon-us @endif"></i><span class="selected-language">@if(App::isLocale('ar')) عربى @else English @endif</span></a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">--}}
{{--                            <a class="dropdown-item" href="{{route('dashboard.lang-en')}}" data-language="en">--}}
{{--                                <i class="flag-icon flag-icon-us"></i> English--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="{{route('dashboard.lang-ar')}}" data-language="ar">--}}
{{--                                <i class="flag-icon flag-icon-sa"></i> عربى--}}
{{--                            </a>--}}

{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>--}}
{{--                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>--}}
{{--                        <div class="search-input">--}}
{{--                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>--}}
{{--                            <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="starter-list">--}}
{{--                            <div class="search-input-close"><i class="feather icon-x"></i></div>--}}
{{--                            <ul class="search-list"></ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">--}}
{{--                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{auth()->user()->username}}</span>--}}{{----}}{{--<span class="user-status">Available</span>--}}{{----}}{{--</div><span><img class="round"--}}
{{--                 @if(auth()->user()->image != null)--}}
{{--                     src = "{{url(auth()->user()->image)}}"--}}
{{--                 @else--}}
{{--                 src="{{asset('assets/dashboard2/resources')}}/app-assets/images/portrait/small/avatar-s-11.jpg"--}}
{{--                @endif                                                                                    alt="avatar" height="40" width="40"></span>--}}

{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right">--}}
{{--                           --}}{{----}}{{-- <a class="dropdown-item" href="#">--}}
{{--                                <i class="feather icon-user"></i> Edit Profile--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <i class="feather icon-mail"></i> My Inbox--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <i class="feather icon-check-square"></i> Task--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="#">--}}
{{--                                <i class="feather icon-message-square"></i> Chats--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="{{route('dashboard.home.edit')}}">--}}
{{--                                <i class="feather icon-user"></i> {{__('Profile')}}--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="{{route('dashboard.switch-admin-theme')}}">--}}
{{--                                <i class="feather icon-eye-off"></i> {{__('Switch theme')}}--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}

{{--                            <form method="post" action="{{route('logout')}}">--}}
{{--                                {{ csrf_field() }}--}}
{{--                            <button type=submit class="dropdown-item" style="width: 100%"><i--}}
{{--                                    class="feather icon-power"></i>--}}
{{--                                {!! __('Log out') !!}--}}
{{--                            </button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--<!-- END: Header-->--}}