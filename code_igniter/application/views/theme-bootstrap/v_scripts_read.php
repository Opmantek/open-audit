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
* @version   2.2.1
* @link      http://www.open-audit.org
 */
$item = $this->response->data[0];
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="id" class="col-sm-3 control-label"><?php echo __('ID'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo intval($item->attributes->id); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label"><?php echo __('Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="org_id" class="col-sm-3 control-label"><?php echo __('Organisation'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="org_id" name="org_id" disabled>
                                <?php
                                foreach ($this->response->included as $org) {
                                    if ($org->type == 'orgs') { ?>
                                        <option value="<?php echo intval($org->id); ?>"<?php if ($item->attributes->org_id == $org->id) { echo " selected"; } ?>><?php echo htmlspecialchars($org->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                                <?php
                                    }
                                } ?>
                                </select>
                                <?php if (!empty($edit)) { ?>
                                <span class="input-group-btn">
                                    <button id="edit_org_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="org_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                </span>
                                <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label"><?php echo __('Description'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="description" name="description" value="<?php echo htmlspecialchars($item->attributes->description, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_description" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="description"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="based_on" class="col-sm-3 control-label"><?php echo __('Based On'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select id="based_on" name="based_on" class="form-control" disabled>
                                <option value='audit_aix.sh'<?php if ($item->attributes->based_on === 'audit_aix.sh') { echo ' selected'; } ?>>Audit AIX</option>
                                <option value='audit_esx.sh'<?php if ($item->attributes->based_on === 'audit_esx.sh') { echo ' selected'; } ?>>Audit ESX</option>
                                <option value='audit_linux.sh'<?php if ($item->attributes->based_on === 'audit_linux.sh') { echo ' selected'; } ?>>Audit Linux</option>
                                <option value='audit_osx.sh'<?php if ($item->attributes->based_on === 'audit_osx.sh') { echo ' selected'; } ?>>Audit OSX</option>
                                <option value='audit_windows.vbs'<?php if ($item->attributes->based_on === 'audit_windows.vbs') { echo ' selected'; } ?>>Audit Windows</option>
                            </select>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_based_on" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="based_on"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_by" class="col-sm-3 control-label"><?php echo __('Edited By'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_by" name="edited_by" value="<?php echo htmlspecialchars($item->attributes->edited_by, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_date" class="col-sm-3 control-label"><?php echo __('Edited Date'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_date" name="edited_date" value="<?php echo htmlspecialchars($item->attributes->edited_date, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    foreach ($this->response->included as $option) {
        if (!empty($option->type) and $option->type == 'script_option' and $option->id == $item->attributes->based_on) {
            $script_options = $option->attributes;
            break;
        }
    }
    ?>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="text-left"><?php echo __('Configuration Options for').' '; ?> <?php echo $item->attributes->name; ?></span>
                        <span class="pull-right"></span>
                    </h3>
                </div>
                <div class="panel-body">
                <?php
                foreach ($script_options as $script_option) {
                    $option_value = '';
                    foreach ($this->response->included as $option) {
                        if ($option->id == $script_option) {
                            foreach ($item->attributes->options as $key => $value) {
                                if ($key == $script_option) {
                                    $option_value = $value;
                                }
                            }
                        }
                    }
                ?>
                    <div class="form-group">
                        <label for="<?php echo htmlspecialchars($script_option, REPLACE_FLAGS, CHARSET); ?>" class="col-md-4 control-label"><?php echo htmlspecialchars($script_option, REPLACE_FLAGS, CHARSET); ?></label>
                        <div class="col-sm-7 input-group">
                            <input type="text" class="form-control" id="options.<?php echo htmlspecialchars($script_option, REPLACE_FLAGS, CHARSET); ?>" title="options.<?php echo htmlspecialchars($script_option, REPLACE_FLAGS, CHARSET); ?>" name="options.<?php echo htmlspecialchars($script_option, REPLACE_FLAGS, CHARSET); ?>" value="<?php echo htmlspecialchars($option_value, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_options.<?php echo htmlspecialchars($script_option, REPLACE_FLAGS, CHARSET); ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="options.<?php echo htmlspecialchars($script_option, REPLACE_FLAGS, CHARSET); ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                <?php
                }
                ?>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="text-left">Files Tracked for <?php echo $item->attributes->name; ?></span>
                        <span class="pull-right"></span>
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><?php echo __('Use'); ?></th>
                                <th><?php echo __('Name'); ?></th>
                                <th><?php echo __('Path'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($this->response->included)) { ?>
                            <?php foreach ($this->response->included as $included) { ?>
                                <?php if ($included->type == 'files') { ?>
                                <tr>
                                    <td>
                                        <?php
                                        $checked = '';
                                        if (!empty($item->attributes->options->files)) {
                                            foreach ($item->attributes->options->files as $key => $value) {
                                                if ($key === $included->attributes->id) {
                                                    $checked = 'checked';
                                                }
                                            }
                                        }
                                        ?>
                                        <input type="checkbox" name="options.files.<?php echo $included->attributes->id; ?>" id="options.files.<?php echo $included->attributes->id; ?>" <?php echo $checked; ?> <?php if (empty($edit)) { echo " disabled"; } ?>/>
                                        </td>
                                    <td><?php echo htmlspecialchars($included->attributes->name, REPLACE_FLAGS, CHARSET); ?></td>
                                    <td><?php echo htmlspecialchars($included->attributes->path, REPLACE_FLAGS, CHARSET); ?></td>
                                </tr>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
