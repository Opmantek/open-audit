/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.14
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

    $(document).on('click', '.edit_button', function(e){
        var action = $(this).attr("data-action");
        var attribute = $(this).attr("value");
        if (action == "edit") {
            var item = document.getElementById(attribute);
            $(item).attr("disabled", false);
            $(this).attr("class", "btn btn-danger edit_button");
            $(this).attr("data-action", "cancel");
            $(this).html('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>');
            $(this).parent().parent().append('<span id="submit_'+attribute+'" class="input-group-btn"><button class="btn btn-success edit_button" type="button" value="'+attribute+'" data-action="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></span>');
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
            var myObj = {};
            /* myObj["id"] = <?php echo $data['system'][0]->id; ?>; */
            myObj["id"] = system_id;
            myObj[attribute] = value;
            var json = JSON.stringify(myObj);
            /* $.post( "<?php echo $data['system'][0]->id;?>", { "data": json }, 'json') */
            $.post( system_id, { "data": json }, 'json')
                .done(function( xhr ) {
                    //alert( JSON.stringify(xhr) );
                })
               .fail(function(xhr) {
                    returnData = xhr;
                    responseText = JSON.parse(xhr.responseText);
                    alert( responseText.error.code + "\n" + responseText.error.title + "\n" + responseText.error.detail );
                });
            $(item).attr("disabled", true);
            $(edit_button).html('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>');
            $(edit_button).attr("data-action", "edit");
            $(edit_button).attr("class", "btn btn-default edit_button");
            document.getElementById('submit_'+attribute).remove();
        }
    });
});
