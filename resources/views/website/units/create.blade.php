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

            <form class="row" method="post" action="{{route('units.store')}}" enctype="multipart/form-data"  data-parsley-validate="novalidate">
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
                        <input type="text" required name="name" class="form-control mb-3" placeholder="عنوان او اسم السكن"
                        data-parsley-required-message="الحقل مطلوب"
                        >
                        <textarea required name="description" class="form-control mb-3"
                                  placeholder="التفاصيل"></textarea>

                        <input type="number" required name="amount" class="form-control mb-3" placeholder="سعر الوحدة" min="0" >
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

                            <input  type="text" class="form-control" id="pac-input" data-parsley-required-message="ابحث عن عنوان"
                                   name="address" placeholder="ابحث عن الموقع" required
                                   style="z-index: 0;position: absolute;top: 11px;left: 113px;height: 34px;width: 63%;"
                                   maxlength="200">

                            <div id="map" style="width: 100%; height: 100%;"></div>
                            <input required type="hidden" name="lat" id="lat"/>
                            <input required type="hidden" name="lng" id="lng"/>
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
                                    <input required type="radio" id="control_{{$unitType->id}}" name="unit_type_id" value="{{$unitType->id}}">
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
                                    <input class="guest-numbers" type="radio" id="control_0018" value="1" name="guestNumbersSelect">
                                    <label for="control_0018"><h2>1</h2></label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">

                                <div class="box">
                                    <input class="guest-numbers" type="radio" id="control_0019" value="2" name="guestNumbersSelect">
                                    <label for="control_0019"><h2>2</h2></label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">

                                <div class="box">
                                    <input class="guest-numbers" type="radio" id="control_0020" value="3" name="guestNumbersSelect">
                                    <label for="control_0020"><h2>3</h2></label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">

                                <div class="box">
                                    <input class="guest-numbers" type="radio" id="control_0021" value="4" name="guestNumbersSelect">
                                    <label for="control_0021"><h2>4</h2></label>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4 col-6">

                                <div class="box">
                                    <input class="guest-numbers" type="radio" id="control_0022" value="5" name="guestNumbersSelect">
                                    <label for="control_0022"><h2>5</h2></label>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="box">
                                    <input class="guest-numbers" type="radio" id="control_0023" value="6" name="guestNumbersSelect">
                                    <label for="control_0023"><h2>6</h2></label>
                                </div>
                            </div>

                        </section>
                        <p class="mb-3 mt-3">او ادخل العدد يدوياً:</p>
                        <div class="row">
                            <div class="col-lg-7 col-8">
                                <input id="guest_numbers" required name="guest_numbers" type="text" class="form-control" placeholder="ادخل العدد...">
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
                            @foreach($budgets as $budget)

                                <div class="col-lg-3 col-md-6">
                                    <div class="box">
                                        <input required type="radio" id="control_1{{$budget->id}}" name="budget_id" value="{{$budget->id}}">
                                        <label for="control_1{{$budget->id}}"><h2>{{$budget->name}}</h2></label>
                                    </div>
                                </div>
                            @endforeach

                                <div class="box">
                                    <input type="radio" id="control_1111111" name="budget_id" >
                                    <label for="control_1111111"><h2>لا يهم</h2></label>
                                </div>

                        </section>
                        <div class="form-group form-check mt-3">
                            <input required type="checkbox" class="form-check-input" id="exampleCheck1">
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
                                @foreach($services as $service)
                                    <label for="id_id_radio_buttons_0_{{$service->id}}" class="custom-control custom-radio col-md-4">
                                        <input type="checkbox" class="custom-control-input is-invalid" name="service_ids[]"
                                               id="id_id_radio_buttons_0_{{$service->id}}" value="{{$service->id}}"/>
                                        <label for="id_id_radio_buttons_0_{{$service->id}}" class="custom-control-label">{{$service->name}}
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


            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.querySelectorAll('.guest-numbers').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.checked) {
                    document.getElementById('guest_numbers').value = this.value;
                }
            });
        });
    </script>
    <script>
        function initImageUpload(box) {
            let uploadField = box.querySelector(".image-upload");

            uploadField.addEventListener("change", getFile);

            function getFile(e) {
                let file = e.currentTarget.files[0];
                checkType(file);
            }

            function previewImage(file) {
                let thumb = box.querySelector(".js--image-preview"),
                    reader = new FileReader();

                reader.onload = function() {
                    thumb.style.backgroundImage = "url(" + reader.result + ")";
                };
                reader.readAsDataURL(file);
                thumb.className += " js--no-default";
            }

            function checkType(file) {
                let imageType = /image.*/;
                if (!file.type.match(imageType)) {
                    throw "Datei ist kein Bild";
                } else if (!file) {
                    throw "Kein Bild gewählt";
                } else {
                    previewImage(file);
                }
            }
        }

        // initialize box-scope
        var boxes = document.querySelectorAll(".box-content");

        for (let i = 0; i < boxes.length; i++) {
            let box = boxes[i];
            initDropEffect(box);
            initImageUpload(box);
        }

        /// drop-effect
        function initDropEffect(box) {
            let area,
                drop,
                areaWidth,
                areaHeight,
                maxDistance,
                dropWidth,
                dropHeight,
                x,
                y;

            // get clickable area for drop effect
            area = box.querySelector(".js--image-preview");
            area.addEventListener("click", fireRipple);

            function fireRipple(e) {
                area = e.currentTarget;
                // create drop
                if (!drop) {
                    drop = document.createElement("span");
                    drop.className = "drop";
                    this.appendChild(drop);
                }
                // reset animate class
                drop.className = "drop";

                // calculate dimensions of area (longest side)
                areaWidth = getComputedStyle(this, null).getPropertyValue("width");
                areaHeight = getComputedStyle(this, null).getPropertyValue("height");
                maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

                // set drop dimensions to fill area
                drop.style.width = maxDistance + "px";
                drop.style.height = maxDistance + "px";

                // calculate dimensions of drop
                dropWidth = getComputedStyle(this, null).getPropertyValue("width");
                dropHeight = getComputedStyle(this, null).getPropertyValue("height");

                // calculate relative coordinates of click
                // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
                x = e.pageX - this.offsetLeft - parseInt(dropWidth, 10) / 2;
                y = e.pageY - this.offsetTop - parseInt(dropHeight, 10) / 2 - 30;

                // position drop and animate
                drop.style.top = y + "px";
                drop.style.left = x + "px";
                drop.className += " animate";
                e.stopPropagation();
            }
        }
    </script>
    <script>
        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 24.678172168108613, lng: 46.58194551717516},
                zoom: 10,
                mapTypeId: 'roadmap',
                zoomControl: true, // Enable zoom controls
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
