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
        <form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="data[attributes][id]" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-6">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="data[attributes][id]" name="data[attributes][id]" placeholder="" value="" disabled>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="data[attributes][name]" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-6">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" placeholder="" value="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="data[attributes][type]" class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-6">
                        <div class="col-sm-12 input-group">
                        <select class="form-control" name="data[attributes][type]" id="data[attributes][type]">
                                <option value='Airforce'><?php echo __('Airforce'); ?></option>
                                <option value='Airport'><?php echo __('Airport'); ?></option>
                                <option value='Ambulance Station'><?php echo __('Ambulance Station'); ?></option>
                                <option value='Army'><?php echo __('Army'); ?></option>
                                <option value='Cloud'><?php echo __('Cloud'); ?></option>
                                <option value='Conference Center'><?php echo __('Conference Center'); ?></option>
                                <option value='Court House'><?php echo __('Court House'); ?></option>
                                <option value='Data Center'><?php echo __('Data Center'); ?></option>
                                <option value='Depot'><?php echo __('Depot'); ?></option>
                                <option value='District'><?php echo __('District'); ?></option>
                                <option value='Doctors Office'><?php echo __('Doctors Office'); ?></option>
                                <option value='Embassy'><?php echo __('Embassy'); ?></option>
                                <option value='Factory'><?php echo __('Factory'); ?></option>
                                <option value='Fire Station'><?php echo __('Fire Station'); ?></option>
                                <option value='Guard'><?php echo __('Guard'); ?></option>
                                <option value='Head Office'><?php echo __('Head Office'); ?></option>
                                <option value='High School'><?php echo __('High School'); ?></option>
                                <option value='Hospital'><?php echo __('Hospital'); ?></option>
                                <option value='Hotel'><?php echo __('Hotel'); ?></option>
                                <option value='House'><?php echo __('House'); ?></option>
                                <option value='Library'><?php echo __('Library'); ?></option>
                                <option value='Light House'><?php echo __('Light House'); ?></option>
                                <option value='Marina'><?php echo __('Marina'); ?></option>
                                <option value='Mobile Phone Tower'><?php echo __('Mobile Phone Tower'); ?></option>
                                <option value='Motel'><?php echo __('Motel'); ?></option>
                                <option value='Navy'><?php echo __('Navy'); ?></option>
                                <option value='Newsagent'><?php echo __('Newsagent'); ?></option>
                                <option value='Nursing Home'><?php echo __('Nursing Home'); ?></option>
                                <option value='Observatory'><?php echo __('Observatory'); ?></option>
                                <option value='Office' selected><?php echo __('Office'); ?></option>
                                <option value='Oil Rig'><?php echo __('Oil Rig'); ?></option>
                                <option value='Police'><?php echo __('Police'); ?></option>
                                <option value='Power Plant'><?php echo __('Power Plant'); ?></option>
                                <option value='Power Substation'><?php echo __('Power Substation'); ?></option>
                                <option value='Prison'><?php echo __('Prison'); ?></option>
                                <option value='Radio Station'><?php echo __('Radio Station'); ?></option>
                                <option value='Regional'><?php echo __('Regional'); ?></option>
                                <option value='Resort'><?php echo __('Resort'); ?></option>
                                <option value='Retail'><?php echo __('Retail'); ?></option>
                                <option value='School'><?php echo __('School'); ?></option>
                                <option value='Security'><?php echo __('Security'); ?></option>
                                <option value='Stadium'><?php echo __('Stadium'); ?></option>
                                <option value='Train Station'><?php echo __('Train Station'); ?></option>
                                <option value='Travel Agency'><?php echo __('Travel Agency'); ?></option>
                                <option value='TV Station'><?php echo __('TV Station'); ?></option>
                                <option value='University'><?php echo __('University'); ?></option>
                                <option value='Warehouse'><?php echo __('Warehouse'); ?></option>
                                <option value='Workshop'><?php echo __('Workshop'); ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <?php
                $attributes = array('room', 'suite', 'level', 'address');
                foreach ($attributes as $attribute) {
                ?>
                <div class="form-group">
                    <label for="data[attributes][<?php echo $attribute; ?>]" class="col-sm-2 control-label"><?php echo ucfirst($attribute); ?></label>
                    <div class="col-sm-6">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="data[attributes][<?php echo $attribute; ?>]" name="data[attributes][<?php echo $attribute; ?>]" placeholder="" value="" >
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="form-group">
                    <label for="locations_latlong" class="col-sm-2 control-label">Get Latitude and Longitude</label>
                    <div class="col-sm-6">
                        <div class="col-sm-12 input-group">
                            <button type="button" id="data[attributes][locations_latlong]" name="data[attributes][locations_latlong]" class="locations_latlong_c btn btn-primary">Get</button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="locations_geocode" class="col-sm-2 control-label">Create GeoCode</label>
                    <div class="col-sm-6">
                        <div class="col-sm-12 input-group">
                            <button type="button" id="data[attributes][locations_geocode]" name="data[attributes][locations_geocode]" class="locations_geocode_c btn btn-primary">Create</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php
                $attributes = array('city', 'state', 'postcode', 'country', 'phone', 'geo', 'latitude', 'longitude');
                foreach ($attributes as $attribute) {
                ?>
                <div class="form-group">
                    <label for="data[attributes][<?php echo $attribute; ?>]" class="col-sm-2 control-label"><?php echo ucfirst($attribute); ?></label>
                    <div class="col-sm-6">
                        <div class="col-sm-12 input-group">
                            <input type="text" class="form-control" id="data[attributes][<?php echo $attribute; ?>]" name="data[attributes][<?php echo $attribute; ?>]" placeholder="" value="">
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="form-group">
                <label for="submit" class="col-sm-2 control-label"></label>
                <div class="col-sm-4">
                    <div class="col-sm-8 input-group">
                        <input type="hidden" value="locations" id="data[type]" name="data[type]" />
                        <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </div>

        </form>
    </div> <!-- /row -->
  </div> <!-- /panel body -->
</div>
