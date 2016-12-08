<div class="row" style="padding-bottom:5px;">
    <div class="col-md-4">
        <a href="<?php echo $this->config->config['oa_web_index']; ?>">
            <img src='<?php echo $this->config->config['oa_web_folder']; ?>/images/<?php echo htmlspecialchars($this->config->item('logo'), REPLACE_FLAGS, CHARSET)?>.png' alt='logo' style='border-width:0px;' />
        </a>
    </div>
    <div class="col-md-2"></div>

    <div class="col-md-1" style="text-align:center;">
        <?php
        if (isset($this->config->config['maps_url']) and $this->config->config['maps_url'] > "") { ?>
            Map<br /><a href="<?php echo htmlspecialchars($this->config->item('maps_url'), REPLACE_FLAGS, CHARSET); ?>"  target="_blank" ><img alt="" style="height:30px" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-opmaps.png" /></a>
        <?php
        } else { ?>
            Map<br /><a href="<?php echo $this->config->config['oa_web_index']; ?>/help/enterprise"><img alt="" style="height:30px" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-opmaps.png" /></a>
        <?php
        } ?>
    </div>

  <div class="col-md-1" style="text-align:center;">
    Dashboard<br /><a href="<?php echo htmlspecialchars($this->config->config['oae_url'], REPLACE_FLAGS, CHARSET); ?>" target="_blank"><img alt="" style="height:30px" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-oae.png" /></a>
  </div>

  <div class="col-md-1" style="text-align:center;">
    <?php
    if (isset($this->config->config['mis_url']) and $this->config->config['nmis_url'] > "") { ?>
        NMIS<br /><a href="<?php echo htmlspecialchars($this->config->item('nmis_url'), REPLACE_FLAGS, CHARSET); ?>" target="_blank"><img alt="" style="height:30px" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-nmis.png" /></a>
    <?php
    } else { ?>
        NMIS<br /><a href="https://opmantek.com" target="_blank"><img alt="" style="height:30px" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-nmis.png" /></a>
    <?php
    } ?>
  </div>

  <div class="col-md-1" style="text-align:center;">
    Version<br /><?php echo htmlspecialchars($this->config->item('display_version'), REPLACE_FLAGS, CHARSET); ?>
    <?php
    if ($this->config->item('internal_version') < $this->config->item('web_internal_version') and $this->m_users->get_user_permission('', 'database', 'u')) {
        echo '<br /><a href="'.$this->config->config['oa_web_index'].'/database?action=update" style="color: red;">upgrade</a>';
    } ?>
  </div>

    <?php
    if ($this->m_users->get_user_permission('', 'configuration', 'u') or $this->m_users->get_user_permission('', 'discoveries', 'u')) {
        ?>
        <div class="col-md-1" style="text-align:center;">
        Show<br /><button class="btn btn-default btn-sm debug">Debug</button>
        </div>
    <?php
    } ?>

    <div class="col-md-1" style="text-align:center;">
        <a href="<?php echo $this->config->config['oa_web_index']; ?>/users/<?php echo intval($this->user->id); ?>/update"><?php echo htmlspecialchars($this->user->full_name, REPLACE_FLAGS, CHARSET); ?></a><br />
        <a class="btn btn-default btn-sm" href="<?php echo $this->config->config['oa_web_index']; ?>/logon/logoff" role="button">Logout</a>
    </div>
</div>

