<?php
$output .= "Upgrade database to 3.2.2 commenced.\n\n";

$sql = "DELETE FROM `rules` WHERE `edited_by` = 'system'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Mac Model Match (iMac)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"iMac\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Mac Model Match (iMacPro)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"iMacPro\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Mac Model Match (MacBook)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"MacBook\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"laptop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"laptop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Mac Model Match (MacBookAir)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"MacBookAir\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"laptop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"laptop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Mac Model Match (MacBookPro)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"MacBookPro\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"laptop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"laptop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Mac Model Match (MacMini)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"Macmini\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Mac Model Match (MacPro)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"MacPro\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Mac Model Match (PowerBook)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"PowerBook\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"laptop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"laptop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Mac Model Match (PowerMac)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"PowerMac\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"desktop\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"desktop\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Mac Model Match (RackMac)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"RackMac\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"server\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"rack\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Mac Model Match (Xserve)',1,'Set the class and form factor based on the Apple model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"li\",\"value\":\"Xserve\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"server\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"rack\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Detect DD-WRT in sysDescr',1,'Set the OS group, OS Name and type based on the sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"dd-wrt\"}]','[{\"table\":\"system\",\"attribute\":\"os_group\",\"value\":\"Linux\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_name\",\"value\":\"DD-WRT\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"router\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Detect Apple Darwin in sysDescr',1,'Set the manufacturer and OS family based on the sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"Darwin Kernel Version\"}]','[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"Apple, Inc.\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_family\",\"value\":\"Apple OSX\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Detect Apple AirPort in sysDescr',1,'Set the manufacturer, model and type based on the sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"Apple AirPort\"}]','[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"Apple, Inc.\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Apple AirPort\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Detect Buffalo Terrastation in sysDescr',1,'Set the manufacturer, model and type and based on the sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"buffalo terastation\"}]','[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"Buffalo\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"nas\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"TeraStation\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Manufacturer Name TPLink',1,'Set the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"tplink\"}]','[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"TP-Link\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the manufacturer and OS group based on UBNT in model.',100,'[{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"st\",\"value\":\"UBNT \"}]','[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"Ubiquiti Networks Inc.\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"value\":\"Linux\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'VoIP Phone guess based on Nmap port',1,'Set the type based on Nmap port 5060.',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"5060\"},{\"table\":\"system\",\"attribute\":\"snmp_oid\",\"operator\":\"eq\",\"value\":\"\"},{\"table\":\"system\",\"attribute\":\"uuid\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"voip phone\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Apple IOS devices',1,'Set attributes based on Nmap port 62078.',100,'[{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"62078\"}]','[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"value\":\"Apple, Inc.\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"value\":\"Apple IOS\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_family\",\"value\":\"Apple IOS\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_name\",\"value\":\"Apple IOS\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Apple iPhone devices',1,'Set attributes based on Nmap port 62078 and hostname contains iphone.',100,'[{\"table\":\"system\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"iphone\"},{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"62078\"}]','[{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Apple iPhone\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"iphone\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Apple iPad devices',1,'Set attributes based on Nmap port 62078 and hostname contains ipad.',100,'[{\"table\":\"system\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"ipad\"},{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"62078\"}]','[{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Apple iPad\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"ipad\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Apple iPod devices',1,'Set attributes based on Nmap port 62078 and hostname contains ipod.',100,'[{\"table\":\"system\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"ipod\"},{\"table\":\"nmap\",\"attribute\":\"port\",\"operator\":\"eq\",\"value\":\"62078\"}]','[{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Apple iPod\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"ipod\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Android devices',1,'Set attributes based hostname contains android.',100,'[{\"table\":\"system\",\"attribute\":\"name\",\"operator\":\"li\",\"value\":\"android\"}]','[{\"table\":\"system\",\"attribute\":\"os_group\",\"value\":\"Android\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_family\",\"value\":\"Android\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"os_name\",\"value\":\"Android\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"android\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-LR\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-LR\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-Pro\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-Pro\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-EDU\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-EDU\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-HD\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-HD\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-Lite\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-Lite\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-LR\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-LR\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-PRO\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-Pro\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-PRO-Gen2\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-Pro gen 2\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-SHD\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-SHD\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-AC-Mesh-Pro\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-AC-Mesh-Pro\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ubiquiti Model',1,'Set the type and model based on sysDescr.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"eq\",\"value\":\"Ubiquiti Networks Inc.\"},{\"table\":\"system\",\"attribute\":\"sysDescr\",\"operator\":\"li\",\"value\":\"UAP-Outdoor\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"UniFi AP-Outdoor\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Compaq iLO',1,'Set type as a default based on OID.',90,'[{\"table\":\"system\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.232.9.4.10\"},{\"table\":\"system\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"remote access controller\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Compaq iLO\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Netonix switches default',1,'Set type as a default based on OID.',90,'[{\"table\":\"system\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.46242\"},{\"table\":\"system\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"switch\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Apresia switches default',1,'Set type as a default based on OID.',90,'[{\"table\":\"system\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.278.1.27\"},{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"switch\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Apresia\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Apresia WAPs default',1,'Set type as a default based on OID.',90,'[{\"table\":\"system\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.278.1.19\"},{\"table\":\"system\",\"attribute\":\"model\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wap\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"Apresia\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Ceragon Wireless Link default',1,'Set type as a default based on manufacturer.',80,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"Ceragon\"},{\"table\":\"system\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"wireless link\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'VSS Monitor',1,'Set model and type based on OID.',90,'[{\"table\":\"system\",\"attribute\":\"snmp_oid\",\"operator\":\"st\",\"value\":\"1.3.6.1.4.1.21671.1.2\"},{\"table\":\"system\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"network device\",\"value_type\":\"string\"},{\"table\":\"system\",\"attribute\":\"model\",\"value\":\"VSS Monitor\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Form Factor based on Manufacturer (like VMware)',1,'Set the form factor based on the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"vmware\"}]','[{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"Virtual\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Form Factor based on Manufacturer (like Parallels)',1,'Set the form factor based on the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"parallels\"}]','[{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"Virtual\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Form Factor based on Manufacturer (like Systemtechnik)',1,'Set the form factor based on the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"PCS Systemtechnik GmbH\"}]','[{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"Virtual\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Form Factor based on Manufacturer (like Virtual)',1,'Set the form factor based on the manufacturer.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"virtual\"}]','[{\"table\":\"system\",\"attribute\":\"form_factor\",\"value\":\"Virtual\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Class based on Form Factor and OS (Virtual Server)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"system\",\"attribute\":\"form_factor\",\"operator\":\"eq\",\"value\":\"Virtual\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"Windows\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"system\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"virtual server\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Class based on Form Factor and OS (Physical Server)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"system\",\"attribute\":\"form_factor\",\"operator\":\"ne\",\"value\":\"Virtual\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"Windows\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"system\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"},{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"nl\",\"value\":\"Ubiquiti\"},{\"table\":\"system\",\"attribute\":\"type\",\"operator\":\"eq\",\"value\":\"computer\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"server\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Class based on Form Factor and OS (Virtual Windows Server)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"system\",\"attribute\":\"form_factor\",\"operator\":\"eq\",\"value\":\"Virtual\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"system\",\"attribute\":\"os_name\",\"operator\":\"li\",\"value\":\"Server\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"system\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"virtual server\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Class based on Form Factor and OS (Physical Windows Server)',1,'Set the class based on the form factor and OS.',100,'[{\"table\":\"system\",\"attribute\":\"form_factor\",\"operator\":\"ne\",\"value\":\"Virtual\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"eq\",\"value\":\"Windows\"},{\"table\":\"system\",\"attribute\":\"os_name\",\"operator\":\"li\",\"value\":\"Server\"},{\"table\":\"system\",\"attribute\":\"os_group\",\"operator\":\"ne\",\"value\":\"\"},{\"table\":\"system\",\"attribute\":\"class\",\"operator\":\"eq\",\"value\":\"\"}]','[{\"table\":\"system\",\"attribute\":\"class\",\"value\":\"server\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Type based on Manufacturer and Hostname (playstation)',1,'Set the type based on the manufacturer and hostname.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"sony\"},{\"table\":\"system\",\"attribute\":\"hostname\",\"operator\":\"li\",\"value\":\"playstation\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"game console\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `rules` VALUES (NULL,'Type based on Manufacturer and DNS Hostname (playstation)',1,'Set the type based on the manufacturer and dns_hostname.',100,'[{\"table\":\"system\",\"attribute\":\"manufacturer\",\"operator\":\"li\",\"value\":\"sony\"},{\"table\":\"system\",\"attribute\":\"dns_hostname\",\"operator\":\"li\",\"value\":\"playstation\"}]','[{\"table\":\"system\",\"attribute\":\"type\",\"value\":\"game console\",\"value_type\":\"string\"}]','system','2001-01-01 00:00:00')";

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20190923' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '3.2.2' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 3.2.2 completed.\n\n";
config('Openaudit')->internal_version = 20190923;
config('Openaudit')->display_version = '3.2.2';
