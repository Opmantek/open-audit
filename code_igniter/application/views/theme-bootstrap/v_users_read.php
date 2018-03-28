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
* @version   2.2
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
                        <select class="data_type form-control" id="org_id" name="org_id" disabled>
                            <option value='' label=' '></option>
                            <?php foreach ($this->response->included as $org) {
                            if ($org->type == 'orgs') { ?>
                                <option value="<?php echo intval($org->attributes->id); ?>" <?php if ($org->attributes->id == $item->attributes->org_id) { echo "selected"; } ?>><?php echo htmlspecialchars($org->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                            <?php } } ?>
                        </select>
                        <?php if (!empty($edit)) { ?>
                        <span class="input-group-btn">
                            <button id="edit_org_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="org_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                        </span>
                        <?php } ?>
                    </div>
                </div>

                    <div class="form-group">
                        <label for="full_name" class="col-sm-3 control-label"><?php echo __('Full Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo htmlspecialchars($item->attributes->full_name, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_full_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="full_name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label"><?php echo __('Password'); ?></label>
                    <div class="col-sm-8 input-group">
                        <input type="password" class="form-control" id="password" name="password" value="*********" disabled>
                        <?php if (!empty($edit)) { ?>
                        <span class="input-group-btn">
                            <button id="edit_password" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="password"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                        </span>
                        <?php } ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label"><?php echo __('Email'); ?></label>
                    <div class="col-sm-8 input-group">
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($item->attributes->email, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        <?php if (!empty($edit)) { ?>
                        <span class="input-group-btn">
                            <button id="edit_email" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="email"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                        </span>
                        <?php } ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="lang" class="col-sm-3 control-label"><?php echo __('Language'); ?></label>
                    <div class="col-sm-8 input-group">
                        <select class="data_type form-control" id="lang" name="lang" disabled>
                            <option value='cs' <?php if ($item->attributes->lang == 'cs') { echo 'selected'; } ?>><?php echo __('Czech'); ?></option>
                            <option value='de' <?php if ($item->attributes->lang == 'de') { echo 'selected'; } ?>><?php echo __('German'); ?></option>
                            <option value='en' <?php if ($item->attributes->lang == 'en') { echo 'selected'; } ?>><?php echo __('English'); ?></option>
                            <option value='es' <?php if ($item->attributes->lang == 'es') { echo 'selected'; } ?>><?php echo __('Spanish'); ?></option>
                            <option value='fr' <?php if ($item->attributes->lang == 'fr') { echo 'selected'; } ?>><?php echo __('French'); ?></option>
                            <option value='pt-br' <?php if ($item->attributes->lang == 'pt-br') { echo 'selected'; } ?>><?php echo __('Brazilian Portuguese'); ?></option>
                        </select>
                        <?php if (!empty($edit)) { ?>
                        <span class="input-group-btn">
                            <button id="edit_lang" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="lang"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                        </span>
                        <?php } ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="active" class="col-sm-3 control-label"><?php echo __('Active'); ?></label>
                    <div class="col-sm-8 input-group">
                        <select class="data_type form-control" id="active" name="active" disabled>
                            <option value='y' <?php if ($item->attributes->active == 'y') { echo 'selected'; } ?>><?php echo __('Yes'); ?></option>
                            <option value='n' <?php if ($item->attributes->active == 'n') { echo 'selected'; } ?>><?php echo __('No'); ?></option>
                        </select>
                        <?php if (!empty($edit)) { ?>
                        <span class="input-group-btn">
                            <button id="edit_active" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="active"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
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

            <div class="col-md-6">
                <div class="form-group">
                    <label for="roles" class="col-sm-3 control-label"><?php echo __('Roles'); ?></label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <select multiple size="6" class="data_type form-control" id="roles" name="roles" disabled>
                                <?php foreach ($this->response->included as $role) {
                                if ($role->type == 'roles') { ?>
                                    <option value="<?php echo htmlspecialchars($role->attributes->name, REPLACE_FLAGS, CHARSET); ?>" <?php if (strpos($item->attributes->roles, '"'.$role->attributes->name.'"') !== false) { echo "selected"; } ?>><?php echo htmlspecialchars($role->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                                <?php } } ?>
                            </select>
                            <?php if (!empty($edit)) { ?>
                            <?php } ?>
                        </div>
                        <?php if (!empty($edit)) { ?>
                        <span class="input-group-btn">
                            <button id="edit_roles" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="roles"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                        </span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</form>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left"><?php echo __('Organisations'); ?></span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
    <span class="text-left">Note - Selecting a parent will automatically provide access to its children (although it won't be shown here).</span>
    <span class="pull-right">
        <button type="button" class="btn btn-default edit_list" data-attribute="orgs" data-action="edit" id="edit_orgs" name="edit_orgs">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        </button>
    </span>
      <div class="col-md-12">
        <table class="table table-striped table-condensed">
            <thead>
                <tr>
                    <td><?php echo __('ID'); ?></td>
                    <td><?php echo __('Name'); ?></td>
                    <td><?php echo __('Parent'); ?></td>
                    <td style="text-align:center;"><?php echo __('Grant Permission'); ?></td>
            </thead>
            <tbody>
        <?php
        foreach ($this->response->included as $org) {
            if ($org->type == 'orgs') {
                if ($org->id == 1) {
                    $org->attributes->parent_name = '';
                }
                $checked = '';
                if (!empty($item->attributes->orgs) and
                    count($item->attributes->orgs) > 0 and
                    $item->attributes->orgs != 'Array') {
                    foreach(json_decode($item->attributes->orgs) as $key => $value) {
                        if ($org->id == $value) {
                            $checked = 'checked';
                        }
                    }
                }
                ?>
                <tr>
                    <td><?php echo $org->id; ?></td><td><?php echo $org->attributes->name; ?></td><td><?php echo $org->attributes->parent_name; ?></td>
                    <td style="text-align:center;"><input name="orgs" title="orgs" type="checkbox" value="<?php echo $org->id; ?>" <?php echo $checked; ?> disabled></td>
                </tr>
        <?php
            }
        }
        ?>
            </tbody>
        </table>
      </div>
  </div>
</div>
