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
* @version   3.0.2
* @link      http://www.open-audit.org
 */
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

# check if we have nmap installed
$nmap_installed = 'n';
if (php_uname('s') == "Windows NT") {
    # check the obvious Windows install locations
    $test_path = 'c:\Program Files\Nmap\Nmap.exe';
    if ($nmap_installed == 'n' and file_exists($test_path)) {
        $nmap_installed = 'y';
    }
    $test_path = 'c:\Program Files (x86)\Nmap\Nmap.exe';
    if ($nmap_installed == 'n' and file_exists($test_path)) {
        $nmap_installed = 'y';
    }
    unset($test_path);
} else {
    $command_string = "which nmap 2>/dev/null";
    exec($command_string, $output, $return_var);
    if (isset($output[0]) and strpos($output[0], 'nmap')) {
        $nmap_installed = 'y';
    } else {
        $output[0] = '';
    }
    if ($nmap_installed == 'n') {
        if (file_exists('/usr/local/bin/nmap')) {
            $nmap_installed = 'y';
        }
    }
}

$nmap_warning = '';
if ($nmap_installed == 'n') {
    if (php_uname('s') == "Windows NT") {
        $nmap_warning = "WARNING - Nmap not detected. Get it from <a style='color:#729FCF;' target='_blank' href='http://nmap.org/download.html'>http://nmap.org/download.html</a>.<br />Please see <a target='_blank' href='https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap'>https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap</a> for information about why Open-AudIT requires Nmap and how to install it.";
    } else {
        $nmap_warning = "WARNING - Nmap not detected. Please install it using your package manager.<br />Please see <a target='_blank' href='https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap'>https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap</a> for information about why Open-AudIT requires Nmap and how to install it.";
    }
}
if ($nmap_warning != '') {
    echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $nmap_warning . '</div>';
}
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
                        <label for="data[attributes][id]" class="col-sm-3 control-label"><?php echo __('ID'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][id]" name="data[attributes][id]" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][name]" class="col-sm-3 control-label"><?php echo __('Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][org_id]" class="col-sm-3 control-label"><?php echo __('Organisation'); ?></label>
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
                        <label for="data[attributes][description]" class="col-sm-3 control-label"><?php echo __('Description'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][description]" name="data[attributes][description]" disabled>
                        </div>
                    </div>


                    <input type="hidden" value="" id="data[attributes][network_address]" name="data[attributes][network_address]" />
                    <div class="form-group">
                        <label for="network_address_select" class="col-sm-3 control-label"><?php echo __('Network Address'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select required class="form-control" id="network_address_select" name="network_address_select">
                                <option value='' label=' '></option>
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
                        <label for="network_address_other" class="col-sm-3 control-label"><?php echo __('Network Address'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input required type="text" class="form-control" id="network_address_other" name="network_address_other" value="http://YOUR_SERVER/open-audit/">
                        </div>
                    </div>
<!--
                    <div class="form-group">
                        <label for="data[attributes][network_address]" class="col-sm-3 control-label">Network Address</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][network_address]" name="data[attributes][network_address]" value="http://YOUR_SERVER/open-audit">
                        </div>
                    </div>
-->
                    <div class="form-group">
                        <label for="data[attributes][type]" class="col-sm-3 control-label"><?php echo __('Type'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="data[attributes][type]" name="data[attributes][type]">
                                <option value="subnet"><?php echo __('Subnet'); ?></option>
                                <option value="active directory"><?php echo __('Active Directory'); ?></option>
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
                        <label for="data[attributes][edited_by]" class="col-sm-3 control-label"><?php echo __('Edited By'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_by]" name="data[attributes][edited_by]" placeholder="<?php echo htmlspecialchars($this->user->full_name, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][edited_date]" class="col-sm-3 control-label"><?php echo __('Edited Date'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_date]" name="data[attributes][edited_date]" placeholder="<?php echo date('Y-m-d H:i:s'); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][last_run]" class="col-sm-3 control-label"><?php echo __('Last Run'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][last_run]" name="data[attributes][last_run]" disabled>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <span id="options">
                    </span>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-8 input-group" id="notes">
                            <p><br />Some examples of valid Subnet attributes are:
                                <ul>
                                    <li>192.168.1.1 (a single IP address)</li>
                                    <li>192.168.1.0/24 (a subnet)</li>
                                    <li>192.168.1-3.1-20 (a range of IP addresses)</li>
                                </ul>
            <b>NOTE</b> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. If you use a single IP or a range, please ensure that before you run the Discovery you have added a corresponding <a href="../networks">network</a> so Open-AudIT will accept audit results from those targets.<br /><br /><br />
            As at Open-AudIT 2.3.1, the network address should be set to localhost. Only use https if you have configured and enabled HTTPS on this server and HTTP has been disabled from localhost.
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="form-group">
                    <label for="submit" class="col-sm-3 control-label"></label>
                    <div class="col-sm-8 input-group">
                        <input type="hidden" value="discoveries" id="data[type]" name="data[type]" />
                        <input type="hidden" value="y" id="data[attributes][complete]" name="data[attributes][complete]" />
                        <button id="submit" name="submit" type="submit" class="btn btn-default"><?php echo __('Submit'); ?></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>

<script>
$(document).ready(function(){
    var $subnet_text = "                                <div class=\"form-group\">\
                                <label for=\"data[attributes][subnet]\" class=\"col-sm-4 control-label\"><?php echo __('Subnet'); ?></label>\
                                <div class=\"col-sm-7 input-group\">\
                                    <input type=\"text\" class=\"form-control\" id=\"data[attributes][other][subnet]\" name=\"data[attributes][other][subnet]\" placeholder=\"192.168.1.0/24\">\
                                </div>\
                            </div>";
    var $active_directory_text = "                            <div class=\"form-group\">\
                                <label for=\"data[attributes][other][ad_server]\" class=\"col-sm-4 control-label\"><?php echo __('Active Directory Server'); ?></label>\
                                <div class=\"col-sm-7 input-group\">\
                                    <input type=\"text\" class=\"form-control\" id=\"data[attributes][other][ad_server]\" name=\"data[attributes][other][ad_server]\" placeholder=\"192.168.1.20\">\
                                </div>\
                            </div>\
                            <div class=\"form-group\">\
                                <label for=\"data[attributes][other][ad_domain]\" class=\"col-sm-4 control-label\"><?php echo __('Active Directory Domain'); ?></label>\
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