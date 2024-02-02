
@extends('dashboard.layouts.app')
@section('title')
    {!! __('Units') !!}
@endsection
@section('header')

@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'units'])
@endsection
@section('btn')
    @include('dashboard.layouts.partials._add_icon',['route'=>'units'])
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
                                    <a href="{{route('dashboard.units.index')}}" class="nav-link @if(!request()->has('unit_type_id') ) active   @endif " id="home-tab" >{{__('All')}}</a>
                                </li>
                                @foreach(\App\Models\UnitType::all() as $type)
                                    <li class="nav-item" role="presentation">
                                        <a href="{{route('dashboard.units.index',['unit_type_id'=>$type->id])}}" class="nav-link @if(request()->has('unit_type_id') && request()->unit_type_id == $type->id ) active @else  @endif " id="home-tab" >{{$type->name}}</a>
                                    </li>

                                @endforeach

                                <li class="nav-item" role="presentation">
                                    <form class="">
                                        @if(request()->has('unit_type_id'))
                                            <input type="hidden" name="unit_type_id" value="{{request()->unit_type_id}}">
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
                        @include('dashboard.units.partials._table')

                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection



