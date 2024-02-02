@extends('dashboard.layouts.app')
@section('title')
    {!! __('Admins') !!}
@endsection
@section('header')

@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'admins'])
@endsection
@section('btn')
            @include('dashboard.layouts.partials._add_icon',['route'=>'admins'])
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9">
                            <h4 class="card-title">@yield('title')</h4>
                            <ul class="nav nav-tabs tabs-wg" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="{{route('dashboard.admins.index')}}" class="nav-link @if(!request()->has('role') ) active   @endif " id="home-tab" >{{__('All')}}</a>
                                </li>
                                @foreach(\Spatie\Permission\Models\Role::pluck('name','id') as $role)

                                    <li class="nav-item" role="presentation">
                                        <a href="{{route('dashboard.admins.index',['role'=>$role])}}" class="nav-link @if(request()->has('role') && request()->role == $role ) active @else  @endif " id="home-tab" >{{$role}}</a>
                                    </li>
                                    {{----}}
                                @endforeach


                                <li class="nav-item" role="presentation">
                                    <form class="">
                                        @if(request()->has('role'))
                                            <input type="hidden" name="role" value="{{request()->role}}">
                                        @endif
                                        <div class="d-flex align-items-center search-form">
                                            <div class="input-group">
                                                <div class="input-group-prepend bg-transparent">
                                                    <img style="position: relative;top:8px" src="assets/images/search.png" alt="">
                                                </div>
                                                <input type="text" name="text" class="form-control bg-transparent border-0" value="{{request()->text}}" style="padding:12px" placeholder="{{__('Search')}}">
                                            </div>
                                            <button class="nav-link active" type="submit">{{__('Search')}}</button>
                                        </div>

                                    </form>
                                </li>

                            </ul>

                        </div>
                        <div class="col-lg-3 mt-3 text-left">
                            @yield('btn')

                        </div>
                    </div>

                    <div class="table-responsive">
                            @include('dashboard.admins.partials._table')

                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection





@extends('dashboard.layouts.app')
@section('title')
    {!! __('Admins') !!}
@endsection
@section('header')

@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'admins'])
@endsection
@section('btn')
    @include('dashboard.layouts.partials._add_icon',['route'=>'admins'])
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
    <section id="column-selectors">
        <div class="row">
            {{--            <div class="col-12">--}}
            {{--                <div class="card">--}}
            {{--                    <div class="card-content">--}}
            {{--                        <div class="card-body card-dashboard">--}}
            {{--                            {!! Form::open(['method'=>'get','class'=>'form','enctype' => 'multipart/form-data']) !!}--}}
            {{--                            <div class="row">--}}
            {{--                                @include('dashboard.admins.partials._form_filter')--}}
            {{--                                <div class="col-12">--}}
            {{--                                    <button type="submit" class="btn btn-primary   waves-effect waves-light btn-sm">{{__('Filter')}}</button>--}}
            {{--                                    <a href="{{route('dashboard.admins.index')}}" class="  ml-1 btn btn-warning  waves-effect waves-light btn-sm">{{__('Reset filter')}}</a>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            {!! Form::close() !!}--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="col-12" style="height: 15px;"></div>--}}
            <div class="col-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="card ">
                                <div class="card-header">
                                    <div class="col-6">
                                        <a href="{{route('dashboard.admins.index')}}"
                                           class="btn  @if(!request()->has('role')) btn-success @else btn-outline-success @endif round waves-effect">{{__('All')}}</a>
                                        @foreach(\Spatie\Permission\Models\Role::pluck('name','id') as $role)
                                            <a href="{{route('dashboard.admins.index',['role'=>$role])}}"
                                               class="btn @if(request()->has('role') && request()->role == $role) btn-success @else btn-outline-success @endif round waves-effect">{{$role}}</a>
                                        @endforeach
                                    </div>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse"
                                                   class=" btn btn-outline-success round waves-effect"><i
                                                            data-feather="filter"></i> {{__('Filter')}}</a>
                                            </li>
                                            {{--                                            <li>--}}
                                            {{--                                                <a data-action="reload"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg></a>--}}
                                            {{--                                            </li>--}}
                                            {{--                                            <li>--}}
                                            {{--                                                <a data-action="close"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></a>--}}
                                            {{--                                            </li>--}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse @if(count(request()->except('role')) > 0) show @endif
                                 ">

                                    <div class="card-body card-dashboard">
                                        {!! Form::open(['method'=>'get','class'=>'form','enctype' => 'multipart/form-data']) !!}
                                        <div class="row">
                                            @include('dashboard.admins.partials._form_filter')
                                            <div class="col-12">
                                                <button type="submit"
                                                        class="btn btn-primary   waves-effect waves-light btn-sm">{{__('Filter')}}</button>
                                                <a href="{{route('dashboard.admins.index')}}"
                                                   class="  ml-1 btn btn-warning  waves-effect waves-light btn-sm">{{__('Reset filter')}}</a>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">@yield('title')</h4>
                            </div>
                            <div class="table-responsive">
                                @include('dashboard.admins.partials._table')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </div>
    </div>
@endsection

