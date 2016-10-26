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
                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="parent_id" class="col-sm-3 control-label">Parent Org</label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="parent_id" name="parent_id" disabled>
                                <option value='' label=' '></option>
                                <?php foreach ($this->response->included as $org) {
                                if ($org->type == 'orgs' and $org->attributes->id != $item->attributes->id) { ?>
                                    <option value="<?php echo intval($org->attributes->id); ?>"<?php if ($org->attributes->id == $item->attributes->parent_id) { echo " selected"; } ?>><?php echo htmlspecialchars($org->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                                <?php } } ?>
                            </select>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_parent_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="parent_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ad_group" class="col-sm-3 control-label">AD Group</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="ad_group" name="ad_group" placeholder="" value="<?php echo $item->attributes->ad_group; ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="comments" class="col-sm-3 control-label">Comments</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="comments" name="comments" placeholder="" value="<?php echo htmlspecialchars($item->attributes->comments, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_comments" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="comments"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_by" class="col-sm-3 control-label">Edited By</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="" value="<?php echo htmlspecialchars($item->attributes->edited_by, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_date" class="col-sm-3 control-label">Edited Date</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_date" name="edited_date" placeholder="" value="<?php echo htmlspecialchars($item->attributes->edited_date, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
