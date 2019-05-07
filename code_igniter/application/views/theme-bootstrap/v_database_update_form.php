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
* @version   3.1.0
* @link      http://www.open-audit.org
 */
if (php_uname('s') == "Windows NT") {
    exec("echo. |WMIC OS Get Caption", $output);
    if (isset($output[1])) {
        $operating_system = $output[1];
    } else {
        $operating_system = "unknown (You must run Apache as an administrator on Windows to determine this)";
    }
} else {
    $operating_system = php_uname('s');
}

$upgrade_message = "";




if (($this->config->item('display_version') != $this->config->item('web_display_version')) and (!$this->m_users->get_user_permission('', 'database', 'u'))) {
    $upgrade_message = "<br /><span style='color: blue;'>The database version and web version are inconsistent. <br />Please have an Open-AudIT administrator logon and upgrade the database.</span>";
}

if ($this->config->item('display_version') != $this->config->item('web_display_version') and ($this->m_users->get_user_permission($this->user->id, 'database', 'u') or $this->config->config['internal_version'] < 20160904)) {

    $upgrade_message = '<div class="form-group"><label for="display_version" class="col-sm-3 control-label">' . __('Database Upgrade Required') . '</label><div class="col-sm-8 input-group">';

    $upgrade_message .= '<button class="btn btn-warning" type="submit" name="submit" id="submit">'. __('Upgrade') . '</button>';

    if ($this->config->item('internal_version') < '20190512') {
        $upgrade_message .= '&nbsp;&nbsp;<strong>NOTE</strong>- Upgrading to 3.1.0 may take some time as we create new indexes on some tables. This will depend on the size of those tables, please be patient.';
    }

    $upgrade_message .= '</div></div>';


    // if ($this->config->item('internal_version') < 20160104) {
    //     $upgrade_message .= "<strong>NOTE</strong>- If you have a large dataset, the upgrade to 1.10 may take a while. Please do not refresh the page. Watch your browser page indicator to determine when the upgrade has completed. Do not press the 'stop' button on your browser.<br />It may take a while, but it will complete.";
    // }
}


?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->config->config['base_url']; ?>index.php/database?action=update">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="text-left"><?php echo __('Database Upgrade'); ?></span>
                <span class="pull-right"></span>
            </h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">


                    <?php echo $upgrade_message ?>


                    <div class="form-group">
                        <label for="web_display_version" class="col-sm-3 control-label"><?php echo __('Open-AudIT Web Version'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="web_display_version" name="web_display_version" value="<?php echo htmlspecialchars($this->config->item('web_display_version'), REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="display_version" class="col-sm-3 control-label"><?php echo __('Open-AudIT Database Version'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="display_version" name="display_version" value="<?php echo htmlspecialchars($this->config->item('display_version'), REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="hostname" class="col-sm-3 control-label"><?php echo __('Hostname'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="hostname" name="hostname" value="<?php echo htmlspecialchars(php_uname('n'), REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="host_os" class="col-sm-3 control-label"><?php echo __('Host OS'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="host_os" name="host_os" value="<?php echo htmlspecialchars($operating_system, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="database_platform" class="col-sm-3 control-label"><?php echo __('Database Platform'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="database_platform" name="database_platform" value="<?php echo htmlspecialchars($this->db->platform(), REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="database_version" class="col-sm-3 control-label"><?php echo __('Database Version'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="database_version" name="database_version" value="<?php echo htmlspecialchars($this->db->version(), REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="web_server" class="col-sm-3 control-label"><?php echo __('Web Server'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="web_server" name="web_server" value="<?php echo htmlspecialchars(getenv("SERVER_SOFTWARE"), REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="php_server" class="col-sm-3 control-label"><?php echo __('PHP Server'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="php_server" name="php_server" value="<?php echo htmlspecialchars(phpversion(), REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
