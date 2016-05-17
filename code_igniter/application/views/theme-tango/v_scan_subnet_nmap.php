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
<?php echo form_open('admin/scan_subnet_nmap') ?>
<fieldset id="group_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Scanning A Subnet using Nmap')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $oa_theme_images;?>/48_network_wireless.png' alt='' title='' width='48'/>
	<h1>Using audit_subnet.[sh|vbs] scripts is deprecated. Please use discover_subnet.[sh.vbs] instead. This facility will be removed in a furute version of Open-AudIT.</h1>
	<table cellpadding = "0" cellspacing="0">
		<tr>
			<td width='100%'>
				<p><label for='subnet'><?php echo __('Subnet'); ?>: </label> <input type='text' id='subnet' name='subnet' tabindex='1' title='Subnet'  /></p>
				<p><label for='example'><?php echo __('Example'); ?>: </label><?php __('A typical subnet is 192.168.1.0/24 or 192.168.0.1/32 for a single IP'); ?>.</p>
				<p><label for='submit'>&nbsp;</label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?></p>
				<?php if ($warning > '') { echo "<p><br /><br />$warning</p>\n"; } ?>
			</td>
		</tr>
	</table>
</fieldset>
</form>
