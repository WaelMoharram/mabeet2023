@extends('dashboard-old.layouts.app')
@section('title')
    {!! __('Options') !!}
@endsection
@section('header')@endsection
@section('breadcrumb')
    @include('dashboard-old.layouts.partials._breadcrumb',['level'=>'system-options'])
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
                                @include('dashboard-old.system-options.partials._table')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

