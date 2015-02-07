<?php 
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
?>
<div id="menu" style="float: left; width: 100%; ">
<ul id="nav">
	<li><a href='<?php echo base_url()?>index.php/main/list_groups'><?php echo mb_strtoupper(__('Home'))?></a></li>
	<?php
	# add any custom reports to the $menu array
	# leave the ID blank
	# the name will have spaces converted to underscores and that function from controllers/report.php will be called
	# reset the new_object each time - just copy/paste the four lines below for each report
	$new_object = new stdClass();
	$new_object->report_id = '';
	$new_object->report_name = 'Partition Alerts';
	$menu[] = $new_object;
	
	if ($this->user->user_sam > '0') { 
		$new_object = new stdClass();
		$new_object->report_id = '';
		$new_object->report_name = 'Software Licensing';
		$menu[] = $new_object;
	}

	#a sort function for $menuso the items added above are in their correct alphabetical order
	function cmp($a, $b)
	{
		return strcmp($a->report_name, $b->report_name);
	}
	
	#use the function above
	usort($menu, "cmp");
	
	if (isset($group_id)){
		echo "<li><a href='" . base_url() . "index.php/main/list_devices/" . $group_id . "'>" . mb_strtoupper(__('Queries')) . "</a>\n";
		echo "<ul>\n";
		echo "<li style=\"width:200px;\"><a href='" . base_url() . "index.php/main/list_devices/" . $group_id . "'>List Items</a></li>\n";
		foreach ($menu as $report):
			if ($report->report_id > '') {
				echo "<li style=\"width:200px;\"><a href='" . base_url() . "index.php/report/show_report/" . $report->report_id . "/" . $group_id . "'>" .  $report->report_name . "</a></li>\n";
			} else {
				echo "<li style=\"width:200px;\"><a href='" . base_url() . "index.php/report/" . strtolower(str_replace(" ", "_", $report->report_name)) . "/" . $group_id . "'>" .  $report->report_name . "</a></li>\n";
			}
		endforeach;
		echo "</ul>\n";
	echo "</li>\n";
	} ?>
	<!--
	<li><a href='#'><?php echo mb_strtoupper(__('Changes'))?></a>
		<ul>
			<li><a href='<?php echo base_url()?>index.php/change/add_change'><?php echo __('Add a Change')?></a></li>
		</ul>
	</li>
	-->
	<!--
	<?php
	if ($this->user->user_sam > '2') { ?>
		<li><a href='#'><?php echo mb_strtoupper(__('Licensing'))?></a>
			<ul>
				<li><a href='<?php echo base_url()?>index.php/admin_sam/add_software_definition'><?php echo __('Add a Package')?></a></li>
			</ul>
		</li>
	<?php } ?>
	-->
	<?php
	if ($this->user->user_admin == 'y') { ?>
	<!-- // Only display the below code if the logged in user is an Admin -->
	<li><a href='#'><?php echo mb_strtoupper(__('Admin'))?></a>
		<ul>

			<li><a href='javascript:void(0)'><?php echo __('Additional Fields')?></a>
				<ul>
					<li><a href='<?php echo base_url()?>index.php/admin_field/list_fields'><?php echo __('List Fields')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_field/add_field'><?php echo __('Add Field')?></a></li>
				</ul>
			</li>

			<li><a href='<?php echo base_url()?>index.php/admin/edit_config'><?php echo __('Config')?></a></li>
			
			<li><a href='javascript:void(0)'><?php echo __('Connections')?></a>
				<ul>
					<li><a href='<?php echo base_url()?>index.php/admin_connection/list_connections'><?php echo __('List Connections')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_connection/add_connection'><?php echo __('Add Connection')?></a></li>
					<!-- <li><a href='<?php echo base_url()?>index.php/admin_connection/add_connections'><?php echo __('Add Multiple Connections')?></a></li> -->
				</ul>
			</li>
			
			<li><a href='javascript:void(0)'><?php echo __('Database')?></a>
				<ul>
					<!-- 
					# this will only work under Linux
					<li><a href='<?php echo base_url()?>index.php/admin_db/restore'><?php echo __('Restore Database')?></a></li>
					-->
					<?php
					if (php_uname('s') == 'Linux') {
						echo "					<li><a href='" . base_url() . "index.php/admin_db/backup'>" . __('Backup the Database') . "</a></li>\n";
					}
					?>
					<li><a href='<?php echo base_url()?>index.php/admin_db/export_table'><?php echo __('Export a Database Table')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_db/maintenance'><?php echo __('Database Maintenance')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin/reset_icons'><?php echo __('Reset Device Icons')?></a></li>
				</ul>
			</li>

			<li><a href='javascript:void(0)'><?php echo __('Devices')?></a>
				<ul>
					<li><a href='<?php echo base_url()?>index.php/admin_system/add_system'><?php echo __('Add a Device (manually)')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/system'><?php echo __('Add a Computer (using an audit result)')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_system/add_systems'><?php echo __('Add Multiple Devices (using a spreadsheet)')?></a></li>
				</ul>
			</li>

			<li><a href='javascript:void(0)'><?php echo __('Discovery')?></a>
				<ul>
					<li><a href='<?php echo base_url()?>index.php/discovery/discover_subnet/windows'><?php echo __('Discover a Windows computer')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/discovery/discover_subnet/linux'><?php echo __('Discover a device using SSH')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/discovery/discover_subnet/snmp'><?php echo __('Discover a device using SNMP')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/discovery/discover_active_directory'><?php echo __('Discover Active Directory')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin/scan_ad'><?php echo __('Import Active Directory')?></a></li>
				</ul>
			</li>

			<li><a href='javascript:void(0)'><?php echo __('Groups')?></a>
				<ul>
					<li><a href='<?php echo base_url()?>index.php/admin_group/list_groups'><?php echo __('List Groups')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_group/add_group'><?php echo __('Add Group')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_group/import_group'><?php echo __('Import Group')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_group/activate_group'><?php echo __('Activate Group')?></a></li>
				</ul>
			</li>

			<li><a href='javascript:void(0)'><?php echo __('Locations')?></a>
				<ul>
					<li><a href='<?php echo base_url()?>index.php/admin_location/list_locations'><?php echo __('List Locations')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_location/add_location'><?php echo __('Add Location')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_location/add_locations'><?php echo __('Add Multiple Locations')?></a></li>
				</ul>
			</li>
			<li><a href='javascript:void(0)'><?php echo __('Logs')?></a>
				<ul>
					<li><a href='<?php echo base_url()?>index.php/admin/view_log/access'><?php echo __('View Access Log')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin/view_log/system'><?php echo __('View System Log')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin/purge_log/access'><?php echo __('Purge Access Log')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin/purge_log/system'><?php echo __('Purge System Log')?></a></li>
				</ul>
			</li>
			<li><a href='javascript:void(0)'><?php echo __('Organisations')?></a>
				<ul>
					<li><a href='<?php echo base_url()?>index.php/admin_org/list_orgs'><?php echo __('List Organisations')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_org/add_org'><?php echo __('Add Organisation')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_org/add_orgs'><?php echo __('Add Multiple Organisations')?></a></li>
				</ul>
			</li>
			
			<li><a href='javascript:void(0)'><?php echo __('Queries')?></a>
				<ul>
					<li><a href='<?php echo base_url()?>index.php/admin_report/list_reports'><?php echo __('List Queries')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_report/activate_report'><?php echo __('Activate Query')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_report/import_report'><?php echo __('Import Query')?></a></li>
				</ul>
			</li>

			<li><a href='javascript:void(0)'><?php echo __('Scripts')?></a>
				<ul>
					<li><a href='<?php echo base_url()?>index.php/admin/add_script_audit_windows'><?php echo __('Create Audit Windows')?></a></li>
				</ul>
			</li>

			<li><a href='javascript:void(0)'><?php echo __('Users')?></a>
				<ul>
					<li><a href='<?php echo base_url()?>index.php/admin_user/list_users'><?php echo __('List Users')?></a></li>
					<li><a href='<?php echo base_url()?>index.php/admin_user/add_user'><?php echo __('Add a User')?></a></li>
				</ul>
			</li>
		</ul>
	</li>
	<?php
	}
	?>

	<?php
	if (($this->user->user_admin == 'y') and (isset($this->config->config['nmis']) and $this->config->config['nmis'] == 'y')){ ?>
	<!-- // Only display the below code if the logged in user is an Admin -->
	<li><a href='#'><?php echo mb_strtoupper(__('NMIS'))?></a>
		<ul>
			<li><a href='<?php echo base_url()?>index.php/admin/import_nmis'><?php echo __('Import')?></a></li>
			<?php if (isset($group_id)){ ?>
			<li><a href='<?php echo base_url()?>index.php/admin/export_nmis/<?php echo $group_id; ?>'><?php echo __('Export')?></a></li>
			<?php } ?>
		</ul>
	</li>
	<?php
	}
	?>

	<li><a href='javascript:void(0)'><?php echo mb_strtoupper(__('Help'))?></a>
		<ul>
			<li><a href='<?php echo base_url()?>index.php/main/help_about'><?php echo __('About')?></a></li>
			<li><a href='https://community.opmantek.com/display/OA/Open-AudIT+FAQ'><?php echo __('FAQ')?></a></li>
			<li><a href='https://community.opmantek.com/display/OA/Home'><?php echo __('Documentation')?></a></li>
			<li><a href='<?php echo base_url()?>index.php/main/help_statistics'><?php echo __('Statistics')?></a></li>
			<li><a href='<?php echo base_url()?>index.php/main/help_support'><?php echo __('Support')?></a></li>
			<!-- 
			<li><a href='javascript:void(0)'><?php echo __('Support')?></a></li>
			-->
		</ul>
	</li>

	<?php if ($include == 'v_main') { ?>
		<li style="float:right; position:relative; padding-right:4px;">
			<form name="search_form" action="<?php echo base_url()?>index.php/main/search_device" method="post">
				<table>
					<tr>
						<td><input type="text" name="search"/></td>
						<td><input type="submit" value="Find Device" /></td>
					</tr>
				</table>
			</form>
		</li>
	<?php } ?>


	<?php if (isset($export_report)) { ?>
		<?php if (isset($group_id)) { ?>
			<?php if (($this->config->config['non_admin_search'] == 'y') or ($this->user->user_admin == 'y')) { ?>
				<li style="float:right; position:relative; padding-right:4px;">
					<form name="search_form" action="<?php echo base_url()?>index.php/main/search/<?php echo $group_id; ?>/" method="post">
						<table>
							<tr>
								<td><input type="text" name="search"/></td>
								<td><input type="submit" value="Search Attributes" /></td>
							</tr>
						</table>
					</form>
				</li>
			<?php } ?>
		<?php } ?>
		<?php
		// see if this is a report with a timestamp column - if so, display an RSS icon 
		if (isset($column)){
			$hit = 'n';
			foreach($column as $col) {
				if (strpos($col->column_variable, "timestamp") !== false) {
					$hit = 'y';
				}
			}
			if ($hit == 'y'){ ?>
				<li style="float: right; position: relative; top:-1px; padding-right: 6px;"><a href="<?php echo base_url() . 'index.php/' . uri_string(); ?>/username/<?php echo $this->user->user_name; ?>/password/YOUR_PASSWORD/rss"><img src="<?php echo base_url()?>theme-<?php echo $this->user->user_theme;?>/<?php echo $this->user->user_theme;?>-images/16_rss.png" alt="RSS Link" title="RSS Link"/></a></li>
			<?php } 
		} ?>
		<li style="float: right; position: relative; top:-1px; padding-right: 6px;"><a href="<?php echo base_url() . 'index.php/' . uri_string(); ?>/xml"><img src="<?php echo base_url()?>theme-<?php echo $this->user->user_theme;?>/<?php echo $this->user->user_theme;?>-images/16_text-x-generic-template.png" alt="Export as XML" title="Export as XML"/></a></li>
		<li style="float: right; position: relative; top:-1px; padding-right: 3px;"><a href="<?php echo base_url() . 'index.php/' . uri_string(); ?>/html"><img src="<?php echo base_url()?>theme-<?php echo $this->user->user_theme;?>/<?php echo $this->user->user_theme;?>-images/16_web.png" alt="Export as HTML" title="Export as HTML"/></a></li>
		<li style="float: right; position: relative; top:-1px; padding-right: 3px;"><a href="<?php echo base_url() . 'index.php/' . uri_string(); ?>/csv"><img src="<?php echo base_url()?>theme-<?php echo $this->user->user_theme;?>/<?php echo $this->user->user_theme;?>-images/16_csv.png" alt="Export as CSV" title="Export as CSV"/></a></li>
		<li style="float: right; position: relative; top:-1px; padding-right: 3px;"><a href="<?php echo base_url() . 'index.php/' . uri_string(); ?>/json"><img src="<?php echo base_url()?>theme-<?php echo $this->user->user_theme;?>/<?php echo $this->user->user_theme;?>-images/16_json.png" alt="Export as JSON" title="Export as JSON"/></a></li>
		<li style="float: right; position: relative; top:-1px; padding-right: 3px;"><a href="<?php echo base_url() . 'index.php/' . uri_string(); ?>/excel"><img src="<?php echo base_url()?>theme-<?php echo $this->user->user_theme;?>/<?php echo $this->user->user_theme;?>-images/16_excel.png" alt="Export as Excel" title="Export as Excel"/></a></li>
	<?php } ?>
</ul>
</div>
<br />
<script type="text/javascript">
	$(function() {
		$('#nav').droppy({speed: 60});
	});
</script>
