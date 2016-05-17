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
			<th><?php echo __('Name')?></th>
			<th><?php echo __('Version')?></th>
            <th><?php echo __('Chunk Length')?></th>
			<th><?php echo __('Chunk')?></th>
		</tr>
	</thead>
	<tbody>
		<?php
        if (count($query) > 0) {
            foreach ($query as $key): ?>
    			<tr>
                    <td><?php echo $key['name']; ?></td>
                    <td><?php echo $key['version']; ?></td>
                    <td><?php echo $key['length']; ?></td>
                    <td><?php echo $key['piece']; ?></td>
    			</tr>
			<?php endforeach;
            ?>
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
<?php

} else {
    echo "<br /><br />";
}
?>
