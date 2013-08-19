<?php
include "v_lang.php";
$file_path = base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-files/';
if (!isset($sortcolumn)) { $sortcolumn = '0';}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon" />
	<title><?php echo $title?></title>
	<script type="text/javascript" src="<?php echo $file_path;?>jquery/js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="<?php echo $file_path;?>jquery/js/jquery.droppy.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $file_path;?>jquery/css/humanity/jquery-ui-1.8.13.custom.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $file_path;?>jquery/css/humanity/droppy.css" />
	<script type="text/javascript" src="<?php echo $file_path;?>jquery/js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="<?php echo $file_path;?>jquery/js/jquery.metadata.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $file_path;?>jquery/css/humanity/tablesorter-style.css" />
	<script type="text/javascript" src="<?php echo $file_path;?>jquery/js/nicejforms.js"></script>
	<!-- <script type="text/javascript" src="<?php echo $file_path;?>jquery/js/nicejforms-interface.js" /> -->
	<link rel="stylesheet" type="text/css" href="<?php echo $file_path;?>jquery/css/humanity/niceforms-default.css" />
	<script type="text/javascript" src="<?php echo $file_path;?>jquery/js/jquery-ui-1.8.13.custom.min.js"></script>

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
		echo "\nvar urlBase = \"" . base_url() . "index.php/ajax/update_system_man\";\n";
		echo "var baseUrl = \"" . base_url() . "\";\n";
	} else {
		echo "\nvar urlBase = \"" . base_url() . "index.php/ajax/update_config\";\n";
		echo "var baseUrl = \"" . base_url() . "\";\n";
	} ?>
	</script>

	<script type="text/javascript" src="<?php echo $file_path;?>jquery/js/instantedit.js"></script>
	<?php if (strpos($include, 'v_display_') == 0) {
		if (isset($system_id)) {
			echo "	<script type=\"text/javascript\">\n";
			echo "		setVarsForm(\"$system_id\");\n";
			echo "	</script>\n";
		} ?>
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
		background: url(<?php echo $file_path;?>images/collapsed_image.gif) left top no-repeat;
	}
	div.menuTree UL LI.expanded {
		background: url(<?php echo $file_path;?>images/expended_image.gif) left top no-repeat;
	}
	</style>
	<?php
	}
	?>


	<!-- removed the menu css from here -->

	<style type="text/css">	
	a { color: #101010; text-decoration: none }
	a:hover { color: #729FCF; }
	body { font-family:"Verdana","Lucida Sans Unicode","Lucida Sans",Sans-Serif; background: #FBFAF9; font-size:12px; color:#111;}
	h2 { border-color:#FFF; border-style:solid; border-width:0pt 0pt 1px; color:#555555; font-size:22px; font-weight:bold; padding:0px 0px 1px; }
	img {border:0;}
	</style>

	<!-- <script type="text/javascript" src="<?php echo $file_path;?>jquery/js/popup_js.php"></script>  -->
	<?php include("popup_js.php"); ?>

	

	<style type="text/css">
	#filterPopupContainer
	{
	    position:absolute;
	    left:0;
	    top:0;
	    display:none;
	    z-index: 20000;
	}
	
	.filterPopupPopup
	{
	}
	
	#filterPopupContent
	{
	    background-color: #FFF;
	    min-width: 175px;
	    min-height: 50px;
	}
	
	.SystemPopupPopup .SystemPopupImage
	{
	    margin: 5px;
	    margin-right: 15px;
	}
	
	.filterPopupPopup .corner 
	{
	    width: 19px;
	    height: 15px;
	}
	    
	.filterPopupPopup .topLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topLeft.png) no-repeat;
	}
	    
	.filterPopupPopup .bottomLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomLeft.png) no-repeat;
	}
	    
	.filterPopupPopup .left 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_left.png) repeat-y;
	}
	    
	.filterPopupPopup .right 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_right.png) repeat-y;
	}
	    
	.filterPopupPopup .topRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topRight.png) no-repeat;
	}
	    
	.filterPopupPopup .bottomRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomRight.png) no-repeat;
	}
	    
	.filterPopupPopup .top 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_top.png) repeat-x;
	}
	    
	.filterPopupPopup .bottom 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottom.png) repeat-x;
	    text-align: center;
	}
	</style>




	<style type="text/css">
	#SystemPopupContainer
	{
	    position:absolute;
	    left:0;
	    top:0;
	    display:none;
	    z-index: 20000;
	}
	
	.SystemPopupPopup
	{
	}
	
	#SystemPopupContent
	{
	    background-color: #FFF;
	    min-width: 175px;
	    min-height: 50px;
	}
	
	.SystemPopupPopup .SystemPopupImage
	{
	    margin: 5px;
	    margin-right: 15px;
	}
	
	.SystemPopupPopup .corner 
	{
	    width: 19px;
	    height: 15px;
	}
	    
	.SystemPopupPopup .topLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topLeft.png) no-repeat;
	}
	    
	.SystemPopupPopup .bottomLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomLeft.png) no-repeat;
	}
	    
	.SystemPopupPopup .left 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_left.png) repeat-y;
	}
	    
	.SystemPopupPopup .right 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_right.png) repeat-y;
	}
	    
	.SystemPopupPopup .topRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topRight.png) no-repeat;
	}
	    
	.SystemPopupPopup .bottomRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomRight.png) no-repeat;
	}
	    
	.SystemPopupPopup .top 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_top.png) repeat-x;
	}
	    
	.SystemPopupPopup .bottom 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottom.png) repeat-x;
	    text-align: center;
	}
	</style>


	<style type="text/css">
	#TagPopupContainer
	{
	    position:absolute;
	    left:0;
	    top:0;
	    display:none;
	    z-index: 20000;
	}
	
	.TagPopupPopup
	{
	}
	
	#TagPopupContent
	{
	    background-color: #FFF;
	    min-width: 175px;
	    min-height: 50px;
	}
	
	.TagPopupPopup .TagPopupImage
	{
	    margin: 5px;
	    margin-right: 15px;
	}
	
	.TagPopupPopup .corner 
	{
	    width: 19px;
	    height: 15px;
	}
	    
	.TagPopupPopup .topLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topLeft.png) no-repeat;
	}
	    
	.TagPopupPopup .bottomLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomLeft.png) no-repeat;
	}
	    
	.TagPopupPopup .left 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_left.png) repeat-y;
	}
	    
	.TagPopupPopup .right 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_right.png) repeat-y;
	}
	    
	.TagPopupPopup .topRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topRight.png) no-repeat;
	}
	    
	.TagPopupPopup .bottomRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomRight.png) no-repeat;
	}
	    

	.TagPopupPopup .top 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_top.png) repeat-x;
	}
	    
	.TagPopupPopup .bottom 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottom.png) repeat-x;
	    text-align: center;
	}
	</style>


	<style type="text/css">
	#ModifierPopupContainer
	{
	    position:absolute;
	    left:0;
	    top:0;
	    display:none;
	    z-index: 20000;
	}
	
	.ModifierPopupPopup
	{
	}
	
	#ModifierPopupContent
	{
	    background-color: #FFF;
	    min-width: 80px;
	    min-height: 50px;
	}
	
	.ModifierPopupPopup .ModifierPopupImage
	{
	    margin: 5px;
	    margin-right: 15px;
	}
	
	.ModifierPopupPopup .corner 
	{
	    width: 19px;
	    height: 15px;
	}
	    
	.ModifierPopupPopup .topLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topLeft.png) no-repeat;
	}
	    
	.ModifierPopupPopup .bottomLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomLeft.png) no-repeat;
	}
	    
	.ModifierPopupPopup .left 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_left.png) repeat-y;
	}
	    
	.ModifierPopupPopup .right 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_right.png) repeat-y;
	}
	    
	.ModifierPopupPopup .topRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topRight.png) no-repeat;
	}
	    
	.ModifierPopupPopup .bottomRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomRight.png) no-repeat;
	}
	    

	.ModifierPopupPopup .top 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_top.png) repeat-x;
	}
	    
	.ModifierPopupPopup .bottom 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottom.png) repeat-x;
	    text-align: center;
	}
	</style>


	<style type="text/css">
	#SearchPopupContainer
	{
	    position:absolute;
	    left:0;
	    top:0;
	    display:none;
	    z-index: 20000;
	}
	
	.SearchPopupPopup
	{
	}
	
	#SearchPopupContent
	{
	    background-color: #FFF;
	    min-width: 175px;
	    min-height: 50px;
	}
	
	.SearchPopupPopup .SearchPopupImage
	{
	    margin: 5px;
	    margin-right: 15px;
	}
	
	.SearchPopupPopup .corner 
	{
	    width: 19px;
	    height: 15px;
	}
	    
	.SearchPopupPopup .topLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topLeft.png) no-repeat;
	}
	    
	.SearchPopupPopup .bottomLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomLeft.png) no-repeat;
	}
	    
	.SearchPopupPopup .left 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_left.png) repeat-y;
	}
	    
	.SearchPopupPopup .right 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_right.png) repeat-y;
	}
	    
	.SearchPopupPopup .topRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topRight.png) no-repeat;
	}
	    
	.SearchPopupPopup .bottomRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomRight.png) no-repeat;
	}
	    
	.SearchPopupPopup .top 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_top.png) repeat-x;
	}
	    
	.SearchPopupPopup .bottom 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottom.png) repeat-x;
	    text-align: center;
	}
	</style>
	
	
	<style type="text/css">
	#ReportPopupContainer
	{
	    position:absolute;
	    left:0;
	    top:0;
	    display:none;
	    z-index: 20000;
	}
	
	.ReportPopupPopup
	{
	}
	
	#ReportPopupContent
	{
	    background-color: #FFF;
	    min-width: 175px;
	    min-height: 50px;
	}
	
	.ReportPopupPopup .ReportPopupImage
	{
	    margin: 5px;
	    margin-right: 15px;
	}
	
	.ReportPopupPopup .corner 
	{
	    width: 19px;
	    height: 15px;
	}
	    
	.ReportPopupPopup .topLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topLeft.png) no-repeat;
	}
	    
	.ReportPopupPopup .bottomLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomLeft.png) no-repeat;
	}
	    
	.ReportPopupPopup .left 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_left.png) repeat-y;
	}
	    
	.ReportPopupPopup .right 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_right.png) repeat-y;
	}
	    
	.ReportPopupPopup .topRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topRight.png) no-repeat;
	}
	    
	.ReportPopupPopup .bottomRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomRight.png) no-repeat;
	}
	    
	.ReportPopupPopup .top 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_top.png) repeat-x;
	}
	    
	.ReportPopupPopup .bottom 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottom.png) repeat-x;
	    text-align: center;
	}
	</style>

	<style type="text/css">
	#AssetPopupContainer
	{
	    position:absolute;
	    left:0;
	    top:0;
	    display:none;
	    z-index: 20000;
	}
	
	.AssetPopupPopup
	{
	}
	
	#AssetPopupContent
	{
	    background-color: #FFF;
	    min-width: 175px;
	    min-height: 50px;
	}
	
	.AssetPopupPopup .AssetPopupImage
	{
	    margin: 5px;
	    margin-right: 15px;
	}
	
	.AssetPopupPopup .corner 
	{
	    width: 19px;
	    height: 15px;
	}
	    
	.AssetPopupPopup .topLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topLeft.png) no-repeat;
	}
	    
	.AssetPopupPopup .bottomLeft 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomLeft.png) no-repeat;
	}
	    
	.AssetPopupPopup .left 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_left.png) repeat-y;
	}
	    
	.AssetPopupPopup .right 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_right.png) repeat-y;
	}
	    
	.AssetPopupPopup .topRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_topRight.png) no-repeat;
	}
	    
	.AssetPopupPopup .bottomRight 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottomRight.png) no-repeat;
	}
	    
	.AssetPopupPopup .top 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_top.png) repeat-x;
	}
	    
	.AssetPopupPopup .bottom 
	{
	    background: url(<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/balloon_bottom.png) repeat-x;
	    text-align: center;
	}
	</style>

