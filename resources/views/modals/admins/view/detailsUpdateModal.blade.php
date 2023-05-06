 <!--begin::Modal - Update admin details-->
 <div class="modal fade" id="kt_modal_update_details" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Form-->
        <form class="form" action="#" id="kt_modal_update_admin_form">

            <!--begin::Modal header-->
          <div class="modal-header" id="kt_modal_update_admin_header">
            <!--begin::Modal title-->
            <h2 class="fw-bold">Update Admin Details</h2>
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
          <div class="modal-body py-10 px-lg-17">
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_admin_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_admin_header" data-kt-scroll-wrappers="#kt_modal_update_admin_scroll" data-kt-scroll-offset="300px" style="">
              <!--begin::Admin toggle-->
              <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_admin_admin_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_admin_admin_info"> Admin Information <span class="ms-2 rotate-180">
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                  <span class="svg-icon svg-icon-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
              </div>
              <!--end::Admin toggle-->
              <!--begin::Admin form-->
              <div id="kt_modal_update_admin_admin_info" class="collapse show">
                <!--begin::Input group-->
                <div class="mb-7">
                  <!--begin::Label-->
                  <label class="fs-6 fw-semibold mb-2">
                    <span>Update Avatar</span>
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Allowed file types: png, jpg, jpeg." data-bs-original-title="Allowed file types: png, jpg, jpeg." data-kt-initialized="1"></i>
                  </label>
                  <!--end::Label-->
                  <!--begin::Image input wrapper-->
                  <div class="mt-1">
                    <!--begin::Image placeholder-->
                    <style>
                      .image-input-placeholder {
                        background-image: url({{asset('assets/media/svg/avatars/blank.svg')}});
                      }

                      [data-bs-theme="dark"] .image-input-placeholder {
                        background-image: url({{asset('assets/media/svg/avatars/blank-dark.svg')}});
                      }
                    </style>
                    <!--end::Image placeholder-->
                    <!--begin::Image input-->
                    <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                      <!--begin::Preview existing avatar-->
                      <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{$admin->image_url}})"></div>
                      <!--end::Preview existing avatar-->
                      <!--begin::Edit-->
                      <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                        <i class="bi bi-pencil-fill fs-7"></i>
                        <!--begin::Inputs-->

                        <input type="file" name="avatar"  id="avatar" accept="image/*" value="{{$admin->image_url}}"  onchange="performUpdateAvatar({{$admin->id}})">
                        <input type="hidden" name="avatar_remove">
                        <!--end::Inputs-->
                      </label>
                      <!--end::Edit-->
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
                  </div>
                  <!--end::Image input wrapper-->
                </div>
                <!--end::Input group-->

            {{-- <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold mb-2">PIN</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" name="userPin" id="userPin" value="{{$admin->pin}}">
                <!--end::Input-->
            </div>
            <!--end::Input group--> --}}

                <!--begin::Input group-->
                <div class="fv-row mb-7">
                  <!--begin::Label-->
                  <label class="fs-6 fw-semibold mb-2">Name</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="text" class="form-control form-control-solid" name="adminName" id="adminName" value="{{$admin->name}}">
                  <!--end::Input-->
                </div>
                <!--end::Input group-->



              </div>
              <!--end::Admin form-->


            </div>
            <!--end::Scroll-->
          </div>
          <!--end::Modal body-->
          <!--begin::Modal footer-->
          <div class="modal-footer flex-center">
            <!--begin::Button-->
            <button type="reset" class="btn btn-light me-3" data-kt-admins-modal-action="cancel"> Discard </button>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="button" class="btn btn-primary" onclick="performUpdateDetails({{$admin->id}})">
              <span class="indicator-label"> Submit </span>
              <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
              </span>
            </button>
            <!--end::Button-->
          </div>
          <!--end::Modal footer-->
        </form>
        <!--end::Form-->
      </div>
    </div>
  </div>
  <!--end::Modal - Update admin details-->
