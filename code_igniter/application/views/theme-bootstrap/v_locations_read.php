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
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
$item = $this->response->data[0];
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left"><?php echo ucfirst($this->response->meta->collection); ?></span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
    <div class="row">
        <form class="form-horizontal" id="form_update">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="id" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="id" name="id" placeholder="<?php echo htmlentities($item->id); ?>" value="<?php echo htmlentities($item->id); ?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo htmlentities($item->attributes->name); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="type" class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                        <select class="form-control" name="type" id="type" disabled>
                                <option value=''<?php if ($item->attributes->type == '') { echo ' selected '; }?>></option>
                                <option value='Airforce'<?php if ($item->attributes->type == 'Airforce') { echo ' selected '; }?>><?php echo __('Airforce'); ?></option>
                                <option value='Airport'<?php if ($item->attributes->type == 'Airport') { echo ' selected '; }?>><?php echo __('Airport'); ?></option>
                                <option value='Ambulance Station'<?php if ($item->attributes->type == 'Ambulance Station') { echo ' selected '; }?>><?php echo __('Ambulance Station'); ?></option>
                                <option value='Army'<?php if ($item->attributes->type == 'Army') { echo ' selected '; }?>><?php echo __('Army'); ?></option>
                                <option value='Cloud'<?php if ($item->attributes->type == 'Cloud') { echo ' selected '; }?>><?php echo __('Cloud'); ?></option>
                                <option value='Conference Center'<?php if ($item->attributes->type == 'Conference Center') { echo ' selected '; }?>><?php echo __('Conference Center'); ?></option>
                                <option value='Court House'<?php if ($item->attributes->type == 'Court House') { echo ' selected '; }?>><?php echo __('Court House'); ?></option>
                                <option value='Data Center'<?php if ($item->attributes->type == 'Data Center') { echo ' selected '; }?>><?php echo __('Data Center'); ?></option>
                                <option value='Depot'<?php if ($item->attributes->type == 'Depot') { echo ' selected '; }?>><?php echo __('Depot'); ?></option>
                                <option value='District'<?php if ($item->attributes->type == 'District') { echo ' selected '; }?>><?php echo __('District'); ?></option>
                                <option value='Doctors Office'<?php if ($item->attributes->type == 'Doctors Office') { echo ' selected '; }?>><?php echo __('Doctors Office'); ?></option>
                                <option value='Embassy'<?php if ($item->attributes->type == 'Embassy') { echo ' selected '; }?>><?php echo __('Embassy'); ?></option>
                                <option value='Factory'<?php if ($item->attributes->type == 'Factory') { echo ' selected '; }?>><?php echo __('Factory'); ?></option>
                                <option value='Fire Station'<?php if ($item->attributes->type == 'Fire Station') { echo ' selected '; }?>><?php echo __('Fire Station'); ?></option>
                                <option value='Guard'<?php if ($item->attributes->type == 'Guard') { echo ' selected '; }?>><?php echo __('Guard'); ?></option>
                                <option value='Head Office'<?php if ($item->attributes->type == 'Head Office') { echo ' selected '; }?>><?php echo __('Head Office'); ?></option>
                                <option value='High School'<?php if ($item->attributes->type == 'High School') { echo ' selected '; }?>><?php echo __('High School'); ?></option>
                                <option value='Hospital'<?php if ($item->attributes->type == 'Hospital') { echo ' selected '; }?>><?php echo __('Hospital'); ?></option>
                                <option value='Hotel'<?php if ($item->attributes->type == 'Hotel') { echo ' selected '; }?>><?php echo __('Hotel'); ?></option>
                                <option value='House'<?php if ($item->attributes->type == 'House') { echo ' selected '; }?>><?php echo __('House'); ?></option>
                                <option value='Library'<?php if ($item->attributes->type == 'Library') { echo ' selected '; }?>><?php echo __('Library'); ?></option>
                                <option value='Light House'<?php if ($item->attributes->type == 'Light House') { echo ' selected '; }?>><?php echo __('Light House'); ?></option>
                                <option value='Marina'<?php if ($item->attributes->type == 'Marina') { echo ' selected '; }?>><?php echo __('Marina'); ?></option>
                                <option value='Mobile Phone Tower'<?php if ($item->attributes->type == 'Mobile Phone Tower') { echo ' selected '; }?>><?php echo __('Mobile Phone Tower'); ?></option>
                                <option value='Motel'<?php if ($item->attributes->type == 'Motel') { echo ' selected '; }?>><?php echo __('Motel'); ?></option>
                                <option value='Navy'<?php if ($item->attributes->type == 'Navy') { echo ' selected '; }?>><?php echo __('Navy'); ?></option>
                                <option value='Newsagent'<?php if ($item->attributes->type == 'Newsagent') { echo ' selected '; }?>><?php echo __('Newsagent'); ?></option>
                                <option value='Nursing Home'<?php if ($item->attributes->type == 'Nursing Home') { echo ' selected '; }?>><?php echo __('Nursing Home'); ?></option>
                                <option value='Observatory'<?php if ($item->attributes->type == 'Observatory') { echo ' selected '; }?>><?php echo __('Observatory'); ?></option>
                                <option value='Office'<?php if ($item->attributes->type == 'Office') { echo ' selected '; }?>><?php echo __('Office'); ?></option>
                                <option value='Oil Rig'<?php if ($item->attributes->type == 'Oil Rig') { echo ' selected '; }?>><?php echo __('Oil Rig'); ?></option>
                                <option value='Police'<?php if ($item->attributes->type == 'Police') { echo ' selected '; }?>><?php echo __('Police'); ?></option>
                                <option value='Power Plant'<?php if ($item->attributes->type == 'Power Plant') { echo ' selected '; }?>><?php echo __('Power Plant'); ?></option>
                                <option value='Power Substation'<?php if ($item->attributes->type == 'Power Substation') { echo ' selected '; }?>><?php echo __('Power Substation'); ?></option>
                                <option value='Prison'<?php if ($item->attributes->type == 'Prison') { echo ' selected '; }?>><?php echo __('Prison'); ?></option>
                                <option value='Radio Station'<?php if ($item->attributes->type == 'Radio Station') { echo ' selected '; }?>><?php echo __('Radio Station'); ?></option>
                                <option value='Regional'<?php if ($item->attributes->type == 'Regional') { echo ' selected '; }?>><?php echo __('Regional'); ?></option>
                                <option value='Resort'<?php if ($item->attributes->type == 'Resort') { echo ' selected '; }?>><?php echo __('Resort'); ?></option>
                                <option value='Retail'<?php if ($item->attributes->type == 'Retail') { echo ' selected '; }?>><?php echo __('Retail'); ?></option>
                                <option value='School'<?php if ($item->attributes->type == 'School') { echo ' selected '; }?>><?php echo __('School'); ?></option>
                                <option value='Security'<?php if ($item->attributes->type == 'Security') { echo ' selected '; }?>><?php echo __('Security'); ?></option>
                                <option value='Stadium'<?php if ($item->attributes->type == 'Stadium') { echo ' selected '; }?>><?php echo __('Stadium'); ?></option>
                                <option value='Train Station'<?php if ($item->attributes->type == 'Train Station') { echo ' selected '; }?>><?php echo __('Train Station'); ?></option>
                                <option value='Travel Agency'<?php if ($item->attributes->type == 'Travel Agency') { echo ' selected '; }?>><?php echo __('Travel Agency'); ?></option>
                                <option value='TV Station'<?php if ($item->attributes->type == 'TV Station') { echo ' selected '; }?>><?php echo __('TV Station'); ?></option>
                                <option value='University'<?php if ($item->attributes->type == 'University') { echo ' selected '; }?>><?php echo __('University'); ?></option>
                                <option value='Warehouse'<?php if ($item->attributes->type == 'Warehouse') { echo ' selected '; }?>><?php echo __('Warehouse'); ?></option>
                                <option value='Workshop'<?php if ($item->attributes->type == 'Workshop') { echo ' selected '; }?>><?php echo __('Workshop'); ?></option>
                            </select>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_type" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="type"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php
                $attributes = array('room', 'suite', 'level', 'address');
                foreach ($attributes as $attribute) {
                ?>
                <div class="form-group">
                    <label for="<?php echo $attribute; ?>" class="col-sm-2 control-label"><?php echo ucfirst($attribute); ?></label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="<?php echo $attribute; ?>" name="<?php echo $attribute; ?>" placeholder="" value="<?php echo htmlentities($item->attributes->{$attribute}); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_<?php echo $attribute; ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $attribute; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php if (!empty($edit)) { ?>
                    <div class="form-group">
                        <label for="locations_latlong" class="col-sm-2 control-label">Get Latitude and Longitude</label>
                        <div class="col-sm-8">
                            <div class="col-sm-12 input-group">
                                <button type="button" id="locations_latlong" name="locations_latlong" class="locations_latlong btn btn-primary">Get</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="locations_geocode" class="col-sm-2 control-label">Create GeoCode</label>
                        <div class="col-sm-8">
                            <div class="col-sm-12 input-group">
                                <button type="button" id="locations_geocode" name="locations_geocode" class="locations_geocode btn btn-primary">Create</button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <?php
                $attributes = array('city', 'state', 'postcode', 'country', 'phone', 'geo', 'latitude', 'longitude');
                foreach ($attributes as $attribute) {
                ?>
                <div class="form-group">
                    <label for="<?php echo $attribute; ?>" class="col-sm-2 control-label"><?php echo ucfirst($attribute); ?></label>
                    <div class="col-sm-8">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="<?php echo $attribute; ?>" name="<?php echo $attribute; ?>" placeholder="" value="<?php echo htmlentities($item->attributes->{$attribute}); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_<?php echo $attribute; ?>" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="<?php echo $attribute; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </form>
    </div> <!-- /row -->
  </div> <!-- /panel body -->
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left">Devices assigned to <?php echo $item->attributes->name; ?></span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
    <table class="table table-condensed table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th style="text-align: center;">Icon</th>
                <th>Type</th>
                <th>Name</th>
                <th>Domain</th>
                <th>IP</th>
                <th>Description</th>
                <th>OS Family</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->response->included as $device) {
                if ($device->type == 'devices') {
                ?><tr>
                <td><?php echo $device->attributes->{'system.id'}; ?></td>
                <td style="text-align: center;"><img src="<?php echo str_replace("index.php", "", site_url())."device_images/".strtolower(str_replace(" ", "_", htmlentities($device->attributes->{'system.icon'}))).".svg"; ?>" style="border-width:0px; width:24px;" title="<?php echo htmlentities($device->attributes->{'system.icon'}); ?>" alt="<?php echo htmlentities($device->attributes->{'system.icon'}); ?>"/></td>
                <td><?php echo $device->attributes->{'system.type'}; ?></td>
                <td><?php echo $device->attributes->{'system.name'}; ?></td>
                <td><?php echo $device->attributes->{'system.domain'}; ?></td>
                <td><?php echo $device->attributes->{'system.ip'}; ?></td>
                <td><?php echo $device->attributes->{'system.description'}; ?></td>
                <td><?php echo $device->attributes->{'system.os_family'}; ?></td>
                <td><?php echo $device->attributes->{'system.status'}; ?></td>
            </tr><?php } } ?>
        </tbody>
    </table>
  </div>
</div>
