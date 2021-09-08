/**
* @author Mark Unwin <marku@opmantek.com>
*
* @version   GIT: Open-AudIT_3.5.3
* @copyright Copyright (c) 2014, Opmantek
* @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
*/

/* inline edit */
$(document).ready(function () {

/*
    $(document).on('click', '.edit_button', function (e) {
        var action = $(this).attr("data-action");
        var attribute = $(this).attr("data-attribute");
        var collection = $('#' + attribute).attr("data-collection");
        var id = $('#' + attribute).attr("data-id");
        if (action === "edit") {
            attribute = attribute.replace(".", "\\.");
            // Enable the field
            $('#' + attribute).attr("disabled", false);
            // Deactive the Edit button
            $('#edit_' + attribute).attr("class", "");
            $('#edit_' + attribute).html("");
            // Activate the Submit button
            $('#submit_' + attribute).attr("class", "btn btn-success edit_button");
            $('#submit_' + attribute).html('<i class="fa fa-check"></i>');
            // Activate the Cancel button
            $('#cancel_' + attribute).attr("class", "btn btn-danger edit_button");
            $('#cancel_' + attribute).html('<i class="fa fa-remove"></i>');
        }

        if (action === "cancel") {
            attribute = attribute.replace(".", "\\.");
            // Revert the text box value
            $('#' + attribute).val($('#' + attribute).attr("data-original-value"));
            // Deactivate the field
            $('#' + attribute).attr("disabled", true);
            // Activate the Edit button
            $('#edit_' + attribute).attr("class", "btn btn-outline-secondary input-group-text edit_button");
            $('#edit_' + attribute).html('<i class="fa fa-edit"></i>');
            // Deactive the Submit button
            $('#submit_' + attribute).attr("class", "");
            $('#submit_' + attribute).html("");
            // Deactive the Cancel button
            $('#cancel_' + attribute).attr("class", "");
            $('#cancel_' + attribute).html("");
        }
        if (action === "submit") {
            var item = document.getElementById(attribute);
            var value = $(item).val();
            var edit_button = document.getElementById('edit_' + attribute);
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
                data["data"]["attributes"][attributes[0]] = {};
                data["data"]["attributes"][attributes[0]][attributes[1]] = value;
            }
            data = JSON.stringify(data);
            $.ajax({
                type: "PATCH",
                url: id,
                contentType: "application/json",
                data: {data : data},
                success: function (data) {
                    $('#' + attribute).attr("data-original-value", $('#' + attribute).val());
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    alert(data.errors[0].code + "\n\n" + data.errors[0].title + "\n\n" + data.errors[0].detail + "\n\n" + data.errors[0].message);
                }
            });
            // attribute = attribute.replace(".", "\\.");
            // // Disable the input field
            // $('#' + attribute).attr("disabled", true);
            // // Replace Cancel with Edit
            // $('#edit_' + attribute).attr("class", "btn btn-outline-secondary input-group-text edit_button");
            // $('#edit_' + attribute).attr("data-action", "edit");
            // $('#edit_' + attribute).html('<span class="fa fa-edit"></span>');
            // // Deactive the Submit button
            // $('#submit_' + attribute).attr("class", "");
            // $('#submit_' + attribute).html("");

            attribute = attribute.replace(".", "\\.");
            // Update the text box value
            $('#' + attribute).attr("value", value);
            // Update the original value
            $('#' + attribute).attr("data-original-value", value);
            // Deactivate the field
            $('#' + attribute).attr("disabled", true);
            // Activate the Edit button
            $('#edit_' + attribute).attr("class", "btn btn-outline-secondary input-group-text edit_button");
            $('#edit_' + attribute).html('<i class="fa fa-edit"></i>');
            // Deactive the Submit button
            $('#submit_' + attribute).attr("class", "");
            $('#submit_' + attribute).html("");
            // Deactive the Cancel button
            $('#cancel_' + attribute).attr("class", "");
            $('#cancel_' + attribute).html("");


            // need this below for other.x or credentials.x items
            // document.getElementById('submit_'+attribute).remove();
            // need this for regular fields (name, description, etc)
            // $('#submit_' + attribute).remove();
        }
    });
*/
    $(document).on('click', '.edit', function (e) {
        var attribute = $(this).attr("data-attribute");
        console.log("Attribute: " + attribute);
        var item = $("#"+attribute);
        var value = jQuery.trim(item.text());
        console.log(value);
        $("#"+attribute).html("<div class='input-group' style='margin: 0 0 4px 0;'><input class='form-control' type='text' value='" + value + "'/>\
            <div data-attribute='" + attribute + "' class='btn btn-success submit'><i class='fa fa-check'></i></div>\
            <div data-attribute='" + attribute + "' class='btn btn-danger cancel' ><i class='fa fa-remove'></i></div></div>");
    });
    $(document).on('click', '.cancel', function (e) {
        var attribute = $(this).attr("data-attribute");
        console.log("Attribute: " + attribute);
        console.log("Original Value: " + $("#"+attribute).attr("data-original-value"));
        $("#"+attribute).html($("#"+attribute).attr("data-original-value"));
    });

});


/* Delete links */
$(document).ready(function () {
    $('.delete_link').click(function (e) {
        if (confirm("Are you sure?\nThis will permanently DELETE this entry for " + collection +".") !== true) {
            return;
        }
        var $id = $(this).attr('data-id');
        var $name = $(this).attr('data-name');
        var $url = baseurl + 'index.php/' + collection + '/' + $id;
        $.ajax({
            type: 'DELETE',
            url: $url,
            dataType: 'json',
            success: function(data, textStatus) { 
                window.location = baseurl + "index.php/" + collection; },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("Status: " + textStatus);
                console.log("errorThrown: " + errorThrown);
                console.log(JSON.stringify(jqXHR));
                alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                return false; }
        });
    });
});
