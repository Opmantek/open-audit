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
                            <input type="text" class="form-control" id="data[attributes][id]" name="data[attributes][id]" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][name]" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" placeholder="" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][org_id]" class="col-sm-3 control-label">Organisation</label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][org_id]" name="data[attributes][org_id]">
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'orgs') { ?>     <option value="<?php echo intval($item->id); ?>"><?php echo htmlentities($item->attributes->name); ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][subnet]" class="col-sm-3 control-label">Subnet</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][subnet]" name="data[attributes][subnet]" placeholder="192.168.1.0/24" value="">
                        </div>
                    </div>
<?php
if (empty($this->config->config['default_network_address'])) {
    $address = 'http://YOUR_SERVER/open-audit/';
} else {
    $address = 'http://' . $this->config->config['default_network_address'] . '/open-audit/';
}
?>
                    <div class="form-group">
                        <label for="data[attributes][network_address]" class="col-sm-3 control-label">Network Address</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][network_address]" name="data[attributes][network_address]" value="<?php echo $address; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][devices_assigned_to_org]" class="col-sm-3 control-label">Assign devices to Org</label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][devices_assigned_to_org]" name="data[attributes][devices_assigned_to_org]">
                                <option value="" label=" "></option>
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'orgs') { ?>     <option value="<?php echo intval($item->id); ?>"><?php echo htmlentities($item->attributes->name); ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][devices_assigned_to_location]" class="col-sm-3 control-label">Assign devices to Location</label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][devices_assigned_to_location]" name="data[attributes][devices_assigned_to_location]">
                                <option value="" label=" "></option>
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'locations') { ?>        <option value="<?php echo intval($item->id); ?>"><?php echo htmlentities($item->attributes->name); ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][created_by]" class="col-sm-3 control-label">Created By</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][created_by]" name="data[attributes][created_by]" placeholder="<?php echo htmlentities($this->user->full_name); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][created_on]" class="col-sm-3 control-label">Created On</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][created_on]" name="data[attributes][created_on]" placeholder="<?php echo date('Y-m-d H:i:s'); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][updated_on]" class="col-sm-3 control-label">Updated On</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][updated_on]" name="data[attributes][updated_on]" disabled>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="submit" class="col-sm-3 control-label"></label>
                    <div class="col-sm-8 input-group">
                        <input type="hidden" value="discoveries" id="data[type]" name="data[type]" />
                        <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
