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
                        <label for="data[attributes][name]" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]">
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
                        <label for="data[attributes][description]" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][description]" name="data[attributes][description]">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][lang]" class="col-sm-3 control-label">Language</label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="data[attributes][lang]" name="data[attributes][lang]" title='Type'>
                                <option value='de'>German</option>
                                <option value='en' selected>English</option>
                                <option value='es'>Spanish</option>
                                <option value='fr'>French</option>
                                <option value='pt-br'>Brazilian Portuguese</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][host]" class="col-sm-3 control-label">Host</label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][host]" name="data[attributes][host]" placeholder="192.168.1.88">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][domain]" class="col-sm-3 control-label">Domain</label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][domain]" name="data[attributes][domain]" placeholder="your.domain.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][use_roles]" class="col-sm-3 control-label">Use Roles</label>
                        <div class="col-sm-8 input-group">
                            <select id="data[attributes[[use_roles]" name="data[attributes][use_roles]" class="form-control">
                                <option value='n' selected>No</option>
                                <option value='y'>Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][refresh]" class="col-sm-3 control-label">Refresh</label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][refresh]" name="data[attributes][refresh]" placeholder="24" value="24">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][refreshed]" class="col-sm-3 control-label">Refreshed</label>
                        <div class="col-sm-8 input-group">
                             <input type="text" class="form-control" id="data[attributes][refreshed]" name="data[attributes][refreshed]" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][edited_by]" class="col-sm-3 control-label">Edited By</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_by]" name="data[attributes][edited_by]" placeholder="" value="" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][edited_date]" class="col-sm-3 control-label">Edited Date</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_date]" name="data[attributes][edited_date]" placeholder="" value="" disabled>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="submit" class="col-sm-2 control-label"></label>
                    <div class="col-sm-8 input-group">
                        <input type="hidden" value="connections" id="data[type]" name="data[type]" />
                        <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>