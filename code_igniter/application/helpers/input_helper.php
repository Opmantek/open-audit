<?php  if (!defined('BASEPATH')) {
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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.12.4
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (! function_exists('inputRead')) {
    /**
     * The standard log function for Open-AudIT. Writes logs to a text file in the desired format (json or syslog).
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @param     Object    log_details     An object containing details you wish to log
     *
     * @return NULL [logs the provided string to the log file]
     */
    function inputRead()
    {
        // Our default values are below
        // resource is the controller name (devices, groups, et al)
        // id is the integer value (if any) following the controller name in the URL
        // subresource = blank
        // subresource_id = blank
        // action = read if id is set or list if id is not set (create, read, update, delete, list, execute)
        // sort = blank
        // current = y
        // limit = 10000
        // offset = 0
        // format = json
        // properties = *
        // filter = blank
        // version = 1 if JSON requested (the original), 0 if not JSON requested (the latest available)

        // Can set individual items using parameters /devices/1 == /devices?system_id=1 ???



        error_reporting(E_ALL);
        $CI = & get_instance();

        # enable the $_GET global
        parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);

        # get our resource - usually devices, groups, reports, etc
        $temp = $CI->uri->segment(1);
        $CI->response->resource = '';
        if (isset($temp) and $temp != '') {
            $CI->response->resource = (string)$temp;
        }
        unset($temp);

        # get the id of the resource in question
        $temp = $CI->uri->segment(2);
        $CI->response->id = '';
        if (isset($temp) and is_numeric($temp) and $temp != '') {
            $CI->response->id = intval($temp);
        } else {
            $reserved_words = ' create edit update delete list execute ';
            if ($temp != '' and stripos($reserved_words, ' '.$temp.' ') === false) {
                // TODO - SEPARATE THIS OUT
                switch ($CI->response->resource) {
                case 'devices':
                    $sql = "SELECT system_id AS id FROM system WHERE hostname LIKE ? ORDER BY system_id DESC LIMIT 1";
                    break;
                case'groups':
                    $sql = "SELECT group_id AS id FROM oa_group WHERE group_name LIKE ? LIMIT 1";
                    break;
                case'orgs':
                    $sql = "SELECT id FROM oa_org WHERE name LIKE ? LIMIT 1";
                    break;
                case'users':
                    $sql = "SELECT user_id AS id FROM oa_user WHERE user_name LIKE ? LIMIT 1";
                    break;
                case'reports':
                    $sql = "SELECT report_id AS id FROM oa_report WHERE report_name LIKE ? LIMIT 1";
                    break;
                }
                $data = array("$temp");
                $query = $CI->db->query($sql, $data);
                $result = $query->result();
                if (count($result) > 0) {
                    $CI->response->id = intval($result[0]->id);
                } else {
                    // should thro an error as we were given a name, but nothing matched
                    $CI->response->id = '';
                }
            }
        }
        unset($temp);
        unset($reserved_words);

        # get the subresource
        $CI->response->subresource = '';
        $temp = @$CI->uri->segment(3);
        if (!empty($temp)) {
            $CI->response->subresource = (string)$CI->uri->segment(3);
        }
        if (!empty($_GET['subresource'])) {
            $CI->response->subresource = $_GET['subresource'];
        }
        if (!empty($_POST['subresource'])) {
            $CI->response->subresource = $_POST['subresource'];
        }


        # get the subresource id
        $CI->response->subresource_id = '';
        $temp = @$CI->uri->segment(4);
        if (!empty($temp)) {
            $CI->response->subresource_id = (int)$CI->uri->segment(4);
        }
        if (!empty($_GET['subresource_id'])) {
            $CI->response->subresource_id = $_GET['subresource_id'];
        }
        if (!empty($_POST['subresource_id'])) {
            $CI->response->subresource_id = $_POST['subresource_id'];
        }


        # get the action
        # valid values are typically - create, read, update, delete, list, execute
        # TODO - request_method == post and body contains system_id, then update, not create
        $CI->response->action = '';
        $temp = '';
        if (isset($_GET['action'])) {
            $temp = $_GET['action'];
        }
        if (isset($_POST['action'])) {
            $temp = $_POST['action'];
        }
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'get' and $CI->response->id == '') {
            // return a list of items
            $CI->response->action = 'collection';
            $CI->response->header = 'HTTP/1.1 200 OK';
        }
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'get' and $CI->response->id != '') {
            // return a single item
            $CI->response->action = 'read';
            $CI->response->header = 'HTTP/1.1 200 OK';
        }
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'get' and $CI->response->id == '' and $temp == 'create') {
            // show a HTML form for entering a new item
            $CI->response->action = 'new';
            $CI->response->header = 'HTTP/1.1 200 OK';
        }
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'get' and $CI->response->id != '' and $temp == 'edit') {
            // show a HTML form for editing an existing item
            $CI->response->action = 'edit';
            $CI->response->header = 'HTTP/1.1 200 OK';
        }
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'get' and $CI->response->id != '' and $temp == 'execute') {
            // mainly used for running a report and displaying the output
            $CI->response->action = 'execute';
            $CI->response->header = 'HTTP/1.1 200 OK';
        }
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post' and $CI->response->id == '') {
            // insert an item
            $CI->response->action = 'create';
            $CI->response->header = 'HTTP/1.1 201 Created';
        }
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post' and $CI->response->id != '') {
            // update an item
            $CI->response->action = 'update';
            $CI->response->header = 'HTTP/1.1 200 OK';
        }
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'delete') {
            // delete an item
            $CI->response->action = 'delete';
            $CI->response->header = 'HTTP/1.1 200 OK';
        }
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'put' or strtolower($_SERVER['REQUEST_METHOD']) == 'patch') {
            // update an item
            $CI->response->action = 'update';
            $CI->response->header = 'HTTP/1.1 200 OK';
        }
        // if ($CI->response->action == '') {
        //     if (isset($_GET['action'])) {
        //         $CI->response->action = $_GET['action'];
        //     }
        //     if (isset($_POST['action'])) {
        //         $CI->response->action = $_POST['action'];
        //     }
        // }
        if ($CI->response->action == '' or $CI->response->action == 'list') {
            $CI->response->action = 'collection';
            $CI->response->header = 'HTTP/1.1 200 OK';
        }
        $reserved_words = ' collection read new edit execute create update delete ';
        if (stripos($reserved_words, ' '.$CI->response->action.' ') === false) {
            $CI->response->action = 'collection';
            $CI->response->header = 'HTTP/1.1 200 OK';
        }


        # get the sort
        $CI->response->sort = '';
        if (isset($_GET['sort'])) {
            $CI->response->sort = $_GET['sort'];
        }
        if (isset($_POST['sort'])) {
            $CI->response->sort = $_POST['sort'];
        }

        # get current
        $CI->response->current = 'y';
        if (isset($_GET['current'])) {
            $CI->response->current = $_GET['current'];
        }
        if (isset($_POST['current'])) {
            $CI->response->current = $_POST['current'];
        }

        # get the limit
        $CI->response->limit = 10000;
        if (isset($_GET['limit'])) {
            $CI->response->limit = intval($_GET['limit']);
        }
        if (isset($_POST['limit'])) {
            $CI->response->limit = intval($_POST['limit']);
        }

        # get the offset
        $CI->response->offset = 0;
        if (isset($_GET['offset'])) {
            $CI->response->offset = intval($_GET['offset']);
        }
        if (isset($_POST['offset'])) {
            $CI->response->offset = intval($_POST['offset']);
        }

        # get the output format
        $CI->response->format = '';
        if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
            $CI->response->format = 'json';
        }
        if (strpos($_SERVER['HTTP_ACCEPT'], 'html') !== false) {
            $CI->response->format = 'screen';
        }
        if (isset($_GET['format'])) {
            $CI->response->format = $_GET['format'];
        }
        if (isset($_POST['format'])) {
            $CI->response->format = $_POST['format'];
        }
        if ($CI->response->format == '') {
            $CI->response->format = 'json';
        }

        # get the list of requested properties
        $CI->response->properties = '';
        if (isset($_GET['properties'])) {
            $CI->response->properties = $_GET['properties'];
        }
        if (isset($_POST['properties'])) {
            $CI->response->properties = $_POST['properties'];
        }
        if ($CI->response->properties == '') {
            $CI->response->properties = '*';
        }

        # get the filter
        $CI->response->filter = '';
        if (isset($_GET['filter'])) {
            $CI->response->filter = $_GET['filter'];
        }
        if (isset($_POST['filter'])) {
            $CI->response->filter = $_POST['filter'];
        }
        $reserved_words = '=><!()';
        echo strpbrk($CI->response->filter, $reserved_words) . "\n";
        if ($CI->response->filter != '' and strpbrk($CI->response->filter, $reserved_words) !== false) {
            // TODO - throw an error - not using correct syntax
            $CI->response->filter = '';
        }
        if ($CI->response->filter != '') {
            $CI->response->filter = str_ireplace(' gt ', ' > ', $CI->response->filter);
            $CI->response->filter = str_ireplace(' ge ', ' >= ', $CI->response->filter);
            $CI->response->filter = str_ireplace(' lt ', ' < ', $CI->response->filter);
            $CI->response->filter = str_ireplace(' le ', ' <= ', $CI->response->filter);
            $CI->response->filter = str_ireplace(' eq ', ' = ', $CI->response->filter);
            $CI->response->filter = str_ireplace(' ne ', ' != ', $CI->response->filter);
        }

        # get the version
        if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json;version=') !== false) {
            $CI->response->version = intval(str_replace('application/json;version=', '', $_SERVER['HTTP_ACCEPT']));
        }
        if (empty($CI->response->version)) {
            if ($CI->response->format == 'json') {
                $CI->response->version = 1;
            } else {
                $CI->response->version = 0;
            }
        }

        return;
    }
}
/* End of file input_helper.php */
/* Location: ./system/application/helpers/input_helper.php */
