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

echo form_open('admin_location/edit_location')."\n";
?>
<fieldset id="location_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Location Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' />
	<?php foreach ($location as $key) {
    ?>
	<table style='width:780' cellpadding='0' cellspacing='0'>
		<tr>
			<td style='width:50%'>
				<p><label for='name'><?php echo __("Name")?>: </label><input type='text' id='name' name='name' tabindex='1' title='Location Name' value="<?php echo print_something($key->name); ?>"/><?php echo $error_message; ?></p>
				<p><label for='type'><?php echo __("Type")?>: </label><input type='text' id='type' name='type' tabindex='2' title='Type'  value="<?php echo print_something($key->type); ?>"/></p>
				<p><label for='level'><?php echo __("Level")?>: </label><input type='text' id='level' name='level' tabindex='3' title='Level'  value="<?php echo print_something($key->level); ?>"/></p>
				<p><label for='suite'><?php echo __("Suite")?>: </label><input type='text' id='suite' name='suite' tabindex='4' title='Suite'  value="<?php echo print_something($key->suite); ?>"/></p>
				<p><label for='room'><?php echo __("Room")?>: </label><input type='text' id='room' name='room' tabindex='5' title='Room'  value="<?php echo print_something($key->room); ?>"/></p>
				<p><label for='address'><?php echo __("Street Address")?>: </label><input type='text' id='address' name='address' tabindex='6' title='Street Address'  value="<?php echo print_something($key->address); ?>"/></p>
				<p><label for='city'><?php echo __("City")?>: </label><input type='text' id='city' name='city' tabindex='7' title='City'  value="<?php echo print_something($key->city); ?>"/></p>
			</td>
			<td width="50%">
				<p><label for='state'><?php echo __("State")?>: </label><input type='text' id='state' name='state' tabindex='8' title='State'  value="<?php echo print_something($key->state); ?>"/></p>
				<p><label for='country'><?php echo __("Country")?>: </label><input type='text' id='country' name='country' tabindex='9' title='Country'  value="<?php echo print_something($key->country); ?>"/></p>
				<!-- <p><label for='picture'><?php echo __("Picture")?>: </label><input type='text' id='picture' name='picture' tabindex='9' title='Picture'  value="<?php echo print_something($key->picture); ?>"/></p> -->
				<p><label for='latitude'><?php echo __("Latitude")?>: </label><input type='text' id='latitude' name='latitude' tabindex='10' title='Latitude'  value="<?php echo print_something($key->latitude); ?>"/></p>
				<p><label for='longitude'><?php echo __("Longitude")?>: </label><input type='text' id='longitude' name='longitude' tabindex='11' title='Longitude'  value="<?php echo print_something($key->longitude); ?>"/></p>
				<p><label for='submit'>&nbsp;</label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?></p>
			</td>
		</tr>
	</table>
	<p><?php echo $this->session->flashdata('message');
    ?></p>
	<?php } ?>
	<input type="hidden" value="<?php echo print_something($key->id); ?>" name='id' id='id' />
</fieldset>
<?php echo form_close(); ?>
</div>
</div>
