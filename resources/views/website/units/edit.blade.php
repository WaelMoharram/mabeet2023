@extends('website.layouts.app')
@section('title')
    {!! __('Edit Unit') !!}
@endsection
@extends('website.layouts.app')

@section('title')
    {!! __('Add New Unit') !!}
@endsection

@section('styles')
    <style>
        .image-container {
            position: relative;
            display: inline-block; /* or block, depending on your layout */
            width: 100%;
            max-height: 40%;
        }
        .image-container button.btn-delete {
            position: absolute;
            top: 0; /* Position at the top */
            left: 0; /* Position on the right */
            z-index: 2; /* Ensure the button is above the image */
            padding: 0.5em; /* Optional: to give some spacing inside the button */
            background-color: #dc3545; /* Bootstrap's .btn-danger color */
            border: none; /* Remove border if present */
            color: white; /* Button text color */
            cursor: pointer; /* To indicate the button is clickable */
            border-radius: 0; /* Optional: if you want square corners */
        }
        .image-container img {
            display: block; /* Remove any default inline spacing */
            width: 100%; /* Image fills container width */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
@section('styles')

@endsection
@section('content')
    <div class="add-mabet new-order">
        <div class="container">
            <div class="main-title text-center mt-5">
                <h1>تعديل سكن</h1>
                <h5>ادخل تفاصيل السكن لإستقبال افضل العروض</h5>
            </div>
            <form class="row" method="post" action="{{route('units.update',$unit->id)}}" enctype="multipart/form-data"
                  data-parsley-validate="novalidate">
                @csrf
                @method('PUT')
                @include('website.units._form')
            </form>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        document.querySelectorAll('.selectedFacilityValue').forEach(function (radio) {
            radio.addEventListener('change', function () {
                if (this.checked) {
                    theId= $(this).data('id');
                    theCount= $(this).val();
                    document.getElementById('facilityCount'+theId).value =theCount;
                }
            });
        });
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        document.querySelectorAll('.unitTypeSelection').forEach(function (radio) {
            radio.addEventListener('change', function () {
                if (this.checked) {
                    checkedValue = this.value;
                    // console.log(checkedValue);
                    xhr = $.ajax({
                        url: '{{route('get.facilities.by.type')}}',
                        type: 'POST',
                        data: {unit_type_id:checkedValue},
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ensure CSRF token is sent
                        },
                        success: function (data) {
                            // Handle success
                            if (data.status === true) {

                                $('#render-facilities').html("");
                                $('#render-facilities').html(data.data);

                                document.querySelectorAll('.selectedFacilityValue').forEach(function (radio) {
                                    radio.addEventListener('change', function () {
                                        if (this.checked) {
                                            theId= $(this).data('id');
                                            theCount= $(this).val();
                                            document.getElementById('facilityCount'+theId).value =theCount;
                                        }
                                    });
                                });

                            } else {

                            }
                        },
                        error: function (response) {

                        }
                    });
                }
            });
        });

    </script>
    <script>
        document.querySelectorAll('.guest-numbers').forEach(function (radio) {
            radio.addEventListener('change', function () {
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

                reader.onload = function () {
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
                center: {lat: 25.11113306029435, lng: 46.81614047357911},
                zoom: 7,
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

    <!-- Scripts of Removing image in AJAX  -->
    <script>
        $(".removeUnitImage").click(function (event) {

                var url = $(this).data('url');
                var UnitId = "{{$unit->id}}";
                var imageNumber = $(this).data('image');
                var $tr= $(this).closest($('#imageContainer' + imageNumber));
                console.log('url::: '+url);
                console.log('unit_id::: '+UnitId);
                console.log('imageNum::: '+imageNumber);

                $.ajax({
                    type:'POST',
                    url :url,
                    data:{unit_id:UnitId,imageNum:imageNumber},
                    dataType:'json',
                    success:function(data){

                        if(data.status == true){
                            console.log(data);
                            // var title = data.title;
                            // var msg = data.message;
                            // toastr.options = {
                            //     positionClass : 'toast-top-left',
                            //     onclick:null
                            // };
                            // var $toast = toastr['success'](msg,title);
                            // $toastlast = $toast;

                            $tr.fadeOut(500,function () {
                                $tr.remove();
                            });

                        }else{
                            // var title = data.title;
                            // var msg = data.message;
                            // toastr.options = {
                            //     positionClass : 'toast-top-left',
                            //     onclick:null
                            // };
                            // var $toast = toastr['error'](msg,title);
                            // $toastlast = $toast
                        }
                    }
                })
            });

    </script>


@endsection
