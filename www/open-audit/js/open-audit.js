/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

/* *_collection */
$(document).ready(function(){
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
});

/* any Delete links */
$(document).ready(function(){
    $('.delete_link').click(function() {
        if (confirm('Are you sure?') != true) {
            return;
        }
        var $id = $(this).attr('data-id');
        var $name = $(this).attr('data-name');
        var $url = '/open-audit/index.php/' + collection + '/' + $id;
        $.ajax({
            type: 'DELETE',
            url: $url,
            dataType: 'json',
            success: function(data) {
                // alert($name + " has been deleted.");
                window.location = web_folder + "/index.php/" + collection;
            },
            error: function() {
                alert("An error occurred when deleting item:" + $name);
            }
       });
    });
});

/* v_devices_read */
$(document).ready(function(){
    // disable the form fields by default
    // toggle the menu items -> display panels
    $('.list-group-item a').click(function(e){
        var menuitem = e.target.dataset.menuitem;
        if (e.target.style.fontWeight == "bold") {
            e.target.style.fontWeight = "";
            document.getElementById(menuitem).style.display = "none";
        } else {
            e.target.style.fontWeight = "bold";
            document.getElementById(menuitem).style.display = "inline";
        }
        return false;
    });
    // close the display panel
    $('.myCloseButton').click(function(e){
        var menuitem = e.target.dataset.menuitem;
        document.getElementById(menuitem).style.display = "none";
        return false;
    });
    // enable the form fields if the edit button is clicked
    $('#toggle_link').click(function(e){
        $("#form_summary :input").attr("disabled", false);
        document.getElementById("toggle_link").style.display = "none";
        document.getElementById("submit_button").style.display = "inline";
    });
});


/* inline edit */
$(document).ready(function(){
    $(document).on('click', '.edit_button', function(e){
        var action = $(this).attr("data-action");
        var attribute = $(this).attr("data-attribute");
        if (action == "edit") {
            var item = document.getElementById(attribute);
            $(item).attr("disabled", false);
            $(this).attr("class", "btn btn-danger edit_button");
            $(this).attr("data-action", "cancel");
            $(this).html('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>');
            $(this).parent().parent().append('<span id="submit_'+attribute+'" class="input-group-btn"><button class="btn btn-success edit_button" type="button" data-attribute="'+attribute+'" data-action="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></span>');
        }
        if (action == "cancel") {
            var item = document.getElementById(attribute);
            $(item).attr("disabled", true);
            $(this).html('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>');
            $(this).attr("data-action", "edit");
            $(this).attr("class", "btn btn-default edit_button");
            document.getElementById('submit_'+attribute).remove();
        }
        if (action == "submit") {
            var item = document.getElementById(attribute);
            var value = $(item).val();
            var edit_button = document.getElementById('edit_'+attribute);
            var data = {};
            data["data"] = {};
            data["data"]["id"] = id;
            data["data"]["type"] = collection;
            data["data"]["attributes"] = {};
            if (attribute.indexOf(".") == -1) {
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
                success: function(data) {
                    /* alert( 'success' ); */
                },
                error: function(data) {
                    data = JSON.parse(data.responseText);
                    alert( data.errors[0].code + "\n" + data.errors[0].title + "\n" + data.errors[0].detail );
                }
            });
            $(item).attr("disabled", true);
            $(edit_button).html('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>');
            $(edit_button).attr("data-action", "edit");
            $(edit_button).attr("class", "btn btn-default edit_button");
            document.getElementById('submit_'+attribute).remove();
        }
    });
});
