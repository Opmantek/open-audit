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
 * @version 1.8.2
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
<div id="menu" style="float: left; width: 100%; ">
<ul id="nav">
    <li><a href='<?php echo $oa_web_index; ?>/'><?php echo mb_strtoupper(__('Home'))?></a></li>
    <?php
    # add any custom reports to the $menu array
    # leave the ID blank
    # the name will have spaces converted to underscores and that function from controllers/report.php will be called
    # reset the new_object each time - just copy/paste the four lines below for each report
    $new_object = new stdClass();
    $new_object->report_id = '';
    $new_object->report_name = 'Partition Alerts';
    $menu[] = $new_object;

    if ($this->user->user_sam > '0') {
        $new_object = new stdClass();
        $new_object->report_id = '';
        $new_object->report_name = 'Software Licensing';
        $menu[] = $new_object;
    }

    #a sort function for $menuso the items added above are in their correct alphabetical order
    function cmp($a, $b)
    {
        return strcmp($a->report_name, $b->report_name);
    }

    #use the function above
    usort($menu, "cmp");

    if (isset($group_id)) {
        echo "<li><a href='".$oa_web_index."/main/list_devices/".intval($group_id)."'>".mb_strtoupper(__('Queries'))."</a>\n";
        echo "<ul>\n";
        echo "<li style=\"width:200px;\"><a href='".$oa_web_index."/main/list_devices/".intval($group_id)."'>List Items</a></li>\n";
        foreach ($menu as $report):
            if ($report->report_id > '') {
                echo "<li style=\"width:200px;\"><a href='".$oa_web_index."/report/show_report/".intval($report->report_id)."/".intval($group_id)."'>".htmlentities($report->report_name)."</a></li>\n";
            } else {
                echo "<li style=\"width:200px;\"><a href='".$oa_web_index."/report/".strtolower(str_replace(" ", "_", htmlentities($report->report_name)))."/".intval($group_id)."'>".htmlentities($report->report_name)."</a></li>\n";
            }
        endforeach;
        echo "</ul>\n";
        echo "</li>\n";
    } ?>
    <!--
    <li><a href='#'><?php echo mb_strtoupper(__('Changes'))?></a>
        <ul>
            <li><a href='<?php echo $oa_web_index; ?>/change/add_change'><?php echo __('Add a Change')?></a></li>
        </ul>
    </li>
    -->
    <!--
    <?php
    if ($this->user->user_sam > '2') {
        ?>
        <li><a href='#'><?php echo mb_strtoupper(__('Licensing'))?></a>
            <ul>
                <li><a href='<?php echo $oa_web_index?>/admin_sam/add_software_definition'><?php echo __('Add a Package')?></a></li>
            </ul>
        </li>
    <?php

    } ?>
    -->
    <?php
    if ($this->user->user_admin == 'y') {
        ?>
    <!-- // Only display the below code if the logged in user is an Admin -->
    <li><a href='#'><?php echo mb_strtoupper(__('Admin'))?></a>
        <ul>

            <li><a href='javascript:void(0)'><?php echo __('Additional Fields')?></a>
                <ul>
                    <li><a href='<?php echo $oa_web_index?>/admin_field/list_fields'><?php echo __('List Fields')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_field/add_field'><?php echo __('Add Field')?></a></li>
                </ul>
            </li>

            <li><a href='<?php echo $oa_web_index?>/admin/edit_config'><?php echo __('Config')?></a></li>

            <li><a href='javascript:void(0)'><?php echo __('Connections')?></a>
                <ul>
                    <li><a href='<?php echo $oa_web_index?>/admin_connection/list_connections'><?php echo __('List Connections')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_connection/add_connection'><?php echo __('Add Connection')?></a></li>
                </ul>
            </li>

            <li><a href='javascript:void(0)'><?php echo __('Database')?></a>
                <ul>
                    <!--
                    # this will only work under Linux
                    <li><a href='<?php echo $oa_web_index?>/admin_db/restore'><?php echo __('Restore Database')?></a></li>
                    -->
                    <?php
                    if (php_uname('s') == 'Linux') {
                        echo "                  <li><a href='".$oa_web_index."/admin_db/backup'>".__('Backup the Database')."</a></li>\n";
                    }
        ?>
                    <li><a href='<?php echo $oa_web_index?>/admin_db/export_table'><?php echo __('Export a Database Table')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_db/maintenance'><?php echo __('Database Maintenance')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin/reset_icons'><?php echo __('Reset Device Icons')?></a></li>
                </ul>
            </li>

            <li><a href='javascript:void(0)'><?php echo __('Devices')?></a>
                <ul>
                    <li><a href='<?php echo $oa_web_index?>/admin_system/add_system'><?php echo __('Add a Device (manually)')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/system'><?php echo __('Add a Computer (using an audit result)')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_system/add_systems'><?php echo __('Add Multiple Devices (using a spreadsheet)')?></a></li>
                </ul>
            </li>

            <li><a href='javascript:void(0)'><?php echo __('Discovery')?></a>
                <ul>
                    <li><a href='<?php echo $oa_web_index?>/discovery/discover_subnet/windows'><?php echo __('Discover a Windows computer')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/discovery/discover_subnet/linux'><?php echo __('Discover a device using SSH')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/discovery/discover_subnet/snmp'><?php echo __('Discover a device using SNMP')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/discovery/discover_active_directory'><?php echo __('Discover Active Directory')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin/scan_ad'><?php echo __('Import Active Directory')?></a></li>
                </ul>
            </li>

            <li><a href='javascript:void(0)'><?php echo __('Groups')?></a>
                <ul>
                    <li><a href='<?php echo $oa_web_index?>/admin_group/list_groups'><?php echo __('List Groups')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_group/add_group'><?php echo __('Add Group')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_group/import_group'><?php echo __('Import Group')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_group/activate_group'><?php echo __('Activate Group')?></a></li>
                </ul>
            </li>

            <li><a href='javascript:void(0)'><?php echo __('Locations')?></a>
                <ul>
                    <li><a href='<?php echo $oa_web_index?>/admin_location/list_locations'><?php echo __('List Locations')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_location/add_location'><?php echo __('Add Location')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_location/add_locations'><?php echo __('Add Multiple Locations')?></a></li>
                </ul>
            </li>
            <li><a href='javascript:void(0)'><?php echo __('Logs')?></a>
                <ul>
                    <li><a href='<?php echo $oa_web_index?>/admin/view_log/access'><?php echo __('View Access Log')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin/view_log/system'><?php echo __('View System Log')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin/purge_log/access'><?php echo __('Purge Access Log')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin/purge_log/system'><?php echo __('Purge System Log')?></a></li>
                </ul>
            </li>
            <li><a href='javascript:void(0)'><?php echo __('Organisations')?></a>
                <ul>
                    <li><a href='<?php echo $oa_web_index?>/admin_org/list_orgs'><?php echo __('List Organisations')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_org/add_org'><?php echo __('Add Organisation')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_org/add_orgs'><?php echo __('Add Multiple Organisations')?></a></li>
                </ul>
            </li>

            <li><a href='javascript:void(0)'><?php echo __('Queries')?></a>
                <ul>
                    <li><a href='<?php echo $oa_web_index?>/admin_report/list_reports'><?php echo __('List Queries')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_report/activate_report'><?php echo __('Activate Query')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_report/import_report'><?php echo __('Import Query')?></a></li>
                </ul>
            </li>

            <li><a href='javascript:void(0)'><?php echo __('Scripts')?></a>
                <ul>
                    <li><a href='<?php echo $oa_web_index?>/admin/add_script_audit_windows'><?php echo __('Create Audit Windows')?></a></li>
                </ul>
            </li>

            <li><a href='javascript:void(0)'><?php echo __('Users')?></a>
                <ul>
                    <li><a href='<?php echo $oa_web_index?>/admin_user/list_users'><?php echo __('List Users')?></a></li>
                    <li><a href='<?php echo $oa_web_index?>/admin_user/add_user'><?php echo __('Add a User')?></a></li>
                </ul>
            </li>
        </ul>
    </li>
    <?php } ?>

    <?php
    if (($this->user->user_admin == 'y') and (isset($this->config->config['nmis']) and $this->config->config['nmis'] == 'y')) { ?>
    <!-- // Only display the below code if the logged in user is an Admin -->
    <li><a href='#'><?php echo mb_strtoupper(__('NMIS'))?></a>
        <ul>
            <li><a href='<?php echo $oa_web_index?>/admin/import_nmis'><?php echo __('Import')?></a></li>
            <?php if (isset($group_id)) { ?>
            <li><a href='<?php echo $oa_web_index; ?>/admin/export_nmis/<?php echo intval($group_id); ?>'><?php echo __('Export')?></a></li>
            <?php } ?>
        </ul>
    </li>
    <?php } ?>

    <li><a href='javascript:void(0)'><?php echo mb_strtoupper(__('Help'))?></a>
        <ul>
            <li><a href='<?php echo $oa_web_index; ?>/main/help_about'><?php echo __('About')?></a></li>
            <li><a href='https://community.opmantek.com/display/OA/Open-AudIT+FAQ'><?php echo __('FAQ')?></a></li>
            <li><a href='https://community.opmantek.com/display/OA/Home'><?php echo __('Documentation')?></a></li>
            <li><a href='<?php echo $oa_web_index; ?>/main/help_statistics'><?php echo __('Statistics')?></a></li>
            <li><a href='<?php echo $oa_web_index; ?>/main/help_support'><?php echo __('Support')?></a></li>
        </ul>
    </li>

    <li><a href='javascript:void(0)'><?php echo mb_strtoupper(__('Licenses'))?></a>
        <ul>
            <?php if ($this->config->config['oae_license_status'] != 'valid') { ?>
            <li><a href='/omk/oae/license_free'><?php echo __('Activate Free License')?></a></li>
            <?php } ?>

            <li><a href='/omk/opLicense'><?php echo __('Manage Licenses')?></a></li>
            <li><a href='#' id='buy_more_licenses'><?php echo __('Buy More Licenses')?></a></li>
            <li><a href='/omk/opLicense'><?php echo __('Restore Licenses')?></a></li>
        </ul>
    </li>

    <?php if ($include == 'v_main') { ?>
        <li style="float:right; position:relative; padding-right:4px;">
            <form name="search_form" action="<?php echo $oa_web_index?>/main/search_device" method="post">
                <table>
                    <tr>
                        <td><input type="text" name="search"/></td>
                        <td><input type="submit" value="<?php echo __('Find Device'); ?>" /></td>
                    </tr>
                </table>
            </form>
        </li>
    <?php } ?>


    <?php if (isset($export_report)) { ?>
        <?php if (isset($group_id)) { ?>
            <?php if (($this->config->config['non_admin_search'] == 'y') or ($this->user->user_admin == 'y')) { ?>
                <li style="float:right; position:relative; padding-right:4px;">
                    <form name="search_form" action="<?php echo $oa_web_index?>/main/search/<?php echo intval($group_id);?>/" method="post">
                        <table>
                            <tr>
                                <td><input type="text" name="search"/></td>
                                <td><input type="submit" value="<?php echo __('Search Attributes'); ?>" /></td>
                            </tr>
                        </table>
                    </form>
                </li>
            <?php } ?>
        <?php } ?>
        <?php
        // see if this is a report with a timestamp column - if so, display an RSS icon
        if (isset($column)) {
            $hit = 'n';
            foreach ($column as $col) {
                if (strpos($col->column_variable, "timestamp") !== false) {
                    $hit = 'y';
                }
            }
            if ($hit == 'y') {
                ?>
                <li style="float: right; position: relative; top:-1px; padding-right: 6px;"><a href="<?php echo current_url().'/username/'.$this->user->user_name?>/password/YOUR_PASSWORD/rss"><img src="<?php echo $oa_theme_images?>/16_rss.png" alt="RSS Link" title="RSS Link"/></a></li>
            <?php }
            } ?>
        <li style="float: right; position: relative; top:-1px; padding-right: 6px;"><a href="<?php echo current_url()?>/xml"><img src="<?php echo $oa_theme_images?>/16_text-x-generic-template.png" alt="<?php echo __('Export as XML')?>" title="<?php echo __('Export as XML')?>"/></a></li>
        <li style="float: right; position: relative; top:-1px; padding-right: 3px;"><a href="<?php echo current_url()?>/html"><img src="<?php echo $oa_theme_images?>/16_web.png" alt="<?php echo __('Export as HTML')?>" title="<?php echo __('Export as HTML')?>"/></a></li>
        <li style="float: right; position: relative; top:-1px; padding-right: 3px;"><a href="<?php echo current_url()?>/csv"><img src="<?php echo $oa_theme_images?>/16_csv.png" alt="<?php echo __('Export as CSV')?>" title="<?php echo __('Export as CSV')?>"/></a></li>
        <li style="float: right; position: relative; top:-1px; padding-right: 3px;"><a href="<?php echo current_url()?>/json"><img src="<?php echo $oa_theme_images?>/16_json.png" alt="<?php echo __('Export as JSON')?>" title="<?php echo __('Export as JSON')?>"/></a></li>
        <li style="float: right; position: relative; top:-1px; padding-right: 3px;"><a href="<?php echo current_url()?>/excel"><img src="<?php echo $oa_theme_images?>/16_excel.png" alt="<?php echo __('Export as Excel')?>" title="<?php echo __('Export as Excel')?>"/></a></li>
    <?php

} ?>
</ul>
</div>
<br />
<script type="text/javascript">
    $(function() {
        $('#nav').droppy({speed: 60});
    });


    $('a#buy_more_licenses').click(function(e){
        // get from opmantek.com
        $.get('https://opmantek.com/product_data/oae.json', function(data){
            modal.open({content: data});
        })
        .fail(function() {
            // get from OAC
                $.get('/open-audit/js/oae.json', function(data){
                modal.open({content: data});
            })
        });
    });
