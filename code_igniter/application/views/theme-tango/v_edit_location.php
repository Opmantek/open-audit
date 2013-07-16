<?php
if (isset($error_message))
{
	$error_message = "<font color='red'>&nbsp;" . $error_message . "</font>";
} else {
	$error_message = "";
}

echo form_open('admin_location/edit_location') . "\n"; 
?>
<fieldset id="location_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Location Details')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_home.png' alt='' title='' width='48'/>
	<?php foreach ($location as $key) { ?>
	<table cellpadding = "0" cellspacing="0">
		<tr>
			<td>
				<p><label for='location_name'><?php echo __("Name")?>: </label><input type='text' id='location_name' name='location_name' tabindex='1' title='Location Name' value="<?php echo $key->location_name; ?>"/><?php echo $error_message; ?></p>
				<p><label for='location_type'><?php echo __("Type")?>: </label><input type='text' id='location_type' name='location_type' tabindex='2' title='Type'  value="<?php echo $key->location_type; ?>"/></p>
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
				<p><label style="width: 30px;" for='location_addlocation'></label><?php echo form_submit(array('id'=>'EditLocation', 'name'=>'EditLocation'), 'Edit Location'); ?></p>
			</td>
		</tr>
	</table>
	<p><?php echo $this->session->flashdata('message'); ?></p>
	<?php } ?>
	<input type="hidden" value="<?php echo $key->location_id; ?>" name="location_id" id="location_id" />
</fieldset>
<?php echo form_close(); ?>
</div>
</div>

		

<script>
function getlatlong() {
	if (document.getElementById("location_geo").value > "") {
		var address = document.getElementById("location_geo").value;
	} else {
		var address = document.getElementById("location_address").value + ",%20" + document.getElementById("location_city").value + "%20" + document.getElementById("location_state").value + "%20" + document.getElementById("location_postcode").value + ",%20" + document.getElementById("location_country").value;
	}
	$.ajax({
		type: "GET",
		dataType: "json",
		url: "http://maps.googleapis.com/maps/api/geocode/json?sensor=false&address="+address,
		success: function(msg){
			var lat = msg.results[0].geometry.location.lat;
			var lng = msg.results[0].geometry.location.lng;
			document.getElementById("location_latitude").value = lat;
			document.getElementById("location_longitude").value = lng;
		},
		error: function (e) {
			alert(e.message);
		}
	});
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