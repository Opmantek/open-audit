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
* @version   GIT: Open-AudIT_3.5.1
* @link      http://www.open-audit.org
 */
$item = $this->response->data[0];
$discovery_scan_options = new stdClass();
$discovery_scan_options->attributes = new stdClass();
$discovery_scan_options->attributes->name = '';
foreach ($this->response->included as $include) {
    if ($include->type === 'discovery_scan_options' && intval($include->id) === intval($item->attributes->other->nmap->discovery_scan_option_id)) {
        $discovery_scan_options = $include;
    }
}
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo htmlspecialchars( $this->response->links->self , REPLACE_FLAGS, CHARSET); ?>">
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
                        <label for="other.nmap.discovery_scan_option_id" class="col-sm-3 control-label"><?php echo __('Discovery Options'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="other.nmap.discovery_scan_option_id" name="other.nmap.discovery_scan_option_id" value="<?php echo htmlspecialchars($discovery_scan_options->attributes->name, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

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

                    <div class="form-group">
                        <label for="devices_assigned_to_org" class="col-sm-3 control-label"><?php echo __('Assign to Org'); ?></label>
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
                        <label for="devices_assigned_to_location" class="col-sm-3 control-label"><?php echo __('Assign to Location'); ?></label>
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
                        <label for="status" class="col-sm-3 control-label"><?php echo __('Status'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="status" name="status" value="<?php echo htmlspecialchars($item->attributes->status, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                        <label for="updated_on" class="col-sm-3 control-label"><?php echo __('Started On'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="updated_on" name="updated_on" value="<?php echo htmlspecialchars($item->attributes->last_run, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="last_finished" class="col-sm-3 control-label"><?php echo __('Completed On'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="last_finished" name="last_finished" value="<?php echo htmlspecialchars($item->attributes->last_finished, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>
                    <br />
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
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-8 input-group">
                            <a class="btn btn-sm btn-primary" id="execute" href="<?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?>?action=execute"><?php echo __('Execute'); ?></a>
                            <?php if ($item->attributes->status == 'running') { ?>
                            &nbsp;
                            <a class="btn btn-sm btn-success" id="execute" href="<?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?>"><?php echo __('Refresh to Update Logs'); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center">Discovery Options</h4><br />
                        Discovery Options are a global setting changed in the <a href="/open-audit/index.php/configuration/discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br />
                        <strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An 'open|filtered' port is considered open. A 'filtered' port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br /><br/>

                        <strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An 'open|filtered' port is considered open. A 'filtered' port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/>

                        <strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An 'open|filtered' port is considered open. A 'filtered' port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/>

                        <strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An 'open|filtered' port is considered open. A 'filtered' port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/>

                        <strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An 'open|filtered' port is considered open. A 'filtered' port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/>

                        <strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An 'open|filtered' port is considered open. A 'filtered' port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/>

                        <strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An 'open|filtered' port is considered open. A 'filtered' port is considered open (and will trigger device detection). Use polite timing.<br/><br/>

                        <strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br /><br />
                </div>
            </div>
        </div>
    </div>
</form>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left"><?php echo __('Log'); ?></span>
            <span class="pull-right"></span>
        </h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-condensed">
            <thead>
                <tr>
                    <th style="white-space: nowrap;"><?php echo __('Timestamp'); ?></th>
                    <th class="text-center"><?php echo __('ID')?></th>
                    <th class="text-center"><?php echo __('IP'); ?></th>
                    <th class="text-center"><?php echo __('Status'); ?></th>
                    <th><?php echo __('Message'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->response->included as $item) {
                    if ($item->type == 'discovery_log') { ?>
                <tr>
                    <td style="white-space: nowrap;"><?php echo htmlspecialchars($item->attributes->timestamp, REPLACE_FLAGS, CHARSET)?></td>
                    <td class="text-center"><?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?></td>
                    <td class="text-center"><?php echo htmlspecialchars($item->attributes->ip, REPLACE_FLAGS, CHARSET)?></td>
                    <td class="text-center"><?php echo htmlspecialchars($item->attributes->command_status, REPLACE_FLAGS, CHARSET)?></td>
                    <td><?php echo htmlspecialchars($item->attributes->message, REPLACE_FLAGS, CHARSET)?>
                    <?php if (!empty($item->attributes->command)) { ?>
                        <br /><strong><em>Command: </em></strong><code><?php echo htmlspecialchars($item->attributes->command, REPLACE_FLAGS, CHARSET)?></code>
                    <?php } ?>
                    <?php if (!empty($item->attributes->command_output)) {
                        $output = htmlentities($item->attributes->command_output);
                        $output = str_replace("\",", "\", ", $output);
                        $output = str_replace("\n", "<br />", $output); ?>
                        <br /><strong><em>Output: </em></strong><span class="output"><?php echo $output ?></span>
                    <?php } ?>
                    </td>
                </tr>
                <?php
                    }
                } ?></tbody>
        </table>
    </div>
</div>
