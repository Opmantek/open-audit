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
 * @version 1.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
<script type="text/javascript">
$(document).ready( function() { $.NiceJForms.build(); } );

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
	status_text="<p><label for='ip_address'>IP Address: <\/label><input type='text' id='ip_address' name='ip_address' value='<?php if (isset($decoded_access_details->ip_address) and $decoded_access_details->ip_address > '') { echo $decoded_access_details->ip_address; } elseif (isset($system[0]->man_ip_address) and $system[0]->man_ip_address != '' and $system[0]->man_ip_address != '000.000.000.000' and $system[0]->man_ip_address != '0.0.0.0') { echo ip_address_from_db($system[0]->man_ip_address); } ?>' \/><\/p> \
	<p><label for='snmp_version'>SNMP Version: <\/label><input type='text' id='snmp_version' name='snmp_version' value='<?php if (isset($decoded_access_details->snmp_version) and $decoded_access_details->snmp_version > '') { echo $decoded_access_details->snmp_version; } else { echo '2c'; } ?>' \/><\/p> \
	<p><label for='snmp_community'>SNMP Community: <\/label><input type='<?php echo $snmp_community_field; ?>' id='snmp_community' name='snmp_community' value='<?php if (isset($decoded_access_details->snmp_community) and $decoded_access_details->snmp_community > '') { echo $decoded_access_details->snmp_community; } else { echo $config->default_snmp_community; } ?>' \/><\/p> \
	<p><label for='ssh_username'>SSH Username: <\/label><input type='text' id='ssh_username' name='ssh_username' value='<?php echo $decoded_access_details->ssh_username; ?>' \/><\/p> \
	<p><label for='ssh_password'>SSH Password: <\/label><input type='<?php echo $password_field; ?>' id='ssh_password' name='ssh_password' value='<?php echo $decoded_access_details->ssh_password; ?>'\ /><\/p> \
	<p><label for='windows_username'>Windows Username: <\/label><input type='text' id='windows_username' name='windows_username' value='<?php echo $decoded_access_details->windows_username; ?>' \/><\/p> \
	<p><label for='windows_password'>Windows Password: <\/label><input type='<?php echo $password_field; ?>' id='windows_password' name='windows_password' value='<?php echo $decoded_access_details->windows_password; ?>' \/><\/p> \
	<p><label for='windows_domain'>Windows Domain: <\/label><input type='text' id='windows_domain' name='windows_domain' value='<?php if (isset($decoded_access_details->windows_domain) and $decoded_access_details->windows_domain > '') { echo $decoded_access_details->windows_domain; } elseif (isset($windows[0]->windows_domain_short)) { echo $windows[0]->windows_domain_short; } ?>' \/><\/p> \
	<p><label for='submit'>Update Credentials: <\/label><input type='submit' id='submit' name='submit' value='Submit' \/><\/p> \
	<input type='hidden' id='system_id' name='system_id' value='<?php echo $system[0]->system_id; ?>' \/>";
	document.getElementById("credentials").innerHTML = status_text;
}

