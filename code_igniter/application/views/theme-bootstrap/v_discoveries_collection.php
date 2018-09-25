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
* @version   2.3.0
* @link      http://www.open-audit.org
 */
# check if we have nmap installed
$nmap_installed = 'n';
if (php_uname('s') == "Windows NT") {
    # check the obvious Windows install locations
    $test_path = 'c:\Program Files\Nmap\Nmap.exe';
    if ($nmap_installed == 'n' and file_exists($test_path)) {
        $nmap_installed = 'y';
    }
    $test_path = 'c:\Program Files (x86)\Nmap\Nmap.exe';
    if ($nmap_installed == 'n' and file_exists($test_path)) {
        $nmap_installed = 'y';
    }
    unset($test_path);
} else {
    $command_string = "which nmap 2>/dev/null";
    exec($command_string, $output, $return_var);
    if (isset($output[0]) and strpos($output[0], 'nmap')) {
        $nmap_installed = 'y';
    } else {
        $output[0] = '';
    }
    if ($nmap_installed == 'n') {
        if (file_exists('/usr/local/bin/nmap')) {
            $nmap_installed = 'y';
        }
    }
}

$nmap_warning = '';
if ($nmap_installed == 'n') {
    if (php_uname('s') == "Windows NT") {
        $nmap_warning = "WARNING - Nmap not detected. Get it from <a style='color:#729FCF;' target='_blank' href='http://nmap.org/download.html'>http://nmap.org/download.html</a>.<br />Please see <a target='_blank' href='https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap'>https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap</a> for information about why Open-AudIT requires Nmap and how to install it.";
    } else {
        $nmap_warning = "WARNING - Nmap not detected. Please install it using your package manager.<br />Please see <a target='_blank' href='https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap'>https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap</a> for information about why Open-AudIT requires Nmap and how to install it.";
    }
}
if ($nmap_warning != '') {
    echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $nmap_warning . '</div>';
}
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
                    <?php if ($this->m_users->get_user_permission('', 'discoveries', 'u')) { ?>
                    <th class="text-center"><?php echo __('Execute')?></th>
                    <?php } ?>
                    <th class="text-center"><?php echo __('Details')?></th>
                    <th><?php echo __('Name')?></th>
                    <th><?php echo __('Organisation')?></th>
                    <th><?php echo __('Type')?></th>
                    <th><?php echo __('Description')?></th>
                    <th><?php echo __('Last Run')?></th>
                    <th class="text-center"><?php echo __('Status')?></th>
                    <th class="text-center"><?php echo __('Discovered')?></th>
                    <?php if ($this->m_users->get_user_permission('', 'discoveries', 'd')) { ?>
                    <th class="text-center"><?php echo __('Delete')?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->response->data as $item): ?>
                <tr>
                    <?php if ($this->m_users->get_user_permission('', 'discoveries', 'u')) { ?>
                    <td class="text-center"><a class="btn btn-sm btn-success" href="discoveries/<?php echo intval($item->id); ?>?action=execute"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></a></td>
                    <?php } ?>
                    <td class="text-center"><a class="btn btn-sm btn-primary" href="discoveries/<?php echo intval($item->id); ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    <?php refine('discoveries.name',$item->attributes->name); ?>
                    <?php refine('discoveries.org_id',$item->attributes->org_id,$item->attributes->org_name); ?>
                    <?php refine('discoveries.type',$item->attributes->type); ?>
                    <?php refine('discoveries.description',$item->attributes->description); ?>
                    <?php refine('discoveries.last_run',$item->attributes->last_run); ?>
                    <?php refine('discoveries.status',$item->attributes->status); ?>
                    <td class="text-center"><?php echo $item->attributes->discovered ?></td>
                    <?php if ($this->m_users->get_user_permission('', 'discoveries', 'd')) { ?>
                    <td class="text-center"><button type="button" class="btn btn-sm btn-danger delete_link" data-id="<?php echo intval($item->id); ?>" data-name="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>" aria-label="Left Align" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    <?php } ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
</div>