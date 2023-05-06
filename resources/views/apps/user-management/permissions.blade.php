@extends('layouts.main-layout')

@section('css-ext')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css">
    <!--end::Vendor Stylesheets-->
@endsection

@section('breadcrumb')
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('dashboard.home') }}" class="text-muted text-hover-primary">
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
        <li class="breadcrumb-item text-dark">
            Permissions </li>
        <!--end::Item-->

    </ul>
@endsection

@section('content')

  <div class="content d-flex flex-column flex-column-fluid " id="kt_content">
  <!--begin::Post-->
  <div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class=" container-xxl ">
      <!--begin::Card-->
      <div class="card card-flush ">
        <!--begin::Card header-->
        <div class="card-header mt-6">
          <!--begin::Card title-->
          <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1 me-5">
              <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
              <span class="svg-icon svg-icon-1 position-absolute ms-6">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                  <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                </svg>
              </span>
              <!--end::Svg Icon-->
              <input type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Permissions">
            </div>
            <!--end::Search-->
          </div>
          <!--end::Card title-->
          <!--begin::Card toolbar-->
          <div class="card-toolbar">
            <!--begin::Button-->
            <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_permission">
              <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
              <span class="svg-icon svg-icon-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                  <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
                  <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                </svg>
              </span>
              <!--end::Svg Icon--> Add Permission
            </button>
            <!--end::Button-->
          </div>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
          <!--begin::Table-->
          <div id="kt_permissions_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="table-responsive">
              <div id="kt_permissions_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                  <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 dataTable no-footer" id="kt_permissions_table">
                    <!--begin::Table head-->
                    <thead>
                      <!--begin::Table row-->
                      <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_permissions_table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 194.219px;">Name</th>
                        <th class="min-w-250px sorting_disabled" rowspan="1" colspan="1" aria-label="Assigned to" style="width: 415.109px;">Assigned to</th>
                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_permissions_table" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 188.812px;">Created Date</th>
                        <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 128.359px;">Actions</th>
                      </tr>
                      <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-semibold text-gray-600">
                        @foreach ($permissions as $permission)
                        <tr class="even" id="row-{{$permission->id}}">
                            <!--begin::Name--->
                            <td>{{$permission->name}}</td>
                            <!--end::Name--->
                            <!--begin::Assigned to--->
                            <td>
                                @foreach($permission->roles as $role)
                                <a href="{{route('roles.show',['role'=>$role])}}">
                                    {!! html_entity_decode($role->role_badge) !!}

                                </a>

                                @endforeach

                            </td>
                            <!--end::Assigned to--->
                            <!--begin::Created Date-->
                            <td data-order="2023-10-25T22:10:00+03:00">{{$permission->created_date}}</td>
                            <!--end::Created Date-->
                            <!--begin::Action--->
                            <td class="text-end">
                              @can('Update-Permission')
                                <!--begin::Update-->
                              <button  class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"  data-bs-toggle="modal"
                              data-bs-target="#kt_modal_update_permission"
                              data-permission_id="{{$permission->id}}" data-permission_name="{{$permission->name}}" data-guard_name="{{$permission->guard_name}}">
                               <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                               <span class="svg-icon svg-icon-3">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
                                   <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
                                 </svg>
                               </span>
                               <!--end::Svg Icon-->
                             </button>
                             <!--end::Update-->
                              @endcan
                              @can('Delete-Permission')

                              <!--begin::Delete-->
                              <button type="button" onclick="performDelete({{$permission->id}},this)" data-kt-permissions-table-filter="delete_row" class="btn btn-icon btn-active-light-primary w-30px h-30px"  >
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
                            </td>
                            <!--end::Action--->

                    <!--end::Modal - Update permissions-->
                          </tr>
                        @endforeach

                    </tbody>
                    <!--end::Table body-->
                  </table>
                </div>

              </div>
            </div>
          </div>
          <!--end::Table-->
        </div>
        <!--end::Card body-->
      </div>
      <!--end::Card-->
      <!--begin::Modals-->
      <!--begin::Modal - Add permissions-->
      @include('modals.permissions.permissionAddModal')
      <!--end::Modal - Add permissions-->

      @include('modals.permissions.permissionUpdateModal')

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

        function performAdd() {
            //window.location.href = '/dashboard/permissions'
            let data = {
                permission_name:document.getElementById("permission_name").value,
                guard_name:document.getElementById("guard_name").value
            };
            postRequest('/dashboard/permissions',data,'/dashboard/permissions');
        }

        function performDelete(id,reference) {
            confirmDeleteRequest('/dashboard/permissions/'+id,reference,'/dashboard/permissions');
        }

        $('#kt_modal_update_permission').on('show.bs.modal', function (event) {


            var button = $(event.relatedTarget)

            var id = button.data('permission_id');
            var name = button.data('permission_name');
            var guard_name = button.data('guard_name');
            var modal = $(this);

            modal.find('.modal-body #permission_id').val(id);

            modal.find('.modal-body #permission_name_edit').val(name);
            modal.find('.modal-body #guard_name_edit').val(guard_name);
        }
    )

        function performUpdate() {

            var id = document.getElementById("permission_id").value;
            let updatedData = {
                permission_name:document.getElementById("permission_name_edit").value,
                guard_name:document.getElementById("guard_name_edit").value
            };
        putRequest('/dashboard/permissions/'+id,updatedData,'/dashboard/permissions');
        }


    </script>




    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/apps/user-management/permissions/list.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/user-management/permissions/add-permission.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/user-management/permissions/update-permission.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endsection
