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
 * @version 1.5.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

/**
 * Base Object MY_Controller
 *
 * @access	 public
 * @category Object
 * @package  Open-AudIT
 * @author   Mark Unwin <marku@opmantek.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 * @return	 Admin
 */
class MY_Controller extends CI_Controller {

/**
 * The custom default controller object
 */
	function MY_Controller()
	{
		parent::__construct();
		$this->load->library('session');

		$this->benchmark->mark('code_start');
		if ($this->config->item('debug')) {
			$this->output->enable_profiler(TRUE);
		}
		$this->load->helper('url');
		$loggedin = $this->session->userdata('logged_in');

		$this->load->model('m_oa_config');
		$this->m_oa_config->load_config();

		// turn on/off debugging from GET string
		if (((isset($loggedin)) OR ((bool)$this->session->userdata('logged_in') === TRUE)) AND ((string)$this->uri->segment($this->uri->total_rsegments()-1) === 'user_debug') ) {
			if ((string)$this->session->userdata['user_admin'] === 'y') {
				$array = array('user_debug' => $this->uri->segment($this->uri->total_rsegments()) );
				$this->session->set_userdata($array);
				$this->data['user_debug'] = $this->uri->segment($this->uri->total_rsegments());
			}
			$new_url = str_replace('/user_debug/y', '', $this->uri->uri_string());
			$new_url = str_replace('/user_debug/n', '', $new_url);
			redirect($new_url);
		}
		if ((isset($loggedin)) OR ((bool)$this->session->userdata('logged_in') === TRUE)) {
			if (isset($this->session->userdata['user_debug'])) {
				if ((string)$this->session->userdata['user_debug'] === 'y') {
					$this->output->enable_profiler(TRUE);
				}
				else {
					$this->output->enable_profiler(FALSE);
				}
			}
		}


		// if GET or POST has username and password, use that to validate and deliver page and do NOT set a cookie
		if (( ! isset($loggedin)) OR ((bool)$this->session->userdata('logged_in') !== TRUE)) {
			if ((strpos(current_url(), 'username') !== FALSE) AND (strpos(current_url(), 'password') !== FALSE)) {
				$split_url = explode('/', current_url());
				for ($i=0; $i <= count($split_url)-1 ; $i++) {
					if (strpos($split_url[$i], 'username') !== FALSE) {
						$username = $split_url[$i+1];
					}
					if (strpos($split_url[$i], 'password') !== FALSE) {
						$password = $split_url[$i+1];
					}
				}
			}
			if ($this->input->post('username') AND $this->input->post('password')) {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
			}
			if (isset($username) AND (string)$username !== '' AND isset($password) AND (string)$password !== '') {
				$this->load->model('m_userlogin');
				if ($data = $this->m_userlogin->validate_user($username, $password)) {
					if (is_array($data)) {
						$this->session->set_userdata($data);
						$this->data['user_full_name'] = $data['user_full_name'];
						$this->data['user_lang'] = $data['user_lang'];
						$this->data['user_theme'] = $data['user_theme'];
						$this->data['user_admin'] = $data['user_admin'];
						$this->data['user_id'] = $data['user_id'];
						$this->data['user_debug'] = 'n';
						$loggedin = TRUE;
					}
					else {
						// username and password are set but do not validate
						exit();       
					}
				}
				else {
					// username and password are set but validate_user fails for some reason
					exit();
				}
			}
		}

		$this->user = $this->m_oa_user->get_user_details($this->session->userdata['user_id']);

		$this->data['title'] = 'Open-AudIT';
		$this->data['id'] = $this->uri->segment(3, 0);
		$this->load->helper('log');
		
		if (((bool)$loggedin === TRUE) OR ((int)$loggedin === 1) OR ((bool)$this->session->userdata('logged_in') === TRUE)) {
			// logged in
			if ( ! isset($this->data['user_full_name']) OR (string)$this->data['user_full_name'] === '')
			{ 
				$this->data['user_full_name'] = $this->session->userdata('user_full_name');
			}
			if ( ! isset($this->data['user_lang']) OR (string)$this->data['user_lang'] === '')
			{
				$this->data['user_lang'] = $this->session->userdata('user_lang');
			}
			if ( ! isset($this->data['user_theme']) OR (string)$this->data['user_theme'] === '')
			{
				$this->data['user_theme'] = $this->session->userdata('user_theme');
			}
			if ( ! isset($this->data['user_admin']) OR (string)$this->data['user_admin'] === '')
			{
				$this->data['user_admin'] = $this->session->userdata('user_admin');
			}
			if ( ! isset($this->data['user_id']) OR (string)$this->data['user_id'] === '')
			{
				$this->data['user_id'] = $this->session->userdata('user_id');
			}
			if ( ! isset($this->data['user_debug']) OR (string)$this->data['user_debug'] === '')
			{
				$this->data['user_debug'] = $this->session->userdata('user_debug');
			}
			$this->load->helper('url');
			$this->load->helper('network');
			$this->data['apppath'] = APPPATH;
			$this->data['image_path'] = base_url() . 'theme-' . $this->data['user_theme'] . '/' . $this->data['user_theme'] . '-images/';
			$this->load->model('m_oa_report');
			$this->data['menu'] = $this->m_oa_report->list_reports_in_menu();
			set_time_limit(600);
		}
		else {
			// not logged in - redirect to login page.
			// login page will present form, validate credentials and set session data
			$this->data['page'] = $this->uri->segment(1, '');
			$this->data['function'] = $this->uri->segment(2, '');
			$this->data['first_attribute'] = $this->uri->segment(4, '');
			if ((string)$this->data['page'] !== '' AND (string)$this->data['function'] !== '') {
				redirect('login/index/' . $this->data['page'] . '/' . $this->data['function'] . '/' . $this->data['id'] . '/' . $this->data['first_attribute']);
			}
			else {
				redirect('login/index');
			}
		}
	}

