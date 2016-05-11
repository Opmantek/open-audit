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
<script type="text/javascript">
//<![CDATA[

$(document).ready( function() {
	$.NiceJForms.build();
});

function createRequestObject() {
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

function display_credentials() {
	<?php
    if (isset($this->config->config['show_passwords']) and $this->config->config['show_passwords'] != 'y') {
        $password_field = 'password';
    } else {
        $password_field = 'text';
    }
    if (isset($this->config->config['show_snmp_community']) and $this->config->config['show_snmp_community'] != 'y') {
        $snmp_community_field = 'password';
    } else {
        $snmp_community_field = 'text';
    }
    ?>
	status_text="<p><label for='ip_address'><?php echo __("IP Address"); ?>: <\/label><input type='text' id='ip_address' name='ip_address' value='<?php if (isset($decoded_access_details->ip_address) and $decoded_access_details->ip_address > '') { echo $decoded_access_details->ip_address; } elseif (isset($system[0]->man_ip_address) and $system[0]->man_ip_address != '' and $system[0]->man_ip_address != '000.000.000.000' and $system[0]->man_ip_address != '0.0.0.0') { echo ip_address_from_db($system[0]->man_ip_address); } ?>' \/><\/p> \
	<p><label for='snmp_version'><?php echo __("SNMP Version"); ?>: <\/label><input type='text' id='snmp_version' name='snmp_version' value='<?php if (isset($decoded_access_details->snmp_version) and $decoded_access_details->snmp_version > '') { echo $decoded_access_details->snmp_version; } else { echo '2c'; } ?>' \/><\/p> \
	<p><label for='snmp_community'><?php echo __("SNMP Community"); ?>: <\/label><input type='<?php echo $snmp_community_field; ?>' id='snmp_community' name='snmp_community' value='<?php if (isset($decoded_access_details->snmp_community) and $decoded_access_details->snmp_community > '') { echo $decoded_access_details->snmp_community; } else { echo $this->config->item('default_snmp_community'); } ?>' \/><\/p> \
	<p><label for='ssh_username'><?php echo __("SSH Username"); ?>: <\/label><input type='text' id='ssh_username' name='ssh_username' value='<?php echo $decoded_access_details->ssh_username; ?>' \/><\/p> \
	<p><label for='ssh_password'><?php echo __("SSH Password"); ?>: <\/label><input type='<?php echo $password_field; ?>' id='ssh_password' name='ssh_password' value='<?php echo $decoded_access_details->ssh_password; ?>'\ /><\/p> \
	<p><label for='windows_username'><?php echo __("Windows Username"); ?>: <\/label><input type='text' id='windows_username' name='windows_username' value='<?php echo $decoded_access_details->windows_username; ?>' \/><\/p> \
	<p><label for='windows_password'><?php echo __("Windows Password"); ?>: <\/label><input type='<?php echo $password_field; ?>' id='windows_password' name='windows_password' value='<?php echo $decoded_access_details->windows_password; ?>' \/><\/p> \
	<p><label for='windows_domain'><?php echo __("Windows Domain"); ?>: <\/label><input type='text' id='windows_domain' name='windows_domain' value='<?php if (isset($decoded_access_details->windows_domain) and $decoded_access_details->windows_domain > '') { echo $decoded_access_details->windows_domain; } elseif (isset($windows[0]->windows_domain_short)) { echo $windows[0]->windows_domain_short; } ?>' \/><\/p> \
	<p><label for='submit'><?php echo __("Update Credentials"); ?>: <\/label><input type='submit' id='submit' name='submit' value='Submit' \/><\/p> \
	<input type='hidden' id='system_id' name='system_id' value='<?php echo $system[0]->system_id; ?>' \/>";
	document.getElementById("credentials").innerHTML = status_text;
}

function display_man_environment() {
	status_text="<select id='man_environment' onchange='send_environment();'>\
	<option value=' '><?php echo __("Choose an Environment"); ?><\/option>\
	<option value='production'><?php echo __("Production"); ?><\/option>\
	<option value='dev'><?php echo __("Development"); ?><\/option>\
	<option value='dr'><?php echo __("Disaster Recovery"); ?><\/option>\
	<option value='eval'><?php echo __("Evaluation"); ?><\/option>\
	<option value='pre-prod'><?php echo __("PreProduction"); ?><\/option>\
	<option value='test'><?php echo __("Testing"); ?><\/option>\
	<option value='train'><?php echo __("Training"); ?><\/option>\
	<option value='uat'><?php echo __("User Acceptance Testing"); ?><\/option>\
	<\/select>";
	document.getElementById("man_environment_select").innerHTML = status_text;
}

function send_environment() {
	table_text=document.getElementById("man_environment").value;
	//http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_environment/'+table_text);
    data = "name=man_environment&value="+encodeURIComponent(table_text)+"&system_id="+formVars;
    http.open("POST", "<?php echo base_url();?>index.php/ajax/update_system_man", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
	http.onreadystatechange = receive_environment;
	//http.send(null);
}

function receive_environment() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      update="<span onclick='display_environment();'>"+http.responseText+"<\/span>";
      document.getElementById("man_environment_select").innerHTML = update;
    }
  }
}

