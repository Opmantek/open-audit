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
        <div class="form-group">
            <label for="id" class="col-sm-2 control-label">ID</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="id" name="id" placeholder="<?php echo htmlentities($item->id); ?>" value="<?php echo htmlentities($item->id); ?>" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
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
            <label for="type" class="col-sm-2 control-label">Type</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <select class="data_type form-control" id="type" name="type" disabled>
                        <option value="varchar"<?php if ($item->attributes->type == 'varchar') { echo "selected"; } ?>><?php echo __('VarChar'); ?></option>
                        <option value="list"<?php if ($item->attributes->type == 'list') { echo "selected"; } ?>><?php echo __('List'); ?></option>
                    </select>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_type" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="type"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="values" class="col-sm-2 control-label">Values</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="values" name="values" placeholder="" value="<?php echo htmlentities($item->attributes->values); ?>" disabled>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_values" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="values"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="placement" class="col-sm-2 control-label">Placement</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <select class="data_type form-control" id="placement" name="placement" disabled>
                        <option value="custom" <?php if ($item->attributes->placement == 'custom') { echo "selected"; } ?>><?php echo __('Custom'); ?></option>
                        <option value="system" <?php if ($item->attributes->placement == 'system') { echo "selected"; } ?>><?php echo __('System Details'); ?></option>
                    </select>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_placement" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="placement"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="group" class="col-sm-2 control-label">Group</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <select class="data_type form-control" id="group_id" name="group_id" disabled>
                        <?php foreach ($this->response->included as $group) { ?>
                            <?php if ($group->attributes->group_id == $item->attributes->group_id) { $selected = 'selected'; } else { $selected = ''; } ?>
                        <option value="<?php echo intval($group->attributes->group_id); ?>" <?php echo $selected; ?>><?php echo $group->attributes->group_name; ?></option>
                        <?php } ?>
                    </select>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_group_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="group_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>

    </form>
  </div>
</div>