@extends('website.layouts.app')
@section('title'){!! __('Login') !!}@endsection
@section('header')
    <style>
    @foreach(\App\Models\Country::all() as $country)

        select#phoneCode option[value={{$country->phone_code}}]   { background-image:url({{url($country->image)}});   }
    @endforeach
    </style>
@endsection


@section('content')
    <div class="register text-center new-order">
        <div class="container">
            <div class="main-title">
                <h1>{{__('new_account')}}</h1>
                <h5>{{__('new_acc_desc')}}<br>{{__('have_acc_login')}}</h5>
            </div>


            <div class="area">

                <section class="grouped-radio">
                    <form action="{{route('login.post')}}" method="post" data-parsley-validate="novalidate">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-6">
                                <div class="box">
                                    <input type="radio" id="control_01" name="type" required value="client">
                                    <label for="control_01">
                                        <h2>{{__('I am looking for accommodation')}}</h2>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="box">
                                    <input type="radio" id="control_02" name="type" required value="provider">
                                    <label for="control_02">
                                        <h2>{{__('I am the owner of a residential unit')}}</h2>
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr>
                            </div>


                            <div class="container">
                                <!-- Card for تفاصيل الطلب -->
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="box-details">
                                            <h3>{{__('register_or_login')}}</h3>
                                            <p>{{__("enter_code_phone")}}</p>
                                            <div class="input-group col-md-12" dir="ltr">
                                                {{Form::select('phone_code', \App\Models\Country::all()->pluck('phone_code','phone_code'), null, ['id'=>'phoneCode','class'=>'form-control col-md-2'] ) }}

                                                <div class=" col-md-10">
                                                    {!! Form::text('phone_value',null,['id'=>'phoneValue','class'=>'form-control col','placeholder'=>__("Phone"),'required']) !!}
                                                </div>
                                            </div>

                                            <input id="phone" type="hidden" required class="form-control mb-3" name="phone">
                                        </div>
                                    </div>
                                </div>

                                <!-- Button for إرسال -->
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="box">
                                            <button type="submit" class="btn btn-mabet">{{__('send')}}</button>
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
    {{--    $(document).ready(function() {--}}
    {{--        // Initially, disable Google and Apple links--}}
    {{--        $('.social-links').addClass('disabled');--}}

    {{--        // Handle radio button change event--}}
    {{--        $('input[name="select"]').change(function() {--}}
    {{--            // Check if any radio button is selected--}}
    {{--            const isSelected = $('input[name="select"]:checked').length > 0;--}}
    {{--            $('.social-links').toggleClass('disabled', !isSelected);--}}

    {{--            const selectedValue = $('input[name="select"]:checked').val();--}}
    {{--            const googleLink = '{{ route('google-login') }}' + '?type=' + selectedValue;--}}
    {{--            $('#google-link').attr('href', googleLink);--}}
    {{--            // Enable/disable Google and Apple links based on the radio button selection--}}
    {{--        });--}}

    {{--        // Handle clicking on links--}}
    {{--        $(document).on('click', '.social-links', function(e) {--}}
    {{--            // Check if the link is disabled--}}
    {{--            if ($(this).hasClass('disabled')) {--}}
    {{--                e.preventDefault(); // Prevent the default action if the link is disabled--}}
    {{--            } else {--}}
    {{--                // Perform the desired action when an enabled link is clicked--}}
    {{--                // For example, you can redirect to the link's href--}}
    {{--                window.location.href = $(this).attr('href');--}}
    {{--            }--}}
    {{--        });--}}
    {{--    });--}}
    </script>

    <script>
        $(document).ready(function(){
            // Function to update the phone hidden input
            function updatePhone() {
                var phoneCode = $("#phoneCode").val();
                var phoneValue = $("#phoneValue").val();
                // Set the value of the hidden input
                $("#phone").val(phoneCode + phoneValue);
            }

            // Listen for changes in phone code or phone value inputs
            $("#phoneCode, #phoneValue").on("change keyup", function(){
                updatePhone(); // Update the hidden input when there's a change
            });
        });
    </script>
@endsection
