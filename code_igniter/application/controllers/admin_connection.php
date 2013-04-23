<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Admin_connection extends MY_Controller {

	function __construct() {
		parent::__construct();
		// must be an admin to access this page
		if ($this->session->userdata('user_admin') != 'y') {
			if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
				redirect($_SERVER['HTTP_REFERER']);
			} else {
				redirect('login/index');
			}
		}
	}

	function index() {
		redirect('/');
	}

	function list_connections() {
		$this->load->model("m_oa_connection");
		$this->data['query'] = $this->m_oa_connection->get_all_connections();
		$this->data['heading'] = 'List Connections';
		$this->data['include'] = 'v_list_connections'; 
		$this->data['sortcolumn'] = '1';
		$this->load->view('v_template', $this->data);
	}

	function add_connections() {
		if ( !isset($_POST['submit_xml']) AND !isset($_POST['submit_file']) ) {
			# nothing submitted - display the form
			$this->data['heading'] = 'Add connections';
			$this->data['include'] = 'v_add_connections'; 
			$this->load->view('v_template', $this->data);
		} 
		if ( isset($_POST['submit_file']) ) {
			$this->load->model("m_oa_connection");
			# we have an uploaded file - store and process			
			$target_path = BASEPATH . "../application/uploads/" . basename( $_FILES['upload_file']['name']);
			if(move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_path)) {
				# echo "The file ".  basename( $_FILES['upload_file']['name']). " has been uploaded.<br />\n";
			} else {
				echo "There was an error uploading the file, please try again!<br />\n";
				exit();
			}
			require_once BASEPATH . '../application/libraries/phpexcel/PHPExcel/IOFactory.php';
			if (!$objPHPExcel = PHPExcel_IOFactory::load($target_path)) { exit; }
			$attributes = array();
			$details = array();
			$object = new stdClass();
			$objWorksheet = $objPHPExcel->getActiveSheet();
			$count = 0;
			foreach ($objWorksheet->getRowIterator() as $row) {
				$cellIterator = $row->getCellIterator();
				$cellIterator->setIterateOnlyExistingCells(false); 
				if ($count == 0) {
					foreach ($cellIterator as $cell) {
						$attributes[] = $cell->getValue();
					}
				} else {
					$cell_number = 0;
					foreach ($cellIterator as $cell) {
						$details[$attributes[$cell_number]] = $cell->getValue();
						$cell_number++;
					}
					if ($details['connection_name'] != '') { 
						if ($connection_id = $this->m_oa_connection->get_connection_id($details['connection_name'])) {
							# we need to update an existing connection
							$sql = "UPDATE oa_connection SET ";
							foreach ($details as $detail=>$value) {
								$sql .= $detail . " = '" . mysql_real_escape_string($value) . "', "; 
							}
							$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
							$sql .= " WHERE connection_name = '" . mysql_real_escape_string($details['connection_name']) . "'";
						} else {
							# this is a new connection (we don't have a name match)
							$sql = "INSERT INTO oa_connection ( ";
							foreach ($details as $detail=>$value) {
								$sql .= $detail . ", "; 
							}
							$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
							$sql .= " ) VALUES ( ";
							foreach ($details as $detail=>$value) {
								$sql .= "'" . mysql_real_escape_string(str_replace('"', '', $value)) . "', "; 
							}
							$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
							$sql .= ")";
						}
						# run the query !!!
						echo $sql . "<br />\n";
						$query = $this->db->query($sql);
					} else { 
						echo "no connection name provided"; 
					}
				}
				$count++;
			}
			redirect('admin_connection/list_connections');
		}
		if ( isset($_POST['submit_xml']) AND isset($_POST['form_systemXML']) AND $_POST['form_systemXML'] > '')
		{
			# we have XML text - process
			echo "XML processing<br />\n";
			$this->load->helper('xml');
			$this->load->model("m_oa_connection");
			$xml = new SimpleXMLElement(utf8_encode(str_replace('&', '&amp;', $_POST['form_systemXML'])));
			foreach ($xml->children() as $child) {
				if ($connection_id = $this->m_oa_connection->get_connection_id($child->connection_name)) {
					# we need to update an existing connection
					$sql = "UPDATE oa_connection SET ";
					foreach ($child->children() as $detail) {
						$sql .= $detail->getName() . " = '" . $detail . "', "; 
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= " WHERE connection_name = '" . $child->connection_name . "'";
				} else {
					# this is a new connection (we don't have a name match)
					$sql = "INSERT INTO oa_connection ( ";
					foreach ($child->children() as $detail) {
						$sql .= $detail->getName() . ", "; 
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= " ) VALUES ( ";
					foreach ($child->children() as $detail) {
						$sql .= "'" . $detail . "', "; 
					}
					$sql = mb_substr($sql, 0, mb_strlen($sql)-2);
					$sql .= ")";
				}
				if ($child->connection_name != '') { 
					# run the query !!!
					$query = $this->db->query($sql);
				} else { 
					echo "no connection name provided"; 
				}
			}
		}
		# catch all redirect
		# redirect('admin_connection/list_connections');
	}

	function add_connection() {
		if (!isset($_POST['AddConnection'])) {
			# load the initial form
			$this->load->model("m_oa_location");
			$this->load->model("m_oa_org");
			$this->data['locations'] = $this->m_oa_location->get_all_locations();
			$this->data['orgs'] = $this->m_oa_org->get_org_names();
			$this->data['heading'] = 'Add Connection';
			$this->data['include'] = 'v_add_connection'; 
			$this->load->view('v_template', $this->data);
		} else {
			# process the form
			foreach ($_POST as $key => $value) {
				$details->$key = $value;
			}
			#echo "<pre>";
			#print_r($details);
			#echo "</pre>";
			$this->load->model("m_oa_connection");
			if (is_null($this->m_oa_connection->get_connection_id($details->connection_name))) {
				#connection does not exist - good
				$details->connection_id = $this->m_oa_connection->add_connection($details);
			} else {
				$this->data['error_message'] = "A Connection with that name already exists.";
				$this->data['heading'] = 'Add Connection';
				$this->data['include'] = 'v_add_connection'; 
				$this->load->view('v_template', $this->data);
			}
			redirect('admin_connection/list_connections');
		}
	}

	function edit_connection() {
		$this->load->model("m_oa_connection");
		if (!isset($_POST['Editconnection'])) {
			# load the initial form
			$this->data['connection'] = $this->m_oa_connection->get_connection($this->data['id']);
			$this->data['heading'] = 'Edit Connection';
			$this->data['include'] = 'v_edit_connection'; 
			$this->data['sortcolumn'] = '1';
			$this->load->view('v_template', $this->data);
		} else {
			# process the form
			$error = '0';
			foreach ($_POST as $key => $value) {
				$details->$key = $value;
			}
			if ($this->m_oa_connection->check_connection_name($details->connection_name, $details->connection_id) == FALSE) {
				$error = '1';
				$this->data['error_message'] = "connection name already exists.";
				$this->data['connection'] = $this->m_oa_connection->get_connection($details->connection_id);
				$this->data['heading'] = 'Edit Connection';
				$this->data['include'] = 'v_edit_connection'; 
				$this->load->view('v_template', $this->data);
			}
			
			if ($error == '0'){
				$this->m_oa_connection->edit_connection($details);
				redirect('admin_connection/list_connections');
			}
		}
	}

	function delete_connection() {
		$this->load->model("m_oa_connection");
		$this->m_oa_connection->delete_connection($this->data['id']);
		redirect('admin_connection/list_connections');
	}
}
