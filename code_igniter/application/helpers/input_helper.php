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
 * @version 1.12.2
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (! function_exists('input')) {
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
            if ($temp != '') {
                // TODO - SEPARATE THIS OUT
                IF ($CI->response->resource == 'devices') {
                    $sql = "SELECT system_id AS id FROM system WHERE hostname = ? ORDER BY system_id DESC LIMIT 1";
                }
                if ($CI->response->resource == 'groups') {
                    $sql = "SELECT group_id AS id FROM oa_GROUP WHERE group_name = ? LIMIT 1";
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

        # get the subresource
        $temp = @$CI->uri->segment(3);
        $CI->response->subresource = '';
        if (isset($temp) and $temp != ''){
            $CI->response->subresource = (string)$temp;
        }
        if ($CI->response->subresource == '') {
            if (isset($_GET['subresource'])) {
                $CI->response->subresource = $_GET['subresource'];
            }
            if (isset($_POST['subresource'])) {
                $CI->response->subresource = $_POST['subresource'];
            }
        }
        unset($temp);

        # get the subresource id
        $temp = @$CI->uri->segment(4);
        $CI->response->subresource_id = '';
        if (isset($temp) and $temp != ''){
            $CI->response->subresource = (string)$temp;
        }
        unset($temp);


        # get the action
        # valid values are typically - create, read, update, delete, execute
        $CI->response->action = 'read';
        if (isset($_GET['action'])) {
            $CI->response->action = $_GET['action'];
        }
        if (isset($_POST['action'])) {
            $CI->response->action = $_POST['action'];
        }
        if ($CI->response->action == '') {
            if (strtolower($_SERVER['REQUEST_METHOD']) == 'get') {
                $CI->response->action = 'read';
            }
            if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
                $CI->response->action = 'create';
            }
            if (strtolower($_SERVER['REQUEST_METHOD']) == 'delete') {
                $CI->response->action = 'delete';
            }
            if (strtolower($_SERVER['REQUEST_METHOD']) == 'put') {
                $CI->response->action = 'update';
            }
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
        $CI->response->format = 'json';
        if (isset($_GET['format'])) {
            $CI->response->format = $_GET['format'];
        }
        if (isset($_POST['format'])) {
            $CI->response->format = $_POST['format'];
        }
        if (strpos($_SERVER['HTTP_ACCEPT'], 'json') !== false) {
            $CI->response->format = 'json';
        }

        # get the list of requested properties
        $CI->response->properties = '*';
        if (isset($_GET['properties'])) {
            $CI->response->properties = $_GET['properties'];
        }
        if (isset($_POST['properties'])) {
            $CI->response->properties = $_POST['properties'];
        }

        # get the filter
        $CI->response->filter = '';
        if (isset($_GET['filter'])) {
            $CI->response->filter = $_GET['filter'];
        }
        if (isset($_POST['filter'])) {
            $CI->response->filter = $_POST['filter'];
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
        $CI->response->version = 1;

        return;


    }
}
/* End of file input_helper.php */
/* Location: ./system/application/helpers/input_helper.php */
