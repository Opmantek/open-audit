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
?><!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="refresh" content="300" />
    <link rel="shortcut icon" href="<?php echo $this->config->config['oa_web_folder']; ?>/favicon.png" type="image/x-icon" />
    <title>Open-AudIT</title>
    <link rel="stylesheet" href="<?php echo $this->config->config['oa_web_folder']; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['oa_web_folder']; ?>/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['oa_web_folder']; ?>/css/font-awesome.min.css">
    <script src="<?php echo $this->config->config['oa_web_folder']; ?>/js/jquery.min.js"></script>
    <script src="<?php echo $this->config->config['oa_web_folder']; ?>/js/bootstrap.min.js"></script>
</head>
<body onload="document.form.username.focus();">
<br />
<form class="form-horizontal" id="form" name="form" method="post" action="logon">
<div class="row">
<div class="col-md-8  col-md-offset-2 text-center">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-sm-12 text-center">
                        <img src='<?php echo $this->config->config['oa_web_folder'] . '/images/'.$this->config->config['logo']; ?>.png' alt='logo' border='0' /><br /><br />
                    </div>

                    <div class="form-group text-center">
                        <label for="id" class="col-sm-3 control-label col-md-offset-2">Username</label>
                        <div class="col-sm-2 input-group">
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <label for="id" class="col-sm-3 control-label col-md-offset-2">Password</label>
                        <div class="col-sm-2 input-group">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group text-center">
                            <label for="submit" class="col-sm-3 control-label col-md-offset-2"></label>
                            <div class="col-sm-2 input-group">
                                <button type="submit" class="btn btn-default" id="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </div>

                    <?php
                    if ($this->config->config['device_count'] == '0') {
                        ?>
                        <div class="row">
                        <div class="col-sm-4 col-md-offset-4">
                            <div class="well well-sm" style="padding:10px; margin:4px; background:#d9edf7;">No devices are in the database.</div>
                            <div class="well well-sm" style="padding:10px; margin:4px; background:#dff0d8;">Initial login credentials are admin / password.</div>
                            <div class="well well-sm" style="padding:10px; margin:4px; background:#f2dede;">Please log in and change these ASAP.</div>
                        </div>
                        </div>
                    <?php
                    } ?>

                    <div class="row">
                        <div class="sol-sm-8">
                        <br />Don't forget about the Open-AudIT wiki for all your documentation.<br /><a target='_blank' href='https://community.opmantek.com/display/OA/Home'>https://community.opmantek.com/display/OA/Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</form>
<script type="text/javascript">
    function audit_my_pc()
    {
        location.href = "/open-audit/index.php/login/audit_my_pc";
    }
<?php if ($this->config->config['device_count'] == '0') {
    ?>
    document.getElementById("username").value = "admin";
    document.getElementById("password").value = "password";
    <?php
}
    ?>
</script>
</body>
</html>
