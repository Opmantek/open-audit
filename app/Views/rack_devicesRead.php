<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
$rack_link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('racksRead', $resource->rack_id) . "\"><span title=\"" . __('View') . "\" class=\"icon-link\" aria-hidden=\"true\"></span></a>";
$device_link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesRead', $resource->device_id) . "\"><span title=\"" . __('View') . "\" class=\"icon-link\" aria-hidden=\"true\"></span></a>";
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, '', $orgs, $meta->collection) ?>
                            <?= read_field('rack_name', $resource->{'racks.name'}, $dictionary->columns->rack_name, false, '', $rack_link) ?>
                            <?= read_field('device_name', $resource->{'devices.name'}, $dictionary->columns->device_name, false, '', $device_link) ?>
                            <?= read_field('position', $resource->position, $dictionary->columns->position, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('height', $resource->height, $dictionary->columns->height, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('width', $resource->width, $dictionary->columns->width, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('orientation', $resource->orientation, $dictionary->columns->orientation, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false, '', '', '', '', $meta->collection) ?>
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
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#button_list").remove();
    });
}
</script>