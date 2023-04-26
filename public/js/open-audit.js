/* inline edit */
$(document).ready(function () {

    /* Inline edit, click edit */
    $(document).on('click', '.edit', function (e) {
        var attribute = $(this).attr("data-attribute");
        attribute = attribute.replace(/\./g, '\\.');
        attribute = attribute.replace(/\|/g, '\\|'); /* for scan_options.open|filtered */
        attribute = attribute.replace(/\[/g, '\\['); /* for tasks.minute[] */
        attribute = attribute.replace(/\]/g, '\\]'); /* for tasks.minute[] */
        $(".form-help[data-attribute='" + attribute + "']").html($(".form-help[data-attribute='" + attribute + "']").attr('data-dictionary'));
        $("#" + attribute).attr("disabled", false);
        $(".edit[data-attribute='" + attribute + "']").hide();
        $(".submit[data-attribute='" + attribute + "']").show();
        $(".cancel[data-attribute='" + attribute + "']").show();
    });

    /* Inline edit, click cancel */
    $(document).on('click', '.cancel', function (e) {
        var attribute = $(this).attr("data-attribute");
        attribute = attribute.replace(/\./g, '\\.');
        attribute = attribute.replace(/\|/g, '\\|'); /* for scan_options.open|filtered */
        attribute = attribute.replace(/\[/g, '\\['); /* for tasks.minute[] */
        attribute = attribute.replace(/\]/g, '\\]'); /* for tasks.minute[] */
        $(".form-help[data-attribute='" + attribute + "']").html('<br />');
        $("#"+attribute).val($("#"+attribute).attr("data-original-value"));
        $("#" + attribute).attr("disabled", true);
        $(".edit[data-attribute='" + attribute + "']").show();
        $(".submit[data-attribute='" + attribute + "']").hide();
        $(".cancel[data-attribute='" + attribute + "']").hide();
    });

    /* Inline edit, click submit */
    $(document).on('click', '.submit', function (e) {
        var attribute = $(this).attr("data-attribute");
        attribute = attribute.replace(/\|/g, '\\|'); /* for scan_options.open|filtered */
        attribute = attribute.replace(/\[/g, '\\['); /* for tasks.minute[] */
        attribute = attribute.replace(/\]/g, '\\]'); /* for tasks.minute[] */
        var value = $("#" + attribute.replace(/\./g, '\\.')).val();
        attribute = $(this).attr("data-attribute");
        var data = {};
        data["data"] = {};
        data["data"]["id"] = id;
        data["data"]["type"] = collection;
        data["data"]["attributes"] = {};
        if (attribute == 'status' && value == 'deleted' && device_auto_delete == 'y') {
            if (confirm("Are you sure?\n\nYour settings mean this will permanently DELETE this device and remove all its data from the database.\n\nIs this acceptable?") !== true) {
                return;
            }
        }
        if (attribute.indexOf(".") === -1) {
            data["data"]["attributes"][attribute] = value;
        } else {
            var attributes = attribute.split(".");
            if (attributes.length == 2) {
                data["data"]["attributes"][attributes[0]] = {};
                data["data"]["attributes"][attributes[0]][attributes[1]] = value;
            }
            if (attributes.length == 3) {
                data["data"]["attributes"][attributes[0]] = {};
                data["data"]["attributes"][attributes[0]][attributes[1]] = {};
                data["data"]["attributes"][attributes[0]][attributes[1]][attributes[2]] = value;
            }
            if (attributes.length == 4) {
                data["data"]["attributes"][attributes[0]] = {};
                data["data"]["attributes"][attributes[0]][attributes[1]] = {};
                data["data"]["attributes"][attributes[0]][attributes[1]][attributes[2]] = {};
                data["data"]["attributes"][attributes[0]][attributes[1]][attributes[2]][attributes[3]] = value;
            }
            if (attributes.length == 5) {
                data["data"]["attributes"][attributes[0]] = {};
                data["data"]["attributes"][attributes[0]][attributes[1]] = {};
                data["data"]["attributes"][attributes[0]][attributes[1]][attributes[2]] = {};
                data["data"]["attributes"][attributes[0]][attributes[1]][attributes[2]][attributes[3]] = {};
                data["data"]["attributes"][attributes[0]][attributes[1]][attributes[2]][attributes[3]][attributes[4]] = value;
            }
        }
        data = JSON.stringify(data);
        $.ajax({
            type: "PATCH",
            url: id,
            contentType: "application/json",
            data: {data : data},
            success: function (data) {
                $("#liveToastSuccess-header").text("Update Succeeded");
                $("#liveToastSuccess-body").text(attribute + " has been updated.");
                var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
                var toastList = toastElList.map(function(toastEl) {
                    return new bootstrap.Toast(toastEl)
                });
                toastList.forEach(toast => toast.show());
                attribute = attribute.replace(/\|/g, '\\|'); /* for scan_options.open|filtered */
                attribute = attribute.replace(/\[/g, '\\['); /* for tasks.minute[] */
                attribute = attribute.replace(/\]/g, '\\]'); /* for tasks.minute[] */
                $("#" + attribute.replace(/\./g, '\\.')).attr("data-original-value", value);
            },
            error: function (data) {
                data = JSON.parse(data.responseText);
                $("#liveToastFailure-header").text("Update Failed");
                $("#liveToastFailure-body").text(data.message);
                var toastElList = [].slice.call(document.querySelectorAll('.toast-failure'));
                var toastList = toastElList.map(function(toastEl) {
                    return new bootstrap.Toast(toastEl)
                });
                toastList.forEach(toast => toast.show());
                console.log(data);
                $("#"+attribute).val($("#"+attribute).attr("data-original-value"));

            }
        });
        $("#" + attribute.replace(/\./g, '\\.')).attr("disabled", true);
        $(".edit[data-attribute='" + attribute.replace(/\./g, '\\.') + "']").show();
        $(".submit[data-attribute='" + attribute.replace(/\./g, '\\.') + "']").hide();
        $(".cancel[data-attribute='" + attribute.replace(/\./g, '\\.') + "']").hide();
        $(".form-help[data-attribute='" + attribute.replace(/\./g, '\\.') + "']").html('<br />');
    });

    /* Delete links */
    $('.delete_link').click(function (e) {
        if (confirm("Are you sure?\nThis will permanently DELETE this entry for " + collection + ".") !== true) {
            return;
        }
        var $id = $(this).attr('data-id');
        /* var $name = $(this).attr('data-name'); */
        if (collection == '') {
            collection = $(this).attr('data-collection');
        }
        var $url = baseurl + '/' + collection + '/' + $id;
        $.ajax({
            type: 'DELETE',
            url: $url,
            dataType: 'json',
            success: function(data, textStatus) { 
                window.location = baseurl + "/" + collection; },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Status: " + textStatus);
                console.log("errorThrown: " + errorThrown);
                console.log(JSON.stringify(jqXHR));
                alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                return false; }
        });
    });

    /* Toasts for the various feature / edition items */
    $('.toastEnterprise').on('click', function() {
        var toastElList = [].slice.call(document.querySelectorAll('.toast-ent'));
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl)
        });
        toastList.forEach(toast => toast.show());
        console.log(toastList);
    });

    $('.toastProfessional').on('click', function() {
        var toastElList = [].slice.call(document.querySelectorAll('.toast-pro'));
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl)
        });
        toastList.forEach(toast => toast.show());
        console.log(toastList);
    });

    $('.toastPermission').on('click', function() {
        var toastElList = [].slice.call(document.querySelectorAll('.toast-perm'));
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl)
        });
        toastList.forEach(toast => toast.show());
        console.log(toastList);
    });

    /* Menus multi-level */
    $( '.dropdown-menu a.dropdown-toggle' ).on( 'mouseenter', function ( e ) {
        var $el = $( this );
        $el.toggleClass('active-dropdown');
        var $parent = $( this ).offsetParent( ".dropdown-menu" );
        if ( !$( this ).next().hasClass( 'show' ) ) {
            $( this ).parents( '.dropdown-menu' ).first().find( '.show' ).removeClass( "show" );
        }
        var $subMenu = $( this ).next( ".dropdown-menu" );
        $subMenu.toggleClass( 'show' );
        $( this ).parent( "li" ).toggleClass( 'show' );
        $( this ).parents( 'li.nav-item.dropdown.show' ).on( 'hidden.bs.dropdown', function ( e ) {
            $( '.dropdown-menu .show' ).removeClass( "show" );
            $el.removeClass('active-dropdown');
        });
        if ( !$parent.parent().hasClass( 'navbar-nav' ) ) {
            $el.next().css( { "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 } );
        }
        return false;
    });

    /* DataTables Init Primary */
    $('.dataTable').DataTable( {
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        "pageLength": 50,
        "pagingType": "full"
    });

    /* DataTables Init Secondary */
    $('.secondaryDataTable').dataTable( {
        "paging": false,
        "searching": false,
        "order": [[ 1, 'asc' ]],
        "info": false,
        "pageLength": 100,
    });

    /* Enable pop-over's */
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    });

    /* Debug button */
    $('.debug').click(function (e) {
        $('#json_response').css('display', 'block');
    });
});
