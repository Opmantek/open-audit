<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
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
		$sql = str_replace("\t", " ", $sql);
		$sql = str_replace("\n", " ", $sql);
		$sql = preg_replace('!\s+!', ' ', $sql);
		return $sql;
	}
	
}
?>
