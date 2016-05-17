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
<form>
<fieldset id="network" class='niceforms'>
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Network Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_network.png' alt='' title='' />
	<?php $item = $this->response->data['network'][0]; ?>
	<p><label for='data[id]'><?php echo __("ID")?>: </label><span id='data[id]' name='data[id]' tabindex='1' title='ID'><?php echo print_something($item->id); ?></span></p>
	<p><label for='data[name]'><?php echo __("Name")?>: </label><span id='data[name]' name='data[name]' tabindex='2' title='Name'><?php echo print_something($item->name); ?></span></p>
	<p><label for='data[description]'><?php echo __("Description")?>: </label><span id='data[description]' name='data[description]' tabindex='3' title='Level'><?php echo print_something($item->description); ?></span></p>
	<p><label for='data[edited_by]'><?php echo __("Edited By")?>: </label><span id='data[edited_by]' name='data[edited_by]' tabindex='4' title='Edited By'><?php echo print_something($item->edited_by); ?></span></p>
	<p><label for='data[edited_date]'><?php echo __("Edited Date")?>: </label><span id='data[edited_date]' name='data[edited_date]' tabindex='5' title='Edited Date'><?php echo print_something($item->edited_date); ?></span></p>
	<?php if (empty($this->response->data['devices'])) { ?>
	<p><label></label><button><a href="<?php echo current_url() . '?sub_resource=devices&' . $this->response->query_string; ?>">Show Devices</a></button>
	<?php } else { ?>
	<p><label></label><button><a href="<?php echo current_url() . '?' . str_replace('sub_resource=devices', '', $this->response->query_string); ?>">Hide Devices</a></button>
	<?php } ?>
</fieldset>

<br /><br />

<?php if (!empty($this->response->data['devices'])) { ?>
<fieldset id="devices" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Devices')?></span></legend>
	<table cellpadding = "0" cellspacing="0" width="100%" class="tablesorter">
	<thead>
		<tr>
			<th>ID</th>
			<th>Icon</th>
			<th>Type</th>
			<th>Hostname</th>
			<th>Domain</th>
			<th>IP</th>
			<th>Description</th>
			<th>OS Family</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($this->response->data['devices'] as $item) { ?>
		<tr>
			<td style="text-align: center;"><a href="../main/system_display/<?php echo intval($item->system_id)?>"><?php echo intval($item->system_id)?></td>
			<td style="text-align: center;"><img src="<?php echo str_replace("index.php", "", site_url())."device_images/".strtolower(str_replace(" ", "_", htmlentities($item->icon))).".svg\""; ?>" style="border-width:0px; width:24px;" title="<?php echo htmlentities($item->icon); ?>" alt="<?php echo htmlentities($item->icon); ?>"/></td>
			<td><?php echo $item->type; ?></td>
			<td><?php echo $item->hostname; ?></td>
			<td><?php echo $item->domain; ?></td>
			<td><span style="display:none;"><?php echo str_replace('.', '', $item->ip_padded); ?></span><?php echo $item->ip; ?></td>
			<td><?php echo $item->description; ?></td>
			<td><?php echo $item->os_family; ?></td>
			<td><?php echo $item->man_status; ?></td>
		</tr>
	<?php } ?>
	</table>
</fieldset>
<?php } ?>
</form>

</div>
</div>
<style>
input[type="text"]:disabled {
    background: #dddddd;
}
</style>
<?php
exit();
?>