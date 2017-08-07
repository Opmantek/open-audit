<?php
/**
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
*
* @category  Controller
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.0.6

* @link      http://www.open-audit.org
*/

/**
* Base Object Nmis.
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Nmis extends MY_Controller
{
    /**
    * Constructor
    *
    * @access    public

    */
    public function __construct()
    {
        parent::__construct();
        // log the attempt
        $log = new stdClass();
        $log->status = 'start';
        $log->function = strtolower(__METHOD__);
        stdlog($log);

        // ensure our URL doesn't have a trailing / as this may break image (and other) relative paths
        $this->load->helper('url');
        if (strrpos($this->input->server('REQUEST_URI'), '/') === strlen($this->input->server('REQUEST_URI'))-1) {
            redirect(uri_string());
        }
        $this->load->helper('input');
        $this->load->helper('output');
        $this->load->helper('error');
        $this->load->model('m_orgs');
        inputRead();
        $this->output->url = $this->config->item('oa_web_index');
    }

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
    }

    /**
    * Our remap function to override the inbuilt controller->method functionality
    *
    * @access public
    * @return NULL
    */
    public function _remap()
    {
        $this->{$this->response->meta->action}();
    }

    /**
    * Process the supplied data and update an existing object
    *
    * @access public
    * @return NULL
    */
    public function create()
    {
        $file = $this->response->meta->received_data->attributes->file;
        $log = new stdClass();
        $log->log_level = 7;
        $log->severity = 6;
        $log->message = 'NMIS import, importing nodes from ' . $file;
        stdlog($log);
        $this->load->model('m_devices');
        $timestamp = $this->config->config['timestamp'];
        $node_array = array();
        $file_handle = fopen($file, 'r');
        if (!$file_handle) {
            log_error('ERR-0016', 'nmis:create - Reading ' . $file);
            output();
            exit();
        }
        $string = fread($file_handle, filesize($file));
        $string = str_replace(PHP_EOL, ' ', $string);
        $string = str_replace("\r\n", ' ', $string);
        $string = str_replace("\n", ' ', $string);
        $string = str_replace(chr(13), ' ', $string);
        $string = str_replace('%hash = (', '{', $string);
        $string = str_replace(');', '}', $string);
        $string = str_replace('=>', ':', $string);
        $string = str_replace("'undef'", "''", $string);
        $string = str_replace('undef', "''", $string);
        $string = str_replace("'", '"', $string);
        $nodes = json_decode($string, true);
        unset($string);
        unset($file_handle);
        unset($file);
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                // no errors
                break;
            case JSON_ERROR_DEPTH:
                log_error('ERR-0016', 'nmis:create - JSON_ERROR_DEPTH - Maximum stack depth exceeded');
                output();
                break;
            case JSON_ERROR_STATE_MISMATCH:
                log_error('ERR-0016', 'nmis:create - JSON_ERROR_STATE_MISMATCH - Underflow or the modes mismatch');
                output();
                break;
            case JSON_ERROR_CTRL_CHAR:
                log_error('ERR-0016', 'nmis:create - JSON_ERROR_CTRL_CHAR - Unexpected control character found');
                output();
                break;
            case JSON_ERROR_SYNTAX:
                log_error('ERR-0016', 'nmis:create - JSON_ERROR_SYNTAX - Syntax error, malformed JSON');
                output();
                break;
            case JSON_ERROR_UTF8:
                log_error('ERR-0016', 'nmis:create - JSON_ERROR_UTF8 - Malformed UTF-8 characters, possibly incorrectly encoded');
                output();
                break;
            default:
                log_error('ERR-0016', 'nmis:create - Error importing Nmis.nodes file');
                output();
                break;
        }

        $nodes_in_file = 0;
        $nodes_collect = 0;
        $nodes_total = 0;
        $nodes_array = array();
        foreach ($nodes as $node) {
            $nodes_in_file++;
            if (@$node['collect'] == 'true') {
                $nodes_collect++;
                #echo "=======================\n";
                $device = new stdClass();
                $device->name = strtolower(@$node['name']);
                if (!filter_var($node['host'], FILTER_VALIDATE_IP) === false) {
                    $device->ip =  $node['host'];
                } else {
                    if (strpos($node['host'], '.') !== false) {
                        $device->fqdn =  $node['host'];
                        $temp = explode('.', $device->fqdn);
                        $device->hostname = $temp[0];
                        unset($temp);
                    } else {
                        $device->hostname =  $node['host'];
                    }
                }
                $device = dns_validate($device, 'n');
                $device->omk_uuid = @$node['uuid'];
                $device->id = $this->m_device->match($device);
                $device->status = 'production';
                $device->credentials = new stdClass();
                $device->credentials->description = 'Imported from NMIS';
                $device->credentials->name = 'Device Specific Credentials';
                $device->credentials->type = 'snmp';
                $device->credentials->credentials = new stdClass();
                $temp =  @$node['version'];
                switch ($temp) {
                    case 'snmpv1':
                        $device->credentials->credentials->version = 1;
                        break;

                    case 'snmpv2c':
                        $device->credentials->credentials->version = 2;
                        break;

                    case 'snmpv3':
                        $device->credentials->credentials->version = 3;
                        break;
                    
                    default:
                        $device->credentials->credentials->version = 2;
                        break;
                }

                if ($device->credentials->credentials->version == 1) {
                    $device->credentials->credentials->community =  @$node['community'];
                }
                if ($device->credentials->credentials->version == 2) {
                    $device->credentials->credentials->community =  @$node['community'];
                }
                if ($device->credentials->credentials->version == 3) {
                    $device->credentials->type = 'snmp_v3';
                    $device->credentials->credentials->security_name = @$node['username'];
                    $device->credentials->credentials->authentication_passphrase = @$node['authpassword'];
                    $device->credentials->credentials->authentication_protocol = @$node['authprotocol'];
                    $device->credentials->credentials->privacy_passphrase = @$node['privpassword'];
                    $device->credentials->credentials->privacy_protocol = @$node['privprotocol'];
                    $device->credentials->credentials->security_level = 'noAuthNoPriv';
                    if (!empty($node['authpassword']) and !empty(@$node['authprotocol']) and empty($node['privpassword'])) {
                        $device->credentials->credentials->security_level = 'authNoPriv';
                    }
                    if (!empty($node['authpassword']) and !empty(@$node['authprotocol']) and ! empty($node['privpassword']) and ! empty($node['privprotocol'])) {
                        $device->credentials->credentials->security_level = 'authPriv';
                    }
                }
                $nodes_array[$device->ip] = $device;
            }
        }
        // echo "Nodes in file: " . $nodes_in_file . "\n";
        // echo "Nodes with collect: " . $nodes_collect . "\n";
        // echo "Total nodes: " . count($nodes_array) . "\n";
        // print_r($nodes_array);
        $ids = array();
        foreach ($nodes_array as $details) {
            $details->last_seen_by = 'nmis';
            $details->last_seen = $timestamp;
            if (!empty($details->id)) {
                $log->message = "Updating device " . $details->name . " (ID:" . $details->id . ")";
                stdlog($log);
                $this->m_devices->update($details);
            } else {
                $log->message = "Creating device " . $details->name;
                stdlog($log);
                $details->id = $this->m_devices->create($details);
            }
            $this->m_devices->sub_resource_create($details->id, 'credential', $details->credentials);
            $ids[] = $details->id;
            $data = new stdClass();
            $data->id = $details->id;
            $data->type = 'devices';
            $data->attributes = new stdClass();
            $data->attributes->id = $details->id;
            $data->attributes->name = $details->name;
            $data->attributes->hostname = $details->hostname;
            $data->attributes->ip = $details->ip;
            $this->response->data[] = $data;
        }
        $ids = implode(',', $ids);

        if ($this->response->meta->format === 'json') {
            output($this->response);
        } else {
            $this->session->set_flashdata('success', count($nodes_array) . ' devices imported.');
            redirect('devices?action=update&ids='.$ids);
        }
    }

    /**
    * Supply a HTML form for the user to update an object
    *
    * @access public
    * @return NULL
    */
    public function create_form()
    {
        #output($this->response);
        include 'include_create_form.php';
    }
}
// End of file name.php
// Location: ./controllers/name.php
