<?php
#  Copyright 2022 Firstwave (www.firstwave.com)
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
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************

/**
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2022 Firstwave
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.4.1
* @link      http://www.open-audit.org
 */
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
    <input type="hidden" value="<?php echo $this->response->meta->access_token; ?>" id="data[access_token]" name="data[access_token]" />
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][name]" class="col-sm-3 control-label"><?php echo __('Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][org_id]" class="col-sm-3 control-label"><?php echo __('Organisation'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][org_id]" name="data[attributes][org_id]" required>
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'orgs') { ?>     <option value="<?php echo $item->id; ?>"><?php echo $item->attributes->name ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][type]" class="col-sm-3 control-label"><?php echo __('Type'); ?></label>
                        <div class="col-sm-8 input-group">
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

                    <?php
                    $attributes = array('room', 'suite', 'level', 'address', 'city');
                    foreach ($attributes as $attribute) {
                    ?>
                    <div class="form-group">
                        <label for="data[attributes][<?php echo $attribute; ?>]" class="col-sm-3 control-label"><?php echo __(ucfirst($attribute)); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][<?php echo $attribute; ?>]" name="data[attributes][<?php echo $attribute; ?>]" value="" >
                        </div>
                    </div>
                    <?php } ?>

                    <?php
                    $attributes = array('state', 'postcode', 'country', 'phone', 'latitude', 'longitude', 'geo');
                    foreach ($attributes as $attribute) {
                    ?>
                    <div class="form-group">
                        <label for="data[attributes][<?php echo $attribute; ?>]" class="col-sm-3 control-label"><?php echo __(ucfirst($attribute)); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][<?php echo $attribute; ?>]" name="data[attributes][<?php echo $attribute; ?>]" value="" >
                        </div>
                    </div>
                    <?php } ?>

                <div class="form-group">
                    <label for="submit" class="col-sm-3 control-label"></label>
                    <div class="col-sm-8 input-group">
                        <input type="hidden" value="locations" id="data[type]" name="data[type]" />
                        <button id="submit" name="submit" type="submit" class="btn btn-default"><?php echo __('Submit'); ?></button>
                        &nbsp;
                        <button type="button" id="locations_geocode_c" name="locations_geocode_c" class="locations_geocode_c btn btn-primary"><?php echo __('Create GeoCode'); ?></button>
                        &nbsp;
                        <button type="button" id="locations_latlong_c" name="locations_latlong_c" class="locations_latlong_c btn btn-primary"><?php echo __('Get Lat/Long'); ?></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-8 col-md-offset-2">
                    <?php if ( ! empty($this->response->dictionary->about)) {
                        echo "<h4 class=\"text-center\">About</h4><br />";
                        echo html_entity_decode($this->response->dictionary->about);
                    } ?>
                    <?php if ( ! empty($this->response->dictionary->notes)) {
                        echo "<h4 class=\"text-center\">Notes</h4><br />";
                        echo html_entity_decode($this->response->dictionary->notes);
                    } ?>
                </div>
            </div>
        </div>
    </div>
</form>