@extends('website.layouts.app')
@section('title'){!! __('Order send successfully') !!}@endsection
@section('content')
    <div class="about-mabet no-route  text-center">
        <div class="container">
            <div class="main-title">
                <img src="{{asset('asset/images/success.png')}}" class="img-fluid d-block m-auto">
                <h1>{{$title}}</h1>
                <h5>{{$message}}</h5>
            </div>
            <div class="content">
                <a href="{{$route}}" class="btn-mabet">{{$routeText}}</a>
            </div>
        </div>
    </div>

@endsection
