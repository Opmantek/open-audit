<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class MY_Controller extends CI_Controller {
	function MY_Controller()
	{
		parent::__construct();
		$this->load->library('session');
		$this->benchmark->mark('code_start');
		if ($this->config->item('debug')) { $this->output->enable_profiler(TRUE); }
		$this->load->helper('url');
		$loggedin = $this->session->userdata('logged_in');
		
		
		$this->load->model("m_oa_config");
		$conf = $this->m_oa_config->get_config();
		$this->data['config'] = new stdclass();
		foreach ($conf as $returned_result) {
			$config_name = $returned_result->config_name;
			$this->data['config']->$config_name = $returned_result->config_value;
		}

		# turn on/off debugging from GET string
		if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE)) AND ($this->uri->segment($this->uri->total_rsegments()-1) == 'user_debug') ) {
			if ($this->session->userdata['user_admin'] == 'y') {
				$array = array('user_debug' => $this->uri->segment($this->uri->total_rsegments()) );
				$this->session->set_userdata($array);
				$this->data['user_debug'] = $this->uri->segment($this->uri->total_rsegments());
			}
			$new_url = str_replace('/user_debug/y', '', $this->uri->uri_string());
			$new_url = str_replace('/user_debug/n', '', $new_url);
			redirect($new_url);
		}

		if ((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE)) {
			if (isset($this->session->userdata['user_debug'])) {
				if ($this->session->userdata['user_debug'] == 'y') {
					$this->output->enable_profiler(TRUE);
				} else {
					$this->output->enable_profiler(FALSE);
				}
			}
		}

		# if GET query string has username and password, use that to validate and deliver page and do NOT set a cookie
		if ( ((!isset($loggedin)) OR ($this->session->userdata('logged_in') != TRUE)) AND ((strpos(current_url(), 'username') !== FALSE) and (strpos(current_url(), 'password') !== FALSE)) ){
			$split_url = explode("/", current_url());
			for ($i=0; $i <= count($split_url)-1 ; $i++) {
				if (strpos($split_url[$i], 'username') !== FALSE) {
					$username = $split_url[$i+1];
				}
				if (strpos($split_url[$i], 'password') !== FALSE) {
					$password = $split_url[$i+1];
				}
			}
			$this->load->model("m_userlogin");
			if ($data = $this->m_userlogin->validate_user($username, $password)) {
				if ($data != 'fail') {  
					$this->session->set_userdata($data);
				} else {
					exit();       
				}
			} else {
				exit();
			}
		}

		# if POST data has username and password, use that to validate and deliver page and do NOT set a cookie
		if ( (!isset($loggedin) OR $this->session->userdata('logged_in') != TRUE) AND (isset($_POST['username']) AND isset($_POST['password'])) ){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$this->load->model("m_userlogin");
			if ($data = $this->m_userlogin->validate_user($username, $password)) {
				if ($data != 'fail') {  
					$this->session->set_userdata($data);
				} else {
					exit();      
				}
			} else {
				exit();
			}
		}

		
		$this->data['title'] = 'Open-AudIT';
		$this->data['id'] = $this->uri->segment(3, 0);
		
		if ((!isset($loggedin)) OR ($this->session->userdata('logged_in') != TRUE)) {
			$this->data['page'] = $this->uri->segment(1, '');
			$this->data['function'] = $this->uri->segment(2, '');
			if ($this->data['page'] != '' AND $this->data['function'] != '') {
				redirect('login/index/' . $this->data['page'] . '/' . $this->data['function'] . '/' . $this->data['id']);
			} else {
				redirect('login/index');
			}
		} else {
			$this->data['user_full_name'] = $this->session->userdata('user_full_name');
			$this->data['user_lang'] = $this->session->userdata('user_lang');
			$this->data['user_theme'] = $this->session->userdata('user_theme');
			$this->data['user_admin'] = $this->session->userdata('user_admin');
			$this->data['user_id'] = $this->session->userdata('user_id');
			$this->data['user_debug'] = $this->session->userdata('user_debug');
		}
		$this->load->helper('url');
		$this->load->helper('network');
		$this->data['apppath'] = APPPATH;
		$this->data['image_path'] = base_url() . 'theme-' . $this->data['user_theme'] . '/' . $this->data['user_theme'] . '-images/';
		$this->load->model("m_oa_report");
		$this->data['menu'] = $this->m_oa_report->list_reports_in_menu();
		set_time_limit(600);
	}

	function determine_output($output_type)
	{
		switch ($output_type) {
			case "excel":
			$this->excel_report($this->data['query']);
			break;

			case "csv":
			# need to insert the CSV function here
			$this->csv_report($this->data['query']);
			break;

			case "html":
			$this->html_report($this->data['query']);
			break;

			case "pdf":
			# need to insert the PDF function here
			$this->load->view('v_template', $this->data);
			break;

			case "xml":
			# need to insert the XML function here
			$this->xml_report($this->data['query']);
			break;

			case "json":
			# need to insert the XML function here
			$this->json_report($this->data['query']);
			break;

			case "rss":
			# need to insert the XML function here
			$this->rss_report($this->data['query']);
			break;

			default:
			$this->load->view('v_template', $this->data);
			break;
		}
	}

	function csv_report($query)
	{
		$csv = "";
		foreach ($query AS $details) {
			foreach ($details as $attribute=>$value) {
				if ($attribute == "man_ip_address") {
					$value = ip_address_from_db($value); 
				}
				$value = str_replace(",", "", $value);
				$csv .= "\"" . $value . "\",";
			}
			$csv = mb_substr($csv, 0, mb_strlen($csv) -1);
			# todo - remove the last comma
			$csv .= "\n";
		}
		echo $csv;
		header('Content-Type: text/csv');
		header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.csv"');
		header('Cache-Control: max-age=0');
	}

	function xml_report($query)
	{
		$this->load->helper('xml');
		echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n";
		echo "<items>\n";
		foreach ($query AS $details) {
			echo "\t<item>\n";
			foreach ($details as $attribute=>$value) {
				if ($attribute == "man_ip_address") {
					$value = ip_address_from_db($value); 
				}
				$value = xml_convert($value);
				echo "\t\t<" . $attribute . ">" . $value . "</" . $attribute . ">\n";
			}
			echo "\t</item>\n";
		}
		echo "</items>\n";
		header('Content-Type: text/xml');
		header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.xml"');
		header('Cache-Control: max-age=0');
	}

	function json_report($query)
	{
		echo "{\"items\": {\n";
		foreach ($query AS $details) {
			echo "\t\"item\": {\n";
			$output = "";
			foreach ($details as $attribute=>$value) {
				if ($attribute == "man_ip_address") {
					$value = ip_address_from_db($value); 
				}
				$value = str_replace ('"', '\"', $value);
				$output .= "\t\t\"" . $attribute . "\": \"" . $value . "\",\n";
			}
			echo substr($output, 0, -2) . "\n";
			echo "\t}\n";
		}
		echo "}}";
		header('Content-Type: application/json');
		header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.json"');
		header('Cache-Control: max-age=0');
	}

	function html_report($query)
	{
		echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\n\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">\n";
		echo "<head>\n";
		echo "<title>" . $this->data['heading'] . "</title>\n";
		echo "<style type=\"text/css\">\n";
		echo "  td { font-family: verdana; font-size:10px; color:#111; }\n";
		echo "  th { font-family: verdana; font-size:10px; color:#111; font-weight:bold; }\n";
		echo "</style>\n";
		echo "</head>\n";
		echo "<body>\n";
		echo "<table>\n";
		echo "\t<thead><tr>";
		foreach ($query AS $details) {
			foreach ($details as $attribute=>$value) {
				echo "<th>" . $attribute . "</th>";
			}
			break;
		}
		echo "</tr></thead>\n";
		echo "\t<tbody>\n";
		foreach ($query AS $details) {
			echo "\t\t<tr>";
				foreach ($details as $attribute=>$value) {
					if ($attribute == "man_ip_address") {
						$value = ip_address_from_db($value); 
					}
					echo "<td>" . $value . "</td>";
				}
			echo "</tr>\n";
		}
		echo "\t</tbody>\n";
		echo "</table>\n";
		echo "</body>\n";
		header('Content-Type: text/html');
		header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.html"');
		header('Cache-Control: max-age=0');
	}

	function excel_report($query)
	{
		require_once BASEPATH . '../application/libraries/phpexcel/PHPExcel/IOFactory.php';
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setCreator("Mark Unwin");
		$objPHPExcel->getProperties()->setLastModifiedBy("Mark Unwin");
		$objPHPExcel->getProperties()->setTitle($this->data['heading']);
		$objPHPExcel->getProperties()->setSubject($this->data['heading']);
		$objPHPExcel->getProperties()->setDescription($this->data['heading'] . " produced from OAv2");
		$objPHPExcel->getProperties()->setKeywords("");
		$objPHPExcel->getProperties()->setCategory("");
		$objPHPExcel->setActiveSheetIndex(0);
		$column_count = 65;
		$column = chr($column_count);
		$row = 1;
		$count = 0;
		# export the cell headers
		foreach ($query AS $details) {
			if ( ($column_count == 65) AND ($row == 1) ) {
				foreach ($details as $attribute=>$value) {
					$cell = $column . $row;
					$objPHPExcel->getActiveSheet()->setCellValue($cell, $attribute);
					$count++;
					$column_count++;
					$column = chr($column_count);
				}
				$row++;
				$column_count = 65;
				$column = chr($column_count);
				break;
			}
		}
		# export the actual data
		foreach ($query AS $details) {
			foreach ($details as $attribute=>$value) {
				$cell = $column . $row;
				if ($attribute == "man_ip_address") {
					$value = ip_address_from_db($value); 
				}
				$objPHPExcel->getActiveSheet()->setCellValue($cell, $value);
				$count++;
				$column_count++;
				$column = chr($column_count);
			}
			$row++;
			$column_count = 65;
			$column = chr($column_count);
		}
		// redirect output to client browser
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.xls"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output'); 
		exit();
	}

	function rss_report($query)
	{
		$this->load->helper('xml');
		echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n";
		echo "<rss version=\"2.0\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\">\n";
		echo "\t<channel>\n";
		echo "\t\t<title>Open-AudIT</title>\n";
		echo "\t\t<link>" . current_url() . "</link>\n";
		echo "\t\t<description>" . $this->data['heading'] . "</description>\n";
		echo "\t\t<language>" . $this->session->userdata['user_lang'] . "</language>\n";
		#echo "\t\t<dc:date>" . date('Y-m-d h:m:s') . "</dc:date>\n";

		foreach ($query AS $details) {
			$title = "";
			$description = "";
			echo "\t\t<item>\n";
			foreach ($details as $attribute=>$value) {
				$value =  html_entity_decode($value);
				
				if ($attribute == "man_ip_address") {
					$value = ip_address_from_db($value);
				}
				if ($attribute == "timestamp") {
					$temp2 = strtotime($value);
					#echo "\t\t\t<pubDate>" . date('D, d M Y h:i:s', $temp2) . "</pubDate>\n";
					$pub_date = date('D, d M Y h:i:s O', $temp2);
					$description .= "PubDate: " . $pub_date . "<br />";
				}
				if ($attribute == "alert_details") {
					$title .= $value;
					$temp1 = explode("-", $value);
					$category = trim($temp1[0]);
					$description .= "Category: " . $category . "<br />\n";
				}
				if ($attribute == "system_id") {
					$link = $value;
				}
				if ($attribute == "hostname") {
					$title = strtoupper($value) . " " . $title;
				}
				$description .= $attribute . ": " . $value . "<br />";
				#if ($attribute == "") {
				#}
				#echo "\t\t\t<" . $attribute . ">" . $value . "</" . $attribute . ">\n";
			
			}
			echo "\t\t\t<title><![CDATA[" . $title . "]]></title>\n";
			echo "\t\t\t<pubDate>" . $pub_date . "</pubDate>\n";
			echo "\t\t\t<link>" . site_url() . "/main/system_display/" . $link . "</link>\n";
			echo "\t\t\t<description><![CDATA[" . $description . "]]></description>\n";
			echo "\t\t\t<category>" . $category . "</category>\n";
			echo "\t\t\t<dc:creator><![CDATA[\"Mark Unwin\" <mark.unwin@gmail.com>]]></dc:creator>\n";
			echo "\t\t</item>\n";
		}
		echo "  </channel>\n</rss>\n";
		#header('Content-Type: text/xml');
		#header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.rss"');
		#header('Cache-Control: max-age=0');
	}

}
