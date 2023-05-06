@extends('layouts.main-layout')

@section('css-ext')
   <!--begin::Vendor Stylesheets(used for this page only)-->
   <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css">
   <!--end::Vendor Stylesheets-->


@endsection

@section('breadcrumb')

<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="{{route('dashboard.home')}}" class="text-muted text-hover-primary">
            Home </a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->

    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        Human Resource </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->

    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        Admins </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->

    <!--begin::Item-->
    <li class="breadcrumb-item text-dark">
        View Admin </li>
    <!--end::Item-->

</ul>

@endsection

@section('content')

<div class="content d-flex flex-column flex-column-fluid " id="kt_content">

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
      <!--begin::Container-->
      <div id="kt_content_container" class=" container-xxl ">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row">
          <!--begin::Sidebar-->
          <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
              <!--begin::Card body-->
              <div class="card-body">
                <!--begin::Summary-->
                <!--begin::Admin Info-->
                <div class="d-flex flex-center flex-column py-5">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-100px symbol-circle mb-7">
                    <img src="{{$admin->image_url}}" alt="image">
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Name-->
                  <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3"> {{$admin->name}} </a>
                  <!--end::Name-->
                  <!--begin::Position-->
                  <div class="mb-9">
                    <!--begin::Badge-->
                    <div class="badge-light-primary d-inline"> {!! html_entity_decode($admin->role->role_badge ?? '' ) !!}</div>
                    <!--begin::Badge-->
                  </div>
                  <!--end::Position-->

                </div>
                <!--end::Admin Info-->
                <!--end::Summary-->
                <!--begin::Details toggle-->
                <div class="d-flex flex-stack fs-4 py-3">
                  <div class="fw-bold rotate collapsible collapsed" data-bs-toggle="collapse" href="#kt_admin_view_details" role="button" aria-expanded="false" aria-controls="kt_admin_view_details"> Details <span class="ms-2 rotate-180">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                      <span class="svg-icon svg-icon-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                  </div>
                 @can('Update-Admin')
                 <span data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Edit customer details" data-kt-initialized="1">
                    <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details"> Edit </a>
                  </span>
                 @endcan
                </div>
                <!--end::Details toggle-->
                <div class="separator"></div>
                <!--begin::Details content-->
                <div id="kt_admin_view_details" class="collapse" style="">
                  <div class="pb-5 fs-6">
                    <!--begin::Details item-->
                    {{-- <div class="fw-bold mt-5">Account ID</div>
                    <div class="text-gray-600">ID-{{$admin->pin}}</div> --}}
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bold mt-5">Email</div>
                    <div class="text-gray-600">
                      <a href="#" class="text-gray-600 text-hover-primary">{{$admin->email}}</a>
                    </div>
                    <!--begin::Details item-->
                    <!--begin::Details item-->
                    <div class="fw-bold mt-5">Last Login</div>
                    <div class="text-gray-600">{{$admin->last_login_format}}</div>
                    <!--begin::Details item-->
                  </div>
                </div>
                <!--end::Details content-->
              </div>
              <!--end::Card body-->
            </div>
            <!--end::Card-->
          </div>
          <!--end::Sidebar-->
          <!--begin::Content-->
          <div class="flex-lg-row-fluid ms-lg-15">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8" role="tablist">
              <!--begin:::Tab item-->
              <li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_admin_view_overview_tab" aria-selected="true" role="tab">Overview</a>
              </li>
              <!--end:::Tab item-->
              @can('Update-Admin')
              <!--begin:::Tab item-->
              <li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_admin_view_overview_security" data-kt-initialized="1" aria-selected="false" role="tab" tabindex="-1">Security</a>
              </li>
              <!--end:::Tab item-->
              @endcan
              <!--begin:::Tab item-->
              <li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_admin_view_overview_events_and_logs_tab" aria-selected="false" tabindex="-1" role="tab">Events &amp; Logs</a>
              </li>
              <!--end:::Tab item-->
              <!--begin:::Tab item-->
              <li class="nav-item ms-auto">
                <!--begin::Action menu-->
                <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"> Actions
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                  <span class="svg-icon svg-icon-2 me-0">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6" data-kt-menu="true" style="">
                  <!--begin::Menu item-->
                  <div class="menu-item px-5">
                    <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase"> Template </div>
                  </div>

                  <!--begin::Menu separator-->
                  <div class="separator my-3"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-5">
                    <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase"> Account </div>
                  </div>
                  <!--end::Menu item-->

                  {{-- <!--begin::Menu item-->
                  <div class="menu-item px-5 my-1">
                    <a href="#" class="menu-link px-5"> Account Settings </a>
                  </div>
                  <!--end::Menu item--> --}}
                  @can('Delete-Admin')
                     <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        @if (!$admin->trashed())
                        <a class="menu-link text-danger px-5" onclick="performDelete({{ $admin->id }}, this)"> Delete admin </a>
                        @else
                        <a class="menu-link text-success px-5" onclick="performRestore({{ $admin->id }}, this)"> Restore admin </a>
                        @endif
                    </div>
                  <!--end::Menu item-->
                  @endcan
                </div>
                <!--end::Menu-->
                <!--end::Menu-->
              </li>
              <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <!--begin:::Tab content-->
            <div class="tab-content" id="myTabContent">
              <!--begin:::Tab pane-->
              <div class="tab-pane fade active show" id="kt_admin_view_overview_tab" role="tabpanel">
                <!--begin::Card-->
                <!--end::Card-->
              </div>
              <!--end:::Tab pane-->
              <!--begin:::Tab pane-->
              <div class="tab-pane fade" id="kt_admin_view_overview_security" role="tabpanel">
                <!--begin::Card-->
                <div class="card pt-4 mb-6 mb-xl-9">
                  <!--begin::Card header-->
                  <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                      <h2>Profile</h2>
                    </div>
                    <!--end::Card title-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0 pb-5">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                      <!--begin::Table-->
                      <table class="table align-middle table-row-dashed gy-5" id="kt_table_admins_login_session">
                        <!--begin::Table body-->
                        <tbody class="fs-6 fw-semibold text-gray-600">
                          <tr>
                            <td>Email</td>
                            <td>{{$admin->email}}</td>
                            <td class="text-end">
                              <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_email">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-3">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>Password</td>
                            <td>******</td>
                            <td class="text-end">
                              <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-3">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>Role</td>
                            @foreach ($admin->getRoleNames() as $role)
                            <td>{{ $role }}</td>
                            @endforeach

                            <td class="text-end">
                              <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-3">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                  </svg>
                                </span>
                                <!--end::Svg Icon-->
                              </button>
                            </td>
                          </tr>
                        </tbody>
                        <!--end::Table body-->
                      </table>
                      <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Card-->
              </div>
              <!--end:::Tab pane-->
              <!--begin:::Tab pane-->
              <div class="tab-pane fade" id="kt_admin_view_overview_events_and_logs_tab" role="tabpanel">
                <!--begin::Card-->
                <div class="card pt-4 mb-6 mb-xl-9">
                  <!--begin::Card header-->
                  <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                      <h2>Login Sessions</h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                      <!--begin::Filter-->
                      <button type="button" class="btn btn-sm btn-flex btn-light-primary" id="kt_modal_sign_out_sesions">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr077.svg-->
                        <span class="svg-icon svg-icon-3">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="4" y="11" width="12" height="2" rx="1" fill="currentColor"></rect>
                            <path d="M5.86875 11.6927L7.62435 10.2297C8.09457 9.83785 8.12683 9.12683 7.69401 8.69401C7.3043 8.3043 6.67836 8.28591 6.26643 8.65206L3.34084 11.2526C2.89332 11.6504 2.89332 12.3496 3.34084 12.7474L6.26643 15.3479C6.67836 15.7141 7.3043 15.6957 7.69401 15.306C8.12683 14.8732 8.09458 14.1621 7.62435 13.7703L5.86875 12.3073C5.67684 12.1474 5.67684 11.8526 5.86875 11.6927Z" fill="currentColor"></path>
                            <path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="currentColor"></path>
                          </svg>
                        </span>
                        <!--end::Svg Icon--> Sign out all sessions
                      </button>
                      <!--end::Filter-->
                    </div>
                    <!--end::Card toolbar-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0 pb-5">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                      <!--begin::Table-->
                      <table class="table align-middle table-row-dashed gy-5" id="kt_table_admins_login_session">
                        <!--begin::Table head-->
                        <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                          <!--begin::Table row-->
                          <tr class="text-start text-muted text-uppercase gs-0">
                            <th class="min-w-100px">Location</th>
                            <th>Device</th>
                            <th>IP Address</th>
                            <th class="min-w-125px">Time</th>
                            <th class="min-w-70px">Actions</th>
                          </tr>
                          <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fs-6 fw-semibold text-gray-600">
                          <tr>
                            <!--begin::Invoice--->
                            <td> Australia </td>
                            <!--end::Invoice--->
                            <!--begin::Status--->
                            <td> Chome - Windows </td>
                            <!--end::Status--->
                            <!--begin::Amount--->
                            <td> 207.44.14.241 </td>
                            <!--end::Amount--->
                            <!--begin::Date--->
                            <td> 23 seconds ago </td>
                            <!--end::Date--->
                            <!--begin::Action--->
                            <td> Current session </td>
                            <!--end::Action--->
                          </tr>
                          <tr>
                            <!--begin::Invoice--->
                            <td> Australia </td>
                            <!--end::Invoice--->
                            <!--begin::Status--->
                            <td> Safari - iOS </td>
                            <!--end::Status--->
                            <!--begin::Amount--->
                            <td> 207.49.19.24 </td>
                            <!--end::Amount--->
                            <!--begin::Date--->
                            <td> 3 days ago </td>
                            <!--end::Date--->
                            <!--begin::Action--->
                            <td>
                              <a href="#" data-kt-admins-sign-out="single_admin">Sign out</a>
                            </td>
                            <!--end::Action--->
                          </tr>
                          <tr>
                            <!--begin::Invoice--->
                            <td> Australia </td>
                            <!--end::Invoice--->
                            <!--begin::Status--->
                            <td> Chrome - Windows </td>
                            <!--end::Status--->
                            <!--begin::Amount--->
                            <td> 207.14.21.116 </td>
                            <!--end::Amount--->
                            <!--begin::Date--->
                            <td> last week </td>
                            <!--end::Date--->
                            <!--begin::Action--->
                            <td> Expired </td>
                            <!--end::Action--->
                          </tr>
                        </tbody>
                        <!--end::Table body-->
                      </table>
                      <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card pt-4 mb-6 mb-xl-9">
                  <!--begin::Card header-->
                  <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                      <h2>Logs</h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                      <!--begin::Button-->
                      <button type="button" class="btn btn-sm btn-light-primary">
                        <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                        <span class="svg-icon svg-icon-3">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor"></path>
                            <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor"></path>
                            <path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor"></path>
                          </svg>
                        </span>
                        <!--end::Svg Icon--> Download Report
                      </button>
                      <!--end::Button-->
                    </div>
                    <!--end::Card toolbar-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body py-0">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                      <!--begin::Table-->
                      <table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_admins_logs">
                        <!--begin::Table body-->
                        <tbody>
                          <!--begin::Table row-->
                          <tr>
                            <!--begin::Badge--->
                            <td class="min-w-70px">
                              <div class="badge badge-light-success">200 OK</div>
                            </td>
                            <!--end::Badge--->
                            <!--begin::Status--->
                            <td> POST /v1/invoices/in_6520_4867/payment </td>
                            <!--end::Status--->
                            <!--begin::Timestamp--->
                            <td class="pe-0 text-end min-w-200px"> 10 Mar 2023, 10:30 am </td>
                            <!--end::Timestamp--->
                          </tr>
                          <!--end::Table row-->
                          <!--begin::Table row-->
                          <tr>
                            <!--begin::Badge--->
                            <td class="min-w-70px">
                              <div class="badge badge-light-success">200 OK</div>
                            </td>
                            <!--end::Badge--->
                            <!--begin::Status--->
                            <td> POST /v1/invoices/in_3670_6054/payment </td>
                            <!--end::Status--->
                            <!--begin::Timestamp--->
                            <td class="pe-0 text-end min-w-200px"> 10 Nov 2023, 6:05 pm </td>
                            <!--end::Timestamp--->
                          </tr>
                          <!--end::Table row-->
                          <!--begin::Table row-->
                          <tr>
                            <!--begin::Badge--->
                            <td class="min-w-70px">
                              <div class="badge badge-light-success">200 OK</div>
                            </td>
                            <!--end::Badge--->
                            <!--begin::Status--->
                            <td> POST /v1/invoices/in_4934_6722/payment </td>
                            <!--end::Status--->
                            <!--begin::Timestamp--->
                            <td class="pe-0 text-end min-w-200px"> 25 Jul 2023, 11:30 am </td>
                            <!--end::Timestamp--->
                          </tr>
                          <!--end::Table row-->
                          <!--begin::Table row-->
                          <tr>
                            <!--begin::Badge--->
                            <td class="min-w-70px">
                              <div class="badge badge-light-success">200 OK</div>
                            </td>
                            <!--end::Badge--->
                            <!--begin::Status--->
                            <td> POST /v1/invoices/in_2497_9630/payment </td>
                            <!--end::Status--->
                            <!--begin::Timestamp--->
                            <td class="pe-0 text-end min-w-200px"> 05 May 2023, 5:30 pm </td>
                            <!--end::Timestamp--->
                          </tr>
                          <!--end::Table row-->
                          <!--begin::Table row-->
                          <tr>
                            <!--begin::Badge--->
                            <td class="min-w-70px">
                              <div class="badge badge-light-danger">500 ERR</div>
                            </td>
                            <!--end::Badge--->
                            <!--begin::Status--->
                            <td> POST /v1/invoice/in_7246_6459/invalid </td>
                            <!--end::Status--->
                            <!--begin::Timestamp--->
                            <td class="pe-0 text-end min-w-200px"> 24 Jun 2023, 5:20 pm </td>
                            <!--end::Timestamp--->
                          </tr>
                          <!--end::Table row-->
                        </tbody>
                        <!--end::Table body-->
                      </table>
                      <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Card-->

              </div>
              <!--end:::Tab pane-->
            </div>
            <!--end:::Tab content-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Layout-->
        <!--begin::Modals-->
        <!--begin::Modal - Update admin details-->
       @include('modals.admins.view.detailsUpdateModal')
        <!--end::Modal - Update admin details-->

        <!--begin::Modal - Update email-->
        @include('modals.admins.view.emailUpdateModal')
        <!--end::Modal - Update email-->
        <!--begin::Modal - Update password-->
        @include('modals.admins.view.passwordUpdateModal')
        <!--end::Modal - Update password-->
        <!--begin::Modal - admins role-->
        @include('modals.admins.view.roleUpdateModal')
        <!--end::Modal - Update role-->


        <!--end::Modals-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::Post-->
  </div>

