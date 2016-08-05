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
            <label for="comments" class="col-sm-2 control-label">Comments</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="comments" name="comments" placeholder="" value="<?php echo htmlentities($item->attributes->comments); ?>" disabled>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_comments" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="comments"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="parent_id" class="col-sm-2 control-label">Parent</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <select class="data_type form-control" id="parent_id" name="parent_id" disabled>
                    <?php foreach ($this->response->included as $org) {
                        if ($org->type == 'orgs' and $org->attributes->id != $item->attributes->id) { ?>
                            <option value="<?php echo intval($org->attributes->id); ?>" <?php if ($org->attributes->id == $item->attributes->parent_id) { echo "selected"; } ?>><?php echo htmlentities($org->attributes->name); ?></option>
                    <?php } } ?>
                    </select>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_parent_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="parent_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </form>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left">Devices assigned to <?php echo $item->attributes->name; ?></span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
    <table class="table table-condensed table-hover">
        <thead>
            <tr>
                <th>Count</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($this->response->included)) {
            foreach ($this->response->included as $device) { ?><tr>
                <?php if ($device->type == 'devices') { ?>
                <td><a class="btn btn-sm btn-success" href="../../devices?system.type=<?php echo $device->attributes->type; ?>&system.org_id=<?php echo intval($item->id); ?>"><?php echo intval($device->attributes->count); ?></a></td>
                <td><?php echo $device->attributes->type; ?></td>
            </tr><?php } } } ?>
        </tbody>
    </table>
  </div>
</div>