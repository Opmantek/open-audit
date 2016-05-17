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
			<th><?php echo __('Type')?></th>
			<th><?php echo __('Placement')?></th>
			<th><?php echo __('Group')?></th>
			<th align='center'><?php echo __('Edit')?></th>
			<th align='center'><?php echo __('Delete')?></th>
		</tr>
	</thead>
	<tbody>
		<?php
        if (count($query) > 0) {
            foreach ($query as $key):
                if ($key->field_id > 0) {
                    $edit_pic = "<a href=\"edit_field/".intval($key->field_id)."\"><img src='".$oa_theme_images."/16_edit.png' alt='' title='' style='width:16'/></a>";
                    $delete_pic = "<a href=\"delete_field/".intval($key->field_id)."\"><img src='".$oa_theme_images."/16_delete.png' alt='' title='' style='width:16'/></a>";
                    ?>
			<tr>
				<td><a href="../admin_field/edit_field/<?php echo $key->field_id?>"><?php echo htmlentities($key->field_name)?></a></td>
				<td><?php echo htmlentities($key->field_type)?></a></td>
				<td><?php echo htmlentities($key->field_placement)?></a></td>
				<td><?php echo htmlentities($key->group_name)?></a></td>
				<td align='center'><?php echo $edit_pic?></td>
				<td align='center'><?php echo $delete_pic?></td>
			</tr>
			<?php 
                }
            ?>
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
		</tr>
		<?php 
        }
    ?>
	</tbody>
</table>
<?php

} else {
    echo "<br />".__('There are no current custom fields.').".<br />";
}
?>
