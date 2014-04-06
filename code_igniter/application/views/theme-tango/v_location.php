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
 * @version 1.3
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

?>
<form action="#" method="post" class="niceforms">
	<fieldset id="org_details" class="niceforms">
		<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Location Details')?></span></legend>
		<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_home.png' alt='' title='' width='48'/>
		<?php $location->location_picture = "<img id='location_picture' name='location_picture' title='Picture' src='<?php echo $location->location_picture?>' />"; ?>
		<?php $location->location_picture = ""; ?>
		<table cellpadding = "0" cellspacing="0">
			<tr>
				<td valign="top">
					<p><label for='location_name'><?php echo __("Name")?>: </label><span id='location_name' name='location_name'>&nbsp;<?php echo $location->location_name?></span></p>
					<p><label for='location_devices'><?php echo __("# Devices")?>: </label><span id='location_devices' name='location_devices'>&nbsp;<?php echo $location->total?></span></p>
					<p><label for='location_type'><?php echo __("Type")?>: </label><span id='location_type' name='location_type'>&nbsp;<?php echo $location->location_type?></span></p>	
					<p><label for='location_room'><?php echo __("Room")?>: </label><span id='location_room' name='location_room'>&nbsp;<?php echo $location->location_room?></span></p>	
					<p><label for='location_suite'><?php echo __("Suite")?>: </label><span id='location_suite' name='location_suite'>&nbsp;<?php echo $location->location_suite?></span></p>	
					<p><label for='location_level'><?php echo __("Level")?>: </label><span id='location_level' name='location_level'>&nbsp;<?php echo $location->location_level?></span></p>	
					<p><label for='location_address'><?php echo __("Street Address")?>: </label><span id='location_address' name='location_address'>&nbsp;<?php echo $location->location_address?></span></p>	
				</td valign="top"><td>
					<p><label for='location_city'><?php echo __("City")?>: </label><span id='location_city' name='location_city'>&nbsp;<?php echo $location->location_city?></span></p>	
					<p><label for='location_state'><?php echo __("State")?>: </label><span id='location_state' name='location_state'>&nbsp;<?php echo $location->location_state?></span></p>	
					<p><label for='location_country'><?php echo __("Country")?>: </label><span id='location_country' name='location_country'>&nbsp;<?php echo $location->location_country?></span></p>	
					<p><label for='location_phone'><?php echo __("Phone")?>: </label><span id='location_phone' name='location_phone'>&nbsp;<?php echo $location->location_phone?></span></p>	
					<p><label for='location_geo'><?php echo __("Geocode")?>: </label><span id='location_geo' name='location_geo'>&nbsp;<?php echo $location->location_geo?></span></p>	
					<p><label for='location_latitude'><?php echo __("Latitude")?>: </label><span id='location_latitude' name='location_latitude'>&nbsp;<?php echo $location->location_latitude?></span></p>	
					<p><label for='location_longitude'><?php echo __("Longitude")?>: </label><span id='location_longitude' name='location_longitude'>&nbsp;<?php echo $location->location_longitude?></span></p>	
					<p><label for='location_comments'><?php echo __("Comments")?>: </label><span id='location_comments' name='location_comments'>&nbsp;<?php echo $location->location_comments?></span></p>	
					<!-- <p><label for='location_picture'><?php echo __("Picture")?>: </label><?php echo $location->location_picture?></p> -->
				</td>
			</tr>
		</table>
	</fieldset>
</form>
</div>
</div>
