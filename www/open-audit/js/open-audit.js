/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

/* NOTE - baseurl is set on the template page and typically looks like http://192.168.1.118/open-audit/ */

/* *_collection */
$(document).ready(function () {
    $(function () {
        $('[data-toggle="popover"]').popover();
    })
});

/* select all devices on /devices for bulk edit */
$(document).ready(function() {
    $(':checkbox[name=select-all]').click (function () {
      $(':checkbox').prop('checked', this.checked);
    });
});


/* Send to bulk edit form */
$(document).ready(function () {
    $(document).on('click', '.bulk_edit_button', function (e) {
        var ids = "";
        $("input:checked").each(function () {
            if ($(this).attr("value")) {
                ids = ids + "," + $(this).attr("value");
            }
        });
        ids = ids.substring(1);
        var url = baseurl + 'index.php/' + collection + '?action=update&ids=' + ids;
        window.location = url;
    });
});


/* any Delete links */
$(document).ready(function () {
    $('.delete_link').click(function () {
        if (confirm('Are you sure?') !== true) {
            return;
        }
        var $id = $(this).attr('data-id');
        var $name = $(this).attr('data-name');
        var $url = baseurl + 'index.php/' + collection + '/' + $id;
        $.ajax({
            type: 'DELETE',
            url: $url,
            dataType: 'json'
       })
       .success(function (data) {
        window.location = web_folder + "/index.php/" + collection;
       })
       .fail( function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
       });
    });
});

/* Delete device credential link */
$(document).ready(function () {
    $('.subresource_delete_link').click(function () {
        if (confirm('Are you sure?') !== true) {
            return;
        }
        var $sub_resource = $(this).attr('data-sub-resource');
        var $sub_resource_id = $(this).attr('data-sub-resource-id');
        var $name = $(this).attr('data-name');
        var $url = baseurl + 'index.php/' + collection + '/' + id + '/' + $sub_resource + "/" + $sub_resource_id;
        $.ajax({
            type: 'DELETE',
            url: $url,
            dataType: 'json',
            success: function (data) {
                // alert($name + " has been deleted.");
                // window.location = web_folder + "/index.php/" + collection + "/" + id;
            },
            error: function () {
                alert("An error occurred when deleting item:" + $name);
            }
       });
    });
});

/* v_devices_read */
$(document).ready(function () {
    // disable the form fields by default
    // toggle the menu items -> display panels
    $('.list-group-item a').click(function (e) {
        var menuitem = e.target.dataset.menuitem;
        if (e.target.style.fontWeight === "bold") {
            e.target.style.fontWeight = "";
            document.getElementById(menuitem).style.display = "none";
        } else {
            e.target.style.fontWeight = "bold";
            document.getElementById(menuitem).style.display = "inline";
        }
        return false;
    });
    // close the display panel
    $('.myCloseButton').click(function (e) {
        var menuitem = e.target.dataset.menuitem;
        document.getElementById(menuitem).style.display = "none";
        return false;
    });
    // enable the form fields if the edit button is clicked
    $('#toggle_link').click(function (e) {
        $("#form_summary :input").attr("disabled", false);
        document.getElementById("toggle_link").style.display = "none";
        document.getElementById("submit_button").style.display = "inline";
    });
});

/* inline edit */
$(document).ready(function () {
    $(document).on('click', '.edit_button', function (e) {
        var action = $(this).attr("data-action");
        var attribute = $(this).attr("data-attribute");
        if (action === "edit") {
            var item = document.getElementById(attribute);
            $(item).attr("disabled", false);
            $(this).attr("class", "btn btn-danger edit_button");
            $(this).attr("data-action", "cancel");
            $(this).html('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>');
            $(this).parent().parent().append('<span id="submit_' + attribute + '" class="input-group-btn"><button class="btn btn-success edit_button" type="button" data-attribute="' + attribute + '" data-action="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></span>');
        }
        if (action === "cancel") {
            var item = document.getElementById(attribute);
            $(item).attr("disabled", true);
            $(this).html('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>');
            $(this).attr("data-action", "edit");
            $(this).attr("class", "btn btn-default edit_button");
            document.getElementById('submit_'+attribute).remove();
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
                data: {data},
                success: function (data) {
                    /* alert( 'success' ); */
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    alert(data.errors[0].code + "\n" + data.errors[0].title + "\n" + data.errors[0].detail);
                }
            });
            $(item).attr("disabled", true);
            $(edit_button).html('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>');
            $(edit_button).attr("data-action", "edit");
            $(edit_button).attr("class", "btn btn-default edit_button");
            document.getElementById('submit_' + attribute).remove();
        }
    });
});

$(document).ready(function () {
    $(document).on('click', '.locations_latlong', function (e) {
        var address = "";
        if ($('#geo').val() > "") {
            address = $('#geo').val();
        } else {
            address = $('#address').val() + ", " + $('#city').val() + ", " + $('#state').val() + ", " + $('#postcode').val() + ", " + $('#country').val();
        }
        $('#latitude').val('');
        $('#longitude').val('');
        $('#latitude').attr("disabled", false);
        $('#longitude').attr("disabled", false);
        var geocoder = new google.maps.Geocoder();
        if (geocoder) {
            geocoder.geocode({'address': address}, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                   $('#latitude').val(results[0].geometry.location.lat());
                   $('#longitude').val(results[0].geometry.location.lng());
                }
            });
        }
    });
});

$(document).ready(function () {
    $(document).on('click', '.locations_geocode', function (e) {
        var address = $('#address').val() + ", " + $('#city').val() + ", " + $('#state').val() + ", " + $('#postcode').val() + ", " + $('#country').val();
        $('#geo').val('');
        $('#geo').attr("disabled", false);
        $('#geo').val(address);
    });
});

$(document).ready(function () {
    $(document).on('click', '.locations_latlong_c', function (e) {
        var address = "";
        if (document.getElementById("data[attributes][geo]").value > "") {
            address = document.getElementById("data[attributes][geo]").value;
        } else {
            address = document.getElementById("data[attributes][address]").value + ", " + document.getElementById("data[attributes][city]").value + ", " + document.getElementById("data[attributes][state]").value + ", " + document.getElementById("data[attributes][postcode]").value + ", " + document.getElementById("data[attributes][country]").value;
        }
        var geocoder = new google.maps.Geocoder();
        if (geocoder) {
            geocoder.geocode({'address': address}, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    document.getElementById("data[attributes][latitude]").value = results[0].geometry.location.lat();
                    document.getElementById("data[attributes][longitude]").value = results[0].geometry.location.lng();
                }
            });
        }
    });
});

$(document).ready(function () {
    $(document).on('click', '.locations_geocode_c', function (e) {
        document.getElementById("data[attributes][geo]").value = document.getElementById("data[attributes][address]").value + ", " + document.getElementById("data[attributes][city]").value + ", " + document.getElementById("data[attributes][state]").value + ", " + document.getElementById("data[attributes][postcode]").value + ", " + document.getElementById("data[attributes][country]").value;
    });
});