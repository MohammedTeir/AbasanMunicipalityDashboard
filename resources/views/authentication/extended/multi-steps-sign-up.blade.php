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
    <body id="kt_body" class="auth-bg">
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
		<!--begin::Authentication - Multi-steps-->
<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
    <!--begin::Aside-->
    <div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">   
        <div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center" style="background-image: url(../../assets/media/misc/auth-bg.png)">
            <!--begin::Header-->
            <div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">          
                <!--begin::Logo-->
                <a href="../../index.html">
                    <img alt="Logo" src="../../assets/media/logos/custom-1.png" class="h-70px">
                </a>    
                <!--end::Logo-->
            </div>
            <!--end::Header--> 

            <!--begin::Body-->
            <div class="d-flex flex-row-fluid justify-content-center p-10"> 
                <!--begin::Nav-->
                <div class="stepper-nav">            
                    <!--begin::Step 1-->
                    <div class="stepper-item current" data-kt-stepper-element="nav">  
                        <!--begin::Wrapper-->  
                        <div class="stepper-wrapper">
                            <!--begin::Icon-->
                            <div class="stepper-icon rounded-3">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">1</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title fs-2">
                                    Account Type
                                </h3>

                                <div class="stepper-desc fw-normal">
                                    Select your account type
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper--> 

                        <!--begin::Line-->
                        <div class="stepper-line h-40px">
                        </div>
                        <!--end::Line-->
                    </div>
                    <!--end::Step 1-->                

                    <!--begin::Step 2-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Wrapper-->  
                        <div class="stepper-wrapper"> 
                            <!--begin::Icon-->
                            <div class="stepper-icon rounded-3">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">2</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title fs-2">
                                    Account Info
                                </h3>
                                <div class="stepper-desc fw-normal">
                                    Setup your account settings
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper--> 

                        <!--begin::Line-->
                        <div class="stepper-line h-40px">
                        </div>
                        <!--end::Line-->
                    </div>
                    <!--end::Step 2-->                

                    <!--begin::Step 3-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Wrapper-->  
                        <div class="stepper-wrapper">
                            <!--begin::Icon-->
                            <div class="stepper-icon">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">3</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title fs-2">
                                    Business Details
                                </h3>
                                <div class="stepper-desc fw-normal">
                                    Setup your business details
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Line-->
                        <div class="stepper-line h-40px">
                        </div>
                        <!--end::Line-->
                    </div>
                    <!--end::Step 3-->   

                    <!--begin::Step 4-->
                    <div class="stepper-item" data-kt-stepper-element="nav">      
                        <!--begin::Wrapper-->  
                        <div class="stepper-wrapper">              
                            <!--begin::Icon-->
                            <div class="stepper-icon">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">4</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title ">
                                    Billing Details
                                </h3>
                                <div class="stepper-desc fw-normal">
                                    Provide your payment info
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper-->           
                        
                        <!--begin::Line-->
                        <div class="stepper-line h-40px">
                        </div>
                        <!--end::Line-->
                    </div>
                    <!--end::Step 4-->     
                    
                    <!--begin::Step 5-->
                    <div class="stepper-item" data-kt-stepper-element="nav">      
                        <!--begin::Wrapper-->  
                        <div class="stepper-wrapper">              
                            <!--begin::Icon-->
                            <div class="stepper-icon">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">5</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title ">
                                    Completed
                                </h3>
                                <div class="stepper-desc fw-normal">
                                    Your account is created
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper-->               
                    </div>
                    <!--end::Step 5-->     
                </div>
                <!--end::Nav-->
            </div>
            <!--end::Body--> 
            
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-wrap px-5 py-10">
                <!--begin::Links-->
                <div class="d-flex fw-normal">
                    <a href="https://keenthemes.com" class="text-success px-5" target="_blank">Terms</a>

                    <a href="https://devs.keenthemes.com" class="text-success px-5" target="_blank">Plans</a>
                    
                    <a href="https://1.envato.market/EA4JP" class="text-success px-5" target="_blank">Contact Us</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->        
        </div>
    </div>
    <!--begin::Aside-->

    <!--begin::Body-->
    <div class="d-flex flex-column flex-lg-row-fluid py-10">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form">
                    <!--begin::Step 1-->
                    <div class="current" data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
