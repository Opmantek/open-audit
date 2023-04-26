<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$permissions = array('c','r','u','d');
$endpoints = array('applications','attributes','baselines','clouds','clusters','components','configuration','connections','credentials','dashboards','database','devices','discoveries','discovery_scan_options','fields','files','groups','integrations','ldap_servers','licenses','locations','logs','networks','orgs','queries','racks','rack_devices','roles','rules','scripts','search','summaries','tasks','users','widgets');
$item_permissions = $resource->permissions;
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                            <?= read_field('ad_group', $resource->ad_group, $dictionary->columns->ad_group, $update, __('AD Group')) ?>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                        </div>

                        <div class="col-6">
                            <br />
                            <div class="offset-2 col-8">
                                <?php if (!empty($dictionary->about)) { ?>
                                    <h4 class="text-center"><?= __('About') ?></h4><br />
                                    <?= $dictionary->about ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->notes)) { ?>
                                    <h4 class="text-center"><?= __('Notes') ?></h4><br />
                                    <?= $dictionary->notes ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->columns)) { ?>
                                    <?php $fields = array('name', 'description', 'ad_group', 'edited_by', 'edited_date') ?>
                                <h4 class="text-center"><?= __('Fields') ?></h4><br />
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= $dictionary->columns->{$key} ?><br /><br />
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
        </main>


        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row" style="height:46px;">
                        <div class="col-12 clearfix">
                            <h6 style="padding-top:10px;"><?= __('Role Permissions') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped dataTable" id="table_result">
                        <thead>
                            <tr>
                                <th>Endpoint</th>
                                <th class="text-center"><?= __('Create') ?> <input type="checkbox" name="select_c" id="select_c" onclick="select_all_click_perms('c');"/></th>
                                <th class="text-center"><?= __('Read') ?> <input type="checkbox" name="select_r" id="select_r" onclick="select_all_click_perms('r');"/></th>
                                <th class="text-center"><?= __('Update') ?> <input type="checkbox" name="select_u" id="select_u" onclick="select_all_click_perms('u');"/></th>
                                <th class="text-center"><?= __('Delete') ?> <input type="checkbox" name="select_d" id="select_d" onclick="select_all_click_perms('d');"/></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $disabled = 'disabled';
                        if ($update) {
                            $disabled = '';
                        }
                        foreach ($endpoints as $endpoint) {
                            ?>
                            <tr><td><strong><?= $endpoint ?></strong></td>
                                <?php foreach ($permissions as $permission) {
                                    $checked = '';
                                    if (!empty($item_permissions->{$endpoint}) and strpos($item_permissions->{$endpoint}, $permission) !== false) {
                                        $checked = 'checked';
                                    } else {
                                        $checked = '';
                                    } ?>
                                <td class="text-center"><input data-permission="<?= $permission ?>" name="permission.<?= $endpoint ?>" type="checkbox" value="<?= $permission ?>" <?= $checked ?> <?= $disabled ?>></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <?php if ($update) { ?>
                    <button id="send" name="send" type="button" class="btn btn-primary" onclick="javascript:sendthis();" <?= $disabled ?>><?= __('Submit') ?></button>
                    <?php } ?>
                </div>
            </div>
        </div>


<script>
function select_all_click_perms($permission) {
    $(':checkbox').each(
        function () {
            if ($(this).data("permission") === $permission) {
                this.checked = !this.checked;
            }
        }
    )
}

function sendthis() {
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
        url: "<?= url_to('rolesUpdate', $data[0]->id) ?>",
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
}
</script>