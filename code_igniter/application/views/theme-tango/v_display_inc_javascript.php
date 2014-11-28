<?php 
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.5.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
<script type="text/javascript">
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
	if (isset($config->show_passwords) and $config->show_passwords != 'y') {
		$password_field = 'password';
	} else {
		$password_field = 'text';
	}
	if (isset($config->show_snmp_community) and $config->show_snmp_community != 'y') {
		$snmp_community_field = 'password';
	} else {
		$snmp_community_field = 'text';
	}
	?>
	status_text="<p><label for='ip_address'><?php echo __("IP Address"); ?>: <\/label><input type='text' id='ip_address' name='ip_address' value='<?php if (isset($decoded_access_details->ip_address) and $decoded_access_details->ip_address > '') { echo $decoded_access_details->ip_address; } elseif (isset($system[0]->man_ip_address) and $system[0]->man_ip_address != '' and $system[0]->man_ip_address != '000.000.000.000' and $system[0]->man_ip_address != '0.0.0.0') { echo ip_address_from_db($system[0]->man_ip_address); } ?>' \/><\/p> \
	<p><label for='snmp_version'><?php echo __("SNMP Version"); ?>: <\/label><input type='text' id='snmp_version' name='snmp_version' value='<?php if (isset($decoded_access_details->snmp_version) and $decoded_access_details->snmp_version > '') { echo $decoded_access_details->snmp_version; } else { echo '2c'; } ?>' \/><\/p> \
	<p><label for='snmp_community'><?php echo __("SNMP Community"); ?>: <\/label><input type='<?php echo $snmp_community_field; ?>' id='snmp_community' name='snmp_community' value='<?php if (isset($decoded_access_details->snmp_community) and $decoded_access_details->snmp_community > '') { echo $decoded_access_details->snmp_community; } else { echo $config->default_snmp_community; } ?>' \/><\/p> \
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
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_environment/'+table_text);
	http.onreadystatechange = receive_environment;
	http.send(null);
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
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_status/'+table_text);
	http.onreadystatechange = receive_status;
	http.send(null);
}

function receive_status() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      update="<span onclick='display_status();'>"+http.responseText+"<\/span>";
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
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_class/'+table_text);
	http.onreadystatechange = receive_man_class;
	http.send(null);
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
	type_text = "<select id='man_type' onchange='send_type();'><?php foreach($device_types as $key => $value) { echo "<option value='$key'>" . __("$value") . "</option>"; } ?><\/select>";
	document.getElementById("man_type_select").innerHTML = type_text;
}

function send_type() {
	table_text=document.getElementById("man_type").value;
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_type/'+table_text);
	http.onreadystatechange = receive_type;
	http.send(null);
}

function receive_type() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      update="<span onclick='display_type();'>"+http.responseText+"<\/span>";
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
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/nmis_role/'+table_text);
	http.onreadystatechange = receive_nmis_role;
	http.send(null);
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
	var state = document.getElementById("nmis_export").checked;
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/nmis_export/'+state);
	//http.onreadystatechange = receive_nmis_export;
	http.send(null);
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
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/nmis_export/'+table_text);
	http.onreadystatechange = receive_nmis_export;
	http.send(null);
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
	$location_form = "<option value=' '>" . __("Choose a Location") . "<\/option>";
	foreach ($locations as $location) {
		$location_form .= "<option value='" . $location->location_id . "'>" . $location->location_name . "<\/option>";
	}
	if ($location_id <> "") {
		$location_form = "<select id='man_location_id' onchange='send_location();'>" . $location_form . "<\/select>";
	} else {
		$location_form = "<select id='man_location_id' onchange='send_location();'><option value=' '>" . __("Choose a location") . "<\/option>" . $location_form . "<\/select>";
	}
	?>
	status_text="<?php echo $location_form;?>";
	document.getElementById("man_location_id_select").innerHTML = status_text;
}

