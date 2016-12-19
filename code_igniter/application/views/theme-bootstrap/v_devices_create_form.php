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
 * @version   1.14.2

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

if (php_uname('s') != 'Windows NT') {
    include(str_replace('views/theme-bootstrap/v_devices_create_form.php', 'controllers/include_device_types.php', __FILE__));
} else {
    include(str_replace('views\\theme-bootstrap\\v_devices_create_form.php', 'controllers\\include_device_types.php', __FILE__));
}

?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left">Credentials</span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">

        <div class="form-group">
            <label for="data[attributes][type]" class="col-sm-3 control-label">Type</label>
            <div class="col-sm-8 input-group">
                <select id="data[attributes][type]" name="data[attributes][type]" class="form-control">
                    <option value=''></option>
                <?php
                foreach ($device_types as $key => $value) {
                    if ($key != '') {
                        echo "<option value='$key'>".__("$value")."</option>";
                    }
                }
                ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="data[attributes][hostname]" class="col-sm-3 control-label">Hostname</label>
            <div class="col-sm-8 input-group">
                <input type="text" class="form-control" id="data[attributes][hostname]" name="data[attributes][hostname]">
            </div>
        </div>
        <div class="form-group">
            <label for="data[attributes][ip]" class="col-sm-3 control-label">IP</label>
            <div class="col-sm-8 input-group">
                <input type="text" class="form-control" id="data[attributes][ip]" name="data[attributes][ip]">
            </div>
        </div>
        <div class="form-group">
            <label for="data[attributes][manufacturer]" class="col-sm-3 control-label">Manufacturer</label>
            <div class="col-sm-8 input-group">
                <input type="text" class="form-control" id="data[attributes][manufacturer]" name="data[attributes][manufacturer]">
            </div>
        </div>
        <div class="form-group">
            <label for="data[attributes][model]" class="col-sm-3 control-label">Model</label>
            <div class="col-sm-8 input-group">
                <input type="text" class="form-control" id="data[attributes][model]" name="data[attributes][model]">
            </div>
        </div>
        <div class="form-group">
            <label for="data[attributes][serial]" class="col-sm-3 control-label">Serial</label>
            <div class="col-sm-8 input-group">
                <input type="text" class="form-control" id="data[attributes][serial]" name="data[attributes][serial]">
            </div>
        </div>
        <div class="form-group">
            <label for="data[attributes][org_id]" class="col-sm-3 control-label">Organisation</label>
            <div class="col-sm-8 input-group">
                <select class="form-control" id="data[attributes][org_id]" name="data[attributes][org_id]">
                <?php
                foreach ($this->response->included as $item) {
                    if ($item->type == 'orgs') { ?>     <option value="<?php echo intval($item->id); ?>"><?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                <?php
                    }
                } ?></select>
            </div>
        </div>
        <div class="form-group">
            <label for="data[attributes][location_id]" class="col-sm-3 control-label">Location</label>
            <div class="col-sm-8 input-group">
                <select class="form-control" id="data[attributes][location_id]" name="data[attributes][location_id]">
                    <option value="" label=" "></option>
                <?php
                foreach ($this->response->included as $item) {
                    if ($item->type == 'locations') { ?>        <option value="<?php echo intval($item->id); ?>"><?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                <?php
                    }
                } ?></select>
            </div>
        </div>
        <div class="form-group">
            <label for="data[attributes][asset_number]" class="col-sm-3 control-label">Asset Number</label>
            <div class="col-sm-8 input-group">
                <input type="text" class="form-control" id="data[attributes][asset_number]" name="data[attributes][asset_number]">
            </div>
        </div>


        <hr />
        <div class="form-group">
            <label for="form_systemXML" class="col-sm-3 control-label">XML Input</label>
            <div class="col-sm-4">
                <div class="col-sm-12 input-group">
                    <textarea class="form-control" rows="10" id="form_systemXML"></textarea>
                </div>
            </div>
        </div>
        <hr />
        <div class="form-group">
            <label for="upload_file" class="col-sm-3 control-label">File Input</label>
            <div class="col-sm-4">
                <div class="col-sm-12 input-group">
                    <input type="file" id="upload_file">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="submit" class="col-sm-2 control-label"></label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </div>

    </form>
  </div>
</div>