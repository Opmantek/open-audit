<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';

$name = !empty($data[0]->attributes->name) ? ucwords($data[0]->attributes->type) . ' :: ' . html_entity_decode($data[0]->attributes->name) : '';
$description = !empty($data[0]->attributes->description) ? html_entity_decode($data[0]->attributes->description) . '<br><br>' : '';
$short = !empty($data[0]->attributes->short) ? html_entity_decode($data[0]->attributes->short) . '<br><br>' : '';
$body = !empty($data[0]->attributes->body) ? $data[0]->attributes->body : '';
$actioned_by = !empty($data[0]->attributes->actioned_by) ? $data[0]->attributes->actioned_by : '';
$actioned_date = !empty($data[0]->attributes->actioned_date) ? $data[0]->attributes->actioned_date : '';
$actioned = !empty($data[0]->attributes->actioned) ? $data[0]->attributes->actioned : '';

switch ($data[0]->attributes->type) {
    case 'config':
        if (strpos($user->permissions['configuration'], 'c') !== false and strpos($user->permissions['configuration'], 'u') !== false) {
            $name .= "<span class=\"clearfix float-end\"><button class=\"btn btn-primary\">" . __('Activate') . "</button>";
        }
        $body = '<code><pre>' . json_encode($data[0]->attributes->body, JSON_PRETTY_PRINT) . '</pre></code>';
        if (!empty($actioned_by) and !empty($actioned_date)) {
            $actioned = 'Activated By ' . $actioned_by . ' on ' . $actioned_date . '.<br><br>';
        }
        break;

    case 'query':
        if (strpos($user->permissions['queries'], 'c') !== false and strpos($user->permissions['queries'], 'u') !== false) {
            $name .= "<span class=\"clearfix float-end\"><a href=\"" . url_to('feedsExecute', $meta->id) . "\" type=\"button\" class=\"btn btn-primary\">" . __('Enable') . "</a>";
        }
        $body = '<code><pre>' . json_encode($data[0]->attributes->body, JSON_PRETTY_PRINT) . '</pre></code>';
        if (!empty($actioned_by) and !empty($actioned_date)) {
            $actioned = 'Enabled By ' . $actioned_by . ' on ' . $actioned_date . '.<br><br>';
        }
        break;

    case 'release':
        $body = htmlspecialchars_decode($data[0]->attributes->body);
        $body = html_entity_decode($body);
        $name .= "<span class=\"clearfix float-end\"><a href=\"#\" type=\"button\" class=\"btn btn-success\">" . __('Download') . "</a>";
        $actioned = '';
        break;

    default:
        // code...
        break;
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, '') ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 offset-2">
                            <p>
                                <h3><?= $name ?></h3><br>
                                <?= $short ?>
                                <?= $description ?>
                                <?= $actioned ?>
                                <?= $body ?><br><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <pre>
                <?= json_encode($data[0], JSON_PRETTY_PRINT) ?>
            </pre>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#button_create").remove();
        $("#button_delete").remove();
        $("#button_export_json").remove();
    });
}
</script>