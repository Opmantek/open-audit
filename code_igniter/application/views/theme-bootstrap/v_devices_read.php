
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
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.1.1
* @link      http://www.open-audit.org
 */

# Check and set the $edit variable
if ($this->m_users->get_user_permission('', 'devices', 'u')) {
    $edit = true;
} else {
    $edit = false;
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

if (empty($data['fields'])) {
    $data['fields'] = array();
}

$software_odbc_driver = false;
$software_update = false;
if (!empty($data['software'])) {
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

$data['mount_point'] = array();
if (!empty($data['partition'])) {
    $x = count($data['partition']);
    for ($i=0; $i < $x; $i++) {
        if ($data['partition'][$i]->mount_type == 'mount point') {
            unset($data['partition'][$i]->partition_disk_index);
            unset($data['partition'][$i]->hard_drive_index);
            unset($data['partition'][$i]->serial);
            unset($data['partition'][$i]->device);
            unset($data['partition'][$i]->bootable);
            $data['mount_point'][] = $data['partition'][$i];
            unset($data['partition'][$i]);
        }
    }
    $data['partition'] = array_values($data['partition']);
}
if (empty($data['mount_point'])) {
    unset($data['mount_point']);
}
?>

<div class="row">
<div class="col-md-3">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <?php echo __('Summary'); ?>
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/credentials.svg"/><a href="#" data-menuitem="credentials"><?php echo __('Credentials'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/purchase.svg"/><a href="#" data-menuitem="purchase"><?php echo __('Purchase'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/location.svg"/><a href="#" data-menuitem="location"><?php echo __('Location / Contact'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/custom.svg"/><a href="#" data-menuitem="custom_fields"><?php echo __('Custom Fields'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/attachments.svg"/><a href="#" data-menuitem="attachment"><?php echo __('Attachments'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/audit_log.svg"/><a href="#" data-menuitem="audit_log"><?php echo __('Audit Log'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/change_log.svg"/><a href="#" data-menuitem="change_log"><?php echo __('Change Log'); ?></a></li>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/discovery_log.svg"/><a href="#" data-menuitem="discovery_log"><?php echo __('Discovery Log'); ?></a></li>
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
                   <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/phone.svg"/><a href="#" data-menuitem="phone"><?php echo __('Cellular Details'); ?></a></li>
                <?php if (isset($data['nmap'])) { ?>
                   <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/nmap.svg"/><a href="#" data-menuitem="nmap"><?php echo __('Nmap'); ?></a></li>
                <?php } ?>
                <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-nmis.png"/><a href="#" data-menuitem="opmantek"><?php echo __('Opmantek Details'); ?></a></li>

                <?php if (!empty($data['ip']) and empty($data['network'])) { ?>
                    <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/ip_address.svg"/><a href="#" data-menuitem="ip_address">IP Addresses</a></li>
                <?php } ?>

              </ul>
          </div>
        </div>
      </div>
        <?php
        // the hardware categories
        $hardware = array('bios', 'disk', 'memory', 'module', 'monitor', 'motherboard', 'mount_point', 'network', 'optical', 'processor', 'san', 'sound', 'video');
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
                  <?php echo __('Hardware'); ?>
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

        <?php
        // the software categories
        $display_software = false;
        if (!empty($data['software']) or
            !empty($data['service']) or
            !empty($data['software_key']) or
            !empty($data['server']) ) {
            $display_software = true;
        }
        if ($display_software) {
        ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <?php echo __('Software'); ?>
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <ul class="list-group">
                <?php
                if (!empty($data['software'])) { ?>
                  <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/software.svg"/><a href="#" data-menuitem="software"><?php echo __('Software'); ?></a></li>
                <?php
                }
                if (!empty($software_odbc)) { ?>
                  <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/software_odbc_driver.svg"/><a href="#" data-menuitem="software_odbc_driver"><?php echo __('Software ODBC Driver'); ?></a></li>
                <?php
                }
                if (!empty($software_update)) { ?>
                  <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/software_update.svg"/><a href="#" data-menuitem="software_update"><?php echo __('Software Update'); ?></a></li>
                <?php
                }
                if (!empty($data['software_key'])) { ?>
                  <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/software_key.svg"/><a href="#" data-menuitem="software_key"><?php echo __('Software Key'); ?></a></li>
                <?php
                }
                if (!empty($data['service'])) { ?>
                  <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/service.svg"/><a href="#" data-menuitem="service"><?php echo __('Service'); ?></a></li>
                <?php
                }
                if (!empty($data['server'])) { ?>
                  <li class="list-group-item"><img alt="" src="<?php echo $this->config->config['oa_web_folder']; ?>/icons/server.svg"/><a href="#" data-menuitem="server"><?php echo __('Server'); ?></a></li>
                <?php
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
        // the settings categories
        $software = array('dns', 'file', 'log', 'netstat', 'share', 'pagefile', 'print_queue', 'route', 'user', 'user_group', 'variable', 'vm');
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
                  <?php echo __('Settings'); ?>
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
        <h3 class="panel-title"><?php echo __('Device Details'); ?></h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" name="form_summary" id="form_summary">
            <fieldset>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label"><?php echo __('Name')?></label>
                            <div class="col-sm-8 input-group">
                                <input disabled type="text" class="form-control"  id="name" name="name" value="<?php echo $data['system']->name; ?>">
                                <?php if ($edit) { ?><span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="hostname" class="col-sm-4 control-label"><?php echo __('Hostname')?></label>
                            <div class="col-sm-8 input-group">
                                <input disabled type="text" class="form-control"  id="hostname" name="hostname" value="<?php echo $data['system']->hostname; ?>">
                                <?php if ($edit) { ?><span class="input-group-btn">
                                <button id="edit_hostname" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="hostname">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="domain" class="col-sm-4 control-label"><?php echo __('Domain')?></label>
                            <div class="col-sm-8 input-group">
                                <input disabled type="text" class="form-control"  id="domain" name="domain" value="<?php echo $data['system']->domain; ?>">
                                <?php if ($edit) { ?><span class="input-group-btn">
                                <button id="edit_domain" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="domain">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="dns_hostname" class="col-sm-4 control-label"><?php echo __('DNS Hostname')?></label>
                            <div class="col-sm-8 input-group">
                              <input disabled type="text" class="form-control"  id="dns_hostname" name="dns_hostname" value="<?php echo $data['system']->dns_hostname; ?>">
                                <?php if ($edit) { ?><span class="input-group-btn">
                                    <button id="edit_dns_hostname" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="dns_hostname">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="dns_domain" class="col-sm-4 control-label"><?php echo __('DNS Domain')?></label>
                            <div class="col-sm-8 input-group">
                                <input disabled type="text" class="form-control"  id="dns_domain" name="dns_domain" value="<?php echo $data['system']->dns_domain; ?>">
                                <?php if ($edit) { ?><span class="input-group-btn">
                                    <button id="edit_dns_domain" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="dns_domain">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="dns_domain" class="col-sm-4 control-label"><?php echo __('FQDN')?></label>
                            <div class="col-sm-8 input-group">
                                <input disabled type="text" class="form-control"  id="fqdn" name="fqdn" value="<?php echo $data['system']->fqdn; ?>">
                                <?php if ($edit) { ?><span class="input-group-btn">
                                    <button id="edit_fqdn" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="fqdn">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="ip" class="col-sm-4 control-label"><?php echo __('IP')?></label>
                            <div class="col-sm-8 input-group">
                              <input disabled type="text" class="form-control"  id="ip" name="ip" value="<?php echo $data['system']->ip; ?>">
                                <?php if ($edit) { ?><span class="input-group-btn">
                                <button id="edit_ip" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="ip">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="type" class="col-sm-4 control-label"><?php echo __('Type')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="type" class="form-control" disabled><?php
                                echo "\n";
                                foreach ($data['attributes'] as $item) {
                                    if ($item->type == 'device_type') {
                                        if ($item->value == $data['system']->type) {
                                            $selected = " selected";
                                        } else {
                                            $selected = "";
                                        }
                                        if ($item->value != '') {
                                            echo "                                <option value=\"" . $item->value . "\"" . $selected . ">".__("$item->name")."</option>\n";
                                        }
                                    }
                                }
                                ?>
                                </select>
                                <?php if ($edit) {
                                    ?><span class="input-group-btn">
                                    <button id="edit_type" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="type">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span><?php } ?>

                            </div>
                        </div>

                        <?php
                        if ($data['system']->type == 'computer') {
                        ?><div class="form-group">
                            <label for="class" class="col-sm-4 control-label"><?php echo __('Class')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="class" class="form-control" disabled><?php
                                echo "\n";
                                foreach ($data['attributes'] as $item) {
                                    if ($item->type == 'device_class') {
                                        if ($item->value == $data['system']->class) {
                                            $selected = " selected";
                                        } else {
                                            $selected = "";
                                        }
                                        if (empty($item->name)) {
                                            $item->name = '&nbsp;';
                                        }
                                        echo "                                    <option value=\"" . $item->value . "\"" . $selected . ">".__("$item->name")."</option>\n";
                                    }
                                }
                                ?>
                                </select>
                                <?php if ($edit) {
                                    ?><span class="input-group-btn">
                                    <button id="edit_class" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="class">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <?php
                        }
                        ?><div class="form-group">
                            <label for="function" class="col-sm-4 control-label"><?php echo __('Function')?></label>
                            <div class="col-sm-8 input-group">
                              <input disabled type="text" class="form-control"  id="function" name="function" value="<?php echo $data['system']->function; ?>">
                                <?php if ($edit) {
                                    ?><span class="input-group-btn">
                                    <button id="edit_function" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="function">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                              </span>
                            <?php } ?></div>
                        </div>


                        <div class="form-group">
                            <label for="environment" class="col-sm-4 control-label"><?php echo __('Environment')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="environment" class="form-control" disabled><?php
                                echo "\n";
                                foreach ($data['attributes'] as $item) {
                                    if ($item->type == 'device_environment') {
                                        if ($item->value == $data['system']->environment) {
                                            $selected = " selected";
                                        } else {
                                            $selected = "";
                                        }
                                        if ($item->value != '') {
                                            echo "                                    <option value=\"" . $item->value . "\"" . $selected . ">".__("$item->name")."</option>\n";
                                        }
                                    }
                                }
                                ?>
                                </select>
                                <?php if ($edit) { ?><span class="input-group-btn">
                                    <button id="edit_environment" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="environment">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-4 control-label"><?php echo __('Status')?></label>
                            <div class="col-sm-8 input-group">
                                <select id="status" class="form-control" disabled><?php
                                echo "\n";
                                foreach ($data['attributes'] as $item) {
                                    if ($item->type == 'device_status') {
                                        if ($item->value == $data['system']->status) {
                                            $selected = " selected";
                                        } else {
                                            $selected = "";
                                        }
                                        if ($item->value != '') {
                                            echo "                                    <option value=\"" . $item->value . "\"" . $selected . ">".__("$item->name")."</option>";
                                        }
                                    }
                                }
                                ?>
                                </select>
                                <?php if ($edit) { ?><span class="input-group-btn">
                                    <button id="edit_status" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="status">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-4 control-label"><?php echo __('Description')?></label>
                            <div class="col-sm-8 input-group">
                              <input disabled type="text" class="form-control"  id="description" name="description" value="<?php echo $data['system']->description; ?>">
                                <?php if ($edit) { ?><span class="input-group-btn">
                                    <button id="edit_description" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="description">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span
                                    ></button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="os_group" class="col-sm-4 control-label"><?php echo __('OS Group')?></label>
                            <div class="col-sm-8 input-group">
                                <input disabled type="text" class="form-control"  id="os_group" name="os_group" value="<?php echo $data['system']->os_group; ?>">
                                <?php if ($edit) { ?><span class="input-group-btn">
                                    <button id="edit_os_group" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="os_group">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="os_family" class="col-sm-4 control-label"><?php echo __('OS Family')?></label>
                            <div class="col-sm-8 input-group">
                                <input disabled type="text" class="form-control"  id="os_family" name="os_family" value="<?php echo $data['system']->os_family; ?>">
                                <?php if ($edit) { ?><span class="input-group-btn">
                                    <button id="edit_os_family" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="os_family">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="os_name" class="col-sm-4 control-label"><?php echo __('OS Name')?></label>
                            <div class="col-sm-8 input-group">
                                <input disabled type="text" class="form-control"  id="os_name" name="os_name" value="<?php echo $data['system']->os_name; ?>">
                                <?php if ($edit) { ?><span class="input-group-btn">
                                    <button id="edit_os_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="os_name">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span>
                            <?php } ?></div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="manufacturer" class="col-sm-4 control-label"><?php echo __('Manufacturer')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="manufacturer" value="<?php echo $data['system']->manufacturer; ?>" disabled>
                                    <?php if ($edit) { ?><span class="input-group-btn">
                                        <button id="edit_manufacturer" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="manufacturer">
                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                        </button>
                                    </span>
                                <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="model" class="col-sm-4 control-label"><?php echo __('Model')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="model" value="<?php echo $data['system']->model; ?>" disabled>
                                <?php if ($edit) { ?><span class="input-group-btn">
                                    <button id="edit_model" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="model">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span>
                            <?php } ?></div>
                        </div>

                        <div class="form-group">
                            <label for="serial" class="col-sm-4 control-label"><?php echo __('Serial')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="serial" value="<?php echo $data['system']->serial; ?>" disabled>
                                <?php if ($edit) { ?><span class="input-group-btn">
                                    <button id="edit_serial" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="serial">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span>
                            <?php } ?></div>
                        </div>
                        <?php
                        if ($data['system']->type == 'computer') {
                        ?>

                        <div class="form-group">
                            <label for="form_factor" class="col-sm-4 control-label"><?php echo __('Form Factor')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="form_factor" value="<?php echo $data['system']->form_factor; ?>" disabled>
                                <?php if ($edit) { ?><span class="input-group-btn">
                                    <button id="edit_form_factor" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="form_factor">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span>
                            <?php } ?></div>
                        </div>
                        <?php
                        }
                        ?>

                        <div class="form-group">
                            <label for="uptime" class="col-sm-4 control-label"><?php echo __('Uptime')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="uptime" value="<?php echo $data['system']->uptime_formatted; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="os_installation_date" class="col-sm-4 control-label"><?php echo __('OS Install Date')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="os_installation_date" value="<?php echo $data['system']->os_installation_date; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="snmp_oid" class="col-sm-4 control-label"><?php echo __('SNMP OID')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="snmp_oid" value="<?php echo $data['system']->snmp_oid; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="last_seen" class="col-sm-4 control-label"><?php echo __('Last Seen On')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="last_seen" value="<?php echo $data['system']->last_seen; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="last_seen_by" class="col-sm-4 control-label"><?php echo __('Last Seen By')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="last_seen_by" value="<?php echo $data['system']->last_seen_by; ?>" readonly>
                            </div>
                        </div>
                        <?php
                        if ($data['system']->type == 'computer') {
                        ?>

                        <div class="form-group">
                            <label for="cluster_name" class="col-sm-4 control-label"><?php echo __('Cluster Name')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="cluster_name" value="<?php echo $data['system']->cluster_name; ?>" disabled>
                                <?php if ($edit) { ?><span class="input-group-btn">
                                    <button id="edit_cluster_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="cluster_name">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
                                </span>
                            <?php } ?></div>
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
                                <input type="text" class="form-control" id="vm_host" value="<?php #echo $data['system']->vm_server_name; ?>" disabled>
                                <?php if ($edit) { ?>
                                <span class="input-group-btn">
                                    <button id="edit_vm_host" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="vm_host"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                </span>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="vm_group" class="col-sm-4 control-label"><?php echo __('VM Group')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="vm_group" value="<?php echo $data['system']->vm_group; ?>" disabled>
                                <?php if ($edit) { ?>
                                <span class="input-group-btn">
                                    <button id="edit_vm_group" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="vm_group"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                </span>
                                <?php } ?>
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
                                <input type="text" class="form-control" id="printer_duplex" value="<?php echo $data['system']->printer_duplex; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="printer_colour" class="col-sm-4 control-label"><?php echo __('Printer Colour')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="printer_colour" value="<?php echo $data['system']->printer_color; ?>" readonly>
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
                                <option value='y' <?php echo $selected_y; ?>><?php echo __('Yes'); ?></option>
                                <option value='n' <?php echo $selected_n; ?>><?php echo __('No'); ?></option>
                                </select>
                                <?php if ($edit) { ?>
                                <span class="input-group-btn"><button id="edit_oae_manage" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="oae_manage"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
                                <?php } ?>
                            </div>
                        </div>

                        <?php if (!empty($data['system']->collector_name)) { ?>
                        <div class="form-group">
                            <label for="collector_name" class="col-sm-4 control-label"><?php echo __('Collector Name')?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="collector_name" value="<?php echo $data['system']->collector_name; ?>" readonly>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                    <div class="col-md-2 col-centered">
                    <?php
                    if (php_uname('s') != 'Windows NT') {
                        $icon_path = $this->config->config['base_path'] . '/www/open-audit/device_images/';
                    } else {
                        $icon_path = $this->config->config['base_path'] . '..\\htdocs\\open-audit\\device_images\\';
                    }
                    if (file_exists($icon_path.$data['system']->icon.'.svg')) { ?>
                        <img alt="" class="center-block img-responsive" style="width: 50%;" title="" src="<?php echo base_url(); ?>device_images/<?php echo $data['system']->icon; ?>.svg" />
                    <?php
                    } else { ?>
                        <img alt="" class="center-block img-responsive" style="width: 50%;" title="" src="<?php echo base_url(); ?>device_images/network_device.svg" />
                    <?php
                    } ?>
                        <br /><br />
                        <!--
                        <a class="btn btn-default btn-block" href="#" role="button"><?php echo __('Warranty'); ?></a>
                        <a class="btn btn-default btn-block" href="#" role="button"><?php echo __('Downloads'); ?></a>
                        -->
                        <?php if ($edit) { ?>
                        <a class="btn btn-default btn-block" href="<?php echo $this->response->links->self; ?>?sub_resource=credential&action=create" role="button"><?php echo __('Add Credentials'); ?></a>
                        <a class="btn btn-default btn-block" href="<?php echo $this->response->links->self; ?>?sub_resource=attachment&action=create" role="button"><?php echo __('Add Attachment'); ?></a>
                        <?php } ?>
                        <?php if ($this->m_users->get_user_permission('', 'discoveries', 'c')) { ?>
                        <a class="btn btn-default btn-block" href="<?php echo $this->response->links->self; ?>?sub_resource=discovery&action=create" role="button"><?php echo __('Discover'); ?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                    <?php insert_additional_fields('system', $data['fields'], $edit); ?>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<!--
</div>
-->

<div id="custom_fields" class="section">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left"><?php echo __('Custom Fields'); ?></h3>
            <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="custom_fields"></span>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-10">
                    <?php insert_additional_fields('custom', $data['fields'], $edit); ?>
                </div>
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
        <h3 class="panel-title pull-left"><?php echo __(ucwords($item)); ?></h3>
        <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="<?php echo $item; ?>"></span>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
        <?php
        if (!empty($data[$item])) {
            foreach ($data[$item][0] as $key => $value) {
                if ($key != 'id' and $key != 'system_id' and $key != 'current' and $key != 'first_seen' and $key != 'last_seen') {
                    $label = ucwords(str_replace('_', ' ', $key));
                    if ($item == 'purchase') { ?>
                        <div class="form-group">
                            <label for="<?php echo $key; ?>" class="col-sm-4 control-label"><?php echo __($label)?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="<?php echo $key; ?>" placeholder="-" value="<?php echo $value; ?>" disabled>
                                <?php if ($edit) { ?>
                                    <span class="input-group-btn">
                                        <button id="edit_<?php echo $key; ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $key; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                    </span>
                                <?php } ?>
                            </div>
                        </div>
                    <?php
                    } else { ?>
                        <div class="form-group">
                            <label for="<?php echo $item . '_' . $key; ?>" class="col-sm-4 control-label"><?php echo __($label)?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="<?php echo $item . '_' . $key; ?>" value="<?php echo $value; ?>" readonly>
                            </div>
                        </div>
                    <?php
                    } ?>
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
    $items = "service_number,service_provider,service_plan,service_network,unlock_pin,serial_imei,serial_sim";
?>
    <div id="phone" class="section">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left"><?php echo __('Cellular Details'); ?></h3>
                <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="phone"></span>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="service_type" class="col-sm-4 control-label"><?php echo __('Service Type'); ?></label>
                    <div class="col-sm-8 input-group">
                        <select class="form-control" id="service_type" name="service_type" disabled>
                            <option value=""<?php if ($data['system']->{'service_type'} == '') {
                                echo ' selected'; } ?> label=" "> </option>
                            <option value="voice"<?php if ($data['system']->{'service_type'} == 'voice') {
                                echo ' selected'; } ?>>Voice Only</option>
                            <option value="data"<?php if ($data['system']->{'service_type'} == 'data') {
                                echo ' selected'; } ?>>Data Only</option>
                            <option value="voice and data"<?php if ($data['system']->{'service_type'} == 'voice and data') {
                                echo ' selected'; } ?>>Voice and Data</option>
                        </select>
                        <?php if ($edit) { ?>
                            <span class="input-group-btn"><button id="edit_service_type" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="service_type"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
                        <?php } ?>
                    </div>
                </div>

                <?php foreach (explode(',', $items) as $item) { ?>
                <div class="form-group">
                    <label for="<?php echo $item; ?>" class="col-sm-4 control-label"><?php echo ucwords(str_replace('_', ' ', $item)); ?></label>
                    <div class="col-sm-8 input-group">
                      <input type="text" class="form-control" id="<?php echo $item; ?>" value="<?php echo $data['system']->{$item}; ?>" disabled>
                      <span class="input-group-btn">
                        <button id="edit_<?php echo $item; ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $item; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                      </span>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>


    <div id="opmantek" class="section">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left"><?php echo __('Opmantek Details'); ?></h3>
                <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="opmantek"></span>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="nmis_manage" class="col-sm-4 control-label"><?php echo __('Manage In NMIS')?></label>
                    <div class="col-sm-7 input-group">
                        <select id="nmis_manage" class="form-control" disabled>
                        <?php
                        if ($data['system']->nmis_manage == 'y') {
                            $selected_y = ' selected';
                            $selected_n = '';
                        } else {
                            $selected_y = '';
                            $selected_n = 'selected';
                        }
                        ?>
                        <option value='y' <?php echo $selected_y; ?>><?php echo __('Yes'); ?></option>
                        <option value='n' <?php echo $selected_n; ?>><?php echo __('No'); ?></option>
                        </select>
                        <?php if ($edit) { ?>
                        <span class="input-group-btn"><button id="edit_nmis_manage" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="nmis_manage"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
                        <?php } ?>
                    </div>
                </div>
                <?php $fields = array('UUID' => 'omk_uuid', 'Group' => 'nmis_group', 'Name' => 'nmis_name', 'Role' => 'nmis_role', 'Notes' => 'nmis_notes', 'Business Service' => 'nmis_business_service' ); ?>
                <?php foreach ($fields as $human => $db) { ?>
                    <div class="form-group">
                        <label for="<?php echo $db ?>" class="col-sm-4 control-label"><?php echo __($human); ?></label>
                        <div class="col-sm-7 input-group">
                            <input disabled type="text" class="form-control" placeholder="" id="<?php echo $db ?>" name="<?php echo $db ?>" value="<?php echo $data['system']->$db; ?>">
                            <?php if ($edit) { ?>
                            <span class="input-group-btn">
                                <button id="edit_<?php echo $db ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $db ?>">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div id="credentials" class="section">
        <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title pull-left"><?php echo __('Credentials'); ?></h3>
        <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="credentials"></span>
        <div class="clearfix"></div>
      </div>
            <div class="panel-body">
            <?php if (isset($data['credential']) and count($data['credential']) > 0) { ?>
            <table class="table">
                <thead>
                    <tr>
                        <th><?php echo __('ID'); ?></th>
                        <th><?php echo __('Type'); ?></th>
                        <th><?php echo __('Name'); ?></th>
                        <th><?php echo __('Description'); ?></th>
                        <?php if ($this->m_users->get_user_permission('', 'credentials', 'd')) { ?>
                        <td style="text-align:center;"><?php echo __('Delete'); ?></td>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($data['credential'] as $item) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?></td>
                    <td><?php echo htmlspecialchars($item->type, REPLACE_FLAGS, CHARSET); ?></td>
                    <td><?php echo htmlspecialchars($item->name, REPLACE_FLAGS, CHARSET); ?></td>
                    <td><?php echo htmlspecialchars($item->description, REPLACE_FLAGS, CHARSET); ?></td>
                    <?php if ($this->m_users->get_user_permission('', 'credentials', 'd')) { ?>
                    <td style="text-align:center;"><button type="button" class="btn btn-sm btn-danger subresource_delete_link" aria-label="Left Align" data-sub-resource-id="<?php echo intval($item->id); ?>" data-sub-resource="credential" data-name="<?php echo htmlspecialchars($item->name, REPLACE_FLAGS, CHARSET); ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    <?php } ?>
                <?php } ?>
                </tbody>
            </table>
            <?php } ?>
          </div>
        </div>
    </div>









<div id="location" class="section">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left"><?php echo __('Location / Owner'); ?></h3>
            <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="location"></span>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                <?php
                    if (!empty($data['locations'])) { ?>
                    <div class="form-group">
                        <label for="location_id" class="col-sm-4 control-label"><?php echo __('Location')?></label>
                        <div class="col-sm-8 input-group">
                            <select id="location_id" class="form-control" disabled>
                            <?php
                            foreach ($data['locations'] as $location) {
                                if ($location->id == $data['system']->location_id) {
                                    echo '<option value="' . $location->id . '" selected>' . $location->name . '</option>';
                                } else {
                                    echo '<option value="' . $location->id . '">' . $location->name . '</option>';
                                }
                            }
                            ?>
                            </select>
                            <?php if ($edit) { ?>
                            <span class="input-group-btn">
                                <button id="edit_location_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="location_id">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php
                        foreach ($data['locations'] as $location) {
                            if ($location->id == $data['system']->location_id) {
                                $items = array('address','city','state','country');
                                foreach ($items as $item) { ?>
                    <div class="form-group">
                        <label for="locations.<?php echo $item; ?>" class="col-sm-4 control-label"><?php echo ucfirst($item); ?></label>
                        <div class="col-sm-8 input-group">
                            <input disabled type="text" class="form-control" placeholder="" id="locations.<?php echo $item; ?>" name="locations.<?php echo $item; ?>" value="<?php echo $location->$item ?>">
                        </div>
                    </div>
                                <?php
                                }
                            }
                        }
                    } else { ?>
                    <div class="form-group">
                        <label for="<?php echo $item; ?>" class="col-sm-4 control-label">Location</label>
                        <div class="col-sm-8 input-group">
                            <input disabled type="text" class="form-control" placeholder="" value="No locations present (create a location and assign to an Org).">
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="owner" class="col-sm-4 control-label"><?php echo __('Owner'); ?></label>
                        <div class="col-sm-7 input-group">
                            <input disabled type="text" class="form-control" placeholder="" id="owner" name="owner" value="<?php echo $data['system']->owner; ?>">
                            <?php if ($edit) { ?>
                            <span class="input-group-btn">
                                <button id="edit_owner" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="owner">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="org_id" class="col-sm-4 control-label"><?php echo __('Organisation') ?></label>
                        <div class="col-sm-7 input-group">
                            <select id="org_id" class="form-control" disabled><?php
                            foreach ($data['orgs'] as $org) {
                                if ($org->id == $data['system']->org_id) {
                                    echo '                                    <option value="' . $org->id . '" selected>' . $org->name . '</option>';
                                } else {
                                    echo '                                    <option value="' . $org->id . '">' . $org->name . '</option>';
                                }
                            }
                            ?>
                            </select>
                            <?php if ($edit) { ?>
                            <span class="input-group-btn">
                                <button id="edit_org_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="org_id">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <br />
                <div class="col-md-6">
                    <?php
                    $items = array('location_level','location_suite','location_room','location_rack_position','location_latitude','location_longitude');
                    foreach ($items as $item) {
                    ?>
                    <div class="form-group">
                        <label for="<?php echo $item ?>" class="col-sm-4 control-label">Device Specific <?php echo ucwords(str_replace('_', ' ', str_replace('location_', '', $item))); ?></label>
                        <div class="col-sm-8 input-group">
                            <input disabled type="text" class="form-control" placeholder="" id="<?php echo $item ?>" name="<?php echo $item ?>" value="<?php echo $data['system']->{$item} ?>">
                            <?php if ($edit) { ?>
                            <span class="input-group-btn">
                                <button id="edit_<?php echo $item ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $item ?>">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-md-6">
                    <?php
                    $items = array('switch_system_id','switch_port','patch_panel','wall_port');
                    foreach ($items as $item) {
                    ?>
                    <div class="form-group">
                        <label for="<?php echo $item ?>" class="col-sm-4 control-label"><?php echo ucwords(str_replace('_', ' ', $item)); ?></label>
                        <div class="col-sm-7 input-group">
                            <input disabled type="text" class="form-control" placeholder="" id="<?php echo $item ?>" name="<?php echo $item ?>" value="<?php echo $data['system']->{$item}; ?>">
                            <?php if ($edit) { ?>
                            <span class="input-group-btn">
                                <button id="edit_<?php echo $item ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $item ?>">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
// software
if (isset($data['software']) and count($data['software']) > 0) {
    $count = 0;
    foreach ($data['software'] as $row) {
        if ($row->type == '') {
            $count++;
        }
    }
    ?>
    <div id="software" class="section">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left"><?php echo __('Software'); ?></h3>
                <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="software"></span>
                <span class="pull-right" style="padding-right:10px;"><?php echo $count; ?> <?php echo ' ' . __('items'); ?></span>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
            <?php
            if (isset($data['software']) and count($data['software']) > 0) { ?>
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
                        if ($row->type == '') {
                            echo "                    <tr>\n";
                            foreach ($attributes['software'] as $key => $value) {
                                if (is_integer($row->$key)) {
                                    echo "                        <td class=\"text-right\">" . number_format($row->$key) . "</td>\n";
                                } else {
                                    echo "                        <td>" . $row->$key . "</td>\n";
                                }
                            }
                            echo "                    </tr>\n";
                        }
                    }
                    ?>
                </tbody>
            </table>
            <?php
            } ?>
          </div>
        </div>
    </div>
<?php } ?>



<?php
// software odbc drivers
if (!empty($data['software'])) {
    $count = 0;
    foreach ($data['software'] as $row) {
        if ($row->type == 'odbc driver') {
            $count++;
        }
    }
    ?>
    <div id="software_odbc_driver" class="section">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left">Software ODBC Drivers</h3>
                <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="software_odbc_driver"></span>
                <span class="pull-right" style="padding-right:10px;"><?php echo $count; ?> items</span>
            <div class="clearfix"></div>
            </div>
            <div class="panel-body">
            <?php
            if (!empty($data['software'])) { ?>
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
                        if ($row->type == 'odbc driver') {
                            echo "                    <tr>\n";
                            foreach ($attributes['software'] as $key => $value) {
                                if (is_integer($row->$key)) {
                                    echo "                        <td class=\"text-right\">" . number_format($row->$key) . "</td>\n";
                                } else {
                                    echo "                        <td>" . $row->$key . "</td>\n";
                                }
                            }
                            echo "                    </tr>\n";
                        }
                    }
                    ?>
                    </tbody>
                </table>
            <?php
            } ?>
            </div>
        </div>
    </div>
<?php } ?>



<?php
if (!empty($data['software'])) {
    // software updates
    $count = 0;
    foreach ($data['software'] as $row) {
        if ($row->type == 'update') {
            $count++;
        }
    }
    ?>
    <div id="software_update" class="section">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left"><?php echo __('Software Updates'); ?></h3>
                <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="software_update"></span>
                <span class="pull-right" style="padding-right:10px;"><?php echo $count; ?> <?php echo ' ' . __('items'); ?></span>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
            <?php
            if (!empty($data['software'])) { ?>
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
                    if ($row->type == 'update') {
                        echo "                    <tr>\n";
                        foreach ($attributes['software'] as $key => $value) {
                            if (is_integer($row->$key)) {
                                echo "                        <td class=\"text-right\">" . number_format($row->$key) . "</td>\n";
                            } else {
                                echo "                        <td>" . $row->$key . "</td>\n";
                            }
                        }
                        echo "                    </tr>\n";
                    }
                } ?>
                    </tbody>
                </table>
            <?php
            } ?>
            </div>
        </div>
    </div>
<?php } ?>


    <div id="attachment" class="section">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left"><?php echo __('Attachments'); ?></h3>
                <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="attachment"></span>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <?php if (isset($data['attachment']) and count($data['attachment']) > 0) { ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th><?php echo __('ID'); ?></th>
                            <th><?php echo __('Name'); ?></th>
                            <th><?php echo __('Filename'); ?></th>
                            <th><?php echo __('Edited By'); ?>Edited By</th>
                            <th><?php echo __('Edited Date'); ?></th>
                            <th style="text-align:center;"><?php echo __('Download'); ?></th>
                            <?php if ($this->m_users->get_user_permission('', 'devices', 'u')) { ?>
                            <th style="text-align:center;"><?php echo __('Delete'); ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data['attachment'] as $item) {
                            if (php_uname('s') == 'Windows NT') {
                                $i = explode('\\', $item->filename);
                            } else {
                                $i = explode('/', $item->filename);
                            }
                            $filename = $i[count($i)-1];
                            $filename = preg_replace('/'.$data['system']->id . '_/', '', $filename, 1);
                            echo '<tr>';
                            echo "<td>" . $item->id . "</td>";
                            echo "<td>" . $item->name . "</td>";
                            echo "<td>" . $filename . "</td>";
                            echo "<td>" . $item->edited_by . "</td>";
                            echo "<td>" . $item->edited_date . "</td>";
                            ?>
                            <td class="text-center"><a class="btn btn-sm btn-primary" href="<?php echo $this->response->links->self; ?>?sub_resource=attachment&sub_resource_id=<?php echo intval($item->id); ?>&action=download"><span class="glyphicon glyphicon-download" aria-hidden="true"></span></a></td>
                            <?php if ($this->m_users->get_user_permission('', 'devices', 'u')) { ?>
                            <td style="text-align:center;"><button type="button" class="btn btn-sm btn-danger" aria-label="Left Align" ><span class="glyphicon glyphicon-trash subresource_delete_link" data-sub-resource-id="<?php echo intval($item->id); ?>" data-sub-resource="attachment" data-name="<?php echo htmlspecialchars($item->name, REPLACE_FLAGS, CHARSET); ?>" aria-hidden="true"></span></button></td>
                            <?php } ?>
                            <?php
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>



<?php
$item = 'discovery_log';
if (isset($data[$item]) and count($data[$item]) > 0) {
?>
<div id="<?php echo $item; ?>" class="section">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title pull-left"><?php echo __('Discovery Log'); ?></h3>
    <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="discovery_log"></span>
    <span class="pull-right" style="padding-right:10px;"><?php echo count($data['discovery_log']); ?> <?php echo ' ' . __('items'); ?></span>
    <div class="clearfix"></div>
  </div>
      <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <?php
                    foreach ($data[$item][0] as $key => $value) {
                        if ($key != 'system_id' and $key != 'ip_padded') {
                            if (is_int($value)) {
                                echo "                    <th class=\"text-right\">" . ucwords(str_replace('_', ' ', $key))  . "</th>\n";
                            } else {
                                echo "                    <th>" . ucwords(str_replace('_', ' ', $key))  . "</th>\n";
                            }
                        }
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data[$item] as $row) {
                    echo '                <tr>';
                    foreach ($row as $key => $value) {
                        if ($key != 'system_id' and $key != 'ip_padded') {
                            if (is_int($value)) {
                                echo "                    <td class=\"text-right\">" . number_format($value) . "</td>\n";
                            } else if ($key == 'command' and !empty($value)) {
                                echo "                    <td><pre>" . $value . "</pre></td>\n";
                            } else {
                                if (strlen($value) > 40) {
                                    echo "                    <td class=\"wrap\">" . $value . "</td>\n";
                                } else {
                                    echo "                    <td>" . $value . "</td>\n";
                                }
                            }
                        }
                    }
                    echo '                </tr>';
                }
                ?>
            </tbody>
        </table>
      </div>
    </div>
</div>
<?php
}
?>

<?php if (!empty($data['ip']) and empty($data['network'])) { ?>
<div id="ip_address" class="section">
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title pull-left"><?php echo __('IP Addresses'); ?></h3>
    <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="ip_address"></span>
    <span class="pull-right" style="padding-right:10px;"><?php echo count($data['ip']); ?> <?php echo ' ' . __('items'); ?></span>
    <div class="clearfix"></div>
  </div>
      <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <?php
                    foreach ($data['ip'][0] as $key => $value) {
                        if ($key != 'system_id' and $key != 'ip_padded' and $key != 'id' and $key != 'current' and $key != 'first_seen' and $key != 'last_seen' and $key != 'net_index' and $key != 'set_by') {
                            echo "                    <th>" . ucwords(str_replace('_', ' ', $key))  . "</th>\n";
                        }
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data['ip'] as $row) {
                    echo '                <tr>';
                    foreach ($row as $key => $value) {
                        if ($key != 'system_id' and $key != 'ip_padded' and $key != 'id' and $key != 'current' and $key != 'first_seen' and $key != 'last_seen' and $key != 'net_index' and $key != 'set_by') {
                            echo "                    <td>" . htmlentities($value) . "</td>\n";
                        }
                    }
                    echo '                </tr>';
                }
                ?>
            </tbody>
        </table>
      </div>
    </div>
</div>
<?php } ?>



<?php
// table style displays
$list = array ('alert_log', 'audit_log', 'change_log', 'edit_log', 'dns', 'file', 'log', 'memory', 'module', 'monitor', 'mount_point', 'netstat', 'nmap', 'optical', 'print_queue', 'route', 'san', 'service', 'share', 'software_key', 'sound', 'user', 'user_group', 'video', 'variable', 'vm');
if ($data['system']->type != 'computer' and !empty($data['disk'])) {
    $list[] = 'disk';
}

foreach ($list as $item) {
    if (!empty($data[$item])) {
        ?>
        <div id="<?php echo $item; ?>" class="section">
            <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title pull-left"><?php echo __(ucwords(str_replace('_', ' ', $item))); ?></h3>
            <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="<?php echo $item; ?>"></span>
            <span class="pull-right" style="padding-right:10px;"><?php echo count($data[$item]); ?> items</span>
            <div class="clearfix"></div>
          </div>
              <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <?php
                            if ($item == 'service' or $item == 'disk' or $item == 'partition' or $item == 'file' or $item == 'user' or $item == 'route') {
                                foreach ($attributes[$item] as $key => $value) {
                                    echo "                            <th>$value</th>\n";
                                }
                            } else {
                                foreach ($data[$item][0] as $key => $value) {
                                    if ($key != 'id' and $key != 'system_id' and $key != 'current' and $key != 'first_seen' and $key != 'last_seen' and $key != 'ip_padded') {
                                        # some special cases for cisco modules
                                        if ($item == 'module') {
                                            if ($key != 'software_revision' and $key != 'object_id' and $key != 'class') {
                                                echo '                            <th>' . ucwords(str_replace('_', ' ', $key)) . "</th>\n";
                                            }
                                        } elseif ($item == 'change_log') {
                                            if ($key != 'external_link' and $key != 'external_ident' and $key != 'note' and $key != 'change_id' and $key != 'change_type' and $key != 'user_id' and $key != 'ack_time') {
                                                echo '                            <th>' . ucwords(str_replace('_', ' ', $key)) . "</th>\n";
                                            }
                                        } else {
                                            # everything else
                                            if (is_int($value)) {
                                                echo "                            <th class=\"text-right\">" . ucwords(str_replace('_', ' ', $key))  . "</th>\n";
                                            } else {
                                                echo "                            <th>" . ucwords(str_replace('_', ' ', $key))  . "</th>\n";
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
                                echo "                        <tr>\n";
                                foreach ($attributes[$item] as $key => $value) {
                                    if (is_integer($row->$key)) {
                                        echo "                            <td class=\"text-right\">" . number_format($row->$key) . "</td>\n";
                                    } else {
                                        echo "                            <td>" . $row->$key . "</td>\n";
                                    }
                                }
                                echo "                        </tr>\n";
                            }
                        } else {
                            foreach ($data[$item] as $row) {
                                echo "                        <tr>\n";
                                foreach ($row as $key => $value) {
                                    if ($key != 'id' and $key != 'system_id' and $key != 'current' and $key != 'first_seen' and $key != 'last_seen' and $key != 'ip_padded') {
                                        # some special cases for cisco modules
                                        if ($item == 'module') {
                                            if ($key != 'software_revision' and $key != 'object_id' and $key != 'class') {
                                                if (is_int($value)) {
                                                    echo "                            <td class=\"text-right\">" . number_format($value) . "</td>\n";
                                                } else {
                                                    echo "                            <td>" . $value . "</td>\n";
                                                }
                                            }
                                        } elseif ($item == 'change_log') {
                                            if ($key != 'external_link' and $key != 'external_ident' and $key != 'note' and $key != 'change_id' and $key != 'change_type' and $key != 'user_id' and $key != 'ack_time') {
                                                echo "                            <td>" . $value . "</td>\n";
                                            }
                                        } elseif ($item == 'vm'and $key == 'guest_system_id') {
                                            if (!empty($value)) {
                                                echo "                            <td class=\"text-center\"><a href=\"" . base_url() . "index.php/devices/" . $value . "\" class=\"btn btn-sm btn-success\">" . $value . "</a></td>\n";
                                            } else {
                                                echo "                            <td></td>\n";
                                            }
                                        } elseif ($item == 'vm'and $key == 'icon') {
                                            if (!empty($value)) {
                                                echo "                            <td class=\"text-center\"><img alt=\"\" class=\"center-block img-responsive\" style=\"width:20px;\" title=\"\" src=\"" . base_url() . "device_images/" . $value . ".svg\" /></td>\n";
                                            } else {
                                                echo "                            <td class=\"text-center\"></td>\n";
                                            }
                                        } else {
                                            # everything else
                                            if (is_int($value)) {
                                                echo "                            <td class=\"text-right\">" . number_format($value) . "</td>\n";
                                            } else {
                                                if (strlen($value) > 40) {
                                                    echo "                            <td class=\"wrap\">" . $value . "</td>\n";
                                                } else {
                                                    echo "                            <td>" . $value . "</td>\n";
                                                }
                                            }
                                        }
                                    }
                                }
                                echo "                        </tr>\n";
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


        <div id="server" class="section">
            <div class="panel panel-default">
<?php
            $database_keys = array('type', 'name', 'version', 'version_string', 'edition', 'status', 'ip', 'port');
            $webserver_keys = array('type', 'name', 'version', 'version_string', 'status', 'port');
            $db_item_keys = array('name', 'id_internal', 'instance', 'path', 'size');
            $ws_item_keys = array('name', 'description', 'id_internal', 'ip', 'hostname', 'port', 'status', 'instance', 'path');
            foreach ($data['server'] as $server) {
                if ($server->type == 'database') {
                    $server_keys = $database_keys;
                    $item_keys = $db_item_keys;
                } else if ($server->type == 'web') {
                    $server_keys = $webserver_keys;
                    $item_keys = $ws_item_keys;
                }
?>
                <div class="panel-heading">
                    <h3 class="panel-title pull-left"><?php echo ucfirst($server->type); ?> Server</h3>
                    <span class="glyphicon glyphicon-remove-circle pull-right myCloseButton" data-menuitem="server"></span>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <?php foreach ($server_keys as $key) { ?>
                    <div class="form-group">
                        <?php if (!empty($server->{$key})) { ?>
                       <label for="<?php echo $server->type . '_' . $key . '_' . $server->id; ?>" class="col-sm-4 control-label"><?php echo __(ucwords(str_replace('_', ' ', $key)))?></label>
                        <div class="col-sm-7 input-group">
                            <input disabled type="text" class="form-control" placeholder="" id="<?php echo $server->type . '_' . $key . '_' . $server->id; ?>" name="<?php echo $server->type . '_' . $key . '_' . $server->id; ?>" value="<?php echo $server->{$key}; ?>">
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <div class="row col-md-10 col-md-offset-1">
                        <table class="table">
                            <thead>
                                <tr>
                                <?php foreach ($item_keys as $key) { ?>
                                    <th><?php echo __(ucwords(str_replace('_', ' ', $key)))?></th>
                                <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['server_item'] as $item) { ?>
                                    <tr>
                                        <?php foreach ($item_keys as $key) { ?>
                                            <?php if ($item->parent_name == $server->name) { ?>
                                            <td><?php echo htmlentities($item->{$key}); ?></td>
                                            <?php } ?>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br />
                <?php
                }
                ?>
            </div>
        </div>



<?php
// combo style displays
if ($data['system']->type == 'computer') {
    #$list = array ('disk' => 'partition', 'network' => 'ip', 'server' => 'server_item');
    $list = array ('disk' => 'partition', 'network' => 'ip');
    foreach ($list as $item => $sub_item) {
        if (isset($data[$item]) and count($data[$item]) > 0) {
        ?>
            <div id="<?php echo $item; ?>" class="section">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title pull-left"><?php echo __(ucwords($item)); ?></h3>
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
                            if ($key != 'id' and $key != 'server_id' and $key != 'parent_id' and $key != 'system_id' and $key != 'current' and $key != 'first_seen' and $key != 'last_seen' and $key != 'ip' and $key != 'ip_padded') {
                                $count++;
                                $show_key = ucwords(str_replace('_', ' ', $key));
                                if ($count == $row_attribute_count) {
                                    echo "</div><div class='col-md-6'>\n";
                                }
                                ?>
                                <div class="form-group">
                                    <label for="<?php echo $item . '_' . $key . '_' . $item_row->id; ?>" class="col-sm-4 control-label"><?php echo __($show_key)?></label>
                                    <div class="col-sm-8 input-group">
                                        <input type="text" class="form-control" id="<?php echo $item . '_' . $key . '_' . $item_row->id; ?>" value="<?php echo $value; ?>" readonly>
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
                                            if ($sub_key != 'id' and $sub_key != 'server_id' and $sub_key != 'parent_id' and $sub_key != 'system_id' and $sub_key != 'current' and $sub_key != 'first_seen' and $sub_key != 'last_seen' and $sub_key != 'ip_padded') {
                                                ?>
                                                <th><?php echo ucwords(str_replace('_', ' ', $sub_key)); ?></th>
                                            <?php
                                            }
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data[$sub_item] as $sub_row) {
                                        if (($item == 'network' and $item_row->net_index == $sub_row->net_index) or
                                            ($item == 'disk' and $sub_row->hard_drive_index != '' and $item_row->hard_drive_index == $sub_row->hard_drive_index) or
                                            ($item == 'server' and $item_row->name == $sub_row->parent_name)) { ?>
                                            <tr>
                                                <?php
                                                foreach ($sub_row as $sub_key => $sub_value) {
                                                    if ($sub_item == 'partition' and $sub_key == 'id') {
                                                        #echo '<td><a href="' . base_url() . 'index.php/main/disk_graph/' . $data['system']->id . '/' . $sub_value . '" class="btn btn-default" role="button"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span></a></td>';
                                                        echo '<td><a href="' . base_url() . 'index.php/devices/' . $data['system']->id . '/partition_graph/' . $sub_value . '" class="btn btn-default" role="button"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span></a></td>';
                                                    }
                                                    if ($sub_key != 'id' and $sub_key != 'server_id' and $sub_key != 'parent_id' and $sub_key != 'system_id' and $sub_key != 'current' and $sub_key != 'first_seen' and $sub_key != 'last_seen' and $sub_key != 'ip_padded') {
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
                            <?php
                        } ?>
                        </div>
                    </div>
                    <br /><br />
                    <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        <?php
        }
    }
}
if ($data['system']->type != 'computer') {
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
function insert_additional_fields($section = '', $additional_fields = array(), $edit)
{
    foreach ($additional_fields as $field) {
        if ($field->{'placement'} == $section or $section == '') {
            $name = $field->{'name'};
            if ($field->{'type'} == 'varchar') {
                echo '                    <div class="form-group">
                    <label for="' . $name . '" class="col-sm-4 control-label">' . $field->{'name'} . '</label>
                    <div class="col-sm-8 input-group">
                      <input disabled type="text" class="form-control"  id="' . $name . '" name="' . $name . '" value="' . $field->{'value'} . '">';
                if ($edit) {
                    echo '
                      <span class="input-group-btn">
                        <button id="edit_' . $name . '" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="' . $name . '"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                      </span>';
                }
                    echo '
                    </div>
                </div>' . "\n";
            }
            if ($field->{'type'} == 'list') {
                echo '                    <div class="form-group">
                    <label for="' . $name . '" class="col-sm-4 control-label">' . $field->{'name'} . '</label>
                    <div class="col-sm-8 input-group">
                        <select id="' . $name . '" class="form-control" disabled>' . "\n";
                if ($field->{'value'} == '') {
                    echo "                          <option value='' > </option>\n";
                }
                foreach (explode(',', $field->{'values'}) as $value) {
                    if ($field->{'value'} == $value) {
                        $selected = " selected";
                    } else {
                        $selected = "";
                    }
                    echo "                          <option value=\"" . $value . "\"" . $selected . ">".__("$value")."</option>\n";
                }
                echo '                        </select>';
                if ($edit) {
                    echo '
                <span class="input-group-btn">
                  <button id="edit_' . $name . '" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="' . $name . '">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                  </button>
                </span>';
                }
                        echo '
                    </div>
                </div>' . "\n";
            }

            if ($field->{'type'} == 'date') {
                echo '                    <div class="form-group">
                    <label for="' . $name . '" class="col-sm-4 control-label">' . $field->{'name'} . '</label>
                    <div class="col-sm-8 input-group">
                      <input disabled type="date" class="form-control"  id="' . $name . '" name="' . $name . '" value="' . $field->{'value'} . '">';
                if ($edit) {
                    echo '
                      <span class="input-group-btn">
                        <button id="edit_' . $name . '" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="' . $name . '"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                      </span>';
                }
                    echo '
                    </div>
                </div>' . "\n";
            }
        }
    }
}