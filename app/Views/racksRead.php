<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$disabled = 'disabled';
if (!empty($config->maps_api_key) and ($config->product === 'professional' or $config->product === 'enterprise')) {
    $disabled = '';
}

if ($user->toolbar_style === 'icontext') {
    $deviceButton = '<li class="nav-item" role="presentation"><button type="button" class="btn btn-default"><a href="' . url_to('rack_devicesCreateForm') . '?rack_id=' . $resource->id . '"><span style="margin-right:6px;" class="fa-solid fa-computer text-success"></span>' . __('Add Device') . '</a></button></li>';
} elseif ($user->toolbar_style === 'icon') {
    $deviceButton = '<li class="nav-item" role="presentation"><button type="button" class="btn btn-default"><span style="margin-right:6px;" class="fa-solid fa-computer text-success"></span></button></li>';
} else {
    $deviceButton = '<li class="nav-item" role="presentation"><button type="button" class="btn btn-default">' . __('Add Device') . '</button></li>';
}

$rack = new stdClass();
if ($resource->ru_start == 1) {
    for ($i = 1; $i < intval($resource->ru_height + 1); $i++) {
        unset($device);
        foreach ($included['rack_devices'] as $item) {
            if ($item->attributes->position == $i) {
                $device = $item;
            }
        }
        if (!empty($device)) {
            for ($j = 0; $j <= intval($device->attributes->height); $j++) {
                $image = '';
                $rowheight = intval(22 * $device->attributes->height);
                $imageheight = intval(35 * $device->attributes->height);

                $icon = (!empty($device->attributes->{'devices.icon'})) ? $device->attributes->{'devices.icon'} : '';
                $icon = (empty($icon) and !empty($device->attributes->type)) ? $device->attributes->type : '';


                if (!empty($device->attributes->{'image.filename'})) {
                    $image = '<img alt="' . $icon . '" style="max-width:90%;max-height:' . $imageheight . 'px;" src="<?= $meta->baseurl ?>custom_images/' . $device->attributes->{'image.filename'} . '" />';
                    if (!empty($device->attributes->{'devices.icon'})) {
                        $icon = '<img alt="' . $icon . '" src="' . $meta->baseurl . 'device_images/' . $icon . '.svg" style="width:20px;position:absolute; z-index:100; top:4px; left:0px;" />';
                    } else {
                        $icon = '';
                    }
                } elseif (!empty($device->attributes->{'devices.type'})) {
                    $temp = str_replace(' ', '_', $device->attributes->{'devices.type'});
                    $image = '<img alt="' . $device->attributes->{'devices.type'} . '" style="z-index:10;height:' . $imageheight . 'px;" src="<?= $meta->baseurl ?>device_images/' . $temp . '.svg" />';
                    if (!empty($device->attributes->{'devices.icon'})) {
                        $icon = '<img alt="' . $icon . '" src="<?= $meta->baseurl ?>device_images/' . $icon . '.svg" style="width:20px;position:absolute; z-index:100; top:4px; left:0px;" />';
                    } else {
                        $icon = '';
                    }
                } else {
                    $image = '';
                    $icon = '';
                }

                $filename = (!empty($device->attributes->{'image.filename'})) ? $device->attributes->{'image.filename'} : '';
                $name = (!empty($device->attributes->{'devices.name'})) ? $device->attributes->{'devices.name'} : '';
                $type = (!empty($device->attributes->{'devices.type'})) ? $device->attributes->{'devices.type'} : '';
                $ip = (!empty($device->attributes->{'devices.ip'})) ? $device->attributes->{'devices.ip'} : '';
                $device_id = (!empty($device->attributes->{'devices.id'})) ? $device->attributes->{'devices.id'} : '';
                $link = '';
                if ($device_id) {
                    $link = url_to('devicesRead', $device_id);
                }
                $data_content = '<b>' . $name . '</b>';
                if ($ip) {
                    $data_content = $data_content . '<br>' . $ip;
                }
                if ($link) {
                    $data_content = $data_content . '<br><a href=\'' . $link . '\'>' . __('Details') . '</a>';
                }

                if ($filename == '' and $device_id == '') {
                    $data_content = $data_content . '<br><a href=\'' . url_to('componentsCreateForm', 'images', $device_id) . '\'>' . __('Add image') . '</a>';
                }

                $row = $i + $j;
                $rack->{$row}[1] = '<td class="text-center" style="vertical-align:middle;">' . $row . '</td>';
                if ($j === 0) {
                    $rack->{$row}[2] = '<td style="height:' . $rowheight . 'px; background: #eee" rowspan="' . $device->attributes->height . '" class="text-center"><div style="position:relative;"><span>' . $icon . $image . '<a role="button" style="position:absolute; z-index:100; top:4px; right:0px;" href="#" tabindex="0" class="btn btn-xs btn-primary" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="focus" title="' . $type . '" data-bs-html="true" data-bs-content="' . $data_content . '"><span class="fa fa-eye" aria-hidden="true"></span></a></span></div></td>';
                } else {
                    $rack->{$row}[2] = '';
                }
                $rack->{$row}[3] = '<td class="text-center" style="vertical-align:middle;">' . $row . '</td>';
            }
            $i = $i + intval($device->attributes->height - 1);
        } else {
            $rack->{$i} = array();
            $rack->{$i}[1] = '<td class="text-center" style="vertical-align:middle;">' . $i . '</td>';
            $rack->{$i}[2] = '<td></td>';
            $rack->{$i}[3] = '<td class="text-center" style="vertical-align:middle;">' . $i . '</td>';
        }
    }
} else {
    for ($i = intval($resource->ru_height + 1); $i > 0; $i--) {
        unset($device);
        foreach ($included['rack_devices'] as $item) {
            if (intval($item->attributes->position) === $i) {
                $device = $item;
            }
        }
        if (!empty($device)) {
            for ($j = 0; $j < intval($device->{'attributes'}->{'height'}); $j++) {
                $image = '';
                $rowheight = intval(22 * $device->attributes->height);
                $imageheight = intval(35 * $device->attributes->height);
                $icon = (!empty($device->attributes->{'devices.icon'})) ? $device->attributes->{'devices.icon'} : '';
                $icon = (empty($icon) and !empty($device->attributes->{'devices.type'})) ? $device->attributes->{'devices.type'} : '';

                if (!empty($device->attributes->{'image.filename'})) {
                    $image = '<img alt="' . $icon . '" style="max-width:90%;z-index:10;max-height:' . $imageheight . 'px;" src="' . $meta->baseurl . 'custom_images/' . $device->attributes->{'image.filename'} . '" />';
                    $icon = '<img alt="' . $icon . '" src="<?= $meta->baseurl ?>device_images/' . $icon . '.svg" style="width:20px;position:absolute; z-index:100; top:4px; left:0px;" />';
                } elseif (!empty($device->attributes->{'devices.type'})) {
                    $temp = str_replace(' ', '_', $device->attributes->{'devices.type'});
                    $image = '<img alt="' . $device->attributes->{'devices.type'} . '" style="z-index:10;height:' . $imageheight . 'px;" src="' . $meta->baseurl . 'device_images/' . $temp . '.svg" />';
                    $icon = '<img alt="' . $icon . '" src="<?= $meta->baseurl ?>device_images/' . $icon . '.svg" style="width:20px;position:absolute; z-index:100; top:4px; left:0px;" />';
                } else {
                    $image = '';
                    $icon = '';
                }

                $filename = (!empty($device->attributes->{'image.filename'})) ? $device->attributes->{'image.filename'} : '';
                $name = (!empty($device->attributes->{'devices.name'})) ? $device->attributes->{'devices.name'} : '';
                $type = (!empty($device->attributes->{'devices.type'})) ? $device->attributes->{'devices.type'} : '';
                $ip = (!empty($device->attributes->{'devices.ip'})) ? $device->attributes->{'devices.ip'} : '';
                $device_id = (!empty($device->{'attributes'}->{'devices.id'})) ? $device->{'attributes'}->{'devices.id'} : '';
                $link = '';
                if (!empty($device_id)) {
                    $link = url_to('devicesRead', $device_id);
                }
                $data_content = '<b>' . $name . '</b>';
                if (!empty($ip)) {
                    $data_content = $data_content . '<br>' . $ip;
                }
                if (!empty($link)) {
                    $data_content = $data_content . '<br><a href=\'' . $link . '\'>' . __('Details') . '</a>';
                }

                if (empty($filename) and !empty($device_id)) {
                    $data_content = $data_content . '<br><a href=\'' . url_to('componentsCreateForm', 'images', $device_id) . '\'>' . __('Add image') . '</a>';
                }

                $row = intval($i - $j);
                $rack->{$row}[1] = '<td class="text-center" style="vertical-align:middle;">' . $row . '</td>';
                if ($j == 0) {
                    $rack->{$row}[2] = '<td style="height:' . $rowheight . 'px; background: #eee" rowspan="' . intval($device->attributes->height) . '" class="text-center"><div style="position:relative;"><span>' . $icon . $image . '<button style="position:absolute; z-index:100; top:4px; right:0px;" tabindex="0" class="btn btn-xs btn-primary" data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="focus" title="' . $type . '" data-bs-html="true" data-bs-content="' . $data_content . '"><span class="fa fa-eye" aria-hidden="true"></span></button></span></div></td>';
                } else {
                    $rack->{$row}[2] = '';
                }
                $rack->{$row}[3] = '<td class="text-center" style="vertical-align:middle;">' . $row . '</td>';
            }
            $i = intval($i - $device->attributes->height) + 1;
        } else {
            $rack->{$i}[1] = '<td class="text-center" style="vertical-align:middle;">' . $i . '</td>';
            $rack->{$i}[2] = '<td></td>';
            $rack->{$i}[3] = '<td class="text-center" style="vertical-align:middle;">' . $i . '</td>';
        }
    }
}


