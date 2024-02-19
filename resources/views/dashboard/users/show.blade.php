@extends('dashboard.layouts.app')
@section('title')
    {!! __('Show User') !!}
@endsection
@section('header')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">

@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'users'])
@endsection
@section('content')
    @if($user->type == 'client')
        @include('dashboard.users.partials.clients._show')
    @else
        @include('dashboard.users.partials.providers._show')
    @endif


@endsection
@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.js" integrity="sha512-cWEytOR8S4v/Sd3G5P1Yb7NbYgF1YAUzlg1/XpDuouZVo3FEiMXbeWh4zewcYu/sXYQR5PgYLRbhf18X/0vpRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @endsection
