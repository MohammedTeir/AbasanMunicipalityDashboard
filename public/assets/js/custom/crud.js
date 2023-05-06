
// Start Create Item
function postRequest(url, data,redirectUrl = null) {
    axios.post(url, data)
    .then(function (response) {
        // handle success
        toastr.success(response.data.message);

        setTimeout(function() {
            if (redirectUrl) {
                window.location.href = redirectUrl;
            }
        }, 100);

    })
    .catch(function (error) {
        // handle error
        toastr.error(error.response.data.message);
    })
}
// End Create Item




// Start Update Item
function putRequest(url, data,redirectUrl = null) {
    axios.put(url, data).then(function (response) {
        // handle success
        toastr.success(response.data.message);

        setTimeout(function() {
            if (redirectUrl) {
                window.location.href = redirectUrl;
            }
        }, 100);

    }).catch(function (error) {
        // handle error
        toastr.error(error.response.data.message);
    })
}
// End Update Item


// Start Delete Item
function confirmDeleteRequest(url, reference,redirectUrl = null) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            deleteRequest(url, reference,redirectUrl);
        }
    })
}

function confirmDeleteManyRequest(url , {data} , reference,redirectUrl = null) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            deleteManyRequest(url, {data} , reference,redirectUrl);
        }
    })
}

function deleteManyRequest(url, {data} , reference,redirectUrl = null) {
    axios.delete(url,{data}).then(function (response) {
        // handle success

        toastr.success(response.data.message);

        // Delay the redirection by 3 seconds
        setTimeout(function() {
            if (redirectUrl) {
                window.location.href = redirectUrl;
            }
        }, 100);

        if (redirectUrl=='/dashboard/roles') {
            reference.closest('.card').remove();
        } else {
            reference.closest('tr').remove();
        }

    }).catch(function (error) {
        // handle error
        toastr.error(error.response.data.message);
    });
}

function deleteRequest(url, reference,redirectUrl = null) {
    axios.delete(url).then(function (response) {
        // handle success

        toastr.success(response.data.message);

        // Delay the redirection by 3 seconds
        setTimeout(function() {
            if (redirectUrl) {
                window.location.href = redirectUrl;
            }
        }, 100);

        if (redirectUrl=='/dashboard/roles') {
            reference.closest('.card').remove();
        } else {
            reference.closest('tr').remove();
        }

    }).catch(function (error) {
        // handle error
        toastr.error(error.response.data.message);
    });
}

// End Delete Item
