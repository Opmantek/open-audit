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
* @version   2.2.2
* @link      http://www.open-audit.org
 */
?>




    <div class="panel-body">
	<form class="form-horizontal" id="form_update" method="post" action="http://localhost:8080/open-audit/index.php/connections/15">
    <div class="panel panel-default">
                <div class="panel-heading clearfix">
            <div class="panel-title clearfix">
                <div class="pull-left">
                    Racks                </div>
                <div class="pull-right">
                    <div class="btn-group" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                        <a class="btn btn-default btn-sm" href="/open-audit/index.php/connections" role="button">List Racks</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="id" class="col-sm-3 control-label">ID</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="id" name="id" value="15" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="name" name="name" value="Rack 1" disabled>
                                                        <span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                                                    </div>
                    </div>

                    <div class="form-group">
                        <label for="org_id" class="col-sm-3 control-label">Organisation</label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="org_id" name="org_id" disabled>
                            	<option value="1" selected>Default Organisation</option>
                            </select>
                                                                <span class="input-group-btn">
                                    <button id="edit_org_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="org_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                </span>
                                                        </div>
                    </div>

                    <div class="form-group">
                        <label for="location_id_a" class="col-sm-3 control-label">Location</label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="location_id_a" name="location_id_a" disabled>
                            <option value="1" selected>Brisbane Datacenter</option>
                            </select>
                            <span class="input-group-btn">
                                <button id="edit_location_id_a" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="location_id_a"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </div>

                                                            <div class="form-group">
                        <label for="provider" class="col-sm-3 control-label">Room</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="provider" name="provider" value="DC1" disabled>
                                                        <span class="input-group-btn">
                                <button id="edit_provider" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="provider"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                                                    </div>
                    </div>

                                                            <div class="form-group">
                        <label for="provider" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="provider" name="provider" value="The App Rack for our website" disabled>
                                                        <span class="input-group-btn">
                                <button id="edit_provider" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="provider"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                                                    </div>
                    </div>
                                        <div class="form-group">
                        <label for="service_type" class="col-sm-3 control-label">Row</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="service_type" name="service_type" value="1" disabled>
                                                        <span class="input-group-btn">
                                <button id="edit_service_type" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="service_type"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                                                    </div>
                    </div>
                                        <div class="form-group">
                        <label for="product_name" class="col-sm-3 control-label">Row Position</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="product_name" name="product_name" value="2" disabled>
                                                        <span class="input-group-btn">
                                <button id="edit_product_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="product_name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
						</div>
                    </div>
					<div class="form-group">
                        <label for="service_identifier" class="col-sm-3 control-label">Physical Height</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="service_identifier" name="service_identifier" value="210" disabled>
                                                        <span class="input-group-btn">
                                <button id="edit_service_identifier" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="service_identifier"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
						</div>
                    </div>
                    <div class="form-group">
                        <label for="speed" class="col-sm-3 control-label">Physical Width</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="speed" name="speed" value="600" disabled>
								<span class="input-group-btn">
                                <button id="edit_speed" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="speed"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                    	</div>
                    </div>
                    <div class="form-group">
                        <label for="speed" class="col-sm-3 control-label">Rack Units Height</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="speed" name="speed" value="46" disabled>
								<span class="input-group-btn">
                                <button id="edit_speed" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="speed"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                    	</div>
                    </div>
                    <div class="form-group">
                        <label for="speed" class="col-sm-3 control-label">Asset Number</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="speed" name="speed" value="" disabled>
								<span class="input-group-btn">
                                <button id="edit_speed" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="speed"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                    	</div>
                    </div>
                    <div class="form-group">
                        <label for="speed" class="col-sm-3 control-label">Asset Tag</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="speed" name="speed" value="abc123-456789" disabled>
								<span class="input-group-btn">
                                <button id="edit_speed" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="speed"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                    	</div>
                    </div>
                    <div class="form-group">
                        <label for="speed" class="col-sm-3 control-label">Bar Code</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="speed" name="speed" value="456789" disabled>
								<span class="input-group-btn">
                                <button id="edit_speed" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="speed"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                    	</div>
                    </div>
                    <div class="form-group">
                        <label for="speed" class="col-sm-3 control-label">Serial</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="speed" name="speed" value="abc123" disabled>
								<span class="input-group-btn">
                                <button id="edit_speed" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="speed"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                    	</div>
                    </div>

                    <div class="form-group">
                        <label for="edited_by" class="col-sm-3 control-label">Edited By</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_by" name="edited_by" value="Administrator" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_date" class="col-sm-3 control-label">Edited Date</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_date" name="edited_date" value="2018-05-17 23:22:32" disabled>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">

    			<table class="table table-bordered table-condensed">
    				<tbody>
    					<tr>
    						<td></td>
    						<td class="text-center">Rack 1</td>
    						<td></td>
    					<tr>
    						<td class="text-center" style="vertical-align:middle;">1</td>
    						<td class="text-center" rowspan="1">
    							<div style="position:relative;"><span>
    								<img width="90%" src="/open-audit/rack_images/1u_switch_cisco.jpg" style="z-index:10;"/>
    								<a style="position:absolute; z-index:100; top:4px; right:0px;" href="/devices/1" tabindex="0" class="btn btn-xs btn-primary" role="button" data-toggle="popover" data-trigger="hover focus" title="switch" data-html="true" data-content="sw02 192.168.1.10"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
    							</span></div>
    						</td>
    						<td class="text-center" style="vertical-align:middle;">1</td>
    					</tr>
    					<tr>
    						<td class="text-center" style="vertical-align:middle;">2</td>
    						<td class="text-center" rowspan="2">
    							<div style="position:relative;"><span>
	    							<img width="90%" src="/open-audit/rack_images/2u_switch_cisco.jpg" />
	    							<a style="position:absolute; z-index:100; top:4px; right:0px;" href="/devices/1" tabindex="0" class="btn btn-xs btn-primary" role="button" data-toggle="popover" data-trigger="hover focus" title="computer" data-html="true" data-content="web01 192.168.1.20"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
    							</span></div>
    						</td>
    						<td class="text-center" style="vertical-align:middle;">2</td>
    					</tr>
    					<tr>
    						<td class="text-center" style="vertical-align:middle;">3</td>
    						<td class="text-center" style="vertical-align:middle;">3</td>
    					</tr>
    					<tr>
    						<td class="text-center" style="vertical-align:middle;">4</td>
    						<td class="text-center" rowspan="1">
    							<div style="position:relative;"><span>
	    							
	    							<img src="/open-audit/device_images/windows.svg" width="20px" style="position:absolute; z-index:100; top:4px; left:0px;" />

	    							<img width="90%" src="/open-audit/rack_images/1u_server_ibm.jpg" style="z-index:10;" />

	    							<a style="position:absolute; z-index:100; top:4px; right:0px;" href="/devices/1" tabindex="0" class="btn btn-xs btn-primary" role="button" data-toggle="popover" data-trigger="hover focus" title="computer" data-html="true" data-content="dbsvr_01 192.168.1.1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
    							</span></div>
    						</td>
    						<td class="text-center" style="vertical-align:middle;">4</td>
    					</tr>
    					<tr>
    						<td class="text-center" style="vertical-align:middle;">5</td>
    						<td class="text-center" rowspan="2">
    							<div style="position:relative;"><span>
	    							
	    							<img src="/open-audit/device_images/windows.svg" width="20px" style="position:absolute; z-index:100; top:4px; left:0px;" />

	    							<img width="90%" src="/open-audit/rack_images/2u_server_dell_poweredge.jpg" style="z-index:10;" />

	    							<a style="position:absolute; z-index:100; top:4px; right:0px;" href="/devices/1" tabindex="0" class="btn btn-xs btn-primary" role="button" data-toggle="popover" data-trigger="hover focus" title="computer" data-html="true" data-content="dbsvr_01 192.168.1.1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
    							</span></div>
    						</td>
    						<td class="text-center" style="vertical-align:middle;">5</td>
    					</tr>
    					<tr>
    						<td class="text-center" style="vertical-align:middle;">6</td>
    						<td class="text-center" style="vertical-align:middle;">6</td>
    					</tr>
    					<tr>
    						<td class="text-center">7</td>
    						<td></td>
    						<td class="text-center">7</td>
    					</tr>
    					<tr>
    						<td class="text-center">8</td>
    						<td class="text-center" rowspan="4">
    							<div style="position:relative;"><span>
		    						<img src="/open-audit/device_images/redhat.svg" width="20px" style="position:absolute; z-index:100; top:4px; left:0px;" />
    							<img width="90%" src="/open-audit/rack_images/4u_server_hp.jpg" />
	    							<a style="position:absolute; z-index:100; top:4px; right:0px;" href="/devices/1" tabindex="0" class="btn btn-xs btn-primary" role="button" data-toggle="popover" data-trigger="hover focus" title="computer" data-html="true" data-content="dbsvr_01 192.168.1.1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
    							</span></div>
    						</td>
    						<td class="text-center">8</td>
    					</tr>
    					<tr>
    						<td class="text-center">9</td>
    						<td class="text-center">9</td>
    					</tr>
    					<tr>
    						<td class="text-center">10</td>
    						<td class="text-center">10</td>
    					</tr>
    					<tr>
    						<td class="text-center">11</td>
    						<td class="text-center">11</td>
    					</tr>
    					<tr>
    						<td class="text-center">12</td>
    						<td></td>
    						<td class="text-center">12</td>
    					</tr>
    					<tr>
    						<td class="text-center">13</td>
    						<td></td>
    						<td class="text-center">13</td>
    					</tr>
    					<tr>
    						<td class="text-center" style="vertical-align:middle;">14</td>
    						<td class="text-center" rowspan="6">
    							<div style="position:relative;"><span>
	    							
	    							<img src="/open-audit/device_images/solaris.svg" width="20px" style="position:absolute; z-index:100; top:4px; left:0px;" />

	    							<img width="120px" src="/open-audit/rack_images/server_6ru.png" style="z-index:10;" />

	    							<a style="position:absolute; z-index:100; top:4px; right:0px;" href="/devices/1" tabindex="0" class="btn btn-xs btn-primary" role="button" data-toggle="popover" data-trigger="hover focus" title="computer" data-html="true" data-content="dbsvr_01 192.168.1.1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
    							</span></div>
    						</td>
    						<td class="text-center" style="vertical-align:middle;">14</td>
    					</tr>
 
<?php for ($i=15; $i < 20; $i++) { ?>

    					<tr>
    						<td class="text-center"><?php echo $i; ?></td>
    						<td class="text-center"><?php echo $i; ?></td>
    					</tr>
<?php } ?>

<?php for ($i=20; $i < 46; $i++) { ?>

    					<tr>
    						<td class="text-center"><?php echo $i; ?></td>
    						<td></td>
    						<td class="text-center"><?php echo $i; ?></td>
    					</tr>
<?php } ?>
    				</tbody>
                </div>
            </div>
        </div>
    </div>
</form>







