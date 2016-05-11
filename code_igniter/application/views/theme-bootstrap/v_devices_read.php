<?php
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.6.4
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
#print_r($data);
?>

<style>
.list-group-item img {
    width: 20px;
    margin-right: 10px;
}
.section {
    display: none;
}
</style>
<script>
$(document).ready(function(){
    // disable the form fields by default
    // $("#form_summary :input").attr("disabled", true);
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
        var action = $(this).attr("action");
        var attribute = $(this).attr("value");
        // alert(attribute); alert(action);
        if (action == "edit") {
            var item = document.getElementById(attribute);
            $(item).attr("disabled", false);
            $(this).attr("class", "btn btn-danger edit_button");
            $(this).attr("action", "cancel");
            $(this).html('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>');
            $(this).parent().parent().append('<span id="submit_'+attribute+'" class="input-group-btn"><button class="btn btn-success edit_button" type="button" value="'+attribute+'" action="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></span>');
        }
        if (action == "cancel") {
            var item = document.getElementById(attribute);
            $(item).attr("disabled", true);
            $(this).html('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>');
            $(this).attr("action", "edit");
            $(this).attr("class", "btn btn-default edit_button");
            document.getElementById('submit_'+attribute).remove();
        }
        if (action == "submit") {
            var item = document.getElementById(attribute);
            var value = $(item).val();
            var edit_button = document.getElementById('edit_'+attribute);
            var myObj = {};
            myObj["id"] = <?php echo $data['system'][0]->system_id; ?>;
            myObj[attribute] = value;
            var json = JSON.stringify(myObj);
            $.post( "<?php echo $data['system'][0]->system_id;?>", { "data": json }, 'json')
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
            $(edit_button).attr("action", "edit");
            $(edit_button).attr("class", "btn btn-default edit_button");
            document.getElementById('submit_'+attribute).remove();
        }
    });




});
</script>

<?php
include('/usr/local/open-audit/code_igniter/application/controllers/include_device_types.php');

if (strtolower($data['system'][0]->os_group) == 'windows') {
    $attributes['software'] = array('name' => 'Name', 'version' => 'Version', 'installed_on' => 'Installed On', 'installed_by' => 'Installed By', 'first_seen' => 'First Seen', 'location' => 'Location', 'type' => 'Type');
    $attributes['service'] = array('name' => 'Name', 'description' => 'Description', 'executable' => 'Executable', 'user' => 'User', 'start_mode' => 'Start Mode', 'state' => 'State');
    $attributes['disk'] = array('manufacturer' => 'Manufacturer', 'model' => 'Model', 'serial' => 'Serial', 'hard_drive_index' => 'Index', 'interface_type' => 'Interface', 'partition_count' => 'Partitions', 'size' => 'Size', 'status' => 'Status', 'firmware' => 'Firmware');
    $attributes['partition'] = array('mount_type' => 'Type', 'mount_point' => 'Mount Point', 'device' => 'Device', 'hard_drive_index' => 'Disk Index', 'format' => 'Format', 'size' => 'Size', 'used' => 'Used', 'free' => 'Free', 'type' => 'Type');
} else {
    $attributes['software'] = array('name' => 'Name', 'version' => 'Version', 'first_seen' => 'First Seen');
    $attributes['service'] = array('name' => 'Name', 'description' => 'Description', 'start_mode' => 'Start Mode', 'state' => 'State');
    $attributes['disk'] = array('manufacturer' => 'Manufacturer', 'model' => 'Model', 'model_family' => 'Family', 'serial' => 'Serial', 'hard_drive_index' => 'Index', 'interface_type' => 'Interface', 'partition_count' => 'Partitions', 'size' => 'Size', 'status' => 'Status', 'firmware' => 'Firmware');
    $attributes['partition'] = array('mount_type' => 'Type', 'mount_point' => 'Mount Point', 'device' => 'Device', 'hard_drive_index' => 'Disk Index', 'format' => 'Format', 'size' => 'Size', 'used' => 'Used', 'free' => 'Free', 'type' => 'Type');
}

?>



