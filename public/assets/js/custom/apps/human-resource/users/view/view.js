"use strict";

// Class definition
var KTUsersViewMain = function () {

    // Init login session button
    var initLoginSession = () => {
        const button = document.getElementById('kt_modal_sign_out_sesions');

        button.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like sign out all sessions?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, sign out!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    Swal.fire({
                        text: "You have signed out all sessions!.",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your sessions are still preserved!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });
    }


    // Init sign out single user
    var initSignOutUser = () => {
        const signOutButtons = document.querySelectorAll('[data-kt-users-sign-out="single_user"]');

        signOutButtons.forEach(button => {
            button.addEventListener('click', e => {
                e.preventDefault();

                const deviceName = button.closest('tr').querySelectorAll('td')[1].innerText;

                Swal.fire({
                    text: "Are you sure you would like sign out " + deviceName + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, sign out!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then(function (result) {
                    if (result.value) {
                        Swal.fire({
                            text: "You have signed out " + deviceName + "!.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        }).then(function(){
                            button.closest('tr').remove();
                        });
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: deviceName + "'s session is still preserved!.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                    }
                });
            });
        });


    }


  


    return {
        // Public functions
        init: function () {
            initLoginSession();
            initSignOutUser();
            
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTUsersViewMain.init();
});
