@extends('website.layouts.app')
@section('title'){!! __('ORders') !!}@endsection
@section('content')

    <div class="offers orders order-details new-order mb-4">
        <div class="container">
            <div class="main-title text-center mt-5">

                <h1>{{$order->orderStatusDesctiption()['title']}}</h1>
                <h5>{{$order->orderStatusDesctiption()['description']}}</h5>
            </div>
{{--            @foreach($offers as $offer)--}}
                @include('website.orders.order_status._new')
{{--            @endforeach--}}



        </div>
    </div>
@endsection

