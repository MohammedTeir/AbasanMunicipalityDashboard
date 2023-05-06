<!--begin::Modal - Update role-->
<div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header">
          <!--begin::Modal title-->
          <h2 class="fw-bold">Update User Role</h2>
          <!--end::Modal title-->
          <!--begin::Close-->
          <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
            <span class="svg-icon svg-icon-1">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
              </svg>
            </span>
            <!--end::Svg Icon-->
          </div>
          <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
          <!--begin::Form-->
          <form id="kt_modal_update_role_form" class="form" action="#">
            <!--begin::Notice-->
            <!--begin::Notice-->
            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
              <!--begin::Icon-->
              <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
              <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                  <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
                  <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
                </svg>
              </span>
              <!--end::Svg Icon-->
              <!--end::Icon-->
              <!--begin::Wrapper-->
              <div class="d-flex flex-stack flex-grow-1 ">
                <!--begin::Content-->
                <div class=" fw-semibold">
                  <div class="fs-6 text-gray-700 ">Please note that reducing a user role rank, that user will lose all priviledges that was assigned to the previous role.</div>
                </div>
                <!--end::Content-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Notice-->
            <!--end::Notice-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
              <!--begin::Label-->
              <label class="fs-6 fw-semibold form-label mb-5">
                <span class="required">Select a user role</span>
              </label>
              <!--end::Label-->
              <!--begin::Input row-->
              @foreach ($roles as $role)
              <div class="d-flex">
                <!--begin::Radio-->
                <div class="form-check form-check-custom form-check-solid">
                  <!--begin::Input-->
                  <input class="form-check-input me-3" name="user_role" id="user_role" type="radio" value="{{$role->name}}" id="kt_modal_update_role_option_0" {{ $user->hasRole($role->name) ? 'checked' : '' }}>
                  <!--end::Input-->
                  <!--begin::Label-->
                  <label class="form-check-label" for="kt_modal_update_role_option_0">
                    <div class="fw-bold text-gray-800">{{$role->name}}</div>
                  </label>
                  <!--end::Label-->
                </div>
                <!--end::Radio-->
              </div>
              <!--end::Input row-->
              <div class="separator separator-dashed my-5"></div>
              @endforeach


            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="text-center pt-15">
              <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel"> Discard </button>
              <button type="button" class="btn btn-primary" onclick="performUpdateRole({{$user->id}})">
                <span class="indicator-label"> Submit </span>
                <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
              </button>
            </div>
            <!--end::Actions-->
          </form>
          <!--end::Form-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Update role-->
