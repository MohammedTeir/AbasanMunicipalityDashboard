<!--begin::Aside-->
<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Aside Toolbarl-->
    <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
      <!--begin::Aside user-->
      <!--begin::User-->
      <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
        <!--begin::Symbol-->
        <div class="symbol symbol-50px">
          <img src="{{Auth::user()->image_url}}" alt="" />
        </div>
        <!--end::Symbol-->
        <!--begin::Wrapper-->
        <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
          <!--begin::Section-->
          <div class="d-flex">
            <!--begin::Info-->
            <div class="flex-grow-1 me-2">
              <!--begin::Username-->
              <a href="{{route('admins.show',['admin'=>Auth::user()->id])}}" class="text-white text-hover-primary fs-6 fw-bold">{{Auth::user()->name }}</a>
              <!--end::Username-->
              <!--begin::Description-->
              <span class="text-gray-600 fw-semibold d-block fs-8 mb-1">{{Auth::user()->email }}</span>
              <!--end::Description-->
              <!--begin::Label-->
              <div class="d-flex align-items-center text-success fs-9">
                    <td>
                     @foreach(Auth::user()->roles as $role)
                     <a href="{{route('roles.show',['role'=>$role])}}">
                     {!! html_entity_decode($role->role_badge) !!}
                     </a>
                     @endforeach
                    </td>
              </div>
              <!--end::Label-->
            </div>
            <!--end::Info-->
            <!--begin::User menu-->
            <div class="me-n2">
              <!--begin::Action-->
              <a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
                <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                <span class="svg-icon svg-icon-muted svg-icon-1">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor" />
                    <path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor" />
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </a>
              <!--begin::User account menu-->
              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <div class="menu-content d-flex align-items-center px-3">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                      <img alt="Logo" src="{{Auth::user()->image_url}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Username-->
                    <div class="d-flex flex-column">
                      <div class="fw-bold d-flex align-items-center fs-5"> {{Auth::user()->name}}
                      </div>
                      <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                        @foreach(Auth::user()->roles as $role)
                        <a href="{{route('roles.show',['role'=>$role])}}">
                        {!! html_entity_decode($role->role_badge) !!}
                        </a>
                        @endforeach </a>
                    </div>
                    <!--end::Username-->
                  </div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                @canany(['Create-Admin','Read-Admin', 'Update-Admin', 'Delete-Admin'])

                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="{{route('admins.show',['admin'=>Auth::user()->id])}}" class="menu-link px-5"> My Profile </a>
                  </div>
                  <!--end::Menu item-->

                @endcanany

                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
                  <a href="#" class="menu-link px-5">
                    <span class="menu-title position-relative"> Language <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0"> English <img class="w-15px h-15px rounded-1 ms-2" src="{{asset('assets/media/flags/united-states.svg')}}" alt="" />
                      </span>
                    </span>
                  </a>
                  <!--begin::Menu sub-->
                  <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="../demo8/account/settings.html" class="menu-link d-flex px-5 active">
                        <span class="symbol symbol-20px me-4">
                          <img class="rounded-1" src="{{asset('assets/media/flags/united-states.svg')}}" alt="" />
                        </span> English </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="../demo8/account/settings.html" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                          <img class="rounded-1" src="{{asset('assets/media/flags/spain.svg')}}" alt="" />
                        </span> Spanish </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="../demo8/account/settings.html" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                          <img class="rounded-1" src="{{asset('assets/media/flags/germany.svg')}}" alt="" />
                        </span> German </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="../demo8/account/settings.html" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                          <img class="rounded-1" src="{{asset('assets/media/flags/japan.svg')}}" alt="" />
                        </span> Japanese </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a href="../demo8/account/settings.html" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                          <img class="rounded-1" src="{{asset('assets/media/flags/france.svg')}}" alt="" />
                        </span> French </a>
                    </div>
                    <!--end::Menu item-->
                  </div>
                  <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->
                {{-- <!--begin::Menu item-->
                <div class="menu-item px-5 my-1">
                  <a href="../demo8/account/settings.html" class="menu-link px-5"> Account Settings </a>
                </div>
                <!--end::Menu item--> --}}
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                  <a href="{{route('dashboard.logout')}}" class="menu-link px-5"> Sign Out </a>
                </div>
                <!--end::Menu item-->
              </div>
              <!--end::User account menu-->
              <!--end::Action-->
            </div>
            <!--end::User menu-->
          </div>
          <!--end::Section-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::User-->
      <!--begin::Aside search-->
      <div class="aside-search py-5">
        <!--begin::Search-->
        <div id="kt_header_search" class="header-search d-flex align-items-center w-100" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="false" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
          <!--begin::Form-->
          <form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
            <!--begin::Hidden input(Added to disable form autocomplete)-->
            <input type="hidden" />
            <!--end::Hidden input-->
            <!--begin::Icon-->
            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
            <span class="svg-icon svg-icon-2 search-icon position-absolute top-50 translate-middle-y ms-4">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
            <!--end::Icon-->
            <!--begin::Input-->
            <input type="text" class="search-input form-control ps-13 fs-7 h-40px" name="search" value="" placeholder="Quick Search" data-kt-search-element="input" />
            <!--end::Input-->
            <!--begin::Spinner-->
            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
              <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
            </span>
            <!--end::Spinner-->
            <!--begin::Reset-->
            <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
              <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                  <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
            </span>
            <!--end::Reset-->
          </form>
          <!--end::Form-->
          <!--begin::Menu-->
          <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 px-7 overflow-hidden">
            <!--begin::Wrapper-->
            <div data-kt-search-element="wrapper">
              <!--begin::Recently viewed-->
              <div data-kt-search-element="results" class="d-none">
                <!--begin::Items-->
                <div class="scroll-y mh-200px mh-lg-350px">
                  <!--begin::Category title-->
                  <h3 class="fs-5 text-muted m-0  pb-5" data-kt-search-element="category-title"> Users </h3>
                  <!--end::Category title-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <img src="{{asset('assets/media/avatars/300-6.jpg')}}" alt="" />
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column justify-content-start fw-semibold">
                      <span class="fs-6 fw-semibold">Karina Clark</span>
                      <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <img src="{{asset('assets/media/avatars/300-2.jpg')}}" alt="" />
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column justify-content-start fw-semibold">
                      <span class="fs-6 fw-semibold">Olivia Bold</span>
                      <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <img src="{{asset('assets/media/avatars/300-9.jpg')}}" alt="" />
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column justify-content-start fw-semibold">
                      <span class="fs-6 fw-semibold">Ana Clark</span>
                      <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <img src="{{asset('assets/media/avatars/300-14.jpg')}}" alt="" />
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column justify-content-start fw-semibold">
                      <span class="fs-6 fw-semibold">Nick Pitola</span>
                      <span class="fs-7 fw-semibold text-muted">Art Director</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <img src="{{asset('assets/media/avatars/300-11.jpg')}}" alt="" />
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column justify-content-start fw-semibold">
                      <span class="fs-6 fw-semibold">Edward Kulnic</span>
                      <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                  <!--begin::Category title-->
                  <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title"> Customers </h3>
                  <!--end::Category title-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <img class="w-20px h-20px" src="{{asset('assets/media/svg/brand-logos/volicity-9.svg')}}" alt="" />
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column justify-content-start fw-semibold">
                      <span class="fs-6 fw-semibold">Company Rbranding</span>
                      <span class="fs-7 fw-semibold text-muted">UI Design</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <img class="w-20px h-20px" src="{{asset('assets/media/svg/brand-logos/tvit.svg')}}" alt="" />
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column justify-content-start fw-semibold">
                      <span class="fs-6 fw-semibold">Company Re-branding</span>
                      <span class="fs-7 fw-semibold text-muted">Web Development</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <img class="w-20px h-20px" src="{{asset('assets/media/svg/misc/infography.svg')}}" alt="" />
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column justify-content-start fw-semibold">
                      <span class="fs-6 fw-semibold">Business Analytics App</span>
                      <span class="fs-7 fw-semibold text-muted">Administration</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <img class="w-20px h-20px" src="{{asset('assets/media/svg/brand-logos/leaf.svg')}}" alt="" />
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column justify-content-start fw-semibold">
                      <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                      <span class="fs-7 fw-semibold text-muted">Marketing</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <img class="w-20px h-20px" src="{{asset('assets/media/svg/brand-logos/tower.svg')}}" alt="" />
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column justify-content-start fw-semibold">
                      <span class="fs-6 fw-semibold">Tower Group Website</span>
                      <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                  <!--begin::Category title-->
                  <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title"> Projects </h3>
                  <!--end::Category title-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
                            <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
                            <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
                            <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column">
                      <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                      <span class="fs-7 fw-semibold text-muted">#45670</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                            <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
                            <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                            <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column">
                      <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                      <span class="fs-7 fw-semibold text-muted">#45690</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
                            <rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
                            <rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column">
                      <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                      <span class="fs-7 fw-semibold text-muted">#21090</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
                            <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
                            <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column">
                      <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                      <span class="fs-7 fw-semibold text-muted">#34560</span>
                    </div>
                    <!--end::Title-->
                  </a>
                  <!--end::Item-->
                </div>
                <!--end::Items-->
              </div>
              <!--end::Recently viewed-->
              <!--begin::Recently viewed-->
              <div class="" data-kt-search-element="main">
                <!--begin::Heading-->
                <div class="d-flex flex-stack fw-semibold mb-4">
                  <!--begin::Label-->
                  <span class="text-muted fs-6 me-2">Recently Searched:</span>
                  <!--end::Label-->
                  <!--begin::Toolbar-->
                  <div class="d-flex" data-kt-search-element="toolbar">
                    <!--begin::Preferences toggle-->
                    <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" tooltip" title="Show search preferences">
                      <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                      <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor" />
                          <path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </div>
                    <!--end::Preferences toggle-->
                    <!--begin::Advanced search toggle-->
                    <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </div>
                    <!--end::Advanced search toggle-->
                  </div>
                  <!--end::Toolbar-->
                </div>
                <!--end::Heading-->
                <!--begin::Items-->
                <div class="scroll-y mh-200px mh-lg-325px">
                  <!--begin::Item-->
                  <div class="d-flex align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z" fill="currentColor" />
                            <path opacity="0.3" d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z" fill="currentColor" />
                            <path opacity="0.3" d="M15 17H9V20H15V17Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column">
                      <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                      <span class="fs-7 text-muted fw-semibold">#45789</span>
                    </div>
                    <!--end::Title-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="currentColor" />
                            <path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column">
                      <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                      <span class="fs-7 text-muted fw-semibold">#84050</span>
                    </div>
                    <!--end::Title-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="currentColor" />
                            <path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column">
                      <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                      <span class="fs-7 text-muted fw-semibold">#84250</span>
                    </div>
                    <!--end::Title-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="currentColor" />
                            <path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column">
                      <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
                      <span class="fs-7 text-muted fw-semibold">#67945</span>
                    </div>
                    <!--end::Title-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                            <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column">
                      <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
                      <span class="fs-7 text-muted fw-semibold">#84250</span>
                    </div>
                    <!--end::Title-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor" />
                            <path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column">
                      <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                      <span class="fs-7 text-muted fw-semibold">#45690</span>
                    </div>
                    <!--end::Title-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex align-items-center mb-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-40px me-4">
                      <span class="symbol-label bg-light">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="currentColor" />
                            <path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="currentColor" />
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column">
                      <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                      <span class="fs-7 text-muted fw-semibold">#24005</span>
                    </div>
                    <!--end::Title-->
                  </div>
                  <!--end::Item-->
                </div>
                <!--end::Items-->
              </div>
              <!--end::Recently viewed-->
              <!--begin::Empty-->
              <div data-kt-search-element="empty" class="text-center d-none">
                <!--begin::Icon-->
                <div class="pt-10 pb-10">
                  <!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
                  <span class="svg-icon svg-icon-4x opacity-50">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="currentColor" />
                      <path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="currentColor" />
                      <rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="currentColor" />
                      <path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="currentColor" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </div>
                <!--end::Icon-->
                <!--begin::Message-->
                <div class="pb-15 fw-semibold">
                  <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                  <div class="text-muted fs-7">Please try again with a different query</div>
                </div>
                <!--end::Message-->
              </div>
              <!--end::Empty-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Preferences-->
            <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
              <!--begin::Heading-->
              <h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
              <!--end::Heading-->
              <!--begin::Input group-->
              <div class="mb-5">
                <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="mb-5">
                <!--begin::Radio group-->
                <div class="nav-group nav-group-fluid">
                  <!--begin::Option-->
                  <label>
                    <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary"> All </span>
                  </label>
                  <!--end::Option-->
                  <!--begin::Option-->
                  <label>
                    <input type="radio" class="btn-check" name="type" value="users" />
                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"> Users </span>
                  </label>
                  <!--end::Option-->
                  <!--begin::Option-->
                  <label>
                    <input type="radio" class="btn-check" name="type" value="orders" />
                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"> Orders </span>
                  </label>
                  <!--end::Option-->
                  <!--begin::Option-->
                  <label>
                    <input type="radio" class="btn-check" name="type" value="projects" />
                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"> Projects </span>
                  </label>
                  <!--end::Option-->
                </div>
                <!--end::Radio group-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="mb-5">
                <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="mb-5">
                <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="mb-5">
                <!--begin::Radio group-->
                <div class="nav-group nav-group-fluid">
                  <!--begin::Option-->
                  <label>
                    <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary"> Has attachment </span>
                  </label>
                  <!--end::Option-->
                  <!--begin::Option-->
                  <label>
                    <input type="radio" class="btn-check" name="attachment" value="any" />
                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"> Any </span>
                  </label>
                  <!--end::Option-->
                </div>
                <!--end::Radio group-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="mb-5">
                <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                  <option value="next">Within the next</option>
                  <option value="last">Within the last</option>
                  <option value="between">Between</option>
                  <option value="on">On</option>
                </select>
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-6">
                  <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-6">
                  <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                    <option value="days">Days</option>
                    <option value="weeks">Weeks</option>
                    <option value="months">Months</option>
                    <option value="years">Years</option>
                  </select>
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              <!--begin::Actions-->
              <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                <a href="../demo8/pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
              </div>
              <!--end::Actions-->
            </form>
            <!--end::Preferences-->
            <!--begin::Preferences-->
            <form data-kt-search-element="preferences" class="pt-1 d-none">
              <!--begin::Heading-->
              <h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
              <!--end::Heading-->
              <!--begin::Input group-->
              <div class="pb-4 border-bottom">
                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                  <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"> Projects </span>
                  <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                </label>
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="py-4 border-bottom">
                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                  <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"> Targets </span>
                  <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                </label>
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="py-4 border-bottom">
                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                  <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"> Affiliate Programs </span>
                  <input class="form-check-input" type="checkbox" value="1" />
                </label>
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="py-4 border-bottom">
                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                  <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"> Referrals </span>
                  <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                </label>
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="py-4 border-bottom">
                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                  <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"> Users </span>
                  <input class="form-check-input" type="checkbox" value="1" />
                </label>
              </div>
              <!--end::Input group-->
              <!--begin::Actions-->
              <div class="d-flex justify-content-end pt-7">
                <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
                <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
              </div>
              <!--end::Actions-->
            </form>
            <!--end::Preferences-->
          </div>
          <!--end::Menu-->
        </div>
        <!--end::Search-->
      </div>
      <!--end::Aside search-->
      <!--end::Aside user-->
    </div>
    <!--end::Aside Toolbarl-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
      <!--begin::Aside Menu-->
      <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
        <!--begin::Menu-->
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">

            @canany(['Create-Admin', 'Read-Admin', 'Update-Admin','Delete-Admin'
            ,'Create-User', 'Read-User', 'Update-User','Delete-User'])

            <!--begin:Menu item-->
          <div class="menu-item pt-5">
            <!--begin:Menu content-->
            <div class="menu-content">
              <span class="menu-heading fw-bold text-uppercase fs-7">Human Resource</span>
            </div>
            <!--end:Menu content-->
          </div>
          <!--end:Menu item-->


          @can('Read-Admin')
          <!--begin:Menu item-->
          <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{route('admins.index')}}">
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100"
                    viewBox="0 0 64 64" >
                    <rect width="2"  height="2" x="15" y="17"></rect><rect width="2" height="2" x="23" y="17"></rect><path fill='currentColor' d="M61.12,48.11l-2.4-.31,1.49-1.91a1.006,1.006,0,0,0-.08-1.32l-2.7-2.7a1.006,1.006,0,0,0-1.32-.08L54.2,43.28l-.31-2.4A1,1,0,0,0,52.9,40H52v-.9a1.013,1.013,0,0,0-.88-1l-2.4-.3,1.49-1.91a.994.994,0,0,0-.09-1.32l-2.69-2.69a.994.994,0,0,0-1.32-.09L44.2,33.28l-.3-2.4a1.013,1.013,0,0,0-1-.88H39.1a1.013,1.013,0,0,0-1,.88l-.3,2.4-1.91-1.49a.994.994,0,0,0-1.32.09l-2.69,2.69a.874.874,0,0,0-.25.46c-.21-.01-.42-.03-.63-.03H27.33L24,32.5V30.16A10.024,10.024,0,0,0,29.95,22H30a3.009,3.009,0,0,0,3-3V18a3,3,0,0,0-1.83-2.76l1.54-1.53A1.033,1.033,0,0,0,33,13V11a9.014,9.014,0,0,0-9-9H16a9.014,9.014,0,0,0-9,9v2a1.033,1.033,0,0,0,.29.71l1.54,1.53A3,3,0,0,0,7,18v1a3.009,3.009,0,0,0,3,3h.05A10.024,10.024,0,0,0,16,30.16V32.5L12.67,35H9a7.008,7.008,0,0,0-7,7V55a1,1,0,0,0,1,1H37a1,1,0,0,0,1-1V50.3l.1.82a1.013,1.013,0,0,0,1,.88H40v.9a1,1,0,0,0,.88.99l2.4.31-1.49,1.91a1.006,1.006,0,0,0,.08,1.32l2.7,2.7a1.006,1.006,0,0,0,1.32.08l1.91-1.49.31,2.4a1,1,0,0,0,.99.88h3.8a1,1,0,0,0,.99-.88l.31-2.4,1.91,1.49a1.006,1.006,0,0,0,1.32-.08l2.7-2.7a1.006,1.006,0,0,0,.08-1.32L58.72,54.2l2.4-.31A1,1,0,0,0,62,52.9V49.1A1,1,0,0,0,61.12,48.11ZM31,19a1,1,0,0,1-1,1V17a1,1,0,0,1,1,1ZM10,20a1,1,0,0,1-1-1V18a1,1,0,0,1,1-1Zm0-7v.59l-1-1V11a7.008,7.008,0,0,1,7-7h8a7.008,7.008,0,0,1,7,7v1.59l-1,1V13a.985.985,0,0,0-.74-.96l-11-3a.969.969,0,0,0-.65.04l-7,3A1,1,0,0,0,10,13Zm2,8V13.66l6.07-2.6L28,13.76V21a8,8,0,0,1-16,0Zm5.6,12.8A1.014,1.014,0,0,0,18,33V30.8a10.1,10.1,0,0,0,4,0V33a1.014,1.014,0,0,0,.4.8l2.78,2.09L20,38.85l-5.18-2.96Zm1.9,7.07a1.044,1.044,0,0,0,1,0l5.09-2.91L24.18,45H15.82l-1.41-7.04ZM36,54H4V42a5,5,0,0,1,5-5h3.18l1.84,9.2A1,1,0,0,0,15,47H25a1,1,0,0,0,.98-.8L27.82,37H31a4.755,4.755,0,0,1,1.98.42l.3.38-2.4.3a1.013,1.013,0,0,0-.88,1v3.8a1.013,1.013,0,0,0,.88,1l2.4.3-1.49,1.91a.994.994,0,0,0,.09,1.32l2.69,2.69a.994.994,0,0,0,1.32.09l.11-.09Zm3.98-4-.3-2.37a.989.989,0,0,0-.66-.82,7.758,7.758,0,0,1-.72-.3.979.979,0,0,0-1.05.11l-1.89,1.47-1.45-1.45,1.47-1.89a.979.979,0,0,0,.11-1.05c-.11-.23-.21-.47-.3-.71a.984.984,0,0,0-.82-.67L32,42.02V39.98l2.37-.3a.984.984,0,0,0,.82-.67c.09-.24.19-.48.3-.71a.979.979,0,0,0-.11-1.05l-1.47-1.89,1.45-1.45,1.89,1.47a.979.979,0,0,0,1.05.11c.23-.11.47-.21.71-.3a1,1,0,0,0,.67-.82l.3-2.37h2.04l.3,2.37a1,1,0,0,0,.67.82c.24.09.48.19.71.3a.979.979,0,0,0,1.05-.11l1.89-1.47,1.45,1.45-1.47,1.89a.979.979,0,0,0-.11,1.05c.11.23.21.47.3.71a.984.984,0,0,0,.82.67l2.37.3v2.04l-2.37.3a.984.984,0,0,0-.82.67c-.09.24-.19.48-.3.71a.979.979,0,0,0,.11,1.05l1.47,1.89-1.45,1.45-1.89-1.47a.979.979,0,0,0-1.05-.11,7.758,7.758,0,0,1-.72.3.989.989,0,0,0-.66.82L42.02,50ZM51,48a3,3,0,1,1-3,3A3.009,3.009,0,0,1,51,48Zm9,4.02-2.38.3a1.019,1.019,0,0,0-.83.69,4.26,4.26,0,0,1-.28.7.982.982,0,0,0,.11,1.04l1.47,1.89-1.45,1.45-1.89-1.47a.98.98,0,0,0-1.04-.11,4.26,4.26,0,0,1-.7.28,1.019,1.019,0,0,0-.69.83L52.02,60H49.98l-.3-2.38a1.019,1.019,0,0,0-.69-.83,4.26,4.26,0,0,1-.7-.28.982.982,0,0,0-1.04.11l-1.89,1.47-1.45-1.45,1.47-1.89a.982.982,0,0,0,.11-1.04,4.26,4.26,0,0,1-.28-.7,1.019,1.019,0,0,0-.83-.69L42,52.02V52h.9a1.013,1.013,0,0,0,1-.88l.3-2.4,1.88,1.47A5.293,5.293,0,0,0,46,51a5,5,0,1,0,5-5,5.293,5.293,0,0,0-.81.08L48.72,44.2l2.4-.3a1.013,1.013,0,0,0,.88-1V42h.02l.3,2.38a1.019,1.019,0,0,0,.69.83,4.26,4.26,0,0,1,.7.28.98.98,0,0,0,1.04-.11l1.89-1.47,1.45,1.45-1.47,1.89a.982.982,0,0,0-.11,1.04,4.26,4.26,0,0,1,.28.7,1.019,1.019,0,0,0,.83.69l2.38.3Z"></path><path d="M46,41a5,5,0,1,0-5,5A5.006,5.006,0,0,0,46,41Zm-5,3a3,3,0,1,1,3-3A3,3,0,0,1,41,44Z"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
              </span>
              <span class="menu-title">Admins</span>
            </a>
            <!--end:Menu link-->
          </div>
          <!--end:Menu item-->
          @endcan


          @can('Read-User')

             <!--begin:Menu item-->
             <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="{{route('users.index')}}">
                  <span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="100" height="100"
                        viewBox="0 0 50 50">
                        <path fill='currentColor' d="M 26.8125 5 C 22.355469 5 19.097656 6.761719 17.375 9.375 C 17.019531 9.910156 16.753906 10.472656 16.53125 11.0625 L 16.28125 10.5625 C 16.117188 10.226563 15.78125 10.007813 15.40625 10 C 11.945313 10 9.359375 11.40625 8 13.5 C 6.757813 15.410156 6.683594 17.8125 7.46875 20.0625 C 7.40625 20.164063 7.273438 20.21875 7.21875 20.34375 C 7.03125 20.761719 6.929688 21.289063 7 21.90625 C 7 21.917969 7 21.925781 7 21.9375 C 7.113281 22.847656 7.34375 23.5 7.71875 24 C 7.878906 24.210938 8.132813 24.210938 8.34375 24.34375 C 8.492188 25.085938 8.703125 25.824219 9 26.4375 C 9.175781 26.804688 9.363281 27.121094 9.5625 27.40625 C 9.628906 27.503906 9.742188 27.570313 9.8125 27.65625 C 9.8125 28.421875 9.785156 29.109375 9.71875 30 C 9.539063 30.457031 9.101563 30.859375 8.28125 31.28125 C 7.441406 31.710938 6.316406 32.109375 5.15625 32.625 C 3.996094 33.140625 2.757813 33.765625 1.78125 34.78125 C 0.804688 35.796875 0.113281 37.21875 0 39.03125 C -0.015625 39.308594 0.0820313 39.578125 0.269531 39.777344 C 0.460938 39.980469 0.722656 40.09375 1 40.09375 L 7.21875 40.09375 C 7.066406 40.664063 6.945313 41.277344 6.90625 41.9375 C 6.890625 42.214844 6.988281 42.484375 7.175781 42.683594 C 7.367188 42.886719 7.628906 43 7.90625 43 L 42.09375 43 C 42.371094 43 42.632813 42.886719 42.824219 42.683594 C 43.011719 42.484375 43.109375 42.214844 43.09375 41.9375 C 43.050781 41.238281 42.917969 40.601563 42.75 40 L 49 40 C 49.277344 40 49.539063 39.886719 49.730469 39.683594 C 49.917969 39.484375 50.015625 39.214844 50 38.9375 C 49.886719 37.128906 49.1875 35.703125 48.21875 34.6875 C 47.25 33.671875 46.054688 33.046875 44.90625 32.53125 C 43.757813 32.015625 42.644531 31.617188 41.8125 31.1875 C 41.019531 30.777344 40.597656 30.355469 40.40625 29.90625 C 40.339844 29.097656 40.3125 28.378906 40.3125 27.5625 C 40.378906 27.476563 40.496094 27.40625 40.5625 27.3125 C 40.761719 27.03125 40.921875 26.707031 41.09375 26.34375 C 41.371094 25.753906 41.574219 25.050781 41.6875 24.34375 C 41.890625 24.214844 42.128906 24.203125 42.28125 24 C 42.65625 23.5 42.886719 22.847656 43 21.9375 C 43.070313 21.386719 43.007813 20.871094 42.84375 20.4375 C 42.796875 20.316406 42.625 20.242188 42.5625 20.125 C 42.78125 19.613281 43.03125 19.128906 43.09375 18.5 C 43.183594 17.566406 43.109375 16.519531 42.84375 15.5 C 42.578125 14.480469 42.117188 13.46875 41.3125 12.6875 C 40.664063 12.054688 39.75 11.683594 38.71875 11.53125 L 38.3125 10.59375 C 38.152344 10.234375 37.796875 10.003906 37.40625 10 C 36.023438 10 34.550781 10.136719 33.1875 10.5625 C 32.832031 9.773438 32.363281 9.023438 31.71875 8.40625 C 30.863281 7.582031 29.660156 7.089844 28.28125 6.9375 L 27.71875 5.59375 C 27.558594 5.234375 27.203125 5.003906 26.8125 5 Z M 26.15625 7.0625 L 26.6875 8.21875 C 26.847656 8.578125 27.203125 8.808594 27.59375 8.8125 C 28.835938 8.8125 29.679688 9.207031 30.34375 9.84375 C 31.007813 10.480469 31.480469 11.386719 31.75 12.40625 C 32.019531 13.425781 32.09375 14.539063 32 15.46875 C 31.90625 16.398438 31.589844 17.148438 31.40625 17.375 C 31.214844 17.617188 31.148438 17.933594 31.21875 18.230469 C 31.292969 18.53125 31.5 18.78125 31.78125 18.90625 C 31.765625 18.898438 31.78125 18.898438 31.8125 18.96875 C 31.867188 19.097656 31.925781 19.386719 31.90625 19.75 C 31.902344 19.78125 31.910156 19.78125 31.90625 19.8125 C 31.769531 20.640625 31.535156 21.132813 31.375 21.34375 C 31.292969 21.453125 31.234375 21.488281 31.21875 21.5 C 30.746094 21.539063 30.371094 21.90625 30.3125 22.375 C 30.230469 23.121094 29.941406 24.09375 29.59375 24.84375 C 29.421875 25.21875 29.214844 25.535156 29.0625 25.75 C 28.945313 25.910156 28.828125 26 28.84375 26 C 28.507813 26.175781 28.304688 26.527344 28.3125 26.90625 C 28.3125 28.207031 28.304688 29.25 28.40625 30.78125 C 28.414063 30.878906 28.433594 30.972656 28.46875 31.0625 C 29.003906 32.46875 30.210938 33.316406 31.53125 33.96875 C 32.851563 34.621094 34.34375 35.109375 35.75 35.71875 C 37.15625 36.328125 38.464844 37.0625 39.40625 38.03125 C 40.136719 38.78125 40.582031 39.773438 40.84375 41 L 9.15625 41 C 9.417969 39.773438 9.863281 38.78125 10.59375 38.03125 C 11.535156 37.0625 12.84375 36.328125 14.25 35.71875 C 15.65625 35.109375 17.148438 34.621094 18.46875 33.96875 C 19.789063 33.316406 20.996094 32.46875 21.53125 31.0625 C 21.566406 30.972656 21.585938 30.878906 21.59375 30.78125 C 21.695313 29.34375 21.6875 28.207031 21.6875 26.90625 C 21.695313 26.527344 21.492188 26.175781 21.15625 26 C 21.15625 26 21.148438 25.988281 21.125 25.96875 C 21.117188 25.964844 21.105469 25.972656 21.09375 25.96875 C 21.046875 25.929688 20.980469 25.847656 20.90625 25.75 C 20.746094 25.539063 20.527344 25.210938 20.34375 24.84375 C 19.976563 24.113281 19.675781 23.1875 19.59375 22.40625 C 19.546875 21.96875 19.214844 21.613281 18.78125 21.53125 C 18.683594 21.511719 18.171875 21.535156 18 19.8125 C 17.929688 19.042969 18.292969 18.816406 18.25 18.84375 C 18.667969 18.578125 18.828125 18.046875 18.625 17.59375 C 17.984375 16.121094 17.78125 14.601563 18 13.1875 C 18.226563 12.933594 18.3125 12.578125 18.21875 12.25 C 18.40625 11.628906 18.671875 11.046875 19.03125 10.5 C 20.277344 8.613281 22.621094 7.230469 26.15625 7.0625 Z M 36.78125 12.09375 L 37.09375 12.78125 C 37.242188 13.152344 37.601563 13.398438 38 13.40625 C 38.890625 13.40625 39.445313 13.675781 39.90625 14.125 C 40.367188 14.574219 40.707031 15.242188 40.90625 16 C 41.105469 16.757813 41.160156 17.582031 41.09375 18.28125 C 41.027344 18.980469 40.789063 19.550781 40.6875 19.6875 C 40.511719 19.914063 40.445313 20.203125 40.5 20.484375 C 40.550781 20.765625 40.722656 21.011719 40.96875 21.15625 C 41.003906 21.246094 41.03125 21.441406 41 21.6875 C 40.914063 22.375 40.761719 22.710938 40.6875 22.8125 C 40.21875 22.871094 39.851563 23.246094 39.8125 23.71875 C 39.777344 24.234375 39.539063 24.953125 39.28125 25.5 C 39.152344 25.773438 39.019531 25.992188 38.90625 26.15625 C 38.820313 26.277344 38.742188 26.371094 38.75 26.375 C 38.480469 26.558594 38.316406 26.863281 38.3125 27.1875 C 38.3125 28.289063 38.300781 29.136719 38.40625 30.28125 C 38.417969 30.367188 38.4375 30.449219 38.46875 30.53125 C 38.894531 31.707031 39.855469 32.441406 40.875 32.96875 C 41.894531 33.496094 43.042969 33.871094 44.09375 34.34375 C 45.144531 34.816406 46.097656 35.375 46.78125 36.09375 C 47.257813 36.59375 47.574219 37.226563 47.78125 38 L 42 38 C 41.96875 38 41.9375 38 41.90625 38 C 41.59375 37.488281 41.242188 37.035156 40.84375 36.625 C 39.609375 35.355469 38.070313 34.558594 36.5625 33.90625 C 35.054688 33.253906 33.570313 32.75 32.4375 32.1875 C 31.34375 31.644531 30.691406 31.066406 30.40625 30.40625 C 30.332031 29.207031 30.3125 28.308594 30.3125 27.25 C 30.417969 27.128906 30.589844 27.039063 30.6875 26.90625 C 30.941406 26.550781 31.191406 26.152344 31.40625 25.6875 C 31.78125 24.875 32.003906 23.929688 32.15625 23 C 32.429688 22.835938 32.757813 22.84375 32.96875 22.5625 C 33.40625 21.980469 33.707031 21.175781 33.875 20.0625 C 33.886719 20.042969 33.898438 20.019531 33.90625 20 C 33.96875 19.3125 33.871094 18.699219 33.65625 18.1875 C 33.601563 18.058594 33.417969 18.027344 33.34375 17.90625 C 33.667969 17.25 33.882813 16.511719 33.96875 15.65625 C 34.070313 14.65625 34.035156 13.566406 33.8125 12.46875 C 34.710938 12.222656 35.765625 12.132813 36.78125 12.09375 Z M 14.84375 12.125 L 15.21875 12.84375 C 15.359375 13.144531 15.640625 13.355469 15.96875 13.40625 C 15.835938 14.859375 16.0625 16.367188 16.59375 17.8125 C 16.214844 18.332031 15.910156 19.027344 16 20 C 16.175781 21.746094 16.957031 22.574219 17.71875 23.03125 C 17.878906 23.988281 18.167969 24.957031 18.5625 25.75 C 18.792969 26.210938 19.046875 26.621094 19.3125 26.96875 C 19.410156 27.097656 19.582031 27.167969 19.6875 27.28125 C 19.6875 28.339844 19.667969 29.289063 19.59375 30.40625 C 19.308594 31.066406 18.65625 31.644531 17.5625 32.1875 C 16.429688 32.75 14.945313 33.253906 13.4375 33.90625 C 11.929688 34.558594 10.390625 35.355469 9.15625 36.625 C 8.734375 37.058594 8.355469 37.542969 8.03125 38.09375 C 8.019531 38.09375 8.011719 38.09375 8 38.09375 L 2.25 38.09375 C 2.460938 37.320313 2.769531 36.6875 3.25 36.1875 C 3.941406 35.46875 4.90625 34.910156 5.96875 34.4375 C 7.03125 33.964844 8.160156 33.589844 9.1875 33.0625 C 10.214844 32.535156 11.195313 31.835938 11.625 30.65625 C 11.660156 30.566406 11.679688 30.472656 11.6875 30.375 C 11.789063 29.136719 11.8125 28.3125 11.8125 27.3125 C 11.820313 26.957031 11.644531 26.625 11.34375 26.4375 C 11.3125 26.402344 11.246094 26.332031 11.1875 26.25 C 11.070313 26.082031 10.917969 25.847656 10.78125 25.5625 C 10.507813 24.996094 10.269531 24.261719 10.1875 23.65625 C 10.121094 23.210938 9.761719 22.863281 9.3125 22.8125 C 9.238281 22.710938 9.085938 22.375 9 21.6875 C 8.96875 21.402344 9.023438 21.238281 9.0625 21.15625 C 9.46875 20.878906 9.613281 20.351563 9.40625 19.90625 C 8.578125 18.03125 8.722656 16.078125 9.6875 14.59375 C 10.574219 13.226563 12.296875 12.28125 14.84375 12.125 Z"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-title">Users</span>
                </a>
                <!--end:Menu link-->
              </div>
              <!--end:Menu item-->


          @endcan

            @endcanany




          <!--begin:Menu item-->
          <div class="menu-item pt-5">
            <!--begin:Menu content-->
            <div class="menu-content">
              <span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
            </div>
            <!--end:Menu content-->
          </div>
          <!--end:Menu item-->

          @canany(['Read-Role' ,  'Read-Permission' ])

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                    <span class="menu-icon">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs029.svg-->
                        <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.5 11C8.98528 11 11 8.98528 11 6.5C11 4.01472 8.98528 2 6.5 2C4.01472 2 2 4.01472 2 6.5C2 8.98528 4.01472 11 6.5 11Z" fill="currentColor" />
                            <path opacity="0.3" d="M13 6.5C13 4 15 2 17.5 2C20 2 22 4 22 6.5C22 9 20 11 17.5 11C15 11 13 9 13 6.5ZM6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22ZM17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22Z" fill="currentColor" />
                        </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">User Management</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">

                  @can('Read-Role')

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{route('roles.index')}}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="100" height="100"
                                viewBox="0 0 64 64">
                                <path fill='currentColor' d="M 12 2 C 10.3 2 9 3.3 9 5 L 9 59 C 9 60.7 10.3 62 12 62 L 42.400391 62 L 51 53.400391 L 51 47 L 49 47 L 49 52 L 44 52 C 42.3 52 41 53.3 41 55 L 41 60 L 12 60 C 11.4 60 11 59.6 11 59 L 11 5 C 11 4.4 11.4 4 12 4 L 48 4 C 48.6 4 49 4.4 49 5 L 49 17 L 41 17 C 39.3 17 38 18.3 38 20 L 38 38 C 38 39.7 39.3 41 41 41 L 46.599609 41 L 50 44.400391 L 53.400391 41 L 59 41 C 60.7 41 62 39.7 62 38 L 62 20 C 62 18.3 60.7 17 59 17 L 51 17 L 51 5 C 51 3.3 49.7 2 48 2 L 12 2 z M 24 7 L 24 9 L 36 9 L 36 7 L 24 7 z M 14 12 L 14 14 L 17 14 L 17 12 L 14 12 z M 19 12 L 19 14 L 46 14 L 46 12 L 19 12 z M 14 18 L 14 20 L 17 20 L 17 18 L 14 18 z M 19 18 L 19 20 L 35 20 L 35 18 L 19 18 z M 41 19 L 59 19 C 59.6 19 60 19.4 60 20 L 60 38 C 60 38.6 59.6 39 59 39 L 52.599609 39 L 50 41.599609 L 47.400391 39 L 41 39 C 40.4 39 40 38.6 40 38 L 40 20 C 40 19.4 40.4 19 41 19 z M 50 21 C 47.8 21 46 22.8 46 25 L 48 25 C 48 23.9 48.9 23 50 23 C 51.1 23 52 23.9 52 25 L 52 27 L 47 27 C 45.3 27 44 28.3 44 30 L 44 34 C 44 35.7 45.3 37 47 37 L 53 37 C 54.7 37 56 35.7 56 34 L 56 30 C 56 28.7 55.2 27.599219 54 27.199219 L 54 25 C 54 22.8 52.2 21 50 21 z M 14 24 L 14 26 L 17 26 L 17 24 L 14 24 z M 19 24 L 19 26 L 35 26 L 35 24 L 19 24 z M 47 29 L 53 29 C 53.6 29 54 29.4 54 30 L 54 34 C 54 34.6 53.6 35 53 35 L 47 35 C 46.4 35 46 34.6 46 34 L 46 30 C 46 29.4 46.4 29 47 29 z M 14 30 L 14 32 L 17 32 L 17 30 L 14 30 z M 19 30 L 19 32 L 35 32 L 35 30 L 19 30 z M 14 36 L 14 38 L 17 38 L 17 36 L 14 36 z M 19 36 L 19 38 L 35 38 L 35 36 L 19 36 z M 14 42 L 14 44 L 17 44 L 17 42 L 14 42 z M 19 42 L 19 44 L 35 44 L 35 42 L 19 42 z M 14 48 L 14 50 L 17 50 L 17 48 L 14 48 z M 19 48 L 19 50 L 46 50 L 46 48 L 19 48 z M 14 54 L 14 56 L 17 56 L 17 54 L 14 54 z M 19 54 L 19 56 L 38 56 L 38 54 L 19 54 z M 44 54 L 47.599609 54 L 43 58.599609 L 43 55 C 43 54.4 43.4 54 44 54 z"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Roles</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                    @endcan



                   @can('Read-Permission')
                     <!--begin:Menu item-->
                     <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{route('permissions.index')}}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="100" height="100"
                                viewBox="0 0 100 100">
                                <path fill='currentColor' d="M61.253,36.496H51.126v-2.251h10.128V36.496z M64.63,29.744H51.126v2.251H64.63V29.744z M55.627,25.242h-4.501v2.251h4.501	V25.242z M64.63,25.242h-6.752v2.251h6.752V25.242z M64.63,43.248H46.624v2.251H64.63V43.248z M53.376,50h4.501v-2.251h-4.501V50z M51.126,47.749H39.872V50h11.254V47.749z M60.128,50h4.502v-2.251h-4.502V50z M57.877,52.251H28.618v2.251h29.259V52.251z M86.011,70.256c0,8.687-7.068,15.755-15.755,15.755c-2.962,0-5.735-0.823-8.105-2.251H21.866V44.266	c-4.416-2.68-7.461-7.396-7.834-12.835h-0.043v-1.125v-1.125h0.043c0.556-8.102,7.048-14.594,15.149-15.149V13.99h1.082	c0.014,0,0.029-0.001,0.043-0.001c0.015,0,0.029,0.001,0.043,0.001h1.082v0.042c3.906,0.268,7.437,1.915,10.11,4.458h29.84v36.056	C79.545,55.126,86.011,61.948,86.011,70.256z M83.76,70.256c0-7.068-5.458-12.879-12.379-13.454	c-0.371-0.031-0.746-0.051-1.125-0.051c-0.379,0-0.754,0.02-1.125,0.051c-6.921,0.574-12.379,6.386-12.379,13.454	c0,4.693,2.407,8.832,6.05,11.254c0.651,0.432,1.341,0.809,2.064,1.125c1.652,0.722,3.474,1.125,5.389,1.125	c0.379,0,0.754-0.02,1.125-0.051C78.303,83.136,83.76,77.324,83.76,70.256z M59.245,81.51c-2.924-2.862-4.744-6.849-4.744-11.254	c0-8.308,6.466-15.131,14.629-15.71V20.741H43.514c1.746,2.405,2.852,5.301,3.067,8.44h0.043v1.125v1.125h-0.043	c-0.556,8.101-7.048,14.594-15.149,15.149v0.042H30.35c-0.014,0-0.029,0.001-0.043,0.001c-0.015,0-0.029-0.001-0.043-0.001h-1.082	v-0.042c-1.781-0.122-3.484-0.53-5.064-1.18V81.51H59.245z M18.527,37.981c0.696-0.31,1.469-0.586,2.3-0.83	c-0.504-1.752-0.818-3.678-0.903-5.719h-3.634C16.48,33.834,17.276,36.068,18.527,37.981z M16.289,29.181h3.634	c0.085-2.041,0.399-3.967,0.903-5.719c-0.831-0.244-1.604-0.52-2.3-0.83C17.276,24.545,16.48,26.778,16.289,29.181z M37.279,18.097	c0.091,0.128,0.18,0.26,0.269,0.393c0.238,0.358,0.465,0.733,0.679,1.125c0.197,0.361,0.385,0.736,0.562,1.125	c0.088,0.194,0.174,0.39,0.256,0.59c0.574-0.164,1.113-0.344,1.609-0.541c-0.015-0.017-0.031-0.033-0.047-0.049	c-0.37-0.397-0.762-0.773-1.174-1.125c-0.477-0.407-0.981-0.784-1.509-1.125C37.713,18.353,37.498,18.222,37.279,18.097z M25.074,19.615c-0.241,0.353-0.47,0.729-0.686,1.125c-0.093,0.17-0.183,0.343-0.271,0.521c-0.097,0.195-0.191,0.395-0.282,0.599	c0.093,0.018,0.188,0.034,0.282,0.051c1.57,0.277,3.287,0.448,5.064,0.499v-1.67v-1.125V18.49v-2.107	c-1.168,0.293-2.264,1.03-3.229,2.107C25.645,18.832,25.351,19.208,25.074,19.615z M34.661,18.49	c-0.965-1.076-2.061-1.814-3.229-2.107v2.107v1.125v1.125v1.67c1.885-0.054,3.702-0.244,5.346-0.55	c-0.173-0.389-0.358-0.762-0.553-1.12c-0.216-0.397-0.445-0.773-0.686-1.125C35.261,19.208,34.968,18.832,34.661,18.49z M42.086,22.632c-0.696,0.31-1.468,0.586-2.299,0.83c0.504,1.752,0.818,3.678,0.903,5.719h3.634	C44.133,26.778,43.336,24.545,42.086,22.632z M44.324,31.432H40.69c-0.085,2.04-0.399,3.967-0.904,5.719	c0.831,0.244,1.604,0.52,2.3,0.831C43.336,36.068,44.133,33.835,44.324,31.432z M23.047,36.608c0.35-0.07,0.706-0.136,1.07-0.195	c1.583-0.259,3.291-0.416,5.064-0.463v-4.518h-5.064h-1.125h-0.814c0.086,1.768,0.37,3.456,0.814,4.994	C23.01,36.487,23.029,36.547,23.047,36.608z M22.177,29.181h0.814h1.125h5.064v-4.518c-1.773-0.047-3.48-0.205-5.064-0.464	c-0.363-0.059-0.719-0.125-1.07-0.195c-0.018,0.061-0.037,0.122-0.056,0.183C22.547,25.726,22.263,27.413,22.177,29.181z M38.435,31.432h-7.004v4.518c2.181,0.058,4.26,0.285,6.134,0.659C38.042,35.022,38.346,33.27,38.435,31.432z M31.432,44.229	c2.15-0.537,4.061-2.584,5.346-5.476c-1.644-0.306-3.461-0.496-5.346-0.55V44.229z M37.279,42.516	c1.259-0.722,2.398-1.631,3.376-2.693c-0.497-0.197-1.036-0.377-1.609-0.541C38.549,40.482,37.955,41.569,37.279,42.516z M37.566,24.004c-1.874,0.374-3.953,0.601-6.134,0.659v4.518h7.004C38.346,27.342,38.042,25.591,37.566,24.004z M23.835,38.752	c0.091,0.204,0.185,0.404,0.282,0.599c1.275,2.575,3.066,4.378,5.064,4.877v-6.026c-1.778,0.051-3.495,0.222-5.064,0.499	C24.023,38.718,23.928,38.734,23.835,38.752z M19.958,20.79c0.497,0.196,1.036,0.377,1.61,0.541	c0.096-0.233,0.195-0.461,0.299-0.685c0.359-0.775,0.76-1.495,1.198-2.156c0.088-0.133,0.178-0.266,0.27-0.393	c-0.219,0.125-0.435,0.256-0.646,0.393c-0.281,0.181-0.556,0.37-0.822,0.57C21.178,19.578,20.54,20.158,19.958,20.79z M19.958,39.822c0.583,0.632,1.221,1.212,1.909,1.73c0.362,0.272,0.738,0.527,1.125,0.765c0.113,0.069,0.228,0.133,0.343,0.199	c-0.117-0.163-0.231-0.331-0.343-0.503c-0.41-0.63-0.787-1.314-1.125-2.047c-0.103-0.224-0.203-0.453-0.299-0.685	C20.994,39.446,20.454,39.626,19.958,39.822z M81.783,68.006l-10.401,10.4l-1.125,1.125l-0.097,0.097	c-0.294,0.294-0.652,0.481-1.029,0.578c-0.185,0.047-0.373,0.08-0.563,0.08c-0.576,0-1.153-0.22-1.591-0.658l-8.247-8.247	l4.774-4.774l5.064,5.064l0.563-0.563l1.125-1.125l1.125-1.125l5.627-5.626L81.783,68.006z M61.913,71.382l6.657,6.657l0.562-0.562	l1.125-1.125l1.125-1.126l7.218-7.219l-1.591-1.591l-5.627,5.627l-1.125,1.125l-1.125,1.125l-0.563,0.563l-5.064-5.064	L61.913,71.382z M48.874,57.877h4.502v2.251h-4.502v2.251h3.376v2.251h-3.376v4.501h2.251v2.251h-2.251v4.501h3.376v2.251h-3.376	h-2.251h-9.002H35.37h-6.752v-6.752v-2.251V64.63v-2.251v-4.501h6.752h2.251h9.002H48.874z M30.869,62.379h4.501v-2.251h-4.501	V62.379z M30.869,69.131h4.501V64.63h-4.501V69.131z M35.37,75.883v-4.501h-4.501v4.501H35.37z M46.624,71.382h-9.002v4.501h9.002	V71.382z M46.624,64.63h-9.002v4.501h9.002V64.63z M46.624,60.128h-9.002v2.251h9.002V60.128z"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Permissions</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                   @endcan



                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
          @endcanany


          {{-- <!--begin:Menu item-->
          <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <!--begin:Menu link-->
            <span class="menu-link">
              <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs029.svg-->
                <span class="svg-icon svg-icon-2">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.5 11C8.98528 11 11 8.98528 11 6.5C11 4.01472 8.98528 2 6.5 2C4.01472 2 2 4.01472 2 6.5C2 8.98528 4.01472 11 6.5 11Z" fill="currentColor" />
                    <path opacity="0.3" d="M13 6.5C13 4 15 2 17.5 2C20 2 22 4 22 6.5C22 9 20 11 17.5 11C15 11 13 9 13 6.5ZM6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22ZM17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22Z" fill="currentColor" />
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </span>
              <span class="menu-title">User Management</span>
              <span class="menu-arrow"></span>
            </span>
            <!--end:Menu link-->
            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion">

              <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="{{route('roles.index')}}">
                <span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="100" height="100"
                        viewBox="0 0 64 64">
                        <path fill='currentColor' d="M 12 2 C 10.3 2 9 3.3 9 5 L 9 59 C 9 60.7 10.3 62 12 62 L 42.400391 62 L 51 53.400391 L 51 47 L 49 47 L 49 52 L 44 52 C 42.3 52 41 53.3 41 55 L 41 60 L 12 60 C 11.4 60 11 59.6 11 59 L 11 5 C 11 4.4 11.4 4 12 4 L 48 4 C 48.6 4 49 4.4 49 5 L 49 17 L 41 17 C 39.3 17 38 18.3 38 20 L 38 38 C 38 39.7 39.3 41 41 41 L 46.599609 41 L 50 44.400391 L 53.400391 41 L 59 41 C 60.7 41 62 39.7 62 38 L 62 20 C 62 18.3 60.7 17 59 17 L 51 17 L 51 5 C 51 3.3 49.7 2 48 2 L 12 2 z M 24 7 L 24 9 L 36 9 L 36 7 L 24 7 z M 14 12 L 14 14 L 17 14 L 17 12 L 14 12 z M 19 12 L 19 14 L 46 14 L 46 12 L 19 12 z M 14 18 L 14 20 L 17 20 L 17 18 L 14 18 z M 19 18 L 19 20 L 35 20 L 35 18 L 19 18 z M 41 19 L 59 19 C 59.6 19 60 19.4 60 20 L 60 38 C 60 38.6 59.6 39 59 39 L 52.599609 39 L 50 41.599609 L 47.400391 39 L 41 39 C 40.4 39 40 38.6 40 38 L 40 20 C 40 19.4 40.4 19 41 19 z M 50 21 C 47.8 21 46 22.8 46 25 L 48 25 C 48 23.9 48.9 23 50 23 C 51.1 23 52 23.9 52 25 L 52 27 L 47 27 C 45.3 27 44 28.3 44 30 L 44 34 C 44 35.7 45.3 37 47 37 L 53 37 C 54.7 37 56 35.7 56 34 L 56 30 C 56 28.7 55.2 27.599219 54 27.199219 L 54 25 C 54 22.8 52.2 21 50 21 z M 14 24 L 14 26 L 17 26 L 17 24 L 14 24 z M 19 24 L 19 26 L 35 26 L 35 24 L 19 24 z M 47 29 L 53 29 C 53.6 29 54 29.4 54 30 L 54 34 C 54 34.6 53.6 35 53 35 L 47 35 C 46.4 35 46 34.6 46 34 L 46 30 C 46 29.4 46.4 29 47 29 z M 14 30 L 14 32 L 17 32 L 17 30 L 14 30 z M 19 30 L 19 32 L 35 32 L 35 30 L 19 30 z M 14 36 L 14 38 L 17 38 L 17 36 L 14 36 z M 19 36 L 19 38 L 35 38 L 35 36 L 19 36 z M 14 42 L 14 44 L 17 44 L 17 42 L 14 42 z M 19 42 L 19 44 L 35 44 L 35 42 L 19 42 z M 14 48 L 14 50 L 17 50 L 17 48 L 14 48 z M 19 48 L 19 50 L 46 50 L 46 48 L 19 48 z M 14 54 L 14 56 L 17 56 L 17 54 L 14 54 z M 19 54 L 19 56 L 38 56 L 38 54 L 19 54 z M 44 54 L 47.599609 54 L 43 58.599609 L 43 55 C 43 54.4 43.4 54 44 54 z"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span>
                <span class="menu-title">Roles</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->


             <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="{{route('permissions.index')}}">
                <span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="100" height="100"
                        viewBox="0 0 100 100">
                        <path fill='currentColor' d="M61.253,36.496H51.126v-2.251h10.128V36.496z M64.63,29.744H51.126v2.251H64.63V29.744z M55.627,25.242h-4.501v2.251h4.501	V25.242z M64.63,25.242h-6.752v2.251h6.752V25.242z M64.63,43.248H46.624v2.251H64.63V43.248z M53.376,50h4.501v-2.251h-4.501V50z M51.126,47.749H39.872V50h11.254V47.749z M60.128,50h4.502v-2.251h-4.502V50z M57.877,52.251H28.618v2.251h29.259V52.251z M86.011,70.256c0,8.687-7.068,15.755-15.755,15.755c-2.962,0-5.735-0.823-8.105-2.251H21.866V44.266	c-4.416-2.68-7.461-7.396-7.834-12.835h-0.043v-1.125v-1.125h0.043c0.556-8.102,7.048-14.594,15.149-15.149V13.99h1.082	c0.014,0,0.029-0.001,0.043-0.001c0.015,0,0.029,0.001,0.043,0.001h1.082v0.042c3.906,0.268,7.437,1.915,10.11,4.458h29.84v36.056	C79.545,55.126,86.011,61.948,86.011,70.256z M83.76,70.256c0-7.068-5.458-12.879-12.379-13.454	c-0.371-0.031-0.746-0.051-1.125-0.051c-0.379,0-0.754,0.02-1.125,0.051c-6.921,0.574-12.379,6.386-12.379,13.454	c0,4.693,2.407,8.832,6.05,11.254c0.651,0.432,1.341,0.809,2.064,1.125c1.652,0.722,3.474,1.125,5.389,1.125	c0.379,0,0.754-0.02,1.125-0.051C78.303,83.136,83.76,77.324,83.76,70.256z M59.245,81.51c-2.924-2.862-4.744-6.849-4.744-11.254	c0-8.308,6.466-15.131,14.629-15.71V20.741H43.514c1.746,2.405,2.852,5.301,3.067,8.44h0.043v1.125v1.125h-0.043	c-0.556,8.101-7.048,14.594-15.149,15.149v0.042H30.35c-0.014,0-0.029,0.001-0.043,0.001c-0.015,0-0.029-0.001-0.043-0.001h-1.082	v-0.042c-1.781-0.122-3.484-0.53-5.064-1.18V81.51H59.245z M18.527,37.981c0.696-0.31,1.469-0.586,2.3-0.83	c-0.504-1.752-0.818-3.678-0.903-5.719h-3.634C16.48,33.834,17.276,36.068,18.527,37.981z M16.289,29.181h3.634	c0.085-2.041,0.399-3.967,0.903-5.719c-0.831-0.244-1.604-0.52-2.3-0.83C17.276,24.545,16.48,26.778,16.289,29.181z M37.279,18.097	c0.091,0.128,0.18,0.26,0.269,0.393c0.238,0.358,0.465,0.733,0.679,1.125c0.197,0.361,0.385,0.736,0.562,1.125	c0.088,0.194,0.174,0.39,0.256,0.59c0.574-0.164,1.113-0.344,1.609-0.541c-0.015-0.017-0.031-0.033-0.047-0.049	c-0.37-0.397-0.762-0.773-1.174-1.125c-0.477-0.407-0.981-0.784-1.509-1.125C37.713,18.353,37.498,18.222,37.279,18.097z M25.074,19.615c-0.241,0.353-0.47,0.729-0.686,1.125c-0.093,0.17-0.183,0.343-0.271,0.521c-0.097,0.195-0.191,0.395-0.282,0.599	c0.093,0.018,0.188,0.034,0.282,0.051c1.57,0.277,3.287,0.448,5.064,0.499v-1.67v-1.125V18.49v-2.107	c-1.168,0.293-2.264,1.03-3.229,2.107C25.645,18.832,25.351,19.208,25.074,19.615z M34.661,18.49	c-0.965-1.076-2.061-1.814-3.229-2.107v2.107v1.125v1.125v1.67c1.885-0.054,3.702-0.244,5.346-0.55	c-0.173-0.389-0.358-0.762-0.553-1.12c-0.216-0.397-0.445-0.773-0.686-1.125C35.261,19.208,34.968,18.832,34.661,18.49z M42.086,22.632c-0.696,0.31-1.468,0.586-2.299,0.83c0.504,1.752,0.818,3.678,0.903,5.719h3.634	C44.133,26.778,43.336,24.545,42.086,22.632z M44.324,31.432H40.69c-0.085,2.04-0.399,3.967-0.904,5.719	c0.831,0.244,1.604,0.52,2.3,0.831C43.336,36.068,44.133,33.835,44.324,31.432z M23.047,36.608c0.35-0.07,0.706-0.136,1.07-0.195	c1.583-0.259,3.291-0.416,5.064-0.463v-4.518h-5.064h-1.125h-0.814c0.086,1.768,0.37,3.456,0.814,4.994	C23.01,36.487,23.029,36.547,23.047,36.608z M22.177,29.181h0.814h1.125h5.064v-4.518c-1.773-0.047-3.48-0.205-5.064-0.464	c-0.363-0.059-0.719-0.125-1.07-0.195c-0.018,0.061-0.037,0.122-0.056,0.183C22.547,25.726,22.263,27.413,22.177,29.181z M38.435,31.432h-7.004v4.518c2.181,0.058,4.26,0.285,6.134,0.659C38.042,35.022,38.346,33.27,38.435,31.432z M31.432,44.229	c2.15-0.537,4.061-2.584,5.346-5.476c-1.644-0.306-3.461-0.496-5.346-0.55V44.229z M37.279,42.516	c1.259-0.722,2.398-1.631,3.376-2.693c-0.497-0.197-1.036-0.377-1.609-0.541C38.549,40.482,37.955,41.569,37.279,42.516z M37.566,24.004c-1.874,0.374-3.953,0.601-6.134,0.659v4.518h7.004C38.346,27.342,38.042,25.591,37.566,24.004z M23.835,38.752	c0.091,0.204,0.185,0.404,0.282,0.599c1.275,2.575,3.066,4.378,5.064,4.877v-6.026c-1.778,0.051-3.495,0.222-5.064,0.499	C24.023,38.718,23.928,38.734,23.835,38.752z M19.958,20.79c0.497,0.196,1.036,0.377,1.61,0.541	c0.096-0.233,0.195-0.461,0.299-0.685c0.359-0.775,0.76-1.495,1.198-2.156c0.088-0.133,0.178-0.266,0.27-0.393	c-0.219,0.125-0.435,0.256-0.646,0.393c-0.281,0.181-0.556,0.37-0.822,0.57C21.178,19.578,20.54,20.158,19.958,20.79z M19.958,39.822c0.583,0.632,1.221,1.212,1.909,1.73c0.362,0.272,0.738,0.527,1.125,0.765c0.113,0.069,0.228,0.133,0.343,0.199	c-0.117-0.163-0.231-0.331-0.343-0.503c-0.41-0.63-0.787-1.314-1.125-2.047c-0.103-0.224-0.203-0.453-0.299-0.685	C20.994,39.446,20.454,39.626,19.958,39.822z M81.783,68.006l-10.401,10.4l-1.125,1.125l-0.097,0.097	c-0.294,0.294-0.652,0.481-1.029,0.578c-0.185,0.047-0.373,0.08-0.563,0.08c-0.576,0-1.153-0.22-1.591-0.658l-8.247-8.247	l4.774-4.774l5.064,5.064l0.563-0.563l1.125-1.125l1.125-1.125l5.627-5.626L81.783,68.006z M61.913,71.382l6.657,6.657l0.562-0.562	l1.125-1.125l1.125-1.126l7.218-7.219l-1.591-1.591l-5.627,5.627l-1.125,1.125l-1.125,1.125l-0.563,0.563l-5.064-5.064	L61.913,71.382z M48.874,57.877h4.502v2.251h-4.502v2.251h3.376v2.251h-3.376v4.501h2.251v2.251h-2.251v4.501h3.376v2.251h-3.376	h-2.251h-9.002H35.37h-6.752v-6.752v-2.251V64.63v-2.251v-4.501h6.752h2.251h9.002H48.874z M30.869,62.379h4.501v-2.251h-4.501	V62.379z M30.869,69.131h4.501V64.63h-4.501V69.131z M35.37,75.883v-4.501h-4.501v4.501H35.37z M46.624,71.382h-9.002v4.501h9.002	V71.382z M46.624,64.63h-9.002v4.501h9.002V64.63z M46.624,60.128h-9.002v2.251h9.002V60.128z"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span>
                <span class="menu-title">Permissions</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->



            </div>
            <!--end:Menu sub-->
          </div>
          <!--end:Menu item--> --}}


          <!--begin:Menu item-->
          <div class="menu-item pt-5">
            <!--begin:Menu content-->
            <div class="menu-content">
              <span class="menu-heading fw-bold text-uppercase fs-7">Other</span>
            </div>
            <!--end:Menu content-->
          </div>
          <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="../demo8/layout-builder.html">
                <span class="menu-icon">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
                    <span class="svg-icon svg-icon-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M11.8 5.2L17.7 8.6V15.4L11.8 18.8L5.90001 15.4V8.6L11.8 5.2ZM11.8 2C11.5 2 11.2 2.1 11 2.2L3.8 6.4C3.3 6.7 3 7.3 3 7.9V16.2C3 16.8 3.3 17.4 3.8 17.7L11 21.9C11.3 22 11.5 22.1 11.8 22.1C12.1 22.1 12.4 22 12.6 21.9L19.8 17.7C20.3 17.4 20.6 16.8 20.6 16.2V7.9C20.6 7.3 20.3 6.7 19.8 6.4L12.6 2.2C12.4 2.1 12.1 2 11.8 2Z" fill="currentColor" />
                        <path d="M11.8 8.69995L8.90001 10.3V13.7L11.8 15.3L14.7 13.7V10.3L11.8 8.69995Z" fill="currentColor" />
                    </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span>
                <span class="menu-title">templeate</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->


        </div>
        <!--end::Menu-->
      </div>
      <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->

  </div>
  <!--end::Aside-->
