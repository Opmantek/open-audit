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
$sortcolumn = 2;
if (count($query) > 0) {
    ?>
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th align='center' width="120"><?php echo __('Systems')?></th>
			<th><?php echo __('Name')?></th>
			<th><?php echo __('Comments')?></th>
			<th><?php echo __('Address')?></th>
			<th><?php echo __('Type')?></th>
			<th align='center' width="80" class='{sorter: false}'><?php echo __('Activate Group')?></th>
			<th align='center' width="80" class='{sorter: false}'><?php echo __('Remove Group')?></th>
			<th align='center' width="80" class='{sorter: false}'><?php echo __('Show Devices')?></th>
			<th align='center' width="80" class='{sorter: false}'><?php echo __('Edit Location')?></th>
			<th align='center' width="80" class='{sorter: false}'><?php echo __('Delete Location')?></th>
		</tr>
	</thead>
	<tbody>
		<?php
        if (count($query) > 0) {
            foreach ($query as $key):

                $edit_pic = "<a href=\"edit_location/".intval($key->id)."\"><img src='".$oa_theme_images."/16_edit.png' alt='' title='' style='width:16'/></a>";
            $delete_pic = "<a href=\"delete_location/".intval($key->id)."\"><img src='".$oa_theme_images."/16_delete.png' alt='' title='' style='width:16'/></a>";

            if ($key->name == '') {
                $key->name = '(none)';
            }

            if ($key->group_id > '0') {
                $show_pic = "<a href=\"../main/list_devices/".intval($key->group_id)."\"><img src='".$oa_theme_images."/16_device.png' alt='' title='' style='width:16'/></a>";
                $deactivate_pic = "<a href=\"delete_group/".intval($key->id)."\"><img src='".$oa_theme_images."/16_delete.png' alt='' title='' style='width:16'/></a>";
                $activate_pic = '';
            } else {
                $show_pic = '';
                $deactivate_pic = '';
                $activate_pic = "<a href=\"activate_group/".intval($key->id)."\"><img src='".$oa_theme_images."/16_true.png' alt='' title='' style='width:16'/></a>";
            }

            if ($key->id == '0') {
                $delete_pic = '';
            }

            ?>
			<tr>
				<td align='center'><?php echo $key->total?></td>
				<td><a href="../main/view_location/<?php echo $key->id?>"><?php echo htmlentities($key->name)?></a></td>
				<td><?php echo htmlentities($key->comments)?></td>
				<td><?php echo htmlentities($key->address)?></td>
				<td><?php echo htmlentities($key->type)?></td>
				<td align='center'><?php echo $activate_pic?></td>
				<td align='center'><?php echo $deactivate_pic?></td>
				<td align='center'><?php echo $show_pic?></td>
				<td align='center'><?php echo $edit_pic?></td>
				<td align='center'><?php echo $delete_pic?></td>
			</tr>
			<?php endforeach;
            ?>
		<?php 
        } else {
            ?>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<?php 
        }
    ?>
	</tbody>
</table>
<?php

} else {
    echo "<br />".__('There are no current locations').".<br />";
}
?>
