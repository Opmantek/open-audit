<?php
if ( ! defined('BASEPATH')) {
     exit('No direct script access allowed');
}
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
* PHP version 5.3.3
* 
* @category  Helper
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.4.0
* @link      http://www.open-audit.org
*/

if ( ! function_exists('from_unix_timestamp')) {
    /**
     * [from_unix_timestamp description]
     * @param  string $timestamp [description]
     * @return string            [description]
     */
    function from_unix_timestamp($timestamp)
    {
        $wildcard = false;
        if (strpos($timestamp, '%') !== false) {
            $timestamp = str_replace('%', '', $timestamp);
            $wildcard = true;
        }
        if ( ! is_numeric($timestamp)) {
            return $timestamp;
        }
        $sql = '/* input_helper::from_unix_timestamp */ ' . "SELECT FROM_UNIXTIME({$timestamp}) as `timestamp`";
        $CI = & get_instance();
        $CI->response->meta->sql[] = $sql;
        $query = $CI->db->query($sql);
        $result = $query->result();
        $datetime = $result[0]->timestamp;
        $datetime = str_replace(' 00:00:00', '', $datetime);
        if ($wildcard === true) {
            $datetime = '%' . $datetime . '%';
        }
        return $datetime;
    }
}

if ( ! function_exists('set_collection')) {
    /**
     * Read collection from response->meta and validate
     * @return string            A validated collection name
     */
    function set_collection()
    {
        $CI = & get_instance();
        $collection = @$CI->uri->segment(1);
        $collections = array('agents','applications','attributes','baselines','baselines_policies','buildings','charts','clouds','clusters','collectors','configuration','connections','credentials','dashboards','database','devices','discoveries','discovery_log','discovery_scan_options','errors','fields','files','floors','graphs','groups','help','integrations','invoices','invoice_items','ldap_servers','licenses','locations','logs','networks','nmis','orgs','queries','queue','racks','rack_devices','reports','roles','rooms','rows','rules','scripts','search','sessions','summaries','tasks','users','widgets');
        if ( ! empty($collection) && in_array($collection, $collections)) {
            // a valid collection
        } else {
            $collection = 'summaries';
        }
        return $collection;
    }
}

