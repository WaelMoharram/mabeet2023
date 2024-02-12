@extends('dashboard.layouts.app')
@section('title')
    {!! __('Home') !!}
@endsection
@section('header')

    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/dashboard2/resources')}}/app-assets/css/pages/dashboard-ecommerce.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/dashboard2/resources')}}/app-assets/css/plugins/charts/chart-apex.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/dashboard2/resources')}}/app-assets/css/plugins/extensions/ext-component-toastr.min.css">

@endsection

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12  grid-margin">
                <div class="card analasis-wg">
                    <div class="card-body">
                        <h4 class="card-title">إحصائيات الموقع</h4>
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 mb-3">
                                <div class="box text-center">
                                    <h1>{{\App\Models\Unit::count()}}</h1>
                                    <h6>{{__('Total units')}}</h6>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 mb-3">
                                <div class="box text-center">
                                    <h1>{{\App\Models\Unit::where('status',0)->count()}}</h1>
                                    <h6>{{__('New units')}}</h6>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 mb-3">
                                <div class="box text-center">
                                    <h1>{{\App\Models\Order::count()}}</h1>
                                    <h6>{{__('Total orders')}}</h6>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 mb-3">
                                <div class="box text-center">
                                    <h1>{{\App\Models\Order::where('is_reviewed',0)->count()}}</h1>
                                    <h6>{{__('New orders')}}</h6>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 mb-3">
                                <div class="box text-center">
                                    <h1>{{\App\Models\User::where('type','client')->count()}}</h1>
                                    <h6>{{__('Total Clients')}}</h6>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 mb-3">
                                <div class="box text-center">
                                    <h1>{{\App\Models\User::where('type','provider')->count()}}</h1>
                                    <h6>{{__('Total Providers')}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{__('New requests')}}</h4>
                        <ul class="nav nav-tabs tabs-wg" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link active">{{__('New orders requests')}}</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link">{{__('New units requests')}}</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th> صاحب الطلب</th>
                                            <th> المكان</th>
                                            <th> الموسم</th>
                                            <th> نوع الوحدة</th>
                                            <th> الميزانية</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td> صاحب الطلب</td>
                                            <td> المكان</td>
                                            <td> الموسم</td>
                                            <td> نوع الوحدة</td>
                                            <td> الميزانية</td>
                                            <td>
                                                <ul class="list-inline m-0">
                                                    <li class="list-inline-item">
                                                        <a href="#"><img
                                                                src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon.png"
                                                                alt=""></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><img
                                                                src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon1.png"
                                                                alt=""></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><img
                                                                src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon2.png"
                                                                alt=""></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> صاحب الطلب</td>
                                            <td> المكان</td>
                                            <td> الموسم</td>
                                            <td> نوع الوحدة</td>
                                            <td> الميزانية</td>
                                        </tr>
                                        <tr>
                                            <td> صاحب الطلب</td>
                                            <td> المكان</td>
                                            <td> الموسم</td>
                                            <td> نوع الوحدة</td>
                                            <td> الميزانية</td>
                                        </tr>
                                        <tr>
                                            <td> صاحب الطلب</td>
                                            <td> المكان</td>
                                            <td> الموسم</td>
                                            <td> نوع الوحدة</td>
                                            <td> الميزانية</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
{{--        <div class="col-lg-6">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <h4 class="card-title">سجل التفاعل</h4>--}}
{{--                    <div class="">--}}
{{--                        <table class="table">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>14:15:16</td>--}}
{{--                                <td>وصف النشاط</td>--}}
{{--                                <td>--}}
{{--                                    <ul class="list-inline m-0 left-t">--}}

{{--                                        <li class="list-inline-item">--}}
{{--                                            <a href="#"><img--}}
{{--                                                    src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon.png"--}}
{{--                                                    alt=""></a>--}}
{{--                                        </li>--}}
{{--                                        <li class="list-inline-item text-left pull-left">--}}
{{--                                            <div class="apto-dropdown-wrapper">--}}
{{--                                                <button class="apto-trigger-dropdown">--}}
{{--                                                    <img--}}
{{--                                                        src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon3.png"--}}
{{--                                                        alt="">--}}

{{--                                                </button>--}}
{{--                                                <div class="dropdown-menu" data-selected="messenger">--}}
{{--                                                    <button type="button" value="messenger" tabindex="0"--}}
{{--                                                            class="dropdown-item">--}}

{{--                                                        Messenger--}}
{{--                                                    </button>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>14:15:16</td>--}}
{{--                                <td>وصف النشاط</td>--}}
{{--                                <td>--}}
{{--                                    <ul class="list-inline m-0 left-t">--}}

{{--                                        <li class="list-inline-item">--}}
{{--                                            <a href="#"><img--}}
{{--                                                    src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon.png"--}}
{{--                                                    alt=""></a>--}}
{{--                                        </li>--}}
{{--                                        <li class="list-inline-item text-left pull-left">--}}
{{--                                            <div class="apto-dropdown-wrapper">--}}
{{--                                                <button class="apto-trigger-dropdown">--}}
{{--                                                    <img--}}
{{--                                                        src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon3.png"--}}
{{--                                                        alt="">--}}

{{--                                                </button>--}}
{{--                                                <div class="dropdown-menu" data-selected="messenger">--}}
{{--                                                    <button type="button" value="messenger" tabindex="0"--}}
{{--                                                            class="dropdown-item">--}}

{{--                                                        Messenger--}}
{{--                                                    </button>--}}
{{--                                                    <button type="button" value="messenger" tabindex="0"--}}
{{--                                                            class="dropdown-item">--}}

{{--                                                        Messenger--}}
{{--                                                    </button>--}}
{{--                                                    <button type="button" value="messenger" tabindex="0"--}}
{{--                                                            class="dropdown-item">--}}

{{--                                                        Messenger--}}
{{--                                                    </button>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
        </div>
    </div>

@endsection

