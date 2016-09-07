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
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][id]" class="col-sm-3 control-label">ID</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][id]" name="data[attributes][id]" placeholder="" value="" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][name]" class="col-sm-3 control-label"><strong>*</strong> Name</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][org_id]" class="col-sm-3 control-label">Organisation</label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="data[attributes][org_id]" name="data[attributes][org_id]">
                                <?php foreach ($this->response->included as $org) {
                                if ($org->type == 'orgs') { ?>
                                    <option value="<?php echo intval($org->attributes->id); ?>" <?php if ($org->attributes->id == 0) { echo "selected"; } ?>><?php echo htmlentities($org->attributes->name); ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][full_name]" class="col-sm-3 control-label">Full Name</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][full_name]" name="data[attributes][full_name]" placeholder="" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][password]" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-8 input-group">
                            <input type="password" class="form-control" id="data[attributes][password]" name="data[attributes][password]" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][email]" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][email]" name="data[attributes][email]" placeholder="" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][lang]" class="col-sm-3 control-label">Language</label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="data[attributes][lang]" name="data[attributes][lang]">
                                <option value='de'>German</option>
                                <option value='en' selected>English</option>
                                <option value='es'>Spanish</option>
                                <option value='fr'>French</option>
                                <option value='pt-br'>Brazilian Portuguese</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][active]" class="col-sm-3 control-label">Active</label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="data[attributes][active]" name="data[attributes][active]">
                                <option value='y' selected>Yes</option>
                                <option value='n'>No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][edited_by]" class="col-sm-3 control-label">Edited By</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_by]" name="data[attributes][edited_by]" placeholder="" value="<?php echo htmlentities($this->user->full_name); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][edited_date]" class="col-sm-3 control-label">Edited Date</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_date]" name="data[attributes][edited_date]" placeholder="" value="" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="submit" class="col-sm-3 control-label"></label>
                        <div class="col-sm-8 input-group">
                            <input type="hidden" value="users" id="data[type]" name="data[type]" />
                            <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>


                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][roles][]" class="col-sm-3 control-label">Roles</label>
                        <div class="col-sm-8 input-group">
                            <select multiple size="6" class="data_type form-control" id="data[attributes][roles][]" name="data[attributes][roles][]">
                                <?php foreach ($this->response->included as $role) {
                                if ($role->type == 'roles') { ?>
                                    <option value="<?php echo htmlentities($role->attributes->name); ?>"><?php echo htmlentities($role->attributes->name); ?></option>
                                <?php } } ?>
                            </select>
                        </div> 
                    </div>
                </div>
            </div>
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
            <span>Note - Selecting a parent will automatically provide access to its children (although it won't be shown here).</span><br /><br />
            <div class="col-md-12">
<table class="table table-striped table-condensed">
     <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Parent</td>
            <td style="text-align:center;">Grant Permission</td>
        </tr>
    </thead>
    <tbody>
<?php
foreach ($this->response->included as $org) {
    if ($org->type == 'orgs') {
        if ($org->id == 0) {
            $org->attributes->parent_name = '';
        }
        ?>
        <tr>
            <td>
        <?php echo $org->id; ?>
            </td>
            <td>
        <?php echo $org->attributes->name; ?>
            </td>
            <td>
        <?php echo $org->attributes->parent_name; ?>
            </td>
            <td style="text-align:center;"><input name="data[attributes][orgs][]" type="checkbox" value="<?php echo $org->id; ?>"></td>
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
</form>