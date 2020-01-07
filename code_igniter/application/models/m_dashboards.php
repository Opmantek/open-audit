<?php
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
* @category  Model
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.3.0
* @link      http://www.open-audit.org
 */
class M_dashboards extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM dashboards WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (!empty($result[0]->options)) {
            $result[0]->options = json_decode($result[0]->options);
        }
        $result = $this->format_data($result, 'dashboards');
        return ($result);
    }

    public function read_sub_resource($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $return = array();
        $sql = "SELECT options FROM dashboards WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $options = json_decode($result[0]->options);
        foreach ($options->widgets as $widget) {
            $sql = "SELECT * FROM widgets WHERE id = ?";
            $data = array(intval($widget->widget_id));
            $result = $this->run_sql($sql, $data);
            if (!empty($result[0])) {
                $return[] = $result[0];
            } else {
                return array();
            }
        }
        $return = $this->format_data($return, 'widgets');
        return $return;
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if ($id != 0) {
            // do NOT allow deleting the default roles
            $sql = "SELECT type FROM dashboards WHERE id = ?";
            $data = array($id);
            $result = $this->run_sql($sql, $data);
            if ($result[0]->type == 'default') {
                log_error('ERR-0013', 'm_dashboards::delete');
                return false;
            }
            // attempt to delete the item
            $sql = "DELETE FROM `dashboards` WHERE id = ?";
            $data = array($id);
            $this->run_sql($sql, $data);
            return true;
        } else {
            log_error('ERR-0013', 'm_dashboards::delete');
            return false;
        }
    }

    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if (!empty($user_id)) {
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = "SELECT * FROM dashboards WHERE org_id IN (" . implode(',', $org_list) . ")";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'dashboards');
            return $result;
        }
        if (!empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT " . $CI->response->meta->internal->properties . ", orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM dashboards LEFT JOIN orgs ON (dashboards.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . " " . 
                    $CI->response->meta->internal->groupby . " " . 
                    $CI->response->meta->internal->sort . " " . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            for ($i=0; $i < count($result); $i++) {
                $result[$i]->options = json_decode($result[$i]->options);
            }
            $CI->response->data = $this->format_data($result, 'dashboards');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }



}
