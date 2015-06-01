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
 * @version 1.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (isset($error_message)) {
    $error_message = "<font color='red'>&nbsp;".$error_message."</font>";
} else {
    $error_message = "";
}

echo form_open('admin_system/add_system_def')."\n";
?>
<fieldset id="standard_fields" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Standard Fields')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' width='48'/>
	<p><?php echo $error_message; ?>&nbsp;</p>
	<table width='700'><tr><td valign='top'>
	<label for='name' style='width: 250px; padding: 3px 0px 0px 0px;'>Name:</label><input type='text' name='name' id='name' size='10' title='' onchange='update_man_type();' /><br />
	<?php
    for ($i = 0; $i<25; $i++) {
        $formatted_field = str_replace("Os ", "OS ", ucwords(str_replace("_", " ", str_replace("man_", "", $fields[$i]))));
        if (($fields[$i] == 'man_asset_number') or
            ($fields[$i] == 'man_criticality') or
            ($fields[$i] == 'man_description') or
            ($fields[$i] == 'man_environment') or
            ($fields[$i] == 'man_icon') or
            ($fields[$i] == 'man_ip_address') or
            ($fields[$i] == 'man_location_level') or
            ($fields[$i] == 'man_location_rack') or
            ($fields[$i] == 'man_location_rack_position') or
            ($fields[$i] == 'man_location_room') or
            ($fields[$i] == 'man_location_suite') or
            ($fields[$i] == 'man_manufacturer') or
            ($fields[$i] == 'man_model') or
            ($fields[$i] == 'man_owner') or
            ($fields[$i] == 'man_picture') or
            ($fields[$i] == 'man_purchase_amount') or
            ($fields[$i] == 'man_purchase_cost_center') or
            ($fields[$i] == 'man_purchase_date') or
            ($fields[$i] == 'man_purchase_invoice') or
            ($fields[$i] == 'man_purchase_order_number') or
            ($fields[$i] == 'man_purchase_vendor') or
            ($fields[$i] == 'man_serial') or
            ($fields[$i] == 'man_status') or
            ($fields[$i] == 'man_warranty_duration') or
            ($fields[$i] == 'man_warranty_expires') or
            ($fields[$i] == 'man_warranty_type')) {
            $checked = 'checked';
        } else {
            $checked = '';
        }
        echo "<label for='".$fields[$i]."' style='width: 250px; padding: 1px 0px 0px 0px;'>$formatted_field:</label><input type='checkbox' id='".$fields[$i]."' name='".$fields[$i]."' size='20' title='$formatted_field' $checked /><br />";
    }
    echo "</td><td valign='top'>"; ?>
	<label for='man_type' style='width: 250px; padding: 3px 0px 0px 0px;'>Type:</label><input type='text' name='man_type' id='man_type' size='10' title='' value='' readonly='readonly'/><br />
	<?php
    for ($i = 25; $i<count($fields); $i++) {
        $formatted_field = str_replace("Os ", "OS ", ucwords(str_replace("_", " ", str_replace("man_", "", $fields[$i]))));
        if (($fields[$i] == 'man_asset_number') or
            ($fields[$i] == 'man_criticality') or
            ($fields[$i] == 'man_description') or
            ($fields[$i] == 'man_environment') or
            ($fields[$i] == 'man_icon') or
            ($fields[$i] == 'man_ip_address') or
            ($fields[$i] == 'man_location_level') or
            ($fields[$i] == 'man_location_rack') or
            ($fields[$i] == 'man_location_rack_position') or
            ($fields[$i] == 'man_location_room') or
            ($fields[$i] == 'man_location_suite') or
            ($fields[$i] == 'man_manufacturer') or
            ($fields[$i] == 'man_model') or
            ($fields[$i] == 'man_owner') or
            ($fields[$i] == 'man_picture') or
            ($fields[$i] == 'man_purchase_amount') or
            ($fields[$i] == 'man_purchase_cost_center') or
            ($fields[$i] == 'man_purchase_date') or
            ($fields[$i] == 'man_purchase_invoice') or
            ($fields[$i] == 'man_purchase_order_number') or
            ($fields[$i] == 'man_purchase_vendor') or
            ($fields[$i] == 'man_serial') or
            ($fields[$i] == 'man_status') or
            ($fields[$i] == 'man_warranty_duration') or
            ($fields[$i] == 'man_warranty_expires') or
            ($fields[$i] == 'man_warranty_type')) {
            $checked = 'checked';
        } else {
            $checked = '';
        }
        echo "<label for='".$fields[$i]."' style='width: 250px; padding: 1px 0px 0px 0px;'>$formatted_field:</label><input type='checkbox' id='".$fields[$i]."' name='".$fields[$i]."' size='20' title='$formatted_field' $checked /><br />";
    }
    ?></td></tr></table>
</fieldset>
<br />
<!--
<fieldset id="custom_fields" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Custom Fields')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' width='48'/>
	<table width='500' name='custom_fields_table' id='custom_fields_table'><tr><th>Name</th><th>Type</th><th>Use This?</th></tr>
	<?php
    foreach ($custom_fields as $custom_field) {
        echo "<tr><td align='center' width='200'>".htmlentities($custom_field->field_name)."</td><td align='center' width='200'>".htmlentities($custom_field->field_type)."</td><td align='center' width='100'><input type='checkbox' id='custom_exist_".htmlentities($custom_field->field_name)."' name='custom_exist_".htmlentities($custom_field->field_name)."' size='20' title='custom_exist_".htmlentities($custom_field->field_name)."' /></td></tr>\n";
    }
    ?>
	</table>
	<table width='500'><tr><td align='center' width='200'><input type='button' name='AddCustom' value='Add a custom field' id='AddCustom' onclick='add_custom();'\/></td>
	<td width='200'></td>
	<td width='100'></td>
	</tr></table>
	<br />
	<span id='custom'>&nbsp;</span>
-->
</fieldset>
	<p><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?></p>
</form>
<script type="text/javascript">
count_custom = 0;
function update_man_type()
{
	document.getElementById("man_type").value = document.getElementById("name").value.replace(" ", "_").toLowerCase();
}

function add_custom()
{
	count_custom++;
	var table = document.getElementById("custom_fields_table");
	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);

	var cell1 = row.insertCell(0);
	cell1.align = "center";
	cell1.width = "200";
	var element1 = document.createElement("input");
	element1.type = "text";
	element1.size = "10";
	element1.name = "custom_new_name_" + count_custom;
	element1.id = "custom_new_name_" + count_custom;
	cell1.appendChild(element1);

	var cell2 = row.insertCell(1);
	cell2.align = "center";
	cell2.width = "200";
	var element2 = document.createElement("select");
	element2.type = "select";
	element2.name = "custom_new_type_" + count_custom;
	element2.id = "custom_new_type_" + count_custom;
	element2.options[0] = new Option('VarChar', 'varchar');
	element2.options[1] = new Option('Boolean', 'bool');
	element2.options[2] = new Option('Integer', 'int');
	element2.options[3] = new Option('Memo', 'memo');
	element2.options[4] = new Option('DateTime', 'datetime');
	cell2.appendChild(element2);

	var cell3 = row.insertCell(2);
	cell3.align = "center";
	cell3.width = "100";
	var element3 = document.createElement("input");
	element3.type = "checkbox";
	element3.name = "custom_new_use_" + count_custom;
	element3.id = "custom_new_use_" + count_custom;
	element3.checked = true;
	cell3.appendChild(element3);



}
</script>
