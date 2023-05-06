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
        View Role </li>
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
                @can('Update-Role')
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 w-lg-200px w-xl-300px mb-10">

                    <!--begin::Card-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2 class="mb-0">{{$role->name}}</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
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
                        <div class="card-footer pt-0">
                            <button type="button" class="btn btn-light btn-active-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_update_role">Edit Role</button>
                        </div>
                        <!--end::Card footer-->

                    </div>
                    <!--end::Card-->

                    

                    <!--begin::Modal-->

                    <!--begin::Modal - Update role-->
                    @include('modals.roles.view.roleUpdateModal')

                    <!--end::Modal - Update role-->
                    <!--end::Modal-->
                </div>
                <!--end::Sidebar-->
                @endcan
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-10">
                    <!--begin::Card-->
                    <div class="card card-flush mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header pt-5">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2 class="d-flex align-items-center"> Users Assigned<span
                                        class="text-gray-600 fs-6 ms-1">{{$role->users()->count()}}</span></h2>
                            </div>
                            <!--end::Card title-->



                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1"
                                    data-kt-view-roles-table-toolbar="base">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-6"><svg width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                fill="currentColor"></rect>
                                            <path
                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--> <input type="text" data-kt-roles-table-filter="search"
                                        class="form-control form-control-solid w-250px ps-15"
                                        placeholder="Search Admins">
                                </div>
                                <!--end::Search-->

                                <!--begin::Group actions-->
                                <div class="d-flex justify-content-end align-items-center d-none"
                                    data-kt-view-roles-table-toolbar="selected">
                                    <div class="fw-bold me-5">
                                        <span class="me-2" data-kt-view-roles-table-select="selected_count"></span>
                                        Selected
                                    </div>

                                    <button type="button" class="btn btn-danger" onclick="performDeleteMany(this,{{$role->id}})"> Delete Selected </button>

                                </div>
                                <!--end::Group actions-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <div id="kt_roles_view_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="table-responsive">
                                    <table
                                        class="table align-middle table-row-dashed fs-6 gy-5 mb-0 dataTable no-footer"
                                        id="kt_roles_view_table">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="w-10px pe-2 sorting_disabled" rowspan="1"
                                                    colspan="1"
                                                    aria-label=""
                                                    style="width: 29.8906px;">
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            data-kt-check="true"
                                                            data-kt-check-target="#kt_roles_view_table .form-check-input"
                                                            value="1">
                                                    </div>
                                                </th>
                                                <th class="min-w-50px sorting" tabindex="0"
                                                    aria-controls="kt_roles_view_table" rowspan="1" colspan="1"
                                                    aria-label="ID: activate to sort column ascending"
                                                    style="width: 62.0781px;">ID</th>
                                                <th class="min-w-150px sorting" tabindex="0"
                                                    aria-controls="kt_roles_view_table" rowspan="1" colspan="1"
                                                    aria-label="User: activate to sort column ascending"
                                                    style="width: 223.109px;">User</th>
                                                <th class="min-w-125px sorting" tabindex="0"
                                                    aria-controls="kt_roles_view_table" rowspan="1" colspan="1"
                                                    aria-label="Joined Date: activate to sort column ascending"
                                                    style="width: 168.438px;">Joined Date</th>
                                                <th class="text-end min-w-100px sorting_disabled" rowspan="1"
                                                    colspan="1" aria-label="Actions" style="width: 103.984px;">
                                                    Actions</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->

                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600">


                                    @foreach ($role->users()->get() as $admin)
                                    <tr class="odd">
                                        <!--begin::Checkbox-->
                                        <td>
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" id="admins[]" name="admins[]"
                                                    value="{{$admin->id}} ">
                                            </div>
                                        </td>
                                        <!--end::Checkbox-->

                                        <!--begin::ID-->
                                        <td>ID{{$admin->id}}</td>
                                        <!--begin::ID-->

                                        <!--begin::User--->
                                        <td class="d-flex align-items-center">
                                            <!--begin:: Avatar -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a
                                                    href="#">
                                                    <div class="symbol-label">
                                                        <img src="{{$admin->image_url}}"
                                                            alt="{{$admin->name}}" class="w-100">
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::User details-->
                                            <div class="d-flex flex-column">
                                                <a href="{{route('admins.show',['admin'=>$admin->id])}}"
                                                    class="text-gray-800 text-hover-primary mb-1">{{$admin->name}}</a>
                                                <span>{{$admin->email}}</span>
                                            </div>
                                            <!--begin::User details-->

                                        </td>
                                        <!--end::user--->

                                        <!--begin::Joined date--->
                                        <td data-order="2023-08-19T20:43:00+03:00">
                                            {{$admin->joined_date}} </td>
                                        <!--end::Joined date--->

                                        <!--begin::Action--->
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-light btn-active-light-primary"
                                                data-kt-menu-trigger="click"
                                                data-kt-menu-placement="bottom-end">
                                                Actions
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-5 m-0"><svg width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <!--begin::Menu-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                data-kt-menu="true">

                                                @can('Read-Admin')

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{route('admins.show',['admin'=>$admin->id])}}"
                                                        class="menu-link px-3">
                                                        View
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                @endcan

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a onclick="performDelete({{$role->id}},{{ $admin->id }}, this)" class="menu-link px-3"
                                                        >
                                                        Delete
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </td>
                                        <!--end::Action--->
                                    </tr>

                                    @endforeach







                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>

                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>


@endsection

@section('js-ext')

        <!--begin::Vendors Javascript(used for this page only)-->
        <script>
            var hostUrl = "public/assets/";
        </script>

        <script>



        function performUpdate() {

            const checkboxes = document.querySelectorAll('input[id="permissions[]"]');

            const selectedPermissions = [];
                checkboxes.forEach((checkbox) => {
                    if (checkbox.checked) {
                        selectedPermissions.push(checkbox.value);
                    }
                });

            var id = document.getElementById("role_id").value;

            let updatedData = {
            role_name:document.getElementById("role_name_edit").value,
            guard_name:document.getElementById("guard_name_edit").value,
            permissions:selectedPermissions
            };



             putRequest('/dashboard/roles/'+id,updatedData,'/dashboard/roles/'+id);

        }

        function performDelete(role,admin,reference) {
            confirmDeleteRequest(`/dashboard/roles/revoke/${role}/${admin}`,reference);
        }


        function performDeleteMany(reference,id){

        const checkboxes = document.querySelectorAll('input[id="admins[]"]');

        const selectedAdmins = [];
            checkboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    selectedAdmins.push(checkbox.value);
                }
            });


        let data = {
            admins:selectedAdmins,
        };

    confirmDeleteManyRequest('/dashboard/roles/revoke-many/'+id, {data} , reference,'/dashboard/roles/'+id);

}

        </script>


             <!--begin::Vendors Javascript(used for this page only)-->
                    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
                <!--end::Vendors Javascript-->

            <!--begin::Custom Javascript(used for this page only)-->
                    <script src="{{asset('assets/js/custom/apps/user-management/roles/view/view.js')}}"></script>
                    <script src="{{asset('assets/js/custom/apps/user-management/roles/view/update-role.js')}}"></script>
                    <script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
                    <script src="{{asset('assets/js/custom/widgets.js')}}"></script>
                    <script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
                    <script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
                <!--end::Custom Javascript-->

@endsection