function send_location() {
	table_text=document.getElementById("man_location_id").value;
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_location_id/'+table_text);
	http.onreadystatechange = receive_location;
	http.send(null);
}

function receive_location() {
	if(http.readyState == 4 && http.status == 200){
		// Text returned FROM the PHP script
		if(http.responseText) {
			// UPDATE ajaxTest content
			//update="<span onclick='display_location();'>"+http.responseText+"<\/span>";
			//document.getElementById("location_container").innerHTML = update;
			document.getElementById("location_container").innerHTML = http.responseText;
			update=http.responseText+"<p><label for='man_location_rack'><?php echo __('Rack')?>: <\/label><span id='man_location_rack' <?php echo str_replace('"', "'", $edit)?>><?php echo print_something($location_rack)?><\/span><\/p><p><label for='man_location_rack_position'><?php echo __('Rack Position')?>: <\/label><span id='man_location_rack_position' <?php echo str_replace('"', "'", $edit)?>><?php echo print_something($location_rack_position)?><\/p>";
			document.getElementById("location_container").innerHTML = update;
		}
	}
}

function display_org() {
	<?php
	$org_form = "<option value=' '>" . __("Choose an Org") . "<\/option>";
	foreach ($orgs as $org) {
		$org_form .= "<option value='" . $org->org_id . "'>" . $org->org_name . "<\/option>";
	}
	if ($org_id <> "") {
		$org_form = "<select id='man_org_id' onchange='send_org();'>" . $org_form . "<\/select>";
	} else {
		$org_form = "<select id='man_org_id' onchange='send_org();'><option value=' '>" . __("Choose an Org") . "<\/option>" . $org_form . "<\/select>";
	}
	?>
	status_text="<?php echo $org_form;?>";
	document.getElementById("man_org_id_select").innerHTML = status_text;
}

function send_org() {
	table_text=document.getElementById("man_org_id").value;
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_org_id/'+table_text);
	http.onreadystatechange = receive_org;
	http.send(null);
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
	status_text=status_text+"<input type='hidden' id='system_id' name='system_id' value='"+formVars+"' /><input type='file' name='attachment' id='attachment' size='20' /><br /><?php echo __("Attachment Title"); ?>: <input type='text' name='title' id='title' size='20' /><br /><input type='submit' name='submit' id='submit' value='Submit' />";
	document.getElementById("attachment_listing").innerHTML = status_text;
}

</script>

<script type="text/javascript">

var summary_toggle = 0;
var hardware_toggle = 0;
var software_toggle = 0;
var settings_toggle = 0;
var server_toggle = 0;

