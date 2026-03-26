<?php

$output .= "Upgrade database to 6.1.11 commenced.\n\n";

$rules = [
    [
        'name'    => 'Microsoft Entra ID Connect Criticality',
        'inputs'  => [
            ['table' => 'devices', 'attribute' => 'os_group', 'operator' => 'eq', 'value' => 'Windows'],
            ['table' => 'service', 'attribute' => 'name', 'operator' => 'li', 'value' => '%Entra ID Connect%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'high', 'value_type' => 'string']],
    ],
    [
        'name'    => 'Microsoft Entra ID Cloud Sync Criticality',
        'inputs'  => [
            ['table' => 'devices', 'attribute' => 'os_group', 'operator' => 'eq', 'value' => 'Windows'],
            ['table' => 'service', 'attribute' => 'name', 'operator' => 'li', 'value' => '%Cloud Sync%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'high', 'value_type' => 'string']],
    ],
    [
        'name'   => 'Active Directory Certificate Services (ADCS) Criticality',
        'inputs' => [
            ['table' => 'devices', 'attribute' => 'os_group', 'operator' => 'eq', 'value' => 'Windows'],
            ['table' => 'service', 'attribute' => 'name', 'operator' => 'li', 'value' => '%ADCS%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'high', 'value_type' => 'string']],
    ],
    [
        'name'   => 'Active Directory Federation Services (ADFS) Criticality',
        'inputs' => [
            ['table' => 'devices', 'attribute' => 'os_group', 'operator' => 'eq', 'value' => 'Windows'],
            ['table' => 'service', 'attribute' => 'name', 'operator' => 'li', 'value' => '%ADFS%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'high', 'value_type' => 'string']],
    ],
    [
        'name'   => 'Backup Server Criticality',
        'inputs' => [
            ['table' => 'service', 'attribute' => 'name', 'operator' => 'li', 'value' => '%Backup%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'medium', 'value_type' => 'string']],
    ],
    [
        'name'   => 'Domain Controller Criticality',
        'inputs' => [
            ['table' => 'devices', 'attribute' => 'os_group', 'operator' => 'eq', 'value' => 'Windows'],
            ['table' => 'windows', 'attribute' => 'domain_role', 'operator' => 'li', 'value' => '%Domain Controller%'],
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'very high', 'value_type' => 'string']],
    ],
    [
        'name'   => 'DNS Server Criticality',
        'inputs' => [
            ['table' => 'service', 'attribute' => 'name', 'operator' => 'li', 'value' => '%DNS%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'low', 'value_type' => 'string']],
    ],
    [
        'name'   => 'Microsoft Exchange Server Criticality',
        'inputs' => [
            ['table' => 'service', 'attribute' => 'name', 'operator' => 'li', 'value' => '%Exchange%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'medium', 'value_type' => 'string']],
    ],
    [
        'name'   => 'Windows Server Update Services (WSUS) Criticality',
        'inputs' => [
            ['table' => 'service', 'attribute' => 'name', 'operator' => 'li', 'value' => '%WSUS%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'medium', 'value_type' => 'string']],
    ],
    [
        'name'   => 'Hyper-V Host Criticality',
        'inputs' => [
            ['table' => 'service', 'attribute' => 'name', 'operator' => 'li', 'value' => '%Hyper-V%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'high', 'value_type' => 'string']],
    ],
    [
        'name'   => 'VMware ESXi Host Criticality',
        'inputs' => [
            ['table' => 'devices', 'attribute' => 'os_group', 'operator' => 'eq', 'value' => 'VMware ESXi']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'high', 'value_type' => 'string']],
    ],
    [
        'name'   => 'VMware vCenter Criticality',
        'inputs' => [
            ['table' => 'service', 'attribute' => 'name', 'operator' => 'li', 'value' => '%vCenter%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'high', 'value_type' => 'string']],
    ],
    [
        'name'   => 'SharePoint Server Criticality',
        'inputs' => [
            ['table' => 'service', 'attribute' => 'name', 'operator' => 'li', 'value' => '%SharePoint%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'medium', 'value_type' => 'string']],
    ],
    [
        'name'   => 'Database Server Criticality',
        'inputs' => [
            ['table' => 'service', 'attribute' => 'name', 'operator' => 'in', 'value' => 'SQL Server, MySQL, MariaDB, Postgresql'],
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'medium', 'value_type' => 'string']],
    ],
    [
        'name'   => 'Azure Document DB Key Exposure Criticality',
        'inputs' => [
            ['table' => 'devices', 'attribute' => 'name', 'operator' => 'li', 'value' => '%Document DB%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'high', 'value_type' => 'string']],
    ],
    [
        'name'   => 'Azure Redis Cache Key Exposure Criticality',
        'inputs' => [
            ['table' => 'devices', 'attribute' => 'name', 'operator' => 'li', 'value' => '%Redis Cache%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'high', 'value_type' => 'string']],
    ],
    [
        'name'   => 'Azure Storage Account Key Exposure Criticality',
        'inputs' => [
            ['table' => 'devices', 'attribute' => 'name', 'operator' => 'li', 'value' => '%Storage Account Key%']
        ],
        'outputs' => [['table' => 'devices', 'attribute' => 'criticality', 'value' => 'high', 'value_type' => 'string']],
    ],
];

$quotedNames = array_map(fn($rule) => "'" . addslashes($rule['name']) . "'", $rules);
$query = sprintf("DELETE FROM rules WHERE name IN (%s)", implode(',', $quotedNames));
$db->query($query);

$output .= str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
log_message('info', (string)$db->getLastQuery());

foreach ($rules as $rule) {
    $orgId = 1;
    $weight = 100;
    $editedBy = 'system';
    $editedDate = '2001-01-01 00:00:00';
    $query = sprintf(
        "INSERT INTO `rules` VALUES (NULL, '%s', %d, '%s', %d, '%s', '%s', '%s', '%s');",
        $rule['name'],
        $rule['org_id'] ?? 1,
        $rule['description'] ?? '',
        $rule['weight'] ?? 100,
        addslashes(json_encode($rule['inputs'])),
        addslashes(json_encode($rule['outputs'])),
        $editedBy,
        $editedDate
    );

    $db->query($query);

    $lastQuery = (string) $db->getLastQuery();
    $output .= str_replace("\n", " ", $lastQuery) . "\n\n";
    log_message('info', $lastQuery);
}

config('OpenAudit')->internal_version = 20260323;
config('OpenAudit')->display_version = '6.1.11';
