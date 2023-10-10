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
                            <?= read_field('name', $resource->name, $dictionary->columns->name, false) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, false) ?>
                            <?= read_field('ad_group', $resource->ad_group, $dictionary->columns->ad_group, false, __('AD Group')) ?>
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
            <br>
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
                    <table class="table <?= $GLOBALS['table'] ?> table-striped dataTable" id="table_result">
                        <thead>
                            <tr>
                                <th>Endpoint</th>
                                <th class="text-center"><?= __('Create') ?> </th>
                                <th class="text-center"><?= __('Read') ?></th>
                                <th class="text-center"><?= __('Update') ?></th>
                                <th class="text-center"><?= __('Delete') ?></th>
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
                                    } ?>
                                <td class="text-center"><input data-permission="<?= $permission ?>" name="permission.<?= $endpoint ?>" type="checkbox" value="<?= $permission ?>" <?= $checked ?> disabled></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
