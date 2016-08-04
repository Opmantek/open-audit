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
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left"><?php echo ucfirst($this->response->meta->collection); ?></span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
        <div class="form-group">
            <label for="data[attributes][id]" class="col-sm-2 control-label">ID</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="data[attributes][id]" name="data[attributes][id]" placeholder="" value="" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="data[attributes][name]" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" placeholder="" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="data[attributes][org_id]" class="col-sm-2 control-label">Organisation</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <select class="form-control" id="data[attributes][org_id]" name="data[attributes][org_id]" placeholder="">
                        <?php
                        foreach ($this->response->included as $item) {
                            if ($item->type == 'orgs') { ?>
                                <option value="<?php echo intval($item->id); ?>"><?php echo htmlentities($item->attributes->name); ?></option>
                        <?php
                            }
                        } ?>
                        </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="data[attributes][location_id_a]" class="col-sm-2 control-label">Location A</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <select class="form-control" id="data[attributes][location_id_a]" name="data[attributes][location_id_a]" placeholder="">
                        <?php
                        foreach ($this->response->included as $item) {
                            if ($item->type == 'locations') { ?>
                                <option value="<?php echo intval($item->id); ?>"><?php echo htmlentities($item->attributes->name); ?></option>
                        <?php
                            }
                        } ?>
                        </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="data[attributes][location_id_b]" class="col-sm-2 control-label">Location B</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <select class="form-control" id="data[attributes][location_id_b]" name="data[attributes][location_id_b]" placeholder="">
                        <?php
                        foreach ($this->response->included as $item) {
                            if ($item->type == 'locations') { ?>
                                <option value="<?php echo intval($item->id); ?>"><?php echo htmlentities($item->attributes->name); ?></option>
                        <?php
                            }
                        } ?>
                        </select>
                </div>
            </div>
        </div>

        <?php $attributes = array('provider', 'service_type', 'product_name', 'service_identifier', 'speed', 'system_id_a', 'system_id_b', 'line_number_a', 'line_number_b', 'ip_address_external_a', 'ip_address_external_b', 'ip_address_internal_a', 'ip_address_internal_b');
        foreach ($attributes as $attribute) { ?>
        <div class="form-group">
            <label for="data[attributes][<?php echo $attribute; ?>]" class="col-sm-2 control-label"><?php echo ucwords(str_replace('_', ' ', $attribute)); ?></label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="data[attributes][<?php echo $attribute; ?>]" name="data[attributes][<?php echo $attribute; ?>]" placeholder="" value="">
                </div>
            </div>
        </div>
        <?php } ?>

        </div>

        <div class="form-group">
            <label for="submit" class="col-sm-2 control-label"></label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="hidden" value="connections" id="data[type]" name="data[type]" />
                    <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </div>

    </form>
  </div>
</div>