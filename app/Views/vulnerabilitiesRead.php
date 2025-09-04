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

$status->id = 'pending';
$status->attributes->name = __('pending');
$statuses[] = $status;

$status->id = 'unlikely';
$status->attributes->name = __('unlikely');
$statuses[] = $status;

$status->id = 'confirmed';
$status->attributes->name = __('confirmed');
$statuses[] = $status;

$status->id = 'denied';
$status->attributes->name = __('denied');
$statuses[] = $status;

$status->id = 'other';
$status->attributes->name = __('other');
$statuses[] = $status;
$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab"><span style="margin-right:6px;" class="fa fa-eye text-primary"></span>' . __('Summary') . '</a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" class="fa fa-eye text-success"></span>' . __('Details') . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" class="fa fa-desktop text-primary" ></span>' . __('Devices') . '</a></li>';
} elseif ($style === 'icon') {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab"><span style="margin-right:6px;" title="' . __('Summary') . '" class="fa fa-eye text-primary"></span></a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" title="' . __('Details') . '" class="fa fa-eye text-success"></span></a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" title="' . __('Devices') . '" class="fa fa-desktop text-primary"></span></a></li>';
} else {
    $summary_button = '<li class="nav-item" role="presentation"><a href="#summary" class="nav-link" id="summary-tab">' . __('Summary') . '</a></li>';
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab">' . __('Details') . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab">' . __('Devices') . '</a></li>';
}

$link = "<a role=\"button\" title=\"" . __('View') . "\" target=\"_blank\" class=\"btn btn-outline-secondary link_button\" href=\"https://www.cve.org/CVERecord?id=" . $resource->cve . "\"><span title=\"" . __('View') . "\" class=\"fa-solid fa-arrow-up-right-from-square\" aria-hidden=\"true\"></span></a>";