<div class="w-100">
    <!--begin::Heading-->
    <div class="pb-10 pb-lg-15">
        <!--begin::Title-->
        <h2 class="fw-bold d-flex align-items-center text-dark">
            Choose Account Type
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i>
        </h2>
        <!--end::Title-->

        <!--begin::Notice-->
        <div class="text-muted fw-semibold fs-6">
            If you need more info, please check out 
            <a href="#" class="link-primary fw-bold">Help Page</a>.
        </div>
        <!--end::Notice-->
    </div>
    <!--end::Heading-->

    <!--begin::Input group-->
    <div class="fv-row">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Option-->
                <input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal">
                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
<span class="svg-icon svg-icon-3x me-5"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor"></path>
<path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor"></path>
</svg>
</span>
<!--end::Svg Icon-->
                    <!--begin::Info-->
                    <span class="d-block fw-semibold text-start">                            
                        <span class="text-dark fw-bold d-block fs-4 mb-2">
                            Personal Account
                        </span>
                        <span class="text-muted fw-semibold fs-6">If you need more info, please check it out</span>
                    </span>
                    <!--end::Info-->
                </label>   
                <!--end::Option-->
            </div>
            <!--end::Col-->
            
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Option-->
                <input type="radio" class="btn-check" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate">
                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
<span class="svg-icon svg-icon-3x me-5"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="currentColor"></path>
<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="currentColor"></path>
</svg>
</span>
<!--end::Svg Icon-->
                    <!--begin::Info-->
                    <span class="d-block fw-semibold text-start">                              
                        <span class="text-dark fw-bold d-block fs-4 mb-2">Corporate Account</span>
                        <span class="text-muted fw-semibold fs-6">Create corporate account to mane users</span>
                    </span>           
                    <!--end::Info-->               
                </label>           
                <!--end::Option-->   
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->        
    </div>
    <!--end::Input group-->    
</div> 
<!--end::Wrapper-->                    </div>
                    <!--end::Step 1-->

                    <!--begin::Step 2-->
                    <div class="" data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
<div class="w-100">
    <!--begin::Heading-->
    <div class="pb-10 pb-lg-15">
        <!--begin::Title-->
        <h2 class="fw-bold text-dark">Account Info</h2>
        <!--end::Title-->

        <!--begin::Notice-->
        <div class="text-muted fw-semibold fs-6">
            If you need more info, please check out 
            <a href="#" class="link-primary fw-bold">Help Page</a>.
        </div>
        <!--end::Notice-->
    </div>
    <!--end::Heading-->

    <!--begin::Input group-->
    <div class="mb-10 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center form-label mb-3">
            Specify Team Size
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Provide your team size to help us setup your billing"></i>
        </label>
        <!--end::Label-->

        <!--begin::Row-->
        <div class="row mb-2" data-kt-buttons="true"> 
            <!--begin::Col-->
            <div class="col">
                <!--begin::Option-->
                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
                    <input type="radio" class="btn-check" name="account_team_size" value="1-1">    
                    <span class="fw-bold fs-3">1-1</span>
                </label>       
                <!--end::Option-->     
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col">
                <!--begin::Option-->
                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 active">
                    <input type="radio" class="btn-check" name="account_team_size" checked="" value="2-10">  
                    <span class="fw-bold fs-3">2-10</span>
                </label>
                <!--end::Option-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col">                            
                <!--begin::Option-->
                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
                    <input type="radio" class="btn-check" name="account_team_size" value="10-50">     
                    <span class="fw-bold fs-3">10-50</span>
                </label>
                <!--end::Option-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col">                                      
                <!--begin::Option-->
                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
                    <input type="radio" class="btn-check" name="account_team_size" value="50+"> 
                    <span class="fw-bold fs-3">50+</span>
                </label>   
                <!--end::Option-->    
            </div>
            <!--end::Col-->                 
        </div>
        <!--end::Row-->

        <!--begin::Hint-->
        <div class="form-text">
            Customers will see this shortened version of your statement descriptor
        </div>
        <!--end::Hint-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-10 fv-row">      
        <!--begin::Label-->                  
        <label class="form-label mb-3">Team Account Name</label>
        <!--end::Label-->

        <!--begin::Input-->
        <input type="text" class="form-control form-control-lg form-control-solid" name="account_name" placeholder="" value="">
        <!--end::Input-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-0 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center form-label mb-5">
            Select Account Plan
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan"></i>
        </label>
        <!--end::Label-->

        <!--begin::Options-->
        <div class="mb-0">
            <!--begin:Option-->
            <label class="d-flex flex-stack mb-5 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin::Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label">
                            <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
