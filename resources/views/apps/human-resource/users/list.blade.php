@extends('layouts.main-layout')

@section('css-ext')
<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css">
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
        Users </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <!--end::Item-->

    <!--begin::Item-->
    <li class="breadcrumb-item text-dark">
        Users List </li>
    <!--end::Item-->

</ul>

@endsection

@section('content')

<div class="content d-flex flex-column flex-column-fluid " id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
      <!--begin::Container-->
      <div id="kt_content_container" class=" container-xx1 ">
        <!--begin::Card-->
        <div class="card">
          <!--begin::Card header-->
          <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
              <!--begin::Search-->
              <div class="d-flex align-items-center position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                  </svg>
                </span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user">
              </div>
              <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
              <!--begin::Toolbar-->
              <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                @can('Create-User')
                <!--begin::Add user-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                      </svg>
                    </span>
                    <!--end::Svg Icon--> Add User
                  </button>
                  <!--end::Add user-->
                @endcan
              </div>
              <!--end::Toolbar-->
              @can('Delete-User')
               <!--begin::Group actions-->
               <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                <div class="fw-bold me-5">
                  <span class="me-2" data-kt-user-table-select="selected_count"></span> Selected
                </div>
                <button type="button" class="btn btn-danger" onclick="performDeleteMany(this)"> Delete Selected </button>
              </div>
              <!--end::Group actions-->
              @endcan

              <!--begin::Modal - Add task-->
              @include('modals.users.list.userAddModal')
              <!--end::Modal - Add task-->
            </div>
            <!--end::Card toolbar-->
          </div>
          <!--end::Card header-->
          <!--begin::Card body-->
          <div class="card-body py-4">
            <!--begin::Table-->
            <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
              <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_table_users">
                  <!--begin::Table head-->
                  <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                      <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="



              " style="width: 29.8906px;">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                          <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1">
                        </div>
                      </th>
                      <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending" style="width: 218.953px;">User</th>
                      <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 127.359px;">Role</th>
                      <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Last login: activate to sort column ascending" style="width: 127.359px;">Last login</th>
                      <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Status : activate to sort column ascending" style="width: 127.359px;">Status </th>
                      <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Joined Date: activate to sort column ascending" style="width: 167.609px;">Joined Date</th>
                      <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 101.969px;">Actions </th>
                    </tr>
                    <!--end::Table row-->
                  </thead>
                  <!--end::Table head-->
                  <!--begin::Table body-->
                  <tbody class="text-gray-600 fw-semibold">
                     @foreach ($users as $user)
                    <!--begin::Table row-->
                    <tr class="even">
                      <!--begin::Checkbox-->
                      @if ($user->trashed())
                      <td style="color: red">
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                          <input class="form-check-input" type="checkbox" id="users[]" name="users[]" value="{{$user->id}}" disabled >
                        </div>
                      </td>
                      @else
                      <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                          <input class="form-check-input" type="checkbox" id="users[]" name="users[]" value="{{$user->id}}">
                        </div>
                      </td>
                      @endif

                      <!--end::Checkbox-->
                      <!--begin::User--->
                      <td class="d-flex align-items-center">
                        <!--begin:: Avatar -->
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                          <a href="{{route('users.show',['user'=>$user->id])}}">
                            <div class="symbol-label">
                              <img src="{{$user->image_url}}" alt="{{$user->name}}" class="w-100">
                            </div>
                          </a>
                        </div>
                        <!--end::Avatar-->
                        <!--begin::User details-->
                        <div class="d-flex flex-column">
                          <a href="{{route('users.show',['user'=>$user->id])}}" class="text-gray-800 text-hover-primary mb-1">{{$user->name}}</a>
                          <span>{{$user->email}}</span>
                        </div>
                        <!--begin::User details-->
                      </td>
                      <!--end::User--->
                      <!--begin::Role--->
                      <!--begin::Assigned to--->
                      <td> @foreach($user->roles as $role) <a href="{{route('roles.show',['role'=>$role])}}"> {!! html_entity_decode($role->role_badge) !!} </a> @endforeach </td>
                      <!--end::Assigned to--->
                      <!--end::Role--->
                      <!--begin::Last login--->
                      <td data-order="2023-02-27T05:49:35+02:00">
                        <div class="badge badge-light fw-bold">{{$user->last_login}}</div>
                      </td>
                      <!--end::Last login--->
                      <!--begin::Status--->
                      <td> {!! html_entity_decode($user->status_badge) !!} </td>
                      <!--end::Status--->
                      <!--begin::Joined-->
                      <td data-order="2023-12-20T20:43:00+02:00">
                        {{$user->joined_date}}
                      </td>
                      <!--begin::Joined-->
                      <!--begin::Action--->
                      <td class="text-end">
                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"> Actions
                          <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                          <span class="svg-icon svg-icon-5 m-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </a>

                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                            @can('Read-User')
                            <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a href="{{route('users.show',['user'=>$user->id])}}" class="menu-link px-3"> View </a>
                          </div>
                          <!--end::Menu item-->
                            @endcan

                          @can('Delete-User')
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">

                            @if (!$user->trashed())
                            <a class="menu-link px-3" onclick="performDelete({{ $user->id }}, this)"> Delete </a>

                            @else

                            <a class="menu-link px-3" onclick="performRestore({{ $user->id }}, this)"> Restore </a>

                            @endif

                          </div>
                          <!--end::Menu item-->
                          @endcan


                        </div>
                        <!--end::Menu-->
                      </td>
                      <!--end::Action--->
                    </tr>
                    <!--end::Table row-->
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

    function performAdd() {
            //window.location.href = '/dashboard/permissions'

            // let selectedRadio = document.querySelector('input[name="user_role"]:checked');
            let avatarFile = document.getElementById('avatar').files[0];

            let formData = new FormData();
            formData.append('avatar', avatarFile);
            formData.append('full_name', document.getElementById("user_name").value);
            formData.append('email', document.getElementById("user_email").value);
            formData.append('password', document.getElementById('user_password').value);
            formData.append('pin', document.getElementById('user_pin').value);
            // formData.append('role_name', selectedRadio.value);

            postRequest('/dashboard/users',formData,'/dashboard/users');
        }

        function performDeleteMany(reference){

            const checkboxes = document.querySelectorAll('input[id="users[]"]');

            const selectedUsers = [];
                checkboxes.forEach((checkbox) => {
                    if (checkbox.checked) {
                        selectedUsers.push(checkbox.value);
                    }
                });


            let data = {
                users:selectedUsers,
            };

            confirmDeleteManyRequest('/dashboard/delete-all/users/', {data} , reference,'/dashboard/users');

        }

        function performDelete(id,reference) {
            confirmDeleteRequest('/dashboard/users/'+id,reference,'/dashboard/users');
        }

        function performRestore(id,reference) {
            putRequest(`/dashboard/users/${id}/restore/`,reference,'/dashboard/users');
        }




    </script>

            <!--begin::Vendors Javascript(used for this page only)-->
                    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
                <!--end::Vendors Javascript-->

            <!--begin::Custom Javascript(used for this page only)-->
                    <script src="{{asset('assets/js/custom/apps/human-resource/users/list/table.js')}}"></script>
                    <script src="{{asset('assets/js/custom/apps/human-resource/users/list/add.js')}}"></script>
                    <script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
                    <script src="{{asset('assets/js/custom/widgets.js')}}"></script>
                    <script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
                    <script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
                <!--end::Custom Javascript-->

@endsection
