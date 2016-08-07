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
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left">Credentials</span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
        <div class="form-group">
            <label for="id" class="col-sm-2 control-label">ID</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="id" name="id" placeholder="" value="" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="data[attributes][name]" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input tabindex="1" type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" placeholder="" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="data[attributes][description]" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input tabindex="2" type="text" class="form-control" id="data[attributes][description]" name="data[attributes][description]" placeholder="" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="data[attributes][type]" class="col-sm-2 control-label">Type</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <select tabindex="3" class="data_type form-control" id="data[attributes][type]" name="data[attributes][type]" title='Type'>
                        <option value='' label=' '></option>
                        <option value='snmp'>SNMP (v1 / v2)</option>
                        <option value='snmp_v3'>SNMP v3</option>
                        <option value='ssh'>SSH</option>
                        <?php
                        # TODO - SSH Keys not supported in OA 1.12.8 under Windows
                        if (php_uname('s') != 'Windows NT') { ?>
                        <option value='ssh_key'>SSH Key</option>
                        <?php } ?>
                        <option value='windows'>Windows</option>
                    </select>
                </div>
            </div>
        </div>

        <span id="options"></span>

        <div class="form-group">
            <label for="edited_by" class="col-sm-2 control-label">Edited By</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="" value="" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="edited_date" class="col-sm-2 control-label">Edited Date</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="edited_date" name="edited_date" placeholder="" value="" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="submit" class="col-sm-2 control-label"></label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="hidden" value="credentials" id="data[type]" name="data[type]" />
                    <button tabindex="10" id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </div>

    </form>
  </div>
</div>

