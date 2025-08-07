<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
if (empty($config->product) or $config->product === 'community') {
    echo '        <div class="container-fluid">
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                Note that there are actually ' . count($data) . ' reports available for Open-AudIT Professional and Enterprise. Click here to <a href="#"" data-bs-toggle="modal" data-bs-target="#modalCompareLicense">get a free license.</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <th class="text-center"><?= __('Status') ?></th>
                                    <?php
                                    foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id' or $key === 'status') {
                                            continue;
                                        }
                                        if ($key === 'affected') {
                                            echo '<th class="text-center">' . collection_column_name($key) . '</th>';
                                        } else {
                                            echo '<th>' . collection_column_name($key) . '</th>';
                                        }
                                    }
                                    if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                    <th data-orderable="false" class="text-center"><?= __('Delete') ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) {
                                    switch ($item->attributes->status) {

                                        case 'unlikely':
                                            $item->attributes->status = '<a href="?vulnerabilities.status=unlikely"><span class="text-info" id="row_' . $item->id . '">' . __('unlikely') . '</a><a role="button" tabindex="0" class="btn btn-clear btn-sm" data-bs-container="#row_' . $item->id . '" data-bs-html="true" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="focus" data-bs-content="' . ('The vulnerability has been published no matching software records were detected int he database.') . '"><i class="fa-regular fa-circle-question fa-sm" style="color:#74C0FC; padding-left:10px"></i></a></span>';
                                            break;

                                        case 'pending':
                                            $item->attributes->status = '<a href="?vulnerabilities.status=pending"><span class="text-warning" id="row_' . $item->id . '">' . __('pending') . '</a><a role="button" tabindex="0" class="btn btn-clear btn-sm" data-bs-container="#row_' . $item->id . '" data-bs-html="true" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="focus" data-bs-content="' . ('The vulnerability has been published but is awaiting further analysis by the user.') . '"><i class="fa-regular fa-circle-question fa-sm" style="color:#74C0FC; padding-left:10px"></i></a></span>';
                                            break;

                                        case 'confirmed':
                                            $item->attributes->status = '<a href="?vulnerabilities.status=confirmed"><span class="text-success" id="row_' . $item->id . '">' . __('confirmed') . '</a><a role="button" tabindex="0" class="btn btn-clear btn-sm" data-bs-container="#row_' . $item->id . '" data-bs-html="true" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="focus" data-bs-content="' . ('The vulnerability has been reviewed by the user and it is relevant to this installation.') . '"><i class="fa-regular fa-circle-question fa-sm" style="color:#74C0FC; padding-left:10px"></i></a></span>';
                                            break;

                                        case 'declined':
                                            $item->attributes->status = '<a href="?vulnerabilities.status=declined"><span class="text-danger" id="row_' . $item->id . '">' . __('declined') . '</a><a role="button" tabindex="0" class="btn btn-clear btn-sm" data-bs-container="#row_' . $item->id . '" data-bs-html="true" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="focus" data-bs-content="' . ('The vulnerability has been published but has been determined by the user that it is not relevant to this installation.') . '"><i class="fa-regular fa-circle-question fa-sm" style="color:#74C0FC; padding-left:10px"></i></a></span>';
                                            break;

                                        case 'other':
                                            $item->attributes->status = '<span class="text-warning" id="row_' . $item->id . '">' . __('other') . '<a role="button" tabindex="0" class="btn btn-clear btn-sm" data-bs-container="#row_' . $item->id . '" data-bs-html="true" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="focus" data-bs-content="' . ('Other.') . '"><i class="fa-regular fa-circle-question fa-sm" style="color:#74C0FC; padding-left:10px"></i></a></span>';
                                            break;

                                        case '':
                                            $item->attributes->status = '<span class="text-warning" id="row_' . $item->id . '">' . __('<blank>') . '<a role="button" tabindex="0" class="btn btn-clear btn-sm" data-bs-container="#row_' . $item->id . '" data-bs-html="true" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="focus" data-bs-content="' . ('Record is empty.') . '"><i class="fa-regular fa-circle-question fa-sm" style="color:#74C0FC; padding-left:10px"></i></a></span>';
                                            break;

                                        default:
                                            $item->attributes->status = '<span class="text-warning" id="row_' . $item->id . '">' . __(' ') . '<a role="button" tabindex="0" class="btn btn-clear btn-sm" data-bs-container="#row_' . $item->id . '" data-bs-html="true" data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="focus" data-bs-content="' . ('Unknown.') . '"><i class="fa-regular fa-circle-question fa-sm" style="color:#74C0FC; padding-left:10px"></i></a></span>';
                                            break;
                                    }
                                    if (is_int($item->attributes->affected)) {
                                        if (intval($item->attributes->affected) === 0) {
                                            $item->attributes->affected = '<span class="text-success">' . $item->attributes->affected . '</span>';
                                        } else {
                                            $item->attributes->affected = '<span class="text-danger">' . $item->attributes->affected . '</span>';
                                        }
                                    }
                                    ?>
                                <tr>
                                    <?= collection_button_read($meta->collection, $item->id) ?>
                                    <?php echo "<td class=\"text-center\">" . $item->attributes->status . "</td>\n"; ?>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id' or $key === 'orgs.id' or $key === 'status') {
                                            continue;
                                        }
                                        if ($key === 'orgs.name' and !empty($item->attributes->{'orgs.id'})) {
                                            echo "<td style=\"white-space: nowrap;\"><a href=\"" . url_to($meta->collection . 'Collection') . "?" . $meta->collection . ".org_id=" . $item->attributes->{'orgs.id'} . "\">" . $item->attributes->{$key} . "</a></td>\n";
                                        } else if ($key === 'affected') {
                                            echo "<td class=\"text-center\">" . $item->attributes->{$key} . "</td>\n";
                                        } else {
                                            echo "<td>" . $item->attributes->{$key} . "</td>\n";
                                        }
                                        ?>
                                    <?php } ?>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                        <?= collection_button_delete(intval($item->id)) ?>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

<script>
window.onload = function () {
    $(document).ready(function () {
        $("#button_create").remove();
        $("#button_import_csv").remove();
        $("#button_export_csv").remove();
        $("#button_export_json").remove();
        <?php
        if (!empty($included['statuses'])) {
            foreach ($included['statuses'] as $row) {
                echo '$("#button_' . $row->status . '").html($("#button_' . $row->status . '").html() + " (' . $row->count . ')");' . "\n";
            }
        }
        ?>
    });
}
</script>
