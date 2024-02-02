@extends('dashboard.layouts.app')
@section('title')
    {!! __('Users') !!}
@endsection
@section('header')

@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'users'])
@endsection
@section('btn')
    {{--        @include('dashboard.layouts.partials._add_icon',['route'=>'users'])--}}
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-10">
            <h4 class="card-title">@yield('title')</h4>
            <ul class="nav nav-tabs tabs-wg" id="myTab" role="tablist">
                @can('index clients')
                <li class="nav-item" role="presentation">
                    <a href="{{route('dashboard.users.index',['type'=>\App\Models\User::TYPE_CLIENT])}}" class="nav-link @if(request()->has('type') && request()->type == \App\Models\User::TYPE_CLIENT) active @else  @endif " id="home-tab" >{{__('Clients wishing to book')}}</a>
                </li>
                @endcan
                @can('index providers')
                <li class="nav-item" role="presentation">
                    <a href="{{route('dashboard.users.index',['type'=>\App\Models\User::TYPE_PROVIDER])}}" class="nav-link @if(request()->has('type') && request()->type == \App\Models\User::TYPE_PROVIDER) active @endif" id="profile-tab" >{{__('Residential unit owners')}}</a>
                </li>
                @endcan
                    @if(request()->has('type') && request()->type !='')
                    <li class="nav-item" role="presentation">
                        <form class="">
                            <input type="hidden" name="type" value="{{request()->type}}">
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
                    @endif

            </ul>
            </div>
            <div class="table-responsive">
                @if(request()->type == \App\Models\User::TYPE_CLIENT)
                    @include('dashboard.users.partials.clients._table')
                @else
                    @include('dashboard.users.partials.providers._table')
                @endif
            </div>
        </div>
    </div>


</div>
    </div>
{{--    <section id="column-selectors">--}}
{{--        <div class="row">--}}
{{--            --}}{{--            <div class="col-12">--}}
{{--            --}}{{--                <div class="card">--}}
{{--            --}}{{--                    <div class="card-content">--}}
{{--            --}}{{--                        <div class="card-body card-dashboard">--}}
{{--            --}}{{--                            {!! Form::open(['method'=>'get','class'=>'form','enctype' => 'multipart/form-data']) !!}--}}
{{--            --}}{{--                            <div class="row">--}}
{{--            --}}{{--                                @include('dashboard.users.partials._form_filter')--}}
{{--            --}}{{--                                <div class="col-12">--}}
{{--            --}}{{--                                    <button type="submit" class="btn btn-primary   waves-effect waves-light btn-sm">{{__('Filter')}}</button>--}}
{{--            --}}{{--                                    <a href="{{route('dashboard.users.index')}}" class="  ml-1 btn btn-warning  waves-effect waves-light btn-sm">{{__('Reset filter')}}</a>--}}
{{--            --}}{{--                                </div>--}}
{{--            --}}{{--                            </div>--}}
{{--            --}}{{--                            {!! Form::close() !!}--}}
{{--            --}}{{--                        </div>--}}
{{--            --}}{{--                    </div>--}}
{{--            --}}{{--                </div>--}}
{{--            --}}{{--            </div>--}}
{{--            --}}{{--            <div class="col-12" style="height: 15px;"></div>--}}
{{--            <div class="col-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header row">--}}
{{--                        --}}{{--                        <h4 class="card-title">@yield('title')</h4>--}}
{{--                        <div class="col-6">--}}
{{--                            @can('index clients')--}}
{{--                                <a href="{{route('dashboard.users.index',['type'=>\App\Models\User::TYPE_CLIENT])}}"--}}
{{--                                   class="btn  @if(request()->has('type') && request()->type == \App\Models\User::TYPE_CLIENT) btn-success @else btn-outline-success @endif round waves-effect">{{__('Clients wishing to book')}}</a>--}}
{{--                            @endcan--}}
{{--                            @can('index providers')--}}
{{--                                <a href="{{route('dashboard.users.index',['type'=>\App\Models\User::TYPE_PROVIDER])}}"--}}
{{--                                   class="btn @if(request()->has('type') && request()->type == \App\Models\User::TYPE_PROVIDER) btn-success @else btn-outline-success @endif round waves-effect">{{__('Residential unit owners')}}</a>--}}
{{--                            @endcan--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="card-content">--}}
{{--                        <div class="card-body card-dashboard">--}}
{{--                            <div class="card ">--}}
{{--                                <div class="card-header">--}}
{{--                                    <h4 class="card-title">@yield('title')</h4>--}}
{{--                                    <div class="heading-elements">--}}
{{--                                        <ul class="list-inline mb-0">--}}
{{--                                            <li>--}}
{{--                                                <a data-action="collapse"--}}
{{--                                                   class=" btn btn-outline-success round waves-effect"><i--}}
{{--                                                            data-feather="filter"></i> {{__('Filter')}}</a>--}}
{{--                                            </li>--}}
{{--                                            --}}{{--                                            <li>--}}
{{--                                            --}}{{--                                                <a data-action="reload"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg></a>--}}
{{--                                            --}}{{--                                            </li>--}}
{{--                                            --}}{{--                                            <li>--}}
{{--                                            --}}{{--                                                <a data-action="close"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></a>--}}
{{--                                            --}}{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card-content collapse @if(count(request()->except('type')) > 0) show @endif--}}
{{--                                 ">--}}
{{--                                    <div class="card-body card-dashboard">--}}
{{--                                        {!! Form::open(['method'=>'get','class'=>'form','enctype' => 'multipart/form-data']) !!}--}}
{{--                                        <div class="row">--}}
{{--                                            @include('dashboard.users.partials._form_filter')--}}
{{--                                            <div class="col-12">--}}
{{--                                                <button type="submit"--}}
{{--                                                        class="btn btn-primary   waves-effect waves-light btn-sm">{{__('Filter')}}</button>--}}
{{--                                                <a href="{{route('dashboard.users.index')}}"--}}
{{--                                                   class="  ml-1 btn btn-warning  waves-effect waves-light btn-sm">{{__('Reset filter')}}</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        {!! Form::close() !!}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="table-responsive">--}}
{{--                                @include('dashboard.users.partials._table')--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection

