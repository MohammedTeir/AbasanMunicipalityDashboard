 <!--Begin::Google Tag Manager -->
 <script>
     (function(w, d, s, l, i) {
         w[l] = w[l] || [];
         w[l].push({
             'gtm.start': new Date().getTime(),
             event: 'gtm.js'
         });
         var f = d.getElementsByTagName(s)[0],
             j = d.createElement(s),
             dl = l != 'dataLayer' ? '&l=' + l : '';
         j.async = true;
         j.src =
             'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
         f.parentNode.insertBefore(j, f);
     })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
 </script>
 <!--End::Google Tag Manager -->

 <!--begin::Theme mode setup on page load-->
 <script>
     var defaultThemeMode = "light";
     var themeMode;

     if (document.documentElement) {
         if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
             themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
         } else {
             if (localStorage.getItem("data-bs-theme") !== null) {
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
 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
         style="display:none;visibility:hidden"></iframe></noscript>
 <!--End::Google Tag Manager (noscript) -->


<script src="{{ asset('assets/js/custom/axios/axios.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/crud.js') }}"></script>

 <!--begin::Global Javascript Bundle(mandatory for all pages)-->
 <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
 <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
 <!--end::Global Javascript Bundle-->

 <!--begin::Vendors Javascript(used for this page only)-->
 <!--begin::Custom Javascript(used for this page only)-->

 @yield('js-ext')
 <!--end::Vendors Javascript-->
 <!--end::Custom Javascript-->



 <!--end::Javascript-->
