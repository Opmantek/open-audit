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
            <th><?php echo __('Hostname')?></th>
            <th><?php echo __('Domain')?></th>
            <th><?php echo __('IP Address')?></th>
            <th><?php echo __('Type')?></th>
            <th><?php echo __('Description')?></th>
            <th><?php echo __('OS / Device')?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($query as $key):
        if ($key->hostname == "") {
            $key->hostname = "-";
        } ?>
        <tr>
            <td align='center'><img src="<?php echo str_replace("index.php", "", site_url()); ?>theme-tango/tango-images/16_<?php echo $key->icon; ?>.png" style='border-width:0px;' title="" alt="" /></td>
            <td><a class="SystemPopupTrigger" rel="<?php echo intval($key->system_id); ?>" href="<?php echo site_url(); ?>/main/system_display/<?php echo intval($key->system_id); ?>"><?php echo htmlentities($key->hostname); ?></a></td>
            <td><?php echo htmlentities($key->domain)?></td>
            <td><span style="display:none;"><?php echo htmlentities($key->man_ip_address)?></span><?php echo htmlentities(ip_address_from_db($key->man_ip_address))?></td>
            <td><?php echo htmlentities($key->man_type)?></td>
            <td><?php echo htmlentities($key->man_description)?></td>
            <td><?php echo htmlentities($key->man_os_family)?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php } else {
    echo "<br />".__('There are no search results').".<br />";
} ?>
