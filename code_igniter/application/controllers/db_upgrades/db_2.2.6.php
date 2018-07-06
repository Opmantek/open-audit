<?php
/**
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
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
*
**/

$this->log_db('Upgrade database to 2.2.6 commenced');

# configuration item
$sql = "DELETE FROM `configuration` WHERE `name` = 'decrypt_credentials'";
$this->db->query($sql);
$this->log_db($this->db->last_query());
$sql = "INSERT INTO `configuration` VALUES (NULL,'decrypt_credentials','y','bool','y','system','2000-01-01 00:00:00','When we display or export credentials, should we decrypt them.')";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# image
$this->drop_table('image');
$sql = "CREATE TABLE `image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `system_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `filename` text NOT NULL,
  `orientation` enum ('front','rear','left','right','top','bottom','other','') NOT NULL DEFAULT 'front',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `system_id` (`system_id`),
  CONSTRAINT `image_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# widgets
$sql = "UPDATE `widgets` SET `sql` = \"SELECT if ( system.warranty_expires = '2000-01-01', 'unknown', ( if ( system.warranty_expires < DATE(NOW()), 'expired', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 730 day), '2 Years or more', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 365 day), '1-2 years', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 270 day), '270-365 days', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 180 day), '180-270 days', ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 90 day), '90-180 days', 'Less than 90 Days' ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_name`, if ( system.warranty_expires = '2000-01-01', 'system.warranty_expires=2000-01-01', ( if ( system.warranty_expires < DATE(NOW()), CONCAT('system.warranty_expires=<', DATE(NOW())), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 730 day), CONCAT('system.warranty_expires=>', DATE(NOW() + INTERVAL 730 day)), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 365 day), CONCAT('system.warranty_expires=<', DATE(NOW() + INTERVAL 730 day), '&system.warranty_expires=>', DATE(NOW() + INTERVAL 365 day)), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 270 day), CONCAT('system.warranty_expires=<', DATE(NOW() + INTERVAL 365 day), '&system.warranty_expires=>', DATE(NOW() + INTERVAL 270 day)), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 180 day), CONCAT('system.warranty_expires=<', DATE(NOW() + INTERVAL 270 day), '&system.warranty_expires=>', DATE(NOW() + INTERVAL 180 day)), ( if ( system.warranty_expires > DATE(NOW() + INTERVAL 90 day), CONCAT('system.warranty_expires=<', DATE(NOW() + INTERVAL 180 day), '&system.warranty_expires=>', DATE(NOW() + INTERVAL 90 day)), CONCAT('system.warranty_expires=<', DATE(NOW() + INTERVAL 90 day), '&system.warranty_expires=>', DATE(NOW()) ) ) ) ) ) ) ) ) ) ) ) ) ) ) AS `my_description`, count(system.id) AS `count` FROM system WHERE @filter GROUP BY `my_name` ORDER BY system.warranty_expires\" WHERE `name` = 'End of Warranty (0-2+ Years)'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

# set our versions
$sql = "UPDATE `configuration` SET `value` = '20180710' WHERE `name` = 'internal_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$sql = "UPDATE `configuration` SET `value` = '2.2.6' WHERE `name` = 'display_version'";
$this->db->query($sql);
$this->log_db($this->db->last_query());

$this->log_db("Upgrade database to 2.2.6 completed");
$this->config->config['internal_version'] = '20180710';
$this->config->config['display_version'] = '2.2.6';
