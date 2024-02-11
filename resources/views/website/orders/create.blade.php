@extends('website.layouts.app')
@section('title'){!! __('Create order') !!}@endsection
@section('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" integrity="sha512-MQXduO8IQnJVq1qmySpN87QQkiR1bZHtorbJBD0tzy7/0U9+YIC93QWHeGTEoojMVHWWNkoCp8V6OzVSYrX0oQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <!-- New Order -->

    <div class="new-order" style="margin-top:50px;margin-bottom: 50px;">
        <div class="container">
            <div class="main-title text-center">
                <h1>{{__('New order')}}</h1>
                <h5>{{__('Enter the details of the new request to receive the best offers')}}</h5>
            </div>

            <form class="row" method="post" action="{{route('orders.store')}}">
                @csrf
                <div class="col-lg-3">
                    <div class="area">
                        <h3>{{__('Place')}}</h3>
                        <p>{{__('Determine the location of residence and housing unit.')}}</p>

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
                                        {{input_error($errors,'city_id')}}

                                </div>




                        </section>
                    </div>
                    <div class="area">
                        <h3>{{__('Season')}}</h3>
                        <p>{{__('Determine the season for requesting the housing unit.')}}</p>

                        <section class="grouped-radio">
                                <div class="row">
                                    @foreach($seasons as $season)
                                        <div class="col-lg-12 col-md-6">
                                            <div class="box">
                                                <input type="radio" id="season_{{$season->id}}" name="season_id" value={{$season->id}}>
                                                <label for="season_{{$season->id}}">
                                                    <h2>{{$season->name}}</h2>
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                        <div class="col-lg-12 col-md-6">
                                            <div class="box">
                                                <input type="radio" id="season_null" name="season_id" value="0">
                                                <label for="season_null">
                                                    <h2>{{__('Another date')}}</h2>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="toggle-date-div col-12">
                                            <div class="form-group">
                                                <label for="date_from"> {{__('Date from')}} </label>
                                                {!! Form::text('date_from',null,['id'=>'date_from','placeholder'=>'YYYY-MM-DD','class'=>'form-control col flatpickr-basic',disable_on_show()]) !!}
                                                {{input_error($errors,'date_from')}}
                                            </div>


                                            <div class="form-group">
                                                <label for="date_to"> {{__('Date to')}} </label>
                                                {!! Form::text('date_to',null,['id'=>'date_to','placeholder'=>'YYYY-MM-DD','class'=>'form-control col flatpickr-basic',disable_on_show()]) !!}
                                                {{input_error($errors,'date_to')}}
                                            </div>

                                        </div>
                                        {{input_error($errors,'season_id')}}

                                </div>

                        </section>
                    </div>

                </div>
                <div class="col-lg-9">

                    <div class="box-details">
                        <h3>{{__('Order details')}}</h3>
                        <p>{{__('Enter the address and details of your housing unit request.')}}</p>
                        <input class="form-control mb-3" name="name" placeholder="{{__('Order address')}}">
                        {{input_error($errors,'name')}}

                        <textarea name="description" class="form-control mb-3" placeholder="{{__('Details')}}"></textarea>
                        {{input_error($errors,'description')}}

                    </div>

                    <div class="box-details">
                        <h3>{{__('The distance to the mosque.')}}</h3>
                        <p>{{__('Please note that prices increase as the housing unit gets closer to the mosque.')}}</p>

                            <section class="grouped-radio row">
                                @foreach($distances as $distance)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="box">
                                            <input type="radio" id="distance_{{$distance->id}}" name="distance_id" value="{{$distance->id}}">
                                            <label for="distance_{{$distance->id}}"><h2>{{$distance->name}}</h2></label>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-3 col-md-6">
                                    <div class="box">
                                        <input type="radio" id="distance_null" name="distance_id" value="0">
                                        <label for="distance_null"><h2>{{__('Does not matter.')}}</h2></label>
                                    </div>
                                </div>
                            </section>
                        {{input_error($errors,'distance_id')}}

                    </div>

                    <div class="box-details">
                        <h3>{{__('The type of housing unit.')}}</h3>
                        <p>{{__('You can choose the type of accommodation and specify the number of units required below.')}}</p>

                            <section class="grouped-radio row">
                                @foreach($unitTypes as $unitType)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="box">
                                            <input type="radio" id="unit_type_{{$unitType->id}}" name="unit_type_id" value="{{$unitType->id}}">
                                            <label for="unit_type_{{$unitType->id}}"><h2>{{$unitType->name}}</h2></label>
                                        </div>
                                    </div>
                                @endforeach


                            </section>
                        {{input_error($errors,'unit_type_id')}}
                    </div>

                    <div class="box-details">
                        <h3>{{__('The number of units required')}}</h3>
                        <p>{{__('You can specify the number of units required.')}}</p>

                            <section class="grouped-radio row">
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="box">
                                        <input type="radio" class="unit_number_select" id="unit_number_select_1" name="unit_number_select" value="1">
                                        <label for="unit_number_select_1"><h2>1</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" class="unit_number_select" id="unit_number_select_2" name="unit_number_select" value="2">
                                        <label for="unit_number_select_2"><h2>2</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" class="unit_number_select" id="unit_number_select_3" name="unit_number_select" value="3">
                                        <label for="unit_number_select_3"><h2>3</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" class="unit_number_select" id="unit_number_select_4" name="unit_number_select" value="4">
                                        <label for="unit_number_select_4"><h2>4</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" class="unit_number_select" id="unit_number_select_5" name="unit_number_select" value="5">
                                        <label for="unit_number_select_5"><h2>5</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" class="unit_number_select" id="unit_number_select_6" name="unit_number_select" value="6">
                                        <label for="unit_number_select_6"><h2>6</h2></label>
                                    </div>
                                </div>


                            </section>
                            <p class="mb-3">{{__('Or enter the required quantity manually:')}}</p>
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <input type="text" id="unit_number_select" name="unit_number" class="form-control" placeholder="{{__('Please enter the quantity...')}}">
                                </div>
                                {{input_error($errors,'unit_number')}}
                            </div>

                    </div>

                    <div class="box-details">
                        <h3>{{__('The number of guests.')}}</h3>
                        <p>{{__('Will you be living alone or with other people?')}}</p>

                            <section class="grouped-radio row">
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="box">
                                        <input type="radio" class="guest_number_select" id="guest_number_select_1" name="guest_number_select" value="1">
                                        <label for="guest_number_select_1"><h2>1</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" class="guest_number_select" id="guest_number_select_2" name="guest_number_select" value="2">
                                        <label for="guest_number_select_2"><h2>2</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" class="guest_number_select" id="guest_number_select_3" name="guest_number_select" value="3">
                                        <label for="guest_number_select_3"><h2>3</h2></label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" class="guest_number_select" id="guest_number_select_4" name="guest_number_select" value="4">
                                        <label for="guest_number_select_4"><h2>4</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" class="guest_number_select" id="guest_number_select_5" name="guest_number_select" value="5">
                                        <label for="guest_number_select_5"><h2>5</h2></label>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 col-6">

                                    <div class="box">
                                        <input type="radio" class="guest_number_select" id="guest_number_select_6" name="guest_number_select" value="6">
                                        <label for="guest_number_select_6"><h2>6</h2></label>
                                    </div>
                                </div>


                            </section>
                        <p class="mb-3">{{__('Or enter the required quantity manually:')}}</p>
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <input type="text" id="guest_number_select" name="guest_number" class="form-control" placeholder="{{__('Please enter the quantity...')}}">
                                {{input_error($errors,'guest_number')}}
                            </div>

                        </div>

                    </div>

                    <div class="box-details">
                        <h3>{{__('The budget.')}}</h3>
                        <p>{{__('Specify the budget for the required housing unit cost')}}</p>

                            <section class="grouped-radio row">
                                @foreach($budgets as $budget)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="box">
                                            <input type="radio" id="budget_{{$budget->id}}" name="budget_id" value="{{$budget->id}}">
                                            <label for="budget_{{$budget->id}}"><h2>{{$budget->name}}</h2></label>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-3 col-md-6">
                                    <div class="box">
                                        <input type="radio" id="budget_null" name="budget_id" value="0">
                                        <label for="budget_null"><h2>{{__('Does not matter.')}}</h2></label>
                                    </div>
                                </div>
                                    {{input_error($errors,'budget_id')}}

                            </section>
                            <div class="form-group form-check mt-3">
                                <input type="checkbox" name="accept" value="1" class="form-check-input" id="accept_checkbox">
                                <label for="accept_checkbox" style="background: none; box-shadow: none; border-radius: 0; padding: 0; margin-bottom: 0; text-align: revert; position: relative; width: 100%;" class="form-check-label" for="exampleCheck1">{{__('By adding a new order, you automatically agree to the terms and conditions of the Stay platform')}}</label>
                                {{input_error($errors,'accept')}}

                            </div>


                    </div>

                    <button class="btn btn-success w-100">{{__('Order confirmation')}}</button>



                </div>
            </form>

        </div>
    </div>
    <!-- New Order -->
@endsection
@section('scripts')

    <script>
        $(document).ready(function(){
            // Hide the div initially
            $(".toggle-date-div").hide();

            // Listen for change event on the radio button
            $('input[name="season_id"]').change(function(){
                // Check if the radio button is checked
                if($(this).is(':checked')){
                    // Check if the selected value is not empty
                    if($(this).val() !== ''){
                        // Show the div
                        $(".toggle-date-div").hide();
                    } else {
                        // Hide the div
                        $(".toggle-date-div").show();
                    }
                }
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr('.flatpickr-basic', {
            enableTime: false,
            dateFormat: "Y-m-d",
        });
    </script>
    <script>
        document.querySelectorAll('.unit_number_select').forEach(function (radio) {
            radio.addEventListener('change', function () {
                if (this.checked) {
                    document.getElementById('unit_number_select').value = this.value;
                }
            });
        });
        document.querySelectorAll('.guest_number_select').forEach(function (radio) {
            radio.addEventListener('change', function () {
                if (this.checked) {
                    document.getElementById('guest_number_select').value = this.value;
                }
            });
        });
    </script>
@endsection
