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
$endpoints = array('charts','configuration','connections','credentials','database','devices','discoveries','fields','files','graphs','groups','invoices','licenses','ldap_servers','locations','logs','networks','nmis','orgs','queries','roles','scripts','sessions','users');
$permissions = array('c', 'r', 'u', 'd');
$item_permissions = json_decode($item->attributes->permissions);
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="id" class="col-sm-3 control-label">ID</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="id" name="id" placeholder="" value="<?php echo intval($item->attributes->id); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="description" name="description" placeholder="" value="<?php echo htmlspecialchars($item->attributes->description, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_description" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="description"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">AD Group</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="description" name="description" placeholder="" value="<?php echo htmlspecialchars($item->attributes->ad_group, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_by" class="col-sm-3 control-label">Edited By</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="" value="<?php echo htmlspecialchars($item->attributes->edited_by, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_date" class="col-sm-3 control-label">Edited Date</label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_date" name="edited_date" placeholder="" value="<?php echo htmlspecialchars($item->attributes->edited_date, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="text-left">Role Permissions</span>
                <span class="pull-right"></span>
            </h3>
        </div>

        <div class="panel-body">
                <table class="table table-condensed table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Endpoint</th>
                            <th class="text-center">Create</th>
                            <th class="text-center">Read</th>
                            <th class="text-center">Update</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
if (!empty($edit) and $edit) {
    $disabled = '';
} else {
    $disabled = 'disabled';
}
foreach ($endpoints as $endpoint) {
    echo "                    <tr><td><strong>$endpoint</strong></td>";
    foreach ($permissions as $permission) {
        if (!empty($item_permissions->$endpoint) and stripos($item_permissions->$endpoint, $permission) !== false) {
            $checked = 'checked';
        } else {
            $checked = '';
        }
        echo "<td style=\"text-align:center;\"><input id=\"permissions[" . $endpoint . "][" . $permission . "]\" name=\"permissions[" . $endpoint . "][" . $permission . "]\" type=\"checkbox\" value=\"y\" " . $checked . " " . $disabled . "></td>";
    }
    echo "</tr>\n";
}
 ?>
                    </tbody>
                </table>
            </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="text-left">Users</span>
                <span class="pull-right"></span>
            </h3>
        </div>

        <div class="panel-body">
                <table class="table table-condensed table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="text-center"><?php echo __('ID')?></th>
                            <th><?php echo __('Name')?></th>
                            <th><?php echo __('Organisation')?></th>
                            <th><?php echo __('Roles')?></th>
                            <?php if ($this->m_users->get_user_permission('', 'users', 'u')) { ?>
                            <th class="text-center"><?php echo __('Edit')?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
<?php
foreach ($this->response->included as $item) {
    if ($item->type == 'users') { ?>
                    <tr>
                        <td class="text-center"><a class="btn btn-sm btn-success" href="<?php echo htmlspecialchars($item->links->self, REPLACE_FLAGS, CHARSET); ?>"><?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?></a></td>
                        <td><?php echo htmlspecialchars($item->attributes->full_name, REPLACE_FLAGS, CHARSET)?></td>
                        <td><?php echo htmlspecialchars($item->attributes->org_name, REPLACE_FLAGS, CHARSET)?></td>
                        <td><?php echo htmlspecialchars(implode(', ', json_decode($item->attributes->roles)), REPLACE_FLAGS, CHARSET)?></td>
                        <?php if ($this->m_users->get_user_permission('', 'users', 'u')) { ?>
                        <td class="text-center"><a class="btn btn-sm btn-info" href="users/<?php echo intval($item->id); ?>?action=update"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                        <?php } ?>

<?php    }
}
?>
                    </tbody>
                </table>
            </div>
    </div>

</form>
