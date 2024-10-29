<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$user->permissions['components'] = '';
if (!empty($data[0]->type) and $data[0]->type === 'benchmarks_result') {
    for ($i = 0; $i < count($data); $i++) {
        unset($data[$i]->attributes->first_seen);
        unset($data[$i]->attributes->last_seen);
        $data[$i]->attributes->policy = '<a title="' . __('View Policy') . '" role="button" class="btn ' . $GLOBALS['button'] . ' btn-primary" href="' . url_to('benchmarks_policiesRead', intval($data[$i]->attributes->{'benchmarks_policies.id'})) . '"><span style="width:1rem;" title="' . __('View Policy') . '" class="fa fa-eye" aria-hidden="true"></span></a>';
        unset($data[$i]->attributes->{'benchmarks_policies.id'});
        switch ($data[$i]->attributes->result) {
            case 'pass':
                $data[$i]->attributes->result = '<span class="text-success">' . $data[$i]->attributes->result . '</span>';
                break;

            case 'fail':
                $data[$i]->attributes->result = '<span class="text-danger">' . $data[$i]->attributes->result . '</span>';
                break;

            case 'error':
                $data[$i]->attributes->result = '<span class="text-warning">' . $data[$i]->attributes->result . '</span>';
                break;

            default:
                $data[$i]->attributes->result = '<span class="text-primary">' . $data[$i]->attributes->result . '</span>';
                break;
        }
    }
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
                        <table id="example" class="table table-striped">
                        </table>
                    </div>
                </div>
            </div>
        </main>

<?php
$dataSet = array();
foreach ($data as $item) {
    $dataSet[] = $item->attributes;
}
for ($i = 0; $i < count($dataSet); $i++) {
    foreach ($dataSet[$i] as $key => $value) {
        if (strpos($key, '.') !== false) {
            // We have to replace the . because it breaks (dataTables uses JS syntax)
            $dataSet[$i]->{str_replace('.', '__', $key)} = $value;
            unset($dataSet[$i]->$key);
        }
    }
    if (!empty($dataSet[$i]->id)) {
        $dataSet[$i]->id = '<a title="' . __('View') . '" role="button" class="btn ' . $GLOBALS['button'] . ' btn-primary" href="' . url_to('componentsRead', $dataSet[$i]->id) . '?components.type=' . $item->type . '"><span style="width:1rem;" title="' . __('View') . '" class="fa fa-eye" aria-hidden="true"></span></a>';
    }
    if (!empty($dataSet[$i]->device_id)) {
        $dataSet[$i]->device_id = collection_button_read('devices', $dataSet[$i]->device_id);
    }
}
$columns = array();
// Always Put the ID column first
$column = new \stdClass();
$column->title = __('Details');
$column->data = 'id';
$columns[] = $column;
// Always put the Device ID link second
$column = new \stdClass();
$column->title = __('View Device');
$column->data = 'device_id';
$columns[] = $column;
// And the Device Name third
$column = new \stdClass();
$column->title = __('Device');
$column->data = 'devices__name';
$columns[] = $column;


foreach ($data[0]->attributes as $key => $value) {
    if ($key === 'id' or $key === 'device_id' or $key === 'devices__name' or $key === 'devices__id') {
        continue;
    }
    $column = new \stdClass();
    $column->title = collection_column_name($key);
    $column->data = str_replace('.', '__', $key);
    $columns[] = $column;
}
?>
<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        var dataSet = <?= json_encode($dataSet, JSON_PRETTY_PRINT) ?>;
        $('#example').dataTable( {
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            "paging": true,
            "searching": true,
            "order": [[ 1, 'asc' ]],
            "info": true,
            "pageLength": 50,
            "autoWidth": false,
            "oSearch": {
                "bSmart": false,
                "bRegex": true,
                "sSearch": ""
            },
            columns: <?= json_encode($columns, JSON_PRETTY_PRINT) ?>,
            data: dataSet
        });
    });
}
</script>