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
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
include "v_lang.php";
if (!isset($sortcolumn)) {
    $sortcolumn = '0';
}

if ($this->config->config['logo'] == 'oae') {
    $title = "Open-AudIT Enterprise";
} else {
    $title = "Open-AudIT";
}
$router = & load_class('Router', 'core');
$controller = $router->fetch_class();
$router = & load_class('Router', 'core');
$function = $router->fetch_method();
if ($function == "list_devices") {
    $title .= " - List Devices (".$heading.")";
} elseif ($function == 'show_report') {
    $title .= " - Report ".$heading;
} else {
    $title .= " - ".ucwords(str_replace("_", " ", $function));
}

function print_something($string)
{
    if ((mb_strlen($string) == 0) or ($string == '0000-00-00')) {
        return '-';
    } else {
        return htmlentities($string);
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<?php if (isset($this->config->config['page_refresh']) and $this->config->config['page_refresh'] != '0' and is_numeric($this->config->config['page_refresh'])) { ?>
	   <meta http-equiv="refresh" content="<?php echo $this->config->item('page_refresh'); ?>" />
	<?php } ?>
	<link rel="shortcut icon" href="<?php echo base_url();?>favicon.png" type="image/x-icon" />
	<title><?php echo $title?></title>
	<script type="text/javascript" src="<?php echo $oa_theme_files; ?>/jquery/js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="<?php echo $oa_theme_files; ?>/jquery/js/jquery.droppy.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $oa_theme_files; ?>/jquery/css/humanity/jquery-ui-1.8.13.custom.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $oa_theme_files; ?>/jquery/css/humanity/droppy.css" />
	<script type="text/javascript" src="<?php echo $oa_theme_files; ?>/jquery/js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="<?php echo $oa_theme_files; ?>/jquery/js/jquery.metadata.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $oa_theme_files; ?>/jquery/css/humanity/tablesorter-style.css" />
	<script type="text/javascript" src="<?php echo $oa_theme_files; ?>/jquery/js/nicejforms.js"></script>
	<!-- <script type="text/javascript" src="<?php echo $oa_theme_files; ?>/jquery/js/nicejforms-interface.js" /> -->
	<link rel="stylesheet" type="text/css" href="<?php echo $oa_theme_files; ?>/jquery/css/humanity/niceforms-default.css" />
	<script type="text/javascript" src="<?php echo $oa_theme_files; ?>/jquery/js/jquery-ui-1.8.13.custom.min.js"></script>


    <script type="text/javascript" src="/open-audit/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			var dialogOpts = {
			modal: true,
			bgiframe: true,
			autoOpen: false,
			height: 500,
			width: 500,
			draggable: true,
			resizeable: true
			};
			$("#example").dialog(dialogOpts);
			$('#showdialog').click(
				function() {
					$("#example").load("/test_form.php", [], function(){
						$("#example").dialog("open");
						}
					);
					return false;
				}
			);
		});
	</script>

	<script type="text/javascript">
	$(document).ready(function() {
		$(function() {
            $("table").tablesorter({cancelSelection: false, widthFixed: true, sortList: [[<?php echo $sortcolumn?>,0],[<?php echo $sortcolumn?>,0]], widgets: ['zebra'] })
		});
	});

	// note - the below variable would normally be set in instantedit.js
	// I set it here so I can use PHP to allow for site location changes
	<?php if ($include != "v_edit_config") {
    echo "\nvar urlBase = \"".base_url()."index.php/ajax/update_system_man\";\n";
    echo "var baseUrl = \"".base_url()."\";\n";
} else {
    echo "\nvar urlBase = \"".base_url()."index.php/ajax/update_config\";\n";
    echo "var baseUrl = \"".base_url()."\";\n";
} ?>
	</script>

	<script type="text/javascript" src="<?php echo $oa_theme_files; ?>/jquery/js/instantedit.js"></script>
	<?php if (strpos($include, 'v_display_') == 0) {
    if (isset($system_id)) {
        echo "	<script type=\"text/javascript\">\n";
        echo "		setVarsForm(\"$system_id\");\n";
        echo "	</script>\n";
    }
    ?>
	<style type="text/css">
	a {
		outline: none;
	}
	div.menuTree {
		/* border: solid 1px black; */
	}
	div.menuTree UL {
		font-size: 100%;
		padding: 0px;
		margin: 0px;
		display:none;
	}
	div.menuTree UL LI {
		list-style: none;
		padding: 0px;
		padding-left: 5px;
		margin: 0px;
		white-space: nowrap;
		line-height: 20px;
	}
	div.menuTree UL LI.parent A {
		text-decoration: none;
		padding: 0px 2px;
	}
	div.menuTree UL LI.parent A:hover {
		font-size: 100%;
	}
	div.menuTree UL LI.child A {
		text-decoration: none;
		padding: 0px 2px;
	}
	div.menuTree UL LI.child A:hover {
		font-size: 100%;
	}
	div.menuTree UL LI.parent {
		background: url(<?php echo $oa_theme_images;?>/collapsed_image.gif) left top no-repeat;
	}
	div.menuTree UL LI.expanded {
		background: url(<?php echo $oa_theme_images;?>/expended_image.gif) left top no-repeat;
	}
	</style>
	<?php
    }
    ?>

