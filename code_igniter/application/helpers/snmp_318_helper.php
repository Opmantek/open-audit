<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package Open-AudIT
 * @author Mark Unwin
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

if (!function_exists('get_oid_details')) {

	function get_oid_details($details){
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.1') { $details->model = 'backUPS'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.10') { $details->model = 'dcPower'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.10.1') { $details->model = 'dm3'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.10.2') { $details->model = 'dcmim2'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.11') { $details->model = 'automaticXferSwitch'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.12') { $details->model = 'netLock'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.13') { $details->model = 'symmetra3PhaseUPS'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.13.1') { $details->model = 'symmetra3PhaseUPS40kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.13.2') { $details->model = 'symmetra3PhaseUPS60kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.13.3') { $details->model = 'symmetra3PhaseUPS80kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.13.4') { $details->model = 'symmetra3PhaseUPS20kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.14') { $details->model = 'networkAir'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.14.1') { $details->model = 'airFMSeries'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.14.2') { $details->model = 'rackAirRemovalUnit'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.14.3') { $details->model = 'airPASeries'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.14.4') { $details->model = 'airIRSC100Series'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.14.5') { $details->model = 'airIRRC100Series'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.14.6') { $details->model = 'airIRRP100Series'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.14.7') { $details->model = 'airIRRP500Series'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.15') { $details->model = 'infraXurePDU'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.16') { $details->model = 'ais5000UPS'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.16.1') { $details->model = 'ais5000UPS10kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.16.2') { $details->model = 'ais5000UPS20kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.16.3') { $details->model = 'ais5000UPS30kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.16.4') { $details->model = 'ais5000UPS40kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.16.5') { $details->model = 'ais5000UPS60kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.16.6') { $details->model = 'ais5000UPS80kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.16.7') { $details->model = 'ais5000UPS100kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.17') { $details->model = 'smartUPS3Phase'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.17.1') { $details->model = 'smartUPS3Phase10kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.17.2') { $details->model = 'smartUPS3Phase15kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.17.3') { $details->model = 'smartUPS3Phase20kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.17.4') { $details->model = 'smartUPS3Phase30kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.17.5') { $details->model = 'smartUPS3Phase40kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.18') { $details->model = 'battManager'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.19') { $details->model = 'infraXureATS'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2') { $details->model = 'smartUPS'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.1') { $details->model = 'smartUPS250'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.10') { $details->model = 'smartUPS1400'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.11') { $details->model = 'smartUPS2200'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.12') { $details->model = 'smartUPS3000'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.13') { $details->model = 'smartUPS5000'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.14') { $details->model = 'smartUPS7500'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.15') { $details->model = 'smartUPS10000'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.16') { $details->model = 'smartUPS1500'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.17') { $details->model = 'smartUPS3000DSP'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.18') { $details->model = 'smartUPS5000DSP'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.19') { $details->model = 'smartUPS8000'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.2') { $details->model = 'smartUPS400'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.3') { $details->model = 'smartUPS600'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.4') { $details->model = 'smartUPS900'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.5') { $details->model = 'smartUPS1250'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.6') { $details->model = 'smartUPS2000'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.7') { $details->model = 'smartUPS450'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.8') { $details->model = 'smartUPS700'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.2.9') { $details->model = 'smartUPS1000'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.20') { $details->model = 'conPortServ'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.20.1') { $details->model = 'conPortServAP930x'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.21') { $details->model = 'gutor'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.21.1') { $details->model = 'gutorPEW'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.21.2') { $details->model = 'gutorPDW'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.21.3') { $details->model = 'gutorWEW'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.21.4') { $details->model = 'gutorWDW'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.21.5') { $details->model = 'gutorSDC'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.22') { $details->model = 'accControl'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.22.1') { $details->model = 'accPX'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.27') { $details->model = 'ap9631'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.3') { $details->model = 'matrixUPS'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.3.1') { $details->model = 'matrixUPS3000'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.3.2') { $details->model = 'matrixUPS5000'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.4') { $details->model = 'masterSwitch'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.4.5') { $details->model = 'master switch pdu'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.5') { $details->model = 'symmetraUPS'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.5.1') { $details->model = 'symmetraUPS4kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.5.2') { $details->model = 'symmetraUPS8kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.5.3') { $details->model = 'symmetraUPS12kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.5.4') { $details->model = 'symmetraUPS16kVA'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.6') { $details->model = 'dp100E'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.7') { $details->model = 'dp300E'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.8') { $details->model = 'monitors'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.8.1') { $details->model = 'environmental'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.8.2') { $details->model = 'environmentalMgtSystem'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.8.3') { $details->model = 'emu2'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.8.4') { $details->model = 'mem'; $details->type = 'ups'; }
		if ($details->snmp_oid == '1.3.6.1.4.1.318.1.3.9') { $details->model = 'redundantSwitch'; $details->type = 'ups'; }

		# serial
		if ($details->snmp_version == '2') {
			$details->serial = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.318.1.1.1.1.2.3.0"));
		} else {
			$details->serial = str_replace("STRING: ", "", @snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.318.1.1.1.1.2.3.0"));
		}
		if (!isset($details->serial) or $details->serial == '' or $details->serial == 'No Such Object available on this agent at this OID') {
			if ($details->snmp_version == '2') {
				$details->serial = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.318.1.1.4.1.5"));
			} else {
				$details->serial = str_replace("STRING: ", "", @snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.318.1.1.4.1.5"));
			}
		}

		# model
		if ($details->snmp_version == '2') {
			$i = str_replace("STRING: ", "", @snmp2_get($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.318.1.1.1.1.1.1.0"));
		} else {
			$i = str_replace("STRING: ", "", @snmpget($details->man_ip_address, $details->snmp_community, "1.3.6.1.4.1.318.1.1.1.1.1.1.0"));
		}
		if ($i > '') {
			$details->model = $i;
			if (substr($details->model, 0, 1) == "\"") { $details->model = substr($details->model, 1, strlen($details->model)); }
			if (substr($details->model, -1, 1) == "\"") { $details->model = substr($details->model, 0, strlen($details->model)-1); }
		}


	}
}