	/**
	 * Determine the request output format and call the required function to render
	 * 
	 * @param [string] $output_type [One of 'csv', 'xml', 'html', 'json', 'html_formatted', 'table', 'table_formatted', 'excel']
	 * 
	 * @return [null] [calls the required function to render the output in the requested format]
	 */
	function determine_output($output_type)
	{
		// NOTE - Relative URL is normally /open-audit/
		// NOTE - Relative Index is normally /open-audit/index.php/
		$temp = explode('/', base_url());
		unset($temp[0]);
		unset($temp[1]);
		unset($temp[2]);
		$this->relative_url = '/' . implode('/', $temp);
		$this->relative_index = '/' . implode('/', $temp) . 'index.php/';
		unset($temp);
		
		switch ($output_type) {
			case 'excel':
			$this->excel_report($this->data['query']);
							break;

			case 'csv':
			$this->csv_report($this->data['query']);
							break;

			case 'html':
			$this->report($this->data, 'html');
							break;

			case 'table':
			$this->report($this->data, 'table');
							break;

			case 'html_formatted':
			$this->formatted_report($this->data, 'html');
							break;

			case 'table_formatted':
			$this->formatted_report($this->data, 'table');
							break;

			case 'xml':
			$this->xml_report($this->data['query']);
							break;

			case 'json':
			$this->json_report($this->data);
							break;

			case 'rss':
			$this->rss_report($this->data['query']);
							break;

			case 'pdf':
			// TODO: need to insert the PDF function here
			$this->load->view('v_template', $this->data);
							break;

			case 'doc':
			// TODO: need to insert the doc / docx function here
			$this->load->view('v_template', $this->data);
							break;

			default:
			$this->load->view('v_template', $this->data);
							break;
		}
	}

	/**
	 * [csv_report description]
	 * 
	 * @param [type] $query [description]
	 * 
	 * @return [type]        [description]
	 */
	function csv_report($query)
	{
		$output_csv = '';
		foreach ($query AS $details) {
			if ((string)$output_csv === '') {
				foreach ($details as $attribute=>$value) {
					$output_csv .= '"' . trim($attribute) . '",';
				}
				$output_csv = mb_substr($output_csv, 0, mb_strlen($output_csv) -1);
				$output_csv .= "\n";
			}
			foreach ($details as $attribute=>$value) {
				if ((string)$attribute === 'man_ip_address') {
					$value = ip_address_from_db($value); 
				}
				$output_csv .= '"' . trim($value) . '",';
			}
			$output_csv = mb_substr($output_csv, 0, mb_strlen($output_csv) -1);
			$output_csv .= "\n";
		}
		echo $output_csv;
		if ((string)$this->config->item('download_reports') === 'download') {
			header('Content-Type: text/csv');
			header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.csv"');
			header('Cache-Control: max-age=0');
		}
	}

