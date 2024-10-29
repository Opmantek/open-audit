<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" class="fa fa-eye text-success"></span>' . __('Details') . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" class="fa fa-desktop text-primary" ></span>' . __('Devices') . '</a></li>';
} elseif ($style === 'icon') {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab"><span style="margin-right:6px;" title="' . __('Details') . '" class="fa fa-eye text-success"></span></a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab"><span style="margin-right:6px;" title="' . __('Devices') . '" class="fa fa-desktop text-primary"></span></a></li>';
} else {
    $details_button = '<li class="nav-item" role="presentation"><a href="#details" class="nav-link" id="details-tab">' . __('Details') . '</a></li>';
    $devices_button = '<li class="nav-item" role="presentation"><a href="#devices" class="nav-link" id="devices-tab">' . __('Devices') . '</a></li>';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">

                    <div class="row text-center">
                        <div class="col-8 offset-2" style="background-color: rgba(var(--bs-body-color-rgb), 0.03);">
                            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                                <?= $details_button ?>
                                <?= $devices_button ?>
                            </ul>
                        </div>
                    </div>
                    <br/>

                    <div class="tab-content">
                        <div class="tab-pane" id="details" role="tabpanel" tabindex="0" aria-labelledby="details">
                            <div class="row">
                                <div class="col-6">
                                    <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                                    <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                                    <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="type" class="col-sm-4 control-label"><?= __('Type') ?></label><br>
                                            <div class="col-sm-7 input-group">
                                                <select class="form-select" id="type" name="type" data-original-value="<?= $resource->{'type'} ?>" disabled>
                                                    <option value="" label=" "        <?php if ($resource->{'type'} === '') {                  ?>selected<?php } ?>></option>
                                                    <option value="high availability" <?php if ($resource->{'type'} === 'high availability') { ?>selected<?php } ?>><?= __('High Availability') ?></option>
                                                    <option value="load balancing"    <?php if ($resource->{'type'} === 'load balancing') {    ?>selected<?php } ?>><?= __('Load Balancing') ?></option>
                                                    <option value="performance"       <?php if ($resource->{'type'} === 'performance') {       ?>selected<?php } ?>><?= __('Performance') ?></option>
                                                    <option value="storage"           <?php if ($resource->{'type'} === 'storage') {           ?>selected<?php } ?>><?= __('Storage') ?></option>
                                                    <option value="other"             <?php if ($resource->{'type'} === 'other') {             ?>selected<?php } ?>><?= __('Other') ?></option>
                                                </select>
                                                <?php if ($update) { ?>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <div data-attribute="type" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                    <div data-attribute="type" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                    <div data-attribute="type" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                                </div>
                                                <?php } else { ?>
                                                <div class="pull-right" style="padding-left:30px; padding-top:5px;">
                                                    <div data-attribute="name" class="btn btn-outline" style="color:fff;"></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="type" data-dictionary="<?= $dictionary->columns->type ?>"><span><br></span></div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="purpose" class="col-sm-4 control-label"><?= __('Purpose') ?></label><br>
                                            <div class="col-sm-7 input-group">
                                                <select class="form-select" id="purpose" name="purpose" data-original-value="<?= $resource->{'purpose'} ?>" disabled>
                                                    <option value="" label=" "     <?php if ($resource->{'purpose'} === '') {               ?>selected<?php } ?>></option>
                                                    <option value="application"    <?php if ($resource->{'purpose'} === 'application') {    ?>selected<?php } ?>><?= __('Application') ?></option>
                                                    <option value="compute"        <?php if ($resource->{'purpose'} === 'compute') {        ?>selected<?php } ?>><?= __('Compute') ?></option>
                                                    <option value="database"       <?php if ($resource->{'purpose'} === 'database') {       ?>selected<?php } ?>><?= __('Database') ?></option>
                                                    <option value="storage"        <?php if ($resource->{'purpose'} === 'storage') {        ?>selected<?php } ?>><?= __('Storage') ?></option>
                                                    <option value="virtualisation" <?php if ($resource->{'purpose'} === 'virtualisation') { ?>selected<?php } ?>><?= __('Virtualisation') ?></option>
                                                    <option value="web"            <?php if ($resource->{'purpose'} === 'web') {            ?>selected<?php } ?>><?= __('Web') ?></option>
                                                    <option value="other"          <?php if ($resource->{'purpose'} === 'other') {          ?>selected<?php } ?>><?= __('Other') ?></option>
                                                </select>
                                                <?php if ($update) { ?>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <div data-attribute="purpose" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                    <div data-attribute="purpose" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                    <div data-attribute="purpose" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                                </div>
                                                <?php } else { ?>
                                                <div class="pull-right" style="padding-left:30px; padding-top:5px;">
                                                    <div data-attribute="purpose" class="btn btn-outline" style="color:fff;"></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="purpose" data-dictionary="<?= $dictionary->columns->purpose ?>"><span><br></span></div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="status" class="col-sm-4 control-label"><?= __('Status') ?></label><br>
                                            <div class="col-sm-7 input-group">
                                                <select class="form-select" id="status" name="status" data-original-value="<?= $resource->{'status'} ?>" disabled>
                                                    <option value="" label=" " <?php if ($resource->{'status'} === '') {         ?>selected<?php } ?>></option>
                                                    <option value="active"     <?php if ($resource->{'status'} === 'active') {   ?>selected<?php } ?>><?= __('Active') ?></option>
                                                    <option value="inactive"   <?php if ($resource->{'status'} === 'inactive') { ?>selected<?php } ?>><?= __('Inactive') ?></option>
                                                    <option value="other"      <?php if ($resource->{'status'} === 'other') {    ?>selected<?php } ?>><?= __('Other') ?></option>
                                                </select>
                                                <?php if ($update) { ?>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <div data-attribute="status" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                    <div data-attribute="status" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                    <div data-attribute="status" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                                </div>
                                                <?php } else { ?>
                                                <div class="pull-right" style="padding-left:30px; padding-top:5px;">
                                                    <div data-attribute="status" class="btn btn-outline" style="color:fff;"></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="status" data-dictionary="<?= $dictionary->columns->status ?>"><span><br></span></div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="scaling" class="col-sm-4 control-label"><?= __('Scaling') ?></label><br>
                                            <div class="col-sm-7 input-group">
                                                <select class="form-select" id="scaling" name="scaling" data-original-value="<?= $resource->{'scaling'} ?>" disabled>
                                                    <option value="" label=" " <?php if ($resource->{'scaling'} === '') { ?>selected<?php } ?>></option>
                                                    <option value="auto" <?php if ($resource->{'scaling'} === 'auto') { ?>selected<?php } ?>><?= __('Auto') ?></option>
                                                    <option value="fixed" <?php if ($resource->{'scaling'} === 'fixed') { ?>selected<?php } ?>><?= __('Fixed') ?></option>
                                                    <option value="other" <?php if ($resource->{'scaling'} === 'other') { ?>selected<?php } ?>><?= __('Other') ?></option>
                                                </select>
                                                <?php if ($update) { ?>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <div data-attribute="scaling" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                    <div data-attribute="scaling" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                    <div data-attribute="scaling" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                                </div>
                                                <?php } else { ?>
                                                <div class="pull-right" style="padding-left:30px; padding-top:5px;">
                                                    <div data-attribute="scaling" class="btn btn-outline" style="color:fff;"></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="scaling" data-dictionary="<?= $dictionary->columns->scaling ?>"><span><br></span></div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="configuration" class="col-sm-4 control-label"><?= __('Configuration') ?></label><br>
                                            <div class="col-sm-7 input-group">
                                                <select class="form-select" id="configuration" name="configuration" data-original-value="<?= $resource->{'configuration'} ?>" disabled>
                                                    <option value="" label=" "     <?php if ($resource->{'configuration'} === '') {               ?>selected<?php } ?>></option>
                                                    <option value="active/active"  <?php if ($resource->{'configuration'} === 'active/active') {  ?>selected<?php } ?>><?= __('Active / Active') ?></option>
                                                    <option value="active/passive" <?php if ($resource->{'configuration'} === 'active/passive') { ?>selected<?php } ?>><?= __('Active / Passive') ?></option>
                                                    <option value="N+1"            <?php if ($resource->{'configuration'} === 'N+1') {            ?>selected<?php } ?>><?= __('N+1') ?></option>
                                                    <option value="N+M"            <?php if ($resource->{'configuration'} === 'N+M') {            ?>selected<?php } ?>><?= __('N+M') ?></option>
                                                    <option value="N-to-1"         <?php if ($resource->{'configuration'} === 'N-to-1') {         ?>selected<?php } ?>><?= __('N-to-1') ?></option>
                                                    <option value="N-to-N"         <?php if ($resource->{'configuration'} === 'N-to-N') {         ?>selected<?php } ?>><?= __('N-to-N') ?></option>
                                                    <option value="other"          <?php if ($resource->{'configuration'} === 'other') {          ?>selected<?php } ?>><?= __('Other') ?></option>
                                                </select>
                                                <?php if ($update) { ?>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <div data-attribute="configuration" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                    <div data-attribute="configuration" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                    <div data-attribute="configuration" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                                </div>
                                                <?php } else { ?>
                                                <div class="pull-right" style="padding-left:30px; padding-top:5px;">
                                                    <div data-attribute="configuration" class="btn btn-outline" style="color:fff;"></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="configuration" data-dictionary="<?= $dictionary->columns->configuration ?>"><span><br></span></div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="environment" class="col-sm-4 control-label"><?= __('Environment') ?></label><br>
                                            <div class="col-sm-7 input-group">
                                                <select class="form-select" id="environment" name="environment" data-original-value="<?= $resource->{'environment'} ?>" disabled>
                                                <option value="" label=" " <?php if ($resource->{'environment'} === '') { ?>selected<?php } ?>></option>
                                                <?php foreach ($included['types'] as $attribute) {
                                                    $selected = '';
                                                    if ($attribute->{'attributes'}->{'value'} === $resource->{'environment'}) {
                                                        $selected = 'selected';
                                                    } ?>
                                                    <option value="<?= $attribute->{'attributes'}->{'value'} ?>" <?= $selected ?>><?= $attribute->{'attributes'}->{'name'} ?></option>
                                                <?php } ?>
                                                </select>
                                                <?php if ($update) { ?>
                                                <div class="pull-right" style="padding-left:4px;">
                                                    <div data-attribute="environment" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                    <div data-attribute="environment" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                    <div data-attribute="environment" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                                </div>
                                                <?php } else { ?>
                                                <div class="pull-right" style="padding-left:30px; padding-top:5px;">
                                                    <div data-attribute="environment" class="btn btn-outline" style="color:fff;"></div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="environment" data-dictionary="<?= $dictionary->columns->environment ?>"><span><br></span></div>
                                        </div>
                                    </div>

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
                                            <?php $fields = array('name', 'org_id', 'description', 'edited_by', 'edited_date') ?>
                                        <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                            <?php foreach ($fields as $key) { ?>
                                            <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

            <?php if ($resource->purpose !== 'virtualisation') { ?>
                    <div class="tab-content">
                        <div class="tab-pane" id="devices" role="tabpanel" tabindex="0" aria-labelledby="devices">
                            <br>
                            <div class="table-responsive">
                                <table class="table <?= $GLOBALS['table'] ?> table-striped dataTable" data-order='[[1,"asc"]]'>
                                    <thead>
                                        <tr>
                                            <th class="text-center"><?= __('View') ?></th>
                                            <th><?= __('Name') ?></th>
                                            <th><?= __('IP') ?></th>
                                            <th><?= __('Role') ?></th>
                                            <th><?= __('Description') ?></th>
                                            <?php if ($update) { ?>
                                            <th class="text-center"><?= __('Delete from Cluster') ?></th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($included['devices'] as $item) { ?>
                                        <tr>
                                            <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'devices.id'}) ?>" role="button" class="btn <?= $GLOBALS['button'] ?> btn-devices" title="<?= __('View') ?>"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
                                            <td><?= $item->attributes->{'devices.name'} ?></td>
                                            <td><?= $item->attributes->{'devices.ip'} ?></td>
                                            <td><?= $item->attributes->{'cluster.role'} ?></td>
                                            <td><?= $item->attributes->{'devices.description'} ?></td>
                                            <?php if ($update) { ?>
                                            <td class="text-center"><button type="button" class="btn <?= $GLOBALS['button'] ?> btn-danger subresource_delete_link" data-device-id="<?= $item->id ?>" data-collection="devices" data-sub-resource-id="<?= $item->attributes->{'cluster.id'} ?>" data-sub-resource="cluster" data-name="<?= $item->attributes->{'devices.name'} ?> from <?= $resource->{'name'} ?>"><span class="fa fa-trash"></span></button></td>
                                            <?php } ?>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
            <?php } ?>

            <?php if ($resource->purpose === 'virtualisation') { ?>
                    <div class="tab-content">
                        <div class="tab-pane" id="devices" role="tabpanel" tabindex="0" aria-labelledby="devices">
                            <br>
                            <div class="table-responsive">
                                <table class="table <?= $GLOBALS['table'] ?> table-striped dataTable" data-order='[[2,"asc"]]'>
                                    <thead>
                                        <tr>
                                            <th class="text-center"><?= __('View') ?></th>
                                            <th><?= __('Icon') ?></th>
                                            <th><?= __('Role') ?></th>
                                            <th><?= __('Name') ?></th>
                                            <th><?= __('IP') ?></th>
                                            <th><?= __('Memory') ?></th>
                                            <th><?= __('Physical CPUs') ?></th>
                                            <th><?= __('Cores') ?></th>
                                            <th><?= __('Logical Cores ') ?></th>
                                            <th><?= __('Hyperthreading') ?></th>
                                            <th><?= __('OS Family') ?></th>
                                            <?php if ($update) { ?>
                                            <th class="text-center"><?= __('Delete from Cluster') ?></th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($included['members'] as $item) { ?>
                                            <?php $memory = round(($item->attributes->{'devices.memory_count'} / 1024 / 1024), 2) . ' GB'; ?>
                                        <tr>
                                            <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'devices.id'}) ?>" role="button" class="btn <?= $GLOBALS['button'] ?> btn-devices" title="<?= __('View') ?>"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
                                            <td class="text-center"><img src="<?= $meta->baseurl ?>device_images/<?= $item->attributes->{'devices.icon'} ?>.svg" style="border-width:0px; width:24px; height:24px" title="<?= __('Icon') ?>" alt="<?= __('Icon') ?>" /></td>
                                            <td><?= $item->attributes->{'cluster.role'} ?></td>
                                            <td><?= $item->attributes->{'devices.name'} ?></td>
                                            <td><span style="display:none;"><?= $item->attributes->{'devices.ip_padded'} ?></span><?= $item->attributes->{'devices.ip'} ?></td>
                                            <td><?= $memory ?></td>
                                            <td><?= $item->attributes->{'processor.physical_count'} ?></td>
                                            <td><?= $item->attributes->{'processor.core_count'} ?></td>
                                            <td><?= $item->attributes->{'processor.logical_count'} ?></td>
                                            <td><?= $item->attributes->{'processor.hyperthreading'} ?></td>
                                            <td><?= $item->attributes->{'devices.os_family'} ?></td>
                                            <?php if ($update) { ?>
                                            <td class="text-center" data-orderable="false">
                                                <button type="button" class="btn <?= $GLOBALS['button'] ?>  btn-danger delete_component_link" data-type="cluster" data-component_type="cluster" data-id="<?= $item->attributes->{'cluster.id'} ?>"><span style="width:1rem;" title="<?= __('Delete') ?>" class="fa fa-trash"></span></button>
                                            </td>
                                            <?php } ?>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <br>
                            <br>
                            <br>
                            <div class="table-responsive">
                                <table class="table <?= $GLOBALS['table'] ?> table-striped dataTable" data-order='[[2,"asc"]]'>
                                    <thead>
                                        <tr>
                                            <th class="text-center"><?= __('View') ?></th>
                                            <th class="text-center"><?= __('Icon') ?></th>
                                            <th><?= __('Name') ?></th>
                                            <th><?= __('IP') ?></th>
                                            <th><?= __('OS Family') ?></th>
                                            <th><?= __('Host') ?></th>
                                            <th><?= __('Memory') ?></th>
                                            <th><?= __('CPUs') ?></th>
                                            <th><?= __('Status') ?></th>
                                            <th><?= __('Servers') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($included['guests'] as $item) { ?>
                                            <?php $memory = round(($item->attributes->{'vm.memory_count'} / 1024), 2) . ' GB'; ?>
                                            <?php $icon = (!empty($item->attributes->{'guest.icon'})) ? '<img src="<?= $meta->baseurl ?>device_images/' . $item->attributes->{'guest.icon'} . '.svg" style="border-width:0px; width:24px; height:24px" title="' . __('Icon') . '" alt="' . __('Icon') . '" />' : ''; ?>
                                        <tr>
                                            <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'vm.guest_device_id'}) ?>" role="button" class="btn <?= $GLOBALS['button'] ?> btn-devices" title="<?= __('View') ?>"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
                                            <td class="text-center"><?= $icon ?></td>
                                            <td><?= $item->attributes->{'vm.name'} ?></td>
                                            <td><span style="display:none;"><?= $item->attributes->{'guest.ip_padded'} ?></span><?= $item->attributes->{'guest.ip'} ?></td>
                                            <td><?= $item->attributes->{'guest.os_family'} ?></td>
                                            <td><?= $item->attributes->{'host.name'} ?></td>
                                            <td><?= $memory ?></td>
                                            <td><?= $item->attributes->{'vm.cpu_count'} ?></td>
                                            <td><?= $item->attributes->{'vm.status'} ?></td>
                                            <td><?= $item->attributes->{'guest.servers'} ?></td>                                    
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
            <?php } ?>
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
        });

        $(".nav-link").click(function(e) {
            window.scrollTo(0, 0);
        });

    });
}
</script>
