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
class Admin_report extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $log_details = new stdClass();
        stdlog($log_details);
        unset($log_details);
    }

    public function index()
    {
        redirect('/');
    }

    public function activate_report()
    {
        $log_details = new stdClass();
        if ($handle = opendir(BASEPATH.'../application/controllers/reports')) {
            $i = 0;
            $this->load->model("m_oa_report");
            while (false !== ($file = readdir($handle))) {
                if (mb_strpos($file, ".xml") !== false) {
                    $report_name = '';
                    $report_description = '';
                    $file_handle = fopen(BASEPATH.'../application/controllers/reports/'.$file, "rb");
                    $contents = fread($file_handle, filesize(BASEPATH.'../application/controllers/reports/'.$file));
                    try {
                        $xml = @new SimpleXMLElement($contents);
                    } catch (Exception $error) {
                        // $errors = libxml_get_errors();
                        // print_r($errors);
                        $log_details->message = "Invalid XML for report in file " . BASEPATH.'../application/controllers/reports/'.$file;
                        $log_details->file = 'system';
                        stdlog($log_details);
                        continue;
                    }
                    $report_name = $xml->details->report_name;
                    $report_description = $xml->details->report_description;
                    unset($xml);
                    fclose($file_handle);
                    $this->data['query'][$i]['file'] = $file;
                    $this->data['query'][$i]['report_name'] = $report_name;
                    $this->data['query'][$i]['report_description'] = $report_description;
                    $this->data['query'][$i]['activated'] = $this->m_oa_report->get_report_id($report_name);
                    $i++;
                    // echo "$file<br />\n";
                }
            }
            closedir($handle);
        }
        $this->data['heading'] = 'Activate Queries';
        $this->data['include'] = 'v_add_reports';
        $this->data['sortcolumn'] = '0';
        $this->load->view('v_template', $this->data);
    }

    public function action_activate_report()
    {
        $this->load->library('user_agent');
        $file = BASEPATH.'../application/controllers/reports/'.$this->data['id'];
        $this->load->model("m_oa_report");
        $this->load->model("m_oa_report_column");
        $file_handle = fopen($file, "rb");
        $contents = fread($file_handle, filesize($file));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $report_id = $this->m_oa_report->import_report($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_report_column->import_report($child, $report_id);
            }
        }
        redirect($this->agent->referrer());
#		redirect('/admin_report/activate_report');
    }

    public function action_deactivate_report()
    {
        $this->load->model("m_oa_report");
        $this->load->model("m_oa_report_column");
        $this->m_oa_report->delete_report($this->data['id']);
        $this->m_oa_report_column->delete_report($this->data['id']);
        redirect('/admin_report/activate_report');
    }

    public function list_reports()
    {
        $this->load->model("m_oa_report");
        $this->data['query'] = $this->m_oa_report->list_reports();
        $this->data['heading'] = 'List Queries';
        $this->data['include'] = 'v_list_reports';
        $this->data['sortcolumn'] = '0';
        $this->load->view('v_template', $this->data);
    }

    public function delete_report()
    {
        $this->load->model("m_oa_report");
        $this->load->model("m_oa_report_column");
        $this->m_oa_report_column->delete_report($this->data['id']);
        $this->m_oa_report->delete_report($this->data['id']);
        redirect('/admin_report/list_reports');
    }

    public function export_report()
    {
        $this->load->model("m_oa_report");
        $this->load->model("m_oa_report_column");
        $report_name = $this->m_oa_report->get_report_name($this->data['id']);
        $this->data['report_detail'] = $this->m_oa_report->get_report_details($this->data['id']);
        $this->data['report_columns'] = $this->m_oa_report_column->get_report_column($this->data['id']);
        #$this->load->helper('xml');
        echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n";
        echo "<report>\n";
        foreach ($this->data['report_detail'] as $details) {
            echo "\t<details>\n";
            foreach ($details as $attribute => $value) {
                if (($attribute != 'report_id') and ($attribute != 'report_sql') and ($attribute != 'report_display_sql')) {
                    echo "\t\t<".$attribute.">".$value."</".$attribute.">\n";
                }
                if ((($attribute == 'report_sql') or ($attribute == 'report_display_sql')) and ($value > '')) {
                    echo "\t\t<".$attribute."><![CDATA[".$value."]]></".$attribute.">\n";
                }
            }
            echo "\t</details>\n";
        }
        echo "\t<columns>\n";
        foreach ($this->data['report_columns'] as $details) {
            echo "\t\t<column>\n";
            foreach ($details as $attribute => $value) {
                if (($attribute != 'column_id') && ($attribute != 'report_id')) {
                    echo "\t\t\t<".$attribute.">".$value."</".$attribute.">\n";
                }
            }
            echo "\t\t</column>\n";
        }
        echo "\t</columns>\n";
        echo "</report>";
        $report_name = str_replace(" ", "", $report_name).".xml";
        header('Content-Type: text/xml');
        header('Content-Disposition: attachment;filename="'.$report_name.'"');
        header('Cache-Control: max-age=0');
    }

    public function import_report()
    {
        if (!isset($_POST['submit'])) {
            # nothing submitted - display the form
            $this->data['heading'] = 'Import Query';
            $this->data['include'] = 'v_import_report';
            $this->load->view('v_template', $this->data);
        }
        if (isset($_POST['submit'])) {
            # form submitted
            $this->load->model("m_oa_report");
            $this->load->model("m_oa_report_column");
            $report = utf8_encode($_POST['form_reportXML']);
            $report = html_entity_decode($report);
            $xml = new SimpleXMLElement($report);
            foreach ($xml->children() as $child) {
                if ($child->getName() == 'details') {
                    $report_id = $this->m_oa_report->import_report($child);
                }
                if ($child->getName() == 'columns') {
                    $this->m_oa_report_column->import_report($child, $report_id);
                }
            }
            redirect('/admin_report/list_reports');
        }
    }

    public function edit_report()
    {
        $this->data['heading'] = 'Edit Report';
        $this->data['include'] = 'v_incomplete';
        $this->load->view('v_template', $this->data);
    }

    function refresh_report_definitions()
    {
        $this->load->helper('report');
        $this->data['query'] = refresh_report_definitions();
        $this->data['heading'] = 'Update reports';
        $this->data['include'] = 'v_general';
        $this->data['sortcolumn'] = '0';
        $this->load->view('v_template', $this->data);

    }
}