	/**
	 * [xml_report description]
	 * 
	 * @param [object] $query [the object, including data to be rendered]
	 * 
	 * @return [null] [Sends the requested output in the format requested]
	 */
	function xml_report($query) 
	{
		$this->load->helper('xml');
		echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n";
		echo "<items>\n";
		foreach ($query AS $details) {
			echo "\t<item>\n";
			foreach ($details as $attribute=>$value) {
				if ((string)$attribute === 'man_ip_address') {
					$value = ip_address_from_db($value); 
				}
				$value = xml_convert($value);
				echo "\t\t<" . $attribute . '>' . trim($value) . '</' . $attribute . ">\n";
			}
			echo "\t</item>\n";
		}
		echo "</items>\n";
		header('Content-Type: text/xml');
		if ((string)$this->config->item('download_reports') === 'download') {
			header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.xml"');
			header('Cache-Control: max-age=0');
		}
	}

	/**
	 * [json_report description]
	 * 
	 * @param [type] $data [description]
	 * 
	 * @return [type] [description]
	 */
	function json_report($data)
	{
		// $query = $this->data['query'];
		$query = $data['query'];
		$json_items = 'items';
		if ((string)$this->data['heading'] === 'Software Discovered 30') {
			$json_items = 'Daily Discovered Software';
		}
		if ((string)$this->data['heading'] === 'Devices Discovered 30') {
			$json_items = 'Daily Discovered Devices';
		}
		if ((string)$this->data['heading'] === 'Devices Not Seen 30') {
			$json_items = 'Devices Not Seen';
		}
		if ((string)$this->data['heading'] === 'Device Types') {
			$json_items = 'data';
		}
		if ((string)$this->data['heading'] === 'OS Types') {
			$json_items = 'data';
		}
		if ((string)$this->data['heading'] === 'Locations') {
			$json_items = 'locations';
		}
		if (count($query) > 0) {
			echo "{\"{$json_items}\": [\n";
			$items = '';
			foreach ($query AS $details) {
				$items .= "\t{\n";
				$output = '';
				foreach ($details as $attribute=>$value) {
					if ((string)$attribute === 'man_ip_address') {
						$value = ip_address_from_db($value); 
					}
					if ( strpos($value, '{"') !== FALSE) {
						$output .= "\t\t\"" . $attribute . '": ' . $value . ",\n";
					}
					else {
						$value = str_replace ('"', '\"', $value);
						// we have to filter out man_serial and serial because of a bug in PHP
						// https://bugs.php.net/bug.php?id=64695
						// I encountered a serial that was 1234E3456 - the E in the string of numbers breaks json_encode
						if (is_numeric($value) AND $attribute != 'man_serial' AND $attribute != 'serial') {
							if (php_uname('s') != 'Windows NT') {
								$output .= "\t\t\"" . $attribute . "\": " . json_encode($value, JSON_NUMERIC_CHECK) . ",\n";
							} else {
								// Windows does not like the above line (may be PHP version to old in shipped xampplite)
								// Confirmed - we ship 5.3.1 with Xampplite but JSON_NUMERIC_CHECK was introduced in 5.3.3
								$output .= "\t\t\"" . $attribute . '": ' . $value . ",\n";
							}
						}
						else { 
							$output .= "\t\t\"" . $attribute . '": '  . json_encode($value) . ",\n";
						}
					}
				}
				$items .= substr($output, 0, -2) . "\n\t},\n";
			}
			$items = substr($items, 0, -2);
			$items .= "\n]}";
			echo $items;
		}
		else {
			if ((string)$this->data['heading'] === 'Device Types' OR (string)$this->data['heading'] === 'OS Types') {
				// echo "{\"{$json_items}\": [{\"y\": 100, \"count\": 0, \"name\": \"No Devices\"}]}";
				echo '{"' . $json_items . '": [{"y": 100, "count": 0, "name": "No Devices"}]}';
			}
			else {
				// echo "{\"{$json_items}\": [{\"x\": \"" . time() . "\", \"y\": 0}]}";
				echo '{"' . $json_items . '": [{"x": "' . time() . '", "y": 0}]}';
			}
		}
		header('Content-Type: application/json');
		if ((string)$this->config->item('download_reports') === 'download') {
			header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.json"');
			header('Cache-Control: max-age=0');
		}
	}

