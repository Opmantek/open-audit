<?php

function manufacturerLogo (string $manufacturer = '')
{
    $logo = '';
    if ($logo === '' and mb_stripos($manufacturer, '3COM') !== false) { $logo = '3com'; }
    if ($logo === '' and mb_stripos($manufacturer, 'ABIT') !== false) { $logo = 'abit'; }
    if ($logo === '' and mb_stripos($manufacturer, 'ACCORD') !== false) { $logo = 'accord'; }
    if ($logo === '' and mb_stripos($manufacturer, 'ACER') !== false) { $logo = 'acer'; }
    if ($logo === '' and mb_stripos($manufacturer, 'ADOBE') !== false) { $logo = 'adobe'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Advanced Micro Devices') !== false) { $logo = 'amd'; }
    if ($logo === '' and mb_stripos($manufacturer, 'ALCATEL') !== false) { $logo = 'alacatel'; }
    if ($logo === '' and mb_stripos($manufacturer, 'AMD') !== false) { $logo = 'amd'; }
    if ($logo === '' and mb_stripos($manufacturer, 'AMERICAN POWER') !== false) { $logo = 'apc'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Apple') !== false) { $logo = 'apple'; }
    if ($logo === '' and mb_stripos($manufacturer, 'ASUSTeK') !== false) { $logo = 'asus'; }
    if ($logo === '' and mb_stripos($manufacturer, 'ATI Technologies') !== false) { $logo = 'ati'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Barracuda') !== false) { $logo = 'barracuda'; }
    if ($logo === '' and mb_stripos($manufacturer, 'BroadLink Technology') !== false) { $logo = 'broadlink'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Brocade') !== false) { $logo = 'brocade'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Cisco Meraki') !== false) { $logo = 'cisco_meraki'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Cisco') !== false) { $logo = 'cisco'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Citrix') !== false) { $logo = 'citrix'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Dell') !== false) { $logo = 'dell'; }
    if ($logo === '' and mb_stripos($manufacturer, 'DigitalOcean') !== false) { $logo = 'digitalocean'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Extreme') !== false) { $logo = 'extreme'; }
    if ($logo === '' and mb_stripos($manufacturer, 'F5') !== false) { $logo = 'f5'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Fortinet') !== false) { $logo = 'fortinet'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Foundry') !== false) { $logo = 'foundry'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Gaoshengda Technology') !== false) { $logo = 'gaoshengda'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Gigabyte') !== false) { $logo = 'gigabyte'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Google') !== false) { $logo = 'google'; }
    if ($logo === '' and mb_stripos($manufacturer, 'H3C') !== false) { $logo = 'h3c'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Hewlett Packard') !== false) { $logo = 'hp'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Hewlett-Packard') !== false) { $logo = 'hp'; }
    if ($logo === '' and mb_stripos($manufacturer, 'HP') !== false) { $logo = 'hp'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Huawei') !== false) { $logo = 'huawei'; }
    if ($logo === '' and mb_stripos($manufacturer, 'IBM') !== false) { $logo = 'ibm'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Innotek') !== false) { $logo = 'virtualbox'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Juniper') !== false) { $logo = 'juniper'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Lenovo') !== false) { $logo = 'lenovo'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Intel') !== false) { $logo = 'intel'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Lenovo') !== false) { $logo = 'lenovo'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Microsoft') !== false) { $logo = 'microsoft'; }
    if ($logo === '' and mb_stripos($manufacturer, 'MikroTik') !== false) { $logo = 'mikrotik'; }
    if ($logo === '' and mb_stripos($manufacturer, 'MSI') !== false) { $logo = 'msi'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Netapp') !== false) { $logo = 'netapp'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Netgear') !== false) { $logo = 'netgear'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Netscaler') !== false) { $logo = 'netscaler'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Nintendo') !== false) { $logo = 'nintendo'; }
    if ($logo === '' and mb_stripos($manufacturer, 'NVIDIA') !== false) { $logo = 'nvidia'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Packeteer') !== false) { $logo = 'packeteer'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Palo Alto') !== false) { $logo = 'palo_alto'; }
    if ($logo === '' and mb_stripos($manufacturer, 'PCS Systemtechnik') !== false) { $logo = 'pcs'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Raritan') !== false) { $logo = 'raritan'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Red Hat') !== false) { $logo = 'redhat'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Ricoh') !== false) { $logo = 'ricoh'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Seagate') !== false) { $logo = 'seagate'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Siemens') !== false) { $logo = 'siemens'; }
    if ($logo === '' and mb_stripos($manufacturer, 'SonicWall') !== false) { $logo = 'sonicwall'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Sony') !== false) { $logo = 'sony'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Sophos') !== false) { $logo = 'sophos'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Sun Microsystems') !== false) { $logo = 'sun'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Thomson') !== false) { $logo = 'thomson'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Ubiquiti') !== false) { $logo = 'ubiquiti'; }
    if ($logo === '' and mb_stripos($manufacturer, 'VirtualBox') !== false) { $logo = 'virtualbox'; }
    if ($logo === '' and mb_stripos($manufacturer, 'VMware') !== false) { $logo = 'vmware'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Vyatta') !== false) { $logo = 'vyatta'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Western Digital') !== false) { $logo = 'wd'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Xen') !== false) { $logo = 'xen'; }
    if ($logo === '' and mb_stripos($manufacturer, 'Zhone') !== false) { $logo = 'zhone'; }



    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }
    // if ($logo === '' and mb_stripos($manufacturer, '') !== false) { $logo = ''; }


    return $logo;
}



