<div class="row mt-5">
    <div class="col-md-3">
        <a href="{{route('offers')}}?status=current" class="d-block text-dark mt-4 mb-4"> <i
                class="fas fa-arrow-circle-right mx-1 text-dark"></i> عوده للطلبات </a>
        <a href="{{route('chat')}}" class="d-block text-dark mt-4 mb-4"> <img src="{{asset('/')}}asset/images/send-2.png"> عرض المحادثات </a>

        {{--        <div class="sidebar my-2">--}}
        {{--            <div class="teble-responsive">--}}
        {{--                <h5 class="text-center py-2">المستخدم</h5>--}}
        {{--                <table class="table table-light">--}}
        {{--                    <tbody>--}}
        {{--                    <tr>--}}
        {{--                        <th>الاسم</th>--}}
        {{--                        <td><b>{{$order->user->name??"غير موجود"}}</b></td>--}}
        {{--                    </tr>--}}
        {{--                    <tr>--}}
        {{--                        <th>الهاتف</th>--}}
        {{--                        <td><b>{{$order->user->phone??"غير موجود"}}</b></td>--}}
        {{--                    </tr>--}}

        {{--                    </tbody>--}}
        {{--                </table>--}}
        {{--            </div>--}}


        {{--        </div>--}}

        <div class="sidebar my-3">

            <div class="teble-responsive">
                {{--                <table class="table table-light">--}}
                {{--                    <tbody>--}}
                {{--                    <tr>--}}
                {{--                        <th>تاريخ الطلب</th>--}}
                {{--                        <td><b>14/8/2022</b></td>--}}
                {{--                    </tr>--}}
                {{--                    <tr>--}}
                {{--                        <th>المكان</th>--}}
                {{--                        <td><b>مكة المكرمة</b></td>--}}
                {{--                    </tr>--}}

                {{--                    </tbody>--}}
                {{--                </table>--}}
            </div>
            <hr>
            <div class="teble-responsive">
                <h5 class="text-center py-2">تفاصيل الطلب</h5>
                <table class="table table-light">
                    <tbody>
                    <tr>
                        <th>تاريخ الطلب</th>
                        <td><b>{{\Carbon\Carbon::parse($order->created_at)->format('Y-m-d')}}</b></td>
                    </tr>
                    <tr>
                        <th>المكان</th>
                        <td><b>{{optional($order->city)->name}}</b></td>
                    </tr>
                    <tr>
                        <th>الموسم</th>
                        <td><b>{{optional($order->season)->name}}</b></td>
                    </tr>
                    <tr>
                        <th>المسافة للمسجد</th>
                        <td><b>{{optional($order->distance)->name}}</b></td>
                    </tr>
                    <tr>

                        <th>الوحدة السكنية</th>
                        <td><b>{{optional($order->unitType)->name}}</b></td>
                    </tr>
                    <tr>
                        <th>عدد الوحدات المطلوبة</th>
                        <td><b>{{$order->unit_number}}</b></td>
                    </tr>
                    <tr>
                        <th>عدد النزلاء</th>
                        <td><b>{{$order->guest_number}}</b></td>
                    </tr>
                    <tr>
                        <th>الميزانية</th>
                        <td><b>{{$order->budget_id?$order->budget->name:"غير محدد"}}</b></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            {{--            <div class="teble-responsive">--}}
            {{--                <table class="table table-light">--}}
            {{--                    <tbody>--}}
            {{--                    <tr>--}}
            {{--                        <th>تاريخ الطلب</th>--}}
            {{--                        <td><b>14/8/2022</b></td>--}}
            {{--                    </tr>--}}
            {{--                    <tr>--}}
            {{--                        <th>المكان</th>--}}
            {{--                        <td><b>مكة المكرمة</b></td>--}}
            {{--                    </tr>--}}

            {{--                    </tbody>--}}
            {{--                </table>--}}
            {{--            </div>--}}

        </div>

    </div>
    <div class="col-md-8 pb-5">

        @php $unit = $order->myOffer()->unit @endphp
        <div class="product-gallery offer-bg mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="fotorama" data-nav="thumbs">
                            <div data-img="{{asset($unit->image1)}}">
                                <a href="https://www.google.com.tw/" target="_blank"></a>
                            </div>
                            @if($unit->image2)
                                <div data-img="{{asset($unit->image2)}}">
                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                </div>
                            @endif
                            @if($unit->image3)
                                <div data-img="{{asset($unit->image3)}}">
                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                </div>
                            @endif
                            @if($unit->image4)
                                <div data-img="{{asset($unit->image4)}}">
                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                </div>
                            @endif
                            @if($unit->image5)
                                <div data-img="{{asset($unit->image5)}}">
                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                </div>
                            @endif
                            @if($unit->image6)
                                <div data-img="{{asset($unit->image6)}}">
                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                </div>
                            @endif
                            @if($unit->image7)
                                <div data-img="{{asset($unit->image7)}}">
                                    <a href="https://www.google.com.tw/" target="_blank"></a>
                                </div>
                            @endif
                        </div>


                    </div>


                    <div class="col-xl-6 col-lg-6">
                        <div class="box">
                            <h1 class="mb-3">{{$unit->name}} - {{$unit->city->name}}</h1>
                            <p>{{$unit->description}}</p>
                            <div class="row p-0 m-0">
                                <ul class="list-inline flat-option">
                                    <li class="list-inline-item"><img src="{{asset('/')}}asset/images/ico.png"
                                                                      class="img-fluid"></li>
                                    <li class="list-inline-item">نوع الوحدة : {{$unit->type->name}} </li>
                                </ul>
                                <ul class="list-inline flat-option">
                                    <li class="list-inline-item"><img src="{{asset('/')}}asset/images/ico.png"
                                                                      class="img-fluid"></li>
                                    <li class="list-inline-item"> عدد النزلاء : {{$unit->guest_numbers}}</li>
                                </ul>

                                @foreach($unit->facilities as $facility)
                                    <ul class="list-inline flat-option">
                                        <li class="list-inline-item"><img src="{{asset('/')}}asset/images/ico.png"
                                                                          class="img-fluid"></li>
                                        <li class="list-inline-item"> {{$facility->name}}
                                            : {{$facility->pivot->amount}}  </li>
                                    </ul>
                                @endforeach
                            </div>



                            <div class="row p-0 ">
                                @foreach($unit->services as $unitService)
                                    <div class="col-lg-4 col-md-6">
                                        <ul class="list-inline" style="font-size: 0.9rem;">
                                            <li class="list-inline-item"><img src="{{asset($unitService->image)}}"
                                                                              class="img-fluid"></li>
                                            <li class="list-inline-item ">{{$unitService->name}}</li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                            <a href="javascript:;" class="btn btn-completed"><i class="fa fa-check-circle" style="color: #81CC6DFF;"></i>  تم الموافقة على العرض </a>
                            <form method="post" action="{{route('offers.finish',[$order->myOffer()->id])}}">
                                @csrf
                                <div class="input-field mb-2">
                                    <button type="submit" class="btn btn-mabet" style="padding: 0;margin: 5px 0 0;">  إنهاء الطلب </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>


            </div>
        </div>



    </div>
</div>
