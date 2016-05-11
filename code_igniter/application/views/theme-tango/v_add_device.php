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
if (isset($error_message)) {
    $error_message = "<font color='red'>&nbsp;".$error_message."</font>";
} else {
    $error_message = "";
}
$attributes = array('name' => 'add_device_form', 'id' => 'add_device_form');
echo form_open('admin_device/add_device', $attributes)."\n";
?>
<fieldset id="device_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Device Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_harddisk.png' alt='' title='' />
	<p>
		<label style='margin-top: 8px;' for='device_name' ><?php echo __('Name'); ?>: </label>
		<input style='padding-top: -2px;' type='text' id='device_name' name='device_name' tabindex='1' title='Device Name' onchange='update_icon()'/>
		<span>&nbsp;<img valign='middle' id="device_icon" src="<?php echo $oa_theme_images;?>/16_router.png" /></span>
	</p>
</fieldset>
<p><br /></p>
<p><br /></p>
<fieldset style="background: #ffffff;">
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Device Column Details'); ?></span></legend>
	<span>
		<select id='dynamic_other_table' name='dynamic_other_table' onchange='retrieve_fields();' style='width:250px;'>
			<option value='' selected='selected'>Choose a table from the DB</option>
			<?php
            $table_name = '';
            foreach ($tables as $table) {
                #$table_name = $table->table_name;
                if (mb_strpos($table, "sys") === 0) {
                    $table_name = str_replace('sys_', '', $table);
                    $table_name = str_replace('hw_', '', $table_name);
                    $table_name = str_replace('sw_', '', $table_name);
                    $table_name = str_replace('_', ' ', $table_name);
                    $table_name = ucwords($table_name);
                    echo "	<option value='".$table."'>".$table_name."</option>\n";
                } else {
                    // Not a usable table name - skip it
                }
            } ?>
		</select>
	</span>
	<span id='dynamic_other_field_span'>
		<select id='dynamic_other_field' name='dynamic_other_field' style='width:250px;'>
			<option value='' selected='selected'>Choose a field from the table</option>
		</select>
	</span>
	<span>
		<input type="button" onclick="add_new_column()" name="add_column" id="add_column" value="Add Column" />
	</span>
	<br />
	<table id="dynamic_display" cellspacing="1" class="tablesorter"  width="100%">
		<thead>
			<tr>
				<th width="30%">Table</th>
				<th width="30%">Column</th>
				<th width="40%">Order</th>
			</tr>
		</thead>
		<tbody>
			<!-- <tr style='display: none;'><td>1</td><td>2</td><td>3</td></tr> -->
			<tr id="row-1" name="row-1"><td>system</td><td>system_id</td><td><span style='float: left; padding-left: 10px;'>1</span></td></tr>
		</tbody>
	</table>
</fieldset>
<span id='data' name='data'></span>
<input type='hidden' value='system.system_id.1' name='field-1' id='field-1' />
<?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?>
<?php echo form_close(); ?>

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
document.getElementById("dynamic_other_table").value = "system";
retrieve_fields();
var order = 0;

