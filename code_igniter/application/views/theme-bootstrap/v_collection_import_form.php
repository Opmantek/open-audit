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
* @version   2.2.1
* @link      http://www.open-audit.org
 */
$item = $this->response->data[0];

$values = "";
$sample = '';
$extra = '';

switch ($this->response->meta->collection) {
    case "attributes":
        $values = "'name','org_id','type','resource' and 'value'";
        $sample = ' <tr><td>"1",resource","type","name","value"</td></td>
                    <tr><td>"1","devices","device_class","Virtual Device","virtual device"</td></tr>
                    <tr><td>"1","devices","device_class","Special Class","special class"</td></tr>';
        break;

    case "connections":
        $values = "'name' and 'org_id'";
        $sample = ' <tr><td>"name","org_id","provider","service_type","product_name","service_identifier"</td></tr>
                    <tr><td>"My Home Connection","1","Telstra","Cable","Bigpond Cable Extreme","123456"</td></tr>
                    <tr><td>"The Office Connection","1","Telstra","Cable","Bigpond Cable Extreme","567890"</td></tr>';
        break;

    case "credentials":
        $values = "'name','org_id','type' and credentials (see below).";
        $sample = ' <tr><td>"name","org_id","type","credentials.community","credentials.username","credentials.password"</td></tr>
                <tr><td>"Public SNMP","1","snmp","public","",""</td></tr>
                <tr><td>"My SSH","1","ssh","","my_user","my_password"</td></tr>
                <tr><td>"Windows Creds","1","windows","","my_win_user@open-audit.com","my_win_password"</td></tr>';
        $extra = "The field 'credentials' is stored as an encrypted JSON object. You should use the field names of 'credentials.attribute name'. For an example, an SNMP community string would be 'credentials.community'.</p><p>For an example, use the web interface to create a credential set and then go to menu -> Admin -> Database and click on Discoveries. Then export to CSV.</p><p>Valid credentials attributes are: community, username, password, domain, ssh_key, authentication_passphrase, authentication_protocol, privacy_passphrase, privacy_protocol, security_level, security_name.";
        break;

    case "devices":
        $values = "'name' and 'org_id'";
        $sample = ' <tr><td>"name","org_id","type","ip"</td></tr>
                    <tr><td>"mail","1","computer","192.168.1.110"</td></tr>
                    <tr><td>"router","1","router","192.168.1.1"</td></tr>
                    <tr><td>"laser","1","printer","192.168.1.10"</td></tr>';
        break;

    case "discoveries":
        $values = "'name','org_id','type','network_address' and 'other.subnet'";
        $sample = '<tr><td>"name","org_id","type","network_address","other.subnet"</td></tr>
                   <tr><td>"My Test Discovery","1","subnet","http://SERVER/open-audit/","192.168.1.1"</td></tr>';
        $extra = "The field 'other' is stored as a JSON object. You should use the field names of 'other.attribute name'. For an example, subnet would be 'other.subnet'.</p><p>For an example, use the web interface to create a discovery and then go to menu -> Admin -> Database and click on Discoveries. Then export to CSV.</p><p>Valid 'other' attributes are subnet, ad_domain and ad_server.";
        break;

    case "fields":
        $values = "'name','org_id','type','placement' and 'group_id'";
        $sample = ' <tr><td>"name","org_id","group_id","type","values",placement"</td></tr>
                    <tr><td>"My Special Field","1","1","varchar","",""</td></tr>';
        break;

    case "files":
        $values = "'name','org_id' and 'path'";
        $sample = ' <tr><td>"name","org_id","path","description"</td></tr>
                    <tr><td>"TMP on Linux","1","/tmp/","Any files in the /tmp dir on Linux machines"</td></tr>
                    <tr><td>"Program File on Windows","1","c:\Program Files\","Any files in the Program Files dir on Windows machines"</td></tr>';
        break;

    case "groups":
        $values = "'name','org_id' and 'sql'";
        $sample = ' <tr><td>"org_id","name","description","sql","expose"</td></tr>
                    <tr><td>"1","Test Group","Ubuntu Machines","SELECT DISTINCT(system.id) FROM system WHERE @filter AND os_family LIKE \'Ubuntu\'","y"</td></tr>';
        break;

    case "ldap_servers":
        $values = "'name','org_id','lang','host','domain','refresh' and 'use_roles'";
        $sample = ' <tr><td>"name","org_id","lang","host","domain","refresh","use_roles"</td></tr>
                    <tr><td>"My LDAP Server","1","en","192.168.1.120","open-audit.com","24","y"</td></tr>';
        break;

    case "licenses":
        $values = "'name','org_id','org_descendants','purchase_count' and 'match_string'";
        $sample = ' <tr><td>"name","org_id","org_descendants","purchase_count","match_string"</td></tr>
                    <tr><td>"Microsoft Office","1","y","1000","Microsoft Office Professional%"</td></tr>
                    <tr><td>"Microsoft PowerPoint","1","y","100","%PowerPoint%"</td></tr>';
        break;

    case "locations":
        $values = "'name' and 'org_id'";
        $sample = ' <tr><td>"name","org_id","type","address"</td></tr>
                    <tr><td>"My Office","1","Office","9 Bangalow Drive"</td></tr>';
        break;

    case "networks":
        $values = "'name','org_id' and 'network'";
        $sample = ' <tr><td>"name","org_id","network","description"</td></tr>
                    <tr><td>"My Office","1","192.168.1.0/24","The LAN at our office"</td></tr>';
        break;

    case "orgs":
        $values = "'name' and 'parent_id'";
        $sample = ' <tr><td>"name","parent_id","description"</td></tr>
                    <tr><td>"Finance Dept","1","The Finance and Accounting Department"</td></tr>
                    <tr><td>"Finance Servers","1","The Servers that belong to the Finance Department"</td></tr>
                    <tr><td>"IT Dept","1","The IT Department"</td></tr>
                    <tr><td>"IT Servers","1","The Servers that belong to the IT Department"</td></tr>';
        break;

    case "queries":
        $values = "'name','org_id' and 'sql'";
        $sample = ' <tr><td>"name","org_id","sql"</td></tr>
                    <tr><td>"Linux Device Hardware","1","SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.memory_count AS `system.memory_count`, system.form_factor AS `system.form_factor`, processor.description AS `processor.description` FROM system LEFT JOIN processor ON (processor.system_id = system.id AND processor.current = \'y\') WHERE @filter AND system.os_group = \'Linux\' ORDER BY system.name"</td></tr>
                    <tr><td>"Hardware - Device","1","SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.asset_number AS `system.asset_number` FROM system WHERE @filter"</td></tr>';
        break;

    case "scripts":
        $values = "'name','org_id','based_on' and 'options'";
        $sample = ' <tr><td>"name","org_id","based_on","options"</td></tr>
                    <tr><td>"New Audit Windows","1","audit_windows.vbs","{\'audit_dns\':\'n\',\'audit_mount_point\':\'y\',\'audit_netstat\':\'s\',\'audit_software\':\'y\',\'audit_win32_product\':\'n\',\'create_file\':\'n\',\'debugging\':\'1\',\'details_to_lower\':\'y\',\'hide_audit_window\':\'n\',\'ldap\':\'\',\'ldap_seen_date\':\'2012-06-30\',\'ldap_seen_days\':\'0\',\'org_id\':\'\',\'ping_target\':\'n\',\'san_audit\':\'y\',\'san_discover\':\'n\',\'self_delete\':\'n\',\'strcomputer\':\'.\',\'strpass\':\'\',\'struser\':\'\',\'submit_online\':\'y\',\'system_id\':\'\',\'url\':\'http:\/\/10.210.26.10\/open-audit\/index.php\/input\/devices\',\'use_proxy\':\'n\',\'windows_user_work_1\':\'physicalDeliveryOfficeName\',\'windows_user_work_2\':\'company\'}"</td></tr>';
        $extra = "The field 'options' is stored as a JSON object. You should use single quotes in the JSON (the import routine will convert them).</p><p>For an example, use the web interface to create a script and then go to menu -> Admin -> Database and click on Scripts. Then export to CSV.";
        break;

    case "summaries":
        $values = "'name','org_id' and 'table column'";
        $sample = ' <tr><td>"org_id","name","table","column"</td></tr>
                    <tr><td>"1","Bios Manufacturers","bios","manufacturer"</td></tr>';
        break;

    case "users":
        $values = "'name','org_id','lang','active','roles' and 'orgs'";
        $sample = ' <tr><td>"name","org_id","full_name","password","email","language","roles","orgs"</td></tr>
                    <tr><td>"mark","1","Mark Unwin","password","mark.unwin@some_email.com","en","[\'admin\',\'org_admin\']","[1,2,3]"</td></tr>';
        $extra = "The fields 'roles' and 'orgs' are stored as JSON arrays. You should use single quotes in the JSON (the import routine will convert them).</p><p>For an example, use the web interface to create a user and then go to menu -> Admin -> Database and click on Users. Then export to CSV.";
        break;


}

$example = '<p>Below is an example of the required csv format.</p>
<p>The minimum required attributes for attributes are ' . $values . '.</p>
<p>You should not include the edited_by and edited_date fields. These will be automatically set.</p>
<p>If you include the "id" field <strong>and</strong> set it with a number, that item will be updated rather than created.</p>
<p>' . $extra . '</p>
<p>You should use a header line containing the names of the columns you wish to populate, then your data lines below that.</p>
<table class="table table-striped"><tbody>' . $sample . '</tbody></table>';







?>
<form action="<?php echo $this->response->meta->collection; ?>/import" method="post" enctype="multipart/form-data">
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
                            <input type="file" class="filestyle" id="file_import" name="file_import" data-icon="false" >
                            <p class="help-block"><?php echo __('Upload your csv file.'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="submit" class="col-sm-3 control-label"></label>
                        <div class="col-sm-8 input-group">
                            <button id="submit" name="submit" type="submit" class="btn btn-default"><?php echo __('Submit'); ?></button>
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
                <?php echo $example; ?>
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
                                    echo "<td class=\"wrap\">" . htmlspecialchars(str_replace(",", ", ", $column->values), REPLACE_FLAGS, CHARSET) . "</td>\n";
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
