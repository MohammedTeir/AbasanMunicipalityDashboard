@extends('layouts.main-layout')

@section('breadcrumb')
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="{{route('dashboard.home')}}" class="text-muted text-hover-primary"> Home </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted"> Dashboards </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-dark"> Default </li>
        <!--end::Item-->
    </ul>
@endsection

@section('css-ext')
    
@endsection




@section('content')
@endsection


{{-- ------------------------- --}}
@section('js-ext')

    <script>
    var hostUrl = "/public/assets/";
    </script>

@endsection
