<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">

<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('site.seo.generalhead')
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Plugins CSS -->
    {{-- <link href="css/plugin.css" rel="stylesheet" />
    <!-- style CSS -->
    <link href="css/style.css" rel="stylesheet" /> --}}
    <!-- Document Title -->
    <title>SarchHolm - Real Estate HTML Template</title>

    <link rel="stylesheet" href="{{ mix('site/assets/css/app.css') }}">

    @yield('css')
    @yield('schema')
</head>

<body>
    <!--Preloader starts-->
    {{-- <div class="preloader js-preloader">
        <img src="images/preloader.gif" alt="...">
    </div> --}}
    <!--Preloader ends-->
    <!--Page Wrapper starts-->
    <div class="page-wrapper">
        <!--header starts-->
        @include('site.layout.header')
        <!--Header ends-->
        <!--Hero section starts-->
 @yield('content')
    <!--Page Wrapper ends-->
    <!--Footer Starts-->
    @include('site.layout.footer')
