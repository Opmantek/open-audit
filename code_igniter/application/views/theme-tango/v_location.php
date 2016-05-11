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
<form action="#" method="post" class='niceforms'>
	<fieldset id="org_details" class='niceforms'>
		<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Location Details')?></span></legend>
		<img class='section_image' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' />
		<table cellpadding = "0" cellspacing="0">
			<tr>
				<td valign="top">
					<p><label for='name'><?php echo __("Name")?>: </label><span id='name' name='name'>&nbsp;<?php echo htmlentities($location->name)?></span></p>
					<p><label for='devices'># <?php echo __("Devices")?>: </label><span id='devices' name='devices'>&nbsp;<?php echo htmlentities($location->total)?></span></p>
					<p><label for='type'><?php echo __("Type")?>: </label><span id='type' name='type'>&nbsp;<?php echo htmlentities($location->type)?></span></p>
					<p><label for='room'><?php echo __("Room")?>: </label><span id='room' name='room'>&nbsp;<?php echo htmlentities($location->room)?></span></p>
					<p><label for='suite'><?php echo __("Suite")?>: </label><span id='suite' name='suite'>&nbsp;<?php echo htmlentities($location->suite)?></span></p>
					<p><label for='level'><?php echo __("Level")?>: </label><span id='level' name='level'>&nbsp;<?php echo htmlentities($location->level)?></span></p>
					<p><label for='address'><?php echo __("Street Address")?>: </label><span id='address' name='address'>&nbsp;<?php echo htmlentities($location->address)?></span></p>
				</td valign="top"><td>
					<p><label for='city'><?php echo __("City")?>: </label><span id='city' name='city'>&nbsp;<?php echo htmlentities($location->city)?></span></p>
					<p><label for='state'><?php echo __("State")?>: </label><span id='state' name='state'>&nbsp;<?php echo htmlentities($location->state)?></span></p>
					<p><label for='country'><?php echo __("Country")?>: </label><span id='country' name='country'>&nbsp;<?php echo htmlentities($location->country)?></span></p>
					<p><label for='phone'><?php echo __("Phone")?>: </label><span id='phone' name='phone'>&nbsp;<?php echo htmlentities($location->phone)?></span></p>
					<p><label for='geo'><?php echo __("Geocode")?>: </label><span id='geo' name='geo'>&nbsp;<?php echo htmlentities($location->geo)?></span></p>
					<p><label for='latitude'><?php echo __("Latitude")?>: </label><span id='latitude' name='latitude'>&nbsp;<?php echo htmlentities($location->latitude)?></span></p>
					<p><label for='longitude'><?php echo __("Longitude")?>: </label><span id='longitude' name='longitude'>&nbsp;<?php echo htmlentities($location->longitude)?></span></p>
					<p><label for='comments'><?php echo __("Comments")?>: </label><span id='comments' name='comments'>&nbsp;<?php echo htmlentities($location->comments)?></span></p>
				</td>
			</tr>
		</table>
	</fieldset>
</form>
</div>
</div>
