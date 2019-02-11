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
* @version   2.4.0
* @link      http://www.open-audit.org
 */
$fields = explode(' ', 'asset_number attached_system_id class cluster_name cluster_type comments contact_name description dns_domain dns_hostname domain environment form_factor fqdn function hostname ip lease_expiry_date locations location_latitude location_level location_longitude location_rack location_rack_position location_rack_size location_room location_suite manufacturer model name nmis_manage nmis_group nmis_name nmis_role oae_manage orgs os_bit os_family os_group os_installation_date os_name os_version owner patch_panel patch_panel_port printer_color purchase_amount purchase_cost_center purchase_date purchase_invoice purchase_order_number purchase_service_contract_number purchase_vendor serial serial_imei serial_sim service_network service_number service_plan service_provider service_type status switch_port switch_system_id types unlock_pin uuid vm_group vm_server_name wall_port warranty_duration warranty_expires warranty_type');
$field_count = intval(count($fields) / 2) + 1;
foreach ($this->response->included as $item) {
  $data[$item->type][] = $item->attributes;
}

$special = array();

$special['class'] = '<div class="form-group"><label for="class" class="col-sm-4 control-label">Class</label><div class="col-sm-8 input-group"><select id="class" class="form-control" disabled><option value="" label=" "> </option>';
foreach ($this->response->included as $item) {
    if ($item->type == 'attributes' and $item->attributes->resource == 'devices' and $item->attributes->type == 'class') {
        $special['class'] .= "<option value='" . htmlspecialchars($item->attributes->value, REPLACE_FLAGS, CHARSET) . "'>" . htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET) . "</option>";
    }
}
$special['class'] .= '</select><span class="input-group-btn"><button id="edit_class" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="class"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';


$special['environment'] = '<div class="form-group"><label for="environment" class="col-sm-4 control-label">Environment</label><div class="col-sm-8 input-group"><select id="environment" class="form-control" disabled><option value="" label=" "> </option>';
foreach ($this->response->included as $item) {
    if ($item->type == 'attributes' and $item->attributes->resource == 'devices' and $item->attributes->type == 'environment') {
        $special['environment'] .= "<option value='" . htmlspecialchars($item->attributes->value, REPLACE_FLAGS, CHARSET) . "'>" . htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET) . "</option>";
    }
}
$special['environment'] .= '</select><span class="input-group-btn"><button id="edit_environment" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="environment"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';


$special['locations'] = '<div class="form-group"><label for="location_id" class="col-sm-4 control-label">Location</label><div class="col-sm-8 input-group"><select id="location_id" class="form-control" disabled><option value="" label=" "> </option>';
if (!empty($data['locations'])) {
    foreach ($data['locations'] as $item) {
        $special['locations'] .= "<option value='" . intval($item->id) . "'>". htmlspecialchars($item->name, REPLACE_FLAGS, CHARSET) ."</option>";
    }
}
$special['locations'] .= '</select><span class="input-group-btn"><button id="edit_location_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="location_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';


$special['orgs'] = '<div class="form-group"><label for="org_id" class="col-sm-4 control-label">Organisation</label><div class="col-sm-8 input-group"><select id="org_id" class="form-control" disabled><option value="" label=" "> </option>';
foreach ($data['orgs'] as $item) {
    $special['orgs'] .= "<option value='" . intval($item->id) . "'>". htmlspecialchars($item->name, REPLACE_FLAGS, CHARSET) ."</option>";
}
$special['orgs'] .= '</select><span class="input-group-btn"><button id="edit_org_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="org_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';


$special['status'] = '<div class="form-group"><label for="status" class="col-sm-4 control-label">Status</label><div class="col-sm-8 input-group"><select id="status" class="form-control" disabled><option value="" label=" "> </option>';
foreach ($this->response->included as $item) {
    if ($item->type == 'attributes' and $item->attributes->resource == 'devices' and $item->attributes->type == 'status') {
        $special['status'] .= "<option value='" . htmlspecialchars($item->attributes->value, REPLACE_FLAGS, CHARSET) . "'>" . htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET) . "</option>";
    }
}
$special['status'] .= '</select><span class="input-group-btn"><button id="edit_status" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="status"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';


$special['types'] = '<div class="form-group"><label for="type" class="col-sm-4 control-label">Type</label><div class="col-sm-8 input-group"><select id="type" class="form-control" disabled><option value="" label=" "> </option>';
foreach ($this->response->included as $item) {
    if ($item->type == 'attributes' and $item->attributes->resource == 'devices' and $item->attributes->type == 'type') {
        $special['types'] .= "<option value='" . htmlspecialchars($item->attributes->value, REPLACE_FLAGS, CHARSET) . "'>" . htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET) . "</option>";
    }
}
$special['types'] .= '</select><span class="input-group-btn"><button id="edit_type" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="type"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';


