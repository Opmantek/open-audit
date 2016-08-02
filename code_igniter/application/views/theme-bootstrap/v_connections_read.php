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
$fields = array("id" => "ID", "name" => "Name", "org_id" => "Organisation", "provider"=> "Provider", "service_type" => "Service Type", "product_name" => "Product Name", "service_identifier" => "Service Identifier", "speed" => "Speed", "location_id_a" => "Location A", "location_id_b" => "Location B", "system_id_a" => "System A", "system_id_b" => "system B", "line_number_a" => "Line Number A", "line_number_b" => "Line Number B");
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
        <?php foreach ($fields as $column => $name) { ?>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label"><?php echo $name; ?></label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="<?php echo $column; ?>" name="<?php echo $column; ?>" placeholder="" value="<?php echo htmlentities($item->attributes->{$column}); ?>" disabled>
                    <?php if (!empty($edit) and $column != 'id') { ?>
                    <span class="input-group-btn">
                        <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $column; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </form>
  </div>
</div>