function display_man_criticality() {
    status_text="<select id='man_criticality' onchange='send_criticality();'>\
    <option value=' '><?php echo __("Choose a Criticality"); ?><\/option>\
    <option value='critical'><?php echo __("Critical"); ?><\/option>\
    <option value='normal'><?php echo __("Normal"); ?><\/option>\
    <option value='low'><?php echo __("Low"); ?><\/option>\
    <\/select>";
    document.getElementById("man_criticality_select").innerHTML = status_text;
}

function send_criticality() {
    table_text=document.getElementById("man_criticality").value;
    //http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_criticality/'+table_text);
    //http.onreadystatechange = receive_criticality;
    data = "name=man_criticality&value="+encodeURIComponent(table_text)+"&system_id="+formVars;
    http.open("POST", "<?php echo base_url();?>index.php/ajax/update_system_man", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
    http.onreadystatechange = receive_criticality;
    //http.send(null);
}

function receive_criticality() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      update="<span onclick='display_man_criticality();'>"+http.responseText+"<\/span>";
      document.getElementById("man_criticality_select").innerHTML = update;
    }
  }
}

function display_man_oae_manage() {
	status_text="<select id='man_oae_manage' onchange='send_man_oae_manage();'>\
	<option value=' '><?php echo __("Choose"); ?><\/option>\
	<option value='y'><?php echo __("Yes"); ?><\/option>\
	<option value='n'><?php echo __("No"); ?><\/option>\
	<\/select>";
	document.getElementById("man_oae_manage_select").innerHTML = status_text;
}

function send_man_oae_manage() {
	table_text=document.getElementById("man_oae_manage").value;
	// http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_oae_manage/'+table_text);
	// http.onreadystatechange = receive_man_oae_manage;
	// http.send(null);
    data = "name=man_oae_manage&value="+encodeURIComponent(table_text)+"&system_id="+formVars;
    http.open("POST", "<?php echo base_url();?>index.php/ajax/update_system_man", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
    http.onreadystatechange = receive_man_oae_manage;
}

function receive_man_oae_manage() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      update="<span onclick='display_man_oae_manage();'>"+http.responseText+"<\/span>";
      document.getElementById("man_oae_manage_select").innerHTML = update;
    }
  }
}

function display_man_status() {
	status_text="<select id='man_status' onchange='send_status();'>\
	<option value=' '><?php echo __("Choose a status"); ?><\/option>\
	<option value='production'><?php echo __("Production"); ?><\/option>\
	<option value='deleted'><?php echo __("Deleted"); ?><\/option>\
	<option value='lost'><?php echo __("Lost"); ?><\/option>\
	<option value='maintenance'><?php echo __("Maintenance"); ?><\/option>\
	<option value='retired'><?php echo __("Retired"); ?><\/option>\
	<option value='unallocated'><?php echo __("Unallocated"); ?><\/option>\
	<\/select>";
	document.getElementById("man_status_select").innerHTML = status_text;
}

