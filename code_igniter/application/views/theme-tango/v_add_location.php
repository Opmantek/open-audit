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

echo form_open('admin_location/add_location')."\n";
?>
<fieldset id="location_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Location Details')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' width='48'/>
	<table cellpadding = "0" cellspacing="0">
		<tr>
			<td valign="top">
				<p><label for='location_name'><?php echo __('Name'); ?>: </label><input type='text' id='location_name' name='location_name' tabindex='1' title='<?php echo __('Location Name'); ?>' /><?php echo $error_message; ?></p>
				<p><label for='location_type' title="<?php echo __('Server Room, Office, etc'); ?>"><?php echo __('Type'); ?>: </label><select id='location_type' name='location_type' tabindex='2' title='Type' />
					<option value=''></option>
					<option value='Airforce'><?php echo __('Airforce'); ?></option>
					<option value='Airport'><?php echo __('Airport'); ?></option>
					<option value='Ambulance Station'><?php echo __('Ambulance Station'); ?></option>
					<option value='Army'><?php echo __('Army'); ?></option>
					<option value='Cloud'><?php echo __('Cloud'); ?></option>
					<option value='Conference Center'><?php echo __('Conference Center'); ?></option>
					<option value='Court House'><?php echo __('Court House'); ?></option>
					<option value='Data Center'><?php echo __('Data Center'); ?></option>
					<option value='Depot'><?php echo __('Depot'); ?></option>
					<option value='District'><?php echo __('District'); ?></option>
					<option value='Doctors Office'><?php echo __('Doctors Office'); ?></option>
					<option value='Embassy'><?php echo __('Embassy'); ?></option>
					<option value='Factory'><?php echo __('Factory'); ?></option>
					<option value='Fire Station'><?php echo __('Fire Station'); ?></option>
					<option value='Guard'><?php echo __('Guard'); ?></option>
					<option value='Head Office'><?php echo __('Head Office'); ?></option>
					<option value='High School'><?php echo __('High School'); ?></option>
					<option value='Hospital'><?php echo __('Hospital'); ?></option>
					<option value='Hotel'><?php echo __('Hotel'); ?></option>
					<option value='House'><?php echo __('House'); ?></option>
					<option value='Library'><?php echo __('Library'); ?></option>
					<option value='Light House'><?php echo __('Light House'); ?></option>
					<option value='Marina'><?php echo __('Marina'); ?></option>
					<option value='Mobile Phone Tower'><?php echo __('Mobile Phone Tower'); ?></option>
					<option value='Motel'><?php echo __('Motel'); ?></option>
					<option value='Navy'><?php echo __('Navy'); ?></option>
					<option value='Newsagent'><?php echo __('Newsagent'); ?></option>
					<option value='Nursing Home'><?php echo __('Nursing Home'); ?></option>
					<option value='Observatory'><?php echo __('Observatory'); ?></option>
					<option value='Office'><?php echo __('Office'); ?></option>
					<option value='Oil Rig'><?php echo __('Oil Rig'); ?></option>
					<option value='Police'><?php echo __('Police'); ?></option>
					<option value='Power Plant'><?php echo __('Power Plant'); ?></option>
					<option value='Power Substation'><?php echo __('Power Substation'); ?></option>
					<option value='Prison'><?php echo __('Prison'); ?></option>
					<option value='Radio Station'><?php echo __('Radio Station'); ?></option>
					<option value='Regional'><?php echo __('Regional'); ?></option>
					<option value='Resort'><?php echo __('Resort'); ?></option>
					<option value='Retail'><?php echo __('Retail'); ?></option>
					<option value='School'><?php echo __('School'); ?></option>
					<option value='Security'><?php echo __('Security'); ?></option>
					<option value='Stadium'><?php echo __('Stadium'); ?></option>
					<option value='Train Station'><?php echo __('Train Station'); ?></option>
					<option value='Travel Agency'><?php echo __('Travel Agency'); ?></option>
					<option value='TV Station'><?php echo __('TV Station'); ?></option>
					<option value='University'><?php echo __('University'); ?></option>
					<option value='Warehouse'><?php echo __('Warehouse'); ?></option>
					<option value='Workshop'><?php echo __('Workshop'); ?></option>
				</select></p>
				<p><label for='location_room'><?php echo __('Room'); ?>: </label><input type='text' id='location_room' name='location_room' tabindex='3' title='<?php echo __('Room'); ?>' /></p>
				<p><label for='location_suite'><?php echo __('Suite'); ?>: </label><input type='text' id='location_suite' name='location_suite' tabindex='4' title='<?php echo __('Suite'); ?>' /></p>
				<p><label for='location_level'><?php echo __('Level'); ?>: </label><input type='text' id='location_level' name='location_level' tabindex='5' title='<?php echo __('Level'); ?>' /></p>
				<p><label for='location_address'><?php echo __('Street Address'); ?>: </label><input type='text' id='location_address' name='location_address' tabindex='6' title='<?php echo __('Street Address'); ?>' /></p>
				<!-- <p><label for='location_suburb'><?php echo __('Suburb'); ?>: </label><input type='text' id='location_suburb' name='location_suburb' tabindex='7' title='<?php echo __('Suburb'); ?>' /></p>-->
				<p><label for='location_city'><?php echo __('City'); ?>: </label><input type='text' id='location_city' name='location_city' tabindex='8' title='<?php echo __('City'); ?>' /></p>
			</td>
			<td valign="top">
				<p><label for='location_postcode'><?php echo __('Postcode'); ?>: </label><input type='text' id='location_postcode' name='location_postcode' tabindex='9' title='<?php echo __('Postcode'); ?>' /></p>
				<p><label for='location_state'><?php echo __('State'); ?>: </label><input type='text' id='location_state' name='location_state' tabindex='10' title='<?php echo __('State'); ?>' /></p>
				<p><label for='location_country'><?php echo __('Country'); ?>: </label><input type='text' id='location_country' name='location_country' tabindex='11' title='C<?php echo __('ountry'); ?>' /></p>
				<p><label for='location_phone'><?php echo __('Phone'); ?>: </label><input type='text' id='location_phone' name='location_phone' tabindex='11' title='<?php echo __('Phone'); ?>' /></p>
				<p><label for='location_geo'><?php echo __('GeoCode'); ?>: </label><input type='text' id='location_geo' name='location_geo' tabindex='12' title='<?php echo __('GeoCode'); ?>' /></p>
				<!-- <p><label for='location_district'><?php echo __('District'); ?>: </label><input type='text' id='location_district' name='location_district' tabindex='11' title='<?php echo __('District'); ?>' /></p>	-->
				<!-- <p><label for='location_region'><?php echo __('Region'); ?>: </label><input type='text' id='location_region' name='location_region' tabindex='11' title='<?php echo __('Region'); ?>' /></p>	-->
				<!-- <p><label for='location_area'><?php echo __('Area'); ?>: </label><input type='text' id='location_area' name='location_area' tabindex='11' title='<?php echo __('Area'); ?>' /></p>	-->
				<!-- <p><label for='location_tags'><?php echo __('Tags'); ?>: </label><input type='text' id='location_tags' name='location_tags' tabindex='11' title='<?php echo __('Tags'); ?>' /></p>	-->
				<!-- <p><label for='location_picture'><?php echo __('Picture'); ?>: </label><input type='text' id='location_picture' name='location_picture' tabindex='11' title='<?php echo __('Picture'); ?>' /></p>	-->
				<p><label for='location_latitude'><?php echo __('Latitude'); ?>: </label><input type='text' id='location_latitude' name='location_latitude' tabindex='13' title='<?php echo __('Latitude'); ?>' /></p>
				<p><label for='location_longitude'><?php echo __('Longitude'); ?>: </label><input type='text' id='location_longitude' name='location_longitude' tabindex='14' title='<?php echo __('Longitude'); ?>' /></p>
			</td>
			<td valign="top">
				<p> <br /></p>
				<p> <br /></p>
				<p> <br /></p>
				<p> <br /></p>
				<p> <br /></p>
				<p><label style="width: 30px;" for='location_create_geo'></label><input id="location_create_geo" type="button" name="location_create_geo" value="<?php echo __('Create GeoCode'); ?>" onclick="creategeo();" /></p>
				<p><label style="width: 30px;" for='location_get_lat_long'></label><input id="location_get_lat_long" type="button" name="location_get_lat_long" value="<?php echo __('Get Lat / Long'); ?>" onclick="getlatlong();" /></p>
				<p><label style="width: 30px;" for='location_group'></label><?php echo __('Activate Group'); ?>: <input type='checkbox' id='location_group' name='location_group' tabindex='14' title='<?php echo __('Activate Group'); ?>' checked /></p>
				<p><label style="width: 30px;" for='submit'></label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?></p>
			</td>
		</tr>
	</table>
	<p><?php echo $this->session->flashdata('message'); ?>&nbsp;</p>
</fieldset>
<?php echo form_close(); ?>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
function getlatlong() {
	if (document.getElementById("location_geo").value > "") {
		var address = document.getElementById("location_geo").value;
	} else {
		var address = document.getElementById("location_address").value + ", " + document.getElementById("location_city").value + ", " + document.getElementById("location_state").value + ", " + document.getElementById("location_postcode").value + ", " + document.getElementById("location_country").value;
	}
	var geocoder = new google.maps.Geocoder();
	if (geocoder) {
		geocoder.geocode({ 'address': address }, function (results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				document.getElementById("location_latitude").value = results[0].geometry.location.lat();
				document.getElementById("location_longitude").value = results[0].geometry.location.lng();
			}
		});
	}
}

function creategeo() {
	var geo = document.getElementById("location_address").value + ", " +
	document.getElementById("location_city").value + ", " +
	document.getElementById("location_state").value + ", " +
	document.getElementById("location_postcode").value + ", " +
	document.getElementById("location_country").value;
	document.getElementById("location_geo").value = geo;
}
</script>
