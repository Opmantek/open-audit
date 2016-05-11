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

echo form_open('admin_location/add_location')."\n";
?>
<fieldset id="details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Location Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' />
	<table cellpadding = "0" cellspacing="0">
		<tr>
			<td valign="top">
				<p><label for='name'><?php echo __('Name'); ?>: </label><input type='text' id='name' name='name' tabindex='1' title='<?php echo __('Location Name'); ?>' /><?php echo $error_message; ?></p>
				<p><label for='type' title="<?php echo __('Server Room, Office, etc'); ?>"><?php echo __('Type'); ?>: </label><select id='type' name='type' tabindex='2' title='Type' />
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
				<p><label for='room'><?php echo __('Room'); ?>: </label><input type='text' id='room' name='room' tabindex='3' title='<?php echo __('Room'); ?>' /></p>
				<p><label for='suite'><?php echo __('Suite'); ?>: </label><input type='text' id='suite' name='suite' tabindex='4' title='<?php echo __('Suite'); ?>' /></p>
				<p><label for='level'><?php echo __('Level'); ?>: </label><input type='text' id='level' name='level' tabindex='5' title='<?php echo __('Level'); ?>' /></p>
				<p><label for='address'><?php echo __('Street Address'); ?>: </label><input type='text' id='address' name='address' tabindex='6' title='<?php echo __('Street Address'); ?>' /></p>
				<p><label for='city'><?php echo __('City'); ?>: </label><input type='text' id='city' name='city' tabindex='8' title='<?php echo __('City'); ?>' /></p>
			</td>
			<td valign="top">
				<p><label for='postcode'><?php echo __('Postcode'); ?>: </label><input type='text' id='postcode' name='postcode' tabindex='9' title='<?php echo __('Postcode'); ?>' /></p>
				<p><label for='state'><?php echo __('State'); ?>: </label><input type='text' id='state' name='state' tabindex='10' title='<?php echo __('State'); ?>' /></p>
				<p><label for='country'><?php echo __('Country'); ?>: </label><input type='text' id='country' name='country' tabindex='11' title='<?php echo __('Country'); ?>' /></p>
				<p><label for='phone'><?php echo __('Phone'); ?>: </label><input type='text' id='phone' name='phone' tabindex='11' title='<?php echo __('Phone'); ?>' /></p>
				<p><label for='geo'><?php echo __('GeoCode'); ?>: </label><input type='text' id='geo' name='geo' tabindex='12' title='<?php echo __('GeoCode'); ?>' /></p>
				<p><label for='latitude'><?php echo __('Latitude'); ?>: </label><input type='text' id='latitude' name='latitude' tabindex='13' title='<?php echo __('Latitude'); ?>' /></p>
				<p><label for='longitude'><?php echo __('Longitude'); ?>: </label><input type='text' id='longitude' name='longitude' tabindex='14' title='<?php echo __('Longitude'); ?>' /></p>
			</td>
			<td valign="top">
				<p> <br /></p>
				<p> <br /></p>
				<p> <br /></p>
				<p> <br /></p>
				<p> <br /></p>
				<p><label style="width: 30px;" for='create_geo'></label><input id="create_geo" name="create_geo" type="button" value="<?php echo __('Create GeoCode'); ?>" onclick="creategeo();" /></p>
				<p><label style="width: 30px;" for='get_lat_long'></label><input id="get_lat_long" name="get_lat_long" type="button" value="<?php echo __('Get Lat / Long'); ?>" onclick="getlatlong();" /></p>
				<p><label style="width: 30px;" for='group'></label><?php echo __('Activate Group'); ?>: <input type='checkbox' id='group' name='group' tabindex='14' title='<?php echo __('Activate Group'); ?>' checked /></p>
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
	if (document.getElementById("geo").value > "") {
		var address = document.getElementById("geo").value;
	} else {
		var address = document.getElementById("address").value + ", " + document.getElementById("city").value + ", " + document.getElementById("state").value + ", " + document.getElementById("postcode").value + ", " + document.getElementById("country").value;
	}
	var geocoder = new google.maps.Geocoder();
	if (geocoder) {
		geocoder.geocode({ 'address': address }, function (results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				document.getElementById("latitude").value = results[0].geometry.location.lat();
				document.getElementById("longitude").value = results[0].geometry.location.lng();
			}
		});
	}
}

function creategeo() {
	var geo = document.getElementById("address").value + ", " +
	document.getElementById("city").value + ", " +
	document.getElementById("state").value + ", " +
	document.getElementById("postcode").value + ", " +
	document.getElementById("country").value;
	document.getElementById("geo").value = geo;
}
</script>
