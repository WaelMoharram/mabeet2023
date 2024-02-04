
@extends('dashboard.layouts.app')
@section('title')
    {!! __('Edit Unit type') !!}
@endsection
@section('header')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'unit-types'])
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@yield('title')</h4>

                    {!! Form::model($unitType,['method'=>'put','route'=>['dashboard.unit-types.update',$unitType->id],'class'=>'form','enctype' => 'multipart/form-data']  ) !!}
                    @csrf()
                    <div class="row">

                        @include('dashboard.unit-types.partials._form')

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
@section('footer')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection


