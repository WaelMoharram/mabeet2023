@extends('website.layouts.app')
@section('title'){!! __('Offers') !!}@endsection
@section('content')

    <div class="offers orders order-details new-order mb-4">
        <div class="container">
            <div class="main-title text-center mt-5">

                <h1>{{$order->orderStatusDesctiption()['title']}}</h1>
                <h5>{{$order->orderStatusDesctiption()['description']}}</h5>
            </div>
            @if($order->orderStatus() == \App\Models\Order::STATUS_NEW)
                @include('website.provider-offers.order_status._new')
            @endif

            @if($order->orderStatus() == \App\Models\Order::STATUS_PRESENTED)
                @include('website.provider-offers.order_status._presented')
            @endif

            @if($order->orderStatus() == \App\Models\Order::STATUS_APPROVED)
                @include('website.provider-offers.order_status._accepted')
            @endif


            @if($order->orderStatus() == \App\Models\Order::STATUS_COMPLETED)
                @include('website.provider-offers.order_status._completed')
            @endif



        </div>
    </div>
@endsection

