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
* @version   2.0.6
* @link      http://www.open-audit.org
 */

$proto = 'http://';
if ($this->config->config['is_ssl'] == 'true') {
    $proto = 'https://';
}
$network_address = '';
$network_address_array = array();
if ($this->config->config['default_network_address'] != '') {
    $network_address = "<option selected value='" . $proto . $this->config->config['default_network_address'] . "/open-audit/'>" . $proto . $this->config->config['default_network_address'] . "/open-audit/</option>";
    $network_address_array[] =  $network_address;
}
$address_array = explode(",", $this->config->config['ip']);
foreach ($address_array as $key => $value) {
    if ($value != $this->config->config['default_network_address']) {
        $network_address = "<option value='" . $proto . $value . "/open-audit/'>" . $proto . $value . "/open-audit/</option>";
        $network_address_array[] = $network_address;
    }
}
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][subnet]" class="col-sm-4 control-label">Device IP Address</label>
                        <div class="col-sm-7 input-group">
                            <input required type="text" class="form-control" id="data[attributes][other][subnet]" name="data[attributes][other][subnet]" placeholder="192.168.1.1"/>
                        </div>
                    </div>


                    <input type="hidden" value="" id="data[attributes][network_address]" name="data[attributes][network_address]" />
                    <div class="form-group">
                        <label for="network_address_select" class="col-sm-4 control-label">Network Address</label>
                        <div class="col-sm-7 input-group">
                            <select required class="form-control" id="network_address_select" name="network_address_select">
                                <option value=''></option>
                                <option value='other'>Other</option>
                                <?php
                                foreach ($network_address_array as $key => $value) {
                                    if ($network_address != '') {
                                        echo $network_address;
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" id="network_address_other_div" style="display:none;">
                        <label for="network_address_other" class="col-sm-4 control-label">Network Address</label>
                        <div class="col-sm-7 input-group">
                            <input required type="text" class="form-control" id="network_address_other" name="network_address_other" value="http://YOUR_SERVER/open-audit/">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][devices_assigned_to_org]" class="col-sm-4 control-label">Assign devices to Org</label>
                        <div class="col-sm-7 input-group">
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
                        <label for="data[attributes][devices_assigned_to_location]" class="col-sm-4 control-label">Assign devices to Location</label>
                        <div class="col-sm-7 input-group">
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
                        <label for="submit" class="col-sm-4 control-label"></label>
                        <div class="col-sm-7 input-group">
                            <input type="hidden" value="y" id="data[attributes][discard]" name="data[attributes][discard]" />
                            <input type="hidden" value="subnet" id="data[attributes][type]" name="data[attributes][type]" />
                            <input type="hidden" value="y" id="data[attributes][other][single]" name="data[attributes][other][single]" />
                            <input type="hidden" value="discoveries" id="data[type]" name="data[type]" />
                            <button tabindex="10" id="submit" name="submit" type="submit" class="btn btn-default">Execute</button>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][credentials][windows_username]" class="col-sm-4 control-label">Windows Username</label>
                        <div class="col-sm-7 input-group">
                            <input type="text" class="form-control" id="data[attributes][credentials][windows_username]" name="data[attributes][credentials][windows_username]" placeholder="user@domain.org"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][credentials][windows_password]" class="col-sm-4 control-label">Windows Password</label>
                        <div class="col-sm-7 input-group">
                            <input type="password" class="form-control" id="data[attributes][credentials][windows_password]" name="data[attributes][credentials][windows_password]"/>
                        </div>
                    </div>
                    <br />

                    <div class="form-group">
                        <label for="data[attributes][credentials][ssh_username]" class="col-sm-4 control-label">SSH Username</label>
                        <div class="col-sm-7 input-group">
                            <input type="text" class="form-control" id="data[attributes][credentials][ssh_username]" name="data[attributes][credentials][ssh_username]" placeholder="username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][credentials][ssh_password]" class="col-sm-4 control-label">SSH Password</label>
                        <div class="col-sm-7 input-group">
                            <input type="password" class="form-control" id="data[attributes][credentials][ssh_password]" name="data[attributes][credentials][ssh_password]"/>
                        </div>
                    </div>
                    <br />

                    <div class="form-group">
                        <label for="data[attributes][credentials][snmp_v1_community]" class="col-sm-4 control-label">SNMP Community (v1)</label>
                        <div class="col-sm-7 input-group">
                            <input type="text" class="form-control" id="data[attributes][credentials][snmp_v1_community]" name="data[attributes][credentials][snmp_v1_community]" placeholder="public"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][credentials][snmp_v2_community]" class="col-sm-4 control-label">SNMP Community (v2)</label>
                        <div class="col-sm-7 input-group">
                            <input type="text" class="form-control" id="data[attributes][credentials][snmp_v2_community]" name="data[attributes][credentials][snmp_v2_community]" placeholder="public"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


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