@extends('dashboard.layouts.app')
@section('title'){!! __('Roles') !!}@endsection
@section('header')

@endsection
@section('breadcrumb')
        @include('dashboard.layouts.partials._breadcrumb',['level'=>'roles'])
@endsection
@section('btn')
        @include('dashboard.layouts.partials._add_icon',['route'=>'roles'])
@endsection
@section('content')
    <section id="column-selectors">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header row">
                        <h4 class="card-title">@yield('title')</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                @include('dashboard.roles.partials._table')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