if ($resource->type === 'application') {
    $columns = ['software.name', 'software.version'];
} else if ($resource->type === 'operating system') {
    $columns = ['devices.os_name', 'devices.os_version', 'devices.os_cpe'];
} else {
    $columns = array();
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
                                <?= $summary_button ?>
                                <?= $details_button ?>
                                <?= $devices_button ?>
                            </ul>
                        </div>
                    </div>
                    <br/>

                    <div class="tab-content">
                        <div class="tab-pane" id="summary" role="tabpanel" tabindex="0" aria-labelledby="summary">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('name', (!empty($resource->name)) ? $resource->name : '', $dictionary->columns->name, false, '', '', '', '', $meta->collection) ?>
                                    <!--
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <?= read_field_header($meta->collection, 'status', $dictionary->columns->status) ?>
                                            <div class="input-group">
                                                <select class="form-select" id="status" name="status" disabled>
                                                    <option value="pending"><?= __('pending') ?></option>
                                                    <option value="unlikely"><?= __('unlikely') ?></option>
                                                    <option value="confirmed"><?= __('confirmed') ?></option>
                                                    <option value="declined"><?= __('declined') ?></option>
                                                    <option value="other"><?= __('other') ?></option>
                                                    <option value=""><?= __('') ?></option>
                                                </select>
                                                <?php if ($update) { ?>
                                                <div class="float-end" style="padding-left:4px;">
                                                    <div data-attribute="status" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
                                                    <div data-attribute="status" class="btn btn-outline-success submit" style="display: none;\"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
                                                    <div data-attribute="status" class="btn btn-outline-danger cancel" style="display: none;\"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                    <?= read_field('cve', (!empty($resource->cve)) ? $resource->cve : '', $dictionary->columns->cve, false, 'CVE', $link, '', '', $meta->collection) ?>
                                    <?= read_field('published', (!empty($resource->published)) ? $resource->published : '', $dictionary->columns->published, false, '', '', '', '', $meta->collection) ?>
                                    <?= read_field('vuln_status', (!empty($resource->vuln_status)) ? $resource->vuln_status : '', $dictionary->columns->vuln_status, false, 'Vulnerability Status', '', '', '', $meta->collection) ?>
                                    <?= read_field('scope', (!empty($resource->scope)) ? $resource->scope : '', $dictionary->columns->scope, false, '', '', '', '', $meta->collection) ?>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <?= read_field_header($meta->collection, 'description', '', 'Description') ?>
                                            <div class="input-group">
                                                <textarea class="form-control" rows="6" id="description" name="description" disabled><?= @$resource->description ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (!empty($resource->remediation)) { ?>
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <?= read_field_header($meta->collection, 'remediation', '', 'Remediation') ?>
                                            <div class="input-group">
                                                <textarea class="form-control" rows="6" id="remediation" name="remediation" disabled><?= html_entity_decode($resource->remediation) ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                    <br>


                                    <?php
                                    if (!empty($resource->references) and is_array($resource->references)) {

                                        echo "<br><br><div class=\"row\">\n";
                                        foreach ($resource->references as $link) {
                                            if ($link->rel !== 'Broken Link') {
                                                echo "<div class=\"col-10 offset-2\">" . $link->rel . ": <a target=\"_blank\" href=\"" . $link->url . "\">" . $link->url . "</a><br><br></div>\n";
                                            }
                                        }
                                        echo "</div>\n";
                                    }
                                    ?>

                                </div>

                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-5 offset-1">
                                            <?= read_field('severity', $resource->base_severity, $dictionary->columns->base_severity, false, '', '', '', '', $meta->collection) ?>
                                        </div>
                                        <div class="col-5">
                                            <?= read_field('availability', $resource->impact_availability, $dictionary->columns->impact_availability, false, 'Impact :: Availability', '', '', '', $meta->collection) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5 offset-1">
                                            <?= read_field('confidentiality', $resource->impact_confidentiality, $dictionary->columns->impact_confidentiality, false, 'Impact :: Confidentiality', '', '', '', $meta->collection) ?>
                                        </div>
                                        <div class="col-5">
                                            <?= read_field('integrity', $resource->impact_integrity, $dictionary->columns->impact_integrity, false, 'Impact :: Integrity', '', '', '', $meta->collection) ?>
                                        </div>
                                    </div>
                                    <br><div class="col-10 offset-1"><hr></div><br>

                                    <?php
                                    if (!empty($resource->products)) {
                                        foreach ($resource->products as $key => $value) {
                                            echo read_field('products.' . $key , implode(', ', $value->names), 'Products derived from the CPE product name.', $update, __('Product Name Match from CPE: ') . $key, '', '', '', $meta->collection);
                                        }
                                        echo "<br><div class=\"col-10 offset-1\"><hr></div>";
                                    }
                                    ?>


                                    <?php
                                    $style = '';
                                    if (empty($included['software'])) {
                                        $included['software'] = 'No matching packages found in your database.';
                                        $style = 'style="border-color: #28a745;"';
                                    }
                                    ?>
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <div class="row" id="header_row_software_12">
                                                <div class="col-10 clearfix">
                                                    <label for="software" class="form-label" title="software">Matched Software Names From Your Database</label>
                                                </div>
                                                <div class="col-2">
                                                    <div class="float-end">
                                                    <a role="button" tabindex="0" class="btn btn-clear btn-sm" data-bs-container="#header_row_software_12" data-bs-html="true" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="focus" data-bs-content="&lt;code&gt;vulnerabilities.software&lt;/code&gt;&lt;br&gt;Software names from your current database that match this query."><i class="fa-regular fa-circle-question fa-sm" style="color:#74C0FC;"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <input disabled="" type="text" class="form-control" <?= $style ?> id="software" value="<?= $included['software'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <br><div class="col-10 offset-1"><hr></div><br>

                                    <!--
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-1 col-10" style="position:relative;">
                                            <?= read_field_header($meta->collection, 'filter', $dictionary->columns->filter, 'Filter') ?>
                                            <div class="input-group">
                                                <textarea class="form-control" rows="12" id="filter" name="filter" data-original-value="<?= htmlentities(json_encode($resource->filter, JSON_PRETTY_PRINT)) ?>" disabled><?= html_entity_decode(json_encode($resource->filter, JSON_PRETTY_PRINT)) ?></textarea>
                                            </div>
                                            <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="filter" data-dictionary="<?= $dictionary->columns->filter ?>"><span><br></span></div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-1 col-10" style="position:relative;">
                                            <?php
                                            $title = '';
                                            if (!empty($resource->generated) and $resource->generated === 'y') {
                                                $title = __('Generated') . ' ';
                                            }
                                            ?>
                                            <?= read_field_header($meta->collection, 'sql', $dictionary->columns->sql, $title . 'SQL') ?>
                                            <div class="input-group">
                                                <textarea class="form-control" rows="8" id="sql" name="sql" data-original-value="<?= $resource->sql ?>" disabled><?= html_entity_decode($resource->sql) ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-content">
                        <div class="tab-pane" id="details" role="tabpanel" tabindex="0" aria-labelledby="details">
                            <div class="row" style="padding-top:16px;">
                                <div class="col-6" style="position:relative;">
                                    <h5>NVD</h5>
                                    <?php
                                    if (!empty($resource->nvd_json)) {
                                        $rows = substr_count(json_encode($resource->nvd_json, JSON_PRETTY_PRINT), "\n");
                                    ?>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="<?= $rows ?>" id="nvd_json" name="nvd_json" disabled><?= html_entity_decode(json_encode($resource->nvd_json, JSON_PRETTY_PRINT)) ?></textarea>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="col-6" style="position:relative;">
                                    <h5>Mitre</h5>
                                    <?php
                                    if (!empty($resource->mitre_json)) {
                                        $rows = substr_count(json_encode($resource->mitre_json, JSON_PRETTY_PRINT), "\n");
                                    ?>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="<?= $rows ?>" id="mitre_json" name="mitre_json" disabled><?= html_entity_decode(json_encode($resource->mitre_json, JSON_PRETTY_PRINT)) ?></textarea>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="tab-content">
                        <div class="tab-pane" id="devices" role="tabpanel" tabindex="0" aria-labelledby="devices">
                            <div class="table-responsive">
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('View') ?></th>
                                        <th><?= __('Name') ?></th>
                                        <th><?= __('Orgs Name') ?></th>
                                        <?php foreach ($columns as $column) {
                                            $name = ucwords(str_replace('_', ' ', substr($column, strpos($column, '.')+1)));
                                            echo "<th>" . $name . "</th>\n";
                                        } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($included['devices'])) { ?>
                                    <?php foreach ($included['devices'] as $item) { ?>
                                    <tr>
                                        <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'devices.id'}) ?>" role="button" class="btn btn-sm btn-devices" title="<?= __('View') ?>"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
                                        <td><?= $item->attributes->{'devices.name'} ?></td>
                                        <td><?= $item->attributes->{'orgs.name'} ?></td>
                                        <?php foreach ($columns as $column) {
                                            echo "<td>" . $item->attributes->{$column} . "</td>\n";
                                        } ?>
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#status").val("<?= $resource->status ?>");

        var hash = window.location.hash;
        if (hash == "") {
            hash = "#summary"
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
