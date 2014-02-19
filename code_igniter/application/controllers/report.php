<?php
#
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class report extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect('/');
    }

    public function _remap($method)
    {
        $this->data['report_name'] = str_replace('_', ' ', $this->uri->segment(2, 0));
        $this->data['group_id'] = $this->uri->segment(3, 0);
        $this->data['first_attribute'] = $this->uri->segment(4, 0);
        $this->data['second_attribute'] = $this->uri->segment(5, 0);
        $this->data['third_attribute'] = $this->uri->segment(6, 0);
        $this->load->model("m_oa_report");
        $this->data['report_id'] = $this->m_oa_report->get_report_id($this->data['report_name']);
        if (!is_null($this->data['report_id'])) {
            redirect(
                'report/show_report/' .
                $this->data['report_id'] . '/' .
                $this->data['group_id'] . '/' .
                $this->data['first_attribute'] . '/' .
                $this->data['second_attribute'] . '/' .
                $this->data['third_attribute']
            );
        } else {
            $classMethods = get_class_methods($this);
            if (!$classMethods) {
                $classMethods = array();
            }
            if (in_array($method, $classMethods)) {
                $this->$method();
            } else {
                $this->data['error'] = 'This Report does not exist.<br />You may need to activate the ' . ucwords(str_replace("_", " ", $method)) . ' Report. <br />As an Admin level user go to Admin -> Reports -> Activate Report, find the correct Report and click the Activate Icon.<br />If you are an Admin level user, you can try to activate the report by clicking <a style="color: blue;" href="../../../admin_report/action_activate_report/' . str_replace(" ", "", ucwords(str_replace("_", " ", $method))) . '.xml">here</a> (assuming it exists).';
                $this->data['query'] = '';
                $this->data['heading'] = 'Error';
                $this->data['include'] = 'v_error';
                $this->data['export_report'] = 'y';
                $this->data['group_id'] = '0';
                $this->load->view('v_template', $this->data);
            }
        }

    }

    public function show_report()
    {
        $this->data['report_id'] = $this->uri->segment(3, 0);
        $this->data['group_id'] = $this->uri->segment(4, 0);
        $this->data['first_attribute'] = urldecode($this->uri->segment(5, 0));
        if ($this->data['first_attribute'] == '-') {
            $this->data['first_attribute'] = '';
        }
        $segs = $this->uri->segment_array();
        $this->load->model("m_oa_report_column");
        $this->load->model("m_oa_report");

        $i = 0;
        $filter = array();
        foreach ($segs as $segment) {
            if (((strpos($segment, 'out') === 0) or (strpos($segment, 'only') === 0) ) and (strpos($segment, '___'))) {
                $filter_array = explode("___", $segment);
                $filter[$i]['variable'] = $filter_array[1];
                $filter[$i]['value'] = str_replace("%20", " ", html_entity_decode($filter_array[2]));
                if ($filter_array[0] == 'only') {
                    $filter[$i]['condition'] = '=';
                } else {
                    $filter[$i]['condition'] = '<>';
                }
                $i++;
            }
        }

        # make sure we specify a report
        if ($this->data['report_id'] == "0") {
            # no report specified - show error page
            $this->data['error'] = "You attempted to run a Report that does not exist or has not been activated. <br />As an Admin Level user you can activate reports at Admin -> Reports -> Activate Report.";
            $this->data['query'] = '';
            $this->data['heading'] = 'Error';
            $this->data['include'] = 'v_error';
            $this->data['export_report'] = 'y';
            $this->data['group_id'] = '0';
            $this->load->view('v_template', $this->data);

            return;
        }

        # check if the report_id actually exists
        $report_test = $this->m_oa_report->get_report_details($this->data['report_id']);

        if (count($report_test) == 0) {
            # no details returned - show error page
            $this->data['error'] = "You attempted to run a Report that does not exist or has not been activated. <br />As an Admin Level user you can activate reports at Admin -> Reports -> Activate Report.";
            $this->data['query'] = '';
            $this->data['heading'] = 'Error';
            $this->data['include'] = 'v_error';
            $this->data['export_report'] = 'y';
            $this->data['group_id'] = '0';
            $this->load->view('v_template', $this->data);

            return;
        }

        # make sure we specify a group
        $this->load->model("m_oa_group");
        if ($this->data['group_id'] == "0") {
            # no group specified - show error page
            $this->data['error'] = "You attempted to run a Report without providing a Group.";
            $this->data['query'] = '';
            $this->data['heading'] = 'Error';
            $this->data['include'] = 'v_error';
            $this->data['export_report'] = 'y';
            $this->data['group_id'] = '0';
            $this->load->view('v_template', $this->data);

            return;
        } else {
            // we must check to see if the user has at least VIEW permission on the group
            $this->data['user_access_level'] = $this->m_oa_group->get_group_access($this->data['group_id'], $this->data['user_id']);
            if ($this->data['user_access_level'] < '3') {
                # insufficient permissions - show error page
                $this->data['error'] = "You attempted to run a Report on a Group you don't have permission to view.";
                $this->data['query'] = '';
                $this->data['heading'] = 'Error';
                $this->data['include'] = 'v_error';
                $this->data['export_report'] = 'y';
                $this->data['group_id'] = '0';
                $this->load->view('v_template', $this->data);

                return;
            } else {
                // we can view the group
                // get report name
                $group_name = $this->m_oa_group->get_group_name($this->data['group_id']);
                $report_name = $this->m_oa_report->get_report_name($this->data['report_id']);
                $this->data['heading'] = $report_name . " (" . $group_name . ")";
            }
        }

        $this->data['query'] = $this->m_oa_report->get_report($this->data['report_id'], $this->data['group_id'], $this->data['first_attribute']);

        $this->data['column'] = $this->m_oa_report_column->get_report_column($this->data['report_id']);

        $remove = false;
        $new_query = array();
        if (count($filter) > 0) {
            foreach ($this->data['query'] as $key) {
                foreach ($filter as $enum_filter) {
                    if (property_exists($key, $enum_filter['variable'])) {
                        if (($key->$enum_filter['variable'] == $enum_filter['value']) and ($enum_filter['condition'] == '<>')) {
                            $remove = true;
                        }
                        if (($key->$enum_filter['variable'] != $enum_filter['value']) and ($enum_filter['condition'] == '=')) {
                            $remove = true;
                        }
                    }
                }
                if ($remove == true) {
                    # do not push this object to the new array
                } else {
                    # we want to keep this element - no matches above.
                    # push this onto the new query array
                    $new_query[] = $key;
                }
                $remove = false;
            }
            $this->data['query'] = $new_query;
        }

        $this->data['count'] = count($this->data['query']);
        $this->data['include'] = $this->m_oa_report->get_report_view($this->data['report_id']);
        $this->data['sortcolumn'] = $this->m_oa_report->get_report_sort_column($this->data['report_id']);
        $this->data['export_report'] = 'y';
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
    }

    public function partition_alerts()
    {
        if ($this->data['id'] == '') {
            redirect('main/list_devices');
        }
        $this->load->model("m_oa_group");
        if ($this->data['id'] > '0') {
            // we must check to see if the user has at least VIEW permission on the group
            if ($this->m_oa_group->get_group_access($this->data['id'], $this->data['user_id']) < '3') {
                // not even VIEW permission - redirect
                redirect('main/list_devices/0');
            }
        }
        if ($this->uri->segment(4) == '') {
            redirect('report/partition_alerts/' . $this->data['id'] . '/20');
        } else {
            $days = $this->uri->segment(4);
        }
        $this->load->model("m_systems");
        if ($this->data['id'] != '0') {
            $this->data['heading'] = 'Partition ' . number_format($days) . ' Days Alert for - ' . $this->m_oa_group->get_group_name($this->data['id']);
        } else {
            $this->data['heading'] = 'Partition ' . number_format($days) . ' Days Alert for All Devices';
        }
        $this->load->model("m_partition");
        $this->data['query'] = $this->m_partition->partition_alert($this->data['id'], $this->data['user_id'], $days);
        $this->data['count'] = count($this->data['query']);
        $this->data['include'] = 'v_report_partition_alert';
        $this->data['sortcolumn'] = '0';
        $this->data['alert'] = 'y';
        $this->data['days'] = $days;
        $this->data['export_report'] = 'y';
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
    }

    public function software_licensing()
    {
        $this->load->model("m_oa_group");
        $this->load->model("m_oa_licensing");
        $this->data['heading'] = "Software Licensing for " . $this->m_oa_group->get_group_name($this->data['id']);
        $this->data['query'] = $this->m_oa_licensing->software_licensing_report($this->data['id']);
        $this->data['group'] = count($this->data['id']);
        $this->data['count'] = count($this->data['query']);
        $this->data['include'] = 'v_report_software_licensing';
        $this->data['sortcolumn'] = '0';
        $this->data['export_report'] = 'y';
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
    }

    public function generate_report()
    {
        # make sure we specify a group
        if (isset($_POST['group_id'])) {
            $this->data['group_id'] = $_POST['group_id'];
        } else {
            $this->data['group_id'] = "";
        }

        if (isset($_POST['report_id'])) {
            $this->data['report_id'] = $_POST['report_id'];
        } else {
            $this->data['report_id'] = "";
        }

        if (isset($_POST['report_name'])) {
            $this->data['report_name'] = $_POST['report_name'];
            $this->data['heading'] = $_POST['report_name'];
        } else {
            $this->data['report_name'] = "";
            $this->data['heading'] = "";
        }

        if (isset($_POST['first_attribute'])) {
            $this->data['first_attribute'] = $_POST['first_attribute'];
        } else {
            $this->data['first_attribute'] = '';
        }

        if (isset($_POST['second_attribute'])) {
            $this->data['second_attribute'] = $_POST['second_attribute'];
        } else {
            $this->data['second_attribute'] = '';
        }

        if (isset($_POST['third_attribute'])) {
            $this->data['third_attribute'] = $_POST['third_attribute'];
        } else {
            $this->data['third_attribute'] = '';
        }

        if (isset($_POST['format'])) {
            $this->data['format'] = $_POST['format'];
        }

        if (!isset($this->data['format']) or $this->data['format'] == '') {
            $this->load->helper('url');
            $this->data['format'] = $this->uri->segment($this->uri->total_rsegments());
            if ($this->data['format'] != 'xml' and
                $this->data['format'] != 'excel' and
                $this->data['format'] != 'csv' and
                $this->data['format'] != 'json' and
                $this->data['format'] != 'html'	and
                $this->data['format'] != 'html_formatted' and
                $this->data['format'] != 'table' and
                $this->data['format'] != 'table_formatted' and
                $this->data['format'] != 'pdf' and
                $this->data['format'] != 'rss') {
                    $this->data['format'] = 'json';
            }
        }

        if ($this->data['report_id'] != '' or $this->data['report_name'] != '') {
            $this->load->model("m_oa_report");
            $this->load->model("m_oa_report_column");
            if ($this->data['report_id'] == '') {
                $this->data['report_id'] = $this->m_oa_report->get_report_id($this->data['report_name']);
            }
            if ($this->data['report_id'] != '') {
                $this->data['query'] = $this->m_oa_report->get_report($this->data['report_id'], $this->data['group_id'], $this->data['first_attribute']);
                $this->data['column'] = $this->m_oa_report_column->get_report_column($this->data['report_id']);
            } else {
                exit();
            }
        } else {
            if (isset($_POST['report_xml'])) {
                $this->data['report_xml'] = $_POST['report_xml'];
            } else {
                $this->data['report_xml'] = '';
            }
            if ($this->data['report_xml'] == '' or $this->data['group_id'] == "") {
                exit();
            }
            $this->data['report_xml'] = urldecode($this->data['report_xml']);
            $this->data['report_xml'] = str_replace("<\![CDATA[", "<![CDATA[", $this->data['report_xml']);
            $this->data['column'] = array();
            libxml_use_internal_errors(true);
            $xml = simplexml_load_string($this->data['report_xml']);
            if ($xml === false) {
                echo "Failed loading XML\n";
                foreach (libxml_get_errors() as $error) {
                    echo "\n", $error->message;
                }
                exit();
            }

            foreach ($xml->children() as $child) {
                if ($child->getName() == 'details') {
                    $sql = $child->report_sql;
                    $this->data['heading'] = $child->report_name;
                }
                if ($child->getName() == 'columns') {
                    foreach ($child->children() as $column) {
                        $i = new stdclass();
                        if (isset($column->column_order)) {
                            $i->column_order = "$column->column_order";
                        } else {
                               $i->column_order = '';
                        }

                        if (isset($column->column_name)) {
                            $i->column_name = "$column->column_name";
                        } else {
                            $i->column_name = '';
                        }

                        if (isset($column->column_variable)) {
                            $i->column_variable = "$column->column_variable";
                        } else {
                            $i->column_variable = '';
                        }

                        if (isset($column->column_type)) {
                            $i->column_type = "$column->column_type";
                        } else {
                            $i->column_type = '';
                        }

                        if (isset($column->column_link)) {
                            $i->column_link = "$column->column_link";
                        } else {
                            $i->column_link = '';
                        }

                        if (isset($column->column_secondary)) {
                            $i->column_secondary = "$column->column_secondary";
                        } else {
                            $i->column_secondary = '';
                        }

                        if (isset($column->column_ternary)) {
                            $i->column_ternary = "$column->column_ternary";
                        } else {
                            $i->column_ternary = '';
                        }

                        if (isset($column->column_quaternary)) {
                            $i->column_quaternary = "$column->column_quaternary";
                        } else {
                            $i->column_quaternary = '';
                        }

                        if (isset($column->column_align)) {
                            $i->column_align = "$column->column_align";
                        } else {
                            $i->column_align = '';
                        }

                        array_push($this->data['column'], $i);
                        unset ($i);
                    }
                }
            }
            $data = array($this->data['group_id']);
            $query = $this->db->query('SET @group = ?', $data);
            $data = array($this->data['first_attribute'], $this->data['second_attribute'], $this->data['third_attribute']);
            $query = $this->db->query($sql, $data);
            $this->data['query'] = $query->result();
        }

        $this->data['count'] = count($this->data['query']);
        $this->data['export_report'] = 'y';
        $this->determine_output($this->data['format']);
    }

    public function locations()
    {
        $this->load->model("m_oa_location");
        $this->data['heading'] = "Locations";
        $this->data['query'] = $this->m_oa_location->location_report();
        $this->data['column'] = $this->m_oa_location->location_report_columns();
        $this->data['count'] = count($this->data['query']);
        $this->data['include'] = 'v_report';
        $this->data['sortcolumn'] = '0';
        $this->data['export_report'] = 'y';
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
    }
}
