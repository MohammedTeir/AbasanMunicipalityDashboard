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
        User Management </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->

    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        Roles </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->

    <!--begin::Item-->
    <li class="breadcrumb-item text-dark">
        Roles List </li>
    <!--end::Item-->

</ul>

@endsection

@section('content')

<div class="content d-flex flex-column flex-column-fluid " id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class=" container-xxl ">

            <!--begin::Row-->
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">

                @foreach ($roles as $role)

                <!--begin::Col-->
                <div class="col-md-4">
                    <!--begin::Card-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>{{$role->name}}</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-1">
                            <!--begin::Users-->
                            <div class="fw-bold text-gray-600 mb-5">Total users with this role: {{$role->users_count}}</div>
                            <!--end::Users-->

                            <!--begin::Permissions-->
                            <div class="d-flex flex-column text-gray-600">
                                @foreach($role->permissions->take(5) as $permission)
                                    <div class="d-flex align-items-center py-2"><span class="bullet bg-primary me-3"></span>
                                        {{ $permission->name }}</div>
                                @endforeach
                                <!-- Add more additional permission divs as needed -->
                                @if($role->permissions->count() > 5)
                                    <div class="d-flex align-items-center py-2 toggle-permissions" style="cursor: pointer;">
                                        <span class="bullet bg-primary me-3"></span>
                                        <em>and {{ $role->permissions->count() - 5 }} more...</em>
                                    </div>
                                @endif
                            </div>
                            <!--end::Permissions-->
                        </div>
                        <!--end::Card body-->

                        <!--begin::Card footer-->

                        <div class="card-footer flex-wrap pt-0">



                           @can('Read-Role')
                           <a href="{{route('roles.show',['role'=>$role->id])}}"
                            class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                           @endcan

                            @can('Delete-Role')
                                 <!--begin::Delete-->
                                 <button type="button" onclick="performDelete({{$role->id}},this)" data-kt-permissions-table-filter="delete_row" class="btn btn-icon btn-active-light-primary w-30px h-30px"  >
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                    </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                            <!--end::Delete-->
                            @endcan

                        </div>
                        <!--end::Card footer-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->

                @endforeach


               @can('Create-Role')

                <!--begin::Add new card-->
                <div class="ol-md-4">
                    <!--begin::Card-->
                    <div class="card h-md-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center">
                            <!--begin::Button-->
                            <button type="button" class="btn btn-clear d-flex flex-column flex-center"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_add_role">
                                <!--begin::Illustration-->
                                <img src="{{asset('assets/media/illustrations/sketchy-1/4.png')}}" alt=""
                                    class="mw-100 mh-150px mb-7">
                                <!--end::Illustration-->

                                <!--begin::Label-->
                                <div class="fw-bold fs-3 text-gray-600 text-hover-primary">Add New Role</div>
                                <!--end::Label-->
                            </button>
                            <!--begin::Button-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                <!--begin::Add new card-->

               @endcan

            </div>
            <!--end::Row-->

            <!--begin::Modals-->

            <!--begin::Modal - Add role-->
            @include('modals.roles.list.roleAddModal')
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
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


        function performAdd() {
            //window.location.href = '/dashboard/permissions'
            let data = {
                role_name:document.getElementById("role_name").value,
                guard_name:document.getElementById("guard_name").value
            };
            postRequest('/dashboard/roles',data,'/dashboard/roles');
        }



        function performDelete(id,reference) {
            confirmDeleteRequest('/dashboard/roles/'+id,reference,'/dashboard/roles');
        }


    </script>

            <!--begin::Vendors Javascript(used for this page only)-->
                    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
                <!--end::Vendors Javascript-->

            <!--begin::Custom Javascript(used for this page only)-->
                    <script src="{{asset('assets/js/custom/apps/user-management/roles/list/add.js')}}"></script>
                    <script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
                    <script src="{{asset('assets/js/custom/widgets.js')}}"></script>
                    <script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
                    <script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
                <!--end::Custom Javascript-->

@endsection
