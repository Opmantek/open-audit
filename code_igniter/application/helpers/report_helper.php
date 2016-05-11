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
 * @version 1.12.6
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (! function_exists('refresh_report_definitions')) {
    function refresh_report_definitions()
    {
        $CI = & get_instance();
        $output = '';
        // add an extra column so we can track which groups have been updated
        if (!$CI->db->field_exists('updated', 'oa_report')) {
            $sql = "ALTER TABLE oa_report ADD updated varchar(1) NOT NULL default ''";
            $query = $CI->db->query($sql);
        }

        # get the list of report XML definitions
        $report_files = array();
        $paths = array('c:\omk\reports',
            'c:\xampplite\open-audit\code_igniter\application\controllers\reports',
            '/usr/local/omk/reports',
            '/usr/local/opmojo/reports',
            '/usr/local/open-audit/code_igniter/application/controllers/reports');
        foreach ($paths as $path) {
            if (is_dir($path) and $handle = opendir($path)) {
                $i = 0;
                while (false !== ($file = readdir($handle))) {
                    if (mb_strpos($file, ".xml") !== false) {
                        $file_handle = fopen($path . '/'.$file, "rb");
                        $contents = fread($file_handle, filesize($path . '/'.$file));
                        $error = 0;
                        try {
                            $xml = new SimpleXMLElement($contents);
                        } catch (Exception $error) {
                            $error = 1;
                        }
                        if ($error == 0) {
                            $report_file_details = array();
                            $report_file_details['report_name'] = (string)$xml->details->report_name;
                            $report_file_details['report_file'] = $path . '/'.$file;
                            $report_files[] = $report_file_details;
                            unset ($report_file_details);
                        }
                        unset($xml);
                        fclose($file_handle);
                    }
                }
                closedir($handle);
            }
        }
        # get the list of activated reports
        $sql = "SELECT report_id, report_name FROM oa_report";
        $query = $CI->db->query($sql);
        $result = $query->result();
        // test each retrieved report
        foreach ($result as $report) {
            // against each retrieved file
            foreach ($report_files as $file) {
                if ($report->report_name == $file['report_name']) {
                    $sql = "DELETE FROM oa_report WHERE report_id = " . intval($report->report_id);
                    $query = $CI->db->query($sql);
                    $file_report = $file['report_file'];
                    $file_handle = fopen($file_report, "rb");
                    $contents = fread($file_handle, filesize($file_report));
                    $xml = new SimpleXMLElement(utf8_encode($contents));
                    $sql = "INSERT INTO oa_report SET report_name = ?, report_sql = ?,
                    report_view_file = ?, report_view_contents = ?, report_processing = ?,
                    report_sort_column = ?, report_display_in_menu = ?, report_description = ?";
                    $data = array(
                        (string)$xml->details->report_name,
                        (string)$xml->details->report_sql,
                        (string)$xml->details->report_view_file,
                        (string)$xml->details->report_view_contents,
                        (string)$xml->details->report_processing,
                        (string)$xml->details->report_sort_column,
                        (string)$xml->details->report_display_in_menu,
                        (string)$xml->details->report_description
                    );
                    $query = $CI->db->query($sql, $data);
                    $report_id = $CI->db->insert_id();
                    foreach ($xml->columns->column as $detail) {
                        $sql = "INSERT INTO oa_report_column SET report_id = ?, column_order = ?, column_name = ?, column_variable = ?, column_type = ?, column_link = ?, column_secondary = ?, column_ternary = ?, column_align = ?";
                        $data = array(
                            $report_id,
                            (string)$detail->column_order,
                            (string)$detail->column_name,
                            (string)$detail->column_variable,
                            (string)$detail->column_type,
                            (string)$detail->column_link,
                            (string)$detail->column_secondary,
                            (string)$detail->column_ternary,
                            (string)$detail->column_align);
                        $query = $CI->db->query($sql, $data);
                    }
                    $sql = "UPDATE oa_report SET updated = 'y' WHERE report_id = ?";
                    $data = array("$report_id");
                    $query = $CI->db->query($sql, $data);
                }
            }
        }

        // get the non-updated reports
        $sql = "SELECT report_id, report_name FROM oa_report WHERE updated != 'y'";
        $query = $CI->db->query($sql);
        $non_updated_reports = $query->result();
        $output = "There are " . count($non_updated_reports) . " non-updated groups whose names are: <br />";
        foreach ($non_updated_reports as $nur) {
            if ($nur->report_name == '') {
                $nur->report_name = '[no group name]';
            }
            $output.= $nur->report_name . "<br />\n";
        }

        // remove the extra column
        $sql = "ALTER TABLE oa_report DROP updated";
        $query = $CI->db->query($sql);

        return($output);
    }
}


if (! function_exists('check_default_reports')) {
    function check_default_reports()
    {
        $CI = get_instance();
       # check to see if we have any reports activated - if not, activate the default set
        $sql = "SELECT count(*) as count FROM oa_report";
        $query = $CI->db->query($sql);
        $result = $query->result();
        if (intval($result[0]->count) == 0) {
            $CI->load->model('m_oa_report');
            $CI->m_oa_report->activate_file('Device Details');
            $CI->m_oa_report->activate_file('Device Hardware');
            $CI->m_oa_report->activate_file('Installed - Software');
            $CI->m_oa_report->activate_file('Specific Software');
            $CI->m_oa_report->activate_file('Software Keys');
            $CI->m_oa_report->activate_file('Specific Key Name');
            $CI->m_oa_report->activate_file('Specific Key Text');
            $CI->m_oa_report->activate_file('Changes');
            $CI->m_oa_report->activate_file('Changes - Software');
            $CI->m_oa_report->activate_file('Disk Partition Use');
            $CI->m_oa_report->activate_file('Interfaces Used - Available');
            $CI->m_oa_report->activate_file('Enterprise - Devices Discovered in the Last Days');
            $CI->m_oa_report->activate_file('Enterprise - Software Discovered in the Last Days');
            $CI->m_oa_report->activate_file('Enterprise - Devices Not Seen by Date');
            $CI->m_oa_report->activate_file('Enterprise - Specific Software');
            $CI->m_oa_report->activate_file('Enterprise - Software Discovered by Date');
            $CI->m_oa_report->activate_file('Enterprise - Devices Discovered by Date');
            $CI->m_oa_report->activate_file('Enterprise - Devices Not Seen in the Last Days');
            $CI->m_oa_report->activate_file('Enterprise - OS Group');
            $CI->m_oa_report->activate_file('Enterprise - OS Types');
            $CI->m_oa_report->activate_file('Enterprise - OS Family');
            $CI->m_oa_report->activate_file('Enterprise - OS Name');
            $CI->m_oa_report->activate_file('Enterprise - Device Types');
            $CI->m_oa_report->activate_file('Enterprise - Device Type');
            $CI->m_oa_report->activate_file('Enterprise - Software Discovered Range');
            $CI->m_oa_report->activate_file('Enterprise - Devices Discovered Range');
        }
    }
}

/* End of file report_helper.php */
/* Location: ./system/application/helpers/report_helper.php */
