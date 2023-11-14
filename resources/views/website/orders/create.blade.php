@extends('website.layouts.app')
@section('title'){!! __('Create order') !!}@endsection
@section('content')
    <!-- New Order -->

    <div class="new-order" style="margin-top:50px;margin-bottom: 50px;">
        <div class="container">
            <div class="main-title text-center">
                <h1>طلب جديد</h1>
                <h5>ادخل تفاصيل الطلب الجديد لإستقبال افضل العروض</h5>
            </div>

            <form class="row" method="post" action="{{route('orders.store')}}">
                @csrf
                <div class="col-lg-3">
                    <div class="area">
                        <h3>المكان</h3>
                        <p>تحديد مكان الإقامة والوحدة السكنية.</p>

                        <section class="grouped-radio">

                                <div class="row">
                                    @foreach($cities as $city)
                                        <div class="col-lg-12 col-md-6">
                                            <div class="box">
                                                <input type="radio" id="city_{{$city->id}}" name="city_id" value="{{$city->id}}">
                                                <label for="city_{{$city->id}}">
                                                    <h2>{{$city->name}}</h2>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>




                        </section>
                    </div>
                    <div class="area">
                        <h3>الموسم</h3>
                        <p>تحديد موسم طلب الوحدة السكنية.</p>

                        <section class="grouped-radio">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="box">
                                            <input type="radio" id="control_03" name="select" value="3">
                                            <label for="control_03">
                                                <h2>موسم الحج</h2>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="box">
                                            <input type="radio" id="control_04" name="select" value="4">
                                            <label for="control_04">
                                                <h2>موسم العمرة (1-10 رمضان)</h2>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="box">
                                            <input type="radio" id="control_05" name="select" value="5">
                                            <label for="control_05">
                                                <h2>موسم العمرة (11-20 رمضان)</h2>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="box">
                                            <input type="radio" id="control_06" name="select" value="6">
                                            <label for="control_06">
                                                <h2>موسم العمرة (21-30 رمضان)</h2>
                                            </label>
                                        </div>
                                    </div>
{{--                                    <div class="col-lg-12 col-md-6">--}}
{{--                                        <div class="box">--}}
{{--                                            <input type="radio" id="control_07" name="select" value="7">--}}
{{--                                            <label for="control_07">--}}
{{--                                                <h2>تاريخ آخر</h2>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>

                        </section>
                    </div>

                </div>
                <div class="col-lg-9">

                    <div class="box-details">
                        <h3>تفاصيل الطلب</h3>
                        <p>ادخل عنوان وتفاصيل طلبك للوحدة السكنية.</p>
                        <input class="form-control mb-3" placeholder="عنوان الطلب">
                        <textarea class="form-control mb-3" placeholder="التفاصيل"></textarea>
                    </div>

                    <div class="box-details">
                        <h3>المسافة للمسجد</h3>
                        <p>الرجاء العلم ان الأسعار ترتفع كلما اقتربت الوحدة السكنية من المسجد.</p>

                            <section class="grouped-radio row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="box">
                                        <input type="radio" id="control_08" name="select" value="8">
                                        <label for="control_08"><h2>300 متر او اقل</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">

                                    <div class="box">
                                        <input type="radio" id="control_09" name="select" value="9">
                                        <label for="control_09"><h2>600 متر او اقل</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">

                                    <div class="box">
                                        <input type="radio" id="control_010" name="select" value="10">
                                        <label for="control_010"><h2>ا كم او اقل</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">

                                    <div class="box">
                                        <input type="radio" id="control_11" name="select" value="11">
                                        <label for="control_11"><h2>لا يهم</h2></label>
                                    </div>
                                </div>


                            </section>

                    </div>

                    <div class="box-details">
                        <h3>نوع الوحدة السكنية</h3>
                        <p>بإمكانك اختيار نوع السكن وتحديد عدد الوحدات المطلوبة تالياً.</p>

                            <section class="grouped-radio row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="box">
                                        <input type="radio" id="control_12" name="select" value="12">
                                        <label for="control_12"><h2>سرير</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">

                                    <div class="box">
                                        <input type="radio" id="control_13" name="select" value="13">
                                        <label for="control_13"><h2>غرفة</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">

                                    <div class="box">
                                        <input type="radio" id="control_14" name="select" value="14">
                                        <label for="control_14"><h2>شقة</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">

                                    <div class="box">
                                        <input type="radio" id="control_15" name="select" value="15">
                                        <label for="control_15"><h2>دور كامل</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">

                                    <div class="box">
                                        <input type="radio" id="control_16" name="select" value="16">
                                        <label for="control_16"><h2>شاليه</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">

                                    <div class="box">
                                        <input type="radio" id="control_17" name="select" value="17">
                                        <label for="control_17"><h2>عمارة كاملة</h2></label>
                                    </div>
                                </div>


                            </section>

                    </div>

                    <div class="box-details">
                        <h3>نوع الوحدة السكنية</h3>
                        <p>بإمكانك اختيار نوع السكن وتحديد عدد الوحدات المطلوبة تالياً.</p>

                            <section class="grouped-radio row">
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="box">
                                        <input type="radio" id="control_18" name="select" value="18">
                                        <label for="control_18"><h2>1</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" id="control_19" name="select" value="19">
                                        <label for="control_19"><h2>2</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" id="control_20" name="select" value="20">
                                        <label for="control_20"><h2>3</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" id="control_21" name="select" value="21">
                                        <label for="control_21"><h2>4</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" id="control_22" name="select" value="22">
                                        <label for="control_22"><h2>5</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" id="control_23" name="select" value="23">
                                        <label for="control_23"><h2>6</h2></label>
                                    </div>
                                </div>


                            </section>
                            <p class="mb-3">او ادخل العدد المطلوب يدوياً:</p>
                            <div class="row">
                                <div class="col-lg-7 col-8">
                                    <input type="text" class="form-control" placeholder="ادخل العدد...">
                                </div>
                                <div class="col-lg-5 col-4">
                                    <input type="button" class="btn" value="تأكيد العدد">
                                </div>
                            </div>

                    </div>

                    <div class="box-details">
                        <h3>عدد النزلاء</h3>
                        <p>هل ستسكن وحدك ام معك اشخاص اخرين؟</p>

                            <section class="grouped-radio row">
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="box">
                                        <input type="radio" id="control_24" name="select" value="18">
                                        <label for="control_24"><h2>1</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" id="control_25" name="select" value="25">
                                        <label for="control_25"><h2>2</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" id="control_26" name="select" value="26">
                                        <label for="control_26"><h2>3</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" id="control_27" name="select" value="27">
                                        <label for="control_27"><h2>4</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" id="control_28" name="select" value="28">
                                        <label for="control_28"><h2>5</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" id="control_29" name="select" value="29">
                                        <label for="control_29"><h2>6</h2></label>
                                    </div>
                                </div>


                            </section>
                            <p class="mb-3">او ادخل العدد يدوياً:</p>
                            <div class="row">
                                <div class="col-lg-7 col-8">
                                    <input type="text" class="form-control" placeholder="ادخل العدد...">
                                </div>
                                <div class="col-lg-5 col-4">
                                    <input type="button" class="btn" value="تأكيد العدد">
                                </div>
                            </div>

                    </div>

                    <div class="box-details">
                        <h3>الميزانية</h3>
                        <p>قم بتحديد الميزانية لتكلفة الوحدة السكنية المطلوبة.</p>

                            <section class="grouped-radio row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="box">
                                        <input type="radio" id="control_30" name="select1" value="30">
                                        <label for="control_30"><h2>أقل من 5,000</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">

                                    <div class="box">
                                        <input type="radio" id="control_31" name="select1" value="31">
                                        <label for="control_31"><h2>10,000 ~ 5,000</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">

                                    <div class="box">
                                        <input type="radio" id="control_32" name="select1" value="32">
                                        <label for="control_32"><h2>25,000 ~ 10,000</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">

                                    <div class="box">
                                        <input type="radio" id="control_33" name="select1" value="33">
                                        <label for="control_33"><h2>لا يهم</h2></label>
                                    </div>
                                </div>


                            </section>
                            <div class="form-group form-check mt-3">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label style="background: none; box-shadow: none; border-radius: 0; padding: 0; margin-bottom: 0; text-align: revert; position: relative; width: 100%;" class="form-check-label" for="exampleCheck1">بإضافة طلب جديد، انت توافق تلقائياً على الشروط والأحكام الخاصة بمنصة مبيت.</label>
                            </div>


                    </div>

                    <button class="btn btn-success w-100">تأكيد الطلب</button>



                </div>
            </form>

        </div>
    </div>
    <!-- New Order -->
@endsection

