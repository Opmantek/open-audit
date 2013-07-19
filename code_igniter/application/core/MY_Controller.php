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

		#todo - check this
		$this->load->model("m_oa_user");
		if ($this->m_oa_user->select_user('open-audit_enterprise')) {
			$this->data['config']->oae = 'y';
		} else {
			$this->data['config']->oae = 'n';
		}



		# turn on/off debugging from GET string
		if (((isset($loggedin)) OR ($this->session->userdata('logged_in') == TRUE)) AND 
			($this->uri->segment($this->uri->total_rsegments()-1) == 'user_debug') ) {
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


		# if GET or POST has username and password, use that to validate and deliver page and do NOT set a cookie
		if ((!isset($loggedin)) OR ($this->session->userdata('logged_in') != TRUE)) {
			if ((strpos(current_url(), 'username') !== FALSE) AND (strpos(current_url(), 'password') !== FALSE)) {
				$split_url = explode("/", current_url());
				for ($i=0; $i <= count($split_url)-1 ; $i++) {
					if (strpos($split_url[$i], 'username') !== FALSE) {
						$username = $split_url[$i+1];
					}
					if (strpos($split_url[$i], 'password') !== FALSE) {
						$password = $split_url[$i+1];
					}
				}
			}
			if (isset($_POST['username']) AND isset($_POST['password'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
			}
			if (isset($username) and $username != "" and isset($password) and $password != "") {
				$this->load->model("m_userlogin");
				if ($data = $this->m_userlogin->validate_user($username, $password)) {
					if ($data != 'fail') {
						#$this->session->set_userdata($data);
						$this->data['user_full_name'] = $data['user_full_name'];
						$this->data['user_lang'] = $data['user_lang'];
						$this->data['user_theme'] = $data['user_theme'];
						$this->data['user_admin'] = $data['user_admin'];
						$this->data['user_id'] = $data['user_id'];
						$this->data['user_debug'] = 'n';
						$loggedin = TRUE;
						#print_r($this->data);
						#exit(); # debugging only
					} else {
						# username and password are set but do not validate
						exit();       
					}
				} else {
					# username and password are set but validate_user fails for some reason
					exit();
				}
			}
		}

		$this->data['title'] = 'Open-AudIT';
		$this->data['id'] = $this->uri->segment(3, 0);

		if (($loggedin == TRUE) OR ($loggedin == 1) or ($this->session->userdata('logged_in') == TRUE)) {
			# logged in
			if (!isset($this->data['user_full_name']) or $this->data['user_full_name'] == '') { $this->data['user_full_name'] = $this->session->userdata('user_full_name'); }
			if (!isset($this->data['user_lang']) or $this->data['user_lang'] == '') { $this->data['user_lang'] = $this->session->userdata('user_lang'); }
			if (!isset($this->data['user_theme']) or $this->data['user_theme'] == '') { $this->data['user_theme'] = $this->session->userdata('user_theme'); }
			if (!isset($this->data['user_admin']) or $this->data['user_admin'] == '') { $this->data['user_admin'] = $this->session->userdata('user_admin'); }
			if (!isset($this->data['user_id']) or $this->data['user_id'] == '') { $this->data['user_id'] = $this->session->userdata('user_id'); }
			if (!isset($this->data['user_debug']) or $this->data['user_debug'] == '') { $this->data['user_debug'] = $this->session->userdata('user_debug'); }
			$this->load->helper('url');
			$this->load->helper('network');
			$this->data['apppath'] = APPPATH;
			$this->data['image_path'] = base_url() . 'theme-' . $this->data['user_theme'] . '/' . $this->data['user_theme'] . '-images/';
			$this->load->model("m_oa_report");
			$this->data['menu'] = $this->m_oa_report->list_reports_in_menu();
			set_time_limit(600);
		} else {
			# not logged in - redirect to login page.
			# login page will present form, validate credentials and set session data
			$this->data['page'] = $this->uri->segment(1, '');
			$this->data['function'] = $this->uri->segment(2, '');
			$this->data['first_attribute'] = $this->uri->segment(4, '');
			if ($this->data['page'] != '' AND $this->data['function'] != '') {
				redirect('login/index/' . $this->data['page'] . '/' . $this->data['function'] . '/' . $this->data['id'] . '/' . $this->data['first_attribute']);
			} else {
				redirect('login/index');
			}
		}
	}

	function determine_output($output_type) {
		switch ($output_type) {
			case "excel":
			$this->excel_report($this->data['query']);
			break;

			case "csv":
			$this->csv_report($this->data['query']);
			break;

			case "html":
			$this->html_report($this->data);
			break;

			case "html_formatted":
			$this->html_formatted_report($this->data);
			break;

			case "table":
			$this->table_report($this->data);
			break;

			case "table_formatted":
			$this->table_formatted_report($this->data);
			break;

			case "pdf":
			# todo - need to insert the PDF function here
			$this->load->view('v_template', $this->data);
			break;

			case "xml":
			$this->xml_report($this->data['query']);
			break;

			case "json":
			$this->json_report($this->data['query']);
			break;

			case "rss":
			$this->rss_report($this->data['query']);
			break;

			default:
			$this->load->view('v_template', $this->data);
			break;
		}
	}

	function csv_report($query) {
		$csv = "";
		foreach ($query AS $details) {
			foreach ($details as $attribute=>$value) {
				if ($attribute == "man_ip_address") {
					$value = ip_address_from_db($value); 
				}
				$value = str_replace(",", "", $value);
				$csv .= "\"" . trim($value) . "\",";
			}
			$csv = mb_substr($csv, 0, mb_strlen($csv) -1);
			$csv .= "\n";
		}
		echo $csv;
		header('Content-Type: text/csv');
		header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.csv"');
		header('Cache-Control: max-age=0');
	}

	function xml_report($query) {
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

	function json_report($query) {
		echo "{\"items\": [\n";
		$items = '';
		foreach ($query AS $details) {
			$items .= "\t{\n";
			$output = "";
			foreach ($details as $attribute=>$value) {
				if ($attribute == "man_ip_address") {
					$value = ip_address_from_db($value); 
				}
				$pos = strpos($value, "{\"");
				if ($pos !== false) {
					$output .= "\t\t\"" . $attribute . "\": " . $value . ",\n";
				} else {
					$value = str_replace ('"', '\"', $value);
					$output .= "\t\t\"" . $attribute . "\": \"" . $value . "\",\n";
				}
			}
			$items .= substr($output, 0, -2) . "\n\t},\n";
		}
		$items = substr($items, 0, -2);
		$items .= "\n";
		echo $items;
		echo "]}";
		header('Content-Type: application/json');
		header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.json"');
		header('Cache-Control: max-age=0');
	}

	function html_report($data) {
		echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\n\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">\n";
		echo "<head>\n";
		echo "<meta http-equiv=\"Content-type\" content=\"text/html;charset=UTF-8\" />\n";
		echo "<title>" . $this->data['heading'] . "</title>\n";	
		echo "</head>\n";
		echo "<body>\n";
		echo "<table id=\"report\">\n";
		echo "\t<thead>\n";
		echo "\t\t<tr>\n";
		foreach($data['column'] as $column) {
			if (($column->column_type > '') and ($column->column_name != 'Tags')) {
				echo "\t\t\t<th>" . $column->column_name . "</th>\n";
			}
		}
		echo "\t\t</tr>\n";
		echo "\t</thead>\n";
		echo "\t<tbody>\n";
		$i = 0;
		foreach($data['query'] as $row) {
			$i++;
			echo "\t\t<tr>\n";
			foreach($data['column'] as $column) {
				if (($column->column_type > '') and ($column->column_name != 'Tags')) {
					$column_variable_name = $column->column_variable;
					$column_variable_name_sec = $column->column_secondary;
					$column_variable_name_ter = $column->column_ternary;
					$column_link = $column->column_link;
					$column_align = $column->column_align;
					$column_type = $column->column_type;

					if ($column_align == '') { $column_align = 'left'; }
					if (!property_exists($row, 'system_id')) { $row->system_id = $i; }
					if (!isset($row->system_id)) { $row->system_id = $i; }
					if (($column_variable_name == 'hostname') and ($row->$column_variable_name == '')) {
						$row->hostname = "-";
					}
					if (isset($row->$column_variable_name)) {
						if ($row->$column_variable_name == ''){ $row->$column_variable_name = ' '; }
						echo "\t\t\t<td>" . htmlentities($row->$column_variable_name, ENT_QUOTES, "UTF-8") . "</td>\n";
					} else {
						echo "\t\t\t<td></td>\n";
					}
				}
			}
			echo "\n\t\t</tr>\n";
		}
		echo "\t</tbody>\n";
		echo "</table>\n";
		echo "</body>\n";
		echo "</html>";
		#header('Content-Type: text/html');
		#header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.html"');
		#header('Cache-Control: max-age=0');
	}

	function html_formatted_report($data) {
		echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\n\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">\n";
		echo "<head>\n";
		echo "<meta http-equiv=\"Content-type\" content=\"text/html;charset=UTF-8\" />\n";
		echo "<title>" . $this->data['heading'] . "</title>\n";	
		echo "</head>\n";
		echo "<body>\n";
		echo "<table id=\"report\">\n";
		echo "\t<thead>\n";
		echo "\t\t<tr>\n";
		foreach($data['column'] as $column) {
			if (($column->column_type > '') and ($column->column_name != 'Tags')) {
				if ($column->column_align == 'right') {
					$style = 'padding-right: 20px;';
				} else {
					$style = '';
				}
				echo "\t\t\t<th style=\"text-align: $column->column_align; $style\">" . $column->column_name . "</th>\n";
			}
		}
		echo "\t\t</tr>\n";
		echo "\t</thead>\n";
		echo "\t<tbody>\n";
		$i = 0;
		foreach($data['query'] as $row) {
			$i++;
			echo "\t\t<tr>\n";
			foreach($data['column'] as $column) {
				if (($column->column_type > '') and ($column->column_name != 'Tags')) {
					$column_variable_name = $column->column_variable;
					$column_variable_name_sec = $column->column_secondary;
					$column_variable_name_ter = $column->column_ternary;
					$column_link = $column->column_link;
					$column_align = $column->column_align;
					$column_type = $column->column_type;
					if ($column_align == '') { $column_align = 'left'; }
					if (!property_exists($row, 'system_id')) { $row->system_id = $i; }
					if (!isset($row->system_id)) { $row->system_id = $i; }
					if (($column_variable_name == 'hostname') and ($row->$column_variable_name == '')) {
						$row->hostname = "-";
					}

					switch($column_type) {	
						case "":
							break;

						case "link":
							$column_link = str_replace('$group_id', $this->data['group_id'], $column_link);
							echo "\t\t\t<td style=\"text-align: $column_align;\"><a href=\"" . site_url()  . $column_link . $row->$column_variable_name_sec . "\">" . htmlentities($row->$column_variable_name, ENT_QUOTES, "UTF-8") . "</a></td>\n";
							break;

						case "text":
							switch($column_variable_name)
							{
							case "tag":
								break;

							default:
								if (isset($row->$column_variable_name)) {
									$output = $row->$column_variable_name;
									if (is_numeric($output)) { 
										if ((strpos($column_variable_name, "serial") === false) and 
											(strpos($column_variable_name, "model") === false)) { $output = number_format($output); }
										echo "\t\t\t<td style=\"text-align: $column_align;\"><span style=\"display: none;\">" . mb_substr("0000000000" . $output, -10) . "</span>" . $output . "</td>\n";
									} else {
										if ($row->$column_variable_name == ''){ $row->$column_variable_name = ' '; }
										echo "\t\t\t<td style=\"text-align: $column_align;\">" . htmlentities($row->$column_variable_name, ENT_QUOTES, "UTF-8") . "</td>\n";
									}
								} else {
									echo "\t\t\t<td></td>\n";
								}
								break;
							}
							break;

						case "image":
							if ($row->$column_variable_name == "") { $row->$column_variable_name = "unknown"; }
							if ($column_align == '') {$column_align = 'center';}
							if ($column->column_name == 'Icon') {
								echo "\t\t\t<td style=\"text-align: $column_align;\"><img src=\"" . str_replace("index.php", "", site_url()) . "theme-tango/tango-images/16_" . str_replace(" ", "_", $row->$column_variable_name) . ".png\" style='border-width:0px;' title=\"" . $row->$column_variable_name_sec . "\" alt=\"" . $row->$column_variable_name_sec . "\" /></td>\n";
							}
							if ($column->column_name == 'Picture') {
								echo "\t\t\t<td style=\"text-align: $column_align;\"><img src=\"" . str_replace("index.php", "", site_url()) . "device_images/" . $row->$column_variable_name . ".jpg\" style='border-width:0px; height:100px' title=\"" . $row->$column_variable_name_sec . "\" alt=\"" . $row->$column_variable_name_sec . "\" /></td>\n";
							}
							break;

						case "ip_address":
							echo "\t\t\t<td style=\"text-align: $column_align;\"><span style=\"display: none;\">" . $row->man_ip_address . "&nbsp;</span>" . ip_address_from_db($row->man_ip_address) . "</td>\n";
							break;

						case "multi":
							echo "\t\t\t<td style=\"text-align: $column_align;\">" . str_replace(",  ", ",<br />", $row->$column_variable_name) . "</td>\n";
							break;
							
						case "timestamp":
							echo "\t\t\t<td style=\"text-align: $column_align;\">" . $row->$column_variable_name . "</td>\n";
							break;
						
						case "url":
							$href = '';
							if ($column_variable_name_ter > '') {
								$image = base_url() . "theme-tango/tango-images/16_" . $column_variable_name_ter . ".png";
							} else {
								$image = base_url() . "theme-tango/tango-images/16_browser.png";
							}
							
							if (isset($row->$column_variable_name)) { 
								$href = str_replace("&", "&amp;", str_replace("&amp;", "&", $row->$column_variable_name));
							}
							if (($column_variable_name == '') && ($column_link > '')) {
								$href = htmlentities($column_link, ENT_QUOTES, "UTF-8");
							}
							if ($column_variable_name_sec > '') {
								$href .= htmlentities($row->$column_variable_name_sec, ENT_QUOTES, "UTF-8");
							}
							$href = str_replace(" ", "%20", $href);
							if ($href > '') {
								echo "\t\t\t<td style=\"text-align: $column_align;\"><a href=\"" . $href . "\"><img src=\"" . $image . "\" border=\"0\" title=\"\" alt=\"\" /></a></td>";
							} else {
								echo "\t\t\t<td style=\"text-align: $column_align;\"></td>\n";
							}
							break;
							
						#default:
						#	echo "\t\t\t<td align=\"$column_align\">" . $row->$column_variable_name . "</td>\n";
						#	break;
					}
				}
			}
			echo "\n\t\t</tr>\n";
		}
		echo "\t</tbody>\n";
		echo "</table>\n";
		echo "</body>\n";
		echo "</html>";
		header('Content-Type: text/html');
		header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.html"');
		header('Cache-Control: max-age=0');
	}

	function table_report($data) {
		echo "<table id=\"report\">\n";
		echo "\t<thead>\n";
		echo "\t\t<tr>\n";
		foreach($data['column'] as $column) {
			if (($column->column_type > '') and ($column->column_name != 'Tags')) {
				echo "\t\t\t<th>" . $column->column_name . "</th>\n";
			}
		}
		echo "\t\t</tr>\n";
		echo "\t</thead>\n";
		echo "\t<tbody>\n";
		$i = 0;
		foreach($data['query'] as $row) {
			$i++;
			echo "\t\t<tr>\n";
			foreach($data['column'] as $column) {
				if (($column->column_type > '') and ($column->column_name != 'Tags')) {
					$column_variable_name = $column->column_variable;
					$column_variable_name_sec = $column->column_secondary;
					$column_variable_name_ter = $column->column_ternary;
					$column_link = $column->column_link;
					$column_align = $column->column_align;
					$column_type = $column->column_type;

					if ($column_align == '') { $column_align = 'left'; }
					if (!property_exists($row, 'system_id')) { $row->system_id = $i; }
					if (!isset($row->system_id)) { $row->system_id = $i; }
					if (($column_variable_name == 'hostname') and ($row->$column_variable_name == '')) {
						$row->hostname = "-";
					}
					if (isset($row->$column_variable_name)) {
						if ($row->$column_variable_name == ''){ $row->$column_variable_name = ' '; }
						echo "\t\t\t<td>" . htmlentities($row->$column_variable_name, ENT_QUOTES, "UTF-8") . "</td>\n";
					} else {
						echo "\t\t\t<td></td>\n";
					}
				}
			}
			echo "\n\t\t</tr>\n";
		}
		echo "\t</tbody>\n";
		echo "</table>\n";
	}

	function table_formatted_report($data) {
		echo "<table id=\"report\">\n";
		echo "\t<thead>\n";
		echo "\t\t<tr>\n";
		foreach($data['column'] as $column) {
			if (($column->column_type > '') and ($column->column_name != 'Tags')) {
				if ($column->column_align == 'right') {
					$style = 'padding-right: 20px;';
				} else {
					$style = '';
				}
				echo "\t\t\t<th style=\"text-align: $column->column_align; $style\">" . $column->column_name . "</th>\n";
			}
		}
		echo "\t\t</tr>\n";
		echo "\t</thead>\n";
		echo "\t<tbody>\n";
		$i = 0;
		foreach($data['query'] as $row) {
			$i++;
			echo "\t\t<tr>\n";
			foreach($data['column'] as $column) {
				if (($column->column_type > '') and ($column->column_name != 'Tags')) {
					$column_variable_name = $column->column_variable;
					$column_variable_name_sec = $column->column_secondary;
					$column_variable_name_ter = $column->column_ternary;
					$column_link = $column->column_link;
					$column_align = $column->column_align;
					$column_type = $column->column_type;
					if ($column_align == '') { $column_align = 'left'; }
					if (!property_exists($row, 'system_id')) { $row->system_id = $i; }
					if (!isset($row->system_id)) { $row->system_id = $i; }
					if (($column_variable_name == 'hostname') and ($row->$column_variable_name == '')) {
						$row->hostname = "-";
					}

					switch($column_type) {	
						case "":
							break;

						case "link":
							$column_link = str_replace('$group_id', $this->data['group_id'], $column_link);
							$url = site_url()  . $column_link . $row->$column_variable_name_sec;
							if (strpos($column_link, "/oae/") !== FALSE) {
								$url = $column_link . $row->$column_variable_name_sec . "/" . $data['first_attribute'];
							}
							
							echo "\t\t\t<td style=\"text-align: $column_align;\"><a href=\"" . $url . "\">" . htmlentities($row->$column_variable_name, ENT_QUOTES, "UTF-8") . "</a></td>\n";
							break;

						case "text":
							switch($column_variable_name)
							{
							case "tag":
								break;

							default:
								if (isset($row->$column_variable_name)) {
									$output = $row->$column_variable_name;
									if (is_numeric($output)) { 
										if ((strpos($column_variable_name, "serial") === false) and 
											(strpos($column_variable_name, "model") === false)) { $output = number_format($output); }
										echo "\t\t\t<td style=\"text-align: $column_align;\"><span style=\"display: none;\">" . mb_substr("0000000000" . $output, -10) . "</span>" . $output . "</td>\n";
									} else {
										if ($row->$column_variable_name == ''){ $row->$column_variable_name = ' '; }
										echo "\t\t\t<td style=\"text-align: $column_align;\">" . htmlentities($row->$column_variable_name, ENT_QUOTES, "UTF-8") . "</td>\n";
									}
								} else {
									echo "\t\t\t<td></td>\n";
								}
								break;
							}
							break;

						case "image":
							if ($row->$column_variable_name == "") { $row->$column_variable_name = "unknown"; }
							if ($column_align == '') {$column_align = 'center';}
							if ($column->column_name == 'Icon') {
								echo "\t\t\t<td style=\"text-align: $column_align;\"><img src=\"" . str_replace("index.php", "", site_url()) . "theme-tango/tango-images/16_" . str_replace(" ", "_", $row->$column_variable_name) . ".png\" style='border-width:0px;' title=\"" . $row->$column_variable_name_sec . "\" alt=\"" . $row->$column_variable_name_sec . "\" /></td>\n";
							}
							if ($column->column_name == 'Picture') {
								echo "\t\t\t<td style=\"text-align: $column_align;\"><img src=\"" . str_replace("index.php", "", site_url()) . "device_images/" . $row->$column_variable_name . ".jpg\" style='border-width:0px; height:100px' title=\"" . $row->$column_variable_name_sec . "\" alt=\"" . $row->$column_variable_name_sec . "\" /></td>\n";
							}
							break;

						case "ip_address":
							echo "\t\t\t<td style=\"text-align: $column_align;\"><span style=\"display: none;\">" . $row->man_ip_address . "&nbsp;</span>" . ip_address_from_db($row->man_ip_address) . "</td>\n";
							break;

						case "multi":
							echo "\t\t\t<td style=\"text-align: $column_align;\">" . str_replace(",  ", ",<br />", $row->$column_variable_name) . "</td>\n";
							break;
							
						case "timestamp":
							echo "\t\t\t<td style=\"text-align: $column_align;\">" . $row->$column_variable_name . "</td>\n";
							break;
						
						case "url":
							$href = '';
							if ($column_variable_name_ter > '') {
								$image = base_url() . "theme-tango/tango-images/16_" . $column_variable_name_ter . ".png";
							} else {
								$image = base_url() . "theme-tango/tango-images/16_browser.png";
							}
							
							if (isset($row->$column_variable_name)) { 
								$href = str_replace("&", "&amp;", str_replace("&amp;", "&", $row->$column_variable_name));
							}
							if (($column_variable_name == '') && ($column_link > '')) {
								$href = htmlentities($column_link, ENT_QUOTES, "UTF-8");
							}
							if ($column_variable_name_sec > '') {
								$href .= htmlentities($row->$column_variable_name_sec, ENT_QUOTES, "UTF-8");
							}
							$href = str_replace(" ", "%20", $href);
							if ($href > '') {
								echo "\t\t\t<td style=\"text-align: $column_align;\"><a href=\"" . $href . "\"><img src=\"" . $image . "\" border=\"0\" title=\"\" alt=\"\" /></a></td>";
							} else {
								echo "\t\t\t<td style=\"text-align: $column_align;\"></td>\n";
							}
							break;
							
						#default:
						#	echo "\t\t\t<td align=\"$column_align\">" . $row->$column_variable_name . "</td>\n";
						#	break;
					}
				}
			}
			echo "\n\t\t</tr>\n";
		}
		echo "\t</tbody>\n";
		echo "</table>\n";
	}

	function excel_report($query)
	{
		require_once BASEPATH . '../application/libraries/phpexcel/PHPExcel/IOFactory.php';
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setCreator("Mark Unwin");
		$objPHPExcel->getProperties()->setLastModifiedBy("Mark Unwin");
		$objPHPExcel->getProperties()->setTitle($this->data['heading']);
		$objPHPExcel->getProperties()->setSubject($this->data['heading']);
		$objPHPExcel->getProperties()->setDescription($this->data['heading'] . " produced from Open-AudIT");
		$objPHPExcel->getProperties()->setKeywords("");
		$objPHPExcel->getProperties()->setCategory("");
		$objPHPExcel->setActiveSheetIndex(0);
		# export the cell headers
		$count = 1;
		$row = 1;

		if (!empty($query)) {
	 		foreach ($query[0] as $attribute=>$value) {
				if ($count <= 26) {
					$cell = chr(64 + $count) . $row;
				}
				if (($count > 26) and ($count <= 52)) {
					$cell = "A" . chr(38 + $count) . $row;
				}
				if (($count > 52) and ($count <= 78)) {
					$cell = "B" . chr(12 + $count) . $row;
				}
				if (($count > 78) and ($count <= 104)) {
					$cell = "C" . chr(-14 + $count) . $row;
				}
				if ($count > 104) {
					$cell = "D" . chr(-40 + $count) . $row;
				}
				$objPHPExcel->getActiveSheet()->setCellValue($cell, $attribute);
				$count++;
			}
			# export the table data
			$count = 1;
			$row = 2;
			foreach ($query AS $details) {
				foreach ($details as $attribute=>$value) {
					if ($count <= 26) {
						$cell = chr(64 + $count) . $row;
					}
					if (($count > 26) and ($count <= 52)) {
						$cell = "A" . chr(38 + $count) . $row;
					}
					if (($count > 52) and ($count <= 78)) {
						$cell = "B" . chr(12 + $count) . $row;
					}
					if (($count > 78) and ($count <= 104)) {
						$cell = "C" . chr(-14 + $count) . $row;
					}
					if ($count > 104) {
						$cell = "D" . chr(-40 + $count) . $row;
					}
					$objPHPExcel->getActiveSheet()->setCellValue($cell, $value);
					$count++;
				}
				$row++;
				$count = 1;
			}
		} else {
			# we have nothing to output
		}
		// redirect output to client browser
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.xls"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output'); 
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
				$category = "";
				
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
		header('Content-Type: text/xml');
		header('Content-Disposition: attachment;filename="' . $this->data['heading'] . '.rss"');
		header('Cache-Control: max-age=0');
	}
}
