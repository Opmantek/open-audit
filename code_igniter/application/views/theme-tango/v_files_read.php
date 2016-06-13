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
 * @version 1.14
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
<form>
<fieldset id="network" class='niceforms'>
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('File Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_network.png' alt='' title='' />
	<?php $item = $this->response->data['files'][0]; ?>
	<p><label for='data[id]'><?php echo __("ID")?>: </label><span id='data[id]' name='data[id]' tabindex='1' title='ID'><?php echo print_something($item->id); ?></span></p>
	<p><label for='data[name]'><?php echo __("Path")?>: </label><span id='data[path]' name='data[path]' tabindex='2' title='Path'><?php echo print_something($item->path); ?></span></p>
	<p><label for='data[description]'><?php echo __("Description")?>: </label><span id='data[description]' name='data[description]' tabindex='3' title='Level'><?php echo print_something($item->description); ?></span></p>
	<p><label for='data[edited_by]'><?php echo __("Edited By")?>: </label><span id='data[edited_by]' name='data[edited_by]' tabindex='4' title='Edited By'><?php echo print_something($item->edited_by); ?></span></p>
	<p><label for='data[edited_date]'><?php echo __("Edited Date")?>: </label><span id='data[edited_date]' name='data[edited_date]' tabindex='5' title='Edited Date'><?php echo print_something($item->edited_date); ?></span></p>
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