<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$every = '';
if (!empty($data[0]) and $included[0]->attributes->type === 'collector') {
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
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4 clearfix">
                                <h6 style="padding-top:10px;">
                                    <span class="fa fa fa-cogs oa-icon"></span>
                                    <?= __('Collector') ?>
                                </h6>
                        </div>
                        <div class="col-8 clearfix">
                            <div class="btn-group btn-group-sm float-end" role="group" id="oa_panel_buttons">
                                <div class="page-title-right">
                                    <input type="text" class="form-control" id="value" value="" data-original-value="" style="display:none;">
                                    <button type="button" class="btn btn-light mb-2 submit"  data-url="configuration/<?= $meta->id ?>" data-redirect="<?= base_url() ?>" data-attribute="value" data-original-value="" title="<?= __("Decommission") ?>"><?= __("Decommission") ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <p class="text-center"><br>
                        <?php if ($included[0]->attributes->type === 'collector') { ?>
                            <?php if ($every != '') { ?>
                                This collector requests tasks every <?= $every ?>.<br><br>
                                <?php if ($data[0]->{'last_run'} !== "2001-01-01 00:00:00") { ?>
                                    The last time this task was run was <?= $data[0]->{'last_run'}; ?>.<br><br>
                                <?php } else { ?>
                                    This task has not yet been run.<br><br>
                                <?php } ?>
                            <?php } else { ?>
                            <b>This collector is not requesting tasks.</b><br><br>
                            <?php } ?>
                            The number of devices discovered by this collector is <?= $config->device_count ?>.<br><br>
                            This collector is managed by <a target="_blank" href="<?= $included[0]->attributes->host ?><?= $included[0]->attributes->community ?>"><?= $included[0]->attributes->host ?></a>.<br><br>
                        <?php } ?>
                        <?php if ($included[0]->attributes->type === 'stand-alone') { ?>
                            This collector is in stand-alone mode.<br><br>
                            It should be managed locally (not on the associated server).<br><br>
                            Any devices found will be forwarded to <a target="_blank" href="<?= $included[0]->attributes->host ?><?= $included[0]->attributes->community ?>"><?= $included[0]->attributes->host ?></a>.<br><br>
                        <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
            <br>
        </main>
