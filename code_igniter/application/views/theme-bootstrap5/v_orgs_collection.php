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
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************

/**
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2022 Firstwave
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.5.3
* @link      http://www.open-audit.org
 */
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?php echo card_header($meta->collection, '', $meta->icon); ?>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover dataTable" data-order='[[2,"asc"]]'>
                        <thead>
                            <tr>
                                <th class="text-center" data-orderable="false">Details</th>
                                <th class="text-center" data-orderable="false">Devices</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Parent</th>
                                <th>Type</th>
                                <th>LDAP Group</th>
                                <th>Device Count</th>
                                <th class="text-center" data-orderable="false">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
<?php foreach ($data as $item) { ?>
                            <tr>
                                <td class="text-center"><a role="button" class="btn btn-sm btn-primary" href="<?php echo $this->config->config['oa_web_index'] ?>/<?php echo $meta->collection ?>/<?php echo $item->id ?>"><i class="<?php echo $meta->icon ?>"></i></a></td>
                                <td class="text-center"><a role="button" class="btn btn-sm btn-devices" href="<?php echo $this->config->config['oa_web_index'] ?>/devices?system.org_id=<?php echo $item->id; ?>"><i class="fa fa-desktop"></i></a></td>
                                <td><?php echo $item->attributes->name ?></td>
                                <td><?php echo $item->attributes->description ?></td>
                                <td><?php echo $item->attributes->type ?></td>
                                <td><?php echo $item->attributes->parent_name ?></td>
                                <td><?php echo $item->attributes->ad_group ?></td>
                                <td class="text-center"><?php echo $item->attributes->device_count; ?></td>
<?php if ($this->m_users->get_user_permission('', $meta->collection, 'd')) { ?>
                                <td class="text-center"><button class="btn btn-sm btn-danger delete_link" data-id="<?php echo $item->id; ?>" data-name="<?php echo $item->attributes->name; ?>" aria-label="Left Align" ><i class="fa fa-trash"></i></button></td>
<?php } ?>
                            </tr>
<?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
