$(document).on("click", "#edit-category", function (event) {
    event.preventDefault();
    let route = $(this).attr("data-url");
    let categoryName = $(this).attr("data-product-name");

    $.ajax({
        url: route,
        beforeSend: function () {
            $("#modal-edit-body").html(
                '<div class="d-flex justify-content-center mt-4 mb-4"><span class="loadingspinner"></span></div>'
            );
        },
        // return the result
        success: function (result) {
            $("#modal-edit-body").modal("show");
            $("#modal-edit-body").html("");
            $("#modal-edit-body").html(result).show();
        },
        complete: function () {
            $("#spinner-icon").hide();
        },
        error: function (jqXHR, testStatus, error) {
            var message =
                error +
                " An error occured while trying to edit " +
                categoryName +
                " category details.";
            var type = "error";
            displayMessage(message, type);
            $("#spinner-icon").hide();
        },
        timeout: 8000,
    });
});

$(document).on("click", "#reassign-product", function (event) {
    event.preventDefault();
    let route = $(this).attr("data-url");
    let productName = $(this).attr("data-product-name");

    $.ajax({
        url: route,
        beforeSend: function () {
            $("#modal-reassign-body").html(
                '<div class="d-flex justify-content-center mt-4 mb-4"><span class="loadingspinner"></span></div>'
            );
        },
        // return the result
        success: function (result) {
            $("#modal-reassign-body").html("");
            $("#modal-reassign-body").modal("show");
            $("#modal-reassign-body").html(result).show();
        },
        complete: function () {
            $("#spinner-icon-2").hide();
        },
        error: function (jqXHR, testStatus, error) {
            var message =
                error +
                " An error occured while trying to reassign services assigned to " +
                productName;
            var type = "error";
            displayMessage(message, type);
            $("#spinner-icon-2").hide();
        },
        timeout: 8000,
    });
});

$(document).on("change", "#reassign-category-product", function (event) {
    event.preventDefault();

    let productId = $(this).children("option:selected").data("product-id");
    let productName = $(this).children("option:selected").data("product-name");
    let categoryId = $(this).children("option:selected").data("category-id");
    let categoryName = $(this)
        .children("option:selected")
        .data("category-name");
    let route = $(this).children("option:selected").data("url");

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        url: route,
        method: "POST",
        data: {
            productId: productId,
            productName: productName,
            categoryId: categoryId,
            categoryName: categoryName,
        },
        beforeSend: function () {
            $("#sort_table").html(
                '<div class="d-flex justify-content-center mt-4 mb-4"><span class="loadingspinner"></span></div>'
            );
        },
        success: function (data) {
            if (data == "success") {
                //Remove row from table
                $(this).closest("tr").remove();

                //Display success message with sweetalert2
                displayMessage(
                    productName +
                        " product was successfully reassgined to " +
                        categoryName +
                        " category",
                    "success"
                );

                //Hide the modal
                $("#reassignProducts").modal("hide");
                $(".modal-backdrop").remove();

                //Reload the page
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            } else {
                displayMessage(
                    "Error occured while trying to reassign " +
                        productName +
                        " product to " +
                        categoryName +
                        " category",
                    "error"
                );
            }
        },
    });
});

$(document).on("click", "#product-details", function (event) {
    event.preventDefault();
    let route = $(this).attr("data-url");
    let productName = $(this).attr("data-product-name");

    $.ajax({
        url: route,
        beforeSend: function () {
            $("#modal-product-details-body").html(
                '<div class="d-flex justify-content-center mt-4 mb-4"><span class="loadingspinner"></span></div>'
            );
        },
        // return the result
        success: function (result) {
            $("#modal-product-details-body").html("");
            $("#modal-product-details-body").modal("show");
            $("#modal-product-details-body").html(result).show();
        },
        complete: function () {
            $("#spinner-icon-2").hide();
        },
        error: function (jqXHR, testStatus, error) {
            var message =
                error +
                " An error occured while trying to retrieve product details for " +
                productName;
            var type = "error";
            displayMessage(message, type);
            $("#spinner-icon-2").hide();
        },
        timeout: 8000,
    });
});

var inputQuantity = [];
$(function () {
    $(".quantity-count").on("keyup", function (e) {
        var $field = $(this),
            val = this.value,
            $thisIndex = parseInt($field.data("idx"), 10);
        if (
            (this.validity && this.validity.badInput) ||
            isNaN(val) ||
            $field.is(":invalid")
        ) {
            this.value = inputQuantity[$thisIndex];
            return;
        }
        if (val.length > Number($field.attr("maxlength"))) {
            val = val.slice(0, 3);
            $field.val(val);
        }
        inputQuantity[$thisIndex] = val;
    });
});



function jQuerySort() {
    $(".basicExample").DataTable({
        iDisplayLength: 10,
        language: {
            searchPlaceholder: "Search...",
            sSearch: "",
            // lengthMenu: '_MENU_ items/page',
            lengthMenu: "Display _MENU_ records per page",
            zeroRecords: "No matching records found",
            // "info": "Showing page _PAGE_ of _PAGES_",
            infoEmpty: "No records available",
            infoFiltered: "(filtered from _MAX_ total records)",
        },
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "pdf", "print"],
        processing: true,
    });
}
