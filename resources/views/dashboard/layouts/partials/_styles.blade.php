@if(\Illuminate\Support\Facades\App::isLocale('ar'))

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/vendors/css/vendors-rtl.min.css">
@else
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/vendors/css/vendors.min.css">

@endif
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/vendors/css/charts/apexcharts.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/vendors/css/extensions/tether-theme-arrows.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/vendors/css/extensions/tether.min.css">
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/vendors/css/extensions/shepherd-theme-default.css">--}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/vendors/css/pickers/pickadate/pickadate.css">
<!-- END: Vendor CSS-->

<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/vendors/css/ui/prism.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/vendors/css/pickers/pickadate/pickadate.css">



<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css/pages/ui-feather.css">

<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/vendors/css/forms/select/select2.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>

<!-- BEGIN: Theme CSS-->
@if(\Illuminate\Support\Facades\App::isLocale('ar'))

<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css-rtl/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css-rtl/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css-rtl/colors.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css-rtl/components.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css-rtl/themes/dark-layout.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css-rtl/themes/semi-dark-layout.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css-rtl/core/colors/palette-gradient.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css-rtl/custom-rtl.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/assets/css/style-rtl.css">
@else
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css/core/menu/menu-types/vertical-menu.css">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{!! asset('css') !!}/custom-style.css"/>

@endif
    <!-- BEGIN: Page CSS-->

{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css-rtl/pages/card-analytics.css">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard2/resources')}}/app-assets/css-rtl/plugins/tour/tour.css">--}}