</script>


<style>
    * {
        margin:0; 
        padding:0;
    }

    #overlay {
        position:fixed; 
        top:0;
        left:0;
        width:100%;
        height:100%;
        background:#000;
        opacity:0.5;
        filter:alpha(opacity=50);
    }

    #modal {
        position:absolute;
        background:url(/open-audit/images/tint20.png) 0 0 repeat;
        background:rgba(0,0,0,0.2);
        border-radius:14px;
        padding:8px;
    }

    #content {
        border-radius:8px;
        background:#fff;
        padding:20px;
    }

    #close {
        position:absolute;
        background:url(/open-audit/images/close.png) 0 0 no-repeat;
        width:24px;
        height:27px;
        display:block;
        text-indent:-9999px;
        top:-7px;
        right:-7px;
    }
</style>

<script>
    var modal = (function(){
        var
        method = {},
        $overlay,
        $modal,
        $content,
        $close;

        // Center the modal in the viewport
        method.center = function () {
            var top, left;

            top = Math.max($(window).height() - $modal.outerHeight(), 0) / 3;
            top = 30;
            left = Math.max($(window).width() - $modal.outerWidth(), 0) / 2;

            $modal.css({
                top:top + $(window).scrollTop(),
                left:left + $(window).scrollLeft()
            });
        };

        // Open the modal
       method.open = function (settings) {

            // css from OAE / Bootstrap
            $content.empty().append("<link href=\"/open-audit/css/bootstrap.min.css\" rel=\"stylesheet\" />");

            // header
            if (settings.content["header"][0]["text"] != "") {
                var header = "<h2>"+settings.content["header"][0]["text"]+"</h2>";
                $content.append(header);
            }

            // top message
            if (settings.content["top_message"] != "") {
                var topMessage = "<span>"+settings.content["top_message"]+"</span><br />\n";
                $content.append(topMessage);
            }

            // table
            var table = "<table class=\"table table-striped table-bordered\" width=\"100%\">";

            // table header
            var tableHeaderJson = settings.content["table"]["header"];
            var tableHeader = "";
            for (var i = 0; i < tableHeaderJson.length; i++) {
                tableHeader += "<th style=\"vertical-align:middle;\" class=\""+tableHeaderJson[i]["class"]+"\">"+tableHeaderJson[i]["text"]+"</th>";
            }
            tableHeader = "<tr>"+tableHeader+"</tr>";
            table += tableHeader;

            // table rows
            var tableDataJsonRows = settings.content["table"]["rows"];
            var rowData = "";
            for (var i = 0; i < tableDataJsonRows.length; i++) {
                var row = tableDataJsonRows[i];
                rowData = "<tr>";
                for (var j = 0; j < row.length; j++) {
                    if (row[j].hasOwnProperty("button")) {
                        if (row[j]["button"] === "Activate" && "<?php echo $this->config->config['oae_license_type']; ?>" === "Free") {
                            // don't display the button
                            rowData += "<td class=\""+row[j]["class"]+"\">";
                            rowData +=      row[j]["text"];
                            rowData += "    <form action=\"/omk/opLicense/delete/Open-AudIT%20Enterprise\" method=\"POST\">";
                            rowData += "    <button type=\"submit\" class=\"btn btn-success btn-sm\" data-title=\"Immediately removes this license.\">";
                            //rowData += "           <span class=\"glyphicon glyphicon-exclamation-sign\">Deactivate</span>";
                            rowData += "           Deactivate";
                            rowData += "    </button>";
                            rowData += "</td>";
                        } else {
                            // display the button
                            rowData += "<td class=\""+row[j]["class"]+"\">";
                            rowData +=      row[j]["text"];
                            rowData += "    <br /><button type=\"button\" class=\"btn btn-success btn-sm\">";
                            rowData += "        <a style=\"color:white;\" href=\""+row[j]["button_link"]+"\">"
                            rowData +=              row[j]["button"];
                            rowData += "        </a>";
                            rowData += "    </button>";
                            rowData += "</td>";
                        }
                    } else {
                       rowData += "<td class=\""+row[j]["class"]+"\">"+row[j]["text"]+"</td>";
                    }
                }
                rowData += "</tr>";
                table += rowData;
            }

            // end of table
            table += "</table>";
            $content.append(table);

            // bottom message
            if (settings.content["bottom_message"] != "") {
                var bottomMessage = "<span>"+settings.content["bottom_message"]+"</span><br />\n";
                $content.append(bottomMessage);
            }

            // footer
            var footer = settings.content["footer"];
            var output = "";
            for (var i = 0; i < footer.length; i++) {
                output += "<span style=\""+footer[i]["button_parent_style"]+"\"><button type=\"button\" class=\"btn btn-default btn-sm\"><a href=\""+footer[i]["button_link"]+"\">"+footer[i]["button"]+"</a></button></span>\n";
            }
            $content.append(output);

            output = "<br /></dv>\n";
            $content.append(output);


            $modal.css({
                width: settings.width || 'auto',
                height: settings.height || 'auto'
            });

            method.center();
            $(window).bind('resize.modal', method.center);
            $modal.show();
            $overlay.show();
        };

        // Close the modal
        method.close = function () {
            $modal.hide();
            $overlay.hide();
            $content.empty();
            $(window).unbind('resize.modal');
        };

        // Generate the HTML and add it to the document
        $overlay = $('<div id="overlay"></div>');
        $modal = $('<div id="modal"></div>');
        $content = $('<div id="content"></div>');
        $close = $('<a id="close" href="#">close</a>');

        $modal.hide();
        $overlay.hide();
        $modal.append($content, $close);

        $(document).ready(function(){
            $('body').append($overlay, $modal);
        });

        $close.click(function(e){
            e.preventDefault();
            method.close();
        });

        return method;
    }());

    <?php if ($include == 'v_main' and $this->config->config['oae_prompt'] <= date('Y-m-d') and ($this->config->config['oae_license_type'] == 'Free' or $this->config->config['oae_license_status'] != 'valid')) { ?>
    // Wait until the DOM has loaded before querying the document
    $(document).ready(function(){
        // get from opmantek.com
        $.get('https://opmantek.com/product_data/oae.json', function(data){
            modal.open({content: data});
        })
        .fail(function() {
            // get from OAC
                $.get('/open-audit/js/oae.json', function(data){
                modal.open({content: data});
            })
        });
    });
    <?php } ?>

    // add a keydown even for the escape key to close the modal
    $(document).keydown(function(e) {
        if (e.keyCode == 27) {
            modal.close();
        }
    });

</script>
<?php #} ?>