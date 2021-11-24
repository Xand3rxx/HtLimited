$(function () {
    // Basic DataTable
    $('#basicExample').DataTable({
        "iDisplayLength": 10,
        "language": {
            "searchPlaceholder": 'Search...',
            "sSearch": '',
            "lengthMenu": '_MENU_ items/page',
            // "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "No matching records found",
            // "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },
        // "dom": 'Bfrtip',
        "buttons": [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "processing": true,
        // "scrollY":        "200px",
        // "scrollCollapse": true,
    });

    //Prevent characters or string asides number in phone number input field
    $("#phone_number, #quantity, #discount").on("keypress keyup blur", function(event) {
        $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });

    //Close bootstrap modal backdrop on click
    $('.close').click(function() {
        $(".modal-backdrop").remove();
    });

    //Delete feature sweetalert dialog
    $(document).on('click', '.delete-entity', function(e) {
        e.preventDefault();
        var route = $(this).data('url');
        var title = $(this).attr('title');

        Swal.fire({
            title: title + '?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#559c75',
            cancelButtonColor: '#ff3e61',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value == true) {
                window.location.href = route;
            }
        });
    });

    //Cancel feature sweetalert dialog
    $(document).on('click', '.delete-cancel', function(e) {
        e.preventDefault();
        var route = $(this).data('url');
        var title = $(this).attr('title');

        Swal.fire({
            title: title + '?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#559c75',
            cancelButtonColor: '#ff3e61',
            confirmButtonText: 'Yes, cancel it!'
        }).then((result) => {
            if (result.value == true) {
                window.location.href = route;
            }
        });
    });

    //Deactivate feature sweetalert dialog
    $(document).on('click', '.deactivate-entity', function(e) {
        e.preventDefault();
        var route = $(this).data('url')
        var title = $(this).attr('title');

        Swal.fire({
            title: title + '?',
            text: "You will be able to reinstate afterwards!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#559c75',
            cancelButtonColor: '#ff3e61',
            confirmButtonText: 'Yes, deactivate it!'
        }).then((result) => {
            if (result.value == true) {
                window.location.href = route;
            }
        });
    });

    //Initialise TinyMCE editor
    // tinymce.init({
    //     selector: '#message_body',
    //     height: 200,
    //     theme: 'modern',
    //     plugins: [
    //         'advlist autolink lists charmap hr anchor pagebreak',
    //         'searchreplace wordcount visualblocks visualchars',
    //         'insertdatetime nonbreaking save table contextmenu directionality',
    //         'emoticons paste textcolor colorpicker textpattern'
    //     ],
    //     toolbar1: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
    //     toolbar2: 'forecolor backcolor emoticons',
    //     image_advtab: true
    // });

});

//Feedback from session message to be displayed with Sweet Alert
function displayMessage(message, type) {
    const Toast = swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 8000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
    Toast.fire({
        icon: type,
        //   type: 'success',
        title: message
    });
}
