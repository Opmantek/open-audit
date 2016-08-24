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
$item = $this->response->data['scripts'][0];
$item_options = json_decode($item->options);

$based_on = array();
$based_on['audit_aix.sh'] = 'Audit AIX';
$based_on['audit_esx.sh'] = 'Audit ESX';
$based_on['audit_linux.sh'] = 'Audit Linux';
$based_on['audit_osx.sh'] = 'Audit OSX';
$based_on['audit_windows.vbs'] = 'Audit Windows';

echo form_open('scripts');
?>
<fieldset id="details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Create Script')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_network.png' alt='' title='' />
		<p><label for='data[id]'><?php echo __("ID")?>: </label><input type='text' id='data[id]' name='data[id]' tabindex='1' title='ID' value="<?php echo $item->id; ?>" disabled /> * Will be completed automatically.</p>
            </select></p>
		<p><label for='data[name]'><?php echo __("Name")?>: </label><input type='text' id='data[name]' name='data[name]' tabindex='2' title='Name' value="<?php echo $item->name; ?>"  /> The name of the script. This is what the file should be saved as.</p>
        <p><label for='data[description]'><?php echo __("Description")?>: </label><input type='text' id='data[description]' name='data[description]' tabindex='3' title='Level'  value="<?php echo $item->description; ?>"/> A human readable description to help remind you what this is for.</p>
        <p><label for='data[description]'><?php echo __("Based On")?>: </label>
            <select id='data[based_on]' name='data[based_on]' onChange="based_on();">
                <option value=''></option>
                <?php
                    foreach ($based_on as $key => $value) {
                        if ($item->based_on == $key) {
                            $selected = ' selected';
                        } else {
                            $selected = '';
                        }
                        echo "              <option value=\"" . $key . "\" " . $selected . ">" . $value . "</option>\n";
                    }
                ?>
            </select>
        </p>
		<p><label for='data[edited_by]'><?php echo __("Edited By")?>: </label><input type='text' id='data[edited_by]' name='data[edited_by]' tabindex='4' title='Edited By' value="" disabled /> * Will be completed automatically.</p>
		<p><label for='data[edited_date]'><?php echo __("Edited Date")?>: </label><input type='text' id='data[edited_date]' name='data[edited_date]' tabindex='5' title='Edited Date' value="" disabled /> * Will be completed automatically.</p>
		<p><label for='submit'>Submit: </label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit', 'tabindex' => '6'), __('Submit') ); ?></p>
</fieldset>
<br />
<fieldset class='niceforms'>
<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Options')?></span></legend>
<p id="options"></p>
</fieldset>

<pre>
<?php print_r($this->response->data['files']); ?>
<?php 
$count = 0;
    foreach ($this->response->data['files'] as $file) {
    $count +=1;
    echo "<p>files[" . $count . "]=\"" . $file->path . "\"\n";
}
print_r($options);
?>
</pre>

<?php echo form_close(); ?>
</div>
</div>
<style>
input[type="text"]:disabled {
    background: #dddddd;
}
</style>

<script>
function based_on ()
{
    switch(document.getElementById("data[based_on]").value)
    {
        case "audit_windows.vbs":
            based_on_text = '<?php echo $options_windows; ?>';
        break;

        case "audit_linux.sh":
            based_on_text = 'audit linux';
        break;
    }
    document.getElementById("options").innerHTML = based_on_text;
}
</script>
<?php
exit();
?>