@endsection

@section('js-ext')

<script>
    var hostUrl = "public/assets/";
</script>

<script>

function performUpdateDetails(id) {

    let data  = {
        'name': document.getElementById('adminName').value,

    };

    putRequest('/dashboard/admins/'+id,data,'/dashboard/admins/'+id);
}


</script>

<script>
    function performUpdateAvatar(id) {

    let formData = new FormData();
    formData.append('avatar', document.getElementById('avatar').files[0]);


        axios.post(`/dashboard/admins/${id}/avatar`, formData)
        .then(function (response) {
                // handle success
                toastr.success(response.data.message);

            }).catch(function (error) {
                // handle error
                toastr.error(error.response.data.message);
            });
        }
    function performUpdateEmail(id) {

            let data = {
                'email': document.getElementById('profile_email').value
            };
            putRequest(`/dashboard/admins/${id}/email`,data,'/dashboard/admins/'+id);

    }


        function performUpdatePassword(id) {

            let data = {
                'current_password':document.getElementById('current_password').value,
                'password': document.getElementById('new_password').value,
                'password_confirmation': document.getElementById('confirm_password').value
            };
            putRequest(`/dashboard/admins/${id}/password/`,data,'/dashboard/admins/'+id);
        }

        function performUpdateRole(id) {
            let selectedRadio = document.querySelector('input[id="admin_role"]:checked');
            let data = {
                'role':selectedRadio.value
            };

            putRequest(`/dashboard/admins/${id}/role/`,data,'/dashboard/admins/'+id);
        }

</script>

<script>
function performDelete(id,reference) {
            confirmDeleteRequest('/dashboard/admins/'+id,reference,'/dashboard/admins/'+id);
        }

function performRestore(id,reference) {
            putRequest(`/dashboard/admins/${id}/restore/`,reference,'/dashboard/admins/'+id);
        }
</script>

 <!--begin::Vendors Javascript(used for this page only)-->
 <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
 <!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
     <script src="{{asset('assets/js/custom/apps/human-resource/admins/view/view.js')}}"></script>
     <script src="{{asset('assets/js/custom/apps/human-resource/admins/view/update-details.js')}}"></script>
     <script src="{{asset('assets/js/custom/apps/human-resource/admins/view/update-email.js')}}"></script>
     <script src="{{asset('assets/js/custom/apps/human-resource/admins/view/update-password.js')}}"></script>
     <script src="{{asset('assets/js/custom/apps/human-resource/admins/view/update-role.js')}}"></script>
     <script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
     <script src="{{asset('assets/js/custom/widgets.js')}}"></script>
     <script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
     <script src="{{asset('assets/js/custom/utilities/modals/admins-search.js')}}"></script>
 <!--end::Custom Javascript-->

@endsection
