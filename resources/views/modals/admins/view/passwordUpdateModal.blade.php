<!--begin::Modal - Update password-->
<div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header">
          <!--begin::Modal title-->
          <h2 class="fw-bold">Update Password</h2>
          <!--end::Modal title-->
          <!--begin::Close-->
          <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-admins-modal-action="close">
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
          <form id="kt_modal_update_password_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
            <!--begin::Input group--->
            <div class="fv-row mb-10 fv-plugins-icon-container">
              <label class="required form-label fs-6 mb-2">Current Password</label>
              <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" id="current_password" autocomplete="on">
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Input group--->
            <!--begin::Input group-->
            <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
              <!--begin::Wrapper-->
              <div class="mb-1">
                <!--begin::Label-->
                <label class="form-label fw-semibold fs-6 mb-2"> New Password </label>
                <!--end::Label-->
                <!--begin::Input wrapper-->
                <div class="position-relative mb-3">
                  <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" id="new_password" autocomplete="off">
                  <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                    <i class="bi bi-eye-slash fs-2"></i>
                    <i class="bi bi-eye fs-2 d-none"></i>
                  </span>
                </div>
                <!--end::Input wrapper-->
                <!--begin::Meter-->
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                  <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                  <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                  <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                  <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
                <!--end::Meter-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Hint-->
              <div class="text-muted"> Use 8 or more characters with a mix of letters, numbers &amp; symbols. </div>
              <!--end::Hint-->
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Input group--->
            <!--begin::Input group--->
            <div class="fv-row mb-10 fv-plugins-icon-container">
              <label class="form-label fw-semibold fs-6 mb-2">Confirm New Password</label>
              <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm_password" id="confirm_password" autocomplete="off">
              <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Input group--->
            <!--begin::Actions-->
            <div class="text-center pt-15">
              <button type="reset" class="btn btn-light me-3" data-kt-admins-modal-action="cancel"> Discard </button>
              <button type="button" class="btn btn-primary" onclick="performUpdatePassword({{$admin->id}})">
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
  <!--end::Modal - Update password-->