$(document).ready(function(){
	
	$('#view_summary_windows').hide();
	$('#view_summary_credentials').hide();
	$('#view_summary_purchase').hide();
	$('#view_summary_network').hide();
	$('#view_summary_audits').hide();
	$('#view_summary_audit_log').hide();
	$('#view_summary_alerts').hide();
	$('#view_summary_location').hide();
	$('#view_summary_custom').hide();
	$('#view_summary_attachment').hide();
	$('#view_summary_nmis').hide();
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
		$system[0]->man_type == 'san' or
		$system[0]->man_type == 'switch' or
		$system[0]->man_type == 'voip gateway' or
		$system[0]->man_type == 'vpn terminator' or
		$system[0]->man_type == 'wan accelerator' or
		$system[0]->man_type == 'wap' or
		$system[0]->man_type == 'wireless router' ) { ?>
	$('#view_summary_network_interfaces').show();
	<?php } ?>
	<?php if (strpos($system[0]->man_type, 'phone') !== false) { ?>$('#view_summary_phone').show();<?php } ?>
	<?php if (count($vm) > 0) { ?>$('#view_summary_vms').show();<?php } ?>





	$('#toggle_summary_windows').click(function(){
		$('#view_summary_windows').slideToggle("fast");
	});

	$('#toggle_summary_credentials').click(function(){
		$('#view_summary_credentials').slideToggle("fast");
	});

	$('#toggle_summary_purchase').click(function(){
		$('#view_summary_purchase').slideToggle("fast");
	});

	$('#toggle_summary_network').click(function(){
		$('#view_summary_network').slideToggle("fast");
	});

	$('#toggle_summary_audits').click(function(){
		$('#view_summary_audits').slideToggle("fast");
	});

	$('#toggle_summary_audit_log').click(function(){
		$('#view_summary_audit_log').slideToggle("fast");
	});

	$('#toggle_summary_alert_log').click(function(){
		$('#view_summary_alerts').slideToggle("fast");
	});

	$('#toggle_summary_location').click(function(){
		$('#view_summary_location').slideToggle("fast");
	});

	$('#toggle_summary_custom').click(function(){
		$('#view_summary_custom').slideToggle("fast");
	});

	$('#toggle_summary_attachment').click(function(){
		$('#view_summary_attachment').slideToggle("fast");
	});

	$('#toggle_summary_nmis').click(function(){
		$('#view_summary_nmis').slideToggle("fast");
	});

	$('#toggle_summary_network_interfaces').click(function(){
		$('#view_summary_network_interfaces').slideToggle("fast");
	});

	<?php if (strpos($system[0]->man_type, 'phone') !== false) { ?>
	$('#toggle_summary_phone').click(function(){
		$('#view_summary_phone').slideToggle("fast");
	});
	<?php } ?>

	<?php if (count($vm) > 0) { ?>
	$('#toggle_summary_vms').click(function(){
		$('#view_summary_vms').slideToggle("fast");
	});
	<?php } ?>

	$('#toggle_summary_all').click(function(){
		if (summary_toggle == 0)
		{
			$('#view_summary_windows').show("fast");
			$('#view_summary_credentials').show("fast");
			$('#view_summary_purchase').show("fast");
			$('#view_summary_network').show("fast");
			$('#view_summary_audits').show("fast");
			$('#view_summary_audit_log').show("fast");
			$('#view_summary_alerts').show("fast");
			$('#view_summary_location').show("fast");
			$('#view_summary_custom').show("fast");
			$('#view_summary_attachment').show("fast");
			$('#view_summary_nmis').show("fast");
			$('#view_summary_network_interfaces').show("fast");
			<?php if (strpos($system[0]->man_type, 'phone') !== false) { ?>$('#view_summary_phone').show("fast");<?php } ?>
			<?php if (count($vm) > 0) { ?>$('#view_summary_vms').show("fast");<?php } ?>
			summary_toggle = 1;
		}
		else 
		{
			$('#view_summary_windows').hide("fast");
			$('#view_summary_credentials').hide("fast");
			$('#view_summary_purchase').hide("fast");
			$('#view_summary_network').hide("fast");
			$('#view_summary_audits').hide("fast");
			$('#view_summary_audit_log').hide("fast");
			$('#view_summary_alerts').hide("fast");
			$('#view_summary_location').hide("fast");
			$('#view_summary_custom').hide("fast");
			$('#view_summary_attachment').hide("fast");
			$('#view_summary_nmis').hide("fast");
			$('#view_summary_network_interfaces').hide("fast");
			<?php if (strpos($system[0]->man_type, 'phone') !== false) { ?>$('#view_summary_phone').hide("fast");<?php } ?>
			<?php if (count($vm) > 0) { ?>$('#view_summary_vms').hide("fast");<?php } ?>
			summary_toggle = 0;
		}
	});


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
	});

	$('#toggle_hardware_memory').click(function(){
		$('#view_hardware_memory').slideToggle("fast");
	});
 
	$('#toggle_hardware_bios').click(function(){
		$('#view_hardware_bios').slideToggle("fast");
	});   

	$('#toggle_hardware_motherboard').click(function(){
		$('#view_hardware_motherboard').slideToggle("fast");
	});   

	$('#toggle_hardware_scsi_controller').click(function(){
		$('#view_hardware_scsi_controller').slideToggle("fast");
	});

	$('#toggle_hardware_network').click(function(){
		$('#view_hardware_network').slideToggle("fast");
	});

	$('#toggle_hardware_hard_drive').click(function(){
		$('#view_hardware_hard_drive').slideToggle("fast");
	});

	$('#toggle_hardware_optical').click(function(){
		$('#view_hardware_optical').slideToggle("fast");
	});

	$('#toggle_hardware_video').click(function(){
		$('#view_hardware_video').slideToggle("fast");
	});

	$('#toggle_hardware_monitor').click(function(){
		$('#view_hardware_monitor').slideToggle("fast");
	});

	$('#toggle_hardware_sound').click(function(){
		$('#view_hardware_sound').slideToggle("fast");
	});

	$('#toggle_hardware_printer').click(function(){
		$('#view_hardware_printer').slideToggle("fast");
	});

	$('#toggle_hardware_all').click(function(){
	if (hardware_toggle == 0)
	{
			$('#view_hardware_processor').show("fast");
			$('#view_hardware_memory').show("fast");
			$('#view_hardware_bios').show("fast");
			$('#view_hardware_motherboard').show("fast");
			$('#view_hardware_scsi_controller').show("fast");
			$('#view_hardware_network').show("fast");
			$('#view_hardware_hard_drive').show("fast");
			$('#view_hardware_optical').show("fast");
			$('#view_hardware_video').show("fast");
			$('#view_hardware_monitor').show("fast");
			$('#view_hardware_sound').show("fast");
			$('#view_hardware_printer').show("fast");
			hardware_toggle = 1;
		}
		else 
		{
			$('#view_hardware_processor').hide("fast");
			$('#view_hardware_memory').hide("fast");
			$('#view_hardware_bios').hide("fast");
			$('#view_hardware_motherboard').hide("fast");
			$('#view_hardware_scsi_controller').hide("fast");
			$('#view_hardware_network').hide("fast");
			$('#view_hardware_hard_drive').hide("fast");
			$('#view_hardware_optical').hide("fast");
			$('#view_hardware_video').hide("fast");
			$('#view_hardware_monitor').hide("fast");
			$('#view_hardware_sound').hide("fast");
			$('#view_hardware_printer').hide("fast");
			hardware_toggle = 0;
		}
	});

	$('#view_software_installed').hide();
	$('#view_software_updates').hide();
	$('#view_software_library').hide();
	$('#view_software_services').hide();
	$('#view_software_codecs').hide();
	$('#view_software_odbc').hide();
	$('#view_software_assembly').hide();
	$('#view_software_keys').hide();


	$('#toggle_software_installed').click(function(){
		$('#view_software_installed').slideToggle("fast");
	});

	$('#toggle_software_updates').click(function(){
		$('#view_software_updates').slideToggle("fast");
	});

	$('#toggle_software_library').click(function(){
		$('#view_software_library').slideToggle("fast");
	});

	$('#toggle_software_services').click(function(){
		$('#view_software_services').slideToggle("fast");
	});

	$('#toggle_software_codecs').click(function(){
		$('#view_software_codecs').slideToggle("fast");
	});

	$('#toggle_software_odbc').click(function(){
		$('#view_software_odbc').slideToggle("fast");
	});

	$('#toggle_software_assembly').click(function(){
		$('#view_software_assembly').slideToggle("fast");
	});

	$('#toggle_software_keys').click(function(){
		$('#view_software_keys').slideToggle("fast");
	});


	$('#toggle_software_all').click(function(){
		if (software_toggle == 0)
		{
			$('#view_software_installed').show("fast");
			$('#view_software_updates').show("fast");
			$('#view_software_library').show("fast");
			$('#view_software_services').show("fast");
			$('#view_software_codecs').show("fast");
			$('#view_software_odbc').show("fast");
			$('#view_software_assembly').show("fast");
			$('#view_software_keys').show("fast");
			software_toggle = 1;
		}
		else 
		{
			$('#view_software_installed').hide("fast");
			$('#view_software_updates').hide("fast");
			$('#view_software_library').hide("fast");
			$('#view_software_services').hide("fast");
			$('#view_software_codecs').hide("fast");
			$('#view_software_odbc').hide("fast");
			$('#view_software_assembly').hide("fast");
			$('#view_software_keys').hide("fast");
			software_toggle = 0;
		}
	});

	$('#view_settings_pagefile').hide();
	$('#view_settings_shares').hide();
	$('#view_settings_routes').hide();
	$('#view_settings_users').hide();
	$('#view_settings_groups').hide();
	$('#view_settings_print_queue').hide();
	$('#view_settings_dns').hide();
	$('#view_settings_netstat').hide();
	$('#view_settings_logs').hide();
	$('#view_settings_variables').hide();
               
	
	$('#toggle_settings_pagefile').click(function(){
		$('#view_settings_pagefile').slideToggle("fast");
	});

	$('#toggle_settings_shares').click(function(){
		$('#view_settings_shares').slideToggle("fast");
	});
		
	$('#toggle_settings_routes').click(function(){
		$('#view_settings_routes').slideToggle("fast");
	});

	$('#toggle_settings_users').click(function(){
		$('#view_settings_users').slideToggle("fast");
	});

	$('#toggle_settings_groups').click(function(){
		$('#view_settings_groups').slideToggle("fast");
	});

	$('#toggle_settings_print_queue').click(function(){
		$('#view_settings_print_queue').slideToggle("fast");
	});

	$('#toggle_settings_dns').click(function(){
		$('#view_settings_dns').slideToggle("fast");
	});

	$('#toggle_settings_netstat').click(function(){
		$('#view_settings_netstat').slideToggle("fast");
	});

	$('#toggle_settings_logs').click(function(){
		$('#view_settings_logs').slideToggle("fast");
	});

	$('#toggle_settings_variables').click(function(){
		$('#view_settings_variables').slideToggle("fast");
	});

	$('#toggle_settings_all').click(function(){
		if (settings_toggle == 0)
		{
			$('#view_settings_pagefile').show("fast");
			$('#view_settings_shares').show("fast");
			$('#view_settings_routes').show("fast");
			$('#view_settings_users').show("fast");
			$('#view_settings_groups').show("fast");
			$('#view_settings_print_queue').show("fast");
			$('#view_settings_dns').show("fast");
			$('#view_settings_netstat').show("fast");
			$('#view_settings_logs').show("fast");
			$('#view_settings_variables').show("fast");
			settings_toggle = 1;
		}
		else 
		{
			$('#view_settings_pagefile').hide("fast");
			$('#view_settings_shares').hide("fast");
			$('#view_settings_routes').hide("fast");
			$('#view_settings_users').hide("fast");
			$('#view_settings_groups').hide("fast");
			$('#view_settings_print_queue').hide("fast");
			$('#view_settings_dns').hide("fast");
			$('#view_settings_netstat').hide("fast");
			$('#view_settings_logs').hide("fast");
			$('#view_settings_variables').hide("fast");
			settings_toggle = 0;
		}
	});

	$('#view_server_database').hide();
	$('#view_server_web').hide();


	$('#toggle_server_database').click(function(){
		$('#view_server_database').slideToggle("fast");
	});

	$('#toggle_server_web').click(function(){
		$('#view_server_web').slideToggle("fast");
	});

	$('#toggle_server_all').click(function(){
		if (server_toggle == 0)
		{
			$('#view_server_database').show("fast");
			$('#view_server_web').show("fast");
			server_toggle = 1;
		}
		else 
		{
			$('#view_server_database').hide("fast");
			$('#view_server_web').hide("fast");
			server_toggle = 0;
		}
	});
});
</script>