$special['nmis_manage'] = '<div class="form-group"><label for="nmis_manage" class="col-sm-4 control-label">NMIS Manage</label><div class="col-sm-8 input-group"><select id="nmis_manage" class="form-control" disabled><option value="" label=" "> </option>';
$special['nmis_manage'] .= "<option value='y'>" . __('Yes') . "</option>";
$special['nmis_manage'] .= "<option value='n'>" . __('No') . "</option>";
$special['nmis_manage'] .= '</select><span class="input-group-btn"><button id="edit_nmis_manage" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="nmis_manage"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';


$special['oae_manage'] = '<div class="form-group"><label for="oae_manage" class="col-sm-4 control-label">Manage in Open-AudIT Enterprise</label><div class="col-sm-8 input-group"><select id="oae_manage" class="form-control" disabled><option value="" label=" "> </option>';
$special['oae_manage'] .= "<option value='y'>" . __('Yes') . "</option>";
$special['oae_manage'] .= "<option value='n'>" . __('No') . "</option>";
$special['oae_manage'] .= '</select><span class="input-group-btn"><button id="edit_oae_manage" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="oae_manage"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span></div></div>';

?>
<script>
var id = 0;
</script>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left"><?php echo __('Attributes'); ?></span>
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
                            <?php echo $special[htmlspecialchars($fields[$i], REPLACE_FLAGS, CHARSET)]; } else { ?>
                                <div class="form-group">
                                    <label for="form_factor" class="col-sm-4 control-label"><?php echo htmlspecialchars(ucwords(str_replace('_', ' ', __($fields[$i]))), REPLACE_FLAGS, CHARSET); ?></label>
                                    <div class="col-sm-8 input-group">
                                        <input type="text" class="form-control" id="<?php echo htmlspecialchars( $fields[$i], REPLACE_FLAGS, CHARSET); ?>" title="<?php echo htmlspecialchars( $fields[$i], REPLACE_FLAGS, CHARSET); ?>" value="" disabled>
                                      <span class="input-group-btn">
                                        <button id="edit_<?php echo htmlspecialchars( $fields[$i], REPLACE_FLAGS, CHARSET); ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo htmlspecialchars( $fields[$i], REPLACE_FLAGS, CHARSET); ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
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
                                    <label for="form_factor" class="col-sm-4 control-label"><?php echo htmlspecialchars(ucwords(str_replace('_', ' ', __($fields[$i]))), REPLACE_FLAGS, CHARSET); ?></label>
                                    <div class="col-sm-8 input-group">
                                        <input type="text" class="form-control" id="<?php echo htmlspecialchars( $fields[$i], REPLACE_FLAGS, CHARSET); ?>" title="<?php echo htmlspecialchars( $fields[$i], REPLACE_FLAGS, CHARSET); ?>" value="" disabled>
                                      <span class="input-group-btn">
                                        <button id="edit_<?php echo htmlspecialchars( $fields[$i], REPLACE_FLAGS, CHARSET); ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo htmlspecialchars( $fields[$i], REPLACE_FLAGS, CHARSET); ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
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
            <span class="text-left"><?php echo __('Fields'); ?></span>
            <span class="pull-right"></span>
        </h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
<?php
if (!empty($data['fields'])) {
    foreach ($data['fields'] as $field) {
        if ($field->{'type'} == 'varchar') {
            echo '                    <div class="form-group">
                <label for="' . htmlspecialchars( $field->{'name'}, REPLACE_FLAGS, CHARSET) . '" class="col-sm-4 control-label">' . htmlspecialchars( $field->{'name'}, REPLACE_FLAGS, CHARSET) . '</label>
                <div class="input-group">
                  <input disabled type="text" class="form-control"  id="' . htmlspecialchars( $field->{'name'}, REPLACE_FLAGS, CHARSET) . '" name="' . htmlspecialchars( $field->{'name'}, REPLACE_FLAGS, CHARSET) . '" value="">
                  <span class="input-group-btn">
                    <button id="edit_' . htmlspecialchars( $field->{'name'}, REPLACE_FLAGS, CHARSET) . '" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="' . htmlspecialchars( $field->{'name'}, REPLACE_FLAGS, CHARSET) . '"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                  </span>
                </div>
            </div>' . "\n";
        }
        if ($field->{'type'} == 'list') {
            echo '                    <div class="form-group">
                <label for="' . htmlspecialchars( $field->{'name'}, REPLACE_FLAGS, CHARSET) . '" class="col-sm-4 control-label">' . htmlspecialchars( $field->{'name'}, REPLACE_FLAGS, CHARSET) . '</label>
                <div class="col-sm-8 input-group">
                    <select id="' . htmlspecialchars( $field->{'name'}, REPLACE_FLAGS, CHARSET) . '" class="form-control" disabled>' . "\n";
                      echo "                          <option value='' > </option>\n";
            foreach (explode(',', $field->{'values'}) as $key => $value) {
                        echo "                          <option value='$value'>".__("$value")."</option>\n";
            }

                    echo '                        </select>
                    <span class="input-group-btn">
                      <button id="edit_' . htmlspecialchars( $field->{'name'}, REPLACE_FLAGS, CHARSET) . '" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="' . htmlspecialchars( $field->{'name'}, REPLACE_FLAGS, CHARSET) . '">
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
            <span class="text-left"><?php echo __('Actions'); ?></span>
            <span class="pull-right"></span>
        </h3>
    </div>
    <div class="panel-body">
    <!--
        <div class="form-group">
            <label for="form_factor" class="col-sm-4 control-label">Create Credentials</label>
            <div class="col-sm-4 input-group">
                <a role="button" class="btn btn-sm btn-success" href="devices?sub_resource=credential&ids=<?php echo $this->response->meta->ids; ?>&action=update">Submit</a>
            </div>
        </div>
    -->
        <div class="form-group">
            <label for="form_factor" class="col-sm-4 control-label"><?php echo __('Run Discovery'); ?></label>
            <div class="col-sm-4 input-group">
                <a role="button" class="btn btn-sm btn-success" href="devices?sub_resource=discovery&action=create&ids=<?php echo htmlspecialchars($this->response->meta->ids, REPLACE_FLAGS, CHARSET); ?>"><?php echo __('Submit'); ?></a>
            </div>
        </div>
    <!--
        <div class="form-group">
            <label for="form_factor" class="col-sm-4 control-label">Recalculate IP Address</label>
            <div class="col-sm-4 input-group">
                <a role="button" class="btn btn-sm btn-success" href="devices?sub_resource=ip&ids=<?php echo $this->response->meta->ids; ?>&action=update">Submit</a>
            </div>
        </div>
    -->
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left"><?php echo __('Devices'); ?></span>
            <span class="pull-right"></span>
        </h3>
    </div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <td style="text-align: center;"><?php echo __('ID'); ?></td>
                    <td style="text-align: center;"><?php echo __('Icon'); ?></td>
                    <td><?php echo __('Type'); ?></td>
                    <td><?php echo __('Name'); ?></td>
                    <td><?php echo __('Domain'); ?></td>
                    <td><?php echo __('IP'); ?></td>
                    <td><?php echo __('Description'); ?></td>
                    <td><?php echo __('OS Family'); ?></td>
                    <td><?php echo __('Status'); ?></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->response->devices as $item) { ?>
                <tr>
                    <td style="text-align: center;"><a role="button" class="btn btn-sm btn-success" href="devices/<?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?>"><?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?></a></td>
                    <td style="text-align: center;"><img src="<?php echo str_replace("index.php", "", site_url()); ?>device_images/<?php echo strtolower(str_replace(" ", "_", htmlspecialchars($item->icon, REPLACE_FLAGS, CHARSET))); ?>.svg" style="border-width:0; width:24px;" title="icon" alt="icon"/></td>
                    <td><?php echo htmlspecialchars( $item->type, REPLACE_FLAGS, CHARSET); ?></td>
                    <td><?php echo htmlspecialchars( $item->name, REPLACE_FLAGS, CHARSET); ?></td>
                    <td><?php echo htmlspecialchars( $item->domain, REPLACE_FLAGS, CHARSET); ?></td>
                    <td><span style="display:none;"><?php echo htmlspecialchars( $item->ip, REPLACE_FLAGS, CHARSET); ?></span><?php echo ip_address_from_db(htmlspecialchars( $item->ip, REPLACE_FLAGS, CHARSET)); ?></td>
                    <td><?php echo htmlspecialchars( $item->description, REPLACE_FLAGS, CHARSET); ?></td>
                    <td><?php echo htmlspecialchars( $item->os_family, REPLACE_FLAGS, CHARSET); ?></td>
                    <td><?php echo htmlspecialchars( $item->status, REPLACE_FLAGS, CHARSET); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>