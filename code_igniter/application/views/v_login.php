<?php
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon" />
    <title>Open-AudIT</title>
    <style type="text/css">
    #container { width: 950px; margin: 0 auto; padding: 10px 0; border: 1px solid #555; border-radius: 5px;}
    a { color: #101010; text-decoration: none }
    a:hover { color: #729FCF; }
    body { font-family:"Verdana","Lucida Sans Unicode","Lucida Sans",Sans-Serif; background: #fff; font-size:12px; color:#111;}
    h2 { border-color:#DBD9C5; border-style:solid; border-width:0pt 0pt 1px; color:#555555; font-size:22px; font-weight:bold; padding:0px 0px 1px; }
    img {border:0;}
    </style>
</head>
<?php
$image_path = base_url() . 'theme-tango/tango-images/';

$file_exist = '';
$filename = dirname(dirname(dirname(dirname(__FILE__)))) . "/other/audit_windows.vbs";
if (strpos($_SERVER['HTTP_USER_AGENT'], "Windows NT") === false) {
    $show = "n";
} else {
    $show = "y";
}

if (!isset($logo)) {
    $logo = "logo.png";
} ?>
<body onload="document.myform.username.focus();">
    <div id="container">
    <div id="header" style='height: 200px; width: 950px; margin-left: auto; margin-right: auto; padding: 20px; border: 10px;' align='left'>
        <?php $attributes = array ('name' => 'myform'); ?>
        <?php echo form_open('login/process_login', $attributes, $hidden) . "\n"; ?>
                <div align='left' style="height: 150px; width:60%; float: left; valign: center; text-align: center;">
                    <img src='<?php echo $image_path . $logo ;?>' alt='logo' border='0' /><br />
<?php if ((file_exists($filename)) and $show == 'y') {
                    echo "<span align=\"center\"><br /><input type=\"button\" name=\"audit\" id=\"audit\" onClick=\"audit_my_pc()\" value=\"Audit My PC\" /></span><br />&nbsp;\n";
} ?>
                </div>
                <div align='right' style="height: 150px; width:40%; float: right; text-align: center;">
                    <p><label for="username">Username: </label><input type="text" name="username" id="username" size="20" /></p>
                    <p><label for="password">Password: </label><input type="password" name="password" id="password" size="20" /></p>
                    <p><?php echo form_submit('login', 'Login'); ?>
<?php echo $this->session->flashdata('message'); ?>
                    <br />&nbsp;</p>
                </div>
<?php echo form_close(); ?>
<?php if ($systems == '0') {
                echo "<div style='width: 100%; text-align: center;'><br />&nbsp;<br />
                <span style='font-size: 10pt; font-style: italic; color: blue;' >No devices are in the database.</span><br />
                <span style='font-size: 10pt; font-style: italic; color: green;'>Initial login credentials are admin / password.</span><br />
                <span style='font-size: 10pt; font-style: italic; color: red;'  >Please log in and change these ASAP.</span><br />
                <br /></div>\n";
} ?>
    </div>
<?php if (isset($oae_message)) {
    echo "<div style='width: 950px; margin-left: auto; margin-right: auto; padding: 20px; border: 10px; text-align: center;' align='left'>\n";
    echo "\t\t<span style='font-size: 12pt;'>" . $oae_message . "<br /><br /></span>\n";
    echo "</div>\n";
}
?>
</div>
<script type="text/javascript">
    function audit_my_pc()
    {
        location.href = "/open-audit/login/audit_my_pc";
    }
<?php if ($systems == '0') { ?>
    document.getElementById("username").value = "admin";
    document.getElementById("password").value = "password";
    <?php 
} ?>
</script>
</body>
</html>