function display_environment() {
	status_text="<select id='man_environment' onchange='send_environment();'><option value=' '>Choose an Environment<\/option><option value='production'>Production<\/option><option value='pre-prod'>PreProduction<\/option><option value='test'>Testing<\/option><option value='uat'>User Acceptance Testing<\/option><option value='eval'>Evaluation<\/option><option value='dev'>Development<\/option><option value='dr'>Disaster Recovery<\/option><\/select>";
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

function display_status() {
	status_text="<select id='man_status' onchange='send_status();'><option value=' '>Choose a status<\/option><option value='production'>Production<\/option><option value='retired'>Retired<\/option><option value='maintenance'>Maintenance<\/option><option value='deleted'>Deleted<\/option><\/select>";
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

function display_type() {
	type_text = "<select id='man_type' onchange='send_type();'> \
	<option value=' '>Choose a type<\/option> \
	<option value='access point'>Access Point<\/option> \
	<option value='access server'>Access Server<\/option> \
	<option value='access token'>Access Token<\/option> \
	<option value='adsl modem'>ADSL Modem<\/option> \
	<option value='alarm'>Alarm<\/option> \
	<option value='bdsl modem'>BDSL Modem<\/option> \
	<option value='building management'>Building Management<\/option> \
	<option value='cable modem'>Cable Modem<\/option> \
	<option value='cell phone'>Cell Phone<\/option> \
	<option value='cisco module'>Cisco Module<\/option> \
	<option value='computer'>Computer<\/option> \
	<option value='dsl modem'>DSL Modem<\/option> \
	<option value='firewall'>Firewall<\/option> \
	<option value='game console'>Game Console<\/option> \
	<option value='gateway'>Gateway<\/option> \
	<option value='ip phone'>IP Phone<\/option> \
	<option value='kvm'>KVM (Keyboard, Video, Mouse switch)<\/option> \
	<option value='load balancer'>Load Balancer<\/option> \
	<option value='mobile modem'>Mobile Modem<\/option> \
	<option value='nas'>NAS (Network Attached Storage)<\/option> \
	<option value='network device'>Network Device<\/option> \
	<option value='network ids'>Network IDS (Intrusion Detection)<\/option> \
	<option value='network printer'>Network Printer<\/option> \
	<option value='network scanner'>Network Scanner<\/option> \
	<option value='phone'>Phone<\/option> \
	<option value='printer'>Printer<\/option> \
	<option value='projector'>Projector<\/option> \
	<option value='remote access controller'>Remote Access Controller (ILO \/ RSA)<\/option> \
	<option value='router'>Router<\/option> \
	<option value='san'>SAN (Storage Area Network)<\/option> \
	<option value='satellite phone'>Satellite Phone<\/option> \
	<option value='scanner'>Scanner<\/option> \
	<option value='security camera'>Security Camera<\/option> \
	<option value='smart phone'>Smart Phone<\/option> \
	<option value='switch'>Switch<\/option> \
	<option value='tablet'>Tablet<\/option> \
	<option value='ups'>UPS (Uninteruptable Power Supply)<\/option> \
	<option value='voip adapter'>VoIP Adapter<\/option> \
	<option value='voip gateway'>VoIP Gateway<\/option> \
	<option value='voip phone'>VoIP Phone<\/option> \
	<option value='vpn_terminator'>VPN Terminator<\/option> \
	<option value='wan accelerator'>WAN Accelerator<\/option> \
	<option value='wap'>WAP (Wireless Access Point)<\/option> \
	<option value='webcam'>Webcam<\/option> \
	<option value='wireless router'>Wireless Router<\/option> \
	<\/select>";
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
	status_text="<select id='nmis_role' onchange='send_nmis_role();'><option value=' '>Choose an NMIS role</option><option value='access'>Access</option><option value='core'>Core</option><option value='distriubtion'>Distriubtion</option></select>";
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

function display_location() {
	<?php
	$location_form = "<option value=' '>Choose a Location<\/option>";
	foreach ($locations as $location)
	{
		$location_form .= "<option value='" . $location->location_id . "'>" . $location->location_name . "<\/option>";
	}
	if ($location_id <> "")
	{
		$location_form = "<select id='man_location_id' onchange='send_location();'>" . $location_form . "<\/select>";
	} else {
		$location_form = "<select id='man_location_id' onchange='send_location();'><option value=' '>Choose a location<\/option>" . $location_form . "<\/select>";
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
	$org_form = "<option value=' '>Choose an Org<\/option>";
	foreach ($orgs as $org) {
		$org_form .= "<option value='" . $org->org_id . "'>" . $org->org_name . "<\/option>";
	}
	if ($org_id <> "") {
		$org_form = "<select id='man_org_id' onchange='send_org();'>" . $org_form . "<\/select>";
	} else {
		$org_form = "<select id='man_org_id' onchange='send_org();'><option value=' '>Choose an Org<\/option>" . $org_form . "<\/select>";
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
	status_text=status_text+"<input type='hidden' id='system_id' name='system_id' value='"+formVars+"' /><input type='file' name='attachment' id='attachment' size='20' /><br />Attachment Title: <input type='text' name='title' id='title' size='20' /><br /><input type='submit' name='submit' id='submit' value='Submit' />";
	document.getElementById("attachment_listing").innerHTML = status_text;
}

</script>