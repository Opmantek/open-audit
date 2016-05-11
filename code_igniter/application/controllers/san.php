<?php
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

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class San extends CI_Controller
{

    /**
     * Constructor
     *
     * @access    public
     * @category  Constructor
     * @package   Open-AudIT
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     * @link      http://www.open-audit.org
     * @return    Admin
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_system');
        // No need for user to be logged in
        // Have to be able to submit systems via the audit script
        $this->data['title'] = 'Open-AudIT';
        $this->load->library('session');

        // log the attempt
        $this->load->helper('log');
        $log_details = new stdClass();
        $log_details->severity = 6;
        stdlog($log_details);
        unset($log_details);

        $this->load->helper('report_helper');
        check_default_reports();
        $this->load->helper('group_helper');
        check_default_groups();
    }

    /**
     * Index
     *
     * @access    public
     * @category  Function
     * @package   Open-AudIT
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     * @link      http://www.open-audit.org
     * @return    NULL
     */
    public function index()
    {
        $this->load->view('v_system_add', $this->data);
    }


     function add_san()
    {
        if (isset($_POST['input']) and $_POST['input'] != '') {
            $this->benchmark->mark('code_start');
            $log_details = new stdClass();
            $log_details->severity = 7;
            $log_details->file = 'system';
            $log_details->message = 'Start processing audit result for a san';
            stdlog($log_details);

            $this->load->model('m_devices_components');
            $this->load->model('m_system');
            $this->load->model('m_oa_group');
            $this->load->model('m_audit_log');
            $this->load->helper('url');

            $input = explode(PHP_EOL, $_POST['input']);
            echo "<pre>\n";
            #print_r($input);
            $details = new stdClass();
            $details->hostname = '';
            $details->type = 'san';
            $details->man_criticality = 'critical';
            $san = array();
            $disk = array();
            $network = array();
            $ip = array();

            foreach ($input as $key => $value) {
                $value = trim($value);

                if (stripos($value, 'Feature pack:') === 0 and (!isset($details->description) or $details->description == '')) {
                    $details->description = str_replace('Feature pack:', '', $value);
                }
                if (stripos($value, 'Chassis name:') === 0 and (!isset($details->description) or $details->description == '')) {
                    $details->description = str_replace('Chassis name:', '', $value);
                }
                if (stripos($value, 'Storage Subsystem world-wide identifier (ID):') === 0 and (!isset($details->serial) or $details->serial == '')) {
                    $details->serial = str_replace('Storage Subsystem world-wide identifier (ID):', '', $value);
                }
                if (stripos($value, 'Storage Subsystem worldwide name (ID):') === 0 and (!isset($details->serial) or $details->serial == '')) {
                    $details->serial = str_replace('Storage Subsystem worldwide name (ID):', '', $value);
                }
                if (stripos($value, 'Storage array world-wide identifier (ID):') === 0 and (!isset($details->serial) or $details->serial == '')) {
                    $details->serial = str_replace('Storage array world-wide identifier (ID):', '', $value);
                }
                if (stripos($value, 'Controller DNS/Network name:') === 0 and $details->hostname == '') {
                    $details->hostname = trim(str_replace('Controller DNS/Network name:', '', $value));
                }
                if (stripos($value, 'Controller host name:') === 0 and $details->hostname == '') {
                    $details->hostname = trim(str_replace('Controller host name:', '', $value));
                }
                if (stripos($value, 'RAID Controller Module host name:') === 0 and $details->hostname == '') {
                    $details->hostname = trim(str_replace('RAID Controller Module host name:', '', $value));
                }

                if (stripos($value, 'Controller in Enclosure') === 0 or stripos($value, 'RAID Controller Module in Enclosure') === 0) {
                    $item = new stdClass();
                    $item->type = 'controller';
                    # get the parent
                    $item->attached_to = '';
                    $item->location = $value;
                    #
                    #$item->attached_to = substr($item->location, 0, $i);
                    $i = explode(' ', $item->location);
                    unset($i[0]);
                    unset($i[1]);
                    $item->attached_to = implode(' ', $i);
                    unset($i);
                    $i = stripos($item->attached_to, ',');
                    $item->attached_to = substr($item->attached_to, 0, $i);

                    # get the details
                    for ($i=$key; $i < $key+40; $i++) {
                        $input[$i] = trim($input[$i]);
                        if (stripos(trim($input[$i]), 'Status:') === 0 and (!isset($item->status) or $item->status == '')) {
                            $item->status = trim(str_ireplace('Status:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Firmware version:') === 0 and trim(str_ireplace('Firmware version:', '', $input[$i])) != '' and !isset($item->firmware_version)) {
                            $item->firmware_version = trim(str_ireplace('Firmware version:', '', $input[$i]));
                            if (isset($item->notes) and $item->notes != '') {
                                $item->notes .= ', Firmware Version: ' . trim(str_ireplace('Firmware version:', '', $input[$i]));
                            } else {
                                $item->notes = 'Firmware Version: ' . trim(str_ireplace('Firmware version:', '', $input[$i]));
                            }
                        }
                        if (stripos(trim($input[$i]), 'Replacement part number:') === 0 and trim(str_ireplace('Replacement part number:', '', $input[$i])) != '' and !isset($item->replacement_part_number)) {
                            $item->replacement_part_number = trim(str_ireplace('Replacement part number:', '', $input[$i]));
                            if (isset($item->notes) and $item->notes != '') {
                                $item->notes .= ', Replacement part number: ' . trim(str_ireplace('Replacement part number:', '', $input[$i]));
                            } else {
                                $item->notes = 'Replacement part number: ' . trim(str_ireplace('Replacement part number:', '', $input[$i]));
                            }
                        }
                        if (stripos(trim($input[$i]), 'Model name:') === 0 and trim(str_ireplace('Model name:', '', $input[$i])) != '' and !isset($item->model_name)) {
                            $item->model_name = trim(str_ireplace('Model name:', '', $input[$i]));
                            if (isset($item->notes) and $item->notes != '') {
                                $item->notes .= ', Model Name: ' . trim(str_ireplace('Model name:', '', $input[$i]));
                            } else {
                                $item->notes = 'Model Name: ' . trim(str_ireplace('Model Name:', '', $input[$i]));
                            }
                        }
                        if (stripos(trim($input[$i]), 'Board ID:') === 0 and trim(str_ireplace('Board ID:', '', $input[$i])) != '' and !isset($item->board_id)) {
                            $item->board_id = trim(str_ireplace('Board ID:', '', $input[$i]));
                            if (isset($item->notes) and $item->notes != '') {
                                $item->notes .= ', Board ID: ' . trim(str_ireplace('Board ID:', '', $input[$i]));
                            } else {
                                $item->notes = 'Board ID: ' . trim(str_ireplace('Board ID:', '', $input[$i]));
                            }
                        }
                        if (stripos(trim($input[$i]), 'Submodel ID:') === 0 and trim(str_ireplace('Submodel ID:', '', $input[$i])) != '' and !isset($item->submodel_id)) {
                            $item->submodel_id = trim(str_ireplace('Submodel ID:', '', $input[$i]));
                            if (isset($item->notes) and $item->notes != '') {
                                $item->notes .= ', Submodel ID: ' . trim(str_ireplace('Submodel ID:', '', $input[$i]));
                            } else {
                                $item->notes = 'Submodel ID: ' . trim(str_ireplace('Submodel ID:', '', $input[$i]));
                            }
                        }
                        if (stripos(trim($input[$i]), 'Product ID:') === 0 and trim(str_ireplace('Product ID:', '', $input[$i])) != '' and !isset($item->product_id)) {
                            $item->product_id = trim(str_ireplace('Product ID:', '', $input[$i]));
                            if (isset($item->notes) and $item->notes != '') {
                                $item->notes .= ', Product ID: ' . trim(str_ireplace('Product ID:', '', $input[$i]));
                            } else {
                                $item->notes = 'Product ID: ' . trim(str_ireplace('Product ID:', '', $input[$i]));
                            }
                        }
                        if (stripos(trim($input[$i]), 'Revision:') === 0 and trim(str_ireplace('Revision:', '', $input[$i])) != '' and !isset($item->revision)) {
                            $item->revision = trim(str_ireplace('Revision:', '', $input[$i]));
                            if (isset($item->notes) and $item->notes != '') {
                                $item->notes .= ', Revision: ' . trim(str_ireplace('Revision:', '', $input[$i]));
                            } else {
                                $item->notes = 'Revision: ' . trim(str_ireplace('Revision:', '', $input[$i]));
                            }
                        }
                        if (stripos(trim($input[$i]), 'Part number:') === 0 and (!isset($item->part_number) or $item->part_number == '')) {
                            $item->part_number = trim(str_ireplace('Part number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Serial number:') === 0 and (!isset($item->serial) or $item->serial == '')) {
                            $item->serial = trim(str_ireplace('Serial number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Vendor:') === 0 and (!isset($item->manufacturer) or $item->manufacturer == '')) {
                            $item->manufacturer = trim(str_ireplace('Vendor:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Date of manufacture:') === 0 and (!isset($item->date_of_manufacture) or $item->date_of_manufacture == '')) {
                            $item->date_of_manufacture = trim(str_ireplace('Date of manufacture:', '', $input[$i]));
                        }
                    }
                    $san[] = $item;
                    unset($item);
                }


                if (stripos($value, 'Data Cache Module') === 0 or stripos($value, 'Cache Backup Device') === 0 or stripos($value, 'Host Interface Board') === 0 ) {
                    $item = new stdClass();
                    $item->type = strtolower($value);
                    # get the parent
                    for ($i=$key; $i >= 1; $i--) {
                        if (stripos(trim($input[$i]), 'Controller in Enclosure') !== false) {
                            $item->attached_to = trim($input[$i]);
                            break;
                        }
                    }
                    # get the details
                    for ($i=$key+1; $i < $key+15; $i++) {
                        if (trim($input[$i]) == 'Data Cache Module' or trim($input[$i]) == 'Cache Backup Device' or trim($input[$i]) == 'Host Interface Board') {
                            # we hit the next module, break, break from this loop
                            break;
                        }
                        if (stripos(trim($input[$i]), 'Status:') === 0 and (!isset($item->status) or $item->status == '')) {
                            $item->status = trim(str_ireplace('Status:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Location:') === 0 and (!isset($item->location) or $item->location == '')) {
                            $item->location = trim(str_ireplace('Location:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Capacity:') === 0 and trim(str_ireplace('Capacity:', '', $input[$i])) != '' and !isset($item->capacity)) {
                            $item->capacity = trim(str_ireplace('Capacity:', '', $input[$i]));
                            if (isset($item->notes) and $item->notes != '') {
                                $item->notes .= ', Capacity: ' . str_replace(',', '', trim(str_ireplace('Capacity:', '', $input[$i])));
                            } else {
                                $item->notes = 'Capacity: ' . str_replace(',', '', trim(str_ireplace('Capacity:', '', $input[$i])));
                            }
                        }
                        if (stripos(trim($input[$i]), 'Replacement part number:') === 0 and trim(str_ireplace('Replacement part number:', '', $input[$i])) != '' and !isset($item->replacement_part_number)) {
                            $item->replacement_part_number = trim(str_ireplace('Replacement part number:', '', $input[$i]));
                            if (isset($item->notes) and $item->notes != '') {
                                $item->notes .= ', Replacement part number: ' . trim(str_ireplace('Replacement part number:', '', $input[$i]));
                            } else {
                                $item->notes = 'Replacement part number: ' . trim(str_ireplace('Replacement part number:', '', $input[$i]));
                            }
                        }
                        if (stripos(trim($input[$i]), 'Manufacturer part number:') === 0 and (!isset($item->part_number) or $item->part_number == '')) {
                            $item->part_number = trim(str_ireplace('Manufacturer part number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Part number:') === 0 and (!isset($item->part_number) or $item->part_number == '')) {
                            $item->part_number = trim(str_ireplace('Part number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Serial number:') === 0 and (!isset($item->serial) or $item->serial == '')) {
                            $item->serial = trim(str_ireplace('Serial number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Manufacturer:') === 0 and (!isset($item->manufacturer) or $item->manufacturer == '')) {
                            $item->manufacturer = trim(str_ireplace('Manufacturer:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Date of manufacture:') === 0 and (!isset($item->date_of_manufacture) or $item->date_of_manufacture == '')) {
                            $item->date_of_manufacture = trim(str_ireplace('Date of manufacture:', '', $input[$i]));
                        }
                    }
                    if ($item->serial != '' and $item->serial != 'Not Available') {
                        $san[] = $item;
                    }
                    unset($item);
                }


                if (stripos($value, 'Enclosure audible alarm:') === 0) {
                    $item = new stdClass();
                    $item->type = 'enclosure';
                    # as this IS a parent, get the name by reverse loop
                    for ($i=$key; $i >= 1; $i--) {
                        if (stripos(trim($input[$i]), 'Overall Component Information') !== false) {
                            $item->description = trim(str_ireplace(' Overall Component Information', '', $input[$i]));
                            $j = explode(' ', $item->description);
                            $item->type = strtolower($j[0] . ' ' . $j[1]);
                            $item->location = trim(@$j[1] . ' ' . @$j[2]);
                            unset($j);
                            unset($item->description);
                            break;
                        }
                    }
                    if ($item->location == 'Enclosure') {
                        $item->location = 'Enclosure 0';
                    }
                    # get the details
                    for ($i=$key; $i < $key+10; $i++) {
                        if (trim($input[$i]) == '') {
                            # we hit an empty line, break from this loop
                            break;
                        }
                        if (stripos(trim($input[$i]), 'Serial number:') === 0 ){ #and (!isset($item->serial) or $item->serial == '')) {
                            $item->serial = trim(str_ireplace('Serial number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Part number:') === 0 and (!isset($item->part_number) or $item->part_number == '')) {
                            $item->part_number = trim(str_ireplace('Part number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Vendor:') === 0 and (!isset($item->manufacturer) or $item->manufacturer == '')) {
                            $item->manufacturer = trim(str_ireplace('Vendor:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Date of manufacture:') === 0 and (!isset($item->date_of_manufacture) or $item->date_of_manufacture == '')) {
                            $item->date_of_manufacture = trim(str_ireplace('Date of manufacture:', '', $input[$i]));
                        }
                    }
                    $san[] = $item;
                    unset($item);
                }


                if (stripos($value, 'ESM card status:') === 0) {
                    $item = new stdClass();
                    $item->type = 'esm canister';
                    # get the parent
                    for ($i=$key; $i >= 1; $i--) {
                        if (stripos(trim($input[$i]), 'Overall Component Information') !== false) {
                            $i = explode(' ', trim(str_ireplace(' Overall Component Information', '', $input[$i])));
                            $item->attached_to = trim(@$i[1] . ' ' . @$i[2]);
                            break;
                        }
                    }
                    # get the details
                    for ($i=$key; $i < $key+20; $i++) {
                        if (trim($input[$i]) == '') {
                            # we hit an empty line, break from this loop
                            break;
                        }
                        if (stripos(trim($input[$i]), 'Serial number:') === 0 and (!isset($item->serial) or $item->serial == '')) {
                            $item->serial = trim(str_ireplace('Serial number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Part number:') === 0 and (!isset($item->part_number) or $item->part_number == '')) {
                            $item->part_number = trim(str_ireplace('Part number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Vendor:') === 0 and (!isset($item->manufacturer) or $item->manufacturer == '')) {
                            $item->manufacturer = trim(str_ireplace('Vendor:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Date of manufacture:') === 0 and (!isset($item->date_of_manufacture) or $item->date_of_manufacture == '')) {
                            $item->date_of_manufacture = trim(str_ireplace('Date of manufacture:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Location:') === 0 and (!isset($item->location) or $item->location == '')) {
                            $item->location = 'ESM Canister ' . trim(str_ireplace('Location:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Product ID:') === 0 and trim(str_ireplace('Product ID:', '', $input[$i])) != '' and !isset($item->product_id)) {
                            $item->product_id = trim(str_ireplace('Product ID:', '', $input[$i]));
                            if (isset($item->notes) and $item->notes != '') {
                                $item->notes .= ', Product ID: ' . trim(str_ireplace('Product ID:', '', $input[$i]));
                            } else {
                                $item->notes = 'Product ID: ' . trim(str_ireplace('Product ID:', '', $input[$i]));
                            }
                        }
                    }
                    $san[] = $item;
                    unset($item);
                }



                if (stripos($value, 'SFP status:') === 0) {
                    $item = new stdClass();
                    $item->type = 'sfp';
                    # get the parent
                    for ($i=$key; $i >= 1; $i--) {
                        if (stripos(trim($input[$i]), 'Overall Component Information') !== false) {
                            $i = explode(' ', trim(str_ireplace(' Overall Component Information', '', $input[$i])));
                            $item->attached_to = trim(@$i[1] . ' ' . @$i[2]);
                            break;
                        }
                    }
                    # get the details
                    for ($i=$key; $i < $key+20; $i++) {
                        if (trim($input[$i]) == '') {
                            # we hit an empty line, break from this loop
                            break;
                        }
                        if (stripos(trim($input[$i]), 'Attached to:') === 0 and (!isset($item->attached_to_location) or $item->attached_to_location == '')) {
                            $item->attached_to_location = trim(str_ireplace('Attached to:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'SFP status:') === 0 and (!isset($item->status) or $item->status == '')) {
                            $item->status = trim(str_ireplace('SFP status:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Revision:') === 0 and trim(str_ireplace('Revision:', '', $input[$i])) != '' and !isset($item->revision)) {
                            $item->revision = trim(str_ireplace('Revision:', '', $input[$i]));
                            if (isset($item->notes) and $item->notes != '') {
                                $item->notes .= ', Revision: ' . trim(str_ireplace('Revision:', '', $input[$i]));
                            } else {
                                $item->notes = 'Revision: ' . trim(str_ireplace('Revision:', '', $input[$i]));
                            }
                        }
                        if (stripos(trim($input[$i]), 'Serial number:') === 0 and (!isset($item->serial) or $item->serial == '')) {
                            $item->serial = trim(str_ireplace('Serial number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Part number:') === 0 and (!isset($item->part_number) or $item->part_number == '')) {
                            $item->part_number = trim(str_ireplace('Part number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Vendor:') === 0 and (!isset($item->manufacturer) or $item->manufacturer == '')) {
                            $item->manufacturer = trim(str_ireplace('Vendor:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Date of manufacture:') === 0 and (!isset($item->date_of_manufacture) or $item->date_of_manufacture == '')) {
                            $item->date_of_manufacture = trim(str_ireplace('Date of manufacture:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Location:') === 0 and (!isset($item->location) or $item->location == '')) {
                            $item->location = trim(str_ireplace('Location:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Product ID:') === 0 and trim(str_ireplace('Product ID:', '', $input[$i])) != '' and !isset($item->product_id)) {
                            $item->product_id = trim(str_ireplace('Product ID:', '', $input[$i]));
                            if (isset($item->notes) and $item->notes != '') {
                                $item->notes .= ', Product ID: ' . trim(str_ireplace('Product ID:', '', $input[$i]));
                            } else {
                                $item->notes = 'Product ID: ' . trim(str_ireplace('Product ID:', '', $input[$i]));
                            }
                        }
                    }
                    if (stripos($item->attached_to_location, 'ESM Canister') !== false) {
                        $item->attached_to = $item->attached_to_location;
                    } elseif (stripos($item->attached_to_location, 'controller') !== false) {
                        $j = substr($item->attached_to_location, strpos($item->attached_to_location, ',')-1, 1);
                        $item->attached_to = 'Controller in ' . $item->attached_to . ', Slot ' . $j;
                        unset($j);
                        $j = explode(' ', $item->attached_to_location);
                        $item->location = $j[0] . ', ' . $item->location;
                    }
                    $san[] = $item;
                    unset($item);
                }


                if (stripos($value, 'Power-fan canister') === 0 and stripos($value, 'status:') !== false) {
                    $item = new stdClass();
                    $item->type = 'power fan cannister';
                    # get the parent
                    for ($i=$key; $i >= 1; $i--) {
                        if (stripos(trim($input[$i]), 'Overall Component Information') !== false) {
                            $i = explode(' ', trim(str_ireplace(' Overall Component Information', '', $input[$i])));
                            $item->attached_to = trim(@$i[1] . ' ' . @$i[2]);
                            break;
                        }
                    }
                    # get the details
                    for ($i=$key; $i < $key+10; $i++) {
                        if (trim($input[$i]) == '') {
                            # we hit an empty line, break from this loop
                            break;
                        }
                        if (stripos(trim($input[$i]), 'Power-fan canister') === 0 and stripos($input[$i], 'status:') !== false and (!isset($item->status) or $item->status == '')) {
                            $item->status = trim(str_ireplace('Power-fan canister (Left) status:', '', $input[$i]));
                            $item->status = trim(str_ireplace('Power-fan canister (Right) status:', '', $item->status));
                            if (stripos($input[$i], 'Power-fan canister (Left) status:') !== false) {
                                #$item->description = 'Power-fan canister (Left)';
                                $item->location = 'Power-fan canister (Left)';
                            }
                            if (stripos($input[$i], 'Power-fan canister (Right) status:') !== false) {
                                #$item->description = 'Power-fan canister (Right)';
                                $item->location = 'Power-fan canister (Right)';
                            }
                        }
                        if (stripos(trim($input[$i]), 'Serial number:') === 0 ){ #and (!isset($item->serial) or $item->serial == '')) {
                            $item->serial = trim(str_ireplace('Serial number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Part number:') === 0 and (!isset($item->part_number) or $item->part_number == '')) {
                            $item->part_number = trim(str_ireplace('Part number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Vendor:') === 0 and (!isset($item->manufacturer) or $item->manufacturer == '')) {
                            $item->manufacturer = trim(str_ireplace('Vendor:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Date of manufacture:') === 0 and (!isset($item->date_of_manufacture) or $item->date_of_manufacture == '')) {
                            $item->date_of_manufacture = trim(str_ireplace('Date of manufacture:', '', $input[$i]));
                        }
                    }
                    $san[] = $item;
                    unset($item);
                }


                if (stripos($value, 'Drive at Enclosure') === 0) {
                    $item = new stdClass();
                    $item->type = 'disk';
                    $item->caption = trim($value);
                    $item->device = trim($value);
                    $item->hard_drive_index = trim($value);
                    $item->location = trim(str_ireplace('Drive at ', '', $value));
                    $item->attached_to = '';
                    $i = stripos($item->location, ',');
                    $item->attached_to = substr($item->location, 0, $i);
                    $item->size = '';
                    # get the details
                    for ($i=$key+1; $i < $key+50; $i++) {
                        if (stripos(trim($input[$i]), 'Drive at Enclosure') === 0) {
                            # we hit the next drive, break from this loop
                            break;
                        }
                        if (stripos(trim($input[$i]), 'Status:') === 0 and (!isset($item->status) or $item->status == '')) {
                            $item->status = trim(str_ireplace('Status:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Usable capacity:') === 0 and $item->size == '') {
                            $item->size = $this->get_size(trim(str_replace('Usable capacity:', '', $input[$i])));
                        }
                        if (stripos(trim($input[$i]), 'Interface type:') === 0 and (!isset($item->interface_type) or $item->interface_type == '')) {
                            $item->interface_type = trim(str_replace('Interface type:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Drive type:') === 0 and (!isset($item->interface_type) or $item->interface_type == '')) {
                            $item->interface_type = trim(str_replace('Drive type:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Product ID:') === 0 and (!isset($item->model) or $item->model == '')) {
                            $item->model = trim(str_replace('Product ID:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Firmware version:') === 0 and (!isset($item->firmware) or $item->firmware == '')) {
                            $item->firmware = trim(str_ireplace('Firmware version:', '', $input[$i]));

                        }
                        if (stripos(trim($input[$i]), 'Serial number:') === 0 and (!isset($item->serial) or $item->serial == '')) {
                            $item->serial = trim(str_ireplace('Serial number:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Vendor:') === 0 and (!isset($item->manufacturer) or $item->manufacturer == '')) {
                            $item->manufacturer = trim(str_ireplace('Vendor:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Date of manufacture:') === 0 and (!isset($item->date_of_manufacture) or $item->date_of_manufacture == '')) {
                            $item->date_of_manufacture = trim(str_ireplace('Date of manufacture:', '', $input[$i]));
                        }
                    }
                    if ($item->size != '') {
                        $disk[] = $item;
                    }
                    unset($item);
                }




                if (stripos($value, 'Ethernet port:') === 0) {
                    $item = new stdClass();
                    $item->attached_to = '';
                    $item_ip = new stdClass();
                    # get the parent
                    for ($i=$key; $i >= 1; $i--) {
                        if (stripos(trim($input[$i]), 'Controller in Enclosure') !== false) {
                            $item->attached_to = trim($input[$i]);
                            break;
                        }
                    }
                    $item->description = 'Ethernet port ' . trim(str_replace('Ethernet port:', '', $value)) . ' on ' . $item->attached_to;
                    # get the details
                    for ($i=$key+1; $i < $key+15; $i++) {
                        if (stripos(trim($input[$i]), 'Ethernet port:') === 0) {
                            # we hit the next module, break, break from this loop
                            break;
                        }
                        if (stripos(trim($input[$i]), 'Link status:') === 0 and (!isset($item->ip_enabled) or $item->ip_enabled == '')) {
                            $item->ip_enabled = trim(str_ireplace('Status:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Network configuration:') === 0 and (!isset($item->dhcp_enabled) or $item->dhcp_enabled == '')) {
                            $item->dhcp_enabled = trim(str_ireplace('Network configuration:', '', $input[$i]));
                            if ($item->dhcp_enabled == 'Static') {
                                $item->dhcp_enabled = 'False';
                            } else {
                                $item->dhcp_enabled = 'True';
                            }
                        }
                        if (stripos(trim($input[$i]), 'MAC address:') === 0 and (!isset($item->mac) or $item->mac == '')) {
                            $item->mac = strtolower(trim(str_ireplace('MAC address:', '', $input[$i])));
                            $item_ip->mac = $item->mac;
                        }
                        if (stripos(trim($input[$i]), 'Port speed:') === 0 and (!isset($item->speed) or $item->speed == '')) {
                            $item->speed = $this->get_speed(trim(str_replace('Port speed:', '', $input[$i])));
                        }
                        if (stripos(trim($input[$i]), 'IP address:') === 0 and (!isset($item_ip->ip) or $item_ip->ip == '')) {
                            $item_ip->ip = trim(str_ireplace('IP address:', '', $input[$i]));
                            if (!filter_var($item_ip->ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === false) {
                                $item_ip->ip = $item_ip->ip;
                                $item_ip->version = 4;
                            }
                            if (!filter_var($item_ip->ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
                                $item_ip->ip = $item_ip->ip;
                                $item_ip->version = 6;
                            }
                        }
                        if (stripos(trim($input[$i]), 'Subnet mask:') === 0 and (!isset($item_ip->subnet) or $item_ip->subnet == '')) {
                            $item_ip->subnet = trim(str_ireplace('Subnet mask:', '', $input[$i]));
                        }
                        if (stripos(trim($input[$i]), 'Host name:') === 0 and (!isset($details->hostname) or $details->hostname == '')) {
                            $details->hostname = trim(str_ireplace('Host name:', '', $input[$i]));
                        }
                    }
                    if (isset($item_ip->ip) and (!isset($item->ip_enabled) or $item->ip_enabled == '')) {
                        $item->ip_enabled = 'Link Up';
                    }
                    if (isset($item->ip_enabled) and stripos($item->ip_enabled, 'up') and !isset($details->man_ip_address) and isset($item_ip->ip) and $item_ip->ip != '') {
                        $details->man_ip_address = $item_ip->ip;
                    }
                    foreach ($san as $each) {
                        if ($each->location == $item->attached_to) {
                            $item->manufacturer = @$each->manufacturer;
                        }
                    }
                    $network[] = $item;
                    $ip[] = $item_ip;
                    unset($item);
                    unset($item_ip);
                }
            }


            foreach ($san as $key => $value) {
                $class_vars = get_object_vars($value);
                foreach ($class_vars as $name => $item_value) {
                    if (stripos($san[$key]->$name, 'Not Available') !== false or stripos($san[$key]->$name, 'Unknown') !== false) {
                        $san[$key]->$name = '';
                    }
                }
            }

            $xml = new SimpleXMLElement('<root/>');
            foreach ($san as $key => $value) {
                $item = $xml->addChild('item');
                $class_vars = get_object_vars($value);
                foreach ($class_vars as $name => $item_value) {
                    $item->$name = $item_value;
                }
            }
            unset($san);
            $san = $xml;
            unset($xml);

            $xml = new SimpleXMLElement('<root/>');
            foreach ($network as $key => $value) {
                $item = $xml->addChild('item');
                $class_vars = get_object_vars($value);
                foreach ($class_vars as $name => $item_value) {
                    $item->$name = $item_value;
                }
            }
            unset($network);
            $network = $xml;
            unset($xml);

            $xml = new SimpleXMLElement('<root/>');
            foreach ($disk as $key => $value) {
                $item = $xml->addChild('item');
                $class_vars = get_object_vars($value);
                foreach ($class_vars as $name => $item_value) {
                    $item->$name = $item_value;
                }
            }
            unset($disk);
            $disk = $xml;
            unset($xml);

            $xml = new SimpleXMLElement('<root/>');
            foreach ($ip as $key => $value) {
                $item = $xml->addChild('item');
                $class_vars = get_object_vars($value);
                foreach ($class_vars as $name => $item_value) {
                    $item->$name = $item_value;
                }
            }
            unset($ip);
            $ip = $xml;
            unset($xml);


        $log_details->message = 'Processing audit result for san at ' . $details->man_ip_address;
        stdlog($log_details);

        $details->timestamp = date('Y-m-d H:i:s');
        $details->system_key = $this->m_system->create_system_key($details);
        $details->system_id = intval($this->m_system->find_system($details));
        $details->last_seen = $details->timestamp;
        $details->last_seen_by = 'audit';
        $details->audits_ip = @ip_address_to_db($_SERVER['REMOTE_ADDR']);

        if ($details->system_id == '') {
            // insert a new system
            $details->system_id = $this->m_system->insert_system($details);
            $log_details = new stdClass();
            $log_details->severity = 7;
            $log_details->file = 'system';
            $log_details->message = 'Inserting result for ' . $details->hostname . ' (System ID ' . $details->system_id . ')';
            stdlog($log_details);
            unset($log_details);
            $details->original_timestamp = "";
            echo "SystemID (new): <a href='" . base_url() . "index.php/main/system_display/" . $details->system_id . "'>" . $details->system_id . "</a>.<br />\n";
        } else {
            // update an existing system
            $log_details = new stdClass();
            $log_details->severity = 7;
            $log_details->file = 'system';
            $log_details->message = 'Updating result for ' . $details->hostname . ' (System ID ' . $details->system_id . ')';
            stdlog($log_details);
            unset($log_details);
            $details->original_last_seen_by = $this->m_devices_components->read($details->system_id, 'y', 'system', '', 'last_seen_by');
            $details->original_timestamp = $this->m_devices_components->read($details->system_id, 'y', 'system', '', 'timestamp');
            $this->m_system->update_system($details);
            echo "SystemID (updated): <a href='" . base_url() . "index.php/main/system_display/" . $details->system_id . "'>" . $details->system_id . "</a>.<br />\n";
        }
        $details->first_timestamp = $this->m_devices_components->read($details->system_id, 'y', 'system', '', 'first_timestamp');
        $temp_user = '';
        if (isset($this->user->full_name)) {
            $temp_user = $this->user->full_name;
        }
        $this->m_audit_log->create($details->system_id, $temp_user, $details->last_seen_by, $details->audits_ip, '', '', $details->timestamp);
        unset($temp_user);

        $this->m_audit_log->update('debug', 'san', $details->system_id, $details->last_seen);
        $this->m_devices_components->process_component('san', $details, $san);

        $this->m_audit_log->update('debug', 'network', $details->system_id, $details->last_seen);
        $this->m_devices_components->process_component('network', $details, $network);

        $this->m_audit_log->update('debug', 'disk', $details->system_id, $details->last_seen);
        $this->m_devices_components->process_component('disk', $details, $disk);

        $this->m_audit_log->update('debug', 'ip address', $details->system_id, $details->last_seen);
        $this->m_devices_components->process_component('ip', $details, $ip);

        // Finally, update any groups for this system if config item is set
        $discovery_update_groups = @$this->m_oa_config->get_config_item('discovery_update_groups');
        if (!isset($discovery_update_groups) or $discovery_update_groups == 'n') {
            # don't run the update group routine
        } else {
            $this->m_audit_log->update('debug', 'system groups', $details->system_id, $details->last_seen);
            $this->m_oa_group->update_system_groups($details);
        }
        $this->m_audit_log->update('debug', '', $details->system_id, $details->last_seen);

        $this->benchmark->mark('code_end');
        #$log_details->message = 'Processing completed for ' . $details->man_ip_address . ' (System ID ' . $details->system_id . '), took ' . $this->benchmark->elapsed_time('code_start', 'code_end') . ' seconds';
        #stdlog($log_details);

        unset($log_details);
        } else {
            # nothing sent, sending the form html input page
            $this->load->view('v_san_add');
        }
    }

    private function get_size ($string) {
        # take a string like "100 GB" and return the number of bytes (in powers of 10).
        $size = $string;
        if (stripos($string, 'TB') !== false) {
            $temp_size = trim(str_replace(' TB', '', $string));
            $size = intval($temp_size * 1000 * 1000 * 1000 * 1000);
        }
        if (stripos($string, 'GB') !== false) {
            $temp_size = trim(str_replace(' GB', '', $string));
            $size = intval($temp_size * 1000 * 1000 * 1000);
        }
        if (stripos($string, 'MB') !== false) {
            $temp_size = trim(str_replace(' MB', '', $string));
            $size = intval($temp_size * 1000 * 1000);
        }
        if (stripos($string, 'KB') !== false) {
            $temp_size = trim(str_replace(' KB', '', $string));
            $size = intval($temp_size * 1000);
        }
        unset($temp_size);
        return intval($size);
    }

    private function get_speed ($string) {
        # take a string like "100 GB" and return the number of bytes (in powers of 10).
        $size = $string;
        if (stripos($string, 'tbps') !== false) {
            $temp_size = trim(str_replace(' TB', '', $string));
            $size = intval($temp_size * 1000 * 1000 * 1000 * 1000);
        }
        if (stripos($string, 'gbps') !== false) {
            $temp_size = trim(str_replace(' GB', '', $string));
            $size = intval($temp_size * 1000 * 1000 * 1000);
        }
        if (stripos($string, 'mbps') !== false) {
            $temp_size = trim(str_replace(' MB', '', $string));
            $size = intval($temp_size * 1000 * 1000);
        }
        if (stripos($string, 'kbps') !== false) {
            $temp_size = trim(str_replace(' KB', '', $string));
            $size = intval($temp_size * 1000);
        }
        unset($temp_size);
        return intval($size);
    }

}
