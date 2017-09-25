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
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.0.8
* @link      http://www.open-audit.org
 */
$item = $this->response->data[0];
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="id" class="col-sm-3 control-label"><?php echo __('ID'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo intval($item->attributes->id); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label"><?php echo __('Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="org_id" class="col-sm-3 control-label"><?php echo __('Organisation'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="org_id" name="org_id" disabled>
                                <?php
                                foreach ($this->response->included as $org) {
                                    if ($org->type == 'orgs') { ?>
                                        <option value="<?php echo intval($org->id); ?>"<?php if ($item->attributes->org_id == $org->id) { echo " selected"; } ?>><?php echo htmlspecialchars($org->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
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
                        <label for="description" class="col-sm-3 control-label"><?php echo __('Description'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="description" name="description" value="<?php echo htmlspecialchars($item->attributes->description, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="type" class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="type" name="type" value="<?php echo htmlspecialchars($item->attributes->type, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="network_address" class="col-sm-3 control-label"><?php echo __('Network Address'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="network_address" name="network_address" value="<?php echo htmlspecialchars($item->attributes->network_address, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_network_address" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="network_address"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="devices_assigned_to_org" class="col-sm-3 control-label"><?php echo __('Assign devices to Org'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="devices_assigned_to_org" name="devices_assigned_to_org" disabled>
                                <option value="" label=" "></option>
                                <?php
                                foreach ($this->response->included as $org) {
                                    if ($org->type == 'orgs') { ?>
                                        <option value="<?php echo intval($org->id); ?>"<?php if (!is_null($item->attributes->devices_assigned_to_org) and $item->attributes->devices_assigned_to_org == $org->id) { echo " selected"; } ?>><?php echo htmlspecialchars($org->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                                <?php
                                    }
                                } ?>
                                </select>
                                <?php if (!empty($edit)) { ?>
                                <span class="input-group-btn">
                                    <button id="edit_devices_assigned_to_org" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="devices_assigned_to_org"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                </span>
                                <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="devices_assigned_to_location" class="col-sm-3 control-label"><?php echo __('Assign devices to Location'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="devices_assigned_to_location" name="devices_assigned_to_location" disabled>
                                <option value="" label=" "></option>
                                <?php
                                foreach ($this->response->included as $location) {
                                    if ($location->type == 'locations') { ?>
                                        <option value="<?php echo intval($location->id); ?>"<?php if (!is_null($item->attributes->devices_assigned_to_location) and $item->attributes->devices_assigned_to_location == $location->id) { echo " selected"; } ?>><?php echo htmlspecialchars($location->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                                <?php
                                    }
                                } ?>
                                </select>
                                <?php if (!empty($edit)) { ?>
                                <span class="input-group-btn">
                                    <button id="edit_devices_assigned_to_location" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="devices_assigned_to_location"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                </span>
                                <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_by" class="col-sm-3 control-label"><?php echo __('Edited By'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_by" name="edited_by" value="<?php echo htmlspecialchars($item->attributes->edited_by, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_date" class="col-sm-3 control-label"><?php echo __('Edited Date'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_date" name="edited_date" value="<?php echo htmlspecialchars($item->attributes->edited_date, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="updated_on" class="col-sm-3 control-label"><?php echo __('Last Run'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="updated_on" name="updated_on" value="<?php echo htmlspecialchars($item->attributes->last_run, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="complete" class="col-sm-3 control-label"><?php echo __('Complete'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="complete" name="complete" value="<?php echo htmlspecialchars($item->attributes->complete, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_complete" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="complete"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                    <?php
                    if ($item->attributes->type == 'subnet') { ?>
                    <div class="form-group">
                        <label for="other.subnet" class="col-sm-3 control-label"><?php echo __('Subnet'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="other.subnet" name="other.subnet" value="<?php echo htmlspecialchars($item->attributes->other->subnet, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_other.subnet" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="other.subnet"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php
                    }
                    if ($item->attributes->type == 'active directory') { ?>
                    <div class="form-group">
                        <label for="other.ad_server" class="col-sm-3 control-label"><?php echo __('AD Server'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="other.ad_server" name="other.ad_server" value="<?php echo htmlspecialchars($item->attributes->other->ad_server, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_other.ad_server" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="other.ad_server"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="other.ad_domain" class="col-sm-3 control-label"><?php echo __('AD Domain'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="other.ad_domain" name="other.ad_domain" value="<?php echo htmlspecialchars($item->attributes->other->ad_domain, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_other.ad_domain" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="other.ad_domain"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php
                    if ($item->attributes->complete == 'n') { ?>
                        <div class="form-group">
                            <label for="refresh" class="col-sm-3 control-label"><?php echo __('Not Complete'); ?></label>
                            <div class="col-sm-8 input-group">
                                <a class="btn btn-sm btn-warning" href="<?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?>"><?php echo __('Refresh'); ?></a>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo __('Execute'); ?></label>
                        <div class="col-sm-8 input-group">
                            <a class="btn btn-sm btn-primary" id="execute" href="<?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?>?action=execute"><?php echo __('Execute'); ?></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left"><?php echo __('Command Line'); ?></span>
        </h3>
    </div>

    <div class="panel-body">
        <div class="row">
            <pre>
                <?php echo htmlspecialchars($item->attributes->command); ?>
            </pre>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left"><?php echo __('Log'); ?></span>
            <span class="pull-right"></span>
        </h3>
    </div>

    <div class="panel-body">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center"><?php echo __('ID')?></th>
                        <th><?php echo __('Timestamp'); ?></th>
                        <th><?php echo __('File'); ?></th>
                        <th><?php echo __('Function'); ?></th>
                        <th><?php echo __('Message'); ?></th>
                        <th><?php echo __('Duration'); ?></th>
                        <th><?php echo __('Status'); ?></th>
                        <th><?php echo __('Output'); ?></th>
                        <th><?php echo __('Command'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->response->included as $item) {
                        if ($item->type == 'discovery_log') { ?>
                    <tr>
                        <td class="text-center"><?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?></td>
                        <td><?php echo htmlspecialchars($item->attributes->timestamp, REPLACE_FLAGS, CHARSET)?></td>
                        <td><?php echo htmlspecialchars($item->attributes->file, REPLACE_FLAGS, CHARSET)?></td>
                        <td><?php echo htmlspecialchars($item->attributes->function, REPLACE_FLAGS, CHARSET)?></td>
                        <?php if (strpos($item->attributes->message, 'Error when submitting discovery result') !== false) { ?>
                        <td style="word-wrap: break-word; white-space: pre-wrap;"><?php echo $item->attributes->message; ?></td>
                        <?php } else { ?>
                        <td style="word-wrap: break-word; white-space: pre-wrap;"><?php echo htmlspecialchars($item->attributes->message, REPLACE_FLAGS, CHARSET)?></td>
                        <?php } ?>
                        <td><?php if ($item->attributes->command_time_to_execute != '0.000000') { echo htmlspecialchars($item->attributes->command_time_to_execute, REPLACE_FLAGS, CHARSET); } ?></td>
                        <td><?php echo htmlspecialchars($item->attributes->command_status, REPLACE_FLAGS, CHARSET)?></td>
                        <td><?php if ($item->attributes->command_output != '') { echo '<pre style="word-wrap: break-word; white-space: pre-wrap;">' . htmlspecialchars($item->attributes->command_output, REPLACE_FLAGS, CHARSET) . '</pre>'; } ?></td>
                        <td><?php if ($item->attributes->command != '') { echo '<pre style="word-wrap: break-word; white-space: pre-wrap;">' . htmlspecialchars($item->attributes->command, REPLACE_FLAGS, CHARSET) . '</pre>'; } ?></td>
                    </tr>
                    <?php
                        }
                    } ?></tbody>
            </table>
        </div>
    </div>
</div>