function send_status() {
	table_text=document.getElementById("man_status").value;
	// http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_status/'+table_text);
	// http.onreadystatechange = receive_status;
	// http.send(null);
    data = "name=man_status&value="+encodeURIComponent(table_text)+"&system_id="+formVars;
    http.open("POST", "<?php echo base_url();?>index.php/ajax/update_system_man", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
    http.onreadystatechange = receive_status;
}

function receive_status() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      update="<span onclick='display_man_status();'>"+http.responseText+"<\/span>";
      document.getElementById("man_status_select").innerHTML = update;
    }
  }
}

function display_man_class() {
	status_text="<select id='man_class' onchange='send_man_class();'>\
	<option value=' '><?php echo __("Choose a class"); ?><\/option>\
	<option value='desktop'><?php echo __("Desktop"); ?><\/option>\
	<option value='laptop'><?php echo __("Laptop"); ?><\/option>\
	<option value='tablet'><?php echo __("Tablet"); ?><\/option>\
	<option value='workstation'><?php echo __("Workstation"); ?><\/option>\
	<option value='server'><?php echo __("Server"); ?><\/option>\
	<option value='hypervisor'><?php echo __("Hypervisor"); ?><\/option>\
	<option value='virtual server'><?php echo __("Virtual Server"); ?><\/option>\
	<option value='virtual desktop'><?php echo __("Virtual Desktop"); ?><\/option>\
	<\/select>";
	document.getElementById("man_class_select").innerHTML = status_text;
}

function send_man_class() {
	table_text=document.getElementById("man_class").value;
	// http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_class/'+table_text);
	// http.onreadystatechange = receive_man_class;
	// http.send(null);
    data = "name=man_class&value="+encodeURIComponent(table_text)+"&system_id="+formVars;
    http.open("POST", "<?php echo base_url();?>index.php/ajax/update_system_man", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
    http.onreadystatechange = receive_man_class;
}

function receive_man_class() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      update="<span onclick='display_man_class();'>"+http.responseText+"<\/span>";
      document.getElementById("man_class_select").innerHTML = update;
    }
  }
}

function display_man_type() {
	// we now pass the list of device types from the controller
	// see the file controllers/include_device_types.php to edit
	type_text = "<select id='man_type' onchange='send_type();'><?php foreach ($device_types as $key => $value) {
    echo "<option value='$key'>".__("$value")."</option>";
} ?><\/select>";
	document.getElementById("man_type_select").innerHTML = type_text;
}

function send_type() {
	table_text=document.getElementById("man_type").value;
	// http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_type/'+table_text);
	// http.onreadystatechange = receive_type;
	// http.send(null);
    data = "name=man_type&value="+encodeURIComponent(table_text)+"&system_id="+formVars;
    http.open("POST", "<?php echo base_url();?>index.php/ajax/update_system_man", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
    http.onreadystatechange = receive_type;
}

function receive_type() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      update="<span onclick='display_man_type();'>"+http.responseText+"<\/span>";
      document.getElementById("man_type_select").innerHTML = update;
    }
  }
}

function display_nmis_role() {
	status_text="<select id='nmis_role' onchange='send_nmis_role();'>\
	<option value=' '><?php echo __("Choose an NMIS role"); ?></option>\
	<option value='access'>Access</option>\
	<option value='core'>Core</option>\
	<option value='distribution'>Distribution</option>\
	</select>";
	document.getElementById("nmis_role_select").innerHTML = status_text;
}

function send_nmis_role()
{
	table_text=document.getElementById("nmis_role").value;
	// http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/nmis_role/'+table_text);
	// http.onreadystatechange = receive_nmis_role;
	// http.send(null);
    data = "name=nmis_role&value="+encodeURIComponent(table_text)+"&system_id="+formVars;
    http.open("POST", "<?php echo base_url();?>index.php/ajax/update_system_man", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
    http.onreadystatechange = receive_nmis_role;
}

function receive_nmis_role() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      update="<span onclick='display_nmis_role();'>"+http.responseText+"<\/span>";
      document.getElementById("nmis_role_select").innerHTML = update;
    }
  }
}

function check_nmis_export() {
	table_text=document.getElementById("nmis_export").checked;
	//http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/nmis_export/'+state);
	//http.onreadystatechange = receive_nmis_export;
	//http.send(null);
    data = "name=nmis_export&value="+encodeURIComponent(table_text)+"&system_id="+formVars;
    http.open("POST", "<?php echo base_url();?>index.php/ajax/update_system_man", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
    http.onreadystatechange = receive_nmis_export;
}

function receive_nmis_export() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      document.getElementById("nmis_export_select").dataset.nmis = http.responseText;
      update="<span onclick='display_nmis_export();'>"+http.responseText+"<\/span>";
      document.getElementById("nmis_export_select").innerHTML = update;
    }
  }
}

