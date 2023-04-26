<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$delete = false;
if (strpos($user->permissions[$meta->collection], 'd') !== false) {
    $delete = true;
}

$results = array();
if (!empty($included['results']) and is_array($included['results'])) {
    $results = $included['results'];
}

$netstat = array();
if (!empty($included['policies']) and is_array($included['policies'])) {
    foreach ($included['policies'] as $policy) {
        if ($policy->attributes->table === 'netstat') {
            $netstat[] = $policy;
        }
    }
}

$software = array();
if (!empty($included['policies']) and is_array($included['policies'])) {
    foreach ($included['policies'] as $policy) {
        if ($policy->attributes->table === 'software') {
            $software[] = $policy;
        }
    }
}

$users = array();
if (!empty($included['policies']) and is_array($included['policies'])) {
    foreach ($included['policies'] as $policy) {
        if ($policy->attributes->table === 'users') {
            $users[] = $policy;
        }
    }
}

$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $details_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2 active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="true" title="' . __('Details') . '"><span style="margin-right:6px;" class="fa fa-eye"></span>' . __('Details') . '</button></li>';

    $results_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2" id="results-tab" data-bs-toggle="tab" data-bs-target="#results" type="button" role="tab" aria-controls="results" aria-selected="false" title="' . __('Results') . '"><span style="margin-right:6px;" class="fa-solid fa-square-poll-horizontal"></span>' . __('Results') . '</button></li>';

    $netstat_policy_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2" id="netstat-tab" data-bs-toggle="tab" data-bs-target="#netstat" type="button" role="tab" aria-controls="netstat" aria-selected="false" title="' . __('Netstat Policies') . '"><span style="margin-right:6px;" class="fa-solid fa-diagram-project"></span>' . __('Netstat Policies') . '</button></li>';

    $software_policy_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2" id="software-tab" data-bs-toggle="tab" data-bs-target="#software" type="button" role="tab" aria-controls="software" aria-selected="false" title="' . __('Software Policies') . '"><span style="margin-right:6px;" class="fa-solid fa-box-open"></span>' . __('Software Policies') . '</button></li>';

    $user_policy_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2" id="user-tab" data-bs-toggle="tab" data-bs-target="#user" type="button" role="tab" aria-controls="user" aria-selected="false" title="' . __('User Policies') . '"><span style="margin-right:6px;" class="fa-regular fa-user"></span>' . __('User Policies') . '</button></li>';

    $add_policy_button = '<li class="nav-item" role="presentation"><button type="button" class="btn btn-light mb-2" title="' . __('Add Policy') . '"><a href="' . url_to('baselines_policiesCreateForm')  . '/' . $resource->id . '"><span style="margin-right:6px;" class="fa fa-plus"></span>' . __('Add Policy') . '</a></button></li>';

    $add_policy_from_device_button = '<li class="nav-item" role="presentation"><button type="button" class="btn btn-light mb-2" title="' . __('Add Policies from Device') . '"><a href="' . url_to('baselines_policiesCreateForm')  . '/' . $resource->id . '/device"><span style="margin-right:6px;" class="fa fa-desktop"></span>' . __('Add Policies from Device') . '</a></button></li>';
} else if ($style === 'icon') {
    $details_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2 active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="true" title="' . __('Details') . '"><span class="fa fa-eye"></span></button></li>';

    $results_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2" id="results-tab" data-bs-toggle="tab" data-bs-target="#results" type="button" role="tab" aria-controls="results" aria-selected="false" title="' . __('Results') . '"><span class="fa-solid fa-square-poll-horizontal"></span></button></li>';

    $netstat_policy_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2" id="netstat-tab" data-bs-toggle="tab" data-bs-target="#netstat" type="button" role="tab" aria-controls="netstat" aria-selected="false" title="' . __('Netstat Policies') . '"><span class="fa-solid fa-diagram-project"></span></button></li>';

    $software_policy_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2" id="software-tab" data-bs-toggle="tab" data-bs-target="#software" type="button" role="tab" aria-controls="software" aria-selected="false" title="' . __('Software Policies') . '"><span class="fa-solid fa-box-open"></span></button></li>';

    $user_policy_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2" id="user-tab" data-bs-toggle="tab" data-bs-target="#user" type="button" role="tab" aria-controls="user" aria-selected="false" title="' . __('User Policies') . '"><span class="fa-regular fa-user"></span></button></li>';

    $add_policy_button = '<li class="nav-item" role="presentation"><a role="button" class="btn btn-light mb-2" title="' . __('Add Policy') . '" href="' . url_to('baselines_policiesCreateForm')  . '/' . $resource->id . '"><span class="fa fa-plus"></span></a></li>';

    $add_policy_from_device_button = '<li class="nav-item" role="presentation"><a role="button" class="btn btn-light mb-2" title="' . __('Add Policies from Device') . '" href="' . url_to('baselines_policiesCreateForm')  . '/' . $resource->id . '/device"><span class="fa fa-desktop"></span></a></li>';
} else {
    $details_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2 active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="true" title="' . __('Details') . '">' . __('Details') . '</button></li>';

    $results_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2" id="results-tab" data-bs-toggle="tab" data-bs-target="#results" type="button" role="tab" aria-controls="results" aria-selected="false" title="' . __('Results') . '"></span>' . __('Results') . '</button></li>';

    $netstat_policy_button = '<li class="nav-item" role="presentation" style="padding-right:6px;"><button class="btn btn-light mb-2" id="netstat-tab" data-bs-toggle="tab" data-bs-target="#netstat" type="button" role="tab" aria-controls="netstat" aria-selected="false" title="' . __('Netstat Policies') . '">' . __('Netstat Policies') . '</button></li>';

    $software_policy_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2" id="software-tab" data-bs-toggle="tab" data-bs-target="#software" type="button" role="tab" aria-controls="software" aria-selected="false" title="' . __('Software Policies') . '">' . __('Software Policies') . '</button></li>';

    $user_policy_button = '<li class="nav-item" role="presentation"><button class="btn btn-light mb-2" id="user-tab" data-bs-toggle="tab" data-bs-target="#user" type="button" role="tab" aria-controls="user" aria-selected="false" title="' . __('User Policies') . '">' . __('User Policies') . '</button></li>';

    $add_policy_button = '<li class="nav-item" role="presentation"><button type="button" class="btn btn-light mb-2" title="' . __('Add Policy') . '"><a href="' . url_to('baselines_policiesCreateForm')  . '/' . $resource->id . '">' . __('Add Policy') . '</a></button></li>';

    $add_policy_from_device_button = '<li class="nav-item" role="presentation"><button type="button" class="btn btn-light mb-2" title="' . __('Add Policies from Device') . '"><a href="' . url_to('baselines_policiesCreateForm')  . '/' . $resource->id . '/device">' . __('Add Policies from Device') . '</a></button></li>';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $data[0]->attributes->name) ?>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-10 offset-1">
                            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                                <?= $details_button ?>
                                <?= $results_button ?>
                                <?= $netstat_policy_button ?>
                                <?= $software_policy_button ?>
                                <?= $user_policy_button ?>
                                <?= $add_policy_button ?>
                                <?= $add_policy_from_device_button ?>
                            </ul>
                        </div>
                    </div>
                    <br/>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="details" role="tabpanel" tabindex="0">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                                    <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
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
                                            <?php $fields = array('name', 'description', 'edited_by', 'edited_date') ?>
                                        <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                            <?php foreach ($fields as $key) { ?>
                                            <code><?= $key ?>: </code><?= $dictionary->columns->{$key} ?><br><br>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            </div>

                        <div class="tab-pane fade" id="results" role="tabpanel" tabindex="0">
                            <br>
                            <table class="table table-striped resultsTable dataTable" data-order='[[1,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('View') ?></th>
                                        <th><?= __('Timestamp') ?></th>
                                        <th><?= __('Group') ?></th>
                                        <th class="text-center"><?= __('Devices') ?></th>
                                        <th class="text-center"><?= __('Pass') ?></th>
                                        <th class="text-center"><?= __('Fail') ?></th>
                                        <th class="text-center"><?= __('Export by Policy') ?></th>
                                        <th class="text-center"><?= __('Export by Device') ?></th>
                                        <th class="text-center"><?= __('Delete') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($results as $result) { ?>
                                    <tr>
                                        <td class="text-center"><a title="<?= __('Baselines Results') ?>" href="<?= url_to('BaselinesResultsRead', $result->id) ?>" role="button" class="btn btn-primary btn-sm"><span class="fa fa-eye" aria-hidden="true" style="margin-right: 0px;"></span></a></td>
                                        <td><?= $result->timestamp ?></td>
                                        <td><?= $result->group ?></td>
                                        <td class="text-center"><?= $result->devices ?></td>
                                        <td class="text-center"><strong class="text-success"><?= $result->pass ?></strong></td>
                                        <td class="text-center"><strong class="text-warning"><?= $result->fail ?></strong></td>
                                        <td class="text-center"><a title="<?= __('Export by Policy') ?>" href="<?= url_to('oae_baseline_result_export_policy', $resource->id, $result->timestamp) ?>" role="button" class="btn btn-primary btn-sm"><span class="fa fa-arrow-up-right-from-square" aria-hidden="true" style="margin-right: 0px;"></span></a></td>
                                        <td class="text-center"><a title="<?= __('Export by Device') ?>" href="<?= url_to('oae_baseline_result_export_device', $resource->id, $result->timestamp) ?>" role="button" class="btn btn-primary btn-sm"><span class="fa fa-arrow-up-right-from-square" aria-hidden="true" style="margin-right: 0px;"></span></a></td>
                                        <td class="text-center"><button type="button" class="btn btn-sm btn-danger delete_link" data-id="<?= $result->id ?>" data-name="<?= $result->id ?>" data-collection="baselines_results"><span class="fa fa-trash" style="margin-right: 0px;"></span></button></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="netstat" role="tabpanel" tabindex="0">
                            <br>
                            <table class="table table-striped policiesTable dataTable" data-order='[[1,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('Details') ?></th>
                                        <th><?= __('Program') ?></th>
                                        <th><?= __('Protocol') ?></th>
                                        <th><?= __('Port') ?></th>
                                        <th><?= __('Notes') ?></th>
                                        <th><?= __('Documentation') ?></th>
                                        <?php if ($delete) { ?>
                                        <th class="text-center"><?= __('Delete') ?></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($netstat as $policy) { ?>
                                    <tr>
                                        <td class="text-center"><a title="<?= __('Baselines Policy Details') ?>" role="button" class="btn btn-sm btn-primary" href="<?= url_to('BaselinesPoliciesRead', $policy->id) ?>"><span class="fa fa-eye" aria-hidden="true" style="margin-right: 0px;"></span></a></td>
                                        <?php foreach ($policy->attributes->tests as $test) {
                                            if ($test->column === 'program') { ?>
                                                <td><?= $test->value ?></td>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php foreach ($policy->attributes->tests as $test) {
                                            if ($test->column === 'protocol') { ?>
                                                <td><?= $test->value ?></td>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php foreach ($policy->attributes->tests as $test) {
                                            if ($test->column === 'port') { ?>
                                                <td><?= $test->value ?></td>
                                            <?php } ?>
                                        <?php } ?>
                                        <td><?= $policy->{'attributes'}->{'notes'} ?></td>
                                        <td><?= $policy->{'attributes'}->{'documentation'} ?></td>
                                        <?php if ($delete) { ?>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-danger delete_link" data-collection="baselines_policies" data-id="<?= $policy->{'id'} ?>" data-name="<?= $policy->{'attributes'}->{'name'} ?>">
                                                    <span class="fa fa-trash" style="margin-right: 0px;"></span>
                                                </button>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="software" role="tabpanel" tabindex="0">
                            <br>
                            <table class="table table-striped policiesTable dataTable" data-order='[[1,"asc"],[3,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('Details') ?></th>
                                        <th><?= __('Name') ?></th>
                                        <th><?= __('Condition') ?></th>
                                        <th><?= __('Version') ?></th>
                                        <th><?= __('Notes') ?></th>
                                        <th><?= __('Documentation') ?></th>
                                        <?php if ($delete) { ?>
                                        <th class="text-center"><?= __('Delete') ?></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($software as $policy) { ?>
                                    <tr>
                                        <td class="text-center"><a title="<?= __('Baselines Policy Details') ?>" role="button" class="btn btn-sm btn-primary" href="<?= url_to('BaselinesResultsRead', $policy->attributes->id) ?>"><span class="fa fa-eye" aria-hidden="true" style="margin-right: 0px;"></span></a></td>
                                        <?php foreach ($policy->attributes->tests as $test) {
                                            if ($test->column ==='name') { ?>
                                                <td><?= $test->{'value'} ?></td>
                                            <?php }
                                            if ($test->column == 'version') { ?>
                                                <td><?= $test->operator ?></td>
                                                <td><?= $test->value ?></td>
                                            <?php } ?>
                                        <?php } ?>
                                        <td><?= $policy->attributes->notes ?></td>
                                        <td><?= $policy->attributes->documentation ?></td>
                                        <?php if ($delete) { ?>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-danger delete_link" data-collection="baselines_policies" data-id="<?= $policy->id ?>" data-name="<?= $policy->attributes->name ?>">
                                                    <span class="fa fa-trash" style="margin-right: 0px;"></span>
                                                </button>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="user" role="tabpanel" tabindex="0">
                            <br>
                            <table class="table table-striped policiesTable dataTable" data-order='[[1,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('Details') ?></th>
                                        <th><?= __('Name') ?></th>
                                        <th><?= __('Status') ?></th>
                                        <th><?= __('Type') ?></th>
                                        <th><?= __('Password Expires') ?></th>
                                        <th><?= __('Password Changeable') ?></th>
                                        <th><?= __('Password Required') ?></th>
                                        <th><?= __('Notes') ?></th>
                                        <th><?= __('Documentation') ?></th>
                                        <?php if ($delete) { ?>
                                        <th class="text-center"><?= __('Delete') ?></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($users as $policy) { ?>
                                    <tr>
                                        <td class="text-center"><a title="<?= __('Baselines Policy') ?>" role="button" class="btn btn-sm btn-primary" href="<?= url_to('BaselinesPoliciesRead', $policy->attributes->id) ?>"><span class="fa fa-eye" aria-hidden="true" style="margin-right: 0px;"></span></a></td>
                                        <?php foreach ($policy->attributes->tests as $test) {
                                            if ($test->column === 'name') {
                                                echo "<td>" . $test->{'value'} . "</td>\n";
                                            }
                                        } ?>
                                        <?php foreach ($policy->attributes->tests as $test) {
                                            if ($test->column === 'status') {
                                                echo "<td>" . $test->{'value'} . "</td>\n";
                                            }
                                        } ?>
                                        <?php foreach ($policy->attributes->tests as $test) {
                                            if ($test->column === 'type') {
                                                echo "<td>" . $test->{'value'} . "</td>\n";
                                            }
                                        } ?>
                                        <?php foreach ($policy->attributes->tests as $test) {
                                            if ($test->column === 'password_expires') {
                                                echo "<td>" . $test->{'value'} . "</td>\n";
                                            }
                                        } ?>
                                        <?php foreach ($policy->attributes->tests as $test) {
                                            if ($test->column === 'password_changeable') {
                                                echo "<td>" . $test->{'value'} . "</td>\n";
                                            }
                                        } ?>
                                        <?php foreach ($policy->attributes->tests as $test) {
                                            if ($test->column === 'password_required') {
                                                echo "<td>" . $test->{'value'} . "</td>\n";
                                            }
                                        } ?>
                                        <td><?= $policy->attributes->notes ?></td>
                                        <td><?= $policy->attributes->documentation ?></td>
                                        <?php if ($delete) { ?>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-danger delete_link" data-collection="baselines_policies" data-id="<?= $policy->id ?>" data-name="<?= $policy->attributes->name ?>">
                                                    <span class="fa fa-trash" style="margin-right: 0px;"></span>
                                                </button>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
