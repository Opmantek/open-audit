<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/collection_functions.php';
$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" class="fa fa-eye text-success"></span>' . __('Details') . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#results" class="nav-link" id="results-tab"><span style="margin-right:6px;" class="fa fa-desktop text-primary" ></span>' . __('Results') . '</a></li>';
} elseif ($style === 'icon') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" title="' . __('Details') . '" class="fa fa-eye text-success"></span></a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#results" class="nav-link" id="results-tab"><span style="margin-right:6px;" title="' . __('Results') . '" class="fa fa-desktop text-primary"></span></a></li>';
} else {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab">' . __('Details') . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#results" class="nav-link" id="results-tab">' . __('Results') . '</a></li>';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">

                    <div class="row text-center">
                        <div class="col-8 offset-2" style="background-color: rgba(var(--bs-body-color-rgb), 0.03);">
                            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                                <?= $details_button ?>
                                <?= $devices_button ?>
                            </ul>
                        </div>
                    </div>
                    <br/>

                    <div class="tab-content">
                        <div class="tab-pane" id="details" role="tabpanel" tabindex="0" aria-labelledby="details">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                                    <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                                    <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                                    <?= read_field('type', $resource->type, $dictionary->columns->type, false) ?>
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
                                            <?php $fields = array('name', 'org_id', 'description', 'type', 'edited_by', 'edited_date') ?>
                                        <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                            <?php foreach ($fields as $key) { ?>
                                            <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="results" role="tabpanel" tabindex="0" aria-labelledby="results">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"]]'>
                                        <thead>
                                            <tr>
                                                <th>View</th>
                                                <th>Policy Class</th>
                                                <th>Policy Section</th>
                                                <th>Policy Name</th>
                                                <th>Responsibility</th>
                                                <th>Result</th>
                                                <th>Maturity Score</th>
                                                <th>Maturity Level</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($included['standards_results'] as $item) { ?>
                                            <?php
                                            if ($item->attributes->result === '') {
                                                $item->attributes->result = 'unanswered';
                                                $item->attributes->maturity_score = '';
                                            }
                                            if ($item->attributes->result === 'pass') {
                                                $item->attributes->result = '<span class="text-success">' . $item->attributes->result . '</span>';
                                            } else if ($item->attributes->result === 'fail') {
                                                $item->attributes->result = '<span class="text-danger">' . $item->attributes->result . '</span>';
                                            } else {
                                                $item->attributes->result = '<span class="text-warning">' . $item->attributes->result . '</span>';
                                            }
                                            ?>
                                            <tr>
                                                <?=collection_button_read('standards_results', $item->id) ?>
                                                <td><?= $item->attributes->{'standards_policies.class'} ?></td>
                                                <td><span style="display:none;"><?= $item->attributes->{'standards_policies.section_padded'} ?></span><?= $item->attributes->{'standards_policies.section'} ?></td>
                                                <td><?= $item->attributes->{'standards_policies.name'} ?></td>
                                                <td><?= $item->attributes->responsibility ?></td>
                                                <td><?= $item->attributes->result ?></td>
                                                <td><?= $item->attributes->maturity_score ?></td>
                                                <td><?= $item->attributes->maturity_level ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
            hash = "#details"
        }
        hash && $('ul.nav.nav-pills a[href="' + hash + '"]').tab('show');

        $('ul.nav.nav-pills a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
            window.location.hash = this.hash;
        });

        $(".nav-link").click(function(e) {
            window.scrollTo(0, 0);
        });

    });
}
</script>