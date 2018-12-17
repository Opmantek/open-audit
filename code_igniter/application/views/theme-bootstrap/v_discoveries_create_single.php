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
* @version   2.3.2
* @link      http://www.open-audit.org
 */

// $proto = 'http://';
// if ($this->config->config['is_ssl'] === true) {
//     $proto = 'https://';
// }
// $network_address = '';
// $network_address_array = array();
// if ($this->config->config['default_network_address'] != '') {
//     $network_address = "<option selected value='" . $proto . $this->config->config['default_network_address'] . "/open-audit/'>" . $proto . $this->config->config['default_network_address'] . "/open-audit/</option>";
//     $network_address_array[] =  $network_address;
// }
// $address_array = explode(",", $this->config->config['ip']);
// foreach ($address_array as $key => $value) {
//     if ($value != $this->config->config['default_network_address']) {
//         $network_address = "<option value='" . $proto . $value . "/open-audit/'>" . $proto . $value . "/open-audit/</option>";
//         $network_address_array[] = $network_address;
//     }
// }
$network_address_array = array();
$selected = '';
if (!empty($this->config->config['default_network_address']) and stripos($this->config->config['default_network_address'], 'http://') !== false) {
    $selected = 'selected';
}
$network_address_array[] = "                                <option value='http://127.0.0.1/open-audit/' " . $selected . ">http://127.0.0.1/open-audit/</option>";


$selected = '';
if (!empty($this->config->config['default_network_address']) and stripos($this->config->config['default_network_address'], 'https://') !== false) {
    $selected = 'selected';
}
$network_address_array[] = "                                <option value='https://127.0.0.1/open-audit/' " . $selected . ">https://127.0.0.1/open-audit/</option>";

if (!empty($this->config->config['default_network_address'])) {
    $network_address = "<option data-id=\"default\" value='" . htmlspecialchars($this->config->config['default_network_address'], REPLACE_FLAGS, CHARSET) . "'>" . htmlspecialchars($this->config->config['default_network_address'], REPLACE_FLAGS, CHARSET) . "</option>\n";
    $network_address_array[] =  $network_address;
}

$network_address_array[] = "                                <option value='other'>Other</option>";
?>

<?php if ($this->response->{'meta'}->{'warning'} == 'y') { ?>
<div class="container-fluid">
    <div class="alert alert-danger alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>WARNING</strong> - Redhat and Centos 6 servers require the Samba4 libraries to be installed.
        Please see <a href="https://community.opmantek.com/display/OA/Auditing+Windows+machines+from+Linux+using+SMB2">this wiki page</a> for more information.<br />
        We very much recommend upgrading to Centos / RedHat 7.<br />
    </div>
</div>
<?php } ?>

<form class="form-horizontal" id="form_update" method="post" action="<?php echo htmlspecialchars( $this->response->links->self , REPLACE_FLAGS, CHARSET); ?>">
    <input type="hidden" value="<?php echo htmlspecialchars( $this->response->meta->access_token, REPLACE_FLAGS, CHARSET); ?>" id="data[access_token]" name="data[access_token]" />
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][other][subnet]" class="col-sm-4 control-label"><?php echo __('Device IP Address'); ?></label>
                        <div class="col-sm-7 input-group">
                            <input required type="text" class="form-control" id="data[attributes][other][subnet]" name="data[attributes][other][subnet]" placeholder="192.168.1.1"/>
                        </div>
                    </div>


                    <input type="hidden" value="" id="data[attributes][network_address]" name="data[attributes][network_address]" />
                    <div class="form-group">
                        <label for="network_address_select" class="col-sm-4 control-label"><?php echo __('Network Address'); ?></label>
                        <div class="col-sm-7 input-group">
                            <select required class="form-control" id="network_address_select" name="network_address_select">
                                <?php
                                foreach ($network_address_array as $key => $value) {
                                    if ($value != '') {
                                        echo $value;
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" id="network_address_other_div" style="display:none;">
                        <label for="network_address_other" class="col-sm-4 control-label"><?php echo __('Network Address'); ?></label>
                        <div class="col-sm-7 input-group">
                            <input required type="text" class="form-control" id="network_address_other" name="network_address_other" value="http://YOUR_SERVER/open-audit/">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][devices_assigned_to_org]" class="col-sm-4 control-label"><?php echo __('Assign devices to Org'); ?></label>
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
                        <label for="data[attributes][devices_assigned_to_location]" class="col-sm-4 control-label"><?php echo __('Assign devices to Location'); ?></label>
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
                            <button tabindex="10" id="submit" name="submit" type="submit" class="btn btn-default"><?php echo __('Execute'); ?></button>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][credentials][windows_username]" class="col-sm-4 control-label"><?php echo __('Windows Username'); ?></label>
                        <div class="col-sm-7 input-group">
                            <input type="text" class="form-control" id="data[attributes][credentials][windows_username]" name="data[attributes][credentials][windows_username]" placeholder="user@domain.org"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][credentials][windows_password]" class="col-sm-4 control-label"><?php echo __('Windows Password'); ?></label>
                        <div class="col-sm-7 input-group">
                            <input type="password" class="form-control" id="data[attributes][credentials][windows_password]" name="data[attributes][credentials][windows_password]"/>
                        </div>
                    </div>
                    <br />

                    <div class="form-group">
                        <label for="data[attributes][credentials][ssh_username]" class="col-sm-4 control-label"><?php echo __('SSH Username'); ?></label>
                        <div class="col-sm-7 input-group">
                            <input type="text" class="form-control" id="data[attributes][credentials][ssh_username]" name="data[attributes][credentials][ssh_username]" placeholder="username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][credentials][ssh_password]" class="col-sm-4 control-label"><?php echo __('SSH Password'); ?></label>
                        <div class="col-sm-7 input-group">
                            <input type="password" class="form-control" id="data[attributes][credentials][ssh_password]" name="data[attributes][credentials][ssh_password]"/>
                        </div>
                    </div>
                    <br />

                    <div class="form-group">
                        <label for="data[attributes][credentials][snmp_v1_community]" class="col-sm-4 control-label"><?php echo __('SNMP Community (v1)'); ?></label>
                        <div class="col-sm-7 input-group">
                            <input type="text" class="form-control" id="data[attributes][credentials][snmp_v1_community]" name="data[attributes][credentials][snmp_v1_community]" placeholder="public"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][credentials][snmp_v2_community]" class="col-sm-4 control-label"><?php echo __('SNMP Community (v2'); ?>)</label>
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
            alert("Please provide a network address.");
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