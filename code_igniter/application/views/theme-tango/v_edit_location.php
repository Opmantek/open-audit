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
 * @version 1.8.4
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (isset($error_message)) {
    $error_message = "<font color='red'>&nbsp;".$error_message."</font>";
} else {
    $error_message = "";
}

echo form_open('admin_location/edit_location')."\n";
?>
<fieldset id="location_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Location Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' />
	<?php foreach ($location as $key) {
    ?>
	<table cellpadding = "0" cellspacing="0">
		<tr>
			<td>
				<p><label for='location_name'><?php echo __("Name")?>: </label><input type='text' id='location_name' name='location_name' tabindex='1' title='Location Name' value="<?php echo $key->location_name; ?>"/><?php echo $error_message; ?></p>
				<!-- <p><label for='location_type'><?php echo __("Type")?>: </label><input type='text' id='location_type' name='location_type' tabindex='2' title='Type'  value="<?php echo $key->location_type; ?>"/></p> -->
				<p><label for='location_type' title="Server Room, Office, etc"><?php echo __("Type")?>: </label><select id='location_type' name='location_type' tabindex='2' title='Type' />
					<option <?php if ($key->location_type == "") { echo "selected ";} ?>value=''></option>
					<option <?php if ($key->location_type == "Airforce") { echo "selected ";} ?>value='Airforce'><?php echo __('Airforce'); ?></option>
					<option <?php if ($key->location_type == "Airport") { echo "selected ";} ?>value='Airport'><?php echo __('Airport'); ?></option>
					<option <?php if ($key->location_type == "Ambulance Station") { echo "selected ";} ?>value='Ambulance Station'><?php echo __('Ambulance Station'); ?></option>
					<option <?php if ($key->location_type == "Army") { echo "selected ";} ?>value='Army'><?php echo __('Army'); ?></option>
					<option <?php if ($key->location_type == "Cloud") { echo "selected ";} ?>value='Cloud'><?php echo __('Cloud'); ?></option>
					<option <?php if ($key->location_type == "Conference Center") { echo "selected ";} ?>value='Conference Center'><?php echo __('Conference Center'); ?></option>
					<option <?php if ($key->location_type == "Court House") { echo "selected ";} ?>value='Court House'><?php echo __('Court House'); ?></option>
					<option <?php if ($key->location_type == "Data Center") { echo "selected ";} ?>value='Data Center'><?php echo __('Data Center'); ?></option>
					<option <?php if ($key->location_type == "Depot") { echo "selected ";} ?>value='Depot'><?php echo __('Depot'); ?></option>
					<option <?php if ($key->location_type == "District") { echo "selected ";} ?>value='District'><?php echo __('District'); ?></option>
					<option <?php if ($key->location_type == "Doctors Office") { echo "selected ";} ?>value='Doctors Office'><?php echo __('Doctors Office'); ?></option>
					<option <?php if ($key->location_type == "Embassy") { echo "selected ";} ?>value='Embassy'><?php echo __('Embassy'); ?></option>
					<option <?php if ($key->location_type == "Factory") { echo "selected ";} ?>value='Factory'><?php echo __('Factory'); ?></option>
					<option <?php if ($key->location_type == "Fire Station") { echo "selected ";} ?>value='Fire Station'><?php echo __('Fire Station'); ?></option>
					<option <?php if ($key->location_type == "Guard") { echo "selected ";} ?>value='Guard'><?php echo __('Guard'); ?></option>
					<option <?php if ($key->location_type == "Head Office") { echo "selected ";} ?>value='Head Office'><?php echo __('Head Office'); ?></option>
					<option <?php if ($key->location_type == "High School") { echo "selected ";} ?>value='High School'><?php echo __('High School'); ?></option>
					<option <?php if ($key->location_type == "Hospital") { echo "selected ";} ?>value='Hospital'><?php echo __('Hospital'); ?></option>
					<option <?php if ($key->location_type == "Hotel") { echo "selected ";} ?>value='Hotel'><?php echo __('Hotel'); ?></option>
					<option <?php if ($key->location_type == "House") { echo "selected ";} ?>value='House'><?php echo __('House'); ?></option>
					<option <?php if ($key->location_type == "Library") { echo "selected ";} ?>value='Library'><?php echo __('Library'); ?></option>
					<option <?php if ($key->location_type == "Light House") { echo "selected ";} ?>value='Light House'><?php echo __('Light House'); ?></option>
					<option <?php if ($key->location_type == "Marina") { echo "selected ";} ?>value='Marina'><?php echo __('Marina'); ?></option>
					<option <?php if ($key->location_type == "Mobile Phone Tower") { echo "selected ";} ?>value='Mobile Phone Tower'><?php echo __('Mobile Phone Tower'); ?></option>
					<option <?php if ($key->location_type == "Motel") { echo "selected ";} ?>value='Motel'><?php echo __('Motel'); ?></option>
					<option <?php if ($key->location_type == "Navy") { echo "selected ";} ?>value='Navy'><?php echo __('Navy'); ?></option>
					<option <?php if ($key->location_type == "Newsagent") { echo "selected ";} ?>value='Newsagent'><?php echo __('Newsagent'); ?></option>
					<option <?php if ($key->location_type == "Nursing Home") { echo "selected ";} ?>value='Nursing Home'><?php echo __('Nursing Home'); ?></option>
					<option <?php if ($key->location_type == "Observatory") { echo "selected ";} ?>value='Observatory'><?php echo __('Observatory'); ?></option>
					<option <?php if ($key->location_type == "Office") { echo "selected ";} ?>value='Office'><?php echo __('Office'); ?></option>
					<option <?php if ($key->location_type == "Oil Rig") { echo "selected ";} ?>value='Oil Rig'><?php echo __('Oil Rig'); ?></option>
					<option <?php if ($key->location_type == "Police") { echo "selected ";} ?>value='Police'><?php echo __('Police'); ?></option>
					<option <?php if ($key->location_type == "Power Plant") { echo "selected ";} ?>value='Power Plant'><?php echo __('Power Plant'); ?></option>
					<option <?php if ($key->location_type == "Power Substation") { echo "selected ";} ?>value='Power Substation'><?php echo __('Power Substation'); ?></option>
					<option <?php if ($key->location_type == "Prison") { echo "selected ";} ?>value='Prison'><?php echo __('Prison'); ?></option>
					<option <?php if ($key->location_type == "Radio Station") { echo "selected ";} ?>value='Radio Station'><?php echo __('Radio Station'); ?></option>
					<option <?php if ($key->location_type == "Regional") { echo "selected ";} ?>value='Regional'><?php echo __('Regional'); ?></option>
					<option <?php if ($key->location_type == "Resort") { echo "selected ";} ?>value='Resort'><?php echo __('Resort'); ?></option>
					<option <?php if ($key->location_type == "Retail") { echo "selected ";} ?>value='Retail'><?php echo __('Retail'); ?></option>
					<option <?php if ($key->location_type == "School") { echo "selected ";} ?>value='School'><?php echo __('School'); ?></option>
					<option <?php if ($key->location_type == "Security") { echo "selected ";} ?>value='Security'><?php echo __('Security'); ?></option>
					<option <?php if ($key->location_type == "Stadium") { echo "selected ";} ?>value='Stadium'><?php echo __('Stadium'); ?></option>
					<option <?php if ($key->location_type == "Train Station") { echo "selected ";} ?>value='Train Station'><?php echo __('Train Station'); ?></option>
					<option <?php if ($key->location_type == "Travel Agency") { echo "selected ";} ?>value='Travel Agency'><?php echo __('Travel Agency'); ?></option>
					<option <?php if ($key->location_type == "TV Station") { echo "selected ";} ?>value='TV Station'><?php echo __('TV Station'); ?></option>
					<option <?php if ($key->location_type == "University") { echo "selected ";} ?>value='University'><?php echo __('University'); ?></option>
					<option <?php if ($key->location_type == "Warehouse") { echo "selected ";} ?>value='Warehouse'><?php echo __('Warehouse'); ?></option>
					<option <?php if ($key->location_type == "Workshop") { echo "selected ";} ?>value='Workshop'><?php echo __('Workshop'); ?></option>
				</select></p>

				<p><label for='location_level'><?php echo __("Level")?>: </label><input type='text' id='location_level' name='location_level' tabindex='3' title='Level'  value="<?php echo $key->location_level; ?>"/></p>
				<p><label for='location_suite'><?php echo __("Suite")?>: </label><input type='text' id='location_suite' name='location_suite' tabindex='4' title='Suite'  value="<?php echo $key->location_suite; ?>"/></p>
				<p><label for='location_room'><?php echo __("Room")?>: </label><input type='text' id='location_room' name='location_room' tabindex='5' title='Room'  value="<?php echo $key->location_room; ?>"/></p>
				<p><label for='location_address'><?php echo __("Street Address")?>: </label><input type='text' id='location_address' name='location_address' tabindex='6' title='Street Address'  value="<?php echo $key->location_address; ?>"/></p>
				<p><label for='location_city'><?php echo __("City")?>: </label><input type='text' id='location_city' name='location_city' tabindex='7' title='City'  value="<?php echo $key->location_city; ?>"/></p>
			</td>
			<td>
				<p><label for='location_postcode'><?php echo __("Postcode")?>: </label><input type='text' id='location_postcode' name='location_postcode' tabindex='8' title='Postcode'  value="<?php echo $key->location_postcode; ?>"/></p>
				<p><label for='location_state'><?php echo __("State")?>: </label><input type='text' id='location_state' name='location_state' tabindex='9' title='State'  value="<?php echo $key->location_state; ?>"/></p>
				<p><label for='location_country'><?php echo __("Country")?>: </label><input type='text' id='location_country' name='location_country' tabindex='10' title='Country'  value="<?php echo $key->location_country; ?>"/></p>
				<p><label for='location_phone'><?php echo __("Phone")?>: </label><input type='text' id='location_phone' name='location_phone' tabindex='10' title='Phone'  value="<?php echo $key->location_phone; ?>"/></p>
				<p><label for='location_geo'><?php echo __("GeoCode")?>: </label><input type='text' id='location_geo' name='location_geo' tabindex='11' title='GeoCode'  value="<?php echo $key->location_geo; ?>"/></p>
				<!-- <p><label for='location_picture'><?php echo __("Picture")?>: </label><input type='text' id='location_picture' name='location_picture' tabindex='11' title='Picture'  value="<?php echo $key->location_picture; ?>"/></p> -->
				<p><label for='location_latitude'><?php echo __("Latitude")?>: </label><input type='text' id='location_latitude' name='location_latitude' tabindex='12' title='Latitude'  value="<?php echo $key->location_latitude; ?>"/></p>
				<p><label for='location_longitude'><?php echo __("Longitude")?>: </label><input type='text' id='location_longitude' name='location_longitude' tabindex='13' title='Longitude'  value="<?php echo $key->location_longitude; ?>"/></p>
			</td>
			<td valign="top">
				<p> <br /></p>
				<p> <br /></p>
				<p> <br /></p>
				<p> <br /></p>
				<p> <br /></p>
				<p><label style="width: 30px;" for='location_create_geo'></label><input id="location_create_geo" type="button" name="location_create_geo" value="Create GeoCode" onclick="creategeo();" /></p>
				<p><label style="width: 30px;" for='location_get_lat_long'></label><input id="location_get_lat_long" type="button" name="location_get_lat_long" value="Get Lat / Long" onclick="getlatlong();" /></p>
				<p><label style="width: 30px;" for='location_group'></label><?php echo __("Activate Group")?>: <input type='checkbox' id='location_group' name='location_group' tabindex='14' title='Activate Group' checked /></p>
				<p><label style="width: 30px;" for='submit'></label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?></p>
			</td>
		</tr>
	</table>
	<p><?php echo $this->session->flashdata('message');
    ?></p>
	<?php } ?>
	<input type="hidden" value="<?php echo $key->location_id; ?>" name="location_id" id="location_id" />
</fieldset>
<?php echo form_close(); ?>
</div>
</div>

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