<div class="row">
<div class="col-md-3">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Summary
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item"><img src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/credentials.svg"/><a href="#" data-menuitem="credentials"><?php echo __('Credentials'); ?></a></li>
                <li class="list-group-item"><img src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/purchase.svg"/><a href="#" data-menuitem="purchase"><?php echo __('Purchase'); ?></a></li>
                <li class="list-group-item"><img src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/location.svg"/><a href="#" data-menuitem="location"><?php echo __('Location / Contact'); ?></a></li>
                <li class="list-group-item"><img src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/custom.svg"/><a href="#" data-menuitem="custom"><?php echo __('Custom'); ?></a></li>
                <li class="list-group-item"><img src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/attachments.svg"/><a href="#" data-menuitem="attachment"><?php echo __('Attachments'); ?></a></li>
                <li class="list-group-item"><img src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/audit_log.svg"/><a href="#" data-menuitem="audit_log"><?php echo __('Audit Log'); ?></a></li>
                <li class="list-group-item"><img src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/change_log.svg"/><a href="#" data-menuitem="change_log"><?php echo __('Change Log'); ?></a></li>
                <li class="list-group-item"><img src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/edit_log.svg"/><a href="#" data-menuitem="alert_log"><?php echo __('Edit Log'); ?></a></li>
              </ul>
          </div>
        </div>
      </div>
        <?php
        // the hardware catrgories
        $hardware = array('bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'network', 'optical', 'partition', 'processor', 'sound', 'video');
        $display_hardware = false;
        foreach ($hardware as $item) {
            if (isset($data[$item])) {
                $display_hardware = true;
            }
        }
        if ($display_hardware) {
        ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Hardware
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <ul class="list-group">
                <?php
                foreach ($hardware as $item) {
                    if (isset($data[$item])) {
                ?>
                    <li class="list-group-item"><img src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/<?php echo $item; ?>.svg"/><a href="#" data-menuitem="<?php echo $item; ?>"><?php echo __(ucfirst($item)); ?></a></li>
                <?php
                    }
                }
                ?>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

        <?php
        // the software categories
        $software = array('software', 'service');
        $display_software = false;
        foreach ($software as $item) {
            if (isset($data[$item])) {
                $display_software = true;
            }
        }
        if ($display_software) {
        ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Software
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <ul class="list-group">
                <?php
                foreach ($software as $item) {
                    if (isset($data[$item])) {
                    ?>
                    <li class="list-group-item"><img src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/<?php echo $item; ?>.svg"/><a href="#" data-menuitem="<?php echo $item; ?>"><?php echo __(ucfirst($item)); ?></a></li>
                    <?php
                    }
                }
                ?>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

        <?php
        // the settings categories
        $software = array('dns', 'netstat', 'log', 'share', 'route', 'user');
        $display_software = false;
        foreach ($software as $item) {
            if (isset($data[$item])) {
                $display_software = true;
            }
        }
        if ($display_software) {
        ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Settings
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                <ul class="list-group">
                <?php
                foreach ($software as $item) {
                    if (isset($data[$item])) {
                ?>
                    <li class="list-group-item"><img src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/<?php echo $item; ?>.svg"/><a href="#" data-menuitem="<?php echo $item; ?>"><?php echo __(ucfirst($item)); ?></a></li>
                <?php
                    }
                }
                ?>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

    </div>
</div>

<div class="col-md-9">


<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Device Details</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="../groups" name="form_summary" id="form_summary">
            <fieldset>
                <div class="row">
                    <div class="col-md-5">
                        <!--
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label"><?php echo __('Name')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="name" placeholder="" value="<?php echo $data['system'][0]->hostname; ?>" >
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label"><?php echo __('Name')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="name" name="name" value="<?php echo $data['system'][0]->hostname; ?>">
                              <span class="input-group-btn">
                                <button id="edit_name" action="edit" class="btn btn-default edit_button" type="button" value="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                        <!--
                        <div class="form-group">
                            <label for="domain" class="col-sm-4 control-label"><?php echo __('Domain')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="domain" placeholder="" value="<?php echo $data['system'][0]->domain; ?>" >
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <label for="domain" class="col-sm-4 control-label"><?php echo __('Domain')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="domain" name="domain" value="<?php echo $data['system'][0]->domain; ?>">
                              <span class="input-group-btn">
                                <button id="edit_domain" action="edit" class="btn btn-default edit_button" type="button" value="domain"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                        <!--
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label"><?php echo __('IP')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="ip" placeholder="" value="<?php echo $data['system'][0]->ip; ?>" >
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <label for="ip" class="col-sm-4 control-label"><?php echo __('IP')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="ip" name="ip" value="<?php echo $data['system'][0]->ip; ?>">
                              <span class="input-group-btn">
                                <button id="edit_ip" action="edit" class="btn btn-default edit_button" type="button" value="ip"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                        <!--
                        <div class="form-group">
                            <label for="type" class="col-sm-4 control-label"><?php echo __('Type')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="type" class="form-control">
                                <?php
                                foreach ($device_types as $key => $value) {
                                    if ($key == $data['system'][0]->type) {
                                        $selected = " selected";
                                    } else {
                                        $selected = "";
                                    }
                                    if ($key != '') {
                                        echo "<option value='$key'$selected>".__("$value")."</option>";
                                    }
                                }
                                ?>
                                </select>
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <label for="type" class="col-sm-4 control-label"><?php echo __('Type')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="type" class="form-control" disabled>
                                <?php
                                foreach ($device_types as $key => $value) {
                                    if ($key == $data['system'][0]->type) {
                                        $selected = " selected";
                                    } else {
                                        $selected = "";
                                    }
                                    if ($key != '') {
                                        echo "<option value='$key'$selected>".__("$value")."</option>";
                                    }
                                }
                                ?>
                                
                                </select>
                                <span class="input-group-btn"><button id="edit_type" action="edit" class="btn btn-default edit_button" type="button" value="type"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
                            </div>
                        </div>

                        <?php
                        if ($data['system'][0]->type == 'computer') {
                        ?>
                        <div class="form-group">
                            <label for="class" class="col-sm-4 control-label"><?php echo __('Class')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="class" class="form-control" disabled>
                                <?php
                                foreach ($device_class as $key => $value) {
                                    if ($key == $data['system'][0]->man_class) {
                                        $selected = " selected";
                                    } else {
                                        $selected = "";
                                    }
                                    echo "<option value='$key'$selected>".__("$value")."</option>";
                                }
                                ?>
                                </select>
                                <span class="input-group-btn"><button id="edit_class" action="edit" class="btn btn-default edit_button" type="button" value="class"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
                            </div>
                        </div>
                        <?php
                        }
                        ?>

                        <!--
                        <div class="form-group">
                            <label for="man_function" class="col-sm-4 control-label"><?php echo __('Function')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="function" placeholder="" value="<?php echo $data['system'][0]->man_function; ?>" >
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <label for="function" class="col-sm-4 control-label"><?php echo __('Function')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="function" name="function" value="<?php echo $data['system'][0]->man_function; ?>">
                              <span class="input-group-btn">
                                <button id="edit_function" action="edit" class="btn btn-default edit_button" type="button" value="function"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="environment" class="col-sm-4 control-label"><?php echo __('Environment')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="environment" class="form-control" disabled>
                                <?php
                                foreach ($device_environment as $key => $value) {
                                    if ($key == $data['system'][0]->man_environment) {
                                        $selected = " selected";
                                    } else {
                                        $selected = "";
                                    }
                                    echo "<option value='$key'$selected>".__("$value")."</option>";
                                }
                                ?>
                                </select>
                                <span class="input-group-btn"><button id="edit_environment" action="edit" class="btn btn-default edit_button" type="button" value="environment"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-4 control-label"><?php echo __('Status')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="status" class="form-control" disabled>
                                <?php
                                foreach ($device_status as $key => $value) {
                                    if ($key == $data['system'][0]->man_status) {
                                        $selected = " selected";
                                    } else {
                                        $selected = "";
                                    }
                                    if ($key != '') {
                                        echo "<option value='$key'$selected>".__("$value")."</option>";
                                    }
                                }
                                ?>
                                </select>
                                <span class="input-group-btn"><button id="edit_status" action="edit" class="btn btn-default edit_button" type="button" value="status"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
                            </div>
                        </div>
                        <!--
                        <div class="form-group">
                            <label for="description" class="col-sm-4 control-label"><?php echo __('Description')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="description" placeholder="" value="<?php echo $data['system'][0]->description; ?>" >
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <label for="man_description" class="col-sm-4 control-label"><?php echo __('Description')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="man_description" name="man_description" value="<?php echo $data['system'][0]->man_description; ?>">
                              <span class="input-group-btn">
                                <button id="edit_man_description" action="edit" class="btn btn-default edit_button" type="button" value="man_description"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                        <!--
                        <div class="form-group">
                            <label for="os_group" class="col-sm-4 control-label"><?php echo __('OS Group')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="os_group" placeholder="" value="<?php echo $data['system'][0]->os_group; ?>" >
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <label for="os_group" class="col-sm-4 control-label"><?php echo __('OS Group')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="os_group" name="os_group" value="<?php echo $data['system'][0]->os_group; ?>">
                              <span class="input-group-btn">
                                <button id="edit_os_group" action="edit" class="btn btn-default edit_button" type="button" value="os_group"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                        <!--
                        <div class="form-group">
                            <label for="os_family" class="col-sm-4 control-label"><?php echo __('OS Family')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="os_family" placeholder="" value="<?php echo $data['system'][0]->os_family; ?>" >
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <label for="os_family" class="col-sm-4 control-label"><?php echo __('OS Family')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="os_family" name="os_family" value="<?php echo $data['system'][0]->os_family; ?>">
                              <span class="input-group-btn">
                                <button id="edit_os_family" action="edit" class="btn btn-default edit_button" type="button" value="os_family"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                        <!--
                        <div class="form-group">
                            <label for="os_name" class="col-sm-4 control-label"><?php echo __('OS Name')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="os_name" placeholder="" value="<?php echo $data['system'][0]->os_name; ?>" >
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <label for="os_name" class="col-sm-4 control-label"><?php echo __('OS Name')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="os_name" name="os_name" value="<?php echo $data['system'][0]->os_name; ?>">
                              <span class="input-group-btn">
                                <button id="edit_os_name" action="edit" class="btn btn-default edit_button" type="button" value="os_name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="manufacturer" class="col-sm-4 control-label"><?php echo __('Manufacturer')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="manufacturer" placeholder="" value="<?php echo $data['system'][0]->manufacturer; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_manufacturer" action="edit" class="btn btn-default edit_button" type="button" value="manufacturer"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="model" class="col-sm-4 control-label"><?php echo __('Model')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="model" placeholder="" value="<?php echo $data['system'][0]->model; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_model" action="edit" class="btn btn-default edit_button" type="button" value="model"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="serial" class="col-sm-4 control-label"><?php echo __('Serial')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="serial" placeholder="" value="<?php echo $data['system'][0]->serial; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_serial" action="edit" class="btn btn-default edit_button" type="button" value="serial"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <?php
                        if ($data['system'][0]->type == 'computer') {
                        ?>
                        <div class="form-group">
                            <label for="form_factor" class="col-sm-4 control-label"><?php echo __('Form Factor')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="form_factor" placeholder="" value="<?php echo $data['system'][0]->form_factor; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_form_factor" action="edit" class="btn btn-default edit_button" type="button" value="form_factor"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="form-group">
                            <label for="uptime" class="col-sm-4 control-label"><?php echo __('Uptime')?></label>
                            <div class="col-sm-8 input-group">
                                <?php
                                if (!isset($data['system'][0]->uptime) or $data['system'][0]->uptime == '') {
                                    $uptime = '';
                                } else {
                                    $uptime = intval($data['system'][0]->uptime/ 86400) . ' days, ' . gmdate("H:i:s", $data['system'][0]->uptime);
                                }
                                ?>
                                <input type="text" class="form-control" id="uptime" placeholder="" value="<?php echo $uptime; ?>" readonly>
                                <?php unset($uptime); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="snmp_oid" class="col-sm-4 control-label"><?php echo __('SNMP OID')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="snmp_oid" placeholder="" value="<?php echo $data['system'][0]->snmp_oid; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_seen" class="col-sm-4 control-label"><?php echo __('Last Seen On')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="last_seen" placeholder="" value="<?php echo $data['system'][0]->last_seen; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_seen_by" class="col-sm-4 control-label"><?php echo __('Last Seen By')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="last_seen_by" placeholder="" value="<?php echo $data['system'][0]->last_seen_by; ?>" readonly>
                            </div>
                        </div>
                        <?php
                        if ($data['system'][0]->type == 'computer') {
                        ?>
                        <div class="form-group">
                            <label for="cluster_name" class="col-sm-4 control-label"><?php echo __('Cluster Name')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="cluster_name" placeholder="" value="<?php echo $data['system'][0]->man_cluster_name; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_cluster_name" action="edit" class="btn btn-default edit_button" type="button" value="cluster_name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (strtolower($data['system'][0]->form_factor) == 'virtual') {
                        ?>
                        <div class="form-group">
                            <label for="vm_host" class="col-sm-4 control-label"><?php echo __('VM Host')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="vm_host" placeholder="" value="<?php #echo $data['system'][0]->vm_server_name; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_vm_host" action="edit" class="btn btn-default edit_button" type="button" value="vm_host"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vm_group" class="col-sm-4 control-label"><?php echo __('VM Group')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="vm_group" placeholder="" value="<?php echo $data['system'][0]->man_vm_group; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_vm_group" action="edit" class="btn btn-default edit_button" type="button" value="vm_group"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (stripos($data['system'][0]->type, 'printer') !== false) {
                        ?>
                        <div class="form-group">
                            <label for="printer_duplex" class="col-sm-4 control-label"><?php echo __('Printer Duplex')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="printer_duplex" placeholder="" value="<?php echo $data['system'][0]->printer_duplex; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="printer_colour" class="col-sm-4 control-label"><?php echo __('Printer Colour')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="printer_colour" placeholder="" value="<?php echo $data['system'][0]->printer_color; ?>" disabled>
                            </div>
                        </div>
                        <?php
                        }
                        ?>

                        <div class="form-group">
                            <label for="oae_manage" class="col-sm-4 control-label"><?php echo __('Manage In Enterprise')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="oae_manage" class="form-control" disabled>
                                <?php
                                if ($data['system'][0]->oae_manage == 'y') {
                                    $selected_y = ' selected';
                                    $selected_n = '';
                                } else {
                                    $selected_y = '';
                                    $selected_n = 'selected';
                                }
                                ?>
                                <option value='y' <?php echo $selected_y; ?>>Yes</option>
                                <option value='n' <?php echo $selected_n; ?>>No</option>
                                </select>
                                <span id="edit_oae_manage" action="edit"  class="input-group-btn"><button id="edit_oae_manage" action="edit" class="btn btn-default edit_button" type="button" value="oae_manage"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-centered">
                        <img class="center-block img-responsive" style="width: 100% \9;" title="" alt="" src="<?php echo base_url()?>device_images/<?php echo $data['system'][0]->icon; ?>.svg" />
                        <br /><br />
                        <!-- <input class="btn btn-success btn-block" type="button" value="Submit" id="submit_button" style="display:none;" onClick="submit();" > -->
                        <!-- <a class="btn btn-primary btn-block" href="#" role="button" id="toggle_link"><?php echo __('Edit'); ?></a> -->
                        <a class="btn btn-default btn-block" href="#" role="button"><?php echo __('Warranty'); ?></a>
                        <a class="btn btn-default btn-block" href="#" role="button"><?php echo __('Downloads'); ?></a>
                        <a class="btn btn-default btn-block" href="#" role="button"><?php echo __('Discover'); ?></a>
                        <a class="btn btn-default btn-block" href="#" role="button"><?php echo __('SNMP'); ?></a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>




<?php
// form style displays
$list = array('bios', 'credentials', 'location', 'motherboard', 'processor', 'purchase', 'windows');
foreach ($list as $item) {
?>
<div id="<?php echo $item; ?>" class="section">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title pull-left"><?php echo __(ucfirst($item)); ?></h3>
        <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="<?php echo $item; ?>"></span>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
        <?php
        if (isset($data[$item])) {
            foreach ($data[$item][0] as $key => $value) {
                if ($key != 'id' and $key != 'system_id' and $key != 'current' and $key != 'first_seen' and $key != 'last_seen') {
                    $show_key = ucfirst(str_replace('_', ' ', $key));
                    ?>
                    <div class="form-group">
                        <label for="<?php echo $item . '_' . $key; ?>" class="col-sm-4 control-label"><?php echo __($show_key)?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="<?php echo $item . '_' . $key; ?>" placeholder="" value="<?php echo $value; ?>" readonly>
                        </div>
                    </div>
                <?php
                }
            }
        }
        ?>
      </div>
    </div>
</div>
<?php
}
?>




<?php
// table style displays
$list = array ('alert_log', 'attachment', 'audit_log', 'change_log', 'custom', 'dns', 'key', 'log', 'memory', 'module', 'monitor', 'optical', 'print_queue', 'route', 'service', 'share', 'software', 'sound', 'user', 'video', 'disk', 'partition');
foreach ($list as $item) {
    if (isset($data[$item]) and count($data[$item]) > 0) {
        ?>
        <div id="<?php echo $item; ?>" class="section">
            <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title pull-left"><?php echo __(ucfirst($item)); ?></h3>
            <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="<?php echo $item; ?>"></span>
            <div class="clearfix"></div>
          </div>
              <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <?php
                            if ($item == 'software' or $item == 'service' or $item == 'disk' or $item == 'partition') {
                                foreach ($attributes[$item] as $key => $value) {
                                    echo "<th>$value</th>";
                                }
                            } else {
                                foreach ($data[$item][0] as $key => $value) {
                                    if ($key != 'id' and $key != 'system_id' and $key != 'current' and $key != 'first_seen' and $key != 'last_seen' and $key != 'ip_padded') {
                                        # some special cases for cisco modules
                                        if ($item == 'module') {
                                            if ($key != 'software_revision' and $key != 'object_id' and $key != 'class') {
                                                echo '<th>' . ucwords(str_replace('_', ' ', $key)) . '</th>';
                                            }
                                        } else {
                                            # everything else
                                            if (is_int($value)) {
                                                echo "<th class=\"text-right\">" . ucwords(str_replace('_', ' ', $key))  . "</php></td>\n";
                                            } else {
                                                echo "<th>" . ucwords(str_replace('_', ' ', $key))  . "</th>\n";
                                            }
                                        }
                                    }
                                }
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($item == 'software' or $item == 'service' or $item == 'disk' or $item == 'partition') {
                            foreach ($data[$item] as $row) {
                                echo "<tr>";
                                foreach ($attributes[$item] as $key => $value) {
                                    if (is_integer($row->$key)) {
                                        echo "<td class=\"text-right\">" . number_format($row->$key) . "</php></td>\n";
                                    } else {
                                        echo "<td>" . $row->$key . "</td>\n";
                                    }
                                }
                                echo "</tr>\n";
                            }
                        } else {
                            foreach ($data[$item] as $row) {
                                echo '<tr>';
                                foreach ($row as $key => $value) {
                                    if ($key != 'id' and $key != 'system_id' and $key != 'current' and $key != 'first_seen' and $key != 'last_seen' and $key != 'ip_padded') {
                                        # some special cases for cisco modules
                                        if ($item == 'module') {
                                            if ($key != 'software_revision' and $key != 'object_id' and $key != 'class') {
                                                if (is_int($value)) {
                                                    echo "<td class=\"text-right\">" . number_format($value) . "</php></td>\n";
                                                } else {
                                                    echo "<td>" . $value . "</php></td>\n";
                                                }
                                            }
                                        } else {
                                            # everything else
                                            if (is_int($value)) {
                                                echo "<td class=\"text-right\">" . number_format($value) . "</php></td>\n";
                                            } else {
                                                echo "<td>" . $value . "</td>\n";
                                            }
                                        }
                                    }
                                }
                                echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
        <?php
    }
}
?>




<?php
// combo style displays
if ($data['system'][0]->type == 'computer') {
    $list = array ('network' => 'ip', 'disk' => 'partition');
    foreach ($list as $item => $sub_item) {
        if (isset($data[$item]) and count($data[$item]) > 0) {
        ?>
            <div id="<?php echo $item; ?>" class="section">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title pull-left"><?php echo __(ucfirst($item)); ?></h3>
                    <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="<?php echo $item; ?>"></span>
                    <div class="clearfix"></div>
                  </div>
                    <div class="panel-body">
                    <?php
                    foreach ($data[$item] as $item_row) {
                        echo '<div class="panel panel-default">';
                        echo '<div class="panel-body">';
                        echo '<div class="row">';
                        $row_attribute_count = intval(count((array)$item_row) / 2);
                        $count = 0;
                        echo '<div class="col-md-6">';
                        foreach ($item_row as $key => $value) {
                            if ($key != 'id' and $key != 'system_id' and $key != 'current' and $key != 'first_seen' and $key != 'last_seen') {
                                $count++;
                                $show_key = ucwords(str_replace('_', ' ', $key));
                                if ($count == $row_attribute_count) {
                                    echo "</div><div class='col-md-6'>\n";
                                }
                                ?>
                                <div class="form-group">
                                    <label for="<?php echo $item . '_' . $key; ?>" class="col-sm-4 control-label"><?php echo __($show_key)?></label>
                                    <div class="col-sm-8 input-group">
                                        <input type="text" class="form-control" id="<?php echo $item . '_' . $key; ?>" placeholder="" value="<?php echo $value; ?>" readonly>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                        echo '</div>'; # end of class = md-col-6
                        echo '</div>'; # end of class = row
                        ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <?php
                                        foreach ($data[$sub_item][0] as $sub_key => $sub_value) {
                                            if ($sub_key != 'id' and $sub_key != 'system_id' and $sub_key != 'current' and $sub_key != 'first_seen' and $sub_key != 'last_seen' and $sub_key != 'ip_padded') {
                                                ?>
                                                <th><?php echo ucfirst(str_replace('_', ' ', $sub_key)); ?></th>
                                            <?php
                                            }
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data[$sub_item] as $sub_row) {
                                        if (($item == 'network' and $item_row->net_index == $sub_row->net_index) or ($item == 'disk' and $item_row->hard_drive_index == $sub_row->hard_drive_index)) {
                                        ?>
                                            <tr>
                                                <?php
                                                foreach ($sub_row as $sub_key => $sub_value) {
                                                    if ($sub_key != 'id' and $sub_key != 'system_id' and $sub_key != 'current' and $sub_key != 'first_seen' and $sub_key != 'last_seen' and $sub_key != 'ip_padded') {
                                                        if (is_int($sub_value)) {
                                                            echo "<td>" . number_format($sub_value) . "</php></td>\n";
                                                        } else {
                                                            echo "<td>" . $sub_value . "</php></td>\n";
                                                        }
                                                    }
                                                }
                                                ?>
                                            </tr>
                                        <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                            </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        <?php
        }
    }
} else {
    // just do the network interfaces
    $item = 'network';
    if (isset($data[$item]) and count($data[$item]) > 0) {
        ?>
        <div id="<?php echo $item; ?>" class="section">
            <div class="panel panel-default">
              <div class="panel-heading"><h3 class="panel-title"><?php echo __('Network Interfaces'); ?></h3></div>
              <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?php echo __('Index'); ?></th>
                            <th><?php echo __('MAC Address'); ?></th>
                            <th><?php echo __('Connection ID'); ?></th>
                            <th><?php echo __('Description'); ?></th>
                            <th><?php echo __('Alias'); ?></th>
                            <th><?php echo __('Type'); ?></th>
                            <th><?php echo __('Operational Status'); ?></th>
                            <th><?php echo __('Admin Status'); ?></th>
                            <th><?php echo __('Speed'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data[$item] as $row) {
                            if (intval($row->speed) < 1000) {
                                $speed = number_format(intval($row->speed))." b/s";
                            }
                            if (intval($row->speed) >= 1000 and intval($row->speed) < 1000000) {
                                $speed = number_format(intval($row->speed / 1000))." Kb/s";
                            }
                            if (intval($row->speed) >= 1000000 and intval($row->speed) < 1000000000) {
                                $speed = number_format(intval($row->speed / 1000 / 1000))." Mb/s";
                            }
                            if (intval($row->speed) >= 1000000000) {
                                $speed = number_format(intval($row->speed / 1000 / 1000 / 1000))." Gb/s";
                            }

                            echo '<tr>';
                            echo '<td>' . $row->net_index . '</td>';
                            echo '<td>' . $row->mac . '</td>';
                            echo '<td>' . $row->connection . '</td>';
                            echo '<td>' . $row->description . '</td>';
                            echo '<td>' . $row->alias . '</td>';
                            echo '<td>' . $row->type . '</td>';
                            echo '<td>' . $row->ip_enabled . '</td>';
                            echo '<td>' . $row->ifadminstatus . '</td>';
                            echo '<td>' . $speed . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
              </div>
            <?php
            if (isset($data['ip']) and count($data['ip']) > 0) {
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th><?php echo __('Index'); ?></th>
                            <th><?php echo __('MAC Address'); ?></th>
                            <th><?php echo __('IP Address'); ?></th>
                            <th><?php echo __('Net Mask'); ?></th>
                            <th><?php echo __('CIDR'); ?></th>
                            <th><?php echo __('Network'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data['ip'] as $row) {
                            echo '<tr>';
                            echo '<td>' . $row->net_index . '</td>';
                            echo '<td>' . $row->mac . '</td>';
                            echo '<td>' . $row->ip . '</td>';
                            echo '<td>' . $row->netmask . '</td>';
                            echo '<td>' . $row->cidr . '</td>';
                            echo '<td>' . $row->network . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            <?php
            } ?>
            </div>
        </div>
    <?php
    }
}
?>
</div>
</div>
<?php exit(); ?>