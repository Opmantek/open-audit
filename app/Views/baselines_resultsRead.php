<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
$count_software = count($resource->result->notin->software);
$count_netstat = count($resource->result->notin->netstat);
$count_user = count($resource->result->notin->user);
$total = $count_software + $count_netstat + $count_user;
$delete = false;
if (strpos($user->permissions[$meta->collection], 'd') !== false) {
    $delete = true;
}
$extra = '';
$extra_id = 0;
foreach ($meta->filter as $filter) {
    if ($filter->name === 'policy_id') {
        $extra = 'policy';
        $extra_id = intval($filter->value);
    }
    if ($filter->name === 'device_id') {
        $extra = 'device';
        $extra_id = intval($filter->value);
    }
}
if ($extra === 'policy') {
    foreach ($resource->result->policy as $key) {
        if ($key->id !== '' and $key->id === $extra_id) {
            $policy = $key;
        }
    }
}
$style = @$user->toolbar_style;
$single_policy_button = '';
$single_device_button = '';
if ($style === 'icontext') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span class="icon-eye text-oa-success"></span>' . __('Details') . '</a></li>';

    $policy_button = '<li class="nav-item" role="presentation"><a href="#policies" class="nav-link" id="policies-tab"><span class="icon-clipboard-plus text-oa-primary"></span>' . __('Policy Results') . '</a></li>';

    $device_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span class="icon-computer text-oa-primary"></span>' . __('Device Results') . '</a></li>';

    $notin_button = '<li class="nav-item" role="presentation"><a href="#notin" class="nav-link" id="notin-tab"><span class="icon-megaphone-off text-oa-primary"></span>' . __('Items not in Baseline') . '</a></li>';

    if ($extra === 'policy') {
        $single_policy_button = '<li class="nav-item" role="presentation"><a href="#policy" class="nav-link" id="policy-tab"><span class="icon-clipboard-plus text-oa-primary"></span>' . __('Policy Result') . '</a></li>';
    }

    if ($extra === 'device') {
        $single_device_button = '<li class="nav-item" role="presentation"><a href="#device" class="nav-link" id="device-tab"><span class="icon-computer text-oa-primary"></span>' . __('Device Result') . '</a></li>';
    }
} elseif ($style === 'icon') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span class="icon-eye text-success"></span>' . __('Details') . '</a></li>';

    $policy_button = '<li class="nav-item" role="presentation"><a href="#policies" class="nav-link" id="policies-tab"><span class="icon-clipboard-plus text-primary"></span>' . __('Policy Results') . '</a></li>';

    $device_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span class="icon-computer text-primary"></span>' . __('Device Results') . '</a></li>';

    $notin_button = '<li class="nav-item" role="presentation"><a href="#notin" class="nav-link" id="notin-tab"><span class="icon-megaphone-off text-primary"></span>' . __('Items not in Baseline') . '</a></li>';

    if ($extra === 'policy') {
        $single_policy_button = '<li class="nav-item" role="presentation"><a href="#policy" class="nav-link" id="policy-tab"><span class="icon-clipboard-plus text-primary"></span>' . __('Policy Result') . '</a></li>';
    }

    if ($extra === 'device') {
        $single_device_button = '<li class="nav-item" role="presentation"><a href="#device" class="nav-link" id="device-tab"><span class="icon-computer text-primary"></span>' . __('Device Result') . '</a></li>';
    }
} else {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"></span>' . __('Details') . '</a></li>';
    $policy_button = '<li class="nav-item" role="presentation"><a href="#policies" class="nav-link" id="policies-tab">' . __('Policy Results') . '</a></li>';
    $device_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab">' . __('Device Results') . '</a></li>';
    $notin_button = '<li class="nav-item" role="presentation"><a href="#notin" class="nav-link" id="notin-tab">' . __('Items not in Baseline') . '</a></li>';
    if ($extra === 'policy') {
        $single_policy_button = '<li class="nav-item" role="presentation"><a href="#policy" class="nav-link" id="policy-tab">' . __('Policy Result') . '</a></li>';
    }
    if ($extra === 'device') {
        $single_device_button = '<li class="nav-item" role="presentation"><a href="#device" class="nav-link" id="device-tab">' . __('Device Result') . '</a></li>';
    }
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $data[0]->attributes->name) ?>
                </div>
                <div class="card-body">

                    <div class="row text-center">
                        <div class="col-8 offset-2">
                            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                                <?= $details_button ?>
                                <?= $policy_button ?>
                                <?= $device_button ?>
                                <?php if ($total > 0) { echo $notin_button; } ?>
                                <?= $single_policy_button ?>
                                <?= $single_device_button ?>
                            </ul>
                        </div>
                    </div>
                    <br/>

                    <div class="tab-content">
                        <div class="tab-pane" id="details" role="tabpanel" tabindex="0">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('baseline', $resource->{'baselines.name'}) ?>
                                    <?= read_field('timestamp', $resource->timestamp) ?>
                                    <?= read_field('group', $resource->result->group_name) ?>
                                    <?= read_field('device_count', $resource->result->devices, '', false, 'Devices') ?>
                                    <?= read_field('pass', $resource->result->pass) ?>
                                    <?= read_field('fail', $resource->result->fail) ?>
                                </div>
                                <div class="col-6">
                                    <br>
                                    <div class="offset-2 col-8">
                                        <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="policies" role="tabpanel" tabindex="0">
                            <br>
                            <div class="row">
                                <h3 class="text-center">Policies: <?= $resource->result->policies ?>, Pass: <span class="text-success"><?= $resource->result->pass ?></span>, Fail: <span class="text-danger"><?= $resource->result->fail ?></span></h3><br>
                            </div>
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('View') ?></th>
                                        <th><?= __('Type') ?></th>
                                        <th><?= __('Policy') ?></th>
                                        <th class="text-center"><?= __('Pass') ?></th>
                                        <th class="text-center"><?= __('Fail') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($resource->result->policy)) { ?>
                                    <?php foreach ($resource->result->policy as $row) { ?>
                                    <tr>
                                        <td class="text-center"><a href="<?= url_to('baselines_resultsRead', $meta->id) ?>?policy_id=<?= $row->id ?>#policy" role="button" class="btn btn-primary btn-sm"><span class="icon-eye" aria-hidden="true"></span></a></td>
                                        <td><?= $row->table ?></td>
                                        <td><?= html_entity_decode($row->name) ?></td>
                                        <td class="text-center"><a href="#" role="button" class="btn btn-success btn-sm"><strong><?= $row->pass ?></strong></a></td>
                                        <td class="text-center"><a href="#" role="button" class="btn btn-danger  btn-sm"><strong><?= $row->fail ?></strong></a></td>
                                    </tr>
                                    <?php } ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="devices" role="tabpanel" tabindex="0">
                            <br>
                            <div class="row">
                                <h3 class="text-center">Devices: <?= $resource->result->devices ?>, Pass: <span class="text-success"><?= $resource->result->pass ?></span>, Fail: <span class="text-danger"><?= $resource->result->fail ?></span></h3><br>
                            </div>
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('View') ?></th>
                                        <th><?= __('Device') ?></th>
                                        <th class="text-center"><?= __('Pass') ?></th>
                                        <th class="text-center"><?= __('Fail') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($resource->result->device_list)) { ?>
                                    <?php foreach ($resource->result->device_list as $row) { ?>
                                    <tr>
                                        <td class="text-center"><a href="<?= url_to('baselines_resultsRead', $meta->id) ?>?device_id=<?= $row->id ?>#device" role="button" class="btn btn-primary btn-sm"><span class="icon-eye" aria-hidden="true"></span></a></td>
                                        <td><?= $row->name ?></td>
                                        <td class="text-center"><a href="#" role="button" class="btn btn-success btn-sm"><strong><?= $row->pass ?></strong></a></td>
                                        <td class="text-center"><a href="#" role="button" class="btn btn-danger  btn-sm"><strong><?= $row->fail ?></strong></a></td>
                                    </tr>
                                    <?php } ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <?php
                        $string = 'Total: <span class="text-danger">' . $total . '</span>, ';
                        if ($count_software > 0) {
                            $string .= 'Software: <span class="text-primary">' . $count_software . '</span>';
                        }
                        if ($count_netstat > 0 and strpos($string, 'Software:') !== false) {
                            $string .= ', Netstat: <span class="text-primary">' . $count_netstat . '</span>';
                        }
                        if ($count_netstat > 0 and strpos($string, 'Software:') === false) {
                            $string .= 'Netstat: <span class="text-primary">' . $count_netstat . '</span>';
                        }
                        if ($count_user > 0 and (strpos($string, 'Software:') !== false or strpos($string, 'Netstat:') !== false)) {
                            $string .= ', User: <span class="text-primary">' . $count_user . '</span>';
                        }
                        if ($count_user > 0 and (strpos($string, 'Software:') === false and strpos($string, 'Netstat:') === false)) {
                            $string .= 'User: <span class="text-primary">' . $count_user . '</span>';
                        }
                        $string .= '.';
                    ?>
                    <div class="tab-content">
                        <div class="tab-pane" id="notin" role="tabpanel" tabindex="0">
                            <br>
                            <div class="row">
                                <h3 class="text-center"><?= $string ?></h3>
                            </div>
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"],[3,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('View Device') ?></th>
                                        <th><?= __('Device') ?></th>
                                        <th><?= __('Type') ?></th>
                                        <th><?= __('Details') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($resource->result->notin)) { ?>
                                    <?php foreach ($resource->result->notin as $key => $value) { ?>
                                        <?php foreach ($value as $row) { ?>
                                        <tr>
                                            <td class="text-center"><a href="<?= url_to('devicesRead', $row->{'devices.id'}) ?>" role="button" class="btn btn-primary btn-sm"><span class="icon-eye" aria-hidden="true"></span></a></td>
                                            <td><?= $row->{'devices.name'} ?></td>
                                            <td><?= $key ?></td>
                                            <?php if ($key === 'software') {
                                                if (!empty($row->{'software.version'})) {
                                                    $details = $row->{'software.name'} . ' (version ' . $row->{'software.version'} . ')';
                                                } else {
                                                    $details = $row->{'software.name'};
                                                }
                                            } else if ($key === 'netstat') {
                                                $details = $row->{'netstat.protocol'} . ' port ' . $row->{'netstat.port'} . ' running ' . $row->{'netstat.program'};
                                            } else if ($key === 'user') {
                                                $details = $row->{'user.name'};
                                            } else {
                                                $details = '';
                                            }
                                            echo "<td>" . $details . "</td>\n";
                                            ?>
                                        </tr>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                        <?php if ($extra === 'policy') { ?>
                    <div class="tab-content">
                        <div class="tab-pane" id="policy" role="tabpanel" tabindex="0">
                            <br>
                            <div class="row">
                                <h3 class="text-center"><?= html_entity_decode($policy->name) ?>, Pass: <span class="text-success"><?= $policy->pass ?></span>, Fail: <span class="text-danger"><?= $policy->fail ?></span></h3><br>
                            </div>
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('View') ?></th>
                                        <th><?= __('Device') ?></th>
                                        <?php if ($policy->table === 'software') { ?>
                                        <th><?= __('Name') ?></th>
                                        <th><?= __('Version') ?></th>
                                        <?php } elseif ($policy->table === 'netstat') { ?>
                                        <th><?= __('Program') ?></th>
                                        <th><?= __('Protocol') ?></th>
                                        <th><?= __('Port') ?></th>
                                        <?php } elseif ($policy->table === 'user') { ?>
                                        <th><?= __('Name') ?></th>
                                        <th><?= __('Type') ?></th>
                                        <th><?= __('Status') ?></th>
                                        <?php } ?>
                                        <th class="text-center"><?= __('Status') ?></th>
                                        <th class="text-center"><?= __('Update') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($policy->result as $row) { ?>
                                    <tr>
                                        <td class="text-center"><a href="<?= url_to('baselines_resultsRead', $meta->id) ?>?device_id=<?= $row->id ?>" role="button" class="btn btn-primary btn-sm"><span class="icon-eye" aria-hidden="true"></span></a></td>
                                        <td><a href="<?= url_to('devicesRead', $row->id) ?>"><?= $row->name ?></a></td>
                                        <td><?= @$row->test1 ?></td>
                                        <td><?= @$row->test2 ?></td>
                                        <?php if ($policy->table !== 'software') { ?>
                                        <td><?= @$row->test3 ?></td>
                                        <?php } ?>
                                        <td class="text-center">
                                            <span style="display:none"><?= $row->status ?></span>
                                            <?php if ($row->status === 'fail') { ?>
                                                <button class="btn btn-sm btn-danger"><span style="width:1rem;" class="icon-x" aria-hidden="true"></span></button>
                                            <?php } else { ?>
                                                <button class="btn btn-sm btn-success"><span style="width:1rem;" class="icon-check" aria-hidden="true"></span></button>
                                            <?php } ?>
                                        </td>
                                        <td class="text-center">
                                        <?php if ($policy->table === 'software' and !empty($row->test1) and $row->status === 'fail') { ?>
                                            <a href="<?= url_to('baselines_policiesRead', $policy->id) ?>" role="button" class="btn btn-sm btn-warning"><span style="width:1rem;" class="icon-pencil" aria-hidden="true"></span></a>
                                        <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                        <?php } ?>


                        <?php if ($extra === 'device') { ?>
                    <div class="tab-content">
                        <div class="tab-pane" id="device" role="tabpanel" tabindex="0">
                            <br>
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th class="text-center"><?= __('View') ?></th>
                                        <th><?= __('Type') ?></th>
                                        <th><?= __('Policy') ?></th>
                                        <th><?= __('Test 1') ?></th>
                                        <th><?= __('Test 2') ?></th>
                                        <th><?= __('Test 3') ?></th>
                                        <th class="text-center"><?= __('Status') ?></th>
                                        <th class="text-center"><?= __('Update') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($resource->result->policy as $key) {
                                    foreach ($key->result as $row) {
                                        if ($row->id === $extra_id) { ?>
                                        <tr>
                                            <td class="text-center"><a href="<?= url_to('baselines_policiesRead', $key->id) ?>" role="button" class="btn btn-primary btn-sm"><span class="icon-eye" aria-hidden="true"></span></a></td>
                                            <td><?= $key->table ?></td>
                                            <td><?= html_entity_decode($key->name) ?></td>
                                            <td><?= $row->test1 ?></td>
                                            <td><?= $row->test2 ?></td>
                                            <td><?= $row->test3 ?></td>
                                            <td class="text-center">
                                                <span style="display:none"><?= $row->status ?></span>
                                            <?php if ($row->status === 'fail') { ?>
                                                <button class="btn btn-sm btn-danger"><span style="width:1rem;" class="icon-x" aria-hidden="true"></span></button>
                                            <?php } else { ?>
                                                <button class="btn btn-sm btn-success"><span style="width:1rem;" class="icon-check" aria-hidden="true"></span></button>
                                            <?php } ?>
                                            </td>
                                            <td class="text-center">
                                            <?php if (!empty($row->test1) and $row->status === 'fail') { ?>
                                                <a href="<?= url_to('baselines_policiesRead', $key->id) ?>" role="button" class="btn btn-sm btn-warning"><span class="icon-pencil" aria-hidden="true"></span></a>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#button_create").remove();
        $("#button_export_json").remove();
        <?php if (empty($user->toolbar_style) or $user->toolbar_style === 'icontext') { ?>
            $(".page-title-right").append("<a style=\"margin-right:6px;\" role=\"button\" id=\"button_export_policy\" class=\"btn btn-light mb-2\" title=\"<?= __('Export by Policy') ?>\" href=\"<?= url_to('baselines_resultsExportPolicy', $resource->id) ?>\"><span class=\"icon-square-arrow-out-up-right text-oa-primary\"></span><?= __('Export by Policy') ?></a>");
            $(".page-title-right").append("<a role=\"button\" id=\"button_export_device\" class=\"btn btn-light mb-2\" title=\"<?= __('Export by Device') ?>\" href=\"<?= url_to('baselines_resultsExportDevice', $resource->id) ?>\"><span class=\"icon-square-arrow-out-up-right text-oa-primary\"></span><?= __('Export by Device') ?></a>");
        <?php } elseif ($user->toolbar_style === 'icon') { ?>
            $(".page-title-right").append("<a style=\"margin-right:6px;\" role=\"button\" id=\"button_export_policy\" class=\"btn btn-light mb-2\" title=\"<?= __('Export by Policy') ?>\" href=\"<?= url_to('baselines_resultsExportPolicy', $resource->id) ?>\"><span class=\"icon-square-arrow-out-up-right\"></span></a>");
            $(".page-title-right").append("<a role=\"button\" id=\"button_export_device\" class=\"btn btn-light mb-2\" title=\"<?= __('Export by Device') ?>\" href=\"<?= url_to('baselines_resultsExportDevice', $resource->id) ?>\"><span class=\"icon-square-arrow-out-up-right\"></span></a>");
        <?php } elseif ($user->toolbar_style === 'text') { ?>
            $(".page-title-right").append("<a style=\"margin-right:6px;\" role=\"button\" id=\"button_export_policy\" class=\"btn btn-light mb-2\" title=\"<?= __('Export by Policy') ?>\" href=\"<?= url_to('baselines_resultsExportPolicy', $resource->id) ?>\"><?= __('Export by Policy') ?></a>");
            $(".page-title-right").append("<a role=\"button\" id=\"button_export_device\" class=\"btn btn-light mb-2\" title=\"<?= __('Export by Device') ?>\" href=\"<?= url_to('baselines_resultsExportDevice', $resource->id) ?>\"><?= __('Export by Device') ?></a>");
        <?php } ?>

    });

    $(document).ready(function() {
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