<span class="svg-icon svg-icon-1 svg-icon-gray-600"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor"></path>
<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor"></path>
</svg>
</span>
<!--end::Svg Icon-->                        </span>
                    </span>
                    <!--end::Icon-->

                    <!--begin::Description-->
                    <span class="d-flex flex-column">
                        <span class="fw-bold text-gray-800 text-hover-primary fs-5">Company Account</span>
                        <span class="fs-6 fw-semibold text-muted">Use images to enhance your post flow</span>
                    </span>
                    <!--end:Description-->
                </span>
                <!--end:Label-->

                <!--begin:Input-->
                <span class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="radio" name="account_plan" value="1">
                </span>
                <!--end:Input-->
            </label>
            <!--end::Option-->

            <!--begin:Option-->
            <label class="d-flex flex-stack mb-5 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin::Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label">
                            <!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
<span class="svg-icon svg-icon-1 svg-icon-gray-600"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="currentColor"></path>
<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="currentColor"></path>
</svg>
</span>
<!--end::Svg Icon-->                        </span>
                    </span>
                    <!--end::Icon-->

                    <!--begin::Description-->
                    <span class="d-flex flex-column">
                        <span class="fw-bold text-gray-800 text-hover-primary fs-5">Developer Account</span>
                        <span class="fs-6 fw-semibold text-muted">Use images to your post time</span>
                    </span>
                    <!--end:Description-->
                </span>
                <!--end:Label-->

                <!--begin:Input-->
                <span class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="radio" checked="" name="account_plan" value="2">
                </span>
                <!--end:Input-->
            </label>
            <!--end::Option-->

            <!--begin:Option-->
            <label class="d-flex flex-stack mb-0 cursor-pointer">
                <!--begin:Label-->
                <span class="d-flex align-items-center me-2">
                    <!--begin::Icon-->
                    <span class="symbol symbol-50px me-6">
                        <span class="symbol-label">
                            <!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
<span class="svg-icon svg-icon-1 svg-icon-gray-600"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z" fill="currentColor"></path>
<path opacity="0.3" d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z" fill="currentColor"></path>
<path opacity="0.3" d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z" fill="currentColor"></path>
</svg>
</span>
<!--end::Svg Icon-->                        </span>
                    </span>
                    <!--end::Icon-->

                    <!--begin::Description-->
                    <span class="d-flex flex-column">
                        <span class="fw-bold text-gray-800 text-hover-primary fs-5">Testing Account</span>
                        <span class="fs-6 fw-semibold text-muted">Use images to enhance time travel rivers</span>
                    </span>
                    <!--end:Description-->
                </span>
                <!--end:Label-->

                <!--begin:Input-->
                <span class="form-check form-check-custom form-check-solid">
                    <input class="form-check-input" type="radio" name="account_plan" value="3">
                </span>
                <!--end:Input-->
            </label>
            <!--end::Option-->
        </div>
        <!--end::Options-->
    </div>
    <!--end::Input group-->
</div>
<!--end::Wrapper-->                    </div>
                    <!--end::Step 2-->

                    <!--begin::Step 3-->             
                    <div class="" data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
