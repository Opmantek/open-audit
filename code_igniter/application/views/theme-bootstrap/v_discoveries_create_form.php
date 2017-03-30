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
 * @version   1.14.4

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

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
                            <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" value="">
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
                        <label for="data[attributes][description]" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][description]" name="data[attributes][description]" disabled>
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
                        <label for="data[attributes][type]" class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="data[attributes][type]" name="data[attributes][type]">
                                <option value="subnet">Subnet</option>
                                <option value="active directory">Active Directory</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][devices_assigned_to_org]" class="col-sm-3 control-label">Assign devices to Org</label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][devices_assigned_to_org]" name="data[attributes][devices_assigned_to_org]">
                                <option value="" label=" "></option>
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'orgs') { ?>     <option value="<?php echo intval($item->id); ?>"><?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
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
                                if ($item->type == 'locations') { ?>        <option value="<?php echo intval($item->id); ?>"><?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][edited_by]" class="col-sm-3 control-label">Edited By</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_by]" name="data[attributes][edited_by]" placeholder="<?php echo htmlspecialchars($this->user->full_name, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][edited_date]" class="col-sm-3 control-label">Edited Date</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_date]" name="data[attributes][edited_date]" placeholder="<?php echo date('Y-m-d H:i:s'); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][last_run]" class="col-sm-3 control-label">Last Run</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][last_run]" name="data[attributes][last_run]" disabled>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <span id="options">
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="submit" class="col-sm-3 control-label"></label>
                    <div class="col-sm-8 input-group">
                        <input type="hidden" value="discoveries" id="data[type]" name="data[type]" />
                        <input type="hidden" value="y" id="data[attributes][complete]" name="data[attributes][complete]" />
                        <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>

<script>
$(document).ready(function(){
    var $subnet_text = "                                <div class=\"form-group\">\
                                <label for=\"data[attributes][subnet]\" class=\"col-sm-4 control-label\">Subnet</label>\
                                <div class=\"col-sm-7 input-group\">\
                                    <input type=\"text\" class=\"form-control\" id=\"data[attributes][other][subnet]\" name=\"data[attributes][other][subnet]\" placeholder=\"192.168.1.0/24\">\
                                </div>\
                            </div>";
    var $active_directory_text = "                            <div class=\"form-group\">\
                                <label for=\"data[attributes][other][ad_server]\" class=\"col-sm-4 control-label\">Active Directory Server</label>\
                                <div class=\"col-sm-7 input-group\">\
                                    <input type=\"text\" class=\"form-control\" id=\"data[attributes][other][ad_server]\" name=\"data[attributes][other][ad_server]\" placeholder=\"192.168.1.20\">\
                                </div>\
                            </div>\
                            <div class=\"form-group\">\
                                <label for=\"data[attributes][other][ad_domain]\" class=\"col-sm-4 control-label\">Active Directory Domain</label>\
                                <div class=\"col-sm-7 input-group\">\
                                    <input type=\"text\" class=\"form-control\" id=\"data[attributes][other][ad_domain]\" name=\"data[attributes][other][ad_domain]\" placeholder=\"open-audit.local\">\
                                </div>\
                            </div>";
    $("#options").html($subnet_text);
    $('.data_type').change(function() {
        var $type = $(this).val();
        if ($type == "subnet") {
            $("#options").html($subnet_text);
        } else if ($type == "active directory") {
            $("#options").html($active_directory_text);
        } else {
            $("#options").html($subnet_text);
        }

    });
});
</script>
