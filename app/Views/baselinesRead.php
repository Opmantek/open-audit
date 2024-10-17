<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$delete = false;
if (strpos($user->permissions[$meta->collection], 'd') !== false) {
    $delete = true;
}

$netstat = array();
if (!empty($included['baselines_policies']) and is_array($included['baselines_policies'])) {
    foreach ($included['baselines_policies'] as $policy) {
        if ($policy->attributes->table === 'netstat') {
            $netstat[] = $policy;
        }
    }
}

$software = array();
if (!empty($included['baselines_policies']) and is_array($included['baselines_policies'])) {
    foreach ($included['baselines_policies'] as $policy) {
        if ($policy->attributes->table === 'software') {
            $software[] = $policy;
        }
    }
}

$users = array();
if (!empty($included['baselines_policies']) and is_array($included['baselines_policies'])) {
    foreach ($included['baselines_policies'] as $policy) {
        if ($policy->attributes->table === 'user') {
            $users[] = $policy;
        }
    }
}

$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $details_button         = '<li class="nav-item" role="presentation"><a href="#details"  class="nav-link" id="details-tab" ><span style="margin-right:6px;" class="fa fa-eye text-success"></span>' . __('Details') . '</a></li>';
    $results_button         = '<li class="nav-item" role="presentation"><a href="#results"  class="nav-link" id="results-tab" ><span style="margin-right:6px;" class="fa-solid fa-square-poll-horizontal text-primary"></span>' . __('Results') . '</a></li>';
    $netstat_policy_button  = '<li class="nav-item" role="presentation"><a href="#netstat"  class="nav-link" id="netstat-tab" ><span style="margin-right:6px;" class="fa-solid fa-diagram-project text-success"></span>' . __('Netstat Policies') . '</a></li>';
    $software_policy_button = '<li class="nav-item" role="presentation"><a href="#software" class="nav-link" id="software-tab"><span style="margin-right:6px;" class="fa-solid fa-box-open text-success" ></span>' . __('Software Policies') . '</a></li>';
    $user_policy_button =     '<li class="nav-item" role="presentation"><a href="#user"     class="nav-link" id="user-tab"    ><span style="margin-right:6px;" class="fa-regular fa-user text-success"></span>' . __('User Policies') . '</a></li>';
    $all_policy_button =      '<li class="nav-item" role="presentation"><a href="' . url_to('baselines_policiesCollection') . '?baselines_policies.baseline_id=' . $meta->id . '" class="nav-link"><span style="margin-right:6px;" class="fa fa-area-chart text-success"></span>' . __('All Policies') . '</a></li>';

    $add_policy_button =      '<li class="nav-item" role="presentation"><a href="' . url_to('baselines_policiesCreateForm') . '?baselines.id=' . $resource->id . '" class="nav-link" id="user-add-tab"><span style="margin-right:6px;" class="fa fa-plus text-success" ></span>' . __('Add Policy') . '</a></li>';
    $add_policy_from_device_button = '<li class="nav-item" role="presentation"><a href="' . url_to('baselines_policiesCreateForm')  . '?baselines.id=' . $resource->id . '&source=device" class="nav-link" id="device-add-tab"><span style="margin-right:6px;" class="fa fa-desktop text-success"></span>' . __('Add Policies from Device') . '</a></li>';
} elseif ($style === 'icon') {
    $details_button         = '<li class="nav-item" role="presentation"><a href="#details"  class="nav-link" id="details-tab" ><span title="' . __('Details') . '" style="margin-right:6px;" class="fa fa-eye text-success"></span></a></li>';
    $results_button         = '<li class="nav-item" role="presentation"><a href="#results"  class="nav-link" id="results-tab" ><span title="' . __('Results') . '" style="margin-right:6px;" class="fa-solid fa-square-poll-horizontal text-primary"></span></a></li>';
    $netstat_policy_button  = '<li class="nav-item" role="presentation"><a href="#netstat"  class="nav-link" id="netstat-tab" ><span title="' . __('Netstat Policies') . '" style="margin-right:6px;" class="fa-solid fa-diagram-project text-success"></span></a></li>';
    $software_policy_button = '<li class="nav-item" role="presentation"><a href="#software" class="nav-link" id="software-tab"><span title="' . __('Software Policies') . '" style="margin-right:6px;" class="fa-solid fa-box-open text-success"></span></a></li>';
    $user_policy_button =     '<li class="nav-item" role="presentation"><a href="#user"     class="nav-link" id="user-tab"    ><span title="' . __('User Policies') . '" style="margin-right:6px;" class="fa-regular fa-user text-success"></span></a></li>';
    $all_policy_button =      '<li class="nav-item" role="presentation"><a href="' . url_to('baselines_policiesCollection') . '?baselines_policies.baseline_id=' . $meta->id . '" class="nav-link"><span style="margin-right:6px;" class="fa fa-area-chart text-success"></span></a></li>';
    $add_policy_button =      '<li class="nav-item" role="presentation"><a href="' . url_to('baselines_policiesCreateForm') . '?baselines.id=' . $resource->id . '" class="nav-link" id="user-add-tab"><span title="' . __('Add Policy') . '" style="margin-right:6px;" class="fa fa-plus text-success" ></span></a></li>';
    $add_policy_from_device_button = '<li class="nav-item" role="presentation"><a href="' . url_to('baselines_policiesCreateForm')  . '?baselines.id=' . $resource->id . '&source=device" class="nav-link" id="device-add-tab"><span title="' . __('Add Policies from Device') . '" style="margin-right:6px;" class="fa fa-desktop text-success" ></span></a></li>';
} else {
    $details_button         = '<li class="nav-item" role="presentation"><a href="#details"  class="nav-link" id="details-tab" >' . __('Details') . '</a></li>';
    $results_button         = '<li class="nav-item" role="presentation"><a href="#results"  class="nav-link" id="results-tab" >' . __('Results') . '</a></li>';
    $netstat_policy_button  = '<li class="nav-item" role="presentation"><a href="#netstat"  class="nav-link" id="netstat-tab" >' . __('Netstat Policies') . '</a></li>';
    $software_policy_button = '<li class="nav-item" role="presentation"><a href="#software" class="nav-link" id="software-tab">' . __('Software Policies') . '</a></li>';
    $user_policy_button =     '<li class="nav-item" role="presentation"><a href="#user"     class="nav-link" id="user-tab"    >' . __('User Policies') . '</a></li>';
    $all_policy_button =      '<li class="nav-item" role="presentation"><a href="' . url_to('baselines_policiesCollection') . '?baselines_policies.baseline_id=' . $meta->id . '" class="nav-link">' . __('All Policies') . '</a></li>';

    $add_policy_button =      '<li class="nav-item" role="presentation"><a href="' . url_to('baselines_policiesCreateForm') . '?baselines.id=' . $resource->id . '" class="nav-link" id="user-add-tab">' . __('Add Policy') . '</a></li>';
    $add_policy_from_device_button = '<li class="nav-item" role="presentation"><a href="' . url_to('baselines_policiesCreateForm')  . '?baselines.id=' . $resource->id . '&source=device" class="nav-link" id="device-add-tab">' . __('Add Policies from Device') . '</a></li>';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $data[0]->attributes->name) ?>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-10 offset-1" style="background-color: rgba(var(--bs-body-color-rgb), 0.03);">
                            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                                <?= $details_button ?>
                                <?= $results_button ?>
                                <?= $netstat_policy_button ?>
                                <?= $software_policy_button ?>
                                <?= $user_policy_button ?>
                                <?= $all_policy_button ?>
                                <?= $add_policy_button ?>
                                <?= $add_policy_from_device_button ?>
                            </ul>
                        </div>
                    </div>
                    <br/>

                    <div class="tab-content">
                        <div class="tab-pane" id="details" role="tabpanel" tabindex="0">
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

                        <div class="tab-pane" id="results" role="tabpanel" tabindex="0">
                            <br>
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable resultsTable" data-order='[[1,"asc"]]'>
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
                                    <?php foreach ($included['baselines_results'] as $result) { ?>
                                    <tr>
                                        <td class="text-center"><a title="<?= __('Baselines Results') ?>" href="<?= url_to('baselines_resultsRead', $result->id) ?>" role="button" class="btn btn-primary <?= $GLOBALS['button'] ?>"><span class="fa fa-eye" aria-hidden="true" style="margin-right: 0px;"></span></a></td>
                                        <td><?= $result->attributes->timestamp ?></td>
                                        <td><?= $result->attributes->result->group_name ?></td>
                                        <td class="text-center"><?= $result->attributes->result->devices ?></td>
                                        <td class="text-center"><strong class="text-success"><?= $result->attributes->result->pass ?></strong></td>
                                        <td class="text-center"><strong class="text-warning"><?= $result->attributes->result->fail ?></strong></td>
                                        <td class="text-center"><a title="<?= __('Export by Policy') ?>" href="<?= url_to('baselines_resultsExportPolicy', $result->id) ?>" role="button" class="btn btn-primary <?= $GLOBALS['button'] ?>"><span class="fa fa-arrow-up-right-from-square" aria-hidden="true" style="margin-right: 0px;"></span></a></td>
                                        <td class="text-center"><a title="<?= __('Export by Device') ?>" href="<?= url_to('baselines_resultsExportDevice', $result->id) ?>" role="button" class="btn btn-primary <?= $GLOBALS['button'] ?>"><span class="fa fa-arrow-up-right-from-square" aria-hidden="true" style="margin-right: 0px;"></span></a></td>
                                        <td class="text-center"><button type="button" class="btn <?= $GLOBALS['button'] ?> btn-danger delete_link" data-id="<?= $result->id ?>" data-name="<?= $result->id ?>" data-collection="baselines_results"><span class="fa fa-trash" style="margin-right: 0px;"></span></button></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane" id="netstat" role="tabpanel" tabindex="0">
                            <br>
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable policiesTable" data-order='[[1,"asc"]]'>
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
                                        <td class="text-center"><a title="<?= __('Baselines Policy Details') ?>" role="button" class="btn <?= $GLOBALS['button'] ?> btn-primary" href="<?= url_to('baselines_policiesRead', $policy->id) ?>"><span class="fa fa-eye" aria-hidden="true" style="margin-right: 0px;"></span></a></td>
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
                                                <button type="button" class="btn <?= $GLOBALS['button'] ?> btn-danger delete_link" data-redirect="baselines/<?= $resource->id ?>" data-collection="baselines_policies" data-id="<?= $policy->{'id'} ?>" data-name="<?= $policy->{'attributes'}->{'name'} ?>">
                                                    <span class="fa fa-trash" style="margin-right: 0px;"></span>
                                                </button>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane" id="software" role="tabpanel" tabindex="0">
                            <br>
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable policiesTable" data-order='[[1,"asc"],[3,"asc"]]'>
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
                                        <td class="text-center"><a title="<?= __('Baselines Policy Details') ?>" role="button" class="btn <?= $GLOBALS['button'] ?> btn-primary" href="<?= url_to('baselines_policiesRead', $policy->attributes->id) ?>"><span class="fa fa-eye" aria-hidden="true" style="margin-right: 0px;"></span></a></td>
                                        <?php foreach ($policy->attributes->tests as $test) {
                                            if ($test->column === 'name') { ?>
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
                                                <button type="button" class="btn <?= $GLOBALS['button'] ?> btn-danger delete_link" data-redirect="baselines/<?= $resource->id ?>" data-collection="baselines_policies" data-id="<?= $policy->id ?>" data-name="<?= $policy->attributes->name ?>">
                                                    <span class="fa fa-trash" style="margin-right: 0px;"></span>
                                                </button>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane" id="user" role="tabpanel" tabindex="0">
                            <br>
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable policiesTable" data-order='[[1,"asc"]]'>
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
                                        <td class="text-center"><a title="<?= __('Baselines Policy') ?>" role="button" class="btn <?= $GLOBALS['button'] ?> btn-primary" href="<?= url_to('baselines_policiesRead', $policy->attributes->id) ?>"><span class="fa fa-eye" aria-hidden="true" style="margin-right: 0px;"></span></a></td>
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
                                                <button type="button" class="btn <?= $GLOBALS['button'] ?> btn-danger delete_link" data-redirect="baselines/<?= $resource->id ?>" data-collection="baselines_policies" data-id="<?= $policy->id ?>" data-name="<?= $policy->attributes->name ?>">
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
            window.location = this.href;
        });

        $(".nav-link").click(function(e) {
            window.scrollTo(0, 0);
        });
    });
}
</script>
