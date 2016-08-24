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
$orgs = $this->data['orgs'];
$options = $this->data['options'];
$options_scripts = $this->data['options_scripts'];
$files = '';
foreach ($this->response->data['files'] as $file) {
    $path = str_replace('\\', '\\\\', $file->path);
    $path = str_replace('/', '\/', $path);
    $files .= '<tr><td>' . $path . '</td><td><input type="checkbox" name="data[options][files][]" id="data[options][files][]" value="' . $path . '" checked /></td><td>Check to audit this file or folder.</td></tr>';
}

foreach ($options_scripts as $key => $value) {
    $script_options[$key] = generate_options($value, $options, $files, $orgs);
}

function generate_options($option_list, $options, $files, $orgs) {
    $return = '<table width="100%">';
    foreach ($options as $option) {
        foreach ($option_list as $list_item) {
            if ($list_item == $option->name) {
                $return .= '<tr><td>' . $option->name . '</td>';
                
                switch ($option->type) {
                    case 'text';
                    case 'number';
                    case 'url';
                    case 'date':
                        if ($option->name != 'org_id') {
                            $return .= '<td><input size="40" type="' . $option->type . '" name="data[options][' . $option->name . ']" value="' . $option->default . '" id="data[options][' . $option->name . ']" /></td><td> ' . $option->help . '</td></tr>';
                        } else {
                            $return .= '<td><select name="data[options][org_id]" id="data[options][org_id]">';
                            foreach ($orgs as $org) {
                                $return .= '<option value="' . $org->id . '">' . $org->name . '</option>';
                            }
                            $return .= '</select></td></tr>';
                        }
                        break;

                    case 'select':
                        $return .= '<td><select id="data[options][' . $option->name . ']" name="data[options][' . $option->name . ']">';
                        foreach (explode(',', $option->values) as $value) {
                            if ($value == $option->default) {
                                $selected = 'selected';
                            } else {
                                $selected = '';
                            }
                            $return .= '<option value="' . $value . '" ' . $selected . '>' . $value . '</option>';
                        }
                        $return .= "</select></td><td>" . $option->help . "</td></tr>";
                        break;
                }
            }
        }
    }
    if ($files != '') {
        $return .= '<tr><td colspan="3"><b>Custom Fields</b></td></tr>' . $files;
    }
    $return .= '</table>';
    return($return);
}

echo form_open('scripts'); ?>
<fieldset id="details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Create Script')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_network.png' alt='' title='' />
		<p><label for='data[id]'><?php echo __("ID")?>: </label><input type='text' id='data[id]' name='data[id]' tabindex='1' title='ID' value="" disabled /> * Will be completed automatically.</p>
            </select></p>
		<p><label for='data[name]'><?php echo __("Name")?>: </label><input type='text' id='data[name]' name='data[name]' tabindex='2' title='Name' value=""  /> The name of the script. This is what the file should be saved as.</p>
        <p><label for='data[description]'><?php echo __("Description")?>: </label><input type='text' id='data[description]' name='data[description]' tabindex='3' title='Level'  value=""/> A human readable description to help remind you what this is for.</p>
        <p><label for='data[description]'><?php echo __("Based On")?>: </label>
            <select id='data[based_on]' name='data[based_on]' onChange="based_on();">
                <option value=''></option>
                <option value='audit_aix.sh'>Audit AIX</option>
                <option value='audit_esx.sh'>Audit ESX</option>
                <option value='audit_linux.sh'>Audit Linux</option>
                <option value='audit_osx.sh'>Audit OSX</option>
                <option value='audit_windows.vbs'>Audit Windows</option>
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

<?php echo form_close(); ?>
</div>
</div>
<style>
input[type="text"]:disabled {
    background: #dddddd;
}
</style>

<script>
function based_on()
{
    switch(document.getElementById("data[based_on]").value)
    {
        <?php foreach ($script_options as $key => $value) { ?>
        case "<?php echo $key; ?>":
            based_on_text = '<?php echo $value; ?>';
        break;
        <?php } ?>
    }
    document.getElementById("options").innerHTML = based_on_text;
}
</script>
<?php
exit();
?>