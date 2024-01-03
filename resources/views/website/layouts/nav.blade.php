<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="{{route('home')}}">
        <img class="img-fluid logo" width="170px" src="{{asset('/')}}/asset/images/logo.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        @auth

                <li class="nav-item list-inline-item">
                    <a class="nav-item list-inline-item btn" href="{{route('notifications')}}">{{__('Notifications')}}</a>
                </li>

                <li class="nav-item list-inline-item">
                    <a class="nav-item list-inline-item btn" href="{{route('chat')}}">{{__('Chat')}}</a>
                </li>

                <li class="nav-item list-inline-item">
                    <a class="nav-item list-inline-item btn" href="{{route('orders')}}">{{__('Requests and offers')}}</a>
                </li>


{{--                <li class="nav-item list-inline-item">--}}
{{--                    <a class="nav-item list-inline-item btn" href="{{route('my-profile')}}">{{__('Hello,').auth()->user()->name}}</a>--}}
{{--                </li>--}}
                <li class="nav-item list-inline-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <span> {{__('Hello,').auth()->user()->name}} </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('my-profile')}}">{{__('My profile')}}</a>
                        <div class="dropdown-divider"></div>
                        <form method="post" action="{{route('logout')}}">
                            {{ csrf_field() }}
                            <button type=submit class="dropdown-item" style="width: 100%"><i
                                    class="feather icon-power"></i>
                                {!! __('Log out') !!}
                            </button>
                        </form>
{{--                        <a class="dropdown-item" href="#">{{__('Logout')}}</a>--}}
                    </div>
                </li>

                <li class="nav-item list-inline-item">
                    <a href="{{route('orders.create')}}" class="btn btn-mabet btn">{{__('New request')}}</a>
                </li>
                            @if(app()->getLocale() == 'ar')
                            <li class="nav-item list-inline-item">
                                <a class="nav-item list-inline-item btn" href="{{route('lang-en')}}">En</a>
                            </li>
                            @else
                                <li class="nav-item list-inline-item">
                                    <a class="nav-item list-inline-item btn" href="{{route('lang-ar')}}">عربى</a>
                                </li>
                            @endif
        @else

            <li class="nav-item list-inline-item">
                <a class="nav-item list-inline-item btn" href="{{route('login')}}">{{__('Login')}}</a>
            </li>
            <li class="nav-item list-inline-item">
                <a class="nav-item list-inline-item btn" href="about-mabet.html">{{__('About mabeet')}}</a>
            </li>
            <li class="nav-item list-inline-item">
                <a class="nav-item list-inline-item btn" href="#">{{__('Add your unit')}}</a>
            </li>
            <li class="nav-item list-inline-item">
                <a href="{{route('orders.create')}}" class="btn btn-mabet btn">{{__('New request')}}</a>
            </li>
                            @if(app()->getLocale() == 'ar')
                            <li class="nav-item list-inline-item">
                                <a class="nav-item list-inline-item btn" href="{{route('lang-en')}}">English</a>
                            </li>
                            @else
                                <li class="nav-item list-inline-item">
                                    <a class="nav-item list-inline-item btn" href="{{route('lang-ar')}}">العربية</a>
                                </li>
                            @endif
            @endauth

        </ul>
    </div>
</nav>
