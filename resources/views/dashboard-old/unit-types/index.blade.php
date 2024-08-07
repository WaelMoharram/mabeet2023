@extends('dashboard-old.layouts.app')
@section('title')
    {!! __('Unit types') !!}
@endsection
@section('header')

@endsection
@section('breadcrumb')
    @include('dashboard-old.layouts.partials._breadcrumb',['level'=>'unit-types'])
@endsection
@section('btn')
    @can('add unit types')
        @include('dashboard-old.layouts.partials._add_icon',['route'=>'unit-types'])
    @endcan
@endsection
@section('content')
    <section id="column-selectors">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header row">
                        {{--                        <h4 class="card-title">@yield('title')</h4>--}}
                        <div class="col-6">
                            @include('dashboard-old.settings.select')
                        </div>

                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="card ">
                                <div class="card-header">
                                    <h4 class="card-title">@yield('title')</h4>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a data-action="collapse"
                                                   class=" btn btn-outline-success round waves-effect"><i
                                                            data-feather="filter"></i> {{__('Filter')}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse @if(count(request()->except('type')) > 0) show @endif
                                 ">
                                    <div class="card-body card-dashboard">
                                        {!! Form::open(['method'=>'get','class'=>'form','enctype' => 'multipart/form-data']) !!}
                                        <div class="row">
                                            @include('dashboard-old.unit-types.partials._form_filter')
                                            <div class="col-12">
                                                <button type="submit"
                                                        class="btn btn-primary   waves-effect waves-light btn-sm">{{__('Filter')}}</button>
                                                <a href="{{route('dashboard.unit-types.index')}}"
                                                   class="  ml-1 btn btn-warning  waves-effect waves-light btn-sm">{{__('Reset filter')}}</a>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                @include('dashboard-old.unit-types.partials._table')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