<script>
$(document).ready(function(){
    var $snmp_text = '        <div class="form-group">\
            <label for="data[attributes][credentials][community]" class="col-sm-2 control-label">Community</label>\
            <div class="col-sm-4">\
                <div class="col-sm-8 input-group">\
                    <input tabindex="4" type="password" class="form-control" id="data[attributes][credentials][community]" name="data[attributes][credentials][community]" placeholder="" value="">\
                </div>\
            </div>\
        </div>';
    
    var $snmp_v3_text = '        <div class="form-group">\
            <label for="data[attributes][credentials][security_name]" class="col-sm-2 control-label">Security Name</label>\
            <div class="col-sm-4">\
                <div class="col-sm-8 input-group">\
                    <input tabindex="4" type="text" class="form-control" id="data[attributes][credentials][security_name]" name="data[attributes][credentials][security_name]" placeholder="" value="">\
                </div>\
            </div>\
        </div>\
        <div class="form-group">\
            <label for="data[attributes][credentials][security_level]" class="col-sm-2 control-label">Security Level</label>\
            <div class="col-sm-4">\
                <div class="col-sm-8 input-group">\
                    <select tabindex="5" class="form-control" id="data[attributes][credentials][security_level]" name="data[attributes][credentials][security_level]" tabindex="10" title="Security level">\
                        <option value="noAuthNoPriv">noAuthNoPriv</option>\
                        <option value="authNoPriv">authNoPriv</option>\
                        <option value="authPriv">authPriv</option>\
                    </select>\
                </div>\
            </div>\
        </div>\
        <div class="form-group">\
            <label for="data[attributes][credentials][authentication_protocol]" class="col-sm-2 control-label">Authentication Protocol</label>\
            <div class="col-sm-4">\
                <div class="col-sm-8 input-group">\
                    <select tabindex="6" class="form-control" id="data[attributes][credentials][authentication_protocol]" name="data[attributes][credentials][authentication_protocol]" tabindex="10" title="Authentication Protocol">\
                        <option value="MD5">MD5</option>\
                        <option value="SHA">SHA</option>\
                    </select>\
                </div>\
            </div>\
        </div>\
        <div class="form-group">\
            <label for="data[attributes][credentials][authentication_passphrase]" class="col-sm-2 control-label">Authentication Passphrase</label>\
            <div class="col-sm-4">\
                <div class="col-sm-8 input-group">\
                    <input tabindex="7" type="password" class="form-control" id="data[attributes][credentials][authentication_passphrase]" name="data[attributes][credentials][authentication_passphrase]" placeholder="" value="">\
                </div>\
            </div>\
        </div>\
        <div class="form-group">\
            <label for="data[attributes][credentials][privacy_protocol]" class="col-sm-2 control-label">Privacy Protocol</label>\
            <div class="col-sm-4">\
                <div class="col-sm-8 input-group">\
                    <select tabindex="8" class="form-control" id="data[attributes][credentials][privacy_protocol]" name="data[attributes][credentials][privacy_protocol]" tabindex="10" title="Privacy Protocol">\
                        <option value="AES">AES</option>\
                        <option value="DES">DES</option>\
                    </select>\
                </div>\
            </div>\
        </div>\
        <div class="form-group">\
            <label for="data[attributes][credentials][privacy_passphrase]" class="col-sm-2 control-label">Privacy Passphrase</label>\
            <div class="col-sm-4">\
                <div class="col-sm-8 input-group">\
                    <input tabindex="9" type="password" class="form-control" id="data[attributes][credentials][privacy_passphrase]" name="data[attributes][credentials][privacy_passphrase]" placeholder="" value="">\
                </div>\
            </div>\
        </div>\
        ';
    
    var $ssh_text = '        <div class="form-group">\
            <label for="data[attributes][credentials][username]" class="col-sm-2 control-label">Username</label>\
            <div class="col-sm-4">\
                <div class="col-sm-8 input-group">\
                    <input tabindex="4" type="text" class="form-control" id="data[attributes][credentials][username]" name="data[attributes][credentials][username]" placeholder="" value="">\
                </div>\
            </div>\
        </div>\
        <div class="form-group">\
            <label for="data[attributes][credentials][password]" class="col-sm-2 control-label">Password</label>\
            <div class="col-sm-4">\
                <div class="col-sm-8 input-group">\
                    <input tabindex="5" type="password" class="form-control" id="data[attributes][credentials][password]" name="data[attributes][credentials][password]" placeholder="" value="">\
                </div>\
            </div>\
        </div>';

    var $ssh_key_text = '        <div class="form-group">\
            <label for="data[attributes][credentials][username]" class="col-sm-2 control-label">Username</label>\
            <div class="col-sm-4">\
                <div class="col-sm-8 input-group">\
                    <input tabindex="4" type="text" class="form-control" id="data[attributes][credentials][username]" name="data[attributes][credentials][username]" placeholder="" value="">\
                </div>\
            </div>\
        </div>\
        <div class="form-group">\
            <label for="data[attributes][credentials][ssh_key]" class="col-sm-2 control-label">Key</label>\
            <div class="col-sm-4">\
                <div class="col-sm-8 input-group">\
                    <textarea tabindex="4" class="form-control" rows="3" id="data[attributes][credentials][ssh_key]" name="data[attributes][credentials][ssh_key]"></textarea>\
                </div>\
            </div>\
        </div>';

    var $windows_text = '        <div class="form-group">\
            <label for="data[attributes][credentials][username]" class="col-sm-2 control-label">Username</label>\
            <div class="col-sm-4">\
                <div class="col-sm-8 input-group">\
                    <input tabindex="4" type="text" class="form-control" id="data[attributes][credentials][username]" name="data[attributes][credentials][username]" placeholder="username@domain" value="">\
                </div>\
            </div>\
        </div>\
        <div class="form-group">\
            <label for="data[attributes][credentials][password]" class="col-sm-2 control-label">Password</label>\
            <div class="col-sm-4">\
                <div class="col-sm-8 input-group">\
                    <input tabindex="5" type="password" class="form-control" id="data[attributes][credentials][password]" name="data[attributes][credentials][password]" placeholder="" value="">\
                </div>\
            </div>\
        </div>';

    $('.data_type').change(function() {
        var $type = $(this).val();
        if ($type == "snmp") {
            $("#options").html($snmp_text);
        } else if ($type == "snmp_v3") {
            $("#options").html($snmp_v3_text);
        } else if ($type == "ssh") {
            $("#options").html($ssh_text);
        } else if ($type == "ssh_key") {
            $("#options").html($ssh_key_text);
        } else if ($type == "windows") {
            $("#options").html($windows_text);
        } else {
            $("#options").html("");
        }

    });
});
</script>