<!--begin::Modal - Add permissions-->
<div class="modal fade" id="kt_modal_add_permission" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header">
          <!--begin::Modal title-->
          <h2 class="fw-bold">Add a Permission</h2>
          <!--end::Modal title-->
          <!--begin::Close-->
          <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-permissions-modal-action="close">
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
          <form id="kt_modal_add_permission_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
            <!--begin::Input group-->
            <div class="fv-row mb-7 fv-plugins-icon-container">
              <!--begin::Label-->
              <label class="fs-6 fw-semibold form-label mb-2">
                <span class="required">Permission Name</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Permission names is required to be unique." data-kt-initialized="1"></i>
              </label>
              <!--end::Label-->
              <!--begin::Input-->
              <input class="form-control form-control-solid" placeholder="Enter a permission name" id="permission_name" name="permission_name">
              <!--end::Input-->
              <div class="fv-plugins-message-container invalid-feedback"></div>
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Input group-->


            <!--begin::Input group-->

                <div class="fv-row mb-7 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mb-2">
                  <span class="required">Guard</span>
                  <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Guard required to be filled." data-kt-initialized="1"></i>
                </label>
                <!--end::Label-->
                <!--begin::Input-->

                <select class="form-control selectpicker form-control form-control-solid" id="guard_name" data-style="btn-primary">
                    <option disabled selected > Select a guard please  </option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>

                </select>

                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback"></div>
                <div class="fv-plugins-message-container invalid-feedback"></div>
              </div>

            <!--end::Input group-->



            <!--begin::Actions-->
            <div class="text-center pt-15">
              <button type="reset" class="btn btn-light me-3" data-kt-permissions-modal-action="cancel"> Discard </button>
              <button type="button" onclick="performAdd()" class="btn btn-primary" >
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
  <!--end::Modal - Add permissions-->
