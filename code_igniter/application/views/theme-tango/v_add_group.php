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

<div id="groups" style="background: #FFFFFF; padding: 10px; display: block;">
<?php echo form_open('admin_group/process_add_group')."\n"; ?>
<fieldset id="group_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Group Details')?></span></legend>
	<p><label for='group_name'><?php echo __('Group Name'); ?>: </label><input type='text' id='group_name' name='group_name' tabindex='1' title='Group Name' /></p>
	<p><label for='group_padded_name'><?php echo __('Group Padded Name'); ?>: </label><input type='text' id='group_padded_name' name='group_padded_name' tabindex='2' title='Group Name' />NOTE - it's best to pad out names with IP Addresses for correct sorting - ie 192.168.020.034</p>
	<p><label for='group_description'><?php echo __('Group Description'); ?>: </label><input type='text' id='group_description' name='group_description' tabindex='3' title='Group Description' /></p>
	<p><label for='group_icon'><?php echo __('Group Icon'); ?>: </label><span id='icon'><input type='text' id='group_icon' name='group_icon' tabindex='4' title='Group Icon' />&nbsp;&nbsp;<img id='icon_image' src='#' alt='' title='' /></span></p>
	<label for='group_category'><?php echo __('Group Category'); ?>: </label>
	<select id='group_category' name='group_category' title='Group Category' onchange='update_icon()'>
		<option value=' ' selected='selected'>&nbsp;</option>
		<option value='application'><?php echo __('Application'); ?></option>
		<option value='device'><?php echo __('Device'); ?></option>
		<option value='general'><?php echo __('General'); ?></option>
		<option value='location'><?php echo __('Location'); ?></option>
		<option value='network'><?php echo __('Network'); ?></option>
		<option value='org' <?php if (isset($group_data->group_category) and $group_data->group_category == 'org') { echo "selected";} ?>><?php echo __('Organisation')?></option>
		<option value='os'><?php echo __('Operating System'); ?></option>
	</select>
