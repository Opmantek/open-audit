<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
$collection = $meta->collection;
$values = implode(', ', $data->attributes->create);
$sample = '';
$extra = '';

if ($collection === "attributes") {
    $sample = ' <tr><td>"resource","type","name","value"</td></tr>
                <tr><td>"devices","class","Virtual Device","virtual device"</td></tr>
                <tr><td>"devices","class","Special Class","special class"</td></tr>
                <tr><td>"devices","status","My Status","my status"</td></tr>
                <tr><td>"devices","environment","Super Secure","super secure"</td></tr>';
}

if ($collection === "connections") {
    $sample = ' <tr><td>"name","org_id","provider","service_type","product_name","service_identifier"</td></tr>
                <tr><td>"My Home Connection","1","Telstra","Cable","Bigpond Cable Extreme","123456"</td></tr>
                <tr><td>"The Office Connection","1","Telstra","Cable","Bigpond Cable Extreme","567890"</td></tr>';
}

if ($collection === "credentials") {
    $values .= " and the credentials details (see below).";
    $sample = ' <tr><td>"name","org_id","type","credentials.community","credentials.username","credentials.password"</td></tr>
                <tr><td>"Public SNMP","1","snmp","public","",""</td></tr>
                <tr><td>"My SSH","1","ssh","","my_user","my_password"</td></tr>
                <tr><td>"Windows Creds","1","windows","","my_win_user@open-audit.com","my_win_password"</td></tr>';
    $extra = "The field 'credentials' is stored as an encrypted JSON object. You should use the field names of 'credentials.attribute name'. For an example, an SNMP community string would be 'credentials.community'.</p><p>For an example, use the web interface to create a credential set and then go to menu -> Admin -> Database -> List Tables and click on Credentials. Then export to CSV.</p><p>Valid credentials attributes are: community, username, password, domain, ssh_key, authentication_passphrase, authentication_protocol, privacy_passphrase, privacy_protocol, security_level, security_name.";
}

if ($collection === "devices") {
    $sample = ' <tr><td>"name","org_id","type","ip"</td></tr>
                <tr><td>"mail","1","computer","192.168.1.110"</td></tr>
                <tr><td>"router","1","router","192.168.1.1"</td></tr>
                <tr><td>"laser","1","printer","192.168.1.10"</td></tr>';
}

if ($collection === "discoveries") {
    $sample = '<tr><td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">"name","org_id","type","subnet","scan_options.id","match_options.match_dbus","match_options.match_fqdn","match_options.match_hostname","match_options.match_hostname_dbus","match_options.match_hostname_serial","match_options.match_ip","match_options.match_mac","match_options.match_mac_vmware","match_options.match_serial","match_options.match_serial_type","match_options.match_uuid","scan_options.exclude_ip","scan_options.exclude_tcp_ports","scan_options.exclude_udp_ports","scan_options.filtered","scan_options.nmap_tcp_ports","scan_options.nmap_udp_ports","scan_options.ping","scan_options.service_version","scan_options.tcp_ports","scan_options.timing","scan_options.udp_ports"</td></tr>
               <tr><td>"My Test Discovery","1","subnet","192.168.1.0/24","1","n","y","y","y","y","n","n","n","y","y","y","","","","n","0","0","y","n","22,135,62078","4","161"</td></tr>';
    $extra = "The fields 'scan_options' and 'match_options' are stored as a JSON object. You should use the field names of 'scan_options.attribute_name'. For an example, ping would be 'scan_options.ping'.</p><p>For an example, use the web interface to create a discovery and then go to menu -> Admin -> Database -> List Tables and click on Discoveries. Then export to CSV.</p><p>";
}

if ($collection === "fields") {
    $sample = ' <tr><td>"name","org_id","group_id","type","values","placement"</td></tr>
                <tr><td>"My Special Field","1","1","varchar","","custom"</td></tr>';
}

if ($collection === "files") {
    $sample = ' <tr><td>"name","org_id","path","description"</td></tr>
                <tr><td>"TMP on Linux","1","/tmp/","Any files in the /tmp dir on Linux machines"</td></tr>
                <tr><td>"Program File on Windows","1","c:\\Program Files\\","Any files in the Program Files dir on Windows machines"</td></tr>';
}

if ($collection === "groups") {
    $sample = ' <tr><td>"org_id","name","description","sql","expose"</td></tr>
                <tr><td>"1","Test Group","Ubuntu Machines","SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND os_family LIKE \'Ubuntu\'","y"</td></tr>';
}

