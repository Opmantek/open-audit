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
* @version   2.2.6
* @link      http://www.open-audit.org
 */
class M_applications extends MY_Model
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
        $id = intval($id);
        if ($id === 0) {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        }
        $sql = "SELECT * FROM `applications` WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'applications');
        return ($result);
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        $id = intval($id);
        if ($id === 0) {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        }
        if ($id != 0) {
            $CI = & get_instance();
            $sql = "DELETE FROM `applications` WHERE id = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        }
        return false;
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $sql = $this->collection_sql('applications', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'applications');
        return ($result);
    }

    public function read_sub_resource_old($id)
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        $org_ids = implode(',', $CI->user->orgs);
        $sql = "SELECT system.id AS `system.id`, system.name AS `system.name`, system.ip AS `system.ip`, `system`.`description` AS `system.description` FROM `application` LEFT JOIN `system` ON `application`.`system_id` = `system`.`id` WHERE `system`.`org_id` IN  (" . $org_ids . ")";
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'devices');
        return ($result);
    }

    public function application_components($id)
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $id = intval($id);
        $sql = "SELECT * FROM `application_components` WHERE `application_components`.`application_id` = ?";
        $result = $this->run_sql($sql, array($id));
        foreach ($result as $row) {
            $table = '';
            switch ($row->type) {
                case 'database':
                    $table = 'server_item';
                    break;

                case 'device':
                    $table = 'system';
                    break;

                case 'external service':
                    $table = '';
                    break;

                case 'file':
                    $table = 'file';
                    break;

                case 'other':
                    $table = '';
                    break;

                case 'service':
                    $table = 'service';
                    break;

                case 'share':
                    $table = 'share';
                    break;

                case 'client software':
                    $table = 'software';
                    break;

                case 'server software':
                    $table = 'software';
                    break;

                case 'task':
                    $table = 'task';
                    break;

                case 'website':
                    $table = 'server_item';
                    break;
            }
            $row->foreign_name = '';
            if (!empty($table)) {
                $sql = "SELECT name FROM " . $table . " WHERE id = ?";
                $result_2 = $this->run_sql($sql, array($row->foreign_id));
                if (!empty($result_2[0]->name)) {
                    $row->foreign_name = $result_2[0]->name;
                    $row->{$table.'.id'} = intval($row->foreign_id);
                }
            }
        }
        $result = $this->format_data($result, 'application_components');
        return ($result);
    }

    public function application_fields($id)
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $id = intval($id);
        $sql = "SELECT `application_fields`.*, `attributes`.`name` FROM `application_fields` LEFT JOIN `attributes` ON `application_fields`.`attribute_id` = `attributes`.`id` WHERE `application_fields`.`application_id` = ?";
        $result = $this->run_sql($sql, array($id));
        $result = $this->format_data($result, 'application_fields');
        return ($result);
    }
}
