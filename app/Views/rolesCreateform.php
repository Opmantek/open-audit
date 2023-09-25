<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
$endpoints = array('applications','attributes','baselines','charts','clouds','clusters','collectors','configuration','connections','credentials','dashboards','database','devices','discoveries','discovery_scan_options','fields','files','groups','integrations','ldap_servers','licenses','locations','networks','orgs','queries','racks','reports','roles','rules','scripts','summaries','tasks','users','widgets');
$permissions = array('c', 'r', 'u', 'd');
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header($meta->collection, $meta->icon, $user); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection.'Create') ?>">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />

                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>
                                <br />
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <label for="submit" class="form-label">&nbsp;</label>
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                    </div>
                                </div>


                                <br />
                                <br />
                                <br />
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <table class="table table-striped dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Endpoint</th>
                                                    <th data-orderable="false" class="text-center"><?= __('Create') ?> <input type="checkbox" name="select_c" id="select_c" onclick="select_all_click('c');"/></th>
                                                    <th data-orderable="false" class="text-center"><?= __('Read') ?> <input type="checkbox" name="select_r" id="select_r" onclick="select_all_click('r');"/></th>
                                                    <th data-orderable="false" class="text-center"><?= __('Update') ?> <input type="checkbox" name="select_u" id="select_u" onclick="select_all_click('u');"/></th>
                                                    <th data-orderable="false" class="text-center"><?= __('Delete') ?> <input type="checkbox" name="select_d" id="select_d" onclick="select_all_click('d');"/></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($endpoints as $endpoint) { ?>
                                                <tr><td><?= $endpoint ?></td>
                                                    <?php foreach ($permissions as $permission) {
                                                        $checked = '';
                                                        if (($endpoint === 'dashboards' and $permission === 'r') or
                                                        ($endpoint === 'devices' and $permission === 'r') or
                                                        ($endpoint === 'queries' and $permission === 'r') or
                                                        ($endpoint === 'reports' and $permission === 'r') or
                                                        ($endpoint === 'search') or
                                                        ($endpoint === 'sessions') or
                                                        ($endpoint === 'summaries' and $permission === 'r') or
                                                        ($endpoint === 'widgets' and $permission === 'r')
                                                        ) {
                                                            $checked = ' checked';
                                                        } else {
                                                            $checked = '';
                                                        } ?>
                                                    <td class="text-center"><input data-permission="<?= $permission ?>" id="data[attributes][permissions][<?= $endpoint ?>][<?= $permission ?>]" name="data[attributes][permissions][<?= $endpoint ?>][<?= $permission ?>]" type="checkbox" value="y" <?= $checked ?>></td>
                                                    <?php } ?>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="offset-2 col-8">
                                <?php if (! empty($dictionary->about)) {
                                    echo "<h4 class=\"text-center\">About</h4><br />";
                                    echo html_entity_decode($dictionary->about);
                                } ?>
                                <?php if (! empty($dictionary->notes)) {
                                    echo "<h4 class=\"text-center\">Notes</h4><br />";
                                    echo html_entity_decode($dictionary->notes);
                                } ?>
                                <h4 class="text-center">Fields</h4><br />
                                <?php foreach ($dictionary->columns as $key => $value) {
                                    echo "<code>$key:</code> " . html_entity_decode($value) . "<br /><br />";
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="card">
                <div class="card-header">
                    <div class="btn-group btn-group-sm" role="group" aria-label="">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-dark oa-card-button"><?= __('Role Permissions') ?></button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <table class="table table-striped dataTable">
                            <thead>
                                <tr>
                                    <th>Endpoint</th>
                                    <th data-orderable="false" class="text-center"><?= __('Create') ?> <input type="checkbox" name="select_c" id="select_c" onclick="select_all_click('c');"/></th>
                                    <th data-orderable="false" class="text-center"><?= __('Read') ?> <input type="checkbox" name="select_r" id="select_r" onclick="select_all_click('r');"/></th>
                                    <th data-orderable="false" class="text-center"><?= __('Update') ?> <input type="checkbox" name="select_u" id="select_u" onclick="select_all_click('u');"/></th>
                                    <th data-orderable="false" class="text-center"><?= __('Delete') ?> <input type="checkbox" name="select_d" id="select_d" onclick="select_all_click('d');"/></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($endpoints as $endpoint) { ?>
                                <tr><td><strong><?= $endpoint ?></strong></td>
                                    <?php foreach ($permissions as $permission) {
                                        $checked = '';
                                        if (($endpoint === 'dashboards' and $permission === 'r') or
                                        ($endpoint === 'devices' and $permission === 'r') or
                                        ($endpoint === 'queries' and $permission === 'r') or
                                        ($endpoint === 'reports' and $permission === 'r') or
                                        ($endpoint === 'search') or
                                        ($endpoint === 'sessions') or
                                        ($endpoint === 'summaries' and $permission === 'r') or
                                        ($endpoint === 'widgets' and $permission === 'r')
                                        ) {
                                            $checked = ' checked';
                                        } else {
                                            $checked = '';
                                        } ?>
                                    <td class="text-center"><input data-permission="<?= $permission ?>" id="data[attributes][permissions][<?= $endpoint ?>][<?= $permission ?>]" name="data[attributes][permissions][<?= $endpoint ?>][<?= $permission ?>]" type="checkbox" value="y" <?= $checked ?>></td>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </form>
        </main>

<script {csp-script-nonce}>
function select_all_click($permission) {
    $(':checkbox').each(
        function () {
            if ($(this).data("permission") === $permission) {
                this.checked = !this.checked;
            }
        }
    )
}
</script>
