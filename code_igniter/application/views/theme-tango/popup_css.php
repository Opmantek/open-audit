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
?>
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
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topLeft.png) no-repeat;
	}

	.filterPopupPopup .bottomLeft
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomLeft.png) no-repeat;
	}

	.filterPopupPopup .left
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_left.png) repeat-y;
	}

	.filterPopupPopup .right
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_right.png) repeat-y;
	}

	.filterPopupPopup .topRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topRight.png) no-repeat;
	}

	.filterPopupPopup .bottomRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomRight.png) no-repeat;
	}

	.filterPopupPopup .top
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_top.png) repeat-x;
	}

	.filterPopupPopup .bottom
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottom.png) repeat-x;
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
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topLeft.png) no-repeat;
	}

	.SystemPopupPopup .bottomLeft
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomLeft.png) no-repeat;
	}

	.SystemPopupPopup .left
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_left.png) repeat-y;
	}

	.SystemPopupPopup .right
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_right.png) repeat-y;
	}

	.SystemPopupPopup .topRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topRight.png) no-repeat;
	}

	.SystemPopupPopup .bottomRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomRight.png) no-repeat;
	}

	.SystemPopupPopup .top
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_top.png) repeat-x;
	}

	.SystemPopupPopup .bottom
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottom.png) repeat-x;
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
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topLeft.png) no-repeat;
	}

	.TagPopupPopup .bottomLeft
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomLeft.png) no-repeat;
	}

	.TagPopupPopup .left
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_left.png) repeat-y;
	}

	.TagPopupPopup .right
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_right.png) repeat-y;
	}

	.TagPopupPopup .topRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topRight.png) no-repeat;
	}

	.TagPopupPopup .bottomRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomRight.png) no-repeat;
	}


	.TagPopupPopup .top
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_top.png) repeat-x;
	}

	.TagPopupPopup .bottom
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottom.png) repeat-x;
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
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topLeft.png) no-repeat;
	}

	.ModifierPopupPopup .bottomLeft
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomLeft.png) no-repeat;
	}

	.ModifierPopupPopup .left
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_left.png) repeat-y;
	}

	.ModifierPopupPopup .right
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_right.png) repeat-y;
	}

	.ModifierPopupPopup .topRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topRight.png) no-repeat;
	}

	.ModifierPopupPopup .bottomRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomRight.png) no-repeat;
	}


	.ModifierPopupPopup .top
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_top.png) repeat-x;
	}

	.ModifierPopupPopup .bottom
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottom.png) repeat-x;
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
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topLeft.png) no-repeat;
	}

	.SearchPopupPopup .bottomLeft
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomLeft.png) no-repeat;
	}

	.SearchPopupPopup .left
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_left.png) repeat-y;
	}

	.SearchPopupPopup .right
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_right.png) repeat-y;
	}

	.SearchPopupPopup .topRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topRight.png) no-repeat;
	}

	.SearchPopupPopup .bottomRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomRight.png) no-repeat;
	}

	.SearchPopupPopup .top
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_top.png) repeat-x;
	}

	.SearchPopupPopup .bottom
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottom.png) repeat-x;
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
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topLeft.png) no-repeat;
	}

	.ReportPopupPopup .bottomLeft
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomLeft.png) no-repeat;
	}

	.ReportPopupPopup .left
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_left.png) repeat-y;
	}

	.ReportPopupPopup .right
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_right.png) repeat-y;
	}

	.ReportPopupPopup .topRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topRight.png) no-repeat;
	}

	.ReportPopupPopup .bottomRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomRight.png) no-repeat;
	}

	.ReportPopupPopup .top
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_top.png) repeat-x;
	}

	.ReportPopupPopup .bottom
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottom.png) repeat-x;
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
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topLeft.png) no-repeat;
	}

	.AssetPopupPopup .bottomLeft
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomLeft.png) no-repeat;
	}

	.AssetPopupPopup .left
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_left.png) repeat-y;
	}

	.AssetPopupPopup .right
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_right.png) repeat-y;
	}

	.AssetPopupPopup .topRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_topRight.png) no-repeat;
	}

	.AssetPopupPopup .bottomRight
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottomRight.png) no-repeat;
	}

	.AssetPopupPopup .top
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_top.png) repeat-x;
	}

	.AssetPopupPopup .bottom
	{
	    background: url(<?php echo $oa_theme_images; ?>/balloon_bottom.png) repeat-x;
	    text-align: center;
	}
	</style>
