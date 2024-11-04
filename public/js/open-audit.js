/* inline edit */
$(document).ready(function () {

    $(document).on('click', '.execute_button', function (e) {
        href = $(this).prop("href");
        console.log(href);
        $(this).prop("href", "#");
        $(this).addClass("disabled");
        $("#liveToastSuccess-header").text("Please Wait");
        $("#liveToastSuccess-body").text("Executing, please wait.");
        var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl)
        });
        toastList.forEach(toast => toast.show());
        window.location = href;
    });


    /* select all devices on /devices for bulk edit */
    $('#select_all').click(function () {
        $(':checkbox').each(function () { this.checked = !this.checked; });
    });

    /* Send to bulk edit form */
    $(document).on('click', '.bulk_edit_button', function (e) {
        var ids = "";
        $("input:checked").each(function () {
            if ($(this).attr("value")) {
                ids = ids + "," + $(this).attr("value");
            }
        });
        ids = ids.substring(1);
        var url = baseurl + '/devices?devices.id=in(' + ids + ')&action=bulkupdateform';
        window.location = url;
    });


    /* Inline edit, click edit */
    $(document).on('click', '.edit', function (e) {
        var attribute = $(this).attr("data-attribute");
        attribute = attribute.replace(/\./g, '\\.');
        attribute = attribute.replace(/\|/g, '\\|'); /* for scan_options.open|filtered */
        attribute = attribute.replace(/\[/g, '\\['); /* for tasks.minute[] */
        attribute = attribute.replace(/\]/g, '\\]'); /* for tasks.minute[] */
        $(".form-help[data-attribute='" + attribute + "']").html($(".form-help[data-attribute='" + attribute + "']").attr('data-dictionary'));
        $(".form-help[data-attribute='" + attribute + "']").parent().append("<br />");
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
        $(".form-help[data-attribute='" + attribute + "']").parent().find('br:last-child').remove();
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
        var ids = $("#ids").attr("data-value");
        if (typeof ids !== 'undefined') {
            if (ids != "") {
                id = collection;
                data["data"]["ids"] = $("#ids").attr("data-value");
            }
        }
        data["data"]["id"] = id;
        data["data"]["type"] = collection;
        data["data"]["attributes"] = {};
        if (attribute == 'status' && value == 'deleted' && device_auto_delete == 'y') {
            if (confirm("Are you sure?\n\nYour settings mean this will permanently DELETE this device and remove all its data from the database.\n\nIs this acceptable?") !== true) {
                return;
            }
        }
        if (attribute == 'tags' && collection == 'devices') {
            value = JSON.parse($("#tags_add").attr("data-tags"));
            value.push($("#tags_add").val());
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

        // We don't normally supply data-url, but in the case where our URL doesn't match (see Collector dashboard) we need to
        if ($(this).attr("data-url")) {
            $url = $(this).attr("data-url");
        } else {
            $url = id;
        }
        $redirect = "";
        if ($(this).attr('data-redirect')) {
            console.log($(this).attr('data-redirect'));
            $redirect = $(this).attr('data-redirect');
        }
        $.ajax({
            type: "PATCH",
            url: $url,
            contentType: "application/json",
            data: {data : data},
            success: function (data) {
                if ($redirect) {
                    window.location = $redirect;
                }
                $("#liveToastSuccess-header").text("Update Succeeded");
                if (attribute == 'tags' && collection == 'devices') {
                    $("#liveToastSuccess-body").text(attribute + " has been updated. Refresh page to update.");
                } else {
                    $("#liveToastSuccess-body").text(attribute + " has been updated.");
                }
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
                $("#"+attribute).val($("#"+attribute).attr("data-original-value"));

            }
        });
        attribute = attribute.replace(/\|/g, '\\|'); /* for scan_options.open|filtered */
        attribute = attribute.replace(/\[/g, '\\['); /* for tasks.minute[] */
        attribute = attribute.replace(/\]/g, '\\]'); /* for tasks.minute[] */
        $("#" + attribute.replace(/\./g, '\\.')).attr("disabled", true);
        $(".edit[data-attribute='" + attribute.replace(/\./g, '\\.') + "']").show();
        $(".submit[data-attribute='" + attribute.replace(/\./g, '\\.') + "']").hide();
        $(".cancel[data-attribute='" + attribute.replace(/\./g, '\\.') + "']").hide();
        $(".form-help[data-attribute='" + attribute.replace(/\./g, '\\.') + "']").html('<br />');
        if (attribute == 'tags' && collection == 'devices') {
            $("#tags_control").css('display', 'none');
        }
    });

    /* Delete links */
    $('.delete_link').click(function (e) {
        dataCollection = $(this).attr('data-collection');
        if (typeof dataCollection !== 'undefined' && dataCollection != "") {
            collection = dataCollection;
        }

        if (confirm("Are you sure?\nThis will permanently DELETE this entry for " + collection + ".") !== true) {
            return;
        }

        redirect = baseurl + '/' + collection;
        dataRedirect = $(this).attr('data-redirect');
        if (typeof dataRedirect !== 'undefined' && dataRedirect != "") {
            redirect = baseurl + '/' + dataRedirect;
        }

        var $id = $(this).attr('data-id');
        /* var $name = $(this).attr('data-name'); */

        var $url = baseurl + '/' + collection + '/' + $id;
        $.ajax({
            type: 'DELETE',
            url: $url,
            dataType: 'json',
            success: function(data, textStatus) { 
                window.location = redirect; },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Status: " + textStatus);
                console.log("errorThrown: " + errorThrown);
                console.log(JSON.stringify(jqXHR));
                alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                return false; }
        });
    });

    /* Delete Component links */
    $('.delete_component_link').click(function (e) {
        if (confirm("Are you sure?\nThis will permanently DELETE this entry for " + $(this).attr('data-component_type') + ".") !== true) {
            return;
        }
        var $type = $(this).attr('data-component_type');
        var $id = $(this).attr('data-id');
        var $url = baseurl + '/components/' + $id + '/' + $type + "?components.type=" + $type;
        $.ajax({
            type: 'DELETE',
            url: $url,
            dataType: 'json',
            success: function(data, textStatus) { 
                $("#liveToastSuccess-header").text("Delete Succeeded");
                $("#liveToastSuccess-body").text($type + " has been deleted. Refresh page to update.");
                var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
                var toastList = toastElList.map(function(toastEl) {
                    return new bootstrap.Toast(toastEl)
                });
                toastList.forEach(toast => toast.show());
                $("#components_" + $type + "_" + $id).remove();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Status: " + textStatus);
                console.log("errorThrown: " + errorThrown);
                console.log(JSON.stringify(jqXHR));
                alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                return false;
            }
        });
    });


    /* Inline edit, click DELETE on tags */
    $(document).on('click', '.delete_tags', function (e) {
        if (confirm("Are you sure you want to delete this tag?") !== true) {
            return;
        }
        var attribute = 'tags';
        var value = $(this).attr("data-tags");
        var data = {};
        data["data"] = {};
        data["data"]["id"] = id;
        data["data"]["type"] = collection;
        data["data"]["attributes"] = {};
        data["data"]["attributes"]["tags"] = value;
        data = JSON.stringify(data);
        console.log(data);
        $.ajax({
            type: "PATCH",
            url: id,
            contentType: "application/json",
            data: {data : data},
            success: function (data) {
                $("#liveToastSuccess-header").text("Update Succeeded");
                $("#liveToastSuccess-body").text(attribute + " has been updated. Refresh page to update.");
                var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
                var toastList = toastElList.map(function(toastEl) {
                    return new bootstrap.Toast(toastEl)
                });
                toastList.forEach(toast => toast.show());
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

            }
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
    /*
    $('.dataTable').DataTable( {
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        "pageLength": 50,
        "pagingType": "full",
        "autoWidth": false
    });
    */

    $('.dataTable').dataTable( {
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        "paging": true,
        "searching": true,
        "order": [[ 1, 'asc' ]],
        "info": true,
        "pageLength": 50,
        "autoWidth": false,
        "oSearch": {
            "bSmart": false,
            "bRegex": true,
            "sSearch": ""
        }
    });

    /* DataTables Init Secondary */
    $('.secondaryDataTable').dataTable( {
        "paging": false,
        "searching": false,
        "order": [[ 1, 'asc' ]],
        "info": false,
        "pageLength": 100,
        "autoWidth": false,
        "oSearch": {
            "bSmart": false,
            "bRegex": true,
            "sSearch": ""
        }
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

    /* Modal for Licensing */
    $(document).on('click', '.dismiss_modal_button', function (e) {
        $('*').css('cursor','wait');
        var value = $(this).attr("data-value");
        updatePrompt(value);
        $('*').css('cursor','auto');
    });


    /* Remind me later */
    function updatePrompt(value) {
        var data = {};
        data["data"] = {};
        data["data"]["id"] = oae_prompt_id;
        data["data"]["type"] = "configuration";
        data["data"]["attributes"] = {};
        data["data"]["attributes"]["value"] = value;
        data = JSON.stringify(data);
        $.ajax({
            async: false,
            type: "PATCH",
            url: baseurl + "/configuration/" + oae_prompt_id,
            contentType: "application/json",
            data: {data : data},
            success: function (data) {
                /* alert( 'success' ); */
                console.log(data);
            },
            error: function (data) {
                console.log(data.responseText);
                data = JSON.parse(data.responseText);
                alert(data.errors[0].code + "\n" + data.errors[0].title + "\n" + data.errors[0].detail);
            }
        });
    }

    function validateEmail($email) {
        var emailReg = /^([\w-\.\+]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test( $email );
    }

    /* Create a free license */
    $("#createFree").click(function (e) {
        $("#data\\[attributes\\]\\[first_name\\]").removeClass('border-danger');
        $("#data\\[attributes\\]\\[last_name\\]").removeClass('border-danger');
        $("#data\\[attributes\\]\\[email\\]").removeClass('border-danger');
        $("#data\\[attributes\\]\\[company\\]").removeClass('border-danger');
        $("#data\\[attributes\\]\\[country\\]").removeClass('border-danger');

        if ($("#data\\[attributes\\]\\[first_name\\]").val() == '') {
            $("#data\\[attributes\\]\\[first_name\\]").addClass('border-danger');
            $("#data\\[attributes\\]\\[first_name\\]").focus();
            return;
        }
        if ($("#data\\[attributes\\]\\[last_name\\]").val() == '') {
            $("#data\\[attributes\\]\\[last_name\\]").addClass('border-danger');
            $("#data\\[attributes\\]\\[last_name\\]").focus();
            return;
        }
        if ($("#data\\[attributes\\]\\[email\\]").val() == '' || !validateEmail($("#data\\[attributes\\]\\[email\\]").val())) {
            $("#data\\[attributes\\]\\[email\\]").addClass('border-danger');
            $("#data\\[attributes\\]\\[email\\]").focus();
            return;
        }
        if ($("#data\\[attributes\\]\\[company\\]").val() == '') {
            $("#data\\[attributes\\]\\[company\\]").addClass('border-danger');
            $("#data\\[attributes\\]\\[company\\]").focus();
            return;
        }
        if ($("#data\\[attributes\\]\\[country\\]").val() == '') {
            $("#data\\[attributes\\]\\[country\\]").addClass('border-danger');
            $("#data\\[attributes\\]\\[country\\]").focus();
            return;
        }

        $('*').css('cursor','wait');

        var data = {};
        data["data"] = {};
        data["data"]["id"] = license_string_id;
        data["data"]["type"] = "configuration";
        data["data"]["attributes"] = {};
        data["data"]["attributes"]["value"] = {};
        data["data"]["attributes"]["value"]["country"] = $("#data\\[attributes\\]\\[country\\]").val();
        data["data"]["attributes"]["value"]["first_name"] = $("#data\\[attributes\\]\\[first_name\\]").val();
        data["data"]["attributes"]["value"]["last_name"] = $("#data\\[attributes\\]\\[last_name\\]").val();
        data["data"]["attributes"]["value"]["email"] = $("#data\\[attributes\\]\\[email\\]").val();
        data["data"]["attributes"]["value"]["company"] = $("#data\\[attributes\\]\\[company\\]").val();
        data = JSON.stringify(data);
        $.ajax({
            type: "PATCH",
            url: baseurl + '/configuration/' + license_string_id,
            contentType: "application/json",
            data: {data : data},
            success: function(data, textStatus) {
                updatePrompt('2101-01-01');
                location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Status: " + textStatus);
                console.log("errorThrown: " + errorThrown);
                console.log(JSON.stringify(jqXHR));
                alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                return false;
            }
        });
    });
});
