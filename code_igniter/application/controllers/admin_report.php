<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Admin_report extends MY_Controller {

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


	function index()
	{
		redirect('/');
	}
	
	function activate_report()
	{
		if ($handle = opendir(BASEPATH.'../application/controllers/reports')) {
			$i = 0;
			$this->load->model("m_oa_report");
			while (false !== ($file = readdir($handle))) {
				if (mb_strpos($file, ".xml") !== false) {
					$report_name = '';
					$report_description = '';
					$file_handle = fopen(BASEPATH.'../application/controllers/reports/'.$file, "rb");
					$contents = fread($file_handle, filesize(BASEPATH.'../application/controllers/reports/'.$file));
					$xml = new SimpleXMLElement($contents);
					$report_name = $xml->details->report_name;
					$report_description = $xml->details->report_description;
					unset($xml);
					fclose($file_handle);
					$this->data['query'][$i]['file'] = $file;
					$this->data['query'][$i]['report_name'] = $report_name;
					$this->data['query'][$i]['activated'] = $this->m_oa_report->get_report_id($report_name);
					$i++;
					// echo "$file<br />\n";
				}
			}
			closedir($handle);
		}
		$this->data['heading'] = 'Activate Reports';
		$this->data['include'] = 'v_add_reports'; 
		$this->data['sortcolumn'] = '0';
		$this->load->view('v_template', $this->data);
	}

	function action_activate_report()
	{
		$file = BASEPATH.'../application/controllers/reports/' . $this->data['id'];
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
		redirect('/admin_report/activate_report');	
	}

	function action_deactivate_report()
	{
		$this->load->model("m_oa_report");
		$this->load->model("m_oa_report_column");
		$this->m_oa_report->delete_report($this->data['id']);
		$this->m_oa_report_column->delete_report($this->data['id']);
		redirect('/admin_report/activate_report');	
	}
	
	function list_reports()
	{
		$this->load->model("m_oa_report");
		$this->data['query'] = $this->m_oa_report->list_reports();
		$this->data['heading'] = 'List Reports';
		$this->data['include'] = 'v_list_reports'; 
		$this->data['sortcolumn'] = '0';
		$this->load->view('v_template', $this->data);
	}
	
	function delete_report() {
		$this->load->model("m_oa_report");
		$this->load->model("m_oa_report_column");
		$this->m_oa_report_column->delete_report($this->data['id']);
		$this->m_oa_report->delete_report($this->data['id']);
		redirect('/admin_report/list_reports');
	}

	function export_report()
	{
		$this->load->model("m_oa_report");
		$this->load->model("m_oa_report_column");
		$report_name = $this->m_oa_report->get_report_name($this->data['id']);
		$this->data['report_detail'] = $this->m_oa_report->get_report_details($this->data['id']);
		$this->data['report_columns'] = $this->m_oa_report_column->get_report_column($this->data['id']);
		#$this->load->helper('xml');
		echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n";
		echo "<report>\n";
		foreach ($this->data['report_detail'] AS $details) {
			echo "\t<details>\n";
			foreach ($details as $attribute=>$value) {
				if (($attribute != 'report_id') and ($attribute != 'report_sql') and ($attribute != 'report_display_sql')) {
					echo "\t\t<" . $attribute . ">" . $value . "</" . $attribute . ">\n";
				}
				if ((($attribute == 'report_sql') or ($attribute == 'report_display_sql')) and ($value > '')){
					echo "\t\t<" . $attribute . "><![CDATA[" . $value . "]]></" . $attribute . ">\n";
				}
			}
			echo "\t</details>\n";
		}
		echo "\t<columns>\n";
		foreach ($this->data['report_columns'] AS $details) {
			echo "\t\t<column>\n";
			foreach ($details as $attribute=>$value) {
				if (($attribute != 'column_id') && ($attribute != 'report_id')) {
					echo "\t\t\t<" . $attribute . ">" . $value . "</" . $attribute . ">\n";
				}
			}
			echo "\t\t</column>\n";
		}
		echo "\t</columns>\n";
		echo "</report>";
		$report_name = str_replace(" ", "", $report_name) . ".xml";
		header('Content-Type: text/xml');
		header('Content-Disposition: attachment;filename="' . $report_name . '"');
		header('Cache-Control: max-age=0');
	}

	function import_report()
	{
		if ( !isset($_POST['submit']) ) {
			# nothing submitted - display the form
			$this->data['heading'] = 'Import Report';
			$this->data['include'] = 'v_import_report'; 
			$this->load->view('v_template', $this->data);
		} 
		if ( isset($_POST['submit']) ) {
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

	function edit_report() {
		$this->data['heading'] = 'Edit Report';
		$this->data['include'] = 'v_incomplete'; 
		$this->load->view('v_template', $this->data);
	}
}
