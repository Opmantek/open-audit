<?php
if (!defined('BASEPATH')) {
     exit('No direct script access allowed');
}
#
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

/*
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.1.1
* @link      http://www.open-audit.org
 */

if (! function_exists('mac_class')) {
    function mac_class($model = '')
    {
    	$class = '';
    	if (stripos($model, 'iMac') !== false) { $class = 'desktop'; }
    	if (stripos($model, 'iMacPro') !== false) { $class = 'desktop'; }
    	if (stripos($model, 'MacBook') !== false) { $class = 'laptop'; }
    	if (stripos($model, 'MacBookAir') !== false) { $class = 'laptop'; }
    	if (stripos($model, 'MacBookPro') !== false) { $class = 'laptop'; }
    	if (stripos($model, 'Macmini') !== false) { $class = 'desktop'; }
    	if (stripos($model, 'MacPro') !== false) { $class = 'desktop'; }
    	if (stripos($model, 'PowerBook') !== false) { $class = 'laptop'; }
    	if (stripos($model, 'PowerMac') !== false) { $class = 'desktop'; }
    	if (stripos($model, 'RackMac') !== false) { $class = 'server'; }
    	if (stripos($model, 'Xserve') !== false) { $class = 'server'; }
    	return $class;
    }
}

if (! function_exists('mac_form_factor')) {
    function mac_form_factor($model = '')
    {
    	$form_factor = '';
    	if (stripos($model, 'iMac') !== false) { $form_factor = 'desktop'; }
    	if (stripos($model, 'iMacPro') !== false) { $form_factor = 'desktop'; }
    	if (stripos($model, 'MacBook') !== false) { $form_factor = 'laptop'; }
    	if (stripos($model, 'MacBookAir') !== false) { $form_factor = 'laptop'; }
    	if (stripos($model, 'MacBookPro') !== false) { $form_factor = 'laptop'; }
    	if (stripos($model, 'Macmini') !== false) { $form_factor = 'desktop'; }
    	if (stripos($model, 'MacPro') !== false) { $form_factor = 'desktop'; }
    	if (stripos($model, 'PowerBook') !== false) { $form_factor = 'laptop'; }
    	if (stripos($model, 'PowerMac') !== false) { $form_factor = 'desktop'; }
    	if (stripos($model, 'RackMac') !== false) { $form_factor = 'rack'; }
    	if (stripos($model, 'Xserve') !== false) { $form_factor = 'rack'; }
    	return $form_factor;
    }
}

       

