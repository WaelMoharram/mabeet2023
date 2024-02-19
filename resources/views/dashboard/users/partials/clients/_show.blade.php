<div class="main-panel user-details">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-3">
                <div class="card p-3">
                    <h3 class="text-center py-3">{{__('Owner info')}}</h3>
                    <div class="teble-responsive details-table">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>{{__('Name')}}</th>
                                <td><b>{{$user->name}}</b></td>
                            </tr>
                            <tr>
                                <th>{{__('Phone')}}</th>
                                <td><b>{{$user->phone}}</b></td>
                            </tr>
                            <tr>
                                <th>{{__('Email')}}</th>
                                <td><b>{{$user->email}}</b></td>
                            </tr>
                            <tr>
                                <th>{{__('Country')}}</th>
                                <td><b>{{$user->country->name ?? '--'}}</b></td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="teble-responsive details-table">
                        <table class="table ">
                            <tbody>
                            <tr>
                                <th>{{__('Registration date')}}</th>
                                <td><b>{{$user->created_at->format('Y-m-d')}}</b></td>
                            </tr>
                            <tr>
                                <th>{{__('Last login')}}</th>
                                <td><b>{{$user->last_login_at ? $user->last_login_at->format('Y-m-d') : __('Never')}}</b></td>
                            </tr>
                            <tr>
                                <th>{{__('Orders number')}}</th>
                                <td><b>{{$user->orders->count()}}</b></td>
                            </tr>
                            <tr>
                                <th>{{__('Orders finished')}}</th>
                                <td><b>{{$user->orders()->whereHas('statuses',function ($q){
                                    $q->where('status','finished');
})->count()}}</b></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <ul class="list-inline m-0">


                        <li class="list-inline-item">

                            @component('dashboard.layouts.partials.buttons._edit_button',[
                                        'route' => route('dashboard.users.edit',$user->id),
                                        'tooltip' => __('Edit').' '.$user['name'],
                                         ])
                                '),
                                ])
                            @endcomponent
                        </li>
                        <li class="list-inline-item">
                            @component('dashboard.layouts.partials.buttons._delete_button',[
                                            'id'=>$user->id,
                                            'route' => route('dashboard.users.destroy',$user->id) ,
                                            'tooltip' => __('Delete'),
                                             ])
                            @endcomponent
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-9">
                <div class="card pb-0 mb-3">

                    <ul class="nav nav-tabs tabs-wg pt-3 px-3 border-0">
                        <li class="nav-item" role="presentation">
                            <a href="{{route('dashboard.users.show',[$user->id,'show'=>'units'])}}" class="nav-link active">{{__('Units')}}</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="{{route('dashboard.users.show',[$user->id,'show'=>'orders'])}}" class="nav-link">{{__('Orders')}}</a>
                        </li>

                    </ul>
                </div>

                @if(request()->has('show') && request()->show == 'units' )
                    @foreach($data as $unit)
                        <div class="card py-4 mb-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="fotorama" data-nav="thumbs">
                                            @if($unit->image1 != null)

                                                <div data-img="{{url($unit->image1)}}">

                                                </div>
                                            @endif
                                            @if($unit->image2 != null)

                                                <div data-img="{{url($unit->image2)}}">

                                                </div>
                                            @endif
                                                @if($unit->image3 != null)

                                                    <div data-img="{{url($unit->image3)}}">

                                                    </div>
                                                @endif
                                                @if($unit->image4 != null)

                                                    <div data-img="{{url($unit->image4)}}">

                                                    </div>
                                                @endif
                                                @if($unit->image5 != null)

                                                    <div data-img="{{url($unit->image5)}}">

                                                    </div>
                                                @endif
                                                @if($unit->image6 != null)

                                                    <div data-img="{{url($unit->image6)}}">

                                                    </div>
                                                @endif
                                                @if($unit->image7 != null)

                                                    <div data-img="{{url($unit->image7)}}">

                                                    </div>
                                                @endif
                                        </div>

                                    </div>


                                    <div class="col-xl-6 col-lg-6 product-gallery">
                                        <div class="box">
                                            <h1 class="mb-3">{{$unit->name}}</h1>
                                            <div class="row p-0 m-0">
                                                @foreach(\App\Models\FacilityUnit::where('unit_id',$unit->id)->get() as $facilityUnit)
                                                    @if($facilityUnit->facility)
                                                        <ul class="list-inline flat-option">
                                                            <li class="list-inline-item"><img src="{{url($facilityUnit->facility->image)}}" class="img-fluid"></li>
                                                            <li class="list-inline-item">{{$facilityUnit->amount}} {{$facilityUnit->facility->name}}</li>
                                                        </ul>
                                                    @endif
                                                @endforeach
                                            </div>



                                            <div class="row p-0 mt-4">
                                                @foreach(\App\Models\ServiceUnit::where('unit_id',$unit->id)->get() as $serviceUnit)

                                                <div class="col-lg-4 col-md-6">
                                                    @if($serviceUnit->service)
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><img src="{{url($serviceUnit->service->image)}}" class="img-fluid"></li>
                                                        <li class="list-inline-item">{{$serviceUnit->service->name}}</li>
                                                    </ul>
                                                    @endif
                                                </div>
                                                @endforeach

                                            </div>

{{--                                            <ul class="list-inline m-0 icons-div">--}}
{{--                                                <li class="list-inline-item">--}}
{{--                                                    <a href="#"><img src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon.png" alt=""></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="list-inline-item">--}}
{{--                                                    <a href="#"><img style="width:25px" src="{{asset('assets/mabeet-dashboard')}}/ assets/images/edit.png" alt=""></a>--}}
{{--                                                </li>--}}
{{--                                                <li class="list-inline-item">--}}
{{--                                                    <a href="#"><img src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon3.png" alt=""></a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>

                    @endforeach
                @endif


            </div>
        </div>


    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
</div>
