<?php

$output .= "Upgrade database to 6.0.0 commenced.\n\n";

helper('device');

if (!$db->fieldExists('version_raw', 'software')) {
    $sql = "ALTER TABLE `software` ADD `version_raw` varchar(255) NOT NULL DEFAULT '' AFTER `version_padded`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}
if (!$db->fieldExists('certificate_file', 'server_item')) {
    $sql = "ALTER TABLE `server_item` ADD `certificate_file` varchar(200) NOT NULL DEFAULT '' AFTER `log_rotation`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('certificate_name', 'server_item')) {
    $sql = "ALTER TABLE `server_item` ADD `certificate_name` varchar(200) NOT NULL DEFAULT '' AFTER `certificate_file`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('issuer_name', 'certificate')) {
    $sql = "ALTER TABLE `certificate` ADD `issuer_name` varchar(200) NOT NULL DEFAULT '' AFTER `issuer`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('common_name', 'certificate')) {
    $sql = "ALTER TABLE `certificate` ADD `common_name` varchar(200) NOT NULL DEFAULT '' AFTER `version`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('subject_key_ident', 'certificate')) {
    $sql = "ALTER TABLE `certificate` ADD `subject_key_ident` varchar(200) NOT NULL DEFAULT '' AFTER `common_name`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('authority_key_ident', 'certificate')) {
    $sql = "ALTER TABLE `certificate` ADD `authority_key_ident` varchar(200) NOT NULL DEFAULT '' AFTER `subject_key_ident`";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DROP TABLE IF EXISTS `certificates`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `certificates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `serial` varchar(100) NOT NULL DEFAULT '',
  `active` enum('y','n','') NOT NULL DEFAULT '',
  `auto_renew` enum('y','n','') NOT NULL DEFAULT '',
  `managed_by` varchar(100) NOT NULL DEFAULT '',
  `expire_date` date NOT NULL DEFAULT '2000-01-01',
  `action_date` date NOT NULL DEFAULT '2000-01-01',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `standards_results`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `standards_policies`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `standards`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `standards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `type` varchar(200) NOT NULL DEFAULT '',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`),
  CONSTRAINT `standards_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `standards_results` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `standard_id` int(10) unsigned NOT NULL DEFAULT '1',
  `policy_id` int(10) unsigned NOT NULL DEFAULT '1',
  `applied` varchar(200) NOT NULL DEFAULT '',
  `maturity_score` decimal(1,1) NOT NULL DEFAULT '0.0',
  `maturity_level` enum('incomplete','performed','managed','established','predictable','optimized','') NOT NULL DEFAULT '',
  `legal_requirements` text NOT NULL,
  `contractual_obligations` text NOT NULL,
  `business_requirements` text NOT NULL,
  `best_practises` text NOT NULL,
  `risk_assesment_result` text NOT NULL,
  `implementation_notes` text NOT NULL,
  `exclusion_reasons` text NOT NULL,
  `responsibility` text NOT NULL,
  `attachments` text NOT NULL,
  `links` text NOT NULL,
  `improvement_opportunities` text NOT NULL,
  `result` enum('fail', 'other', 'excluded', 'not applicable', 'pass', '') NOT NULL DEFAULT '',
  `notes` longtext NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `standard_id` (`standard_id`),
  CONSTRAINT `standards_results_standard_id` FOREIGN KEY (`standard_id`) REFERENCES `standards` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `standards_policies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL DEFAULT '',
  `class` varchar(200) NOT NULL DEFAULT '',
  `section` varchar(200) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());



$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.1', 'Policies for information security', 'Information security policy and topic-specific policies shall be de-fined, approved by management, published, communicated to and acknowledged by relevant personnel and relevant interested parties and reviewed at planned intervals and if significant changes occur.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.2', 'Review of the policies for information security ', 'Information security roles and responsibilities shall be defined and allocated according to the organization needs.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.3', 'Segregation of duties', 'Conflicting duties and conflicting areas of responsibility shall be segregated.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.4', 'Management responsibilities', 'Management shall require all personnel to apply information security in accordance with the established information security policy, top- ic-specific policies and procedures of the organization.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.5', 'Contact with authorities', 'The organization shall establish and maintain contact with relevant authorities.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.6', 'Contact with special interest groups', 'The organization shall establish and maintain contact with special interest groups or other specialist security forums and professional associations.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.7', 'Threat intelligence', 'Infrormation relating to information security threats shall be collected and analysed to produce threat intelligence.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.8', 'Information security in project management', 'Information security shall be integrated into project management.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.9', 'Inventory of information and other associated assets', 'And inventory of information and other associated assets, including owners, shall be developed and maintained', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.10', 'Acceptable use of information and other associated assets', 'Rules for the accepable use and procedures for handling information and other associated assets shall be identified, documented and implemented', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.11', 'Return of assets', 'Personnel and other interested parties as appropriate shall return all the organization\'s assets in their possession upon change or termination of their employment, contract or agreement', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.12', 'Classification of Information', 'Information shall be classified according to the information security needs of the organization based on confidentiality, integrity, availability and relevant interested party requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.13', 'Labelling of information', 'An appropriate set of procedures for information labelling shall be developea and Implemented in accordance wit the Information clas sification scheme adopted by the organization', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.14', 'information transfer', 'Information transfer rules, procedures, or agreements shall be in place for all types of transter facilities within the organization and between the organization and other parties', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.15', 'Access control', 'Rules to control physical and logical access to information and other associated assets shall be established and implemented based on business and information security requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.16', 'Identity management', 'The full life cycle of identitites shall be managed', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.17', 'Authentication Information', 'Allocation and management of authentication information shall be controlled by a management process, including advising personnel on appropriate handling of authentication information', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.18', 'Access rights', 'Access rights to information and other associated assets shall be provisioned. reviewed, modified and removed in accordance with the organization\'s topic-specific policy on and rules for access control', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.19', 'Information security in supplier relationships', 'Processes and procedures shall be defined and implemented to manage the information security risks associated with the use of suppliers products or services.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.20', 'Addressing information security within supplier agreements', 'Relevant information security requirements shall be established and agreed with each supplier based on the type of supplier relationship', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.21', 'Managing information security in the information and communication technology(ICT) supply chain', 'Processes and procedures shall be defined and implemented to manage the information security risks associated with the ICT products and services supply chain', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.22', 'Monitoring, review and change management of supplier services', 'The organization shall regularly monitor, review, evaluate and manage change in supplier information security practices and service delivery.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.23', 'Information security for use of cloud services', 'Processes for acquisition, use, management and exit from cloud services shall be established in accordance with the organization\'s information security requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.24', 'Information security incident management planning and preparation', 'The organization shall plan and prepare for managing information security incidents by defining, establishing and communicating information security incident management processes, roles and responsibilities.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.25', 'Assessment and decision on information security events', 'The organization shall assess information security events and decide if they are to be categorized as information security incidents.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.26', 'Response to information security incidents', 'Information security incidents shall be responded to in accordance with the documented procedures', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.27', 'Learning from information security incidents', 'Knowledge gained from information security incidents shall be used to strangthen and improve the information security controls.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.28', 'Collection of evidence', 'The organization shall establish and implement procedures for the identification, collection, acquisition and preservation of evidence related to information security events', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.29', 'Information security during disruption', 'The organization shall plan how to maintain information security at an appropriate level during disruption', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.30', 'ICT readiness for business continuity', 'ICT readiness shall be planned, implemented, maintained and tested based on business continuity objectives and ICT continuity requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.31', 'Legal, statutory, regulatory and contractual requirements', 'Legal, statutory, regulatory and contractual requirements relevant to information security and the organization;s approach to meet these requirements shall be identified, documented and kept up to date.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.32', 'Intellectual property rights', 'The organization shall implement appropriate procedures to protect intellectual property rights.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.33', 'Protection of records', 'Records shall be protected from loss, destruction, falsification, unauthorized access and unauthorized release.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.34', 'Privacy and protetion of personal identifiable information (PII)', 'The organization shall identify and meet the requirements regarding the preservation of privacy and protection of PII according to applicable laes and regulations and contractual requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.35', 'Independent review of information security', 'The organization\'s approach to managing information security and its implementation including people, processes and technologies shall be reviewed independently at planned intervals, or when significant changes occur.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.36', 'Compliance with policies, rules and standards for information security', 'Compliance with the organization\'s information security policy, topic-specific policies, rules and standards shall be regularly reviewed.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Organizational controls', '5.37', 'Documented operating procedures', 'Operating procedures for information processing facilities shall be documented and made available to personnel who need them.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.1', 'Screening', 'Background verification checks on all candidates to become personnel shall be carried out prior to joining the organization and on an ongoing basis taking into consideration applicable laws, regulations and ethics and be proportional to the business requirements, the classification of the information to be accessed and perceived risks.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.2', 'Terms and conditions of employment', 'The employment contractual agreements shall state the personnel\'s and the organization\'s responsibilities for information security.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.3', 'Information security awaremess education and training', 'Personnel of the organization and relevant interested parties shall receive appropriate information security awareness , education and training and regular updates of the organization\'s information security policy, topic-specific policies and procedures, as relevant for their job function.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.4', 'Disciplinary process', 'A disciplinary process shall be formalized and communicated to take actions against personnel and toher relevant interested parties who have committed and information security policy violation.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.5', 'Responsibilities after termination or change of employment', 'Information security responsibilities and duties that remain valid after termination or change of employment shall be defined, enforced and communicated to relevant personnel and other interested parties.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.6', 'Condifentiality or non-disclosure agreements', 'Confidentiality or non-disclosure agreements reflecting the organization\'s needs for the protection of information shall be identified, documented, regularly reviewed and signed by personnel and other relevant interested parites.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.7', 'Remote working', 'Security measures shall be implemented when personnel are working remotely to protect information accessed, processed or stored outside the organization\'s premises.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'People controls', '6.8', 'Information security event reporting', 'The organization shall provide mecanism for personnel to report observed or suspected information security events through appropriate channels in a timely manner.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.1', 'Physical security perimeters', 'Security peimeters shall be defined and used to protect areas that contain information and other associated assets.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.2', 'Physical entry', 'Secure areas shall be protected by appropriate entry controls and access points.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.3', 'Securing offices, rooms and facilities', 'Physical security for offices, rooms and facilities shall be designed and implemented.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.4', 'Physical security monitoring', 'Premises shall be continuously monitored for unauthorized physical access.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.5', 'Protecting against physical and environmental threats', 'Protection against physical and environmental threats, such as natural disasters and other intentional or inuntentional physical threats to infrastructure shall be designed and implemented.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.6', 'Working in secure areas', 'Security measures for working in secure areas shall be designed and implemented.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.7', 'Clear desk and clear screen', 'Clear desk rules for papers and removable storage media and clear screen rules for information processing facilities shall be defined and appropriately enforced.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.8', 'Equipment siting and protection', 'Equipment shall be sited securely and protected.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.9', 'Security of assets off-premises', 'Off-site assets shall be protected.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.10', 'Storage media', 'Storage media shall be managed through their life cycle of acquisition, use, transportation and disposal in accordance with the organization\'s classification scheme and handling requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.11', 'Supporting utilities', 'Information processing facilities shall be protected from power faliures and other disruptions caused by failures in supporting utilities.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.12', 'Cabling security', 'Cables carrying power, data or supporting information services shall be protected from interception, interference or damage.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.13', 'Equipment maintenance', 'Equipment shall be maintained correctly to ensure availability, integrity and confidentiality of information.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Physical controls', '7.14', 'Secure disposal or re-use of equipment', 'Items of equipment containing storage media shall be verified to ensure that any sensitive data and licensed softeware has been removed or securely overwritten prior to disposal or re-use', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.1', 'User end point devices', 'Information stored on, processed by or accessible via user end point device shall be protected.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.2', 'Privileged access rights', 'The allocation and use of privileged access rights shall be restricted and managed', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.3', 'Information access restriction', 'Access to information and other associated assets shall be restricted in accordance with the established topic-specific policy on access control', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.4', 'Access to source code', 'Read and write access to source code, development tools and software libraries shall be appropriately managed', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.5', 'Secure authentication', 'Secure authentication technologies and procedures shall be implemented based on information access restrictions and the topic-specific policy on access control.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.6', 'Capacity management', 'The use of resources shall be monitored and adjusted in line with current and expected capacity requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.7', 'Protection against malware', 'Protection against malware shall be implemented and supported by appropriate user awareness.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.8', 'Management of technical vulnerabilities', 'Information about technical vulnerabilities of information systems in use shall be obtained, the organization\'s exposure to such vulnerabilities shall be evaluated and appropriate measures shall be taken.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.9', 'Configuration management', 'Configurations, including security configurations, of hardware, software, services and networks shall be established, documented, implemented, monitored and reviewed.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.10', 'Information deletion', 'Information stored in information systems, devices or in any other storage media shall be deleted when no longer required.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.11', 'Data masking', 'Data masking shall be used in accordance with the organisations topic-specific policy on access control and other related topic-specific policies, and business requirements, taking applicable legislation into consideration.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.12', 'Data leakage prevention', 'Data leakage prevention measures shall be applied to systems, networks and any other device that process, store or transmit sensitive information.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.13', 'Information backup', 'Backup copies of information, software and systems shall be maintained and regularly tested in accordance with the agreed topic-specific policy on backup.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.14', 'Redundancy of information processing facilities', 'Information processing facilities shall be implemented with redundancy sufficient to meet availability requirements.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.15', 'Logging', 'Logs that record activities, exceptions, faults and other relevant events shall be produced, stored, protexted and analysed.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.16', 'Monitoring activities', 'Networks, systems and applications shall be monitored for anomalous behaviour and appropriate actions taken to evaluate potential information security incidients.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.17', 'Clock synchronization', 'The clocks of information processing systems used by the organization shall be sunchronized to approved time sources.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.18', 'Use of priviledge utility programs', 'The use of utility programs that can be capable of overriding system and application controls shall be restricted and tightly controlled.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.19', 'Installation of software on operational systems', 'Procedures and measures shall be implemented to securely manage software installation on operational systems.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.20', 'Network security', 'Networks and network devices shall be secured managed and controlled to protect information in systems and applications.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.21', 'Security of network services', 'Security mechanisms, service levels and service requirements of network services shall be identified, implemented and monitored.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.22', 'Segregation of networks', 'Groups of information services, users and information systems shall be segregated in the organization\'s networks', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.23', 'Web filtering', 'Access to external websites shall be managed to reduce exposure to malicious content.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.24', 'Use of cryptography', 'Rules for the effective use of cryptography, including cryptographic key management, shall be defined and implemented.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.25', 'Secure development life cycle', 'Rules for secure development of software and systems shall be established and applied.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.26', 'Application security requirements', 'Information security requirements shall be identified, specified and approved when developing or acquiring applications.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.27', 'Secure system architecture and engineering principles', 'Principles for engineering secure systems shall be established, documented, maintiained and applied to any information system development activities.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.28', 'Secure coding', 'Secure coding principles shall be applied to software development.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.29', 'Secure testing in development and acceptance', 'Security testing processes shall be defined and implemented in the development life cycle.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.30', 'Outsourced development', 'The organization shall direct, monitor and review the activities related to outsourced system development.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.31', 'Seperation of development, test and production environment', 'Development, testing and production environments shall be seperated and secured.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.32', 'Change management', 'Changes to information processing facilities and information systems shall be subject to change management procedured.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.33', 'Test information', 'Test information shall be appropriately selected, protected and managed.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO standards_policies VALUES (null, 'ISO 27001', 'Technological controls', '8.34', 'Protection of information systems during audit testing', 'Audit tests and other assurance activities involving assessment of operational systems shall be planned and agreed between the tester and appropriate management.', 'system', NOW());";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "SELECT * FROM `roles`";
$roles = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

foreach ($roles as $role) {
    $permissions = json_decode($role->permissions);
    if (!empty($permissions)) {
        if ($role->name === 'admin') {
            $permissions->certificates = 'crud';
            $permissions->standards = 'crud';
            $permissions->standards_results = 'crud';
            $permissions->vendors = 'crud';
            $permissions->vulnerabilities = 'crud';
            $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
            $query = $db->query($sql, [json_encode($permissions), $role->id]);
            $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        } else if ($role->name === 'org_admin') {
            $permissions->certificates = 'crud';
            $permissions->standards = 'crud';
            $permissions->standards_results = 'crud';
            $permissions->vendors = 'r';
            $permissions->vulnerabilities = 'r';
            $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
            $query = $db->query($sql, [json_encode($permissions), $role->id]);
            $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        } else {
            $permissions->certificates = 'r';
            $permissions->standards = '';
            $permissions->standards_results = '';
            $permissions->vendors = 'r';
            $permissions->vulnerabilities = 'r';
            $sql = "UPDATE `roles` SET `permissions` = ? WHERE `id` = ?";
            $query = $db->query($sql, [json_encode($permissions), $role->id]);
            $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            log_message('info', (string)$db->getLastQuery());
        }
    }
}

$sql = "SELECT DISTINCT index_name FROM INFORMATION_SCHEMA.STATISTICS WHERE (table_schema, table_name) = ('openaudit', 'software') AND index_type = 'FULLTEXT'";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!empty($result[0]->index_name) and $result[0]->index_name === 'software_name_fulltext') {
  // we already have an index, leave it
} else {
  // Make a new index
  $sql = "ALTER TABLE `software` ADD FULLTEXT INDEX `software_name_fulltext` (`name`)";
  $db->query($sql);
  $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
  log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('hw_cpe', 'devices')) {
  $sql = "ALTER TABLE devices ADD hw_cpe varchar(200) NOT NULL DEFAULT '' AFTER os_cpe";
  $db->query($sql);
  $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
  log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('cve', 'devices')) {
  $sql = "ALTER TABLE devices ADD `cve` text NOT NULL AFTER identification";
  $db->query($sql);
  $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
  log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('os_display_version', 'devices')) {
  $sql = "ALTER TABLE devices ADD os_display_version varchar(200) NOT NULL DEFAULT '' AFTER os_version";
  $db->query($sql);
  $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
  log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('vm_vendor', 'devices')) {
    $sql = "ALTER TABLE devices ADD vm_vendor varchar(50) NOT NULL DEFAULT '' AFTER asset_tag";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('criticality', 'devices')) {
    $sql = "ALTER TABLE devices ADD `criticality` varchar(100) NOT NULL DEFAULT 'unassigned' AFTER owner";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','criticality','extreme','extreme','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','criticality','very high','very high','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','criticality','high','high','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','criticality','medium','medium','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','criticality','low','low','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','criticality','unassigned','unassigned','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (!$db->fieldExists('sensitivity', 'devices')) {
    $sql = "ALTER TABLE devices ADD `sensitivity` varchar(100) NOT NULL DEFAULT 'unassigned' AFTER criticality";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','top secret','top secret','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','secret','secret','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','confidential','confidential','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','private','private','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','sensitive','sensitive','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','public','public','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','unclassified','unclassified','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());

    $sql = "INSERT INTO `attributes` VALUES (NULL,1,'devices','sensitivity','unassigned','unassigned','system','2000-01-01 00:00:00')";
    $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "DROP TABLE IF EXISTS `vulnerabilities`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `vulnerabilities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `cve` varchar(200) NOT NULL DEFAULT '',
  `attack_complexity` varchar(20) NOT NULL DEFAULT '',
  `attack_requirements` varchar(20) NOT NULL DEFAULT '',
  `attack_vector` varchar(20) NOT NULL DEFAULT '',
  `automatable` varchar(20) NOT NULL DEFAULT '',
  `base_score` varchar(20) NOT NULL DEFAULT '',
  `base_severity` varchar(20) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `exploit_maturity` varchar(20) NOT NULL DEFAULT '',
  `impact_availability` varchar(20) NOT NULL DEFAULT '',
  `impact_confidentiality` varchar(20) NOT NULL DEFAULT '',
  `impact_integrity` varchar(20) NOT NULL DEFAULT '',
  `lastModified` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `privileges_required` varchar(20) NOT NULL DEFAULT '',
  `published_date` date NOT NULL DEFAULT '2000-01-01',
  `published` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `references` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`references`)),
  `remediation` text NOT NULL,
  `scope` varchar(20) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  `user_interaction` varchar(20) NOT NULL DEFAULT '',
  `vendor` varchar(200) NOT NULL DEFAULT '',
  `vuln_status` varchar(30) NOT NULL DEFAULT '',
  `filter` longtext NOT NULL,
  `sql` longtext NOT NULL,
  `nvd_json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{}' CHECK (json_valid(`nvd_json`)),
  `products` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{}' CHECK (json_valid(`products`)),
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `cve` (`cve`),
  KEY `vendor` (`vendor`),
  KEY `published_date` (`published_date`),
  KEY `cvevendor` (`cve`,`vendor`),
  KEY `vendorbaseseverity` (`vendor`,`base_severity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `vulnerabilities_cache`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `vulnerabilities_cache` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vulnerability_id` int(10) unsigned NOT NULL DEFAULT 1,
  `org_id` int(10) unsigned NOT NULL DEFAULT 1,
  `count` int(10) unsigned NOT NULL DEFAULT 0,
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`),
  KEY `vulnerabilities_cache_org_id` (`org_id`),
  CONSTRAINT `vulnerabilities_cache_org_id` FOREIGN KEY (`org_id`) REFERENCES `orgs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DROP TABLE IF EXISTS `vendors`";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "CREATE TABLE `vendors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `org_id` int(10) unsigned NOT NULL DEFAULT '1',
  `critical` int(10) unsigned NOT NULL DEFAULT 0,
  `high` int(10) unsigned NOT NULL DEFAULT 0,
  `medium` int(10) unsigned NOT NULL DEFAULT 0,
  `low` int(10) unsigned NOT NULL DEFAULT 0,
  `none` int(10) unsigned NOT NULL DEFAULT 0,
  `use` enum('y', 'n', '') NOT NULL DEFAULT 'n',
  `edited_by` varchar(200) NOT NULL DEFAULT '',
  `edited_date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'adobe', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'apple', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'cisco', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'google', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'microsoft', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'mozilla', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `vendors` VALUES (null, 'redhat', 1, 0, 0, 0, 0, 0, 'y', 'system', '2000-01-01 00:00:00')";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (!$db->fieldExists('display_version', 'windows')) {
  $sql = "ALTER TABLE windows ADD display_version varchar(20) NOT NULL DEFAULT '' AFTER version";
  $db->query($sql);
  $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
  log_message('info', (string)$db->getLastQuery());
}

$sql = "SHOW INDEX FROM `variable` WHERE Key_name = 'device_id_name'";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

if (count($result) === 0) {
    $sql = "ALTER TABLE `variable` ADD INDEX `device_id_name` (`device_id`, `name`)";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (empty(config('Openaudit')->feature_vulnerabilities)) {
    $sql = "INSERT INTO `configuration` VALUES (NULL,'feature_vulnerabilities','y','bool','y','system','2000-01-01 00:00:00','Enable the vulnerabilities feature.')";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (empty(config('Openaudit')->feature_vulnerabilities_interval)) {
    $sql = "INSERT INTO `configuration` VALUES (NULL,'feature_vulnerabilities_interval','60','number','y','system','2000-01-01 00:00:00','Check for new vulnerabilities every X minutes.')";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (empty(config('Openaudit')->feature_vulnerabilities_date)) {
    $sql = "INSERT INTO `configuration` VALUES (NULL,'feature_vulnerabilities_date','2025-01-01','date','y','system','2000-01-01 00:00:00','Retrieve vulnerabilities since this date.')";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (empty(config('Openaudit')->feature_vulnerabilities_url)) {
    $sql = "INSERT INTO `configuration` VALUES (NULL,'feature_vulnerabilities_url','https://news.firstwave.com/feeds','text','y','system','2000-01-01 00:00:00','The URL to connect to, to retrieve vulnerability data.')";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

if (empty(config('Openaudit')->feature_vulnerabilities_last_request_datetime)) {
    $sql = "INSERT INTO `configuration` VALUES (NULL,'feature_vulnerabilities_last_request_datetime','2000-01-01 00:00:00','text','y','system','2000-01-01 00:00:00','When did we last request the vulnerability list.')";
    $query = $db->query($sql);
    $output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
    log_message('info', (string)$db->getLastQuery());
}

$sql = "INSERT INTO `tasks` VALUES (null, 'Vulnerabilitiy Retrieval', 1, 'Retrieve an updated vulnerability list.', 0, '', 'y', 'vulnerabilities', '*/5', '*', '*', '*', '*', 0, 0, '2001-02-01 00:00:00', '2000-01-01 00:00:00', '', '', 0, 'system', '2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `tasks` VALUES (null, 'Vendor Retrieval', 1, 'Retrieve an updated vendor list.', 0, '', 'y', 'vendors', 5, 1, '*', '*', '*', 0, 0, '2001-02-01 00:00:00', '2000-01-01 00:00:00', '', '', 0, 'system', '2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// Set ALL os_cpe
$sql = "SELECT id, type, sysDescr, model, manufacturer, os_name, os_family, os_group, os_version, os_display_version FROM devices";
$result = $db->query($sql)->getResult();
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
foreach ($result as $device) {
    $os_cpe = cpe_create($device);
    $sql = "UPDATE devices SET os_cpe = ? WHERE id = ?";
    $db->query($sql, [$os_cpe, $device->id]);
}

// Syslog Feature flags
$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_syslog_access'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_syslog_access','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT log access to syslog (Linux only).')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_syslog_components'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_syslog_components','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in syslog if a change is detected in a component table.')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_syslog_devices'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_syslog_devices','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in syslog if a new device detected.')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "DELETE FROM `configuration` WHERE `name` = 'feature_syslog_vulnerabilities'";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "INSERT INTO `configuration` VALUES (NULL,'feature_syslog_vulnerabilities','n','bool','y','system','2000-01-01 00:00:00','Should Open-AudIT create an entry in syslog if a device has a vulnerability detected.')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// New Widgets
$sql = "INSERT INTO `widgets` VALUES (null,'Top 10 Vulnerable Devices',1,'','pie','','','','','Devices','','',0,'','SELECT devices.id AS `description`, devices.name AS `name`, LENGTH(devices.cve) - LENGTH(REPLACE(devices.cve, \',\', \'\')) AS `count` FROM devices WHERE @filter AND devices.cve > \'\' ORDER BY (LENGTH(devices.cve) - LENGTH(REPLACE(devices.cve, \',\', \'\'))) DESC LIMIT 10','devices?devices.id=@description','system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
$top10 = intval($db->insertID());

$sql = "INSERT INTO `widgets` VALUES (null,'Top 25 Vendors of Vulnerabilities',1,'','pie','','','','','Devices','','',0,'','SELECT vulnerabilities.vendor AS `description`, vulnerabilities.vendor AS `name`, COUNT(vulnerabilities.id) AS `count` FROM `vulnerabilities` LEFT JOIN `orgs` ON `vulnerabilities`.`org_id` = `orgs`.`id`  WHERE @filter GROUP BY vulnerabilities.vendor ORDER BY `count` LIMIT 25','vulnerabilities?vulnerabilities.vendor=@description','system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
$top25 = intval($db->insertID());

$sql = "INSERT INTO `widgets` VALUES (null,'Vulnerabilities Outstanding from Microsoft',1,'','pie','','','','','Devices','','',0,'','SELECT vulnerabilities.base_severity AS `name`, COUNT(vulnerabilities_cache.vulnerability_id) AS `count`, \'\' AS `description` FROM vulnerabilities_cache LEFT JOIN vulnerabilities ON (vulnerabilities_cache.vulnerability_id = vulnerabilities.id) WHERE @filter AND vulnerabilities.vendor = \'microsoft\' GROUP BY base_severity','vulnerabilities?vulnerabilities.base_severity=@name&vulnerabilities.vendor=microsoft&count=>0','system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
$microsoft = intval($db->insertID());

$sql = "INSERT INTO `widgets` VALUES (null,'Vulnerabilities By Severity',1,'','pie','','','','','Devices','','',0,'','SELECT vulnerabilities.base_severity AS `name`, COUNT(vulnerabilities_cache.vulnerability_id) AS `count`, \'\' AS `description` FROM vulnerabilities_cache LEFT JOIN vulnerabilities ON (vulnerabilities_cache.vulnerability_id = vulnerabilities.id) WHERE @filter GROUP BY base_severity','vulnerabilities?vulnerabilities.base_severity=@name&count=>0','system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());
$severity = intval($db->insertID());

$sql = "SELECT id, name FROM widgets WHERE name IN ('Open Windows Shares', 'Windows Clients AntiVirus Status', 'Windows 11 Latest Build', 'Windows 2025 Server Latest Build', 'Devices Audited per Day', 'New Devices Discovered per Day', 'Hardware Additions per Day', 'New Software Discovered per Day')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$widgets = array();
foreach ($result as $widget) {
    $widget[$widget->name] = $widget_id;
}

// New Dashboard
$sql = "INSERT INTO `dashboards` VALUES (null,'Security Dashboard',1,'org',0,'Security Information','y','{\"layout\":\"4x3\",\"widget_count\":12,\"widgets\":[{\"size\":1,\"position\":1,\"widget_id\":" . $widgets['Open Windows Shares'] . "},{\"size\":1,\"position\":2,\"widget_id\":" . $widgets['Windows Clients AntiVirus Status'] . "},{\"size\":1,\"position\":3,\"widget_id\":" . $widgets['Windows 11 Latest Build'] . "},{\"size\":1,\"position\":4,\"widget_id\":" . $widgets['Windows 2025 Server Latest Build'] . "},{\"size\":1,\"position\":5,\"widget_id\":" . $top10 . "},{\"size\":1,\"position\":6,\"widget_id\":" . $top25 . "},{\"size\":1,\"position\":7,\"widget_id\":" . $microsoft . "},{\"size\":1,\"position\":8,\"widget_id\":" . $severity . "},{\"size\":1,\"position\":9,\"widget_id\":" . $widgets['Devices Audited per Day'] . "},{\"size\":1,\"position\":10,\"widget_id\":" . $widgets['New Devices Discovered per Day'] . "},{\"size\":1,\"position\":11,\"widget_id\":" . $widgets['Hardware Additions per Day'] . "},{\"size\":1,\"position\":12,\"widget_id\":" . $widgets['New Software Discovered per Day'] . "}]}','system','2000-01-01 00:00:00')";
$result = $db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

// set our versions
$sql = "UPDATE `configuration` SET `value` = '20250615' WHERE `name` = 'internal_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$sql = "UPDATE `configuration` SET `value` = '6.0.0' WHERE `name` = 'display_version'";
$db->query($sql);
$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

$output .= "Upgrade database to 6.0.0 completed.\n\n";
config('Openaudit')->internal_version = 20250615;
config('Openaudit')->display_version = '6.0.0';
