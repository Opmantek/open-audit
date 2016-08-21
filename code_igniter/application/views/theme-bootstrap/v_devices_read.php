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
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (php_uname('s') != 'Windows NT') {
  include(str_replace('views/theme-bootstrap/v_devices_read.php', 'controllers/include_device_types.php', __FILE__));
} else {
  include(str_replace('views\\theme-bootstrap\\v_devices_read.php', 'controllers\\include_device_types.php', __FILE__));
}

# put our linked and data JSON objects into the $data array
# ensure each JSON include is in it's own $type key in the $data array
unset($data);
$data = array();
if (!empty($this->response->data[0]->attributes)) {
  $data['system'] = $this->response->data[0]->attributes;
} else {
  echo "No data for this ID.";
  exit();
}
foreach ($this->response->included as $item) {
  $data[$item->type][] = $item->attributes;
}
if (empty($data['additional_fields'])) {
  $data['additional_fields'] = array();
}

$software_odbc_driver = false;
$software_update = false;
if ( ! empty($data['software'])) {
  foreach ($data['software'] as $software) {
    if ($software->type == 'odbc driver') {
      $software_odbc = true;
    }
    if ($software->type == 'update') {
      $software_update = true;
    }
  }
}

if (strtolower($data['system']->os_group) == 'windows') {
    $attributes['software'] = array('name' => 'Name', 'version' => 'Version', 'installed_on' => 'Installed On', 'installed_by' => 'Installed By', 'first_seen' => 'First Seen', 'location' => 'Location', 'type' => 'Type');
    $attributes['service'] = array('name' => 'Name', 'description' => 'Description', 'executable' => 'Executable', 'user' => 'User', 'start_mode' => 'Start Mode', 'state' => 'State');
    $attributes['disk'] = array('manufacturer' => 'Manufacturer', 'model' => 'Model', 'serial' => 'Serial', 'hard_drive_index' => 'Index', 'interface_type' => 'Interface', 'partition_count' => 'Partitions', 'size' => 'Size', 'status' => 'Status', 'firmware' => 'Firmware');
    $attributes['partition'] = array('mount_type' => 'Type', 'mount_point' => 'Mount Point', 'device' => 'Device', 'hard_drive_index' => 'Disk Index', 'format' => 'Format', 'size' => 'Size', 'used' => 'Used', 'free' => 'Free', 'type' => 'Type');
    $attributes['file'] = array('full_name' => 'Full Name', 'size' => 'Size', 'last_changed' => 'Last Changed', 'permission' => 'Permission', 'owner' => 'Owner');
    $attributes['user'] = array('name' => 'Name', 'sid' => 'Sid', 'full_name' => 'Full Name', 'type' => 'Type', 'domain' => 'Domain', 'status' => 'Status', 'password_changeable' => 'Password Changeable', 'password_expires' => 'Password Expires', 'password_required' => 'Password Required');
} else {
    $attributes['software'] = array('name' => 'Name', 'version' => 'Version', 'first_seen' => 'First Seen');
    $attributes['service'] = array('name' => 'Name', 'description' => 'Description', 'start_mode' => 'Start Mode', 'state' => 'State');
    $attributes['disk'] = array('manufacturer' => 'Manufacturer', 'model' => 'Model', 'model_family' => 'Family', 'serial' => 'Serial', 'hard_drive_index' => 'Index', 'interface_type' => 'Interface', 'partition_count' => 'Partitions', 'size' => 'Size', 'status' => 'Status', 'firmware' => 'Firmware');
    $attributes['partition'] = array('mount_type' => 'Type', 'mount_point' => 'Mount Point', 'device' => 'Device', 'hard_drive_index' => 'Disk Index', 'format' => 'Format', 'size' => 'Size', 'used' => 'Used', 'free' => 'Free', 'type' => 'Type');
    $attributes['file'] = array('full_name' => 'Full Name', 'size' => 'Size', 'last_changed' => 'Last Changed', 'permission' => 'Permission', 'owner' => 'Owner', 'group' => 'Group');
    $attributes['user'] = array('sid' => 'Sid', 'name' => 'Name', 'full_name' => 'Description', 'type' => 'Type');
}
$attributes['route'] = array('destination' => 'Destination', 'mask' => 'Mask', 'metric' => 'Metric', 'next_hop' => 'Next Hop', 'protocol' => 'Protocol', 'type' => 'type');
if ($data['system']->type != 'computer') {
  $attributes['disk'] = array('model' => 'Model', 'serial' => 'Serial', 'hard_drive_index' => 'Index', 'interface_type' => 'Interface', 'size' => 'Size', 'status' => 'Status');
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
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/credentials.svg"/><a href="#" data-menuitem="credentials"><?php echo __('Credentials'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/purchase.svg"/><a href="#" data-menuitem="purchase"><?php echo __('Purchase'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/location.svg"/><a href="#" data-menuitem="location"><?php echo __('Location / Contact'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/custom.svg"/><a href="#" data-menuitem="additional_fields"><?php echo __('Additional Fields'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/attachments.svg"/><a href="#" data-menuitem="attachment"><?php echo __('Attachments'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/audit_log.svg"/><a href="#" data-menuitem="audit_log"><?php echo __('Audit Log'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/change_log.svg"/><a href="#" data-menuitem="change_log"><?php echo __('Change Log'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/edit_log.svg"/><a href="#" data-menuitem="edit_log"><?php echo __('Edit Log'); ?></a></li>
                <?php if (isset($data['windows'])) { ?>
                   <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/windows.svg"/><a href="#" data-menuitem="windows"><?php echo __('Windows'); ?></a></li>
                <?php } ?>
                <?php if ($data['system']->type != 'computer' and ! empty($data['network'])) { ?>
                   <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/network.svg"/><a href="#" data-menuitem="network"><?php echo __('Network'); ?></a></li>
                <?php } ?>
                <?php if ($data['system']->type != 'computer' and ! empty($data['module'])) { ?>
                   <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/module.svg"/><a href="#" data-menuitem="module"><?php echo __('Module'); ?></a></li>
                <?php } ?>
              </ul>
          </div>
        </div>
      </div>
        <?php
        // the hardware categories
        $hardware = array('bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'network', 'optical', 'processor', 'san', 'sound', 'video');
        $display_hardware = false;
        foreach ($hardware as $item) {
            if (!empty($data[$item])) {
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
                    <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/<?php echo $item; ?>.svg"/><a href="#" data-menuitem="<?php echo $item; ?>"><?php echo __(ucfirst($item)); ?></a></li>
                <?php
                    }
                }
                ?>
                </ul>
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
                    <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/<?php echo $item; ?>.svg"/><a href="#" data-menuitem="<?php echo $item; ?>"><?php echo __(ucfirst($item)); ?></a></li>
                    <?php
                    }
                }
                if ($software_odbc) { ?>
                  <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/software_odbc_driver.svg"/><a href="#" data-menuitem="software_odbc_driver">Software ODBC Driver</a></li>
                <?php }
                if ($software_update) { ?>
                  <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/software_update.svg"/><a href="#" data-menuitem="software_update">Software Updates</a></li>
                <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

        <?php
        // the settings categories
        $software = array('dns', 'file', 'netstat', 'nmap', 'log', 'share', 'print_queue', 'route', 'user', 'user_group', 'variable', 'vm');
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
                    <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/<?php echo $item; ?>.svg"/><a href="#" data-menuitem="<?php echo $item; ?>"><?php echo __(ucwords(str_replace('_', ' ', $item))); ?></a></li>
                <?php
                    }
                }
                ?>
                </ul>
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
        <form class="form-horizontal" name="form_summary" id="form_summary">
            <fieldset>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label"><?php echo __('Name')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="name" name="name" value="<?php echo $data['system']->name; ?>">
                              <span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="hostname" class="col-sm-4 control-label"><?php echo __('Hostame')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="hostname" name="hostname" value="<?php echo $data['system']->hostname; ?>">
                              <span class="input-group-btn">
                                <button id="edit_hostname" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="hostname"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="domain" class="col-sm-4 control-label"><?php echo __('Domain')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="domain" name="domain" value="<?php echo $data['system']->domain; ?>">
                              <span class="input-group-btn">
                                <button id="edit_domain" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="domain"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dns_hostname" class="col-sm-4 control-label"><?php echo __('DNS Hostame')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="dns_hostname" name="dns_hostname" value="<?php echo $data['system']->dns_hostname; ?>">
                              <span class="input-group-btn">
                                <button id="edit_dns_hostname" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="dns_hostname"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dns_domain" class="col-sm-4 control-label"><?php echo __('DNS Domain')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="dns_domain" name="dns_domain" value="<?php echo $data['system']->dns_domain; ?>">
                              <span class="input-group-btn">
                                <button id="edit_dns_domain" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="dns_domain"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dns_domain" class="col-sm-4 control-label"><?php echo __('FQDN')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="fqdn" name="fqdn" value="<?php echo $data['system']->fqdn; ?>">
                              <span class="input-group-btn">
                                <button id="edit_fqdn" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="fqdn"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ip" class="col-sm-4 control-label"><?php echo __('IP')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="ip" name="ip" value="<?php echo $data['system']->ip; ?>">
                              <span class="input-group-btn">
                                <button id="edit_ip" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="ip"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="type" class="col-sm-4 control-label"><?php echo __('Type')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="type" class="form-control" disabled>
                                <?php
                                foreach ($device_types as $key => $value) {
                                    if ($key == $data['system']->type) {
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
                                <span class="input-group-btn"><button id="edit_type" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="type"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
                            </div>
                        </div>

                        <?php
                        if ($data['system']->type == 'computer') {
                        ?>
                        <div class="form-group">
                            <label for="class" class="col-sm-4 control-label"><?php echo __('Class')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="class" class="form-control" disabled>
                                <?php
                                foreach ($device_class as $key => $value) {
                                    if ($key == $data['system']->class) {
                                        $selected = " selected";
                                    } else {
                                        $selected = "";
                                    }
                                    echo "<option value='$key'$selected>".__("$value")."</option>";
                                }
                                ?>
                                </select>
                                <span class="input-group-btn"><button id="edit_class" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="class"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
                            </div>
                        </div>
                        <?php
                        }
                        ?>

                        <div class="form-group">
                            <label for="function" class="col-sm-4 control-label"><?php echo __('Function')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="function" name="function" value="<?php echo $data['system']->function; ?>">
                              <span class="input-group-btn">
                                <button id="edit_function" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="function"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="environment" class="col-sm-4 control-label"><?php echo __('Environment')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="environment" class="form-control" disabled>
                                <?php
                                foreach ($device_environment as $key => $value) {
                                    if ($key == $data['system']->environment) {
                                        $selected = " selected";
                                    } else {
                                        $selected = "";
                                    }
                                    echo "<option value='$key'$selected>".__("$value")."</option>";
                                }
                                ?>
                                </select>
                                <span class="input-group-btn"><button id="edit_environment" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="environment"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-4 control-label"><?php echo __('Status')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="status" class="form-control" disabled>
                                <?php
                                foreach ($device_status as $key => $value) {
                                    if ($key == $data['system']->status) {
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
                                <span class="input-group-btn"><button id="edit_status" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="status"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-4 control-label"><?php echo __('Description')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="description" name="description" value="<?php echo $data['system']->description; ?>">
                              <span class="input-group-btn">
                                <button id="edit_description" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="description"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="os_group" class="col-sm-4 control-label"><?php echo __('OS Group')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="os_group" name="os_group" value="<?php echo $data['system']->os_group; ?>">
                              <span class="input-group-btn">
                                <button id="edit_os_group" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="os_group"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="os_family" class="col-sm-4 control-label"><?php echo __('OS Family')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="os_family" name="os_family" value="<?php echo $data['system']->os_family; ?>">
                              <span class="input-group-btn">
                                <button id="edit_os_family" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="os_family"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="os_name" class="col-sm-4 control-label"><?php echo __('OS Name')?></label>
                            <div class="input-group">
                              <input disabled type="text" class="form-control" placeholder="" id="os_name" name="os_name" value="<?php echo $data['system']->os_name; ?>">
                              <span class="input-group-btn">
                                <button id="edit_os_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="os_name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
<?php insert_additional_fields('system', $data['additional_fields']); ?>

                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="manufacturer" class="col-sm-4 control-label"><?php echo __('Manufacturer')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="manufacturer" placeholder="" value="<?php echo $data['system']->manufacturer; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_manufacturer" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="manufacturer"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="model" class="col-sm-4 control-label"><?php echo __('Model')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="model" placeholder="" value="<?php echo $data['system']->model; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_model" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="model"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="serial" class="col-sm-4 control-label"><?php echo __('Serial')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="serial" placeholder="" value="<?php echo $data['system']->serial; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_serial" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="serial"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <?php
                        if ($data['system']->type == 'computer') {
                        ?>
                        <div class="form-group">
                            <label for="form_factor" class="col-sm-4 control-label"><?php echo __('Form Factor')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="form_factor" placeholder="" value="<?php echo $data['system']->form_factor; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_form_factor" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="form_factor"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
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
                                if (!isset($data['system']->uptime) or $data['system']->uptime == '') {
                                    $uptime = '';
                                } else {
                                    $uptime = intval($data['system']->uptime/ 86400) . ' days, ' . gmdate("H:i:s", $data['system']->uptime);
                                }
                                ?>
                                <input type="text" class="form-control" id="uptime" placeholder="" value="<?php echo $uptime; ?>" readonly>
                                <?php unset($uptime); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="snmp_oid" class="col-sm-4 control-label"><?php echo __('SNMP OID')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="snmp_oid" placeholder="" value="<?php echo $data['system']->snmp_oid; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_seen" class="col-sm-4 control-label"><?php echo __('Last Seen On')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="last_seen" placeholder="" value="<?php echo $data['system']->last_seen; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_seen_by" class="col-sm-4 control-label"><?php echo __('Last Seen By')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="last_seen_by" placeholder="" value="<?php echo $data['system']->last_seen_by; ?>" readonly>
                            </div>
                        </div>
                        <?php
                        if ($data['system']->type == 'computer') {
                        ?>
                        <div class="form-group">
                            <label for="cluster_name" class="col-sm-4 control-label"><?php echo __('Cluster Name')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="cluster_name" placeholder="" value="<?php echo $data['system']->cluster_name; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_cluster_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="cluster_name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (strtolower($data['system']->form_factor) == 'virtual') {
                        ?>
                        <div class="form-group">
                            <label for="vm_host" class="col-sm-4 control-label"><?php echo __('VM Host')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="vm_host" placeholder="" value="<?php #echo $data['system']->vm_server_name; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_vm_host" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="vm_host"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vm_group" class="col-sm-4 control-label"><?php echo __('VM Group')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="vm_group" placeholder="" value="<?php echo $data['system']->vm_group; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_vm_group" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="vm_group"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        if (stripos($data['system']->type, 'printer') !== false) {
                        ?>
                        <div class="form-group">
                            <label for="printer_duplex" class="col-sm-4 control-label"><?php echo __('Printer Duplex')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="printer_duplex" placeholder="" value="<?php echo $data['system']->printer_duplex; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="printer_colour" class="col-sm-4 control-label"><?php echo __('Printer Colour')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="printer_colour" placeholder="" value="<?php echo $data['system']->printer_color; ?>" disabled>
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
                                if ($data['system']->oae_manage == 'y') {
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
                                <span class="input-group-btn"><button id="edit_oae_manage" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="oae_manage"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-centered">
                        <img alt="" class="center-block img-responsive" style="width: 50%;" title="" src="<?php echo base_url()?>device_images/<?php echo $data['system']->icon; ?>.svg" />
                        <br /><br />
                        <!--
                        <a class="btn btn-default btn-block" href="#" role="button"><?php echo __('Warranty'); ?></a>
                        <a class="btn btn-default btn-block" href="#" role="button"><?php echo __('Downloads'); ?></a>
                        -->
                        <a class="btn btn-default btn-block" href="<?php echo $this->response->links->self; ?>?sub_resource=credential&action=create" role="button"><?php echo __('Add Credentials'); ?></a>
                        <a class="btn btn-default btn-block" href="<?php echo $this->config->config['oa_web_folder']; ?>/index.php/discovery/discover_subnet/device/<?php echo $data['system']->id; ?>" role="button"><?php echo __('Discover'); ?></a>
                        <a class="btn btn-default btn-block" href="#" onclick="window.open('<?php echo $this->config->config['oa_web_folder']; ?>/index.php/admin_system/system_snmp/<?php echo $data['system']->id; ?>', 'SNMP Scan', 'height=300,left=100,location=no,menubar=no,resizable=no,scrollbars=no,status=no,titlebar=no,toolbar=no,top=100,width=400');"><?php echo __('SNMP Scan'); ?></a>

                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

</div>
</div>

<?php
// form style displays
$list = array('bios', 'motherboard', 'processor', 'purchase', 'windows');
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
                    $label = ucfirst(str_replace('_', ' ', $key));
                    if ($item == 'purchase') { ?>
                        <div class="form-group">
                            <label for="<?php echo $key; ?>" class="col-sm-4 control-label"><?php echo __($label)?></label>
                            <div class="col-sm-8 input-group">
                              <input type="text" class="form-control" id="<?php echo $key; ?>" placeholder="-" value="<?php echo $value; ?>" disabled>
                              <span class="input-group-btn">
                                <button id="edit_<?php echo $key; ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $key; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                              </span>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="form-group">
                            <label for="<?php echo $item . '_' . $key; ?>" class="col-sm-4 control-label"><?php echo __($label)?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="<?php echo $item . '_' . $key; ?>" placeholder="" value="<?php echo $value; ?>" readonly>
                            </div>
                        </div>
                    <?php } ?>
                <?php
                }
            }
        }
        ?>
        <?php insert_additional_fields($item, $data['additional_fields']); ?>
      </div>
    </div>
</div>
<?php
}
?>




<?php
// credentials
if (isset($data['credential']) and count($data['credential']) > 0) { ?>
    <div id="credentials" class="section">
        <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title pull-left">Credentials</h3>
        <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="credentials"></span>
        <div class="clearfix"></div>
      </div>
          <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Description</th>
                        <td style="text-align:center;">Edit</td>
                        <td style="text-align:center;">Delete</td>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($data['credential'] as $item) { ?>
                <tr>
                  <td><?php echo htmlentities($item->id); ?></td>
                  <td><?php echo htmlentities($item->type); ?></td>
                  <td><?php echo htmlentities($item->name); ?></td>
                  <td><?php echo htmlentities($item->description); ?></td>
                  <td style="text-align:center;"><?php echo htmlentities($item->id); ?></td>
                  <td style="text-align:center;"><button type="button" class="btn btn-sm btn-danger" aria-label="Left Align" ><span class="glyphicon glyphicon-trash subresource_delete_link" data-sub-resource-id="<?php echo intval($item->id); ?>" data-sub-resource="credential" data-name="<?php echo htmlentities($item->name); ?>" aria-hidden="true"></span></button></td>
                <?php } ?>
                </tbody>
            </table>
          </div>
        </div>
    </div>
<?php } ?>


<?php
// additional fields
if (isset($data['additional_fields']) and count($data['additional_fields']) > 0) { ?>
    <div id="additional_fields" class="section">
        <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title pull-left">Additional Fields</h3>
        <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="additional_fields"></span>
        <div class="clearfix"></div>
      </div>
          <div class="panel-body">
              <?php insert_additional_fields('', $data['additional_fields']); ?>
          </div>
        </div>
    </div>
<?php } ?>




<div id="location" class="section"><!-- 0 -->
	<div class="row"><!-- 1 -->
		<div class="col-md-6"><!-- 2 -->
			<div class="panel panel-default"><!-- 3 -->
				<div class="panel-heading"><!-- 4 -->
					<h3 class="panel-title pull-left">Location Specific Details</h3>
					<span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="location"></span>
					<div class="clearfix"></div>
				</div><!-- 4 -->
				<div class="panel-body"><!-- 4 -->
					<?php
						foreach ($data['locations'] as $location) {
							if ($location->id == $data['system']->location_id) {
                foreach ($location as $key => $value) {
    							if ($key == 'name') {
    								$data['location'][0]->location_name = $value;
    							}
    							$label = ucwords($key);
					?><div class="form-group"><!-- 5 -->
					<label for="included_location_<?php echo $key; ?>" class="col-sm-4 control-label"><?php echo __($label)?></label>
					<div class="col-sm-8 input-group">
						<input type="text" class="form-control" id="included_location_<?php echo $key; ?>" placeholder="" value="<?php echo $value; ?>" disabled>
					</div>
				</div><!-- 5 -->
				<?php } } } ?></div><!-- 4 -->
			</div><!-- 3 -->
		</div><!-- 2 -->
		<div class="col-md-6"><!-- 2 -->
			<div class="panel panel-default"><!-- 3 -->
				<div class="panel-heading"><!-- 4 -->
					<h3 class="panel-title pull-left">Device Specific Details</h3>
					<span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="location"></span>
					<div class="clearfix"></div>
				</div><!-- 4 -->
				<div class="panel-body"><!-- 4 -->
					<?php
					if (isset($data['location'])) {
						foreach ($data['location'][0] as $key => $value) {
								$label = ucwords(str_replace('location_', '', $key));
								$label = ucwords(str_replace('Rack_', 'Rack ', $label));
								if ($key == 'location_id') {
									$key = 'dummy_location_id';
								}
					?><div class="form-group"><!-- 5 -->
					<?php if ($key != 'location_name') {
					?><label for="<?php echo $key; ?>" class="col-sm-4 control-label"><?php echo __($label)?></label>
					<div class="col-sm-8 input-group"><!-- 6 -->
						<input type="text" class="form-control" id="<?php echo $key; ?>" placeholder="" value="<?php echo $value; ?>" disabled>
						<?php
						if ($key != 'dummy_location_id') {
						?><span class="input-group-btn">
							<button id="edit_<?php echo $key; ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $key; ?>">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
							</button>
						</span>
						<?php }
						} else {
						?><label for="location_id" class="col-sm-4 control-label"><?php echo __($label)?></label>
							<div class="col-sm-8 input-group"><!-- 6 -->
							<select id="location_id" class="form-control" disabled><?php
							foreach ($this->response->included as $included) {
								if ($included->type == 'locations') {
									if ($data['location'][0]->location_id == $included->id) {
										$selected = " selected";
									} else {
										$selected = "";
									}
									echo "								<option value='" . $included->id . "'" . $selected . ">" . __($included->attributes->name) . "</option>\n";
								}
							}
							?>
						</select>
						<span class="input-group-btn">
							<button id="edit_location_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="location_id">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
							</button>
						</span>
					<?php } ?>
					</div><!-- 6 -->
				</div><!-- 5 -->
				<?php } }
				insert_additional_fields($item, $data['additional_fields']);
				?></div><!-- 4 -->
			</div><!-- 3 -->
		</div><!-- 2 -->

    <div class="col-md-6"><!-- 2 -->
      <div class="panel panel-default"><!-- 3 -->
        <div class="panel-heading"><!-- 4 -->
          <h3 class="panel-title pull-left">Owner Details</h3>
          <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="location"></span>
          <div class="clearfix"></div>
        </div><!-- 4 -->
        <div class="panel-body"><!-- 4 -->
          <div class="form-group"><!-- 5 -->
          <label for="owner" class="col-sm-4 control-label">Owner</label>
          <div class="col-sm-8 input-group"><!-- 6 -->
            <input type="text" class="form-control" id="owner" placeholder="" value="<?php echo $data['system']->owner; ?>" disabled>
            <span class="input-group-btn">
              <button id="edit_owner" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="owner">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
              </button>
            </span>
          </div><!-- 6 -->
        </div><!-- 5 -->
          <div class="form-group"><!-- 5 -->
          <label for="owner" class="col-sm-4 control-label">Comments</label>
          <div class="col-sm-8 input-group"><!-- 6 -->
            <input type="text" class="form-control" id="comments" placeholder="" value="<?php echo $data['system']->comments; ?>" disabled>
            <span class="input-group-btn">
              <button id="edit_comments" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="comments">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
              </button>
            </span>
          </div><!-- 6 -->
        </div><!-- 5 -->
        </div><!-- 4 -->
      </div><!-- 3 -->
    </div><!-- 2 -->


	</div><!-- 1 -->
</div><!-- 0 -->




<?php
// software installed / odbc / updates
$list = array('', 'odbc driver', 'update');
foreach ($list as $item) {
    if (isset($data['software']) and count($data['software']) > 0) {
      if ($item == '') {
        $id = 'software';
      } else {
        $id = 'software_';
      }
        ?>
        <div id="<?php echo $id . str_replace(' ', '_', $item); ?>" class="section">
            <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title pull-left">Software <?php echo __(ucwords($item)); ?></h3>
            <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="software_<?php echo $item; ?>"></span>
            <div class="clearfix"></div>
          </div>
              <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                          <?php
                          foreach ($attributes['software'] as $key => $value) {
                              echo "<th>$value</th>";
                          }
                          ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          foreach ($data['software'] as $row) {
                            if ($row->type == $item) {
                              echo "<tr>";
                              foreach ($attributes['software'] as $key => $value) {
                                  if (is_integer($row->$key)) {
                                      echo "<td class=\"text-right\">" . number_format($row->$key) . "</td>\n";
                                  } else {
                                      echo "<td>" . $row->$key . "</td>\n";
                                  }
                              }
                              echo "</tr>\n";
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
// table style displays
#$list = array ('alert_log', 'attachment', 'audit_log', 'change_log', 'custom', 'dns', 'file', 'key', 'log', 'memory', 'module', 'monitor', 'netstat', 'optical', 'print_queue', 'route', 'san', 'service', 'share', 'software', 'sound', 'user', 'video', 'disk', 'partition');
$list = array ('alert_log', 'attachment', 'audit_log', 'change_log', 'edit_log', 'dns', 'file', 'key', 'log', 'memory', 'module', 'monitor', 'netstat', 'nmap', 'optical', 'print_queue', 'route', 'san', 'service', 'share', 'sound', 'user', 'user_group', 'video', 'variable', 'vm');
if ($data['system']->type != 'computer' and !empty($data['disk'])) {
  $list[] = 'disk';
}
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
                            if ($item == 'service' or $item == 'disk' or $item == 'partition' or $item == 'file' or $item == 'user' or $item == 'route') {
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
                                                echo "<th class=\"text-right\">" . ucwords(str_replace('_', ' ', $key))  . "</th>\n";
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
                        if ($item == 'service' or $item == 'disk' or $item == 'partition' or $item == 'file' or $item == 'user' or $item == 'route') {
                            foreach ($data[$item] as $row) {
                                echo "<tr>";
                                foreach ($attributes[$item] as $key => $value) {
                                    if (is_integer($row->$key)) {
                                        echo "<td class=\"text-right\">" . number_format($row->$key) . "</td>\n";
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
                                                    echo "<td class=\"text-right\">" . number_format($value) . "</td>\n";
                                                } else {
                                                    echo "<td>" . $value . "</td>\n";
                                                }
                                            }
                                        } elseif ($item == 'vm'and $key == 'guest_system_id') {
                                          if ( ! empty($value)) {
                                            echo "<td class=\"text-center\"><a href=\"#\" class=\"btn btn-sm btn-success\">" . $value . "</a></td>\n";
                                          } else {
                                            echo "<td></td>\n";
                                          }
                                        } else {
                                            # everything else
                                            if (is_int($value)) {
                                                echo "<td class=\"text-right\">" . number_format($value) . "</td>\n";
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
              <?php insert_additional_fields($item, $data['additional_fields']); ?>
            </div>
        </div>
        <?php
    }
}
?>




<?php
// combo style displays
if ($data['system']->type == 'computer') {
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
                        $row_attribute_count = intval(count((array)$item_row) / 2)-1;
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
                        if (!empty($data[$sub_item]) and count($data[$sub_item]) > 0) {
                        ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <?php
                                        if ($sub_item == 'partition') {
                                          echo "<th>Graph</th>\n";
                                        }
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
                                        if (($item == 'network' and $item_row->net_index == $sub_row->net_index) or ($item == 'disk' and $item_row->hard_drive_index == $sub_row->hard_drive_index)) { ?>
                                            <tr>
                                                <?php
                                                foreach ($sub_row as $sub_key => $sub_value) {
                                                    if ($sub_item == 'partition' and $sub_key == 'id') {
                                                      echo '<td><a href="' . base_url() . 'index.php/main/disk_graph/' . $data['system']->id . '/' . $sub_value . '" class="btn btn-default" role="button"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span></a></td>';
                                                    }
                                                    if ($sub_key != 'id' and $sub_key != 'system_id' and $sub_key != 'current' and $sub_key != 'first_seen' and $sub_key != 'last_seen' and $sub_key != 'ip_padded') {
                                                        if (is_int($sub_value)) {
                                                            echo "<td>" . number_format($sub_value) . "</td>\n";
                                                        } else {
                                                            echo "<td>" . $sub_value . "</td>\n";
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
                            <?php }
                            ?>
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
              <div class="panel-heading">
                <h3 class="panel-title pull-left"><?php echo __('Network Interfaces'); ?></h3>
                <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="<?php echo $item; ?>"></span>
                <div class="clearfix"></div>
              </div>
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

<?php
function insert_additional_fields($section = '', $additional_fields)
{
    foreach ($additional_fields as $field) {
        if ($field->{'additional_field.placement'} == $section or $section == '') {
            $name = $field->{'additional_field.name'};
            if ($field->{'additional_field.type'} == 'varchar') {
                echo '                    <div class="form-group">
                    <label for="' . $name . '" class="col-sm-4 control-label">' . $field->{'additional_field.name'} . '</label>
                    <div class="input-group">
                      <input disabled type="text" class="form-control" placeholder="" id="' . $name . '" name="' . $name . '" value="' . $field->{'value'} . '">
                      <span class="input-group-btn">
                        <button id="edit_' . $name . '" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="' . $name . '"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                      </span>
                    </div>
                </div>' . "\n";
            }
            if ($field->{'additional_field.type'} == 'list') {
                echo '                    <div class="form-group">
                    <label for="' . $name . '" class="col-sm-4 control-label">' . $field->{'additional_field.name'} . '</label>
                    <div class="col-sm-8 input-group">
                        <select id="' . $name . '" class="form-control" disabled>' . "\n";
                        if ($field->{'value'} == '') {
                          echo "                          <option value='' > </option>\n";
                        }
                        foreach (explode(',', $field->{'additional_field.values'}) as $key => $value) {
                            if ($field->{'value'} == $value) {
                                $selected = " selected";
                            } else {
                                $selected = "";
                            }
                            echo "                          <option value='$value'$selected>".__("$value")."</option>\n";
                        }

                        echo '                        </select>
                        <span class="input-group-btn">
                          <button id="edit_' . $name . '" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="' . $name . '">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                          </button>
                        </span>
                    </div>
                </div>' . "\n";
            }
        }
    }
}
?>