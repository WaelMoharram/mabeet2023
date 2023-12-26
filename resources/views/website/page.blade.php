@extends('website.layouts.app')
@section('title'){!! $page->title !!}@endsection
{{--@section('type'){{'mabet-home'}}@endsection--}}



@section('content')

    <div class="privacy">
        <div class="container">
            <div class="main-title text-center">
                <h1>{!! $page->title !!}</h1>
            </div>

            {!! $page->content !!}
        </div>
    </div>
@endsection

