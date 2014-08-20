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
 * @version 1.4
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

$sortcolumn = 2; 
if ($query)
{
?>
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th align="center" style="width:120px;"><?php echo __('Hostname')?></th>
			<th align="center" style="width:120px;"><?php echo __('Table')?></th>
			<th align="center" style="width:120px;"><?php echo __('Attribute')?></th>
			<th align="center" style="width:120px;"><?php echo __('Result')?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($query as $key): ?>
		<?php 
			// format the table and field names
			$key->table = str_replace("sys_hw_", "", $key->table);
			$key->table = str_replace("sys_sw_", "", $key->table);
			$key->table = str_replace("_", " ", $key->table);
			$key->table = ucwords($key->table);
			
			$key->field = str_replace("sys_hw_", "", $key->field);
			$key->field = str_replace("sys_sw_", "", $key->field);
			$key->field = str_replace("_", " ", $key->field);
			$key->field = ucwords($key->field);

			if ($key->hostname == "") { $key->hostname = "-"; }
		?>
			
		<tr>
			<td align="center"><a class="SystemPopupTrigger" rel="<?php echo $key->system_id; ?>" href="<?php echo site_url(); ?>/main/system_display/<?php echo $key->system_id; ?>"><?php echo $key->hostname; ?></a></td>
			<td align="center"><?php echo $key->table?></td>
			<td align="center"><?php echo $key->field?></td>
			<td align="center"><?php echo $key->result?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php
} else {
	echo "<br />" . __('There are no search results') . ".<br />";
}
?>
