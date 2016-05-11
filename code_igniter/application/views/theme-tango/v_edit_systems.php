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
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>

<div style="float:left; width:100%;">
<?php
echo form_open('main/process_edit_systems')."\n";
?>
<input type="hidden" name="group_id" value="<?php echo $group_id; ?>" />
    <fieldset id="change_details" class='niceforms'>
    <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('System Details')?></span></legend>
    <table width="100%">
    <tr>
    <td width="50%">
    <label for="man_asset_number"><?php echo __('Asset Number'); ?>: </label><input type="text" name="man_asset_number" style="width: 200px" /><br /><br />
    <label for="man_class"><?php echo __('Class'); ?>: </label><select name="man_class" style="width: 200px">
        <option value="">&nbsp;</option>
        <option value="-"><?php echo __('REMOVE THE CLASS'); ?></option>
        <option value="desktop"><?php echo __('desktop'); ?></option>
        <option value="hypervisor"><?php echo __('hypervisor'); ?></option>
        <option value="laptop"><?php echo __('laptop'); ?></option>
        <option value="server"><?php echo __('server'); ?></option>
        <option value="tablet"><?php echo __('tablet'); ?></option>
        <option value="virtual server"><?php echo __('virtual server'); ?></option>
        <option value="virtual desktop"><?php echo __('virtual desktop'); ?></option>
        <option value="workstation"><?php echo __('workstation'); ?></option>
    </select><br /><br />
    <label for="man_cluster_name"><?php echo __('Cluster Name'); ?>: </label><input type="text" name="man_cluster_name" style="width: 200px" /><br /><br />
    <label for="man_criticaliy"><?php echo __('Criticality'); ?>: </label><select name="man_criticality" style="width: 200px"><option value="">&nbsp;</option><option value="critical"><?php echo __('Critical'); ?></option><option value="normal"><?php echo __('Normal'); ?></option><option value="low"><?php echo __('Low'); ?></option></select><br /><br />
    <label for="man_description"><?php echo __('Description'); ?>: </label><input type="text" name="man_description" style="width: 200px" /><br /><br />
    <label for="man_domain"><?php echo __('Domain'); ?>: </label><input type="text" name="man_domain" style="width: 200px" /><br /><br />
    <label for="man_environment"><?php echo __('Environment'); ?>: </label><select name="man_environment" style="width: 200px"><option value="">&nbsp;</option><option value="dev"><?php echo __('Development'); ?></option><option value="dr"><?php echo __('Disaster Recovery'); ?></option><option value="eval"><?php echo __('Evaluation'); ?></option><option value="pre-prod"><?php echo __('PreProduction'); ?></option><option value="production"><?php echo __('Production'); ?></option><option value="test"><?php echo __('Testing'); ?></option><option value="train"><?php echo __('Training'); ?></option><option value="uat"><?php echo __('User Acceptance testing'); ?></option></select><br /><br />
    <label for="man_form_factor"><?php echo __('Form Factor'); ?>: </label><input type="text" name="man_form_factor" style="width: 200px" /><br /><br />
    <label for="man_function"><?php echo __('Function'); ?>: </label><input type="text" name="man_function" style="width: 200px" /><br /><br />
    <label for="man_ip_address"><?php echo __('IP Address'); ?>: </label><input type="text" name="man_ip_address" style="width: 200px" /><br /><br />
    <label for="man_location_level"><?php echo __('Location Level'); ?>: </label><input type="text" name="man_location_level" style="width: 200px" /><br /><br />
    <label for="man_location_id"><?php echo __('Location Name'); ?>: </label><select name="man_location_id" style="width: 200px"><option value="">&nbsp;</option>
    <?php
    foreach ($locations as $location) {
        echo "<option value=\"".intval($location->id)."\">".htmlentities($location->name)."</option>\n";
    } ?>
    </select><br /><br />
    <label for="man_location_rack"><?php echo __('Location Rack'); ?>: </label><input type="text" name="man_location_rack" style="width: 200px" /><br /><br />
    <label for="man_location_rack_position"><?php echo __('Location Rack Position'); ?>: </label><input type="text" name="man_location_rack_position" style="width: 200px" /><br /><br />
    <label for="man_location_room"><?php echo __('Location Room'); ?>: </label><input type="text" name="man_location_room" style="width: 200px" /><br /><br />
    <label for="man_location_suite"><?php echo __('Location Suite'); ?>: </label><input type="text" name="man_location_suite" style="width: 200px" /><br /><br />
    <label for="man_manufacturer"><?php echo __('Manufacturer'); ?>: </label><input type="text" name="man_manufacturer" style="width: 200px" /><br /><br />
    <label for="man_model"><?php echo __('Model'); ?>: </label><input type="text" name="man_model" style="width: 200px" /><br /><br />
    <label for="man_org_id"><?php echo __('Organisation Name'); ?>: </label><select name="man_org_id" style="width: 200px"><option value="">&nbsp;</option>
    <?php
    foreach ($orgs as $org) {
        echo "<option value=\"".intval($org->id)."\">".htmlentities($org->name)."</option>\n";
    } ?>
    </select><br /><br />
    <label for="nmis_group"><?php echo __('NMIS Group'); ?>: </label><input type="text" name="nmis_group" style="width: 200px" /><br /><br />
    <label for="nmis_name"><?php echo __('NMIS Name'); ?>: </label><input type="text" name="nmis_name" style="width: 200px" /><br /><br />
    <label for="nmis_role"><?php echo __('NMIS Role'); ?>: </label><select name="nmis_role" style="width: 200px"><option value="">&nbsp;</option><option value="access"><?php echo __('Access'); ?></option><option value="core"><?php echo __('Core'); ?></option><option value="distribution"><?php echo __('Distribution'); ?></option></select><br /><br />
    <label for="man_oae_manage"><?php echo __('Open-AudIT Managed'); ?>: </label><select name="man_oae_manage" style="width: 200px"><option value="">&nbsp;</option><option value="y"><?php echo __('Yes'); ?></option><option value="n"><?php echo __('No'); ?></option></select><br /><br />
    <label for="man_os_family"><?php echo __('OS Family'); ?>: </label><input type="text" name="man_os_family" style="width: 200px" /><br /><br />
    <label for="man_os_group"><?php echo __('OS Group'); ?>: </label><input type="text" name="man_os_group" style="width: 200px" /><br /><br />
    <label for="man_os_name"><?php echo __('OS Name'); ?>: </label><input type="text" name="man_os_name" style="width: 200px" /><br /><br />
    <label for="run_discovery"><?php echo __('Run Discovery'); ?>: </label><input type="checkbox" id="run_discovery" name="run_discovery" value="yes"/> (<?php echo __('Should I run Discovery on all devices listed below?'); ?>)<br /><br />
    <label for="calculate_ip"><?php echo __('Recalculate IP Address'); ?>: </label><input type="checkbox" id="calculate_ip" name="calculate_ip" value="yes"/> (<?php echo __('Should I recalculate the main ip address for the devices below?'); ?>)<br /><br />
    </td>
    <td width="50%">
    <label for="man_owner"><?php echo __('Owner'); ?>: </label><input type="text" name="man_owner" style="width: 200px" /><br /><br />
    <label for="man_patch_panel"><?php echo __('Patch Panel'); ?>: </label><input type="text" name="man_patch_panel" style="width: 200px" /><br /><br />
    <label for="man_patch_panel_port"><?php echo __('Patch Panel Port'); ?>: </label><input type="text" name="man_patch_panel_port" style="width: 200px" /><br /><br />
    <label for="man_purchase_amount"><?php echo __('Purchase Amount'); ?>: </label><input type="text" name="man_purchase_amount" style="width: 200px" /><br /><br />
    <label for="man_purchase_cost_center"><?php echo __('Purchase Cost Center'); ?>: </label><input type="text" name="man_purchase_cost_center" style="width: 200px" /><br /><br />
    <label for="man_purchase_date"><?php echo __('Purchase Date'); ?>: </label><input type="text" name="man_purchase_date" style="width: 200px" /><br /><br />
    <label for="man_purchase_invoice"><?php echo __('Purchase Invoice Number'); ?>: </label><input type="text" name="man_purchase_invoice" style="width: 200px" /><br /><br />
    <label for="man_purchase_order_number"><?php echo __('Purchase Order Number'); ?>: </label><input type="text" name="man_purchase_order_number" style="width: 200px" /><br /><br />
    <label for="man_purchase_vendor"><?php echo __('Purchase Vendor'); ?>: </label><input type="text" name="man_purchase_vendor" style="width: 200px" /><br /><br />
    <label for="man_serial"><?php echo __('Serial'); ?>: </label><input type="text" name="man_serial" style="width: 200px" /><br /><br />
    <label for="snmp_community"><?php echo __('SNMP Community'); ?>: </label><input type="text" name="snmp_community" style="width: 200px" /><br /><br />
    <label for="snmp_community"><?php echo __('SNMP Version'); ?>: </label><select name="snmp_version" style="width: 200px" />(<option value="">&nbsp;</option><option value="1">1</option><option value="2c">2c</option></select><br /><br />
    <label for="man_status"><?php echo __('Status'); ?>: </label><select name="man_status" style="width: 200px"><option value="">&nbsp;</option><option value="production"><?php echo __('Production'); ?></option><option value="maintenance"><?php echo __('Maintenance'); ?></option><option value="retired"><?php echo __('Retired'); ?></option><option value="deleted"><?php echo __('Deleted'); ?></option></select><br /><br />
    <label for="ssh_username"><?php echo __('SSH Username'); ?>: </label><input type="text" name="ssh_username" style="width: 200px" /><br /><br />
    <label for="ssh_password"><?php echo __('SSH Password'); ?>: </label><input type="text" name="ssh_password" style="width: 200px" /><br /><br />
    <label for="man_switch_id"><?php echo __('Switch System ID'); ?>: </label><input type="text" name="man_switch_id" style="width: 200px" /><br /><br />
    <label for="man_switch_port"><?php echo __('Switch Port'); ?>: </label><input type="text" name="man_switch_port" style="width: 200px" /><br /><br />
    <label for="man_terminal_number"><?php echo __('Terminal Number'); ?>: </label><input type="text" name="man_terminal_number" style="width: 200px" /><br /><br />
    <label for="man_type"><?php echo __('Type'); ?>: </label><select name="man_type" style="width: 200px">
        <option value="">&nbsp;</option>
    <?php
    foreach ($device_types as $key => $value) {
        if ($value != '&nbsp;') {
            echo "<option value=\"".$key."\">".__($value)."</option>\n";
        }
    } ?>
    </select><br /><br />



    <label for="man_vm_group"><?php echo __('VM Group'); ?>: </label><input type="text" name="man_vm_group" style="width: 200px" /><br /><br />
    <label for="man_vm_server_name"><?php echo __('VM Server Name'); ?>: </label><input type="text" name="man_vm_server_name" style="width: 200px" /><br /><br />
    <label for="man_vm_system_id"><?php echo __('VM Server system ID'); ?>: </label><input type="text" name="man_vm_system_id" style="width: 200px" /><br /><br />
    <label for="man_wall_port"><?php echo __('Wall Port'); ?>: </label><input type="text" name="man_wall_port" style="width: 200px" /><br /><br />
    <label for="man_warranty_duration"><?php echo __('Warranty Duration'); ?>: </label><input type="text" name="man_warranty_duration" style="width: 200px" /><br /><br />
    <label for="man_warranty_expires"><?php echo __('Warranty Expires'); ?>: </label><input type="text" name="man_warranty_expires" style="width: 200px" /><br /><br />
    <label for="windows_username"><?php echo __('Windows Username'); ?>: </label><input type="text" name="windows_username" style="width: 200px" /><br /><br />
    <label for="windows_password"><?php echo __('Windows Password'); ?>: </label><input type="text" name="windows_password" style="width: 200px" /><br /><br />
    <label for="windows_domain"><?php echo __('Windows Domain'); ?>: </label><input type="text" name="windows_domain" style="width: 200px" /><br /><br />
    </td>
    </tr>
    </table>

    <?php
    foreach ($query as $key) {
        echo "<input type=\"hidden\" name=\"system_id_".$key->system_id."\" value=\"".$key->system_id."\" />\n";
    }
    ?>

    <?php if (isset($additional_fields) and is_array($additional_fields) and count($additional_fields) > 0) {
        echo "<fieldset>\n";
        echo "<legend><span style='font-size: 12pt;'>&nbsp;" . __('Additional Fields') . "</span></legend>";
        echo "<table><tr><td>\n";
        foreach ($additional_fields as $field) {
            echo "<label for=\"" . $field->field_name . "\">" . $field->field_name . "</label>";
            if ($field->field_type == 'varchar') {
                echo "<input type=\"text\" id=\"additional_" . $field->field_name . "\" name =\"additional_" . $field->field_name . "\" />";
            } elseif ($field->field_type == 'list') {
                echo "<select id=\"additional_" . $field->field_name . "\" name =\"additional_" . $field->field_name . "\" />";
                echo "<option value=\"\" selected></option>\n";
                echo "<option value=\"-\">Remove Value</option>\n";
                $values = explode(',', $field->field_values);
                foreach ($values as $value) {
                    echo "<option value=\"" . $value . "\">" . $value . "</option>\n";
                }
                echo "</select>\n";
            }
            echo "<br /><br />\n";
        }
        echo "</td></tr></table>\n";
        echo "</fieldset>\n";
    } ?>

        <tr>
        <br />
    <label for="submit">&nbsp;</label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?>
    <br /><br /><label for="note">&nbsp;</label><?php echo __('NOTE - To remove the contents of a field, insert a \'-\' (a dash or minus) into the field. Each device will have that fields contents set to an empty string.'); ?>
</fieldset>
<br /><br />
<fieldset id="system_details" class='niceforms'>
    <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('System Details')?></span></legend>
    <table cellspacing="1" class="tablesorter">
        <thead>
            <tr>
                <th width="100"><?php echo __('IP address')?></th>
                <th width="110"><?php echo __('System Name')?></th>
                <th width="140"><?php echo __('System Description')?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $key) {
                ?>
            <tr>
                <td><span style="display: none;"><?php echo htmlentities($key->man_ip_address)?></span><?php echo htmlentities(ip_address_from_db($key->man_ip_address))?></td>
                <td><a href="<?php echo base_url()?>index.php/main/system_display/<?php echo intval($key->system_id)?>"><?php echo htmlentities($key->hostname)?></a></td>
                <td><?php echo htmlentities($key->man_description)?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </fieldset>
</form>
</div>
