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
if (!empty($edit)) {
    $disabled = '';
} else {
    $disabled = 'disabled';
}
?>
<form class="form-horizontal" id="form_update">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left"><?php echo ucfirst($this->response->meta->collection); ?></span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
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
            <label for="description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="description" name="description" placeholder="" value="<?php echo htmlentities($item->attributes->description); ?>" disabled>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_description" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="description"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="edited_by" class="col-sm-2 control-label">Edited By</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="" value="<?php echo htmlentities($item->attributes->edited_by); ?>" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="edited_date" class="col-sm-2 control-label">Edited Date</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="edited_date" name="edited_date" placeholder="" value="<?php echo htmlentities($item->attributes->edited_date); ?>" disabled>
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
              <span class="text-left">Configuration Options for <?php echo $item->attributes->name; ?></span>
              <span class="pull-right"></span>
            </h3>
          </div>
          <div class="panel-body">
          <?php foreach ($item->attributes->options as $key => $value) { ?>
            <?php if ($key != 'files') { ?>
                <div class="form-group">
                    <label for="edited_date" class="col-md-2 control-label"><?php echo htmlentities($key); ?></label>
                    <div class="col-sm-10">
                        <div class="col-md-10 input-group">
                            <input type="text" class="form-control" id="options.<?php echo htmlentities($key); ?>" name="options.<?php echo htmlentities($key); ?>" value="<?php echo htmlentities($value); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_options.<?php echo htmlentities($key); ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="options.<?php echo htmlentities($key); ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
          <?php } ?>
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
          <?php if (!empty($item->attributes->options->files)) { ?>
          <?php foreach ($item->attributes->options->files as $key => $value) { ?>
                <div class="form-group">
                    <label for="edited_date" class="col-md-2 control-label"><?php echo htmlentities($key); ?></label>
                    <div class="col-md-10">
                        <div class="col-md-10 input-group">
                            <input type="text" class="form-control" id="options.<?php echo htmlentities($key); ?>" name="options.<?php echo htmlentities($key); ?>" value="<?php echo htmlentities($value); ?>" disabled>
                        </div>
                    </div>
                </div>
          <?php } ?>
          <?php } ?>
          </div>
        </div>
    </div>




</form>