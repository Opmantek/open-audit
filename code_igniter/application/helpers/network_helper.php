<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

if ( ! function_exists('network_details'))
{
	function network_details($ip)
	{
	$my_net_info=rtrim($ip);
	$details = new stdClass();
	
	if (! preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}(( ([0-9]{1,3}\.){3}[0-9]{1,3})|(\/[0-9]{1,2}))$/',$my_net_info))
	{
		$details->error = "Error - invalid input";
		return($details);
	}
	
	if (preg_match('/\//',$my_net_info))
	{
		//if cidr type mask
		$dq_host = strtok("$my_net_info", "/");
		$cdr_nmask = strtok("/");
		if (!($cdr_nmask >= 0 && $cdr_nmask <= 32))
		{
			$details->error = "Invalid CIDR value. Try an integer 0 - 32.";
			return($details);
		}
		$bin_nmask=cdrtobin($cdr_nmask);
		$bin_wmask=binnmtowm($bin_nmask);
	} else { 
		//Dotted quad mask?
		$dqs=explode(" ", $my_net_info);
		$dq_host=$dqs[0];
		$bin_nmask=dqtobin($dqs[1]);
		$bin_wmask=binnmtowm($bin_nmask);
		if (preg_match('/0/',rtrim($bin_nmask, "0"))) 
		{  
			//Wildcard mask then? hmm?
			$bin_wmask=dqtobin($dqs[1]);
			$bin_nmask=binwmtonm($bin_wmask);
			if (preg_match('/0/',rtrim($bin_nmask, "0")))
			{ 
				//If it's not wcard, whussup?
				$details->error = "Invalid Netmask.";
				return($details);
			}
		}
		$cdr_nmask=bintocdr($bin_nmask);
	}
	//Check for valid $dq_host
	if(! preg_match('/^0./',$dq_host)){
		foreach( explode(".",$dq_host) as $octet ){
			if($octet > 255){ 
				$details->error = "Invalid IP Address";
				return($details);
			}
		}
	}

	$bin_host=dqtobin($dq_host);
	$bin_bcast=(str_pad(mb_substr($bin_host,0,$cdr_nmask),32,1));
	$bin_net=(str_pad(mb_substr($bin_host,0,$cdr_nmask),32,0));
	$bin_first=(str_pad(mb_substr($bin_net,0,31),32,1));
	$bin_last=(str_pad(mb_substr($bin_bcast,0,31),32,0));
	$host_total=(bindec(str_pad("",(32-$cdr_nmask),1)) - 1);
	if ($host_total <= 0)
	{  
		//Takes care of 31 and 32 bit masks.
		$bin_first="N/A" ; $bin_last="N/A" ; $host_total="N/A";
		if ($bin_net === $bin_bcast) $bin_bcast="N/A";
	}

	//Determine Class
	if (preg_match('/^0/',$bin_net)){
		$class="A";
		$dotbin_net= "0" . mb_substr(dotbin($bin_net,$cdr_nmask),1) ;
	}elseif (preg_match('/^10/',$bin_net)){
		$class="B";
		$dotbin_net= "10" . mb_substr(dotbin($bin_net,$cdr_nmask),2) ;
	}elseif (preg_match('/^110/',$bin_net)){
		$class="C";
		$dotbin_net= "110" . mb_substr(dotbin($bin_net,$cdr_nmask),3) ;
	}elseif (preg_match('/^1110/',$bin_net)){
		$class="D";
		$dotbin_net= "1110" . mb_substr(dotbin($bin_net,$cdr_nmask),4) ;
		$special="Class D = Multicast Address Space.";
	}else{
		$class="E";
		$dotbin_net= "1111" . mb_substr(dotbin($bin_net,$cdr_nmask),4) ;
		$special="Class E = Experimental Address Space.";
	}

	if (preg_match('/^(00001010)|(101011000001)|(1100000010101000)/',$bin_net)){
		$special='<a href="http://www.ietf.org/rfc/rfc1918.txt">( RFC-1918 Private Internet Address. )</a>';
	}

	// Print Results
	#tr("Address: ".$dq_host."<br />");
	#tr("Netmask: ".bintodq($bin_nmask)." = $cdr_nmask<br />");
	#tr("Wildcard: " .bintodq($bin_wmask)."<br />");
	#tr("Network: "  .bintodq($bin_net)." (Class $class)<br/>");
	#tr("Broadcast: ".bintodq($bin_bcast)."<br />");
	#tr("HostMin: "  .bintodq($bin_first)."<br />");
	#tr("HostMax: "  .bintodq($bin_last)."<br />");
	#tr("Hosts/Net: ".$host_total." $special"."<br />");
	
	$details = new stdClass();
	$details->error = '';
	$details->address = $dq_host;
	$details->netmask = bintodq($bin_nmask);
	$details->network_class = $class;
	$details->wildcard = bintodq($bin_wmask);
	$details->network = bintodq($bin_net);
	$details->broadcast = bintodq($bin_bcast);
	$details->host_min = bintodq($bin_first);
	$details->host_max = bintodq($bin_last);
	$details->hosts_total = $host_total;
	$details->network_slash = $cdr_nmask;
	return($details);
	}
}

function binnmtowm($binin){
	$binin=rtrim($binin, "0");
	if (!preg_match('/0/',$binin) ){
		return str_pad(str_replace("1","0",$binin), 32, "1");
	} else return "1010101010101010101010101010101010101010";
}

function bintocdr ($binin){
	return mb_strlen(rtrim($binin,"0"));
}

function bintodq ($binin) {
	if ($binin=="N/A") return $binin;
	$binin=explode(".", chunk_split($binin,8,"."));
	for ($i=0; $i<4 ; $i++) {
		$dq[$i]=bindec($binin[$i]);
	}
        return implode(".",$dq) ;
}

function bintoint ($binin){
        return bindec($binin);
}

function binwmtonm($binin){
	$binin=rtrim($binin, "1");
	if (!preg_match('/1/',$binin)){
		return str_pad(str_replace("0","1",$binin), 32, "0");
	} else return "1010101010101010101010101010101010101010";
}

function cdrtobin ($cdrin){
	return str_pad(str_pad("", $cdrin, "1"), 32, "0");
}

function dotbin($binin,$cdr_nmask){
	// splits 32 bit bin into dotted bin octets
	if ($binin=="N/A") return $binin;
	$oct=rtrim(chunk_split($binin,8,"."),".");
	if ($cdr_nmask > 0){
		$offset=sprintf("%u",$cdr_nmask/8) + $cdr_nmask ;
		return mb_substr($oct,0,$offset ) . "&nbsp;&nbsp;&nbsp;" . mb_substr($oct,$offset) ;
	} else {
	return $oct;
	}
}

function dqtobin($dqin) {
        $dq = explode(".",$dqin);
        for ($i=0; $i<4 ; $i++) {
           $bin[$i]=str_pad(decbin($dq[$i]), 8, "0", STR_PAD_LEFT);
        }
        return implode("",$bin);
}

function inttobin ($intin) {
        return str_pad(decbin($intin), 32, "0", STR_PAD_LEFT);
}

function ip_address_from_db($ip) {
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

/* End of file network_helper.php */
/* Location: ./system/application/helpers/network_helper.php */
