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

/**
 * Base Object Admin_connection.
 *
 * @access   public
 *
 * @category Object
 *
 * @author   Mark Unwin <marku@opmantek.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 *
 * @link     http://www.open-audit.org
 *
 * @return   Admin_connection
 */
class Admin_connection extends MY_Controller
{
    /**
     * Constructor.
     *
     * @access   public
     *
     * @category Constructor
     *
     * @author   Mark Unwin <marku@opmantek.com>
     * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link     http://www.open-audit.org
     *
     * @return Admin
     */
    public function __construct()
    {
        parent::__construct();
        $log_details = new stdClass();
        stdlog($log_details);
        unset($log_details);
    }

    /**
     * Index.
     *
     * @access   public
     *
     * @category Function
     *
     * @author   Mark Unwin <marku@opmantek.com>
     * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link     http://www.open-audit.org
     *
     * @return NULL
     */
    public function index()
    {
        redirect('/');
    }

    /**
     * List all our network connections.
     *
     * @access   public
     *
     * @category Function
     *
     * @author   Mark Unwin <marku@opmantek.com>
     * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link     http://www.open-audit.org
     *
     * @return NULL
     */
    public function list_connections()
    {
        $this->load->model('m_oa_connection');
        $this->data['query'] = $this->m_oa_connection->get_all_connections();
        $this->data['heading'] = 'List Connections';
        $this->data['include'] = 'v_list_connections';
        $this->data['sortcolumn'] = '1';
        $this->load->view('v_template', $this->data);
    }

