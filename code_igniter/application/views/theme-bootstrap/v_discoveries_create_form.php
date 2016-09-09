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
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="text-left"><?php echo ucfirst($this->response->meta->collection); ?></span>
                <span class="pull-right"></span>
            </h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][id]" class="col-sm-3 control-label">ID</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][id]" name="data[attributes][id]" placeholder="" value="" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][subnet]" class="col-sm-3 control-label">Subnet</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][subnet]" name="data[attributes][subnet]" placeholder="" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][org_id]" class="col-sm-3 control-label">Organisation</label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][org_id]" name="data[attributes][org_id]">
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'orgs') { ?>     <option value="<?php echo intval($item->id); ?>"><?php echo htmlentities($item->attributes->name); ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][location_id]" class="col-sm-3 control-label">Location</label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][location_id]" name="data[attributes][location_id]">
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'locations') { ?>        <option value="<?php echo intval($item->id); ?>"><?php echo htmlentities($item->attributes->name); ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][use_https]" class="col-sm-3 control-label">Use HTTPS</label>
                        <div class="col-sm-8 input-group">
                            <input type="checkbox" class="form-control" id="data[attributes][use_https]" name="data[attributes][use_https]" placeholder="" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][debug]" class="col-sm-3 control-label">Debug</label>
                        <div class="col-sm-8 input-group">
                            <input type="checkbox" class="form-control" id="data[attributes][debug]" name="data[attributes][debug]" placeholder="" value="">
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="submit" class="col-sm-3 control-label"></label>
                    <div class="col-sm-8 input-group">
                        <input type="hidden" value="discoveries" id="data[type]" name="data[type]" />
                        <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
