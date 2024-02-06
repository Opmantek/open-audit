<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$every = '';
if (stripos($data[0]->{'hour'}, '*/') !== false) {
    $every = str_replace('*/', '', $data[0]->{'hour'}) . ' hours';
}
if (stripos($data[0]->{'minute'}, '*/') !== false) {
    $minute = str_replace('*/', '', $data[0]->{'minute'});
    if ($every != "") {
        $every .= ', ' . $minute . ' minutes';
    } else {
        $every = $minute . ' minutes';
    }
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4 clearfix">
                                <h6 style="padding-top:10px;"><span class="fa fa-chart-bar oa-icon"></span><?= __('Collector') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <p class="text-center"><br />
                            <?php if ($every != '') { ?>
                                This collector requests tasks every <?= $every ?>.<br /><br />
                                <?php if ($data[0]->{'last_run'} != "2000-01-01 00:00:00") { ?>
                                    The last time this task was run was <?= $data[0]->{'last_run'}; ?>.<br /><br />
                                <?php } else { ?>
                                    This task has not yet been run.<br /><br />
                                <?php } ?>
                            <?php } else { ?>
                            <b>This collector is not requesting tasks.</b><br /><br />
                            <?php } ?>
                            The number of devices discovered by this collector is <?= $config->device_count ?>.
                    </div>
                </div>
            </div>
            <br />
        </main>
