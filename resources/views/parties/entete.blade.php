<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="SILAS MASIMANGO by PRAXIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> --}}
    <meta name="keywords" content="Le portail numerique">
    <meta name="description" content="Praxis - Le portail numerique">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title  -->
    <title> {{config('app.name') }} | {{isset($titre)?$titre:""}}</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logos/three.png') }} ">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/logos/three.png') }} ">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/logos/three.png') }} ">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/logos/three.png') }} ">

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }} ">

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('assets/search/search.css') }} ">

    <!-- quform css -->
    <link rel="stylesheet" href="{{ asset('assets/quform/css/base.css') }} ">

    <!-- theme core css -->
    <link href="{{ asset('assets/css/styles.css') }} " rel="stylesheet">

    <!-- custom css -->
    <link href="{{ asset('assets/css/custom.css') }} " rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/custom/sweetalert2/dist/sweetalert2.min.css') }}">
    <style>
        #texteComplet {
    display: none; /* Cacher le texte complet par défaut */
        }
        .popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border: 1px solid #ccc;
    z-index: 9999;
}

.close-popup {
    position: absolute;
    top: 10px;
    right: 10px;
}

    </style>
</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">
