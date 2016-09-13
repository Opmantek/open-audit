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
include "v_lang.php";
?><!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="refresh" content="300" />
    <link rel="shortcut icon" href="<?php echo $this->config->config['oa_web_folder']; ?>/favicon.png" type="image/x-icon" />
    <title>Open-AudIT</title>
    <link rel="stylesheet" href="<?php echo $this->config->config['oa_web_folder']; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['oa_web_folder']; ?>/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['oa_web_folder']; ?>/css/bootstrap-table.min.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['oa_web_folder']; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $this->config->config['oa_web_folder']; ?>/css/bootstrap-dropdown.css">
<?php
if (!empty($this->response->meta->collection) and $this->response->meta->collection == 'locations' and ($this->response->meta->action == 'update_form' or $this->response->meta->action == 'create_form')) { ?>
        <script src="http://maps.google.com/maps/api/js?key=<?php echo $this->config->config['maps_api_key']; ?>"></script>
    <?php
} ?>
    <script src="<?php echo $this->config->config['oa_web_folder']; ?>/js/jquery.min.js"></script>
    <script src="<?php echo $this->config->config['oa_web_folder']; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->config->config['oa_web_folder']; ?>/js/bootstrap-table.min.js"></script>
    <!-- Open-AudIT specific items -->
    <script>
<?php
if (!is_null($this->response->meta->id)) {
    echo "        var id = '" . $this->response->meta->id . "';\n";
}
if (!empty($this->response->meta->collection)) {
    echo "        var collection = '" . $this->response->meta->collection . "';\n";
}
if (!empty($this->response->meta->baseurl)) {
    echo "        var baseurl = '" . $this->response->meta->baseurl . "';\n";
} else {
    echo "        var baseurl = '';\n";
}
?>
        var web_folder = '<?php echo $this->config->config['oa_web_folder']; ?>';
    </script>
    <script src="<?php echo $this->config->config['oa_web_folder']; ?>/js/open-audit.js"></script>
    <link rel="stylesheet" href="<?php echo $this->config->config['oa_web_folder']; ?>/css/open-audit.css">
</head>
<body>
<div class="container-fluid">
<?php 
include "include_header.php";
if (!empty($this->response->errors)) {
    echo '<div class="alert alert-danger" role="alert"><strong>' . $this->response->errors[0]->title . "</strong><br />" . $this->response->errors[0]->detail . "</div>\n";
}
if (!empty($this->session->flashdata('error'))) {
    echo '<div class="alert alert-danger" role="alert">' . $this->session->flashdata('error') . "</div>\n";
}
if (!empty($this->session->flashdata('success'))) {
    echo '<div class="alert alert-success" role="alert">' . $this->session->flashdata('success') . "</div>\n";
}
if (empty($this->session->flashdata('error')) and !empty($this->response->errors[0]->detail)) {
    echo '<div class="alert alert-danger" role="alert">' . $this->response->errors[0]->detail . "</div>\n";
}
include($include.'.php');
?>


<?php
unset($this->response->meta->user->password);
unset($this->response->data);
unset($this->response->meta->sql);
?>

<div id="json_response" style="display:none;">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="text-left">Debug</span>
            </h3>
        </div>
        <div class="panel-body">
            <?php if (!empty($this->response->errors)) { ?>
                <h3>Error</h3>
                <pre><?php print_r(json_encode($this->response->errors, JSON_PRETTY_PRINT)); ?></pre>
            <?php } ?>
            <h3>User</h3>
            <pre><?php print_r(json_encode($this->response->meta->user, JSON_PRETTY_PRINT)); ?></pre>
            <?php unset($this->response->meta->user); ?>
            <h3>Meta</h3>
            <pre><?php print_r(json_encode($this->response->meta, JSON_PRETTY_PRINT)); ?></pre>
            <h3>SQL Queries</h3>
            <pre><?php
                $CI =& get_instance();
                $times = $CI->db->query_times;
                foreach ($CI->db->queries as $key=>$query) {
                    echo "Query: " . str_replace("\n", " ", $query) . "\n";
                    echo "Time: " . $times[$key] . "\n\n";
                }
            ?>
            </pre>
        </div>
    </div>
</div>

</div>
</body>
</html>
<?php exit(); ?>