?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-8 offset-2">
                            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                                <?= $deviceButton ?>
                            </ul>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-4">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                            <?= read_select('location_id', $resource->location_id, $dictionary->columns->location_id, $update, __('Location'), $included['locations']) ?>
                            <?php $attributes = array('building', 'floor', 'room', 'row', 'row_position', 'pod', 'ru_height');
                            foreach ($attributes as $attribute) {
                                echo read_field($attribute, $resource->{$attribute}, $dictionary->columns->{$attribute}, $update) . "\n";
                            } ?>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                            <br><div class="offset-2 col-8"><hr></div>
                            <?php $attributes = array('purpose', 'type', 'manufacturer', 'model', 'serial', 'asset_number', 'asset_tag', 'bar_code', 'ru_start');
                            foreach ($attributes as $attribute) {
                                echo read_field($attribute, $resource->{$attribute}, $dictionary->columns->{$attribute}, $update) . "\n";
                            } ?>
                            <?php $attributes = array('physical_height', 'physical_width', 'physical_depth', 'weight_empty', 'weight_current', 'weight_max', 'btu_total', 'btu_max', 'power_sockets', 'circuit_count');
                            foreach ($attributes as $attribute) {
                                echo read_field($attribute, $resource->{$attribute}, $dictionary->columns->{$attribute}, $update) . "\n";
                            }
                            echo read_field('power_circuit', $resource->power_circuit, $dictionary->columns->power_circuit, $update) . "\n";
                            ?>
                        </div>
                        <div class="col-4">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="text-center" style="width:470px"><?= $resource->name ?></td>
                                        <td></td>
                                    </tr>
                                    <?php if ($resource->ru_start == 1) {
                                        for ($i = 1; $i <= intval($resource->ru_height); $i++) { ?>
                                        <tr>
                                            <?= @$rack->{$i}[1] ?>
                                            <?= @$rack->{$i}[2] ?>
                                            <?= @$rack->{$i}[3] ?>
                                        </tr>
                                        <?php }
                                    } else {
                                        for ($i = intval($resource->ru_height); $i > 0; $i--) { ?>
                                        <tr>
                                            <?= @$rack->{$i}[1] ?>
                                            <?= @$rack->{$i}[2] ?>
                                            <?= @$rack->{$i}[3] ?>
                                        </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-4">
                            <div class="offset-1 col-10">
                                <table class="table table-striped secondaryDataTable" id="table_result" data-order='[[3,"asc"]]'>
                                    <thead>
                                        <tr>
                                            <th class="text-center" data-orderable="false"><?= __('ID') ?></th>
                                            <th><?= __('Name') ?></th>
                                            <th><?= __('Type') ?></th>
                                            <th class="text-center"><?= __('Position') ?></th>
                                            <th class="text-center"><?= __('Height') ?></th>
                                            <?php if ($update) { ?>
                                            <th class="text-center" data-orderable="false"><?= __('Delete') ?></th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($included['rack_devices'] as $item) { ?>
                                        <tr>
                                            <td class="text-center"><a class="btn btn-sm btn-primary" href="<?= url_to('rack_devicesRead', $item->id) ?>"><span class="fa fa-eye" aria-hidden="true"></span></a></td>
                                            <td><?= $item->attributes->{'devices.name'} ?></td>
                                            <td><?= $item->attributes->{'devices.type'} ?></td>
                                            <td class="text-center"><?= $item->attributes->position ?></td>
                                            <td class="text-center"><?= $item->attributes->height ?></td>
                                            <?php if ($update) { ?>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-danger delete_link" data-collection="rack_devices" data-redirect="racks/<?= $resource->id ?>" data-id="<?= $item->{'id'} ?>" data-name="<?= $item->attributes->name ?>">
                                                    <span class="fa fa-trash"></span>
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
            </div>
        </main>