</fieldset>
<p><br /></p>
<p><br /></p>
<fieldset style="background: #ffffff;">
<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Group Selection Details'); ?></span></legend>
	<fieldset id="group_selection" class='niceforms'>

		<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Assisted'); ?></span></legend>
		<span id='all_dynamic_choices'>

		<span id='dynamic_type_other'>
			<label for='dynamic_other_table'>Selection: </label>
			<select id='dynamic_other_table' name='dynamic_other_table' onchange='retrieve_fields();' style='width:250px;'>
				<option value='' selected='selected'>Choose a table from the DB</option>
				<?php
                $tables = array ('bios', 'disk', 'dns', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'optical', 'pagefile', 'partition', 'print_queue', 'processor', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'system', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
                foreach ($tables as $table) {
                	echo "	<option value='".$table."'>".$table."</option>\n";
                } ?>
			</select>
			<br />

			<label for='dynamic_other_field_span'>&nbsp;</label>
			<span id='dynamic_other_field_span'>
				<select id='dynamic_other_field' name='dynamic_other_field' onchange='retrieve_field_values();' style='width:250px;'>
					<option value='' selected='selected'>Choose a field from the table</option>
				</select>
			</span>

			<br />
			<label for='dynamic_other_eq'>&nbsp;</label>
			<select id='dynamic_other_eq' name='dynamic_other_eq' style='width:250px;'>
				<option value='equals' selected='selected'>equals</option>
				<option value='like'>like</option>
			</select>
			&nbsp;&nbsp;&nbsp;<?php echo __('NOTE - When using \'like\', % (percent) symbols are not needed'); ?>.

			<br />
			<label for='dynamic_other_text'>&nbsp;</label>
			<input type='text' id='dynamic_other_text' name='dynamic_other_text' style='width:245px;'/>

			&nbsp;&nbsp;OR&nbsp;&nbsp;
			<label for='dynamic_field_value'>&nbsp;</label>
			<span id='dynamic_field_value_span'>
			<select id='dynamic_field_value' name='dynamic_field_value'>
					<option value='' selected='selected'><?php echo __('Choose a field value from the list'); ?></option>
			</select>
			&nbsp;&nbsp;&nbsp;<?php echo __('NOTE - A typed value will over-rule a selected value'); ?>.
			</span>
		</span>
	</span>
	</fieldset>
	<h2>OR</h2>
	<fieldset id="group_selection_manual" class='niceforms'>
		<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Manual'); ?></span></legend>
		<p><label for='group_dynamic_select'><?php echo __('Select SQL'); ?>: </label><textarea name='group_dynamic_select' id='group_dynamic_select' rows='12' cols='120'></textarea></p>
	</fieldset>
</fieldset>
<p><br /></p>
<p><br /></p>
<?php $display_sql = "SELECT system.system_id, system.hostname, system.man_description, system.man_ip_address, system.man_type, system.man_os_family, system.man_os_name, system.icon FROM system, oa_group_sys WHERE system.system_id = oa_group_sys.system_id AND oa_group_sys.group_id = ? AND system.man_status = 'production' GROUP BY system.system_id"; ?>
<fieldset id="group_display_sql_fieldset" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Group Display SQL'); ?></span></legend>
	<p><label for='group_display_sql'><?php echo __('Display SQL'); ?>: </label><textarea name='group_display_sql' id='group_display_sql' rows='12' cols='120'><?php echo $display_sql; ?></textarea></p>
</fieldset>
<p><br /></p>
<p><br /></p>
<fieldset id="group_selection_columns" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Group Columns (to display)'); ?></span></legend>
	<table cellspacing="1" class="tablesorter">
		<thead>
		<tr>
			<th><?php echo __('Order'); ?></th>
			<th><?php echo __('Name'); ?></th>
			<th><?php echo __('Variable'); ?></th>
			<th><?php echo __('Type'); ?></th>
			<th><?php echo __('Link'); ?></th>
			<th><?php echo __('Secondary'); ?></th>
			<th><?php echo __('Ternary'); ?></th>
			<th><?php echo __('Alignment'); ?></th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td><input type='text' id='column_order_1' name='column_order_1' 		value='1' size='5' /></td>
			<td><input type='text' id='column_name_1' name='column_name_1' 			value='Icon' size='10' /></td>
			<td><input type='text' id='column_variable_1' name='column_variable_1' 	value='icon' size='10' /></td>
			<td><select id='column_type_1' name='column_type_1' title='Column Type' >
				<option value=''>&nbsp;</option>
				<option value='link'><?php echo __('Link'); ?></option>
				<option value='image' selected='selected'><?php echo __('Image'); ?></option>
				<option value='ip_address'><?php echo __('IP Address'); ?></option>
				<option value='text'><?php echo __('Text'); ?></option>
				<option value='timestamp'><?php echo __('Timestamp'); ?></option>
				<option value='url'><?php echo __('URL'); ?></option>
			</select></td>
			<td><input type='text' id='column_link_1' name='column_link_1' value='' /></td>
			<td><input type='text' id='column_secondary_1' name='column_secondary_1' value='man_os_family' size='10' /></td>
			<td><input type='text' id='column_ternary_1' name='column_ternary_1' value='' size='10' /></td>
			<td><select id='column_align_1' name='column_align_1' title='Column Alignment' >
				<option value='left'><?php echo __('Left'); ?></option>
				<option value='right'><?php echo __('Right'); ?></option>
				<option value='center' selected='selected'><?php echo __('Center'); ?></option>
			</select></td>
		</tr>

		<tr>
			<td><input type='text' id='column_order_2' name='column_order_2' 		value='2' size='5' /></td>
			<td><input type='text' id='column_name_2' name='column_name_2' 			value='Hostname' size='10' /></td>
			<td><input type='text' id='column_variable_2' name='column_variable_2' 	value='hostname' size='10' /></td>
			<td><select id='column_type_2' name='column_type_2' title='Column Type' >
				<option value=''>&nbsp;</option>
				<option value='link' selected='selected'><?php echo __('Link'); ?></option>
				<option value='image'><?php echo __('Image'); ?></option>
				<option value='ip_address'><?php echo __('IP Address'); ?></option>
				<option value='text'><?php echo __('Text'); ?></option>
				<option value='timestamp'><?php echo __('Timestamp'); ?></option>
				<option value='url'><?php echo __('URL'); ?></option>
			</select></td>
			<td><input type='text' id='column_link_2' name='column_link_2' value='/main/system_display/' /></td>
			<td><input type='text' id='column_secondary_2' name='column_secondary_2' value='system_id' size='10' /></td>
			<td><input type='text' id='column_ternary_2' name='column_ternary_2' value='' size='10' /></td>
			<td><select id='column_align_2' name='column_align_2' title='Column Alignment' >
				<option value='left' selected='selected'><?php echo __('Left'); ?></option>
				<option value='right'><?php echo __('Right'); ?></option>
				<option value='center'><?php echo __('Center'); ?></option>
			</select></td>
		</tr>

		<tr>
			<td><input type='text' id='column_order_3' name='column_order_3' 		value='3' size='5' /></td>
			<td><input type='text' id='column_name_3' name='column_name_3' 			value='IP Address' size='10' /></td>
			<td><input type='text' id='column_variable_3' name='column_variable_3' 	value='man_ip_address' size='10' /></td>
			<td><select id='column_type_3' name='column_type_3' title='Column Type' >
				<option value=''>&nbsp;</option>
				<option value='link'><?php echo __('Link'); ?></option>
				<option value='image'><?php echo __('Image'); ?></option>
				<option value='ip_address' selected='selected'><?php echo __('IP Address'); ?></option>
				<option value='text'><?php echo __('Text'); ?></option>
				<option value='timestamp'><?php echo __('Timestamp'); ?></option>
				<option value='url'><?php echo __('URL'); ?></option>
			</select></td>
			<td><input type='text' id='column_link_3' name='column_link_3' value='' /></td>
			<td><input type='text' id='column_secondary_3' name='column_secondary_3' value='' size='10' /></td>
			<td><input type='text' id='column_ternary_3' name='column_ternary_3' value='' size='10' /></td>
			<td><select id='column_align_3' name='column_align_3' title='Column Alignment' >
				<option value='left' selected='selected'><?php echo __('Left'); ?></option>
				<option value='right'><?php echo __('Right'); ?></option>
				<option value='center'><?php echo __('Center'); ?></option>
			</select></td>
		</tr>

		<tr>
			<td><input type='text' id='column_order_4' name='column_order_4' 		value='4' size='5' /></td>
			<td><input type='text' id='column_name_4' name='column_name_4' 			value='Type' size='10' /></td>
			<td><input type='text' id='column_variable_4' name='column_variable_4' 	value='man_type' size='10' /></td>
			<td><select id='column_type_4' name='column_type_4' title='Column Type' >
				<option value=''>&nbsp;</option>
				<option value='link'><?php echo __('Link'); ?></option>
				<option value='image'><?php echo __('Image'); ?></option>
				<option value='ip_address'><?php echo __('IP Address'); ?></option>
				<option value='text' selected='selected'><?php echo __('Text'); ?></option>
				<option value='timestamp'><?php echo __('Timestamp'); ?></option>
				<option value='url'><?php echo __('URL'); ?></option>
			</select></td>
			<td><input type='text' id='column_link_4' name='column_link_4' value='' /></td>
			<td><input type='text' id='column_secondary_4' name='column_secondary_4' value='' size='10' /></td>
			<td><input type='text' id='column_ternary_4' name='column_ternary_4' value='' size='10' /></td>
			<td><select id='column_align_4' name='column_align_4' title='Column Alignment' >
				<option value='left' selected='selected'><?php echo __('Left'); ?></option>
				<option value='right'><?php echo __('Right'); ?></option>
				<option value='center'><?php echo __('Center'); ?></option>
			</select></td>
		</tr>

		<tr>
			<td><input type='text' id='column_order_5' name='column_order_5'		value='5' size='5' /></td>
			<td><input type='text' id='column_name_5' name='column_name_5' 			value='Description' size='10' /></td>
			<td><input type='text' id='column_variable_5' name='column_variable_5' 	value='man_description' size='10' /></td>
			<td><select id='column_type_5' name='column_type_5' title='Column Type' >
				<option value=''>&nbsp;</option>
				<option value='link'><?php echo __('Link'); ?></option>
				<option value='image'><?php echo __('Image'); ?></option>
				<option value='ip_address'><?php echo __('IP Address'); ?></option>
				<option value='text' selected='selected'><?php echo __('Text'); ?></option>
				<option value='timestamp'><?php echo __('Timestamp'); ?></option>
				<option value='url'><?php echo __('URL'); ?></option>
			</select></td>
			<td><input type='text' id='column_link_5' name='column_link_5' value='' /></td>
			<td><input type='text' id='column_secondary_5' name='column_secondary_5' value='' size='10' /></td>
			<td><input type='text' id='column_ternary_5' name='column_ternary_5' value='' size='10' /></td>
			<td><select id='column_align_5' name='column_align_5' title='Column Alignment' >
				<option value='left' selected='selected'><?php echo __('Left'); ?></option>
				<option value='right'><?php echo __('Right'); ?></option>
				<option value='center'><?php echo __('Center'); ?></option>
			</select></td>
		</tr>

		<tr>
			<td><input type='text' id='column_order_6' name='column_order_6' 		value='6' size='5' /></td>
			<td><input type='text' id='column_name_6' name='column_name_6' 			value='OS / Device' size='10' /></td>
			<td><input type='text' id='column_variable_6' name='column_variable_6' 	value='man_os_name' size='10' /></td>
			<td><select id='column_type_6' name='column_type_6' title='Column Type' >
				<option value=''>&nbsp;</option>
				<option value='link'><?php echo __('Link'); ?></option>
				<option value='image'><?php echo __('Image'); ?></option>
				<option value='ip_address'><?php echo __('IP Address'); ?></option>
				<option value='text' selected='selected'><?php echo __('Text'); ?></option>
				<option value='timestamp'><?php echo __('Timestamp'); ?></option>
				<option value='url'><?php echo __('URL'); ?></option>
			</select></td>
			<td><input type='text' id='column_link_6' name='column_link_6' value='' /></td>
			<td><input type='text' id='column_secondary_6' name='column_secondary_6' value='' size='10' /></td>
			<td><input type='text' id='column_ternary_6' name='column_ternary_6' value='' size='10' /></td>
			<td><select id='column_align_6' name='column_align_6' title='Column Alignment' >
				<option value='left' selected='selected'><?php echo __('Left'); ?></option>
				<option value='right'><?php echo __('Right'); ?></option>
				<option value='center'><?php echo __('Center'); ?></option>
			</select></td>
		</tr>

		<tr>
			<td><input type='text' id='column_order_7' name='column_order_7' 		value='7' size='5' /></td>
			<td><input type='text' id='column_name_7' name='column_name_7' 			value='Tags' size='10' /></td>
			<td><input type='text' id='column_variable_7' name='column_variable_7' 	value='tag' size='10' /></td>
			<td><select id='column_type_7' name='column_type_7' title='Column Type' >
				<option value=''>&nbsp;</option>
				<option value='link'><?php echo __('Link'); ?></option>
				<option value='image'><?php echo __('Image'); ?></option>
				<option value='ip_address'><?php echo __('IP Address'); ?></option>
				<option value='text' selected='selected'><?php echo __('Text'); ?></option>
				<option value='timestamp'><?php echo __('Timestamp'); ?></option>
				<option value='url'><?php echo __('URL'); ?></option>
			</select></td>
			<td><input type='text' id='column_link_7' name='column_link_7' value='' /></td>
			<td><input type='text' id='column_secondary_7' name='column_secondary_7' value='' size='10' /></td>
			<td><input type='text' id='column_ternary_7' name='column_ternary_7' value='' size='10' /></td>
			<td><select id='column_align_6' name='column_align_7' title='Column Alignment' >
				<option value='left'><?php echo __('Left'); ?></option>
				<option value='right'><?php echo __('Right'); ?></option>
				<option value='center' selected='selected'><?php echo __('Center'); ?></option>
			</select></td>
		</tr>

		</tbody>
	</table>
</fieldset>
<p>
<?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?>
<?php echo $this->session->flashdata('message'); ?><br />&nbsp;</p>
<?php echo form_close(); ?>

</div>

<script type='text/javascript'>
function createRequestObject()
{
	var req;
	if(window.XMLHttpRequest){
		// Firefox, Safari, Opera...
		req = new XMLHttpRequest();
	} else if(window.ActiveXObject) {
		// Internet Explorer 5+
		req = new ActiveXObject("Microsoft.XMLHTTP");
	} else {
		// There is an error creating the object,
		// just as an old browser is being used.
		alert('Problem creating the XMLHttpRequest object');
	}
	return req;
}
var http = createRequestObject();

function retrieve_fields()
{
	tabletext=document.getElementById("dynamic_other_table").value;
	http.open('get', '<?php echo $this->config->item('oa_web_index'); ?>/ajax/get_fields/'+tabletext);
	http.onreadystatechange = handleResponseFields;
	http.send(null);
}

function handleResponseFields() {
	if((http.readyState == 4) && (http.status == 200)){
		// Text returned FROM the PHP script
		status_text = http.responseText;
		if(status_text) {
			// UPDATE ajaxTest content
			document.getElementById("dynamic_other_field_span").innerHTML = status_text;
		}
	}
}

function retrieve_field_values()
{
	tabletext=document.getElementById("dynamic_other_table").value;
	fieldtext=document.getElementById("dynamic_other_field").value;
	http.open('get', '<?php echo $this->config->item('oa_web_index'); ?>/ajax/get_field_values/'+tabletext+'/'+fieldtext);
	http.onreadystatechange = handleResponseValues;
	http.send(null);
}

function handleResponseValues() {
	if((http.readyState == 4) && (http.status == 200)){
		// Text returned FROM the PHP script
		status_text = http.responseText;
		if(status_text) {
			// UPDATE ajaxTest content
			document.getElementById("dynamic_field_value_span").innerHTML = status_text;
		}
	}
}

function update_icon() {
	fieldtext = document.getElementById("group_category").value;
	document.getElementById("group_icon").value = fieldtext;
	document.getElementById("icon_image").src = '<?php echo $oa_theme_images;?>/16_'+fieldtext+'.png';
}
</script>
