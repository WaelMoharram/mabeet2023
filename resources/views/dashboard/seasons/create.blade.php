@extends('dashboard.layouts.app')
@section('title')
    {!! __('Create Season') !!}
@endsection
@section('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" integrity="sha512-MQXduO8IQnJVq1qmySpN87QQkiR1bZHtorbJBD0tzy7/0U9+YIC93QWHeGTEoojMVHWWNkoCp8V6OzVSYrX0oQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'seasons'])
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@yield('title')</h4>

                    {!! Form::open(['method'=>'post','route'=>'dashboard.seasons.store','class'=>'form','enctype' => 'multipart/form-data']) !!}
                    @csrf()
                    <div class="row">

                        @include('dashboard.seasons.partials._form')

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
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr('.flatpickr-basic', {
        enableTime: false,
        dateFormat: "Y-m-d",
    });
    // flatpickr('#end_date', {
    //     enableTime: true,
    //     dateFormat: "Y-m-d H:i",
    // });
</script>
@endsection
