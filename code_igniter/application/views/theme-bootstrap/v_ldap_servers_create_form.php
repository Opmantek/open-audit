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
 * @version   2.0.6

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
                            <input type="text" class="form-control" id="data[attributes][id]" name="data[attributes][id]" value="" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][name]" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-8 input-group">
                             <input required type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][description]" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][description]" name="data[attributes][description]">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][org_id]" class="col-sm-3 control-label">Organisation</label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][org_id]" name="data[attributes][org_id]"><?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'orgs') { ?>
                                <option value="<?php echo intval($item->id); ?>"><?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][domain]" class="col-sm-3 control-label">Domain</label>
                        <div class="col-sm-8 input-group">
                             <input required type="text" class="form-control" id="data[attributes][domain]" name="data[attributes][domain]" placeholder="your.domain.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][host]" class="col-sm-3 control-label">Host</label>
                        <div class="col-sm-8 input-group">
                             <input required type="text" class="form-control" id="data[attributes][host]" name="data[attributes][host]" placeholder="192.168.1.88">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][port]" class="col-sm-3 control-label">Port</label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][port]" name="data[attributes][port]" placeholder="389" value="389">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][secure]" class="col-sm-3 control-label">Use Secure (LDAPS)</label>
                        <div class="col-sm-8 input-group">
                            <select required class="form-control" id="data[attributes][secure]" name="data[attributes][secure]">
                                <option value="n">No</option>
                                <option value="y">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][version]" class="col-sm-3 control-label">Version</label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][version]" name="data[attributes][version]" placeholder="3" value="3">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][use_roles]" class="col-sm-3 control-label">Use LDAP for Roles</label>
                        <div class="col-sm-8 input-group">
                            <select id="data[attributes[[use_roles]" name="data[attributes][use_roles]" class="form-control" title="data[attributes[[use_roles]">
                                <option value='n' selected>No</option>
                                <option value='y'>Yes</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][type]" class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-8 input-group">
                            <select required class="form-control" id="data[attributes][type]" name="data[attributes][type]">
                                <option value="active directory">Active Directory</option>
                                <option value="openldap">OpenLDAP</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][base_dn]" class="col-sm-3 control-label">Base DN</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][base_dn]" name="data[attributes][base_dn]" placeholder="cn=Users,dc=your,dc=domain,dc=com" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][user_dn]" class="col-sm-3 control-label">User DN</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][user_dn]" name="data[attributes][user_dn]" placeholder="cn=@username,ou=people" value="cn=@username,ou=people" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][user_membership_attribute]" class="col-sm-3 control-label">User Membership Attribute</label>
                        <div class="col-sm-8 input-group">
                            <input required type="text" class="form-control" id="data[attributes][user_membership_attribute]" name="data[attributes][user_membership_attribute]" placeholder="memberUid" value="memberUid" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][refresh]" class="col-sm-3 control-label">Refresh</label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][refresh]" name="data[attributes][refresh]" placeholder="24" value="24">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][lang]" class="col-sm-3 control-label">Language</label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="data[attributes][lang]" name="data[attributes][lang]" title='Type'>
                                <option value='de'>German</option>
                                <option value='en' selected>English</option>
                                <option value='es'>Spanish</option>
                                <option value='fr'>French</option>
                                <option value='pt-br'>Brazilian Portuguese</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][dn_account]" class="col-sm-3 control-label">DN Account</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][dn_account]" name="data[attributes][dn_account]" placeholder="cn=Administrator,cn=Users,dc=your,dc=domain,dc=com" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][dn_password]" class="col-sm-3 control-label">DN Password</label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][dn_password]" name="data[attributes][dn_password]" placeholder="your DN Account password" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][edited_by]" class="col-sm-3 control-label">Edited By</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_by]" name="data[attributes][edited_by]" value="" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][edited_date]" class="col-sm-3 control-label">Edited Date</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_date]" name="data[attributes][edited_date]" value="" disabled>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="submit" class="col-sm-2 control-label"></label>
                    <div class="col-sm-8 input-group">
                        <input type="hidden" value="ldap_servers" id="data[type]" name="data[type]" />
                        <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>

<script>
$(document).ready(function(){
    $('#data\\[attributes\\]\\[type\\]').change(function() {
        var $type = $(this).val();
        if ($type == "active directory") {
            $("#data\\[attributes\\]\\[user_dn\\]").attr("disabled", true);
            $("#data\\[attributes\\]\\[user_membership_attribute\\]").attr("disabled", true);
            $("#data\\[attributes\\]\\[base_dn\\]").attr("placeholder", 'cn=Users,dc=your,dc=domain,dc=com');
        }
        if ($type == "openldap") {
            $("#data\\[attributes\\]\\[user_dn\\]").attr("disabled", false);
            $("#data\\[attributes\\]\\[user_membership_attribute\\]").attr("disabled", false);
            $("#data\\[attributes\\]\\[base_dn\\]").attr("placeholder", 'dc=your,dc=domain,dc=com');
        }
    });
});
</script>