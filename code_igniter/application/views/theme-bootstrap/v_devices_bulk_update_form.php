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
$fields = explode(' ', 'asset_number attached_system_id cluster_name cluster_type comments contact_name description dns_domain dns_hostname domain environment form_factor fqdn function hostname ip lease_expiry_date locations location_latitude location_level location_longitude location_rack location_rack_position location_rack_size location_room location_suite manufacturer model name nmis_export nmis_group nmis_name nmis_role oae_manage orgs os_bit os_family os_group os_installation_date os_name os_version owner patch_panel patch_panel_port printer_color purchase_amount purchase_cost_center purchase_date purchase_invoice purchase_order_number purchase_service_contract_number purchase_vendor serial serial_imei serial_sim service_network service_number service_plan service_provider service_type status switch_port switch_system_id types unlock_pin uuid vm_group vm_server_name wall_port warranty_duration warranty_expires warranty_type');
$field_count = intval(count($fields) / 2) + 1;
# class   nmis_export oae_manage 
#if ( ! empty($this->response->included)) {
    foreach ($this->response->included as $item) {
      $data[$item->type][] = $item->attributes;
    }
#}

$special = array();

$special['orgs'] = '<div class="form-group"><label for="org_id" class="col-sm-4 control-label">Organisation</label><div class="col-sm-8 input-group"><select id="org_id" class="form-control" disabled><option value=""> </option>';
foreach ($data['orgs'] as $item) {
    $special['orgs'] .= "<option value='" . $item->id . "'>".$item->name."</option>";
}
$special['orgs'] .= '</select><span class="input-group-btn"><button id="edit_org_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="org_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';


$special['locations'] = '<div class="form-group"><label for="location_id" class="col-sm-4 control-label">Location</label><div class="col-sm-8 input-group"><select id="location_id" class="form-control" disabled><option value=""> </option>';
foreach ($data['locations'] as $item) {
    $special['locations'] .= "<option value='" . $item->id . "'>".$item->name."</option>";
}
$special['locations'] .= '</select><span class="input-group-btn"><button id="edit_location_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="location_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';


$special['status'] = '<div class="form-group"><label for="status" class="col-sm-4 control-label">Status</label><div class="col-sm-8 input-group"><select id="status" class="form-control" disabled><option value=""> </option>';
$special['status'] .= "<option value='deleted'>Deleted</option>";
$special['status'] .= "<option value='production'>Lost</option>";
$special['status'] .= "<option value='production'>Maintenance</option>";
$special['status'] .= "<option value='production'>Production</option>";
$special['status'] .= "<option value='production'>Retired</option>";
$special['status'] .= "<option value='production'>Unallocated</option>";
$special['status'] .= '</select><span class="input-group-btn"><button id="edit_status" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="status"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';


$special['types'] = '<div class="form-group"><label for="type" class="col-sm-4 control-label">Type</label><div class="col-sm-8 input-group"><select id="type" class="form-control" disabled><option value=""> </option>';
foreach ($this->response->types as $key => $value) {
    if ($value != '&nbsp;') {
        $special['types'] .= "<option value=\"".$key."\">".__($value)."</option>\n";
    }
}
$special['types'] .= '</select><span class="input-group-btn"><button id="edit_type" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="type"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';


$special['environment'] = '<div class="form-group"><label for="environment" class="col-sm-4 control-label">Environment</label><div class="col-sm-8 input-group"><select id="environment" class="form-control" disabled><option value=""> </option>';
$special['environment'] .= "<option value='dev'>Development</option>";
$special['environment'] .= "<option value='dr'>Disaster Recovery</option>";
$special['environment'] .= "<option value='eval'>Evaluation</option>";
$special['environment'] .= "<option value='pre-prod'>PreProduction</option>";
$special['environment'] .= "<option value='production'>Production</option>";
$special['environment'] .= "<option value='test'>Testing</option>";
$special['environment'] .= "<option value='train'>Training</option>";
$special['environment'] .= "<option value='uat'>User Acceptance Testing</option>";
$special['environment'] .= '</select><span class="input-group-btn"><button id="edit_environment" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="environment"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';

$special['nmis_export'] = '<div class="form-group"><label for="nmis_export" class="col-sm-4 control-label">NMIS Export</label><div class="col-sm-8 input-group"><select id="nmis_export" class="form-control" disabled><option value=""> </option>';
$special['nmis_export'] .= "<option value='y'>Yes</option>";
$special['nmis_export'] .= "<option value='n'>No</option>";
$special['nmis_export'] .= '</select><span class="input-group-btn"><button id="edit_nmis_export" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="nmis_export"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';

$special['oae_manage'] = '<div class="form-group"><label for="oae_manage" class="col-sm-4 control-label">Manage in Open-AudIT Enterprise</label><div class="col-sm-8 input-group"><select id="oae_manage" class="form-control" disabled><option value=""> </option>';
$special['oae_manage'] .= "<option value='y'>Yes</option>";
$special['oae_manage'] .= "<option value='n'>No</option>";
$special['oae_manage'] .= '</select><span class="input-group-btn"><button id="edit_oae_manage" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="oae_manage"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';

