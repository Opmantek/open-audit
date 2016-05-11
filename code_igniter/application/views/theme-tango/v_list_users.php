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
if ($query) {
    ?>
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th><?php echo __('User Name')?></th>
			<th><?php echo __('User Full Name')?></th>
			<th><?php echo __('User Email')?></th>
			<th align='center'><?php echo __('User Admin')?></th>
			<th align='center' class='{sorter: false}'><?php echo __('Edit')?></th>
			<th align='center' class='{sorter: false}'><?php echo __('Deactivate')?></th>
			<th align='center' class='{sorter: false}'><?php echo __('Activate')?></th>
		</tr>
	</thead>
	<tbody>
		<?php
        foreach ($query as $key):
            $edit_pic = "<a href=\"edit_user/".intval($key->id)."\"><img src='".$oa_theme_images."/16_edit.png' alt='' title='' style='width:16'/></a>";
            $delete_pic = "<a href=\"delete_user/".intval($key->id)."\"><img src='".$oa_theme_images."/16_delete.png' alt='' title='' style='width:16'/></a>";
            if ($key->admin == 'y') {
                $admin_pic = "<img src='".$oa_theme_images."/16_true.png' alt='' title='' style='width:16'/>";
            } else {
                $admin_pic = "<img src='".$oa_theme_images."/16_false.png' alt='' title='' style='width:16'/>";
                $admin_pic = "";
            }
            if ($key->active == 'y') {
                $deactivate_pic = "<a href=\"deactivate_user/".intval($key->id)."\"><img src='".$oa_theme_images."/16_delete.png' alt='' title='' style='width:16'/></a>";
                $activate_pic = "";
            } else {
                $deactivate_pic = "";
                $activate_pic = "<a href=\"activate_user/".intval($key->id)."\"><img src='".$oa_theme_images."/16_true.png' alt='' title='' style='width:16'/></a>";
            }
            ?>
			<tr>
				<td><?php echo htmlentities($key->name)?></td>
				<td><?php echo htmlentities($key->full_name)?></td>
				<td><?php echo htmlentities($key->email)?></td>
				<td align='center'><?php echo $admin_pic?></td>
				<td align='center'><?php echo $edit_pic?></td>
				<td align='center'><?php echo $deactivate_pic?></td>
				<td align='center'><?php echo $activate_pic?></td>
			</tr>
		<?php endforeach;
    ?>
	</tbody>
</table>

<?php

} else {
    echo "<br />".__('There are no current users').".<br />";
}
?>
