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
 * 
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
$item = $this->response->data[0];
$options = json_decode($item->attributes->options);
?>
<form>
<fieldset id="script" class='niceforms'>
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Script Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_network.png' alt='' title='' />
	<p><label for='data[id]'><?php echo __("ID")?>: </label><span id='data[id]' name='data[id]' tabindex='1' title='ID'><?php echo print_something($item->id); ?></span></p>
	<p><label for='data[name]'><?php echo __("Name")?>: </label><span id='data[name]' name='data[name]' tabindex='2' title='Name'><?php echo print_something($item->attributes->name); ?></span></p>
	<p><label for='data[description]'><?php echo __("Description")?>: </label><span id='data[description]' name='data[description]' tabindex='3' title='Description'><?php echo print_something($item->attributes->description); ?></span></p>
	<p><label for='data[based_on]'><?php echo __("Based On")?>: </label><span id='data[based_on]' name='data[based_on]' tabindex='3' title='Based On'><?php echo print_something($item->attributes->based_on); ?></span></p>
	<p><label for='data[edited_by]'><?php echo __("Edited By")?>: </label><span id='data[edited_by]' name='data[edited_by]' tabindex='4' title='Edited By'><?php echo print_something($item->attributes->edited_by); ?></span></p>
	<p><label for='data[edited_date]'><?php echo __("Edited Date")?>: </label><span id='data[edited_date]' name='data[edited_date]' tabindex='5' title='Edited Date'><?php echo print_something($item->attributes->edited_date); ?></span></p>
</fieldset>
<br />
<fieldset id="options" class='niceforms'>
<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Options')?></span></legend>
<?php
	foreach ($options as $key => $value) {
		if ($key != 'files') {
?>
	<p><label for='<?php echo $key; ?>'><?php echo __($key)?>: </label><span id='<?php echo $key; ?>' name='<?php echo $key; ?>' tabindex='1' title='<?php echo $key; ?>'><?php echo print_something($value); ?></span></p>
<?php
	} }
	if (!empty($options->files) and count($options->files) > 0) {
		foreach ($options->files as $key => $value) {
			echo '<p><label for="files_' . $key . '">Files: </label><span id="files_' . $key . '">' . $value . '</span></p>';
		}
	}
?>
</fieldset>
<br /><br />

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