@extends('website.layouts.app')
@section('title')
    {!! __('Provider Orders') !!}
@endsection
@section('styles')
<style>
    .order-filter.new-order .nav-item {
        width: 33.3%;
    }
</style>
@endsection
@section('content')

    <div class="order-filter orders new-order mt-5">
        <div class="container">
            <div class="main-title text-center">
                <h1>{{__('Orders & Offers')}}</h1>
                <h5 class="mb-3">{{__('Enter the details of the new order to receive the best offers')}}</h5>
            </div>
            <ul class="nav nav-tabs grouped-radio">

                <li class="nav-item">
                    <a class="nav-link {{request()->status==null?'active':""}}"
                       href="{{route('orders')}}">
                        <div class="box">
                            <label>
                                <h2>{{__('All orders')}}</h2>
                            </label>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{request()->status=='current'?'active':""}}"
                       href="{{route('orders')}}?status=current">
                        <div class="box">
                            <label>
                                <h2>{{__('Current orders')}}</h2>
                            </label>
                        </div>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{request()->status=='previous'?'active':""}}"
                       href="{{route('orders')}}?status=previous">
                        <div class="box">
                            <label>
                                <h2>{{__('Previous orders')}}</h2>
                            </label>
                        </div>
                    </a>
                </li>


            </ul>
            <!-- Tab panes -->

            <div class="tab-content mt-3">

                <div class="tab-pane active" id="tabs-1" role="tabpanel">

                    <div class="row">
                        <div class="col-lg-3 filters">
                            <div id="main">
                                <div class="container">
                                    <form method="get" action="" >
                                    <div class="accordion" id="faq">
                                        <div class="card">
                                            <div class="card-header" id="faqhead2">
                                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                                   data-target="#faq2" aria-expanded="true"
                                                   aria-controls="faq2">{{__('Place')}}</a>
                                            </div>

                                            <div id="faq2" class="collapse show" aria-labelledby="faqhead2"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        @foreach($cities as $city)
                                                            <li>
                                                                <input type="checkbox" class="" name="cities_ids[]"
                                                                       id="id_id_radio_buttons_0_{{$city->id}}"
                                                                       value="{{$city->id}}"/>
                                                                {{$city->name}}
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faqhead3">
                                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                                   data-target="#faq3" aria-expanded="true" aria-controls="faq3">
                                                {{__('Unit type')}}
                                                </a>
                                            </div>

                                            <div id="faq3" class="collapse" aria-labelledby="faqhead3"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        @foreach($unitTypes as $type)
                                                            <li><input type="checkbox" class="" name="unit_types_ids[]"
                                                                       id="id_id_radio_buttons_0_{{$type->id}}"
                                                                       value="{{$type->id}}"/>
                                                                {{$type->name}}
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="faqhead4">
                                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                                   data-target="#faq4" aria-expanded="true" aria-controls="faq4">
                                                    {{__('The distance to the mosque.')}}
                                                    </a>
                                            </div>

                                            <div id="faq4" class="collapse" aria-labelledby="faqhead4"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        @foreach($distance as $dist)
                                                            <li>
                                                                <input type="checkbox" class="" name="distances_ids[]"
                                                                       id="id_id_radio_buttons_0_{{$dist->id}}"
                                                                       value="{{$dist->id}}"/>
                                                                {{$dist->name}}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faqhead5">
                                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                                   data-target="#faq5" aria-expanded="true" aria-controls="faq5">
                                                    {{__('The number of guests.')}}
                                                    </a>
                                            </div>

                                            <div id="faq5" class="collapse" aria-labelledby="faqhead5"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        @for($i=1;$i<=6;$i++)
                                                            <li><input type="checkbox" class="" name="guest_number[]"
                                                                       id="id_id_radio_buttons_0_{{$i}}"
                                                                       value="{{$i}}"/>
                                                                {{$i}}
                                                            </li>
                                                        @endfor

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faqhead6">
                                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                                   data-target="#faq6" aria-expanded="true" aria-controls="faq6">{{__('The budget.')}}</a>
                                            </div>

                                            <div id="faq6" class="collapse" aria-labelledby="faqhead6"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        @foreach($budgets as $budget)
                                                            <li><input type="checkbox" class="" name="budgets_ids[]"
                                                                       id="id_id_radio_buttons_0_{{$budget->id}}"
                                                                       value="{{$budget->id}}"/>
                                                                {{$budget->name}}
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success mt-3">{{__('Filter')}} <i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            @forelse($orders as $order)
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p><b>{{$order->name}}</b></p>
                                    <p class="desc">{{$order->description}}</p>
                                    @if($order->offers->count() <= 0)
                                        <a href="{{route('offers.show',$order->id)}}" class="btn btn-success" >{{__('There are no offers for the request')}}</a>
                                    @elseif($order->OfferPresented())

                                    <a href="{{route('offers.show',$order->id)}}" class="btn btn-completed">تم تقديم عرض بمبلغ {{$order->OfferPresented()->price}} ريال </a>
                                    @elseif($order->OfferAccepted())
                                        <a href="{{route('offers.show',$order->id)}}" class="btn btn-completed"><i class="fa fa-check-circle" style="color: #81CC6DFF;"></i>  تم الموافقة على العرض </a>
                                    @elseif($order->OfferCompleted())
                                        <a href="{{route('offers.show',$order->id)}}" class="btn btn-completed"><i class="fa fa-check-circle" style="color: #81CC6DFF;"></i>  طلب مكتمل </a>
                                    @else
                                        <a href="{{route('offers.show',$order->id)}}" class="btn btn-success">{{$order->offers_count}} عروض</a>
                                    @endif

                                </div>
                                <div class="col-md-6">
                                    <div class="teble-responsive">
                                        <table class="table table-light">
                                            <tbody>
                                            <tr>
                                                <th>تاريخ الطلب</th>
                                                <td><b>14/8/2022</b></td>
                                            </tr>
                                            <tr>
                                                <th>المكان</th>
                                                <td><b>مكة المكرمة</b></td>
                                            </tr>
                                            <tr>
                                                <th>الموسم</th>
                                                <td><b>موسم الحج</b></td>
                                            </tr>
                                            <tr>
                                                <th>المسافة للمسجد</th>
                                                <td><b>300 متر او اقل</b></td>
                                            </tr>
                                            <tr>
                                                <th>الوحدة السكنية</th>
                                                <td><b>غرفة</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد الوحدات المطلوبة</th>
                                                <td><b>2</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد النزلاء</th>
                                                <td><b>3</b></td>
                                            </tr>
                                            <tr>
                                                <th>الميزانية</th>
                                                <td><b>أقل من 5,000</b></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                                @empty
                                @if(request('status') == 'offers')
                                    <h3 class="align-content-center">عفواً لا يوجد عروض مقدمة منك حالياً</h3>
                                    @elseif(request('status')=='current')
                                    <h3 class="align-content-center">عفواً لا يوجد طلبات جاريه حالياً</h3>
                                @elseif(request('status')=='current')
                                    <h3 class="align-content-center">عفواً لا يوجد طلبات سابقةً</h3>
                                 @else
                                <h3 class="align-content-center">عفواً لا يوجد طلبات جديدة حالياً</h3>
                                @endif

                            @endforelse
                        </div>
                    </div>

                </div>


                <div class="tab-pane" id="tabs-2" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 filters">
                            <div id="main">
                                <div class="container">
                                    <div class="accordion" id="faq">
                                        <div class="card">
                                            <div class="card-header" id="faqhead1">
                                                <a href="#" class="btn btn-header-link " data-toggle="collapse"
                                                   data-target="#faq1" aria-expanded="true" aria-controls="faq1">دولة
                                                    النزيل</a>
                                            </div>

                                            <div id="faq1" class="collapse show" aria-labelledby="faqhead1"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faqhead2">
                                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                                   data-target="#faq2" aria-expanded="true"
                                                   aria-controls="faq2">المكان</a>
                                            </div>

                                            <div id="faq2" class="collapse" aria-labelledby="faqhead2"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faqhead3">
                                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                                   data-target="#faq3" aria-expanded="true" aria-controls="faq3">المسافة
                                                    للمسجد</a>
                                            </div>

                                            <div id="faq3" class="collapse" aria-labelledby="faqhead3"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p><b>منزل بكافة المرافق في مكة بالقرب من المسجد الحرام</b></p>
                                    <p class="desc">الشَّقَّةُ (جمعها شُقَقٌ) هي وحدة سكنية تقع ضمن مجمع سكني متعدد
                                        الطوابق، ويتألف كل دور من أدوار المبنى السكني من شقة أو أكثر.</p>
                                    <button class="btn" disabled>لا يوجد عروض على الطلب</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="teble-responsive">
                                        <table class="table table-light">
                                            <tbody>
                                            <tr>
                                                <th>تاريخ الطلب</th>
                                                <td><b>14/8/2022</b></td>
                                            </tr>
                                            <tr>
                                                <th>المكان</th>
                                                <td><b>مكة المكرمة</b></td>
                                            </tr>
                                            <tr>
                                                <th>الموسم</th>
                                                <td><b>موسم الحج</b></td>
                                            </tr>
                                            <tr>
                                                <th>المسافة للمسجد</th>
                                                <td><b>300 متر او اقل</b></td>
                                            </tr>
                                            <tr>
                                                <th>الوحدة السكنية</th>
                                                <td><b>غرفة</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد الوحدات المطلوبة</th>
                                                <td><b>2</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد النزلاء</th>
                                                <td><b>3</b></td>
                                            </tr>
                                            <tr>
                                                <th>الميزانية</th>
                                                <td><b>أقل من 5,000</b></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p><b>منزل بكافة المرافق في مكة بالقرب من المسجد الحرام</b></p>
                                    <p class="desc">الشَّقَّةُ (جمعها شُقَقٌ) هي وحدة سكنية تقع ضمن مجمع سكني متعدد
                                        الطوابق، ويتألف كل دور من أدوار المبنى السكني من شقة أو أكثر.</p>
                                    <button class="btn btn-success">5 عروض</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="teble-responsive">
                                        <table class="table table-light">
                                            <tbody>
                                            <tr>
                                                <th>تاريخ الطلب</th>
                                                <td><b>14/8/2022</b></td>
                                            </tr>
                                            <tr>
                                                <th>المكان</th>
                                                <td><b>مكة المكرمة</b></td>
                                            </tr>
                                            <tr>
                                                <th>الموسم</th>
                                                <td><b>موسم الحج</b></td>
                                            </tr>
                                            <tr>
                                                <th>المسافة للمسجد</th>
                                                <td><b>300 متر او اقل</b></td>
                                            </tr>
                                            <tr>
                                                <th>الوحدة السكنية</th>
                                                <td><b>غرفة</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد الوحدات المطلوبة</th>
                                                <td><b>2</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد النزلاء</th>
                                                <td><b>3</b></td>
                                            </tr>
                                            <tr>
                                                <th>الميزانية</th>
                                                <td><b>أقل من 5,000</b></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p><b>منزل بكافة المرافق في مكة بالقرب من المسجد الحرام</b></p>
                                    <p class="desc">الشَّقَّةُ (جمعها شُقَقٌ) هي وحدة سكنية تقع ضمن مجمع سكني متعدد
                                        الطوابق، ويتألف كل دور من أدوار المبنى السكني من شقة أو أكثر.</p>
                                    <button class="btn btn-completed">طلب مكتمل</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="teble-responsive">
                                        <table class="table table-light">
                                            <tbody>
                                            <tr>
                                                <th>تاريخ الطلب</th>
                                                <td><b>14/8/2022</b></td>
                                            </tr>
                                            <tr>
                                                <th>المكان</th>
                                                <td><b>مكة المكرمة</b></td>
                                            </tr>
                                            <tr>
                                                <th>الموسم</th>
                                                <td><b>موسم الحج</b></td>
                                            </tr>
                                            <tr>
                                                <th>المسافة للمسجد</th>
                                                <td><b>300 متر او اقل</b></td>
                                            </tr>
                                            <tr>
                                                <th>الوحدة السكنية</th>
                                                <td><b>غرفة</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد الوحدات المطلوبة</th>
                                                <td><b>2</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد النزلاء</th>
                                                <td><b>3</b></td>
                                            </tr>
                                            <tr>
                                                <th>الميزانية</th>
                                                <td><b>أقل من 5,000</b></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tabs-3" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 filters">
                            <div id="main">
                                <div class="container">
                                    <div class="accordion" id="faq">
                                        <div class="card">
                                            <div class="card-header" id="faqhead1">
                                                <a href="#" class="btn btn-header-link " data-toggle="collapse"
                                                   data-target="#faq1" aria-expanded="true" aria-controls="faq1">دولة
                                                    النزيل</a>
                                            </div>

                                            <div id="faq1" class="collapse show" aria-labelledby="faqhead1"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faqhead2">
                                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                                   data-target="#faq2" aria-expanded="true"
                                                   aria-controls="faq2">المكان</a>
                                            </div>

                                            <div id="faq2" class="collapse" aria-labelledby="faqhead2"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faqhead3">
                                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                                   data-target="#faq3" aria-expanded="true" aria-controls="faq3">المسافة
                                                    للمسجد</a>
                                            </div>

                                            <div id="faq3" class="collapse" aria-labelledby="faqhead3"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p><b>منزل بكافة المرافق في مكة بالقرب من المسجد الحرام</b></p>
                                    <p class="desc">الشَّقَّةُ (جمعها شُقَقٌ) هي وحدة سكنية تقع ضمن مجمع سكني متعدد
                                        الطوابق، ويتألف كل دور من أدوار المبنى السكني من شقة أو أكثر.</p>
                                    <button class="btn" disabled>لا يوجد عروض على الطلب</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="teble-responsive">
                                        <table class="table table-light">
                                            <tbody>
                                            <tr>
                                                <th>تاريخ الطلب</th>
                                                <td><b>14/8/2022</b></td>
                                            </tr>
                                            <tr>
                                                <th>المكان</th>
                                                <td><b>مكة المكرمة</b></td>
                                            </tr>
                                            <tr>
                                                <th>الموسم</th>
                                                <td><b>موسم الحج</b></td>
                                            </tr>
                                            <tr>
                                                <th>المسافة للمسجد</th>
                                                <td><b>300 متر او اقل</b></td>
                                            </tr>
                                            <tr>
                                                <th>الوحدة السكنية</th>
                                                <td><b>غرفة</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد الوحدات المطلوبة</th>
                                                <td><b>2</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد النزلاء</th>
                                                <td><b>3</b></td>
                                            </tr>
                                            <tr>
                                                <th>الميزانية</th>
                                                <td><b>أقل من 5,000</b></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p><b>منزل بكافة المرافق في مكة بالقرب من المسجد الحرام</b></p>
                                    <p class="desc">الشَّقَّةُ (جمعها شُقَقٌ) هي وحدة سكنية تقع ضمن مجمع سكني متعدد
                                        الطوابق، ويتألف كل دور من أدوار المبنى السكني من شقة أو أكثر.</p>
                                    <button class="btn btn-success">5 عروض</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="teble-responsive">
                                        <table class="table table-light">
                                            <tbody>
                                            <tr>
                                                <th>تاريخ الطلب</th>
                                                <td><b>14/8/2022</b></td>
                                            </tr>
                                            <tr>
                                                <th>المكان</th>
                                                <td><b>مكة المكرمة</b></td>
                                            </tr>
                                            <tr>
                                                <th>الموسم</th>
                                                <td><b>موسم الحج</b></td>
                                            </tr>
                                            <tr>
                                                <th>المسافة للمسجد</th>
                                                <td><b>300 متر او اقل</b></td>
                                            </tr>
                                            <tr>
                                                <th>الوحدة السكنية</th>
                                                <td><b>غرفة</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد الوحدات المطلوبة</th>
                                                <td><b>2</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد النزلاء</th>
                                                <td><b>3</b></td>
                                            </tr>
                                            <tr>
                                                <th>الميزانية</th>
                                                <td><b>أقل من 5,000</b></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p><b>منزل بكافة المرافق في مكة بالقرب من المسجد الحرام</b></p>
                                    <p class="desc">الشَّقَّةُ (جمعها شُقَقٌ) هي وحدة سكنية تقع ضمن مجمع سكني متعدد
                                        الطوابق، ويتألف كل دور من أدوار المبنى السكني من شقة أو أكثر.</p>
                                    <button class="btn btn-completed">طلب مكتمل</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="teble-responsive">
                                        <table class="table table-light">
                                            <tbody>
                                            <tr>
                                                <th>تاريخ الطلب</th>
                                                <td><b>14/8/2022</b></td>
                                            </tr>
                                            <tr>
                                                <th>المكان</th>
                                                <td><b>مكة المكرمة</b></td>
                                            </tr>
                                            <tr>
                                                <th>الموسم</th>
                                                <td><b>موسم الحج</b></td>
                                            </tr>
                                            <tr>
                                                <th>المسافة للمسجد</th>
                                                <td><b>300 متر او اقل</b></td>
                                            </tr>
                                            <tr>
                                                <th>الوحدة السكنية</th>
                                                <td><b>غرفة</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد الوحدات المطلوبة</th>
                                                <td><b>2</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد النزلاء</th>
                                                <td><b>3</b></td>
                                            </tr>
                                            <tr>
                                                <th>الميزانية</th>
                                                <td><b>أقل من 5,000</b></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane" id="tabs-4" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 filters">
                            <div id="main">
                                <div class="container">
                                    <div class="accordion" id="faq">
                                        <div class="card">
                                            <div class="card-header" id="faqhead1">
                                                <a href="#" class="btn btn-header-link " data-toggle="collapse"
                                                   data-target="#faq1" aria-expanded="true" aria-controls="faq1">دولة
                                                    النزيل</a>
                                            </div>

                                            <div id="faq1" class="collapse show" aria-labelledby="faqhead1"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faqhead2">
                                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                                   data-target="#faq2" aria-expanded="true"
                                                   aria-controls="faq2">المكان</a>
                                            </div>

                                            <div id="faq2" class="collapse" aria-labelledby="faqhead2"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faqhead3">
                                                <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                                   data-target="#faq3" aria-expanded="true" aria-controls="faq3">المسافة
                                                    للمسجد</a>
                                            </div>

                                            <div id="faq3" class="collapse" aria-labelledby="faqhead3"
                                                 data-parent="#faq">
                                                <div class="card-body">
                                                    <ul>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                        <li>Option</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p><b>منزل بكافة المرافق في مكة بالقرب من المسجد الحرام</b></p>
                                    <p class="desc">الشَّقَّةُ (جمعها شُقَقٌ) هي وحدة سكنية تقع ضمن مجمع سكني متعدد
                                        الطوابق، ويتألف كل دور من أدوار المبنى السكني من شقة أو أكثر.</p>
                                    <button class="btn" disabled>لا يوجد عروض على الطلب</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="teble-responsive">
                                        <table class="table table-light">
                                            <tbody>
                                            <tr>
                                                <th>تاريخ الطلب</th>
                                                <td><b>14/8/2022</b></td>
                                            </tr>
                                            <tr>
                                                <th>المكان</th>
                                                <td><b>مكة المكرمة</b></td>
                                            </tr>
                                            <tr>
                                                <th>الموسم</th>
                                                <td><b>موسم الحج</b></td>
                                            </tr>
                                            <tr>
                                                <th>المسافة للمسجد</th>
                                                <td><b>300 متر او اقل</b></td>
                                            </tr>
                                            <tr>
                                                <th>الوحدة السكنية</th>
                                                <td><b>غرفة</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد الوحدات المطلوبة</th>
                                                <td><b>2</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد النزلاء</th>
                                                <td><b>3</b></td>
                                            </tr>
                                            <tr>
                                                <th>الميزانية</th>
                                                <td><b>أقل من 5,000</b></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p><b>منزل بكافة المرافق في مكة بالقرب من المسجد الحرام</b></p>
                                    <p class="desc">الشَّقَّةُ (جمعها شُقَقٌ) هي وحدة سكنية تقع ضمن مجمع سكني متعدد
                                        الطوابق، ويتألف كل دور من أدوار المبنى السكني من شقة أو أكثر.</p>
                                    <button class="btn btn-success">5 عروض</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="teble-responsive">
                                        <table class="table table-light">
                                            <tbody>
                                            <tr>
                                                <th>تاريخ الطلب</th>
                                                <td><b>14/8/2022</b></td>
                                            </tr>
                                            <tr>
                                                <th>المكان</th>
                                                <td><b>مكة المكرمة</b></td>
                                            </tr>
                                            <tr>
                                                <th>الموسم</th>
                                                <td><b>موسم الحج</b></td>
                                            </tr>
                                            <tr>
                                                <th>المسافة للمسجد</th>
                                                <td><b>300 متر او اقل</b></td>
                                            </tr>
                                            <tr>
                                                <th>الوحدة السكنية</th>
                                                <td><b>غرفة</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد الوحدات المطلوبة</th>
                                                <td><b>2</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد النزلاء</th>
                                                <td><b>3</b></td>
                                            </tr>
                                            <tr>
                                                <th>الميزانية</th>
                                                <td><b>أقل من 5,000</b></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p><b>منزل بكافة المرافق في مكة بالقرب من المسجد الحرام</b></p>
                                    <p class="desc">الشَّقَّةُ (جمعها شُقَقٌ) هي وحدة سكنية تقع ضمن مجمع سكني متعدد
                                        الطوابق، ويتألف كل دور من أدوار المبنى السكني من شقة أو أكثر.</p>
                                    <button class="btn btn-completed">طلب مكتمل</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="teble-responsive">
                                        <table class="table table-light">
                                            <tbody>
                                            <tr>
                                                <th>تاريخ الطلب</th>
                                                <td><b>14/8/2022</b></td>
                                            </tr>
                                            <tr>
                                                <th>المكان</th>
                                                <td><b>مكة المكرمة</b></td>
                                            </tr>
                                            <tr>
                                                <th>الموسم</th>
                                                <td><b>موسم الحج</b></td>
                                            </tr>
                                            <tr>
                                                <th>المسافة للمسجد</th>
                                                <td><b>300 متر او اقل</b></td>
                                            </tr>
                                            <tr>
                                                <th>الوحدة السكنية</th>
                                                <td><b>غرفة</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد الوحدات المطلوبة</th>
                                                <td><b>2</b></td>
                                            </tr>
                                            <tr>
                                                <th>عدد النزلاء</th>
                                                <td><b>3</b></td>
                                            </tr>
                                            <tr>
                                                <th>الميزانية</th>
                                                <td><b>أقل من 5,000</b></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')


@endsection