	/**
	 * [report description]
	 * 
	 * @param object $data [description]
	 * 
	 * @param string $type [description]
	 * 
	 * @return null [description]
	 */
	function report($data, $type='html') 
	{
		if ((string)$type === 'html') {
			echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\n\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">\n";
			echo "<head>\n";
			echo "<meta http-equiv=\"Content-type\" content=\"text/html;charset=UTF-8\" />\n";
			echo '<title>' . $this->data['heading'] . "</title>\n";	
			echo "</head>\n";
			echo "<body>\n";
		}
		echo "<table id=\"report\">\n";
		echo "\t<thead>\n";
		echo "\t\t<tr>\n";
		foreach($data['column'] as $column) {
			if (($column->column_type > '') AND ((string)$column->column_name !== 'Tags')) {
				echo "\t\t\t<th>" . $column->column_name . "</th>\n";
			}
		}
		echo "\t\t</tr>\n";
		echo "\t</thead>\n";
		echo "\t<tbody>\n";
		$count = 0;
		foreach($data['query'] as $query_row) {
			$count++;
			echo "\t\t<tr>\n";
			foreach($data['column'] as $column) {
				if (($column->column_type > '') AND ((string)$column->column_name !== 'Tags')) {
					$col_var_name = $column->column_variable;

					if ((string)$column->column_align === '') {
						(string)$column->column_align = 'left';
					}
					if ( ! property_exists($query_row, 'system_id')) {
						$query_row->system_id = $count;
					}
					if ( ! isset($query_row->system_id)) {
						$query_row->system_id = $count;
					}
					if (((string)$col_var_name === 'hostname') AND ((string)$query_row->$col_var_name === '')) {
						$query_row->hostname = '-';
					}
					if (isset($query_row->$col_var_name)) {
						if ((string)$query_row->$col_var_name === '') {
							$query_row->$col_var_name = ' ';
						}
						echo "\t\t\t<td>" . htmlentities($query_row->$col_var_name, ENT_QUOTES, 'UTF-8') . "</td>\n";
					}
					else {
						echo "\t\t\t<td></td>\n";
					}
				}
			}
			echo "\n\t\t</tr>\n";
		}
		echo "\t</tbody>\n";
		echo "</table>\n";
		if ((string)$type === 'html') {
			echo "</body>\n";
			echo '</html>';
		}
		header('Content-Type: text/html');
		if ((string)$this->config->item('download_reports') === 'download') {
			header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.html"');
			header('Cache-Control: max-age=0');
		}
	}

