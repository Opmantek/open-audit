<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
if (empty($config->product) or $config->product === 'community') {
    echo '        <div class="container-fluid">
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                Note that there are actually ' . count($data) . ' reports available for Open-AudIT Professional and Enterprise. Click here to <a href="#"" data-bs-toggle="modal" data-bs-target="#modalCompareLicense">get a free license.</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id' or $key === 'status') {
                                            continue;
                                        }
                                    ?>
                                        <th><?= collection_column_name($key) ?></th>
                                    <?php } ?>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                    <th class="text-center"><?= __('Status') ?></th>
                                    <th data-orderable="false" class="text-center"><?= __('Delete') ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) {
                                    switch ($item->attributes->status) {
                                        case 'confirmed':
                                            $item->attributes->status = '<span class="text-success">confirmed</span>';
                                            break;
                                        
                                        case 'declined':
                                            $item->attributes->status = '<span class="text-danger">declined</span>';
                                            break;
                                        
                                        case 'pending':
                                            $item->attributes->status = '<span class="text-warning">pending</span>';
                                            break;
                                        
                                        case 'other':
                                            $item->attributes->status = '<span class="text-secondary">other</span>';
                                            break;
                                        
                                        case '':
                                            $item->attributes->status = '<span class="">unknown</span>';
                                            break;
                                        
                                        default:
                                            $item->attributes->status = '<span class="">unknown</span>';
                                            break;
                                    }
                                    ?>
                                <tr>
                                    <?= collection_button_read($meta->collection, $item->id) ?>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id') {
                                            continue;
                                        }
                                        if ($key === 'orgs.name' and !empty($item->attributes->{'orgs.id'})) {
                                            echo "<td style=\"white-space: nowrap;\"><a href=\"" . url_to($meta->collection . 'Collection') . "?" . $meta->collection . ".org_id=" . $item->attributes->{'orgs.id'} . "\">" . $item->attributes->{$key} . "</a></td>\n";
                                        } else if ($key === 'status') {
                                            echo "<td class=\"text-center\">" . $item->attributes->{$key} . "</td>\n";
                                        } else {
                                            echo "<td>" . $item->attributes->{$key} . "</td>\n";
                                        }
                                        ?>
                                    <?php } ?>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                        <?= collection_button_delete(intval($item->id)) ?>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
