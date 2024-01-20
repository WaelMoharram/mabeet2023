@extends('dashboard-old.layouts.app')
@section('title')
    {!! __('Create pages') !!}
@endsection
@section('header')@endsection
@section('breadcrumb')
    @include('dashboard-old.layouts.partials._breadcrumb',['level'=>'pages'])
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
                            {!! Form::open(['method'=>'post','route'=>'dashboard.pages.store','class'=>'form','enctype' => 'multipart/form-data']) !!}
                            @csrf()
                            <div class="row">
                                @include('dashboard-old.pages.partials._form')
                                @component('dashboard-old.layouts.partials.buttons._save_button',[])
                                @endcomponent
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js-validation')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\PageRequest', '.form'); !!}
@endsection
