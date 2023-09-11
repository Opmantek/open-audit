%# VERSION=1.628.0
<%
#
# THIS SOFTWARE IS NOT PART OF Open-AudIT AND IS COPYRIGHTED, PROTECTED AND LICENSED
# BY FIRSTWAVE.
#
# YOU MUST NOT MODIFY OR DISTRIBUTE THIS CODE
#
# This code is NOT Open Source
#
# IT IS IMPORTANT THAT YOU HAVE READ CAREFULLY AND UNDERSTOOD THE END USER
# LICENSE AGREEMENT THAT WAS SUPPLIED WITH THIS SOFTWARE.   BY USING THE
# SOFTWARE  YOU ACKNOWLEDGE THAT (1) YOU HAVE READ AND REVIEWED THE LICENSE
# AGREEMENT IN ITS ENTIRETY, (2) YOU AGREE TO BE BOUND BY THE AGREEMENT, (3)
# THE INDIVIDUAL USING THE SOFTWARE HAS THE POWER, AUTHORITY AND LEGAL RIGHT
# TO ENTER INTO THIS AGREEMENT ON BEHALF OF YOU (AS AN INDIVIDUAL IF ON YOUR
# OWN BEHALF OR FOR THE ENTITY THAT EMPLOYS YOU )) AND, (4) BY SUCH USE, THIS
# AGREEMENT CONSTITUTES BINDING AND ENFORCEABLE OBLIGATION BETWEEN YOU AND
# FIRSTWAVE.
#
# Firstwave is a passionate, committed open source software company - we really
# are.  This particular piece of code was taken from a commercial module and
# thus we can't legally supply it under GPL. It is supplied in good faith as
# source code so you can get more out of Open-AudIT.  According to the license
# agreement you can not modify or distribute this code, but please let us know
# if you want to and we will certainly help - in most cases just by emailing
# you a different agreement that better suits what you want to do but covers
# Firstwave legally too.
#
# contact Firstwave by emailing code@opmantek.com
#
# All licenses for all software obtained from Firstwave (GPL and commercial)
# are viewable at https://firstwave.com/legal/licensing/
#
# *****************************************************************************
%>
<h1>ERROR: Failed to save ADMIN$/winexesvc.exe - NT_STATUS_ACCESS_DENIED</h1>
<br />
<p>When Open-AudIT on Linux   discovers a Windows machine, in order to execute a remote command we use <a href="https://sourceforge.net/p/winexe/wiki/Home/">Winexe</a>. This code relys on the great work done by the <a hre="https://www.samba.org/">Samba</a> team.</p>

<p>When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use <a href="https://www.poweradmin.com/paexec/">PAExec</a>. PAExec is a freely-redistributable re-implementation of SysInternal/Microsoft's popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariq's RemCom.</p>

<p>Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).<br />
<br />
Access to the admin$ share and RPC uses the SMB2 protocol.<br />
<br />
This is also the way that PAExec works.<br />
<br />As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br />
</p>


%= include('open-audit/discovery_issues/wmi_intro'); 
