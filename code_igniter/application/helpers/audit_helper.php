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
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.3.3
* @link      http://www.open-audit.org
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}


# Return FALSE on error, or an object if the input can be converted
# from JSON or XML
if (!function_exists('accept_input')) {
    function accept_input($input = '')
    {
        if (empty($input)) {
            return false;
        }
        if (is_string($input)) {
            $json = html_entity_decode($input);
            if (mb_detect_encoding($json) !== 'UTF-8') {
                $json = utf8_encode($json);
            }
            $json = @json_decode($json);
            if ($json) {
                unset($input);
                return $json;
            }
        }
        if (is_string($input)) {
            $xml = html_entity_decode($input);
            if (mb_detect_encoding($xml) !== 'UTF-8') {
                $xml = utf8_encode($xml);
            }
            $xml = iconv('UTF-8', 'UTF-8//TRANSLIT', $xml);
            $xml = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F-\x9F]/u', '', $xml);
            libxml_use_internal_errors(true);
            $xml = @simplexml_load_string($xml);
            if ($xml !== false) {
                unset($input);
                return $xml;
            }
        }
        return false;
    }
}







if (!function_exists('audit_convert')) {
    function audit_convert($parameters)
    {
        if (empty($parameters) or empty($parameters->log) or empty($parameters->input)) {
            $mylog = new stdClass();
            $mylog->severity = 4;
            $mylog->status = 'fail';
            $mylog->message = 'Function audit_convert called without correct params object';
            $mylog->file = 'audit_helper';
            $mylog->function = 'audit_convert';
            stdlog($mylog);
            return false;
        }

        $input = $parameters->input;
        $log = $parameters->log;
        $log->file = 'audit_helper';
        $log->function = 'audit_convert';

        if (is_string($input)) {
            # See if we have stringified JSON
            $json = html_entity_decode($input);
            if (mb_detect_encoding($json) !== 'UTF-8') {
                $json = utf8_encode($json);
            }
            $json = @json_decode($json);
            if ($json) {
                $audit = new stdClass();
                if (!empty($json->sys)) {
                    $audit->system = $json->sys;
                    unset($json->sys);
                }
                if (!empty($json->system)) {
                    $audit->system = $json->system;
                    unset($json->system);
                }
                foreach ($audit->system as $key => $value) {
                    if (empty($value)) {
                        unset($audit->system->{$key});
                    }
                }
                foreach ($json as $section => $something) {
                    $audit->{$section} = array();
                    if (!empty($json->{$section}->item) and is_array($json->{$section}->item)) {
                        $audit->{$section}[] = $json->{$section}->item[0];
                    } else {
                        if (is_array($json->{$section})) {
                            $audit->{$section} = $json->{$section};
                        }
                    }
                }
                foreach ($audit as $section => $something) {
                    if ($section != 'system') {
                        for ($i=0; $i < count($audit->{$section}); $i++) {
                            if (!empty($audit->{$section}[$i])) {
                                foreach ($audit->{$section}[$i] as $key => $value) {
                                    if (empty($value)) {
                                        unset ($audit->{$section}[$i]->{$key});
                                    }
                                }
                            }
                        }
                    }
                }
                unset($input);
                $log->message = 'string converted from JSON';
                $input = $audit;
            }
        }

        if (is_string($input)) {
            # See if we have stringified XML
            $xml = html_entity_decode($input);
            if (mb_detect_encoding($xml) !== 'UTF-8') {
                $xml = utf8_encode($xml);
            }
            $xml = iconv('UTF-8', 'UTF-8//TRANSLIT', $xml);
            $xml = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F-\x9F]/u', '', $xml);
            libxml_use_internal_errors(true);
            $xml = @simplexml_load_string($xml);
            if ($xml === false) {
                foreach (libxml_get_errors() as $error) {
                    $log->message = 'Could not convert string to XML';
                    $log->command_status = 'fail';
                    $log->command_output = $error->message . ' at ' . $error->line . ', column ' . $error->column . ', with code ' . $error->code;
                    discovery_log($log);
                }
                return false;
            }
            if ($xml) {
                $newxml = json_encode($xml);
                $newxml = json_decode($newxml);
                $audit = new stdClass();
                $audit->system = new stdClass();
                if (!empty($newxml->sys)) {
                    foreach ($newxml->sys as $key => $value) {
                        if (@(string)$value !== '') {
                            $audit->system->{$key} = @(string)$newxml->sys->{$key};
                        }
                    }
                }
                if (!empty($newxml->system)) {
                    foreach ($newxml->system as $key => $value) {
                        if (@(string)$value !== '') {
                            $audit->system->{$key} = @(string)$newxml->system->{$key};
                        }
                    }
                }

                unset($newxml);
                foreach ($xml as $section => $something) {
                    if ($section != 'sys') {
                        $audit->{$section} = array();
                        foreach ($xml->{$section}->item as $item) {
                            $newitem = new stdClass();
                            foreach ($item as $key => $value) {
                                if ((string)$value != '') {
                                    $newitem->{$key} = (string)$value;
                                }
                            }
                            $audit->{$section}[] = $newitem;
                        }
                    }
                }
                unset($input);
                $log->message = 'string converted from XML';
                $input = $audit;
            }
        }

        if (is_string($input)) {
            # We have a string that could not be converted
            $log->severity = 5;
            if (!empty($GLOBALS['discovery_id'])) {
                $log->message = 'Could not convert string to JSON or XML';
                $log->command_status = 'fail';
                discovery_log($log);
            } else {
                $log->summary = 'Could not convert string to JSON or XML';
                $log->status = 'fail';
                stdlog($log);
            }
            return false;
        } else {
            if (!empty($audit->system->discovery_id)) {
                $GLOBALS['discovery_id'] = intval($audit->system->discovery_id);
                $log->discovery_id = $GLOBALS['discovery_id'];
            }
            if (!empty($audit->system->id)) {
                $log->system_id = intval($audit->system->id);
            }
        }

        $log->severity = 7;
        if (!empty($GLOBALS['discovery_id'])) {
            $log->command_status = 'success';
            discovery_log($log);
        } else {
            $log->status = 'success';
            stdlog($log);
        }
        return $input;
    }
}





