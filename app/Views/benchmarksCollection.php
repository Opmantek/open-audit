<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">

            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa fa-sliders oa-icon"></span><?= __('Advanced') ?></h6>
                        </div>
                        <div class="col-3 clearfix pull-right">
                            <div class="btn-group btn-group-sm float-end mb-2" role="group">
                                <button class="btn btn-outline-secondary panel-button c_change_primary" type="button" data-bs-toggle="collapse" data-bs-target="#advanced" aria-expanded="false" aria-controls="advanced"><span class="fa fa-angle-down text-primary"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse" id="advanced">
                    <div class="row">
                        <div class="col-3">
                            <button type="button" class="btn btn-danger" style="min-width: 70px; margin-right:12px;"><?= ($included['potential_devices'] - $included['actual_devices']) ?></button>&nbsp;Devices are not being benchmarked.<br><br>
                            <button type="button" class="btn btn-warning" style="min-width: 70px; margin-right:12px;"><?= $included['potential_devices'] ?></button>&nbsp;Devices could be benchmarked.<br><br>
                            <button type="button" class="btn btn-success" style="min-width: 70px; margin-right:12px;"><?= $included['actual_devices'] ?></button>&nbsp;Devices are being benchmarked.<br>
                        </div>
                        <div class="col-9">
                            Devices Not Being Benchmarked<br><br>
                            <div class="row">
                                <?php
                                $i = 0;
                                foreach ($included['devices'] as $key => $value) {
                                    $i++;
                                    $explode = explode(' ', $key);
                                    ?>
                                    <div class="col-lg-1 text-center">
                                        <div>
                                            <a href="<?= url_to('devicesCollection') ?>?devices.os_family=<?= $explode[0] ?>&devices.os_version=LIKE<?= $explode[1] ?>%" class="position-relative">
                                                <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>device_images/<?= strtolower($explode[0]) ?>.svg" alt="<?= $explode[0] ?>">
                                                <br><?= $key ?>
                                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $value ?></span>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    if ($i === 12 or $i === 24 or $i === 36) {
                                        echo "</div><br /><div class=\"row\">";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br />
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id') {
                                            continue;
                                        } ?>
                                        <th><?= collection_column_name($key) ?></th>
                                    <?php } ?>
                                    <th data-orderable="false" class="text-center"><?= __('Results') ?></th>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                    <th data-orderable="false" class="text-center"><?= __('Delete') ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) { ?>
                                <tr>
                                    <?= collection_button_read($meta->collection, $item->id) ?>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id') {
                                            continue;
                                        }
                                        if ($key === 'orgs.name' and !empty($item->attributes->{'orgs.id'})) {
                                            echo "<td style=\"white-space: nowrap;\"><a href=\"" . url_to($meta->collection.'Collection') . "?" . $meta->collection . ".org_id=" . $item->attributes->{'orgs.id'} . "\">" . $item->attributes->{$key} . "</a></td>\n";
                                        } else {
                                            echo "<td>" . $item->attributes->{$key} . "</td>\n";
                                        }
                                        ?>
                                    <?php } ?>
                                    <?php
                                        if (!empty($included['results'][$item->id])) {
                                            $pass = (!empty($included['results'][$item->id]->pass)) ? $included['results'][$item->id]->pass : 0;
                                            $fail = (!empty($included['results'][$item->id]->fail)) ? $included['results'][$item->id]->fail : 0;
                                            $other = (!empty($included['results'][$item->id]->other)) ? $included['results'][$item->id]->other : 0;
                                            $count = $pass + $fail + $other;
                                            echo "<td>\n";
                                            echo '                                        <div class="progress-stacked"  style="height: 2.5em">
                                            <div class="progress" role="progressbar" aria-label="Pass" aria-valuenow="' .  $pass . '" aria-valuemin="0" aria-valuemax="' . $count . '" style="width: ' . (($pass / $count) * 100) . '%">
                                                <div class="progress-bar bg-success fw-bold"  style="height: 2.5em">' . $pass . ' ' . __('Passed') . '</div>
                                            </div>
                                            <div class="progress" role="progressbar" aria-label="Other" aria-valuenow="' . $other . '" aria-valuemin="0" aria-valuemax="' . $count . '" style="width: ' . (($other / $count) * 100) . '%">
                                                <div class="progress-bar bg-warning fw-bold"  style="height: 2.5em">' . $other . ' ' . __('Others') . '</div>
                                            </div>
                                            <div class="progress" role="progressbar" aria-label="Fail" aria-valuenow="' . $fail . '" aria-valuemin="0" aria-valuemax="' . $count . '" style="width: ' . (($fail / $count) * 100) . '%">
                                                <div class="progress-bar bg-danger fw-bold"  style="height: 2.5em">' . $fail . ' ' . __('Failed') . '</div>
                                            </div>
                                        </div>';
                                            echo '</td>';
                                        } else {
                                            echo "<td>No Result</td>";
                                        }
                                    ?>
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
