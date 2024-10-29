<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, false) ?>
                            <?= read_field('external_ident', $resource->external_ident, $dictionary->columns->external_ident, false) ?>
                            <?= read_field('severity', $resource->severity, $dictionary->columns->severity, false) ?>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <hr>
                                    <label for="description" class="form-label"><?= __('Description') ?></label>
                                    <div class="input-group">
                                        <span id="description"><?= html_entity_decode(html_entity_decode($resource->description)) ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <hr>
                                    <label for="rationale" class="form-label"><?= __('Rationale') ?></label>
                                    <div class="input-group">
                                        <span id="rationale"><?= html_entity_decode(html_entity_decode($resource->rationale)) ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php if (!empty($included['devices'])) { ?>
                                <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                <br><hr>
                                    <label for="rationale" class="form-label"><?= __('Devices') ?></label>
                                    <div class="input-group">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;"><?= __('View') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('IP') ?></th>
                                                    <th><?= __('OS') ?></th>
                                                    <th><?= __('Benchmark') ?></th>
                                                    <th style="text-align: center;"><?= __('Result') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($included['devices'] as $device) {
                                                    $text_class = 'text-warning';
                                                    if ($device->{'benchmarks_result.result'} === 'fail') {
                                                        $text_class = 'text-danger';
                                                    }
                                                    if ($device->{'benchmarks_result.result'} === 'pass') {
                                                        $text_class = 'text-success';
                                                    }
                                                    ?>
                                                <tr>
                                                    <!--<td style="text-align: center;"><a title="<?= __('View') ?>" role="button" class="btn btn-sm btn-primary" href="?benchmarks_results.device_id=<?= $device->{'devices.id'} ?>"><span style="width:1rem;" title="<?= __('View') ?>" class="fa fa-eye" aria-hidden="true"></span></a></td>-->
                                                    <td style="text-align: center;"><a title="<?= __('View') ?>" role="button" class="btn <?= $GLOBALS['button'] ?> btn-primary" href="<?= url_to('componentsCollection') ?>?components.type=benchmarks_result&components.device_id=<?= $device->{'devices.id'} ?>"><span style="width:1rem;" title="<?= __('View') ?>" class="fa fa-eye" aria-hidden="true"></span></a></td>
                                                    <td><?= $device->{'devices.name'} ?></td>
                                                    <td><?= ip_address_from_db($device->{'devices.ip'}) ?></td>
                                                    <td><?= $device->{'devices.os_family'} ?> <?= $device->{'devices.os_version'} ?></td>
                                                    <td><?= $device->{'benchmarks.name'} ?></td>
                                                    <td style="text-align: center;"><span class="<?= $text_class ?>"><?= $device->{'benchmarks_result.result'} ?></span></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="row text-center">
                                <div class="col-8 offset-2">
                                    <br><hr>
                                    <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                                    <?php
                                    if (!empty($resource->remediation)) {
                                        foreach ($resource->remediation as $key => $value) {
                                            $id = str_replace(' ', '', $key);
                                            echo '<a class="flex-sm-fill text-sm-center nav-link" href="#' . $id . '"  id="' . $key . '-tab">' . $key . "</a>\n";
                                        }
                                    }
                                    ?>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <?php if (!empty($resource->remediation)) {
                                foreach ($resource->remediation as $key => $value) {
                                    $id = str_replace(' ', '', $key);
                                    ?>
                            <div class="tab-content">
                                <div class="tab-pane" role="tabpanel" id="<?= $id ?>">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="background-color: rgba(var(--bs-body-color-rgb), 0.03);">
                                            <div class="input-group">
                                                <span style="word-break: break-all;"><?= urldecode(html_entity_decode(html_entity_decode($value))) ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>


<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {

        var hash = window.location.hash;
        if (hash == "") {
            hash = "#<?= (!empty($id)) ? $id : '' ?>"
        }
        hash && $('ul.nav.nav-pills a[href="' + hash + '"]').tab('show');

        $('ul.nav.nav-pills a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
            window.location.hash = this.hash;
        });

        // $(".nav-link").click(function(e) {
        //     window.scrollTo(0, 0);
        // });


        $("#severity").addClass('border');
        $("#severity").addClass('border-primary');
        <?php if ($resource->severity === 'low') { ?>
        $("#severity").addClass('border');
        $("#severity").addClass('border-success');
        <?php } ?>
        <?php if ($resource->severity === 'medium') { ?>
        $("#severity").addClass('border');
        $("#severity").addClass('border-warning');
        <?php } ?>
        <?php if ($resource->severity === 'high') { ?>
        $("#severity").addClass('border');
        $("#severity").addClass('border-danger');
        <?php } ?>

    })
};
</script>