	/**
	 * [formatted_report description]
	 * 
	 * @param object $data [description]
	 * @param string $type The type of output format
	 * 
	 * @return [type]       [description]
	 */
	function formatted_report($data, $type='html')
	{
		if ((string)$type === 'html') {
			echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\n\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">\n";
			echo "<head>\n";
			echo "<meta http-equiv=\"Content-type\" content=\"text/html;charset=UTF-8\" />\n";
			echo '<title>' . $this->data['heading'] . "</title>\n";	
			echo "</head>\n";
			echo "<body>\n";
		}
		echo "<table id=\"report\">\n";
		echo "\t<thead>\n";
		echo "\t\t<tr>\n";
		foreach($data['column'] as $column) {
			if (((string)$column->column_type !== '') AND ((string)$column->column_name !== 'Tags')) {
				if ((string)$column->column_align === 'right') {
					$style = ' padding-right: 20px;';
				}
				else {
					$style = '';
				}
				if ((string)$column->column_align === '') {
					$column->column_align = 'left';
				}
				echo '			<th style="text-align:' . $column->column_align . ';' . $style . '" data-db-column-name="' . $column->column_variable . '" data-human-column-name="' . $column->column_name . '" >' . $column->column_name . "</th>\n";
			}
		}
		echo "\t\t</tr>\n";
		echo "\t</thead>\n";
		echo "\t<tbody>\n";
		$count = 0;
		if ( ! isset($this->data['group_id'])) {
			$this->data['group_id'] = '1';
		}
		foreach($data['query'] AS $query_row) {
			$count++;
			echo "\t\t<tr>\n";
			foreach($data['column'] as $column) {
				if (((string)$column->column_type !== '') AND ((string)$column->column_name !== 'Tags')) {
					$col_var_name = $column->column_variable;
					$col_var_name_sec = $column->column_secondary;
					$col_var_name_ter = $column->column_ternary;
					$col_link = $column->column_link;
					$col_align = $column->column_align;
					$col_type = $column->column_type;
					if ((string)$column->column_align === '') {
						$column->column_align = 'left';
					}
					if ( ! property_exists($query_row, 'system_id')) {
						$query_row->system_id = $count;
					}
					if ( ! isset($query_row->system_id)) {
						$query_row->system_id = $count;
					}
					if (((string)$col_var_name === 'hostname') AND ((string)$query_row->$col_var_name === '')) {
						$query_row->hostname = '-';
					}

					switch($col_type) {	
						case '':
										break;

						/////////////////////
						case 'link':
							$col_link = str_replace('$group_id', $this->data['group_id'], $col_link);
							$temp_link = $query_row->$col_var_name_sec;
							$temp_url = $this->make_url($col_link, $temp_link);

							if ($column->column_ternary != ''
								and isset($col_var_name_ter) and isset($query_row->$col_var_name_ter)) {
								$temp_url .= '/' . $query_row->$col_var_name_ter;
							}

							echo '			<td style="text-align: ' . $col_align . ';">';
							echo '<a href="' . $temp_url . '">' . htmlentities($query_row->$col_var_name, ENT_QUOTES, 'UTF-8') . "</a></td>\n";
										break;

						/////////////////////
						case 'text':
							switch($column->column_variable)
							{
							case 'tag':
											break;

							default:
								if (isset($query_row->$col_var_name)) {
									$output = $query_row->$col_var_name;
									echo '			<td style="text-align: ' . $column->column_align . ';">';
									if (is_numeric($query_row->$col_var_name)) {
										if (strpos($column->column_variable, 'serial') === FALSE AND strpos($column->column_variable, 'model') === FALSE) { 
											$query_row->$col_var_name = number_format($query_row->$col_var_name);
										}
										// pad the output with leading zero's in a hidden span to enable sorting
										echo '<span style="display: none;">' . mb_substr('0000000000' . $output, -10) . '</span>' . $output;
									}
									else {
										if ((string)$query_row->$col_var_name === ''){
											$query_row->$col_var_name = ' ';
										}
										echo htmlentities($query_row->$col_var_name, ENT_QUOTES, 'UTF-8');
									}
									echo "</td>\n";
								}
								else {
									echo "\t\t\t<td></td>\n";
								}
											break;
							}
										break;

						/////////////////////
						case 'image':
							if ((string)$query_row->$col_var_name === '') {
								$query_row->$col_var_name = 'unknown';
							}
							if ((string)$col_align === '') {
								$col_align = 'center';
							}
							if ((string)$column->column_name === 'Icon') {
								echo '			<td style="text-align: ' . $col_align . ';"><img src="' . $this->relative_url . 'theme-tango/tango-images/16_' . str_replace(' ', '_', $query_row->$col_var_name) . '.png" style="border-width:0px;" title="' . $query_row->$col_var_name_sec . '" alt="' . $query_row->$col_var_name_sec . "\" /></td>\n";
							}
							if ((string)$column->column_name === 'Picture') {
								echo '			<td style="text-align: ' . $col_align . ';"><img src="' . $this->relative_url . 'device_images/' . $query_row->$col_var_name . '.jpg" style="border-width:0px; height:100px" title="' . $query_row->$col_var_name_sec . '" alt="' . $query_row->$col_var_name_sec . "\" /></td>\n";
							}
										break;

						/////////////////////
						case 'ip_address':
							echo '			<td style="text-align: ' . $col_align . ';"><span style="display: none;">' . $query_row->man_ip_address . '&nbsp;</span>' . ip_address_from_db($query_row->man_ip_address) . "</td>\n";
										break;

						/////////////////////
						case 'multi':
							echo '			<td style="text-align: ' . $col_align . ';">' . str_replace(',  ', ',<br />', $query_row->$col_var_name) . "</td>\n";
										break;
							
						/////////////////////
						case 'timestamp':
							echo '			<td style="text-align: ' . $col_align . ';">' . $query_row->$col_var_name . "</td>\n";
										break;
						
						/////////////////////
						case 'url':
							$href = '';
							if ((string)$col_var_name_ter !== '') {
								$image = $this->relative_url . 'theme-tango/tango-images/16_' . $col_var_name_ter . '.png';
							}
							else {
								$image = $this->relative_url . 'theme-tango/tango-images/16_browser.png';
							}
							
							if (isset($query_row->$col_var_name)) { 
								$href = str_replace('&', '&amp;', str_replace('&amp;', '&', $query_row->$col_var_name));
							}
							if (((string)$col_var_name === '') AND ($col_link > '')) {
								$href = htmlentities($col_link, ENT_QUOTES, 'UTF-8');
							}
							if ((string)$col_var_name_sec !== '') {
								$href .= htmlentities($query_row->$col_var_name_sec, ENT_QUOTES, 'UTF-8');
							}
							$href = str_replace(' ', '%20', $href);
							if ($href > '') {
								echo '			<td style="text-align: ' . $col_align . ';"><a href="' . $href . '"><img src="' . $image . '" border="0" title="" alt="" /></a></td>';
							}
							else {
								echo '			<td style="text-align: ' . $col_align . ';"></td>';
							}
										break;
							
						/////////////////////
						default:
							echo '			<td align="' . $col_align . '">' . $query_row->$col_var_name . '</td>';
										break;
					}
				}
			}
			echo "\n\t\t</tr>\n";
		}
		echo "\t</tbody>\n";
		echo "</table>\n";
		if ((string)$type === 'html') {
			echo "</body>\n";
			echo '</html>';
		}
		header('Content-Type: text/html');
		if ((string)$this->config->item('download_reports') === 'download') {
			header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.html"');
			header('Cache-Control: max-age=0');
		}
	}