function display_nmis_export2() {
	var $state = document.getElementById("nmis_export_select").dataset.nmis;
	var $select_true = "";
	var $select_false = "";
	if ($state == "true") { $select_true = "selected"; }
	if ($state == "false") { $select_false = "selected"; }
	status_text="<select id='nmis_export' onchange='send_nmis_export();'>\
	<option value='true' "+$select_true+">true</option>\
	<option value='false' "+$select_false+">false</option>\
	</select>";
	document.getElementById("nmis_export_select").innerHTML = status_text;
}

function send_nmis_export2()
{
	table_text=document.getElementById("nmis_export").value;
	// http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/nmis_export/'+table_text);
	// http.onreadystatechange = receive_nmis_export;
	// http.send(null);
    data = "name=nmis_export&value="+encodeURIComponent(table_text)+"&system_id="+formVars;
    http.open("POST", "<?php echo base_url();?>index.php/ajax/update_system_man", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
    http.onreadystatechange = receive_nmis_export2;
}

function receive_nmis_export2() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      document.getElementById("nmis_export_select").dataset.nmis = http.responseText;
      update="<span onclick='display_nmis_export();'>"+http.responseText+"<\/span>";
      document.getElementById("nmis_export_select").innerHTML = update;
    }
  }
}

function display_location() {
	<?php
    $location_form = "<option value=' '>".__("Choose a Location")."<\/option>";
    foreach ($locations as $location) {
        $location_form .= "<option value='".intval($location->id)."'>".htmlentities($location->name)."<\/option>";
    }
    if ($location_id != "") {
        $location_form = "<select id='man_location_id' onchange='send_location();'>".$location_form."<\/select>";
    } else {
        $location_form = "<select id='man_location_id' onchange='send_location();'><option value=' '>".__("Choose a location")."<\/option>".$location_form."<\/select>";
    }
    ?>
	status_text="<?php echo $location_form;?>";
	document.getElementById("man_location_id_select").innerHTML = status_text;
}