<style type="text/css">

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
        width:1000px;
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

	<!-- removed the menu css from here -->

	<style type="text/css">
	a { color: #101010; text-decoration: none }
	a:hover { color: #729FCF; }
	body { font-family:"Verdana","Lucida Sans Unicode","Lucida Sans",Sans-Serif; background: #FBFAF9; font-size:12px; color:#111; margin:8px;}
	h2 { border-color:#FFF; border-style:solid; border-width:0pt 0pt 1px; color:#555555; font-size:22px; font-weight:bold; padding:0px 0px 1px; }
	img {border:0;}
	</style>

	<?php
    if ($include == "v_main" or $include == "v_report" or $include == "v_search_result" or $include == "v_report_software_licensing") {
        include "popup_js.php";
        include "popup_css.php";
    }
    ?>

<style type="text/css">
.section_image {
    float:right;
    margin;10px;
    width:48px;
}
</style>

<style type="text/css" media="print">
	#topsection {
		display:none;
	}
</style>

<?php if ($this->user->admin == 'y') {
    echo "<script type=\"text/javascript\">\n";
    echo "function createRequestObject() \n";
    echo "{\n";
    echo "	var req;\n";
    echo "	if(window.XMLHttpRequest){\n";
    echo "		// Firefox, Safari, Opera...\n";
    echo "		req = new XMLHttpRequest();\n";
    echo "	} else if(window.ActiveXObject) {\n";
    echo "		// Internet Explorer 5+\n";
    echo "		req = new ActiveXObject(\"Microsoft.XMLHTTP\");\n";
    echo "	} else {\n";
    echo "		// There is an error creating the object,\n";
    echo "		// just as an old browser is being used.\n";
    echo "		alert('Problem creating the XMLHttpRequest object');\n";
    echo "	}\n";
    echo "	return req;\n";
    echo "}\n";
    echo "\tfunction user_debug() {\n";
    echo "\t\tvar http = createRequestObject();\n";
    echo "\t\tuser_debug_field=document.getElementById(\"user_debug_field\").value\n";
    echo "\t\thttp.open('get', '".base_url()."index.php/ajax/user_debug/'+user_debug_field);\n";
    #echo "http.onreadystatechange = handleResponseFields;";
    #echo "http.send(null);";
    echo "\t}\n";
    echo "</script>\n";
} ?>

</head>
<body>
<div id="wrapper">
	<div id="topsection" style="margin: 0 auto; padding: 10px 0;">
	<?php include "include_header.php"; ?>
	<?php include "include_menu.php"; ?>
	</div> <!-- end of topsection -->
	<div id="content_container" style="float: left; width: 100%">
	<?php
    if (isset($this->response)) {
        $total = $this->response->filtered . ' of ' . $this->response->total . ' results';
        $query = '';
    }
    if (isset($query) and $include != 'v_add_user') {
        if (empty($total)) {
            $total = count($query) . ' ' . __("results");
        }
        echo "\t<div>\n\t\t\t<div style=\"float:left; width:50%;\"><h2>".__($heading)."</h2></div>\n\t\t\t<div style=\"float:left; width:50%; text-align: right;\"><h2>".$total."</h2></div>\n\t\t</div>\n";
    } else {
        echo "<h2>".htmlentities(__($heading))."</h2>\n";
    }
    #$this->load->view("theme-" . $this->user->theme . "/" . $include);
    include($include.'.php');
    ?>
	</div><!-- end of content_container -->
</div>
</body>
</html>