	/**
	 * [excel_report description]
	 * 
	 * @param [type] $query [description]
	 * 
	 * @return [type]        [description]
	 */
	function excel_report($query)
	{
		require_once BASEPATH . '../application/libraries/phpexcel/PHPExcel/IOFactory.php';
		$obj_php_excel = new PHPExcel();
		$obj_php_excel->getProperties()->setCreator('Mark Unwin');
		$obj_php_excel->getProperties()->setLastModifiedBy('Mark Unwin');
		$obj_php_excel->getProperties()->setTitle($this->data['heading']);
		$obj_php_excel->getProperties()->setSubject($this->data['heading']);
		$obj_php_excel->getProperties()->setDescription($this->data['heading'] . ' produced from Open-AudIT');
		$obj_php_excel->getProperties()->setKeywords('');
		$obj_php_excel->getProperties()->setCategory('');
		$obj_php_excel->setActiveSheetIndex(0);
		// export the cell headers
		$count = 1;
		$excel_row = 1;

		if ( ! empty($query)) {
			foreach ($query[0] as $attribute=>$value) {
				if ($count <= 26) {
					$cell = chr(64 + $count) . $excel_row;
				}
				if (($count > 26) AND ($count <= 52)) {
					$cell = 'A' . chr(38 + $count) . $excel_row;
				}
				if (($count > 52) AND ($count <= 78)) {
					$cell = 'B' . chr(12 + $count) . $excel_row;
				}
				if (($count > 78) AND ($count <= 104)) {
					$cell = 'C' . chr(-14 + $count) . $excel_row;
				}
				if ($count > 104) {
					$cell = 'D' . chr(-40 + $count) . $excel_row;
				}
				$obj_php_excel->getActiveSheet()->setCellValue($cell, $attribute);
				$count++;
			}
			// export the table data
			$count = 1;
			$excel_row = 2;
			foreach ($query AS $details) {
				foreach ($details as $attribute=>$value) {
					if ($count <= 26) {
						$cell = chr(64 + $count) . $excel_row;
					}
					if (($count > 26) AND ($count <= 52)) {
						$cell = 'A' . chr(38 + $count) . $excel_row;
					}
					if (($count > 52) AND ($count <= 78)) {
						$cell = 'B' . chr(12 + $count) . $excel_row;
					}
					if (($count > 78) AND ($count <= 104)) {
						$cell = 'C' . chr(-14 + $count) . $excel_row;
					}
					if ($count > 104) {
						$cell = 'D' . chr(-40 + $count) . $excel_row;
					}
					$obj_php_excel->getActiveSheet()->setCellValue($cell, $value);
					$count++;
				}
				$excel_row++;
				$count = 1;
			}
		}
		else {
			// we have nothing to output
		}
		// redirect output to client browser
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.xls"');
		header('Cache-Control: max-age=0');
		$obj_writer = PHPExcel_IOFactory::createWriter($obj_php_excel, 'Excel5');
		$obj_writer->save('php://output'); 
	}

