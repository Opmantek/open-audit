<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header($meta->collection, $meta->icon, $user); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />

                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][based_on]" class="form-label"><?= __('Based On') ?> <span style="color: #dc3545;">*</span></label><br>
                                        <select class="form-select" name="data[attributes][based_on]" id="data[attributes][based_on]">
                                            <option value='' label=' '></option>
                                            <option value='audit_aix.sh'><?= __('Audit AIX') ?></option>
                                            <option value='audit_esxi.sh'><?= __('Audit ESXi') ?></option>
                                            <option value='audit_linux.sh'><?= __('Audit Linux') ?></option>
                                            <option value='audit_osx.sh'><?= __('Audit OSX') ?></option>
                                            <option value='audit_windows.vbs'><?= __('Audit Windows') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <label for="submit" class="form-label">&nbsp;</label>
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8 text-center">
                                        <br>
                                        <?= __('Options') ?>
                                        <hr>
                                    </div>
                                </div>
                                    <div class="row" style="padding-top:16px;">
                                    <div id="options">
                                    </div>
                                </div>

                                <br>
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8 text-center">
                                        <br>
                                        <?= __('Files') ?>
                                        <hr>
                                    </div>
                                    <div class="offset-2 col-8">
                                        <div id="files">
                                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <td><?= __('Select') ?></td>
                                                        <td><?= __('Description') ?></td>
                                                        <td><?= __('Path') ?></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if (is_array($included['files'])) {
                                                    foreach ($included['files'] as $item) { ?>
                                                    <tr>
                                                        <!--<td><input type="checkbox" value="<?= $item->attributes->path ?>" id="data[attributes][options][files][<?= $item->attributes->id ?>]" title="data[attributes][options][files][<?= $item->attributes->id ?>]" name="data[attributes][options][files][<?= $item->attributes->id ?>]" checked></td>-->
                                                        <td><input type="checkbox" value="<?= $item->attributes->path ?>" id="files[<?= $item->attributes->id ?>]" title="files[<?= $item->attributes->id ?>]" name="files[<?= $item->attributes->id ?>]" checked disabled></td>
                                                        <td><?= $item->attributes->description ?></td>
                                                        <td><?= $item->attributes->path ?></td>
                                                    </tr>
                                                    <?php }
                                                } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="offset-2 col-8">
                                <?php if (! empty($dictionary->about)) {
                                    echo "<h4 class=\"text-center\">About</h4><br>";
                                    echo html_entity_decode($dictionary->about);
                                } ?>
                                <?php if (! empty($dictionary->notes)) {
                                    echo "<h4 class=\"text-center\">Notes</h4><br>";
                                    echo html_entity_decode($dictionary->notes);
                                } ?>
                                <h4 class="text-center">Fields</h4><br>
                                <?php foreach ($dictionary->columns as $key => $value) {
                                    echo "<code>$key:</code> " . html_entity_decode($value) . "<br><br>";
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#data\\[attributes\\]\\[name\\]").focus();
        $('#data\\[attributes\\]\\[org_id\\]').val('1');

        create_file_text = '                                <div class="row" style="padding-top:16px;">\
                                <div class="offset-2 col-8" style="position:relative;">\
                                    <label for="data[attributes][options][create_file]" class="form-label"><?= __("Create File") ?></label><br>\
                                    <select class="form-select" name="data[attributes][options][create_file]" id="data[attributes][options][create_file]">\
                                        <option value="y"><?= __("Yes") ?></option>\
                                        <option value="n" selected><?= __("No") ?></option>\
                                    </select>\
                                    Should we create a file based on the audit result.\
                                </div>\
                            </div>\
                            <br>\
                            ';

        debugging_text = '                                <div class="row" style="padding-top:16px;">\
                                <div class="offset-2 col-8" style="position:relative;">\
                                    <label for="data[attributes][options][debugging]" class="form-label"><?= __("Debugging") ?></label><br>\
                                    <select class="form-select" name="data[attributes][options][debugging]" id="data[attributes][options][debugging]">\
                                        <option value="0">0</option>\
                                        <option value="1" selected>1</option>\
                                        <option value="2">2</option>\
                                        <option value="3">3</option>\
                                    </select>\
                                    The debug level (will output to command prompt window). Lower means less output with 0 being no output.\
                                </div>\
                            </div>\
                            <br>\
                            ';
        
        org_id_text = '                                <div class="row" style="padding-top:16px;">\
                                <div class="offset-2 col-8" style="position:relative;">\
                                    <label for="data[attributes][options][org_id]" class="form-label"><?= __("Organisation") ?></label><br>\
                                    <select class="form-select" name="data[attributes][options][org_id]" id="data[attributes][options][org_id]">\
                                        <option value="" label=" "></option>\
                                        <?php foreach ($included['orgs'] as $org) { ?>
                                        <option value="<?= $org->id ?>"><?= $org->attributes->name ?></option>\
                                        <?php } ?>
                                    </select>\
                                    Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).\
                                </div>\
                            </div>\
                            <br>\
                            ';

        submit_online_text = '                                <div class="row" style="padding-top:16px;">\
                                <div class="offset-2 col-8" style="position:relative;">\
                                    <label for="data[attributes][options][submit_online]" class="form-label"><?= __("Submit Online") ?></label><br>\
                                    <select class="form-select" name="data[attributes][options][submit_online]" id="data[attributes][options][submit_online]">\
                                        <option value="y" selected><?= __("Yes") ?></option>\
                                        <option value="n"><?= __("No") ?></option>\
                                    </select>\
                                    Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).\
                                </div>\
                            </div>\
                            <br>\
                            ';

        system_id_text = '                                <div class="row" style="padding-top:16px">\
                                <div class="offset-2 col-8">\
                                    <label for="data[attributes][options][system_id]" class="form-label">System ID</label><br>\
                                    <input class="form-control" type="number" id="data[attributes][options][system_id]" name="data[attributes][options][system_id]">\
                                    Set by the Discovery function - do not normally set this manually.\
                                </div>\
                            </div>\
                            <br>\
                            ';

        url_text = '                                <div class="row" style="padding-top:16px">\
                                <div class="offset-2 col-8">\
                                    <label for="data[attributes][options][url]" class="form-label">URL</label><br>\
                                    <input class="form-control" type="text" id="data[attributes][options][url]" name="data[attributes][options][url]" value="<?= $meta->baseurl ?>index.php/input/devices">\
                                    The address of the Open-AudIT server "submit" page.\
                                </div>\
                            </div>\
                            <br>\
                            ';

        ignore_invalid_ssl_text = '                                <div class="row" style="padding-top:16px;">\
                                <div class="offset-2 col-8" style="position:relative;">\
                                    <label for="data[attributes][options][ignore_invalid_ssl]" class="form-label"><?= __("Ignore Invalid SSL") ?></label><br>\
                                    <select class="form-select" name="data[attributes][options][ignore_invalid_ssl]" id="data[attributes][options][ignore_invalid_ssl]">\
                                        <option value="y" selected><?= __("Yes") ?></option>\
                                        <option value="n"><?= __("No") ?></option>\
                                    </select>\
                                    Should we ignore an invalid or self signed SSL certificate and submit the result anyway.\
                                </div>\
                            </div>\
                            <br>\
                            ';

        self_delete_text = '                                <div class="row" style="padding-top:16px;">\
                                <div class="offset-2 col-8" style="position:relative;">\
                                    <label for="data[attributes][options][self_delete]" class="form-label"><?= __("Self Delete") ?></label><br>\
                                    <select class="form-select" name="data[attributes][options][self_delete]" id="data[attributes][options][self_delete]">\
                                        <option value="y"><?= __("Yes") ?></option>\
                                        <option value="n" selected><?= __("No") ?></option>\
                                    </select>\
                                    Once the script has run on a target, should the script delete itself.\
                                </div>\
                            </div>\
                            <br>\
                            ';


        $("#data\\[attributes\\]\\[based_on\\]").change(function(e) {
            console.log("hit");
            switch($("#data\\[attributes\\]\\[based_on\\]").val())
            {
                case "audit_aix.sh":
                    based_on_text = create_file_text + debugging_text + org_id_text + submit_online_text + system_id_text + url_text;
                break;
                case "audit_esxi.sh":
                    based_on_text = create_file_text + debugging_text + org_id_text + submit_online_text + system_id_text + url_text;
                break;
                case "audit_linux.sh":
                    based_on_text = create_file_text + debugging_text + org_id_text + submit_online_text + system_id_text + url_text + ignore_invalid_ssl_text + self_delete_text;
                break;
                case "audit_osx.sh":
                    based_on_text = create_file_text + debugging_text + org_id_text + submit_online_text + system_id_text + url_text;
                break;
                case "audit_windows.vbs":
                    based_on_text = create_file_text + debugging_text + org_id_text + submit_online_text + system_id_text + url_text;
                    based_on_text = based_on_text + '                                <div class="row" style="padding-top:16px;">\
                                            <div class="offset-2 col-8" style="position:relative;">\
                                                <label for="data[attributes][options][audit_dns]" class="form-label"><?= __("Audit DNS") ?></label><br>\
                                                <select class="form-select" name="data[attributes][options][audit_dns]" id="data[attributes][options][audit_dns]">\
                                                    <option value="y"><?= __("Yes") ?></option>\
                                                    <option value="n" selected><?= __("No") ?></option>\
                                                </select>\
                                                Should we retrieve all DNS names.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px;">\
                                            <div class="offset-2 col-8" style="position:relative;">\
                                                <label for="data[attributes][options][audit_mount_point]" class="form-label"><?= __("Audit Mount Point") ?></label><br>\
                                                <select class="form-select" name="data[attributes][options][audit_mount_point]" id="data[attributes][options][audit_mount_point]">\
                                                    <option value="y" selected><?= __("Yes") ?></option>\
                                                    <option value="n"><?= __("No") ?></option>\
                                                </select>\
                                                Should we audit mount points.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px;">\
                                            <div class="offset-2 col-8" style="position:relative;">\
                                                <label for="data[attributes][options][audit_netstat]" class="form-label"><?= __("Audit Netstat") ?></label><br>\
                                                <select class="form-select" name="data[attributes][options][audit_netstat]" id="data[attributes][options][audit_netstat]">\
                                                    <option value="y"><?= __("Yes") ?></option>\
                                                    <option value="n"><?= __("No") ?></option>\
                                                    <option value="s" selected><?= __("Servers Only") ?></option>\
                                                </select>\
                                                Should we audit netstat ports (yes, no, servers only).\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px;">\
                                            <div class="offset-2 col-8" style="position:relative;">\
                                                <label for="data[attributes][options][audit_software]" class="form-label"><?= __("Audit Software") ?></label><br>\
                                                <select class="form-select" name="data[attributes][options][audit_software]" id="data[attributes][options][audit_software]">\
                                                    <option value="y" selected><?= __("Yes") ?></option>\
                                                    <option value="n"><?= __("No") ?></option>\
                                                </select>\
                                                Should we audit the installed software.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px;">\
                                            <div class="offset-2 col-8" style="position:relative;">\
                                                <label for="data[attributes][options][audit_win32_product]" class="form-label"><?= __("Audit Win32 Product") ?></label><br>\
                                                <select class="form-select" name="data[attributes][options][audit_win32_product]" id="data[attributes][options][audit_win32_product]">\
                                                    <option value="y"><?= __("Yes") ?></option>\
                                                    <option value="n" selected><?= __("No") ?></option>\
                                                </select>\
                                                Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px;">\
                                            <div class="offset-2 col-8" style="position:relative;">\
                                                <label for="data[attributes][options][details_to_lower]" class="form-label"><?= __("Lowercase Hostname") ?></label><br>\
                                                <select class="form-select" name="data[attributes][options][details_to_lower]" id="data[attributes][options][details_to_lower]">\
                                                    <option value="y" selected><?= __("Yes") ?></option>\
                                                    <option value="n"><?= __("No") ?></option>\
                                                </select>\
                                                Should we convert the hostname to lowercase.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px;">\
                                            <div class="offset-2 col-8" style="position:relative;">\
                                                <label for="data[attributes][options][hide_audit_window]" class="form-label"><?= __("Hide Audit Window") ?></label><br>\
                                                <select class="form-select" name="data[attributes][options][hide_audit_window]" id="data[attributes][options][hide_audit_window]">\
                                                    <option value="y"><?= __("Yes") ?></option>\
                                                    <option value="n" selected><?= __("No") ?></option>\
                                                </select>\
                                                Should we hide the audit script window when executing.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px;">\
                                            <div class="offset-2 col-8" style="position:relative;">\
                                                <label for="data[attributes][options][audit_win32_product]" class="form-label"><?= __("Audit Win32 Product") ?></label><br>\
                                                <select class="form-select" name="data[attributes][options][audit_win32_product]" id="data[attributes][options][audit_win32_product]">\
                                                    <option value="y"><?= __("Yes") ?></option>\
                                                    <option value="n" selected><?= __("No") ?></option>\
                                                </select>\
                                                Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px">\
                                            <div class="offset-2 col-8">\
                                                <label for="data[attributes][options][ldap]" class="form-label">LDAP</label><br>\
                                                <input class="form-control" type="text" id="data[attributes][options][ldap]" name="data[attributes][options][ldap]">\
                                                Set by the audit_domain or discover_domain scripts. Do not set.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px">\
                                            <div class="offset-2 col-8">\
                                                <label for="data[attributes][options][ldap_seen_date]" class="form-label">LDAP Seen Date</label><br>\
                                                <input class="form-control" type="date" id="data[attributes][options][ldap_seen_date]" name="data[attributes][options][ldap_seen_date]" value="2022-06-01">\
                                                Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px;">\
                                            <div class="offset-2 col-8" style="position:relative;">\
                                                <label for="data[attributes][options][ping_target]" class="form-label"><?= __("Ping Target") ?></label><br>\
                                                <select class="form-select" name="data[attributes][options][ping_target]" id="data[attributes][options][ping_target]">\
                                                    <option value="y"><?= __("Yes") ?></option>\
                                                    <option value="n" selected><?= __("No") ?></option>\
                                                </select>\
                                                Attempt to ping the device if we are not auditing localhost.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px;">\
                                            <div class="offset-2 col-8" style="position:relative;">\
                                                <label for="data[attributes][options][san_audit]" class="form-label"><?= __("SAN Audit") ?></label><br>\
                                                <select class="form-select" name="data[attributes][options][san_audit]" id="data[attributes][options][san_audit]">\
                                                    <option value="y" selected><?= __("Yes") ?></option>\
                                                    <option value="n"><?= __("No") ?></option>\
                                                </select>\
                                                Should we audit a SAN if the management software is detected.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px;">\
                                            <div class="offset-2 col-8" style="position:relative;">\
                                                <label for="data[attributes][options][san_discover]" class="form-label"><?= __("SAN Auto-Discover") ?></label><br>\
                                                <select class="form-select" name="data[attributes][options][san_discover]" id="data[attributes][options][san_discover]">\
                                                    <option value="y"><?= __("Yes") ?></option>\
                                                    <option value="n" selected><?= __("No") ?></option>\
                                                </select>\
                                                If we detect the san management software, should we run an auto-discover before the query.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px">\
                                            <div class="offset-2 col-8">\
                                                <label for="data[attributes][options][strcomputer]" class="form-label"><?= __("Target Computer") ?></label><br>\
                                                <input class="form-control" type="text" id="data[attributes][options][strcomputer]" name="data[attributes][options][strcomputer]" value=".">\
                                                The target computer to audit. "." means localhost.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px">\
                                            <div class="offset-2 col-8">\
                                                <label for="data[attributes][options][strpass]" class="form-label"><?= __("Password") ?></label><br>\
                                                <input class="form-control" type="password" id="data[attributes][options][strpass]" name="data[attributes][options][strpass]">\
                                                The password (if not using the user running the script).\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px">\
                                            <div class="offset-2 col-8">\
                                                <label for="data[attributes][options][struser]" class="form-label"><?= __("Username") ?></label><br>\
                                                <input class="form-control" type="text" id="data[attributes][options][struser]" name="data[attributes][options][struser]">\
                                                The username (if not using the user running the script).\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px;">\
                                            <div class="offset-2 col-8" style="position:relative;">\
                                                <label for="data[attributes][options][use_proxy]" class="form-label"><?= __("Use Proxy") ?></label><br>\
                                                <select class="form-select" name="data[attributes][options][use_proxy]" id="data[attributes][options][use_proxy]">\
                                                    <option value="y"><?= __("Yes") ?></option>\
                                                    <option value="n" selected><?= __("No") ?></option>\
                                                </select>\
                                                Should we use the system or user level proxy to submit the audit result.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px">\
                                            <div class="offset-2 col-8">\
                                                <label for="data[attributes][options][windows_user_work_1]" class="form-label"><?= __("Windows User Work Unit #1") ?></label><br>\
                                                <input class="form-control" type="text" id="data[attributes][options][windows_user_work_1]" name="data[attributes][options][windows_user_work_1]" value="physicalDeliveryOfficeName">\
                                                Query this Active Directory attribute first to determine the users work unit.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        <div class="row" style="padding-top:16px">\
                                            <div class="offset-2 col-8">\
                                                <label for="data[attributes][options][windows_user_work_2]" class="form-label"><?= __("Windows User Work Unit #2") ?></label><br>\
                                                <input class="form-control" type="text" id="data[attributes][options][windows_user_work_2]" name="data[attributes][options][windows_user_work_2]" value="company">\
                                                Query this Active Directory attribute second to determine the users work unit.\
                                            </div>\
                                        </div>\
                                        <br>\
                                        \
                                        ';

                break;
                }
            document.getElementById("options").innerHTML = based_on_text;
        });
    }
)};
</script>