if ( ! function_exists('inputRead')) {
    /**
     * The standard input function for Open-AudIT.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @return NULL [creates and updates the $this->response object]
     */
    function inputRead()
    {

        // Our default values are below
        // resource is the controller name (devices, groups, et al)
        // id is the integer value (if any) following the controller name in the URL
        // sub_resource = blank
        // sub_resource_id = blank
        // action = read if id is set or list if id is not set (create, read, update, delete, collection, execute, download)
        // sort = blank
        // current = y
        // groupby = blank
        // limit = config->{'page_size'}
        // offset = 0
        // format = json
        // properties = *
        // filter = blank
        // version = 1 if JSON requested (the original), 0 if not JSON requested (the latest available)

        // Can set individual items using parameters /devices/1 == /devices?id=1 ???

        $timer_start = microtime(true);

        // set up our logging object
        $log = new stdClass();
        $log->severity = 7;
        $log->type = 'system';
        $log->object = 'input_helper';
        $log->function = 'input_helper::' . strtolower(__METHOD__);
        $log->status = 'parsing input';
        $log->summary = '';

        error_reporting(E_ALL);
        $CI = & get_instance();
        if (empty($CI->response)) {
            $CI->response = new stdClass();
        }

        // Define our constans for use in htmlspecialchars
        if ( ! defined('CHARSET')) {
            define('CHARSET', 'UTF-8');
            if (phpversion() >= 5.4) {
                define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);
            } else {
                define('REPLACE_FLAGS', ENT_COMPAT);
            }
        }

        // enable the $_GET global
        parse_str(substr(strrchr($_SERVER['REQUEST_URI'], '?'), 1), $_GET);
        unset($_GET['user']);
        unset($_GET['uuid']);

        // make sure we have the required header
        if (empty($_SERVER['HTTP_ACCEPT'])) {
            $_SERVER['HTTP_ACCEPT'] = '';
        }

        // Standard URL scheme
        // /collection/{id}/{sub_resource}?action={XYZ}

        // initialise our properties
        $CI->response->meta = new stdClass();
        $CI->response->meta->access_token = @$CI->access_token;
        $CI->response->meta->action = '';
        $CI->response->meta->baseurl = $CI->config->config['base_url'];
        if ( ! empty($CI->config->config['id'])) {
            $CI->response->meta->cloud_id = $CI->config->config['id'];
        }
        $CI->response->meta->collection = '';
        $CI->response->meta->current = 'y';
        $CI->response->meta->debug = false;
        $CI->response->meta->filtered = '';
        $CI->response->meta->format = '';
        $CI->response->meta->groupby = '';
        $CI->response->meta->header = 'HTTP/1.1 200 OK';
        $CI->response->meta->id = null;
        $CI->response->meta->ids = '';
        $CI->response->meta->include = '';
        // if (empty($CI->config->config['page_size'])) {
        //     $CI->config->config['page_size'] = 1000;
        // }
        $CI->response->meta->limit = '';
        $CI->response->meta->offset = 0;
        $CI->response->meta->properties = '';
        $CI->response->meta->query_string = '';
        $request_method = strtoupper($CI->input->server('REQUEST_METHOD'));
        $CI->response->meta->request_method = $request_method;
        $CI->response->meta->requestor = '';
        if ( ! empty($_SERVER['HTTP_REQUESTOR'])) {
            $CI->response->meta->requestor = (string)$_SERVER['HTTP_REQUESTOR'];
        }
        $CI->response->meta->sort = '';
        $CI->response->meta->sub_resource = '';
        $CI->response->meta->sub_resource_id = 0;
        if ( ! empty($GLOBALS['timer_start'])) {
            $CI->response->meta->time_start = $GLOBALS['timer_start'];
        } else {
            $CI->response->meta->time_start = microtime(true);
        }
        $CI->response->meta->time_end = 0;
        $CI->response->meta->time_elapsed = 0;
        $CI->response->meta->total = 0;
        $CI->response->meta->timestamp = $CI->config->config['timestamp'];
        $CI->response->meta->timezone = $CI->config->config['timezone'];
        $CI->response->meta->version = 1;
        $CI->response->meta->filter = array();
        $CI->response->meta->internal = new stdClass();
        $CI->response->meta->query_parameters = array();
        $CI->response->meta->received_data = array();
        $CI->response->links = array();
        // Logs - unset in output_helper if debug !== true
        $CI->response->logs = array();
        $CI->response->included = array();
        $CI->response->meta->sql = array();

        $actions = ' bulk_update_form collection create create_form debug delete download execute export export_form import import_form read reset sub_resource_create sub_resource_read sub_resource_create_form sub_resource_delete sub_resource_download test update ';
        $action = '';

        // get the output format
        $CI->response->meta->format = '';
        $log->summary = 'set format';
        $log->detail = '';
        if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
            $CI->response->meta->format = 'json';
            $log->detail = 'Set format to ' . $CI->response->meta->format . ', according to HEADERS.';
        }
        if (strpos($_SERVER['HTTP_ACCEPT'], 'html') !== false) {
            $CI->response->meta->format = 'screen';
            $log->detail = 'Set format to ' . $CI->response->meta->format . ', according to HEADERS.';
        }
        if (isset($_GET['format'])) {
            $CI->response->meta->format = $_GET['format'];
            $log->detail = 'Set format to ' . $CI->response->meta->format . ', according to GET.';
        }
        if (isset($_POST['format'])) {
            $CI->response->meta->format = $_POST['format'];
            $log->detail = 'Set format to ' . $CI->response->meta->format . ', according to POST.';
        }
        if ($CI->response->meta->format === '') {
            $CI->response->meta->format = 'json';
            $log->detail = 'Set format to ' . $CI->response->meta->format . ', because default.';
        }
        $reserved_words = ' json json_data html screen xml csv sql table ';
        if (stripos($reserved_words, ' '.$CI->response->meta->format.' ') === false) {
            $log->detail = 'Set format to json, because unknown format provided.';
            $log->status = 'warning';
            $CI->response->meta->format = 'json';
        }
        if (empty($log->detail)) {
            $log->status = 'fail';
            $log->detail = 'Could not set format';
            $log->severity = 4;
        }
        stdlog($log);
        $log->severity = 7;

        // Allow for URLs thus:
        // /api/{version}/
        // /v1/
        // /v2/
        // as well as /devices or
        // version={version} in the accept header
        // get the version

        if ( ! empty($CI->uri->segments[1]) && ($CI->uri->segments[1] === 'api' OR $CI->uri->segments[1] === 'v1' OR $CI->uri->segments[1] === 'v2')) {
            $log->summary = 'set version';
            if ($CI->uri->segments[1] === 'api') {
                $CI->response->meta->version = intval($CI->uri->segment(2));
                $log->detail = 'Set version to ' . intval($CI->uri->segment(2)) . ', according to URI segment.';
                unset($CI->uri->segments[1]);
                unset($CI->uri->segments[2]);

            } else if ($CI->uri->segments[1] === 'v1') {
                $CI->response->meta->version = 1;
                $log->detail = 'Set version to v1, according to URI segment.';
                unset($CI->uri->segments[1]);

            } else if ($CI->uri->segments[1] === 'v2') {
                $CI->response->meta->version = 2;
                $log->detail = 'Set version to v2, according to URI segment.';
                unset($CI->uri->segments[1]);
            }
            stdlog($log);
            array_unshift($CI->uri->segments, '');
            $CI->uri->segments = array_values($CI->uri->segments);
        } else if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json;version=') !== false) {
            $CI->response->meta->version = intval(str_replace('application/json;version=', '', $_SERVER['HTTP_ACCEPT']));
            $log->summary = 'set version';
            $log->detail = 'Set version to ' . $CI->response->meta->version . ', according to headers.';
            stdlog($log);
        }

        // get debug
        if ($CI->input->get('debug')) {
            $CI->response->meta->debug = $CI->input->get('debug');
            $CI->config->config['log_level'] = 7;
            $log->summary = 'set debug';
            $log->detail = 'Set debug to ' . $CI->response->meta->debug . ', according to URI.';
            stdlog($log);
        }
        if ($CI->input->post('debug')) {
            $CI->response->meta->debug = $CI->input->post('debug');
            $CI->config->config['log_level'] = 7;
            $log->summary = 'set debug';
            $log->detail = 'Set debug to ' . $CI->response->meta->debug . ', according to POST.';
            stdlog($log);
        }
        if (strtolower($CI->response->meta->debug) === 'true') {
            $CI->response->meta->debug = true;
            $CI->output->enable_profiler(true);
        } else {
            $CI->response->meta->debug = false;
            $CI->output->enable_profiler(false);
        }

        // get our collection - usually devices, groups, reports, etc
        $CI->response->meta->collection = set_collection();
        $log->summary = 'set collection';
        $log->detail = 'Set collection to ' . $CI->response->meta->collection . ', according to URI.';
        stdlog($log);

        $CI->response->meta->heading = ucfirst($CI->response->meta->collection);

        // get the id of the collection item in question
        // if we have an integer
        if ($CI->uri->segment(2) !== '' && is_numeric($CI->uri->segment(2))) {
            $CI->response->meta->id = intval($CI->uri->segment(2));
            $log->summary = 'set id';
            $log->detail = 'Set ID to ' . $CI->response->meta->id . ', according to URI.';
            stdlog($log);
        }

        // if we have a reserved word
        if ($CI->uri->segment(2) && stripos($actions, ' '.$CI->uri->segment(2).' ') !== false) {
            $CI->response->meta->action = $CI->uri->segment(2);
            $action = $CI->uri->segment(2);
            $log->summary = 'set action';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', according to URI.';
            stdlog($log);
        }
        if ($CI->uri->segment(3) && stripos($actions, ' '.$CI->uri->segment(3).' ') !== false) {
            $CI->response->meta->action = $CI->uri->segment(3);
            $action = $CI->uri->segment(3);
            $log->summary = 'set action';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', according to URI.';
            stdlog($log);
        }

        // if we have an item name (ie, not it's ID)
        $temp = @$CI->uri->segment(2);
        if (is_null($CI->response->meta->id) && ! empty($temp) && stripos($actions, ' ' . $CI->uri->segment(2) . ' ') === false) {
            $log->summary = 'Search ID';
            $log->detail = 'Searching for ID, using ' . $CI->uri->segment(2) . ' on the ' . $CI->response->meta->collection . ' collection.';
            stdlog($log);
            $sql = '';
            switch ($CI->response->meta->collection) {
                case 'charts':
                    $sql = '';
                    $CI->response->meta->id = 1;
                    $CI->response->meta->sub_resource = $CI->uri->segment(2);
                    break;
                case 'database':
                    $sql = '';
                    foreach ($CI->db->list_tables() as $key => $value) {
                        if ($CI->uri->segment(2) === $value OR ($CI->uri->segment(2) === 'devices' && $value === 'system')) {
                            $CI->response->meta->id = $CI->uri->segment(2);
                        }
                    }
                    break;
                case 'errors':
                    $sql = '';
                    $CI->response->meta->id = $CI->uri->segment(2);
                    break;
                case 'devices':
                    $sql = '/* input_helper::inputRead */ ' . 'SELECT id FROM system WHERE name LIKE ? ORDER BY id DESC LIMIT 1';
                    $table = 'system';
                    break;
                case 'help':
                    $sql = '';
                    $CI->response->meta->id = 1;
                    $CI->response->meta->sub_resource = '';
                    break;
                case 'logs':
                    $sql = '';
                    $CI->response->meta->id = 1;
                    $CI->response->meta->sub_resource = $CI->uri->segment(2);
                    break;
                case 'search':
                    $sql = '';
                    $CI->response->meta->id = 1;
                    $CI->response->meta->sub_resource = '';
                    break;
                default:
                    $sql = '/* input_helper::inputRead */ ' . "SELECT id FROM `{$CI->response->meta->collection}` WHERE name LIKE ? LIMIT 1";
                    $table = $CI->response->meta->collection;
                    break;
            }

            if ($sql !== '') {
                $data = array(urldecode($CI->uri->segment(2)));
                if ($CI->response->meta->collection === 'users' && strpos($data[0], '@') !== false) {
                    // Special case the username as we may be given user.name@domain.com for LDAP user, but
                    //  we only use user.name in users.name
                    $temp = explode('@', $data[0]);
                    $data = array($temp[0]);
                    unset($temp);
                }
                $query = $CI->db->query($sql, $data);
                $result = $query->result();
                if (count($result) > 0) {
                    $CI->response->meta->id = intval($result[0]->id);
                    $log->summary = 'set id';
                    $log->detail = 'Set id to ' . $CI->response->meta->id . ', after searching.';
                    stdlog($log);
                } else {
                    // should throw an error as we were given a name, but nothing matched
                    $CI->response->meta->id = 888888888888;
                    $log->summary = 'set id';
                    $log->detail = 'Set id to NULL, after searching - no match found.';
                    stdlog($log);
                }
            } else {
                $log->summary = 'set id';
                $log->detail = "Set id to {$CI->response->meta->id}, based on the URL.";
                stdlog($log);
            }
        }

        // get the include
        if ($CI->input->get('include')) {
            $CI->response->meta->include = $CI->input->get('include');
            $log->summary = 'set include';
            $log->detail = 'Set include to ' . $CI->response->meta->include . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('include')) {
            $CI->response->meta->include = $CI->input->post('include');
            $log->summary = 'set include';
            $log->detail = 'Set include to ' . $CI->response->meta->include . ', according to POST.';
            stdlog($log);
        }
        if ( ! empty($CI->response->meta->include)) {
            if ($CI->response->meta->collection === 'devices') {
                if (($CI->response->meta->format === 'screen' && empty($CI->response->meta->include)) OR $CI->response->meta->include === '*' OR $CI->response->meta->include === 'all') {
                    $CI->response->meta->include = 'application,attachment,audit_log,bios,change_log,cluster,credential,discovery_log,disk,dns,edit_log,fields,file,image,ip,location,log,memory,module,monitor,motherboard,netstat,network,nmap,optical,pagefile,partition,policy,print_queue,processor,purchase,rack_devices,route,san,scsi,server,server_item,service,share,software,software_key,sound,task,user,user_group,variable,video,vm,windows';
                } else {
                    $valid = array('application', 'attachment', 'audit_log', 'bios', 'change_log', 'cluster', 'credential', 'discovery_log', 'disk', 'dns', 'edit_log', 'fields', 'file', 'image', 'ip', 'location', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'partition_graph', 'policy', 'print_queue', 'processor', 'purchase', 'rack_devices', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
                    $temp = explode(',', $CI->response->meta->include);
                    for ($i=0; $i < count($temp); $i++) {
                        if ( ! in_array($temp[$i], $valid)) {
                            unset($temp[$i]);
                        }
                    }
                    $CI->response->meta->include = implode(',', $temp);
                }
            } else {
                $CI->response->meta->include = '';
            }
        }

        // get the sub_resource
        if (empty($CI->response->meta->sub_resource)) {
            $temp = @(string)$CI->uri->segment(3, '');
            if (stripos($actions, ' '.$temp. ' ') === false && $temp !== '') {
                $CI->response->meta->sub_resource = $temp;
                $log->summary = 'set sub_resource';
                $log->detail = 'Set sub_resource to ' . $CI->response->meta->sub_resource . ', according to URI.';
                stdlog($log);
            }
        }
        if ($CI->input->get('sub_resource')) {
            $CI->response->meta->sub_resource = $CI->input->get('sub_resource');
            $log->summary = 'set sub_resource';
            $log->detail = 'Set sub_resource to ' . $CI->response->meta->sub_resource . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('sub_resource')) {
            $CI->response->meta->sub_resource = $CI->input->post('sub_resource');
            $log->summary = 'set sub_resource';
            $log->detail = 'Set sub_resource to ' . $CI->response->meta->sub_resource . ', according to POST.';
            stdlog($log);
        }

        if ($CI->response->meta->collection === 'devices') {
            $valid_sub_resources = array('application', 'attachment', 'audit_log', 'bios', 'change_log', 'cluster', 'credential', 'discovery', 'discovery_log', 'disk', 'dns', 'edit_log', 'image', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'partition_graph', 'policy', 'print_queue', 'processor', 'route', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows', 'report', 'query', 'group');
            if ($CI->response->meta->sub_resource !== '' && ! in_array($CI->response->meta->sub_resource, $valid_sub_resources)) {
                $log->summary = 'invalid sub_resource';
                $log->detail = 'Removed invalid sub_resource of ' . $CI->response->meta->sub_resource . '.';
                stdlog($log);
                log_error('ERR-0009', 'input_helper', $log->detail);
                $CI->session->set_flashdata('error', $log->detail);
                $CI->response->meta->sub_resource = '';
            }
        }


        // get the sub_resource id
        if (empty($CI->response->meta->sub_resource_id)) {
            if ( ! empty($CI->response->meta->sub_resource)) {
                $CI->response->meta->sub_resource_id = (string)urldecode($CI->uri->segment(4, ''));
                $log->summary = 'set sub_resource_id';
                $log->detail = 'Set sub_resource_id to ' . $CI->response->meta->sub_resource_id . ', according to URI.';
                stdlog($log);
            }
        }
        if ($CI->input->get('sub_resource_id')) {
            $CI->response->meta->sub_resource_id = $CI->input->get('sub_resource_id');
            $log->summary = 'set sub_resource_id';
            $log->detail = 'Set sub_resource_id to ' . $CI->response->meta->sub_resource_id . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('sub_resource_id')) {
            $CI->response->meta->sub_resource_id = $CI->input->post('sub_resource_id');
            $log->summary = 'set sub_resource_id';
            $log->detail = 'Set sub_resource_id to ' . $CI->response->meta->sub_resource_id . ', according to POST.';
            stdlog($log);
        }
        // if (is_numeric($CI->response->meta->sub_resource_id)) {
            $CI->response->meta->sub_resource_id = intval($CI->response->meta->sub_resource_id);
        // }

        // TODO - fit this somewhere nicer. Need to account for multiple id's being sent
        if ( ! empty($_GET['ids'])) {
            $CI->response->meta->ids = urldecode($_GET['ids']);
            unset($_GET['ids']);
            // Remove a trailing comma if we have one
            if (substr($CI->response->meta->ids, -1) === ',') {
                $CI->response->meta->ids = substr($CI->response->meta->ids, 0, -1);
            }
            $temp = explode(',', $CI->response->meta->ids);
            for ($i=0; $i < count($temp); $i++) {
                $temp[$i] = intval($temp[$i]);
            }
            $CI->response->meta->ids = implode(',', $temp);
            unset($temp);
        }

        // put any POST data into the object
        $data_supplied_by = '';
        if ($request_method === 'POST') {
            if ( ! empty($_POST['data']) && is_array($_POST['data'])) {
                // This is form submitted data
                $CI->response->meta->received_data = $_POST['data'];
                $CI->response->meta->received_data = json_encode($CI->response->meta->received_data);
                $CI->response->meta->received_data = json_decode($CI->response->meta->received_data);
                $log->summary = 'Receiving data';
                $log->detail = 'Data has been supplied via POST HTML form.';
                $data_supplied_by = 'form';
            } else {
                // This is straight JSON submitted data in a string
                $CI->response->meta->received_data = @json_decode($_POST['data']);
                $log->summary = 'Receiving data';
                $log->detail = 'Data has been supplied via POST json.';
                $data_supplied_by = 'json';
            }
            $log->detail = json_encode($CI->response->meta->received_data);
            stdlog($log);
            $log->detail = '';
            $log->summary = '';
        }

        if ($request_method === 'PATCH') {
            $data_json = urldecode(str_replace('data=', '', file_get_contents('php://input')));
            $data_object = json_decode($data_json);
            $options = @$data_object->data->attributes->options;
            if (empty($data_object)) {
                $log->summary = 'Parsing patch request';
                $log->detail = 'Request method is PATCH but no data supplied.';
                $log->severity = 5;
                stdlog($log);
                $log->severity = 7;
            } else {
                $CI->response->meta->received_data = new stdClass();
                if ( ! empty($data_object->data)) {
                    $CI->response->meta->received_data = $data_object->data;
                } else {
                    $CI->response->meta->received_data = $data_object;
                }
                if ( ! empty($options)) {
                    $CI->response->meta->received_data->attributes->options = $options;
                }
            }
        }

        if ( ! empty($CI->response->meta->received_data->id)) {
            if ($CI->response->meta->collection !== 'database' && $CI->response->meta->collection !== 'configuration') {
                $CI->response->meta->id = intval($CI->response->meta->received_data->id);
            }
        }

        // get the action
        // valid values are typically - create, read, update, delete, list, execute
        // TODO - request_method == post and body contains system.id, then update, not create
        if ($CI->input->get('action')) {
            $action = $CI->input->get('action');
            $log->summary = 'set action';
            $log->detail = 'Set action to ' . $action . ', according to GET.';
            stdlog($log);
        }
        if ($CI->input->post('action')) {
            $action = $CI->input->post('action');
            $log->summary = 'set action';
            $log->detail = 'Set action to ' . $action . ', according to POST.';
            stdlog($log);
        }



        $log->summary = 'set action';
        if ($request_method === 'GET' && is_null($CI->response->meta->id) && $action === '') {
            // return a list of items
            $CI->response->meta->action = 'collection';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, no id, no action.';
            stdlog($log);
        }
        if ($request_method === 'GET' && is_null($CI->response->meta->id) && $action === 'reset') {
            $CI->response->meta->action = 'reset';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, action = reset.';
            stdlog($log);
        }
        #if ($request_method === 'GET' && is_null($CI->response->meta->id) && $action === 'export') {
        if ($request_method === 'GET' && $action === 'export') {
            $CI->response->meta->action = 'export';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, action = export.';
            stdlog($log);
        }
        if ($request_method === 'GET' && is_null($CI->response->meta->id) && $action === 'create') {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'create_form';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, no id and action = create.';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === 'create' && $CI->response->meta->sub_resource !== '' && empty($CI->response->meta->sub_resource_id)) {
            // show a HTML form for entering a new SubResource item
            $CI->response->meta->action = 'sub_resource_create_form';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, sub_resource, not sub_resource_id and action = create.';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === 'sub_resource_read' && $CI->response->meta->sub_resource !== '') {
            // return the sub_resource
            $CI->response->meta->action = 'sub_resource_read';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, sub_resource and action = sub_resource_read.';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === 'download' && $CI->response->meta->sub_resource !== '' && ! empty($CI->response->meta->sub_resource_id)) {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'sub_resource_download';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, sub_resource, sub_resource_id and action = download.';
            stdlog($log);
        }
        if ($request_method === 'GET' && is_null($CI->response->meta->id) && $action === 'import') {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'import_form';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, no id and action = import.';
            stdlog($log);
        }
        if ($request_method === 'GET' && ! is_null($CI->response->meta->id) && $action === '') {
            // return a single item
            $CI->response->meta->action = 'read';
            if ($CI->response->meta->collection !== 'database' && $CI->response->meta->collection !== 'errors') {
                $CI->response->meta->id = intval($CI->response->meta->id);
            }
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, id and no action.';
            stdlog($log);
        }
        if ($request_method === 'GET' && ! is_null($CI->response->meta->id) && $action === 'test') {
            // test a single item
            $CI->response->meta->action = 'test';
            $CI->response->meta->id = intval($CI->response->meta->id);
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, id and action = test.';
            stdlog($log);
        }
        // Special case for the database endpoint
        if ($action === 'update' && $CI->response->meta->collection === 'database') {
            $CI->response->meta->action = 'update';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because collection = database and action = update.';
            stdlog($log);
        }
        if ($request_method === 'GET' && $action === 'execute' && $CI->response->meta->collection === 'database' && $CI->response->meta->sub_resource !== '') {
            // show a HTML form for updating an existing item
            $CI->response->meta->action = 'execute';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, collection = database and action = ' . $action . '.';
            stdlog($log);
        }
        if ($request_method === 'GET' && ! is_null($CI->response->meta->id) && $action === 'execute') {
            // Execute the discovery / report / etc
            $CI->response->meta->action = 'execute';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, id and action = ' . $action . '.';
            stdlog($log);
        }
        if ($request_method === 'GET' && is_null($CI->response->meta->id) && $action === 'update' && ! empty($CI->response->meta->ids)) {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'bulk_update_form';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, ids, no id and action = update.';
            stdlog($log);
        }
        if ($request_method === 'GET' && ! is_null($CI->response->meta->id) && $action === 'download' && empty($CI->response->meta->sub_resource)) {
            // mainly used for running a report and displaying the output
            $CI->response->meta->action = 'download';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because GET, id and action = download.';
            stdlog($log);
        }
        if ($request_method === 'POST' && is_null($CI->response->meta->id) && $action === '' && $CI->response->meta->received_data !== '') {
            // insert an item
            $CI->response->meta->action = 'create';
            $CI->response->meta->header = 'HTTP/1.1 201 Created';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because POST, data, no id and no action.';
            stdlog($log);
        }
        if ($request_method === 'POST' && is_null($CI->response->meta->id) && $action === '' && $CI->response->meta->received_data === '') {
            // insert an item
            $CI->response->meta->action = 'collection';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because POST, no id, no data and no action.';
            stdlog($log);
        }
        if ($request_method === 'POST' && is_null($CI->response->meta->id) && $action === 'import') {
            // insert an item
            $CI->response->meta->action = 'import';
            $CI->response->meta->header = 'HTTP/1.1 201 Created';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because POST, no id and action = import.';
            stdlog($log);
        }
        if ($request_method === 'POST' && is_null($CI->response->meta->id) && $action === 'update' && ! empty($CI->response->meta->ids)) {
            $CI->response->meta->action = 'update';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because POST, ids, no id and action = update.';
            stdlog($log);
        }
        if ($request_method === 'POST' && is_null($CI->response->meta->id) && $action === 'update' && $CI->response->meta->collection === 'database') {
            $CI->response->meta->action = 'update';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because POST, no id, collection is database and action = update.';
            stdlog($log);
        }
        if (($request_method === 'PUT' OR $request_method === 'PATCH') && ! is_null($CI->response->meta->id) && $action === '') {
            // update an item
            $CI->response->meta->action = 'update';
            $CI->response->meta->header = 'HTTP/1.1 200 OK';
            $CI->response->meta->id = intval($CI->response->meta->id);
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because POST/PATCH/PUT, id and no action.';
            stdlog($log);
        }
        if ($request_method === 'PATCH' && ! empty($CI->response->meta->ids)) {
            // update several items
            $CI->response->meta->action = 'update';
            $CI->response->meta->header = 'HTTP/1.1 200 OK';
            $CI->response->meta->id = intval($CI->response->meta->id);
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because PATCH, ids and no id.';
            stdlog($log);
        }
        if ($request_method === 'POST' && ( ! is_null($CI->response->meta->id) OR ! empty($CI->response->meta->ids)) && $CI->response->meta->sub_resource !== '') {
            // show a HTML form for entering a new item
            $CI->response->meta->action = 'sub_resource_create';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because POST, id, sub_resource.';
            stdlog($log);
        }
        if ($request_method === 'DELETE' && ! is_null($CI->response->meta->id) && $CI->response->meta->sub_resource === '') {
            // delete an item
            $CI->response->meta->action = 'delete';
            $CI->response->meta->header = 'HTTP/1.1 200 OK';
            if ($CI->response->meta->collection !== 'database') {
                $CI->response->meta->id = intval($CI->response->meta->id);
            }
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because DELETE, id.';
            stdlog($log);
        }
        if ($request_method === 'DELETE' && ! is_null($CI->response->meta->id) && $CI->response->meta->sub_resource !== '' && $CI->response->meta->sub_resource_id !== '') {
            // delete an item
            $CI->response->meta->action = 'sub_resource_delete';
            $CI->response->meta->header = 'HTTP/1.1 200 OK';
            $CI->response->meta->id = intval($CI->response->meta->id);
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because DELETE, id, sub_resource, sub_resource_id.';
            stdlog($log);
        }
        if ($CI->response->meta->action === '') {
            $CI->response->meta->action = 'collection';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', no action.';
            stdlog($log);
        }
        if (stripos($actions, ' '.$CI->response->meta->action.' ') === false) {
            $CI->response->meta->action = 'collection';
            $log->detail = 'Set action to ' . $CI->response->meta->action . ', because not in reserved words.';
            stdlog($log);
        }

        if ($CI->response->meta->collection === 'search' && $request_method !== 'POST') {
            // Redirect as we only accept POSTs for /search
            log_error('ERR-0007', $CI->response->meta->collection . ':' . $CI->response->meta->action);
            $CI->session->set_flashdata('error', $CI->response->errors[0]->detail);
            if ($CI->response->meta->format !== 'screen') {
                output();
                exit();
            } else {
                redirect('devices');
                exit();
            }
        }

        // get the sort
        $CI->response->meta->sort = $CI->input->get('sort');
        if ($CI->input->post('sort')) {
            $CI->response->meta->sort = $CI->input->post('sort');
        }
        $CI->response->meta->sort = str_replace('+', '', $CI->response->meta->sort);
        if ( ! empty($CI->response->meta->sort)) {
            $properties = explode(',', $CI->response->meta->sort);
            for ($i=0; $i < count($properties); $i++) {
                $field = $properties[$i];
                if (substr($field, 0, 1) === '-') {
                    $field = substr($field, 1);
                }
                $temp = array();
                if (strpos($field, '.') !== false) {
                    $temp = explode('.', $field);
                } else {
                    $temp[0] = $CI->response->meta->collection;
                    if ($temp[0] === 'devices') {
                        $temp[0] = 'system';
                    }
                    $temp[1] = $field;
                }
                if ( ! $CI->db->field_exists($temp[1], $temp[0])) {
                    $log->severity = 5;
                    $log->detail = 'Invalid sort attribute supplied ({$properties[$i]}), removed.';
                    stdlog($log);
                    $log->severity = 7;
                    unset($properties[$i]);
                } else {
                    if (substr($properties[$i], 0, 1) === '-') {
                        $properties[$i] = $temp[0] . '.' . $temp[1] . ' DESC';
                    } else {
                        $properties[$i] = $temp[0] . '.' . $temp[1];
                    }
                }
            }
            $CI->response->meta->sort = implode(',', $properties);
        }

        if ($CI->response->meta->sort !== '') {
            $CI->response->meta->internal->sort = 'ORDER BY ' . implode(',', $properties);
            $log->summary = 'set sort';
            $log->detail = "Set sort to {$CI->response->meta->sort}, according to POST.";
            stdlog($log);
        } else {
            $CI->response->meta->internal->sort = '';
        }

        // get current
        $log->summary = 'set current';
        $log->detail = 'Set current to y, because default.';
        if ($CI->input->get('current')) {
            $CI->response->meta->current = $CI->input->get('current');
            $log->detail = 'Set current to ' . $CI->response->meta->current . ', according to GET.';
        }
        if ($CI->input->post('current')) {
            $CI->response->meta->current = $CI->input->post('current');
            $log->detail = 'Set current to ' . $CI->response->meta->current . ', according to POST.';
        }
        stdlog($log);
        $current_words = ' y n all delta full ';
        if (stripos($current_words, ' '.$CI->response->meta->current.' ') === false) {
            $CI->response->meta->current = 'y';
            $log->detail = 'Set current to "y", because not in reserved words or blank.';
            stdlog($log);
        }
        unset($current_words);

        // get the group by
        $log->summary = 'set groupby';
        if ($CI->input->get('groupby')) {
            $CI->response->meta->groupby = $_GET['groupby'];
            $log->detail = 'Set groupby to ' . $CI->response->meta->groupby . ', according to GET.';
        }
        if ($CI->input->post('groupby')) {
            $CI->response->meta->groupby = $_POST['groupby'];
            $log->detail = 'Set groupby to ' . $CI->response->meta->groupby . ', according to POST.';
        }
        if ( ! empty($CI->response->meta->groupby)) {
            if (strpos($CI->response->meta->groupby, '.') !== false) {
                $temp = explode('.', $CI->response->meta->groupby);
                if ( ! $CI->db->field_exists($temp[1], $temp[0])) {
                    $CI->response->meta->groupby = '';
                    $log->detail = 'Invalid groupby supplied, removed.';
                }
            } else {
                $temp = $CI->response->meta->collection;
                if ($temp === 'devices') {
                    $temp = 'system';
                }
                if ($CI->response->meta->collection !== 'database') {
                    if ( ! $CI->db->field_exists($CI->response->meta->groupby, $temp)) {
                        $CI->response->meta->groupby = '';
                        $log->detail = 'Invalid groupby supplied, removed.';
                    } else {
                        $CI->response->meta->groupby = $temp . '.' . $CI->response->meta->groupby;
                    }
                } else {
                    $CI->response->meta->groupby = 1;
                }
            }
        }
        if ( ! empty($CI->response->meta->groupby)) {
            stdlog($log);
        }
        if ($CI->response->meta->groupby) {
            $CI->response->meta->internal->groupby = 'GROUP BY ' . $CI->response->meta->groupby;
        } else {
            $CI->response->meta->internal->groupby = '';
        }

        // get the offset
        $log->summary = 'set offset';
        if (isset($_GET['offset'])) {
            $CI->response->meta->offset = intval($_GET['offset']);
            $log->detail = 'Set offset to ' . $CI->response->meta->offset . ', according to GET.';
            stdlog($log);
        }
        if (isset($_POST['offset'])) {
            $CI->response->meta->offset = intval($_POST['offset']);
            $log->detail = 'Set offset to ' . $CI->response->meta->offset . ', according to POST.';
            stdlog($log);
        }

        // get and set the limit
        $log->summary = 'set limit';
        $CI->config->config['page_size'] = @intval($CI->config->config['page_size']);
        if (empty($CI->config->config['page_size'])) {
            $CI->config->config['page_size'] = 1000;
        }
        if (isset($_GET['limit'])) {
            $CI->response->meta->limit = intval($_GET['limit']);
            $log->detail = 'Set limit to ' . $CI->response->meta->limit . ', according to GET.';
            stdlog($log);
        }
        if (isset($_POST['limit'])) {
            $CI->response->meta->limit = intval($_POST['limit']);
            $log->detail = 'Set limit to ' . $CI->response->meta->limit . ', according to POST.';
            stdlog($log);
        }
        if ($CI->response->meta->format === 'screen' && empty($CI->response->meta->limit)) {
            $CI->response->meta->limit = intval($CI->config->config['page_size']);
            $log->detail = 'Set limit to ' . $CI->response->meta->limit . ', because screen format and no limit requested, so default (page_size).';
            stdlog($log);
        }
        if ($CI->response->meta->format === 'json' && empty($CI->response->meta->limit)) {
            $CI->response->meta->limit = intval($CI->config->config['page_size']);
            $log->detail = 'Set limit to ' . $CI->response->meta->limit . ', because JSON format and no limit requested, so default (page_size).';
            stdlog($log);
        }
        if ( ! empty($CI->response->meta->limit)) {
            $CI->response->meta->internal->limit = 'LIMIT ' . $CI->response->meta->offset . ',' . intval($CI->response->meta->limit);
        } else {
            $CI->response->meta->internal->limit = '';
        }

        // get the list of requested properties (usually) properties=id,name,status
        $log->summary = 'set properties';
        if (isset($_GET['properties'])) {
            $CI->response->meta->properties = $_GET['properties'];
            $log->detail = 'Set properties to ' . $CI->response->meta->properties . ', according to GET.';
            stdlog($log);
        }
        if (isset($_POST['properties'])) {
            $CI->response->meta->properties = $_POST['properties'];
            $log->detail = 'Set properties to ' . $CI->response->meta->properties . ', according to POST.';
            stdlog($log);
        }

        // Allow for format of properties=["id", "name", "status"]
        if (json_decode($CI->response->meta->properties)) {
            $temp = json_decode($CI->response->meta->properties);
            unset($CI->response->meta->properties);
            $CI->response->meta->properties = '';
            foreach ($temp as $property) {
                $CI->response->meta->properties .= $property . ',';
            }
            $CI->response->meta->properties = substr($CI->response->meta->properties, 0, -1);
            $log->detail = 'Set properties to ' . $CI->response->meta->properties . ', secondary format.';
            stdlog($log);
        }

        if ($CI->response->meta->collection === 'devices') {
            if ($CI->response->meta->properties === 'default') {
                $CI->response->meta->properties = $CI->config->config['devices_default_retrieve_columns'];
            }
        }

        if ($CI->response->meta->properties === 'all' OR $CI->response->meta->properties === '*') {
            $table = $CI->response->meta->collection;
            if ($table === 'devices') {
                $table = 'system';
            }
            $CI->response->meta->properties = $table . '.' . implode(','.$table.'.', $CI->db->list_fields($table));
        }

        if ($CI->response->meta->properties !== '') {
            // Validate the properties are database columns
            $properties = explode('.', $CI->response->meta->properties);
            for ($i=0; $i < count($properties); $i++) {
                if (strpos($properties[$i], '.') !== false) {
                    $temp = explode('.', $properties[$i]);
                    if ( ! $CI->db->field_exists($temp[1], $temp[0])) {
                        $log->detail = 'Invalid property supplied, removed.';
                        unset($properties[$i]);
                    }
                } else {
                    $temp = $CI->response->meta->collection;
                    if ($temp === 'devices') {
                        $temp = 'system';
                    }
                    if ( ! $CI->db->field_exists($properties[$i], $temp)) {
                        $log->detail = 'Invalid property supplied, removed.';
                        unset($properties[$i]);
                    }
                }
            }
        }

        if ($CI->response->meta->properties === '') {
            // set some defaults
            if ($CI->response->meta->action === 'collection' && $CI->response->meta->collection === 'devices') {
                // we're requesting a list of devices without properties - set the below as defaults
                if ($CI->response->meta->sub_resource === '' OR strtolower($CI->response->meta->sub_resource) === 'system') {
                    $CI->response->meta->properties = 'system.id,system.icon,system.type,system.name,system.domain,system.ip,system.identification,system.description,system.manufacturer,system.os_family,system.status';
                    $log->detail = 'Set properties to ' . $CI->response->meta->properties . ', because devices default.';
                    stdlog($log);
                } else {
                    // we're requesting a subresource - return all the subresource's properties
                    $CI->response->meta->properties = $CI->response->meta->sub_resource . '.*';
                    $log->detail = 'Set properties to ' . $CI->response->meta->properties . ', because devices sub_resource default.';
                    stdlog($log);
                }
            } else {
                // we're requesting something that isn't a device (or a list of devices) - return everything
                $CI->response->meta->properties = '*';
                $log->detail = 'Set properties to ' . $CI->response->meta->properties . ', because non-devices default.';
                stdlog($log);
            }
        }

        // perform some simple data cleansing
        $CI->response->meta->properties = str_replace(array("'", '"', '(', ')'), '', $CI->response->meta->properties);

        $CI->response->meta->internal->properties = '';
        // create our internal properties list - this is what gets executed in SQL
        if ($CI->response->meta->properties !== '*' && $CI->response->meta->properties !== $CI->response->meta->sub_resource . '.*') {
            $temp = explode(',', $CI->response->meta->properties);
            foreach ($temp as $property) {
                if ($property === 'count') {
                    $CI->response->meta->internal->properties .= 'count(*) as `count`,';
                } elseif ($property === 'system_id') {
                    $CI->response->meta->internal->properties .= 'system.id as `system_id`,';
                } else {
                    $CI->response->meta->internal->properties .= $property . ' AS `' . trim($property) . '`,';
                }
            }
            $CI->response->meta->internal->properties = substr($CI->response->meta->internal->properties, 0, -1);
        } else {
            $CI->response->meta->internal->properties = $CI->response->meta->properties;
        }
        if ($CI->response->meta->properties === '*') {
            $temp = $CI->response->meta->collection;
            if ($temp === 'devices') {
                $temp = 'system';
            }

            // Uncomment the below to enable fully qualified column names.
            // NOTE - this would break the current HTML templates and change the API response.
            // Maybe enable for v4 (if ever)
            // $fields = $CI->db->list_fields($temp);
            // for ($i=0; $i < count($fields); $i++) {
            //     $fields[$i] = $temp . '.' . $fields[$i] . ' AS `' . $temp . '.' . $fields[$i] . '`';
            // }
            // $CI->response->meta->internal->properties = implode(', ', $fields);

            $CI->response->meta->internal->properties = '`' . $temp . '`.*';
        }

        if ($request_method === 'POST' && $data_supplied_by === 'form' && ! empty($CI->config->config['access_token_enable']) && $CI->config->config['access_token_enable'] === 'y') {
            if (empty($CI->response->meta->received_data->access_token)) {
                $log->summary = 'Access token not supplied';
                $log->detail = 'No access token was supplied with a POST data request';
                $log->status = 'fail';
                $log->severity = 4;
                stdlog($log);
                $log->severity = 7;
                // Redirect as we must have an auth token from when we requested the create form
                log_error('ERR-0034', $CI->response->meta->collection . ':' . $CI->response->meta->action);
                $CI->session->set_flashdata('error', $CI->response->errors[0]->detail);
                if ($CI->response->meta->format !== 'screen') {
                    output();
                    exit();
                } else {
                    redirect($CI->response->meta->collection);
                    exit();
                }
            }
            if ( ! in_array($CI->response->meta->received_data->access_token, $CI->user->access_token)) {
                $log->summary = 'Access token invalid';
                $log->detail = 'An invalid access token was supplied with a POST data request. POSTed access token: ' . @$CI->response->meta->received_data->access_token . ' Cookie access_tokens: ' . implode(', ', $CI->user->access_token);
                $log->status = 'fail';
                $log->severity = 4;
                stdlog($log);
                $log->severity = 7;
                // Redirect as we must have an auth token from when we requested the create form
                log_error('ERR-0035', $CI->response->meta->collection . ':' . $CI->response->meta->action);
                $CI->session->set_flashdata('error', $CI->response->errors[0]->detail);
                if ($CI->response->meta->format !== 'screen') {
                    output();
                    exit();
                } else {
                    redirect($CI->response->meta->collection);
                    exit();
                }
            }
            $log->summary = 'Check access token';
            $log->detail = 'A valid access token was supplied with a POST data request';
            stdlog($log);
        }


        $org_list = array();
        switch ($CI->response->meta->collection) {
            case 'agents':
            case 'applications':
            case 'baselines':
            case 'baselines_policies':
            case 'buildings':
            case 'clouds':
            case 'clusters':
            case 'collectors':
            case 'connections':
            case 'credentials':
            case 'devices':
            case 'discoveries':
            case 'discovery_log':
            case 'floors':
            case 'integrations':
            case 'ldap_servers':
            case 'licenses':
            case 'locations':
            case 'logs':
            case 'networks':
            case 'orgs':
            case 'rack_devices':
            case 'racks':
            case 'rooms':
            case 'rows':
            case 'tasks':
            case 'users':
                $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id)));
                break;

            case 'configuration':
            case 'database':
            case 'errors':
            case 'help':
            case 'nmis':
            case 'san':
            case 'search':
            case 'test':
            case 'util':
                $org_list = $CI->user->orgs;
                break;

            case 'dashboards':
            case 'discovery_scan_options':
            case 'fields':
            case 'files':
            case 'groups':
            case 'queries':
            case 'reports':
            case 'roles':
            case 'rules':
            case 'scripts':
            case 'summaries':
            case 'widgets':
                $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id)));
                $org_list = array_unique(array_merge($org_list, $CI->m_orgs->get_user_ascendants($CI->user->id)));
                $org_list[] = 1;
                break;

            default:
                $org_list = $CI->user->orgs;
                break;
        }
        $CI->user->org_list = implode(',', $org_list);

        // get the filter
        // NOTE - Had to create our own parsing routine because PHP replaces .'s with underscores
        //        in incoming variable names. The unfortunate result is that we can not use a . in
        //        a variable value when using GET (so no system.manufacturer=Dell, for example)
        //        PHP Bug Report - https://bugs.php.net/bug.php?id=45272
        //        PHP Docs - https://php.net/manual/en/language.variables.external.php

        $filter = array();
        $log->summary = 'set filter';
        $CI->response->meta->query_string = urldecode($_SERVER['QUERY_STRING']);
        $CI->response->meta->query_string = str_replace('&amp;', '&', $CI->response->meta->query_string);
        if ($CI->response->meta->query_string !== '') {
            $reserved_words = ' action as_at current debug format graph groupby ids include limit offset properties query report_name search sort sub_resource sub_resource_id ';
            foreach (explode('&', $CI->response->meta->query_string) as $item) {
                $query = new stdClass();
                $query->name = substr($item, 0, strpos($item, '='));
                $query->operator = '=';
                $query->value = str_replace($query->name.'=', '', $item);

                if (strtolower($query->name) === 'as_at') {
                    $CI->response->meta->internal->as_at = $query->value;
                    $CI->response->meta->current = 'all';
                    $log->detail = 'Set current to all because as_at specified.';
                    stdlog($log);
                }

                if (strtolower(substr($query->value, 0, 8)) === 'not like') {
                    $query->value = '%' . substr($query->value, 8) . '%';
                    $query->operator = 'not like';
                }

                if (strtolower(substr($query->value, 0, 5)) === '!like') {
                    $query->value = '%' . substr($query->value, 5) . '%';
                    $query->operator = 'not like';
                }

                $operator = substr($query->value, 0, 4);
                if (strtolower($operator) === 'like') {
                    $query->value = '%' . substr($query->value, 4) . '%';
                    $query->operator = $operator;
                }

                if (substr($query->value, 0, 3) === 'in(' && strpos($query->value, ')') === strlen($query->value)-1) {

                    // Removed the below. It is up to the user to quote enclose strings if required
                    // If we do this for them, they end up double quoted upon link generation in output_helper

                    // $temp_value = substr($query->value, 3, strlen($query->value)-4);
                    // $temp_value = str_replace("'", "\'", $temp_value);
                    // $temp_value = str_replace(",", "','", $temp_value);
                    // $query->value = "('" . $temp_value . "')";

                    $query->value = substr($query->value, 2);
                    $query->operator = 'in';
                }

                if (substr($query->value, 0, 6) === 'notin(' && strpos($query->value, ')') === strlen($query->value)-1) {
                    $query->value = substr($query->value, 5);
                    $query->operator = 'not in';
                }

                $operator = substr($query->value, 0, 2);
                if ($operator === '!=' OR $operator === '>=' OR $operator === '<=') {
                    $query->value = substr($query->value, 2);
                    $query->operator = $operator;
                }

                $operator = substr($query->value, 0, 1);
                if ($operator === '=' OR $operator === '>' OR $operator === '<') {
                    $query->value = substr($query->value, 1);
                    $query->operator = $operator;
                }

                $query->name = str_replace(array(',', "'", '"', '(', ')'), '', $query->name);

                if ($query->value === false) {
                    $query->value = '';
                }

                if (strpos($reserved_words, ' '.$query->name.' ') === false && $query->name !== '') {
                    $CI->response->meta->filter[] = $query;
                }
                $CI->response->meta->query_parameters[] = $query;
                unset($query);
            }
        }

        $CI->response->meta->internal->filter = filter($CI->response->meta->filter, $CI->response->meta->collection, $CI->user);

        $filter = '';
        if ( ! empty($CI->response->meta->collection)) {
            foreach ($CI->response->meta->query_parameters as $parameter) {
                if ($parameter->name === 'search') {
                    if ($CI->db->table_exists($CI->response->meta->collection)) {
                        $fields = $CI->db->list_fields($CI->response->meta->collection);
                        $excluded_fields = array('id', 'org_id', 'edited_by', 'edited_date');
                        $filter = ' AND     (';
                        foreach ($fields as $field) {
                            if ( ! in_array($field, $excluded_fields)) {
                                $filter .= $CI->response->meta->collection . '.' . $field . ' LIKE "%' . str_replace('"', '\"', $parameter->value) . '%" OR ';
                            }
                        }
                        if ($filter !== ' AND     (') {
                            $filter = substr($filter, 0, strlen($filter)-3) . ')';
                        } else {
                            $filter = '';
                        }
                    }
                }
            }
        }
        $CI->response->meta->internal->filter .= $filter;

        if ($CI->response->meta->collection === 'devices') {
            $CI->response->meta->internal->join = build_join();
        }

        // Accept first_seen, last_seen, edited_date and timestamp as numeric unix_timestamp's and convert them to a local timestamp string
        foreach ($CI->response->meta->filter as $filter) {
            $item = substr($filter->name, strpos($filter->name, '.')+1);
            $value = str_replace('%', '', $filter->value);
            if (($item === 'first_seen' OR $item === 'last_seen' OR $item === 'when' OR $item === 'edited_date' OR $item === 'timestamp') && is_numeric($value)) {
                $filter->value = from_unix_timestamp($filter->value);
            }
        }

        if ($query = json_decode($CI->input->get('query'))) {
            unset($CI->response->meta->filter);
            $CI->response->meta->filter = array();
            while (count($query) > 0) {
                $filter = new stdClass();
                $filter->name = array_shift($query);
                $operator = array_shift($query);
                if (stripos(' = != > >= < <= not like ', ' '.$operator.' ') !== false) {
                    $filter->operator = $operator;
                    if (stripos($filter->operator, 'like') !== false) {
                        $filter->value = '%'.array_shift($query).'%';
                    } else {
                        $filter->value = array_shift($query);
                    }
                } else {
                    $filter->operator = '=';
                    $filter->value = $operator;
                }
                $CI->response->meta->filter[] = $filter;
                unset($filter);
            }
        }

        $CI->response->links = new stdClass();
        $CI->response->links->self = $CI->config->config['base_url'] . 'index.php/' . $CI->response->meta->collection;
        if ( ! is_null($CI->response->meta->id)) {
            $CI->response->links->self .= '/' . $CI->response->meta->id;
        }
        if ($CI->response->meta->sub_resource !== '') {
            $CI->response->links->self .= '/' . $CI->response->meta->sub_resource;
        }
        if ( ! empty($CI->response->meta->sub_resource_id)) {
            $CI->response->links->self .= '/' . $CI->response->meta->sub_resource_id;
        }
        $CI->response->links->first = null;
        $CI->response->links->last = null;
        $CI->response->links->next = null;
        $CI->response->links->prev = null;
        $CI->response->errors = array();

        $permission['bulk_update_form'] = 'c';
        $permission['collection'] = 'r';
        $permission['create'] = 'c';
        $permission['create_form'] = 'c';
        $permission['delete'] = 'd';
        $permission['download'] = 'r';
        if ($CI->response->meta->collection === 'database' OR $CI->response->meta->collection === 'discoveries') {
            $permission['execute'] = 'u';
        } else {
            $permission['execute'] = 'r';
        }
        $permission['import'] = 'c';
        $permission['import_form'] = 'c';
        $permission['read'] = 'r';
        $permission['export'] = 'r';
        $permission['reset'] = 'd';
        $permission['sub_resource_create'] = 'c';
        $permission['sub_resource_create_form'] = 'c';
        $permission['sub_resource_delete'] = 'd';
        $permission['sub_resource_download'] = 'r';
        $permission['sub_resource_read'] = 'r';
        $permission['test'] = 'u';
        $permission['update'] = 'u';
        $permission['update_form'] = 'u';
        $permission['unknown'] = 'unknown action';

        if (empty($CI->response->meta->action)) {
            $log->summary = 'set action';
            $log->detail = 'No action determined, setting to default (collection).';
            $log->severity = 6;
            stdlog($log);
            $log->severity = 7;
            $CI->response->meta->action = 'collection';
        }

        if (empty($permission[$CI->response->meta->action])) {
            $log->summary = 'set action';
            $log->detail = 'No permission determined for '  . $CI->response->meta->action . ', setting to unknown.';
            $log->severity = 5;
            stdlog($log);
            $log->severity = 7;
            $CI->response->meta->action = 'unknown';
        }

        if (empty($CI->roles) && $CI->config->config['internal_version'] >= 20160904) {
            $CI->load->model('m_roles');
            $CI->roles = $CI->m_roles->collection(1);
            if (empty($CI->roles)) {
                $CI->session->set_flashdata('error', 'No Roles retrieved from database.');
                $CI->session->unset_userdata('user_id');
                redirect('logon');
            }
        }
        if ($CI->config->config['internal_version'] >= 20160904) {
            $CI->load->model('m_users');
            $check_permission = true;
            if ($CI->response->meta->collection === 'users' && $CI->user->id === $CI->response->meta->id && $CI->response->meta->action === 'update' && ! empty($CI->response->meta->received_data)) {
                $allowed_attributes = array('id', 'name', 'full_name', 'email', 'lang', 'password', 'dashboard_id');
                $check_permission = false;
                foreach ($CI->response->meta->received_data->attributes as $key => $value) {
                    if ( ! in_array($key, $allowed_attributes)) {
                        $check_permission = true;
                    }
                }
            }
            if ($CI->response->meta->collection === 'users' && $CI->user->id === $CI->response->meta->id && $CI->response->meta->action === 'read' ) {
                // Always allow a user to READ their own object
                $check_permission = false;
            }
            if ($CI->response->meta->collection === 'help' ) {
                // Always allow a user to view help
                $check_permission = false;
            }
            if ($check_permission) {
                $perm_collection = $CI->response->meta->collection;
                if ($CI->response->meta->collection === 'baselines_policies') {
                    $perm_collection = 'baselines';
                }
                if (( ! $CI->m_users->get_user_permission($CI->user->id, $perm_collection, $permission[$CI->response->meta->action]) && $CI->response->meta->collection !== 'errors')) {
                    log_error('ERR-0015', $CI->response->meta->collection . ':' . $permission[$CI->response->meta->action]);
                    $CI->session->set_flashdata('error', $CI->response->errors[0]->detail);
                    if ($CI->m_users->get_user_permission($CI->user->id, $CI->response->meta->collection, 'r')) {
                        redirect($CI->response->meta->collection);
                        // TODO - redirect if screen, output if JSON
                    } else {
                        if ($CI->response->meta->collection === 'summaries' && $CI->response->meta->action === 'collection') {
                            $CI->session->unset_userdata('user_id');
                            $CI->session->set_flashdata('error', 'User cannot run summaries::collection.');
                            redirect('logon');
                            // TODO - redirect if screen, output if JSON
                        } else {
                            redirect('summaries');
                            // TODO - redirect if screen, output if JSON
                        }
                    }
                }
            }
        }
        if (empty($CI->user->orgs)) {
            $CI->session->unset_userdata('user_id');
            $CI->session->set_flashdata('error', 'User has no permissions on any orgs.');
            redirect('logon');
        }

        if ($CI->config->config['internal_version'] < $CI->config->config['web_internal_version'] && $CI->response->meta->collection !== 'database') {
            redirect('database?action=update');
        }

        if ( ! empty($CI->response->meta->id) && $CI->response->meta->id !== 888888888888 &&
            $CI->response->meta->collection !== 'charts' &&
            $CI->response->meta->collection !== 'configuration' &&
            $CI->response->meta->collection !== 'database' &&
            $CI->response->meta->collection !== 'errors' &&
            $CI->response->meta->collection !== 'ldap_servers' &&
            $CI->response->meta->collection !== 'logs' &&
            $CI->response->meta->collection !== 'nmis' &&
            $CI->response->meta->collection !== 'queue' &&
            $CI->response->meta->collection !== 'report' &&
            $CI->response->meta->collection !== 'roles') {
            if ( ! $CI->m_users->get_user_collection_org_permission($CI->response->meta->collection, $CI->response->meta->id)) {
                if ($CI->response->meta->format === 'json') {
                    echo json_encode($CI->response);
                } else {
                    $CI->session->set_flashdata('error', $CI->response->errors[0]->detail);
                    redirect($CI->response->meta->collection);
                }
                exit();
            }
            // check (if we're supplying data) that the OrgID is one we're allowed to supply
            if ($CI->response->meta->action === 'create' OR $CI->response->meta->action === 'update' OR $CI->response->meta->action === 'import') {
                $temp = explode(',', $CI->user->org_list);
                // org_id
                if ( ! empty($CI->response->meta->received_data->org_id)) {
                    $allowed = false;
                    foreach ($temp as $key => $value) {
                        if ($CI->response->meta->received_data->org_id === $value) {
                            $allowed = true;
                        }
                    }
                    if ( ! $allowed) {
                        log_error('ERR-0018', $CI->response->meta->collection . ':' . $CI->response->meta->action);
                        output();
                        exit();
                    }
                }
                // devices_assigned_to_org
                if ( ! empty($CI->response->meta->received_data->devices_assigned_to_org)) {
                    $allowed = false;
                    foreach ($temp as $key => $value) {
                        if ($CI->response->meta->received_data->devices_assigned_to_org === $value) {
                            $allowed = true;
                        }
                    }
                    if ( ! $allowed) {
                        log_error('ERR-0018', $CI->response->meta->collection . ':' . $CI->response->meta->action);
                        output();
                        exit();
                    }
                }
                unset($temp);
            }
        }

        $timer_end = microtime(true);
        $entry = new stdClass();
        $entry->time = ($timer_end - $timer_start);
        $entry->detail = 'input_helper::InputRead.';
        $entry->time_now = time();
        $GLOBALS['timer_log'][] = $entry;
    }
}

