@extends('website.layouts.app')
@section('title'){!! __('Login') !!}@endsection



@section('content')
    <div class="register text-center new-order">
        <div class="container">
            <div class="main-title">
                <h1>اشتراك حساب جديد</h1>
                <h5>اشتراك حساب جديد مع منصّة مبيت لتتمكن من طلب وحدات سكنية.<br> لديك حساب؟ تسجيل الدخول</h5>
            </div>


            <div class="area">

                <section class="grouped-radio">
                    <form>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-6">
                                <div class="box">
                                    <input type="radio" id="control_01" name="select" value="client">
                                    <label for="control_01">
                                        <h2>{{__('I am looking for accommodation')}}</h2>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="box">
                                    <input type="radio" id="control_02" name="select" value="provider">
                                    <label for="control_02">
                                        <h2>{{__('I am the owner of a residential unit')}}</h2>
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr>
                            </div>

                            <a id="google-link" href="{{route('google-login')}}" class="col-12 social-links disabled">
                                <div class="box-sociall">
                                    <h2>اشترك بحساب جوجل</h2>
                                    <img src="asset/images/google.png" class="img-fluid">
                                </div>
                            </a>

                            <div class="col-12 social-links disabled">
                                <div class="box-sociall">
                                    <h2>اشترك بحساب آبل</h2>
                                    <img src="asset/images/apple.png" class="img-fluid">
                                </div>
                            </div>

                        </div>
                    </form>
                </section>


                <div class="content">
                    <p class="my-5 py-2">بالإشتراك، انت توافق تلقائياً على <a href="index.html">الشروط والأحكام</a> الخاصة بمنصة مبيت.</p>
                </div>
            </div>
        </div>

        <!-- privacy -->


    </div>
@endsection
@section('footer')
    <script>
        $(document).ready(function() {
            // Initially, disable Google and Apple links
            $('.social-links').addClass('disabled');

            // Handle radio button change event
            $('input[name="select"]').change(function() {
                // Check if any radio button is selected
                const isSelected = $('input[name="select"]:checked').length > 0;
                $('.social-links').toggleClass('disabled', !isSelected);

                const selectedValue = $('input[name="select"]:checked').val();
                const googleLink = '{{ route('google-login') }}' + '?type=' + selectedValue;
                $('#google-link').attr('href', googleLink);
                // Enable/disable Google and Apple links based on the radio button selection
            });

            // Handle clicking on links
            $(document).on('click', '.social-links', function(e) {
                // Check if the link is disabled
                if ($(this).hasClass('disabled')) {
                    e.preventDefault(); // Prevent the default action if the link is disabled
                } else {
                    // Perform the desired action when an enabled link is clicked
                    // For example, you can redirect to the link's href
                    window.location.href = $(this).attr('href');
                }
            });
        });
    </script>
@endsection
