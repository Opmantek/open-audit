<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
if ($update) {
    if ($user->toolbar_style === 'icontext') {
        $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add") . "\" href=\"" . url_to('componentsCreateForm', 'clusters', $resource->id) . "?type=cluster\"><span style=\"margin-right:6px;\" class=\"fa fa-plus\"></span>" . __("Add") . "</a>";
    } else if ($user->toolbar_style === 'icon') {
        $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add") . "\" href=\"" . url_to('componentsCreateForm', 'clusters', $resource->id) . "?type=cluster\"><span class=\"fa fa-plus\"></span></a>";
    } else {
        $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add") . "\" href=\"" . url_to('componentsCreateForm', 'clusters', $resource->id) . "?type=cluster\">" . __("Add") . "</a>";
    }
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="type" class="col-sm-4 control-label"><?= __('Type') ?></label><br />
                                    <div class="col-sm-7 input-group">
                                        <select class="form-select" id="type" name="type" data-original-value="<%= $resource->{'type'} ?>" disabled>
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
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="type" data-dictionary="<?= $dictionary->columns->type ?>"><span><br /></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="purpose" class="col-sm-4 control-label"><?= __('Purpose') ?></label><br />
                                    <div class="col-sm-7 input-group">
                                        <select class="form-select" id="purpose" name="purpose" data-original-value="<%= $resource->{'purpose'} ?>" disabled>
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
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="purpose" data-dictionary="<?= $dictionary->columns->purpose ?>"><span><br /></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="status" class="col-sm-4 control-label"><?= __('Status') ?></label><br />
                                    <div class="col-sm-7 input-group">
                                        <select class="form-select" id="status" name="status" data-original-value="<%= $resource->{'Status'} ?>" disabled>
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
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="status" data-dictionary="<?= $dictionary->columns->status ?>"><span><br /></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="scaling" class="col-sm-4 control-label"><?= __('Scaling') ?></label><br />
                                    <div class="col-sm-7 input-group">
                                        <select class="form-select" id="scaling" name="scaling" data-original-value="<%= $resource->{'scaling'} ?>" disabled>
                                            <option value="" label=" " <?php if ($resource->{'scaling'} === '') { ?>selected<?php } ?>></option>
                                            <option value="auto"  <?php if ($resource->{'scaling'} === 'auto')  { ?>selected<?php } ?>><?= __('Auto') ?></option>
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
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="scaling" data-dictionary="<?= $dictionary->columns->scaling ?>"><span><br /></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="configuration" class="col-sm-4 control-label"><?= __('Configuration') ?></label><br />
                                    <div class="col-sm-7 input-group">
                                        <select class="form-select" id="configuration" name="configuration" data-original-value="<%= $resource->{'configuration'} ?>" disabled>
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
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="configuration" data-dictionary="<?= $dictionary->columns->configuration ?>"><span><br /></span></div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="environment" class="col-sm-4 control-label"><?= __('Environment') ?></label><br />
                                    <div class="col-sm-7 input-group">
                                        <select class="form-select" id="environment" name="environment" data-original-value="<%= $resource->{'environment'} ?>" disabled>
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
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="environment" data-dictionary="<?= $dictionary->columns->environment ?>"><span><br /></span></div>
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
            <br />

            <?php if ($resource->purpose !== 'virtualisation') { ?>
            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa fa-desktop oa-icon"></span><?= __('Devices') ?></h6>
                        </div>
                        <div class="col-3 clearfix">
                            <div class="btn-group btn-group-sm float-end" role="group" id="device_panel_' . $name . '">
                                <div class="page-title-right float-right">
                                    <?= $panel_add_button ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <br />
                    <div class="table-responsive">
                        <table class="table table-striped dataTable" data-order='[[1,"asc"]]'>
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
                                    <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'devices.id'}) ?>" role="button" class="btn btn-sm btn-devices" title="<?= __('View') ?>"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
                                    <td><?= $item->attributes->{'devices.name'} ?></td>
                                    <td><?= $item->attributes->{'devices.ip'} ?></td>
                                    <td><?= $item->attributes->{'cluster.role'} ?></td>
                                    <td><?= $item->attributes->{'devices.description'} ?></td>
                                    <?php if ($update) { ?>
                                    <td class="text-center"><button type="button" class="btn btn-sm btn-danger subresource_delete_link" data-device-id="<?= $item->id ?>" data-collection="devices" data-sub-resource-id="<?= $item->attributes->{'cluster.id'} ?>" data-sub-resource="cluster" data-name="<?= $item->attributes->{'devices.name'} ?> from <?= $resource->{'name'} ?>"><span class="fa fa-trash"></span></button></td>
                                    <?php } ?>                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br />
            <?php } ?>

            <?php if ($resource->purpose === 'virtualisation') { ?>
            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa-solid fa-server oa-icon"></span><?= __('Hosts') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <br />
                    <div class="table-responsive">
                        <table class="table table-striped dataTable" data-order='[[2,"asc"]]'>
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
                                    <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'devices.id'}) ?>" role="button" class="btn btn-sm btn-devices" title="<?= __('View') ?>"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
                                    <td class="text-center"><img src="/open-audit/device_images/<?= $item->attributes->{'devices.icon'} ?>.svg" style="border-width:0px; width:24px; height:24px" title="<?= __('Icon') ?>" alt="<?= __('Icon') ?>" /></td>
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
                                    <td class="text-center"><button type="button" class="btn btn-sm btn-danger subresource_delete_link" data-device-id="<?= $item->id ?>" data-collection="devices" data-sub-resource-id="<?= $item->attributes->{'cluster.id'} ?>" data-sub-resource="cluster" data-name="<?= $item->attributes->{'devices.name'} ?> from <?= $resource->{'name'} ?>"><span class="fa fa-trash"></span></button></td>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br />
            <?php } ?>

            <?php if ($resource->purpose === 'virtualisation') { ?>
            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa-solid fa-computer oa-icon"></span><?= __('Guests') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <br />
                    <div class="table-responsive">
                        <table class="table table-striped dataTable" data-order='[[2,"asc"]]'>
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
                                    <?php $icon = (!empty($item->attributes->{'guest.icon'})) ? '<img src="/open-audit/device_images/' . $item->attributes->{'guest.icon'} . '.svg" style="border-width:0px; width:24px; height:24px" title="' . __('Icon') . '" alt="' . __('Icon') . '" />' : ''; ?>
                                <tr>
                                    <td class="text-center"><a href="<?= url_to('devicesRead', $item->attributes->{'vm.guest_device_id'}) ?>" role="button" class="btn btn-sm btn-devices" title="<?= __('View') ?>"><i class="fa fa-desktop" aria-hidden="true"></i></a></td>
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
            <br />
            <?php } ?>
        </main>