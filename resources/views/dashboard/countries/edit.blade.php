@extends('dashboard.layouts.app')
@section('title')
    {!! __('Edit Country') !!}
@endsection
@section('header')@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'countries'])
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@yield('title')</h4>

                    {!! Form::model($country,['method'=>'put','route'=>['dashboard.countries.update',$country->id],'class'=>'form','enctype' => 'multipart/form-data']  ) !!}
                    @csrf()
                    <div class="row">

                        @include('dashboard.countries.partials._form')

                        @component('dashboard.layouts.partials.buttons._save_button',[])
                        @endcomponent
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js-validation')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {{--    {!! JsValidator::formRequest('App\Http\Requests\UserRequest', '.form'); !!}--}}
@endsection
