<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.</p>
    <br>
    <h2>How Does it Work?</h2>
    <p>When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.<br>
<br>
    A Subnet discovery will scan the IPs provided.<br>
<br>
    An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.<br>
<br>
    A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).</p>

';

$body = '
<h2>Assigning Discovered Devices</h2>
<p>If you set the values for <code>devices_assigned_to_org</code> and/or <code>devices_assigned_to_location</code> you will assign any found devices to that Org or Location.</p>
<br>
    <h2>Subnet Discoveries</h2>
    <p>When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the <a href="' . url_to('discovery_scan_optionsHelp') . '">Discovery Scan Options</a> chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using <a href="' . url_to('credentialsHelp') . '">Credentials</a>.</p>
    <p>Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute "queue_limit". By default this is set to 20.</p>
    <p>For each spawned process, the below occurs.</p>
    <p>Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.</p>
    <p>The order of information retrieval is snmp, ssh, wmi.</p>
    <h4>SNMP</h4>
    <p>For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).</p>
    <h4>SSH</h4>
    <p>SSH is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).</p>
    <h4>WMI</h4>
    <p>Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).</p>
    <h4>Scripts</h4>
    <p>Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.</p>
    <br>




<h2>Seed Discoveries</h2>
<p>New in Open-AudIT 4.1.0, we have introduced Device Seed Discoveries. This is another type of discovery, where you provide the IP of a single "seed" device. This device is audited, and any IPs it knows are then added to the list of IP\'s to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.</p>
<br>
Device Seed Discoveries are a good option if you know that your network consists of a range of subnet\'s, but you\'re unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.<br><br>
<h4>Parameters</h4>
You can limit the Device Seed Discovery to fall within a strict set of parameters, including: "Restrict to Subnet" and "Restrict to Private"<br>
<br>
These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner. <br>
<br>
We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.<br>
<br>
All regular discovery options are also available for use in Device Seed Discoveries.<br><br>
<h4>Summary</h4>
The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It\'s fast, it works and it\'s great.<br>
<br>
If you have an Open-AudIT Enterprise license, as well as Open-AudIT 4.1.0 or newer, you can try a Device Seed Discovery today. <br>
<br>
If you don\'t have an Enterprise license, or need to update your software, you can learn more about doing both here.<br><br>
<h4>Technical Details FAQ</h4>
How does a Device Seed Discovery find known IPs?<br>
<br>
Provided you have the correct credentials, Device Seed Discovery works as follows: <br>
<br>
    For SNMP devices, OIDs for:<br>
    <pre>        ipNetToMediaPhysAddress (1.3.6.1.2.1.4.22.1.2)
        ipNetToPhysicalPhysAddress (1.3.6.1.2.1.4.35.1.4.3.1.4)
        atPhysAddress (1.3.6.1.2.1.3.1.1.2)
        ipRouteEntry (1.3.6.1.2.1.4.21.1.1)</pre>
    For SSH devices:<br>
    <pre>        "arp -an" and "netstat -rn" commands.</pre>
    For Windows devices:<br>
    <pre>        "arp -a" commands.</pre>
<br>




<h2>How Long Does it Take</h2>
<p>We are often asked this question and the answer most definitely is "it depends". It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.</p>
<br>

<h2>Notes</h2>
<p>When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several "changes".</p>
<p>You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per - <a href="http://blogs.technet.com/b/brad_rutkowski/archive/2007/10/22/unable-to-remotely-manage-a-server-core-machine-mmc-wmi-device-manager.aspx" target="_blank">http://blogs.technet.com/b/brad_rutkowski/archive/2007/10/22/unable-to-remotely-manage-a-server-core-machine-mmc-wmi-device-manager.aspx</a>.</p>
<p>For further details information, see the wiki.</p>
<br>
';