?>
<script>
var id = 0;
</script>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left">Attributes</span>
            <span class="pull-right"></span>
        </h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <?php for ($i=0; $i < $field_count; $i++) { ?>
                        <?php if (!empty($special[$fields[$i]])) { ?>
                            <?php echo $special[$fields[$i]]; } else { ?>
                                <div class="form-group">
                                    <label for="form_factor" class="col-sm-4 control-label"><?php echo ucwords(str_replace('_', ' ', __($fields[$i]))); ?></label>
                                    <div class="col-sm-8 input-group">
                                        <input type="text" class="form-control" id="<?php echo $fields[$i]; ?>" value="" disabled>
                                      <span class="input-group-btn">
                                        <button id="edit_<?php echo $fields[$i]; ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $fields[$i]; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                      </span>
                                    </div>
                                </div>
                                <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <?php for ($i=$field_count; $i < count($fields); $i++) { ?>
                        <?php if (!empty($special[$fields[$i]])) { ?>
                            <?php echo $special[$fields[$i]]; } else { ?>
                                <div class="form-group">
                                    <label for="form_factor" class="col-sm-4 control-label"><?php echo ucwords(str_replace('_', ' ', __($fields[$i]))); ?></label>
                                    <div class="col-sm-8 input-group">
                                        <input type="text" class="form-control" id="<?php echo $fields[$i]; ?>" value="" disabled>
                                      <span class="input-group-btn">
                                        <button id="edit_<?php echo $fields[$i]; ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $fields[$i]; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                      </span>
                                    </div>
                                </div>
                                <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left">Additional Fields</span>
            <span class="pull-right"></span>
        </h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
<?php
if ( ! empty($data['fields'])) {
    foreach ($data['fields'] as $field) {
            if ($field->{'type'} == 'varchar') {
                echo '                    <div class="form-group">
                    <label for="' . $field->{'name'} . '" class="col-sm-4 control-label">' . $field->{'name'} . '</label>
                    <div class="input-group">
                      <input disabled type="text" class="form-control" placeholder="" id="' . $field->{'name'} . '" name="' . $field->{'name'} . '" value="">
                      <span class="input-group-btn">
                        <button id="edit_' . $field->{'name'} . '" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="' . $field->{'name'} . '"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                      </span>
                    </div>
                </div>' . "\n";
            }
            if ($field->{'type'} == 'list') {
                echo '                    <div class="form-group">
                    <label for="' . $field->{'name'} . '" class="col-sm-4 control-label">' . $field->{'name'} . '</label>
                    <div class="col-sm-8 input-group">
                        <select id="' . $field->{'name'} . '" class="form-control" disabled>' . "\n";
                          echo "                          <option value='' > </option>\n";
                        foreach (explode(',', $field->{'values'}) as $key => $value) {
                            echo "                          <option value='$value'$selected>".__("$value")."</option>\n";
                        }

                        echo '                        </select>
                        <span class="input-group-btn">
                          <button id="edit_' . $field->{'name'} . '" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="' . $field->{'name'} . '">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                          </button>
                        </span>
                    </div>
                </div>' . "\n";
            }
    }
}
?>
    </div>
    </div>
</div>



<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left">Actions</span>
            <span class="pull-right"></span>
        </h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label for="form_factor" class="col-sm-4 control-label">Create Credentials</label>
            <div class="col-sm-4 input-group">
                <a href="devices?sub_resource=credential&ids=<?php echo $this->response->meta->ids; ?>&action=update"><button type="button" class="btn btn-sm btn-success" aria-label="Left Align">Submit</button></a>
            </div>
        </div>
        <div class="form-group">
            <label for="form_factor" class="col-sm-4 control-label">Run Discovery</label>
            <div class="col-sm-4 input-group">
                <a href="discovery/discover_list?ids=<?php echo $this->response->meta->ids; ?>"><button type="button" class="btn btn-sm btn-success" aria-label="Left Align">Submit</button></a>
            </div>
        </div>
        <div class="form-group">
            <label for="form_factor" class="col-sm-4 control-label">Recalculate IP Address</label>
            <div class="col-sm-4 input-group">
                <a href="devices?sub_resource=ip&ids=<?php echo $this->response->meta->ids; ?>&action=update"><button type="button" class="btn btn-sm btn-success" aria-label="Left Align">Submit</button></a>
            </div>
        </div>
    </div>
</div>



<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left">Devices</span>
            <span class="pull-right"></span>
        </h3>
    </div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Icon</td>
                    <td>Type</td>
                    <td>Name</td>
                    <td>Domain</td>
                    <td>IP</td>
                    <td>Description</td>
                    <td>OS Family</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->response->devices as $item) { ?>
                <tr>
                    <td><a href="devices/<?php echo htmlentities($item->id); ?>"><button type="button" class="btn btn-sm btn-success" aria-label="Left Align"><?php echo htmlentities($item->id); ?></button></a></td>
                    <td style="text-align: center;"><img src="<?php echo str_replace("index.php", "", site_url()); ?>device_images/<?php echo strtolower(str_replace(" ", "_", htmlentities($item->icon))); ?>.svg" style="border-width:0px; width:24px;" title="icon" alt="icon"/></td></td>
                    <td><?php echo $item->type; ?></td>
                    <td><?php echo $item->name; ?></td>
                    <td><?php echo $item->domain; ?></td>
                    <td><span style="display:none;"><?php echo $item->ip; ?></span><?php echo ip_address_from_db($item->ip); ?></td>
                    <td><?php echo $item->description; ?></td>
                    <td><?php echo $item->os_family; ?></td>
                    <td><?php echo $item->status; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>