if ( ! function_exists('build_join')) {
    /**
     * [build_join description]
     * @return [type] [description]
     */
    function build_join()
    {
        $CI = & get_instance();
        $join = '';
        $tables = '';
        if ( ! empty($CI->response->meta->filter) && is_array($CI->response->meta->filter) && count($CI->response->meta->filter) > 0) {
            foreach ($CI->response->meta->filter as $item) {
                if (strpos($item->name, '.') !== false) {
                    $table = substr($item->name, 0, strpos($item->name, '.'));
                    if ($table !== 'system' && stripos($tables, ' ' . $table . ' ') === false) {
                        if ($table === 'change_log' OR $table === 'edit_log' OR $table === 'audit_log') {
                            $join .= ' LEFT JOIN `' . $table . '` ON (system.id = `' . $table . '`.system_id) ';
                        } else {
                            $join .= ' LEFT JOIN `' . $table . '` ON (system.id = `' . $table . '`.system_id AND ' . $table . '.current = "' . $CI->response->meta->current . '") ';
                        }
                    }
                    $tables .= " {$table} ";
                }
            }
        }
        return($join);
    }
}

if ( ! function_exists('filter')) {
    /**
     * [filter description]
     * @param  [type] $response_filter [description]
     * @param  [type] $collection      [description]
     * @param  [type] $user            [description]
     * @return [type]                  [description]
     */
    function filter($response_filter, $collection, $user)
    {
        $reserved = ' action current format graph limit offset properties report_name resource sort sub_resource ';
        $filter = '';
        foreach ($response_filter as $item) {
            if (empty($item->operator)) {
                $item->operator = '=';
            }
            if (strpos(' '.$item->name.' ', $reserved) === false) {
                // We MUST have a name like 'connections.name', not just 'name'
                if (strpos($item->name, '.') !== false) {
                    if ($item->operator === 'in') {
                        $filter .= ' AND ' . $item->name . ' in ' . str_replace('"', '\"', $item->value);
                    } else if ($item->operator === 'not in') {
                        $filter .= ' AND ' . $item->name . ' not in ' . str_replace('"', '\"', $item->value);
                    } else {
                        $filter .= ' AND ' . $item->name . ' ' . $item->operator . ' ' . '"' . str_replace('"', '\"', $item->value) . '"';
                    }
                }
            }
        }

        if ($collection !== 'configuration' && $collection !== 'logs' ) {
            $temp = explode(',', $user->org_list);
            $temp = array_unique($temp);
            $org_list = implode(',', $temp);
            if ($filter !== '') {
                $filter = substr($filter, 5);
                $filter = ' WHERE orgs.id IN (' . $org_list . ') AND ' . $filter;
            } else {
                $filter = ' WHERE orgs.id IN (' . $org_list . ')';
            }
        }

        if ($collection === 'configuration' OR $collection === 'logs' ) {
            if ($filter !== '') {
                $filter = ' WHERE ' . substr($filter, 4);
            } else {
                $filter = '';
            }
        }
        return $filter;
    }
}
// End of file input_helper.php
// Location: ./system/application/helpers/input_helper.php
