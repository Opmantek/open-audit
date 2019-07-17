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
* @version   3.2.0
* @link      http://www.open-audit.org
 */

?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left"><?php echo __('Devices'); ?></span>
            <span class="pull-right"><a class="btn btn-xs btn-info" href="../index.php/devices"><?php echo __('List Devices'); ?></a></span>
        </h3>
    </div>

  <div class="panel-body">
    <form action="<?php echo htmlspecialchars( $this->response->links->self , REPLACE_FLAGS, CHARSET); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo htmlspecialchars( $this->response->meta->access_token, REPLACE_FLAGS, CHARSET); ?>" id="data[access_token]" name="data[access_token]" />
    <fieldset>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input_type" class="col-sm-3 control-label"><?php echo __('Input Type'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="input_type" name="input_type">
                                <option value=""><?php echo __('Choose'); ?></option>
                                <option value="manual_input"><?php echo __('Manual Input'); ?></option>
                                <option value="audit_input"><?php echo __('Copy and paste an audit result'); ?></option>
                                <option value="file_input"><?php echo __('Upload an audit result file'); ?></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />

        <div id="manual_input" style="display:none;">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="data[attributes][type]" class="col-sm-3 control-label"><?php echo __('Type'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select id="data[attributes][type]" name="data[attributes][type]" class="form-control" onChange="choose_type();">
                                <option value=''><?php echo __('Choose'); ?></option>
                                <?php
                                foreach ($this->response->included as $item) {
                                    if ($item->type == 'attributes' and $item->attributes->resource == 'devices' and $item->attributes->type == 'type') {
                                        echo "<option value='" . htmlspecialchars( $item->attributes->value, REPLACE_FLAGS, CHARSET) . "'>".__($item->attributes->name)."</option>\n";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][name]" class="col-sm-3 control-label"><?php echo __('Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][hostname]" class="col-sm-3 control-label"><?php echo __('Hostname'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][hostname]" name="data[attributes][hostname]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][ip]" class="col-sm-3 control-label"><?php echo __('IP'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][ip]" name="data[attributes][ip]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][netmask]" class="col-sm-3 control-label"><?php echo __('Netmask'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][netmask]" name="data[attributes][netmask]" value="255.255.255.0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][mac]" class="col-sm-3 control-label"><?php echo __('Mac Address'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][mac]" name="data[attributes][mac]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][status]" class="col-sm-3 control-label"><?php echo __('Status'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][status]" name="data[attributes][status]">
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'attributes' and $item->attributes->resource == 'devices' and $item->attributes->type == 'status') {
                                    $selected = '';
                                    if ($item->attributes->value == 'production') {
                                        $selected = ' selected';
                                    }
                                    echo "<option value='" . $item->attributes->value . "'" . $selected . ">".__($item->attributes->name)."</option>\n";
                                }
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][environment]" class="col-sm-3 control-label"><?php echo __('Environment'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][environment]" name="data[attributes][environment]">
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'attributes' and $item->attributes->resource == 'devices' and $item->attributes->type == 'environment') {
                                    $selected = '';
                                    if ($item->attributes->value == 'production') {
                                        $selected = ' selected';
                                    }
                                    echo "<option value='" . $item->attributes->value . "'" . $selected . ">".__($item->attributes->name)."</option>\n";
                                }
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][manufacturer]" class="col-sm-3 control-label"><?php echo __('Manufacturer'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][manufacturer]" name="data[attributes][manufacturer]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][model]" class="col-sm-3 control-label"><?php echo __('Model'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][model]" name="data[attributes][model]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][serial]" class="col-sm-3 control-label"><?php echo __('Serial'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][serial]" name="data[attributes][serial]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][org_id]" class="col-sm-3 control-label"><?php echo __('Organisation'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][org_id]" name="data[attributes][org_id]">
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'orgs') { ?>    <option value="<?php echo intval($item->id); ?>"<?php if ($item->id == 1) { echo " selected"; } ?>><?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][location_id]" class="col-sm-3 control-label"><?php echo __('Location'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][location_id]" name="data[attributes][location_id]">
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'locations') { ?>    <option value="<?php echo intval($item->id); ?>"<?php if ($item->id == 1) { echo " selected"; } ?>><?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][asset_number]" class="col-sm-3 control-label"><?php echo __('Asset Number'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][asset_number]" name="data[attributes][asset_number]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][owner]" class="col-sm-3 control-label"><?php echo __('Owner (Assigned To)'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][owner]" name="data[attributes][owner]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][comments]" class="col-sm-3 control-label"><?php echo __('Comments'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][comments]" name="data[attributes][comments]">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">


                    <div class="form-group">
                        <label for="data[attributes][purchase_order_number]" class="col-sm-3 control-label"><?php echo __('PO Number'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][purchase_order_number]" name="data[attributes][purchase_order_number]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][purchase_cost_center]" class="col-sm-3 control-label"><?php echo __('Cost Center'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][purchase_cost_center]" name="data[attributes][purchase_cost_center]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][purchase_vendor]" class="col-sm-3 control-label"><?php echo __('Vendor'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][purchase_vendor]" name="data[attributes][purchase_vendor]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][purchase_date]" class="col-sm-3 control-label"><?php echo __('Purchase Date'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="date" class="form-control" id="data[attributes][purchase_date]" name="data[attributes][purchase_date]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][purchase_amount]" class="col-sm-3 control-label"><?php echo __('Purchase Amount'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][purchase_amount]" name="data[attributes][purchase_amount]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][warranty_duration]" class="col-sm-3 control-label"><?php echo __('Warranty Duration'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][warranty_duration]" name="data[attributes][warranty_duration]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="data[attributes][warranty_expires]" class="col-sm-3 control-label"><?php echo __('Warranty Expires'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="date" class="form-control" id="data[attributes][warranty_expires]" name="data[attributes][warranty_expires]">
                        </div>
                    </div>

                    <div id="printer" style="display:none;">
                        <div class="form-group">
                            <label for="data[attributes][printer_color]" class="col-sm-3 control-label"><?php echo __('Printer Color'); ?></label>
                            <div class="col-sm-8 input-group">
                                <select class="form-control" id="data[attributes][printer_color]" name="data[attributes][printer_color]">
                                    <option value=""><?php echo __('Choose'); ?></option>
                                    <option value="y"><?php echo __('Yes'); ?></option>
                                    <option value="n"><?php echo __('No'); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="data[attributes][printer_duplex]" class="col-sm-3 control-label"><?php echo __('Printer Duplex'); ?></label>
                            <div class="col-sm-8 input-group">
                                <select class="form-control" id="data[attributes][printer_duplex]" name="data[attributes][printer_duplex]">
                                    <option value=""><?php echo __('Choose'); ?></option>
                                    <option value="y"><?php echo __('Yes'); ?></option>
                                    <option value="n"><?php echo __('No'); ?></option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="phone" style="display:none;">
                        <div class="form-group">
                            <label for="data[attributes][service_type]" class="col-sm-3 control-label"><?php echo __('Service Type'); ?></label>
                            <div class="col-sm-8 input-group">
                                <select class="form-control" id="data[attributes][service_type]" name="data[attributes][service_type]">
                                    <option value=""><?php echo __('Choose'); ?></option>
                                    <option value="voice"><?php echo __('Voice Only'); ?></option>
                                    <option value="data"><?php echo __('Data Only'); ?></option>
                                    <option value="voice and data"><?php echo __('Voice and Data'); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="data[attributes][service_number]" class="col-sm-3 control-label"><?php echo __('Service Number'); ?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="data[attributes][service_number]" name="data[attributes][service_number]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="data[attributes][service_provider]" class="col-sm-3 control-label"><?php echo __('Service Provider'); ?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="data[attributes][service_provider]" name="data[attributes][service_provider]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="data[attributes][service_plan]" class="col-sm-3 control-label"><?php echo __('Service Plan<'); ?>/label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="data[attributes][service_plan]" name="data[attributes][service_plan]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="data[attributes][service_network]" class="col-sm-3 control-label"><?php echo __('Service Network'); ?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="data[attributes][service_network]" name="data[attributes][service_network]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="data[attributes][unlock_pin]" class="col-sm-3 control-label"><?php echo __('Unlock PIN'); ?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="data[attributes][unlock_pin]" name="data[attributes][unlock_pin]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="data[attributes][serial_imei]" class="col-sm-3 control-label"><?php echo __('Serial IMEI'); ?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="data[attributes][serial_imei]" name="data[attributes][serial_imei]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="data[attributes][serial_sim]" class="col-sm-3 control-label"><?php echo __('Serial SIM'); ?></label>
                            <div class="col-sm-8 input-group">
                                <input type="text" class="form-control" id="data[attributes][serial_sim]" name="data[attributes][serial_sim]">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div id="audit_input" style="display:none;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="upload_input" class="col-sm-3 control-label"><?php echo __('Audit Result Input'); ?></label>
                            <div class="col-sm-8">
                                    <textarea class="form-control" rows="10" name="upload_input" id="upload_input"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="file_input" style="display:none;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="upload_file" class="col-sm-3 control-label"><?php echo __('File Input'); ?></label>
                            <div class="col-sm-8">
                                <input type="file" id="upload_file" name="upload_file">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="submit_button" style="display:none;">
                <hr />
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="submit" class="col-sm-2 control-label"></label>
                            <div class="col-sm-4">
                                <div class="col-sm-8 input-group">
                                    <button id="submit" name="submit" type="submit" class="btn btn-default"><?php echo __('Submit'); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
  </div>
</div>

<script>
$(document).ready(function () {
    $(document).on('change', '#input_type', function (e) {
        var showDiv = $("#input_type").val();
        $("#manual_input").css('display', 'none');
        $("#audit_input").css('display', 'none');
        $("#file_input").css('display', 'none');
        $(this).css('display', 'block');
        if (showDiv != "") {
            document.getElementById(showDiv).style.display = 'block';
            $("#submit_button").css('display', 'block');
        } else {
            $("#submit_button").css('display', 'none');
        }
    });
});



function choose_type() {
    var showDiv = document.getElementById("data[attributes][type]").value;
    $("#printer").css('display', 'none');
    $("#phone").css('display', 'none');
    if (showDiv == "printer") {
        $("#printer").css('display', 'block');
    }
    if (showDiv.indexOf("modem") != -1 || showDiv.indexOf("phone") != -1) {
        $("#phone").css('display', 'block');
    }
}



</script>