<style type="text/css" media="print">
	#topsection {
		display:none;
	}
</style>

<?php if ($this->data['user_admin'] == 'y') { 
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
	echo "\t\thttp.open('get', '" . base_url() . "index.php/ajax/user_debug/'+user_debug_field);\n";
	#echo "http.onreadystatechange = handleResponseFields;";
	#echo "http.send(null);";
	echo "\t}\n";
	echo "</script>\n";
} ?>

</head>
<body>
<div id="wrapper">
	<div id="topsection" style="margin: 0 auto; padding: 10px 0;">
	<?php include("include_header.php"); ?>
	<?php include("include_menu.php"); ?>
	</div> <!-- end of topsection -->
	<div id="content_container" style="float: left; width: 100%">
	<?php 
	if (isset($query) and $include != 'v_add_user'){
		echo "\t<div>\n\t\t\t<div style=\"float:left; width:50%;\"><h2>" . $heading . "</h2></div>\n\t\t\t<div style=\"float:left; width:50%; text-align: right;\"><h2>" . count($query) . " " . __("results") . "</h2></div>\n\t\t</div>\n";
	} else {
		echo "<h2>" . $heading . "</h2>\n";
	}
	$this->load->view("theme-" . $user_theme . "/" . $include); 
	?>
	</div><!-- end of content_container -->
</div>
</body>
</html>
