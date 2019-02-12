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
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.3.3
* @link      http://www.open-audit.org
 */
foreach ($this->response->included as $item) {
    if ($item->type != 'script_option') {
        $data[$item->type][] = $item->attributes;
    } else {
        $data['script_option'][$item->id] = $item->attributes;
    }
}
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo htmlspecialchars( $this->response->links->self , REPLACE_FLAGS, CHARSET); ?>">
    <input type="hidden" value="<?php echo htmlspecialchars( $this->response->meta->access_token, REPLACE_FLAGS, CHARSET); ?>" id="data[access_token]" name="data[access_token]" />
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][id]" class="col-sm-3 control-label"><?php echo __('ID'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][id]" name="data[attributes][id]" value="" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][name]" class="col-sm-3 control-label"><?php echo __('Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][org_id]" class="col-sm-3 control-label"><?php echo __('Organisation'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][org_id]" name="data[attributes][org_id]">
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'orgs') { ?>     <option value="<?php echo intval($item->id); ?>"><?php echo htmlspecialchars(str_replace("'", "", $item->attributes->name), REPLACE_FLAGS, CHARSET); ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][description]" class="col-sm-3 control-label"><?php echo __('Description'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][description]" name="data[attributes][description]" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][based_on]" class="col-sm-3 control-label"><?php echo __('Based On'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select id="data[attributes][based_on]" name="data[attributes][based_on]" onChange="based_on();" class="form-control">
                                <option value='' label=' '></option>
                                <option value='audit_aix.sh'>Audit AIX</option>
                                <option value='audit_esx.sh'>Audit ESX</option>
                                <option value='audit_linux.sh'>Audit Linux</option>
                                <option value='audit_osx.sh'>Audit OSX</option>
                                <option value='audit_windows.vbs'>Audit Windows</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][edited_by]" class="col-sm-3 control-label"><?php echo __('Edited By'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_by]" name="data[attributes][edited_by]" value="" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][edited_date]" class="col-sm-3 control-label"><?php echo __('Edited Date'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_date]" name="data[attributes][edited_date]" value="" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="submit" class="col-sm-3 control-label"></label>
                    <div class="col-sm-8 input-group">
                        <input type="hidden" value="scripts" id="data[type]" name="data[type]" />
                        <button id="submit" name="submit" type="submit" class="btn btn-default"><?php echo __('Submit'); ?></button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="text-left"><?php echo __('Options'); ?></span>
                            <span class="pull-right"></span>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div id="options"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="text-left"><?php echo __('Files'); ?></span>
                            <span class="pull-right"></span>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div id="files">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><?php echo __('Use'); ?></th>
                                    <th><?php echo __('Name'); ?></th>
                                    <th><?php echo __('Path'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data['files'])) { ?>
                            <?php foreach ($data['files'] as $file): ?>
                            <?php # TODO - enable per script file retrieval ?>
                            <?php # TODO - Maybe only display files per based_on ?>
                                <tr>
                                    <td class="text-center"><input type="checkbox" value="<?php echo htmlspecialchars( $file->path, REPLACE_FLAGS, CHARSET); ?>" id="data[options][files][<?php echo intval($file->id); ?>]" title="data[options][files][<?php echo intval($file->id); ?>]" name="data[options][files][<?php echo intval($file->id); ?>]" checked></td>
                                    <td><?php echo htmlspecialchars($file->name, REPLACE_FLAGS, CHARSET); ?></td>
                                    <td><?php echo htmlspecialchars($file->description, REPLACE_FLAGS, CHARSET); ?></td>
                                    <td><?php echo htmlspecialchars($file->path, REPLACE_FLAGS, CHARSET); ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<?php
if (!empty($data['script_option'])) {
    foreach ($data['script_option'] as $key => $value) {
        $script_options[$key] = generate_options($value, $data['option'], '', $data['orgs']);
    }
}
?>

<script>
function based_on(){
    switch(document.getElementById("data[attributes][based_on]").value)
    {
        <?php foreach ($script_options as $key => $value) { ?>
        case "<?php echo htmlspecialchars( $key, REPLACE_FLAGS, CHARSET); ?>":
            based_on_text = '<?php echo htmlspecialchars( $value, REPLACE_FLAGS, CHARSET); ?>';
        break;
        <?php } ?>
    }
    document.getElementById("options").innerHTML = based_on_text;
}
</script>


<?php
function generate_options($option_list, $options, $files, $orgs) {
    $return = '';
    foreach ($options as $option) {
        foreach ($option_list as $list_item) {
            if ($list_item == $option->name) {
                $return .= '        <div class="form-group">\
                <label for="data[edited_date]" class="col-md-3 control-label">' . htmlspecialchars( $option->name, REPLACE_FLAGS, CHARSET) . '</label>\
                <div class="col-md-9">\
                <div class="col-md-12 input-group">';

                switch ($option->type) {
                    case 'text';
                    case 'number';
                    case 'url';
                    case 'date':
                        if ($option->name != 'org_id') {
                            $return .= '<input type="' . htmlspecialchars( $option->type, REPLACE_FLAGS, CHARSET) . '" class="form-control" id="data[options][' . htmlspecialchars( $option->name, REPLACE_FLAGS, CHARSET) . ']" name="data[options][' . htmlspecialchars( $option->name, REPLACE_FLAGS, CHARSET) . ']" value="' . htmlspecialchars( $option->default, REPLACE_FLAGS, CHARSET) . '" aria-describedby="option_' . htmlspecialchars( $option->name, REPLACE_FLAGS, CHARSET) . '"><span id="option_' . htmlspecialchars( $option->name, REPLACE_FLAGS, CHARSET) . '" class="help-block">' . htmlspecialchars( $option->type, REPLACE_FLAGS, CHARSET) . '</span>';

                        } else {
                            $return .= '<select name="data[options][org_id]" id="data[options][org_id]" class="form-control" aria-describedby="option_org_id">';
                            $return .= '<option value="" label=" "></option>';
                            foreach ($orgs as $org) {
                                $return .= '<option value="' . htmlspecialchars( $org->id, REPLACE_FLAGS, CHARSET) . '">' . htmlentities($org->name, ENT_QUOTES) . '</option>';
                            }
                            $return .= '</select><span id="option_org_id" class="help-block">' . htmlspecialchars( $option->type, REPLACE_FLAGS, CHARSET) . '</span>';
                        }
                        break;

                    case 'select':
                        $return .= '<select id="data[options][' . htmlspecialchars( $option->name, REPLACE_FLAGS, CHARSET) . ']" name="data[options][' . htmlspecialchars( $option->name, REPLACE_FLAGS, CHARSET) . ']" class="form-control" aria-describedby="option_' . htmlspecialchars( $option->name, REPLACE_FLAGS, CHARSET) . '">';
                        foreach (explode(',', $option->values) as $value) {
                            if ($value == $option->default) {
                                $selected = 'selected';
                            } else {
                                $selected = '';
                            }
                            $return .= '<option value="' . htmlspecialchars( $value, REPLACE_FLAGS, CHARSET) . '" ' . $selected . '>' . htmlentities($value, ENT_QUOTES) . '</option>';
                        }
                        $return .= '</select><span id="option_' . htmlspecialchars( $option->name, REPLACE_FLAGS, CHARSET) . '" class="help-block">' . htmlspecialchars( $option->type, REPLACE_FLAGS, CHARSET) . '</span>';
                        break;
                }
                $return .= '</div></div></div>\n';
            }
        }
    }
    return($return);
}
?>