if ($collection === "auth") {
    $sample = ' <tr><td>"name","org_id","lang","host","domain","refresh","use_roles"</td></tr>
                <tr><td>"My LDAP Server","1","en","192.168.1.120","open-audit.com","24","y"</td></tr>';
}

if ($collection === "licenses") {
    $sample = ' <tr><td>"name","org_id","org_descendants","purchase_count","match_string"</td></tr>
                <tr><td>"Microsoft Office","1","y","1000","Microsoft Office Professional%"</td></tr>
                <tr><td>"Microsoft PowerPoint","1","y","100","%PowerPoint%"</td></tr>';
}

if ($collection === "locations") {
    $sample = ' <tr><td>"name","org_id","type","address"</td></tr>
                <tr><td>"My Office","1","Office","9 Bangalow Drive"</td></tr>';
}

if ($collection === "networks") {
    $sample = ' <tr><td>"name","org_id","network","description"</td></tr>
                <tr><td>"My Office","1","192.168.1.0/24","The LAN at our office"</td></tr>';
}

if ($collection === "orgs") {
    $sample = ' <tr><td>"name","parent_id","description"</td></tr>
                <tr><td>"Finance Dept","1","The Finance and Accounting Department"</td></tr>
                <tr><td>"Finance Servers","1","The Servers that belong to the Finance Department"</td></tr>
                <tr><td>"IT Dept","1","The IT Department"</td></tr>
                <tr><td>"IT Servers","1","The Servers that belong to the IT Department"</td></tr>';
}

if ($collection === "packages") {
    $sample = ' <tr><td>"name","org_id","software_name","type","os","description"</td></tr>
                <tr><td>"WinZip","1","WinZIP%","approved","Windows","Winzip archiver."</td></tr>';
}

