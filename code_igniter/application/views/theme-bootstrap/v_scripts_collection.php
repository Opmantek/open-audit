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
 * @version   2.0.1

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <?php include('include_collection_panel_header.php'); ?>
    </div>
    <div class="panel-body">
        <?php include('include_collection_panel_body_links.php'); ?>
        <?php if (!empty($this->response->data)) { ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                      <th style="text-align:center;"><?php echo __('View')?></th>
                      <th><?php echo __('Name')?></th>
                      <th><?php echo __('Organisation')?></th>
                      <th><?php echo __('Description')?></th>
                      <th><?php echo __('Based On')?></th>
                      <th><?php echo __('Edited By')?></th>
                      <th><?php echo __('Edited Date')?></th>
                      <th style="text-align:center;"><?php echo __('Download')?></th>
                      <?php if ($this->m_users->get_user_permission('', 'scripts', 'd')) { ?>
                      <th style="text-align:center;"><?php echo __('Delete')?></th>
                      <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($this->response->data as $item): ?>
                    <tr>
                          <td class="text-center"><a class="btn btn-sm btn-primary" href="<?php echo htmlspecialchars($item->links->self, REPLACE_FLAGS, CHARSET); ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                            <?php refine('scripts.name', $item->attributes->name); ?>
                            <?php refine('scripts.org_id', $item->attributes->org_id, $item->attributes->org_name); ?>
                            <?php refine('scripts.description', $item->attributes->description); ?>
                            <?php refine('scripts.based_on', $item->attributes->based_on); ?>
                            <?php refine('scripts.edited_by', $item->attributes->edited_by); ?>
                            <?php refine('scripts.edited_date', $item->attributes->edited_date); ?>
                          <td class="text-center"><a class="btn btn-sm btn-info" href="<?php echo $item->links->self; ?>?action=download"><span class="glyphicon glyphicon-download" aria-hidden="true"></span></a></td>
                          <?php if ($this->m_users->get_user_permission('', 'scripts', 'd')) { ?>
                            <?php if ($item->attributes->name !== $item->attributes->based_on) { ?>
                              <td class="text-center"><button type="button" class="btn btn-sm btn-danger delete_link" data-id="<?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?>" data-name="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                            <?php } else { ?>
                              <td></td>
                            <?php } ?>
                          <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>