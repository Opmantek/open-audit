<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" class="fa-regular fa-rectangle-list text-success"></span>' . __('Details') . '</a></li>';
    $policies_button = '<li class="nav-item" role="presentation"><a href="#policies" class="nav-link" id="policies-tab"><span style="margin-right:6px;" class="fa fa-eye text-primary"></span>' . __('Policies') . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" class="fa-solid fa-wifi text-primary"></span>' . __('Devices') . '</a></li>';
    $logs_button = '<li class="nav-item" role="presentation"><a href="#logs" class="nav-link" id="logs-tab"><span style="margin-right:6px;" class="fa fa-bars text-primary"></span>' . __('Logs') . '</a></li>';
} elseif ($style === 'icon') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" title="' . __('Summary') . '" class="fa-regular fa-rectangle-list text-success"></span></a></li>';
    $policies_button = '<li class="nav-item" role="presentation"><a href="#policies" class="nav-link" id="policies-tab"><span style="margin-right:6px;" title="' . __('Details') . '" class="fa fa-eye text-primary"></span></a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" title="' . __('Devices') . '" class="fa-solid fa-wifi text-primary"></span></a></li>';
    $logs_button = '<li class="nav-item" role="presentation"><a href="#logs" class="nav-link" id="logs-tab"><span style="margin-right:6px;" class="fa fa-bars text-primary"></span></a></li>';
} else {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab">' . __('Details') . '</a></li>';
    $policies_button = '<li class="nav-item" role="presentation"><a href="#policies" class="nav-link" id="policies-tab">' . __('Policies') . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab">' . __('Devices') . '</a></li>';
    $logs_button = '<li class="nav-item" role="presentation"><a href="#logs" class="nav-link" id="logs-tab">' . __('Logs') . '</a></li>';
}
$results = new stdClass();
foreach ($included['policies'] as $policy) {
    if (!isset($results->{$policy->severity})) {
        $results->{$policy->severity} = new \stdClass();
        $results->{$policy->severity}->pass = 0;
        $results->{$policy->severity}->fail = 0;
        $results->{$policy->severity}->error = 0;
        $results->{$policy->severity}->notapplicable = 0;
        $results->{$policy->severity}->notchecked = 0;
        $results->{$policy->severity}->unknown = 0;
    }
    if (empty($results->{$policy->severity}->{$policy->result})) {
        $results->{$policy->severity}->{$policy->result} = 0;
    }
    $results->{$policy->severity}->{$policy->result} = $results->{$policy->severity}->{$policy->result} + intval($policy->count);
}
$device_count = 0;
if (!empty(json_decode($resource->devices))) {
    $device_count = intval(count(json_decode($resource->devices)));
}
$schedule = __('Unscheduled');
$hour = '';
if (isset($included['task']->hour) and $included['task']->hour !== '') {
    $hour = $included['task']->hour;
    if ($hour > 12) {
        $hour = $hour - 12 . 'pm';
    } else {
        $hour .= 'am';
    }
}
$days = '';
if (isset($included['task']->day_of_week) and $included['task']->day_of_week !== '') {
    $days = [];
    $split = explode(',', $included['task']->day_of_week);
    if ($included['task']->day_of_week === '*') { $days[] = __('Every Day'); }
    if (in_array('0', $split)) { $days[] = __('Sunday'); }
    if (in_array('1', $split)) { $days[] = __('Monday'); }
    if (in_array('2', $split)) { $days[] = __('Tuesday'); }
    if (in_array('3', $split)) { $days[] = __('Wednesday'); }
    if (in_array('4', $split)) { $days[] = __('Thursday'); }
    if (in_array('5', $split)) { $days[] = __('Friday'); }
    if (in_array('6', $split)) { $days[] = __('Saturday'); }
    $days = implode(',', $days);
}
if (!empty($hour) and !empty($days)) {
    $schedule = $days . ' at ' . $hour;
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
                                <?= $policies_button ?>
                                <?= $devices_button ?>
                                <?= $logs_button ?>
                            </ul>
                        </div>
                    </div>
                    <br>



                    <div class="tab-content">
                        <div class="tab-pane" id="details" role="tabpanel" tabindex="0" aria-labelledby="details">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                                    <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                                    <?= read_field('description', $resource->name, $dictionary->columns->name, $update) ?>
                                    <?= read_field('type', $resource->type, $dictionary->columns->type, false) ?>
                                    <?= read_field('os', $resource->os, $dictionary->columns->os, false) ?>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="schedule" class="form-label">Schedule</label>
                                            <div class="input-group">
                                                <input disabled="" type="text" class="form-control" id="schedule" value="<?= $schedule ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="device_count" class="form-label">Number of Devices</label>
                                            <div class="input-group">
                                                <input disabled="" type="text" class="form-control" id="device_count" value="<?= $device_count ?>">
                                            </div>
                                        </div>
                                    </div>


                                    <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                                    <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                                    <br>
                                </div>
                                <div class="col-6">
                                    <br>
                                    <div class="offset-1 col-10">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width: 15%;">Severity</th>
                                                    <th style="width: 15%; text-align: right;"><?= __('Pass') ?></th>
                                                    <th style="width: 15%; text-align: right;"><?= __('Fail') ?></th>
                                                    <th style="width: 15%; text-align: right;"><?= __('Error') ?></th>
                                                    <th style="width: 20%; text-align: right;"><?= __('Not Applicable') ?></th>
                                                    <th style="width: 20%; text-align: right;"><?= __('Not Checked') ?></th>
                                                    <th style="width: 20%; text-align: right;"><?= __('Unknown') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-success"><?= __('Low') ?></td>
                                                    <td style="text-align: right;" class="text-success"><?= @$results->low->pass ?></td>
                                                    <td style="text-align: right;" class="text-success"><?= @$results->low->fail ?></td>
                                                    <td style="text-align: right;"><?= @$results->low->error ?></td>
                                                    <td style="text-align: right;"><?= @$results->low->notapplicable ?></td>
                                                    <td style="text-align: right;"><?= @$results->low->notchecked ?></td>
                                                    <td style="text-align: right;"><?= @$results->low->unknown ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-warning"><?= __('Medium') ?></td>
                                                    <td style="text-align: right;" class="text-success"><?= @$results->medium->pass ?></td>
                                                    <td style="text-align: right;" class="text-warning"><?= @$results->medium->fail ?></td>
                                                    <td style="text-align: right;"><?= @$results->medium->error ?></td>
                                                    <td style="text-align: right;"><?= @$results->medium->notapplicable ?></td>
                                                    <td style="text-align: right;"><?= @$results->medium->notchecked ?></td>
                                                    <td style="text-align: right;"><?= @$results->medium->unknown ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger"><?= __('High') ?></td>
                                                    <td style="text-align: right;" class="text-success"><?= @$results->high->pass ?></td>
                                                    <td style="text-align: right;" class="text-danger"><?= @$results->high->fail ?></td>
                                                    <td style="text-align: right;"><?= @$results->high->error ?></td>
                                                    <td style="text-align: right;"><?= @$results->high->notapplicable ?></td>
                                                    <td style="text-align: right;"><?= @$results->high->notchecked ?></td>
                                                    <td style="text-align: right;"><?= @$results->high->unknown ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="offset-2 col-8">
                                    <br><br>
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    Do not attempt to implement any of the settings in
                                    this guide without first testing them in a non-operational environment. The
                                    creators of this guidance assume no responsibility whatsoever for its use by
                                    other parties, and makes no guarantees, expressed or implied, about its
                                    quality, reliability, or any other characteristic.
                                    </div>
                                    <br><br>
                                    This guide presents a catalog of security-relevant
configuration settings for Red Hat Enterprise Linux 7. It is a rendering of
content structured in the eXtensible Configuration Checklist Description Format (XCCDF)
in order to support security automation.  The SCAP content is
is available in the <code>scap-security-guide</code> package which is developed at

    <a href="https://www.open-scap.org/security-policies/scap-security-guide">https://www.open-scap.org/security-policies/scap-security-guide</a>.
<br><br>
Providing system administrators with such guidance informs them how to securely
configure systems under their control in a variety of network roles. Policy
makers and baseline creators can use this catalog of settings, with its
associated references to higher-level security control catalogs, in order to
assist them in security baseline creation. This guide is a <em>catalog, not a
checklist</em>, and satisfaction of every item is not likely to be possible or
sensible in many operational scenarios. However, the XCCDF format enables
granular selection and adjustment of settings, and their association with OVAL
and OCIL content provides an automated checking capability. Transformations of
this document, and its associated automated checking content, are capable of
providing baselines that meet a diverse set of policy objectives. Some example
XCCDF <em>Profiles</em>, which are selections of items that form checklists and
can be used as baselines, are available with this guide. They can be
processed, in an automated fashion, with tools that support the Security
Content Automation Protocol (SCAP). The DISA STIG, which provides required
settings for US Department of Defense systems, is one example of a baseline
created from this guidance.
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="tab-content">
                        <div class="tab-pane" id="policies" role="tabpanel" tabindex="0" aria-labelledby="policies">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;"><?= __('View') ?></th>
                                                <!--<th style="text-align: center;"><?= __('Control ID') ?></th>-->
                                                <th><?= __('Name') ?></th>
                                                <th style="text-align: center;"><?= __('Severity') ?></th>
                                                <th style="text-align: center;"><?= __('Pass') ?></th>
                                                <th style="text-align: center;"><?= __('Fail') ?></th>
                                                <th style="text-align: center;"><?= __('Error') ?></th>
                                                <th style="text-align: center;"><?= __('Not Applicable') ?></th>
                                                <th style="text-align: center;"><?= __('Not Checked') ?></th>
                                                <th style="text-align: center;"><?= __('Unknown') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($included['policies'])) { ?>
                                            <?php foreach ($included['policies'] as $policy) { ?>
                                                <?php
                                                    $severity_class = 'btn-primary';
                                                    if ($policy->severity === 'medium') {
                                                        $severity_class = 'btn-warning';
                                                    }
                                                    if ($policy->severity === 'high') {
                                                        $severity_class = 'btn-danger';
                                                    }
                                                    if ($policy->severity === 'low') {
                                                        $severity_class = 'btn-success';
                                                    }
                                                    $pass_button = '';
                                                    if (!empty($policy->pass)) {
                                                        $pass_button = '<button type="button" class="btn btn-success">' . $policy->pass . '</button>';
                                                    }
                                                    $fail_button = '';
                                                    if (!empty($policy->fail)) {
                                                        $fail_button = '<button type="button" class="btn btn-danger">' . $policy->fail . '</button>';
                                                    }
                                                    $error_button = '';
                                                    if (!empty($policy->error)) {
                                                        $error_button = '<button type="button" class="btn btn-warning">' . $policy->error . '</button>';
                                                    }
                                                    $notapplicable_button = '';
                                                    if (!empty($policy->notapplicable)) {
                                                        $notapplicable_button = '<button type="button" class="btn btn-primary">' . $policy->notapplicable . '</button>';
                                                    }
                                                    $notchecked_button = '';
                                                    if (!empty($policy->notchecked)) {
                                                        $notchecked_button = '<button type="button" class="btn btn-primary">' . $policy->notchecked . '</button>';
                                                    }
                                                    $unknown_button = '';
                                                    if (!empty($policy->unknown)) {
                                                        $unknown_button = '<button type="button" class="btn btn-primary">' . $policy->unknown . '</button>';
                                                    }
                                                ?>
                                            <tr>
                                                <td class="text-center"><span style="display:none;"><?= $policy->id ?></span><a title="<?= __('View') ?>" role="button" class="btn btn-sm btn-primary" href="<?= url_to('componentsRead', $policy->id) ?>?components.type=benchmark_result"><span style="width:1rem;" title="<?= __('View') ?>" class="fa fa-eye" aria-hidden="true"></span></a></td>
                                                <!--<td style="text-align: center;"><?= $policy->external_ident ?></td>-->
                                                <td><?= $policy->name ?></td>
                                                <td style="text-align: center;"><button type="button" class="btn <?= $severity_class ?>"><?= $policy->severity ?></button></td>
                                                <td style="text-align: center;"><?= $pass_button ?></td>
                                                <td style="text-align: center;"><?= $fail_button ?></td>
                                                <td style="text-align: center;"><?= $error_button ?></td>
                                                <td style="text-align: center;"><?= $notapplicable_button ?></td>
                                                <td style="text-align: center;"><?= $notchecked_button ?></td>
                                                <td style="text-align: center;"><?= $unknown_button ?></td>
                                            </tr>
                                            <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-content">
                        <div class="tab-pane" id="devices" role="tabpanel" tabindex="0" aria-labelledby="devices">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]' id="devices_table">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;"><?= __('View') ?></th>
                                                <th style="text-align: center;"><?= __('Results') ?></th>
                                                <th style="text-align: center;"><?= __('Device') ?></th>
                                                <th><?= __('IP') ?></th>
                                                <th><?= __('OS') ?></th>
                                                <th style="text-align: center;"><?= __('OpenScap is Installed') ?></th>
                                                <th style="text-align: center;"><?= __('Working Credentials') ?></th>
                                                <th><?= __('Organisation') ?></th>
                                                <th data-orderable="false" class="text-center">
                                                    <button style="margin-left:10px; display:none;" type="button" class="btn btn-sm btn-success float-end submit_devices" id="submit_devices"><?= __('Submit') ?></button>
                                                    <button style="margin-left:10px; display:none;" type="button" class="btn btn-sm btn-danger float-end" id="cancel_devices"><?= __('Cancel') ?></button>
                                                    <button style="margin-left:10px;" type="button" class="btn btn-sm btn-primary float-end" id="edit_devices"><?= __('Edit') ?></button>
                                                    <button type="button" id="modalButton" class="btn btn-sm btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addDevicesModel" disabled><?= __('Add') ?></button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                <?php
                                    $devices_in = false;
                                    $devices_out = false;
                                    if (!empty($included['devices'])) {
                                    $devices_in_benchmark = json_decode($resource->devices);
                                    foreach ($included['devices'] as $device) {
                                        $credentials = '';
                                        if ($device->credentials === 'y') {
                                            $credentials = '<span class="fa-solid fa-check text-success"></span>';
                                        }
                                        $device_in_benchmark = false;
                                        if (is_array($devices_in_benchmark) and in_array($device->id, $devices_in_benchmark)) {
                                            $device_in_benchmark = true;
                                            $devices_in = true;
                                        } else {
                                            $devices_out = true;
                                        }
                                        if ($device_in_benchmark) { ?>
                                            <tr>
                                                <td class="text-center"><a title="<?= __('View') ?>" role="button" class="btn <?= $GLOBALS['button'] ?> btn-devices" href="<?= url_to('devicesRead', $device->id) ?>"><span style="width:1rem;" title="<?= __('View') ?>" class="fa fa-desktop" aria-hidden="true"></span></a></td>
                                                <td class="text-center"><a title="<?= __('View') ?>" role="button" class="btn <?= $GLOBALS['button'] ?> btn-primary" href="<?= url_to('componentsCollection') ?>?components.type=benchmark_result&components.device_id=<?= $device->id ?>&benchmark_result.benchmark_id=<?= $resource->id ?>"><span style="width:1rem;" title="<?= __('View') ?>" class="fa fa-eye" aria-hidden="true"></span></a></td>
                                                <td><strong><?= $device->name ?></strong></td>
                                                <td><?= $device->ip ?></td>
                                                <td><?= $device->os_family ?> <?= $device->os_version ?></td>
                                                <td style="text-align: center;"><?php if (!empty($device->{'software.name'})) { echo '<span class="fa-solid fa-check text-success"></span>'; } ?></td>
                                                <td style="text-align: center;"><?= $credentials ?></td>
                                                <td><?= $device->{'orgs.name'} ?>
                                                <td style="text-align: center;"><input class="devices" aria-label="<?= __('Select') ?>" type="checkbox" id="data[attributes][devices][<?= $device->id ?>]" value="<?= $device->id ?>" name="data[attributes][devices][<?= $device->id ?>]" checked disabled></td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="tab-content">
                        <div class="tab-pane" id="logs" role="tabpanel" tabindex="0" aria-labelledby="logs">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;"><?= __('ID') ?></th>
                                                <th style="text-align: center;"><?= __('Timestamp') ?></th>
                                                <th style="text-align: center;"><?= __('Severity') ?></th>
                                                <th><?= __('Device') ?></th>
                                                <th><?= __('Message') ?></th>
                                                <th><?= __('Output') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($included['logs'])) { ?>
                                            <?php foreach ($included['logs'] as $log) { ?>
                                            <tr>
                                                <td class="text-center"><?= $log->id ?></td>
                                                <td class="text-center"><?= $log->timestamp ?></td>
                                                <td style="text-align: center;"><?= $log->severity ?></td>
                                                <td><strong><?= $log->{'devices.name'} ?></strong><br><?= $log->{'devices.ip'} ?></td>
                                                <td><?= $log->message ?></td>
                                                <td><?= $log->command_output ?></td>
                                            </tr>
                                            <?php } ?>
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

<?php if ($devices_out) { ?>
<div class="modal modal-xl" tabindex="-1" id="addDevicesModel">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add Devices</h5>
        </div>
        <div class="modal-body">
            <div class="table-responsive">
                <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover" data-order='[[1,"asc"]]' id="add_devices_table">
                    <thead>
                        <tr>
                            <th><?= __('Device') ?></th>
                            <th style="text-align: center;"><?= __('OpenScap is Installed') ?></th>
                            <th style="text-align: center;"><?= __('Working Credentials') ?></th>
                            <th><?= __('Organisation') ?></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
            <?php
                foreach ($included['devices'] as $device) {
                    $credentials = '';
                    if ($device->credentials === 'y') {
                        $credentials = '<span class="fa-solid fa-check text-success"></span>';
                    }
                    if (is_array($devices_in_benchmark) and !in_array($device->id, $devices_in_benchmark)) { ?>
                        <tr>
                            <td><strong><?= $device->name ?></strong><br><?= $device->ip ?></td>
                            <td style="text-align: center;"><?php if (!empty($device->{'software.name'})) { echo '<span class="fa-solid fa-check text-success"></span>'; } ?></td>
                            <td style="text-align: center;"><?= $credentials ?></td>
                            <td><?= $device->{'orgs.name'} ?>
                            <td style="text-align: center;"><input class="devices" aria-label="<?= __('Select') ?>" type="checkbox" id="data[attributes][devices][<?= $device->id ?>]" value="<?= $device->id ?>" name="data[attributes][devices][<?= $device->id ?>]"></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-danger" data-bs-dismiss="modal"><?= __('Cancel') ?></button>
            <button type="button" class="btn btn-success submit_devices"><?= __('Submit') ?></button>
        </div>
        </div>
    </div>
</div>

<?php } ?>


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

        <?php if ($devices_out) { ?>
            $("#modalButton").removeAttr("disabled");
        <?php } ?>


        $("#edit_devices").click(function(e) {
            $("#devices_table > tbody > tr > td > input").removeAttr("disabled");
            $("#edit_devices").hide();
            $("#submit_devices").show();
            $("#cancel_devices").show();
        });

        $("#cancel_devices").click(function(e) {
            $("#devices_table > tbody > tr > td > input").attr("disabled");
            $("#edit_devices").show();
            $("#submit_devices").hide();
            $("#cancel_devices").hide();
        });

        $(".submit_devices").click(function(e) {
            var data = {};
            data["data"] = {};
            data["data"]["id"] = <?= intval($resource->id) ?>;
            data["data"]["type"] = 'benchmarks';
            data["data"]["attributes"] = {};
            data["data"]["attributes"]["devices"] = $('.devices:checkbox:checked').map(function() {
                return this.value;
            }).get();
            data = JSON.stringify(data);
            $.ajax({
            type: "PATCH",
            url: id,
            contentType: "application/json",
            data: {data : data},
            success: function (data) {
               window.location = id;
            },
            error: function (data) {
                data = JSON.parse(data.responseText);
                $("#liveToastFailure-header").text("Update Failed");
                $("#liveToastFailure-body").text(data.message);
                var toastElList = [].slice.call(document.querySelectorAll('.toast-failure'));
                var toastList = toastElList.map(function(toastEl) {
                    return new bootstrap.Toast(toastEl)
                });
                toastList.forEach(toast => toast.show());
            }
            });
        });
    });
}
</script>