﻿<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic 
Product Version: 8.1.7
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
    <!--begin::Head-->
    <head>
        <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
        <meta charset="utf-8">
        <meta name="description" content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, 
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. 
            Grab your copy now and get life-time updates for free.
        ">
        <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, 
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, 
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, 
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        ">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="article">
        <meta property="og:title" content="
            Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, 
            Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
        ">
        <meta property="og:url" content="https://keenthemes.com/metronic">
        <meta property="og:site_name" content="Keenthemes | Metronic">
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8">
        <link rel="shortcut icon" href="../../assets/media/logos/favicon.ico">

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="../../../../css?family=Inter:300,400,500,600,700">        <!--end::Fonts-->

        
        
                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                            <link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
                            <link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css">
                        <!--end::Global Stylesheets Bundle-->
        
                    <!--Begin::Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
<!--End::Google Tag Manager -->
            </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body id="kt_body" class="auth-bg bgi-size-cover bgi-position-center bgi-no-repeat">
        <!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}			
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}            
</script>
<!--end::Theme mode setup on page load-->            
                    <!--Begin::Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--End::Google Tag Manager (noscript) -->
        
        <!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page bg image-->
<style>
    body {
        background-image: url('../../assets/media/auth/bg5.jpg');
    }

    [data-bs-theme="dark"] body {
        background-image: url('../../assets/media/auth/bg5-dark.jpg');
    }
</style>
<!--end::Page bg image-->


<!--begin::Authentication - Signup Welcome Message -->
<div class="d-flex flex-column flex-center flex-column-fluid">    
    <!--begin::Content-->
    <div class="d-flex flex-column flex-center text-center p-10">        
        <!--begin::Wrapper-->
        <div class="card card-flush w-lg-650px py-5">
            <div class="card-body py-15 py-lg-20">
                
    <!--begin::Logo-->
    <div class="mb-14">
        <a href="../../index.html" class="">
            <img alt="Logo" src="../../assets/media/logos/custom-2.svg" class="h-40px"> 
        </a> 
    </div>
    <!--end::Logo-->

    <!--begin::Title-->
    <h1 class="fw-bolder text-gray-900 mb-5">
        Verify your email
    </h1>
    <!--end::Title--> 
    
    <!--begin::Action-->
    <div class="fs-6 mb-8">
        <span class="fw-semibold text-gray-500">Did’t receive an email?</span>

        <a href="../layouts/corporate/sign-up.html" class="link-primary fw-bold"> Try Again</a>
    </div>
    <!--end::Action-->
    
    <!--begin::Link-->
    <div class="mb-11">
        <a href="../../index.html" class="btn btn-sm btn-primary">Skip for now</a>
    </div>    
    <!--end::Link-->
    
    <!--begin::Illustration-->
    <div class="mb-0">
        <img src="../../assets/media/auth/please-verify-your-email.png" class="mw-100 mh-300px theme-light-show" alt="">
        <img src="../../assets/media/auth/please-verify-your-email-dark.png" class="mw-100 mh-300px theme-dark-show" alt="">
    </div>
    <!--end::Illustration-->   

            </div>
        </div>
        <!--end::Wrapper-->        
    </div>
    <!--end::Content-->    
</div>
<!--end::Authentication - Signup Welcome Message-->
                         	</div>
	<!--end::Root-->
<!--end::Main-->

        
        <!--begin::Javascript-->
        <script>
            var hostUrl = "/metronic8/demo8/assets/";        </script>

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="../../assets/plugins/global/plugins.bundle.js"></script>
                            <script src="../../assets/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->
        
        
                <!--end::Javascript-->
        
            </body>
    <!--end::Body-->
</html>