<?php

$output .= "Upgrade database to 6.0.3 commenced.\n\n";

$sql = "INSERT INTO `attributes` VALUES (228,1,'devices','environment','Research and Development','rnd','system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Windows on Port 135, not working',1,'',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"135\"},{\"table\":\"devices\",\"attribute\":\"uuid\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value_type\":\"string\",\"value\":\"computer\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"value_type\":\"string\",\"value\":\"Windows\"},{\"table\":\"devices\",\"attribute\":\"description\",\"value_type\":\"string\",\"value\":\"Discovery Issue\"}]','system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Windows on port 139, not working',1,'',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"139\"},{\"table\":\"devices\",\"attribute\":\"uuid\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value_type\":\"string\",\"value\":\"computer\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"value_type\":\"string\",\"value\":\"Windows\"},{\"table\":\"devices\",\"attribute\":\"description\",\"value_type\":\"string\",\"value\":\"Discovery Issue\"}]','system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Windows on port 445, not working',1,'',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"445\"},{\"table\":\"devices\",\"attribute\":\"uuid\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"devices\",\"attribute\":\"type\",\"value\":\"computer\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"os_group\",\"value\":\"Windows\",\"value_type\":\"string\"},{\"table\":\"devices\",\"attribute\":\"description\",\"value\":\"Discovery Issue\",\"value_type\":\"string\"}]','system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Windows on port 135, working',1,'',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"135\"},{\"table\":\"devices\",\"attribute\":\"uuid\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"description\",\"operator\":\"eq\",\"value\":\"Discovery Issue\"}]','[{\"table\":\"devices\",\"attribute\":\"description\",\"value\":\"\",\"value_type\":\"string\"}]','system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Windows on port 139, working',1,'',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"139\"},{\"table\":\"devices\",\"attribute\":\"uuid\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"description\",\"operator\":\"eq\",\"value\":\"Discovery Issue\"}]','[{\"table\":\"devices\",\"attribute\":\"description\",\"value\":\"\",\"value_type\":\"string\"}]','system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Windows on port 445, working',1,'',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"445\"},{\"table\":\"devices\",\"attribute\":\"uuid\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"devices\",\"attribute\":\"description\",\"operator\":\"eq\",\"value\":\"Discovery Issue\"}]','[{\"table\":\"devices\",\"attribute\":\"description\",\"value\":\"\",\"value_type\":\"string\"}]','system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Microsoft Entra ID Connect Criticality',1,'',100,'[{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%Entra ID Connect%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"high\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Microsoft Entra ID Cloud Sync Criticality',1,'',100,'[{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%Cloud Sync%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"high\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Active Directory Certificate Services (ADCS) Criticality',1,'',100,'[{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%ADCS%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"high\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Active Directory Federation Services (ADFS) Criticality',1,'',100,'[{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%ADFS%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"high\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Backup Server Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%Backup%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"medium\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Domain Controller Criticality',1,'',100,'[{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"windows\",\"attribute\":\"domain_role\",\"operator\":\"li\",\"value\":\"%Domain Controller%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"very high\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'DNS Server Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%DNS%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"low\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Microsoft Exchange Server Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%Exchange%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"medium\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Windows Server Update Services (WSUS) Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%WSUS%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"medium\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Hyper-V Host Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%Hyper-V%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"high\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'VMware ESXi Host Criticality',1,'',100,'[{\"table\":\"devices\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"VMware ESXi\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"high\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'VMware vCenter Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%vCenter%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"high\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'SharePoint Server Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%SharePoint%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"medium\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Database Server (MySQL) Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"MySQL\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"medium\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Database Server (MariaDB) Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"MariaDB\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"medium\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Database Server (Postgresql) Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"Postgresql\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"medium\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Database Server (SQL Server) Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"MSSQLSERVER\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"medium\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Azure Document DB Key Exposure Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%Document DB%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"high\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Azure Redis Cache Key Exposure Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%Redis Cache%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"high\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (null,'Azure Storage Account Key Exposure Criticality',1,'',100,'[{\"table\":\"service\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"%Storage Account Key%\"}]','[{\"table\":\"devices\",\"attribute\":\"criticality\",\"value\":\"high\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 6.0.3 completed.\n\n";
config('Openaudit')->internal_version = 20260218;
config('Openaudit')->display_version = '6.0.3';
