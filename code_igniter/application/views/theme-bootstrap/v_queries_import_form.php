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
 * @version   1.14.2

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
$item = $this->response->data[0];
?>
<?php echo form_open_multipart($this->response->meta->collection.'/import');?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="text-left"><?php echo __('Import ') . $this->response->meta->collection; ?></span>
                <span class="pull-right"></span>
            </h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="file_import" class="col-sm-3 control-label"><?php echo __('File Import'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="file" class="form-control" id="file_import" name="file_import">
                            <p class="help-block">Upload your csv file.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="submit" class="col-sm-3 control-label"></label>
                        <div class="col-sm-8 input-group">
                            <button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="text-left"><?php echo __('Example'); ?></span>
            </h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <p>Below is an example of the required csv format. The minimum required attributes for <?php echo $this->response->meta->collection; ?> are org_id, name and sql. You should not include the id, edited_by or edited_date fields. These will be automatically set. All other columns are optional.</p>
                    <p>You should use a header line containing the names of the columns you wish to populate, then your data lines below that.</p>
                    <samp>
                        "org_id","name","sql"<br />
                        "1","Linux Device Hardware","SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.manufacturer AS `system.manufacturer`, system.model AS `system.model`, system.serial AS `system.serial`, system.os_family AS `system.os_family`, system.memory_count AS `system.memory_count`, system.form_factor AS `system.form_factor`, processor.description AS `processor.description` FROM system LEFT JOIN processor ON (processor.system_id = system.id AND processor.current = 'y') WHERE @filter AND system.os_group = 'Linux' ORDER BY system.name"
                    </samp>
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
                        <?php 
                        foreach ($item->attributes->columns as $column) {
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($column->name, REPLACE_FLAGS, CHARSET); ?></td>
                                <td><?php echo htmlspecialchars($column->type, REPLACE_FLAGS, CHARSET); ?></td>
                                <td><?php echo htmlspecialchars($column->default, REPLACE_FLAGS, CHARSET); ?></td>
                                <td><?php echo htmlspecialchars($column->max_length, REPLACE_FLAGS, CHARSET); ?></td>
                                <?php
                                if (!empty($column->primary_key)) {
                                    echo "<td>true</td>\n";
                                } else {
                                    echo "<td></td>\n";
                                }
                                ?>
                                <?php
                                if ($column->type == 'enum') {
                                    echo "<td class=\"wrap\">" . htmlspecialchars($column->values, REPLACE_FLAGS, CHARSET) . "</td>\n";
                                } else {
                                    echo "<td></td>\n";
                                }
                                ?>

                            </tr>
                        <?php
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
