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
                        <label for="name" class="col-sm-3 control-label"><?php echo __('Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="count" class="col-sm-3 control-label"><?php echo __('Row Count'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="count" name="count" value="<?php echo htmlspecialchars($item->attributes->count, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <?php if ($item->attributes->current_row) { ?>
                    <div class="form-group">
                        <label for="current" class="col-sm-3 control-label"><?php echo __('Current Rows'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="current" name="current" value="<?php echo htmlspecialchars($item->attributes->current, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if ($this->m_users->get_user_permission('', 'database', 'd') and intval($item->attributes->current) > 0) { ?>
                            <span class="input-group-btn">
                                <button id="delete_current" class="btn btn-danger delete_link" type="button" data-id="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>?current=y"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="non_current" class="col-sm-3 control-label"><?php echo __('Noncurrent Rows'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="non_current" name="non_current" value="<?php echo htmlspecialchars($item->attributes->non_current, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if ($this->m_users->get_user_permission('', 'database', 'd') and intval($item->attributes->non_current) > 0) { ?>
                            <span class="input-group-btn">
                                <button id="delete_non_current" class="btn btn-danger delete_link" type="button" data-id="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>?current=n"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if ($item->attributes->name == 'system') { ?>
                        <?php foreach ($item->attributes->status as $status) { ?>
                            <div class="form-group">
                                <label for="status_<?php echo $status->status; ?>" class="col-sm-3 control-label"><?php echo __('Device Status: ' . $status->status); ?></label>
                                <div class="col-sm-8 input-group">
                                    <input type="text" class="form-control" id="status_<?php echo $status->status; ?>" name="status_<?php echo $status->status; ?>" value="<?php echo htmlspecialchars($status->count, REPLACE_FLAGS, CHARSET); ?>" disabled>
                                    <?php if ($this->m_users->get_user_permission('', 'database', 'd') and $status->status != 'production') { ?>
                                    <span class="input-group-btn">
                                        <button id="delete_status_<?php echo $status->status; ?>" class="btn btn-danger delete_link" type="button" data-id="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>?status=<?php echo $status->status; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                    </span>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="export_csv" class="col-sm-3 control-label">Export Data</label>
                        <div class="col-sm-8 input-group">
                            <a id="export_csv" name="export_csv" class="btn btn-sm btn-primary" href="<?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?>?action=execute&format=csv&sub_resource=export table">to CSV</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="export_sql" class="col-sm-3 control-label">Export Data</label>
                        <div class="col-sm-8 input-group">
                            <a id="export_sql" name="export_sql" class="btn btn-sm btn-primary" href="<?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?>?action=execute&format=sql&sub_resource=export table">to SQL</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="export_sql" class="col-sm-3 control-label">Export Data</label>
                        <div class="col-sm-8 input-group">
                            <a id="export_sql" name="export_sql" class="btn btn-sm btn-primary" href="<?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?>?action=execute&format=xml&sub_resource=export table">to XML</a>
                        </div>
                    </div>
                    <?php $tables = ' audit_log change_log chart credentials discoveries discovery_log edit_log graph networks oa_user_sessions '; ?>
                    <?php if (strpos($tables, ' ' . $item->attributes->name . ' ') !== false) { ?>
                        <?php if ($this->m_users->get_user_permission('', 'database', 'd')) { ?>
                        <div class="form-group">
                            <label for="delete_all" class="col-sm-3 control-label">Delete All Data</label>
                            <div class="col-sm-8 input-group">
                                    <button id="delete_all" class="btn btn-danger delete_link" type="button" data-id="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>?current=all">Delete</button>
                            </div>
                        </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="text-left"><?php echo __('Columns'); ?></span>
            </h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th><?php echo __('Name'); ?></th>
                                <th><?php echo __('Type'); ?></th>
                                <th><?php echo __('Default'); ?></th>
                                <th><?php echo __('Max Length'); ?></th>
                                <th><?php echo __('Primary Key'); ?></th>
                                <th><?php echo __('Valid Values'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($item->attributes->columns as $column) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($column->name, REPLACE_FLAGS, CHARSET); ?></td>
                                <td><?php echo htmlspecialchars($column->type, REPLACE_FLAGS, CHARSET); ?></td>
                                <td><?php echo htmlspecialchars($column->default, REPLACE_FLAGS, CHARSET); ?></td>
                                <td><?php echo htmlspecialchars($column->max_length, REPLACE_FLAGS, CHARSET); ?></td>
                                <?php if ($column->primary_key) {
                                    echo "<td>true</td>\n";
                                } else {
                                    echo "<td></td>\n";
                                }
                                ?>
                                <?php if ($column->type == 'enum') {
                                    echo "<td class=\"wrap\">" . htmlspecialchars(str_replace(',', ', ', $column->values), REPLACE_FLAGS, CHARSET) . "</td>\n";
                                } else {
                                    echo "<td></td>\n";
                                }
                                ?>

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php
if (!empty($this->data) and is_string($this->data)) {
?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="text-left"><?php echo __('Data'); ?></span>
            </h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <pre>
<?php echo htmlspecialchars($this->data, REPLACE_FLAGS, CHARSET); ?>
                    </pre>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>






</form>