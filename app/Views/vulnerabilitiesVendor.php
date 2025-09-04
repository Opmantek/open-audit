<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"],[2,"asc"],[3,"asc"]]'>
                            <thead>
                                <tr>
                                    <th class="text-center"><?= __('Vendor') ?></th>
                                    <th class="text-center"><?= __('Critical') ?></th>
                                    <th class="text-center"><?= __('High') ?></th>
                                    <th class="text-center"><?= __('Medium') ?></th>
                                    <th class="text-center"><?= __('Low') ?></th>
                                    <th class="text-center"><?= __('None') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $key => $value) { ?>
                                <tr>
                                    <td class="text-center"><a href="<?= base_url() ?>vulnerabilities?vulnerabilities.vendor=<?= $key ?>"><?= $key ?></a></td>
                                    <td class="text-center text-critical"><?= $data[$key]->critical ?></td>
                                    <td class="text-center text-high"><?= $data[$key]->high ?></td>
                                    <td class="text-center text-medium"><?= $data[$key]->medium ?></td>
                                    <td class="text-center text-low"><?= $data[$key]->low ?></td>
                                    <td class="text-center text-none"><?= $data[$key]->none ?></td>
                                </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
<pre>
    <?= print_r($data) ?>
</pre>