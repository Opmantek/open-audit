<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
$connection_options = true;
if (php_uname('s') !== 'Windows NT' and empty($included['warning'])) {
    # Linux, no warning
    $connection_options = true;
}
if (php_uname('s') !== 'Windows NT' and !empty($included['warning'])) {
    # Linux and warning
    $connection_options = false;
}
if (php_uname('s') === 'Windows NT') {
    # Windows, never show because in top section
    $connection_options = false;
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header($meta->collection, $meta->icon, $user); ?>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>">
                        <div class="row">
                            <div class="col-md-6">
                            
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />
                                <input type="hidden" value="nmis" id="data[attributes][type]" name="data[attributes][type]" />

                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>

                                <?php if (php_uname('s') === 'Windows NT') { ?>
                                    <?= create_text_field('data[attributes][attributes][url]', __('URL'), $dictionary->attributes->create) ?>
                                    <?= create_text_field('data[attributes][attributes][username]', __('Username'), $dictionary->attributes->create) ?>
                                    <?= create_text_field('data[attributes][attributes][password]', __('Password'), $dictionary->attributes->create) ?>
                                <?php } ?>

                                <br>
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <label for="submit" class="form-label">&nbsp;</label>
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                        <button id="advanced_button" name="advanced_button" type="button" class="btn btn-default float-end" data-bs-toggle="collapse" data-bs-target="#advanced"><?= __('Advanced') ?></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="offset-2 col-8">
                                    <?php if (! empty($dictionary->about)) {
                                        echo "<h4 class=\"text-center\">About</h4><br>";
                                        echo html_entity_decode($dictionary->about);
                                    } ?>
                                    <h4 class="text-center">Fields</h4><br>
                                    <?php foreach (['name', 'description', 'org_id'] as $key) {
                                        echo "<code>$key:</code> " . html_entity_decode($dictionary->columns->{$key}) . "<br><br>";
                                    } ?>
                                </div>
                            </div>
                        </div>

                        <div class="collapse" id="advanced">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php if ($connection_options) { ?>
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8 text-center">
                                            <br>
                                            <?= __('Connection Options') ?>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="server" class="form-label"><?= __('Server Is') ?></label><br>
                                            <select class="form-select" name="server" id="server">
                                                <option value="local"><?= __('Local') ?></option>
                                                <option value="remote"><?= __('Remote') ?></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div id="url">
                                        <div class="row" style="padding-top:16px">
                                            <div class="offset-2 col-8">
                                                <label for="data[attributes][attributes][url]" class="form-label"><?= __('URL') ?></label><br>
                                                <input class="form-control" type="text" id="data[attributes][attributes][url]" name="data[attributes][attributes][url]" value="http://localhost:8042/omk/">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="username">
                                        <?= create_text_field('data[attributes][attributes][username]', __('Username'), $dictionary->attributes->create) ?>
                                    </div>
                                    <div id="password">
                                        <?= create_text_field('data[attributes][attributes][password]', __('Password'), $dictionary->attributes->create) ?>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="offset-2 col-8">
                                        <br><br>
                                        <?php
                                        echo "<code>server:</code> " . html_entity_decode($dictionary->columns->server) . "<br><br>";
                                        echo "<code>url:</code> " . html_entity_decode($dictionary->columns->attributes->url) . "<br><br>";
                                        echo "<code>username:</code> " . html_entity_decode($dictionary->columns->attributes->username) . "<br><br>";
                                        echo "<code>password:</code> " . html_entity_decode($dictionary->columns->attributes->password) . "<br><br>";
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8 text-center">
                                            <br>
                                            <?= __('Open-AudIT Options') ?>
                                            <hr>
                                        </div>
                                    </div>
                                    <?= create_select('data[attributes][create_internal_from_external]', __('Create Open-AudIT Devices from NMIS'), [], $dictionary->attributes->create) ?>
                                    <?= create_select('data[attributes][update_internal_from_external]', __('Update Open-AudIT Devices from NMIS'), [], $dictionary->attributes->create) ?>
                                    <?= create_select('data[attributes][discovery_run]', __('Run Discovery'), [], $dictionary->attributes->create) ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="offset-2 col-8">
                                        <br>
                                        <?php foreach (['create_internal_from_external', 'update_internal_from_external', 'discovery_run'] as $key) {
                                            echo "<code>$key:</code> " . html_entity_decode($dictionary->columns->{$key}) . "<br><br>";
                                        } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8 text-center">
                                            <br>
                                            <?= __('Open-AudIT Device Selection') ?>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="data[attributes][select_internal_type]" class="form-label"><?= __('Select') ?></label><br>
                                            <select class="form-select" name="data[attributes][select_internal_type]" id="data[attributes][select_internal_type]">
                                                <option value="none"><?= __('None') ?></option>
                                                <option value="attribute" selected><?= __('Attribute') ?></option>
                                                <option value="group"><?= __('Group') ?></option>
                                                <option value="query"><?= __('Query') ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="data[attributes][select_internal_attribute]" class="form-label"><?= __('Attribute') ?></label><br>
                                            <select class="form-select" name="data[attributes][select_internal_attribute]" id="data[attributes][select_internal_attribute]" aria-label="<?= __('Attribute') ?>">
                                            </select>
                                        </div>
                                    </div>
                                    <div id="select_internal_value">
                                    <?= create_text_field('data[attributes][select_internal_value]', __('Value'), $dictionary->attributes->create) ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="offset-2 col-8">
                                        <br>
                                        <?php foreach (['select_internal_type', 'select_internal_attribute', 'select_internal_value'] as $key) {
                                            echo "<code>$key:</code> " . html_entity_decode($dictionary->columns->{$key}) . "<br><br>";
                                        } ?>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8 text-center">
                                            <br>
                                            <?= __('NMIS Device Options') ?>
                                            <hr>
                                        </div>
                                    </div>
                                    <?= create_select('data[attributes][create_external_from_internal]', __('Create NMIS Devices from Open-AudIT'), [], $dictionary->attributes->create) ?>
                                    <?= create_select('data[attributes][update_external_from_internal]', __('Update NMIS Devices from Open-AudIT'), [], $dictionary->attributes->create) ?>
                                    <?= create_select('data[attributes][delete_external_from_internal]', __('Delete NMIS Devices if not in Open-AudIT'), [], $dictionary->attributes->create) ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="offset-2 col-8">
                                        <br>
                                        <?php foreach (['create_external_from_internal', 'update_external_from_internal', 'delete_external_from_internal'] as $key) {
                                            echo "<code>$key:</code> " . html_entity_decode($dictionary->columns->{$key}) . "<br><br>";
                                        } ?>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8 text-center">
                                            <br>
                                            <?= __('NMIS Device Selection') ?>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="data[attributes][select_external_type]" class="form-label"><?= __('Select') ?></label><br>
                                            <select class="form-select" name="data[attributes][select_external_type]" id="data[attributes][select_external_type]">
                                                <option value="group" selected><?= __('All') ?></option>
                                                <option value="none"><?= __('None') ?></option>
                                                <option value="attribute"><?= __('Attribute') ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="select_external_attribute">
                                        <div class="row" style="padding-top:16px;">
                                            <div class="offset-2 col-8" style="position:relative;">
                                                <label for="data[attributes][select_external_attribute]" class="form-label"><?= __('Attribute') ?></label><br>
                                                <select class="form-select" name="data[attributes][select_external_attribute]" id="data[attributes][select_external_attribute]" aria-label="<?= __('Attribute') ?>">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="select_external_value">
                                    <?= create_text_field('data[attributes][select_external_value]', __('Value'), $dictionary->attributes->create) ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="offset-2 col-8">
                                        <br>
                                        <?php foreach (['select_external_type', 'select_external_attribute', 'select_external_value'] as $key) {
                                            echo "<code>$key:</code> " . html_entity_decode($dictionary->columns->{$key}) . "<br><br>";
                                        } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="offset-1 col-10">
                                    <hr>
                                    <h3 class="text-center"><?= __('Fields') ?></h3>
                                    <table class="table" id="fields">
                                        <thead>
                                            <tr>
                                                <th><?= __('Open-AudIT Field Name') ?></th>
                                                <th id="label_external_field_name"><?= __('NMIS Field Name') ?></th>
                                                <th id="label_external_field_type"><?= __('NMIS Field Type') ?></th>
                                                <th><?= __('Priority') ?></th>
                                                <th><?= __('Default Value') ?></th>
                                                <th><?= __('Match') ?></th>
                                                <th class="text-center"><?= __('Delete') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-sm btn-success" id="button_add_field" name="button_add_field" title="<?= __('Add Field') ?>">Add Field</button>
                                    <hr>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        $("#data\\[attributes\\]\\[name\\]").focus();
        $("#data\\[attributes\\]\\[select_internal_value\\]").val("y");
        $("#data\\[attributes\\]\\[delete_external_from_internal\\]").val("n");

        $("#fields tbody").empty();

        <?php
        $oac_reports = "queries = \"";
        foreach ($included['queries'] as $key) {
            $oac_reports = $oac_reports . "<option value=\\\"" . $key->{'id'} . "\\\">" . $key->{'attributes'}->{'name'} . "<\\/option>";
        }
        $oac_reports = $oac_reports . "\";";
        echo $oac_reports;

        $oac_groups = "groups = \"";
        foreach ($included['groups'] as $key) {
            $oac_groups = $oac_groups . "<option value=\\\"" . $key->{'id'} . "\\\">" . $key->{'attributes'}->{'name'} . "<\\/option>";
        }
        $oac_groups = $oac_groups . "\";";
        echo $oac_groups;

        $attributes = "attributes = \"";
        $attributes = $attributes . "<option value=\\\"nmis_manage\\\" selected>nmis_manage<\\/option>";
        foreach ($included['devices_fields'] as $attribute) {
            $attributes = $attributes . "<option value=\\\"" . $attribute . "\\\">" . $attribute . "<\\/option>";
        }
        $attributes = $attributes . "\";";
        echo $attributes;
        ?>

        $('#data\\[attributes\\]\\[select_internal_attribute\\]').append(attributes);
        $("label[for='data\\[attributes\\]\\[select_internal_attribute\\]']").text("<?= __('Attribute') ?>");
        $('#select_internal_value').show();

        $('#select_external_attribute').hide();
        $('#select_external_value').hide();

        $('#advanced').on('hidden.bs.collapse', function () {
            $("#advanced_button").html('<?= __('Advanced') ?>');
        });

        $('#advanced').on('shown.bs.collapse', function () {
            $("#advanced_button").html('<?= __('Basic') ?>');
        });

        var nmis_fields="[{\"default_value\":\"\",\"external_field_name\":\"configuration.version\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.snmp_version\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.community\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_community\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.username\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_v3_security_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.authpassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_v3_authentication_passphrase\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.authprotocol\",\"external_field_type\":\"lower\",\"internal_field_name\":\"credentials.snmp_v3_authentication_protocol\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.privpassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.snmp_v3_privacy_passphrase\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.privprotocol\",\"external_field_type\":\"lower\",\"internal_field_name\":\"credentials.snmp_v3_privacy_protocol\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.wmiusername\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.windows_username\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.wmipassword\",\"external_field_type\":\"text\",\"internal_field_name\":\"credentials.windows_password\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.businessService\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_business_service\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"server_name\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_poller\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.notes\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_notes\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"y\",\"external_field_name\":\"\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_manage\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.sysDescr\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.sysDescr\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"Default Location\",\"external_field_name\":\"configuration.location\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.locations_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.customer\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_customer\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"1\",\"external_field_name\":\"configuration.active\",\"external_field_type\":\"bool_one_zero\",\"internal_field_name\":\"fields.nmis_active\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"1\",\"external_field_name\":\"configuration.collect\",\"external_field_type\":\"bool_one_zero\",\"internal_field_name\":\"fields.nmis_collect\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"automatic\",\"external_field_name\":\"configuration.model\",\"external_field_type\":\"text\",\"internal_field_name\":\"fields.nmis_model\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"wan\",\"external_field_name\":\"configuration.netType\",\"external_field_type\":\"text\",\"internal_field_name\":\"fields.nmis_netType\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"true\",\"external_field_name\":\"configuration.ping\",\"external_field_type\":\"bool\",\"internal_field_name\":\"fields.nmis_ping\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"161\",\"external_field_name\":\"configuration.port\",\"external_field_type\":\"integer\",\"internal_field_name\":\"fields.nmis_port\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"name\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"name\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.display_name\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.name\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"Open-AudIT\",\"external_field_name\":\"configuration.group\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_group\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.host\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.ip\",\"matching_attribute\":\"y\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"uuid\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.omk_uuid\",\"matching_attribute\":\"y\",\"priority\":\"external\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.roleType\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_role\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"configuration.serviceStatus\",\"external_field_type\":\"capitalise\",\"internal_field_name\":\"devices.environment\",\"matching_attribute\":\"n\",\"priority\":\"internal\"},{\"default_value\":\"\",\"external_field_name\":\"cluster_id\",\"external_field_type\":\"text\",\"internal_field_name\":\"devices.nmis_poller_uuid\",\"matching_attribute\":\"n\",\"priority\":\"external\"},{\"default_value\" : \"1\",\"matching_attribute\" : \"n\",\"external_field_name\" : \"activated.NMIS\",\"priority\" : \"internal\",\"internal_field_name\" : \"fields.activated_NMIS\",\"external_field_type\" : \"integer\"},{\"default_value\" : \"1\",\"matching_attribute\" : \"n\",\"external_field_name\" : \"activated.opConfig\",\"priority\" : \"internal\",\"external_field_type\" : \"integer\",\"internal_field_name\" : \"fields.activated_opConfig\"},{\"default_value\" : \"1\",\"matching_attribute\" : \"n\",\"external_field_name\" : \"activated.opEvents\",\"internal_field_name\" : \"fields.activated_opEvents\",\"priority\" : \"internal\",\"external_field_type\" : \"integer\"}]";
        var field_count = 0;
        nmis_fields = JSON.parse(nmis_fields); 
        nmis_fields.forEach((field, index) => {
            var row = "                                    <tr id=\"fields_" + field_count + "\">\
                                            <td><input type=\"text\" class=\"form-control\" id=\"data[attributes][fields][" + field_count + "][internal_field_name]\" name=\"data[attributes][fields][" + field_count + "][internal_field_name]\" value=\"" + field.internal_field_name + "\"  aria-label=\"<?= __('Internal Field Name') ?>\"><\/td>\
                                            <td><input type=\"text\" class=\"form-control\" id=\"data[attributes][fields][" + field_count + "][external_field_name]\" name=\"data[attributes][fields][" + field_count + "][external_field_name]\" value=\"" + field.external_field_name + "\"  aria-label=\"<?= __('External Field Name') ?>\"><\/td>\
                                            <td><select class=\"form-select\" name=\"data[attributes][fields][" + field_count + "][external_field_type]\" id=\"data[attributes][fields][" + field_count + "][external_field_type]\"  aria-label=\"<?= __('External Field Type') ?>\">";
            row = row + "<option value=\"text\"";
            if (field.external_field_type == 'text') {
                row = row + " selected";
            }
            row = row + "><?= __('Text') ?><\/option>";

            row = row + "<option value=\"integer\"";
            if (field.external_field_type == 'integer') {
                row = row + " selected";
            }
            row = row + "><?= __('Integer') ?><\/option>";

            row = row + "<option value=\"bool\"";
            if (field.external_field_type == 'bool') {
                row = row + " selected";
            }
            row = row + "><?= __('Boolean') ?><\/option>";

            row = row + "<option value=\"bool_one_zero\"";
            if (field.external_field_type == 'bool_one_zero') {
                row = row + " selected";
            }
            row = row + "><?= __('Boolean 1/0') ?><\/option>";

            row = row + "<option value=\"bool_y_n\"";
            if (field.external_field_type == 'bool_y_n') {
                row = row + " selected";
            }
            row = row + "><?= __('Boolean y/n') ?><\/option>";



            row = row + "<option value=\"capitalise\"";
            if (field.external_field_type == 'capitalise') {
                row = row + " selected";
            }
            row = row + "><?= __('Capitalise') ?><\/option>";

            row = row + "<option value=\"lower\"";
            if (field.external_field_type == 'lower') {
                row = row + " selected";
            }
            row = row + "><?= __('Lower Case') ?><\/option>";

            row = row + "<option value=\"upper\"";
            if (field.external_field_type == 'upper') {
                row = row + " selected";
            }
            row = row + "><?= __('Upper Case') ?><\/option>";

            row = row + "<option value=\"datetime_now\"";
            if (field.external_field_type == 'datetime_now') {
                row = row + " selected";
            }
            row = row + "><?= __('DateTime Now') ?><\/option>";

            row = row + "<option value=\"datetime_Y-m-d H:i:s\"";
            if (field.external_field_type == 'datetime_Y-m-d H:i:s') {
                row = row + " selected";
            }
            row = row + "><?= __('DateTime Y-M-D H:M:S') ?><\/option>";

            row = row + "<option value=\"date_now\"";
            if (field.external_field_type == 'date_now') {
                row = row + " selected";
            }
            row = row + "><?= __('Date Now') ?><\/option>";

            row = row + "<option value=\"date_Y-m-d\"";
            if (field.external_field_type == 'date_Y-m-d') {
                row = row + " selected";
            }
            row = row + "><?= __('Date Y-M-D') ?><\/option>";

            row = row + "<option value=\"date_m-d-Y\"";
            if (field.external_field_type == 'date_m-d-Y') {
                row = row + " selected";
            }
            row = row + "><?= __('Date M-D-Y') ?><\/option>";

            row = row + "<option value=\"date_d-m-Y\"";
            if (field.external_field_type == 'date_d-m-Y') {
                row = row + " selected";
            }
            row = row + "><?= __('Date D-M-Y') ?><\/option>";





            row = row + "<\/select></td>\
                                            <td><select class=\"form-select\" name=\"data[attributes][fields][" + field_count + "][priority]\" id=\"data[attributes][fields][" + field_count + "][priority]\" aria-label=\"<?= __('Priority') ?>\"><option value=\"internal\"";
            if (field.priority == 'internal') {
                row = row + " selected";
            }
            row = row + "><?= __('Open-AudIT') ?><\/option><option value=\"external\"";
            if (field.priority == 'external') {
                row = row + " selected";
            }
            row = row + "><?= __('External') ?><\/option><\/select></td>\
                                            <td><input type=\"text\" class=\"form-control\" id=\"data[attributes][fields][" + field_count + "][default_value]\" name=\"data[attributes][fields][" + field_count + "][default_value]\" value=\"" + field.default_value + "\" aria-label=\"<?= __('Default Value') ?>\"><\/td>";

            row = row + "<td><select class=\"form-select\" name=\"data[attributes][fields][" + field_count + "][matching_attribute]\" id=\"data[attributes][fields][" + field_count + "][matching_attribute]\" aria-label=\"<?= __('Matching Attribute') ?>\">";
            row = row + "<option value=\"y\"";
            if (field.matching_attribute == 'y') {
                row = row + " selected";
            }
            row = row + "><?= __('Yes') ?><\/option>";
            row = row + "<option value=\"n\"";
            if (field.matching_attribute == 'n') {
                row = row + " selected";
            }
            row = row + "><?= __('No') ?><\/option>";
            row = row + "<\/select></td>";

            row = row + "                                        <td class=\"text-center\"><button type=\"button\" data-row=\"#fields_" + field_count + "\" class=\"del_input btn btn-sm btn-danger\" title=\"<?= __('Delete') ?>\" data-warn=\"y\"><i class=\"fa fa-trash\" aria-hidden=\"true\">&nbsp;<\/i><\/button><\/td>";

            row = row + "</tr>";

            $('#fields > tbody:last-child').append(row);
            field_count = field_count + 1;
        });

        $('#button_add_field').click(function (e) {
            var row = "                                    <tr id=\"fields_" + field_count + "\">\
                                            <td><input type=\"text\" class=\"form-control\" id=\"data[attributes][fields][" + field_count + "][internal_field_name]\" name=\"data[attributes][fields][" + field_count + "][internal_field_name]\" value=\"\"><\/td>\
                                            <td><input type=\"text\" class=\"form-control\" id=\"data[attributes][fields][" + field_count + "][external_field_name]\" name=\"data[attributes][fields][" + field_count + "][external_field_name]\" value=\"\"><\/td>\
                                            <td><select class=\"form-select\" name=\"data[attributes][fields][" + field_count + "][external_field_type]\" id=\"data[attributes][fields][" + field_count + "][external_field_type]\">\
                                                <option value=\"text\" selected><?= __('Text') ?><\/option>\
                                                <option value=\"integer\">      <?= __('Integer') ?><\/option>\
                                                <option value=\"bool\">         <?= __('Boolean') ?><\/option>\
                                                <option value=\"bool_one_zero\"><?= __('Boolean 1/0') ?><\/option>\
                                                <option value=\"capitalise\">   <?= __('Capitalise') ?><\/option>\
                                                <option value=\"lower\">        <?= __('Lower Case') ?><\/option>\
                                                <option value=\"upper\">        <?= __('Upper Case') ?><\/option>\
                                                <option value=\"datetime_now\"> <?= __('DateTime Now') ?><\/option>\
                                                <option value=\"datetime_Y-m-d H:i:s\"><?= __('DateTime Y-M-D H:M:S') ?><\/option>\
                                                <option value=\"date_now\">     <?= __('Date Now') ?><\/option>\
                                                <option value=\"date_Y-m-d\">   <?= __('Date Y-M-D') ?><\/option>\
                                                <option value=\"date_m-d-Y\">   <?= __('Date M-D-Y') ?><\/option>\
                                                <option value=\"date_d-m-Y\">   <?= __('Date D-M-Y') ?><\/option>\
                                                <\/select>\
                                            <td><select class=\"form-select\" name=\"data[attributes][fields][" + field_count + "][priority]\" id=\"data[attributes][fields][" + field_count + "][priority]\"><option value=\"internal\" selected><?= __('Internal') ?><\/option><option value=\"external\"><?= __('External') ?><\/option><\/select>\
                                            <td><input type=\"text\" class=\"form-control\" id=\"data[attributes][fields][" + field_count + "][default_value]\" name=\"data[attributes][fields][" + field_count + "][default_value]\" value=\"\"><\/td>\
                                            <td><select class=\"form-select\" name=\"data[attributes][fields][" + field_count + "][matching_attribute]\" id=\"data[attributes][fields][" + field_count + "][matching_attribute]\"><option value=\"y\"><?= __('Yes') ?><\/option><option value=\"n\" selected><?= __('No') ?><\/option><\/select></td>\
                                            <td class=\"text-center\"><button type=\"button\" data-row=\"#fields_" + field_count + "\" class=\"del_input btn btn-sm btn-danger\" title=\"<?= __('Delete') ?>\" data-warn=\"n\"><i class=\"fa fa-trash\" aria-hidden=\"true\">&nbsp;<\/i><\/button><\/td>\
                                        <\/tr>";
            $('#fields > tbody:last-child').append(row);
            field_count = field_count + 1;
        });

        for (i = 0; i < field_count; i++) {
            if ($("#data\\[attributes\\]\\[fields\\]\\[" + i + "\\]\\[external_field_name\\]").val() > "" && $("#data\\[attributes\\]\\[fields\\]\\[" + i + "\\]\\[external_field_name\\]").val() !== 'name') {
                $('#data\\[attributes\\]\\[select_external_attribute\\]').append("<option value=\"" + $("#data\\[attributes\\]\\[fields\\]\\[" + i + "\\]\\[external_field_name\\]").val() + "\">" + $("#data\\[attributes\\]\\[fields\\]\\[" + i + "\\]\\[external_field_name\\]").val() + "</option>");
            }
        }
        $('#data\\[attributes\\]\\[select_external_attribute\\]').append("<option value=\"name\">name</option>");

        $('#data\\[attributes\\]\\[select_internal_type\\]').change(function (e) {
            $('#data\\[attributes\\]\\[select_internal_attribute\\]').empty();
            if ($(this).val() == 'query') {
                $('#data\\[attributes\\]\\[select_internal_attribute\\]').append(queries);
                $("label[for='data\\[attributes\\]\\[select_internal_attribute\\]']").text("<?= __('Query') ?>");
                $('#select_internal_value').hide();

            }
            if ($(this).val() == 'group') {
                $('#data\\[attributes\\]\\[select_internal_attribute\\]').append(groups);
                $("label[for='data\\[attributes\\]\\[select_internal_attribute\\]']").text("<?= __('Group') ?>");
                $('#select_internal_value').hide();
            }
            if ($(this).val() == 'attribute') {
                $('#data\\[attributes\\]\\[select_internal_attribute\\]').append(attributes);
                $("label[for='data\\[attributes\\]\\[select_internal_attribute\\]']").text("<?= __('Attribute') ?>");
                $('#select_internal_value').show();
            }
        });

        $('#data\\[attributes\\]\\[select_external_type\\]').change(function (e) {
            if ($(this).val() == 'attribute') {
                $('#select_external_attribute').show();
                $('#select_external_value').show();
            }
            if ($(this).val() == 'all') {
                $('#data\\[attributes\\]\\[select_external_attribute\\]').val("");
                $('#data\\[attributes\\]\\[select_external_value\\]').val("");
                $('#select_external_attribute').hide();
                $('#select_external_value').hide();
            }
            if ($(this).val() == 'none') {
                $('#data\\[attributes\\]\\[select_external_attribute\\]').val("");
                $('#data\\[attributes\\]\\[select_external_value\\]').val("");
                $('#select_external_attribute').hide();
                $('#select_external_value').hide();
            }
        });

        $(document).on('click', '.del_input', function (e) {
            console.log($(this).attr("data-warn"));
            if ($(this).attr("data-warn") == "y") {
                if (confirm('This is a default field, are you sure?') !== true) {
                    return;
                }
            }
            $($(this).attr("data-row")).remove();
        });

        $("#data\\[attributes\\]\\[select_external_attribute\\]").focus(function() {
            //
        }).blur(function() {
            val = $(this).val();
            found = false;
            for (i = 0; i < field_count; i++) {
                if (val == $("#data\\[attributes\\]\\[fields\\]\\[" + i + "\\]\\[external_field_name\\]").val()) {
                    found = true;
                }
            }
            if (! found) {
                alert("Warning, " + val + " is not an external field.");
            }
        });

        $("#data\\[attributes\\]\\[type\\]").change(function (e) {
            value = $("#data\\[attributes\\]\\[type\\] option:selected").text();
            $("#label_create_internal_from_external").html('Create Open-AudIT Devices from ' + value);
            $("#label_update_internal_from_external").html('Update Open-AudIT Devices from ' + value);
            $("#label_external_device_options").html(value + ' Device Options');

            $("#label_create_external_from_internal").html('Create ' + value + ' Devices from Open-Audit');
            $("#label_update_external_from_internal").html('Update ' + value + ' Devices from Open-Audit');
            $("#label_delete_external_from_internal").html('Delete ' + value + ' Devices if not in Open-Audit');

            $("#label_external_device_selection").html(value + ' Device Selection');

            $("#label_external_field_name").html(value + ' Field Name');
            $("#label_external_field_type").html(value + ' Field Type');

            if (value !== 'NMIS') {
                $("#url").show();
                $("#username").show();
                $("#password").show();
                $("#server_is").hide();
            } else {
                $("#server_is").show();
                if ($("#server option:selected").text() == 'Local') {
                    $("#url").hide();
                    $("#username").hide();
                    $("#password").hide();
                } else {
                    $("#url").show();
                    $("#username").show();
                    $("#password").show();
                }
            }

        });

        if ($("#server option:selected").text() == 'Local') {
            $("#url").hide();
            $("#username").hide();
            $("#password").hide();
        }

        $("#server").change(function (e) {
            $("#url").toggle();
            $("#username").toggle();
            $("#password").toggle();
        });
    });
}
</script>
