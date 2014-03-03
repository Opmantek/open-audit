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


function clean_url($url) {
	$url = str_replace("&amp;", "&", $url);
	$url = str_replace("&", "&amp;", $url);
	$url = str_replace("\\", '/', $url);
	return $url;	
}

function print_something($string)
{
	if ((mb_strlen($string) == 0) OR ($string == '0000-00-00') ) {
		return '-';
	} else {
		return $string;
	}
}

function display_custom_field($field_placement, $additional_fields, $edit) {
	foreach($additional_fields as $field)
	{
		if ($field->field_placement == $field_placement)
		{			
			$data_id = "";
			$data_value = "";
			
			$data_id = "field_" . $field->field_type;
			$data_id = $field->$data_id;
			
			$data_value = "field_" . $field->field_type;
			$data_value = $field->$data_value;
			
			$width = "120";
			if ($field_placement == 'view_summary_windows')
			{
				$width = '160';
			}
			# TODO: fix this string output hack with real html entities
			echo "<div style=\"float: left; width: 90%; \">\n";
			echo "<label for=\"custom_" . $field->field_type . "_" . $field->field_details_id . "_" . $field->field_id . "\" >" . __($field->field_name) . ": </label>";
			echo   "<span id=\"custom_" . $field->field_type . "_" . $field->field_details_id . "_" . $field->field_id . "\" " . $edit . ">" . print_something($data_value) . "</span><br />&nbsp;\n";
			echo "</div>\n";
		}
	}
}

function strTime($s) {
	$str = "";
	$d = intval($s/86400);
	$s -= $d*86400;
	$h = intval($s/3600);
	$s -= $h*3600;
	$m = intval($s/60);
	$s -= $m*60;
	if ($d) $str = $d . 'd ';
	if ($h) $str .= $h . 'h ';
	if ($m) $str .= $m . 'm ';
	if ($s) $str .= $s . 's';
	return $str;
}