if (! function_exists('mac_model')) {
    function mac_model($serial = '')
    {
    	if (strlen($serial) == 11) {
    		$serial = substr($serial, -3);
    	}
    	if (strlen($serial) == 12) {
    		$serial = substr($serial, -4);
    	}
    	$description = '';
		if ($serial == '000') { $description = 'Power Mac G5'; }
		if ($serial == '00W') { $description = 'Xserve (Late 2006)'; }
		if ($serial == '01P') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '01V') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '01X') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '01Z') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '027') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '028') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '02D') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '02V') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == '02X') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == '02Z') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '034') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '08S') { $description = 'Mac Pro'; }
		if ($serial == '09G') { $description = 'Mac Pro'; }
		if ($serial == '09H') { $description = 'Mac Pro'; }
		if ($serial == '09Q') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == '09R') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '09S') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '0GN') { $description = 'Mac Pro'; }
		if ($serial == '0GP') { $description = 'Mac Pro'; }
		if ($serial == '0GV') { $description = 'Mac Pro'; }
		if ($serial == '0HA') { $description = 'Mac Pro'; }
		if ($serial == '0HB') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0HC') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0HW') { $description = 'AirPort Express 802.11n (1st Generation)'; }
		if ($serial == '0HX') { $description = 'AirPort Express 802.11n (1st Generation)'; }
		if ($serial == '0HY') { $description = 'AirPort Express 802.11n (1st Generation)'; }
		if ($serial == '0HZ') { $description = 'AirPort Express 802.11n (1st Generation)'; }
		if ($serial == '0JW') { $description = 'iPod touch'; }
		if ($serial == '0K0') { $description = 'LED Cinema Display (24-inch, Late 2008)'; }
		if ($serial == '0KH') { $description = 'iPhone (original)'; }
		if ($serial == '0KM') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '0KN') { $description = 'Mac OS X 10.5'; }
		if ($serial == '0KT') { $description = 'Mac Pro'; }
		if ($serial == '0KU') { $description = 'Mac Pro'; }
		if ($serial == '0KV') { $description = 'Mac Pro'; }
		if ($serial == '0KW') { $description = 'Mac Pro'; }
		if ($serial == '0KX') { $description = 'Mac Pro'; }
		if ($serial == '0KY') { $description = 'Mac Pro'; }
		if ($serial == '0KZ') { $description = 'Mac Pro'; }
		if ($serial == '0L0') { $description = 'Mac Pro'; }
		if ($serial == '0L1') { $description = 'Mac Pro'; }
		if ($serial == '0L2') { $description = 'Mac Pro'; }
		if ($serial == '0L3') { $description = 'Mac Pro'; }
		if ($serial == '0L4') { $description = 'Mac Pro'; }
		if ($serial == '0L5') { $description = 'Mac Pro'; }
		if ($serial == '0L6') { $description = 'Mac Pro'; }
		if ($serial == '0L7') { $description = 'Mac Pro'; }
		if ($serial == '0L8') { $description = 'Mac Pro'; }
		if ($serial == '0L9') { $description = 'Mac Pro'; }
		if ($serial == '0LA') { $description = 'Mac Pro'; }
		if ($serial == '0LB') { $description = 'Mac Pro'; }
		if ($serial == '0LC') { $description = 'Mac Pro'; }
		if ($serial == '0LD') { $description = 'Mac Pro'; }
		if ($serial == '0LE') { $description = 'Mac Pro'; }
		if ($serial == '0LH') { $description = 'Mac Pro'; }
		if ($serial == '0LL') { $description = 'Mac Pro'; }
		if ($serial == '0LM') { $description = 'Mac Pro'; }
		if ($serial == '0LN') { $description = 'Mac Pro'; }
		if ($serial == '0LP') { $description = 'Mac Pro'; }
		if ($serial == '0LQ') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == '0LR') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '0LS') { $description = 'Mac Pro'; }
		if ($serial == '0LT') { $description = 'Mac Pro'; }
		if ($serial == '0LU') { $description = 'Mac Pro'; }
		if ($serial == '0LZ') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == '0M0') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == '0N2') { $description = 'Mac Pro'; }
		if ($serial == '0N4') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '0ND') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '0NE') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0NF') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0NG') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0NH') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0NM') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '0P0') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '0P1') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '0P2') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '0P4') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '0P5') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '0P6') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '0PA') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == '0PB') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0PC') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0PD') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '0PG') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0PL') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == '0PM') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == '0PN') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == '0PP') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == '0PQ') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == '0PR') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == '0PT') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == '0PU') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == '0PX') { $description = 'Mac Pro'; }
		if ($serial == '0PY') { $description = 'Mac Pro'; }
		if ($serial == '0PZ') { $description = 'Mac Pro'; }
		if ($serial == '0Q0') { $description = 'Mac Pro'; }
		if ($serial == '0S0') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0S3') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == '0S6') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == '0S7') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0S8') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0S9') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0TF') { $description = 'iMac (20-inch, Early 2009)'; }
		if ($serial == '0TG') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '0TH') { $description = 'iMac (20-inch, Early 2009)'; }
		if ($serial == '0TJ') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '0TL') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '0TM') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '0TP') { $description = 'Apple Remote Desktop 3.X'; }
		if ($serial == '0TQ') { $description = 'Apple Remote Desktop 3.X'; }
		if ($serial == '0TW') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0TX') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0TY') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0TZ') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0U1') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == '0U4') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0VG') { $description = 'Mac Pro'; }
		if ($serial == '0WR') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0Z3') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '0Z4') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == '10J') { $description = 'Xserve (Early 2009)'; }
		if ($serial == '10S') { $description = 'Xserve (Early 2009)'; }
		if ($serial == '12E') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '12G') { $description = 'MacBook Air (Original)'; }
		if ($serial == '12K') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '13F') { $description = 'iPod nano (3rd generation)'; }
		if ($serial == '13Q') { $description = 'MacBook Air (Original)'; }
		if ($serial == '141') { $description = 'MacBook Air (Original)'; }
		if ($serial == '14J') { $description = 'MacBook Air (Original)'; }
		if ($serial == '14L') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '14N') { $description = 'iPod touch'; }
		if ($serial == '14P') { $description = 'iPod touch'; }
		if ($serial == '16U') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '18X') { $description = 'MacBook Air (Original)'; }
		if ($serial == '19X') { $description = 'Mac mini (Early 2009)'; }
		if ($serial == '19Y') { $description = 'Mac mini (Early 2009)'; }
		if ($serial == '1AE') { $description = 'MacBook Air (Original)'; }
		if ($serial == '1AJ') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '1AQ') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '1AX') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '1B0') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '1B5') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '1BJ') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '1BU') { $description = 'Mac mini (Early 2009)'; }
		if ($serial == '1BV') { $description = 'Mac mini (Early 2009)'; }
		if ($serial == '1BY') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '1CW') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '1CX') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '1CY') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == '1CZ') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == '1DR') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '1ED') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '1EK') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '1EM') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '1EN') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '1ER') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '1G0') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '1GA') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '1GK') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '1GN') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '1GP') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '1H4') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '1JZ') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '1K0') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '1K2') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '1K8') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '1K9') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '1KA') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '1L1') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '1LS') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '1LW') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '1LX') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '1LY') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '1M3') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '1MF') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '1MG') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '1MK') { $description = 'Mac Pro'; }
		if ($serial == '1NU') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == '1NV') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == '1NW') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == '1P1') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '1PX') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '1Q2') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '1Q3') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '1Q7') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '1QA') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '1QB') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '1QE') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '1R4') { $description = 'iPhone 3G'; }
		if ($serial == '1SC') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == '1SG') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '1SH') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '1XR') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '1XW') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '1Z9') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '1ZA') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '1ZH') { $description = 'iPod shuffle (2nd generation Late 2007)'; }
		if ($serial == '1ZK') { $description = 'iPod shuffle (2nd generation Late 2007)'; }
		if ($serial == '1ZM') { $description = 'iPod shuffle (2nd generation Late 2007)'; }
		if ($serial == '1ZP') { $description = 'iPod shuffle (2nd generation Late 2007)'; }
		if ($serial == '1ZR') { $description = 'iPod shuffle (2nd generation Late 2007)'; }
		if ($serial == '1ZY') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '1ZZ') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '200') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '201') { $description = 'iPod touch (2nd generation)'; }
		if ($serial == '203') { $description = 'iPod touch (2nd generation)'; }
		if ($serial == '208') { $description = 'iPod touch (2nd generation)'; }
		if ($serial == '20A') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '20G') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '20H') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '22D') { $description = 'MacBook Air (Late 2008)'; }
		if ($serial == '22E') { $description = 'MacBook Air (Late 2008)'; }
		if ($serial == '24B') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '250') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '259') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '25N') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '27H') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '27J') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '27K') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '27N') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '27P') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '289') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == '28A') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '28B') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == '28C') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '28D') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '28E') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '2AZ') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '2B0') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '2BS') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '2C5') { $description = 'iPod classic (120GB)'; }
		if ($serial == '2C7') { $description = 'iPod classic (120GB)'; }
		if ($serial == '2CB') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == '2CE') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '2CF') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '2DT') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '2DW') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '2DX') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '2DY') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '2DZ') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '2E4') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '2ED') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '2EE') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '2FB') { $description = 'AirPort Extreme 802.11n (2nd Generation)'; }
		if ($serial == '2JW') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == '2MB') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '2ME') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '2MF') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '2NX') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '2PK') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '2PN') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == '2PR') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == '2PT') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '2QP') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '2QT') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '2QU') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == '2QV') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == '2QW') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == '2RR') { $description = 'Mac OS X Server 10.5'; }
		if ($serial == '2RS') { $description = 'Mac OS X Server 10.5'; }
		if ($serial == '2RT') { $description = 'Mac OS X Server 10.5'; }
		if ($serial == '2U6') { $description = 'AirPort Express 802.11n (1st Generation)'; }
		if ($serial == '2U7') { $description = 'AirPort Express 802.11n (1st Generation)'; }
		if ($serial == '2UF') { $description = 'AirPort Express 802.11n (1st Generation)'; }
		if ($serial == '2UG') { $description = 'AirPort Express 802.11n (1st Generation)'; }
		if ($serial == '2UH') { $description = 'AirPort Express 802.11n (1st Generation)'; }
		if ($serial == '2UJ') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '2UK') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '2UL') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '2UM') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '2UN') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '2UP') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '2UR') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '2US') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '2UT') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '2UU') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '306') { $description = 'Mac mini (Late 2009)'; }
		if ($serial == '307') { $description = 'Mac mini (Late 2009)'; }
		if ($serial == '31E') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '31F') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '31G') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '31S') { $description = 'AirPort Extreme 802.11n (3rd Generation)'; }
		if ($serial == '31T') { $description = 'AirPort Extreme 802.11n (3rd Generation)'; }
		if ($serial == '31U') { $description = 'AirPort Extreme 802.11n (3rd Generation)'; }
		if ($serial == '31V') { $description = 'AirPort Extreme 802.11n (3rd Generation)'; }
		if ($serial == '31W') { $description = 'AirPort Extreme 802.11n (3rd Generation)'; }
		if ($serial == '329') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '32A') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '32D') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == '32E') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == '32F') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == '32G') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == '32H') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == '32K') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == '32L') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == '32M') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == '32N') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == '32P') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == '33B') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '35H') { $description = 'AppleVision 1710AV Display'; }
		if ($serial == '35J') { $description = 'AppleVision 1710 Display'; }
		if ($serial == '36X') { $description = 'Final Cut Studio (2009)'; }
		if ($serial == '373') { $description = 'Final Cut Studio (2009)'; }
		if ($serial == '37A') { $description = 'Final Cut Studio (2009)'; }
		if ($serial == '37G') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '37H') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '37K') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '37L') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '37P') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '37Q') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '37S') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '385') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '39S') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '3DC') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '3DD') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '3DE') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '3DF') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '3F9') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '3FF') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == '3FG') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == '3FH') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '3FK') { $description = 'iPod shuffle (2nd generation Late 2008)'; }
		if ($serial == '3FL') { $description = 'iPod shuffle (2nd generation Late 2008)'; }
		if ($serial == '3FM') { $description = 'iPod shuffle (2nd generation Late 2008)'; }
		if ($serial == '3GM') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '3GN') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '3GS') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '3LP') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == '3LY') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '3M0') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == '3N9') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '3NA') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '3ND') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '3NE') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '3NF') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '3NN') { $description = 'AirPort Express 802.11n (1st Generation)'; }
		if ($serial == '3NP') { $description = 'iPhone 3GS'; }
		if ($serial == '3NQ') { $description = 'iPhone 3GS'; }
		if ($serial == '3NR') { $description = 'iPhone 3GS'; }
		if ($serial == '3NS') { $description = 'iPhone 3GS'; }
		if ($serial == '3NX') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '3P0') { $description = 'iLife \'05'; }
		if ($serial == '3PA') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == '3PB') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == '3QS') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '3QT') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '3QU') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '3QW') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '3QX') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '3QY') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '3QZ') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '3R0') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '3R8') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '3R9') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '3SZ') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == '3VY') { $description = 'MacBook (13-inch, Late 2008)'; }
		if ($serial == '3W6') { $description = 'iPod shuffle (2nd generation Late 2008)'; }
		if ($serial == '3X6') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '41C') { $description = 'Logic Express 9'; }
		if ($serial == '41E') { $description = 'Logic Express 9'; }
		if ($serial == '41F') { $description = 'Logic Express 9'; }
		if ($serial == '41H') { $description = 'Logic Studio (2009)'; }
		if ($serial == '41K') { $description = 'Logic Studio (2009)'; }
		if ($serial == '41L') { $description = 'Logic Studio (2009)'; }
		if ($serial == '41M') { $description = 'Logic Studio (2009)'; }
		if ($serial == '436') { $description = 'iPod shuffle (2nd generation Late 2008)'; }
		if ($serial == '437') { $description = 'iPod shuffle (2nd generation Late 2008)'; }
		if ($serial == '438') { $description = 'iPod shuffle (2nd generation Late 2008)'; }
		if ($serial == '439') { $description = 'iPod shuffle (2nd generation Late 2008)'; }
		if ($serial == '47Z') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '48T') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '4NP') { $description = 'Mac mini (Mid 2007)'; }
		if ($serial == '4NW') { $description = 'QuickTake 150'; }
		if ($serial == '4NZ') { $description = 'iPod shuffle (3rd generation)'; }
		if ($serial == '4PC') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '4PD') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '4R1') { $description = 'MacBook (13-inch, Early 2009)'; }
		if ($serial == '4R2') { $description = 'MacBook (13-inch, Early 2009)'; }
		if ($serial == '4R3') { $description = 'MacBook (13-inch, Early 2009)'; }
		if ($serial == '4R4') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '4R5') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '4R6') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == '4R7') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '4R8') { $description = 'MacBook (13-inch, Early 2008)'; }
		if ($serial == '4R9') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '4RA') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '4RB') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '4RT') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '4RW') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '51N') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '52K') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == '56G') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '56H') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '56J') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '56K') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '57J') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '5A8') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == '5AQ') { $description = 'MacBook (13-inch, Late 2008)'; }
		if ($serial == '5B7') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '5B8') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '5B9') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '5BA') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '5BB') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '5BC') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '5BD') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '5BE') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '5BF') { $description = 'iPod nano (4th generation)'; }
		if ($serial == '5GS') { $description = 'AppleVision 1710 Display'; }
		if ($serial == '5GT') { $description = 'AppleVision 1710AV Display'; }
		if ($serial == '5HS') { $description = 'MacBook (13-inch, Late 2008)'; }
		if ($serial == '5HU') { $description = 'MacBook (13-inch, Late 2008)'; }
		if ($serial == '5HX') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '5J0') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == '5J1') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '5J4') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '5JA') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '5JB') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '5KA') { $description = 'QuickTake 100/100+'; }
		if ($serial == '5KB') { $description = 'AppleVision 1710AV Display'; }
		if ($serial == '5L9') { $description = 'MacBook Air (Late 2008)'; }
		if ($serial == '5LA') { $description = 'MacBook Air (Late 2008)'; }
		if ($serial == '5PC') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == '5PE') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == '5PJ') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == '5PK') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == '5PM') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == '5RU') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == '5S8') { $description = 'Aperture 3.x'; }
		if ($serial == '5S9') { $description = 'Aperture 3.x'; }
		if ($serial == '5SH') { $description = 'Aperture 3.x'; }
		if ($serial == '5TX') { $description = 'MacBook Air (Late 2008)'; }
		if ($serial == '5TY') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '5TZ') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '5U0') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '5U1') { $description = 'MacBook Air (Late 2008)'; }
		if ($serial == '5U6') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '5U7') { $description = 'MacBook Air (Late 2008)'; }
		if ($serial == '5U8') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '5W7') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == '5WD') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '5WE') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '60R') { $description = 'MacBook Air (Late 2008)'; }
		if ($serial == '62W') { $description = 'MacBook Air (Late 2008)'; }
		if ($serial == '634') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '63V') { $description = 'MacBook Air (Late 2008)'; }
		if ($serial == '63W') { $description = 'MacBook Air (Late 2008)'; }
		if ($serial == '63X') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '642') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == '644') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == '64B') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == '64C') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == '65A') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '65J') { $description = 'AppleVision 1710 Display'; }
		if ($serial == '663') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '664') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '666') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '668') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '66D') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == '66E') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == '66H') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == '66J') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == '67C') { $description = 'MacBook (13-inch, Late 2008)'; }
		if ($serial == '6CT') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '6EG') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6EH') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6EJ') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '6EK') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '6EM') { $description = 'Xserve (Early 2008)'; }
		if ($serial == '6ER') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6ES') { $description = 'MacBook (13-inch, Late 2008)'; }
		if ($serial == '6ET') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6EU') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6F9') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == '6GN') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '6GP') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '6GQ') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '6GR') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '6GS') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '6GT') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '6GU') { $description = 'Time Capsule 802.11n (2nd Generation)'; }
		if ($serial == '6HS') { $description = 'Xserve (Early 2009)'; }
		if ($serial == '6HY') { $description = 'MacBook (13-inch, Late 2008)'; }
		if ($serial == '6HZ') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '6J0') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6J1') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '6J2') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '6J3') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '6J4') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '6J5') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '6J6') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '6J7') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6J8') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6J9') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6JA') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6JB') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6JC') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6JD') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6JJ') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '6JK') { $description = 'MacBook Pro (17-inch, Late 2008)'; }
		if ($serial == '6JL') { $description = 'LED Cinema Display (27-inch)'; }
		if ($serial == '6JM') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6JN') { $description = 'MacBook Air (Late 2008)'; }
		if ($serial == '6JW') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '6K2') { $description = 'iPod touch 32GB/64GB (3rd generation)'; }
		if ($serial == '6K4') { $description = 'iPod touch 32GB/64GB (3rd generation)'; }
		if ($serial == '6KH') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6KJ') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6KL') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6LL') { $description = 'MacBook (13-inch, Late 2008)'; }
		if ($serial == '6LM') { $description = 'MacBook (13-inch, Late 2008)'; }
		if ($serial == '6M1') { $description = 'MacBook (13-inch, Late 2008)'; }
		if ($serial == '6MH') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == '6MJ') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == '6V9') { $description = 'MacBook (13-inch, Late 2008)'; }
		if ($serial == '6VE') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '6X0') { $description = 'iMac (20-inch, Early 2009)'; }
		if ($serial == '6X1') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '6X2') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '6X3') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '6YM') { $description = 'AirPort Express 802.11n (1st Generation)'; }
		if ($serial == '6YP') { $description = 'MacBook (13-inch, Late 2008)'; }
		if ($serial == '6ZB') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '6ZC') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == '71A') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '71C') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '71V') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '71Y') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '721') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '726') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '72A') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '72D') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '72F') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '72K') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '72L') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '72Q') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '72R') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '72S') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '72X') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '734') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '738') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '739') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '73A') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '73B') { $description = 'iPod nano (5th generation)'; }
		if ($serial == '74F') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '74G') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '74J') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '75J') { $description = 'iPod touch 8GB (2nd Generation)'; }
		if ($serial == '76Z') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '776') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '77A') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '77B') { $description = 'iWork \'09'; }
		if ($serial == '77X') { $description = 'QuickTake 100/100+'; }
		if ($serial == '79D') { $description = 'MacBook (13-inch, Early 2009)'; }
		if ($serial == '79E') { $description = 'MacBook (13-inch, Early 2009)'; }
		if ($serial == '79F') { $description = 'MacBook (13-inch, Early 2009)'; }
		if ($serial == '7A2') { $description = 'MacBook (13-inch, Early 2009)'; }
		if ($serial == '7AP') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '7AQ') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == '7AS') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '7BF') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '7Q6') { $description = 'AppleVision 1710AV Display'; }
		if ($serial == '7QC') { $description = 'AppleVision 1710AV Display'; }
		if ($serial == '7WU') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '7WV') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '7WY') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '7WZ') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '7X0') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '7XD') { $description = 'MacBook (13-inch, Late 2008)'; }
		if ($serial == '7XJ') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == '7XK') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == '7XL') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '7XM') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '7XN') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '7XP') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '7XQ') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '7XR') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '7XS') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '7Z5') { $description = 'iLife \'09'; }
		if ($serial == '804') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '80D') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '839') { $description = 'AppleVision 750AV'; }
		if ($serial == '852') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '85A') { $description = 'Final Cut Server 1.5'; }
		if ($serial == '85B') { $description = 'Final Cut Server 1.5'; }
		if ($serial == '85D') { $description = 'MacBook (13-inch, Early 2009)'; }
		if ($serial == '85J') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '85M') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '85Q') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '87K') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '87L') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '87M') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '87N') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '88J') { $description = 'MacBook (13-inch, Early 2009)'; }
		if ($serial == '891') { $description = 'iPod shuffle (3rd generation)'; }
		if ($serial == '8A3') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8AD') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8AF') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8AG') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8AH') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8CP') { $description = 'MacBook (13-inch, Early 2009)'; }
		if ($serial == '8CQ') { $description = 'iPod shuffle (2nd generation Late 2007)'; }
		if ($serial == '8CR') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '8DE') { $description = 'Xserve (Early 2009)'; }
		if ($serial == '8FK') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '8FL') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '8FM') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '8FY') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '8FZ') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '8G0') { $description = 'MacBook Pro (17-inch, Early 2009)'; }
		if ($serial == '8KW') { $description = 'Apple Remote Desktop 3.X'; }
		if ($serial == '8KY') { $description = 'Apple Remote Desktop 3.X'; }
		if ($serial == '8L0') { $description = 'iPhone 3G (China)'; }
		if ($serial == '8M3') { $description = 'Xserve (Early 2009)'; }
		if ($serial == '8M5') { $description = 'iMac (20-inch, Early 2009)'; }
		if ($serial == '8M6') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '8M7') { $description = 'iPhone 3GS (China)'; }
		if ($serial == '8M8') { $description = 'iPhone 3GS (China)'; }
		if ($serial == '8M9') { $description = 'iPhone 3GS (China)'; }
		if ($serial == '8MB') { $description = 'iPhone 3GS (China)'; }
		if ($serial == '8MC') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '8NC') { $description = 'Mac mini (Early 2009)'; }
		if ($serial == '8PP') { $description = 'Xsan 2.2'; }
		if ($serial == '8PS') { $description = 'Mac OS X Server 10.6'; }
		if ($serial == '8PW') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == '8PX') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == '8PZ') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '8Q0') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '8Q1') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '8Q2') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '8Q3') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '8Q5') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '8Q6') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8QR') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8QS') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8QT') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8QU') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8R2') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == '8R3') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == '8RA') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8RB') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8RC') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8RD') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8RE') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8RL') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8RM') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8RP') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8RQ') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8RT') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8S1') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8S2') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8S3') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8S4') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8S5') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8S6') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '8S7') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '8SJ') { $description = 'MacBook (13-inch, Early 2009)'; }
		if ($serial == '8SL') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8SM') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8SN') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8SP') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8SQ') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8SR') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8SS') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8ST') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8SU') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8SV') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8SW') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8SX') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8SY') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8SZ') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8T0') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8T1') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8T2') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8T4') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8T6') { $description = 'MacBook (13-inch, Aluminum, Late 2008)'; }
		if ($serial == '8TQ') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '8TR') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '8TS') { $description = 'iMac (20-inch, Early 2009)'; }
		if ($serial == '8TT') { $description = 'iMac (20-inch, Early 2009)'; }
		if ($serial == '8TU') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '8TV') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '8TW') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '8TX') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '8TY') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '8TZ') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '8XG') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '8XH') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '8XL') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '8YA') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == '8YB') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == '8ZW') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == '91T') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == '92G') { $description = 'Mac mini (Early 2009)'; }
		if ($serial == '93G') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '93H') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '93K') { $description = 'MacBook (13-inch, Early 2009)'; }
		if ($serial == '93T') { $description = 'AppleVision 850AV Display'; }
		if ($serial == '93U') { $description = 'AppleVision 850AV Display'; }
		if ($serial == '947') { $description = 'AppleVision 850 Display'; }
		if ($serial == '949') { $description = 'AppleVision 850 Display'; }
		if ($serial == '94N') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == '94P') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == '970') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '971') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '972') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '973') { $description = 'MacBook Pro (15-inch, Late 2008)'; }
		if ($serial == '9A5') { $description = 'MacBook Air (Mid 2009)'; }
		if ($serial == '9A6') { $description = 'MacBook Air (Mid 2009)'; }
		if ($serial == '9A7') { $description = 'MacBook Air (Mid 2009)'; }
		if ($serial == '9A8') { $description = 'MacBook Air (Mid 2009)'; }
		if ($serial == '9DZ') { $description = 'QuickTake 200'; }
		if ($serial == '9ET') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '9EU') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '9EV') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '9EX') { $description = 'iMac (20-inch, Early 2009)'; }
		if ($serial == '9F3') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '9FQ') { $description = 'QuickTake 200'; }
		if ($serial == '9G5') { $description = 'Mac mini (Late 2009)'; }
		if ($serial == '9G6') { $description = 'Mac mini (Late 2009)'; }
		if ($serial == '9G7') { $description = 'Mac mini (Late 2009)'; }
		if ($serial == '9G8') { $description = 'Mac mini (Late 2009)'; }
		if ($serial == '9GU') { $description = 'MacBook (13-inch, Mid 2009)'; }
		if ($serial == '9GV') { $description = 'MacBook (13-inch, Mid 2009)'; }
		if ($serial == '9HT') { $description = 'iMac (Slot Loading)'; }
		if ($serial == '9LN') { $description = 'iMac (20-inch, Early 2009)'; }
		if ($serial == '9LP') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '9LQ') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '9LR') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '9LS') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == '9MC') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '9MD') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '9MG') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '9MJ') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '9MK') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '9ML') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '9N0') { $description = 'Xserve (Early 2009)'; }
		if ($serial == '9QC') { $description = 'QuickTake 200'; }
		if ($serial == '9QD') { $description = 'QuickTake 200'; }
		if ($serial == '9QK') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == '9QN') { $description = 'AppleVision 1710 Display'; }
		if ($serial == '9QP') { $description = 'AppleVision 1710AV Display'; }
		if ($serial == '9RR') { $description = 'Mac mini (Early 2009)'; }
		if ($serial == '9RS') { $description = 'Mac mini (Early 2009)'; }
		if ($serial == '9SS') { $description = 'Xserve (Early 2009)'; }
		if ($serial == '9ST') { $description = 'Xserve (Early 2009)'; }
		if ($serial == '9TH') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == '9VJ') { $description = 'Xserve (Early 2009)'; }
		if ($serial == '9WC') { $description = 'QuickTake 200'; }
		if ($serial == '9WM') { $description = 'Xserve (Early 2009)'; }
		if ($serial == '9ZL') { $description = 'Xserve (Early 2009)'; }
		if ($serial == '9ZP') { $description = 'Xserve (Early 2009)'; }
		if ($serial == '9ZQ') { $description = 'Xserve (Early 2009)'; }
		if ($serial == '9ZS') { $description = 'iPod classic 160GB (Late 2009)'; }
		if ($serial == '9ZU') { $description = 'iPod classic 160GB (Late 2009)'; }
		if ($serial == 'A1L') { $description = 'iPod shuffle (3rd generation Late 2009, Stainless Steel)'; }
		if ($serial == 'A1S') { $description = 'iPod shuffle (3rd generation Late 2009)'; }
		if ($serial == 'A1U') { $description = 'iPod shuffle (3rd generation Late 2009)'; }
		if ($serial == 'A1W') { $description = 'MacBook (13-inch, Mid 2009)'; }
		if ($serial == 'A1X') { $description = 'MacBook (13-inch, Mid 2009)'; }
		if ($serial == 'A1Y') { $description = 'MacBook (13-inch, Mid 2009)'; }
		if ($serial == 'A2U') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'A2V') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'A39') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'A3A') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'A3B') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == 'A3C') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == 'A3F') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == 'A3G') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == 'A3H') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'A3J') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'A3K') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'A3L') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'A3M') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'A3N') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'A4S') { $description = 'iPhone 4'; }
		if ($serial == 'A4T') { $description = 'iPhone 4'; }
		if ($serial == 'A4V') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'A4W') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'A4X') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'A4Y') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'A4Z') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'A50') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'A54') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'A55') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'A56') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'A57') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'A5R') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'A5W') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'A69') { $description = 'AppleVision 750AV'; }
		if ($serial == 'A6A') { $description = 'AppleVision 750AV'; }
		if ($serial == 'A6B') { $description = 'AppleVision 750'; }
		if ($serial == 'A6C') { $description = 'AppleVision 750'; }
		if ($serial == 'A6Z') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'A70') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'A78') { $description = 'iPod shuffle (3rd generation Late 2009)'; }
		if ($serial == 'A7B') { $description = 'iPod shuffle (3rd generation Late 2009)'; }
		if ($serial == 'A7D') { $description = 'iPod shuffle (3rd generation Late 2009)'; }
		if ($serial == 'A90') { $description = 'iPad Wi-Fi + 3G'; }
		if ($serial == 'A9P') { $description = 'MacBook (13-inch, Mid 2009)'; }
		if ($serial == 'A9Q') { $description = 'MacBook (13-inch, Mid 2009)'; }
		if ($serial == 'A9Y') { $description = 'MacBook (13-inch, Mid 2009)'; }
		if ($serial == 'ABW') { $description = 'MacBook (13-inch, Mid 2009)'; }
		if ($serial == 'ABX') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'AC1') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'ACC') { $description = 'AirPort Extreme 802.11n (4th Generation)'; }
		if ($serial == 'ACD') { $description = 'Time Capsule 802.11n (3rd Generation)'; }
		if ($serial == 'ACG') { $description = 'Time Capsule 802.11n (3rd Generation)'; }
		if ($serial == 'AEJ') { $description = 'PowerBook G3'; }
		if ($serial == 'AF2') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'AF3') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'AFK') { $description = 'Mac mini (Late 2009)'; }
		if ($serial == 'AFR') { $description = 'Mac mini (Early 2009)'; }
		if ($serial == 'AFS') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'AFT') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'AFU') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'AFV') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'AG5') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'AG7') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == 'AGH') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'AGJ') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'AGQ') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'AGU') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'AGV') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'AGW') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'AGX') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'AGY') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'AGZ') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'AH5') { $description = 'PowerBook G3'; }
		if ($serial == 'AH8') { $description = 'PowerBook G3'; }
		if ($serial == 'AK4') { $description = 'PowerBook G3'; }
		if ($serial == 'AK8') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'AK9') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'AKB') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'AKV') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'AKW') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'ALB') { $description = 'iPod shuffle (3rd generation Late 2009)'; }
		if ($serial == 'ALD') { $description = 'iPod shuffle (3rd generation Late 2009)'; }
		if ($serial == 'ALG') { $description = 'iPod shuffle (3rd generation Late 2009)'; }
		if ($serial == 'ALJ') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'ALK') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'ALL') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'ALM') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'ALN') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'ALP') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'ALQ') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'AM4') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'AM5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'AMF') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == 'AMG') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == 'AMH') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'AMJ') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'AMK') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'AML') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'AMM') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'AMV') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'AMW') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'AN1') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'ANC') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'AND') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'ANE') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'ANF') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'ANJ') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'ANS') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'ANW') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'AQA') { $description = 'AirPort Extreme 802.11n (4th Generation)'; }
		if ($serial == 'AQB') { $description = 'AirPort Extreme 802.11n (4th Generation)'; }
		if ($serial == 'AQC') { $description = 'AirPort Extreme 802.11n (4th Generation)'; }
		if ($serial == 'AQD') { $description = 'AirPort Extreme 802.11n (4th Generation)'; }
		if ($serial == 'AQE') { $description = 'Time Capsule 802.11n (3rd Generation)'; }
		if ($serial == 'AQF') { $description = 'Time Capsule 802.11n (3rd Generation)'; }
		if ($serial == 'AQG') { $description = 'Time Capsule 802.11n (3rd Generation)'; }
		if ($serial == 'AQH') { $description = 'Time Capsule 802.11n (3rd Generation)'; }
		if ($serial == 'AQL') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'AQM') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'AQN') { $description = 'Time Capsule 802.11n (3rd Generation)'; }
		if ($serial == 'AQP') { $description = 'Time Capsule 802.11n (3rd Generation)'; }
		if ($serial == 'AQQ') { $description = 'Time Capsule 802.11n (3rd Generation)'; }
		if ($serial == 'AQT') { $description = 'Time Capsule 802.11n (3rd Generation)'; }
		if ($serial == 'ARG') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'ASC') { $description = 'MacBook (13-inch, Mid 2009)'; }
		if ($serial == 'ASE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'ATM') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'ATN') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'ATP') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'ATQ') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'AUP') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'AUR') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'AUT') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == 'AUU') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'AY8') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'AY9') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == 'AZ3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'AZC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'B20') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'B21') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == 'B22') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'B3G') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'B3H') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'B3J') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'B5S') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'B66') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'B8X') { $description = 'Apple Studio Display LCD (15 inch)'; }
		if ($serial == 'B9C') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'B9D') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'B9S') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'B9U') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'B9X') { $description = 'Mac mini (Late 2009)'; }
		if ($serial == 'BAH') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == 'BAL') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BAM') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BAN') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BAP') { $description = 'Power Mac G3 All-In-One'; }
		if ($serial == 'BAS') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BAT') { $description = 'Power Mac G3 All-In-One'; }
		if ($serial == 'BAV') { $description = 'Mac mini (Early 2009)'; }
		if ($serial == 'BAY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BBR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BBV') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BBW') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BCT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BCV') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BCW') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BCX') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BCY') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BCZ') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BD0') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BD1') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BD2') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BD3') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BD4') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BD5') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BD6') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BD7') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BD8') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BD9') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDA') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDB') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDC') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDD') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDE') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDF') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDG') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDH') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDJ') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDK') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDL') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDM') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDN') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDP') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDQ') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDR') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDS') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDT') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDU') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDV') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDW') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDX') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDY') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BDZ') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BE0') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BE1') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BE2') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BE3') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BE4') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BE5') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BE6') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BE7') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BE8') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BE9') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEA') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEB') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEC') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BED') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEE') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEF') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEG') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEH') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEJ') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEK') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEL') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEM') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEN') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEP') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BEQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BER') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BES') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BET') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BEU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BEV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BEW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BEX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BEY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BEZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BF0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BF1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BF2') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BF3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BF4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BF5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BF6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BF7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BF8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BF9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BFZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BG0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BG1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BG2') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BG3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BG4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BG5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BG6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BG7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BG8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BG9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BGA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BGB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BGC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BGD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BGE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BGF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BGG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BGM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BGQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BGT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BGU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BGV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BKL') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'BKM') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'BKP') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'BLA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BLZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BM0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BM1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BM3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BM4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BM5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BM6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BM7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BM8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BM9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BME') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BML') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BMZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BN0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BN1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BN2') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BN3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BN4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BN5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BN6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BN7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BN8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BN9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BND') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BNZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BP0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BP1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BP2') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BP3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BP4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BP5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BP6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BP7') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BP8') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BP9') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPA') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPB') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPC') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPD') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPE') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPF') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPG') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPH') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPJ') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPK') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPL') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPM') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPN') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPP') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPQ') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPR') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPS') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPT') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPU') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPV') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPW') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPX') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPY') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BPZ') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQ0') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQ1') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQ2') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQ3') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQ4') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQ5') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQ6') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQ7') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQ8') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQ9') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQA') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQB') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQC') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQD') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQE') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQF') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQG') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQH') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQJ') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQK') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQL') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQM') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQN') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQP') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQQ') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQR') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQS') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQT') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQU') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQV') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQW') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQX') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQY') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BQZ') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BR0') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BR1') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BR2') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BR6') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BR7') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'BRN') { $description = 'AppleVision 850 Display'; }
		if ($serial == 'BSF') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BSH') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BSQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BSS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BTD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BTE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BTG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BTH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BTJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BTL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BTM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BTN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BTP') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'BXD') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'BXE') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'BXT') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'BXU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'BZF') { $description = 'Mac OS X 10.6'; }
		if ($serial == 'BZH') { $description = 'Mac OS X 10.6'; }
		if ($serial == 'C0N') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C0T') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C0U') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C0V') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C0W') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C0X') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C0Y') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C0Z') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C14') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C1A') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C1B') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C1C') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C1D') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C1E') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C1T') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C1U') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C1V') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C1W') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C1X') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C1Y') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C1Z') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C20') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C22') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C25') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C29') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2F') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2K') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2L') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2M') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2N') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2P') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2Q') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2R') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2S') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2T') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2U') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2V') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2W') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2X') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2Y') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C2Z') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C3C') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C3H') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C3J') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C3N') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C3U') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4A') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4B') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4C') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4D') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4E') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4F') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4G') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4H') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4J') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4K') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4L') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4M') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4N') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4P') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4Q') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4R') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4S') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4T') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4U') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'C4X') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C4Y') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C4Z') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C51') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C55') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C59') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5A') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5B') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5C') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5D') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5E') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5F') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5G') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5H') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5J') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5K') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5L') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5M') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5N') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5P') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5Q') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5R') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5S') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5T') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5U') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5V') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5W') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5X') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5Y') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C5Z') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C65') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C66') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6A') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6B') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6C') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6D') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6E') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6F') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6G') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6H') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6J') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6K') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6L') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6M') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6N') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6P') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6Q') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6R') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6S') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6T') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6U') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6V') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6W') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6X') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6Y') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C6Z') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C79') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'C7A') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7B') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7C') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7D') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7E') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7F') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7G') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7H') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7J') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7K') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7L') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7M') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7N') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7P') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7Q') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7R') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7S') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7T') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7U') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7V') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7W') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7X') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7Y') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C7Z') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C80') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C86') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C87') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C88') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8A') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8B') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8C') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8D') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8E') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8F') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8G') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8H') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8J') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8K') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8L') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8M') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8N') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8P') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8Q') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8R') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8S') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8T') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8U') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8V') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8W') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8X') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8Y') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C8Z') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C92') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C93') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C96') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C99') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9A') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9B') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9C') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9D') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9E') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9F') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9G') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9H') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9J') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9K') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9L') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9M') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9N') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9P') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9Q') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9R') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9S') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9T') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9U') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9V') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9W') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9X') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9Y') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'C9Z') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CA0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CA4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CAZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CB0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CBZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CC0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CCZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CD0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CD1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CD2') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CD3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CD6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CDZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CE0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CE4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CE5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CE6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CE7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CE8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CE9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CED') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CER') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CES') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CET') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CEZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CF0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CF1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CF2') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CF3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CF4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CF5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CF6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CF7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CF8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CF9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CFZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CG0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CG1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CG2') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CG3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CG4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CG6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CG7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CG8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CG9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CGX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CJ1') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'CJ6') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == 'CJ7') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'CJ8') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == 'CJ9') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == 'CJR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CJS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CJT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CJU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CJV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CJW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CJX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CJY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CJZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CK0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CK1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CK2') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CK3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CK4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CK5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CK6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CK7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CK8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CK9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CKZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CL0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CL1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CL2') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CL3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CL4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CL5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CL6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CL7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CL8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CL9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CLZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CM0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CM1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CM2') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CM3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CM4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CM5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CM6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CM7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CM8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CM9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CME') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CML') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CMZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CND') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CNZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CP0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CP1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CP2') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CP3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CP4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CP5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CP6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CP7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CP8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CP9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CPZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQ0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQ1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQ2') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQ3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQ4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQ5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQ6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQ7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQ8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQ9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQL') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQS') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQT') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQV') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQW') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQX') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQY') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CQZ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CR0') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CR1') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CR2') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CR3') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CR4') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CR5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CR6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CR7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CR8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CR9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRD') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRJ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRL') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'CRM') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'CRN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRP') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRR') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CRS') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'CRT') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'CRZ') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'CS0') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'CS1') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'CS6') { $description = 'Mac mini (Late 2009)'; }
		if ($serial == 'CS7') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == 'CS8') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == 'CS9') { $description = 'MacBook Pro (15-inch, 2.53GHz, Mid 2009)'; }
		if ($serial == 'CSA') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'CSB') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'CSC') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'CSD') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'CSE') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'CSF') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'CSG') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'CSH') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'CSJ') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'CSU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CT0') { $description = 'Power Mac G3 All-In-One'; }
		if ($serial == 'CT5') { $description = 'Apple Studio Display 21 inch, CRT'; }
		if ($serial == 'CT6') { $description = 'Apple Studio Display 21 inch, CRT'; }
		if ($serial == 'CT9') { $description = 'Power Mac G3 All-In-One'; }
		if ($serial == 'CTA') { $description = 'Power Mac G3 All-In-One'; }
		if ($serial == 'CTF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CTH') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CUQ') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CV6') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'CV9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CVM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CVP') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'CVS') { $description = 'Apple Studio Display 17 inch, CRT'; }
		if ($serial == 'CVT') { $description = 'Apple Studio Display 17 inch, CRT'; }
		if ($serial == 'CVY') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'CW5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CW6') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'CXK') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CXM') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CXN') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CXS') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'CXX') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'CXY') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'CY3') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'CY4') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'CY5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CY6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CY7') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'CY8') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'CY9') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'CYA') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'CYB') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'CYC') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'CZ2') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'CZ3') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'CZ4') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'D2H') { $description = 'Power Mac G3 All-In-One'; }
		if ($serial == 'D2J') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'D2K') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D3Q') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D4V') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'D5G') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'D5J') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D5N') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'D5V') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D5W') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'D5X') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'D68') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'D6C') { $description = 'Apple Studio Display 21 inch, CRT'; }
		if ($serial == 'D6G') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D6K') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'D6L') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'D6M') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D6P') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D6Q') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D6S') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D6T') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D6X') { $description = 'Apple Studio Display 21 inch, CRT'; }
		if ($serial == 'D76') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'D7C') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D7V') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D7W') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D8G') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D8V') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D8X') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'D8Y') { $description = 'Power Mac G3 All-In-One'; }
		if ($serial == 'D8Z') { $description = 'Power Mac G3 All-In-One'; }
		if ($serial == 'D9B') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'D9G') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'D9H') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D9J') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'D9K') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D9M') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'D9N') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'DAS') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'DB5') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'DB6') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'DB7') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'DDM') { $description = 'iMac'; }
		if ($serial == 'DFN') { $description = 'iMac'; }
		if ($serial == 'DFP') { $description = 'iMac'; }
		if ($serial == 'DFT') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'DFU') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'DFY') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'DG6') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'DG7') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'DGG') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'DHP') { $description = 'iMac'; }
		if ($serial == 'DHQ') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'DHV') { $description = 'Power Mac G3 All-In-One'; }
		if ($serial == 'DHW') { $description = 'Power Mac G3 All-In-One'; }
		if ($serial == 'DJ6') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'DKV') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'DL4') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'DL5') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'DLG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'DLT') { $description = 'iMac'; }
		if ($serial == 'DLU') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'DMG') { $description = 'Mac mini (Late 2009)'; }
		if ($serial == 'DMH') { $description = 'Mac mini (Late 2009)'; }
		if ($serial == 'DMV') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == 'DMW') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'DMX') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'DMY') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'DMZ') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'DNM') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'DNN') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'DNP') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'DNR') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'DTM') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'DVT') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'DWG') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == 'DWR') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'DWT') { $description = 'iMac'; }
		if ($serial == 'DWU') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'DWY') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == 'DWZ') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'DZ4') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'DZ5') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'DZZ') { $description = 'iPhone 4'; }
		if ($serial == 'E00') { $description = 'iPhone 4'; }
		if ($serial == 'E02') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'E17') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'E1B') { $description = 'iMac (24-inch, Early 2009)'; }
		if ($serial == 'E1C') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'E1D') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'E1E') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'E1J') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'E1Y') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'E22') { $description = 'iMac'; }
		if ($serial == 'E2Q') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'E2S') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'E35') { $description = 'iMac'; }
		if ($serial == 'E36') { $description = 'iMac'; }
		if ($serial == 'E39') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == 'E40') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'E4R') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'E6C') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'E6F') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'E6L') { $description = 'MacBook Pro (17-inch, Mid 2009)'; }
		if ($serial == 'E6N') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'E6R') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'E86') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == 'E8D') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'E8E') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'E8F') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'EAA') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'EDG') { $description = 'iPhone 3GS (8GB)'; }
		if ($serial == 'EQB') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'EQC') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'EQE') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'EQL') { $description = 'iMac'; }
		if ($serial == 'ESN') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'ESQ') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'ETB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'ETU') { $description = 'iPad Wi-Fi + 3G'; }
		if ($serial == 'ETV') { $description = 'iPad Wi-Fi + 3G'; }
		if ($serial == 'EUE') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'EUF') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'EUG') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'EUH') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'EUK') { $description = 'iMac'; }
		if ($serial == 'EUL') { $description = 'iMac'; }
		if ($serial == 'EUM') { $description = 'iMac'; }
		if ($serial == 'EUT') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'EVL') { $description = 'iMac'; }
		if ($serial == 'EVP') { $description = 'iMac'; }
		if ($serial == 'EVQ') { $description = 'iMac'; }
		if ($serial == 'EW1') { $description = 'iMac'; }
		if ($serial == 'EW2') { $description = 'iMac'; }
		if ($serial == 'EW3') { $description = 'iMac'; }
		if ($serial == 'EW4') { $description = 'iMac'; }
		if ($serial == 'EW5') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'EWA') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'EWB') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'EWG') { $description = 'Mac OS 8.5'; }
		if ($serial == 'EXW') { $description = 'PowerBook G3 Series (Bronze Keyboard)'; }
		if ($serial == 'EY8') { $description = 'PowerBook G3 Series (Bronze Keyboard)'; }
		if ($serial == 'EYX') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'EYY') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'EZY') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'F0G') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'F0H') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'F0J') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'F0K') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'F5J') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'F5W') { $description = 'MacBook (13-inch, Mid 2010)'; }
		if ($serial == 'F5X') { $description = 'MacBook (13-inch, Mid 2010)'; }
		if ($serial == 'F6H') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'F6J') { $description = 'Mac mini (Late 2009)'; }
		if ($serial == 'F7D') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'F7M') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'F7N') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'F7P') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'F7Q') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'F8U') { $description = 'Apple Studio Display 21 inch, CRT'; }
		if ($serial == 'F9V') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'F9W') { $description = 'MacBook Pro (13-inch, Mid 2009)'; }
		if ($serial == 'FCS') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'FDV') { $description = 'Mac OS X Server 10.6'; }
		if ($serial == 'FDY') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'FH9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'FJN') { $description = 'MacBook Pro (15-inch, Mid 2009)'; }
		if ($serial == 'FL0') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FL4') { $description = 'Power Mac G3 Desktop'; }
		if ($serial == 'FLF') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'FLG') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'FLM') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FLP') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FM1') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FM2') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FM3') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FM4') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FMB') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FMQ') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FMR') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FMT') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FMV') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FMW') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FMX') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FMY') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FMZ') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FNH') { $description = 'iMac'; }
		if ($serial == 'FPC') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FPD') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FPH') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FPJ') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FPK') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FQ9') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FQH') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'FR9') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'FRA') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'FRJ') { $description = 'PowerBook G3 Series (Bronze Keyboard)'; }
		if ($serial == 'FSJ') { $description = 'AppleWorks 5'; }
		if ($serial == 'FU1') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'FUN') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == 'FVU') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FVV') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FVW') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FVX') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FVY') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FX9') { $description = 'MacBook (13-inch, Mid 2010)'; }
		if ($serial == 'FXH') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'FXK') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'FXN') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == 'FYN') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == 'FYT') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == 'FZC') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'FZE') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FZF') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FZH') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FZK') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'FZY') { $description = 'PowerBook G3 Series (Bronze Keyboard)'; }
		if ($serial == 'G00') { $description = 'PowerBook G3 Series (Bronze Keyboard)'; }
		if ($serial == 'G01') { $description = 'PowerBook G3 Series (Bronze Keyboard)'; }
		if ($serial == 'G03') { $description = 'PowerBook G3 Series (Bronze Keyboard)'; }
		if ($serial == 'G07') { $description = 'AppleWorks 6'; }
		if ($serial == 'G0P') { $description = 'Mac OS X 10.0'; }
		if ($serial == 'G0V') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G2F') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2G') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2H') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2J') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2K') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2L') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2M') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2N') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2P') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2Q') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2R') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2S') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2T') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2U') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2V') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2W') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2X') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2Y') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G2Z') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G39') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'G3G') { $description = 'AirPort Card'; }
		if ($serial == 'G3H') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G3K') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G42') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'G43') { $description = 'AirPort Card'; }
		if ($serial == 'G45') { $description = 'AirPort Card'; }
		if ($serial == 'G5G') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'G5H') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'G5L') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G5M') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G5N') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G5P') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G5Q') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G5R') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G5S') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G5T') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G5W') { $description = 'Apple Cinema Display'; }
		if ($serial == 'G8Q') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G8T') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G8U') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G8V') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G8W') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G8X') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G8Y') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'G8Z') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GA3') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == 'GAY') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == 'GAZ') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == 'GB0') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == 'GB4') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == 'GB5') { $description = 'MacBook (13-inch, Late 2009)'; }
		if ($serial == 'GBR') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GD6') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GFT') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GG8') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'GG9') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'GGA') { $description = 'Power Mac G3 Minitower'; }
		if ($serial == 'GGE') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'GGQ') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'GJE') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'GJF') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'GM8') { $description = 'Power Mac G4 Server (QuickSilver 2002)'; }
		if ($serial == 'GM9') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == 'GMC') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'GMD') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'GND') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GNE') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GNF') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'GNG') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'GNH') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'GNK') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GNW') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GNX') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GNY') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GP0') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'GP1') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'GP6') { $description = 'MacBook (13-inch, Mid 2010)'; }
		if ($serial == 'GPH') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GPJ') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'GPK') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'GPL') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'GPM') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'GPN') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GPP') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GPQ') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GPR') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GPS') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GPT') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GPU') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GPV') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GPW') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GPX') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GPY') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GPZ') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GQ0') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GQ1') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GQ7') { $description = 'iMac (266 MHz)'; }
		if ($serial == 'GQA') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'GQH') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'GQJ') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GQK') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GQL') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GQM') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GQN') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GQU') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'GR7') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GR8') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'GRC') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GRD') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GRE') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'GRL') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'GRM') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GRN') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GRP') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'GRQ') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GSN') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GSP') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GSQ') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GST') { $description = 'MacBook (13-inch, Mid 2010)'; }
		if ($serial == 'GT0') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GT1') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GTM') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'GTN') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'GTP') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GTQ') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GUH') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'GUJ') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'GUP') { $description = 'MacBook (13-inch, Mid 2010)'; }
		if ($serial == 'GUQ') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GUR') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GUS') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GUT') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GUU') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GUV') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GUW') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GUX') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GUY') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GUZ') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GV0') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GV1') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GV2') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GV3') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GV4') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GV5') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GV6') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GV7') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GV8') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GV9') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GVK') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GVV') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'GVW') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GVX') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GVY') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'GWQ') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GWR') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'GX0') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'GX1') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'GX2') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GX3') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GX8') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'GX9') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'GXA') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GXB') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GXC') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GXD') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GXU') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GY5') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'GY6') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'GYA') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'GYB') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GYC') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GYD') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GYE') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GYF') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'GYG') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GYH') { $description = 'Mac Pro (Early 2009)'; }
		if ($serial == 'GYJ') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'GYX') { $description = 'PowerBook G3 Series (Bronze Keyboard)'; }
		if ($serial == 'GYY') { $description = 'PowerBook G3 Series (Bronze Keyboard)'; }
		if ($serial == 'GZC') { $description = 'Apple Studio Display 17 inch, CRT'; }
		if ($serial == 'GZH') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'GZJ') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'GZK') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'GZL') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'GZM') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'GZN') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GZP') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'GZQ') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'H0B') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'H0C') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'H0E') { $description = 'Apple Studio Display 21 inch, CRT'; }
		if ($serial == 'H0G') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'H0H') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'H0J') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'H0K') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'H0M') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'H0X') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'H1S') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == 'H1X') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'H1Z') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'H20') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'H21') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'H22') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'H2N') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'H2P') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'H4M') { $description = 'Final Cut Pro 1.2'; }
		if ($serial == 'H4N') { $description = 'Final Cut Pro 1.2'; }
		if ($serial == 'H5E') { $description = 'Apple Studio Display 21 inch, CRT'; }
		if ($serial == 'H5F') { $description = 'Apple Studio Display 21 inch, CRT'; }
		if ($serial == 'H5G') { $description = 'Apple Studio Display 17 inch, CRT'; }
		if ($serial == 'H5Q') { $description = 'iBook'; }
		if ($serial == 'H5S') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'H5U') { $description = 'iBook'; }
		if ($serial == 'H5V') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'H5W') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'H5X') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'H5Y') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'H60') { $description = 'PowerBook G3 Series (Bronze Keyboard)'; }
		if ($serial == 'H61') { $description = 'PowerBook G3 Series (Bronze Keyboard)'; }
		if ($serial == 'H68') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'H69') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'H6A') { $description = 'Final Cut Pro 1.2'; }
		if ($serial == 'H6B') { $description = 'Final Cut Pro 1.2'; }
		if ($serial == 'H6C') { $description = 'Final Cut Pro 1.2'; }
		if ($serial == 'H70') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'H78') { $description = 'iBook'; }
		if ($serial == 'H79') { $description = 'iBook'; }
		if ($serial == 'H7D') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'H7W') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'H8H') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'H8P') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'H8Y') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'H90') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'H93') { $description = 'AirPort Base Station'; }
		if ($serial == 'H94') { $description = 'AirPort Base Station'; }
		if ($serial == 'H95') { $description = 'AirPort Base Station (Dual Ethernet)'; }
		if ($serial == 'H97') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'H99') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'H9F') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'H9G') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'H9H') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'H9J') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'H9K') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'H9L') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'H9M') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'H9N') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'H9P') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'H9R') { $description = 'iMac (27-inch, Late 2009)'; }
		if ($serial == 'HA1') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HA2') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HA3') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HA4') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HA5') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HA6') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HA7') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HA8') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HA9') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HAA') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HAB') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HAC') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HAD') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HAE') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HAF') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HAG') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HAJ') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HAK') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HAL') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HAP') { $description = 'PowerBook G3 Series (Bronze Keyboard)'; }
		if ($serial == 'HAQ') { $description = 'PowerBook G3 Series (Bronze Keyboard)'; }
		if ($serial == 'HAY') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HB5') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HB6') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HB7') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HBT') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'HBU') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'HBY') { $description = 'Apple Studio Display 17 inch, ADC'; }
		if ($serial == 'HC2') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HC4') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HC5') { $description = 'iMac (333 GHz)'; }
		if ($serial == 'HC6') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HCF') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HCJ') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HCK') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HCL') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HCM') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HCN') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HCP') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HCQ') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HCR') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HCS') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HCV') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HCW') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HCX') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HCY') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HD0') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HD1') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HD2') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HD3') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HD4') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HD6') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HD7') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HD8') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HD9') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HDB') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HDC') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HDD') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HDE') { $description = 'Xserve (Early 2009)'; }
		if ($serial == 'HDF') { $description = 'iMac (21.5-inch, Late 2009)'; }
		if ($serial == 'HDG') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HDH') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HDK') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HDR') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'HDS') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'HE5') { $description = 'iBook'; }
		if ($serial == 'HE6') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HEA') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HEC') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HED') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HEG') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HEK') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HES') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HF7') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HF8') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HF9') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HFA') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HFC') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HFD') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HFF') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HFG') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HFJ') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HFK') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HFL') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HFN') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HFS') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HFT') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HFU') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HFZ') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HG1') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HG3') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HGD') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'HGE') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'HGF') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'HGN') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'HGP') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'HGU') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HHC') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HHD') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HHF') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HHG') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HJ4') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HJ6') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HJ7') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HJ9') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HJA') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HJC') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HJE') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HJG') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HJH') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HJJ') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HJM') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HJN') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HJP') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HJQ') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HJR') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HJS') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HJT') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HJU') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HJV') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HJW') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HJX') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HJY') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HK7') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HKE') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'HL1') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'HL4') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HLA') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HLC') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'HLK') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HLZ') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HM0') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HM1') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HM5') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HMN') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'HMP') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'HMQ') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'HMR') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'HMS') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'HMT') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'HMU') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'HMV') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'HN1') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HN2') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HN3') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HN9') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HNA') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HNC') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'HND') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'HNE') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'HNF') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'HNH') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HNZ') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HOE') { $description = 'Apple Studio Display 21 inch, CRT'; }
		if ($serial == 'HP0') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HP9') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HPA') { $description = 'Mac Pro (Mid 2010)'; }
		if ($serial == 'HPB') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HPC') { $description = 'MacBook Pro (13-inch, Mid 2010)'; }
		if ($serial == 'HPE') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HPF') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HPG') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HPH') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HPJ') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HPK') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HPL') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HPM') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HPO') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HPQ') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HPR') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HPS') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HPV') { $description = 'Mac Pro Server (Mid 2010)'; }
		if ($serial == 'HPW') { $description = 'Mac Pro Server (Mid 2010)'; }
		if ($serial == 'HPY') { $description = 'Mac Pro Server (Mid 2010)'; }
		if ($serial == 'HQD') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HQE') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HQJ') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HQK') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HQL') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HQM') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HQN') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HQP') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HQS') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HQY') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HQZ') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HR5') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HRR') { $description = 'MacBook Pro (15-inch, Mid 2010)'; }
		if ($serial == 'HRV') { $description = 'iMac (21.5-inch, Mid 2010)'; }
		if ($serial == 'HS0') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HS6') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == 'HS7') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == 'HSC') { $description = 'iMac (27-inch, Mid 2010)'; }
		if ($serial == 'HSE') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HSF') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HSG') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HSK') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HSL') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HSM') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HSN') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HSP') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HSQ') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HSR') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HST') { $description = 'MacBook (13-inch, Mid 2010)'; }
		if ($serial == 'HSU') { $description = 'MacBook (13-inch, Mid 2010)'; }
		if ($serial == 'HT0') { $description = 'Final Cut Pro X'; }
		if ($serial == 'HT1') { $description = 'Motion 5'; }
		if ($serial == 'HT3') { $description = 'Compressor 4'; }
		if ($serial == 'HT6') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == 'HTC') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HTD') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HTE') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HTG') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HTH') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HTJ') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HTK') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HTL') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HTM') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HTN') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HTP') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HTQ') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HTR') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HTS') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HTT') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HTU') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HTV') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HTW') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HTX') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HTY') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HTZ') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HU0') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HU1') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HU2') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HU3') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HU4') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HU5') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HU6') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HU7') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HU8') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HU9') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HUA') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HUB') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HUC') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HUD') { $description = 'MacBook (13-inch, Mid 2010)'; }
		if ($serial == 'HUE') { $description = 'iMac (20-inch, Mid 2009)'; }
		if ($serial == 'HUO') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HUV') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HV6') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'HV7') { $description = 'Power Mac G4 (PCI Graphics)'; }
		if ($serial == 'HVE') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HVF') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HVG') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HVT') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HVU') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HVV') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HVW') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HVX') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HVY') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HVZ') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HWE') { $description = 'AppleWorks 6'; }
		if ($serial == 'HWF') { $description = 'AppleWorks 6'; }
		if ($serial == 'HWG') { $description = 'AppleWorks 6'; }
		if ($serial == 'HWH') { $description = 'AppleWorks 6'; }
		if ($serial == 'HYA') { $description = 'AppleWorks 6'; }
		if ($serial == 'HZ8') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'HZ9') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'HZA') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HZG') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'HZH') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'HZJ') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'HZK') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'HZL') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'HZM') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'HZN') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HZP') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HZQ') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HZR') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'HZS') { $description = 'iBook Special Edition'; }
		if ($serial == 'HZT') { $description = 'iBook'; }
		if ($serial == 'HZU') { $description = 'iBook'; }
		if ($serial == 'HZX') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'HZY') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'HZZ') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'INT') { $description = 'iMac (17 inch, Flat Panel)'; }
		if ($serial == 'IWP') { $description = 'Non-serialized Products'; }
		if ($serial == 'J00') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'J04') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'J07') { $description = 'AppleShare IP 6.3'; }
		if ($serial == 'J0Y') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'J2P') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'J2Q') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'J2R') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'J2S') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'J3B') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'J3C') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'J3D') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'J52') { $description = 'iBook Special Edition'; }
		if ($serial == 'J55') { $description = 'iBook'; }
		if ($serial == 'J5V') { $description = 'iBook'; }
		if ($serial == 'J5W') { $description = 'iBook'; }
		if ($serial == 'J6H') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'J6N') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J6P') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J6Q') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J6S') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J6T') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'J6V') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J74') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'J77') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J78') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J79') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J7A') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J7B') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J7C') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J7D') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'J7E') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J7F') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J7G') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J7H') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J7J') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J7K') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J7Q') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'J7R') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'J7S') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'J7T') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'J88') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'J89') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J8A') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J8B') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J8C') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J8D') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J8E') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J8F') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'J8G') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J8H') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J8J') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J8K') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J8L') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J8M') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J8V') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'J8W') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'J90') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'J92') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'J93') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'JAJ') { $description = 'Apple Studio Display 17 inch, ADC'; }
		if ($serial == 'JAK') { $description = 'Apple Studio Display 17 inch, ADC'; }
		if ($serial == 'JAL') { $description = 'Apple Studio Display 17 inch, ADC'; }
		if ($serial == 'JAM') { $description = 'Apple Studio Display 17 inch, ADC'; }
		if ($serial == 'JAN') { $description = 'Apple Studio Display 17 inch, ADC'; }
		if ($serial == 'JAR') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'JAS') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'JAT') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'JAU') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'JAV') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'JB0') { $description = 'iMac DV Special Edition (Summer 2000)'; }
		if ($serial == 'JBD') { $description = 'PowerBook G4'; }
		if ($serial == 'JDZ') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'JEC') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'JED') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'JEE') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'JEK') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'JEL') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'JEM') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'JEN') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'JF8') { $description = 'PowerBook G4'; }
		if ($serial == 'JFN') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'JFP') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'JFQ') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'JG0') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'JJ1') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'JJ2') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'JMJ') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'JMP') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'JMQ') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'JMR') { $description = 'iMac DV Special Edition (Summer 2000)'; }
		if ($serial == 'JMS') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'JMT') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'JMU') { $description = 'iMac DV Special Edition (Summer 2000)'; }
		if ($serial == 'JMV') { $description = 'Power Mac G4 Server (Gigabit)'; }
		if ($serial == 'JMW') { $description = 'Power Mac G4 Server (Gigabit)'; }
		if ($serial == 'JNW') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'JNX') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'JPC') { $description = 'Apple Studio Display 15 inch, ADC'; }
		if ($serial == 'JPR') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'JQ5') { $description = 'iBook (Firewire)'; }
		if ($serial == 'JQF') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'JQH') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'JQJ') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'JQK') { $description = 'iMac DV Special Edition (Summer 2000)'; }
		if ($serial == 'JQZ') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'JR0') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'JR2') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'JR3') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'JR5') { $description = 'iMac DV Special Edition (Summer 2000)'; }
		if ($serial == 'JR6') { $description = 'iMac DV Special Edition (Summer 2000)'; }
		if ($serial == 'JRH') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'JSC') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'JST') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'JU6') { $description = 'iBook (Firewire)'; }
		if ($serial == 'JU8') { $description = 'Apple Cinema Display ADC'; }
		if ($serial == 'JUB') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'JUC') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'JUL') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'JUR') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'JUX') { $description = 'iMac DV Special Edition (Slot Loading)'; }
		if ($serial == 'JV3') { $description = 'iMac DV (Slot Loading)'; }
		if ($serial == 'JV5') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'JV6') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'JV7') { $description = 'iMac DV Special Edition (Summer 2000)'; }
		if ($serial == 'JV8') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'JV9') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'JVA') { $description = 'iMac DV Special Edition (Summer 2000)'; }
		if ($serial == 'JVF') { $description = 'Power Mac G4 Server'; }
		if ($serial == 'JVG') { $description = 'iMac (Summer 2000)'; }
		if ($serial == 'JVK') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'JVL') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'JVM') { $description = 'iMac DV Special Edition (Summer 2000)'; }
		if ($serial == 'JVN') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'JVP') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'JVQ') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'JVR') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'JW2') { $description = 'Power Mac G4 Server (Gigabit)'; }
		if ($serial == 'JW3') { $description = 'Power Mac G4 Server (Gigabit)'; }
		if ($serial == 'JW4') { $description = 'Power Mac G4 Server (Gigabit)'; }
		if ($serial == 'JWQ') { $description = 'iMac (Summer 2000)'; }
		if ($serial == 'JXX') { $description = 'PowerBook G4'; }
		if ($serial == 'JXY') { $description = 'PowerBook G4'; }
		if ($serial == 'JXZ') { $description = 'PowerBook G4'; }
		if ($serial == 'JY0') { $description = 'PowerBook G4'; }
		if ($serial == 'JY5') { $description = 'iMac DV Special Edition (Summer 2000)'; }
		if ($serial == 'JY6') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'JY7') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'JY8') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'JY9') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'JYG') { $description = 'iMac (Summer 2000)'; }
		if ($serial == 'JYH') { $description = 'iMac (Summer 2000)'; }
		if ($serial == 'JYN') { $description = 'Power Mac G4 Server (Gigabit)'; }
		if ($serial == 'JYV') { $description = 'DVD Studio Pro'; }
		if ($serial == 'JYX') { $description = 'DVD Studio Pro'; }
		if ($serial == 'JYY') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'JZF') { $description = 'Apple Studio Display 17 inch, ADC'; }
		if ($serial == 'JZG') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'JZV') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'K1B') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'K1D') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'K1E') { $description = 'Power Mac G4 (AGP Graphics)'; }
		if ($serial == 'K1L') { $description = 'iBook (Firewire)'; }
		if ($serial == 'K2N') { $description = 'iMac (Summer 2000)'; }
		if ($serial == 'K2P') { $description = 'iMac (Summer 2000)'; }
		if ($serial == 'K2Q') { $description = 'iMac (Summer 2000)'; }
		if ($serial == 'K2R') { $description = 'iMac (Summer 2000)'; }
		if ($serial == 'K34') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'K35') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'K38') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'K3U') { $description = 'Apple Studio Display 17 inch, ADC'; }
		if ($serial == 'K45') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'K4L') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'K4R') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'K4Y') { $description = 'Power Mac G4 Server (Digital Audio)'; }
		if ($serial == 'K4Z') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K50') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K51') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K53') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K59') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'K5A') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K5B') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K5C') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K5F') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'K5G') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'K5M') { $description = 'iBook (Firewire)'; }
		if ($serial == 'K5V') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K5W') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K5X') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K5Z') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K63') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K68') { $description = 'PowerBook G4'; }
		if ($serial == 'K69') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K6A') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'K6B') { $description = 'PowerBook G4'; }
		if ($serial == 'K6J') { $description = 'PowerBook (FireWire)'; }
		if ($serial == 'K6K') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'K6M') { $description = 'Power Mac G4 Server (Digital Audio)'; }
		if ($serial == 'K6P') { $description = 'Power Mac G4 Server (Gigabit)'; }
		if ($serial == 'K6R') { $description = 'Power Mac G4 Server (Gigabit)'; }
		if ($serial == 'K6T') { $description = 'Power Mac G4 Server (Gigabit)'; }
		if ($serial == 'K6V') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'K6W') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'K6X') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'K6Y') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'K6Z') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'K70') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'K72') { $description = 'Power Mac G4 Server (Digital Audio)'; }
		if ($serial == 'K73') { $description = 'Power Mac G4 Server (Digital Audio)'; }
		if ($serial == 'K74') { $description = 'Power Mac G4 Server (Digital Audio)'; }
		if ($serial == 'K86') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K8H') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K8J') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K8K') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K8S') { $description = 'Power Mac G4 Server (Gigabit)'; }
		if ($serial == 'K97') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'K98') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'K9F') { $description = 'PowerBook G4'; }
		if ($serial == 'K9G') { $description = 'PowerBook G4'; }
		if ($serial == 'KAG') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'KAH') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'KAJ') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'KAK') { $description = 'iMac DV Special Edition (Summer 2000)'; }
		if ($serial == 'KAM') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KAN') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KAP') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KB6') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'KB7') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'KB8') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'KBD') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'KBJ') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'KDC') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KDE') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KDF') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'KHS') { $description = 'Power Mac G4 Server (Digital Audio)'; }
		if ($serial == 'KHT') { $description = 'Power Mac G4 Server (Digital Audio)'; }
		if ($serial == 'KHU') { $description = 'Power Mac G4 Server (Digital Audio)'; }
		if ($serial == 'KJB') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJG') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJH') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJJ') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJK') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJL') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJM') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJN') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJP') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJQ') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJR') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJS') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJT') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJU') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJV') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KJY') { $description = 'PowerBook G3'; }
		if ($serial == 'KKY') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KKZ') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KL1') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KLB') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KLS') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'KLT') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KLU') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KLW') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KLX') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KM3') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KM5') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KM9') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KMA') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KMD') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KME') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'KNV') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'KNW') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'KNX') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'KNY') { $description = 'Power Mac G4 (Gigabit Ethernet)'; }
		if ($serial == 'KPF') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KPG') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KPH') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KPJ') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KPM') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KPN') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KPP') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KPQ') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KPW') { $description = 'Apple Studio Display 17 inch, LCD'; }
		if ($serial == 'KQ3') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'KQ6') { $description = 'iMac DV+ (Summer 2000)'; }
		if ($serial == 'KQA') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KQG') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KQH') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KQJ') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KQK') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KQL') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KQM') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'KQN') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'KQQ') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KSD') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'KSJ') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'KSK') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'KSL') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'KT2') { $description = 'iBook (Firewire)'; }
		if ($serial == 'KT3') { $description = 'iBook (Firewire)'; }
		if ($serial == 'KT8') { $description = 'iBook (Firewire)'; }
		if ($serial == 'KTA') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTB') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTC') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTD') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTE') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTF') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTG') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTH') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTJ') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTK') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTL') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTM') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTN') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTP') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTQ') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTR') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTS') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KTT') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KUA') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'KVB') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'KVC') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KVF') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'KVH') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'KVJ') { $description = 'Power Mac G4 Server (QuickSilver)'; }
		if ($serial == 'KVM') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'KVN') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'KW3') { $description = 'Mac OS X 10.0'; }
		if ($serial == 'KWE') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KWF') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KWG') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KWH') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KWT') { $description = 'iBook (Firewire)'; }
		if ($serial == 'KWV') { $description = 'iBook (Firewire)'; }
		if ($serial == 'KX0') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'KX3') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KX5') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KXQ') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KXR') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KXS') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KXV') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KXW') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KXX') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KXY') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KXZ') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'KYC') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KYD') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KYE') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KYJ') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'KYK') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KYS') { $description = 'Final Cut Pro 2.0'; }
		if ($serial == 'KYT') { $description = 'Final Cut Pro 2.0'; }
		if ($serial == 'KYV') { $description = 'Final Cut Pro 2.0'; }
		if ($serial == 'KYZ') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KZ0') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'KZ2') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KZ3') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'KZ4') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'L09') { $description = 'AppleWorks 6.1'; }
		if ($serial == 'L0E') { $description = 'AppleWorks 6.1'; }
		if ($serial == 'L0F') { $description = 'AppleWorks 6.1'; }
		if ($serial == 'L0G') { $description = 'AppleWorks 6.1'; }
		if ($serial == 'L0H') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'L0J') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'L0K') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'L0L') { $description = 'AppleShare IP 6.3.3'; }
		if ($serial == 'L0M') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'L12') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L13') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L1Z') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'L2C') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L2D') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L2E') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L2F') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L2G') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L2J') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'L2K') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'L2M') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'L2N') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'L2T') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'L2V') { $description = 'iBook (14.1 LCD)'; }
		if ($serial == 'L2W') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L2Z') { $description = 'iMac DV (Summer 2000)'; }
		if ($serial == 'L30') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L31') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L36') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L37') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L38') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L39') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L3C') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'L3D') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L3E') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'L3V') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'L40') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'L49') { $description = 'iMac (17 inch, Flat Panel)'; }
		if ($serial == 'L4C') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'L4G') { $description = 'iMac (17 inch, Flat Panel)'; }
		if ($serial == 'L4L') { $description = 'iMac (17 inch, Flat Panel)'; }
		if ($serial == 'L4V') { $description = 'Power Mac G4 Server (Digital Audio)'; }
		if ($serial == 'L4Y') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'L4Z') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'L50') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'L51') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'L52') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'L53') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'L5A') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L5C') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L5E') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L5G') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L5M') { $description = 'PowerBook G4'; }
		if ($serial == 'L5T') { $description = 'Final Cut Pro 2.0'; }
		if ($serial == 'L5U') { $description = 'Final Cut Pro 2.0'; }
		if ($serial == 'L5V') { $description = 'Final Cut Pro 2.0'; }
		if ($serial == 'L65') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'L6C') { $description = 'WebObjects 5'; }
		if ($serial == 'L6D') { $description = 'WebObjects 5'; }
		if ($serial == 'L6E') { $description = 'WebObjects 5'; }
		if ($serial == 'L6F') { $description = 'WebObjects 5'; }
		if ($serial == 'L6G') { $description = 'WebObjects 5'; }
		if ($serial == 'L6H') { $description = 'WebObjects 5'; }
		if ($serial == 'L6J') { $description = 'WebObjects 5'; }
		if ($serial == 'L6K') { $description = 'WebObjects 5'; }
		if ($serial == 'L6L') { $description = 'WebObjects 5'; }
		if ($serial == 'L6M') { $description = 'WebObjects 5'; }
		if ($serial == 'L6N') { $description = 'WebObjects 5'; }
		if ($serial == 'L6Q') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'L6R') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'L6U') { $description = 'PowerBook G4'; }
		if ($serial == 'L6V') { $description = 'PowerBook G4'; }
		if ($serial == 'L6Y') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'L7A') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L7B') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'L7C') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'L7D') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'L7E') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'L7F') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'L7G') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'L7H') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'L7L') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'L7M') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'L7N') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'L7P') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'L7Q') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'L7R') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'L81') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'L86') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'L88') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'L8G') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'L8H') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'L8X') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'L8Y') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'L8Z') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'L90') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'L91') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'L92') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'L95') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'L98') { $description = 'PowerBook G4'; }
		if ($serial == 'L99') { $description = 'PowerBook G4'; }
		if ($serial == 'L9A') { $description = 'PowerBook G4'; }
		if ($serial == 'L9B') { $description = 'PowerBook G4'; }
		if ($serial == 'L9D') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'L9E') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LAL') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LAM') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LAN') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LAP') { $description = 'PowerBook G4'; }
		if ($serial == 'LAQ') { $description = 'PowerBook G4'; }
		if ($serial == 'LAS') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LAU') { $description = 'PowerBook G4'; }
		if ($serial == 'LB1') { $description = 'Apple Studio Display 17 inch, LCD'; }
		if ($serial == 'LB2') { $description = 'Apple Studio Display 17 inch, LCD'; }
		if ($serial == 'LB6') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LB7') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LBB') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LBG') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LBH') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LBJ') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LBL') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LBM') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LBN') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LBP') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LBR') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LBT') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LBU') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'LBW') { $description = 'PowerBook G4'; }
		if ($serial == 'LC3') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LC9') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LCA') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LCB') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LCC') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LCD') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LCE') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'LCF') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'LCW') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'LCX') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LCZ') { $description = 'DVD Studio Pro'; }
		if ($serial == 'LD2') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'LD3') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'LD5') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'LD6') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'LD7') { $description = 'Mac OS X Server 10.0'; }
		if ($serial == 'LDG') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LDZ') { $description = 'AppleWorks 6.1'; }
		if ($serial == 'LED') { $description = 'AppleWorks 6.2 for Mac OS X'; }
		if ($serial == 'LF4') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'LF6') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'LF9') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'LFA') { $description = 'Apple Cinema HD Disp 23'; }
		if ($serial == 'LFB') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LFC') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LFD') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LFH') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LFJ') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'LFL') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LFR') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LFS') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LFT') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LFU') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LFV') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LFW') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LFX') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LFY') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LFZ') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LG0') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LG1') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LG2') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LG3') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LG4') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LG6') { $description = 'iPod (5 GB Scroll Wheel)'; }
		if ($serial == 'LG8') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LG9') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LGA') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LGB') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LGC') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LGD') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LGE') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LGG') { $description = 'PowerBook G4'; }
		if ($serial == 'LGO') { $description = 'iMac (Early 2001)'; }
		if ($serial == 'LGQ') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LGR') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LGS') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LGT') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LGY') { $description = 'Power Mac G4 Server (QuickSilver)'; }
		if ($serial == 'LGZ') { $description = 'Power Mac G4 Server (QuickSilver)'; }
		if ($serial == 'LH8') { $description = 'AirPort Card'; }
		if ($serial == 'LHB') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LHC') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LHD') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LHW') { $description = 'PowerBook G4'; }
		if ($serial == 'LHX') { $description = 'PowerBook G4'; }
		if ($serial == 'LHY') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'LJQ') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'LJR') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'LJS') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'LKB') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'LKC') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'LL3') { $description = 'eMac'; }
		if ($serial == 'LL6') { $description = 'eMac'; }
		if ($serial == 'LL7') { $description = 'eMac'; }
		if ($serial == 'LL8') { $description = 'iBook (14.1 LCD)'; }
		if ($serial == 'LL9') { $description = 'iBook (14.1 LCD)'; }
		if ($serial == 'LLA') { $description = 'iBook (14.1 LCD)'; }
		if ($serial == 'LLB') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LLD') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LLH') { $description = 'Power Mac G4 Server (QuickSilver)'; }
		if ($serial == 'LLJ') { $description = 'Power Mac G4 Server (QuickSilver)'; }
		if ($serial == 'LLK') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LLL') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LLN') { $description = 'iBook (14.1 LCD)'; }
		if ($serial == 'LLP') { $description = 'PowerBook G4'; }
		if ($serial == 'LLR') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LLS') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LLT') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LMS') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LMT') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LMZ') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LN0') { $description = 'PowerBook G4'; }
		if ($serial == 'LN9') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'LNA') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'LNB') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'LNC') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'LND') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'LNE') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'LNM') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LNQ') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'LNR') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'LNS') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'LNT') { $description = 'Final Cut Pro 2.0'; }
		if ($serial == 'LNV') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'LNW') { $description = 'Mac OS X Server 10.1 (Xserve)'; }
		if ($serial == 'LNX') { $description = 'Mac OS X Server 10.1'; }
		if ($serial == 'LOM') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'LON') { $description = 'Power Mac G4 (Digital Audio)'; }
		if ($serial == 'LP0') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LP1') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'LP4') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'LP5') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'LP6') { $description = 'AirPort Card'; }
		if ($serial == 'LP8') { $description = 'AirPort Card'; }
		if ($serial == 'LPV') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LPW') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LPX') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LPY') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LPZ') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LQ0') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'LQ2') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'LQ3') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'LQ4') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'LQ5') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'LQ6') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'LQ7') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LQ8') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LQO') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'LQY') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LQZ') { $description = 'PowerBook G4'; }
		if ($serial == 'LR1') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'LR3') { $description = 'Power Mac G4 (Cube)'; }
		if ($serial == 'LR5') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LR6') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LR7') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LR8') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'LRC') { $description = 'Power Mac G4 Server (QuickSilver)'; }
		if ($serial == 'LRD') { $description = 'Power Mac G4 Server (QuickSilver)'; }
		if ($serial == 'LRF') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LRG') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LRL') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LRX') { $description = 'eMac'; }
		if ($serial == 'LRZ') { $description = 'eMac'; }
		if ($serial == 'LUJ') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LUK') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LUL') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LUX') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'LUY') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'LUZ') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'LV7') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LWW') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'LXZ') { $description = 'WebObjects 5'; }
		if ($serial == 'LY0') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'LY1') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'LYV') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'LYY') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LYZ') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LZ0') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LZ1') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LZ2') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LZ3') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LZ4') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LZ5') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LZ6') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'LZD') { $description = 'Xserve'; }
		if ($serial == 'LZE') { $description = 'Xserve'; }
		if ($serial == 'LZF') { $description = 'Xserve'; }
		if ($serial == 'LZO') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'M0E') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'M0F') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'M0L') { $description = 'WebObjects 5'; }
		if ($serial == 'M0Q') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'M11') { $description = 'iMac G5 (20-Inch iSight)'; }
		if ($serial == 'M16') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'M17') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'M1P') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'M1Q') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'M1R') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'M1S') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'M1X') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'M1Y') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'M22') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'M23') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'M24') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'M25') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'M26') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'M27') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'M28') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'M29') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'M2C') { $description = 'AirPort Base Station (Dual Ethernet)'; }
		if ($serial == 'M2D') { $description = 'AirPort Base Station (Dual Ethernet)'; }
		if ($serial == 'M2E') { $description = 'AirPort Base Station (Dual Ethernet)'; }
		if ($serial == 'M2F') { $description = 'AirPort Base Station (Dual Ethernet)'; }
		if ($serial == 'M2G') { $description = 'AirPort Base Station (Dual Ethernet)'; }
		if ($serial == 'M2M') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'M2N') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'M2P') { $description = 'PowerBook G4'; }
		if ($serial == 'M2Q') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'M2R') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'M31') { $description = 'AirPort Base Station (Dual Ethernet)'; }
		if ($serial == 'M32') { $description = 'AirPort Base Station (Dual Ethernet)'; }
		if ($serial == 'M33') { $description = 'Power Mac G4 Server (QuickSilver 2002)'; }
		if ($serial == 'M34') { $description = 'Power Mac G4 Server (QuickSilver 2002)'; }
		if ($serial == 'M35') { $description = 'Power Mac G4 Server (QuickSilver 2002)'; }
		if ($serial == 'M36') { $description = 'Power Mac G4 Server (QuickSilver 2002)'; }
		if ($serial == 'M37') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'M38') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'M39') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'M3B') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'M3F') { $description = 'iBook (Dual USB)'; }
		if ($serial == 'M3Z') { $description = 'AirPort Base Station (Dual Ethernet)'; }
		if ($serial == 'M40') { $description = 'AirPort Base Station (Dual Ethernet)'; }
		if ($serial == 'M47') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'M48') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'M4B') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'M4K') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'M4L') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'M4M') { $description = 'eMac'; }
		if ($serial == 'M4Q') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'M4R') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'M4S') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'M55') { $description = 'Apple Remote Desktop 1.x'; }
		if ($serial == 'M58') { $description = 'Power Mac G4 Server (QuickSilver 2002)'; }
		if ($serial == 'M59') { $description = 'Power Mac G4 Server (QuickSilver 2002)'; }
		if ($serial == 'M5C') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'M5E') { $description = 'Power Mac Server G4 (Mirrored Drive Doors)'; }
		if ($serial == 'M5L') { $description = 'Power Mac Server G4 (Mirrored Drive Doors)'; }
		if ($serial == 'M5R') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'M5U') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'M5V') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'M6R') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'M6S') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'M79') { $description = 'Power Mac G4 Server (QuickSilver)'; }
		if ($serial == 'M7G') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'M7W') { $description = 'Power Mac G4 Server (QuickSilver)'; }
		if ($serial == 'M7Y') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'M80') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'M81') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'M8E') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'M8F') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'M8G') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'M8H') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'M8K') { $description = 'Xserve RAID'; }
		if ($serial == 'M8L') { $description = 'Xserve RAID'; }
		if ($serial == 'M8M') { $description = 'Xserve RAID'; }
		if ($serial == 'M98') { $description = 'Xserve RAID'; }
		if ($serial == 'MAA') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'MAB') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'MAC') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'MAD') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'MAE') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'MAF') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'MAH') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'MAJ') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MAK') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MAL') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MAM') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MAN') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MAP') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MAQ') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MAS') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MAT') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MAY') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MB6') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MBG') { $description = 'Power Mac Server G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MBQ') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MBR') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MBS') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MBW') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MCW') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MCX') { $description = 'DVI to ADC Adapter'; }
		if ($serial == 'MD5') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MDC') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MDE') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MDF') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MDG') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MDH') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MDJ') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MDL') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MDM') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MDN') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MDP') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MDT') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MDU') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MDV') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MDW') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'ME1') { $description = 'iBook (14.1 LCD)'; }
		if ($serial == 'ME2') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'ME4') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'ME5') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'ME6') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'ME8') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MEE') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'MEG') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MEJ') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MEK') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MEL') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MES') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MET') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MEU') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MEV') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MEW') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MEX') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MEY') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MEZ') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MFM') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MFV') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MFW') { $description = 'Power Mac G4 (QuickSilver 2002ED)'; }
		if ($serial == 'MFX') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MGB') { $description = 'Power Mac Server G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MGC') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MGD') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MGE') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MGF') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MGH') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MGJ') { $description = 'iBook (14.1 LCD)'; }
		if ($serial == 'MGK') { $description = 'iBook (14.1 LCD)'; }
		if ($serial == 'MGL') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'MGQ') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'MGR') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'MGS') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'MGT') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'MGU') { $description = 'PowerBook G4 (Gigabit Ethernet)'; }
		if ($serial == 'MHB') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MHC') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MHD') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MHE') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MHF') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MHG') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MHH') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MHJ') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MHK') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MHL') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MHM') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MHN') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MHP') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MHQ') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MHR') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MHS') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MHT') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MHU') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MHV') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MHW') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MJ2') { $description = 'iPod (5 GB Touchwheel, Win)'; }
		if ($serial == 'MJ3') { $description = 'Final Cut Pro 3.0'; }
		if ($serial == 'MJ4') { $description = 'Apple Remote Desktop 1.x'; }
		if ($serial == 'MJ7') { $description = 'iPod (5 GB Scroll Wheel Personalized)'; }
		if ($serial == 'MJF') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MJG') { $description = 'Power Mac G4 (QuickSilver)'; }
		if ($serial == 'MJM') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MJP') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MK3') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MK5') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MK6') { $description = 'DVD Studio Pro'; }
		if ($serial == 'MK7') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MK8') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MK9') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MKZ') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'ML1') { $description = 'iPod (10 GB Scroll Wheel)'; }
		if ($serial == 'ML4') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MLQ') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MM3') { $description = 'DVD Studio Pro'; }
		if ($serial == 'MM5') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MM6') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'MM7') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MM8') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MM9') { $description = 'Power Mac G4 (QuickSilver 2002ED)'; }
		if ($serial == 'MMA') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MMB') { $description = 'iPod (10 GB Touchwheel)'; }
		if ($serial == 'MMC') { $description = 'iPod (20 GB Touchwheel)'; }
		if ($serial == 'MME') { $description = 'iPod (10 GB Touchwheel, Win)'; }
		if ($serial == 'MMF') { $description = 'iPod (20 GB Touchwheel, Win)'; }
		if ($serial == 'MQ4') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MQ8') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MQ9') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MQA') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MQH') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MQV') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MR7') { $description = 'Power Mac Server G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MR8') { $description = 'Power Mac Server G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MRB') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'MRC') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'MRD') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'MRE') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'MRF') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'MRG') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'MRH') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'MRJ') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'MRK') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'MRN') { $description = 'Power Mac G4 (QuickSilver 2002ED)'; }
		if ($serial == 'MRR') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'MRT') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'MRV') { $description = 'iPod (5 GB Touchwheel, Win, Personalized)'; }
		if ($serial == 'MRW') { $description = 'iPod (10 GB Scroll Wheel Personalized)'; }
		if ($serial == 'MS7') { $description = 'iBook (14.1 LCD)'; }
		if ($serial == 'MT3') { $description = 'Cinema Tools 1.X'; }
		if ($serial == 'MT4') { $description = 'Cinema Tools 1.X'; }
		if ($serial == 'MT5') { $description = 'Cinema Tools 1.X'; }
		if ($serial == 'MT7') { $description = 'Cinema Tools 1.X'; }
		if ($serial == 'MT8') { $description = 'Cinema Tools 1.X'; }
		if ($serial == 'MT9') { $description = 'Cinema Tools 1.X'; }
		if ($serial == 'MTW') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'MTX') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'MTY') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'MTZ') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'MU0') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'MU1') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'MU4') { $description = 'eMac'; }
		if ($serial == 'MU5') { $description = 'eMac'; }
		if ($serial == 'MUF') { $description = 'eMac'; }
		if ($serial == 'MUG') { $description = 'eMac'; }
		if ($serial == 'MUH') { $description = 'eMac'; }
		if ($serial == 'MUM') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MUS') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MUT') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MUU') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MUV') { $description = 'iBook (14.1 LCD)'; }
		if ($serial == 'MV7') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MV8') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MV9') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MVN') { $description = 'Xserve'; }
		if ($serial == 'MVP') { $description = 'Xserve'; }
		if ($serial == 'MVV') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'MVZ') { $description = 'PowerBook G4 (17-inch)'; }
		if ($serial == 'MW0') { $description = 'PowerBook G4 (17-inch)'; }
		if ($serial == 'MW3') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'MW5') { $description = 'AppleWorks 6.2 for Mac OS X'; }
		if ($serial == 'MW6') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'MW7') { $description = 'iBook (14.1 LCD)'; }
		if ($serial == 'MW8') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MW9') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MWC') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'MWD') { $description = 'Mac OS X 10.2'; }
		if ($serial == 'MWO') { $description = 'PowerBook G4 (17-inch)'; }
		if ($serial == 'MXD') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MXE') { $description = 'Power Mac Server G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MXM') { $description = 'eMac'; }
		if ($serial == 'MXN') { $description = 'eMac'; }
		if ($serial == 'MXP') { $description = 'eMac'; }
		if ($serial == 'MXQ') { $description = 'eMac'; }
		if ($serial == 'MXR') { $description = 'eMac'; }
		if ($serial == 'MXS') { $description = 'eMac'; }
		if ($serial == 'MXT') { $description = 'eMac'; }
		if ($serial == 'MXU') { $description = 'eMac'; }
		if ($serial == 'MXV') { $description = 'eMac'; }
		if ($serial == 'MXW') { $description = 'eMac'; }
		if ($serial == 'MXX') { $description = 'eMac'; }
		if ($serial == 'MXY') { $description = 'eMac'; }
		if ($serial == 'MXZ') { $description = 'eMac'; }
		if ($serial == 'MYK') { $description = 'Mac OS X Server 10.2'; }
		if ($serial == 'MYM') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MYN') { $description = 'PowerBook G4 (17-inch)'; }
		if ($serial == 'MYT') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MYU') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MYV') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'MYW') { $description = 'Power Mac G4 (QuickSilver 2002ED)'; }
		if ($serial == 'MYX') { $description = 'iPod (10 GB Touchwheel, Personalized)'; }
		if ($serial == 'MYY') { $description = 'iPod (20 GB Touchwheel, Personalized)'; }
		if ($serial == 'MYZ') { $description = 'iPod (10 GB Touchwheel , Win, Personalized)'; }
		if ($serial == 'MZ0') { $description = 'iPod (20 GB Touchwheel , Win, Personalized)'; }
		if ($serial == 'MZ2') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'MZ3') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'MZ9') { $description = 'iMac (17 inch, Flat Panel)'; }
		if ($serial == 'MZD') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MZG') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'MZL') { $description = 'iSight'; }
		if ($serial == 'MZP') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'N0J') { $description = 'AppleWorks 6.2 for Mac OS X'; }
		if ($serial == 'N0K') { $description = 'AppleWorks 6.2 for Mac OS X'; }
		if ($serial == 'N0L') { $description = 'AppleWorks 6.2 for Mac OS X'; }
		if ($serial == 'N0N') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'N0Q') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'N0S') { $description = 'iMac (17 inch, Flat Panel)'; }
		if ($serial == 'N0Z') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'N1E') { $description = 'Mac OS X Server 10.2'; }
		if ($serial == 'N1F') { $description = 'Mac OS X Server 10.2'; }
		if ($serial == 'N1G') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'N1H') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'N1L') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'N1N') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'N1S') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'N1W') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'N1X') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'N1Y') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'N2B') { $description = 'eMac'; }
		if ($serial == 'N2C') { $description = 'eMac'; }
		if ($serial == 'N2K') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'N3B') { $description = 'eMac'; }
		if ($serial == 'N3C') { $description = 'eMac'; }
		if ($serial == 'N3D') { $description = 'eMac'; }
		if ($serial == 'N3F') { $description = 'iBook (Late 2001)'; }
		if ($serial == 'N3Q') { $description = 'Mac OS X Server 10.2'; }
		if ($serial == 'N3R') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'N3S') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'N3T') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'N3U') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'N3Z') { $description = 'eMac'; }
		if ($serial == 'N43') { $description = 'Power Mac G4 Server (QuickSilver 2002)'; }
		if ($serial == 'N44') { $description = 'Power Mac G4 Server (QuickSilver 2002)'; }
		if ($serial == 'N45') { $description = 'Xserve'; }
		if ($serial == 'N47') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'N48') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'N49') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'N4A') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'N4B') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'N4C') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'N4D') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'N4F') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'N4K') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'N4L') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'N4M') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'N4P') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'N4Q') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'N4R') { $description = 'iBook (14.1 LCD 32 VRAM)'; }
		if ($serial == 'N4S') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'N4T') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'N4U') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'N53') { $description = 'eMac'; }
		if ($serial == 'N54') { $description = 'eMac'; }
		if ($serial == 'N55') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'N56') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'N57') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'N58') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'N59') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'N5A') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'N5B') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'N5C') { $description = 'iBook (14.1 LCD 32 VRAM)'; }
		if ($serial == 'N60') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'N61') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'N65') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'N6A') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'N6B') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'N6P') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'N6S') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'N6W') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'N6X') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'N6Y') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'N74') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'N77') { $description = 'AppleWorks 5'; }
		if ($serial == 'N78') { $description = 'AppleWorks 5'; }
		if ($serial == 'N79') { $description = 'Mac OS X 10.1'; }
		if ($serial == 'N7K') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'N7L') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'N7M') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'N7N') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'N7P') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'N7Q') { $description = 'Xserve'; }
		if ($serial == 'N7R') { $description = 'Xserve'; }
		if ($serial == 'N7S') { $description = 'Xserve'; }
		if ($serial == 'N7T') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'N7V') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'N7X') { $description = 'Mac OS X Server 10.2'; }
		if ($serial == 'N83') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'N88') { $description = 'iMac (17 inch, Flat Panel)'; }
		if ($serial == 'N89') { $description = 'iMac (17 inch, Flat Panel)'; }
		if ($serial == 'N8A') { $description = 'iMac (17 inch, Flat Panel)'; }
		if ($serial == 'N8B') { $description = 'iMac (17 inch, Flat Panel)'; }
		if ($serial == 'N8D') { $description = 'Apple Remote Desktop 1.x'; }
		if ($serial == 'N8E') { $description = 'Apple Remote Desktop 1.x'; }
		if ($serial == 'N8F') { $description = 'Apple Remote Desktop 1.x'; }
		if ($serial == 'N8H') { $description = 'Apple Remote Desktop 1.x'; }
		if ($serial == 'N8J') { $description = 'Mac OS X 10.2'; }
		if ($serial == 'N8M') { $description = 'eMac'; }
		if ($serial == 'N8W') { $description = 'eMac'; }
		if ($serial == 'N8X') { $description = 'eMac'; }
		if ($serial == 'N8Y') { $description = 'eMac'; }
		if ($serial == 'N9A') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'N9B') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'N9C') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'N9D') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'N9J') { $description = 'eMac'; }
		if ($serial == 'N9K') { $description = 'eMac'; }
		if ($serial == 'N9L') { $description = 'eMac'; }
		if ($serial == 'N9Z') { $description = 'Xserve'; }
		if ($serial == 'NA2') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NA4') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'NA5') { $description = 'Xserve'; }
		if ($serial == 'NA6') { $description = 'Xserve'; }
		if ($serial == 'NAD') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'NAE') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NAF') { $description = 'Apple Cinema Display (20-inch)'; }
		if ($serial == 'NAH') { $description = 'eMac'; }
		if ($serial == 'NAJ') { $description = 'eMac'; }
		if ($serial == 'NAK') { $description = 'eMac'; }
		if ($serial == 'NAL') { $description = 'eMac'; }
		if ($serial == 'NAM') { $description = 'iPod (5 GB Scroll Wheel)'; }
		if ($serial == 'NAN') { $description = 'iPod (5 GB Scroll Wheel Personalized)'; }
		if ($serial == 'NAP') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NAQ') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'NAR') { $description = 'Power Mac G4 (QuickSilver 2002)'; }
		if ($serial == 'NAS') { $description = 'eMac'; }
		if ($serial == 'NAT') { $description = 'eMac'; }
		if ($serial == 'NAV') { $description = 'eMac'; }
		if ($serial == 'NAW') { $description = 'eMac'; }
		if ($serial == 'NAX') { $description = 'eMac'; }
		if ($serial == 'NB1') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'NB2') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'NB3') { $description = 'iMac (17 inch, Flat Panel)'; }
		if ($serial == 'NB4') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'NBC') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NBL') { $description = 'Xserve RAID'; }
		if ($serial == 'NBM') { $description = 'Xserve RAID'; }
		if ($serial == 'NBN') { $description = 'Xserve RAID'; }
		if ($serial == 'NBZ') { $description = 'DVD Studio Pro'; }
		if ($serial == 'NC0') { $description = 'eMac'; }
		if ($serial == 'NC1') { $description = 'eMac'; }
		if ($serial == 'NC2') { $description = 'eMac'; }
		if ($serial == 'NC3') { $description = 'eMac'; }
		if ($serial == 'NC4') { $description = 'eMac'; }
		if ($serial == 'NC6') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'NC8') { $description = 'eMac'; }
		if ($serial == 'NCA') { $description = 'eMac'; }
		if ($serial == 'NCM') { $description = 'eMac'; }
		if ($serial == 'NCN') { $description = 'eMac'; }
		if ($serial == 'NCP') { $description = 'eMac'; }
		if ($serial == 'NCQ') { $description = 'eMac'; }
		if ($serial == 'NCR') { $description = 'eMac'; }
		if ($serial == 'NCS') { $description = 'eMac'; }
		if ($serial == 'ND1') { $description = 'Xserve'; }
		if ($serial == 'ND2') { $description = 'Xserve'; }
		if ($serial == 'ND7') { $description = 'Mac OS X 10.2'; }
		if ($serial == 'NDF') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'NDG') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'NDH') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'NDJ') { $description = 'Mac OS X Server 10.2'; }
		if ($serial == 'NDM') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'NDN') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'NDP') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'NDQ') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'NDR') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'NDS') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'NDT') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'NDU') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'NDV') { $description = 'iBook (14.1 LCD 32 VRAM)'; }
		if ($serial == 'NDW') { $description = 'iBook (14.1 LCD 32 VRAM)'; }
		if ($serial == 'NDX') { $description = 'iBook (14.1 LCD 32 VRAM)'; }
		if ($serial == 'NDY') { $description = 'Mac OS X Server 10.2'; }
		if ($serial == 'NDZ') { $description = 'Mac OS X Server 10.2'; }
		if ($serial == 'NE0') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'NED') { $description = 'eMac'; }
		if ($serial == 'NEM') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NEN') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NF4') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NF5') { $description = 'Power Mac G4 (QuickSilver 2002ED)'; }
		if ($serial == 'NFT') { $description = 'Apple Remote Desktop 1.x'; }
		if ($serial == 'NFV') { $description = 'Apple Remote Desktop 1.x'; }
		if ($serial == 'NFW') { $description = 'Apple Remote Desktop 1.x'; }
		if ($serial == 'NFX') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NFY') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'NFZ') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'NGD') { $description = 'iPod (5 GB Scroll Wheel)'; }
		if ($serial == 'NGE') { $description = 'iPod (10 GB Touchwheel)'; }
		if ($serial == 'NGF') { $description = 'iPod (20 GB Touchwheel)'; }
		if ($serial == 'NGG') { $description = 'iPod (5 GB Touchwheel, Win)'; }
		if ($serial == 'NGH') { $description = 'iPod (10 GB Touchwheel, Win)'; }
		if ($serial == 'NGJ') { $description = 'iPod (20 GB Touchwheel, Win)'; }
		if ($serial == 'NGK') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NGL') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NGM') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NGN') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NGP') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NGQ') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NH2') { $description = 'eMac'; }
		if ($serial == 'NH9') { $description = 'WebObjects 5'; }
		if ($serial == 'NHA') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NHD') { $description = 'Power Mac Server G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NHG') { $description = 'eMac'; }
		if ($serial == 'NHH') { $description = 'eMac'; }
		if ($serial == 'NHJ') { $description = 'Mac OS X 10.2'; }
		if ($serial == 'NHL') { $description = 'Apple Remote Desktop 1.x'; }
		if ($serial == 'NHN') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NHP') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NHX') { $description = 'iMac (17-inch, 1GHz)'; }
		if ($serial == 'NJ0') { $description = 'iMac (17-inch, 1GHz)'; }
		if ($serial == 'NJ1') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NJN') { $description = 'Xserve'; }
		if ($serial == 'NJQ') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NJV') { $description = 'Xserve'; }
		if ($serial == 'NK8') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'NK9') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'NKA') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'NKL') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'NKM') { $description = 'PowerBook G4 (DVI)'; }
		if ($serial == 'NKU') { $description = 'eMac'; }
		if ($serial == 'NKV') { $description = 'eMac'; }
		if ($serial == 'NKZ') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NL1') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NL5') { $description = 'PowerBook G4 (17-inch)'; }
		if ($serial == 'NL6') { $description = 'PowerBook G4 (17-inch)'; }
		if ($serial == 'NL7') { $description = 'PowerBook G4 (17-inch)'; }
		if ($serial == 'NL8') { $description = 'iMac (17-inch, 1GHz)'; }
		if ($serial == 'NL9') { $description = 'iMac (17-inch, 1GHz)'; }
		if ($serial == 'NLA') { $description = 'iMac (17-inch, 1GHz)'; }
		if ($serial == 'NLB') { $description = 'iMac (17-inch, 1GHz)'; }
		if ($serial == 'NLP') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NLQ') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NLR') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NLS') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NLT') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'NLU') { $description = 'iPod (15 GB, With Dock Connector)'; }
		if ($serial == 'NLV') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'NLW') { $description = 'iPod (15 GB, With Dock Connector)'; }
		if ($serial == 'NLY') { $description = 'iPod (30 GB, With Dock Connector)'; }
		if ($serial == 'NLZ') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'NM0') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'NM1') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'NM2') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'NM3') { $description = 'iBook (14.1 LCD 16 VRAM)'; }
		if ($serial == 'NM6') { $description = 'iPod (15 GB, With Dock Connector, Personalized)'; }
		if ($serial == 'NM7') { $description = 'iPod (30 GB, With Dock Connector, Personalized)'; }
		if ($serial == 'NM9') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NMD') { $description = 'Power Mac Server G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NMH') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'NMJ') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'NMK') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'NMN') { $description = 'Xserve'; }
		if ($serial == 'NN0') { $description = 'Power Mac Server G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NN1') { $description = 'Power Mac Server G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NNA') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NND') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NNE') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NNF') { $description = 'Apple Studio Display (17-inch, LCD)'; }
		if ($serial == 'NNU') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NNY') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'NP1') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'NP2') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'NP3') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'NP4') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'NPL') { $description = 'Keynote 1.x'; }
		if ($serial == 'NPN') { $description = 'Keynote 1.x'; }
		if ($serial == 'NPP') { $description = 'Keynote 1.x'; }
		if ($serial == 'NPQ') { $description = 'Keynote 1.x'; }
		if ($serial == 'NPR') { $description = 'Keynote 1.x'; }
		if ($serial == 'NPT') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NQ3') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NQ9') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NRH') { $description = 'iPod (10 GB, With Dock Connector)'; }
		if ($serial == 'NRK') { $description = 'iPod (10 GB, With Dock Connector, Personalized)'; }
		if ($serial == 'NRL') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'NRM') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'NRN') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'NRP') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'NRT') { $description = 'eMac'; }
		if ($serial == 'NRV') { $description = 'eMac'; }
		if ($serial == 'NRW') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'NRX') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'NRY') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'NRZ') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'NS0') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'NS1') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'NS5') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'NS6') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'NS7') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'NS8') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'NS9') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'NSA') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'NSS') { $description = 'iPod (10 GB Touchwheel)'; }
		if ($serial == 'NSU') { $description = 'iPod (5 GB Touchwheel, Win, Personalized)'; }
		if ($serial == 'NSW') { $description = 'iPod (10 GB Touchwheel, Personalized)'; }
		if ($serial == 'NSX') { $description = 'iPod (20 GB Touchwheel)'; }
		if ($serial == 'NSY') { $description = 'iPod (10 GB Touchwheel, Personalized)'; }
		if ($serial == 'NT0') { $description = 'iPod (5 GB Scroll Wheel Personalized)'; }
		if ($serial == 'NT2') { $description = 'iMac (Summer 2001)'; }
		if ($serial == 'NT9') { $description = 'eMac'; }
		if ($serial == 'NTA') { $description = 'eMac'; }
		if ($serial == 'NTB') { $description = 'eMac'; }
		if ($serial == 'NTY') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NTZ') { $description = 'eMac'; }
		if ($serial == 'NU0') { $description = 'eMac'; }
		if ($serial == 'NU1') { $description = 'eMac'; }
		if ($serial == 'NU2') { $description = 'eMac'; }
		if ($serial == 'NU5') { $description = 'eMac'; }
		if ($serial == 'NU6') { $description = 'eMac'; }
		if ($serial == 'NU7') { $description = 'eMac'; }
		if ($serial == 'NUA') { $description = 'eMac'; }
		if ($serial == 'NUB') { $description = 'eMac'; }
		if ($serial == 'NUC') { $description = 'eMac'; }
		if ($serial == 'NUD') { $description = 'eMac'; }
		if ($serial == 'NUE') { $description = 'eMac'; }
		if ($serial == 'NUF') { $description = 'eMac'; }
		if ($serial == 'NUG') { $description = 'eMac'; }
		if ($serial == 'NUH') { $description = 'eMac'; }
		if ($serial == 'NUJ') { $description = 'eMac'; }
		if ($serial == 'NUK') { $description = 'eMac'; }
		if ($serial == 'NUT') { $description = 'Xserve'; }
		if ($serial == 'NV9') { $description = 'Power Mac G5'; }
		if ($serial == 'NVA') { $description = 'Power Mac G5'; }
		if ($serial == 'NVB') { $description = 'Power Mac G5'; }
		if ($serial == 'NVF') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NVH') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'NVQ') { $description = 'Power Mac G5'; }
		if ($serial == 'NVR') { $description = 'Power Mac G5'; }
		if ($serial == 'NVS') { $description = 'Power Mac G5'; }
		if ($serial == 'NVW') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NVX') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'NVY') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'NVZ') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'NW1') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'NW2') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'NW3') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'NW4') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'NW9') { $description = 'Final Cut Express 1.0'; }
		if ($serial == 'NWA') { $description = 'Final Cut Express 1.0'; }
		if ($serial == 'NWL') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NWN') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'NWP') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'NWQ') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'NWR') { $description = 'iBook (14.1 LCD 32 VRAM)'; }
		if ($serial == 'NWS') { $description = 'iBook (14.1 LCD 32 VRAM)'; }
		if ($serial == 'NWT') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'NWU') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'NX9') { $description = 'WebObjects 5'; }
		if ($serial == 'NY4') { $description = 'iBook (14.1 LCD 32 VRAM)'; }
		if ($serial == 'NY5') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'NYE') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'NYF') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'NYG') { $description = 'iBook (14.1 LCD 32 VRAM)'; }
		if ($serial == 'NYK') { $description = 'WebObjects 5'; }
		if ($serial == 'NYL') { $description = 'WebObjects 5'; }
		if ($serial == 'NZ7') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'NZ8') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'NZ9') { $description = 'iBook (14.1 LCD 32 VRAM)'; }
		if ($serial == 'NZA') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NZB') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NZF') { $description = 'Xserve'; }
		if ($serial == 'NZG') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NZH') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'NZJ') { $description = 'iMac (17 inch, Flat Panel)'; }
		if ($serial == 'NZK') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'NZL') { $description = 'eMac'; }
		if ($serial == 'NZM') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'NZN') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'OWP') { $description = 'Non-serialized Products'; }
		if ($serial == 'P06') { $description = 'Xserve (Cluster Node)'; }
		if ($serial == 'P08') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'P0A') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'P0B') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'P18') { $description = 'iMac (Flat Panel 2003)'; }
		if ($serial == 'P19') { $description = 'iMac (Flat Panel 2003)'; }
		if ($serial == 'P1U') { $description = 'Xserve (Cluster Node)'; }
		if ($serial == 'P1V') { $description = 'iBook (16 VRAM)'; }
		if ($serial == 'P1W') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'P1X') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'P1Y') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'P21') { $description = 'PowerBook G4 (17-inch, 1.33GHZ)'; }
		if ($serial == 'P22') { $description = 'PowerBook G4 (17-inch, 1.33GHZ)'; }
		if ($serial == 'P23') { $description = 'PowerBook G4 (17-inch, 1.33GHZ)'; }
		if ($serial == 'P2L') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'P2N') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'P2P') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'P2Q') { $description = 'AirPort Card'; }
		if ($serial == 'P2R') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'P2S') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'P2T') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'P2U') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'P33') { $description = 'eMac'; }
		if ($serial == 'P34') { $description = 'iMac (Flat Panel 2003)'; }
		if ($serial == 'P35') { $description = 'iMac (Flat Panel 2003)'; }
		if ($serial == 'P36') { $description = 'iMac (Flat Panel 2003)'; }
		if ($serial == 'P37') { $description = 'iMac (Flat Panel 2003)'; }
		if ($serial == 'P39') { $description = 'eMac'; }
		if ($serial == 'P3J') { $description = 'Xserve (Cluster Node)'; }
		if ($serial == 'P4C') { $description = 'iMac (Flat Panel)'; }
		if ($serial == 'P5A') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'P5B') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'P5D') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'P5F') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'P5G') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'P5H') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'P60') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'P61') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'P65') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'P66') { $description = 'iPod (10 GB, With Dock Connector)'; }
		if ($serial == 'P67') { $description = 'iPod (15 GB, With Dock Connector)'; }
		if ($serial == 'P68') { $description = 'iPod (30 GB, With Dock Connector)'; }
		if ($serial == 'P6L') { $description = 'Apple Studio Display 17 inch, LCD'; }
		if ($serial == 'P6N') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'P6W') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'P6Y') { $description = 'Apple Remote Desktop 1.2'; }
		if ($serial == 'P6Z') { $description = 'Apple Remote Desktop 1.2'; }
		if ($serial == 'P70') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'P71') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'P72') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'P73') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'P7A') { $description = 'eMac'; }
		if ($serial == 'P7B') { $description = 'eMac'; }
		if ($serial == 'P7C') { $description = 'eMac'; }
		if ($serial == 'P7M') { $description = 'AppleWorks 6.2.X'; }
		if ($serial == 'P7N') { $description = 'AppleWorks 6.2.X'; }
		if ($serial == 'P7R') { $description = 'AppleWorks 6.2.X'; }
		if ($serial == 'P7S') { $description = 'AppleWorks 6.2.X'; }
		if ($serial == 'P7Y') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'P82') { $description = 'iMac (Flat Panel 2003)'; }
		if ($serial == 'P85') { $description = 'Apple Remote Desktop 1.2'; }
		if ($serial == 'P8D') { $description = 'Keynote 1.x'; }
		if ($serial == 'P8N') { $description = 'Final Cut Express 1.0'; }
		if ($serial == 'P8U') { $description = 'eMac'; }
		if ($serial == 'P8V') { $description = 'eMac'; }
		if ($serial == 'P93') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'P94') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'P95') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'P96') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'P97') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'P9E') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'P9F') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'P9G') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'P9H') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'P9J') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'P9K') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'P9L') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'P9M') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'P9N') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'P9P') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'P9Q') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'P9R') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'P9S') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PA2') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'PAY') { $description = 'Power Mac G5'; }
		if ($serial == 'PAZ') { $description = 'Power Mac G5'; }
		if ($serial == 'PB0') { $description = 'Power Mac G5'; }
		if ($serial == 'PB1') { $description = 'Power Mac G5'; }
		if ($serial == 'PB2') { $description = 'Power Mac G5'; }
		if ($serial == 'PB3') { $description = 'Power Mac G5'; }
		if ($serial == 'PB8') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PB9') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PBA') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PBB') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'PBC') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'PBD') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'PBE') { $description = 'iBook (14.1 LCD 900 MHZ 32 VRAM)'; }
		if ($serial == 'PBF') { $description = 'iBook (14.1 LCD 900 MHZ 32 VRAM)'; }
		if ($serial == 'PBG') { $description = 'iBook (14.1 LCD 900 MHZ 32 VRAM)'; }
		if ($serial == 'PBM') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'PBN') { $description = 'iBook (14.1 LCD 900 MHZ 32 VRAM)'; }
		if ($serial == 'PBR') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'PC1') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'PC4') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'PDC') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'PDL') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PDM') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PDN') { $description = 'Final Cut Pro 4.0'; }
		if ($serial == 'PDP') { $description = 'Final Cut Pro 4.0'; }
		if ($serial == 'PDQ') { $description = 'Final Cut Pro 4.0'; }
		if ($serial == 'PDR') { $description = 'Final Cut Pro 4.0'; }
		if ($serial == 'PDT') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'PDU') { $description = 'Shake 3'; }
		if ($serial == 'PDY') { $description = 'DVD Studio Pro 2.0'; }
		if ($serial == 'PE0') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PE1') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PE2') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PE3') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PE4') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PE6') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'PE8') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'PEN') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'PER') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PES') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PET') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PEZ') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'PF2') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'PF3') { $description = 'iBook (14.1 LCD 900 MHZ 32 VRAM)'; }
		if ($serial == 'PFB') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'PFC') { $description = 'eMac'; }
		if ($serial == 'PFK') { $description = 'PowerBook G4 (17-inch)'; }
		if ($serial == 'PFO') { $description = 'eMac'; }
		if ($serial == 'PFS') { $description = 'Final Cut Pro 4.0'; }
		if ($serial == 'PFW') { $description = 'iPod mini'; }
		if ($serial == 'PG7') { $description = 'iBook G4 (14-inch)'; }
		if ($serial == 'PG8') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'PG9') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'PGA') { $description = 'Power Mac G5'; }
		if ($serial == 'PGB') { $description = 'Power Mac G5'; }
		if ($serial == 'PGC') { $description = 'Power Mac G5'; }
		if ($serial == 'PGH') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PGK') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'PGL') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'PGM') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'PGV') { $description = 'iBook G4'; }
		if ($serial == 'PGW') { $description = 'iBook G4'; }
		if ($serial == 'PGX') { $description = 'iBook G4 (14-inch)'; }
		if ($serial == 'PGY') { $description = 'iBook G4'; }
		if ($serial == 'PGZ') { $description = 'iBook G4'; }
		if ($serial == 'PH0') { $description = 'iBook G4 (14-inch)'; }
		if ($serial == 'PH1') { $description = 'iBook G4'; }
		if ($serial == 'PH2') { $description = 'iBook G4'; }
		if ($serial == 'PHH') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'PHK') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'PHL') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'PHU') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'PHV') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'PJ1') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'PJ2') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'PJ3') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'PJ4') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'PJ5') { $description = 'Final Cut Pro 4.0'; }
		if ($serial == 'PJG') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'PJH') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'PJJ') { $description = 'DVD Studio Pro 2.0'; }
		if ($serial == 'PJK') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'PJL') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'PJU') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'PK0') { $description = 'Power Mac G4 (Mirrored Drive Doors)'; }
		if ($serial == 'PKF') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'PKG') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'PKK') { $description = 'Apple Cinema Display (20-inch, DVI)'; }
		if ($serial == 'PKL') { $description = 'Apple Cinema Display (23-inch, DVI)'; }
		if ($serial == 'PKM') { $description = 'Apple Cinema Display (30-inch, DVI)'; }
		if ($serial == 'PKW') { $description = 'iBook (14.1 LCD 900 MHZ 32 VRAM)'; }
		if ($serial == 'PKX') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'PKY') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PKZ') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PL0') { $description = 'iBook (14.1 LCD 900 MHZ 32 VRAM)'; }
		if ($serial == 'PL1') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'PLG') { $description = 'PowerBook G4 (12-inch, 1.33GHZ)'; }
		if ($serial == 'PLH') { $description = 'PowerBook G4 (12-inch, 1.33GHZ)'; }
		if ($serial == 'PLW') { $description = 'PowerBook G4 (12-inch, 1.33GHZ)'; }
		if ($serial == 'PLX') { $description = 'PowerBook G4 (12-inch, 1.33GHZ)'; }
		if ($serial == 'PM7') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'PMA') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'PMM') { $description = 'iBook G4'; }
		if ($serial == 'PMX') { $description = 'Xserve G5'; }
		if ($serial == 'PMY') { $description = 'Xserve G5'; }
		if ($serial == 'PMZ') { $description = 'Xserve G5'; }
		if ($serial == 'PNH') { $description = 'Xserve G5'; }
		if ($serial == 'PNJ') { $description = 'Xserve G5'; }
		if ($serial == 'PNK') { $description = 'Xserve G5'; }
		if ($serial == 'PNT') { $description = 'iPod (20 GB with Dock Connector)'; }
		if ($serial == 'PNU') { $description = 'iPod (40 GB with Dock Connector)'; }
		if ($serial == 'PNX') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'PNY') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'PNZ') { $description = 'iMac G5 (20-Inch)'; }
		if ($serial == 'POB') { $description = 'PowerBook G4 (12-inch)'; }
		if ($serial == 'PP0') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PP1') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PP2') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PP6') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'PP7') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'PP8') { $description = 'iMac G5 (20-Inch)'; }
		if ($serial == 'PP9') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PPA') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PPB') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PPT') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PPX') { $description = 'iBook (14.1 LCD 900 MHZ 32 VRAM)'; }
		if ($serial == 'PPZ') { $description = 'iBook (Opaque 16VRAM)'; }
		if ($serial == 'PQ0') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PQ1') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PQ2') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PQ4') { $description = 'iPod (10 GB, With Dock Connector, Personalized)'; }
		if ($serial == 'PQ5') { $description = 'iPod (20 GB with Dock Connector, Personalized)'; }
		if ($serial == 'PQ6') { $description = 'iPod (40 GB with Dock Connector, Personalized)'; }
		if ($serial == 'PQ7') { $description = 'iPod (Click Wheel)'; }
		if ($serial == 'PQ8') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PQ9') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PQA') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PQD') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'PQE') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'PQF') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'PQG') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'PQK') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PQL') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PQM') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PQV') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'PQW') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'PRC') { $description = 'iPod mini'; }
		if ($serial == 'PRH') { $description = 'iPod mini'; }
		if ($serial == 'PRV') { $description = 'iPod (15 GB, With Dock Connector)'; }
		if ($serial == 'PRZ') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PS0') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PS1') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PS2') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PS3') { $description = 'iMac (Flat Panel 2003)'; }
		if ($serial == 'PS9') { $description = 'iPod (Click Wheel)'; }
		if ($serial == 'PSC') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PSK') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PSZ') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'PT0') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PT2') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'PT3') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'PT4') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'PT6') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'PT7') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'PT8') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'PT9') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'PVF') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'PVJ') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'PVK') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'PVU') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'PVW') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'PVX') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'PVY') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'PVZ') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'PW0') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'PWO') { $description = 'Xserve (Cluster Node)'; }
		if ($serial == 'PWY') { $description = 'Soundtrack'; }
		if ($serial == 'PWZ') { $description = 'Soundtrack'; }
		if ($serial == 'PX1') { $description = 'Soundtrack'; }
		if ($serial == 'PXB') { $description = 'Power Mac G5'; }
		if ($serial == 'PXC') { $description = 'Power Mac G5'; }
		if ($serial == 'PXD') { $description = 'Power Mac G5'; }
		if ($serial == 'PXE') { $description = 'Power Mac G5'; }
		if ($serial == 'PXF') { $description = 'Power Mac G5'; }
		if ($serial == 'PXG') { $description = 'Power Mac G5'; }
		if ($serial == 'PXH') { $description = 'Power Mac G5'; }
		if ($serial == 'PXJ') { $description = 'Power Mac G5'; }
		if ($serial == 'PXK') { $description = 'Power Mac G5'; }
		if ($serial == 'PXL') { $description = 'Power Mac G5'; }
		if ($serial == 'PXP') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'PXZ') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'PY0') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'Q0D') { $description = 'Power Mac G4 (FW 800)'; }
		if ($serial == 'Q0E') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q0K') { $description = 'Mac OS X Server 10.3'; }
		if ($serial == 'Q0L') { $description = 'Mac OS X Server 10.3'; }
		if ($serial == 'Q0N') { $description = 'Mac OS X Server 10.3'; }
		if ($serial == 'Q0P') { $description = 'Mac OS X Server 10.3'; }
		if ($serial == 'Q0S') { $description = 'Mac OS X 10.3'; }
		if ($serial == 'Q0W') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q0X') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q0Y') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q0Z') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q12') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'Q13') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'Q19') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'Q1A') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'Q1B') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'Q1C') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'Q1D') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'Q1E') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'Q1F') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'Q1G') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'Q1H') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'Q1M') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q1Q') { $description = 'PowerBook G4 (1GHZ/867MHZ)'; }
		if ($serial == 'Q1R') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'Q2A') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q2B') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q2C') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q2D') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q2E') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q2F') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q2G') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q2H') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q2J') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q3M') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'Q3N') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'Q3P') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'Q3T') { $description = 'Power Mac G5'; }
		if ($serial == 'Q3V') { $description = 'Power Mac G5'; }
		if ($serial == 'Q4C') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q4D') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q4E') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q4F') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q4G') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q4H') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'Q4N') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'Q4P') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'Q4R') { $description = 'iPod (10 GB, With Dock Connector)'; }
		if ($serial == 'Q4S') { $description = 'iPod (15 GB, With Dock Connector)'; }
		if ($serial == 'Q4T') { $description = 'iPod (30 GB, With Dock Connector)'; }
		if ($serial == 'Q4U') { $description = 'iSight'; }
		if ($serial == 'Q4V') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'Q4W') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'Q4X') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'Q4Z') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'Q53') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'Q55') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'Q5S') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'Q5Y') { $description = 'Power Mac G5'; }
		if ($serial == 'Q5Z') { $description = 'Power Mac G5'; }
		if ($serial == 'Q65') { $description = 'Power Mac G5'; }
		if ($serial == 'Q66') { $description = 'Power Mac G5'; }
		if ($serial == 'Q67') { $description = 'Power Mac G5'; }
		if ($serial == 'Q68') { $description = 'Power Mac G5'; }
		if ($serial == 'Q6L') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'Q6M') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'Q6N') { $description = 'Xserve (Cluster Node)'; }
		if ($serial == 'Q6P') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'Q6Y') { $description = 'Power Mac G5'; }
		if ($serial == 'Q6Z') { $description = 'Power Mac G5'; }
		if ($serial == 'Q73') { $description = 'iBook (14.1 LCD 900 MHZ 32 VRAM)'; }
		if ($serial == 'Q76') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'Q77') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'Q7D') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'Q7E') { $description = 'Power Mac G5'; }
		if ($serial == 'Q8B') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'Q8U') { $description = 'iPod (Click Wheel)'; }
		if ($serial == 'Q8V') { $description = 'iPod (Click Wheel)'; }
		if ($serial == 'Q8X') { $description = 'AirPort Extreme Base Station POE/UL2043'; }
		if ($serial == 'Q8Y') { $description = 'Power Mac G5'; }
		if ($serial == 'Q8Z') { $description = 'Power Mac G5'; }
		if ($serial == 'Q90') { $description = 'Power Mac G5'; }
		if ($serial == 'Q91') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'Q92') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'Q93') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'Q94') { $description = 'Power Mac G5'; }
		if ($serial == 'Q95') { $description = 'Power Mac G5'; }
		if ($serial == 'Q96') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'Q9T') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'Q9Y') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QA2') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QA5') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'QA7') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'QA8') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'QAC') { $description = 'AirPort Card'; }
		if ($serial == 'QAD') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'QAX') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'QAY') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'QAZ') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'QB3') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QB4') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QB5') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QB6') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QB7') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QB8') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QBF') { $description = 'Power Mac G5'; }
		if ($serial == 'QBG') { $description = 'Power Mac G5'; }
		if ($serial == 'QC2') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'QC3') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'QC4') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'QC6') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'QC8') { $description = 'iPod (20 GB with Dock Connector)'; }
		if ($serial == 'QC9') { $description = 'iBook (32 VRAM)'; }
		if ($serial == 'QCA') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'QCC') { $description = 'Final Cut Express 2.0'; }
		if ($serial == 'QCD') { $description = 'Final Cut Pro 2.0'; }
		if ($serial == 'QCE') { $description = 'Final Cut Express 2.0'; }
		if ($serial == 'QCJ') { $description = 'Power Mac G5'; }
		if ($serial == 'QCK') { $description = 'Power Mac G5'; }
		if ($serial == 'QCL') { $description = 'Power Mac G5'; }
		if ($serial == 'QCS') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'QCT') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'QCU') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'QCV') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'QCW') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'QCX') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'QD0') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'QD1') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QD2') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'QD3') { $description = 'Power Mac G5'; }
		if ($serial == 'QD4') { $description = 'Power Mac G5'; }
		if ($serial == 'QDS') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QDV') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'QDW') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'QE2') { $description = 'iBook G4 (14-inch)'; }
		if ($serial == 'QE4') { $description = 'iBook G4 (14-inch)'; }
		if ($serial == 'QE6') { $description = 'Power Mac G5'; }
		if ($serial == 'QE7') { $description = 'Power Mac G5'; }
		if ($serial == 'QE8') { $description = 'Power Mac G5'; }
		if ($serial == 'QE9') { $description = 'Power Mac G5'; }
		if ($serial == 'QEA') { $description = 'Power Mac G5'; }
		if ($serial == 'QEB') { $description = 'Power Mac G5'; }
		if ($serial == 'QEC') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'QED') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'QES') { $description = 'Power Mac G5'; }
		if ($serial == 'QEU') { $description = 'Power Mac G5'; }
		if ($serial == 'QF1') { $description = 'Power Mac G5'; }
		if ($serial == 'QF6') { $description = 'Power Mac G5'; }
		if ($serial == 'QF8') { $description = 'Power Mac G5'; }
		if ($serial == 'QF9') { $description = 'iBook G4'; }
		if ($serial == 'QFB') { $description = 'Xserve RAID'; }
		if ($serial == 'QFH') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'QFJ') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'QFT') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'QFU') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'QG4') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QG5') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QG6') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QG7') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QGA') { $description = 'Power Mac G5'; }
		if ($serial == 'QGB') { $description = 'Power Mac G5'; }
		if ($serial == 'QGM') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QGN') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QGP') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QGQ') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QGR') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QGS') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QGT') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QGU') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QGV') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QGW') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QGX') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QGY') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QH0') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'QH7') { $description = 'iBook G4 (14-inch)'; }
		if ($serial == 'QH8') { $description = 'iBook G4 (14-inch)'; }
		if ($serial == 'QH9') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'QHA') { $description = 'iBook G4'; }
		if ($serial == 'QHB') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'QHC') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'QHD') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'QHE') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'QHF') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'QHG') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'QHH') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'QHK') { $description = 'iBook G4 (14-inch)'; }
		if ($serial == 'QHU') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'QHV') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'QHW') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'QHX') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'QHY') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'QJ6') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QJ7') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QJ8') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QJ9') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QJA') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QJB') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QJD') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'QJE') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'QJP') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'QJQ') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'QJS') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'QK9') { $description = 'Final Cut Express 2.0'; }
		if ($serial == 'QKJ') { $description = 'iPod mini'; }
		if ($serial == 'QKK') { $description = 'iPod mini'; }
		if ($serial == 'QKL') { $description = 'iPod mini'; }
		if ($serial == 'QKM') { $description = 'iPod mini'; }
		if ($serial == 'QKN') { $description = 'iPod mini'; }
		if ($serial == 'QKP') { $description = 'iPod mini'; }
		if ($serial == 'QKQ') { $description = 'iPod mini'; }
		if ($serial == 'QKR') { $description = 'iPod mini'; }
		if ($serial == 'QKT') { $description = 'Power Mac G5'; }
		if ($serial == 'QKU') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'QKV') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'QKX') { $description = 'iBook G4 (14-inch)'; }
		if ($serial == 'QKY') { $description = 'iBook G4'; }
		if ($serial == 'QKZ') { $description = 'iBook G4'; }
		if ($serial == 'QL0') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'QL1') { $description = 'iBook G4'; }
		if ($serial == 'QL2') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'QL8') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QLP') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'QLT') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'QLU') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'QLV') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QLW') { $description = 'iBook G4'; }
		if ($serial == 'QME') { $description = 'iBook G4'; }
		if ($serial == 'QMF') { $description = 'iBook G4'; }
		if ($serial == 'QMN') { $description = 'iBook G4'; }
		if ($serial == 'QMP') { $description = 'iBook G4 (14-inch)'; }
		if ($serial == 'QMQ') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'QMW') { $description = 'AirPort Extreme Base Station POE/UL2043'; }
		if ($serial == 'QMX') { $description = 'AirPort Extreme Base Station POE/UL2043'; }
		if ($serial == 'QMZ') { $description = 'AirPort Extreme Base Station POE/UL2043'; }
		if ($serial == 'QN0') { $description = 'AirPort Extreme Base Station POE/UL2043'; }
		if ($serial == 'QN1') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'QN2') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'QN3') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'QN4') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'QN5') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'QN6') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'QN8') { $description = 'AirPort Extreme Base Station POE/UL2043'; }
		if ($serial == 'QN9') { $description = 'Power Mac G5'; }
		if ($serial == 'QNA') { $description = 'iBook G4'; }
		if ($serial == 'QNB') { $description = 'Power Mac G5'; }
		if ($serial == 'QNP') { $description = 'Power Mac G5'; }
		if ($serial == 'QNU') { $description = 'Power Mac G5'; }
		if ($serial == 'QNV') { $description = 'Power Mac G5'; }
		if ($serial == 'QPL') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QPM') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QPP') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QPQ') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QPR') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QPS') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QPW') { $description = 'Xserve G5'; }
		if ($serial == 'QPX') { $description = 'Xserve G5'; }
		if ($serial == 'QPY') { $description = 'Xserve G5'; }
		if ($serial == 'QPZ') { $description = 'iBook G4 (14-inch)'; }
		if ($serial == 'QQ0') { $description = 'Power Mac G5'; }
		if ($serial == 'QQ1') { $description = 'Power Mac G5'; }
		if ($serial == 'QQ2') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QQ3') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QQ4') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QQ5') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'QQ9') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'QQC') { $description = 'iBook G4'; }
		if ($serial == 'QQF') { $description = 'iPod 15GB w/Dock Cntr (Early 2004)'; }
		if ($serial == 'QQG') { $description = 'iPod 15GB w/Dock Cntr (Early 2004)'; }
		if ($serial == 'QQH') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QQJ') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'QRD') { $description = 'iBook G4'; }
		if ($serial == 'QRE') { $description = 'iBook G4'; }
		if ($serial == 'QRS') { $description = 'iLife \'04'; }
		if ($serial == 'QRU') { $description = 'PowerBook G4 (17-inch, 1.5GHZ)'; }
		if ($serial == 'QRV') { $description = 'PowerBook G4 (17-inch, 1.5GHZ)'; }
		if ($serial == 'QRW') { $description = 'PowerBook G4 (17-inch, 1.5GHZ)'; }
		if ($serial == 'QS2') { $description = 'Mac OS X 10.3'; }
		if ($serial == 'QSW') { $description = 'Power Mac G5'; }
		if ($serial == 'QT1') { $description = 'Shake 3.5'; }
		if ($serial == 'QT2') { $description = 'Shake 3.5'; }
		if ($serial == 'QT3') { $description = 'Shake 3.5'; }
		if ($serial == 'QT5') { $description = 'iBook G4'; }
		if ($serial == 'QT6') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QT7') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QTA') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QTB') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QTD') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QTE') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QTF') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QTL') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QTU') { $description = 'Xserve G5'; }
		if ($serial == 'QTV') { $description = 'Xserve G5'; }
		if ($serial == 'QTW') { $description = 'Xserve G5'; }
		if ($serial == 'QU0') { $description = 'Jam Pack 1'; }
		if ($serial == 'QU4') { $description = 'Power Mac G5'; }
		if ($serial == 'QU8') { $description = 'Soundtrack'; }
		if ($serial == 'QU9') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'QUA') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'QUY') { $description = 'Power Mac G5'; }
		if ($serial == 'QV0') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'QV2') { $description = 'Xserve G5'; }
		if ($serial == 'QV5') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'QV7') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'QVG') { $description = 'Power Mac G5'; }
		if ($serial == 'QVH') { $description = 'Power Mac G5'; }
		if ($serial == 'QVJ') { $description = 'Power Mac G5'; }
		if ($serial == 'QVK') { $description = 'Power Mac G5'; }
		if ($serial == 'QVL') { $description = 'Power Mac G5'; }
		if ($serial == 'QVM') { $description = 'Power Mac G5'; }
		if ($serial == 'QVW') { $description = 'Motion 1'; }
		if ($serial == 'QVX') { $description = 'Motion 1'; }
		if ($serial == 'QVZ') { $description = 'iBook G4'; }
		if ($serial == 'QW0') { $description = 'iBook G4'; }
		if ($serial == 'QW1') { $description = 'Power Mac G5'; }
		if ($serial == 'QW2') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'QW3') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'QW6') { $description = 'Xserve G5'; }
		if ($serial == 'QWA') { $description = 'Power Mac G5'; }
		if ($serial == 'QWD') { $description = 'Power Mac G5'; }
		if ($serial == 'QWE') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'QWF') { $description = 'iBook G4'; }
		if ($serial == 'QWG') { $description = 'Xserve G5'; }
		if ($serial == 'QWH') { $description = 'Xserve G5'; }
		if ($serial == 'QWJ') { $description = 'Xserve G5'; }
		if ($serial == 'QWK') { $description = 'Xserve G5'; }
		if ($serial == 'QWN') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'QXD') { $description = 'Power Mac G5'; }
		if ($serial == 'QXE') { $description = 'DVD Studio Pro 3.0'; }
		if ($serial == 'QXF') { $description = 'DVD Studio Pro 3.0'; }
		if ($serial == 'QXG') { $description = 'DVD Studio Pro 3.0'; }
		if ($serial == 'QXH') { $description = 'DVD Studio Pro 3.0'; }
		if ($serial == 'QXJ') { $description = 'DVD Studio Pro 3.0'; }
		if ($serial == 'QXS') { $description = 'Apple Remote Desktop 2.x'; }
		if ($serial == 'QXT') { $description = 'Apple Remote Desktop 2.x'; }
		if ($serial == 'QXU') { $description = 'Apple Remote Desktop 2.x'; }
		if ($serial == 'QXV') { $description = 'Apple Remote Desktop 2.x'; }
		if ($serial == 'QXY') { $description = 'Apple Remote Desktop 2.x'; }
		if ($serial == 'QY0') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QY1') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'QYC') { $description = 'Motion 1'; }
		if ($serial == 'QYH') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'QYJ') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'QYK') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'QYL') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'QYM') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'QYN') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'QYP') { $description = 'iBook (800 MHZ 32 VRAM)'; }
		if ($serial == 'QYQ') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'QYR') { $description = 'iBook (900 MHZ 32 VRAM)'; }
		if ($serial == 'QYT') { $description = 'Power Mac G5 (Late 2004)'; }
		if ($serial == 'QYU') { $description = 'Power Mac G5 (Late 2004)'; }
		if ($serial == 'R12') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'R16') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'R17') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'R18') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'R29') { $description = 'PowerBook G4 (17-inch, 1.33GHZ)'; }
		if ($serial == 'R2A') { $description = 'PowerBook G4 (15-inch, FW800)'; }
		if ($serial == 'R2B') { $description = 'PowerBook G4 (12-inch, DVI)'; }
		if ($serial == 'R2C') { $description = 'iBook G4'; }
		if ($serial == 'R41') { $description = 'iBook G4'; }
		if ($serial == 'R4N') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'R4P') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'R4Q') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'R4R') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'R4S') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'R4T') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'R4U') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'R57') { $description = 'iSight'; }
		if ($serial == 'R5B') { $description = 'Xserve G5'; }
		if ($serial == 'R5C') { $description = 'Xserve G5'; }
		if ($serial == 'R5D') { $description = 'Xserve G5'; }
		if ($serial == 'R5H') { $description = 'Power Mac G5'; }
		if ($serial == 'R5J') { $description = 'Power Mac G5'; }
		if ($serial == 'R5K') { $description = 'Power Mac G5'; }
		if ($serial == 'R5M') { $description = 'Power Mac G5'; }
		if ($serial == 'R5N') { $description = 'Power Mac G5'; }
		if ($serial == 'R5P') { $description = 'Power Mac G5'; }
		if ($serial == 'R5Q') { $description = 'iPod photo'; }
		if ($serial == 'R5R') { $description = 'iPod photo'; }
		if ($serial == 'R5S') { $description = 'iPod photo'; }
		if ($serial == 'R5T') { $description = 'iPod photo'; }
		if ($serial == 'R61') { $description = 'eMac (ATI Graphics)'; }
		if ($serial == 'R62') { $description = 'Xserve G5'; }
		if ($serial == 'R63') { $description = 'Xserve G5'; }
		if ($serial == 'R64') { $description = 'Xserve G5'; }
		if ($serial == 'R65') { $description = 'Xserve G5'; }
		if ($serial == 'R6E') { $description = 'iBook G4'; }
		if ($serial == 'R6R') { $description = 'iBook G4 (14-inch)'; }
		if ($serial == 'R6S') { $description = 'iBook G4'; }
		if ($serial == 'R6U') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'R6V') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'R6W') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'R6Z') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'R70') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'R71') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'R72') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'R73') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'R74') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'R7J') { $description = 'Power Mac G5'; }
		if ($serial == 'R7X') { $description = 'Power Mac G5'; }
		if ($serial == 'R7Y') { $description = 'Power Mac G5'; }
		if ($serial == 'R7Z') { $description = 'Power Mac G5'; }
		if ($serial == 'R8F') { $description = 'iBook G4'; }
		if ($serial == 'R91') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'R92') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'R93') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'R96') { $description = 'Power Mac G5'; }
		if ($serial == 'R9C') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'R9S') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'R9T') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'R9U') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'R9V') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'R9X') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'RA3') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RA9') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'RAA') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'RAG') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RAK') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RAL') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RAM') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'RAN') { $description = 'PowerBook G4 (12-inch, 1.33GHZ)'; }
		if ($serial == 'RAP') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RAS') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RAW') { $description = 'iSight'; }
		if ($serial == 'RAZ') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'RB3') { $description = 'Xserve G5'; }
		if ($serial == 'RB4') { $description = 'Xserve G5'; }
		if ($serial == 'RB5') { $description = 'Xserve G5'; }
		if ($serial == 'RB8') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RB9') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RBA') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'RBB') { $description = 'PowerBook G4 (12-inch, 1.33GHZ)'; }
		if ($serial == 'RBC') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'RBE') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'RBF') { $description = 'PowerBook G4 (17-inch, 1.5GHZ)'; }
		if ($serial == 'RC5') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'RC6') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'RC7') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RC8') { $description = 'PowerBook G4 (12-inch, 1.33GHZ)'; }
		if ($serial == 'RC9') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'RCF') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'RCG') { $description = 'PowerBook G4 (12-inch, 1.33GHZ)'; }
		if ($serial == 'RCH') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'RCJ') { $description = 'PowerBook G4 (17-inch, 1.5GHZ)'; }
		if ($serial == 'RCQ') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'RCR') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'RCS') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'RCT') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'RCU') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'RCV') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'RD1') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'RD7') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'RD8') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RDG') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'RDH') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'RDJ') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'RDK') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'RDL') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'RDM') { $description = 'Xserve G5'; }
		if ($serial == 'RE7') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'RE8') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'RE9') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'REA') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'REB') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'REC') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'RED') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'REE') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'REF') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'REG') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'REH') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'REJ') { $description = 'iMac (USB 2.0)'; }
		if ($serial == 'REK') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'REL') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'RER') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'RET') { $description = 'Xserve G5'; }
		if ($serial == 'REU') { $description = 'Xserve G5'; }
		if ($serial == 'REZ') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RF8') { $description = 'Xserve G5'; }
		if ($serial == 'RFF') { $description = 'iPod (Click Wheel)'; }
		if ($serial == 'RFG') { $description = 'iPod (Click Wheel)'; }
		if ($serial == 'RFH') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'RFJ') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'RFK') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'RFL') { $description = 'PowerBook G4 (17-inch, 1.5GHZ)'; }
		if ($serial == 'RFM') { $description = 'iPod (Click Wheel)'; }
		if ($serial == 'RFN') { $description = 'iPod (Click Wheel)'; }
		if ($serial == 'RFT') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RFX') { $description = 'Logic Express 7'; }
		if ($serial == 'RFY') { $description = 'Logic Pro 7'; }
		if ($serial == 'RFZ') { $description = 'Logic Express 7'; }
		if ($serial == 'RG3') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'RG4') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'RG5') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'RG6') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'RGK') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RGL') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RGM') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RGV') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'RH8') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RH9') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RHA') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RHK') { $description = 'Apple Remote Desktop 2.x'; }
		if ($serial == 'RHN') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RHP') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RHQ') { $description = 'Xserve G5'; }
		if ($serial == 'RHR') { $description = 'Mac mini'; }
		if ($serial == 'RHS') { $description = 'Mac mini'; }
		if ($serial == 'RHT') { $description = 'Mac mini'; }
		if ($serial == 'RHU') { $description = 'Mac mini'; }
		if ($serial == 'RJ3') { $description = 'PowerBook G4 (17-inch, 1.67GHZ)'; }
		if ($serial == 'RJ4') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'RJ5') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'RJ6') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'RJ7') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'RJC') { $description = 'Xserve G5'; }
		if ($serial == 'RJD') { $description = 'Xserve G5'; }
		if ($serial == 'RJE') { $description = 'Xserve G5'; }
		if ($serial == 'RJF') { $description = 'PowerBook G4 (17-inch, 1.67GHZ)'; }
		if ($serial == 'RJG') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RJX') { $description = 'Jam Pack 1'; }
		if ($serial == 'RJY') { $description = 'Jam Pack 1'; }
		if ($serial == 'RJZ') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RK0') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RK1') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RK2') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RK3') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RK4') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RK5') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RK6') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RK7') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RK8') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RK9') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKA') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKB') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKC') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKD') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKE') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKG') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKH') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKJ') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKK') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKL') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKM') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKN') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKP') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKQ') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKR') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKS') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKW') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKX') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKY') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RKZ') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RL0') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RL1') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RL2') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RL3') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RL4') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RL5') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RL6') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RL7') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RL8') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RL9') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RLA') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RLB') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RLC') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RLD') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RLE') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RNE') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RNF') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'RNG') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RNR') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RNS') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'RNT') { $description = 'Logic Express 7'; }
		if ($serial == 'RNU') { $description = 'Logic Express 7'; }
		if ($serial == 'RP1') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RP2') { $description = 'iBook G4 (14-inch, Early 2004)'; }
		if ($serial == 'RP3') { $description = 'PowerBook G4 (12-inch, 1.33GHZ)'; }
		if ($serial == 'RP4') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RP5') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RPJ') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RPN') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RPQ') { $description = 'Xsan'; }
		if ($serial == 'RPR') { $description = 'Xsan'; }
		if ($serial == 'RPS') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'RPU') { $description = 'Logic Pro 7'; }
		if ($serial == 'RPV') { $description = 'Logic Pro 7'; }
		if ($serial == 'RPW') { $description = 'Logic Pro 7'; }
		if ($serial == 'RPX') { $description = 'Logic Pro 7'; }
		if ($serial == 'RPY') { $description = 'Logic Pro 7'; }
		if ($serial == 'RPZ') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RQ0') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RQ1') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RQ2') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'RQ7') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'RQ8') { $description = 'Xserve (Slot Load)'; }
		if ($serial == 'RQS') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RQT') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RQU') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RQV') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RQY') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RQZ') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RR0') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RR1') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RRH') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RRJ') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RRK') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RRL') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RRM') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RRN') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RRP') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RRQ') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RS4') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'RS5') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'RS6') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'RS9') { $description = 'iPod shuffle'; }
		if ($serial == 'RSA') { $description = 'iPod shuffle'; }
		if ($serial == 'RSK') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'RT6') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RTA') { $description = 'Power Mac G4 (Mirrored Drive Door 2003)'; }
		if ($serial == 'RTB') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RTC') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RTD') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RTE') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RTF') { $description = 'Final Cut Express HD 3.0'; }
		if ($serial == 'RTG') { $description = 'Final Cut Pro HD 4.5'; }
		if ($serial == 'RTH') { $description = 'Final Cut Express HD 3.0'; }
		if ($serial == 'RTP') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'RTQ') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'RTS') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'RTY') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'RTZ') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'RU0') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'RU2') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'RU3') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'RU4') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'RUW') { $description = 'iPod (Click Wheel)'; }
		if ($serial == 'RWR') { $description = 'Power Mac G5 (Late 2004)'; }
		if ($serial == 'RXE') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'RXR') { $description = 'PowerBook G4 (17-inch, 1.5GHZ)'; }
		if ($serial == 'RXU') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RXV') { $description = 'Xserve G5'; }
		if ($serial == 'RXW') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'RXX') { $description = 'Xserve G5'; }
		if ($serial == 'RXY') { $description = 'Xserve G5'; }
		if ($serial == 'RXZ') { $description = 'Xserve G5'; }
		if ($serial == 'RY0') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RY1') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'RY2') { $description = 'Xserve G5'; }
		if ($serial == 'RZR') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'S02') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'S03') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'S24') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'S25') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'S26') { $description = 'Xserve G5'; }
		if ($serial == 'S2A') { $description = 'Mac OS X Server 10.4'; }
		if ($serial == 'S2B') { $description = 'Mac OS X Server 10.4'; }
		if ($serial == 'S2C') { $description = 'Mac OS X Server 10.4'; }
		if ($serial == 'S2S') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'S2T') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S2U') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'S2V') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'S2W') { $description = 'iMac G5 (20-Inch)'; }
		if ($serial == 'S2X') { $description = 'iPod U2 Special Edition (20 GB)'; }
		if ($serial == 'S3T') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S3U') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S3V') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S3W') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S3Z') { $description = 'iBook G4 (Early 2004)'; }
		if ($serial == 'S40') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'S41') { $description = 'iPod mini'; }
		if ($serial == 'S42') { $description = 'iPod mini'; }
		if ($serial == 'S43') { $description = 'iPod mini'; }
		if ($serial == 'S44') { $description = 'iPod mini'; }
		if ($serial == 'S45') { $description = 'iPod mini'; }
		if ($serial == 'S46') { $description = 'iPod mini'; }
		if ($serial == 'S47') { $description = 'iPod mini'; }
		if ($serial == 'S48') { $description = 'iPod mini'; }
		if ($serial == 'S4B') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S4C') { $description = 'iPod mini'; }
		if ($serial == 'S4D') { $description = 'iPod mini'; }
		if ($serial == 'S4E') { $description = 'iPod mini'; }
		if ($serial == 'S4F') { $description = 'iPod mini'; }
		if ($serial == 'S4G') { $description = 'iPod mini'; }
		if ($serial == 'S4H') { $description = 'iPod mini'; }
		if ($serial == 'S4J') { $description = 'iPod mini'; }
		if ($serial == 'S4K') { $description = 'iPod mini'; }
		if ($serial == 'S4N') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'S4P') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'S4Q') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'S4R') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S4V') { $description = 'Xserve G5'; }
		if ($serial == 'S4W') { $description = 'Xserve G5'; }
		if ($serial == 'S4X') { $description = 'Xserve G5'; }
		if ($serial == 'S53') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'S54') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'S55') { $description = 'Xserve RAID (SFP)'; }
		if ($serial == 'S85') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'S86') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'S87') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'S88') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'S8H') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S8J') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S8K') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S8L') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S8M') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S8N') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S8P') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S8U') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S8V') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S8W') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'S8X') { $description = 'Power Mac G5 (Late 2004)'; }
		if ($serial == 'S8Y') { $description = 'Xserve G5'; }
		if ($serial == 'S8Z') { $description = 'Xserve G5'; }
		if ($serial == 'S90') { $description = 'Xserve G5'; }
		if ($serial == 'S93') { $description = 'Xserve G5'; }
		if ($serial == 'S94') { $description = 'Xserve G5'; }
		if ($serial == 'S95') { $description = 'Xserve G5'; }
		if ($serial == 'S9S') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'S9T') { $description = 'iMac G5 (20-Inch)'; }
		if ($serial == 'SAA') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'SAB') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'SAH') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'SAT') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'SAU') { $description = 'iMac G5 (20-Inch)'; }
		if ($serial == 'SB7') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'SC2') { $description = 'Xserve G5'; }
		if ($serial == 'SCB') { $description = 'eMac (2005)'; }
		if ($serial == 'SCC') { $description = 'eMac (2005)'; }
		if ($serial == 'SCD') { $description = 'eMac (2005)'; }
		if ($serial == 'SCF') { $description = 'eMac (2005)'; }
		if ($serial == 'SCG') { $description = 'eMac (2005)'; }
		if ($serial == 'SCH') { $description = 'eMac (2005)'; }
		if ($serial == 'SCQ') { $description = 'PowerBook G4 (12-inch, 1.33GHZ)'; }
		if ($serial == 'SCR') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'SCS') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'SCT') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'SCU') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'SCY') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'SCZ') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'SD0') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'SD1') { $description = 'Power Mac G5 (Late 2004)'; }
		if ($serial == 'SD2') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'SD3') { $description = 'iMac (17-inch, 1GHz)'; }
		if ($serial == 'SD4') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'SD5') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'SD7') { $description = 'PowerBook G4 (12-inch, 1.33GHZ)'; }
		if ($serial == 'SD8') { $description = 'PowerBook G4 (12-inch, 1.33GHZ)'; }
		if ($serial == 'SDE') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'SDN') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'SDP') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'SDR') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'SDS') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'SDT') { $description = 'Power Mac G5 (Late 2004)'; }
		if ($serial == 'SDU') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'SDV') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'SDW') { $description = 'iMac G5 ALS (20-Inch)'; }
		if ($serial == 'SDX') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'SDY') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'SDZ') { $description = 'iMac G5 ALS (20-Inch)'; }
		if ($serial == 'SE4') { $description = 'iBook G4 (12-inch, Mid 2005)'; }
		if ($serial == 'SE6') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'SE7') { $description = 'iBook G4 (12-inch, Mid 2005)'; }
		if ($serial == 'SE9') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'SEB') { $description = 'iBook G4 (12-inch, Mid 2005)'; }
		if ($serial == 'SEC') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'SEH') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'SEJ') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'SEZ') { $description = 'Power Mac G5 (Late 2004)'; }
		if ($serial == 'SFA') { $description = 'iWork 05'; }
		if ($serial == 'SFC') { $description = 'iWork 05'; }
		if ($serial == 'SFE') { $description = 'iWork 05'; }
		if ($serial == 'SG1') { $description = 'DVD Studio Pro 4.0'; }
		if ($serial == 'SG2') { $description = 'DVD Studio Pro 4.0'; }
		if ($serial == 'SG3') { $description = 'DVD Studio Pro 4.0'; }
		if ($serial == 'SG5') { $description = 'DVD Studio Pro 4.0'; }
		if ($serial == 'SGJ') { $description = 'iSight'; }
		if ($serial == 'SGK') { $description = 'iSight'; }
		if ($serial == 'SGX') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'SHE') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'SJ1') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'SJ3') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'SJ4') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'SJ5') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'SK1') { $description = 'PowerBook G4 (15-inch, 1.5/1.33GHZ)'; }
		if ($serial == 'SK2') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'SK4') { $description = 'iMac G5 (20-Inch)'; }
		if ($serial == 'SK6') { $description = 'Xserve G5'; }
		if ($serial == 'SK7') { $description = 'Power Mac G5 (Late 2004)'; }
		if ($serial == 'SK8') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'SLF') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'SLG') { $description = 'iMac G5 (20-Inch)'; }
		if ($serial == 'SLJ') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'SLW') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SLX') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SLZ') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SM2') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'SM3') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'SM4') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'SMQ') { $description = 'Mac mini'; }
		if ($serial == 'SMR') { $description = 'Mac mini'; }
		if ($serial == 'SMS') { $description = 'Mac mini'; }
		if ($serial == 'SMT') { $description = 'Mac mini'; }
		if ($serial == 'SMU') { $description = 'Mac mini'; }
		if ($serial == 'SNK') { $description = 'iWork 05'; }
		if ($serial == 'SP0') { $description = 'Xserve G5'; }
		if ($serial == 'SP1') { $description = 'Xserve G5'; }
		if ($serial == 'SP2') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'SPX') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'SPY') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'SPZ') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'SQ0') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'SQ1') { $description = 'Power Mac G5 (Late 2004)'; }
		if ($serial == 'SQ5') { $description = 'PowerBook G4 (17-inch, 1.67GHZ)'; }
		if ($serial == 'SQ6') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'SQ7') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'SQV') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'SQW') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SQX') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SQY') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SQZ') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'SR0') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SR1') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SR2') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SR8') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SR9') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SST') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'STB') { $description = 'Motion 2'; }
		if ($serial == 'STC') { $description = 'DVD Studio Pro 4.0'; }
		if ($serial == 'STD') { $description = 'Motion 2'; }
		if ($serial == 'STE') { $description = 'Motion 2'; }
		if ($serial == 'STF') { $description = 'Motion 2'; }
		if ($serial == 'STG') { $description = 'Soundtrack Pro 1.x'; }
		if ($serial == 'STH') { $description = 'Soundtrack Pro 1.x'; }
		if ($serial == 'STJ') { $description = 'Soundtrack Pro 1.x'; }
		if ($serial == 'STK') { $description = 'Soundtrack Pro 1.x'; }
		if ($serial == 'STL') { $description = 'Soundtrack Pro 1.x'; }
		if ($serial == 'STS') { $description = 'Final Cut Pro 5.X'; }
		if ($serial == 'STU') { $description = 'Final Cut Pro 5.X'; }
		if ($serial == 'STV') { $description = 'Final Cut Pro 5.X'; }
		if ($serial == 'STW') { $description = 'Final Cut Pro 5.X'; }
		if ($serial == 'SU0') { $description = 'Xsan 1.1'; }
		if ($serial == 'SU1') { $description = 'Xsan 1.1'; }
		if ($serial == 'SUH') { $description = 'Shake 4.X'; }
		if ($serial == 'SUJ') { $description = 'Shake 4.X'; }
		if ($serial == 'SUK') { $description = 'Shake 4.X'; }
		if ($serial == 'SV8') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SV9') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SVA') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'SW3') { $description = 'Apple Remote Desktop 2.2'; }
		if ($serial == 'SW4') { $description = 'Apple Remote Desktop 2.2'; }
		if ($serial == 'SW5') { $description = 'Apple Remote Desktop 2.2'; }
		if ($serial == 'SWZ') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'SX0') { $description = 'PowerBook G4 (17-inch, Double-Layer SD)'; }
		if ($serial == 'SX2') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'SX3') { $description = 'PowerBook G4 (17-inch, Double-Layer SD)'; }
		if ($serial == 'SX4') { $description = 'Mac mini'; }
		if ($serial == 'SXZ') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'SY2') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'SY3') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'SY5') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'SY6') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'SY7') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'SY8') { $description = 'PowerBook G4 (17-inch, 1.67GHZ)'; }
		if ($serial == 'SYG') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'SYH') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'SYL') { $description = 'PowerBook G4 (17-inch, 1.67GHZ)'; }
		if ($serial == 'SYP') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'SYQ') { $description = 'Logic Pro 7'; }
		if ($serial == 'SYR') { $description = 'Logic Express 7'; }
		if ($serial == 'SYS') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'SZ9') { $description = 'iPod (5th generation)'; }
		if ($serial == 'SZA') { $description = 'iPod (5th generation)'; }
		if ($serial == 'SZB') { $description = 'iPod nano'; }
		if ($serial == 'SZC') { $description = 'iPod nano'; }
		if ($serial == 'SZT') { $description = 'iPod (5th generation)'; }
		if ($serial == 'SZU') { $description = 'iPod (5th generation)'; }
		if ($serial == 'SZV') { $description = 'iPod nano'; }
		if ($serial == 'SZW') { $description = 'iPod nano'; }
		if ($serial == 'T0B') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'T0C') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'T0D') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'T0E') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'T0F') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'T0G') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'T0H') { $description = 'Mac mini'; }
		if ($serial == 'T0J') { $description = 'Mac mini'; }
		if ($serial == 'T0K') { $description = 'Mac mini'; }
		if ($serial == 'T0U') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'T0V') { $description = 'PowerBook G4 (17-inch, 1.67GHZ)'; }
		if ($serial == 'T1C') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'T1G') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'T1S') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'T1V') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'T2W') { $description = 'iPod Hi-Fi'; }
		if ($serial == 'T2X') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'T39') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'T3U') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'T3V') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'T40') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'T41') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'T52') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'T53') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'T54') { $description = 'iMac G5 ALS (20-Inch)'; }
		if ($serial == 'T58') { $description = 'Final Cut Pro 5.X'; }
		if ($serial == 'T5C') { $description = 'Mac mini'; }
		if ($serial == 'T5D') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'T5X') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'T5Y') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'T7W') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'T7X') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'T7Y') { $description = 'iMac G5 ALS (20-Inch)'; }
		if ($serial == 'T7Z') { $description = 'iMac G5 (17-Inch iSight)'; }
		if ($serial == 'T80') { $description = 'iMac G5 (17-Inch iSight)'; }
		if ($serial == 'T81') { $description = 'iMac G5 (17-Inch iSight)'; }
		if ($serial == 'T8B') { $description = 'iWork 05'; }
		if ($serial == 'T8H') { $description = 'eMac (2005)'; }
		if ($serial == 'T8J') { $description = 'eMac (2005)'; }
		if ($serial == 'T8K') { $description = 'eMac (2005)'; }
		if ($serial == 'T8M') { $description = 'eMac (2005)'; }
		if ($serial == 'T8N') { $description = 'eMac (2005)'; }
		if ($serial == 'T8P') { $description = 'eMac (2005)'; }
		if ($serial == 'T8Q') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'T8R') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'T8S') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'T90') { $description = 'Mac OS X 10.4'; }
		if ($serial == 'T9T') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'T9U') { $description = 'iMac G5 ALS (20-Inch)'; }
		if ($serial == 'TA8') { $description = 'Mac mini (Late 2005)'; }
		if ($serial == 'TA9') { $description = 'Mac mini (Late 2005)'; }
		if ($serial == 'TAA') { $description = 'Mac mini (Late 2005)'; }
		if ($serial == 'TAB') { $description = 'Mac mini (Late 2005)'; }
		if ($serial == 'TAC') { $description = 'Mac mini (Late 2005)'; }
		if ($serial == 'TAD') { $description = 'Mac mini (Late 2005)'; }
		if ($serial == 'TAQ') { $description = 'iMac G5 (17-Inch iSight)'; }
		if ($serial == 'TAR') { $description = 'iMac G5 (20-Inch iSight)'; }
		if ($serial == 'TAT') { $description = 'iMac G5 (17-Inch iSight)'; }
		if ($serial == 'TAU') { $description = 'iMac G5 (20-Inch iSight)'; }
		if ($serial == 'TBX') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'TC3') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'TCF') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'TCG') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'TCH') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'TCJ') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'TCK') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'TCL') { $description = 'iMac G5 (20-Inch)'; }
		if ($serial == 'TCV') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'TCW') { $description = 'Mac mini'; }
		if ($serial == 'TDN') { $description = 'eMac (2005)'; }
		if ($serial == 'TDP') { $description = 'eMac (2005)'; }
		if ($serial == 'TDQ') { $description = 'eMac (2005)'; }
		if ($serial == 'TDR') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'TDS') { $description = 'iPod with color display'; }
		if ($serial == 'TDU') { $description = 'iPod with color display'; }
		if ($serial == 'TDX') { $description = 'Mac mini'; }
		if ($serial == 'TE0') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'TE2') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'TE4') { $description = 'iMac G5 (20-Inch)'; }
		if ($serial == 'TEF') { $description = 'eMac (USB 2.0)'; }
		if ($serial == 'TEH') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'TF2') { $description = 'eMac (2005)'; }
		if ($serial == 'TF3') { $description = 'eMac (2005)'; }
		if ($serial == 'TF4') { $description = 'eMac (2005)'; }
		if ($serial == 'TFW') { $description = 'PowerBook G4 (17-inch, 1.67GHZ)'; }
		if ($serial == 'TFX') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'TFY') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'TFZ') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'TG0') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'TG1') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'TG2') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'TG3') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'TG4') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'TG8') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'TGG') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'TGH') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'TGJ') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'THB') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'THC') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'THF') { $description = 'iMac G5 ALS (20-Inch)'; }
		if ($serial == 'THJ') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'THK') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'THL') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'THV') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'THW') { $description = 'Mac mini'; }
		if ($serial == 'THY') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'TJ1') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'TJ2') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'TJ3') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'TJ5') { $description = 'eMac (2005)'; }
		if ($serial == 'TJ7') { $description = 'eMac (2005)'; }
		if ($serial == 'TJC') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'TJD') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'TJE') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'TJF') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'TJG') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'TJT') { $description = 'iPod nano'; }
		if ($serial == 'TJU') { $description = 'iPod nano'; }
		if ($serial == 'TK2') { $description = 'iPod nano'; }
		if ($serial == 'TK3') { $description = 'iPod nano'; }
		if ($serial == 'TKE') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'TKG') { $description = 'eMac (2005)'; }
		if ($serial == 'TKM') { $description = 'iMac G5 ALS (20-Inch)'; }
		if ($serial == 'TKP') { $description = 'eMac (2005)'; }
		if ($serial == 'TKQ') { $description = 'eMac (2005)'; }
		if ($serial == 'TKR') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'TKS') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'TKT') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'TKU') { $description = 'Power Mac G5 (Late 2004)'; }
		if ($serial == 'TKX') { $description = 'iMac G5 ALS (20-Inch)'; }
		if ($serial == 'TKZ') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'TL0') { $description = 'eMac (2005)'; }
		if ($serial == 'TL1') { $description = 'eMac (2005)'; }
		if ($serial == 'TL2') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'TM2') { $description = 'iPod with color display'; }
		if ($serial == 'TM9') { $description = 'iMac G5 ALS (20-Inch)'; }
		if ($serial == 'TMA') { $description = 'iMac G5 ALS (20-Inch)'; }
		if ($serial == 'TMB') { $description = 'Power Mac G5 (Late 2004)'; }
		if ($serial == 'TMN') { $description = 'eMac (2005)'; }
		if ($serial == 'TMP') { $description = 'eMac (2005)'; }
		if ($serial == 'TMQ') { $description = 'eMac (2005)'; }
		if ($serial == 'TMT') { $description = 'eMac (2005)'; }
		if ($serial == 'TNS') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'TNT') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'TP4') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'TP5') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'TP6') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'TP7') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'TQU') { $description = 'eMac (2005)'; }
		if ($serial == 'TR4') { $description = 'eMac (2005)'; }
		if ($serial == 'TR5') { $description = 'eMac (2005)'; }
		if ($serial == 'TR6') { $description = 'eMac (2005)'; }
		if ($serial == 'TRF') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'TRH') { $description = 'Power Mac G5 (June 2004)'; }
		if ($serial == 'TRN') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'TRP') { $description = 'eMac (2005)'; }
		if ($serial == 'TRQ') { $description = 'eMac (2005)'; }
		if ($serial == 'TRR') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'TRU') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'TRV') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'TRW') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'TS1') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'TSG') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'TSH') { $description = 'iMac G5 (17-Inch)'; }
		if ($serial == 'TSJ') { $description = 'iMac G5 (20-Inch)'; }
		if ($serial == 'TSK') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'TSX') { $description = 'iPod shuffle'; }
		if ($serial == 'TSY') { $description = 'iPod shuffle'; }
		if ($serial == 'TTA') { $description = 'Power Mac G5 (Early 2005)'; }
		if ($serial == 'TTF') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TTG') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TTH') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TTJ') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TTK') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TTL') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TTM') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TTN') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TTU') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TTV') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TTX') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TTY') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TTZ') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TU0') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TU1') { $description = 'AirPort Extreme Base Station'; }
		if ($serial == 'TU4') { $description = 'eMac (2005)'; }
		if ($serial == 'TU6') { $description = 'iMac G5 ALS (20-Inch)'; }
		if ($serial == 'TVW') { $description = 'Mac mini'; }
		if ($serial == 'TVX') { $description = 'iBook G4 (14-inch, Late 2004)'; }
		if ($serial == 'TVZ') { $description = 'eMac (2005)'; }
		if ($serial == 'TWE') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'TWR') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'TX8') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'TXA') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'TXF') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'TXG') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'TXH') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'TXK') { $description = 'iPod (5th generation)'; }
		if ($serial == 'TXL') { $description = 'iPod (5th generation)'; }
		if ($serial == 'TXM') { $description = 'iPod (5th generation)'; }
		if ($serial == 'TXN') { $description = 'iPod (5th generation)'; }
		if ($serial == 'TXX') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'TYB') { $description = 'Power Mac G5 (Late 2004)'; }
		if ($serial == 'TYC') { $description = 'Power Mac G5 (Late 2004)'; }
		if ($serial == 'TYD') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'TYE') { $description = 'iBook G4 (12-inch, Late 2004)'; }
		if ($serial == 'TYG') { $description = 'iPod with color display'; }
		if ($serial == 'TYJ') { $description = 'Aperture 1.0'; }
		if ($serial == 'TYK') { $description = 'Aperture 1.0'; }
		if ($serial == 'TYS') { $description = 'iMac G5 ALS (20-Inch)'; }
		if ($serial == 'TYV') { $description = 'Mac mini'; }
		if ($serial == 'TYW') { $description = 'Mac mini'; }
		if ($serial == 'TYX') { $description = 'Mac mini'; }
		if ($serial == 'TZ1') { $description = 'Mac mini'; }
		if ($serial == 'U0R') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'U0S') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'U0T') { $description = 'AirPort Extreme Card'; }
		if ($serial == 'U2N') { $description = 'iMac (Early 2006 17-inch)'; }
		if ($serial == 'U2P') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'U2R') { $description = 'iMac (Early 2006 17-inch)'; }
		if ($serial == 'U2S') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'U34') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'U35') { $description = 'Mac mini (Early 2006)'; }
		if ($serial == 'U36') { $description = 'Mac mini (Early 2006)'; }
		if ($serial == 'U38') { $description = 'Mac mini (Early 2006)'; }
		if ($serial == 'U39') { $description = 'Mac mini (Early 2006)'; }
		if ($serial == 'U3B') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'U3G') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'U3H') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'U3J') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'U3K') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'U4S') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'U4T') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'U4U') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'U4V') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'U4W') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'U4X') { $description = 'AirPort Express Base Station'; }
		if ($serial == 'U5H') { $description = 'iPod with color display Harry Potter (20GB)'; }
		if ($serial == 'U6A') { $description = 'iMac G5 (20-Inch iSight)'; }
		if ($serial == 'U6B') { $description = 'iMac G5 (20-Inch iSight)'; }
		if ($serial == 'U6C') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'U6D') { $description = 'iBook G4 (12-inch, Mid 2005)'; }
		if ($serial == 'U6E') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'U6G') { $description = 'iWork 06'; }
		if ($serial == 'U6J') { $description = 'iWork 06'; }
		if ($serial == 'U6K') { $description = 'iWork 06'; }
		if ($serial == 'U6M') { $description = 'Apple Remote Desktop 3.X'; }
		if ($serial == 'U6N') { $description = 'Apple Remote Desktop 3.X'; }
		if ($serial == 'U6P') { $description = 'Apple Remote Desktop 3.X'; }
		if ($serial == 'U6Q') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'U6R') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'U6S') { $description = 'iBook G4 (12-inch, Mid 2005)'; }
		if ($serial == 'U6U') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'U6Z') { $description = 'iMac G5 (17-Inch iSight)'; }
		if ($serial == 'U70') { $description = 'iMac G5 (20-Inch iSight)'; }
		if ($serial == 'U75') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'U76') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'U77') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'U7T') { $description = 'iPod shuffle'; }
		if ($serial == 'U99') { $description = 'iPod (5th generation)'; }
		if ($serial == 'U9B') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'U9C') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'U9D') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'U9E') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'UAG') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'UAH') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'UB1') { $description = 'PowerBook G4 (15-inch, 1.67/1.5GHZ)'; }
		if ($serial == 'UCR') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'UDR') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UDS') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UDT') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UDU') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UDW') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UDX') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UE0') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UE1') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UE2') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UEE') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UEF') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UEG') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UEH') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UF1') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UF6') { $description = 'PowerBook G4 (17-inch, Double-Layer SD)'; }
		if ($serial == 'UF7') { $description = 'PowerBook G4 (17-inch, Double-Layer SD)'; }
		if ($serial == 'UFA') { $description = 'PowerBook G4 (17-inch, Double-Layer SD)'; }
		if ($serial == 'UFB') { $description = 'PowerBook G4 (17-inch, Double-Layer SD)'; }
		if ($serial == 'UFE') { $description = 'PowerBook G4 (17-inch, Double-Layer SD)'; }
		if ($serial == 'UFF') { $description = 'PowerBook G4 (17-inch, Double-Layer SD)'; }
		if ($serial == 'UFG') { $description = 'PowerBook G4 (17-inch, Double-Layer SD)'; }
		if ($serial == 'UFZ') { $description = 'Apple Cinema Display (20-inch, DVI Late 2005)'; }
		if ($serial == 'UG0') { $description = 'Apple Cinema Display (23-inch, DVI Late 2005)'; }
		if ($serial == 'UG2') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'UG3') { $description = 'iMac G5 ALS (17-Inch)'; }
		if ($serial == 'UG4') { $description = 'iMac G5 ALS (20-Inch)'; }
		if ($serial == 'UGL') { $description = 'iMac G5 (17-Inch iSight)'; }
		if ($serial == 'UGM') { $description = 'iMac G5 (20-Inch iSight)'; }
		if ($serial == 'UGN') { $description = 'Final Cut Express HD 3.0'; }
		if ($serial == 'UGP') { $description = 'Final Cut Express HD 3.0'; }
		if ($serial == 'UGQ') { $description = 'Final Cut Express HD 3.0'; }
		if ($serial == 'UK9') { $description = 'iBook G4 (12-inch, Mid 2005)'; }
		if ($serial == 'UKN') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'UKP') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'UKQ') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'UKR') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'UKS') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'UL5') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'ULK') { $description = 'Mac mini (Late 2005)'; }
		if ($serial == 'UM5') { $description = 'Mac OS X 10.4.3'; }
		if ($serial == 'UM8') { $description = 'iMac G5 (17-Inch iSight)'; }
		if ($serial == 'UM9') { $description = 'iMac G5 (20-Inch iSight)'; }
		if ($serial == 'UMB') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'UME') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'UMF') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'UMG') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'UNA') { $description = 'iPod nano'; }
		if ($serial == 'UNB') { $description = 'iPod nano'; }
		if ($serial == 'UPR') { $description = 'iPod nano'; }
		if ($serial == 'UPS') { $description = 'iPod nano'; }
		if ($serial == 'UPZ') { $description = 'Mac Pro'; }
		if ($serial == 'UQ2') { $description = 'Mac Pro'; }
		if ($serial == 'UQD') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UQL') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'UQM') { $description = 'iMac G5 (20-Inch iSight)'; }
		if ($serial == 'UQN') { $description = 'iMac G5 (17-Inch iSight)'; }
		if ($serial == 'URC') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'URK') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'URL') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'URM') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'URN') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'URQ') { $description = 'PowerBook G4 (17-inch, Double-Layer SD)'; }
		if ($serial == 'URR') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'URS') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'US6') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'US8') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'UT6') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UT7') { $description = 'PowerBook G4 (17-inch, Double-Layer SD)'; }
		if ($serial == 'UT8') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'UUA') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'UUF') { $description = 'PowerBook G4 (12-inch, 1.5GHZ)'; }
		if ($serial == 'UUG') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'UUH') { $description = 'eMac (2005)'; }
		if ($serial == 'UUY') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'UUZ') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'UV0') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'UV1') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'UW0') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'UWE') { $description = 'iMac G5 (20-Inch iSight)'; }
		if ($serial == 'UWG') { $description = 'Mac mini (Late 2005)'; }
		if ($serial == 'UWH') { $description = 'iMac G5 (17-Inch iSight)'; }
		if ($serial == 'UWV') { $description = 'PowerBook G4 (17-inch, Double-Layer SD)'; }
		if ($serial == 'UWY') { $description = 'Mac mini (Late 2005)'; }
		if ($serial == 'UWZ') { $description = 'Mac mini (Late 2005)'; }
		if ($serial == 'UX0') { $description = 'Mac mini (Late 2005)'; }
		if ($serial == 'UX4') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'UX5') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'UX9') { $description = 'iMac G5 (17-Inch iSight)'; }
		if ($serial == 'UXA') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UXS') { $description = 'iMac G5 (17-Inch iSight)'; }
		if ($serial == 'UXT') { $description = 'iMac G5 (17-Inch iSight)'; }
		if ($serial == 'UXU') { $description = 'iMac G5 (20-Inch iSight)'; }
		if ($serial == 'UYS') { $description = 'eMac (2005)'; }
		if ($serial == 'UYT') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'UZ0') { $description = 'iPod shuffle'; }
		if ($serial == 'UZ9') { $description = 'iBook G4 (12-inch, Mid 2005)'; }
		if ($serial == 'UZA') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'UZB') { $description = 'PowerBook G4 (15-Inch Double-Layer SD)'; }
		if ($serial == 'UZW') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'UZX') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'UZY') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'UZZ') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'V1Q') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'V2H') { $description = 'iMac (Mid 2006 17-inch)'; }
		if ($serial == 'V2J') { $description = 'iMac (Mid 2006 17-inch)'; }
		if ($serial == 'V2M') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'V2Q') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'V3B') { $description = 'iBook G4 (12-inch, Mid 2005)'; }
		if ($serial == 'V4J') { $description = 'eMac (2005)'; }
		if ($serial == 'V4M') { $description = 'iMac (Early 2006 17-inch)'; }
		if ($serial == 'V4N') { $description = 'iMac (Early 2006 17-inch)'; }
		if ($serial == 'V4P') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'V4Q') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'V4R') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'V4U') { $description = 'iMac (Early 2006 17-inch)'; }
		if ($serial == 'V5V') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'V5W') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'V5X') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'V66') { $description = 'iMac (Early 2006 17-inch)'; }
		if ($serial == 'V67') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'V69') { $description = 'iLife \'06'; }
		if ($serial == 'V6C') { $description = 'iPod (5th generation)'; }
		if ($serial == 'V6E') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'V76') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'V77') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'V8T') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'V8U') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'V8W') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'V8X') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'V9B') { $description = 'Shake 4.X'; }
		if ($serial == 'V9C') { $description = 'Shake 4.X'; }
		if ($serial == 'V9D') { $description = 'Shake 4.X'; }
		if ($serial == 'V9K') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'V9L') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'V9M') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'V9N') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'V9P') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'V9Q') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'V9R') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'V9S') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'V9V') { $description = 'iPod (5th generation U2)'; }
		if ($serial == 'VGB') { $description = 'iMac (Early 2006 17-inch)'; }
		if ($serial == 'VGC') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'VGM') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'VGN') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'VGP') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'VGW') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VGX') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VGY') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VGZ') { $description = 'iMac (Early 2006 17-inch)'; }
		if ($serial == 'VH0') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'VH1') { $description = 'iMac (Early 2006 17-inch)'; }
		if ($serial == 'VH2') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'VHP') { $description = 'iMac (Early 2006 17-inch)'; }
		if ($serial == 'VHQ') { $description = 'iPod (5th generation)'; }
		if ($serial == 'VJ0') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VJ1') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VJ2') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VJ3') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VJ5') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VJ6') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VJ7') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VJM') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VJN') { $description = 'Mac mini (Early 2006)'; }
		if ($serial == 'VJQ') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'VLK') { $description = 'Mac mini (Early 2006)'; }
		if ($serial == 'VMM') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'VMN') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'VMU') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VQ5') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'VQ6') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'VQH') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'VQJ') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'VQK') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'VQL') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'VQT') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'VQU') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'VR0') { $description = 'iPhone (original)'; }
		if ($serial == 'VR3') { $description = 'iBook G4 (12-inch, Mid 2005)'; }
		if ($serial == 'VR4') { $description = 'iBook G4 (12-inch, Mid 2005)'; }
		if ($serial == 'VR5') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'VS5') { $description = 'Mac mini (Early 2006)'; }
		if ($serial == 'VS6') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'VS7') { $description = 'Mac mini (Early 2006)'; }
		if ($serial == 'VS8') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'VS9') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'VSA') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'VSC') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'VSD') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VSK') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'VSS') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'VSW') { $description = 'Nike + iPod Sport Kit'; }
		if ($serial == 'VTE') { $description = 'iPod shuffle (2nd generation)'; }
		if ($serial == 'VTF') { $description = 'iPod shuffle (2nd generation)'; }
		if ($serial == 'VTG') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'VTH') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'VTJ') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'VTZ') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VU0') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VU2') { $description = 'Mac mini (Early 2006)'; }
		if ($serial == 'VU4') { $description = 'Mac mini (Early 2006)'; }
		if ($serial == 'VU5') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'VU6') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'VUJ') { $description = 'Xsan 1.4'; }
		if ($serial == 'VUL') { $description = 'Xsan 1.4'; }
		if ($serial == 'VUP') { $description = 'iPod (5th generation)'; }
		if ($serial == 'VUQ') { $description = 'iPod nano'; }
		if ($serial == 'VUV') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'VUW') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'VUX') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'VUY') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'VUZ') { $description = 'iBook G4 (12-inch, Mid 2005)'; }
		if ($serial == 'VV4') { $description = 'iMac (Early 2006 17-inch)'; }
		if ($serial == 'VV6') { $description = 'iMac (Early 2006 17-inch)'; }
		if ($serial == 'VVV') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'VW1') { $description = 'iBook G4 (14-inch, Mid 2005)'; }
		if ($serial == 'VW3') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'VW4') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'VW5') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'VW8') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'VWA') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VWB') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VWC') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'VWD') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'VWR') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'VWS') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'VWT') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'VWU') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'VWV') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'VWW') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'VWX') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'VWY') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'VWZ') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'VX0') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'VXU') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'VXV') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'VXW') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VXX') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'VYS') { $description = 'AirPort Extreme 802.11n (1st Generation)'; }
		if ($serial == 'VYT') { $description = 'AirPort Extreme 802.11n (1st Generation)'; }
		if ($serial == 'VYU') { $description = 'AirPort Extreme 802.11n (1st Generation)'; }
		if ($serial == 'VYV') { $description = 'AirPort Extreme 802.11n (1st Generation)'; }
		if ($serial == 'VYX') { $description = 'AirPort Extreme 802.11n (1st Generation)'; }
		if ($serial == 'VZC') { $description = 'AirPort Extreme 802.11n (1st Generation)'; }
		if ($serial == 'W06') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'W07') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'W08') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'W09') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'W0A') { $description = 'Mac mini (Late 2006)'; }
		if ($serial == 'W0B') { $description = 'Mac mini (Late 2006)'; }
		if ($serial == 'W0C') { $description = 'Mac mini (Late 2006)'; }
		if ($serial == 'W0D') { $description = 'Mac mini (Late 2006)'; }
		if ($serial == 'W0G') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'W0H') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'W0J') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'W0K') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'W0L') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'W0M') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'W0W') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'W2Q') { $description = 'MacBook Pro (original)'; }
		if ($serial == 'W32') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'W3N') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'W3P') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'W3Q') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'W3R') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'W4F') { $description = 'iBook G4 (12-inch, Mid 2005)'; }
		if ($serial == 'W4K') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'W4L') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'W4M') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'W4N') { $description = 'iPod touch'; }
		if ($serial == 'W4T') { $description = 'iPod touch'; }
		if ($serial == 'W4X') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'W5U') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'W6F') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'W8K') { $description = 'iMac (Mid 2006 17-inch)'; }
		if ($serial == 'W90') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'W91') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'W92') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'W93') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'W94') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'W9E') { $description = 'iMac (Mid 2006 17-inch)'; }
		if ($serial == 'W9F') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'W9G') { $description = 'iPod (5th generation U2 Late 2006)'; }
		if ($serial == 'W9N') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'W9P') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'W9Q') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WAE') { $description = 'iMac (Mid 2006 17-inch)'; }
		if ($serial == 'WAG') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WAR') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'WAW') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WAY') { $description = 'Power Mac G5 (Late 2005)'; }
		if ($serial == 'WB7') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WB8') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WB9') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WBB') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WBC') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WBD') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WBE') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WBF') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WBG') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WBH') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WBJ') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WBK') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WBV') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WBW') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WBX') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WBY') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WBZ') { $description = 'Mac mini (Early 2006)'; }
		if ($serial == 'WC0') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WC4') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WCU') { $description = 'Mac mini (Early 2006)'; }
		if ($serial == 'WCV') { $description = 'iMac (Mid 2006 17-inch)'; }
		if ($serial == 'WD1') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'WD2') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'WD3') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'WD4') { $description = 'iMac (Mid 2006 17-inch)'; }
		if ($serial == 'WD7') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WD8') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WD9') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WDA') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WDB') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WDC') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WDD') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WDE') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'WE7') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WE8') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WE9') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WEC') { $description = 'iPod (5th generation)'; }
		if ($serial == 'WED') { $description = 'iPod (5th generation)'; }
		if ($serial == 'WEE') { $description = 'iPod (5th generation)'; }
		if ($serial == 'WEF') { $description = 'iPod (5th generation)'; }
		if ($serial == 'WEG') { $description = 'iPod (5th generation)'; }
		if ($serial == 'WEH') { $description = 'iPod (5th generation)'; }
		if ($serial == 'WEJ') { $description = 'iPod (5th generation)'; }
		if ($serial == 'WEK') { $description = 'iPod (5th generation)'; }
		if ($serial == 'WEM') { $description = 'iPod (5th generation U2)'; }
		if ($serial == 'WEN') { $description = 'Mac mini (Early 2006)'; }
		if ($serial == 'WGK') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'WGL') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'WGM') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'WGN') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'WGP') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'WGQ') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'WGS') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'WGT') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'WGU') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'WH4') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == 'WH5') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == 'WH7') { $description = 'Apple TV (1st generation)'; }
		if ($serial == 'WH8') { $description = 'iPhone (original)'; }
		if ($serial == 'WJ0') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'WK7') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WKD') { $description = 'Mac Pro'; }
		if ($serial == 'WKN') { $description = 'Mac mini (Late 2006)'; }
		if ($serial == 'WKT') { $description = 'iMac (Mid 2006 17-inch)'; }
		if ($serial == 'WL2') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'WL3') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'WQR') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == 'WQW') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'WR3') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'WRQ') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == 'WRR') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'WRS') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'WRT') { $description = 'Mac Pro'; }
		if ($serial == 'WRU') { $description = 'Mac Pro'; }
		if ($serial == 'WRW') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'WRX') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'WS4') { $description = 'Mac Pro'; }
		if ($serial == 'WS8') { $description = 'iPod nano'; }
		if ($serial == 'WS9') { $description = 'iPod nano'; }
		if ($serial == 'WSB') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WSD') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'WSE') { $description = 'Mac Pro'; }
		if ($serial == 'WSG') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'WTS') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WU9') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'WUA') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'WUB') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'WUC') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'WUD') { $description = 'Mac Pro'; }
		if ($serial == 'WV7') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == 'WV8') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'WVG') { $description = 'iWork 08'; }
		if ($serial == 'WVN') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'WVR') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'WVS') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'WVT') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'WVU') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'WVY') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'WVZ') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'WW0') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WW1') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WW2') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WW3') { $description = 'MacBook Pro (15-inch, Glossy)'; }
		if ($serial == 'WWM') { $description = 'Mac Pro'; }
		if ($serial == 'WWN') { $description = 'Mac Pro'; }
		if ($serial == 'WWP') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WWQ') { $description = 'Mac Pro'; }
		if ($serial == 'WWT') { $description = 'MacBook (13-inch)'; }
		if ($serial == 'WWU') { $description = 'MacBook Pro (17-inch)'; }
		if ($serial == 'WWX') { $description = 'Mac Pro'; }
		if ($serial == 'WXB') { $description = 'Logic Studio'; }
		if ($serial == 'WXG') { $description = 'Logic Express 8'; }
		if ($serial == 'WXH') { $description = 'Logic Express 8'; }
		if ($serial == 'WXM') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'WXN') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'WYG') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'X09') { $description = 'Mac Pro'; }
		if ($serial == 'X0A') { $description = 'Mac Pro'; }
		if ($serial == 'X0B') { $description = 'Mac Pro'; }
		if ($serial == 'X0C') { $description = 'Mac Pro'; }
		if ($serial == 'X0E') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'X0U') { $description = 'iMac (Early 2006 20-inch)'; }
		if ($serial == 'X11') { $description = 'iMac (Mid 2006 17-inch)'; }
		if ($serial == 'X13') { $description = 'Mac Pro'; }
		if ($serial == 'X14') { $description = 'Mac Pro'; }
		if ($serial == 'X1A') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'X1W') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'X1X') { $description = 'Mac mini (Late 2006)'; }
		if ($serial == 'X1Y') { $description = 'Mac mini (Late 2006)'; }
		if ($serial == 'X1Z') { $description = 'Mac mini (Late 2006)'; }
		if ($serial == 'X20') { $description = 'Mac mini (Late 2006)'; }
		if ($serial == 'X24') { $description = 'Mac Pro'; }
		if ($serial == 'X27') { $description = 'Mac Pro'; }
		if ($serial == 'X29') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'X2A') { $description = 'Mac Pro'; }
		if ($serial == 'X2C') { $description = 'Xserve G5 (January 2005)'; }
		if ($serial == 'X2E') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'X2F') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'X2G') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'X2H') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'X2J') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'X2K') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'X2L') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'X2W') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'X3C') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'X3N') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'X3P') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == 'X3Y') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'X40') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'X41') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'X42') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'X43') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'X44') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'X4W') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == 'X57') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'X5X') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'X68') { $description = 'Mac Pro'; }
		if ($serial == 'X6A') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'X6B') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'X6C') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'X6G') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'X6H') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'X6J') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'X6K') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'X6L') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'X6Q') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'X6S') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'X6T') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'X78') { $description = 'Mac Pro'; }
		if ($serial == 'X7X') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'X82') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'X83') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'X84') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'X85') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == 'X86') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == 'X87') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == 'X88') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == 'X89') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == 'X8A') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == 'X8S') { $description = 'Xserve (Early 2008)'; }
		if ($serial == 'X8T') { $description = 'Xserve (Early 2008)'; }
		if ($serial == 'X8X') { $description = 'Final Cut Studio 2'; }
		if ($serial == 'X8Y') { $description = 'Final Cut Studio 2'; }
		if ($serial == 'X8Z') { $description = 'Final Cut Studio 2'; }
		if ($serial == 'X91') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'X92') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'X93') { $description = 'Final Cut Studio 2'; }
		if ($serial == 'X94') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'X97') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'X98') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'X9A') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'X9B') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'X9E') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'X9F') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'X9G') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'X9U') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'X9V') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'X9W') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'X9Y') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'XA4') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'XA5') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'XA6') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'XA9') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'XAG') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'XAH') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'XAP') { $description = 'Bluetooth Headset'; }
		if ($serial == 'XAQ') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'XAR') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XAS') { $description = 'Mac mini (Late 2006)'; }
		if ($serial == 'XAT') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XAU') { $description = 'Mac Pro'; }
		if ($serial == 'XAV') { $description = 'Mac Pro'; }
		if ($serial == 'XAW') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'XBF') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'XBG') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'XBR') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'XBS') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'XBT') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'XC5') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XC6') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'XCJ') { $description = 'Mac Pro'; }
		if ($serial == 'XCK') { $description = 'Mac Pro'; }
		if ($serial == 'XCR') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'XCS') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'XCT') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'XCY') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'XDB') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'XDC') { $description = 'Logic Studio'; }
		if ($serial == 'XDE') { $description = 'Logic Studio'; }
		if ($serial == 'XDF') { $description = 'Logic Studio'; }
		if ($serial == 'XDK') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'XDL') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'XDN') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XDR') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XDS') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XDT') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XDU') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XDV') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XDW') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XDX') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XDY') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XDZ') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XE0') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XE1') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XE2') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XE3') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XHB') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XHC') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XKT') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XKU') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'XL3') { $description = 'Mac Pro'; }
		if ($serial == 'XLD') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'XLF') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'XLR') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'XMF') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'XNH') { $description = 'iPod nano (2nd generation)'; }
		if ($serial == 'XNJ') { $description = 'iPod (5th generation Late 2006)'; }
		if ($serial == 'XNK') { $description = 'Mac Pro'; }
		if ($serial == 'XQS') { $description = 'iPod shuffle (2nd generation)'; }
		if ($serial == 'XQU') { $description = 'iPod shuffle (2nd generation)'; }
		if ($serial == 'XQV') { $description = 'iPod shuffle (2nd generation)'; }
		if ($serial == 'XQX') { $description = 'iPod shuffle (2nd generation)'; }
		if ($serial == 'XQY') { $description = 'iPod shuffle (2nd generation)'; }
		if ($serial == 'XR0') { $description = 'iPod shuffle (2nd generation)'; }
		if ($serial == 'XR1') { $description = 'iPod shuffle (2nd generation)'; }
		if ($serial == 'XR3') { $description = 'iPod shuffle (2nd generation)'; }
		if ($serial == 'XSM') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'XVC') { $description = 'Apple TV (1st generation)'; }
		if ($serial == 'XVD') { $description = 'Apple TV (1st generation)'; }
		if ($serial == 'XVE') { $description = 'Apple TV (1st generation)'; }
		if ($serial == 'XVF') { $description = 'Apple TV (1st generation)'; }
		if ($serial == 'XVG') { $description = 'Apple TV (1st generation)'; }
		if ($serial == 'XWE') { $description = 'Logic Express 8'; }
		if ($serial == 'XWV') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'XWW') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'XWZ') { $description = 'Mac Pro'; }
		if ($serial == 'XXC') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'XXD') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'XXE') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'XXF') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'XYK') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == 'XYL') { $description = 'Mac Pro (Early 2008)'; }
		if ($serial == 'XZP') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'XZS') { $description = 'Mac Pro'; }
		if ($serial == 'XZT') { $description = 'Mac Pro'; }
		if ($serial == 'Y0P') { $description = 'iPod nano (3rd generation)'; }
		if ($serial == 'Y0R') { $description = 'iPod nano (3rd generation)'; }
		if ($serial == 'Y0T') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'Y0U') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'Y1C') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'Y3P') { $description = 'Mac Pro'; }
		if ($serial == 'Y3R') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'Y3U') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'Y3V') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'Y3W') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'Y3X') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'Y3Y') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'Y3Z') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'Y40') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'Y41') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'Y49') { $description = 'Final Cut Server 1.x'; }
		if ($serial == 'Y4A') { $description = 'Final Cut Server 1.x'; }
		if ($serial == 'Y4D') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == 'Y4E') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == 'Y4P') { $description = 'Final Cut Server 1.x'; }
		if ($serial == 'Y4Q') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == 'Y51') { $description = 'MacBook Air (Original)'; }
		if ($serial == 'Y57') { $description = 'Mac OS X Server 10.5'; }
		if ($serial == 'Y58') { $description = 'Mac OS X Server 10.5'; }
		if ($serial == 'Y59') { $description = 'Mac OS X Server 10.5'; }
		if ($serial == 'Y5G') { $description = 'MacBook Air (Original)'; }
		if ($serial == 'Y5L') { $description = 'Mac Pro'; }
		if ($serial == 'Y5N') { $description = 'iPod classic'; }
		if ($serial == 'Y6K') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'Y6L') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'Y6M') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'Y6N') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'Y7H') { $description = 'iPhone 3G'; }
		if ($serial == 'Y7K') { $description = 'iPhone 3G'; }
		if ($serial == 'Y8F') { $description = 'Mac Pro'; }
		if ($serial == 'Y8S') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'Y94') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'Y97') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'Y98') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'Y99') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'Y9A') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'Y9B') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'Y9E') { $description = 'Mac mini (Late 2006)'; }
		if ($serial == 'Y9M') { $description = 'MacBook Pro (17-inch, Core 2 Duo)'; }
		if ($serial == 'Y9S') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'Y9T') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YA2') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YA3') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YA4') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YA5') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YA6') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YA7') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YA8') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YA9') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YAA') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YAB') { $description = 'Mac Pro'; }
		if ($serial == 'YAE') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'YAF') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'YAG') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'YAL') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YAM') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YAN') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YAP') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YB9') { $description = 'Xsan 2'; }
		if ($serial == 'YCP') { $description = 'AirPort Extreme 802.11n (2nd Generation)'; }
		if ($serial == 'YCU') { $description = 'MacBook (13-inch, Late 2006)'; }
		if ($serial == 'YD4') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == 'YDW') { $description = 'iMac (20-inch, Late 2006)'; }
		if ($serial == 'YEV') { $description = 'AirPort Extreme 802.11n (2nd Generation)'; }
		if ($serial == 'YEW') { $description = 'AirPort Extreme 802.11n (2nd Generation)'; }
		if ($serial == 'YEX') { $description = 'AirPort Extreme 802.11n (2nd Generation)'; }
		if ($serial == 'YEY') { $description = 'AirPort Extreme 802.11n (2nd Generation)'; }
		if ($serial == 'YHA') { $description = 'Mac Pro'; }
		if ($serial == 'YHT') { $description = 'iMac (Slot Loading)'; }
		if ($serial == 'YHY') { $description = 'Mac Pro'; }
		if ($serial == 'YJ0') { $description = 'Mac Pro'; }
		if ($serial == 'YJ9') { $description = 'MacBook Pro (15-inch, Core 2 Duo)'; }
		if ($serial == 'YJJ') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YJK') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YJL') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YJM') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YJN') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YJX') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == 'YJY') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == 'YJZ') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == 'YK0') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == 'YKH') { $description = 'Mac Pro'; }
		if ($serial == 'YKX') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YKY') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YKZ') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YL0') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YL1') { $description = 'Mac mini (Mid 2007)'; }
		if ($serial == 'YL2') { $description = 'Mac mini (Mid 2007)'; }
		if ($serial == 'YL3') { $description = 'Mac mini (Mid 2007)'; }
		if ($serial == 'YL4') { $description = 'Mac mini (Mid 2007)'; }
		if ($serial == 'YLJ') { $description = 'iMac (17-inch, Late 2006)'; }
		if ($serial == 'YMU') { $description = 'iPod classic'; }
		if ($serial == 'YMV') { $description = 'iPod classic'; }
		if ($serial == 'YMX') { $description = 'iPod classic'; }
		if ($serial == 'YNQ') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YNS') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YNW') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YP3') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == 'YP4') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == 'YQ3') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YQ4') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YQ5') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YQ7') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YQ8') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YR2') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YR4') { $description = 'Apple TV (1st generation)'; }
		if ($serial == 'YRD') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YRE') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YRF') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YRG') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YRH') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YRJ') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YRK') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YSH') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YSJ') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YSK') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YSL') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YSM') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YSS') { $description = 'Apple TV (1st generation)'; }
		if ($serial == 'YST') { $description = 'Apple TV (1st generation)'; }
		if ($serial == 'YSU') { $description = 'Apple TV (1st generation)'; }
		if ($serial == 'YSV') { $description = 'Apple TV (1st generation)'; }
		if ($serial == 'YSW') { $description = 'Apple TV (1st generation)'; }
		if ($serial == 'YTK') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YTL') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YTN') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == 'YV8') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YW5') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YW9') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YWA') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YWB') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YWC') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YWD') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YWF') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'YX0') { $description = 'iMac (24-inch, Late 2006)'; }
		if ($serial == 'YX1') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YX2') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YX3') { $description = 'Mac Pro'; }
		if ($serial == 'YX4') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YX5') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YX6') { $description = 'iPod shuffle (2nd generation Late 2007)'; }
		if ($serial == 'YX7') { $description = 'iPod shuffle (2nd generation Late 2007)'; }
		if ($serial == 'YX8') { $description = 'iPod shuffle (2nd generation Late 2007)'; }
		if ($serial == 'YX9') { $description = 'iPod shuffle (2nd generation Late 2007)'; }
		if ($serial == 'YXA') { $description = 'iPod shuffle (2nd generation Late 2007)'; }
		if ($serial == 'YXR') { $description = 'iPod nano (3rd generation)'; }
		if ($serial == 'YXT') { $description = 'iPod nano (3rd generation)'; }
		if ($serial == 'YXV') { $description = 'iPod nano (3rd generation)'; }
		if ($serial == 'YXX') { $description = 'iPod nano (3rd generation)'; }
		if ($serial == 'YXZ') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YY1') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YY4') { $description = 'Mac Pro'; }
		if ($serial == 'YY6') { $description = 'Xserve RAID (SFP Late 2004)'; }
		if ($serial == 'YYV') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YYW') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'YYX') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YZ0') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'YZ1') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YZ2') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'YZ8') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'YZ9') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'YZQ') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == 'YZR') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == 'YZS') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == 'YZT') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == 'YZU') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == 'YZV') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == 'YZW') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == 'YZX') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == 'YZY') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == 'YZZ') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == 'Z05') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'Z09') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'Z0G') { $description = 'MacBook Pro (15-inch, 2.4/2.2GHz)'; }
		if ($serial == 'Z26') { $description = 'Final Cut Express 4.0'; }
		if ($serial == 'Z27') { $description = 'Final Cut Express 4.0'; }
		if ($serial == 'Z2F') { $description = 'Xserve (Late 2006)'; }
		if ($serial == 'Z2G') { $description = 'Mac Pro'; }
		if ($serial == 'Z2H') { $description = 'Mac Pro'; }
		if ($serial == 'Z2M') { $description = 'Aperture 2.x'; }
		if ($serial == 'Z2N') { $description = 'Aperture 2.x'; }
		if ($serial == 'Z2P') { $description = 'Aperture 2.x'; }
		if ($serial == 'Z38') { $description = 'iPad'; }
		if ($serial == 'Z39') { $description = 'iPad'; }
		if ($serial == 'Z3A') { $description = 'iPad'; }
		if ($serial == 'Z58') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == 'Z59') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == 'Z5F') { $description = 'Mac mini (Mid 2007)'; }
		if ($serial == 'Z5M') { $description = 'MacBook Pro (17-inch, 2.4GHZ)'; }
		if ($serial == 'Z5V') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'Z5W') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'Z5X') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'Z5Y') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'Z5Z') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'Z60') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'Z62') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == 'Z63') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == 'Z64') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == 'Z65') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == 'Z66') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == 'Z67') { $description = 'MacBook (13-inch, Late 2007)'; }
		if ($serial == 'Z6M') { $description = 'Mac Pro'; }
		if ($serial == 'Z6N') { $description = 'Mac Pro'; }
		if ($serial == 'Z88') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'Z9F') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == 'Z9G') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == 'ZA8') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZA9') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZAP') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZAQ') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZAS') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZAU') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZAV') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZAW') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZAX') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZAY') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZAZ') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZB0') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZB1') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZB2') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZB7') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZB8') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZB9') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZBA') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZBB') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZBE') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZBF') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZBG') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZBH') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZBJ') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZBK') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZCA') { $description = 'iMac (17-inch, Late 2006 CD)'; }
		if ($serial == 'ZCN') { $description = 'MacBook (13-inch, Mid 2007)'; }
		if ($serial == 'ZCR') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == 'ZCT') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == 'ZCV') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == 'ZCW') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == 'ZDY') { $description = 'Mac Pro'; }
		if ($serial == 'ZE2') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == 'ZE3') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == 'ZE4') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == 'ZE5') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == 'ZE6') { $description = 'iMac (20-inch, Early 2008)'; }
		if ($serial == 'ZE7') { $description = 'iMac (24-inch, Early 2008)'; }
		if ($serial == 'ZEF') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == 'ZEG') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == 'ZFD') { $description = 'iMac (20-inch, Mid 2007)'; }
		if ($serial == 'ZGH') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == 'ZGP') { $description = 'iMac (24-inch, Mid 2007)'; }
		if ($serial == 'ZJB') { $description = 'iLife \'08'; }
		if ($serial == 'ZLU') { $description = 'MacBook Pro (15-inch, Early 2008)'; }
		if ($serial == 'ZLV') { $description = 'MacBook Pro (17-inch, Early 2008)'; }
		if ($serial == 'ZNZ') { $description = 'Mac Pro'; }
		if ($serial == 'ZP0') { $description = 'Mac Pro'; }
		if ($serial == 'ZP3') { $description = 'Final Cut Express 4.0'; }
		if ($serial == 'ZP8') { $description = 'AirPort Express 802.11n (1st Generation)'; }
		if ($serial == 'ZTM') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == 'ZTN') { $description = 'Time Capsule 802.11n (1st Generation)'; }
		if ($serial == 'DC79') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DC7C') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DCMJ') { $description = 'iPod shuffle (4th generation)'; }
		if ($serial == 'DCMK') { $description = 'iPod shuffle (4th generation)'; }
		if ($serial == 'DCMN') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DCMP') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DCP7') { $description = 'iPod touch (4th generation)'; }
		if ($serial == 'DCP9') { $description = 'iPod touch (4th generation)'; }
		if ($serial == 'DCPC') { $description = 'iPod touch (4th generation)'; }
		if ($serial == 'DCV9') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DCVC') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DD6H') { $description = 'Mac mini (Mid 2010)'; }
		if ($serial == 'DD6K') { $description = 'Mac mini Server (Mid 2010)'; }
		if ($serial == 'DD6L') { $description = 'Mac mini (Mid 2010)'; }
		if ($serial == 'DD6N') { $description = 'Mac mini Server (Mid 2010)'; }
		if ($serial == 'DD6Y') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DDHM') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DDHN') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DDJF') { $description = 'Mac mini Server (Mid 2010)'; }
		if ($serial == 'DDJT') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DDJV') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DDJW') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DDJX') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DDJY') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DDK0') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DDK1') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DDK2') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DDK3') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DDK4') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DDP7') { $description = 'iPhone 4 (CDMA)'; }
		if ($serial == 'DDP8') { $description = 'iPhone 4 (CDMA)'; }
		if ($serial == 'DDP9') { $description = 'iPhone 4 (CDMA)'; }
		if ($serial == 'DDPC') { $description = 'iPhone 4 (CDMA)'; }
		if ($serial == 'DDQ9') { $description = 'Mac mini (Mid 2010)'; }
		if ($serial == 'DDQW') { $description = 'MacBook Air (11-inch, Late 2010)'; }
		if ($serial == 'DDQX') { $description = 'MacBook Air (11-inch, Late 2010)'; }
		if ($serial == 'DDQY') { $description = 'MacBook Air (11-inch, Late 2010)'; }
		if ($serial == 'DDR0') { $description = 'MacBook Air (11-inch, Late 2010)'; }
		if ($serial == 'DDR1') { $description = 'MacBook Air (13-inch, Late 2010)'; }
		if ($serial == 'DDR2') { $description = 'MacBook Air (13-inch, Late 2010)'; }
		if ($serial == 'DDR3') { $description = 'MacBook Air (13-inch, Late 2010)'; }
		if ($serial == 'DDR4') { $description = 'MacBook Air (13-inch, Late 2010)'; }
		if ($serial == 'DDR5') { $description = 'Apple TV (2nd generation)'; }
		if ($serial == 'DDVN') { $description = 'Mac mini (Mid 2010)'; }
		if ($serial == 'DDVX') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DDVY') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DDW0') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DDW1') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DDW2') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DDW3') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DDW4') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DDW5') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DDW6') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DDW7') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DDW8') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DDW9') { $description = 'iPod nano (6th generation)'; }
		if ($serial == 'DF8V') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DF8X') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DF8Y') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DF91') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DF92') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DF93') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DFDK') { $description = 'Mac mini (Mid 2010)'; }
		if ($serial == 'DFDM') { $description = 'iPod shuffle (4th generation)'; }
		if ($serial == 'DFDN') { $description = 'iPod shuffle (4th generation)'; }
		if ($serial == 'DFDP') { $description = 'iPod shuffle (4th generation)'; }
		if ($serial == 'DFHW') { $description = 'iPad 2'; }
		if ($serial == 'DFHY') { $description = 'iPad 2'; }
		if ($serial == 'DFJ0') { $description = 'iPad 2'; }
		if ($serial == 'DFJ1') { $description = 'iPad 2 Wi-Fi + 3G'; }
		if ($serial == 'DFJ2') { $description = 'iPad 2 Wi-Fi + 3G'; }
		if ($serial == 'DFJ3') { $description = 'iPad 2 Wi-Fi + 3G'; }
		if ($serial == 'DH2G') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DH2H') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DH2L') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DH2M') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DHJF') { $description = 'iMac (21.5-inch, Mid 2011)'; }
		if ($serial == 'DHJH') { $description = 'Apple TV (2nd generation)'; }
		if ($serial == 'DHJK') { $description = 'Apple TV (2nd generation)'; }
		if ($serial == 'DHJM') { $description = 'Apple TV (2nd generation)'; }
		if ($serial == 'DHJN') { $description = 'iMac (21.5-inch, Mid 2011)'; }
		if ($serial == 'DHJP') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DHJQ') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DHJR') { $description = 'iMac (21.5-inch, Mid 2011)'; }
		if ($serial == 'DHJT') { $description = 'iMac (21.5-inch, Mid 2011)'; }
		if ($serial == 'DHJV') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DHJW') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DHVV') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DHYC') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DJ5F') { $description = 'MacBook Air (13-inch, Late 2010)'; }
		if ($serial == 'DJ5G') { $description = 'MacBook Air (13-inch, Late 2010)'; }
		if ($serial == 'DJ5H') { $description = 'MacBook Air (11-inch, Late 2010)'; }
		if ($serial == 'DJ5J') { $description = 'MacBook Air (11-inch, Late 2010)'; }
		if ($serial == 'DJ66') { $description = 'MacBook Air (13-inch, Late 2010)'; }
		if ($serial == 'DJ67') { $description = 'MacBook Air (11-inch, Late 2010)'; }
		if ($serial == 'DJ6G') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DJ8R') { $description = 'iPad (3rd generation)'; }
		if ($serial == 'DJ8T') { $description = 'iPad (3rd generation)'; }
		if ($serial == 'DJ8V') { $description = 'iPad (3rd generation)'; }
		if ($serial == 'DJD0') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DJD1') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DJD2') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DJD3') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DJDK') { $description = 'MacBook Air (13-inch, Late 2010)'; }
		if ($serial == 'DJDL') { $description = 'MacBook Air (11-inch, Late 2010)'; }
		if ($serial == 'DJFD') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'DJFF') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'DJGN') { $description = 'iLife \'11'; }
		if ($serial == 'DJGR') { $description = 'Apple Thunderbolt Display (27-inch)'; }
		if ($serial == 'DJHF') { $description = 'iPad 2 Wi-Fi + 3G (Verizon)'; }
		if ($serial == 'DJHG') { $description = 'iPad 2 Wi-Fi + 3G (Verizon)'; }
		if ($serial == 'DJHH') { $description = 'iPad 2 Wi-Fi + 3G (Verizon)'; }
		if ($serial == 'DJLP') { $description = 'MacBook Air (13-inch, Late 2010)'; }
		if ($serial == 'DJLQ') { $description = 'MacBook Air (13-inch, Late 2010)'; }
		if ($serial == 'DJQK') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DJQL') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DJWQ') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'DJWR') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'DJWT') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'DJWV') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'DJY7') { $description = 'Mac mini Server (Mid 2011)'; }
		if ($serial == 'DJY8') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DJY9') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DJYC') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DJYD') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DK9H') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DK9J') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DK9K') { $description = 'MacBook Pro (17-inch, Mid 2010)'; }
		if ($serial == 'DKDJ') { $description = 'Mac mini Server (Mid 2011)'; }
		if ($serial == 'DKL9') { $description = 'iMac (21.5-inch, Late 2011)'; }
		if ($serial == 'DKLH') { $description = 'iMac (21.5-inch, Late 2011)'; }
		if ($serial == 'DKNV') { $description = 'iPad 2 Wi-Fi + 3G'; }
		if ($serial == 'DKNW') { $description = 'iPad 2 Wi-Fi + 3G'; }
		if ($serial == 'DKNY') { $description = 'iPad 2 Wi-Fi + 3G'; }
		if ($serial == 'DKPH') { $description = 'iPad 2'; }
		if ($serial == 'DKPJ') { $description = 'iPad 2'; }
		if ($serial == 'DKPK') { $description = 'iPad 2'; }
		if ($serial == 'DKPL') { $description = 'iPad 2 Wi-Fi + 3G (Verizon)'; }
		if ($serial == 'DKPM') { $description = 'iPad 2 Wi-Fi + 3G (Verizon)'; }
		if ($serial == 'DKPN') { $description = 'iPad 2 Wi-Fi + 3G (Verizon)'; }
		if ($serial == 'DKQ1') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'DKQ2') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'DKQ4') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'DKQ5') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'DL8M') { $description = 'iMac (21.5-inch, Mid 2011)'; }
		if ($serial == 'DL8N') { $description = 'iMac (21.5-inch, Mid 2011)'; }
		if ($serial == 'DL8P') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DL8Q') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DLN5') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DLN6') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DLN7') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DLN8') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DLN9') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DLNC') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DM72') { $description = 'AirPort Extreme 802.11n (5th Generation)'; }
		if ($serial == 'DM73') { $description = 'Time Capsule 802.11n (4th Generation)'; }
		if ($serial == 'DM74') { $description = 'Time Capsule 802.11n (4th Generation)'; }
		if ($serial == 'DM75') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DMC8') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMC9') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMDG') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMDH') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMDJ') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMGG') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMGH') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DMLF') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DMLH') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DMLJ') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DMMF') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMMH') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMMJ') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMP0') { $description = 'iMac (21.5-inch, Mid 2011)'; }
		if ($serial == 'DMPG') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMPK') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMPL') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMPM') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMPN') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMPP') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMPQ') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMPR') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMQP') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DMQT') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DMQW') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DMR2') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DMR4') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DMR5') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DMR7') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DMR8') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DMR9') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DMRC') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DMW4') { $description = 'MacBook Air (13-inch, Late 2010)'; }
		if ($serial == 'DMW8') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DN00') { $description = 'MacBook Air (11-inch, Late 2010)'; }
		if ($serial == 'DNC3') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DNCM') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DNCN') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DNCR') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'DNCT') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'DNCV') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'DNCW') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'DNGD') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DNGF') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DNGG') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DNGH') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DNH5') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DNHY') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DNJ9') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DNKM') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DNKN') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DNKP') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DNKQ') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DNKY') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DNM4') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DNML') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'DNMM') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'DNMN') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'DNMP') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'DNMW') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DNND') { $description = 'AirPort Extreme 802.11n (4th Generation)'; }
		if ($serial == 'DNNF') { $description = 'AirPort Extreme 802.11n (4th Generation)'; }
		if ($serial == 'DNNG') { $description = 'AirPort Extreme 802.11n (4th Generation)'; }
		if ($serial == 'DNNH') { $description = 'AirPort Extreme 802.11n (4th Generation)'; }
		if ($serial == 'DNNJ') { $description = 'AirPort Extreme 802.11n (4th Generation)'; }
		if ($serial == 'DNQR') { $description = 'iPad (3rd Generation) Wi-Fi + Cellular (Verizon)'; }
		if ($serial == 'DNQT') { $description = 'iPad (3rd Generation) Wi-Fi + Cellular (Verizon)'; }
		if ($serial == 'DNQV') { $description = 'iPad (3rd Generation) Wi-Fi + Cellular (Verizon)'; }
		if ($serial == 'DNQW') { $description = 'iPod touch (4th generation)'; }
		if ($serial == 'DNQY') { $description = 'iPod touch (4th generation)'; }
		if ($serial == 'DNR0') { $description = 'iPod touch (4th generation)'; }
		if ($serial == 'DNRD') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DNTK') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DNVK') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DNVY') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DNWY') { $description = 'iMac (21.5-inch, Mid 2011)'; }
		if ($serial == 'DNY0') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DP0N') { $description = 'iPhone 4 (8GB)'; }
		if ($serial == 'DP0V') { $description = 'iPhone 4 CDMA (8GB)'; }
		if ($serial == 'DPM0') { $description = 'iMac (21.5-inch, Mid 2011)'; }
		if ($serial == 'DPM1') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DPM2') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DPMW') { $description = 'iPhone 4 (8GB)'; }
		if ($serial == 'DPNG') { $description = 'iPhone 4 CDMA (8GB)'; }
		if ($serial == 'DPNK') { $description = 'iMac (21.5-inch, Late 2011)'; }
		if ($serial == 'DPNT') { $description = 'iMac (21.5-inch, Mid 2011)'; }
		if ($serial == 'DPNV') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DPNW') { $description = 'iMac (21.5-inch, Late 2011)'; }
		if ($serial == 'DQQ6') { $description = 'MacBook Air (11-inch, Late 2010)'; }
		if ($serial == 'DR53') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'DR54') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'DR55') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'DR56') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'DR7W') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DRHF') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DRHN') { $description = 'Apple TV (3rd generation)'; }
		if ($serial == 'DRHR') { $description = 'Mac mini Server (Mid 2011)'; }
		if ($serial == 'DRHT') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DRJ7') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DRJ9') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DRJC') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DRJD') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DRJF') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DRJG') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DRJH') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DRJJ') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DRJK') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DRJL') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DRJM') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DRJN') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DRKG') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'DRKH') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DRQ4') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'DRV6') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'DRV7') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'DRV8') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'DRV9') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'DRVC') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'DRVD') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'DRVF') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'DRVG') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'DRVP') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DRW1') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DRW2') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DRW3') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DRW4') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DRW5') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DRW6') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DRW7') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DRWD') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT4G') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DT4H') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DT4J') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT54') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT55') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT56') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT57') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT58') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT59') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT5C') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT5D') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT5F') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT5G') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT5H') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT5J') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT5L') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT5M') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DT5N') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DT5P') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DT5Q') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DT5R') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DT5T') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DT5V') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DT5W') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DT5Y') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DT60') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DT61') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DT62') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DT63') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DT64') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DT65') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DT66') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DT67') { $description = 'MacBook Pro (13-inch, Early 2011)'; }
		if ($serial == 'DT68') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT69') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT6C') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT6D') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT6F') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT6G') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT6H') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT6J') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT6K') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT6L') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT6M') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT6N') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DT6P') { $description = 'MacBook Pro (17-inch, Early 2011)'; }
		if ($serial == 'DT6R') { $description = 'MacBook Pro (15-inch, Early 2011)'; }
		if ($serial == 'DT75') { $description = 'iPod touch (4th generation)'; }
		if ($serial == 'DT77') { $description = 'iPod touch (4th generation)'; }
		if ($serial == 'DT78') { $description = 'iPod touch (4th generation)'; }
		if ($serial == 'DT9V') { $description = 'iPhone 4S'; }
		if ($serial == 'DT9Y') { $description = 'iPhone 4S'; }
		if ($serial == 'DTC0') { $description = 'iPhone 4S'; }
		if ($serial == 'DTC1') { $description = 'iPhone 4S'; }
		if ($serial == 'DTCJ') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DTCK') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DTCL') { $description = 'Mac mini Server (Mid 2011)'; }
		if ($serial == 'DTCM') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DTCT') { $description = 'Mac mini Server (Mid 2011)'; }
		if ($serial == 'DTCV') { $description = 'Mac mini Server (Mid 2011)'; }
		if ($serial == 'DTD0') { $description = 'iPhone 4S'; }
		if ($serial == 'DTD1') { $description = 'iPhone 4S'; }
		if ($serial == 'DTD2') { $description = 'iPhone 4S'; }
		if ($serial == 'DTD3') { $description = 'iPhone 4S'; }
		if ($serial == 'DTD5') { $description = 'iPhone 4S'; }
		if ($serial == 'DTD6') { $description = 'iPhone 4S'; }
		if ($serial == 'DTD7') { $description = 'iPhone 4S'; }
		if ($serial == 'DTD8') { $description = 'iPhone 4S'; }
		if ($serial == 'DTDC') { $description = 'iPhone 4S'; }
		if ($serial == 'DTDD') { $description = 'iPhone 4S'; }
		if ($serial == 'DTDF') { $description = 'iPhone 4S'; }
		if ($serial == 'DTDG') { $description = 'iPhone 4S'; }
		if ($serial == 'DTDK') { $description = 'iPhone 4S'; }
		if ($serial == 'DTDL') { $description = 'iPhone 4S'; }
		if ($serial == 'DTDM') { $description = 'iPhone 4S'; }
		if ($serial == 'DTDN') { $description = 'iPhone 4S'; }
		if ($serial == 'DTDR') { $description = 'iPhone 4S'; }
		if ($serial == 'DTDT') { $description = 'iPhone 4S'; }
		if ($serial == 'DTDV') { $description = 'iPhone 4S'; }
		if ($serial == 'DTDW') { $description = 'iPhone 4S'; }
		if ($serial == 'DTF9') { $description = 'iPhone 4S'; }
		if ($serial == 'DTFC') { $description = 'iPhone 4S'; }
		if ($serial == 'DTFD') { $description = 'iPhone 4S'; }
		if ($serial == 'DTFF') { $description = 'iPhone 4S'; }
		if ($serial == 'DTFG') { $description = 'iPhone 4S'; }
		if ($serial == 'DTFH') { $description = 'iPhone 4S'; }
		if ($serial == 'DTJT') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'DTJV') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'DTJW') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DTJY') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DTK0') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'DTK1') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DTK2') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DTTN') { $description = 'iPhone 5'; }
		if ($serial == 'DTTP') { $description = 'iPhone 5'; }
		if ($serial == 'DTTQ') { $description = 'iPhone 5'; }
		if ($serial == 'DTTR') { $description = 'iPhone 5'; }
		if ($serial == 'DTWD') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'DTWF') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'DTWG') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'DTWH') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'DTY3') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'DTY4') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'DV10') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'DV11') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'DV13') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DV14') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DV16') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DV17') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DV2R') { $description = 'AirPort Express 802.11n (2nd Generation)'; }
		if ($serial == 'DV30') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'DV31') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'DV33') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'DV35') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'DV7L') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DV7M') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DV7N') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DV7P') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DV8H') { $description = 'MacBook (13-inch, Mid 2010)'; }
		if ($serial == 'DVD1') { $description = 'iPad (3rd generation)'; }
		if ($serial == 'DVD2') { $description = 'iPad (3rd generation)'; }
		if ($serial == 'DVD3') { $description = 'iPad (3rd generation)'; }
		if ($serial == 'DVGC') { $description = 'iPad (3rd Generation) Wi-Fi + Cellular (Verizon)'; }
		if ($serial == 'DVGD') { $description = 'iPad (3rd Generation) Wi-Fi + Cellular (Verizon)'; }
		if ($serial == 'DVGF') { $description = 'iPad (3rd Generation) Wi-Fi + Cellular (Verizon)'; }
		if ($serial == 'DVGG') { $description = 'iPad (3rd generation) Wi-Fi + Cellular'; }
		if ($serial == 'DVGH') { $description = 'iPad (3rd generation) Wi-Fi + Cellular'; }
		if ($serial == 'DVGJ') { $description = 'iPad (3rd generation) Wi-Fi + Cellular'; }
		if ($serial == 'DVGK') { $description = 'iPad (3rd generation) Wi-Fi + Cellular'; }
		if ($serial == 'DVGL') { $description = 'iPad (3rd generation) Wi-Fi + Cellular'; }
		if ($serial == 'DVGM') { $description = 'iPad (3rd generation) Wi-Fi + Cellular'; }
		if ($serial == 'DVHJ') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DVHK') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DVHL') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DVHM') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DVHN') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'DVHP') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DVHQ') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DVHR') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DVHV') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'DVHW') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'DW13') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DW1C') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DW1N') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'DW33') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DW34') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DW35') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DW36') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DW37') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DW38') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DW39') { $description = 'Mac mini Server (Mid 2011)'; }
		if ($serial == 'DW3C') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DW3D') { $description = 'Mac mini Server (Mid 2011)'; }
		if ($serial == 'DW3G') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DW3H') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DW3J') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DW47') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DW48') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'DW4H') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'DW4J') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DWTP') { $description = 'iMac (21.5-inch, Mid 2011)'; }
		if ($serial == 'DWTQ') { $description = 'iMac (21.5-inch, Mid 2011)'; }
		if ($serial == 'DWTR') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DWWM') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DWWN') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DWYL') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'DWYM') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'DWYN') { $description = 'Mac mini Server (Late 2012)'; }
		if ($serial == 'DY1J') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DY1K') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DY1L') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY1M') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY1N') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY1P') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY1Q') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY1R') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY1T') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY1V') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY1W') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY1Y') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY20') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY21') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY22') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'DY23') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'DY24') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'DY25') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'DY26') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'DY2M') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'DY3G') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'DY3H') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'DY3J') { $description = 'Mac mini Server (Late 2012)'; }
		if ($serial == 'DY5K') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY5P') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY5Q') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY5R') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY5T') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DY5V') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DY5W') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'DY5Y') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY60') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DY6C') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DY6F') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'DY77') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DY7G') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DYG6') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DYG7') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DYG8') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'DYK9') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DYKC') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'DYL0') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DYL1') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DYL2') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'DYQJ') { $description = 'Mac mini (Mid 2011)'; }
		if ($serial == 'DYR1') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'F0GM') { $description = 'iPod nano (7th generation)'; }
		if ($serial == 'F0GN') { $description = 'iPod nano (7th generation)'; }
		if ($serial == 'F0GP') { $description = 'iPod nano (7th generation)'; }
		if ($serial == 'F0GQ') { $description = 'iPod nano (7th generation)'; }
		if ($serial == 'F0GR') { $description = 'iPod nano (7th generation)'; }
		if ($serial == 'F0GT') { $description = 'iPod nano (7th generation)'; }
		if ($serial == 'F0GV') { $description = 'iPod nano (7th generation)'; }
		if ($serial == 'F0K6') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'F0V2') { $description = 'MacBook Pro (15-inch, Late 2011)'; }
		if ($serial == 'F13Y') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'F140') { $description = 'MacBook Pro (17-inch, Late 2011)'; }
		if ($serial == 'F14R') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'F14V') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'F182') { $description = 'iPad (4th generation)'; }
		if ($serial == 'F183') { $description = 'iPad (4th generation)'; }
		if ($serial == 'F184') { $description = 'iPad (4th generation)'; }
		if ($serial == 'F185') { $description = 'iPad (4th generation)'; }
		if ($serial == 'F186') { $description = 'iPad (4th generation)'; }
		if ($serial == 'F187') { $description = 'iPad (4th generation)'; }
		if ($serial == 'F188') { $description = 'iPad (4th generation) Wi-Fi + Cellular'; }
		if ($serial == 'F189') { $description = 'iPad (4th generation) Wi-Fi + Cellular'; }
		if ($serial == 'F18C') { $description = 'iPad (4th generation) Wi-Fi + Cellular'; }
		if ($serial == 'F18D') { $description = 'iPad (4th generation) Wi-Fi + Cellular'; }
		if ($serial == 'F18F') { $description = 'iPad (4th generation) Wi-Fi + Cellular'; }
		if ($serial == 'F18G') { $description = 'iPad (4th generation) Wi-Fi + Cellular'; }
		if ($serial == 'F18P') { $description = 'iPad (4th generation) Wi-Fi + Cellular (MM)'; }
		if ($serial == 'F18W') { $description = 'iPad (4th generation) Wi-Fi + Cellular (MM)'; }
		if ($serial == 'F18Y') { $description = 'iPad (4th generation) Wi-Fi + Cellular (MM)'; }
		if ($serial == 'F190') { $description = 'iPad (4th generation) Wi-Fi + Cellular (MM)'; }
		if ($serial == 'F191') { $description = 'iPad (4th generation) Wi-Fi + Cellular (MM)'; }
		if ($serial == 'F192') { $description = 'iPad (4th generation) Wi-Fi + Cellular (MM)'; }
		if ($serial == 'F193') { $description = 'iPad mini'; }
		if ($serial == 'F194') { $description = 'iPad mini'; }
		if ($serial == 'F195') { $description = 'iPad mini'; }
		if ($serial == 'F196') { $description = 'iPad mini'; }
		if ($serial == 'F197') { $description = 'iPad mini'; }
		if ($serial == 'F198') { $description = 'iPad mini'; }
		if ($serial == 'F199') { $description = 'iPad mini Wi-Fi + Cellular'; }
		if ($serial == 'F19C') { $description = 'iPad mini Wi-Fi + Cellular'; }
		if ($serial == 'F19D') { $description = 'iPad mini Wi-Fi + Cellular'; }
		if ($serial == 'F19F') { $description = 'iPad mini Wi-Fi + Cellular'; }
		if ($serial == 'F19G') { $description = 'iPad mini Wi-Fi + Cellular'; }
		if ($serial == 'F19H') { $description = 'iPad mini Wi-Fi + Cellular'; }
		if ($serial == 'F19J') { $description = 'iPad mini Wi-Fi + Cellular (MM)'; }
		if ($serial == 'F19K') { $description = 'iPad mini Wi-Fi + Cellular (MM)'; }
		if ($serial == 'F19L') { $description = 'iPad mini Wi-Fi + Cellular (MM)'; }
		if ($serial == 'F19M') { $description = 'iPad mini Wi-Fi + Cellular (MM)'; }
		if ($serial == 'F19N') { $description = 'iPad mini Wi-Fi + Cellular (MM)'; }
		if ($serial == 'F19P') { $description = 'iPad mini Wi-Fi + Cellular (MM)'; }
		if ($serial == 'F1G3') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F1G4') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F24T') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F298') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'F299') { $description = 'MacBook Pro (13-inch, Late 2011)'; }
		if ($serial == 'F29N') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'F2FV') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F2GC') { $description = 'Apple Thunderbolt Display (27-inch)'; }
		if ($serial == 'F2J4') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F2J5') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F2JP') { $description = 'MacBook Air (11-inch, Mid 2011)'; }
		if ($serial == 'F2JQ') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'F38R') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F38T') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F38W') { $description = 'iPhone 5'; }
		if ($serial == 'F38Y') { $description = 'iPhone 5'; }
		if ($serial == 'F39C') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F39D') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F447') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F4JL') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F4JR') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'F4JT') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'F4JW') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'F4JY') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'F4K1') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'F4K2') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'F4K4') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'F4K5') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'F4LP') { $description = 'iPod nano (7th generation)'; }
		if ($serial == 'F4MC') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F4MD') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F4MF') { $description = 'Mac Pro Server (Mid 2012)'; }
		if ($serial == 'F4MG') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F4MH') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F4MJ') { $description = 'Mac Pro Server (Mid 2012)'; }
		if ($serial == 'F4RT') { $description = 'iPod shuffle (4th generation, Late 2012)'; }
		if ($serial == 'F4RV') { $description = 'iPod shuffle (4th generation, Late 2012)'; }
		if ($serial == 'F4RW') { $description = 'iPod shuffle (4th generation, Late 2012)'; }
		if ($serial == 'F4RY') { $description = 'iPod shuffle (4th generation, Late 2012)'; }
		if ($serial == 'F4T0') { $description = 'iPod shuffle (4th generation, Late 2012)'; }
		if ($serial == 'F4T1') { $description = 'iPod shuffle (4th generation, Late 2012)'; }
		if ($serial == 'F4VF') { $description = 'iPod shuffle (4th generation, Late 2012)'; }
		if ($serial == 'F4VG') { $description = 'iPod shuffle (4th generation, Late 2012)'; }
		if ($serial == 'F4Y5') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'F4Y6') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'F4YD') { $description = 'iPad Air WiFi + Cellular'; }
		if ($serial == 'F4YF') { $description = 'iPad Air WiFi + Cellular'; }
		if ($serial == 'F4YG') { $description = 'iPad Air WiFi + Cellular'; }
		if ($serial == 'F4YH') { $description = 'iPad Air WiFi + Cellular'; }
		if ($serial == 'F4YJ') { $description = 'iPad Air WiFi + Cellular'; }
		if ($serial == 'F4YK') { $description = 'iPad Air WiFi + Cellular'; }
		if ($serial == 'F4YY') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F500') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F501') { $description = 'Mac Pro Server (Mid 2012)'; }
		if ($serial == 'F51R') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'F569') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F56C') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F56D') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F56F') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F56G') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F56H') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F56J') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F57H') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F57J') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F5MV') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F5MW') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F5N7') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'F5N8') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'F5V7') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'F5V8') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'F5WV') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F5WW') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F5Y1') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F5Y2') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'F5Y3') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F5Y4') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F5Y5') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5Y6') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5Y7') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5Y8') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5Y9') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5YC') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5YD') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5YF') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5YG') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5YH') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5YJ') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5YK') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5YL') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5YM') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5YN') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5YP') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F5YV') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'F5YW') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'F610') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'F611') { $description = 'iMac (21.5-inch, Mid 2011)'; }
		if ($serial == 'F637') { $description = 'iPad mini'; }
		if ($serial == 'F638') { $description = 'iPad mini'; }
		if ($serial == 'F648') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F649') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F64C') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F64D') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F64F') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F67D') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F67F') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F67G') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F67H') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F67J') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F67K') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F67L') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F67M') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F67P') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F686') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F687') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F68C') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F68D') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F693') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'F694') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'F69W') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'F69Y') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'F6DN') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'F6F3') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'F6L9') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'F6LH') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F6LJ') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F6T5') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'F6T6') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'F6T9') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F6TC') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F6TD') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F6TF') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F6TG') { $description = 'Mac Pro (Mid 2012)'; }
		if ($serial == 'F6TN') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F6VG') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F75Y') { $description = 'MacBook Air (13-inch, Mid 2011)'; }
		if ($serial == 'F760') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F761') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F762') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F775') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'F776') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'F7C1') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F7F5') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F7F6') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F7YF') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'F88G') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F88K') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F88V') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F897') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'F8D5') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F8G8') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F8G9') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F8GH') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F8GJ') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F8GK') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F8GL') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F8GM') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F8GN') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F8H2') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F8H4') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F8H5') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F8H6') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F8H7') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F8H8') { $description = 'iPhone 5 (GSM, CDMA)'; }
		if ($serial == 'F8J2') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'F8J3') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'F8J4') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'F8J5') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'F8J7') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'F8J8') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'F8J9') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'F8JC') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'F8JY') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'F8QM') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'F8QN') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'F8QP') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'F8QQ') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'F8V6') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'F8V7') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'F8V8') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'F90Y') { $description = 'MacBook Air (13-inch, Mid 2012)'; }
		if ($serial == 'F910') { $description = 'MacBook Air (11-inch, Mid 2012)'; }
		if ($serial == 'F96T') { $description = 'iPod touch (4th generation)'; }
		if ($serial == 'F96V') { $description = 'iPod touch (4th generation)'; }
		if ($serial == 'F96W') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'F973') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F97M') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F9F1') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'F9F2') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'F9H5') { $description = 'AirPort Time Capsule 802.11ac'; }
		if ($serial == 'F9H6') { $description = 'AirPort Time Capsule 802.11ac'; }
		if ($serial == 'F9JT') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'F9K9') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'F9Q0') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'F9RK') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'F9RL') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'F9RM') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'F9RN') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'F9V1') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'F9VM') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'F9VN') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'F9VQ') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'F9VV') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'F9VW') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'F9VY') { $description = 'Mac mini Server (Late 2012)'; }
		if ($serial == 'F9W0') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'F9W1') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'F9W2') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'F9W3') { $description = 'Mac mini Server (Late 2012)'; }
		if ($serial == 'FC08') { $description = 'Mac mini Server (Late 2012)'; }
		if ($serial == 'FC6M') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FC6N') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FC6P') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FCCW') { $description = 'Mac mini Server (Late 2012)'; }
		if ($serial == 'FCM5') { $description = 'iPad mini (Retina)'; }
		if ($serial == 'FCM6') { $description = 'iPad mini (Retina)'; }
		if ($serial == 'FCM7') { $description = 'iPad mini (Retina)'; }
		if ($serial == 'FCM8') { $description = 'iPad mini (Retina)'; }
		if ($serial == 'FCM9') { $description = 'iPad mini (Retina)'; }
		if ($serial == 'FCMC') { $description = 'iPad mini (Retina)'; }
		if ($serial == 'FCMM') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'FCQ3') { $description = 'MacBook Pro (Retina, Mid 2012)'; }
		if ($serial == 'FCQT') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'FCY8') { $description = 'iPad (4th generation) Wi-Fi + Cellular (MM)'; }
		if ($serial == 'FCY9') { $description = 'iPad (4th generation) Wi-Fi + Cellular (MM)'; }
		if ($serial == 'FCYC') { $description = 'iPad (4th generation) Wi-Fi + Cellular'; }
		if ($serial == 'FCYD') { $description = 'iPad (4th generation) Wi-Fi + Cellular'; }
		if ($serial == 'FCYF') { $description = 'iPad (4th generation)'; }
		if ($serial == 'FCYG') { $description = 'iPad (4th generation)'; }
		if ($serial == 'FD55') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FD56') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FD57') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FD58') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FD59') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FD5T') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FD5V') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FD5Y') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FD9G') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'FD9H') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'FD9J') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'FD9K') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'FDWK') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'FF54') { $description = 'Apple TV (3rd Generation)'; }
		if ($serial == 'FF7L') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FF9R') { $description = 'iPhone 5s'; }
		if ($serial == 'FF9V') { $description = 'iPhone 5s'; }
		if ($serial == 'FF9Y') { $description = 'iPhone 5s'; }
		if ($serial == 'FFCJ') { $description = 'iPod touch 16 GB (5th generation)'; }
		if ($serial == 'FFDN') { $description = 'iPhone 5s'; }
		if ($serial == 'FFDP') { $description = 'iPhone 5s'; }
		if ($serial == 'FFDQ') { $description = 'iPhone 5s'; }
		if ($serial == 'FFDR') { $description = 'iPhone 5s'; }
		if ($serial == 'FFFJ') { $description = 'iPhone 5s'; }
		if ($serial == 'FFFK') { $description = 'iPhone 5s'; }
		if ($serial == 'FFFL') { $description = 'iPhone 5s'; }
		if ($serial == 'FFFM') { $description = 'iPhone 5s'; }
		if ($serial == 'FFFN') { $description = 'iPhone 5s'; }
		if ($serial == 'FFFP') { $description = 'iPhone 5s'; }
		if ($serial == 'FFFQ') { $description = 'iPhone 5s'; }
		if ($serial == 'FFFR') { $description = 'iPhone 5s'; }
		if ($serial == 'FFFT') { $description = 'iPhone 5s'; }
		if ($serial == 'FFFV') { $description = 'iPhone 5s'; }
		if ($serial == 'FFFW') { $description = 'iPhone 5s'; }
		if ($serial == 'FFG8') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FFG9') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FFGC') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FFGD') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FFGF') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FFGG') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FFGH') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FFGJ') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FFGK') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FFHG') { $description = 'iPhone 5c'; }
		if ($serial == 'FFHH') { $description = 'iPhone 5c'; }
		if ($serial == 'FFHJ') { $description = 'iPhone 5c'; }
		if ($serial == 'FFHK') { $description = 'iPhone 5c'; }
		if ($serial == 'FFHL') { $description = 'iPhone 5c'; }
		if ($serial == 'FFHM') { $description = 'iPhone 5c'; }
		if ($serial == 'FFHN') { $description = 'iPhone 5c'; }
		if ($serial == 'FFHP') { $description = 'iPhone 5c'; }
		if ($serial == 'FFHQ') { $description = 'iPhone 5c'; }
		if ($serial == 'FFHR') { $description = 'iPhone 5c'; }
		if ($serial == 'FFM8') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FFM9') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FFMC') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FFMD') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FFMF') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FFMG') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FFMJ') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FFMK') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FFML') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FFMM') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FFMN') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FFRP') { $description = 'MacBook Pro (Retina, 13-inch, Early 2013)'; }
		if ($serial == 'FFRR') { $description = 'MacBook Pro (Retina, 13-inch, Early 2013)'; }
		if ($serial == 'FFT0') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FFT1') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FFT2') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FFT3') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FFT4') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FFT5') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FFT6') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FFT7') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FFTM') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FFTN') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FFVW') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FFVY') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FFW0') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FFW1') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FFYV') { $description = 'iMac (21.5-inch, Early 2013)'; }
		if ($serial == 'FFYW') { $description = 'iMac (21.5-inch, Early 2013)'; }
		if ($serial == 'FG1F') { $description = 'MacBook Pro (Retina, 13-inch, Early 2013)'; }
		if ($serial == 'FG1H') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FG1J') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FG28') { $description = 'MacBook Pro (Retina, 13-inch, Early 2013)'; }
		if ($serial == 'FG46') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FG47') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FG7Q') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'FG7R') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'FGC4') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FGFH') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FGFJ') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FGFK') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FGFL') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FGM8') { $description = 'MacBook Pro (Retina, 13-inch, Early 2013)'; }
		if ($serial == 'FGML') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'FGMR') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FGMT') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FGMW') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FGMY') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FGN5') { $description = 'MacBook Pro (Retina, 13-inch, Early 2013)'; }
		if ($serial == 'FGN6') { $description = 'MacBook Pro (Retina, 13-inch, Early 2013)'; }
		if ($serial == 'FGN7') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FGPJ') { $description = 'MacBook Pro (Retina, 13-inch, Early 2013)'; }
		if ($serial == 'FGPL') { $description = 'iMac (21.5-inch, Early 2013)'; }
		if ($serial == 'FGPM') { $description = 'iMac (21.5-inch, Early 2013)'; }
		if ($serial == 'FGRP') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FGWF') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FGWG') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FGWH') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FGYY') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FH00') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FH01') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FH02') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FH03') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FH04') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FH05') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FH12') { $description = 'iPad mini (Retina)'; }
		if ($serial == 'FH13') { $description = 'iPad mini (Retina)'; }
		if ($serial == 'FH19') { $description = 'iPhone 5'; }
		if ($serial == 'FH1C') { $description = 'iPhone 5'; }
		if ($serial == 'FH1D') { $description = 'iPhone 5'; }
		if ($serial == 'FH1F') { $description = 'iPhone 5'; }
		if ($serial == 'FH1G') { $description = 'iPhone 5'; }
		if ($serial == 'FH1H') { $description = 'iPhone 5'; }
		if ($serial == 'FH51') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FH52') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FH53') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FHCH') { $description = 'MacBook Pro (Retina, 13-inch, Early 2013)'; }
		if ($serial == 'FHCQ') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FHCR') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FHCV') { $description = 'iMac (27-inch, Mid 2011)'; }
		if ($serial == 'FHN0') { $description = 'MacBook Pro (Retina, 13-inch, Early 2013)'; }
		if ($serial == 'FHP7') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'FJ1R') { $description = 'AirPort Extreme 802.11ac'; }
		if ($serial == 'FJ47') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FJDH') { $description = 'iPod shuffle (4th generation, Late 2012)'; }
		if ($serial == 'FJQ1') { $description = 'iPod nano (7th generation)'; }
		if ($serial == 'FJQQ') { $description = 'iMac (21.5-inch, Early 2013)'; }
		if ($serial == 'FJVJ') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FK10') { $description = 'iPad Air'; }
		if ($serial == 'FK11') { $description = 'iPad Air'; }
		if ($serial == 'FK12') { $description = 'iPad Air'; }
		if ($serial == 'FK13') { $description = 'iPad Air'; }
		if ($serial == 'FK14') { $description = 'iPad Air'; }
		if ($serial == 'FK15') { $description = 'iPad Air'; }
		if ($serial == 'FK16') { $description = 'iPad Air'; }
		if ($serial == 'FK17') { $description = 'iPad Air'; }
		if ($serial == 'FKYC') { $description = 'iPad Air WiFi + Cellular'; }
		if ($serial == 'FKYH') { $description = 'iPad Air WiFi + Cellular'; }
		if ($serial == 'FKYN') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FKYP') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FKYQ') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FKYR') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FL01') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FL02') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FL03') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FL04') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FL05') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FL85') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'FL8M') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FL8N') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FL94') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FL98') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'FLCF') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FLCG') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FLFL') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FLFM') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FLFN') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FLFP') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FLFT') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FLFV') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FLFW') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FLFY') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FLG0') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FLG2') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FLHH') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FLMH') { $description = 'iMac (21.5-inch, Early 2013)'; }
		if ($serial == 'FLMJ') { $description = 'iPad mini (Retina) WiFi + Cellular'; }
		if ($serial == 'FLMK') { $description = 'iPad mini (Retina) WiFi + Cellular'; }
		if ($serial == 'FLML') { $description = 'iPad mini (Retina) WiFi + Cellular'; }
		if ($serial == 'FLMM') { $description = 'iPad mini (Retina) WiFi + Cellular'; }
		if ($serial == 'FLMN') { $description = 'iPad mini (Retina) WiFi + Cellular'; }
		if ($serial == 'FLMP') { $description = 'iPad mini (Retina) WiFi + Cellular'; }
		if ($serial == 'FLMQ') { $description = 'iPad mini (Retina) WiFi + Cellular'; }
		if ($serial == 'FLMR') { $description = 'iPad mini (Retina) WiFi + Cellular'; }
		if ($serial == 'FLNH') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'FLNJ') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'FLNK') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'FM1N') { $description = 'iPhone 5c'; }
		if ($serial == 'FM1P') { $description = 'iPhone 5c'; }
		if ($serial == 'FM1Q') { $description = 'iPhone 5c'; }
		if ($serial == 'FM1R') { $description = 'iPhone 5c'; }
		if ($serial == 'FM1T') { $description = 'iPhone 5c'; }
		if ($serial == 'FM1V') { $description = 'iPhone 5c'; }
		if ($serial == 'FM1W') { $description = 'iPhone 5c'; }
		if ($serial == 'FM1Y') { $description = 'iPhone 5c'; }
		if ($serial == 'FM20') { $description = 'iPhone 5c'; }
		if ($serial == 'FM21') { $description = 'iPhone 5c'; }
		if ($serial == 'FM23') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FM3Y') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FM72') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'FM74') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FM89') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'FM8L') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FM8M') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FM8N') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FM8P') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FM8Q') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FMJF') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'FMJG') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'FMLG') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FMLH') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FMLJ') { $description = 'MacBook Pro (Retina, 13-inch, Late 2012)'; }
		if ($serial == 'FMR5') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FMR6') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FMR7') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FMR8') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FMR9') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FMRC') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FMRD') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FMRF') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FMRG') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FMRH') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FMRJ') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FMRK') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FMRL') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FMRM') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FMRN') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FMRV') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FMRW') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FMRY') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FN3Y') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FN40') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FN5M') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FN7F') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FN7G') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FN7Q') { $description = 'iPad mini 2 WiFi + Cellular'; }
		if ($serial == 'FNDD') { $description = 'iPhone 5c'; }
		if ($serial == 'FNDF') { $description = 'iPhone 5c'; }
		if ($serial == 'FNDG') { $description = 'iPhone 5c'; }
		if ($serial == 'FNDH') { $description = 'iPhone 5c'; }
		if ($serial == 'FNDJ') { $description = 'iPhone 5c'; }
		if ($serial == 'FNDK') { $description = 'iPhone 5c'; }
		if ($serial == 'FNDL') { $description = 'iPhone 5c'; }
		if ($serial == 'FNDM') { $description = 'iPhone 5c'; }
		if ($serial == 'FNDN') { $description = 'iPhone 5c'; }
		if ($serial == 'FNDP') { $description = 'iPhone 5c'; }
		if ($serial == 'FNJJ') { $description = 'iPhone 5s'; }
		if ($serial == 'FNJK') { $description = 'iPhone 5s'; }
		if ($serial == 'FNJL') { $description = 'iPhone 5s'; }
		if ($serial == 'FNJM') { $description = 'iPhone 5s'; }
		if ($serial == 'FNJN') { $description = 'iPhone 5s'; }
		if ($serial == 'FNJP') { $description = 'iPhone 5s'; }
		if ($serial == 'FNJQ') { $description = 'iPhone 5s'; }
		if ($serial == 'FNJR') { $description = 'iPhone 5s'; }
		if ($serial == 'FNJT') { $description = 'iPhone 5s'; }
		if ($serial == 'FNLQ') { $description = 'iPhone 5c'; }
		if ($serial == 'FNLR') { $description = 'iPhone 5c'; }
		if ($serial == 'FNLT') { $description = 'iPhone 5c'; }
		if ($serial == 'FNLV') { $description = 'iPhone 5c'; }
		if ($serial == 'FNLW') { $description = 'iPhone 5c'; }
		if ($serial == 'FNLY') { $description = 'iPhone 5c'; }
		if ($serial == 'FNM0') { $description = 'iPhone 5c'; }
		if ($serial == 'FNM1') { $description = 'iPhone 5c'; }
		if ($serial == 'FNM2') { $description = 'iPhone 5c'; }
		if ($serial == 'FNM3') { $description = 'iPhone 5c'; }
		if ($serial == 'FNNK') { $description = 'iPhone 5s'; }
		if ($serial == 'FNNL') { $description = 'iPhone 5s'; }
		if ($serial == 'FNNM') { $description = 'iPhone 5s'; }
		if ($serial == 'FNNN') { $description = 'iPhone 5s'; }
		if ($serial == 'FNNP') { $description = 'iPhone 5s'; }
		if ($serial == 'FNNQ') { $description = 'iPhone 5s'; }
		if ($serial == 'FNNR') { $description = 'iPhone 5s'; }
		if ($serial == 'FNNT') { $description = 'iPhone 5s'; }
		if ($serial == 'FNNV') { $description = 'iPhone 5s'; }
		if ($serial == 'FP12') { $description = 'iMac (21.5-inch, Late 2012)'; }
		if ($serial == 'FP13') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FP14') { $description = 'Mac mini Server (Late 2012)'; }
		if ($serial == 'FP2N') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FP2P') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FP39') { $description = 'Mac mini Server (Late 2012)'; }
		if ($serial == 'FP3C') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FP62') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FP6H') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FP6J') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FP6K') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FP6L') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FP6M') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FP6N') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FP6P') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FP6Q') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FP6R') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FP84') { $description = 'iPad mini Wi-Fi'; }
		if ($serial == 'FPDV') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FPDW') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FPDY') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FPF0') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FPF1') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FPF2') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FPF3') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FPF4') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FQ0Y') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FQ10') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FQ11') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FQ12') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FQ13') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FQ14') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FQ15') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FQ16') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FQ17') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FQ18') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FQL9') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FQLC') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FQLD') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FQLF') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'FQLG') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FQMV') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FQMW') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FQMY') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FQN0') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FQPG') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FQPH') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FQPJ') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FQPK') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FQPL') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FQPM') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FQPN') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FQPP') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FQRY') { $description = 'iPad mini 2'; }
		if ($serial == 'FQT0') { $description = 'iPad mini 2'; }
		if ($serial == 'FR1M') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FR1Q') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FR1R') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FR1T') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FR20') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FR21') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FR22') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FR2W') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FR8D') { $description = 'MacBook Pro (Retina, 15-inch, Early 2013)'; }
		if ($serial == 'FR8F') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR8G') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR8H') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR8J') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR8M') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR8N') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR8P') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR8Q') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR8R') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR8T') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR8V') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR8W') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR8Y') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR90') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR91') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR92') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR93') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR94') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR95') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR96') { $description = 'iPhone 5c (Do not use)'; }
		if ($serial == 'FR97') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR98') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR99') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9C') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9D') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9F') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9G') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9H') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9J') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9K') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9L') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9M') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9N') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9P') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9Q') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9R') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9T') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FR9V') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FRC4') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FRC5') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FRC6') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FRC7') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FRC8') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FRC9') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FRCC') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FRCD') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FRCF') { $description = 'iPhone 5s (Do not use)'; }
		if ($serial == 'FRDM') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FRDW') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FRDY') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FRF0') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FRF1') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FRF2') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FRF3') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FRF4') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FRF5') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FRF6') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FRF7') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FRFP') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'FRG2') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FRG3') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FRM7') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FRM8') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FRM9') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FRQC') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FRQF') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FRQH') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FRQJ') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FRQL') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FRWG') { $description = 'iPad mini 2'; }
		if ($serial == 'FRWJ') { $description = 'iPad mini 2'; }
		if ($serial == 'FRY0') { $description = 'iPad mini 2'; }
		if ($serial == 'FRY1') { $description = 'iPad mini 2'; }
		if ($serial == 'FRY9') { $description = 'iPad mini 2 WiFi + Cellular'; }
		if ($serial == 'FRYF') { $description = 'iPad mini 2 WiFi + Cellular'; }
		if ($serial == 'FRYG') { $description = 'iPad mini 2 WiFi + Cellular'; }
		if ($serial == 'FRYH') { $description = 'iPad mini 2 WiFi + Cellular'; }
		if ($serial == 'FRYN') { $description = 'iPad mini 2 WiFi + Cellular'; }
		if ($serial == 'FT14') { $description = 'MacBook Pro (15-inch, Mid 2012)'; }
		if ($serial == 'FT30') { $description = 'MacBook Air (11-inch, Mid 2013)'; }
		if ($serial == 'FT3F') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FT3G') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FT3H') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FT4M') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FT4N') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FT4P') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FT4Q') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FT4R') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FT4T') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FT4V') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FT95') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FT96') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FT97') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FT98') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FT99') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FT9C') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FT9D') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FTC9') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FTCD') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FTCH') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FTCK') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FTCL') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FTK0') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FTK1') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FTPH') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FTPJ') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FTPK') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FTPL') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FTPM') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FTPN') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FTPP') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FTPQ') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FTPR') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FTPT') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FTPV') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FTPW') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FTPY') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FTQ5') { $description = 'iMac (27-inch, Late 2012)'; }
		if ($serial == 'FTT4') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FVGW') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FVH3') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'FVH4') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'FVH5') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'FVH6') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'FVH7') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'FVH8') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'FVH9') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'FVVW') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FVWQ') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'FVYN') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FW56') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'FW57') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'FWHW') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FWJH') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'FWKK') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FWKL') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'FWL4') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'FWQ5') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FWQ6') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FWQ7') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FWQ8') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FWW3') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'FWW4') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'FWW5') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'FWW6') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'FY0T') { $description = 'iMac (21.5-inch, Mid 2014)'; }
		if ($serial == 'FY0V') { $description = 'iMac (21.5-inch, Mid 2014)'; }
		if ($serial == 'FY10') { $description = 'iMac (Retina 5K, 27-inch, Mid 2015)'; }
		if ($serial == 'FY11') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'FY13') { $description = 'iMac (Retina 5K, 27-inch, Mid 2015)'; }
		if ($serial == 'FY14') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'FY15') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FY3Y') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FY40') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'FY65') { $description = 'iMac (21.5-inch, Mid 2014)'; }
		if ($serial == 'FY68') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'FY69') { $description = 'iMac (21.5-inch, Mid 2014)'; }
		if ($serial == 'FY6D') { $description = 'iMac (Retina 5K, 27-inch, Mid 2015)'; }
		if ($serial == 'FY6F') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'FY9D') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FY9F') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'FYG9') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'FYGC') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'FYGD') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'FYGF') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'G05T') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'G083') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G084') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G085') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G086') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G1HV') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'G1HW') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'G1HY') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'G1J0') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'G1J1') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'G1J2') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'G1LJ') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G1LK') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G1LL') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G1LM') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G1LN') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G1LP') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G1LQ') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G1LR') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G1LT') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G1LV') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G1LW') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G1LY') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G1M0') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G1M1') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G22Q') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'G22R') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'G22T') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'G22V') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'G22W') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'G22Y') { $description = 'iPod touch (5th generation)'; }
		if ($serial == 'G2CC') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G2CD') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G2CF') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G2GH') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G2GJ') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G2GK') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G2GL') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G2GM') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G2GN') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G2PY') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G2Q0') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G354') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'G356') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G3FY') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'G3QC') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G3QD') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G3QG') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G3QH') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G3QJ') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G3QK') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G3QL') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G3QN') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G3QP') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G3QQ') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G3QR') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G3QT') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G430') { $description = 'Mac mini (Late 2012)'; }
		if ($serial == 'G4FY') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G4H0') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G4H1') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G4H2') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G4H3') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G4H4') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G4HK') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G4HM') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G4HN') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G4HP') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G4JQ') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'G4N6') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'G4N7') { $description = 'MacBook Pro (Retina, 13-inch, Late 2013)'; }
		if ($serial == 'G56J') { $description = 'iMac (21.5-inch, Mid 2014)'; }
		if ($serial == 'G56K') { $description = 'iMac (21.5-inch, Mid 2014)'; }
		if ($serial == 'G584') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'G58J') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G58K') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G5HL') { $description = 'MacBook Pro (Retina, 15-inch, Late 2013)'; }
		if ($serial == 'G5MC') { $description = 'iPhone 6'; }
		if ($serial == 'G5MD') { $description = 'iPhone 6'; }
		if ($serial == 'G5MF') { $description = 'iPhone 6'; }
		if ($serial == 'G5MG') { $description = 'iPhone 6'; }
		if ($serial == 'G5MH') { $description = 'iPhone 6'; }
		if ($serial == 'G5MJ') { $description = 'iPhone 6'; }
		if ($serial == 'G5MK') { $description = 'iPhone 6'; }
		if ($serial == 'G5ML') { $description = 'iPhone 6'; }
		if ($serial == 'G5MM') { $description = 'iPhone 6'; }
		if ($serial == 'G5MN') { $description = 'iPhone 6'; }
		if ($serial == 'G5MP') { $description = 'iPhone 6'; }
		if ($serial == 'G5MQ') { $description = 'iPhone 6'; }
		if ($serial == 'G5MR') { $description = 'iPhone 6'; }
		if ($serial == 'G5MT') { $description = 'iPhone 6'; }
		if ($serial == 'G5MV') { $description = 'iPhone 6'; }
		if ($serial == 'G5MW') { $description = 'iPhone 6'; }
		if ($serial == 'G5MY') { $description = 'iPhone 6'; }
		if ($serial == 'G5N0') { $description = 'iPhone 6'; }
		if ($serial == 'G5QF') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QG') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QH') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QJ') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QK') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QL') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QM') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QN') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QP') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QQ') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QR') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QT') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QV') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QW') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5QY') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5R0') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5R1') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5R2') { $description = 'iPhone 6 Plus'; }
		if ($serial == 'G5RK') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G5RL') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G5RM') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G5RN') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G5RP') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G5RQ') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G5TG') { $description = 'iPad mini 3 Wi-Fi + Cellular (China)'; }
		if ($serial == 'G5TH') { $description = 'iPad mini 3 Wi-Fi + Cellular (China)'; }
		if ($serial == 'G5TJ') { $description = 'iPad mini 3 Wi-Fi + Cellular (China)'; }
		if ($serial == 'G5TK') { $description = 'iPad mini 3 Wi-Fi + Cellular (China)'; }
		if ($serial == 'G5TL') { $description = 'iPad mini 3 Wi-Fi + Cellular (China)'; }
		if ($serial == 'G5TM') { $description = 'iPad mini 3 Wi-Fi + Cellular (China)'; }
		if ($serial == 'G5TN') { $description = 'iPad mini 3 Wi-Fi + Cellular (China)'; }
		if ($serial == 'G5TP') { $description = 'iPad mini 3 Wi-Fi + Cellular (China)'; }
		if ($serial == 'G5TQ') { $description = 'iPad mini 3 Wi-Fi + Cellular (China)'; }
		if ($serial == 'G5V1') { $description = 'iPad mini 3'; }
		if ($serial == 'G5V2') { $description = 'iPad mini 3'; }
		if ($serial == 'G5V3') { $description = 'iPad mini 3'; }
		if ($serial == 'G5V4') { $description = 'iPad mini 3'; }
		if ($serial == 'G5V5') { $description = 'iPad mini 3'; }
		if ($serial == 'G5V6') { $description = 'iPad mini 3'; }
		if ($serial == 'G5V7') { $description = 'iPad mini 3'; }
		if ($serial == 'G5V8') { $description = 'iPad mini 3'; }
		if ($serial == 'G5V9') { $description = 'iPad mini 3'; }
		if ($serial == 'G5VJ') { $description = 'iPad Air 2'; }
		if ($serial == 'G5VT') { $description = 'iPad Air 2'; }
		if ($serial == 'G5VV') { $description = 'iPad Air 2'; }
		if ($serial == 'G5VW') { $description = 'iPad Air 2'; }
		if ($serial == 'G5VY') { $description = 'iPad Air 2'; }
		if ($serial == 'G5W0') { $description = 'iPad Air 2'; }
		if ($serial == 'G5W1') { $description = 'iPad Air 2'; }
		if ($serial == 'G5W2') { $description = 'iPad Air 2'; }
		if ($serial == 'G5W3') { $description = 'iPad Air 2'; }
		if ($serial == 'G5W4') { $description = 'iMac (21.5-inch, Mid 2014)'; }
		if ($serial == 'G5W5') { $description = 'iMac (21.5-inch, Mid 2014)'; }
		if ($serial == 'G5W6') { $description = 'iMac (21.5-inch, Mid 2014)'; }
		if ($serial == 'G5W8') { $description = 'iPad mini 3 Wi-Fi + Cellular'; }
		if ($serial == 'G5WQ') { $description = 'iPad Air 2 WiFi + Cellular'; }
		if ($serial == 'G5WR') { $description = 'iPad Air 2 WiFi + Cellular'; }
		if ($serial == 'G5WT') { $description = 'iPad Air 2 WiFi + Cellular'; }
		if ($serial == 'G5Y1') { $description = 'iPad mini 3 Wi-Fi + Cellular'; }
		if ($serial == 'G5Y2') { $description = 'iPad mini 3 Wi-Fi + Cellular'; }
		if ($serial == 'G5Y3') { $description = 'iPad mini 3 Wi-Fi + Cellular'; }
		if ($serial == 'G5Y4') { $description = 'iPad mini 3 Wi-Fi + Cellular'; }
		if ($serial == 'G5Y5') { $description = 'iPad mini 3 Wi-Fi + Cellular'; }
		if ($serial == 'G5YH') { $description = 'iPad mini 3 Wi-Fi + Cellular'; }
		if ($serial == 'G5YJ') { $description = 'iPad mini 3 Wi-Fi + Cellular'; }
		if ($serial == 'G5YK') { $description = 'iPad mini 3 Wi-Fi + Cellular'; }
		if ($serial == 'G5YL') { $description = 'iPad Air 2 WiFi + Cellular'; }
		if ($serial == 'G5YM') { $description = 'iPad Air 2 WiFi + Cellular'; }
		if ($serial == 'G5YN') { $description = 'iPad Air 2 WiFi + Cellular'; }
		if ($serial == 'G5YP') { $description = 'iPad Air 2 WiFi + Cellular'; }
		if ($serial == 'G5YQ') { $description = 'iPad Air 2 WiFi + Cellular'; }
		if ($serial == 'G5YR') { $description = 'iPad Air 2 WiFi + Cellular'; }
		if ($serial == 'G6D3') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'G6D4') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G6D5') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G6DP') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'G6PM') { $description = 'MacBook Air (13-inch, Mid 2013)'; }
		if ($serial == 'G70Y') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'G710') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'G711') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'G712') { $description = 'Beatbox'; }
		if ($serial == 'G713') { $description = 'Wireless (1.5)'; }
		if ($serial == 'G714') { $description = 'Wireless (1.5)'; }
		if ($serial == 'G715') { $description = 'Solo HD'; }
		if ($serial == 'G716') { $description = 'Solo HD'; }
		if ($serial == 'G717') { $description = 'Solo HD'; }
		if ($serial == 'G718') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G719') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G71C') { $description = 'Solo HD'; }
		if ($serial == 'G71D') { $description = 'Tour (1st generation)'; }
		if ($serial == 'G71F') { $description = 'Tour (1st generation)'; }
		if ($serial == 'G71G') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G71H') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G71J') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G71K') { $description = 'Mixr'; }
		if ($serial == 'G71L') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G71M') { $description = 'Mixr'; }
		if ($serial == 'G71N') { $description = 'Mixr'; }
		if ($serial == 'G71P') { $description = 'Pro'; }
		if ($serial == 'G71Q') { $description = 'Pro'; }
		if ($serial == 'G71R') { $description = 'Pro'; }
		if ($serial == 'G71T') { $description = 'Heartbeats (2nd generation)'; }
		if ($serial == 'G71V') { $description = 'Heartbeats (2nd generation)'; }
		if ($serial == 'G71W') { $description = 'Tour (2nd generation)'; }
		if ($serial == 'G71Y') { $description = 'Executive'; }
		if ($serial == 'G720') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G721') { $description = 'Beatbox Portable (1st generation)'; }
		if ($serial == 'G722') { $description = 'Beatbox Portable (1st generation)'; }
		if ($serial == 'G723') { $description = 'Beatbox Portable (3rd generation)'; }
		if ($serial == 'G724') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G725') { $description = 'Pill 1.0'; }
		if ($serial == 'G726') { $description = 'Pill 1.0'; }
		if ($serial == 'G727') { $description = 'Pill 1.0'; }
		if ($serial == 'G729') { $description = 'Pro'; }
		if ($serial == 'G72D') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G72F') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G72G') { $description = 'Solo HD'; }
		if ($serial == 'G72H') { $description = 'Solo HD'; }
		if ($serial == 'G72J') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G72K') { $description = 'Solo HD'; }
		if ($serial == 'G72L') { $description = 'Solo HD'; }
		if ($serial == 'G72M') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G72N') { $description = 'Beatbox Portable (2nd generation)'; }
		if ($serial == 'G72P') { $description = 'Beatbox Portable (2nd generation)'; }
		if ($serial == 'G72Q') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G72R') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G72T') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G72V') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G72W') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G72Y') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G730') { $description = 'Solo HD'; }
		if ($serial == 'G731') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G732') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G733') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G734') { $description = 'Pill 1.0'; }
		if ($serial == 'G735') { $description = 'Tour (2nd generation)'; }
		if ($serial == 'G736') { $description = 'Pill 1.0'; }
		if ($serial == 'G737') { $description = 'Pill 2.0'; }
		if ($serial == 'G738') { $description = 'Pill 2.0'; }
		if ($serial == 'G739') { $description = 'Pill 2.0'; }
		if ($serial == 'G73C') { $description = 'Pill XL'; }
		if ($serial == 'G73D') { $description = 'Pill XL'; }
		if ($serial == 'G73F') { $description = 'Pill XL'; }
		if ($serial == 'G73G') { $description = 'Mixr'; }
		if ($serial == 'G73H') { $description = 'Mixr'; }
		if ($serial == 'G73J') { $description = 'Mixr'; }
		if ($serial == 'G73K') { $description = 'Mixr'; }
		if ($serial == 'G73L') { $description = 'Mixr'; }
		if ($serial == 'G73M') { $description = 'Wireless (1.5)'; }
		if ($serial == 'G73N') { $description = 'Tour (2nd generation)'; }
		if ($serial == 'G73P') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G73Q') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G73R') { $description = 'Studio Wireless'; }
		if ($serial == 'G73T') { $description = 'Studio Wireless'; }
		if ($serial == 'G73V') { $description = 'Studio Wireless'; }
		if ($serial == 'G743') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'G744') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'G745') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'G746') { $description = 'Executive'; }
		if ($serial == 'G747') { $description = 'Solo 2'; }
		if ($serial == 'G748') { $description = 'Solo 2'; }
		if ($serial == 'G749') { $description = 'Solo 2'; }
		if ($serial == 'G74C') { $description = 'Pill 1.0'; }
		if ($serial == 'G74D') { $description = 'Pill 1.0'; }
		if ($serial == 'G74F') { $description = 'Pill 1.0'; }
		if ($serial == 'G74G') { $description = 'Pill 1.0'; }
		if ($serial == 'G74H') { $description = 'Pill 1.0'; }
		if ($serial == 'G74J') { $description = 'Pro'; }
		if ($serial == 'G74K') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'G74L') { $description = 'Solo HD'; }
		if ($serial == 'G74M') { $description = 'Solo 2'; }
		if ($serial == 'G74N') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G74Q') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G74R') { $description = 'Solo HD'; }
		if ($serial == 'G74T') { $description = 'Solo HD'; }
		if ($serial == 'G74V') { $description = 'Solo HD'; }
		if ($serial == 'G74W') { $description = 'Solo HD'; }
		if ($serial == 'G74Y') { $description = 'Solo HD'; }
		if ($serial == 'G750') { $description = 'Solo HD'; }
		if ($serial == 'G751') { $description = 'Solo HD'; }
		if ($serial == 'G752') { $description = 'Pill 2.0'; }
		if ($serial == 'G753') { $description = 'Pill 2.0'; }
		if ($serial == 'G754') { $description = 'Pill 1.0'; }
		if ($serial == 'G755') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G756') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G757') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G758') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G759') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G75C') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G75D') { $description = 'Mixr'; }
		if ($serial == 'G75F') { $description = 'Wireless (1.5)'; }
		if ($serial == 'G75G') { $description = 'Wireless (1.5)'; }
		if ($serial == 'G75H') { $description = 'Pill 2.0'; }
		if ($serial == 'G75J') { $description = 'Solo HD'; }
		if ($serial == 'G75K') { $description = 'Pro'; }
		if ($serial == 'G75L') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G75M') { $description = 'Solo HD'; }
		if ($serial == 'G75T') { $description = 'Studio Wireless'; }
		if ($serial == 'G75Y') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G760') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G761') { $description = 'Mixr'; }
		if ($serial == 'G762') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G763') { $description = 'Tour (2nd generation)'; }
		if ($serial == 'G764') { $description = 'Studio Wireless'; }
		if ($serial == 'G765') { $description = 'Studio Wireless'; }
		if ($serial == 'G766') { $description = 'Solo HD'; }
		if ($serial == 'G768') { $description = 'Mixr'; }
		if ($serial == 'G76C') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G76D') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G76F') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G76G') { $description = 'Wireless (1.5)'; }
		if ($serial == 'G76H') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G76J') { $description = 'Solo HD'; }
		if ($serial == 'G76K') { $description = 'Solo HD'; }
		if ($serial == 'G76L') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G76M') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G76N') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G76P') { $description = 'Pill 2.0'; }
		if ($serial == 'G76Q') { $description = 'Pill 2.0'; }
		if ($serial == 'G76R') { $description = 'Pill 2.0'; }
		if ($serial == 'G76T') { $description = 'Mixr'; }
		if ($serial == 'G76V') { $description = 'Solo HD'; }
		if ($serial == 'G770') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'G774') { $description = 'Powerbeats2 Wireless'; }
		if ($serial == 'G775') { $description = 'Powerbeats2 Wireless'; }
		if ($serial == 'G776') { $description = 'Powerbeats2 Wireless'; }
		if ($serial == 'G777') { $description = 'Solo 2'; }
		if ($serial == 'G778') { $description = 'Solo 2'; }
		if ($serial == 'G779') { $description = 'Powerbeats2 Wireless'; }
		if ($serial == 'G77C') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G77D') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G77F') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G77G') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G77H') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G77M') { $description = 'Powerbeats2 Wireless'; }
		if ($serial == 'G77N') { $description = 'Pill 2.0'; }
		if ($serial == 'G77T') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G77W') { $description = 'Studio (2nd generation)'; }
		if ($serial == 'G77Y') { $description = 'Mixr'; }
		if ($serial == 'G780') { $description = 'Mixr'; }
		if ($serial == 'G781') { $description = 'Mixr'; }
		if ($serial == 'G782') { $description = 'Mixr'; }
		if ($serial == 'G783') { $description = 'Mixr'; }
		if ($serial == 'G784') { $description = 'Mixr'; }
		if ($serial == 'G786') { $description = 'Pill XL'; }
		if ($serial == 'G787') { $description = 'Pill XL'; }
		if ($serial == 'G78W') { $description = 'Pill 2.0'; }
		if ($serial == 'G79C') { $description = 'Pill 2.0'; }
		if ($serial == 'G79M') { $description = 'Studio Wireless'; }
		if ($serial == 'G79N') { $description = 'Studio Wireless'; }
		if ($serial == 'G79P') { $description = 'Pill 2.0'; }
		if ($serial == 'G7CN') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7CP') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7CQ') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7CR') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7CT') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7CV') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7CY') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7D0') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7D1') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7D2') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7D3') { $description = 'Solo HD'; }
		if ($serial == 'G7D4') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7D5') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7D6') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7D7') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7D8') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7D9') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7DC') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7DD') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7DF') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7DG') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7DH') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7DJ') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7DK') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7DL') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7DM') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7DN') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7DP') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7DQ') { $description = 'Pill 1.0'; }
		if ($serial == 'G7DR') { $description = 'Pill 1.0'; }
		if ($serial == 'G7DT') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'G7DV') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7DW') { $description = 'Solo HD'; }
		if ($serial == 'G7DY') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7F0') { $description = 'Executive'; }
		if ($serial == 'G7F1') { $description = 'Pill 1.0'; }
		if ($serial == 'G7F2') { $description = 'Pill 1.0'; }
		if ($serial == 'G7F3') { $description = 'Pill 1.0'; }
		if ($serial == 'G7F4') { $description = 'Pill 1.0'; }
		if ($serial == 'G7F5') { $description = 'Pill 1.0'; }
		if ($serial == 'G7F6') { $description = 'Executive'; }
		if ($serial == 'G7F7') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7F8') { $description = 'Pill 1.0'; }
		if ($serial == 'G7F9') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7FC') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7FD') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7FF') { $description = 'Pill 1.0'; }
		if ($serial == 'G7FG') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7FH') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7FJ') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7FK') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7FL') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7FM') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7FN') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7FP') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7FQ') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7FR') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7FT') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7K6') { $description = 'Pill 2.0'; }
		if ($serial == 'G7K7') { $description = 'Pro'; }
		if ($serial == 'G7K8') { $description = 'Diddybeats'; }
		if ($serial == 'G7K9') { $description = 'Diddybeats'; }
		if ($serial == 'G7KC') { $description = 'Diddybeats'; }
		if ($serial == 'G7KD') { $description = 'Diddybeats'; }
		if ($serial == 'G7KF') { $description = 'Diddybeats'; }
		if ($serial == 'G7KQ') { $description = 'Solo (1st generation)'; }
		if ($serial == 'G7KR') { $description = 'Solo (1st generation)'; }
		if ($serial == 'G7KT') { $description = 'Solo HD'; }
		if ($serial == 'G7KV') { $description = 'Solo HD'; }
		if ($serial == 'G7L0') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7L1') { $description = 'iBeats'; }
		if ($serial == 'G7L2') { $description = 'iBeats'; }
		if ($serial == 'G7L3') { $description = 'iBeats'; }
		if ($serial == 'G7L4') { $description = 'iBeats'; }
		if ($serial == 'G7L5') { $description = 'Heartbeats (1st generation)'; }
		if ($serial == 'G7L7') { $description = 'Heartbeats (1st generation)'; }
		if ($serial == 'G7L8') { $description = 'Heartbeats (1st generation)'; }
		if ($serial == 'G7LD') { $description = 'Solo (1st generation)'; }
		if ($serial == 'G7LG') { $description = 'Beatbox Portable (1st generation)'; }
		if ($serial == 'G7LH') { $description = 'Beatbox Portable (1st generation)'; }
		if ($serial == 'G7LJ') { $description = 'Beatbox'; }
		if ($serial == 'G7LL') { $description = 'Heartbeats (2nd generation)'; }
		if ($serial == 'G7LM') { $description = 'Heartbeats (2nd generation)'; }
		if ($serial == 'G7LN') { $description = 'Mixr'; }
		if ($serial == 'G7LP') { $description = 'Mixr'; }
		if ($serial == 'G7LQ') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'G7LR') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'G7LT') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'G7LV') { $description = 'Pro'; }
		if ($serial == 'G7LW') { $description = 'Pro'; }
		if ($serial == 'G7LY') { $description = 'Solo HD'; }
		if ($serial == 'G7M1') { $description = 'Solo HD'; }
		if ($serial == 'G7M3') { $description = 'Solo HD'; }
		if ($serial == 'G7M5') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7M6') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7M7') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7M8') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7M9') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7MD') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7MG') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7MH') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7MJ') { $description = 'Studio (1st generation)'; }
		if ($serial == 'G7ML') { $description = 'Tour (1st generation)'; }
		if ($serial == 'G7MM') { $description = 'Tour (1st generation)'; }
		if ($serial == 'G7MN') { $description = 'Wireless (1.5)'; }
		if ($serial == 'G7MP') { $description = 'Wireless (1.5)'; }
		if ($serial == 'G7MQ') { $description = 'iBeats'; }
		if ($serial == 'G7RD') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G7RF') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G7YQ') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G7YR') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G829') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G85Y') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G86P') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G86Q') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G86R') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G8F4') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G8GC') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G8GD') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'G8J1') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'G8J7') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G8L0') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G8L1') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G8L2') { $description = 'iMac (21.5-inch, Mid 2014)'; }
		if ($serial == 'G8PM') { $description = 'Solo2 Wireless'; }
		if ($serial == 'G8PN') { $description = 'Solo2 Wireless'; }
		if ($serial == 'G8PP') { $description = 'Solo2 Wireless'; }
		if ($serial == 'G8PQ') { $description = 'Pill 2.0'; }
		if ($serial == 'G8PR') { $description = 'Studio Wireless'; }
		if ($serial == 'G8PT') { $description = 'Solo2 Wireless'; }
		if ($serial == 'G8Q1') { $description = 'Solo 2'; }
		if ($serial == 'G8Q2') { $description = 'Solo 2'; }
		if ($serial == 'G8Q3') { $description = 'Solo 2'; }
		if ($serial == 'G8Q4') { $description = 'Solo 2'; }
		if ($serial == 'G8Q5') { $description = 'Solo 2'; }
		if ($serial == 'G8WL') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'G8WM') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'G8WN') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'G8WP') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'G8WQ') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'G940') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'G941') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'G942') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'G943') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'G944') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'G96K') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G96L') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G96M') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G96N') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G96P') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G96Q') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G96R') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G96T') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G96V') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G96W') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G96Y') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G970') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G971') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G972') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G973') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G974') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G9FL') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G9FM') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G9FN') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G9FP') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G9FQ') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G9FR') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'G9FT') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G9JN') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G9L6') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G9L7') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G9L8') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G9L9') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'G9LG') { $description = 'Solo 2'; }
		if ($serial == 'G9LH') { $description = 'Solo 2'; }
		if ($serial == 'G9LJ') { $description = 'Pill 2.0'; }
		if ($serial == 'GC22') { $description = 'Wireless (1st generation)'; }
		if ($serial == 'GC8J') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'GC8K') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'GC8L') { $description = 'Powerbeats (1st generation)'; }
		if ($serial == 'GC8M') { $description = 'urBeats (1st generation)'; }
		if ($serial == 'GC8N') { $description = 'urBeats (1st generation)'; }
		if ($serial == 'GC8P') { $description = 'Solo HD'; }
		if ($serial == 'GC8Q') { $description = 'Solo HD'; }
		if ($serial == 'GC8R') { $description = 'Wireless (1st generation)'; }
		if ($serial == 'GCN1') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GCN2') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GCN3') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GCN4') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GCN6') { $description = 'Studio Wireless'; }
		if ($serial == 'GCNW') { $description = 'Solo 2'; }
		if ($serial == 'GCP2') { $description = 'Studio Wireless'; }
		if ($serial == 'GCP4') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'GCTM') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GCVG') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GCVH') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GCVJ') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GCVN') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GCVP') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GCVQ') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GCVV') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GCVW') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GCVY') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GCW0') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GCW1') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GDJL') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'GDJM') { $description = 'MacBook Pro (Retina, 13-inch, Mid 2014)'; }
		if ($serial == 'GDPP') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2014)'; }
		if ($serial == 'GDQY') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GDR3') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GDR4') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GDR5') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GDR6') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GDR7') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GDR8') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GDR9') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GDRC') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GF1J') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'GF1K') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'GF1L') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'GF1M') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'GF1N') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GF1Q') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GF1T') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GF65') { $description = 'MacBook Pro (13-inch, Mid 2012)'; }
		if ($serial == 'GF82') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GF83') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GF84') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GF85') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GFFQ') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GFJM') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'GFJN') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'GFJP') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'GFWK') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GFWL') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GFWM') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GFWN') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GFWP') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GG77') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'GG78') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'GG79') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'GG7D') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'GG7F') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'GG7G') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'GG7H') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'GG7J') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'GG7L') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'GG7N') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'GG7R') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'GG7T') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'GG7V') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'GG80') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'GG81') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'GG82') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'GHFF') { $description = 'iMac (27-inch, Late 2013)'; }
		if ($serial == 'GHJH') { $description = 'iMac (21.5-inch, Late 2013)'; }
		if ($serial == 'GHPF') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'GHPG') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'GHPH') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'GHPJ') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'GHPK') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'GHPL') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'GHPM') { $description = 'urBeats (2nd generation)'; }
		if ($serial == 'GJDC') { $description = 'Mac mini (Late 2014)'; }
		if ($serial == 'GJDM') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GJDN') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GJDP') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GJDQ') { $description = 'iMac (Retina 5K, 27-inch, Late 2014)'; }
		if ($serial == 'GKJG') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GKJM') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GKJN') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GKJR') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GKJT') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'GKJV') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'GKJY') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GKK0') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GKK2') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GKK3') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GKK4') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GKK5') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GL1Q') { $description = 'iMac (Retina 5K, 27-inch, Mid 2015)'; }
		if ($serial == 'GL1R') { $description = 'iMac (Retina 5K, 27-inch, Mid 2015)'; }
		if ($serial == 'GL1T') { $description = 'iMac (Retina 5K, 27-inch, Mid 2015)'; }
		if ($serial == 'GL1V') { $description = 'iMac (Retina 5K, 27-inch, Mid 2015)'; }
		if ($serial == 'GL1W') { $description = 'iMac (Retina 5K, 27-inch, Mid 2015)'; }
		if ($serial == 'GL28') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GL2D') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GL2F') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GL2H') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GL34') { $description = 'MacBook Pro (13-inch, Early 2015)'; }
		if ($serial == 'GL35') { $description = 'MacBook Pro (13-inch, Early 2015)'; }
		if ($serial == 'GL36') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GL37') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GL6C') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GL6D') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GL6F') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GL6G') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GL6H') { $description = 'MacBook (Retina, 12-inch, Early 2015)'; }
		if ($serial == 'GLCN') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'GLCP') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'GLCQ') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GM0V') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GM0W') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GM10') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GM11') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GM12') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GM13') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GM14') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'GM15') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'GM16') { $description = 'iPod touch (6th generation)'; }
		if ($serial == 'GM17') { $description = 'iPod touch (6th generation)'; }
		if ($serial == 'GM18') { $description = 'iPod touch (6th generation)'; }
		if ($serial == 'GM19') { $description = 'iPod touch (6th generation)'; }
		if ($serial == 'GM38') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'GM6M') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'GM9G') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'GMC3') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'GMC5') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GMC6') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GMC7') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GMC8') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GMC9') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GN8C') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'GNJJ') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'GNJK') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GNJL') { $description = 'MacBook Air (11-inch, Early 2015)'; }
		if ($serial == 'GP4H') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'GP4J') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'GP4L') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'GP4M') { $description = 'MacBook Air (13-inch, Early 2014)'; }
		if ($serial == 'GP4N') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'GP4P') { $description = 'MacBook Air (11-inch, Early 2014)'; }
		if ($serial == 'GQ17') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'GQ18') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'GQCL') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'GQCM') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'GQCP') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'GQCQ') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'GQCR') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'GQCT') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'GQR4') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GQR5') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GQR6') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'GTDX') { $description = 'MacBook Pro (13-inch, Late 2016, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'GTDY') { $description = 'MacBook Pro (15-inch, Late 2016)'; }
		if ($serial == 'GTF1') { $description = 'MacBook Pro (15-inch, Late 2016)'; }
		if ($serial == 'GTFJ') { $description = 'MacBook Pro (13-inch, Late 2016, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'GTFL') { $description = 'MacBook Pro (15-inch, Late 2016)'; }
		if ($serial == 'GTFM') { $description = 'MacBook Pro (15-inch, Late 2016)'; }
		if ($serial == 'GTFN') { $description = 'MacBook Pro (15-inch, Late 2016)'; }
		if ($serial == 'GTHR') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTHT') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTHV') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTHW') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTHX') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTHY') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTJ0') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTJ1') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTJ2') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTJ3') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTJ4') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTJ6') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTJ7') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTJ8') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTJ9') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTJC') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GTJD') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'GVC1') { $description = 'MacBook Pro (13-inch, Late 2016, Two Thunderbolt 3 ports)'; }
		if ($serial == 'GVC8') { $description = 'MacBook Pro (13-inch, Late 2016, Two Thunderbolt 3 ports)'; }
		if ($serial == 'GWDN') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'GWDP') { $description = 'MacBook Pro (Retina, 15-inch, Mid 2015)'; }
		if ($serial == 'GY25') { $description = 'MacBook Pro (13-inch, Late 2016, Two Thunderbolt 3 ports)'; }
		if ($serial == 'GY6N') { $description = 'MacBook Pro (13-inch, Late 2016, Two Thunderbolt 3 ports)'; }
		if ($serial == 'GYFH') { $description = 'MacBook Pro (13-inch, Late 2016, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'GYGR') { $description = 'MacBook Pro (13-inch, Late 2016, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'H03M') { $description = 'MacBook Pro (15-inch, Late 2016)'; }
		if ($serial == 'H03Q') { $description = 'MacBook Pro (15-inch, Late 2016)'; }
		if ($serial == 'H03T') { $description = 'MacBook Pro (15-inch, Late 2016)'; }
		if ($serial == 'H03Y') { $description = 'MacBook Pro (15-inch, Late 2016)'; }
		if ($serial == 'H040') { $description = 'MacBook Pro (15-inch, Late 2016)'; }
		if ($serial == 'H0N6') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'H0P6') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'H0P7') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'H0Q3') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H0Q4') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H0Q5') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H1DP') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'H1DQ') { $description = 'MacBook Pro (Retina, 13-inch, Early 2015)'; }
		if ($serial == 'H1DV') { $description = 'Apple TV (4th generation)'; }
		if ($serial == 'H1DW') { $description = 'Apple TV (4th generation)'; }
		if ($serial == 'H1DX') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'H1DY') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'H1F1') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'H1F2') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'H1F3') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'H1F5') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'H1F7') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'H1F8') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'H1F9') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'H25M') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'H25N') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'H3GP') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3GQ') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3GR') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3GT') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3GV') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3GW') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3GX') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3GY') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3H0') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3H1') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3H2') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3H3') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3H4') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3H5') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3H6') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3H7') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3H8') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3H9') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3HF') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3HG') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3HH') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3HJ') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H3QD') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'H3QF') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'H3QJ') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'H3QK') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'H3QW') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'H3QX') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'H3QY') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'H3R5') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'H3R6') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'H3R7') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'H569') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'H8KX') { $description = 'iMac (21.5-inch, Late 2015)'; }
		if ($serial == 'H8KY') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'H8L0') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'H8L1') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'H8L2') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'H8L3') { $description = 'iMac (Retina 4K, 21.5-inch, Late 2015)'; }
		if ($serial == 'H8L5') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'H8L6') { $description = 'iMac (Retina 5K, 27-inch, Late 2015)'; }
		if ($serial == 'HF1L') { $description = 'Apple Watch Series 2 Nike + 38mm (2nd gen)'; }
		if ($serial == 'HF1N') { $description = 'Apple Watch Series 2 Nike + 42mm (2nd gen)'; }
		if ($serial == 'HF1P') { $description = 'MacBook Pro (13-inch, Late 2016, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'HF1Q') { $description = 'MacBook Pro (13-inch, Late 2016, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'HF1R') { $description = 'MacBook Pro (13-inch, Late 2016, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'HF1T') { $description = 'MacBook Pro (13-inch, Late 2016, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'HF4F') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'HF4H') { $description = 'MacBook Air (13-inch, Early 2015)'; }
		if ($serial == 'HP49') { $description = 'MacBook Pro (13-inch, Late 2016, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'HP4D') { $description = 'MacBook Pro (13-inch, Late 2016, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'HRMD') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'HRMF') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'HRMG') { $description = 'MacBook (Retina, 12-inch, Early 2016)'; }
		if ($serial == 'HTD6') { $description = 'MacBook Pro (15-inch, 2017)'; }
		if ($serial == 'HTD9') { $description = 'MacBook Pro (15-inch, 2017)'; }
		if ($serial == 'HTDF') { $description = 'MacBook Pro (15-inch, 2017)'; }
		if ($serial == 'HV29') { $description = 'MacBook Pro (13-inch, 2017, Two Thunderbolt 3 ports)'; }
		if ($serial == 'HV2D') { $description = 'MacBook Pro (13-inch, 2017, Two Thunderbolt 3 ports)'; }
		if ($serial == 'HV2G') { $description = 'MacBook Pro (13-inch, 2017, Two Thunderbolt 3 ports)'; }
		if ($serial == 'HV2H') { $description = 'MacBook Pro (13-inch, 2017, Two Thunderbolt 3 ports)'; }
		if ($serial == 'HV2J') { $description = 'MacBook Pro (13-inch, 2017, Two Thunderbolt 3 ports)'; }
		if ($serial == 'HV2L') { $description = 'MacBook Pro (13-inch, 2017, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'HV2M') { $description = 'MacBook Pro (13-inch, 2017, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'HV2N') { $description = 'MacBook Pro (13-inch, 2017, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'HV2Q') { $description = 'MacBook Pro (13-inch, 2017, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'HV2R') { $description = 'MacBook Pro (13-inch, 2017, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'HV5J') { $description = 'MacBook Pro (13-inch, 2016, Two Thunderbolt 3 ports)'; }
		if ($serial == 'HV5K') { $description = 'MacBook Pro (13-inch, 2016, Two Thunderbolt 3 ports)'; }
		if ($serial == 'HX8F') { $description = 'iMac Pro (2017)'; }
		if ($serial == 'J1GG') { $description = 'iMac (Retina 5K, 27-inch, 2017)'; }
		if ($serial == 'J1GN') { $description = 'iMac (Retina 5K, 27-inch, 2017)'; }
		if ($serial == 'J1GP') { $description = 'iMac (Retina 5K, 27-inch, 2017)'; }
		if ($serial == 'J1GQ') { $description = 'iMac (Retina 5K, 27-inch, 2017)'; }
		if ($serial == 'J3RW') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'J3RY') { $description = 'Mac Pro (Late 2013)'; }
		if ($serial == 'J9K2') { $description = 'MacBook Pro (13-inch, 2017, Two Thunderbolt 3 ports)'; }
		if ($serial == 'JG5J') { $description = 'MacBook Pro (15-inch, 2018)'; }
		if ($serial == 'JGH7') { $description = 'MacBook Pro (15-inch, 2018)'; }
		if ($serial == 'JGH8') { $description = 'MacBook Pro (15-inch, 2018)'; }
		if ($serial == 'JHCD') { $description = 'MacBook Pro (13-inch, 2018, Four Thunderbolt 3 Ports)'; }
		if ($serial == 'JHD4') { $description = 'MacBook Pro (13-inch, 2018, Four Thunderbolt 3 Ports)'; }



		if ($description == '') {
			$model_xml = @implode('', @file('https://support-sp.apple.com/sp/product?cc='.$serial));
			if (!empty($model_xml)) {
				try {
				    $model_xml = new SimpleXMLElement($model_xml, LIBXML_NOCDATA);
				} catch (Exception $error) {
				    #$errors = libxml_get_errors();
				    $error = true;
				}
				$description = @$model_xml->configCode;
			}
		}
		if ($description == '') {
			$description = 'Unknown model, please send ' . $serial . ' to code@opmantek.com for inclusion';
		}
		return $description;
	}
}
