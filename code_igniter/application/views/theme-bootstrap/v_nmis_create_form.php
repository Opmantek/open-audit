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
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left">NMIS Import</span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">

        <div class="form-group">
            <label for="upload_file" class="col-sm-2 control-label">Nodes.nmis file</label>
            <div class="col-sm-4">
                <div class="col-sm-12 input-group">
                    <input type="text" id="file" name="file" size="30" value="/usr/local/nmis8/conf/Nodes.nmis">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="upload_file" class="col-sm-2 control-label">Assign to Location</label>
            <div class="col-sm-4">
                <div class="col-sm-12 input-group">
                    <input type="text" id="location_id" name="location_id" size="30" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="upload_file" class="col-sm-2 control-label">Assign to Org</label>
            <div class="col-sm-4">
                <div class="col-sm-12 input-group">
                    <input type="text" id="org_id" name="org_id" size="30" value="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="upload_file" class="col-sm-2 control-label">Run Discovery on devices</label>
            <div class="col-sm-4">
                <div class="col-sm-12 input-group">
                    <input type="checkbox" id="run_discovery" name="run_discovery">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="submit" class="col-sm-2 control-label"></label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="hidden" value="nmis" id="data[type]" name="data[type]" />
                    <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </div>

    </form>
  </div>
</div>