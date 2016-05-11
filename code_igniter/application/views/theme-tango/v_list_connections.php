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
$sortcolumn = 0;
if (count($query) > 0) {
    ?>
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th><?php echo __('Name')?></th>
			<th><?php echo __('Organisation')?></th>
			<th><?php echo __('Location A')?></th>
			<th><?php echo __('Location B')?></th>
			<th><?php echo __('Provider')?></th>
			<th><?php echo __('Type')?></th>
			<th align="right"><?php echo __('Speed')?>&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align='center'><?php echo __('Edit')?></th>
			<th align='center'><?php echo __('Delete')?></th>
		</tr>
	</thead>
	<tbody>
		<?php
        if (count($query) > 0) {
            foreach ($query as $key):
                if ($key->connection_id > 0) {
                    $edit_pic = "<a href=\"edit_connection/".intval($key->connection_id)."\"><img src='".$oa_theme_images."/16_edit.png' alt='' title='' style='width:16'/></a>";
                    $delete_pic = "<a href=\"delete_connection/".intval($key->connection_id)."\"><img src='".$oa_theme_images."/16_delete.png' alt='' title='' style='width:16'/></a>";
                    ?>
			<tr>
				<td><?php echo htmlentities($key->name)?></td>
				<td><a href="../main/view_org/<?php echo intval($key->org_id)?>"><?php echo htmlentities($key->org_name)?></a></td>
				<td><a href="../main/view_location/<?php echo htmlentities($key->location_id_a)?>"><?php echo htmlentities($key->location_a)?></a></td>
				<td><a href="../main/view_location/<?php echo htmlentities($key->location_id_b)?>"><?php echo htmlentities($key->location_b)?></a></td>
				<td><?php echo htmlentities($key->provider)?></td>
				<td><?php echo htmlentities($key->service_type)?></td>
				<td align="right"><?php echo htmlentities($key->speed)?></td>
				<td align='center'><?php echo $edit_pic?></td>
				<td align='center'><?php echo $delete_pic?></td>
			</tr>
			<?php } ?>
			<?php endforeach; ?>
		<?php } else { ?>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php } else {
    echo "<br />".__('There are no current connections.').".<br />";
} ?>