function send_location() {
	table_text=document.getElementById("man_location_id").value;
	// http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_location_id/'+table_text);
	// http.onreadystatechange = receive_location;
	// http.send(null);
    data = "name=man_location_id&value="+encodeURIComponent(table_text)+"&system_id="+formVars;
    http.open("POST", "<?php echo base_url();?>index.php/ajax/update_system_man", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
    http.onreadystatechange = receive_location;
}

function receive_location() {
	if(http.readyState == 4 && http.status == 200){
		// Text returned FROM the PHP script
		if(http.responseText) {
			// UPDATE ajaxTest content
			//update="<span onclick='display_location();'>"+http.responseText+"<\/span>";
			//document.getElementById("location_container").innerHTML = update;
			document.getElementById("location_container").innerHTML = http.responseText;
			//update=http.responseText+"<p><label for='man_location_rack'><?php echo __('Rack')?>: <\/label><span id='man_location_rack' <?php echo str_replace('"', "'", $edit)?>><?php echo print_something($location_rack)?><\/span><\/p><p><label for='man_location_rack_position'><?php echo __('Rack Position')?>: <\/label><span id='man_location_rack_position' <?php echo str_replace('"', "'", $edit)?>><?php echo print_something($location_rack_position)?><\/p>";
			document.getElementById("location_container").innerHTML = update;
		}
	}
}

function display_org() {
	<?php
    $org_form = "<option value=' '>".__("Choose an Org")."<\/option>";
    foreach ($orgs as $org) {
        $org_form .= "<option value='".intval($org->id)."'>".htmlentities($org->name)."<\/option>";
    }
    if ($org_id != "") {
        $org_form = "<select id='man_org_id' onchange='send_org();'>".$org_form."<\/select>";
    } else {
        $org_form = "<select id='man_org_id' onchange='send_org();'><option value=' '>".__("Choose an Org")."<\/option>".$org_form."<\/select>";
    }
    ?>
	status_text="<?php echo $org_form;?>";
	document.getElementById("man_org_id_select").innerHTML = status_text;
}

function send_org() {
	table_text=document.getElementById("man_org_id").value;
	// http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_org_id/'+table_text);
	// http.onreadystatechange = receive_org;
	// http.send(null);
    data = "name=man_org_id&value="+encodeURIComponent(table_text)+"&system_id="+formVars;
    http.open("POST", "<?php echo base_url();?>index.php/ajax/update_system_man", true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(data);
    http.onreadystatechange = receive_org;
}

function receive_org() {
	if(http.readyState == 4 && http.status == 200){
		// Text returned FROM the PHP script
		if(http.responseText) {
			// UPDATE ajaxTest content
			document.getElementById("org_container").innerHTML = http.responseText;
		}
	}
}

function upload_attachment()
{
	status_text=document.getElementById("attachment_listing").innerHTML;
	status_text=status_text+"<input type='hidden' id='system_id' name='system_id' value='"+formVars+"' /><input type='file' name='attachment' id='attachment' size='20' /><br /><?php echo __("Attachment Title"); ?>: <input type='text' name='title' id='title' size='20' /><br /><input type='submit' name='submit' value='Submit' id='submit'  />";
	document.getElementById("attachment_listing").innerHTML = status_text;
}

</script>

<script type="text/javascript">

function toggleBold(id) {
    var obj_item = document.getElementById(id);
    if (obj_item != null) {
        if (obj_item.style.fontWeight == "bold") {
            obj_item.style.fontWeight = "";
        } else {
            obj_item.style.fontWeight = "bold";
        }
    }
}

$(document).ready(function(){

	$('#view_summary_windows').hide();
	$('#view_summary_credentials').hide();
	$('#view_summary_purchase').hide();
	$('#view_summary_network').hide();
	$('#view_summary_audit_log').hide();
	$('#view_summary_change_log').hide();
    $('#view_summary_edit_log').hide();
	$('#view_summary_location').hide();
	$('#view_summary_custom').hide();
	$('#view_summary_attachment').hide();
	$('#view_summary_nmis').hide();
    $('#view_summary_module').hide();
    $('#view_summary_dns').hide();
    $('#view_summary_san').hide();
    $('#view_summary_san_disk').hide();
	<?php if ($system[0]->man_type == 'access point' or
        $system[0]->man_type == 'adsl modem' or
        $system[0]->man_type == 'bdsl modem' or
        $system[0]->man_type == 'cable modem' or
        $system[0]->man_type == 'dsl modem' or
        $system[0]->man_type == 'firewall' or
        $system[0]->man_type == 'gateway' or
        $system[0]->man_type == 'load balancer' or
        $system[0]->man_type == 'nas' or
        $system[0]->man_type == 'network device' or
        $system[0]->man_type == 'network ids' or
        $system[0]->man_type == 'network printer' or
        $system[0]->man_type == 'network scanner' or
        $system[0]->man_type == 'router' or
        $system[0]->man_type == 'switch' or
        $system[0]->man_type == 'voip gateway' or
        $system[0]->man_type == 'vpn terminator' or
        $system[0]->man_type == 'wan accelerator' or
        $system[0]->man_type == 'wap' or
        $system[0]->man_type == 'wireless router') {
    ?>
    $('#view_summary_network_interfaces').show();
    toggleBold("toggle_summary_network_interfaces");
	<?php } ?>
    <?php if ($system[0]->man_type == 'san') { ?>
        $('#view_summary_san').show();
        $('#view_summary_san_disk').show();
        $('#view_summary_network_interfaces').hide();
        toggleBold("toggle_summary_san");
        toggleBold("toggle_summary_san_disk");
    <?php } ?>
	<?php if (strpos($system[0]->man_type, 'phone') !== false) { ?>
        $('#view_summary_phone').show();
        toggleBold("toggle_summary_phone");
    <?php } ?>
	<?php if (count($vm) > 0) { ?>
        $('#view_summary_vms').show();
        toggleBold("toggle_summary_vms");
    <?php } ?>

    $( "#foo" ).trigger( "click" );





	$('#toggle_summary_windows').click(function(){
		$('#view_summary_windows').slideToggle("fast");
        toggleBold("toggle_summary_windows");
	});

	$('#toggle_summary_credentials').click(function(){
		$('#view_summary_credentials').slideToggle("fast");
        toggleBold("toggle_summary_credentials");
	});

	$('#toggle_summary_purchase').click(function(){
		$('#view_summary_purchase').slideToggle("fast");
        toggleBold("toggle_summary_purchase");
	});

	$('#toggle_summary_network').click(function(){
		$('#view_summary_network').slideToggle("fast");
        toggleBold("toggle_summary_network");
	});

	$('#toggle_summary_audit_log').click(function(){
		$('#view_summary_audit_log').slideToggle("fast");
        toggleBold("toggle_summary_audit_log");
	});

	$('#toggle_summary_edit_log').click(function(){
		$('#view_summary_edit_log').slideToggle("fast");
        toggleBold("toggle_summary_edit_log");
	});

	$('#toggle_summary_change_log').click(function(){
		$('#view_summary_change_log').slideToggle("fast");
        toggleBold("toggle_summary_change_log");
	});

	$('#toggle_summary_location').click(function(){
		$('#view_summary_location').slideToggle("fast");
        toggleBold("toggle_summary_location");
	});

	$('#toggle_summary_custom').click(function(){
		$('#view_summary_custom').slideToggle("fast");
        toggleBold("toggle_summary_custom");
	});

	$('#toggle_summary_attachment').click(function(){
		$('#view_summary_attachment').slideToggle("fast");
        toggleBold("toggle_summary_attachment");
	});

    $('#toggle_summary_nmis').click(function(){
        $('#view_summary_nmis').slideToggle("fast");
        toggleBold("toggle_summary_nmis");
    });

    $('#toggle_summary_san').click(function(){
        $('#view_summary_san').slideToggle("fast");
        toggleBold("toggle_summary_san");
    });

    $('#toggle_summary_san_disk').click(function(){
        $('#view_summary_san_disk').slideToggle("fast");
        toggleBold("toggle_summary_san_disk");
    });

	$('#toggle_summary_network_interfaces').click(function(){
		$('#view_summary_network_interfaces').slideToggle("fast");
        toggleBold("toggle_summary_network_interfaces");
	});

	<?php if (strpos($system[0]->man_type, 'phone') !== false) {
    ?>
	$('#toggle_summary_phone').click(function(){
		$('#view_summary_phone').slideToggle("fast");
        toggleBold("toggle_summary_phone");
	});
	<?php } ?>

	<?php if (count($vm) > 0) {
    ?>
	$('#toggle_summary_vms').click(function(){
		$('#view_summary_vms').slideToggle("fast");
        toggleBold("toggle_summary_vms");
	});
	<?php } ?>

	<?php if (count($module) > 0) {
    ?>
	$('#toggle_summary_module').click(function(){
		$('#view_summary_module').slideToggle("fast");
        toggleBold("toggle_summary_module");
	});
	<?php } ?>

    <?php if (count($dns) > 0) {
    ?>
    $('#toggle_summary_dns').click(function(){
        $('#view_summary_dns').slideToggle("fast");
        toggleBold("toggle_summary_dns");
    });
    <?php } ?>

	$('#view_hardware_processor').hide();
	$('#view_hardware_memory').hide();
	$('#view_hardware_bios').hide();
	$('#view_hardware_motherboard').hide();
    $('#view_hardware_scsi_controller').hide();
	$('#view_hardware_network').hide();
	$('#view_hardware_hard_drive').hide();
	$('#view_hardware_optical').hide();
	$('#view_hardware_video').hide();
	$('#view_hardware_monitor').hide();
	$('#view_hardware_sound').hide();
	$('#view_hardware_printer').hide();


	$('#toggle_hardware_processor').click(function(){
		$('#view_hardware_processor').slideToggle("fast");
        toggleBold("toggle_hardware_processor");
	});

	$('#toggle_hardware_memory').click(function(){
		$('#view_hardware_memory').slideToggle("fast");
        toggleBold("toggle_hardware_memory");
	});

	$('#toggle_hardware_bios').click(function(){
		$('#view_hardware_bios').slideToggle("fast");
        toggleBold("toggle_hardware_bios");
	});

	$('#toggle_hardware_motherboard').click(function(){
		$('#view_hardware_motherboard').slideToggle("fast");
        toggleBold("toggle_hardware_motherboard");
	});

    $('#toggle_hardware_scsi_controller').click(function(){
        $('#view_hardware_scsi_controller').slideToggle("fast");
        toggleBold("toggle_hardware_scsi_controller");
    });

	$('#toggle_hardware_network').click(function(){
		$('#view_hardware_network').slideToggle("fast");
        toggleBold("toggle_hardware_network");
	});

	$('#toggle_hardware_hard_drive').click(function(){
		$('#view_hardware_hard_drive').slideToggle("fast");
        toggleBold("toggle_hardware_hard_drive");
	});

	$('#toggle_hardware_optical').click(function(){
		$('#view_hardware_optical').slideToggle("fast");
        toggleBold("toggle_hardware_optical");
	});

	$('#toggle_hardware_video').click(function(){
		$('#view_hardware_video').slideToggle("fast");
        toggleBold("toggle_hardware_video");
	});

	$('#toggle_hardware_monitor').click(function(){
		$('#view_hardware_monitor').slideToggle("fast");
        toggleBold("toggle_hardware_monitor");
	});

	$('#toggle_hardware_sound').click(function(){
		$('#view_hardware_sound').slideToggle("fast");
        toggleBold("toggle_hardware_sound");
	});

	$('#toggle_hardware_printer').click(function(){
		$('#view_hardware_printer').slideToggle("fast");
        toggleBold("toggle_hardware_printer");
	});

	$('#view_software').hide();
	$('#view_update').hide();
	$('#view_library').hide();
	$('#view_software_services').hide();
	$('#view_codec').hide();
	$('#view_odbc').hide();
	$('#view_assembly').hide();
	$('#view_software_keys').hide();


	$('#toggle_software_installed').click(function(){
		$('#view_software').slideToggle("fast");
        toggleBold("toggle_software_installed");
	});

	$('#toggle_software_updates').click(function(){
		$('#view_update').slideToggle("fast");
        toggleBold("toggle_software_updates");
	});

	$('#toggle_software_library').click(function(){
		$('#view_library').slideToggle("fast");
        toggleBold("toggle_software_library");
	});

	$('#toggle_software_services').click(function(){
		$('#view_software_services').slideToggle("fast");
        toggleBold("toggle_software_services");
	});

	$('#toggle_software_codecs').click(function(){
		$('#view_codec').slideToggle("fast");
        toggleBold("toggle_software_codecs");
	});

	$('#toggle_software_odbc').click(function(){
		$('#view_odbc').slideToggle("fast");
        toggleBold("toggle_software_odbc");
	});

	$('#toggle_software_assembly').click(function(){
		$('#view_assembly').slideToggle("fast");
        toggleBold("toggle_software_assembly");
	});

	$('#toggle_software_keys').click(function(){
		$('#view_software_keys').slideToggle("fast");
        toggleBold("toggle_software_keys");
	});


    $('#view_settings_dns').hide();
    $('#view_settings_groups').hide();
    $('#view_settings_logs').hide();
    $('#view_settings_netstat').hide();
    $('#view_settings_pagefile').hide();
    $('#view_settings_print_queue').hide();
    $('#view_settings_routes').hide();
    $('#view_settings_shares').hide();
    $('#view_settings_tasks').hide();
    $('#view_settings_users').hide();
    $('#view_settings_variables').hide();


	$('#toggle_settings_pagefile').click(function(){
		$('#view_settings_pagefile').slideToggle("fast");
        toggleBold("toggle_settings_pagefile");
	});

    $('#toggle_settings_shares').click(function(){
        $('#view_settings_shares').slideToggle("fast");
        toggleBold("toggle_settings_shares");
    });

    $('#toggle_settings_tasks').click(function(){
        $('#view_settings_tasks').slideToggle("fast");
        toggleBold("toggle_settings_tasks");
    });

	$('#toggle_settings_routes').click(function(){
		$('#view_settings_routes').slideToggle("fast");
        toggleBold("toggle_settings_routes");
	});

	$('#toggle_settings_users').click(function(){
		$('#view_settings_users').slideToggle("fast");
        toggleBold("toggle_settings_users");
	});

	$('#toggle_settings_groups').click(function(){
		$('#view_settings_groups').slideToggle("fast");
        toggleBold("toggle_settings_groups");
	});

	$('#toggle_settings_print_queue').click(function(){
		$('#view_settings_print_queue').slideToggle("fast");
        toggleBold("toggle_settings_print_queue");
	});

	$('#toggle_settings_dns').click(function(){
		$('#view_settings_dns').slideToggle("fast");
        toggleBold("toggle_settings_dns");
	});

	$('#toggle_settings_netstat').click(function(){
		$('#view_settings_netstat').slideToggle("fast");
        toggleBold("toggle_settings_netstat");
	});

	$('#toggle_settings_logs').click(function(){
		$('#view_settings_logs').slideToggle("fast");
        toggleBold("toggle_settings_logs");
	});

	$('#toggle_settings_variables').click(function(){
		$('#view_settings_variables').slideToggle("fast");
        toggleBold("toggle_settings_variables");
	});

	$('#view_server_database').hide();
	$('#view_server_web').hide();


	$('#toggle_server_database').click(function(){
		$('#view_server_database').slideToggle("fast");
        toggleBold("toggle_server_database");
	});

	$('#toggle_server_web').click(function(){
		$('#view_server_web').slideToggle("fast");
        toggleBold("toggle_server_web");
	});

});

<?php
foreach ($additional_fields_data as $field) {
    if ($field->field_type == 'list') {

        $field_id = "custom_".htmlentities($field->field_type)."_".htmlentities($field->data_id)."_".htmlentities($field->field_id);
        $field_contents = "<select id='" . $field_id . "' onchange='send_additional_" . str_replace(' ', '_', $field->field_name) . "();' >";
        $values = explode(',', $field->field_values);
        $field_contents .= "<option></option>";
        $field_contents .= "<option value='-'>Remove Value</option>";
        foreach ($values as $value) {
            if ($field->data_value == $value) {
                $selected = ' selected ';
            } else {
                $selected = ' ';
            }
            $field_contents .= "<option value='" . $value . "'" . $selected . ">" . $value . "</option>";
        }
        $field_contents .= "</select>";
        ?>


        function display_additional_<?php echo str_replace(' ', '_', $field->field_name); ?>() {
            document.getElementById("<?php echo $field_id; ?>_outer").innerHTML = "<span id='custom_<?php echo htmlentities($field->field_type)."_".htmlentities($field->data_id)."_".htmlentities($field->field_id); ?>_inner'><?php echo $field_contents; ?></span>";
        }

        function send_additional_<?php echo str_replace(' ', '_', $field->field_name); ?>() {
            table_text=document.getElementById("<?php echo $field_id; ?>").value;
            // http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/<?php echo "custom_varchar_" . htmlentities($field->data_id) . "_" . $field->field_id; ?>/'+submitted_value);
            // http.onreadystatechange = receive_additional_<?php echo str_replace(' ', '_', $field->field_name); ?>;
            // http.send(null);
            data = "name=<?php echo "custom_varchar_" . htmlentities($field->data_id) . "_" . $field->field_id; ?>&value="+encodeURIComponent(table_text)+"&system_id="+formVars;
            http.open("POST", "<?php echo base_url();?>index.php/ajax/update_system_man", true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send(data);
            http.onreadystatechange = receive_additional_<?php echo str_replace(' ', '_', $field->field_name); ?>;
        }

        function receive_additional_<?php echo str_replace(' ', '_', $field->field_name); ?>() {
          if(http.readyState == 4 && http.status == 200){
            // Text returned FROM the PHP script
            if(http.responseText) {
              update = "<span id='custom_<?php echo htmlentities($field->field_type)."_".htmlentities($field->data_id)."_".htmlentities($field->field_id)."_inner"; ?>' onclick='display_additional_<?php echo str_replace(' ', '_', $field->field_name);?>();' >"+http.responseText+"</span>";
              document.getElementById("<?php echo $field_id; ?>_outer").innerHTML = update;
            }
          }
        }
        <?php } ?>
    <?php } ?>

//]]>
</script>
