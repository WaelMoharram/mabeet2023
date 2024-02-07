@extends('website.layouts.app')
@section('title')
    {!! __('Add New Unit') !!}
@endsection
@section('content')
    <div class="add-mabet new-order">
        <div class="container">
            <div class="main-title text-center mt-5">
                <h1>سكن جديد</h1>
                <h5>ادخل تفاصيل السكن الجديد لإستقبال افضل العروض</h5>
            </div>

            <form class="row" method="post" action="{{route('units.store')}}" enctype="multipart/form-data">
                @csrf
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
                                                   value="{{$city->id}}">
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
                        <input required name="name" class="form-control mb-3" placeholder="عنوان او اسم السكن">
                        <textarea required name="description" class="form-control mb-3"
                                  placeholder="التفاصيل"></textarea>
                    </div>

                    <div class="box-details">
                        <h3>مكان الوحدة السكنية</h3>
                        <p>قم بتحديد مكان الوحدة السكنية بشكل دقيق على الخريطة.</p>
                        <div class="responsive-map">

                            <input type="text" class="form-control" id="pac-input" data-parsley-required-message="ابحث عن عنوان"
                                   name="address" placeholder="ابحث عن الموقع" required
                                   style="z-index: 0;position: absolute;top: 11px;left: 113px;height: 34px;width: 63%;"
                                   maxlength="200">

                            <div id="map" style="width: 100%; height: 1000px;"></div>
                            <input type="hidden" name="lat" id="lat"/>
                            <input type="hidden" name="lng" id="lng"/>
{{--                            <div id="map" style="height: 400px; width: 100%;"></div>--}}

