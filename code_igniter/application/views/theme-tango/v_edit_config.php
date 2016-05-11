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
<div id="view_summary_alerts" style="float: left; width: 100%;">
    <br />
    <form action="#" method="post" class='niceforms'>
    <fieldset id="config_details">
        <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Config')?></span></legend>
        <div style="min-width: 50px; float: right;">
        </div>
        <div style="width: 100%; float:left;">
        <br /><span style="color: red;">NOTE</span>- To remove the value for a config item, insert a - (a dash or minus) into the field. Removing the value and not inputting anything will not actually remove the value.<br />
        <table cellspacing="1" class="tablesorter" width="100%">
            <thead>
                <tr>
                    <th width="20%"><?php echo __('Config Name')?></th>
                    <th width="20%"><?php echo __('Config Value')?></th>
                    <th width="20%"><?php echo __('Description')?></th>
                    <th width="20%"><?php echo __('Last Editied By')?></th>
                    <th width="20%"><?php echo __('Last Edited On')?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($query as $item) { ?>
            <?php
                $item->config_show_name = $item->config_name;
                if ($item->config_name == 'ad_server') {
                    $item->config_name = 'default_ad_server';
                    $item->config_show_name = 'ad_server';
                }
            ?>
                <tr>
                    <td align="left"><br /><?php echo htmlentities($item->config_show_name) ?> </td>
                    <td align='left'><br />
                    <?php if ($item->config_editable == "y") {
                        if ($item->config_value == '') {
                                $item->config_value = '-';
                        }
                        $type = 'text';
                        if ($item->config_name === 'default_snmp_community' and $this->config->item('show_snmp_community') != 'y') {
                            $item->config_value = str_replace($item->config_value, str_repeat("*", strlen($item->config_value)), $item->config_value);
                            $type = 'password';
                        }
                        if (($item->config_name === 'default_ssh_password' or $item->config_name === 'default_windows_password' or $item->config_name === 'default_ipmi_password') and
                                                    ($this->config->item('show_passwords') != 'y')) {
                            $item->config_value = str_replace($item->config_value, str_repeat("*", strlen($item->config_value)), $item->config_value);
                            $type = 'password';
                        }
                        ?>
                       <span id='<?php echo htmlentities($item->config_name) ?>' name='<?php echo htmlentities($item->config_name) ?>' class="editText" data-type="<?php echo htmlentities($type); ?>" style="color:blue;"><?php echo htmlentities(urldecode($item->config_value)); ?></span>
                    <?php } else { ?>
                           <span id='<?php echo htmlentities($item->config_name) ?>' name='<?php echo htmlentities($item->config_name) ?>'><?php echo htmlentities(urldecode($item->config_value)); ?></span>
                    <?php } ?>
                    </td>
                    <td><br /><?php echo htmlentities($item->config_description); ?></td>
                    <td><br /><?php echo htmlentities($item->full_name); ?></td>
                    <td><br /><?php echo htmlentities($item->config_edited_date); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <br /><span style="color: red;">NOTE</span>- To remove the value for a config item, insert a - (a dash or minus) into the field. Removing the value and not inputting anything will not actually remove the value.<br />
    </fieldset>
</div>
</div>
</div>

<style type="text/css">
/* this is for the blessed_subnets td as it can get very large */
td {
overflow: hidden;
max-width: 400px;
word-wrap: break-word;
}
</style>
