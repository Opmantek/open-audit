<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
$statuses = array();
foreach (['confirmed', 'declined', 'pending', 'other'] as $item) {
    $status = new stdClass();
    $status->id = $item;
    $status->attributes = new stdClass();
    $status->attributes->name = __($item);
    $statuses[] = $status;
}
$status = new stdClass();
$status->id = '';
$status->attributes = new stdClass();
$status->attributes->name = '';
$statuses[] = $status;
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', (!empty($resource->name)) ? $resource->name : '', $dictionary->columns->name, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('cve', (!empty($resource->cve)) ? $resource->cve : '', $dictionary->columns->cve, false, 'CVE', '', '', '', $meta->collection) ?>
                            <?= read_field('published', (!empty($resource->published)) ? $resource->published : '', $dictionary->columns->published, false, '', '', '', '', $meta->collection) ?>
                            <?= read_select('status', (!empty($resource->status)) ? $resource->status : '', $dictionary->columns->status, $update, '', $statuses, $meta->collection) ?>

                            <!--
                            <div class="col-4">
                                <div class="input-group">
                                    <select class="form-select" id="status" name="status" disabled>
                                        <option value="confirmed"><?= __('confirmed') ?></option>
                                        <option value="declined"><?= __('declined') ?></option>
                                        <option value="pending"><?= __('pending') ?></option>
                                        <option value="other"><?= __('other') ?></option>
                                        <option value=""><?= __('') ?></option>
                                    </select>
                                    <div class="float-end" style="padding-left:4px;">
                                        <div data-attribute="status" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
                                        <div data-attribute="status" class="btn btn-outline-success submit" style="display: none;\"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
                                        <div data-attribute="status" class="btn btn-outline-danger cancel" style="display: none;\"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
                                    </div>
                                </div>
                            </div>
                            -->

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'description', '', 'Description') ?>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="6" id="description" name="description" disabled><?= html_entity_decode(@$resource->firstwave->description) ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'likelihood', '', 'Likelihood') ?>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="4" id="remediation" name="remediation" disabled><?= html_entity_decode(@$resource->firstwave->likelihood) ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <?= read_field_header($meta->collection, 'remediation', '', 'Remediation') ?>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="6" id="remediation" name="remediation" disabled><?= html_entity_decode(@$resource->firstwave->remediation) ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">

                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('severity', @$resource->firstwave->severity, $dictionary->columns->severity, false, '', '', '', '', $meta->collection) ?>
                                </div>
                                <div class="col-6">
                                    <?= read_field('availability', @$resource->firstwave->impact->availability, $dictionary->columns->availability, false, 'Impact :: Availability', '', '', '', $meta->collection) ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('confidentiality', @$resource->firstwave->impact->confidentiality, $dictionary->columns->confidentiality, false, 'Impact :: Confidentiality', '', '', '', $meta->collection) ?>
                                </div>
                                <div class="col-6">
                                    <?= read_field('integrity', @$resource->firstwave->impact->integrity, $dictionary->columns->integrity, false, 'Impact :: Integrity', '', '', '', $meta->collection) ?>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="col-12" style="position:relative;">
                                    <hr>
                                    <h5>Conditions</h5>
                                    <?php if ($update) { ?>
                                    <!--<button type="button" id="add_inputs" name="add_inputs" class="btn btn-sm btn-success float-end" title="<?= __('Add') ?>"><i class="fa fa-plus" aria-hidden="true"></i></button>-->
                                    <?php } ?>
                                    <div id="inputs" class="input-group">
                                        <?php
                                        $input_count = 0;
                                        foreach ($resource->filter as $filter) {
                                            if ($filter->type === 'software') { ?>

                                            <div class="row" style="padding-top:16px;">
                                                <div class="col-4" style="position:relative;">
                                                    <div class="input-group">
                                                        <input disabled type="text" class="form-control" id="filters[<?= $input_count ?>][name]" name="filters[<?= $input_count ?>][name]" value="<?= $filter->name ?>" data-original-value="<?= $filter->name ?>">
                                                        <div class="float-end" style="padding-left:4px;">
                                                            <button data-attribute="filters[<?= $input_count ?>][name]" class="btn btn-outline-secondary edit" title="' . __('Edit') . '"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></button>
                                                            <button data-attribute="filters[<?= $input_count ?>][name]" class="btn btn-outline-success submit" title="' . __('Submit') . '" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></button>
                                                            <button data-attribute="filters[<?= $input_count ?>][name]" class="btn btn-outline-danger cancel" title="' . __('Cancel') . '" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="input-group">
                                                        <select class="form-select" id="filters[<?= $input_count ?>][operator]" name="filters[<?= $input_count ?>][operator]" disabled>
                                                            <option value="eq"><?= __('equals') ?></option>
                                                            <option value="ne"><?= __('does not equal') ?></option>
                                                            <option value="gt"><?= __('greater than') ?></option>
                                                            <option value="ge"><?= __('greater or equals') ?></option>
                                                            <option value="lt"><?= __('less than') ?></option>
                                                            <option value="le"><?= __('less or equals') ?></option>
                                                            <option value="st"><?= __('starts with') ?></option>
                                                            <option value="li"><?= __('like') ?></option>
                                                            <option value="nl"><?= __('not like') ?></option>
                                                            <option value="in"><?= __('in') ?></option>
                                                            <option value="ni"><?= __('not in') ?></option>
                                                            <option value="re"><?= __('regex') ?></option>
                                                        </select>
                                                        <div class="float-end" style="padding-left:4px;">
                                                            <div data-attribute="filters[<?= $input_count ?>][operator]" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
                                                            <div data-attribute="filters[<?= $input_count ?>][operator]" class="btn btn-outline-success submit" style="display: none;\"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
                                                            <div data-attribute="filters[<?= $input_count ?>][operator]" class="btn btn-outline-danger cancel" style="display: none;\"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-4" style="position:relative;">
                                                    <div class="input-group">
                                                        <input disabled type="text" class="form-control" id="" value="<?= $filter->version ?>" data-original-value="<?= $filter->version ?>">
                                                        <div class="float-end" style="padding-left:4px;">
                                                            <button data-attribute="filters[<?= $input_count ?>][version]" class="btn btn-outline-secondary edit" title="' . __('Edit') . '"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></button>
                                                            <button data-attribute="filters[<?= $input_count ?>][version]" class="btn btn-outline-success submit" title="' . __('Submit') . '" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></button>
                                                            <button data-attribute="filters[<?= $input_count ?>][version]" class="btn btn-outline-danger cancel" title="' . __('Cancel') . '" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $input_count += +1;
                                            }
                                        } ?>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="col-12" style="position:relative;">
                                    <h5>SQL</h5>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="8" id="sql" name="sql" data-original-value="<?= $resource->sql ?>" disabled><?= html_entity_decode($resource->sql) ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="sql" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="sql" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="sql" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="sql" data-dictionary="<?= $dictionary->columns->sql ?>"><span><br></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa fa-desktop oa-icon"></span><?= __('Devices') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                        <thead>
                            <tr>
                                <th class="text-center"><?= __('View') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Orgs Name') ?></th>
                                <th><?= __('Software Name') ?></th>
                                <th><?= __('Software Version') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($included['devices'] as $item) { ?>
                            <tr>
                                <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'devices.id'}) ?>" role="button" class="btn btn-sm btn-devices" title="<?= __('View') ?>"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
                                <td><?= $item->attributes->{'devices.name'} ?></td>
                                <td><?= $item->attributes->{'orgs.name'} ?></td>
                                <td><?= $item->attributes->{'software.name'} ?></td>
                                <td><?= $item->attributes->{'software.version'} ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        $("#status").val("<?= $resource->status ?>");
        <?php
            if (!empty($resource->firstwave->severity) and strtolower($resource->firstwave->severity) === 'high') {
                echo '                $("#severity").css({"color":"red"});' . "\n";
            }
            $attributes = array('availability', 'confidentiality', 'integrity');
            foreach ($attributes as $attribute) {
                if (!empty($resource->firstwave->impact->{$attribute}) and strtolower($resource->firstwave->impact->{$attribute}) === 'high') {
                    echo '                $("#' . $attribute . '").css({"color":"red"});' . "\n";
                }
            }

            $input_count = 0;
            if (!empty($resource->filter)) {
                foreach ($resource->filter as $filter) {
                    echo '                $("#filters\\\\[' . $input_count . '\\\\]\\\\[operator\\\\]").val("' . $filter->operator . '");' . "\n";
                    $input_count += 1;
                }
            }
        ?>





    });
}
</script>