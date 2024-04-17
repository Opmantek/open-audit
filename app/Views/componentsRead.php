<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$user->permissions['components'] = '';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $data[0]->id, $data[0]->type, $user, $data[0]->type) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                    <?php
                    $count = 0;
                    foreach ($resource as $key => $value) {
                        $link = '';
                        $count += 1;
                        if ($count > 3) {
                            echo "</div><div class=\"row\">\n";
                            $count = 1;
                        }
                        echo "\n                    <div class=\"col-4\">";
                        if ($data[0]->type === 'user' and $key === 'keys') {
                            $resource->{$key} = html_entity_decode($resource->{$key});
                            echo read_text_box($key, $resource->{$key});
                        } elseif ($data[0]->type === 'share' and $key === 'users') {
                            $resource->{$key} = html_entity_decode($resource->{$key});
                            echo read_text_box($key, $resource->{$key});
                        } elseif ($data[0]->type === 'policy' and $key === 'options') {
                            $resource->{$key} = html_entity_decode($resource->{$key});
                            echo read_text_box($key, $resource->{$key});
                        } elseif ($data[0]->type === 'change_log' and $key === 'db_row') {
                            $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('componentsRead', $value) . "?components.type=" . $data[0]->attributes->db_table . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>";
                            echo read_field($key, $resource->{$key}, '', false, $label, $link);
                        } else {
                            $label = '';
                            if ($key === 'id') {
                                $label = 'ID';
                            }
                            if ($key === 'device_id') {
                                $label = 'Device ID';
                                $link = "<a role=\"button\" title=\"" . __('View') . "\" class=\"btn btn-outline-secondary link_button\" href=\"" . url_to('devicesRead', $value) . "\"><span title=\"" . __('View') . "\" class=\"fa fa-link\" aria-hidden=\"true\"></span></a>";
                            }
                            if ($key === 'devices.id' or $key === 'devices.name') {
                                continue;
                            }
                            if (strpos($key, 'ip_padded') !== false) {
                                continue;
                            }
                            if ($key === 'command_output') {
                                $resource->{$key} = html_entity_decode($resource->{$key});
                            }
                            echo read_field($key, $resource->{$key}, '', false, $label, $link);
                        }
                        echo "</div>\n";
                    } ?>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#button_list").remove();
        $("#button_export_json").remove();
    });
}
</script>
