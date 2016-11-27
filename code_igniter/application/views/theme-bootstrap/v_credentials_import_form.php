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
 * @version 1.14
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
$item = $this->response->data[0];
?>
<?php echo form_open_multipart($this->response->meta->collection.'/import');?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="text-left"><?php echo __('Import ') . $this->response->meta->collection; ?></span>
                <span class="pull-right"></span>
            </h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="file_import" class="col-sm-3 control-label"><?php echo __('File Import'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="file" class="form-control" id="file_import" name="file_import">
                            <p class="help-block">Upload your csv file.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="submit" class="col-sm-3 control-label"></label>
                        <div class="col-sm-8 input-group">
                            <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="text-left"><?php echo __('Example'); ?></span>
            </h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <p>Below is an example of the required csv format. The minimum required attributes for connections are name, org_id, type and credentials. You should not include the id, edited_by and edited_date fields. These will be automatically set. All other columns are optional.</p>
                    <p>You should use a header line containing the names of the columns you wish to populate, then your data lines below that.</p>
                    <p>NOTE - The credentials field is stored as an encrypted JSON object. You should use single quotes in the JSON (the import routine will convert them).</p>
                    <p>Valid fields within the JSON are: <br>
                    For SNMP v1/v2 (snmp) - community<br />
                    For SNMP v3 (snmpv3) - security_name, security_level, authentication_protocol, authentication_passphrase, privacy_protocol, privacy_passphrase<br />
                    For SSH (ssh) - username, password<br />
                    For SSH Key (ssh_hey) - username, key<br />
                    For Windows (windows) - username, password, domain<br />
                    </p>
                    <p>SNMP v3 Notes. Valid values for security_level are: noAuthNoPriv, authNoPriv, authPriv. Valid values for authentication_protocol are MD5 and SHA. Valid values for privacy_protocol are AES and DES.</p>
                    <samp>
                        "name","org_id","type","credentials"<br />
                        "Public SNMP","1","snmp","{'community','public'}"<br />
                        "My SSH","1","ssh","{'username':'my_user','password':'my_password'}"<br />
                        "Windows Creds","1","windows","{'username':'my_user','password':'my_password','domain':'open-audit.com'}"<br />
                        "SNMPv3 creds","1","snmpv3","{security_name:'my sec name',security_level:'noAuthNoPriv',authentication_protocol:'MD5',authentication_passphrase:'my auth pass',privacy_protocol:'AES',privacy_passphrase:'my priv pass'}"<br />
                    </samp>
                    <br />
                    <br />
                    <p>The other types of credential sets (as below) have not yet been implemented.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="text-left"><?php echo __('Columns'); ?></span>
            </h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th><?php echo __('Name'); ?></th>
                                <th><?php echo __('Type'); ?></th>
                                <th><?php echo __('Default'); ?></th>
                                <th><?php echo __('Max Length'); ?></th>
                                <th><?php echo __('Primary Key'); ?></th>
                                <th><?php echo __('Valid Values'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach ($item->attributes->columns as $column) {
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($column->name, REPLACE_FLAGS, CHARSET); ?></td>
                                <td><?php echo htmlspecialchars($column->type, REPLACE_FLAGS, CHARSET); ?></td>
                                <td><?php echo htmlspecialchars($column->default, REPLACE_FLAGS, CHARSET); ?></td>
                                <td><?php echo htmlspecialchars($column->max_length, REPLACE_FLAGS, CHARSET); ?></td>
                                <?php
                                if (!empty($column->primary_key)) {
                                    echo "<td>true</td>\n";
                                } else {
                                    echo "<td></td>\n";
                                }
                                ?>
                                <?php
                                if ($column->type == 'enum') {
                                    echo "<td class=\"wrap\">" . htmlspecialchars($column->values, REPLACE_FLAGS, CHARSET) . "</td>\n";
                                } else {
                                    echo "<td></td>\n";
                                }
                                ?>

                            </tr>
                        <?php
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
