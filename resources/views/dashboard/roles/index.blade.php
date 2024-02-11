
@extends('dashboard.layouts.app')
@section('title')
    {!! __('Roles') !!}
@endsection
@section('header')

@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'roles'])
@endsection
@section('btn')
            @include('dashboard.layouts.partials._add_icon',['route'=>'roles'])
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9">
                            <h4 class="card-title">@yield('title')</h4>

                        </div>
                        <div class="col-lg-3 mt-3 text-left">
                            @yield('btn')

                        </div>
                    </div>

                    <div class="table-responsive">
                            @include('dashboard.roles.partials._table')

                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection

