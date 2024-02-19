
@extends('dashboard.layouts.app')
@section('title')
    {!! __('Countries') !!}
@endsection
@section('header')

@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'countries'])
@endsection
@section('btn')
    @include('dashboard.layouts.partials._add_icon',['route'=>'countries'])
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card  pb-0 mb-3">
                <div class="row">
                    <div class="col-lg-9">
                        @include('dashboard.settings.units-settings-select')

                    </div>
                    <div class="col-lg-3 text-left">
                        <ul class="nav nav-tabs tabs-wg pt-3 px-3 border-0" style="float:left">
                            <li class="nav-item" role="presentation">
                                @yield('btn')
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
            @include('dashboard.countries.partials._table')


        </div>
    </div>

@endsection