	/**
	 * [rss_report description]
	 * 
	 * @param [type] $query [description]
	 * 
	 * @return [type] [description]
	 */
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

		foreach ($query AS $details) {
			$title = '';
			$description = '';
			echo "\t\t<item>\n";
			foreach ($details as $attribute=>$value) {
				$value =  html_entity_decode($value);
				$category = '';
				
				if ((string)$attribute === 'man_ip_address') {
					$value = ip_address_from_db($value);
				}
				if ((string)$attribute === 'timestamp') {
					$temp2 = strtotime($value);
					$pub_date = date('D, d M Y h:i:s O', $temp2);
					$description .= 'PubDate: ' . $pub_date . '<br />';
				}
				if ((string)$attribute === 'alert_details') {
					$title .= $value;
					$temp1 = explode('-', $value);
					$category = trim($temp1[0]);
					$description .= 'Category: ' . $category . "<br />\n";
				}
				if ((string)$attribute === 'system_id') {
					$link = $value;
				}
				if ((string)$attribute === 'hostname') {
					$title = strtoupper($value) . ' ' . $title;
				}
				$description .= $attribute . ': ' . $value . '<br />';			
			}
			echo "\t\t\t<title><![CDATA[" . $title . "]]></title>\n";
			echo "\t\t\t<pubDate>" . $pub_date . "</pubDate>\n";
			echo "\t\t\t<link>" . site_url() . '/main/system_display/' . $link . "</link>\n";
			echo "\t\t\t<description><![CDATA[" . $description . "]]></description>\n";
			echo "\t\t\t<category>" . $category . "</category>\n";
			echo "\t\t\t<dc:creator><![CDATA[\"Mark Unwin\" <mark.unwin@gmail.com>]]></dc:creator>\n";
			echo "\t\t</item>\n";
		}
		echo "  </channel>\n</rss>\n";
		header('Content-Type: application/rss+xml');
		if ((string)$this->config->item('download_reports') === 'download') {
			header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.rss"');
			header('Cache-Control: max-age=0');
		}
	}

	/**
	 * [make_url description]
	 * 
	 * @param string $col_link         [description]
	 * @param string $col_var_name_sec [description]
	 * 
	 * @return [type]                  [description]
	 */
	function make_url($col_link = '', $col_var_name_sec = '')
	{
		if (strpos($col_link, '/') === 0) { 
			$col_link = substr($col_link, 1);
		}
		$temp_url = $this->relative_index . $col_link . $col_var_name_sec;
		if ((string)$this->data['user_full_name'] === 'Open-AudIT Enterprise') {
			if (strpos($col_link, '/') === 0) {
				$col_link = substr($col_link, 1);
			}
			$temp_url = $this->relative_index . $col_link . $col_var_name_sec;
			#$temp_url = str_replace($this->relative_index . 'main/system_display', '/omk/oae/system_summary', $temp_url);
			$temp_url = str_replace($this->relative_index . 'main/system_display', '/omk/oae/device_details', $temp_url);
			$temp_url = str_replace($this->relative_index . 'omk/oae', '/omk/oae', $temp_url);
			$temp_url = str_replace($this->relative_index . 'report/show_report', '/omk/oae/show_report', $temp_url);
			$temp_url = str_replace($this->relative_index . 'report/', '/omk/oae/show_report/', $temp_url);
		}
		return($temp_url);
	}
}
// End of file MY_Controller.php
// Location: ./core/MY_Controller.php