<div class="w-100">
    <!--begin::Heading-->
    <div class="pb-10 pb-lg-12">
        <!--begin::Title-->
        <h2 class="fw-bold text-dark">Business Details</h2>
        <!--end::Title-->

        <!--begin::Notice-->
        <div class="text-muted fw-semibold fs-6">
            If you need more info, please check out 
            <a href="#" class="link-primary fw-bold">Help Page</a>.
        </div>
        <!--end::Notice-->
    </div>
    <!--end::Heading-->

    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <!--begin::Label-->
        <label class="form-label required">Business Name</label>
        <!--end::Label-->

        <!--begin::Input-->
        <input name="business_name" class="form-control form-control-lg form-control-solid" value="Keenthemes Inc.">
        <!--end::Input-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <!--begin::Label-->
        <label class="d-flex align-items-center form-label">
            <span class="required">Shortened Descriptor</span>

            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="
                    <div class='p-4 rounded bg-light'>
                        <div class='d-flex flex-stack text-muted mb-4'>
                            <i class='fas fa-university fs-3 me-3'></i>

                            <div class='fw-bold'>INCBANK **** 1245 STATEMENT</div>
                        </div>

                        <div class='d-flex flex-stack fw-semibold text-gray-600'>
                            <div>Amount</div>
                            <div>Transaction</div>
                        </div>

                        <div class='separator separator-dashed my-2'></div>

                        <div class='d-flex flex-stack text-dark fw-bold mb-2'>
                            <div>USD345.00</div>
                            <div>KEENTHEMES*</div>
                        </div>

                        <div class='d-flex flex-stack text-muted mb-2'>
                            <div>USD75.00</div>
                            <div>Hosting fee</div>
                        </div>

                        <div class='d-flex flex-stack text-muted'>
                            <div>USD3,950.00</div>
                            <div>Payrol</div>
                        </div>
                    </div>
                ">
            </i>
        </label>
        <!--end::Label-->

        <!--begin::Input-->
        <input name="business_descriptor" class="form-control form-control-lg form-control-solid" value="KEENTHEMES">
        <!--end::Input-->

        <!--begin::Hint-->
        <div class="form-text">
            Customers will see this shortened version of your statement descriptor
        </div>
        <!--end::Hint-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <!--begin::Label-->
        <label class="form-label required">Corporation Type</label>
        <!--end::Label-->

        <!--begin::Input-->
        <select name="business_type" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
            <option></option>
            <option value="1">S Corporation</option>
            <option value="1">C Corporation</option>
            <option value="2">Sole Proprietorship</option>
            <option value="3">Non-profit</option>
            <option value="4">Limited Liability</option>
            <option value="5">General Partnership</option>
        </select>
        <!--end::Input-->                             
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="fv-row mb-10">
        <!--end::Label-->
        <label class="form-label">Business Description</label>
        <!--end::Label-->

        <!--begin::Input-->
        <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
        <!--end::Input-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="fv-row mb-0">
        <!--begin::Label-->
        <label class="fs-6 fw-semibold form-label required">Contact Email</label>
        <!--end::Label-->

        <!--begin::Input-->
        <input name="business_email" class="form-control form-control-lg form-control-solid" value="corp@support.com">
        <!--end::Input-->
    </div>
    <!--end::Input group-->  
</div>
<!--end::Wrapper-->

                    </div>              
                    <!--end::Step 3-->

                    <!--begin::Step 4-->
                    <div class="" data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
<div class="w-100">
    <!--begin::Heading-->
    <div class="pb-10 pb-lg-15">
        <!--begin::Title-->
        <h2 class="fw-bold text-dark">Billing Details</h2>
        <!--end::Title-->

        <!--begin::Notice-->
        <div class="text-muted fw-semibold fs-6">
            If you need more info, please check out 
            <a href="#" class="text-primary fw-bold">Help Page</a>.
        </div>
        <!--end::Notice-->
    </div>
    <!--end::Heading-->

    <!--begin::Input group-->
<div class="d-flex flex-column mb-7 fv-row">
    <!--begin::Label-->
    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
        <span class="required">Name On Card</span>
        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
    </label>
    <!--end::Label-->

    <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe">
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="d-flex flex-column mb-7 fv-row">
    <!--begin::Label-->
    <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
    <!--end::Label-->
    
    <!--begin::Input wrapper-->
    <div class="position-relative">
        <!--begin::Input-->
        <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111">
        <!--end::Input-->

        <!--begin::Card logos-->
        <div class="position-absolute translate-middle-y top-50 end-0 me-5">
            <img src="../../assets/media/svg/card-logos/visa.svg" alt="" class="h-25px">
            <img src="../../assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px">
            <img src="../../assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px">
        </div>
        <!--end::Card logos-->
    </div>
    <!--end::Input wrapper-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="row mb-10">
    <!--begin::Col-->
    <div class="col-md-8 fv-row">
        <!--begin::Label-->
        <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
        <!--end::Label-->

        <!--begin::Row-->
        <div class="row fv-row">
            <!--begin::Col-->
            <div class="col-6">
                <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                    <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                    </select>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-6">
                <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                    <option></option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                            <option value="2031">2031</option>
                                            <option value="2032">2032</option>
                                            <option value="2033">2033</option>
                                    </select>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-4 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
            <span class="required">CVV</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
        </label>
        <!--end::Label-->

        <!--begin::Input wrapper-->
        <div class="position-relative">
            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv">
            <!--end::Input-->

            <!--begin::CVV icon-->
            <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
