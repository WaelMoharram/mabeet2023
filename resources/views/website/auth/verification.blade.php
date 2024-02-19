@extends('website.layouts.app')
@section('title'){!! __('Login') !!}@endsection



@section('content')
    <div class="register text-center new-order">
        <div class="container">
            <div class="main-title">
                <h1>{{__('verify_phone')}}</h1>
{{--                <h5>اشتراك حساب جديد مع منصّة مبيت لتتمكن من طلب وحدات سكنية.<br> لديك حساب؟ تسجيل الدخول</h5>--}}
            </div>


            <div class="area">
                @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>
                @endif

                <section class="grouped-radio">
                    <form action="{{route('post.verify',request()->phone)}}" method="post" >
                        @csrf
                        <div class="row mb-3">
                            <div class="col-12">
                                <hr>
                            </div>


                            <div class="container">

                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="box-details">
                                            <h3>{{__('do_verify')}}</h3>
                                            <p>{{__('enter_code')}}</p>
                                            <input type="number" required class="form-control mb-3"
                                                   name="verify_code"
                                                   placeholder="{{__('example')}}:1234">
                                        </div>
                                    </div>
                                </div>

                                <!-- Button for إرسال -->
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="box">
                                            <button type="submit" class="btn btn-mabet">{{__("confirm")}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>


                <div class="content">
                    <p class="my-5 py-2">{{__('by_sign_you_accept')}}<a href="index.html">{{__('terms')}}</a> {{__('belongs_to_mabeet')}}</p>
                </div>
            </div>
        </div>

        <!-- privacy -->


    </div>
@endsection
@section('footer')
    <script>
        {{--$(document).ready(function() {--}}
        {{--    // Initially, disable Google and Apple links--}}
        {{--    $('.social-links').addClass('disabled');--}}

        {{--    // Handle radio button change event--}}
        {{--    $('input[name="select"]').change(function() {--}}
        {{--        // Check if any radio button is selected--}}
        {{--        const isSelected = $('input[name="select"]:checked').length > 0;--}}
        {{--        $('.social-links').toggleClass('disabled', !isSelected);--}}

        {{--        const selectedValue = $('input[name="select"]:checked').val();--}}
        {{--        const googleLink = '{{ route('google-login') }}' + '?type=' + selectedValue;--}}
        {{--        $('#google-link').attr('href', googleLink);--}}
        {{--        // Enable/disable Google and Apple links based on the radio button selection--}}
        {{--    });--}}

        {{--    // Handle clicking on links--}}
        {{--    $(document).on('click', '.social-links', function(e) {--}}
        {{--        // Check if the link is disabled--}}
        {{--        if ($(this).hasClass('disabled')) {--}}
        {{--            e.preventDefault(); // Prevent the default action if the link is disabled--}}
        {{--        } else {--}}
        {{--            // Perform the desired action when an enabled link is clicked--}}
        {{--            // For example, you can redirect to the link's href--}}
        {{--            window.location.href = $(this).attr('href');--}}
        {{--        }--}}
        {{--    });--}}
        {{--});--}}
    </script>
@endsection