if ($collection === "queries") {
    $sample = ' <tr><td>"name","org_id","menu_display","menu_category",sql"</td></tr>
                <tr><td>"Linux Device Hardware","1","y","Hardware",SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.manufacturer AS `devices.manufacturer`, devices.model AS `devices.model`, devices.serial AS `devices.serial`, devices.os_family AS `devices.os_family`, devices.memory_count AS `devices.memory_count`, devices.form_factor AS `devices.form_factor`, processor.description AS `processor.description` FROM devices LEFT JOIN processor ON (processor.device_id = devices.id AND processor.current = \'y\') WHERE @filter AND devices.os_group = \'Linux\' ORDER BY devices.name"</td></tr>
                <tr><td>"Hardware - Device","1","y","Hardware",SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.domain AS `devices.domain`, devices.ip AS `devices.ip`, devices.manufacturer AS `devices.manufacturer`, devices.model AS `devices.model`, devices.serial AS `devices.serial`, devices.os_family AS `devices.os_family`, devices.asset_number AS `devices.asset_number` FROM devices WHERE @filter"</td></tr>';
}

if ($collection === "roles") {
    $sample = ' <tr><td>"name","description","permissions"</td></tr>
                <tr><td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">"admin","This role can change global options.","{\'attributes\':\'crud\',\'auth\':\'crud\',\'baselines\':\'crud\',\'configuration\':\'crud\',\'database\':\'crud\',\'errors\':\'r\',\'groups\':\'crud\',\'logs\':\'crud\',\'nmis\':\'crud\',\'queries\':\'crud\',\'roles\':\'crud\',\'search\':\'crud\',\'sessions\':\'crud\',\'summaries\':\'crud\'}"</td></tr>';
    $extra = "The field 'permissions' is stored as a JSON object. You should use single quotes in the JSON (the import routine will convert them).</p><p>For an example, use the web interface to create a role and then go to menu -> Admin -> Database -> List Tables and click on Roles. Then export to CSV.";
}

if ($collection === "scripts") {
    $sample = ' <tr><td>"name","org_id","based_on","options.debugging","options.create_file","options.submit_online"</td></tr>
                <tr><td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">"New Audit Windows","1","audit_windows.vbs","1","y","y"</td></tr>';
    $extra = "The field 'options' is stored as a JSON object. You should use single quotes in the JSON (the import routine will convert them).</p><p>For an example, use the web interface to create a script and then go to menu -> Admin -> Database -> List Tables and click on Scripts. Then export to CSV.";
}

if ($collection === "summaries") {
    $sample = ' <tr><td>"org_id","name","table","column","menu_display","menu_category"</td></tr>
                <tr><td>"1","Bios Manufacturers","bios","manufacturer","y","Hardware"</td></tr>';
}

if ($collection === "tasks") {
    $sample = ' <tr><td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">"name","org_id","description","enabled","type","sub_resource_id","first_run","minute","hour","day_of_month","month","day_of_week","uuid","options"</td></tr>
                <tr><td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">"My Test Discovery","1","This is a test for discovering my local subnet each weekday at 10:05 am.","y","discoveries","1","2017-06-01","5","10","*","*","1,2,3,4,5","' . $config->uuid . '"</td></tr>
                <tr><td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">"New Devices","1","Email me the new devices report each week.","y","reports","10002","2017-06-01","5","9","*","*","5","' . $config->uuid . '","{\'email_address\':\'my.email.address@open-audit.com\',\'format\':\'csv\'}"</td></tr>';
}

if ($collection === "users") {
    $sample = ' <tr><td>"name","org_id","full_name","password","email","language","roles","orgs"</td></tr>
                <tr><td>"mark","1","Mark Unwin","password","mark.unwin@some_email.com","en","[\'admin\',\'org_admin\']","[1,2,3]"</td></tr>';
    $extra = "The fields 'roles' and 'orgs' are stored as JSON arrays. You should use single quotes in the JSON (the import routine will convert them).</p><p>For an example, use the web interface to create a user and then go to menu -> Admin -> Database -> List Tables and click on Users. Then export to CSV.";
}

$example = '<br><h4>Example</h4><p>Below is an example of the required csv format.<br><br>
The minimum required attributes for attributes are ' . $values . '.<br><br>
You should not include the edited_by and edited_date fields. These will be automatically set.<br><br>
If you include the "id" field <strong>and</strong> set it with a number, that item will be updated rather than created.<br><br>';
if ($extra !== '') {
    $example .= $extra . '<br><br>';
}
$example .= 'You should use a header line containing the names of the columns you wish to populate, then your data lines below that.<br><br>
<table class="table ' . $GLOBALS['table'] . ' table-striped table-hover"><tbody>' . $sample . '</tbody></table>';
?>
<main class="container-fluid">
    <div class="card">
        <div class="card-header">
            <?= create_card_header($meta->collection, $meta->icon); ?>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal" method="post" action="<?= url_to($meta->collection.'Import') ?>" accept-charset="utf-8" enctype="multipart/form-data">
                        <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />
                        <div class="row" style="padding-top:16px">
                            <div class="offset-2 col-8">
                                <label for="file_import" class="form-label"><?= __('File Import') ?></label><br>
                                <input class="form-control" type="file" id="file_import" name="file_import" required />
                            </div>
                        </div>
                        <div class="row" style="padding-top:16px;">
                            <div class="offset-2 col-8">
                                <button id="submit" name="submit" type="submit" class="btn btn-primary" aria-label="<?= __('Submit') ?>"><?= __('Submit') ?></button>
                            </div>
                        </div>
                        <div class="row" style="padding-top:16px">
                            <div class="offset-2 col-8">
                                <?= $example ?>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <div class="offset-2 col-8">
                        <?php if ($dictionary->about) { ?>
                            <h4 class="text-center"><?= __('About') ?></h4><br>
                            <?= $dictionary->about ?>
                        <?php } ?>
                        <?php if ($dictionary->notes) { ?>
                            <h4 class="text-center"><?= __('Notes') ?></h4><br>
                            <?= $dictionary->notes ?>
                        <?php } ?>
                        <?php foreach ($data->columns as $column => $value) { ?>
                            <code><?= $column ?>: </code><?= $value ?><br><br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="card">
        <div class="card-header">
            <div class="col-3 clearfix">
                <div class="btn-group btn-group-sm" role="group" aria-label="">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-dark oa-card-button"><span class="fa fa-database" style="margin-right:10px;" aria-hidden="true"></span>Columns</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
    <div class="row">
        <div class="offset-1 col-10">
            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover">
                <thead>
                    <tr>
                        <th><?= __('Name') ?></th>
                        <th><?= __('Type') ?></th>
                        <th><?= __('Default') ?></th>
                        <th><?= __('Max Length') ?></th>
                        <th><?= __('Primary Key') ?></th>
                        <th><?= __('Valid Values') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data->attributes->fieldsMeta as $column) {
                        if (!empty($column->values)) {
                            $column->values = str_replace(',', ', ', $column->values);
                        } ?>
                    <tr>
                        <td><?= $column->name ?></td>
                        <td><?= $column->type ?></td>
                        <td><?= $column->default ?></td>
                        <td><?= $column->max_length ?></td>
                        <td><?= $column->primary_key ?></td>
                        <td><?= @$column->values ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
