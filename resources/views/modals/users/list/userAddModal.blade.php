<!--begin::Modal - Add task-->
<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header" id="kt_modal_add_user_header">
          <!--begin::Modal title-->
          <h2 class="fw-bold">Add User</h2>
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
          <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="">
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                <!--end::Label-->
                <!--begin::Image placeholder-->
                <style>
                  .image-input-placeholder {
                    background-image: url({{asset('assets/media/svg/files/blank-image.svg')}});
                  }

                  [data-bs-theme="dark"] .image-input-placeholder {
                    background-image: url({{asset('assets/media/svg/files/blank-image-dark.svg')}});
                  }
                </style>
                <!--end::Image placeholder-->
                <!--begin::Image input-->
                <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                  <!--begin::Preview existing avatar-->
                  <div class="image-input-wrapper w-125px h-125px"></div>
                  <!--end::Preview existing avatar-->
                  <!--begin::Label-->
                  <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                    <i class="bi bi-pencil-fill fs-7"></i>
                    <!--begin::Inputs-->
                    <input type="file" name="avatar" id="avatar" accept="image/*">
                    <input type="hidden" name="avatar_remove">
                    <!--end::Inputs-->
                  </label>
                  <!--end::Label-->
                  <!--begin::Cancel-->
                  <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                    <i class="bi bi-x fs-2"></i>
                  </span>
                  <!--end::Cancel-->
                  <!--begin::Remove-->
                  <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                    <i class="bi bi-x fs-2"></i>
                  </span>
                  <!--end::Remove-->
                </div>
                <!--end::Image input-->
                <!--begin::Hint-->
                <div class="form-text">Allowed file types: jpeg,png,jpg,gif,svg.</div>
                <!--end::Hint-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="fv-row mb-7 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="required fw-semibold fs-6 mb-2">Pin</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="user_pin" id="user_pin" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Personal Identification Number">
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback"></div>
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="fv-row mb-7 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="required fw-semibold fs-6 mb-2">Full Name</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="user_name" id="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name">
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback"></div>
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="fv-row mb-7 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="required fw-semibold fs-6 mb-2">Email</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="email" name="user_email" id="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com">
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback"></div>
              </div>
              <!--end::Input group-->
               <!--begin::Input group-->
               <div class="fv-row mb-7 fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="required fw-semibold fs-6 mb-2">Password</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="password" name="user_password" id="user_password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Enter Password">
                <!--end::Input-->
                <div class="fv-plugins-message-container invalid-feedback"></div>
              </div>
              <!--end::Input group-->
              {{-- <!--begin::Input group-->
              <div class="mb-7">
                <!--begin::Label-->
                <label class="required fw-semibold fs-6 mb-5">Role</label>
                <!--end::Label-->
                <!--begin::Roles-->

                @foreach ($roles as $role)
                    <!--begin::Input row-->
                    <div class="d-flex fv-row">
                        <!--begin::Radio-->
                        <div class="form-check form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" id="user_role" type="radio" name="user_role" value="{{$role->name}}">
                        <!--end::Input-->
                        <!--begin::Label-->
                        <label class="form-check-label" for="user_role">
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
            <!--end::Scroll--> --}}
            <!--begin::Actions-->
            <div class="text-center pt-15">
              <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel"> Discard </button>
              <button type="button" onclick="performAdd()" class="btn btn-primary">
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
  <!--end::Modal - Add task-->
