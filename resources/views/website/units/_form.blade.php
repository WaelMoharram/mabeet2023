

    <div class="col-lg-3">
        <div class="area">
            <h3>المكان</h3>
            <p>تحديد مكان الإقامة والوحدة السكنية.</p>

            <section class="grouped-radio">

                <div class="row">
                    @forelse($cities as $city)
                        <div class="col-lg-12 col-md-6">
                            <div class="box">
                                <input required type="radio" id="control_{{$city->id}}" name="city_id"
                                       value="{{$city->id}}"
                                       @if(isset($unit)) @if($unit->city_id == $city->id) checked @endif @endif >
                                <label for="control_{{$city->id}}">
                                    <h2>{{$city->name}}</h2>
                                </label>
                            </div>
                        </div>
                    @empty

                    @endforelse

                </div>


            </section>
        </div>

    </div>
    <div class="col-lg-9">

        <div class="box-details">
            <h3>تفاصيل السكن</h3>
            <p>ادخل عنوان وتفاصيل اضافتك للوحدة السكنية.</p>
            <input type="text" required name="name" class="form-control mb-3" placeholder="عنوان او اسم السكن"
                   @if(isset($unit)) value="{{$unit->name}}" @endif
                   data-parsley-required-message="الحقل مطلوب"
            >
            <textarea required name="description" class="form-control mb-3"
                      placeholder="التفاصيل">@if(isset($unit))
                    {{$unit->description}}
                @endif</textarea>

            <input type="number" required name="amount" class="form-control mb-3" placeholder="سعر الوحدة" min="0"
                   @if(isset($unit)) value="{{$unit->amount}}" @endif>
            <div class="col-12">
                <div class="alert text-center" role="alert">
                    سعر الوحدة هو السعر الأساسي . بإمكانك دائما تعديل السعر عند تقديم عروض على طلبات العملاء.
                </div>
            </div>
        </div>

        <div class="box-details">
            <h3>مكان الوحدة السكنية</h3>
            <p>قم بتحديد مكان الوحدة السكنية بشكل دقيق على الخريطة.</p>
            <div class="responsive-map">

                <input type="text" class="form-control" id="pac-input" data-parsley-required-message="ابحث عن عنوان"
                       name="address" placeholder="ابحث عن الموقع" required
                       style="z-index: 0;position: absolute;top: 11px;left: 113px;height: 34px;width: 63%;"
                       @if(isset($unit)) value="{{$unit->address}}" @endif
                       maxlength="200">

                <div id="map" style="width: 100%; height: 100%;"></div>
                <input required type="hidden" name="lat" id="lat" @if(isset($unit)) value="{{$unit->lat}}" @endif />
                <input required type="hidden" name="lng" id="lng" @if(isset($unit)) value="{{$unit->lat}}" @endif />
            </div>
        </div>

        <div class="box-details">
            <h3>الصور</h3>
            <p>ارفق صور واضحة للوحدة السكنية.</p>
            <div class="wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="box-content">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                                <label>
                                    <input name="image1" type="file" class="image-upload" accept="image/*"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="alert text-center" role="alert">
                            الصورة الرئيسية ستظهر في الواجهة للعملاء. اجعلها افضل صورة للوحدة السكنية.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-content">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                                <label>
                                    <input name="image2" type="file" class="image-upload" accept="image/*"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-content">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                                <label>
                                    <input name="image3" type="file" class="image-upload" accept="image/*"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-content">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                                <label>
                                    <input name="image4" type="file" class="image-upload" accept="image/*"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-content">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                                <label>
                                    <input name="image5" type="file" class="image-upload" accept="image/*"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-content">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                                <label>
                                    <input name="image6" type="file" class="image-upload" accept="image/*"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-content">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                                <label>
                                    <input name="image7" type="file" class="image-upload" accept="image/*"/>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="box-details">
            <h3>نوع الوحدة السكنية</h3>
            <p>بإمكانك اختيار نوع السكن وتحديد عدد الوحدات المطلوبة تالياً.</p>


            <section class="grouped-radio row">
                @foreach($unitTypes as $unitType)
                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <input required type="radio" id="control_{{$unitType->id}}" name="unit_type_id"
                                   value="{{$unitType->id}}"
                                   @if(isset($unit)) @if($unit->unit_type_id == $unitType->id) checked @endif @endif
                            >
                            <label for="control_{{$unitType->id}}"><h2>{{$unitType->name}}</h2></label>
                        </div>
                    </div>
                @endforeach

            </section>


        </div>

        <div class="box-details">
            <h3 class="mb-4">المرافق الاساسية</h3>
            <p class="mb-4">قم بتحديد العدد المتوفر من المرافق الاساسية للوحدة السكنية.</p>

            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-12">
                    <div class="card  mb-4" style="background-color: #eef2ec; border-color: #ffffff;">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa fa-check-circle" style="color: #81CC6DFF;"></i> سرير</h5>
                            <section class="grouped-radio row">
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="box">
                                        <input class="guest-numbers" type="radio" id="control_0018" value="1" name="guestNumbersSelect"
                                              checked
                                        >
                                        <label for="control_0018"><h2>1</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input class="guest-numbers" type="radio" id="control_0019" value="2" name="guestNumbersSelect"

                                        >
                                        <label for="control_0019"><h2>2</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input class="guest-numbers" type="radio" id="control_0020" value="3" name="guestNumbersSelect"

                                        >
                                        <label for="control_0020"><h2>3</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input class="guest-numbers" type="radio" id="control_0021" value="4" name="guestNumbersSelect"

                                        >
                                        <label for="control_0021"><h2>4</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input class="guest-numbers" type="radio" id="control_0022" value="5" name="guestNumbersSelect"

                                        >
                                        <label for="control_0022"><h2>5</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="box">
                                        <input class="guest-numbers" type="radio" id="control_0023" value="6" name="guestNumbersSelect"

                                        >
                                        <label for="control_0023"><h2>6</h2></label>
                                    </div>
                                </div>

                            </section>
                            <p class="mb-3 mt-3">او ادخل العدد يدوياً:</p>
                            <div class="row">
                                <div class="col-lg-7 col-8">
                                    <input id="guest_numbers" required name="guest_numbers" type="text" class="form-control"
                                           placeholder="ادخل العدد..."

                                    >
                                </div>
                                <div class="col-lg-5 col-4">
                                    {{--                    <input type="button" class="btn" value="تأكيد العدد">--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-12">
                    <div class="card  mb-4" style="background-color: #eef2ec; border-color: #ffffff;">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa fa-check-circle" style="color: #81CC6DFF;"></i> حمام</h5>
                            <section class="grouped-radio row">
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="box">
                                        <input class="guest-numbers" type="radio" id="control_0018" value="1" name="guestNumbersSelect"
                                               checked
                                        >
                                        <label for="control_0018"><h2>1</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input class="guest-numbers" type="radio" id="control_0019" value="2" name="guestNumbersSelect"

                                        >
                                        <label for="control_0019"><h2>2</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input class="guest-numbers" type="radio" id="control_0020" value="3" name="guestNumbersSelect"

                                        >
                                        <label for="control_0020"><h2>3</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input class="guest-numbers" type="radio" id="control_0021" value="4" name="guestNumbersSelect"

                                        >
                                        <label for="control_0021"><h2>4</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input class="guest-numbers" type="radio" id="control_0022" value="5" name="guestNumbersSelect"

                                        >
                                        <label for="control_0022"><h2>5</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="box">
                                        <input class="guest-numbers" type="radio" id="control_0023" value="6" name="guestNumbersSelect"

                                        >
                                        <label for="control_0023"><h2>6</h2></label>
                                    </div>
                                </div>

                            </section>
                            <p class="mb-3 mt-3">او ادخل العدد يدوياً:</p>
                            <div class="row">
                                <div class="col-lg-7 col-8">
                                    <input id="guest_numbers" required name="guest_numbers" type="text" class="form-control"
                                           placeholder="ادخل العدد..."

                                    >
                                </div>
                                <div class="col-lg-5 col-4">
                                    {{--                    <input type="button" class="btn" value="تأكيد العدد">--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="box-details">
            <h3>عدد النزلاء</h3>
            <p>هل ستسكن وحدك ام معك اشخاص اخرين؟</p>

            <section class="grouped-radio row">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="box">
                        <input class="guest-numbers" type="radio" id="control_0018" value="1" name="guestNumbersSelect"
                               @if(isset($unit)) @if($unit->guest_numbers ==1) checked @endif @endif
                        >
                        <label for="control_0018"><h2>1</h2></label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">

                    <div class="box">
                        <input class="guest-numbers" type="radio" id="control_0019" value="2" name="guestNumbersSelect"
                               @if(isset($unit)) @if($unit->guest_numbers ==2) checked @endif @endif
                        >
                        <label for="control_0019"><h2>2</h2></label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">

                    <div class="box">
                        <input class="guest-numbers" type="radio" id="control_0020" value="3" name="guestNumbersSelect"
                               @if(isset($unit)) @if($unit->guest_numbers ==3) checked @endif @endif
                        >
                        <label for="control_0020"><h2>3</h2></label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">

                    <div class="box">
                        <input class="guest-numbers" type="radio" id="control_0021" value="4" name="guestNumbersSelect"
                               @if(isset($unit)) @if($unit->guest_numbers ==4) checked @endif @endif
                        >
                        <label for="control_0021"><h2>4</h2></label>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">

                    <div class="box">
                        <input class="guest-numbers" type="radio" id="control_0022" value="5" name="guestNumbersSelect"
                               @if(isset($unit)) @if($unit->guest_numbers ==5) checked @endif @endif
                        >
                        <label for="control_0022"><h2>5</h2></label>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="box">
                        <input class="guest-numbers" type="radio" id="control_0023" value="6" name="guestNumbersSelect"
                               @if(isset($unit)) @if($unit->guest_numbers ==6) checked @endif @endif
                        >
                        <label for="control_0023"><h2>6</h2></label>
                    </div>
                </div>

            </section>
            <p class="mb-3 mt-3">او ادخل العدد يدوياً:</p>
            <div class="row">
                <div class="col-lg-7 col-8">
                    <input id="guest_numbers" required name="guest_numbers" type="text" class="form-control"
                           placeholder="ادخل العدد..."
                           @if(isset($unit)) value="{{$unit->guest_numbers}}" @endif
                    >
                </div>
                <div class="col-lg-5 col-4">
                    {{--                    <input type="button" class="btn" value="تأكيد العدد">--}}
                </div>
            </div>

        </div>

{{--        <div class="box-details">--}}
{{--            <h3>الميزانية</h3>--}}
{{--            <p>قم بتحديد الميزانية لتكلفة الوحدة السكنية المطلوبة.</p>--}}


{{--            <section class="grouped-radio row">--}}
{{--                @foreach($budgets as $budget)--}}

{{--                    <div class="col-lg-3 col-md-6">--}}
{{--                        <div class="box">--}}
{{--                            <input required type="radio" id="control_1{{$budget->id}}" name="budget_id"--}}
{{--                                   value="{{$budget->id}}"--}}
{{--                                   @if(isset($unit)) @if($unit->budget_id ==$budget->id) checked @endif @endif--}}
{{--                            >--}}
{{--                            <label for="control_1{{$budget->id}}"><h2>{{$budget->name}}</h2></label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

{{--                <div class="box">--}}
{{--                    <input type="radio" id="control_1111111" name="budget_id">--}}
{{--                    <label for="control_1111111"><h2>لا يهم</h2></label>--}}
{{--                </div>--}}

{{--            </section>--}}
{{--            <div class="form-group form-check mt-3">--}}
{{--                <input required type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                <label--}}
{{--                    style="background: none; box-shadow: none; border-radius: 0; padding: 0; margin-bottom: 0; text-align: revert; position: relative; width: 100%;"--}}
{{--                    class="form-check-label" for="exampleCheck1">بإضافة طلب جديد، انت توافق تلقائياً على--}}
{{--                    الشروط والأحكام الخاصة بمنصة مبيت.</label>--}}
{{--            </div>--}}


{{--        </div>--}}

        <div class="box-details">

            <h3>الخدمات</h3>
            <p>قم بتحديد اذا ما تتوفر هذه الخدمات في الوحدة السكنية.</p>


            <div id="div_id_radio_buttons" class="form-group">
                <div class="row">
                    @foreach($services as $service)
                        <label for="id_id_radio_buttons_0_{{$service->id}}"
                               class="custom-control custom-radio col-md-4">
                            <input type="checkbox" class="custom-control-input is-invalid" name="service_ids[]"
                                   @if(isset($unit))
                                       @foreach($unit->services as $unitService)
                                           @if($unitService->id == $service->id)
                                               checked
                                            @endif
                                   @endforeach
                                   @endif
                                   id="id_id_radio_buttons_0_{{$service->id}}" value="{{$service->id}}"/>
                            <label for="id_id_radio_buttons_0_{{$service->id}}"
                                   class="custom-control-label">{{$service->name}}
                            </label>
                        </label>
                    @endforeach


                </div>
                {{--                            <p class="mb-3 mt-3">او ادخل الخدمه يدوياً:</p>--}}
                {{--                            <div class="row">--}}
                {{--                                <div class="col-lg-7 col-8">--}}
                {{--                                    <input type="text" class="form-control" placeholder="ادخل العدد...">--}}
                {{--                                </div>--}}
                {{--                                <div class="col-lg-5 col-4">--}}
                {{--                                    <input type="button" class="btn" value="تأكيد العدد">--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
            </div>
        </div>
        <button type="submit" class="btn btn-success w-100 mb-5">تأكيد الطلب</button>

    </div>



