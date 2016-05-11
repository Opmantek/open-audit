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
if ($query) { ?>
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
            <th align='center'><?php echo __('Icon')?></th>
            <th align='center'><?php echo __('Hostname')?></th>
            <th align='center'><?php echo __('Domain')?></th>
            <th align='center'><?php echo __('IP Address')?></th>
            <th align='center'><?php echo __('Type')?></th>
			<th align='center'><?php echo __('Table')?></th>
			<th align='center'><?php echo __('Attribute')?></th>
			<th align='center'><?php echo __('Result')?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($query as $key):
        // format the table and field names
        $key->table = str_replace("sys_hw_", "", $key->table);
        $key->table = str_replace("sys_sw_", "", $key->table);
        $key->table = str_replace("_", " ", $key->table);
        $key->table = ucwords($key->table);

        $key->field = str_replace("sys_hw_", "", $key->field);
        $key->field = str_replace("sys_sw_", "", $key->field);
        $key->field = str_replace("_", " ", $key->field);
        $key->field = ucwords($key->field);

        if ($key->hostname == "") {
            $key->hostname = "-";
        } ?>
		<tr>
			<td align='center'><img src="<?php echo str_replace("index.php", "", site_url()); ?>theme-tango/tango-images/16_<?php echo $key->icon; ?>.png" style='border-width:0px;' title="" alt="" /></td>
            <td align='center'><a class="SystemPopupTrigger" rel="<?php echo intval($key->system_id); ?>" href="<?php echo site_url(); ?>/main/system_display/<?php echo intval($key->system_id); ?>"><?php echo htmlentities($key->hostname); ?></a></td>
			<td align='center'><?php echo htmlentities($key->domain)?></td>
            <td><span style="display:none;"><?php echo htmlentities($key->man_ip_address)?></span><?php echo htmlentities(ip_address_from_db($key->man_ip_address))?></td>
            <td align='center'><?php echo htmlentities($key->man_type)?></td>
            <td align='center'><?php echo htmlentities($key->table)?></td>
			<td align='center'><?php echo htmlentities($key->field)?></td>
			<td align='center'><?php echo htmlentities($key->result)?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php } else {
    echo "<br />".__('There are no search results').".<br />";
} ?>