if (!function_exists('audit_format_system')) {
    function audit_format_system($parameters)
    {
        $CI =& get_instance();

        if (empty($parameters) or empty($parameters->log) or empty($parameters->input)) {
            $log = new stdClass();
            $log->severity = 4;
            $log->message = "Function audit_format_system called without parameters object.";
            $log->status = 'fail';
            stdlog($log);
            return false;
        }

        $mylog = $parameters->log;
        $input = $parameters->input;

        if (empty($input->id)) {
            $input->id = '';
        } else {
            $sql = "SELECT `status` FROM system WHERE id = ?";
            $data = array(intval($input->id));
            $query = $CI->db->query($sql, $data);
            $result = $query->result();
            $mylog->system_id = intval($input->id);
            if (!empty($result[0]->status) and $result[0]->status !== 'production') {
                $mylog->message = "Removing supplied system ID (" . intval($input->id) . ") as the device is not in production status.";
                discovery_log($mylog);
                $input->id = '';
            }
        }

        $mylog->command_status = 'notice';
        $mylog->message = 'Formatting system details';
        discovery_log($mylog);

        $input->audits_ip = ip_address_to_db($_SERVER['REMOTE_ADDR']);

        if (empty($input->discovery_id)) {
            $input->discovery_id = '';
        }

        if (empty($input->domain)) {
            $input->domain = '';
        }

        if (empty($input->fqdn)) {
            $input->fqdn = '';
        }

        if (empty($input->hostname)) {
            if (!empty($details->sysName)) {
                $details->hostname = $details->sysName;
            } else {
                $input->hostname = '';
            }
        }

        if (empty($input->last_seen)) {
            $input->last_seen = $CI->config->item('timestamp');
        }

        if (empty($input->timestamp)) {
            $input->timestamp = $CI->config->item('timestamp');
        }

        if (!empty($input->type)) {
            $input->type = strtolower($input->type);
        }

        if (empty($input->uuid)) {
            $input->uuid = '';
        }

        if (empty($input->vm_uuid)) {
            $input->vm_uuid = '';
        }

        # This is set by m_device::insert or update.
        unset($input->icon);

        if (!filter_var($input->hostname, FILTER_VALIDATE_IP)) {
            if (strpos($input->hostname, '.') !== false) {
                # we have a fqdn in the hostname field
                $mylog->message = "FQDN supplied in hostname, converting.";
                discovery_log($mylog);
                if (empty($input->fqdn)) {
                    $input->fqdn = $input->hostname;
                }
                $temp = explode(".", $input->hostname);
                $input->hostname = $temp[0];
                unset($temp[0]);
                if (empty($input->domain)) {
                    $input->domain = implode('.', $temp);
                }
                unset($temp);
            }
        }

        if (filter_var($input->hostname, FILTER_VALIDATE_IP)) {
            # we have an ip address in the hostname field
            if (empty($input->ip)) {
                $input->ip = $input->hostname;
                $mylog->message = "IP supplied in hostname, setting device IP.";
                discovery_log($mylog);
            }
            $input->hostname = '';
        }

        # Virtual Machines
        if (isset($input->manufacturer) and (
            (strripos($input->manufacturer, "vmware") !== false) or
            (strripos($input->manufacturer, "parallels") !== false) or
            (strripos($input->manufacturer, "virtual") !== false))) {
            $input->form_factor = 'Virtual';
            $mylog->message = "Manufacturer match, setting form factor to Virtual.";
            discovery_log($mylog);
        }

        # Mac Model
        if (!empty($input->os_family) and $input->os_family == 'Apple OSX') {
            $CI->load->helper('mac_model');
            $input->description = mac_model($input->serial);
            $input->class = mac_class($input->model);
            $input->form_factor = mac_form_factor($input->model);
            $mylog->message = "OSX detected, setting description, class and form factor.";
            discovery_log($mylog);
        }

        if (!empty($input->form_factor) and $input->form_factor == 'Virtual' and !empty($input->os_group) and $input->os_group != 'Windows' and $input->os_group != '' and empty($input->class)) {
            $input->class = 'virtual server';
            $mylog->message = "Setting class to " . $input->class;
            discovery_log($mylog);
        }

        if (!empty($input->form_factor) and $input->form_factor != 'Virtual' and !empty($input->os_group) and $input->os_group != 'Windows' and $input->os_group != '' and empty($input->class)) {
            $input->class = 'server';
            $mylog->message = "Setting class to " . $input->class;
            discovery_log($mylog);
        }

        if (!empty($input->form_factor) and $input->form_factor == 'Virtual' and !empty($input->os_group) and $input->os_group == 'Windows' and stripos($input->os_name, 'server') !== false and empty($input->class)) {
            $input->class = 'virtual server';
            $mylog->message = "Setting class to " . $input->class;
            discovery_log($mylog);
        }

        if (!empty($input->form_factor) and $input->form_factor != 'Virtual' and !empty($input->os_group) and $input->os_group == 'Windows' and stripos($input->os_name, 'server') !== false and empty($input->class)) {
            $input->class = 'server';
            $mylog->message = "Setting class to " . $input->class;
            discovery_log($mylog);
        }

        if (empty($input->fqdn) and !empty($input->hostname) and !empty($input->domain)) {
            $input->fqdn = $input->hostname . "." . $input->domain;
            $mylog->message = "No FQDN, but hostname and domain supplied, setting FQDN.";
            discovery_log($mylog);
        }

        if (isset($input->os_name)) {
            $input->os_name = str_ireplace("(r)", "", $input->os_name);
            $input->os_name = str_ireplace("(tm)", "", $input->os_name);
        }

        if (empty($input->ip) or $input->ip == '0.0.0.0' or $input->ip == '000.000.000.000') {
            unset($input->ip);
        }

        if (!empty($input->ip) and filter_var($input->ip, FILTER_VALIDATE_IP)) {
            $input->ip = ip_address_to_db($input->ip);
        }

        if (!empty($input->mac_address)) {
            $input->mac_address = strtolower($input->mac_address);
            if ($input->mac_address == '00:00:00:00:00:00') {
                unset($input->mac_address);
            }
        }

        # because Windows doesn't supply an identical UUID, but it does supply the required digits, make a UUID from the serial
        if (!empty($input->uuid) and !empty($input->serial) and stripos($input->serial, 'vmware-') !== false and !empty($input->os_name) and stripos($input->os_name, 'windows') !== false) {
            $mylog->message = "Windows VMware style serial detected, creating vm_uuid.";
            discovery_log($mylog);
            # serial is taken from Win32_ComputerSystemProduct.IdentifyingNumber
            # Vmware supplies - 564d3739-b4cb-1a7e-fbb1-b10dcc0335e1
            # audit_windows supples - VMware-56 4d 37 39 b4 cb 1a 7e-fb b1 b1 0d cc 03 35 e1
            $input->vm_uuid = str_ireplace('VMware-', '', $input->serial);
            $input->vm_uuid = str_ireplace('-', ' ', $input->vm_uuid);
            $input->vm_uuid = strtolower($input->vm_uuid);
            $input->vm_uuid = str_ireplace(' ', '', $input->vm_uuid);
            $input->vm_uuid = substr($input->vm_uuid, 0, 8) . '-'. substr($input->vm_uuid, 8, 4) . '-' . substr($input->vm_uuid, 12, 4) . '-' . substr($input->vm_uuid, 16, 4) . '-' . substr($input->vm_uuid, 20, 12);
        }

        if (!empty($input->uuid) and empty($input->vm_uuid)) {
            $input->vm_uuid = $input->uuid;
        }

        return $input;
    }
}
