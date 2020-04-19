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
* @version   GIT: Open-AudIT_3.3.1
* @link      http://www.open-audit.org
 */
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo htmlspecialchars( $this->response->links->self , REPLACE_FLAGS, CHARSET); ?>">
    <input type="hidden" value="<?php echo htmlspecialchars( $this->response->meta->access_token, REPLACE_FLAGS, CHARSET); ?>" id="data[access_token]" name="data[access_token]" />
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][name]" class="col-sm-3 control-label"><?php echo __('Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" value="" required>
                        </div>
                    </div>

                    <span id="options">
                        <div class="form-group">
                            <label for="data[attributes][subnet]" class="col-sm-3 control-label"><?php echo __('Subnet'); ?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="data[attributes][other][subnet]" name="data[attributes][other][subnet]" placeholder="192.168.1.0/24">
                            </div>
                        </div>
                    </span>

                    <div class="form-group">
                        <label for="data[attributes][org_id]" class="col-sm-3 control-label"><?php echo __('Organisation'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][org_id]" name="data[attributes][org_id]" required>
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'orgs') { ?>     <option value="<?php echo intval($item->id); ?>"><?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][type]" class="col-sm-3 control-label"><?php echo __('Type'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="data[attributes][type]" name="data[attributes][type]" required>
                                <option value="subnet"><?php echo __('Subnet'); ?></option>
                                <option value="active directory"><?php echo __('Active Directory'); ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][other][nmap][discovery_scan_option_id]" class="col-sm-3 control-label"><?php echo __('Discovery Options'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][other][nmap][discovery_scan_option_id]" name="data[attributes][other][nmap][discovery_scan_option_id]" required disabled>
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'discovery_scan_options') {
                                $selected = '';
                                if (intval($item->id) === intval($this->config->config['discovery_default_scan_option'])) {
                                    $selected = ' selected';
                                }
                                echo '<option value="' . intval($item->id) . '"' . $selected . '>' . htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET) . "</option>\n";
                                }
                            } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][devices_assigned_to_org]" class="col-sm-3 control-label"><?php echo __('Assign devices to Org'); ?></label>
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
                        <label for="data[attributes][devices_assigned_to_location]" class="col-sm-3 control-label"><?php echo __('Assign devices to Location'); ?></label>
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
                        <label for="submit" class="col-sm-3 control-label"></label>
                        <div class="col-sm-8 input-group">
                            <input type="hidden" value="discoveries" id="data[type]" name="data[type]" />
                            <button id="submit" name="submit" type="submit" class="btn btn-default"><?php echo __('Submit'); ?></button>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="col-md-8 col-md-offset-2">
                        <?php if ( ! empty($this->response->dictionary->about)) {
                            echo "<h4 class=\"text-center\">About</h4><br />";
                            echo $this->response->dictionary->about;
                        } ?>
                        <?php if ( ! empty($this->response->dictionary->notes)) {
                            echo "<h4 class=\"text-center\">Notes</h4><br />";
                            echo $this->response->dictionary->notes;
                        } ?>
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

    </div>
</form>

<script>
$(document).ready(function(){
    var $subnet_text = "                                <div class=\"form-group\">\
                                <label for=\"data[attributes][subnet]\" class=\"col-sm-3 control-label\"><?php echo __('Subnet'); ?></label>\
                                <div class=\"col-sm-8 input-group\">\
                                    <input type=\"text\" class=\"form-control\" id=\"data[attributes][other][subnet]\" name=\"data[attributes][other][subnet]\" placeholder=\"192.168.1.0/24\">\
                                </div>\
                            </div>";
    var $active_directory_text = "                            <div class=\"form-group\">\
                                <label for=\"data[attributes][other][ad_server]\" class=\"col-sm-3 control-label\"><?php echo __('Active Directory Server'); ?></label>\
                                <div class=\"col-sm-8 input-group\">\
                                    <input type=\"text\" class=\"form-control\" id=\"data[attributes][other][ad_server]\" name=\"data[attributes][other][ad_server]\" placeholder=\"192.168.1.20\">\
                                </div>\
                            </div>\
                            <div class=\"form-group\">\
                                <label for=\"data[attributes][other][ad_domain]\" class=\"col-sm-3 control-label\"><?php echo __('Active Directory Domain'); ?></label>\
                                <div class=\"col-sm-8 input-group\">\
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

<script>
$(document).ready(function(){
    $('#div_system_id').remove();
    $('#div_device_count').remove();
    $('#div_discard').remove();

    $('#network_address_select').change(function() {
        var $value = $(this).val();
        if ($value == 'other') {
            $("#network_address_other_div").css('display', 'block');
        } else {
            $("#network_address_other_div").css('display', 'none');
        }
    });

    $("form").submit(function(e){
        if ($("#network_address_select").val() == '') {
            alert("Please provde a network address.");
            e.preventDefault();
        } else if ($("#network_address_select").val() == 'other') {
            var other = $('#network_address_other').val();
            if (other != "") {
                $("#data\\[attributes\\]\\[network_address\\]").val(other);
            } else {
                alert("Please provde a network address.");
                e.preventDefault();
            }
        } else {
            var other = $('#network_address_select').val();
            $("#data\\[attributes\\]\\[network_address\\]").val(other);
        }
    });
});
</script>