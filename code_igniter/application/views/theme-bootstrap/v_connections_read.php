<?php
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.0.11
* @link      http://www.open-audit.org
 */
$item = $this->response->data[0];
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="id" class="col-sm-3 control-label"><?php echo __('ID'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo intval($item->attributes->id); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label"><?php echo __('Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="org_id" class="col-sm-3 control-label"><?php echo __('Organisation'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="org_id" name="org_id" disabled>
                                <?php
                                foreach ($this->response->included as $org) {
                                    if ($org->type == 'orgs') { ?>
                                        <option value="<?php echo intval($org->id); ?>"<?php if ($item->attributes->org_id == $org->id) { echo " selected"; } ?>><?php echo htmlspecialchars($org->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                                <?php
                                    }
                                } ?>
                                </select>
                                <?php if (!empty($edit)) { ?>
                                <span class="input-group-btn">
                                    <button id="edit_org_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="org_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                </span>
                                <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="location_id_a" class="col-sm-3 control-label"><?php echo __('Location A'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="location_id_a" name="location_id_a" disabled>
                                <?php
                                foreach ($this->response->included as $location) {
                                    if ($location->type == 'locations') { ?>
                                        <option value="<?php echo intval($location->id); ?>"<?php if ($item->attributes->location_id_a == $location->id) { echo " selected"; } ?>><?php echo htmlspecialchars($location->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                                <?php
                                    }
                                } ?>
                                </select>
                            <span class="input-group-btn">
                                <button id="edit_location_id_a" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="location_id_a"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="location_id_b" class="col-sm-3 control-label"><?php echo __('Location B'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="location_id_b" name="location_id_b" disabled>
                                <?php
                                foreach ($this->response->included as $location) {
                                    if ($location->type == 'locations') { ?>
                                        <option value="<?php echo intval($location->id); ?>"<?php if ($item->attributes->location_id_b == $location->id) { echo " selected"; } ?>><?php echo htmlspecialchars($location->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                                <?php
                                    }
                                } ?>
                                </select>
                            <span class="input-group-btn">
                                <button id="edit_location_id_b" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="location_id_b"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </div>

                    <?php $attributes = array('provider', 'service_type', 'product_name', 'service_identifier', 'speed'); ?>
                    <?php foreach ($attributes as $attribute) { ?>
                    <div class="form-group">
                        <label for="<?php echo $attribute; ?>" class="col-sm-3 control-label"><?php echo ucwords(str_replace('_', ' ', $attribute)); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="<?php echo $attribute; ?>" name="<?php echo $attribute; ?>" value="<?php echo htmlspecialchars($item->attributes->{$attribute}, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_<?php echo $attribute; ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $attribute; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-md-6">

                    <?php $attributes = array('system_id_a', 'system_id_b', 'line_number_a', 'line_number_b', 'ip_address_external_a', 'ip_address_external_b', 'ip_address_internal_a', 'ip_address_internal_b'); ?>
                    <?php foreach ($attributes as $attribute) { ?>
                    <div class="form-group">
                        <label for="<?php echo $attribute; ?>" class="col-sm-3 control-label"><?php echo ucwords(str_replace('_', ' ', $attribute)); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="<?php echo $attribute; ?>" name="<?php echo $attribute; ?>" value="<?php echo htmlspecialchars($item->attributes->{$attribute}, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_<?php echo $attribute; ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $attribute; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>

                    <div class="form-group">
                        <label for="edited_by" class="col-sm-3 control-label"><?php echo __('Edited By'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_by" name="edited_by" value="<?php echo htmlspecialchars($item->attributes->edited_by, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_date" class="col-sm-3 control-label"><?php echo __('Edited Date'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_date" name="edited_date" value="<?php echo htmlspecialchars($item->attributes->edited_date, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>