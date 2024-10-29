<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$user->permissions['components'] = '';
if (!empty($data[0]->type) and $data[0]->type === 'benchmarks_result') {
    for ($i = 0; $i < count($data); $i++) {
        unset($data[$i]->attributes->first_seen);
        unset($data[$i]->attributes->last_seen);
        $data[$i]->attributes->policy = '<a title="' . __('View Policy') . '" role="button" class="btn ' . $GLOBALS['button'] . ' btn-primary" href="' . url_to('benchmarks_policiesRead', intval($data[$i]->attributes->{'benchmarks_policies.id'})) . '"><span style="width:1rem;" title="' . __('View Policy') . '" class="fa fa-eye" aria-hidden="true"></span></a>';
        unset($data[$i]->attributes->{'benchmarks_policies.id'});
        switch ($data[$i]->attributes->result) {
            case 'pass':
                $data[$i]->attributes->result = '<span class="text-success">' . $data[$i]->attributes->result . '</span>';
                break;

            case 'fail':
                $data[$i]->attributes->result = '<span class="text-danger">' . $data[$i]->attributes->result . '</span>';
                break;

            case 'error':
                $data[$i]->attributes->result = '<span class="text-warning">' . $data[$i]->attributes->result . '</span>';
                break;

            default:
                $data[$i]->attributes->result = '<span class="text-primary">' . $data[$i]->attributes->result . '</span>';
                break;
        }
    }
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
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"],[2,"asc"],[3,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <th data-orderable="false" class="text-center"><?= __('View Device') ?></th>
                                    <th data-orderable="false" class="text-center"><?= __('Device') ?></th>
                                    <th class="text-center"><?= __('ID') ?></th>
                                    <?php if (!empty($data[0]->attributes)) { ?>
                                        <?php foreach ($data[0]->attributes as $key => $value) {
                                            if ($key === 'id' or $key === 'orgs.id' or $key === 'devices.id' or $key === 'device_id' or $key === 'benchmark_id') {
                                                continue;
                                            } ?>
                                            <th><?= collection_column_name($key) ?></th>
                                        <?php } ?>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) { ?>
                                <tr>
                                    <td class="text-center"><a title="<?= __('View') ?>" role="button" class="btn <?= $GLOBALS['button'] ?> btn-primary" href="<?= url_to('componentsRead', $item->id) ?>?components.type=<?= $item->type ?>"><span style="width:1rem;" title="<?= __('View') ?>" class="fa fa-eye" aria-hidden="true"></span></a></td>
                                    <?= collection_button_read('devices', $item->attributes->device_id) ?>
                                    <td><?= $item->attributes->{'devices.name'} ?></td>
                                    <td><?= $item->attributes->{'id'} ?></td>
                                    <?php foreach ($data[0]->attributes as $key => $value) {
                                        if ($key === 'id' or $key === 'orgs.id' or $key === 'devices.id' or $key === 'device_id' or $key === 'benchmark_id') {
                                            continue;
                                        }
                                        echo "<td>" . $item->attributes->{$key} . "</td>\n";
                                        ?>
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
