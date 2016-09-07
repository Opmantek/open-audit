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
$item = $this->response->data[0];
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left"><?php echo ucfirst($this->response->meta->collection); ?></span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" id="form_update">
        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                    <label for="id" class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="id" name="id" placeholder="<?php echo htmlentities($item->id); ?>" value="<?php echo htmlentities($item->id); ?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo htmlentities($item->attributes->name); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="full_name" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="" value="<?php echo htmlentities($item->attributes->full_name); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_full_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="full_name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="" value="*********" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_password" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="password"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="" value="<?php echo htmlentities($item->attributes->email); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_email" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="email"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="lang" class="col-sm-3 control-label">Language</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <select class="data_type form-control" id="lang" name="lang" disabled>
                                <option value='de' <?php if ($item->attributes->lang == 'de') { echo 'selected'; } ?>>German</option>
                                <option value='en' <?php if ($item->attributes->lang == 'en') { echo 'selected'; } ?>>English</option>
                                <option value='es' <?php if ($item->attributes->lang == 'es') { echo 'selected'; } ?>>Spanish</option>
                                <option value='fr' <?php if ($item->attributes->lang == 'fr') { echo 'selected'; } ?>>French</option>
                                <option value='pt-br' <?php if ($item->attributes->lang == 'pt-br') { echo 'selected'; } ?>>Brazilian Portuguese</option>
                            </select>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_lang" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="lang"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="org_id" class="col-sm-3 control-label">Organisation</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <select class="data_type form-control" id="org_id" name="org_id" disabled>
                                <option value='' label=' '></option>
                                <?php foreach ($this->response->included as $org) {
                                if ($org->type == 'orgs') { ?>
                                    <option value="<?php echo intval($org->attributes->id); ?>" <?php if ($org->attributes->id == $item->attributes->org_id) { echo "selected"; } ?>><?php echo htmlentities($org->attributes->name); ?></option>
                                <?php } } ?>
                            </select>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_org_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="org_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="active" class="col-sm-3 control-label">Active</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <select class="data_type form-control" id="active" name="active" disabled>
                                <option value='y' <?php if ($item->attributes->active == 'y') { echo 'selected'; } ?>>Yes</option>
                                <option value='n' <?php if ($item->attributes->active == 'n') { echo 'selected'; } ?>>No</option>
                            </select>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_active" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="active"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edited_by" class="col-sm-3 control-label">Edited By</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="" value="<?php echo htmlentities($item->attributes->edited_by); ?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edited_date" class="col-sm-3 control-label">Edited Date</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="edited_date" name="edited_date" placeholder="" value="<?php echo htmlentities($item->attributes->edited_date); ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="roles" class="col-sm-3 control-label">Roles</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <select multiple size="6" class="data_type form-control" id="roles" name="roles" disabled>
                                <?php foreach ($this->response->included as $role) {
                                if ($role->type == 'roles') { ?>
                                    <option value="<?php echo htmlentities($role->attributes->name); ?>" <?php if (strpos($item->attributes->roles, '"'.$role->attributes->name.'"') !== false) { echo "selected"; } ?>><?php echo htmlentities($role->attributes->name); ?></option>
                                <?php } } ?>
                            </select>
                            <?php if (!empty($edit)) { ?>
                            <?php } ?>
                        </div>
                        <span class="input-group-btn">
                            <button id="edit_roles" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="roles"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                        </span>
                    </div>
                </div>

            </div>

        </div>
    </form>
  </div>
</div>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left">Organisations</span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
    <span class="text-left">Note - Selecting a parent will automatically provide access to its children (although it won't be shown here).</span>
    <span class="pull-right"><button type="button" class="btn btn-default edit_list" data-attribute="orgs" data-action="edit" id="edit_orgs" name="edit_orgs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></span>
      <div class="col-md-12">
        <table class="table table-striped table-condensed">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Parent</td>
                    <td style="text-align:center;">Grant Permission</td>
            </thead>
            <tbody>
        <?php
        foreach ($this->response->included as $org) {
            if ($org->type == 'orgs') {
                if ($org->id == 0) {
                    $org->attributes->parent_name = '';
                }
                $checked = '';
                foreach(json_decode($item->attributes->orgs) as $key => $value) {
                    if ($org->id == $value) {
                        $checked = 'checked';
                    }
                }
                ?>
                <tr>
                    <td><?php echo $org->id; ?></td><td><?php echo $org->attributes->name; ?></td><td><?php echo $org->attributes->parent_name; ?></td>
                    <td style="text-align:center;"><input name="orgs" type="checkbox" value="<?php echo $org->id; ?>" <?php echo $checked; ?> disabled></td>
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
