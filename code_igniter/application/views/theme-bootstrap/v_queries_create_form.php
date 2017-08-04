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
 * @version   2.0.4

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->meta->collection; ?>">
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][id]" class="col-sm-3 control-label">ID</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][id]" name="data[attributes][id]" value="" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][name]" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][org_id]" class="col-sm-3 control-label">Organisation</label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="data[attributes][org_id]" name="data[attributes][org_id]">
                            <?php
                            foreach ($this->response->included as $item) {
                                if ($item->type == 'orgs') { ?>     <option value="<?php echo intval($item->id); ?>"><?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                            <?php
                                }
                            } ?></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][menu_category]" class="col-sm-4 control-label"><%== l($human_column) %></label>
                        <div class="col-sm-7 input-group">
                            <select class="form-control" id="data[attributes][menu_category]" name="data[attributes][menu_category]">
                                <option value="" label=" "></option>
                                <option value="Change">Change</option>
                                <option value="Device">Device</option>
                                <option value="Hardware">Hardware</option>
                                <option value="Network">Network</option>
                                <option value="Server">Server</option>
                                <option value="Software">Software</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][menu_display]" class="col-sm-4 control-label">Menu Display</label>
                        <div class="col-sm-7 input-group">
                            <select class="form-control" id="data[attributes][menu_display]" name="data[attributes][menu_display]">
                                <option value="y" selected>Yes</option>
                                <option value="n">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][description]" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][description]" name="data[attributes][description]" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][sql]" class="col-sm-3 control-label">SQL</label>
                        <div class="col-sm-8 input-group">
                            <textarea class="form-control" rows="5" id="data[attributes][sql]" name="data[attributes][sql]" ></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][edited_by]" class="col-sm-3 control-label">Edited By</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_by]" name="data[attributes][edited_by]" value="" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][edited_date]" class="col-sm-3 control-label">Edited Date</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][edited_date]" name="data[attributes][edited_date]" value="" disabled>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                <strong><?php echo __("Query Creation Rules"); ?></strong>
                    <p>Your columns in the SELECT section should be fully named. IE - SELECT system.id AS `system.id`, system.name AS `system.name`...</p>
                    <p>You should include the WHERE @filter so Open-AudIT knows to restrict your query to the appropriate Orgs.</p>
                    <p>An example<br /></p><pre class="wrap">SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.os_name AS `system.os_name` FROM system WHERE @filter AND system.os_group = 'Linux'</pre>
                </div>

            </div>
            <div class="row">
                <div class="form-group">
                    <label for="submit" class="col-sm-3 control-label"></label>
                    <div class="col-sm-8 input-group">
                        <input type="hidden" value="queries" id="data[type]" name="data[type]" />
                        <input type="hidden" value="y" id="data[expose]" name="data[expose]" />
                        <input type="hidden" value="" id="data[link]" name="data[link]" />
                        <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script type='text/javascript'>
var roles = JSON.parse('<?php echo json_encode($this->user->roles); ?>');
var warning = 0;
$(document).ready(function() {
    $("form").submit(function(e){
        var sql = document.getElementById("data[attributes][sql]").value;
        if (sql.toLowerCase().indexOf("where @filter") >= 0) {
            return true;
        } else {
            if (jQuery.inArray( "admin", roles) != -1) {
                if (warning == 1) {
                    return true;
                } else {
                    warning = 1;
                    alert ("You have not included the required @filter. Not doing so negates the permissions of the Org <-> User system. Click submit again to confirm this is what you wish to do, or alter your SQL.");
                }
            } else {
                alert ("You have not included the required @filter. Please change your SQL and try again.");
            }
            e.preventDefault(e);
        }
        e.preventDefault(e);
    });
});
</script>