function retrieve_fields()
{
	tabletext=document.getElementById("dynamic_other_table").value;
	http.open('get', '<?php echo $this->config->item('oa_web_index');?>/ajax/get_fields/'+tabletext);
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

function retrieve_field_values() {
	<!-- because the retrieve_fields ajax function expects to set something here -->
}

function add_new_column() {
	<!-- update = document.getElementById("dynamic_other_table").value + "." + document.getElementById("dynamic_other_field").value + " "; -->
	<!-- document.getElementById("dynamic_display").innerHTML = document.getElementById("dynamic_display").innerHTML + update; -->
	var table = document.getElementById("dynamic_display");
	var row = table.insertRow(-1);
	var rowCount = table.rows.length;
	var order = rowCount - 1;
	document.getElementById("data").innerHTML += "<br />ADD - Order: " + order + " Total Rows: " + table.rows.length;
	row.setAttribute("name", "row-"+order);
	row.setAttribute("id", "row-"+order);
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	cell1.innerHTML = document.getElementById("dynamic_other_table").value;
	cell2.innerHTML = document.getElementById("dynamic_other_field").value;
	cell3.innerHTML = "<span style='float: left; padding-left: 10px;'>" + order + "</span><span style='float: right; padding-right: 10px'><img src='<?php echo $oa_theme_images;?>/16_go-up.png' onclick='move_up("+order+")' /><img src='<?php echo $oa_theme_images;?>/16_go-down.png' onclick='move_down("+order+")' /><img src='<?php echo $oa_theme_images;?>/16_no.png' onclick='remove_column("+order+")' /></span>";
	if (isInt(order/2)){
		row.setAttribute("class", "even");
	} else {
		row.setAttribute("class", "odd");
	}
	$("table").tablesorter();
	$("table").trigger("update");

	var field = document.createElement("input");
	field.setAttribute("type","hidden");
	field.setAttribute("value",document.getElementById("dynamic_other_table").value+"."+document.getElementById("dynamic_other_field").value+"."+order);
	field.setAttribute("name","field-"+order);
	field.setAttribute("id","field-"+order);
	//add new element to the existing form
	document.getElementById("add_device_form").appendChild(field);
}

function remove_column(order) {

	<!-- remove all the hidden fields -->
	for (i = 1; i < 30; i +=1) {
		try {
			var field_to_remove = "field-"+i;
			var form_remove = document.getElementById("add_device_form");
			var hidden_remove = document.getElementById(field_to_remove);
			form_remove.removeChild(hidden_remove);
		} catch (e) {}
	}

	<!-- remove the row from the table -->
	var table = document.getElementById("dynamic_display");
	var row_id = document.getElementById("row-"+order).rowIndex;
	table.deleteRow(row_id);

	document.getElementById("data").innerHTML += "<br />REMOVE - Order: " + order + " Total Rows: " + table.rows.length;

	<!-- need to update all following rows -->
	var rowCount = table.rows.length;
	document.getElementById("data").innerHTML += "<br />LOOP - rowCount=" + rowCount;

	for (i = 1; i < rowCount; i += 1) {
		document.getElementById("data").innerHTML += "<br />i=" + i + "Column=" + table.rows[i].cells[1].innerHTML;
		table.rows[i].setAttribute("class", "even");
		table.rows[i].setAttribute("name", "row-"+i);
		table.rows[i].setAttribute("id", "row-"+i);
		table.rows[i].cells[2].innerHTML = "<span style='float: left; padding-left: 10px;'>" + i + "</span><span style='float: right; padding-right: 10px'><img src='<?php echo $oa_theme_images;?>/16_go-up.png' onclick='move_up("+i+")' /><img src='<?php echo $oa_theme_images;?>/16_go-down.png' onclick='move_down("+i+")' /><img src='<?php echo $oa_theme_images;?>/16_no.png' onclick='remove_column("+i+")' /></span>";

		var field = document.createElement("input");
		field.setAttribute("type","hidden");
		field.setAttribute("value",table.rows[i].cells[0].innerHTML+"."+table.rows[i].cells[1].innerHTML+"."+i);
		field.setAttribute("name","field-"+i);
		field.setAttribute("id","field-"+i);
		document.getElementById("add_device_form").appendChild(field);
	}
}

function move_up(order) {
	if (order == 0) { return; }
	var plus_one = order + 1;
	var minus_one = order - 1;
	var table = document.getElementById("dynamic_display");
	var row_id = document.getElementById("row-"+order).rowIndex;
	var row_id_above = document.getElementById("row-"+minus_one).rowIndex;

	var orig_table = table.rows[row_id].cells[0].innerHTML;
	var orig_column = table.rows[row_id].cells[1].innerHTML;

	var above_table = table.rows[row_id_above].cells[0].innerHTML;
	var above_column = table.rows[row_id_above].cells[1].innerHTML;

	table.rows[row_id].cells[0].innerHTML = above_table;
	table.rows[row_id].cells[1].innerHTML = above_column;

	table.rows[row_id_above].cells[0].innerHTML = orig_table;
	table.rows[row_id_above].cells[1].innerHTML = orig_column;

	document.getElementById("field-"+order).value = above_table + "." + above_column + "." + order;
	document.getElementById("field-"+minus_one).value = orig_table + "." + orig_column + "." + minus_one;
}

function move_down(order) {
	var plus_one = order + 1;
	var minus_one = order - 1;
	var plus_three = order + 3;
	var table = document.getElementById("dynamic_display");
	var rowCount = table.rows.length;
	var row_id = document.getElementById("row-"+order).rowIndex;
	var row_id_below = document.getElementById("row-"+plus_one).rowIndex;

	if (plus_three == rowCount) { return; }

	var orig_table = table.rows[row_id].cells[0].innerHTML;
	var orig_column = table.rows[row_id].cells[1].innerHTML;

	var below_table = table.rows[row_id_below].cells[0].innerHTML;
	var below_column = table.rows[row_id_below].cells[1].innerHTML;

	table.rows[row_id].cells[0].innerHTML = below_table;
	table.rows[row_id].cells[1].innerHTML = below_column;

	table.rows[row_id_below].cells[0].innerHTML = orig_table;
	table.rows[row_id_below].cells[1].innerHTML = orig_column;

	document.getElementById("field-"+order).value = below_table + "." + below_column + "." + order;
	document.getElementById("field-"+plus_one).value = orig_table + "." + orig_column + "." + plus_one;
}

function update_icon() {
	fieldtext = document.getElementById("device_name").value;
	<!-- document.getElementById("device_icon").value = fieldtext; -->
	document.getElementById("device_icon").src = '<?php echo $oa_theme_images;?>/16_'+fieldtext+'.png';
}

function isInt(n) {
	return n % 1 === 0;
}
</script>
