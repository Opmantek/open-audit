<?php
/**
 * @package OAv2
 * @author Mark Unwin
 * @version beta 8
 * @copyright Mark Unwin, 2011
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Admin_group extends MY_Controller {

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

	function activate_group()
	{
		if ($handle = opendir(BASEPATH.'../application/controllers/groups')) {
			$i = 0;
			$this->load->model("m_oa_group");
			while (false !== ($file = readdir($handle))) {
				if (mb_strpos($file, ".xml") !== false) {
					$group_name = '';
					$file_handle = fopen(BASEPATH.'../application/controllers/groups/'.$file, "rb");
					$contents = fread($file_handle, filesize(BASEPATH.'../application/controllers/groups/'.$file));
					try {
						$xml = new SimpleXMLElement($contents);
					} catch (Exception $e) {
						echo $e;
					}
					$group_name = $xml->details->group_name;
					$group_icon = $xml->details->group_icon;
					$group_description = $xml->details->group_description;
					unset($xml);
					fclose($file_handle);
					$this->data['query'][$i]['file'] = $file;
					$this->data['query'][$i]['group_name'] = $group_name;
					$this->data['query'][$i]['group_icon'] = $group_icon;
					$this->data['query'][$i]['group_description'] = $group_description;
					$this->data['query'][$i]['activated'] = $this->m_oa_group->get_group_id($group_name);
					$i++;
					// echo "$file<br />\n";
				}
			}
			closedir($handle);
		}
		$this->data['heading'] = 'Activate Groups';
		$this->data['include'] = 'v_add_groups'; 
		$this->data['sortcolumn'] = '1';
		$this->load->view('v_template', $this->data);
	}

	function action_activate_group()
	{
		$file = BASEPATH.'../application/controllers/groups/' . $this->data['id'];
		$this->load->model("m_oa_group");
		$this->load->model("m_oa_group_column");
		$file_handle = fopen($file, "rb");
		$contents = fread($file_handle, filesize($file));
		$xml = new SimpleXMLElement(utf8_encode($contents));
		foreach ($xml->children() as $child) {
			if ($child->getName() == 'details') {
				$group_id = $this->m_oa_group->import_group($child);
			}
			if ($child->getName() == 'columns') {
				$this->m_oa_group_column->import_group($child, $group_id);
			}
		}
		$this->m_oa_group->update_specific_group($group_id);
		redirect('/admin_group/activate_group');
	}
	
	function action_delete_group() {
		$this->load->model("m_oa_group");
		$this->m_oa_group->delete_group($this->data['id']);
		redirect('admin_group/activate_group');
	}	
	
	function delete_group() {
		$this->load->model("m_oa_group");
		$this->m_oa_group->delete_group($this->data['id']);
		redirect('admin_group/list_groups');
	}

	function list_groups() {
		$this->load->model("m_oa_group");
		$this->data['query'] = $this->m_oa_group->get_all_groups();
		$this->data['export_report'] = 'y';
		$this->data['heading'] = 'List Groups';
		$this->data['include'] = 'v_list_groups'; 
		$this->data['sortcolumn'] = '2';
		$this->load->view('v_template', $this->data);
	}

	function export_group()
	{
		$this->load->model("m_oa_group");
		$this->load->model("m_oa_group_column");
		$group_name = $this->m_oa_group->get_group_name($this->data['id']);
		$this->data['group_detail'] = $this->m_oa_group->get_group($this->data['id']);
		$this->data['group_columns'] = $this->m_oa_group_column->get_group_column($this->data['id']);
		#$this->load->helper('xml');
		echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n";
		echo "<group>\n";
		foreach ($this->data['group_detail'] AS $details) {
			echo "\t<details>\n";
			foreach ($details as $attribute=>$value) {
				if (($attribute != 'group_id') AND ($attribute != 'group_dynamic_select') AND ($attribute != 'group_display_sql')) {
					echo "\t\t<" . $attribute . ">" . $value . "</" . $attribute . ">\n";
				}
				if ((($attribute == 'group_dynamic_select') OR ($attribute == 'group_display_sql')) AND ($value > '')){
					if ($value > '') {
						echo "\t\t<" . $attribute . "><![CDATA[" . $value . "]]></" . $attribute . ">\n";
					} else {
						echo "\t\t<" . $attribute . ">" . $value . "</" . $attribute . ">\n";
					}
				}
			}
			echo "\t</details>\n";
		}
		echo "\t<columns>\n";
		foreach ($this->data['group_columns'] AS $details) {
			echo "\t\t<column>\n";
			foreach ($details as $attribute=>$value) {
				if (($attribute != 'column_id') && ($attribute != 'group_id')) {
					echo "\t\t\t<" . $attribute . ">" . $value . "</" . $attribute . ">\n";
				}
			}
			echo "\t\t</column>\n";
		}
		echo "\t</columns>\n";
		echo "</group>";
		$group_name = str_replace(" ", "", $group_name) . ".xml";
		header('Content-Type: text/xml');
		header('Content-Disposition: attachment;filename="' . $group_name . '"');
		header('Cache-Control: max-age=0');
	}

	function import_group()
	{
		if ( !isset($_POST['submit']) ) {
			# nothing submitted - display the form
			$this->data['heading'] = 'Import Group';
			$this->data['include'] = 'v_import_group'; 
			$this->load->view('v_template', $this->data);
		} 
		if ( isset($_POST['submit']) ) {
			# form submitted
			$this->load->model("m_oa_group");
			$this->load->model("m_oa_group_column");
			$input = html_entity_decode($_POST['form_reportXML']);
			$input = utf8_encode($input);
			$xml = new SimpleXMLElement($input);
			foreach ($xml->children() as $child) {
				if ($child->getName() == 'details') {
					$group_id = $this->m_oa_group->import_group($child);
				}
				if ($child->getName() == 'columns') {
					$this->m_oa_group_column->import_group($child, $group_id);
				}
			}
			$this->m_oa_group->update_specific_group($group_id);
			redirect('/admin_group/list_groups');
		}
	}

	function update_groups() {
		$this->load->model("m_oa_group");
		$this->m_oa_group->update_groups();
		redirect('admin_group/list_groups');
	}

	function update_group() {
		$this->load->model("m_oa_group");
		$this->m_oa_group->update_specific_group($this->data['id']);
		redirect('admin_group/list_groups');
	}

	function add_group() {
		$this->load->model("m_oa_group");
		$this->data['tables'] = $this->m_oa_group->get_tables();
		$this->data['os'] = $this->m_oa_group->get_field_values('system', 'os_name');
		$this->data['heading'] = 'Add Group';
		$this->data['include'] = 'v_add_group'; 
		$this->load->view('v_template', $this->data);
	}

	function edit_group() {
		$this->load->model("m_oa_group");
		$this->data['group'] = $this->m_oa_group->get_group($this->data['id']);
		$this->data['heading'] = 'Edit Group';
		$this->data['include'] = 'v_edit_group'; 
		$this->load->view('v_template', $this->data);
		
	}

	function process_edit_group() {
		$this->load->model("m_oa_group");
		$details = new stdclass();
		foreach ($_POST as $key => $value) {
			$details->$key = $value;
		}
		$sql = $details->group_dynamic_select;
		$sql = str_replace("\t", '', $sql);
		$sql = str_replace(array("\r", "\r\n", "\n"), '', $sql);
		#$sql = str_replace("\n", '', $sql);
		$sql = str_replace('  ', ' ', $sql);				
		$details->group_dynamic_select = stripslashes($sql);
		$original_dynamic_select = $this->m_oa_group->get_group_dynamic_select($details->group_id);
		# update the group details
		$this->m_oa_group->update_group($details);
		if ($original_dynamic_select != $details->group_dynamic_select) {
			# update the group members (only if the SQL Dynamic Select has changed
			$this->m_oa_group->update_specific_group($details->group_id);
		}
		redirect('admin_group/list_groups');
	}

	function process_add_group() {
		
		$this->load->model("m_oa_group");
		$details = new stdclass();
		foreach ($_POST as $key => $value) {
			$details->$key = $value;
		}
		$details->group_dynamic_select = '';
		if (($details->dynamic_other_eq != 'equals') AND ($details->dynamic_other_eq != 'like')) {
			echo "Must select conditional.";
		}
		if ($details->dynamic_other_eq == 'equals') {
			$condition = "=";
			$like_wildcard = '';
		}
		if ($details->dynamic_other_eq == 'like') {
			$condition = "LIKE";
			$like_wildcard = '%';
		}
		if ($details->dynamic_other_table == 'system') {
			$system_table = '';
		} else {
			$system_table = ', system';
		}
		$selection = '';
		if ($details->dynamic_other_text != '')  {
			$selection = $details->dynamic_other_text;
		}
		if ( ($details->dynamic_other_text == '') && ($details->dynamic_field_value != '') ) {
			$selection = $details->dynamic_field_value;
		}
		$details->group_dynamic_select = "SELECT distinct(system.system_id) FROM " . $details->dynamic_other_table . $system_table . " WHERE " . $details->dynamic_other_table . ".system_id = system.system_id AND " . $details->dynamic_other_field . " " . $condition . " '" . $like_wildcard . $selection . $like_wildcard ."' AND system.man_status = 'production' AND " . $details->dynamic_other_table . ".timestamp = system.timestamp";
		
		# to do - decide on parent groups
		$details->group_parent = 1;
		
		# create the group
		$return = $this->m_oa_group->insert_group($details);
		
		
		if (is_numeric($return)) {
			$details->group_id = $return;
			# populate the group columns
			$this->load->model("m_oa_group_column");
			$this->m_oa_group_column->insert_group_column($details);
			# update group members
			$this->m_oa_group->update_specific_group($return);
			$return = "Group inserted/updated successfully.";
		} else {
			$return = "Error with update/insert.";
		}
		
		quit;
		
		if (!is_numeric($return)) {
			# And now show the "list groups" page
			redirect('admin_group/list_groups');
		} else {
			# we have an error
			echo $return;
			quit;
		}
	}

}
