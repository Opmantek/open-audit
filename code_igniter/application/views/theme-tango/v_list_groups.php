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
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th align='center' class='{sorter: false}'>Icon</th>
			<th align='center' style="width:100px;"><?php echo __('Systems')?></th>
			<th><?php echo __('Name')?></th>
			<th><?php echo __('Category')?></th>
			<th><?php echo __('Description')?></th>
			<th align='center' class='{sorter: false}'><?php echo __('Edit')?></th>
			<th align='center' class='{sorter: false}'><?php echo __('Export')?></th>
			<th align='center' class='{sorter: false}'><?php echo __('Update')?></th>
			<th align='center' class='{sorter: false}'><?php echo __('Delete')?></th>
		</tr>
	</thead>
	<tbody>
		<?php
        foreach ($query as $key):
            $tag = 'User Defined';
            $edit_pic = "<a href=\"edit_group/".intval($key->group_id)."\"><img src='".$oa_theme_images."/16_edit.png' alt='' title='' style='width:16'/></a>";
            $export_pic = "<a href=\"export_group/".intval($key->group_id)."\"><img src='".$oa_theme_images."/16_text-x-generic-template.png' alt='' title='' style='width:16'/></a>";
            $delete_pic = "<a href=\"delete_group/".intval($key->group_id)."\"><img src='".$oa_theme_images."/16_delete.png' alt='' title='' style='width:16'/></a>";
            $update_pic = "<a href=\"update_group/".intval($key->group_id)."\"><img src='".$oa_theme_images."/16_update.png' alt='' title='' style='width:16'/></a>";
         ?>
		<tr>
			<td align='center'><img src="<?php echo $oa_theme_images;?>/16_<?php echo htmlentities($key->group_icon);?>.png" border="0" title="<?php echo htmlentities($key->group_icon);?>" alt="<?php echo htmlentities($key->group_icon);?>" /></td>
			<td align='center'><?php echo intval($key->total)?></td>
			<?php if ($key->group_padded_name > "") { ?>
				<td><span style="display: none;"><?php echo htmlentities($key->group_padded_name)?></span><a href="<?php echo base_url()?>index.php/main/list_devices/<?php echo intval($key->group_id)?>"><?php echo htmlentities($key->group_name)?></a></td>
			<?php } else { ?>
				<td><a href="<?php echo base_url()?>index.php/main/list_devices/<?php echo intval($key->group_id)?>"><?php echo htmlentities($key->group_name)?></a></td>
			<?php } ?>
			<td align='center'><?php echo htmlentities($key->group_category)?></td>
			<td><?php echo htmlentities($key->group_description)?></td>
			<td align='center'><?php if ($key->group_id != '1') { echo $edit_pic; } ?> </td>
			<td align='center'><?php echo $export_pic?></td>
			<td align='center'><?php echo $update_pic?></td>
			<td align='center'><?php if ($key->group_id != '1') { echo $delete_pic; } ?> </td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
