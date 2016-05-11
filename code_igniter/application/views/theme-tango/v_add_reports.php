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
$sortcolumn = 1;
if (count($query) > 1) {
    ?>
<pre>
<?php #print_r($query); ?>
</pre>
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th><?php echo __('Name')?></th>
			<th><?php echo __('Description')?></th>
			<th align='center' width="120" class='{sorter: false}'><?php echo __('Activate Report')?></th>
			<th align='center' width="120" ><?php echo __('Already Active')?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($query as $key): ?>
			<?php if ($key['report_name'] > '') { ?>
				<tr>
					<td><?php echo __($key['report_name']); ?></td>
					<td><?php echo $key['report_description']; ?></td>
					<?php if ($key['activated']) { ?>
						<td align='center'><a href="action_deactivate_report/<?php echo $key['activated']; ?>"><img src="<?php echo $oa_theme_images; ?>/16_delete.png" alt="" title="" width="16"/></a></td>
						<td align='center'><?php echo __('yes')?></td>
					<?php } else { ?>
						<td align='center'><a href="action_activate_report/<?php echo $key['file']; ?>"><img src="<?php echo $oa_theme_images; ?>/16_true.png"   alt="" title="" width="16"/></a></td>
						<td align='center'></td>
					<?php } ?>
				</tr>
				<?php } ?>
		<?php endforeach; ?>
	</tbody>
</table>
<?php } ?>
