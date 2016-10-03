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
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo intval($item->attributes->id); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo htmlentities($item->attributes->name); ?>" disabled>
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
                        <label for="subnet" class="col-sm-3 control-label">Subnet</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="subnet" name="subnet" placeholder="" value="<?php echo htmlentities($item->attributes->subnet); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_subnet" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="subnet"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="network_address" class="col-sm-3 control-label">Network Address</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="network_address" name="network_address" placeholder="" value="<?php echo htmlentities($item->attributes->network_address); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_network_address" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="network_address"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="devices_assigned_to_org" class="col-sm-3 control-label">Assign devices to Org</label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="devices_assigned_to_org" name="devices_assigned_to_org" disabled>
                                <option value="" label=" "></option>
                                <?php
                                foreach ($this->response->included as $org) {
                                    if ($org->type == 'orgs') { ?>
                                        <option value="<?php echo intval($org->id); ?>"<?php if (!is_null($item->attributes->devices_assigned_to_org) and $item->attributes->devices_assigned_to_org == $org->id) { echo " selected"; } ?>><?php echo htmlentities($org->attributes->name); ?></option>
                                <?php
                                    }
                                } ?>
                                </select>
                                <?php if (!empty($edit)) { ?>
                                <span class="input-group-btn">
                                    <button id="edit_devices_assigned_to_org" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="org_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                </span>
                                <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="devices_assigned_to_location" class="col-sm-3 control-label">Assign devices to Location</label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="devices_assigned_to_location" name="devices_assigned_to_location" disabled>
                                <option value="" label=" "></option>
                                <?php
                                foreach ($this->response->included as $location) {
                                    if ($location->type == 'locations') { ?>
                                        <option value="<?php echo intval($location->id); ?>"<?php if (!is_null($item->attributes->devices_assigned_to_location) and $item->attributes->devices_assigned_to_location == $location->id) { echo " selected"; } ?>><?php echo htmlentities($location->attributes->name); ?></option>
                                <?php
                                    }
                                } ?>
                                </select>
                                <?php if (!empty($edit)) { ?>
                                <span class="input-group-btn">
                                    <button id="edit_devices_assigned_to_location" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="location_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                </span>
                                <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="created_by" class="col-sm-3 control-label">Created By</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="created_by" name="created_by" value="<?php echo htmlentities($item->attributes->created_by); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="created_on" class="col-sm-3 control-label">Created On</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="created_on" name="created_on" value="<?php echo htmlentities($item->attributes->created_on); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="updated_on" class="col-sm-3 control-label">Updated On</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="updated_on" name="updated_on" value="<?php echo htmlentities($item->attributes->updated_on); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="complete" class="col-sm-3 control-label">Complete</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="complete" name="complete" value="<?php echo htmlentities($item->attributes->complete); ?>" disabled>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <?php
                    if ($item->attributes->complete == 'n') { ?>
                        <div class="form-group">
                            <label for="refresh" class="col-sm-3 control-label">Not Complete</label>
                            <div class="col-sm-8 input-group">
                                <a class="btn btn-sm btn-warning" href="<?php echo htmlentities($item->id); ?>">Refresh</a>
                            </div>
                        </div>
                    <?php
                    }
                    if (filter_var($item->attributes->subnet, FILTER_VALIDATE_IP)) {?>
                     <!--    <div class="form-group">
                            <label for="execute_with_debug" class="col-sm-3 control-label">Execute with debug</label>
                            <div class="col-sm-8 input-group">
                                <a class="btn btn-sm btn-success" href="<?php echo htmlentities($item->id); ?>?action=execute&debug=true">Execute</a>
                            </div>
                        </div> -->
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <label for="execute" class="col-sm-3 control-label">Execute</label>
                        <div class="col-sm-8 input-group">
                            <a class="btn btn-sm btn-primary" href="<?php echo htmlentities($item->id); ?>?action=execute">Execute</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left">Log</span>
            <span class="pull-right"></span>
        </h3>
    </div>

    <div class="panel-body">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center"><?php echo __('ID')?></th>
                        <th>Timestamp</th>
                        <th>File</th>
                        <th>Function</th>
                        <th>Message</th>
                        <th>Duration</th>
                        <th>Status</th>
                        <th>Output</th>
                        <th>Command</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->response->included as $item) {
                        if ($item->type == 'discovery_log') {
                            echo "<tr>\n"; ?>
                        <td class="text-center"><?php echo htmlentities($item->id); ?></td>
                        <td><?php echo htmlentities($item->attributes->timestamp)?></td>
                        <td><?php echo htmlentities($item->attributes->file)?></td>
                        <td><?php echo htmlentities($item->attributes->function)?></td>
                        <td style="word-wrap: break-word; white-space: pre-wrap;"><?php echo htmlentities($item->attributes->message)?></td>
                        <td><?php if ($item->attributes->command_time_to_execute != '0.000000') { echo htmlentities($item->attributes->command_time_to_execute); } ?></td>
                        <td><?php echo htmlentities($item->attributes->command_status)?></td>
                        <td><?php echo htmlentities($item->attributes->command_output)?></td>
                        <td><?php if ($item->attributes->command != '') { echo '<pre style="word-wrap: break-word; white-space: pre-wrap;">' . htmlentities($item->attributes->command) . '</pre>'; } ?></td>
                    </tr>
                    <?php
                    }
                } ?></tbody>
            </table>
        </div>
    </div>
</div>