    /**
     * Add multiple network connections.
     *
     * @access   public
     *
     * @category Function
     *
     * @author   Mark Unwin <marku@opmantek.com>
     * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link     http://www.open-audit.org
     *
     * @return NULL
     */
    public function add_connections()
    {
        if (! $this->input->post('submit') and ! $this->input->post('submit_file')) {
            // nothing submitted - display the form
            $this->data['heading'] = 'Add connections';
            $this->data['include'] = 'v_add_connections';
            $this->load->view('v_template', $this->data);
        }
        if ($this->input->post('submit_file')) {
            // we have an uploaded file - store and process
            $this->load->model('m_oa_connection');
            $target_path = BASEPATH.'../application/uploads/'.basename($_FILES['upload_file']['name']);
            if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_path)) {
                // echo "The file ".  basename( $_FILES['upload_file']['name']). " has been uploaded.<br />\n";
            } else {
                echo "There was an error uploading the file, please try again!<br />\n";
                exit();
            }
            require_once BASEPATH.'../application/libraries/phpexcel/PHPExcel/IOFactory.php';
            if (! $php_excel = PHPExcel_IOFactory::load($target_path)) {
                exit;
            }
            $attributes = array();
            $details = array();
            // $object = new stdClass();
            $excel_worksheet = $php_excel->getActiveSheet();
            $count = 0;
            foreach ($excel_worksheet->getRowIterator() as $excel_row) {
                $excel_cell_iterator = $excel_row->getCellIterator();
                $excel_cell_iterator->setIterateOnlyExistingCells(false);
                if ($count === 0) {
                    foreach ($excel_cell_iterator as $excel_cell) {
                        $attributes[] = $excel_cell->getValue();
                    }
                } else {
                    $cell_number = 0;
                    foreach ($excel_cell_iterator as $excel_cell) {
                        $details[$attributes[$cell_number]] = $excel_cell->getValue();
                        $cell_number++;
                    }
                    if ((string) $details['connection_name'] !== '') {
                        if ($connection_id = $this->m_oa_connection->get_connection_id($details['connection_name'])) {
                            // we need to update an existing connection
                            $sql_query = 'UPDATE oa_connection SET ';
                            foreach ($details as $detail => $value) {
                                $sql_query .= $detail." = '".mysql_real_escape_string($value)."', ";
                            }
                            $sql_query = mb_substr($sql_query, 0, mb_strlen($sql_query)-2);
                            $sql_query .= " WHERE connection_name = '".mysql_real_escape_string($details['connection_name'])."'";
                        } else {
                            // this is a new connection (we don't have a name match)
                            $sql_query = 'INSERT INTO oa_connection ( ';
                            foreach ($details as $detail => $value) {
                                $sql_query .= $detail.', ';
                            }
                            $sql_query = mb_substr($sql_query, 0, mb_strlen($sql_query)-2);
                            $sql_query .= ' ) VALUES ( ';
                            foreach ($details as $detail => $value) {
                                $sql_query .= "'".mysql_real_escape_string(str_replace('"', '', $value))."', ";
                            }
                            $sql_query = mb_substr($sql_query, 0, mb_strlen($sql_query)-2);
                            $sql_query .= ')';
                        }
                        $sql_query = '/* admin_connection::add_connections */ ' . $sql_query;
                        $query = $this->db->query($sql_query);
                    } else {
                        echo 'no connection name provided';
                    }
                }
                $count++;
            }
            redirect('admin_connection/list_connections');
        }
        if ($this->input->post('submit_xml') and $this->input->post('form_systemXML')) {
            // we have some XML text - process
            echo "XML processing<br />\n";
            $this->load->helper('xml');
            $this->load->model('m_oa_connection');
            $form_xml = new SimpleXMLElement(utf8_encode(str_replace('&', '&amp;', $this->input->post('form_systemXML'))));
            foreach ($form_xml->children() as $child) {
                if ($connection_id = $this->m_oa_connection->get_connection_id($child->connection_name)) {
                    // we need to update an existing connection
                    $sql_query = 'UPDATE oa_connection SET ';
                    foreach ($child->children() as $detail) {
                        $sql_query .= $detail->getName()." = '".$detail."', ";
                    }
                    $sql_query = mb_substr($sql_query, 0, mb_strlen($sql_query)-2);
                    $sql_query .= " WHERE connection_name = '".$child->connection_name."'";
                } else {
                    // this is a new connection (we don't have a name match)
                    $sql_query = 'INSERT INTO oa_connection ( ';
                    foreach ($child->children() as $detail) {
                        $sql_query .= $detail->getName().', ';
                    }
                    $sql_query = mb_substr($sql_query, 0, mb_strlen($sql_query)-2);
                    $sql_query .= ' ) VALUES ( ';
                    foreach ($child->children() as $detail) {
                        $sql_query .= "'".$detail."', ";
                    }
                    $sql_query = mb_substr($sql_query, 0, mb_strlen($sql_query)-2);
                    $sql_query .= ')';
                }
                if ((string) $child->connection_name !== '') {
                    $sql_query = '/* admin_connection::add_connections */ ' . $sql_query;
                    $query = $this->db->query($sql_query);
                } else {
                    echo 'no connection name provided';
                }
            }
        }
    }

    /**
     * Add a single network connection.
     *
     * @access   public
     *
     * @category Function
     *
     * @author   Mark Unwin <marku@opmantek.com>
     * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link     http://www.open-audit.org
     *
     * @return NULL
     */
    public function add_connection()
    {
        if (! $this->input->post('submit')) {
            // load the initial form
            $this->load->model('m_oa_location');
            $this->load->model('m_oa_org');
            $this->data['locations'] = $this->m_oa_location->get_all_locations();
            $this->data['orgs'] = $this->m_oa_org->get_org_names();
            $this->data['heading'] = 'Add Connection';
            $this->data['include'] = 'v_add_connection';
            $this->load->view('v_template', $this->data);
        } else {
            // process the form
            foreach ($this->input->post() as $this_key => $this_value) {
                $details->$this_key = $this_value;
            }
            $this->load->model('m_oa_connection');
            if (is_null($this->m_oa_connection->get_connection_id($details->connection_name))) {
                // connection does not exist - good
                $details->connection_id = $this->m_oa_connection->add_connection($details);
            } else {
                $this->data['error_message'] = 'A Connection with that name already exists.';
                $this->data['heading'] = 'Add Connection';
                $this->data['include'] = 'v_add_connection';
                $this->load->view('v_template', $this->data);
            }
            redirect('admin_connection/list_connections');
        }
    }

    /**
     * Edit a single network connection.
     *
     * @access   public
     *
     * @category Function
     *
     * @author   Mark Unwin <marku@opmantek.com>
     * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link     http://www.open-audit.org
     *
     * @return NULL
     */
    public function edit_connection()
    {
        $this->load->model('m_oa_connection');
        if (! $this->input->post('submit')) {
            // load the initial form
            $this->data['connection'] = $this->m_oa_connection->get_connection($this->data['id']);
            $this->data['heading'] = 'Edit Connection';
            $this->data['include'] = 'v_edit_connection';
            $this->data['sortcolumn'] = '1';
            $this->load->view('v_template', $this->data);
        } else {
            // process the form
            $error = '0';
            foreach ($this->input->post() as $this_key => $this_value) {
                $details->$this_key = $this_value;
            }
            if ((bool) $this->m_oa_connection->check_connection_name($details->connection_name, $details->connection_id) === false) {
                $error = '1';
                $this->data['error_message'] = 'connection name already exists.';
                $this->data['connection'] = $this->m_oa_connection->get_connection($details->connection_id);
                $this->data['heading'] = 'Edit Connection';
                $this->data['include'] = 'v_edit_connection';
                $this->load->view('v_template', $this->data);
            }

            if ((string) $error === '0') {
                $this->m_oa_connection->edit_connection($details);
                redirect('admin_connection/list_connections');
            }
        }
    }

    /**
     * Delete a single network connection.
     *
     * @access   public
     *
     * @category Function
     *
     * @author   Mark Unwin <marku@opmantek.com>
     * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link     http://www.open-audit.org
     *
     * @return NULL
     */
    public function delete_connection()
    {
        $this->load->model('m_oa_connection');
        $this->m_oa_connection->delete_connection($this->data['id']);
        redirect('admin_connection/list_connections');
    }
}
// End of file admin_connection.php
// Location: ./controllers/admin_connection.php
