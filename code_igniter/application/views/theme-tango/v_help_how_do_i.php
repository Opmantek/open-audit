<?php
$sortcolumn = 2; 
?>
<a href="#faq-1" ><?php echo __('How do I audit a single Windows machine?')?></a><br />
<a href="#faq-2" ><?php echo __('How do I audit multiple Windows machines?')?></a><br />

<br />
<br />
<br />
<form action="vars.php" method="post" class="niceforms">
<div id="faq-1" >
<br />
<fieldset class="niceforms">
<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('How do I audit a single Windows machine?')?></span></legend>
You will need Local Admin rights to audit a single Windows machine.<br />
To audit a Windows machine, you have to run audit_windows.vbs (found in open-audit/other/) against the target machine.<br />
The default directory is usually (for Windows) c:\xampplite\open-audit\other or (for Linux) /usr/local/open-audit/other.<br />
You should <b>not</b> run the audit_windows.vbs by double clicking on it. If debugging is set to a number higher than zero, it will output many pop-up boxes which have to be manually closed.<br />
As at beta 9.2, you should also copy the sqlite3.exe into the same folder as audit_windows.vbs if you move the script from the default directory. sqlite3.exe is used to retrieve serial numbers from installed Adobe products. If you have none of these, feel free to not bother copying sqlite3.exe - if it is not present in the directory, it will be skipped and not throw an error.<br /><br />
You can run audit_windows.vbs physically on the actual machine (locally) or over the network (remotely).<br /><br />
If you choose to run it locally - <ul>
	<li>Copy audit_windows.vbs (and sqlite3.exe if you have Adobe products you want install keys for) to a location on the machine in question.</li>
	<li>Make sure the following variables are set
		<ul>
			<li>submit_online = "y"</li>
			<li>url = "http://YOUR_SERVER/index.php/system"</li>
			<li>strComputer = "."</li>
			<li>create_file = "n"</li>
		</ul>
	</li>
	<li>Run the script on the command line with "cscript audit_windows.vbs" (without quotes).</li>
</ul>
Those basic settings will audit the local machine and submit the audit to the server automatically, without creating a text (XML) file. This should allow you to check that the basics are in place and working.<br /><br />
<br />If you choose to audit it remotely -<ul>
	<li>Change into the directory containing the scripts (default is c:\xampplite\open-audit\other).</li>
	<li>Ensure the variables are set as per the above.</li>
	<li>Ensure the remote Windows computer allows WMI/VBSctipt access through it's firewall. This can be done using Group Policy, a logon script (not supplied) or manually on the machine in question.</li>
	<li>Run the script from the command prompt with "cscript audit_windows.vbs REMOTE_COMPUTER_NAME" (without quotes). You can also use a target computers IP Address.</li>
</ul>
This should remotely audit the computer in question and submit the result to your server.<br /><br /><br />
The configuration of the audit_windows.vbs script can be done via the web interface. Go to Admin -> Scripts -> Create Audit Windows. The defaults are already set, so you should only really need to run this if you need something different. The variable names are reasonably self explanatory but if you can't work them out, don't hesitate to ask on the forums :-)<br /><br />
If you have a Windows machine that is not contactable via normal means, there are some options -<ul>
	<li>Run the audit locally as per above on a Scheduled Task (setup variables as per above). This can then submit it to the server (if possible - sometimes you can route from client to server, but not the reverse).</li>
	<li>Run the audit locally as per above, but set the variable submit_online to "n" and create_file to "y". This will create an XML file which you can then copy to a USB stick, fileshare, whatever. On a machine that can reach the Open-AudIT server, go to http://YOUR_SERVER/index.php/system and you should be presented with a form. You can copy and paste the contents of the XML file into this form and hit the Submit button. This is also a good thing to try when troubleshooting.</li>
	<li>You can set the variables strUser and strPass to a user on the remote machine (that has Local Admin). This is useful for the times when the remote machine is not part of a domain.</li>
</ul>
All variables can be passed via the command line at run time. You don't need to create one audit script for each different (say) set of remote user credentials. A couple of examples -<ul>
	<li>cscript audit_windows.vbs REMOTE_PC strUser=REMOTE_USER strPass=PASSWORD - will audit a remote machine with credentials other than those of the local user running the script.</li>
	<li>cscript audit_windows.vbs . submit_online=n create_file=y - will run the audit on the local PC and output to a file (in the current directory). The "." can be used in place of the local machine name.</li>
</ul>
<br />
<br />
So, that's how to audit a single Windows machine.<br />
</fieldset>
<br />
<br />
<br />
<div id="faq-2" >
<br />
<fieldset class="niceforms">
<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('How do I audit multiple Windows machines?')?></span></legend>
You have two options to audit multiple Windows machines. Audit Domain and Audit List. Both these scripts are in the c:\xampplite\open-audit\other directory. Ensure you open and edit these script before using them. They WILL NEED VARIABLES SET. The variables are quite self explanatory. If you need help just ask in the forums :-)
</fieldset>
</div>
<br />
<br />
<br />
</form>
