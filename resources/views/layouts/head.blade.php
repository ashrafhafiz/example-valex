<!-- Title -->
<title> Valex - Premium dashboard ui bootstrap rwd admin html5 template </title>
<!-- Favicon -->
<link rel="icon" href="{{URL::asset('assets/img/brand/favicon.png')}}" type="image/x-icon" />
<!-- Icons css -->
<link rel="stylesheet" href="{{URL::asset('assets/css/icons.css')}}">
<!--  Custom Scroll bar-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" />
<!--  Sidebar css -->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/sidebar/sidebar.css')}}">

@yield('css')

@if (App::getLocale() == 'en')
<!-- Sidemenu css -->
<link rel="stylesheet" href="{{URL::asset('assets/css/sidemenu.css')}}">
<!--- Style css -->
<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
<!--- Dark-mode css -->
<link rel="stylesheet" href="{{URL::asset('assets/css/style-dark.css')}}">
<!--- Skinmodes css -->
<link rel="stylesheet" href="{{URL::asset('assets/css/skin-modes.css')}}">
@else
<!-- RTL Sidemenu css -->
<link rel="stylesheet" href="{{URL::asset('assets/css-rtl/sidemenu.css')}}">
<!--- RTL Style css -->
<link rel="stylesheet" href="{{URL::asset('assets/css-rtl/style.css')}}">
<!--- RTL Dark-mode css -->
<link rel="stylesheet" href="{{URL::asset('assets/css-rtl/style-dark.css')}}">
<!--- RTL Skinmodes css -->
<link rel="stylesheet" href="{{URL::asset('assets/css-rtl/skin-modes.css')}}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

<style type="text/css">
    * {
        font-family: 'Cairo', sans-serif !important;
    }
</style>
@endif