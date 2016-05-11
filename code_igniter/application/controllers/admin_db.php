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
class Admin_db extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        set_time_limit(240);
        $log_details = new stdClass();
        stdlog($log_details);
        unset($log_details);
    }

    public function index()
    {
        redirect('/');
    }

    /**
     * [export_table description].
     *
     * @return [type]
     */
    public function export_table()
    {
        # load the export form
        $this->load->model("m_oa_admin_database");
        $this->data['query'] = $this->m_oa_admin_database->get_tables_and_row_count();
        $this->data['heading'] = 'Export a Database Table';
        $this->data['include'] = 'v_list_tables';
        $this->load->view('v_template', $this->data);
    }

    /**
     * [backup description].
     *
     * @return [type]
     */
    public function backup()
    {
        # load the backup table page
        $this->load->model("m_oa_admin_database");
        $this->data['query'] = $this->m_oa_admin_database->backup_database();
    }

    public function export_table_to_excel()
    {
        $this->load->model("m_oa_admin_database");
        $this->data['query'] = $this->m_oa_admin_database->export_table($this->data['id']);
        $this->data['heading'] = $this->data['id']." table rows";
        $this->excel_report($this->data['query']);
    }

    public function export_table_to_html()
    {
        $this->load->model("m_oa_admin_database");
        $this->data['query'] = $this->m_oa_admin_database->export_table($this->data['id']);
        $this->data['heading'] = $this->data['id']." table rows";
        $this->data['include'] = 'v_export_table';
        $this->load->view('v_template', $this->data);
    }

    public function export_table_to_csv()
    {
        $this->load->model("m_oa_admin_database");
        $this->data['query'] = $this->m_oa_admin_database->export_table($this->data['id']);
        $this->data['heading'] = $this->data['id']." table rows";
        $this->csv_report($this->data['query']);
    }

    public function get_non_production_systems()
    {
        $this->load->model("m_system");
        $this->data['query'] = $this->m_system->get_non_production_systems();
        $this->data['count'] = count($this->data['query']);
        $this->data['heading'] = "Get Non Production Systems";
        $this->data['include'] = 'v_export_table';
        $this->load->view('v_template', $this->data);
    }

    public function maintenance()
    {
        $this->data['days'] = $this->uri->segment(3, '30');
        $this->data['flashdata'] = $this->session->flashdata('message');

        $this->load->model("m_system");
        $this->load->model("m_change_log");
        $this->load->model("m_oa_general");
        $this->load->model("m_oa_group");
        $this->load->model("m_oa_admin_database");
        $this->data['query'] = '';

        # non production systems
        $this->data['count_status_deleted'] = $this->m_system->count_non_production_systems('deleted');
        $this->data['count_status_retired'] = $this->m_system->count_non_production_systems('retired');
        $this->data['count_status_maintenance'] = $this->m_system->count_non_production_systems('maintenance');

        # systems not seen
        $this->data['count_not_seen_days'] = $this->m_system->count_not_seen_days($this->data['days']);

        # alerts
        $this->data['count_alerts'] = $this->m_change_log->count();
        $this->data['count_alerts_days'] = $this->m_change_log->countDays($this->data['days']);

        # network groups with $subnet higher than $config
        $this->data['network_group_subnet'] = $this->m_oa_group->get_network_group_subnet($this->config->config['network_group_subnet']);
        $this->data['network_group_count_zero'] = $this->m_oa_group->get_network_group_count_zero();

        # old attributes
        $this->data['non_current_attributes'] = $this->m_oa_general->count_old_attributes($this->data['days']);
        $count = 0;
        foreach ($this->data['non_current_attributes'] as $attribute) {
            $count = $count + $attribute->count;
        }
        $this->data['count_non_current_attributes'] = $count;

        # all attributes hw
        $this->data['all_hw_attributes'] = $this->m_oa_general->count_all_hw_attributes();
        $count = 0;
        foreach ($this->data['all_hw_attributes'] as $attribute) {
            $count = $count + $attribute->count;
        }
        $this->data['count_all_hw_attributes'] = $count;

        # all attributes sw
        $this->data['all_sw_attributes'] = $this->m_oa_general->count_all_sw_attributes();
        $count = 0;
        foreach ($this->data['all_sw_attributes'] as $attribute) {
            $count = $count + $attribute->count;
        }
        $this->data['count_all_sw_attributes'] = $count;

        $this->data['count_temp'] = $this->m_oa_admin_database->count_all_rows('oa_temp');

        $this->data['heading'] = "Database Maintenance";
        $this->data['include'] = 'v_db_maintenance';
        $this->load->view('v_template', $this->data);
    }

    public function delete_network_group_subnet()
    {
        $days = $this->uri->segment(3, 365);
        $this->load->model("m_oa_group");
        $this->data['count'] = $this->m_oa_group->delete_network_group_subnet($this->config->config['network_group_subnet']);
        $this->data['query'] = $this->data['count']." groups removed from the database";
        $this->session->set_flashdata('message', $this->data['count']." groups removed from the database");
        redirect("admin_db/maintenance/".$days);
    }

    public function delete_network_group_count_zero()
    {
        $days = $this->uri->segment(3, 365);
        $this->load->model("m_oa_group");
        $this->data['count'] = $this->m_oa_group->delete_network_group_count_zero();
        $this->data['query'] = $this->data['count']." groups removed from the database";
        $this->session->set_flashdata('message', $this->data['count']." groups removed from the database");
        redirect("admin_db/maintenance/".$days);
    }

    public function delete_status_deleted()
    {
        $days = $this->uri->segment(3, 365);
        $this->load->model("m_system");
        $this->data['count'] = $this->m_system->delete_non_production_systems('deleted');
        $this->session->set_flashdata('message', $this->data['count']." devices removed from the database");
        redirect("admin_db/maintenance/".$days);
    }
    public function delete_status_retired()
    {
        $days = $this->uri->segment(3, 365);
        $this->load->model("m_system");
        $this->data['count'] = $this->m_system->delete_non_production_systems('retired');
        $this->session->set_flashdata('message', $this->data['count']." devices removed from the database");
        redirect("admin_db/maintenance/".$days);
    }
    public function delete_status_maintenance()
    {
        $days = $this->uri->segment(3, 365);
        $this->load->model("m_system");
        $this->data['count'] = $this->m_system->delete_non_production_systems('maintenance');
        $this->session->set_flashdata('message', $this->data['count']." devices removed from the database");
        redirect("admin_db/maintenance/".$days);
    }

    public function delete_non_production_systems()
    {
        $days = $this->uri->segment(3, 365);
        $this->load->model("m_system");
        $this->data['count'] = $this->m_system->delete_non_production_systems();
        $this->session->set_flashdata('message', $this->data['count']." devices removed from the database");
        redirect("admin_db/maintenance/".$days);
    }

    public function delete_all_temp()
    {
        $days = $this->uri->segment(3, 365);
        $this->load->model("m_oa_admin_database");
        $this->data['count'] = $this->m_oa_admin_database->delete_all_rows('oa_temp');
        $this->session->set_flashdata('message', $this->data['count']." temp rows removed from the database");
        redirect("admin_db/maintenance/".$days);
    }

    public function delete_alerts_days()
    {
        $days = $this->uri->segment(3, 365);
        $this->load->model("m_change_log");
        $this->data['count'] = $this->m_change_log->deleteDays($days);
        $this->session->set_flashdata('message', $this->data['count']." alerts removed from the database");
        redirect("admin_db/maintenance/".$days);
    }

    public function delete_all_alerts()
    {
        $days = $this->uri->segment(3, 365);
        $this->load->model("m_change_log");
        $this->data['count'] = $this->m_change_log->deleteAll();
        $this->data['query'] = $this->data['count']." alerts removed from the database";
        $this->session->set_flashdata('message', $this->data['count']." alerts removed from the database");
        redirect("admin_db/maintenance/".$days);
    }

    public function delete_systems_not_seen_days()
    {
        $days = $this->uri->segment(3, 365);
        $this->load->model("m_system");
        $this->data['count'] = $this->m_system->delete_systems_not_seen_days($days);
        $this->session->set_flashdata('message', $this->data['count']." devices removed from the database");
        redirect("admin_db/maintenance/".$days);
    }

    public function delete_all_non_current_attributes()
    {
        $days = $this->uri->segment(3, 365);
        $this->load->model("m_oa_general");
        $this->data['count'] = $this->m_oa_general->delete_all_non_current_attributes($days);
        $this->session->set_flashdata('message', $this->data['count']." attributes removed from the database");
        redirect("admin_db/maintenance/".$days);
    }

    public function delete_table_non_current_attributes()
    {
        $table = $this->uri->segment(3, "");
        $days = $this->uri->segment(4, 365);
        $this->load->model("m_oa_general");
        $this->data['count'] = $this->m_oa_general->delete_table_non_current_attributes($table, $days);
        $this->session->set_flashdata('message', $this->data['count']." attributes removed from the database");
        redirect("admin_db/maintenance/".$days);
    }
}
