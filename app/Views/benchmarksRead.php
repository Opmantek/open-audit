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
$severities = array('low', 'medium', 'high', 'info', 'unknown');
$outcomes = array('error', 'fail', 'fixed', 'informational', 'notapplicable', 'notchecked', 'pass', 'unknown');

$results = new stdClass();
foreach ($severities as $severity) {
    $results->{$severity} = new \stdClass();
    foreach ($outcomes as $outcome) {
        $results->{$severity}->{$outcome} = 0;
    }
}

$count = 0;
foreach ($included['policies'] as $policy) {
    if (!isset($results->{$policy->severity})) {
        $results->{$policy->severity} = new \stdClass();
        $results->{$policy->severity}->error = 0;
        $results->{$policy->severity}->fail = 0;
        $results->{$policy->severity}->fixed = 0;
        $results->{$policy->severity}->informational = 0;
        $results->{$policy->severity}->notapplicable = 0;
        $results->{$policy->severity}->notchecked = 0;
        $results->{$policy->severity}->pass = 0;
        $results->{$policy->severity}->unknown = 0;
    }
    if (empty($results->{$policy->severity}->{$policy->result})) {
        $results->{$policy->severity}->{$policy->result} = 0;
    }
    $results->{$policy->severity}->{$policy->result} = $results->{$policy->severity}->{$policy->result} + intval($policy->count);
    $count += 1;
}
$pass = 0;
$fail = 0;
$other = 0;
foreach ($results as $key => $value) {
    $pass = $pass + intval($value->pass);
    $fail = $fail + intval($value->fail);
    $other = $other + intval($value->error) + intval($value->notapplicable) + intval($value->notchecked) + intval($value->unknown) + intval($value->informational) + intval($value->fixed);
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
    if ($included['task']->day_of_week === '*') {
        $days[] = __('Every Day');
    }
    if (in_array('0', $split)) {
        $days[] = __('Sunday');
    }
    if (in_array('1', $split)) {
        $days[] = __('Monday');
    }
    if (in_array('2', $split)) {
        $days[] = __('Tuesday');
    }
    if (in_array('3', $split)) {
        $days[] = __('Wednesday');
    }
    if (in_array('4', $split)) {
        $days[] = __('Thursday');
    }
    if (in_array('5', $split)) {
        $days[] = __('Friday');
    }
    if (in_array('6', $split)) {
        $days[] = __('Saturday');
    }
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
                                    <?= read_field('last_run', $resource->last_run, '', false) ?>

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

                                <div class="offset-1 col-10">
                                    <br><br>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="padding:1rem;">
                                            <div class="row">
                                                <div class="col-9">
                                                    <strong>
                                                        <span class="text-left"><?= $resource->type ?></span>
                                                    </strong>
                                                </div>
                                                <div class="col-3 clearfix">
                                                    <strong>
                                                        <span class="float-end text-right"><?= $resource->os ?></span>
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <br>
                                                    <img src="<?= $meta->baseurl ?>logos/<?= explode(' ', strtolower($resource->os))[0] ?>.svg" class="float-end imgshadow" alt=""style="width:75px;">
                                                    <p>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <!--
                                    <div class="offset-1 col-10">
                                        <?php if ($count > 0) { ?>
                                        <h3>Results</h3>
                                        <div class="progress-stacked"  style="height: 2.5em">
                                            <div class="progress" role="progressbar" aria-label="Pass" aria-valuenow="<?= $pass ?>" aria-valuemin="0" aria-valuemax="<?= $count ?>" style="width: <?= (($pass / $count) * 100) ?>%">
                                                <div class="progress-bar bg-success fw-bold"  style="height: 2.5em"><?= $pass . ' ' . __('Passed') ?></div>
                                            </div>
                                            <div class="progress" role="progressbar" aria-label="Other" aria-valuenow="<?= $other ?>" aria-valuemin="0" aria-valuemax="<?= $count ?>" style="width: <?= (($other / $count) * 100) ?>%">
                                                <div class="progress-bar bg-warning fw-bold"  style="height: 2.5em"><?= $other . ' ' . __('Others') ?></div>
                                            </div>
                                            <div class="progress" role="progressbar" aria-label="Fail" aria-valuenow="<?= $fail ?>" aria-valuemin="0" aria-valuemax="<?= $count ?>" style="width: <?= (($fail / $count) * 100) ?>%">
                                                <div class="progress-bar bg-danger fw-bold"  style="height: 2.5em"><?= $fail . ' ' . __('Failed') ?></div>
                                            </div>
                                        </div>
                                        <br>
                                        <h3>Severity of Failed Results</h3>
                                        <div class="progress-stacked"  style="height: 2.5em">
                                            <?php
                                            $fail_count = $results->low->fail + $results->medium->fail + $results->high->fail;
                                            $low_fail_percent = 0;
                                            $medium_fail_percent = 0;
                                            $high_fail_percent = 0;
                                            if (!empty($results->low->fail) and !empty($fail_count)) {
                                                $low_fail_percent = ($results->low->fail / $fail_count) * 100;
                                            }
                                            if (!empty($results->medium->fail) and !empty($fail_count)) {
                                                $medium_fail_percent = ($results->medium->fail / $fail_count) * 100;
                                            }
                                            if (!empty($results->high->fail) and !empty($fail_count)) {
                                                $high_fail_percent = ($results->high->fail / $fail_count) * 100;
                                            }
                                            ?>
                                            <div class="progress" role="progressbar" aria-label="Low" aria-valuenow="<?= $results->low->fail ?>" aria-valuemin="0" aria-valuemax="<?= $fail_count ?>" style="width: <?= $low_fail_percent ?>%">
                                                <div class="progress-bar bg-success fw-bold"  style="height: 2.5em"><?= $results->low->fail . ' ' . __('Low') ?></div>
                                            </div>
                                            <div class="progress" role="progressbar" aria-label="Medium" aria-valuenow="<?= $results->medium->fail ?>" aria-valuemin="0" aria-valuemax="<?= $fail_count ?>" style="width: <?= $medium_fail_percent ?>%">
                                                <div class="progress-bar bg-warning fw-bold"  style="height: 2.5em"><?= $results->medium->fail . ' ' . __('Medium') ?></div>
                                            </div>
                                            <div class="progress" role="progressbar" aria-label="High" aria-valuenow="<?= $results->high->fail ?>" aria-valuemin="0" aria-valuemax="<?= $fail_count ?>" style="width: <?= $high_fail_percent ?>%">
                                                <div class="progress-bar bg-danger fw-bold"  style="height: 2.5em"><?= $results->high->fail . ' ' . __('High') ?></div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <?php } ?>
                                    </div>
                                    -->

                                    <?php
                                    foreach ($severities as $severity) {
                                        foreach ($outcomes as $outcome) {
                                            if ($results->{$severity}->{$outcome}  === 0) {
                                                $results->{$severity}->{$outcome} = '';
                                            }
                                        }
                                    }
                                    ?>
                                    <br>
                                    <div class="offset-1 col-10">
                                        <div class="row">
                                            <div class="col-6" id="chart"></div>
                                            <div class="col-6" id="chart2"></div>
                                        </div>
                                    </div>



                                    <br>
                                    <div class="offset-1 col-10">
                                        <table class="table" style="font-weight: bold; text-align: center; border: white; margin-left: -25px;">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th style="width:28%"><abbr title="The target system or system component did not satisfy at least one condition of the rule."><?= __('Fail') ?></abbr></th>
                                                    <th style="width:28%"><abbr title="See the policy results for a more detailed explanation."><?= __('Other') ?></abbr></th>
                                                    <th style="width:28%"><abbr title="The target system or system component satisfied all the conditions of the rule."><?= __('Pass') ?></abbr></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?= __('High') ?></td>
                                                    <td style="color: #fff; background-color: #dc3545;"><?= $results->high->fail ?></td>
                                                    <td style="color: #fff; background-color: #ffc107;"><?= intval(intval($results->high->unknown) +
                                                    intval($results->high->error) +
                                                    intval($results->high->notapplicable) +
                                                    intval($results->high->notchecked) +
                                                    intval($results->high->fixed) +
                                                    intval($results->high->informational) +
                                                    intval($results->high->unknown)) ?></td>
                                                    <td style="text-align: center; color: #fff; background-color: #28a745;"><?= $results->high->pass ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: bold;"><?= __('Medium') ?></td>
                                                    <td style="color: #fff; background-color: #e25563;"><?= $results->medium->fail ?></td>
                                                    <td style="color: #fff; background-color: #ffcb2f;"><?= intval(intval($results->medium->unknown) +
                                                    intval($results->medium->error) +
                                                    intval($results->medium->notapplicable) +
                                                    intval($results->medium->notchecked) +
                                                    intval($results->medium->fixed) +
                                                    intval($results->medium->informational) +
                                                    intval($results->medium->unknown)) ?></td>
                                                    <td style="color: #fff; background-color: #4ab563;"><?= $results->medium->pass ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: bold;"><?= __('Low') ?></td>
                                                    <td style="color: #fff; background-color: #e77681;"><?= $results->low->fail ?></td>
                                                    <td style="color: #fff; background-color: #ffd556;"><?= intval(intval($results->low->unknown) +
                                                    intval($results->low->error) +
                                                    intval($results->low->notapplicable) +
                                                    intval($results->low->notchecked) +
                                                    intval($results->low->fixed) +
                                                    intval($results->low->informational) +
                                                    intval($results->low->unknown)) ?></td>
                                                    <td style="color: #fff; background-color: #6dc381;"><?= $results->low->pass ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: bold;"><?= __('Other') ?></td>
                                                    <td style="color: #5B5B66; background-color: #f2b6bc;"><?= intval(intval($results->info->fail) + intval($results->unknown->fail)) ?></td>
                                                    <td style="color: #5B5B66; background-color: #ffe9a6;"><?= intval(intval($results->info->unknown) +
                                                    intval($results->info->error) +
                                                    intval($results->info->notapplicable) +
                                                    intval($results->info->notchecked) +
                                                    intval($results->info->fixed) +
                                                    intval($results->info->informational) +
                                                    intval($results->info->unknown) +
                                                    intval($results->unknown->error) +
                                                    intval($results->unknown->notapplicable) +
                                                    intval($results->unknown->notchecked) +
                                                    intval($results->unknown->fixed) +
                                                    intval($results->unknown->informational) +
                                                    intval($results->unknown->unknown)) ?></td>
                                                    <td style="color: #5B5B66; background-color: #b2dfbc;"><?= intval(intval($results->info->pass) + intval($results->unknown->pass)) ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br><br>






                                    <!--
                                    <div class="offset-1 col-10">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10%;">Severity</th>
                                                    <th style="width: 10%; text-align: center;"><abbr title="The target system or system component satisfied all the conditions of the rule."><?= __('Pass') ?></abbr></th>
                                                    <th style="width: 10%; text-align: center;"><abbr title="The target system or system component did not satisfy at least one condition of the rule."><?= __('Fail') ?></abbr></th>
                                                    <th style="width: 10%; text-align: center;"><abbr title="The checking engine could not complete the evaluation, therefore the status of the target's compliance with the rule is not certain. This could happen, for example, if a testing tool was run with insufficient privileges and could not gather all of the necessary information."><?= __('Error') ?></abbr></th>
                                                    <th style="width: 20%; text-align: center;"><abbr title="The Rule was not applicable to the target of the test. For example, the Rule might have been specific to a different version of the target OS, or it might have been a test against a platform feature that was not installed."><?= __('Not Applicable') ?></abbr></th>
                                                    <th style="width: 20%; text-align: center;"><abbr title="The Rule was not evaluated by the checking engine. This status is designed for Rule elements that have no check elements or that correspond to an unsupported checking system. It may also correspond to a status returned by a checking engine if the checking engine does not support the indicated check code."><?= __('Not Checked') ?></abbr></th>
                                                    <th style="width: 10%; text-align: center;"><abbr title="The Rule had failed, but was then fixed (possibly by a tool that can automatically apply remediation, or possibly by the human auditor)."><?= __('Fixed') ?></abbr></th>
                                                    <th style="width: 10%; text-align: center;"><abbr title="The Rule was checked, but the output from the checking engine is simply information for auditors or administrators; it is not a compliance category. This status value is designed for Rule elements whose main purpose is to extract information from the target rather than test the target."><?= __('Informational') ?></abbr></th>
                                                    <th style="width: 20%; text-align: center;"><abbr title="The testing tool encountered some problem and the result is unknown. For example, a result of 'unknown' might be given if the testing tool was unable to interpret the output of the checking engine (the output has no meaning to the testing tool)."><?= __('Unknown') ?></abbr></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-success"><?= __('Low') ?></td>
                                                    <td style="text-align: center;" class="text-success"><?= $results->low->pass ?></td>
                                                    <td style="text-align: center;" class="text-success"><?= $results->low->fail ?></td>
                                                    <td style="text-align: center;"><?= $results->low->error ?></td>
                                                    <td style="text-align: center;"><?= $results->low->notapplicable ?></td>
                                                    <td style="text-align: center;"><?= $results->low->notchecked ?></td>
                                                    <td style="text-align: center;"><?= $results->low->fixed ?></td>
                                                    <td style="text-align: center;"><?= $results->low->informational ?></td>
                                                    <td style="text-align: center;"><?= $results->low->unknown ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-warning"><?= __('Medium') ?></td>
                                                    <td style="text-align: center;" class="text-success"><?= $results->medium->pass ?></td>
                                                    <td style="text-align: center;" class="text-warning"><?= $results->medium->fail ?></td>
                                                    <td style="text-align: center;"><?= $results->medium->error ?></td>
                                                    <td style="text-align: center;"><?= $results->medium->notapplicable ?></td>
                                                    <td style="text-align: center;"><?= $results->medium->notchecked ?></td>
                                                    <td style="text-align: center;"><?= $results->medium->fixed ?></td>
                                                    <td style="text-align: center;"><?= $results->medium->informational ?></td>
                                                    <td style="text-align: center;"><?= $results->medium->unknown ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger"><?= __('High') ?></td>
                                                    <td style="text-align: center;" class="text-success"><?= $results->high->pass ?></td>
                                                    <td style="text-align: center;" class="text-danger"><?= $results->high->fail ?></td>
                                                    <td style="text-align: center;"><?= $results->high->error ?></td>
                                                    <td style="text-align: center;"><?= $results->high->notapplicable ?></td>
                                                    <td style="text-align: center;"><?= $results->high->notchecked ?></td>
                                                    <td style="text-align: center;"><?= $results->high->fixed ?></td>
                                                    <td style="text-align: center;"><?= $results->high->informational ?></td>
                                                    <td style="text-align: center;"><?= $results->high->unknown ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary"><?= __('Info') ?></td>
                                                    <td style="text-align: center;" class="text-success"><?= $results->info->pass ?></td>
                                                    <td style="text-align: center;" class="text-danger"><?= $results->info->fail ?></td>
                                                    <td style="text-align: center;"><?= $results->info->error ?></td>
                                                    <td style="text-align: center;"><?= $results->info->notapplicable ?></td>
                                                    <td style="text-align: center;"><?= $results->info->notchecked ?></td>
                                                    <td style="text-align: center;"><?= $results->info->fixed ?></td>
                                                    <td style="text-align: center;"><?= $results->info->informational ?></td>
                                                    <td style="text-align: center;"><?= $results->info->unknown ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-secondary"><?= __('Unknown') ?></td>
                                                    <td style="text-align: center;" class="text-success"><?= $results->unknown->pass ?></td>
                                                    <td style="text-align: center;" class="text-danger"><?= $results->unknown->fail ?></td>
                                                    <td style="text-align: center;"><?= $results->unknown->error ?></td>
                                                    <td style="text-align: center;"><?= $results->unknown->notapplicable ?></td>
                                                    <td style="text-align: center;"><?= $results->unknown->notchecked ?></td>
                                                    <td style="text-align: center;"><?= $results->unknown->fixed ?></td>
                                                    <td style="text-align: center;"><?= $results->unknown->informational ?></td>
                                                    <td style="text-align: center;"><?= $results->unknown->unknown ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="tab-content">
                        <div class="tab-pane" id="policies" role="tabpanel" tabindex="0" aria-labelledby="policies">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"],[4,"desc"]]'>
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;"><?= __('View') ?></th>
                                                <th><?= __('Name') ?></th>
                                                <th style="text-align: center;"><?= __('Severity') ?></th>
                                                <th style="text-align: center;"><abbr title="The target system or system component satisfied all the conditions of the rule."><?= __('Pass') ?></abbr></th>
                                                <th style="text-align: center;"><abbr title="The target system or system component did not satisfy at least one condition of the rule."><?= __('Fail') ?></abbr></th>
                                                <th style="text-align: center;"><abbr title="The checking engine could not complete the evaluation, therefore the status of the target's compliance with the rule is not certain. This could happen, for example, if a testing tool was run with insufficient privileges and could not gather all of the necessary information."><?= __('Error') ?></abbr></th>
                                                <th style="text-align: center;"><abbr title="The Rule was not applicable to the target of the test. For example, the Rule might have been specific to a different version of the target OS, or it might have been a test against a platform feature that was not installed."><?= __('Not Applicable') ?></abbr></th>
                                                <th style="text-align: center;"><abbr title="The Rule was not evaluated by the checking engine. This status is designed for Rule elements that have no check elements or that correspond to an unsupported checking system. It may also correspond to a status returned by a checking engine if the checking engine does not support the indicated check code."><?= __('Not Checked') ?></abbr></th>
                                                <th style="text-align: center;"><abbr title="The testing tool encountered some problem and the result is unknown. For example, a result of 'unknown' might be given if the testing tool was unable to interpret the output of the checking engine (the output has no meaning to the testing tool)."><?= __('Unknown') ?></abbr></th>
                                                <th style="text-align: center;"><?= __('Exceptions') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($included['policies'])) {
                                                foreach ($included['policies'] as $policy) {
                                                    $severity_class = 'btn-primary';
                                                    $text_class = 'text-primary';
                                                    if ($policy->severity === 'medium') {
                                                        $severity_class = 'btn-warning';
                                                        $text_class = 'text-warning';
                                                    }
                                                    if ($policy->severity === 'high') {
                                                        $severity_class = 'btn-danger';
                                                        $text_class = 'text-danger';
                                                    }
                                                    if ($policy->severity === 'low') {
                                                        $severity_class = 'btn-success';
                                                        $text_class = 'text-success';
                                                    }
                                                    $pass_button = '';
                                                    if (!empty($policy->pass)) {
                                                        $pass_button = '<button type="button" class="btn btn-success btn-sm" style="width: 2rem;">' . $policy->pass . '</button>';
                                                        $pass_button = '<span class="text-success fw-bold">' . $policy->pass . '</span>';
                                                    }
                                                    $fail_button = '';
                                                    if (!empty($policy->fail)) {
                                                        $fail_button = '<button type="button" class="btn btn-danger btn-sm" style="width: 2rem;">' . $policy->fail . '</button>';
                                                        $fail_button = '<span class="text-danger fw-bold">' . $policy->fail . '</span>';
                                                    }
                                                    $error_button = '';
                                                    if (!empty($policy->error)) {
                                                        $error_button = '<button type="button" class="btn btn-warning btn-sm" style="width: 2rem;">' . $policy->error . '</button>';
                                                        $error_button = '<span class="text-warning fw-bold">' . $policy->error . '</span>';
                                                    }
                                                    $notapplicable_button = '';
                                                    if (!empty($policy->notapplicable)) {
                                                        $notapplicable_button = '<button type="button" class="btn btn-primary btn-sm" style="width: 2rem;">' . $policy->notapplicable . '</button>';
                                                        $notapplicable_button = '<span class="text-primary fw-bold">' . $policy->notapplicable . '</span>';
                                                    }
                                                    $notchecked_button = '';
                                                    if (!empty($policy->notchecked)) {
                                                        $notchecked_button = '<button type="button" class="btn btn-primary btn-sm" style="width: 2rem;">' . $policy->notchecked . '</button>';
                                                        $notchecked_button = '<span class="text-primary fw-bold">' . $policy->notchecked . '</span>';
                                                    }
                                                    $unknown_button = '';
                                                    if (!empty($policy->unknown)) {
                                                        $unknown_button = '<button type="button" class="btn btn-primary btn-sm" style="width: 2rem;">' . $policy->unknown . '</button>';
                                                        $unknown_button = '<span class="text-primary fw-bold">' . $policy->unknown . '</span>';
                                                    }
                                                    ?>
                                            <tr>
                                                <td class="text-center"><span style="display:none;"><?= $policy->{'benchmarks_policies.id'} ?></span><a title="<?= __('View') ?>" role="button" class="btn btn-sm btn-primary" href="<?= url_to('benchmarks_policiesRead', intval($policy->{'benchmarks_policies.id'})) ?>"><span style="width:1rem;" title="<?= __('View') ?>" class="fa fa-eye" aria-hidden="true"></span></a></td>
                                                <td><?= $policy->name ?></td>
                                                <!--<td style="text-align: center;"><button type="button" class="btn <?= $severity_class ?>"><?= $policy->severity ?></button></td>-->
                                                <td style="text-align: center;"><span class="<?= $text_class ?>"><?= $policy->severity ?></span></td>
                                                <td style="text-align: center;"><?= $pass_button ?></td>
                                                <td style="text-align: center;"><?= $fail_button ?></td>
                                                <td style="text-align: center;"><?= $error_button ?></td>
                                                <td style="text-align: center;"><?= $notapplicable_button ?></td>
                                                <td style="text-align: center;"><?= $notchecked_button ?></td>
                                                <td style="text-align: center;"><?= $unknown_button ?></td>
                                                    <?php
                                                    $show = true;
                                                    if (!empty($included['exceptions'])) {
                                                        foreach ($included['exceptions'] as $exception) {
                                                            if ($exception->external_ident === $policy->{'external_ident'}) {
                                                                $show = false;
                                                            }
                                                        }
                                                    }
                                                    if ($show) { ?>
                                                <td class="text-center"><button title="<?= __('Add Exception') ?>" role="button" class="btn btn-sm btn-success add_exception" value="<?= $policy->{'external_ident'} ?>"><?= __('Add') ?></button></td>
                                                    <?php } else { ?>
                                                <td class="text-center"><button title="<?= __('Remove Exception') ?>" role="button" class="btn btn-sm btn-danger add_exception" value="<?= $policy->{'external_ident'} ?>"><?= __('Remove') ?></button></td>
                                                    <?php } ?>
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
                                                <th style="text-align: center;"><?= __('Pass') ?></th>
                                                <th style="text-align: center;"><?= __('Other') ?></th>
                                                <th style="text-align: center;"><?= __('Fail') ?></th>
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
                                                <td class="text-center"><a title="<?= __('View') ?>" role="button" class="btn <?= $GLOBALS['button'] ?> btn-primary" href="<?= url_to('componentsCollection') ?>?components.type=benchmarks_result&components.device_id=<?= $device->id ?>&benchmarks_result.benchmark_id=<?= $resource->id ?>"><span style="width:1rem;" title="<?= __('View') ?>" class="fa fa-eye" aria-hidden="true"></span></a></td>
                                                <td><strong><?= $device->name ?></strong></td>
                                                <td><?= $device->ip ?></td>
                                                <td><?= $device->os_family ?> <?= $device->os_version ?></td>
                                                <td style="text-align: center;"><?php if (!empty($device->{'software.name'})) {
                                                    echo '<span class="fa-solid fa-check text-success"></span>';
                                                                                } ?></td>
                                                <td style="text-align: center;"><?= $credentials ?></td>
                                                <td><?= $device->{'orgs.name'} ?>
                                                <td class="text-center text-success"><?= @$device->pass ?></td>
                                                <td class="text-center text-warning"><?= intval(@$device->error + @$device->notapplicable + @$device->error + @$device->notchecked + @$device->unknown) ?></td>
                                                <td class="text-center text-danger"><?= @$device->fail ?></td>
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
                        <td style="text-align: center;"><?php if (!empty($device->{'software.name'})) {
                            echo '<span class="fa-solid fa-check text-success"></span>';
                                                        } ?></td>
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

        var options = {
            series: [<?= $fail ?>, <?= $other ?>, <?= $pass ?>],
            labels: ["<?= ('Fail') ?>", "<?= __('Other') ?>", "<?= __('Pass') ?>"],
            colors: ["#e25563", "#ffcb2f", "#4ab563"],
            chart: {
                height: 300,
                type: 'donut',
            },
            plotOptions: {
                pie: {
                    startAngle: -90,
                    endAngle: 270,
                    donut: {
                        size: '55%'
                    }
                },
            },
            dataLabels: {
                enabled: false
            },
            legend: {
                formatter: function(val, opts) {
                    return val + " - " + opts.w.globals.series[opts.seriesIndex]
                }
            },
            title: {
                text: "<?= __('Results') ?>"
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }],
            stroke: {
                lineCap: "round"
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();


        var options = {
            series: [<?= $results->high->fail ?>, <?= $results->medium->fail ?>, <?= $results->low->fail ?>],
            labels: ["<?= __('High') ?>", "<?= __('Medium') ?>", "<?= __('Low') ?>"],
            colors: ["#e25563", "#ffcb2f", "#4ab563"],
            chart: {
                height: 300,
                type: 'donut',
            },
            plotOptions: {
                pie: {
                    startAngle: -90,
                    endAngle: 270,
                    donut: {
                        size: '55%'
                    }
                },
            },
            dataLabels: {
                enabled: false
            },
            legend: {
                formatter: function(val, opts) {
                    return val + " - " + opts.w.globals.series[opts.seriesIndex]
                }
            },
            title: {
                text: "<?= __('Failed Severity') ?>"
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }],
            stroke: {
                lineCap: "round"
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart2"), options);
        chart.render();














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

        $("#button_execute").click(function(e) {
            $("#liveToastSuccess-header").text("Please Wait");
            $("#liveToastSuccess-body").text("Executing a benchmark can take several minutes, please be patient. See the Logs tab on the next page.");
            var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
            var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl)
            });
            toastList.forEach(toast => toast.show());
        });

        $(".add_exception").click(function(e) {
            var data = {};
            data["type"] = 'benchmarks_exceptions';
            data["access_token"] = '<?= $meta->access_token ?>';
            data["attributes"] = {};
            data["attributes"]["org_id"] = <?= intval($resource->org_id) ?>;
            data["attributes"]["external_ident"] = this.value;
            data["attributes"]["benchmarks"] = '[]';
            data["attributes"]["devices"] = '[]';
            data["attributes"]["exemption_reason"] = '';

            // data = JSON.stringify(data);
            $.ajax({
                type: "POST",
                url: "<?= url_to('benchmarks_exceptionsCreate') ?>",
                data: {data : data},
                success: function (data) {
                    $("#liveToastSuccess-header").text("Exception Added");
                    $("#liveToastSuccess-body").text("Any results for this exception have been removed. Refresh to update page.");
                    var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    });
                    toastList.forEach(toast => toast.show());
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    $("#liveToastFailure-header").text("Exception Failed");
                    $("#liveToastFailure-body").text(data.message);
                    var toastElList = [].slice.call(document.querySelectorAll('.toast-failure'));
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    });
                    toastList.forEach(toast => toast.show());
                }
            });

        });

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
