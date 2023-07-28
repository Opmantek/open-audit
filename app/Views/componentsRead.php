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
                        $count += 1;
                        if ($count > 3) {
                            echo "</div><div class=\"row\">\n";
                            $count = 1;
                        }
                        echo "\n                    <div class=\"col-4\">";
                        if ($data[0]->type === 'user' and $key === 'keys') {
                            $resource->{$key} = html_entity_decode($resource->{$key});
                            echo read_text_box($key, $resource->{$key});
                        } else if ($data[0]->type === 'share' and $key === 'users') {
                            $resource->{$key} = html_entity_decode($resource->{$key});
                            echo read_text_box($key, $resource->{$key});
                        } else if ($data[0]->type === 'policy' and $key === 'options') {
                            $resource->{$key} = html_entity_decode($resource->{$key});
                            echo read_text_box($key, $resource->{$key});
                        } else {
                            $label = '';
                            if ($key === 'id') {
                                $label = 'ID';
                            }
                            if ($key === 'device_id') {
                                $label = 'Device ID';
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
                            echo read_field($key, $resource->{$key}, '', false, $label);
                        }
                        echo "</div>\n";
                    } ?>
                    </div>
                </div>
            </div>
        </main>

<script>
$(document).ready(function() {
    $("#button_list").remove();
    $("#button_export_json").remove();
});
</script>
