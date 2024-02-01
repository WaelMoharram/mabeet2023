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
        <div class="col-lg-6">
            <div class="col-lg-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">الطلبات الجديدة</h4>
                        <ul class="nav nav-tabs tabs-wg" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link active">طلبات وحدات للسكن</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link">طلبات اضافة وحدة جديدة</a>
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
            <div class="col-lg-12">
                <div class="card analasis-wg">
                    <div class="card-body">
                        <h4 class="card-title">إحصائيات الموقع</h4>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6">
                                <div class="box text-center">
                                    <h1>0000</h1>
                                    <h6>عنوان الإحصائية</h6>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="box text-center">
                                    <h1>0000</h1>
                                    <h6>عنوان الإحصائية</h6>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="box text-center">
                                    <h1>0000</h1>
                                    <h6>عنوان الإحصائية</h6>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="box text-center">
                                    <h1>0000</h1>
                                    <h6>عنوان الإحصائية</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">سجل التفاعل</h4>
                    <div class="">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>14:15:16</td>
                                <td>وصف النشاط</td>
                                <td>
                                    <ul class="list-inline m-0 left-t">

                                        <li class="list-inline-item">
                                            <a href="#"><img
                                                    src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon.png"
                                                    alt=""></a>
                                        </li>
                                        <li class="list-inline-item text-left pull-left">
                                            <div class="apto-dropdown-wrapper">
                                                <button class="apto-trigger-dropdown">
                                                    <img
                                                        src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon3.png"
                                                        alt="">

                                                </button>
                                                <div class="dropdown-menu" data-selected="messenger">
                                                    <button type="button" value="messenger" tabindex="0"
                                                            class="dropdown-item">

                                                        Messenger
                                                    </button>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>14:15:16</td>
                                <td>وصف النشاط</td>
                                <td>
                                    <ul class="list-inline m-0 left-t">

                                        <li class="list-inline-item">
                                            <a href="#"><img
                                                    src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon.png"
                                                    alt=""></a>
                                        </li>
                                        <li class="list-inline-item text-left pull-left">
                                            <div class="apto-dropdown-wrapper">
                                                <button class="apto-trigger-dropdown">
                                                    <img
                                                        src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon3.png"
                                                        alt="">

                                                </button>
                                                <div class="dropdown-menu" data-selected="messenger">
                                                    <button type="button" value="messenger" tabindex="0"
                                                            class="dropdown-item">

                                                        Messenger
                                                    </button>
                                                    <button type="button" value="messenger" tabindex="0"
                                                            class="dropdown-item">

                                                        Messenger
                                                    </button>
                                                    <button type="button" value="messenger" tabindex="0"
                                                            class="dropdown-item">

                                                        Messenger
                                                    </button>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
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
    {{--    <section id="dashboard-ecommerce">--}}
    {{--        <div class="row">--}}
    {{--            <div class=" col-12">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header d-flex justify-content-between pb-0">--}}
    {{--                    <h4 class="card-title">{{__('Website analytics')}}</h4>--}}
    {{--                </div>--}}
    {{--                <div class="card-body">--}}

    {{--                </div>--}}

    {{--            </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 col-6">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-header flex-column align-items-start pb-0">--}}
    {{--                        <div class="avatar bg-light-primary p-50 m-0">--}}
    {{--                            <div class="avatar-content">--}}
    {{--                                <i data-feather="users" class="font-medium-5"></i>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <h2 class="font-weight-bolder mt-1">92.6k</h2>--}}
    {{--                        <p class="card-text">Subscribers Gained</p>--}}
    {{--                    </div>--}}
    {{--                    <div id="gained-chart"></div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 col-6">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-header flex-column align-items-start pb-0">--}}
    {{--                        <div class="avatar bg-light-primary p-50 m-0">--}}
    {{--                            <div class="avatar-content">--}}
    {{--                                <i data-feather="users" class="font-medium-5"></i>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <h2 class="font-weight-bolder mt-1">92.6k</h2>--}}
    {{--                        <p class="card-text">Subscribers Gained</p>--}}
    {{--                    </div>--}}
    {{--                    <div id="gained-chart"></div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 col-6">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-header flex-column align-items-start pb-0">--}}
    {{--                        <div class="avatar bg-light-primary p-50 m-0">--}}
    {{--                            <div class="avatar-content">--}}
    {{--                                <i data-feather="users" class="font-medium-5"></i>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <h2 class="font-weight-bolder mt-1">92.6k</h2>--}}
    {{--                        <p class="card-text">Subscribers Gained</p>--}}
    {{--                    </div>--}}
    {{--                    <div id="gained-chart"></div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-3 col-6">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-header flex-column align-items-start pb-0">--}}
    {{--                        <div class="avatar bg-light-primary p-50 m-0">--}}
    {{--                            <div class="avatar-content">--}}
    {{--                                <i data-feather="users" class="font-medium-5"></i>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <h2 class="font-weight-bolder mt-1">92.6k</h2>--}}
    {{--                        <p class="card-text">Subscribers Gained</p>--}}
    {{--                    </div>--}}
    {{--                    <div id="gained-chart"></div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="col-lg-12 col-12">--}}
    {{--                <div class="card ">--}}
    {{--                    <div class="card-header d-flex justify-content-between pb-0">--}}
    {{--                        <h4 class="card-title">{{__('New orders')}}</h4>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-body p-0">--}}
    {{--                        <br>--}}
    {{--                        <ul class="nav nav-tabs" role="tablist">--}}
    {{--                            <li class="nav-item">--}}
    {{--                                <a class="nav-link active" id="homeIcon-tab" data-toggle="tab" href="#homeIcon" aria-controls="home" role="tab" aria-selected="true"><i data-feather="home"></i> {{__('Units for rent')}}</a>--}}
    {{--                            </li>--}}
    {{--                            <li class="nav-item">--}}
    {{--                                <a class="nav-link" id="profileIcon-tab" data-toggle="tab" href="#profileIcon" aria-controls="profile" role="tab" aria-selected="false"><i data-feather="plus"></i> {{__('New units to add')}}</a>--}}
    {{--                            </li>--}}

    {{--                        </ul>--}}
    {{--                        <div class="tab-content">--}}
    {{--                            <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">--}}
    {{--                                <div class="table-responsive">--}}
    {{--                                    <table class="table">--}}
    {{--                                        <thead>--}}
    {{--                                        <tr>--}}
    {{--                                            <th>{{__('Order tenant')}}</th>--}}
    {{--                                            <th>{{__('Place')}}</th>--}}
    {{--                                            <th>{{__('Season')}}</th>--}}
    {{--                                            <th>{{__('Unit type')}}</th>--}}
    {{--                                            <th>{{__('Budget')}}</th>--}}
    {{--                                            <th>{{__('Options')}}</th>--}}
    {{--                                        </tr>--}}
    {{--                                        </thead>--}}
    {{--                                        <tbody>--}}
    {{--                                        <tr>--}}
    {{--                                            <td>--}}
    {{--                                                <div class="d-flex align-items-center">--}}
    {{--                                                    <div class="avatar rounded">--}}
    {{--                                                        <div class="avatar-content">--}}
    {{--                                                            <img src="../../../app-assets/images/icons/toolbox.svg" alt="Toolbar svg" />--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                    <div>--}}
    {{--                                                        <div class="font-weight-bolder">Dixons</div>--}}

    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </td>--}}
    {{--                                            <td>--}}

    {{--                                                    <span>Technology</span>--}}

    {{--                                            </td>--}}
    {{--                                            <td>--}}

    {{--                                                <span>Technology</span>--}}

    {{--                                            </td>--}}
    {{--                                            <td>--}}
    {{--                                                <div class="d-flex align-items-center">--}}
    {{--                                                    <div class="avatar bg-light-primary mr-1">--}}
    {{--                                                        <div class="avatar-content">--}}
    {{--                                                            <i data-feather="monitor" class="font-medium-3"></i>--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                    <span>Technology</span>--}}
    {{--                                                </div>--}}
    {{--                                            </td>--}}
    {{--                                            <td>$891.2</td>--}}
    {{--                                            <td>--}}
    {{--                                                @component('dashboard.layouts.partials.buttons._show_button',[--}}
    {{--                                                    'route' => '',--}}
    {{--                                                    'tooltip' => __('Show'),--}}
    {{--                                                     ])--}}
    {{--                                                @endcomponent--}}
    {{--                                                @component('dashboard.layouts.partials.buttons._edit_button',[--}}
    {{--                                                    'route' => '',--}}
    {{--                                                    'tooltip' => __('Edit'),--}}
    {{--                                                     ])--}}
    {{--                                                @endcomponent--}}
    {{--                                                @component('dashboard.layouts.partials.buttons._delete_button',[--}}
    {{--                                                    'route' => '',--}}
    {{--                                                    'id'=>'',--}}
    {{--                                                    'tooltip' => __('Show'),--}}
    {{--                                                     ])--}}
    {{--                                                @endcomponent--}}
    {{--                                            </td>--}}
    {{--                                        </tr>--}}

    {{--                                        </tbody>--}}
    {{--                                    </table>--}}
    {{--                                </div>--}}

    {{--                            </div>--}}
    {{--                            <div class="tab-pane" id="profileIcon" aria-labelledby="profileIcon-tab" role="tabpanel">--}}
    {{--                                <div class="table-responsive">--}}
    {{--                                    <table class="table">--}}
    {{--                                        <thead>--}}
    {{--                                        <tr>--}}
    {{--                                            <th>Company2</th>--}}
    {{--                                            <th>Category</th>--}}
    {{--                                            <th>Views</th>--}}
    {{--                                            <th>Revenue</th>--}}
    {{--                                            <th>Sales</th>--}}
    {{--                                        </tr>--}}
    {{--                                        </thead>--}}
    {{--                                        <tbody>--}}
    {{--                                        <tr>--}}
    {{--                                            <td>--}}
    {{--                                                <div class="d-flex align-items-center">--}}
    {{--                                                    <div class="avatar rounded">--}}
    {{--                                                        <div class="avatar-content">--}}
    {{--                                                            <img src="../../../app-assets/images/icons/toolbox.svg" alt="Toolbar svg" />--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                    <div>--}}
    {{--                                                        <div class="font-weight-bolder">Dixons</div>--}}
    {{--                                                        <div class="font-small-2 text-muted">meguc@ruj.io</div>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </td>--}}
    {{--                                            <td>--}}
    {{--                                                <div class="d-flex align-items-center">--}}
    {{--                                                    <div class="avatar bg-light-primary mr-1">--}}
    {{--                                                        <div class="avatar-content">--}}
    {{--                                                            <i data-feather="monitor" class="font-medium-3"></i>--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                    <span>Technology</span>--}}
    {{--                                                </div>--}}
    {{--                                            </td>--}}
    {{--                                            <td class="text-nowrap">--}}
    {{--                                                <div class="d-flex flex-column">--}}
    {{--                                                    <span class="font-weight-bolder mb-25">23.4k</span>--}}
    {{--                                                    <span class="font-small-2 text-muted">in 24 hours</span>--}}
    {{--                                                </div>--}}
    {{--                                            </td>--}}
    {{--                                            <td>$891.2</td>--}}
    {{--                                            <td>--}}
    {{--                                                <div class="d-flex align-items-center">--}}
    {{--                                                    <span class="font-weight-bolder mr-1">68%</span>--}}
    {{--                                                    <i data-feather="trending-down" class="text-danger font-medium-1"></i>--}}
    {{--                                                </div>--}}
    {{--                                            </td>--}}
    {{--                                        </tr>--}}

    {{--                                        </tbody>--}}
    {{--                                    </table>--}}
    {{--                                </div>--}}

    {{--                            </div>--}}

    {{--                        </div>--}}


    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}



    {{--        </div>--}}


    {{--    </section>--}}

@endsection

