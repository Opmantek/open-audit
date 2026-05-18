<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$title = __('Why Windows Server Only?');

$intro = '<p>' . __('Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.') . '</p>';

$body = '<p>' . __('Discoveries will not function correctly on a Windows client (10 / 11) machine.') .

'<br>&nbsp;</p>'

. __('<h2>Technical Details</h2>')

. __('<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br><i>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.</i>') . '<br>&nbsp;</p>'

. __('<h2>Mitigation</h2>')

. __('<p>To mitigate this somewhat, we reduce the discovery queue limit from 20 (concurrent processes) to one. This will obviously slow discovery significantly, but should at least allow it to discover <strong><i>some</i></strong> devices before being killed by Windows. Or you could discover devices using a single IP, not a subnet (so you only discover one device at a time).') . 

'<br>&nbsp;</p>

<h2>' . __('Alternatives') . '?</h2>
<p>' . __('You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al) or install on your own Linux distro of choice. We support Redhat 9 and 10, Ubuntu 24.04 as well as Debian 12 and 13.') . '<br><br></p>

<h2>' . __('But I Only Have Windows Client Machines Available!') . '</h2>
<p>' . __('Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if you are not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to schedule the audit scripts to run directly on the clients, or use the Windows Agent feature (Enterprise only). You could also run the audit script directly on the clients, using submit_online=n create_file=y to generate a audit result file, which you can then upload for processing using the web interface') . ' (<a href="' . url_to('scriptsHelp') . '">' . __('more info') . ').</a><br>

<br>' . __('You can also') . ' <a href="' . url_to('devicesExampleForm') . '">' . __('import the example device data') . '</a> ' . __('and review what is possible.') . '<br><br></p>';
