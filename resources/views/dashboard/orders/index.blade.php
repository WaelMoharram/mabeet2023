@extends('dashboard.layouts.app')
@section('title')
    {!! __('Orders') !!}
@endsection
@section('header')

@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'orders'])
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

                            <li class="nav-item" role="presentation">
                                <a href="{{route('dashboard.orders.index',['status'=>\App\Models\Order::STATUS_NEW])}}" class="nav-link @if(request()->has('status') && request()->status == \App\Models\Order::STATUS_NEW) active @else  @endif " id="home-tab" >{{__('New orders')}}</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="{{route('dashboard.orders.index',['status'=>\App\Models\Order::STATUS_APPROVED])}}" class="nav-link @if(request()->has('status') && request()->status == \App\Models\Order::STATUS_APPROVED) active @else  @endif " id="home-tab" >{{__('Approved orders')}}</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="{{route('dashboard.orders.index',['status'=>\App\Models\Order::STATUS_COMPLETED])}}" class="nav-link @if(request()->has('status') && request()->status == \App\Models\Order::STATUS_COMPLETED) active @else  @endif " id="home-tab" >{{__('Completed orders')}}</a>
                            </li>

                        </ul>
                    </div>
                    <div class="table-responsive">
                        @include('dashboard.orders.partials._table')

                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection

