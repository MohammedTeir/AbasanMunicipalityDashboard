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
		

    <!--begin::Wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Header-->
        <div class="bg-body d-flex flex-column-auto justify-content-cenrer align-items-start gap-2 gap-lg-4 py-4 px-10 overflow-auto" id="kt_app_header_nav">
            <a href="../../index.html" class="flex-grow-1 mt-2">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
<span class="svg-icon svg-icon-2x svg-icon-gray-400"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor"></rect>
<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor"></path>
</svg>
</span>
<!--end::Svg Icon--> 
            </a>
             
                            
                <a href="welcome-message.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold active bg-light border border-2">
                    <i class="fonticon-hello fs-1 mb-2"></i>
                    <span class="fs-8 fw-bold">Welcome<br>Message</span>
                </a>
                            
                <a href="reset-password.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold ">
                    <i class="fonticon-password fs-1 mb-2"></i>
                    <span class="fs-8 fw-bold">Reset<br>Password</span>
                </a>
                            
                <a href="subscription-confirmed.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold ">
                    <i class="fonticon-alarm fs-1 mb-2"></i>
                    <span class="fs-8 fw-bold">Subscription<br>Confirmed</span>
                </a>
                            
                <a href="card-declined.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold ">
                    <i class="fonticon-card fs-1 mb-2"></i>
                    <span class="fs-8 fw-bold">Card<br>Declined</span>
                </a>
                            
                <a href="promo-1.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold ">
                    <i class="fonticon-hourglass fs-1 mb-2"></i>
                    <span class="fs-8 fw-bold">Promotion<br>Email 1</span>
                </a>
                            
                <a href="promo-2.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold ">
                    <i class="fonticon-image fs-1 mb-2"></i>
                    <span class="fs-8 fw-bold">Promotion<br>Email 2</span>
                </a>
                            
                <a href="promo-3.html" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold ">
                    <i class="fonticon-send fs-1 mb-2"></i>
                    <span class="fs-8 fw-bold">Promotion<br>Email 3</span>
                </a>
                        
            <a href="welcome-message-1.html?nav=0" class="flex-grow-1 text-end mt-2">
                <!--begin::Svg Icon | path: icons/duotune/general/gen034.svg-->
<span class="svg-icon svg-icon-2x svg-icon-icon-gray-400"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"></rect>
<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"></rect>
</svg>
</span>
<!--end::Svg Icon--> 
            </a>          
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="scroll-y flex-column-fluid px-10 py-10" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header_nav" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true" style="background-color:#D5D9E2; --kt-scrollbar-color: #d9d0cc; --kt-scrollbar-hover-color: #d9d0cc">

        <!--begin::Email template-->      
		<style>
            html,body {
                padding:0;
                margin:0;
                font-family: Inter, Helvetica, "sans-serif";                                       
            }            

			a:hover {
                color: #009ef7;
            }
        </style>
        
        <div id="#kt_app_body_content" style="background-color:#D5D9E2; font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
            <div style="background-color:#ffffff; padding: 45px 0 34px 0; border-radius: 24px; margin:40px auto; max-width: 600px;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto" style="border-collapse:collapse">
                    <tbody>                      
                        <tr>
                            <td align="center" valign="center" style="text-align:center; padding-bottom: 10px">
                                
    <!--begin:Email content-->
    <div style="text-align:center; margin:0 15px 34px 15px">
        <!--begin:Logo-->
        <div style="margin-bottom: 10px">
            <a href="https://keenthemes.com" rel="noopener" target="_blank">
                <img alt="Logo" src="../../assets/media/email/logo-1.svg" style="height: 35px">                
            </a>
        </div>
        <!--end:Logo-->

        <!--begin:Media-->
        <div style="margin-bottom: 15px">
            <img alt="Logo" src="../../assets/media/email/icon-positive-vote-1.svg">              
        </div> 
        <!--end:Media-->                            

        <!--begin:Text-->
        <div style="font-size: 14px; font-weight: 500; margin-bottom: 27px; font-family:Arial,Helvetica,sans-serif;">
            <p style="margin-bottom:9px; color:#181C32; font-size: 22px; font-weight:700">Hey Marcus, thanks for signing up!</p>
            <p style="margin-bottom:2px; color:#7E8299">Lots of people make mistakes while creating</p>
            <p style="margin-bottom:2px; color:#7E8299">paragraphs. Some writers just put whitespace in</p>  
            <p style="margin-bottom:2px; color:#7E8299">their text in random places</p>  
        </div>  
        <!--end:Text-->
         
        <!--begin:Action-->
        <a href='../general/welcome.html' target="_blank" style="background-color:#50cd89; border-radius:6px;display:inline-block; padding:11px 19px; color: #FFFFFF; font-size: 14px; font-weight:500;">
            Activate Account
        </a>
        <!--begin:Action-->      
    </div>
    <!--end:Email content-->    
                            </td>
                        </tr>  

                         
                            <tr style="display: flex; justify-content: center; margin:0 60px 35px 60px">
                                <td align="start" valign="start" style="padding-bottom: 10px;">
                                    <p style="color:#181C32; font-size: 18px; font-weight: 600; margin-bottom:13px">What’s next?</p>

                                    <!--begin::Wrapper-->
                                    <div style="background: #F9F9F9; border-radius: 12px; padding:35px 30px">
                                                                                    <!--begin::Item-->
                                            <div style="display:flex">                    
                                                <!--begin::Media-->
                                                <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                                                    <img alt="Logo" src="../../assets/media/email/icon-polygon.svg">  
                                                    
                                                     
                                                        <span style="position: absolute; color:#50CD89; font-size: 16px; font-weight: 600;">
                                                            1                                                        </span> 
                                                                                                 
                                                </div>
                                                <!--end::Media-->                   

                                                <!--begin::Block-->
                                                <div>
                                                    <!--begin::Content-->
                                                    <div>
                                                        <!--begin::Title-->
                                                        <a href="#" style="color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Complete your account</a>
                                                        <!--end::Title-->

                                                        <!--begin::Desc-->
                                                        <p style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">Lots of people make mistakes while creating paragraphs Some writers just put whitespace in their text</p>   
                                                        <!--end::Desc-->                                     
                                                    </div>
                                                    <!--end::Content-->  
                                                    
                                                                                                            <!--begin::Separator-->
                                                        <div class="separator separator-dashed" style="margin:17px 0 15px 0"></div>
                                                        <!--end::Separator-->
                                                                                       
                                                </div>
                                                <!--end::Block-->  
                                            </div>                                           
                                            <!--end::Item-->                                          
                                                                                    <!--begin::Item-->
                                            <div style="display:flex">                    
                                                <!--begin::Media-->
                                                <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                                                    <img alt="Logo" src="../../assets/media/email/icon-polygon.svg">  
                                                    
                                                     
                                                        <span style="position: absolute; color:#50CD89; font-size: 16px; font-weight: 600;">
                                                            2                                                        </span> 
                                                                                                 
                                                </div>
                                                <!--end::Media-->                   

                                                <!--begin::Block-->
                                                <div>
                                                    <!--begin::Content-->
                                                    <div>
                                                        <!--begin::Title-->
                                                        <a href="#" style="color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Communication Tool</a>
                                                        <!--end::Title-->

                                                        <!--begin::Desc-->
                                                        <p style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">Craft a headline that is both informative and will capture readers’ improtant attentions</p>   
                                                        <!--end::Desc-->                                     
                                                    </div>
                                                    <!--end::Content-->  
                                                    
                                                                                                            <!--begin::Separator-->
                                                        <div class="separator separator-dashed" style="margin:17px 0 15px 0"></div>
                                                        <!--end::Separator-->
                                                                                       
                                                </div>
                                                <!--end::Block-->  
                                            </div>                                           
                                            <!--end::Item-->                                          
                                                                                    <!--begin::Item-->
                                            <div style="display:flex">                    
                                                <!--begin::Media-->
                                                <div style="display: flex; justify-content: center; align-items: center; width:40px; height:40px; margin-right:13px">
                                                    <img alt="Logo" src="../../assets/media/email/icon-polygon.svg">  
                                                    
                                                     
                                                        <span style="position: absolute; color:#50CD89; font-size: 16px; font-weight: 600;">
                                                            3                                                        </span> 
                                                                                                 
                                                </div>
                                                <!--end::Media-->                   

                                                <!--begin::Block-->
                                                <div>
                                                    <!--begin::Content-->
                                                    <div>
                                                        <!--begin::Title-->
                                                        <a href="#" style="color:#181C32; font-size: 14px; font-weight: 600;font-family:Arial,Helvetica,sans-serif">Task Planner</a>
                                                        <!--end::Title-->

                                                        <!--begin::Desc-->
                                                        <p style="color:#5E6278; font-size: 13px; font-weight: 500; padding-top:3px; margin:0;font-family:Arial,Helvetica,sans-serif">Use images to enhance your post, improve its flow, add humor, and explain complex topics</p>   
                                                        <!--end::Desc-->                                     
                                                    </div>
                                                    <!--end::Content-->  
                                                    
                                                                                       
                                                </div>
                                                <!--end::Block-->  
                                            </div>                                           
                                            <!--end::Item-->                                          
                                         
                                    </div> 
                                    <!--end::Wrapper-->
                                </td>
                            </tr>    
                                                
                         
                        <tr>
                            <td align="center" valign="center" style="font-size: 13px; text-align:center; padding: 0 10px 10px 10px; font-weight: 500; color: #A1A5B7; font-family:Arial,Helvetica,sans-serif">
                                <p style="color:#181C32; font-size: 16px; font-weight: 600; margin-bottom:9px                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ">It’s all about customers!</p>
                                <p style="margin-bottom:2px">Call our customer care number: +31 6 3344 55 56</p>
                                <p style="margin-bottom:4px">You may reach us at <a href="https://devs.keenthemes.com" rel="noopener" target="_blank" style="font-weight: 600">devs.keenthemes.com</a>.</p>
                                <p>We serve Mon-Fri, 9AM-18AM</p>                                
                            </td>
                        </tr>   
                        
                        <tr>
                            <td align="center" valign="center" style="text-align:center; padding-bottom: 20px;">                                
                                <a href="#" style="margin-right:10px"><img alt="Logo" src="../../assets/media/email/icon-linkedin.svg"></a>    
                                <a href="#" style="margin-right:10px"><img alt="Logo" src="../../assets/media/email/icon-dribbble.svg"></a>    
                                <a href="#" style="margin-right:10px"><img alt="Logo" src="../../assets/media/email/icon-facebook.svg"></a>   
                                <a href="#"><img alt="Logo" src="../../assets/media/email/icon-twitter.svg"></a>                           
                            </td>
                        </tr>
                        
                        <tr>
                            <td align="center" valign="center" style="font-size: 13px; padding:0 15px; text-align:center; font-weight: 500; color: #A1A5B7;font-family:Arial,Helvetica,sans-serif">                            
                                <p> &copy Copyright KeenThemes.
                                    <a href="https://keenthemes.com" rel="noopener" target="_blank" style="font-weight: 600;font-family:Arial,Helvetica,sans-serif">Unsubscribe</a>&nbsp;
                                    from newsletter.
                                </p>                         
                            </td>
                        </tr>      
                    </tbody>   
                </table> 
            </div>
        </div>
        <!--end::Email template-->

        </div>
        <!--end::Body-->
    </div>
    <!--end::Wrapper-->
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