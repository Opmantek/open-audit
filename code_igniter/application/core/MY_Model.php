<?php
#
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
 * @version 1.3.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
 
 
class MY_Model extends CI_Model {

	function MY_Model()
	{
		parent::__construct();
	}

	function ip_address_to_db($ip) {
		if (($ip <> "") AND (!(is_null($ip))) AND (substr_count($ip, '.') == 3)) {
			$myip = explode(".",$ip);
			$myip[0] = mb_substr("000" . $myip[0], -3);
			$myip[1] = mb_substr("000" . $myip[1], -3);
			$myip[2] = mb_substr("000" . $myip[2], -3);
			$myip[3] = mb_substr("000" . $myip[3], -3);
			$ip_post = $myip[0] . "." . $myip[1] . "." . $myip[2] . "." . $myip[3];
		} else {
			$ip_post = "000.000.000.000";
		}
		return $ip_post;
	}

	function ip_address_from_db($ip)
	{
		$ip_pre = $ip;
		if (($ip <> "") AND (!(is_null($ip)))){
			$myip = explode(".",$ip);
			$myip[0] = ltrim($myip[0], "0");
			if ($myip[0] == "") { $myip[0] = "0"; }
			if(isset($myip[1])) $myip[1] = ltrim($myip[1], "0");
			if (!isset($myip[1]) OR $myip[1] == "") { $myip[1] = "0"; }
			if(isset($myip[2])) $myip[2] = ltrim($myip[2], "0");
			if (!isset($myip[2]) OR $myip[2] == "") { $myip[2] = "0"; }
			if(isset($myip[3])) $myip[3] = ltrim($myip[3], "0");
			if (!isset($myip[3]) OR $myip[3] == "") { $myip[3] = "0"; }
			$ip = $myip[0] . "." . $myip[1] . "." . $myip[2] . "." . $myip[3];
		} else {
			$ip = " Not-Networked";
		}
		return $ip;
	}

	function clean_sql($sql) {
		#$sql = str_replace("\t", " ", $sql);
		#$sql = str_replace("\n", " ", $sql);
		#$sql = preg_replace('!\s+!', ' ', $sql);
		$sql = str_replace(array("\r", "\r\n", "\n", "\t"), ' ', $sql);
		$sql = preg_replace('!\s+!', ' ', $sql);	
		return $sql;
	}
	
}
?>
