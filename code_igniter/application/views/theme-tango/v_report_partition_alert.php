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
?>
<table cellspacing='1' class='tablesorter' style='width:900'>
	<thead>
		<tr>
			<th><?php echo __('System Name')?></th>
			<th><?php echo __('Partition Name')?></th>
			<th align='center'><?php echo __('Mount Point')?></th>
			<th align='center'><?php echo __('Environment')?></th>
			<th align='center'><?php echo __('Function')?></th>
			<th align='center'><?php echo __('Size - MiB')?></th>
			<th align='center'><?php echo __('Used - MiB')?></th>
			<th align='center'><?php echo __('Free - MiB')?></th>
			<th align='center'><?php echo __('Free - %')?></th>
			<th align='center'><?php echo __('Change per Day (MiB)')?></th>
			<th align='center'><?php echo __('Days until 100%')?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($query as $key):
    if ($key["partition_free_space"] == 0) {
        $percent_free = "0";
    } else {
        $percent_free = round((($key["partition_free_space"] / $key["partition_size"]) * 100), 2);
    }
    if (($key["days_until_used"] < $days) && ($key["days_until_used"] != 'unknown')) {
        ?>
		<tr>
			<td><a href="<?php echo base_url()?>index.php/main/system_display/<?php echo intval($key["system_id"])?>"><?php echo htmlentities($key["hostname"])?></a></td>
			<td align="left"><?php echo htmlentities($key["partition_name"])?></td>
			<td align='center'><a href="<?php echo base_url()?>index.php/main/disk_graph/<?php echo intval($key["system_id"])."/".intval($key["partition_id"])?>"><?php echo htmlentities($key["partition_mount_point"]) ?></a></td>
			<td align='center'><?php echo htmlentities($key["man_environment"])?></td>
			<td align='center'><?php echo htmlentities($key["man_function"])?></td>
			<td align='center'><span style="display: none;"><?php echo htmlentities($key["partition_size"])?></span><?php echo number_format($key["partition_size"])?></td>
			<td align='center'><span style="display: none;"><?php echo htmlentities($key["partition_used_space"])?></span><?php echo number_format($key["partition_used_space"])?></td>
			<td align='center'><span style="display: none;"><?php echo htmlentities($key["partition_free_space"])?></span><?php echo number_format($key["partition_free_space"])?></td>
			<td align='center'><?php echo $percent_free;
        ?></td>
			<td align='center'><?php echo "<span style=\"display: none;\">".htmlentities($key["change_per_day"])."</span>".number_format(round($key["change_per_day"], 0));
        ?></td>
			<td align='center'><?php echo htmlentities($key["days_until_used"]);
        ?></td>
		</tr>
	<?php 
    } else {
    } ?>
	<?php endforeach; ?>
	<?php if (count($query) == 0) {
    echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>\n";
} ?>
	</tbody>
</table>
