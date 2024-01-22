@extends('dashboard.layouts.app')
@section('title')
    {!! __('Products') !!}
@endsection
@section('header')@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'products'])
@endsection

@section('btn')
    <a href="{{route('dashboard.products.create',['page_id'=>request()->page_id])}}"
       class="btn-icon btn btn-primary btn-round btn-sm"><i class="feather icon-plus"></i> {{__('Add new products')}}
    </a>
@endsection

@section('content')
    <section id="column-selectors">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@yield('title')</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                @include('dashboard.products.partials._table')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

