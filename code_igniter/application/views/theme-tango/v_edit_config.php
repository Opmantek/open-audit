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
 * @version 1.3.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

?>
<div id="view_summary_alerts" style="float: left; width: 100%;">
	<br />
	<form action="#" method="post" class="niceforms">
	<fieldset id="config_details">
		<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Config')?></span></legend>
		<div style="min-width: 50px; float: right;">
		</div>
		<div style="width: 100%; float:left;">
		<br /><span style="color: red;">NOTE</span>- To remove the value for a config item, insert a - (a dash or minus) into the field. Removing the value and not inputting anything will not actually remove the value.<br />
		<table cellspacing="1" class="tablesorter" width="100%">
			<thead>
				<tr>
					<th><?php echo __('Config Name')?></th>
					<th><?php echo __('Config Value')?></th>
					<th><?php echo __('Description')?></th>
					<th><?php echo __('Last Editied By')?></th>
					<th><?php echo __('Last Edited On')?></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($query as $item) { ?>
				<tr>
					<td width='150px' align="right"><br /><label for='<?php $item->config_name ?>'><?php echo $item->config_name ?>: </label></td>
					<td align='left' width='250px'><br />
						<?php if ($item->config_editable == "y") {
							if ($item->config_value == '') { $item->config_value = '-'; }

							if ($item->config_name === 'default_snmp_community' and $config->show_snmp_community != 'y') {
								$item->config_value = str_replace($item->config_value, str_repeat("*", strlen($item->config_value)), $item->config_value);
							}

							if (($item->config_name === 'default_ssh_password' or $item->config_name === 'default_windows_password') and 
								($config->show_passwords != 'y')) {
									$item->config_value = str_replace($item->config_value, str_repeat("*", strlen($item->config_value)), $item->config_value);
							}
							?>
							<span id='<?php echo $item->config_name ?>' name='<?php echo$item->config_name ?>' class="editText" style="color:blue;"><?php echo $item->config_value; ?></span>
						<?php } else { ?>
							<span id='<?php echo $item->config_name ?>' name='<?php echo$item->config_name ?>'><?php echo $item->config_value; ?></span>
						<?php } ?>
					</td>
					<td><br /><?php echo $item->config_description; ?></td>
					<td><br /><?php echo $item->user_full_name; ?></td>
					<td><br /><?php echo $item->config_edited_date; ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	<br /><span style="color: red;">NOTE</span>- To remove the value for a config item, insert a - (a dash or minus) into the field. Removing the value and not inputting anything will not actually remove the value.<br />
	</fieldset>
</div>
</div>
</div>
