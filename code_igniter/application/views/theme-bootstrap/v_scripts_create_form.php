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
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
foreach ($this->response->included as $item) {
    if ($item->type != 'script_option') {
        $data[$item->type][] = $item->attributes;
    } else {
        $data['script_option'][$item->id] = $item->attributes;
    }
}
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left"><?php echo ucfirst($this->response->meta->collection); ?></span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
        <div class="form-group">
            <label for="data[id]" class="col-sm-2 control-label">ID</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="data[id]" name="data[id]" placeholder="" value="" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="data[name]" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="data[name]" name="data[name]" placeholder="" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="data[description]" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="data[description]" name="data[description]" placeholder="" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="data[based_on]" class="col-sm-2 control-label">Based On</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <select id="data[based_on]" name="data[based_on]" onChange="based_on();" class="form-control">
                        <option value='' label=' '></option>
                        <option value='audit_aix.sh'>Audit AIX</option>
                        <option value='audit_esx.sh'>Audit ESX</option>
                        <option value='audit_linux.sh'>Audit Linux</option>
                        <option value='audit_osx.sh'>Audit OSX</option>
                        <option value='audit_windows.vbs'>Audit Windows</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="data[edited_by]" class="col-sm-2 control-label">Edited By</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="data[edited_by]" name="data[edited_by]" placeholder="" value="" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="data[edited_date]" class="col-sm-2 control-label">Edited Date</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="data[edited_date]" name="data[edited_date]" placeholder="" value="" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="submit" class="col-sm-2 control-label"></label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="hidden" value="scripts" id="data[type]" name="data[type]" />
                    <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </div>
  </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="text-left">Options</span>
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
                    <span class="text-left">Files</span>
                    <span class="pull-right"></span>
                </h3>
            </div>
            <div class="panel-body">
                <div id="files">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Select</td>
                            <td>Description</td>
                            <td>Path</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($data['files'])) { ?>
                    <?php foreach ($data['files'] as $file): ?>
                    <?php # TODO - enable per script file retrieval ?>
                    <?php # TODO - Maybe only display files per based_on ?>
                        <tr>
                            <td><input type="checkbox" value="<?php echo $file->path; ?>" id="data[options][files][<?php echo intval($file->id); ?>]" name="data[options][files][<?php echo intval($file->id); ?>]" checked disabled></td>
                            <td><?php echo htmlentities($file->description); ?></td>
                            <td><?php echo htmlentities($file->path); ?></td>
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
    switch(document.getElementById("data[based_on]").value)
    {
        <?php foreach ($script_options as $key => $value) { ?>
        case "<?php echo $key; ?>":
            based_on_text = '<?php echo $value; ?>';
        break;
        <?php } ?>
    }
    document.getElementById("options").innerHTML = based_on_text;
};
</script>


<?php
function generate_options($option_list, $options, $files, $orgs) {
    $return = '';
    foreach ($options as $option) {
        foreach ($option_list as $list_item) {
            if ($list_item == $option->name) {
                $return .= '        <div class="form-group">\
                <label for="data[edited_date]" class="col-md-3 control-label">' . $option->name . '</label>\
                <div class="col-md-9">\
                <div class="col-md-12 input-group">';
                
                switch ($option->type) {
                    case 'text';
                    case 'number';
                    case 'url';
                    case 'date':
                        if ($option->name != 'org_id') {
                            $return .= '<input type="' . $option->type . '" class="form-control" id="data[options][' . $option->name . ']" name="data[options][' . $option->name . ']" placeholder="" value="' . $option->default . '" aria-describedby="option_' . $option->name . '"><span id="option_' . $option->name . '" class="help-block">' . $option->help . '</span>';

                        } else {
                            $return .= '<select name="data[options][org_id]" id="data[options][org_id]" class="form-control" aria-describedby="option_org_id">';
                            $return .= '<option value="" label=" "></option>';
                            foreach ($orgs as $org) {
                                $return .= '<option value="' . $org->id . '">' . $org->name . '</option>';
                            }
                            $return .= '</select><span id="option_org_id" class="help-block">' . $option->help . '</span>';
                        }
                        break;

                    case 'select':
                        $return .= '<select id="data[options][' . $option->name . ']" name="data[options][' . $option->name . ']" class="form-control" aria-describedby="option_' . $option->name . '">';
                        foreach (explode(',', $option->values) as $value) {
                            if ($value == $option->default) {
                                $selected = 'selected';
                            } else {
                                $selected = '';
                            }
                            $return .= '<option value="' . $value . '" ' . $selected . '>' . $value . '</option>';
                        }
                        $return .= '</select><span id="option_' . $option->name . '" class="help-block">' . $option->help . '</span>';
                        break;
                }
                $return .= '</div></div></div>\n';
            }
        }
    }
    return($return);
}
?>