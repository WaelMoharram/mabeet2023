<div class="fixed-div">

    <ul class="nav">
{{--        @can('index roles')--}}
{{--            <li class=" nav-item @if(Request::is('dashboard/roles')) active  @endif"><a class="d-flex align-items-center" href="{{route('dashboard.roles.index')}}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Roles">{{__('Roles')}}</span></a>--}}
{{--            </li>--}}
{{--        @endcan--}}


{{--        @canany(['index seasons','index unit types','index facilities','index services'])--}}
{{--            <li class=" nav-item @if(Request::is('dashboard/seasons') || Request::is('dashboard/unit-types') || Request::is('dashboard/facilities') || Request::is('dashboard/services')) active  @endif"><a class="d-flex align-items-center" href="{{route('dashboard.seasons.index')}}"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Seasons">{{__('Units settings')}}</span></a>--}}
{{--            </li>--}}
{{--        @endcan--}}


{{--        <li class=" navigation-header"><span data-i18n="Users">{{__('Settings')}}</span><i data-feather="more-horizontal"></i> break--}}

{{--        <li class="nav-item @if(Request::is('dashboard/system-options') || Request::is('dashboard/pages')) open  @endif"><a class="d-flex align-items-center"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">{{__('General settings')}}</span><span class="badge badge-light-warning badge-pill ml-auto mr-1">2</span></a>--}}
{{--            <ul class="menu-content">--}}
{{--                <li class="@if(Request::is('dashboard/pages')) active @endif"><a class="d-flex align-items-center" href="{{route('dashboard.pages.index')}}"><i data-feather="file"></i><span class="menu-item text-truncate" data-i18n="Pages">{{__('Pages')}}</span></a>--}}
{{--                </li>--}}
{{--                <li class="@if(Request::is('dashboard/system-options')) active @endif"><a class="d-flex align-items-center" href="{{route('dashboard.system-options.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Options">{{__('System options')}}</span></a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}


        <li class="nav-item @if(Request::is('dashboard/home')) active  @endif">
            <a class="nav-link" href="{{route('dashboard.home')}}">
                <img src="{{asset('assets/mabeet-dashboard')}}/assets/images/home-icon.png">
                <span class="menu-title">{{__('Home')}}</span>

            </a>
        </li>
        @canany(['index clients','index providers'])
            <li class="nav-item @if(Request::is('dashboard/users')) active  @endif">
                <a class="nav-link" href="{{route('dashboard.users.index')}}">
                    <img src="{{asset('assets/mabeet-dashboard')}}/assets/images/users-icon.png">
                    <span class="menu-title">{{__('Users')}}</span>

                </a>
            </li>
        @endcanany
        @can('index admins')
            <li class="nav-item @if(Request::is('dashboard/admins')) active  @endif">
                <a class="nav-link" href="{{route('dashboard.admins.index')}}">
                    <img src="{{asset('assets/mabeet-dashboard')}}/assets/images/responsible-icon.png">
                    <span class="menu-title">{{__('Admins')}}</span>

                </a>
            </li>
        @endcan
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="subscripes.html">--}}
{{--                <img src="{{asset('assets/mabeet-dashboard')}}/assets/images/join-icon.png">--}}
{{--                <span class="menu-title">الإشتراكات</span>--}}
{{--            </a>--}}
{{--        </li>--}}

            <li class="nav-item @if(Request::is('dashboard/units') ) active  @endif">
                <a class="nav-link" href="{{route('dashboard.units.index')}}">
                    <img src="{{asset('assets/mabeet-dashboard')}}/assets/images/flat-icon.png">
                    <span class="menu-title">{{__('Units')}}</span>
                </a>
            </li>
            @canany(['index seasons','index unit types','index facilities','index services'])
                <li class="nav-item @if(Request::is('dashboard/seasons') || Request::is('dashboard/unit-types') || Request::is('dashboard/facilities') || Request::is('dashboard/services')) active  @endif">
                    <a class="nav-link" href="{{route('dashboard.seasons.index')}}">
                        <img src="{{asset('assets/mabeet-dashboard')}}/assets/images/flat-icon.png">
                        <span class="menu-title">{{__('Units settings')}}</span>
                    </a>
                </li>
            @endcan

        <li class="nav-item @if(Request::is('dashboard/orders') ) active  @endif">
            <a class="nav-link" href="#">
                <img src="{{asset('assets/mabeet-dashboard')}}/assets/images/orders-icon.png">
                <span class="menu-title">{{__('Orders')}}</span>
            </a>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="alerts.html">--}}
{{--                <img src="{{asset('assets/mabeet-dashboard')}}/assets/images/alert-icon.png">--}}
{{--                <span class="menu-title">التنبيهات</span>--}}
{{--            </a>--}}
{{--        </li>--}}

            <li class="nav-item @if(Request::is('dashboard/pages')) active @endif">
                <a class="nav-link" href="{{route('dashboard.pages.index')}}">
                    <img src="{{asset('assets/mabeet-dashboard')}}/assets/images/orders-icon.png">
                    <span class="menu-title">{{__('Pages')}}</span>
                </a>
            </li>
    </ul>
</div>
