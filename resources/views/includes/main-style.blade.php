<link rel="canonical" href="https://preview.keenthemes.com/metronic8">
<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}">

<!--begin::Fonts(mandatory for all pages)-->
<link rel="stylesheet" href="{{ asset('assets/csss.css?family=Inter:300,400,500,600,700') }}">
<!--end::Fonts-->

<!--begin::Vendor Stylesheets(used for this page only)-->
@yield('css-ext')
<!--end::Vendor Stylesheets-->


<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css">
<!--end::Global Stylesheets Bundle-->


<style>
    .app-prebuilts-thumbnail {
        border: 1px solid var(--kt-body-bg);
        filter: drop-shadow(0px 0px 50px rgba(49, 52, 122, 0.12));
    }
</style>
