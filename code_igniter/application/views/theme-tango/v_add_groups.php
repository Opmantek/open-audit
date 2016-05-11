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
$sortcolumn = 3;
if (count($query) > 1) { ?>
	<table cellspacing="1" class="tablesorter">
		<thead>
			<tr>
				<th><?php echo __('Icon')?></th>
				<th><?php echo __('Name')?></th>
				<th><?php echo __('Description')?></th>
				<th align='center' width="120" class='{sorter: false}'><?php echo __('Activate Group')?></th>
				<th align='center' width="120" ><?php echo __('Already Active')?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($query as $key): ?>
				<?php if ($key['group_name'] > '') { ?>
					<tr>
						<td align='center' width="20"><img src="<?php echo $oa_theme_images.'/16_'.$key['group_icon']; ?>.png"/></td>
						<td><?php echo $key['group_name']; ?></td>
						<td><?php echo preg_replace("/(\w+) attribute/", "<i>$1</i> attribute", $key['group_description']); ?></td>
						<?php if ($key['activated']) { ?>
							<?php if ($key['activated'] != '1') { ?>
								<td align='center'><?php echo "<a href=\"action_delete_group/".$key['activated']."\"><img src='".$oa_theme_images."/16_delete.png' alt='' title='' style='width:16'/></a>"; ?></td>
								<td align='center'>yes</td>
		                    <?php } else { ?>
								<td align='center'></td>
								<td align='center'>yes</td>
							<?php } ?>
						<?php } else { ?>
							<td align='center'><?php echo "<a href=\"action_activate_group/".$key['file']."\"><img src='".$oa_theme_images."/16_true.png' alt='' title='' style='width:16'/></a>"; ?></td>
							<td align='center'></td>
						<?php } ?>
					</tr>
				<?php } ?>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php } ?>