<nav class="navbar navbar-default">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo $this->config->config['oa_web_index']; ?>">Home</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Enterprise <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href='<?php echo $this->config->config['oae_url']; ?>'><?php echo __('Dashboard')?></a></li>
                    <li><a href='<?php echo $this->config->config['oae_url']; ?>/map'><?php echo __('Map')?></a></li>
                    <li><a href='<?php echo $this->config->config['oae_url']; ?>/tasks'><?php echo __('Scheduled Tasks')?></a></li>
                    <li class="dropdown-submenu">
                        <a href='#'><?php echo __('Reports')?></a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oae_url']; ?>/summaries/Device%20Types'><?php echo __('Device Types')?></a>
                            <li><a href='<?php echo $this->config->config['oae_url']; ?>/summaries/Operating%20Systems'><?php echo __('OS Types')?></a>
                            <li><a href='<?php echo $this->config->config['oae_url']; ?>/reports?system.first_seen=liketoday_date&properties=system.id,system.icon,system.type,system.name,system.domain,system.ip,system.os_family,system.status,system.first_seen&report_name=Devices%20Discovered%20Today'><?php echo __('Devices Discovered Today')?></a>
                            <li><a href='<?php echo $this->config->config['oae_url']; ?>/reports?sub_resource=change_log&change_log.timestamp=liketoday_date&change_log.db_table=software&change_log.db_action=create&properties=system.id,system.name,change_log.details&report_name=Software%20Discovered%20Today'><?php echo __('Software Discovered Today')?></a>
                        </ul>
                    </li>
                </ul>
            </li>



            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources <span class="caret"></span></a>
              <ul class="dropdown-menu">

                <?php
                if ($this->m_users->get_user_permission('', 'connections', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Connections</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/connections'>List Connections</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'connections', 'c')) { ?>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/connections/create'>Create Connection</a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/connections/import'>Import Multiple Connections</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>

                <?php
                if ($this->m_users->get_user_permission('', 'credentials', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Credentials</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/credentials'>List Credentials</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'credentials', 'c')) { ?>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/credentials/create'>Create Credentials</a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/credentials/import'>Import Multiple Credentials</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>

                <?php
                if ($this->m_users->get_user_permission('', 'devices', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Devices</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/devices'>List Devices</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'devices', 'c')) { ?>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/admin_system/add_system'>Add Device Manually</a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/system'>Add Device (using audit result)</a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/admin_system/add_systems'>Add Multiple Devices</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>

                <?php
                if ($this->m_users->get_user_permission('', 'discoveries', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Discoveries</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/discoveries'>List Discoveries</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'devices', 'c')) { ?>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/discoveries/create'>Create Discovery</a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/discoveries/import'>Import Multiple Discoveries</a></li>
                            <!--
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/discovery/discover_active_directory'>Discover Active Directory</a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/admin/scan_ad'>Import Active Directory</a></li>
                            -->
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>

                <?php
                if ($this->m_users->get_user_permission('', 'fields', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Fields</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/fields'>List Fields</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'fields', 'c')) { ?>
                                <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/fields/create'>Create Field</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>


                <?php
                if ($this->m_users->get_user_permission('', 'groups', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Groups</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/groups'>List Groups</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'fields', 'c')) { ?>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/groups/create'>Create Group</a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/groups/import'>Import Multiple Groups</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>

                <?php
                if ($this->m_users->get_user_permission('', 'locations', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Locations</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/locations'>List Locations</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'locations', 'c')) { ?>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/locations/create'>Create Location</a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/locations/import'>Import Multiple Locations</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>

                <?php
                if ($this->m_users->get_user_permission('', 'networks', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Networks</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/networks'>List Networks</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'networks', 'c')) { ?>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/networks/create'>Create Network</a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/networks/import'>Import Multiple Networks</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>

                <?php
                if ($this->m_users->get_user_permission('', 'orgs', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Organisations</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/orgs'>List Organisations</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'orgs', 'c')) { ?>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/orgs/create'>Create Organisation</a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/orgs/import'>Import Multiple Organisations</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>

                <?php
                if ($this->m_users->get_user_permission('', 'queries', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Queries</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/queries'>List Queries</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'queries', 'c')) { ?>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/queries/create'>Create Query</a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/queries/import'>Import Multiple Queries</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>

                <?php
                if ($this->m_users->get_user_permission('', 'scripts', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Scripts</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/scripts'>List Scripts</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'scripts', 'c')) { ?>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/scripts/create'>Create Script</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>

                <?php
                if ($this->m_users->get_user_permission('', 'users', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Users</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/users'>List Users</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'users', 'c')) { ?>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/users/create'>Create User</a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/users/import'>Import Multiple Users</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>

                </ul>
            </li>

            <?php
            if (!empty($this->response->meta->collection) and $this->response->meta->collection == 'devices' and $this->response->meta->action == 'collection') { ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Queries'); ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <?php
                foreach ($this->response->included as $item) {
                    if ($item->type == 'queries') {
                        echo "<li><a href='" . $this->config->config['oa_web_index'] . "/devices?sub_resource=query&sub_resource_id=" . intval($item->id) . "'>" . __($item->attributes->name) . "</a></li>";
                    }
                }
                ?>
                </ul>
            </li>
            <?php
            } ?>


            <?php
            if ($this->m_users->get_user_permission('', 'configuration', 'r') !== false or
                $this->m_users->get_user_permission('', 'database', 'u') !== false or
                $this->m_users->get_user_permission('', 'ldap_servers', 'u') !== false or
                $this->m_users->get_user_permission('', 'logs', 'r') !== false) { ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
              <ul class="dropdown-menu">

                <?php
                if ($this->m_users->get_user_permission('', 'configuration', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Configuration</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/configuration'>List Configuration</a></li>
                        </ul>
                    </li>
                <?php
                } ?>

                <?php
                if ($this->m_users->get_user_permission('', 'database', 'u')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Database</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/database'>List Tables</a></li>
                        </ul>
                    </li>
                <?php
                } ?>

                <?php
                if ($this->m_users->get_user_permission('', 'ldap_servers', 'u')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">LDAP Servers</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/ldap_servers'>List Servers</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'ldap_servers', 'c')) { ?>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/ldap_servers/create'>Create LDAP Server</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>

                <?php
                if ($this->m_users->get_user_permission('', 'logs', 'r')) { ?>
                    <li class="dropdown-submenu">
                        <a href="#">Logs</a>
                        <ul class="dropdown-menu" style="min-width:250px;">
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/logs'>View Logs</a></li>
                            <?php if ($this->m_users->get_user_permission('', 'logs', 'd')) { ?>
                            <!--
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/#'>Purge Access Log</a></li>
                            <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/#'>Purge System Log</a></li>
                            -->
                            <?php } ?>
                        </ul>
                    </li>
                <?php
                } ?>

              </ul>
            </li>
            <?php
            } ?>

            <?php if ($this->config->config['nmis'] == 'y') { ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NMIS <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/nmis/create'><?php echo __('Import')?></a></li>
                </ul>
            </li>
            <?php } ?>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Help <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/help'><?php echo __('About')?></a></li>
                    <li><a href='https://community.opmantek.com/display/OA/Open-AudIT+FAQ'><?php echo __('FAQ')?></a></li>
                    <li><a href='https://community.opmantek.com/display/OA/Home'><?php echo __('Documentation')?></a></li>
                    <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/help/enterprise'><?php echo __('Open-AudIT Enterprise')?></a></li>
                    <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/help/support'><?php echo __('Support')?></a></li>
                    <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/help/queries'><?php echo __('Default Query List')?></a></li>
                    <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/help/groups'><?php echo __('Default Group List')?></a></li>
                    <li><a href='<?php echo $this->config->config['oa_web_index']; ?>/help/summaries'><?php echo __('Default Summary List')?></a></li>
                </ul>
            </li>

            <li class="dropdown">
            <?php if ($this->config->config['oae_license'] != 'commercial') { ?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Upgrade Licenses')?> <span class="caret"></span></a>
            <?php } else { ?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Licenses')?> <span class="caret"></span></a>
            <?php } ?>
                <ul class="dropdown-menu">
                    <?php if ($this->config->config['oae_license'] == 'none') { ?>
                        <li><a href='/omk/oae/license_free'><?php echo __('Activate Free License')?></a></li>
                    <?php } ?>
                    <li><a href='/omk/opLicense'><?php echo __('Manage Licenses')?></a></li>
                    <li><a href='#' id='buy_more_licenses'><?php echo __('Buy More Licenses')?></a></li>
                    <li><a href='/omk/opLicense'><?php echo __('Restore Licenses')?></a></li>
                </ul>
            </li>
      </ul>

      <form class="navbar-form navbar-right" action="<?php echo $this->config->config['oa_web_folder']; ?>/index.php/search" method="post">
        <div class="form-group">
          <input type="text"   id="data[attributes][value]"   name="data[attributes][value]"   class="form-control input-sm" placeholder="Name or IP">
          <input type="hidden" id="data[attributes][tables]"  name="data[attributes][tables]"  value='["system"]' />
          <input type="hidden" id="data[attributes][columns]" name="data[attributes][columns]" value='["name","ip"]' />
        </div>
        <button type="submit" class="btn btn-default btn-sm">Submit</button>
        <button type="button" class="btn btn-default btn-sm" aria-label="Left Align" data-container="body" data-toggle="popover" data-placement="left" title="Device Search" data-content="Search the following fields: name, hostname, dns_hostname, sysName, domain, dns_domain, ip.">
            <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
        </button>
      </form>
      <!--
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Export <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="?format=excel"><i class="fa fa-file-excel-o fa-fw"></i> Excel</a></li>
            <li><a href="?format=json_data"><i class="fa fa-file-o fa-fw"></i> JSON</a></li>
            <li><a href="?format=csv"><i class="fa fa-file-text-o fa-fw"></i> CSV</a></li>
            <li><a href="?format=xml"><i class="fa fa-file-code-o fa-fw"></i> XML</a></li>
            <li><a href="?format=html"><i class="fa fa-html5 fa-fw"></i> HTML</a></li>
          </ul>
        </li>
      </ul>
      -->
    </div><!-- /.navbar-collapse -->
</nav>

<?php include('include_modal.php'); ?>