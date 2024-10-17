<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$permissions = array('c','r','u','d');
$endpoints = array('agents','applications','attributes','auth','baselines','benchmarks','benchmarks_exceptions','benchmarks_policies','charts','clouds','clusters','collectors','components','configuration','connections','credentials','dashboards','database','devices','discoveries','discovery_scan_options','executables','fields','files','groups','integrations','licenses','locations','networks','orgs','packages','queries','racks','rack_devices','roles','rules','scripts','search','summaries','tasks','users','widgets');
$item_permissions = $resource->permissions;
$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" class="fa fa-eye text-success"></span>' . __('Details') . '</a></li>';
    $permissions_button = '<li class="nav-item" role="presentation"><a href="#permissions" class="nav-link" id="permissions-tab"><span style="margin-right:6px;" class="fa fa-user-shield text-primary" ></span>' . __('Permissions') . '</a></li>';
} elseif ($style === 'icon') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" title="' . __('Details') . '" class="fa fa-eye text-success"></span></a></li>';
    $permissions_button = '<li class="nav-item" role="presentation"><a href="#permissions" class="nav-link" id="permissions-tab"><span style="margin-right:6px;" title="' . __('Permissions') . '" class="fa fa-user-shield text-primary"></span></a></li>';
} else {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab">' . __('Details') . '</a></li>';
    $permissions_button = '<li class="nav-item" role="presentation"><a href="#permissions" class="nav-link" id="permissions-tab">' . __('Permissions') . '</a></li>';
}
$update_group = false;
if ($config->product === 'enterprise') {
    $update_group = true;
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">

                    <div class="row text-center">
                        <div class="col-8 offset-2" style="background-color: rgba(var(--bs-body-color-rgb), 0.03);">
                            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                                <?= $details_button ?>
                                <?= $permissions_button ?>
                            </ul>
                        </div>
                    </div>
                    <br/>

                    <div class="tab-content">
                        <div class="tab-pane" id="details" role="tabpanel" tabindex="0" aria-labelledby="details">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                                    <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                                    <?= read_field('ad_group', $resource->ad_group, $dictionary->columns->ad_group, $update_group, __('AD Group')) ?>
                                    <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                                    <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                                </div>

                                <div class="col-6">
                                    <br>
                                    <div class="offset-2 col-8">
                                        <?php if (!empty($dictionary->about)) { ?>
                                            <h4 class="text-center"><?= __('About') ?></h4><br>
                                            <?= $dictionary->about ?>
                                        <?php } ?>
                                        <?php if (!empty($dictionary->notes)) { ?>
                                            <h4 class="text-center"><?= __('Notes') ?></h4><br>
                                            <?= $dictionary->notes ?>
                                        <?php } ?>
                                        <?php if (!empty($dictionary->columns)) { ?>
                                            <?php $fields = array('name', 'description', 'ad_group', 'edited_by', 'edited_date') ?>
                                        <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                            <?php foreach ($fields as $key) { ?>
                                            <code><?= $key ?>: </code><?= $dictionary->columns->{$key} ?><br><br>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                                <div class="tab-pane" id="permissions" role="tabpanel" tabindex="0" aria-labelledby="permissions">
                            <table class="table <?= $GLOBALS['table'] ?> table-striped dataTable" id="table_result">
                                <thead>
                                    <tr>
                                        <th>Endpoint</th>
                                        <th class="text-center"><?= __('Create') ?>&nbsp;<input type="checkbox" name="select_c" id="select_c"/></th>
                                        <th class="text-center"><?= __('Read') ?>&nbsp;<input type="checkbox" name="select_c" id="select_r"/></th>
                                        <th class="text-center"><?= __('Update') ?>&nbsp;<input type="checkbox" name="select_c" id="select_u"/></th>
                                        <th class="text-center"><?= __('Delete') ?>&nbsp;<input type="checkbox" name="select_c" id="select_d"/></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($endpoints as $endpoint) { ?>
                                    <tr><td><?= $endpoint ?></td>
                                        <?php foreach ($permissions as $permission) {
                                            $checked = '';
                                            if (!empty($item_permissions->{$endpoint}) and strpos($item_permissions->{$endpoint}, $permission) !== false) {
                                                $checked = 'checked';
                                            } else {
                                                $checked = '';
                                            }
                                            $disabled = 'disabled';
                                            if ($update) {
                                                $disabled = '';
                                            } ?>
                                        <td class="text-center"><input data-permission="<?= $permission ?>" name="permission.<?= $endpoint ?>" type="checkbox" value="<?= $permission ?>" <?= $checked ?> <?= $disabled ?>></td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <?php if ($update) { ?>
                                <button id="send" name="send" type="button" class="btn btn-primary"><?= __('Submit') ?></button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>



<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {

        var hash = window.location.hash;
        if (hash == "") {
            hash = "#details"
        }
        hash && $('ul.nav.nav-pills a[href="' + hash + '"]').tab('show');

        $('ul.nav.nav-pills a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
            window.location.hash = this.hash;
        });

        $(".nav-link").click(function(e) {
            window.scrollTo(0, 0);
        });

        $("#select_c").click( function() {
            $(':checkbox').each(
                function () {
                    if ($(this).data("permission") === 'c') {
                        this.checked = !this.checked;
                    }
                }
            )
        });

        $("#select_r").click( function() {
            $(':checkbox').each(
                function () {
                    if ($(this).data("permission") === 'r') {
                        this.checked = !this.checked;
                    }
                }
            )
        });

        $("#select_u").click( function() {
            $(':checkbox').each(
                function () {
                    if ($(this).data("permission") === 'u') {
                        this.checked = !this.checked;
                    }
                }
            )
        });

        $("#select_d").click( function() {
            $(':checkbox').each(
                function () {
                    if ($(this).data("permission") === 'd') {
                        this.checked = !this.checked;
                    }
                }
            )
        });

        $("#send").click(function() {
            var permissions = {};
            <?php foreach ($endpoints as $point) { ?>
            var values = $("input[name='permission.<?= $point ?>']:checked").map(function(){return (this.value);}).get();
            var i;
            permissions['<?= $point ?>'] = "";
            for (i = 0; i < values.length; ++i) {
                permissions['<?= $point ?>'] = permissions['<?= $point ?>'] + values[i];
            }
            <?php } ?>
            var data = {};
            data["data"] = {};
            data["data"]["id"] = id;
            data["data"]["type"] = collection;
            data["data"]["attributes"] = {};
            data["data"]["attributes"]["permissions"] = JSON.stringify(permissions);
            data = JSON.stringify(data);
            $.ajax({
                type: "PATCH",
                url: baseurl + "/roles/" + id,
                contentType: "application/json",
                data: {data : data},
                success: function (data) {
                    alert( 'Saved Permissions' );
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    alert(data.errors[0].code + "\n" + data.errors[0].title + "\n" + data.errors[0].detail);
                }
            });
        });
    });
}


</script>