{{--                            <input type="hidden" id="address" placeholder="Address">--}}
{{--                            <input type="hidden" id="lat" placeholder="Latitude">--}}
{{--                            <input type="hidden" id="lng" placeholder="Longitude">--}}


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
                                                <input  name="image1" type="file" class="image-upload" accept="image/*"/>
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
                                    <input type="radio" id="control_{{$unitType->id}}" name="select" value="{{$unitType->id}}">
                                    <label for="control_{{$unitType->id}}"><h2>{{$unitType->name}}</h2></label>
                                </div>
                            </div>
                            @endforeach

                        </section>


                    </div>



                    <div class="box-details">
                        <h3>عدد النزلاء</h3>
                        <p>هل ستسكن وحدك ام معك اشخاص اخرين؟</p>


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
                        <p class="mb-3 mt-3">او ادخل العدد يدوياً:</p>
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
                                    <input type="radio" id="control_08" name="select" value="8">
                                    <label for="control_08"><h2>أقل من 5,000</h2></label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">

                                <div class="box">
                                    <input type="radio" id="control_09" name="select" value="9">
                                    <label for="control_09"><h2>10,000 ~ 5,000</h2></label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">

                                <div class="box">
                                    <input type="radio" id="control_010" name="select" value="10">
                                    <label for="control_010"><h2>25,000 ~ 10,000</h2></label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">

                                <div class="box">
                                    <input type="radio" id="control_11" name="select" value="11">
                                    <label for="control_11"><h2>لا يهم</h2></label>
                                </div>
                            </div>


                        </section>
                        <div class="form-group form-check mt-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label
                                style="background: none; box-shadow: none; border-radius: 0; padding: 0; margin-bottom: 0; text-align: revert; position: relative; width: 100%;"
                                class="form-check-label" for="exampleCheck1">بإضافة طلب جديد، انت توافق تلقائياً على
                                الشروط والأحكام الخاصة بمنصة مبيت.</label>
                        </div>


                    </div>

                    <div class="box-details">

                        <h3>الخدمات</h3>
                        <p>قم بتحديد اذا ما تتوفر هذه الخدمات في الوحدة السكنية.</p>


                        <div id="div_id_radio_buttons" class="form-group">
                            <div class="row">
                                <label for="id_id_radio_buttons_0_10" class="custom-control custom-radio col-md-4">
                                    <input type="checkbox" class="custom-control-input is-invalid" name="radio_buttons"
                                           id="id_id_radio_buttons_0_10" value="option_one"/>
                                    <label for="id_id_radio_buttons_0_10" class="custom-control-label">مجلس
                                    </label>
                                </label>
                                <label for="id_id_radio_buttons_0_20" class="custom-control custom-radio col-md-4">
                                    <input type="checkbox" class="custom-control-input is-invalid" name="radio_buttons"
                                           id="id_id_radio_buttons_0_20" value="option_two"/>
                                    <label for="id_id_radio_buttons_0_20" class="custom-control-label">برادات ماء
                                    </label>
                                </label>
                                <label for="id_id_radio_buttons_0_30" class="custom-control custom-radio col-md-4">
                                    <input type="checkbox" class="custom-control-input is-invalid" name="radio_buttons"
                                           id="id_id_radio_buttons_0_30" value="option_three"/>
                                    <label for="id_id_radio_buttons_0_30" class="custom-control-label">مكيف
                                    </label>
                                </label>
                                <label for="id_id_radio_buttons_0_40" class="custom-control custom-radio col-md-4">
                                    <input type="checkbox" class="custom-control-input is-invalid" name="radio_buttons"
                                           id="id_id_radio_buttons_0_40" value="option_three"/>
                                    <label for="id_id_radio_buttons_0_40" class="custom-control-label">ادوات نظافة
                                    </label>
                                </label>
                                <label for="id_id_radio_buttons_0_50" class="custom-control custom-radio col-md-4">
                                    <input type="checkbox" class="custom-control-input is-invalid" name="radio_buttons"
                                           id="id_id_radio_buttons_0_50" value="option_three"/>
                                    <label for="id_id_radio_buttons_0_50" class="custom-control-label">سرير
                                    </label>
                                </label>
                                <label for="id_id_radio_buttons_0_60" class="custom-control custom-radio col-md-4">
                                    <input type="checkbox" class="custom-control-input is-invalid" name="radio_buttons"
                                           id="id_id_radio_buttons_0_60" value="option_three"/>
                                    <label for="id_id_radio_buttons_0_60" class="custom-control-label">ثلاجة
                                    </label>
                                </label>
                                <label for="id_id_radio_buttons_0_70" class="custom-control custom-radio col-md-4">
                                    <input type="checkbox" class="custom-control-input is-invalid" name="radio_buttons"
                                           id="id_id_radio_buttons_0_70" value="option_three"/>
                                    <label for="id_id_radio_buttons_0_70" class="custom-control-label">واي فاي
                                    </label>
                                </label>
                                <label for="id_id_radio_buttons_0_80" class="custom-control custom-radio col-md-4">
                                    <input type="checkbox" class="custom-control-input is-invalid" name="radio_buttons"
                                           id="id_id_radio_buttons_0_80" value="option_three"/>
                                    <label for="id_id_radio_buttons_0_80" class="custom-control-label">سخان
                                    </label>
                                </label>
                                <label for="id_id_radio_buttons_0_90" class="custom-control custom-radio col-md-4">
                                    <input type="checkbox" class="custom-control-input is-invalid" name="radio_buttons"
                                           id="id_id_radio_buttons_0_90" value="option_three"/>
                                    <label for="id_id_radio_buttons_0_90" class="custom-control-label">غسالة
                                    </label>
                                </label>
                            </div>
                            <p class="mb-3 mt-3">او ادخل الخدمه يدوياً:</p>
                            <div class="row">
                                <div class="col-lg-7 col-8">
                                    <input type="text" class="form-control" placeholder="ادخل العدد...">
                                </div>
                                <div class="col-lg-5 col-4">
                                    <input type="button" class="btn" value="تأكيد العدد">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success w-100 mb-5">تأكيد الطلب</button>

                </div>


            </form>
        </div>
    </div>
@endsection

