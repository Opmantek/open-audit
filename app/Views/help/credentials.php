<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

$intro = '<p>Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.</p>
<br>
<h2>How Does it Work?</h2>
<br>
<p>Credentials are stored in the "credentials" database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has it\'s specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the "credential" table (note - no \'s\' in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br>
<br>
NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.</p>
<br>
<br>';

$body = '
<h2>SSH Keys</h2>
<br>
<p>You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.</p>
<br>
<pre>
-----BEGIN RSA PRIVATE KEY-----
Proc-Type: 4,ENCRYPTED
DEK-Info: DES-EDE3-CBC,328refbeif03
duvbwuidnpowmpowenciubviencpomcpoenrfurehoiernfporjfoierhiuebvvn
dvkjeekjvlfkvlfbvienvpoemvpoenviuberiovneporvmpoernvoiernvoiernv
9wI0nVfcdhhd8DExfgwFfWr2AoGaNYgE0TVUfRU21HQG8C+HoLysC1a4CaHsRgVy
DTzGJQhfKafu2G31wt12kTycTpujeO0EyRsa4kT0KPp+IDJRtkRmEJY3UG1Xg72P
dfvneivnoiernvoirenvoinervionreoivnreoivnoiernvoiernv/pae,fefeff
W76aH+wxCuuSNWACvhfDcYXjp4dP3AD2EiuIYlvkIl0cwNrX9tmZyG37qaYDPCdW
ikmDolK6tepoqS05js+RouUHvZEZg3jBxkTkI0FB+JJcOvzl9ixf3Ce/CeWkcCrb
6oGjyNEOqoFDoceIUFZGOw4tsNySyqON9a0TuToPCX5rQd57fPabnl6Tl6XUCqwz
1DZ2HyVm+k4DAzLx2BoA5urWzdlniuberovbeirvbifevnienvirenviernviner
ovneiuvnieufvbiuerbviunviunervioneroivnoiernvoiernvoinervoineroi
b2cmcEETwXZEzVudljkOMt7d8F2fWVcFPYSh/wneI1A7kPiWw9B1T3SRTiLS8fv4
t8pr/GvAsevzRe7q9oMAfnAYnBuWCzN++JitjgwRhj1n/WmqxqfPuRwcZ/Y8cHZb
fSuJdcdlGBx7KH/7N/rRCioAc7lcRi/x+AgVs+7Cng0a5OHT4DfA6A==
-----END RSA PRIVATE KEY-----
</pre>
<br>
<br>
';
