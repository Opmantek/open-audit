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
			<th><?php echo __('Table')?></th>
			<th align='center'><?php echo __('Rows')?></th>
			<th align='center' class='{sorter: false}'><?php echo __('Excel')?></th>
			<th align='center' class='{sorter: false}'><?php echo __('Web')?></th>
			<th align='center' class='{sorter: false}'><?php echo __('CSV')?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($query as $key) { ?>
			<tr>
			<td><?php echo $key['table']; ?></td>
			<td align='center'><?php echo $key['rows']; ?></td>
			<td align='center'><a href="<?php echo base_url()?>index.php/admin_db/export_table_to_excel/<?php echo htmlentities($key['table']); ?>" ><img src="<?php echo $oa_theme_images; ?>/16_excel.png" alt="" title="" width="16"/></a></td>
			<td align='center'><a href="<?php echo base_url()?>index.php/admin_db/export_table_to_html/<?php echo htmlentities($key['table']); ?>" ><img src="<?php echo $oa_theme_images; ?>/16_browser.png" alt="" title="" width="16"/></a></td>
			<td align='center'><a href="<?php echo base_url()?>index.php/admin_db/export_table_to_csv/<?php echo htmlentities($key['table']);  ?>" ><img src="<?php echo $oa_theme_images; ?>/16_csv.png" alt="" title="" width="16"/></a></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