@section('scripts')
{{--    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfNbY4ldFKy2apqzKoQmR7arfGypZHI3I&callback=initMap"></script>--}}

{{--    <script>--}}
{{--        function initMap() {--}}
{{--            var initialLocation = { lat: -34.397, lng: 150.644 }; // Replace with your desired initial location--}}
{{--            var map = new google.maps.Map(document.getElementById('map'), {--}}
{{--                zoom: 8,--}}
{{--                center: initialLocation--}}
{{--            });--}}

{{--            var marker = new google.maps.Marker({--}}
{{--                position: initialLocation,--}}
{{--                map: map,--}}
{{--                draggable: true // Optional: if you want the marker to be draggable--}}
{{--            });--}}

{{--            // Add click event listener to the map--}}
{{--            map.addListener('click', function(e) {--}}
{{--                placeMarkerAndPanTo(e.latLng, map, marker);--}}
{{--            });--}}

{{--            // Update the inputs when the marker is moved--}}
{{--            google.maps.event.addListener(marker, 'dragend', function() {--}}
{{--                updateInputs(marker.getPosition());--}}
{{--            });--}}
{{--        }--}}

{{--        function placeMarkerAndPanTo(latLng, map, marker) {--}}
{{--            marker.setPosition(latLng);--}}
{{--            map.panTo(latLng);--}}
{{--            updateInputs(latLng);--}}
{{--        }--}}

{{--        function updateInputs(latLng) {--}}
{{--            document.getElementById('lat').value = latLng.lat();--}}
{{--            document.getElementById('lng').value = latLng.lng();--}}

{{--            // Get the address using reverse geocoding--}}
{{--            var geocoder = new google.maps.Geocoder;--}}
{{--            geocoder.geocode({ 'location': latLng }, function(results, status) {--}}
{{--                if (status === 'OK') {--}}
{{--                    if (results[0]) {--}}
{{--                        document.getElementById('address').value = results[0].formatted_address;--}}
{{--                    } else {--}}
{{--                        window.alert('No results found');--}}
{{--                    }--}}
{{--                } else {--}}
{{--                    window.alert('Geocoder failed due to: ' + status);--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}

{{--    </script>--}}
    <script>
        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 24.678172168108613, lng: 46.58194551717516},
                zoom: 10,
                mapTypeId: 'roadmap'
            });

            var marker;
            google.maps.event.addListener(map, 'click', function (event) {
                map.setZoom();
                var mylocation = event.latLng;
                map.setCenter(mylocation);


                $('#lat').val(event.latLng.lat());
                $('#lng').val(event.latLng.lng());


                codeLatLng(event.latLng.lat(), event.latLng.lng());

                setTimeout(function () {
                    if (!marker)
                        marker = new google.maps.Marker({position: mylocation, map: map});
                    else
                        marker.setPosition(mylocation);
                }, 600);

            });


            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function () {
                searchBox.setBounds(map.getBounds());
            });


            var markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function () {
                var places = searchBox.getPlaces();
                // var location = place.geometry.location;
                // var lat = location.lat();
                // var lng = location.lng();
                if (places.length == 0) {
                    return;
                }

                // Clear out the old markers.
                markers.forEach(function (marker) {
                    marker.setMap(null);
                });
                markers = [];


                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function (place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };

                    // Create a marker for each place.
                    markers.push(new google.maps.Marker({
                        map: map,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                    $('#lat').val(place.geometry.location.lat());
                    $('#lng').val(place.geometry.location.lng());
                    $('#address').val(place.formatted_address);

                });
                map.fitBounds(bounds);
            });
        }

        function showPosition(position) {
            map.setCenter({lat: position.coords.latitude, lng: position.coords.longitude});
            codeLatLng(position.coords.latitude, position.coords.longitude);
        }

        function codeLatLng(lat, lng) {
            var geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(lat, lng);
            geocoder.geocode({
                'latLng': latlng
            }, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        // console.log(results[1].formatted_address);
                        $("#demo").html(results[1].formatted_address);

                        $("#addressProfile").val(results[1].formatted_address);
                        $("#pac-input").val(results[1].formatted_address);

                    } else {
                    }
                } else {
                    alert('Geocoder failed due to: ' + status);
                }
            });
        }

    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfNbY4ldFKy2apqzKoQmR7arfGypZHI3I&language=ar&libraries=places&callback=initAutocomplete&loading=async"
        async defer></script>

@endsection