<span class="svg-icon svg-icon-2hx"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M22 7H2V11H22V7Z" fill="currentColor"></path>
<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor"></path>
</svg>
</span>
<!--end::Svg Icon-->            </div>
            <!--end::CVV icon-->
        </div>
        <!--end::Input wrapper-->
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="d-flex flex-stack">
    <!--begin::Label-->
    <div class="me-5">
        <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
        <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
    </div>
    <!--end::Label-->

    <!--begin::Switch-->
    <label class="form-check form-switch form-check-custom form-check-solid">
        <input class="form-check-input" type="checkbox" value="1" checked="checked">
        <span class="form-check-label fw-semibold text-muted">
            Save Card
        </span>
    </label>
    <!--end::Switch-->
</div>
<!--end::Input group-->

</div> 
<!--end::Wrapper-->                    </div>            
                    <!--end::Step 4-->   
                    
                    <!--begin::Step 5-->
                    <div class="" data-kt-stepper-element="content">
                         

<!--begin::Wrapper-->
<div class="w-100">
    <!--begin::Heading-->
    <div class="pb-8 pb-lg-10">
        <!--begin::Title-->
        <h2 class="fw-bold text-dark">Your Are Done!</h2>      
        <!--end::Title-->

        <!--begin::Notice-->   
        <div class="text-muted fw-semibold fs-6">
            If you need more info, please  
            <a href="<br />
<b>Deprecated</b>:  strpos(): Passing null to parameter #1 ($haystack) of type string is deprecated in <b>/var/www/preview.keenthemes.com/kt-products/metronic/releases/2023-01-27-140618/core/html/dist/libs/Theme.php</b> on line <b>1007</b><br />
/metronic8/demo8/../demo8/.html" class="link-primary fw-bold">Sign In</a>.
        </div>
        <!--end::Notice-->
    </div>
    <!--end::Heading-->
                    
    <!--begin::Body-->
    <div class="mb-0">     
        <!--begin::Text-->
        <div class="fs-6 text-gray-600 mb-5">
            Writing headlines for blog posts is as much an art as it is a science 
            and probably warrants its own post, but for all advise is with what 
            works for your great & amazing audience. 
        </div>
        <!--end::Text-->

        <!--begin::Alert-->
        
<!--begin::Notice-->
<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
            <!--begin::Icon-->
        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
<span class="svg-icon svg-icon-2tx svg-icon-warning me-4"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
</svg>
</span>
<!--end::Svg Icon-->        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 ">
                    <!--begin::Content-->
            <div class=" fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
                
                                    <div class="fs-6 text-gray-700 ">To start using great tools, please, <a href="../../utilities/wizards/vertical.html" class="fw-bold">Create Team Platform</a></div>
                            </div>
            <!--end::Content-->
        
            </div>
    <!--end::Wrapper-->  
</div>
<!--end::Notice-->
        <!--end::Alert-->
    </div>
    <!--end::Body-->
</div> 
<!--end::Wrapper-->

                     </div>            
                    <!--end::Step 5-->   

                    <!--begin::Actions-->
                    <div class="d-flex flex-stack pt-15"> 
                        <div class="mr-2">
                            <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous"> 
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
<span class="svg-icon svg-icon-4 me-1"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor"></rect>
<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor"></path>
</svg>
</span>
<!--end::Svg Icon-->                                Previous
                            </button>
                        </div>

                        <div>
                            <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                <span class="indicator-label">
                                    Submit
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
<span class="svg-icon svg-icon-4 ms-2"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
</svg>
</span>
<!--end::Svg Icon-->                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>

                            <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                Continue
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
<span class="svg-icon svg-icon-4 ms-1"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
</svg>
</span>
<!--end::Svg Icon-->                            </button>
                        </div>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->       
    </div>
    <!--end::Body-->
</div>
<!--end::Authentication - Multi-steps-->




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
        
        
                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="../../assets/js/custom/utilities/modals/create-account.js"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript-->
        
            </body>
    <!--end::Body-->
</html>