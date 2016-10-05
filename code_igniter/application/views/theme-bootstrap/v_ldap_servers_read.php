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
                        <label for="id" class="col-sm-3 control-label">ID</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="id" name="id" placeholder="" value="<?php echo intval($item->attributes->id); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo $item->attributes->name; ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="org_id" class="col-sm-3 control-label">Organisation</label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="org_id" name="org_id" disabled>
                                <?php
                                foreach ($this->response->included as $org) {
                                    if ($org->type == 'orgs') { ?>
                                        <option value="<?php echo intval($org->id); ?>"<?php if ($item->attributes->org_id == $org->id) { echo " selected"; } ?>><?php echo htmlentities($org->attributes->name); ?></option>
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
                        <label for="description" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="description" name="description" placeholder="" value="<?php echo htmlentities($item->attributes->description); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_description" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="description"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lang" class="col-sm-3 control-label">Language</label>
                        <div class="col-sm-8 input-group">
                            <select tabindex="3" class="data_type form-control" id="lang" name="lang" title='Language' disabled>
                                <option value='de' <?php if ($item->attributes->lang == 'de') { echo "selected"; }?>>German</option>
                                <option value='en' <?php if ($item->attributes->lang == 'en') { echo "selected"; }?>>English</option>
                                <option value='es' <?php if ($item->attributes->lang == 'es') { echo "selected"; }?>>Spanish</option>
                                <option value='fr' <?php if ($item->attributes->lang == 'fr') { echo "selected"; }?>>French</option>
                                <option value='pt-br' <?php if ($item->attributes->lang == 'pt-br') { echo "selected"; }?>>Brazilian Portuguese</option>
                            </select>
                            <span class="input-group-btn">
                                <button id="edit_lang" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="lang"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="host" class="col-sm-3 control-label">Host</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="host" name="host" placeholder="" value="<?php echo htmlentities($item->attributes->host); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_host" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="host"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="domain" class="col-sm-3 control-label">Domain</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="domain" name="domain" placeholder="" value="<?php echo htmlentities($item->attributes->domain); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_domain" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="domain"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="use_roles" class="col-sm-3 control-label">Use Roles</label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="use_roles" name="use_roles" title='Use Roles' disabled>
                                <option value='n' <?php if ($item->attributes->lang == 'n') { echo "selected"; }?>>No</option>
                                <option value='y' <?php if ($item->attributes->lang == 'y') { echo "selected"; }?>>Yes</option>
                            </select>
                            <span class="input-group-btn">
                                <button id="edit_use_roles" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="use_roles"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="refresh" class="col-sm-3 control-label">Refresh</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="refresh" name="refresh" placeholder="" value="<?php echo intval($item->attributes->refresh); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_refresh" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="refresh"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="refreshed" class="col-sm-3 control-label">Refreshed</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="refreshed" name="refreshed" placeholder="" value="<?php echo htmlentities($item->attributes->refreshed); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_by" class="col-sm-3 control-label">Edited By</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="" value="<?php echo htmlentities($item->attributes->edited_by); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_date" class="col-sm-3 control-label">Edited Date</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_date" name="edited_date" placeholder="" value="<?php echo htmlentities($item->attributes->edited_date); ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>