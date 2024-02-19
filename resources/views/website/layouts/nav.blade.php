<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="{{route('home')}}">
        <img class="img-fluid logo" width="170px" src="{{asset('/')}}/asset/images/logo.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @if(!auth()->check() )
                <li class="nav-item list-inline-item">
                    <a class="nav-item list-inline-item btn btn-mabet"
                       href="{{route('orders')}}">{{__('Requests and offers')}}</a>
                </li>
            @endif
            @auth

{{--                <li class="nav-item list-inline-item">--}}
{{--                    <a class="nav-item list-inline-item btn"--}}
{{--                       href="{{route('notifications')}}">{{__('Notifications')}}</a>--}}
{{--                </li>--}}

                <li class="nav-item list-inline-item">
                    <a class="nav-item list-inline-item btn" href="{{route('chat')}}">{{__('Chat')}}</a>
                </li>

                @if(auth()->check() && auth()->user()->type == \App\Models\User::TYPE_PROVIDER)
                    <li class="nav-item list-inline-item">
                        <a class="nav-item list-inline-item btn"
                           href="{{route('offers')}}">{{__('Requests and offers')}}</a>
                    </li>
                @elseif(auth()->check() && auth()->user()->type == \App\Models\User::TYPE_CLIENT)
                    <li class="nav-item list-inline-item">
                        <a class="nav-item list-inline-item btn"
                           href="{{route('orders')}}">{{__('Requests and offers')}}</a>
                    </li>
                @endif



    {{--                <li class="nav-item list-inline-item">--}}
    {{--                    <a class="nav-item list-inline-item btn" href="{{route('my-profile')}}">{{__('Hello,').auth()->user()->name}}</a>--}}
    {{--                </li>--}}
    <li class="nav-item list-inline-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{__('Hello,').auth()->user()->name}}
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
    @if(auth()->check() && auth()->user()->type == \App\Models\User::TYPE_PROVIDER)
        <li class="nav-item list-inline-item">
            <a href="{{route('units.index')}}" class="btn btn-mabet btn">{{__('Units')}}</a>
        </li>

        <li class="nav-item list-inline-item">
            <a href="{{route('units.create')}}" class="btn btn-mabet btn">{{__('Add new unit')}}</a>
        </li>
    @else
        <li class="nav-item list-inline-item">
            <a href="{{route('orders.create')}}" class="btn btn-mabet btn">{{__('New request')}}</a>
        </li>
    @endif
    {{--                <li class="nav-item list-inline-item">--}}
    {{--                    <a href="{{route('orders.create')}}" class="btn btn-mabet btn">{{__('New request')}}</a>--}}
    {{--                </li>--}}

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
    @foreach(\App\Models\Page::where('show_in_nav',1)->get() as $page)
        <li class="nav-item list-inline-item">
            <a class="nav-item list-inline-item btn" href="{{route('page',$page->title)}}">{{$page->title}}</a>
        </li>
{{--                    <li><a href="{{route('page',$page->title)}}">{{$page->title}}</a></li>--}}
    @endforeach

    <li class="nav-item list-inline-item">
        <a class="nav-item list-inline-item btn" href={{route('units.create')}}>{{__('Add your unit')}}</a>
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
