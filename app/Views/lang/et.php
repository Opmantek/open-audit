<?php
$GLOBALS["lang"][' Default, currently '] = ' Vaikimisi ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' Nüüd toetatakse seda keelefailiga. Kasutaja muutmiseks selle keele kasutamiseks klõpsake ';

$GLOBALS["lang"][' seconds'] = ' sekundit';

$GLOBALS["lang"]['10 Minutes'] = '10 minutit';

$GLOBALS["lang"]['15 Minutes'] = '15 minutit';

$GLOBALS["lang"]['30 Minutes'] = '30 minutit';

$GLOBALS["lang"]['5 Minutes'] = '5 minutit';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>MÄRKUS</strong> Sellele URL-ile pääsete ligi kohalikust Open-AudIT serverist. Allalaaditud skripti ei saa esitada, kui see töötab mis tahes muus masinas. Kui teil on vaja auditeerida teisi masinaid, laadige skript alla mis tahes kaugmasinast, mitte kasutades Open-AudIT serveri brauserit.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">MÄRKUS</strong> Sul peab olema töötav SSH või SSH Key volikiri, et täita sihtseadmel võrdlusaluseid.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Lähtejoon</strong> Üldine dokument, mis sisaldab lähteolukorra määratlust ja individuaalseid poliitikateste.<br/> <br/> <strong>Poliitika</strong> - Individuaalsed testid, mis sisalduvad baastasemel. Iga test on konkreetse eseme jaoks. Näiteks võiks testida SSH versiooni 1.2.3.<br/> <br/> <strong>Detailid</strong> Võrdlusalused saavad võrrelda netstat porte, kasutajaid ja tarkvara.<br/> <br/> <strong>Tarkvara</strong> Tarkvara võrdlemiseks kontrollime nime ja versiooni. Kuna versiooninumbrid ei ole kõik vormingus standarditud, siis kui saame auditi tulemuse, loome uue atribuudi nimega software_padded, mille salvestame andmebaasi koos ülejäänud tarkvara üksikasjadega iga paketi kohta. Seetõttu ei tööta tarkvarapoliitikaid kasutavad lähtejooned, kui need töötavad seadme vastu, mida ei ole 1.10-ga auditeeritud (vähemalt). Tarkvarapoliitikad võivad testida versiooni "võrdne", "suurem kui" või "võrdne või suurem kui".<br/> <br/> <strong>Netstati sadamad</strong> Netstat Ports kasutab pordi numbri, protokolli ja programmi kombinatsiooni. Kui kõik on kohal, siis poliitika läbib.<br/> <br/> <strong>Kasutajad</strong> Kasutajad töötavad sarnaselt Netstat Ports. Kui kasutaja on olemas sobiva nime, staatuse ja parooli andmetega (muudetav, aegub, nõutav), siis poliitika läbib.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Asukoht on füüsiline aadress, millel võivad olla sellega seotud seadmed.<br/> <br/>Saate määrata selle koordinaadid (lat/long) ja kui on määratud seadmed, kuvatakse asukoht Open-AudIT Enterprise kaardil.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Võrk tuletatakse avastuskirjetest ja seadme atribuutidest.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Kokkuvõte näitab elementide loendit, mis on rühmitatud atribuudi erinevate väärtustega, mis on määratud <code>table</code> ja <code>column</code> atribuute.<br/> <br/>Kui kokkuvõte täidetakse, on tulemuseks selle selgete väärtuste loend. <code>table</code> ja <code>column</code>. Seal on lingid väärtustele, mis võimaldavad kasutajal näha sobivaid seadmeid.<br/> <br/>Kui atribuut <code>extra_columns</code> on täidetud, tulemuseks olev leht sisaldab neid veerge lisaks standardsetele seadme veergudele.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agendid lubavad teil arvutit ilma avastamiseta kontrollida. Installige agent ja see kontrollib serverit iga päev ja auditeerib ennast. Pole tähtis, kas teie arvutid on tulemüüriga, auditi andmed kuvatakse endiselt Open-AudITis.</p><p>Testimisel <strong>kui</strong> agent peaks tegema toiminguid, kõik kolm testi peavad läbima (kui test on seatud). <strong>Siis</strong> meetmed on võetud.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Rakendused määratleb teie, kasutaja ja salvestatakse Open-AudIT kasutamiseks ja seadmetega seostamiseks.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Atribuudid salvestatakse Open-AudIT jaoks, et neid kasutada konkreetsete väljade jaoks.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Võimalus määrata, millised masinad on konfigureeritud samaks, on süsteemide haldamise ja auditeerimise oluline osa - ja nüüd tehakse selle aruandlus lihtsaks ja automaatseks. Kui olete oma lähtejoone määratlenud, töötab see automaatselt etteantud ajakavaga seadmete vastu. Nende käivitatud lähtejoonte väljund on saadaval veebi vaatamiseks, importimiseks kolmanda osapoole süsteemi või isegi trükitud aruandena.<br/> <br/> Võrdlusalused võimaldavad ühendada auditi andmeid eelnevalt määratletud atribuutide kogumiga (teie lähtealus), et teha kindlaks seadmete vastavus nõuetele.<br/> <br/> Näiteks võite luua lähtejoone Centos 6 töötavast seadmest, mis toimib klastris ühe teie apache serverina. Te teate, et see konkreetne server on konfigureeritud just nii, nagu soovite, kuid te pole kindel, kas teised klastri serverid on täpselt sama konfigureeritud. Lähtepunktid võimaldavad teil seda kindlaks määrata.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Klastrid salvestatakse Open-AudIT-is, et seostada seadmeid litsentsimiskulude paremaks salvestamiseks, haldamiseks ja hindamiseks.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Komponendid on üldine termin, mida kasutatakse tabelite jaoks, mis salvestavad seadme atribuudid. Need tabelid on: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, litsents, log, mälu, moodul, monitor, emaplaat, netstat, võrk, nmap, optiline, pagefile, partition, policy, print_queue, protsessor, raadio, marsruut, san, scsi, server, server_item, service, share, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> Lisaks klassifitseerime järgmised tabelid ka seadmega seotud: rakendus, manus, klaster, mandaat, pilt.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Volikirjad krüpteeritakse, kui need on andmebaasis salvestatud.<br/> <br/>Kui käivitatakse Discovery, on seadmel oma volikirjad kõigepealt otsitud ja testitud ühenduse jaoks (alates <code>credential</code> laud. Kui need nurjuvad, siis antud orgiga seotud volikirjad <code>credentials.org_id</code> testitakse ka seadme vastu. Töövolikirjad salvestatakse mandaaditabelis individuaalse seadme tasandil (märkus - tabeli nimes ei ole "s").<br/> <br/>SSH võtmeid testitakse enne SSH kasutajanime / parooli. SSH testimisel märgitakse volikirjad ka sudoga töötamiseks või rootiks.<br/> <br/>Kasutuse lihtsustamiseks ei tohiks Windowsi paroolid sisaldada ühe- ega kahekordset tsiteerimist. See on kaugjuhitav WMI-piirang, mitte avatud audIT-piirang.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Seadmetele juurdepääsuks kasutatakse volitusi.<br/> <br/>Volikirjade seadistamine peaks olema üks esimesi asju, mida teete pärast Open-AudIT installimist.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Määrake oma riiulid ja määrake seadmed nende asukohtadesse. Teie seadmed on juba Open-AudIT-is ja teate oma asukohti. Open-AudIT laiendab seda, et saaksite luua riiuli ja määrata sellele seadmed. Open-AudIT pakub isegi raami ja selles sisalduvate seadmete visualiseerimist. Kui annate seadme pildi, kasutatakse seda pilti visualiseerimisel. Saate vaadata ekraanil olevat riiulit ja näha samu esemeid, mida näete, kui seisate selle ees.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Teie võrgus olevaid seadmeid tuleb hallata. Aga kuidas sa oma rekordeid ajakohasena hoiad? Arvutustabel - kindlasti mitte. See on aegunud tundides, kui mitte päevades. Miks püüda käsitsi sammu pidada. Kasutage Open-AudIT-i oma võrkude automaatseks skannimiseks ja seadmete salvestamiseks - tootja, mudel, seeria ja rohkem kui 100 muud atribuuti. Tarkvara, teenuste, ketaste, avatud portide, kasutajate jne täielik loetelu Automaatselt näha, kas atribuut on lisatud, eemaldatud või muudetud.<br/> <br/>Kui Open-AudIT on seadistatud, saate istuda ja lõõgastuda. Kas teile on saadetud näiteks ajakavas muutuste aruanded - milliseid uusi seadmeid me sel nädalal avastasime? Millist uut tarkvara sel nädalal paigaldati? Kas eelmisel kuul oli ka mingeid muudatusi?<br/> <br/>Laienda salvestatud väljadel lihtsalt oma kohandatud atribuutidega.<br/> <br/>Isegi lisage seadmeid, mis ei ole teie võrguga ühendatud, või neid seadmeid, milleni teie Open-AudIT server ei jõua.<br/> <br/>Arvutid, lülitid, ruuterid, printerid või mis tahes muu seade teie võrgus - Open-AudIT saab neid kõiki auditeerida.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Avastused on selle keskmes, mida Open-AudIT teeb.<br/> <br/>Kuidas muidu sa tead, mis on minu võrgus?<br/> <br/>Avastused on ettevalmistatud andmeelemendid, mis võimaldavad teil ühe klõpsuga võrgus avastust käivitada, sisestamata iga kord selle võrgu üksikasju.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Discovery Valikud on ülemaailmne seade, mida on muudetud <a href="../configuration?configuration.name=discovery_default_scan_option">konfiguratsiooni</a>. Kui teil on Open-AudIT Enterprise\'i litsents, on need seadistatavad iga avastuse kohta ja lisaks sellele saab neid vajaduse korral kohandada. Discovery Valikud on järgmised (sealhulgas indikatiivne aeg individuaalse IP skaneerimiseks):<br/><br/><strong>UltraFast</strong>: <i>1 sekund</i>. Skaneerige ainult porte, mida Open-AudIT peab seadmega rääkimiseks ja IOS-seadme tuvastamiseks kasutama (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> sadam loetakse avatuks. A <code>filtered</code> sadam ei ole avatud. Seade peab vastama Nmap pingile. Kasuta agressiivset ajastust.<br/><br><strong>Superkiire</strong>: <i>5 sekundit</i>. Skaneerige top 10 TCP ja UDP porti, samuti porti 62078 (Apple IOS tuvastamine). An <code>open|filtered</code> sadam loetakse avatuks. A <code>filtered</code> sadam ei ole avatud. Seade peab vastama Nmap pingile. Kasuta agressiivset ajastust.<br><br/><strong>Kiiresti</strong>: <i>40 sekundit</i>. Skaneerige top 100 TCP ja UDP porti, samuti porti 62078 (Apple IOS tuvastamine). An <code>open|filtered</code> sadam loetakse avatuks. A <code>filtered</code> sadam ei ole avatud. Seade peab vastama Nmap pingile. Kasuta agressiivset ajastust.<br/><br/><strong>Keskmine (klassikaline)</strong>: <i>90 sekundit</i>. Nii lähedal traditsioonilisele Open-AudIT skannimisele, kui me seda teha saame. Skaneerige top 1000 TCP porti, samuti 62078 (Apple IOS tuvastamine) ja UDP 161 (SNMP). An <code>open|filtered</code> sadam loetakse avatuks. A <code>filtered</code> Porti peetakse avatuks (ja see käivitab seadme tuvastamise). Seadmeid skaneeritakse sõltumata Nmap pingile reageerimisest. Kasuta agressiivset ajastust.<br/><br/><strong>Keskmine</strong>: <i>100 sekundit</i>. Skaneerige top 1000 TCP ja top 100 UDP porti, samuti porti 62078 (Apple IOS tuvastamine). An <code>open|filtered</code> sadam loetakse avatuks. A <code>filtered</code> sadam ei ole avatud. Seade peab vastama Nmap pingile. Kasuta agressiivset ajastust.<br/><br/><strong>Aeglaselt</strong>: <i>4 minutit</i>. Skaneerige top 1000 TCP ja top 100 UDP porti, samuti porti 62078 (Apple IOS tuvastamine). Versiooni tuvastamine lubatud. An <code>open|filtered</code> sadam loetakse avatuks. A <code>filtered</code> Porti peetakse avatuks (ja see käivitab seadme tuvastamise). Seade peab vastama Nmap pingile. Kasuta tavalist ajastust.<br/><br/><strong>UltraSlow</strong>: <i>20 minutit</i>. Pole soovitatav. Skaneerige top 1000 TCP ja UDP porti, samuti porti 62078 (Apple IOS tuvastamine). Seadmeid skaneeritakse sõltumata Nmap pingile reageerimisest. Versiooni tuvastamine lubatud. An <code>open|filtered</code> sadam loetakse avatuks. A <code>filtered</code> Porti peetakse avatuks (ja see käivitab seadme tuvastamise). Kasuta viisakat ajastust.<br/><br/><strong>Kohandatud</strong>: <i>Tundmatu aeg</i>. Kui muudetakse valikuid, mis ei ole määratud standardse avastusega.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Rühmasid kasutatakse nõutavatele tingimustele vastavate seadmete lihtsate nimekirjadena. Kui küsitakse JSON-i abil, tagastatakse nimekiri <code>devices.id</code> ainult. Kui nõutakse veebiliidese kasutamist, tagastavad nad standardse veeru atribuutide nimekirja.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Kui kasutajal, kes logib sisse Open-AudIT-i, ei ole juurdepääsu otsingule LDAP (ja te kasutate OpenLDAP-i), saate kasutada teist kontot, millel on see juurdepääs. Kasuta <code>ldap_dn_account</code> ja <code>ldap_dn_password</code> selle seadistamiseks.<br/> <br/><strong>Kasulik dokumentatsioon</strong><br/> <br/><a href="/index.php/auth/help">Üldine autentimisabi</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Entra kasutamine autentimiseks</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">OKTA kasutamine autentimiseks</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">LDAP- i sisselogimiste tõrkeotsing</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Kasutajad, rollid ja orgid</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Seadmetüübi lisamisel tuleb seotud ikooni kuvamiseks kopeerida .svg-vormindatud fail kataloogi käsitsi:<br/><em>Linux</em>:/usr/local/openaudit/public/device_images<br/><em>Windows</em>: c:\xampp\htdocs\open-audit\device_ images<br/> <br/>Asukohatüübi lisamisel tuleb seotud ikooni kuvamiseks kopeerida kataloogi 32x32px ikoon käsitsi:<br/><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Windows</em>: c:\ xampp\htdocs\ open- audit\images\map_ ikoonid</p><p>Kui <i>ressurss</i> on <code>device</code>kehtiv <i>tüüpi</i> on: <code>class</code>, <code>environment</code>, <code>status</code> ja <code>type</code>. Kui <i>ressurss</i> on <code>locations</code> või <code>org</code> ainus kehtiv <i>tüüpi</i> on <code>type</code>. Kui <i>ressurss</i> on <code>query</code> ainus kehtiv <i>tüüpi</i> on <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Kui kavatsete oma pilvemasinaid täielikult auditeerida, ärge unustage, et vajate ka neid Open-AudIT-is salvestatud volitusi.</p><p>Veenduge, et lubate õiged pordid, kui kasutate Microsoft Azure\'i (22 SSH jaoks jne). Kontrollige oma virtuaalmasinat -> Võrgustiku reeglid.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Nimekirja tüübi valimisel lubatakse välja "väärtused". Siin tuleks panna komadega eraldatud valitavate väärtuste nimekiri. Need kuvatakse rippmenüüs alati, kui välja redigeeritakse.<br/> <br/>Nagu enamik teisi atribuute, saab väljasid redigeerida. Kasutage Bulk Edit funktsiooni nagu tavaliselt ja näete, et väljad on sisendiks saadaval.<br/> <br/>Vaadake seadme andmete ekraani, avage välja sisaldav jaotis ja (kui teil on piisav juurdepääs) saate selle muutmiseks klõpsata välja väärtusel.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>Pidevalt muutuvas arvutiturbe maailmas, kus iga päev avastatakse ja lapitakse uusi haavatavusi, peab turvalisuse järgimise jõustamine olema pidev protsess. See peab hõlmama ka poliitika kohandamise viisi, samuti perioodilist hindamist ja riskiseiret. OpenSCAP pakub vahendeid ja kohandatavaid poliitikaid nende protsesside kiireks, kulutõhusaks ja paindlikuks rakendamiseks.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integratsioonid võimaldavad seadistada seadmete valikut ja ajakavasid Open-AudIT suhtlemiseks väliste süsteemidega.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap-ajastuse üksikasjad on toodud lingitud lehekülje allosas <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. Sellel leheküljel:<br/> <br/><em>Kui teil on korralik lairiba- või ethernetiühendus, soovitaksin alati kasutada -T4 (agressiivne). Mõned inimesed armastavad -T5 (Insane), kuigi see on minu maitse jaoks liiga agressiivne. Inimesed täpsustavad mõnikord -T2 (Polite), sest nad arvavad, et see on vähem tõenäoline, et peremehed kukuvad või kuna nad peavad ennast üldiselt viisakaks. Sageli ei saa nad aru, kui aeglane T2 tegelikult on. Nende skaneerimine võib võtta kümme korda kauem kui vaikimisi skaneerimine. Masinakrahhid ja ribalaiuse probleemid on haruldased vaikeajastusvalikutega -T3 (Normal) ja seega soovitan seda tavaliselt ettevaatlikele skanneritele. Versioonituvastuse ärajätmine on nende probleemide vähendamisel palju tõhusam kui ajaväärtustega mängimine.</em><footer>Gordon <i>Fjodor</i> Lyoni</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT-i saab konfigureerida nii, et kasutaja autentimiseks kasutatakse erinevaid meetodeid ja lisaks luuakse kasutajakonto, kasutades grupi liikmelisuse alusel määratud rolle ja orge.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Ava-Aud IT saab failide või kataloogide kohta andmeid hankida ja jälgida nende failide muutusi vastavalt Open-AudIT andmebaasi teistele atribuutidele.<br/> <br/>See funktsioon töötab Linux Open-AudIT serverite kastist välja, kuid vajab teenuse konto nime muutmist Windows Open-AudIT serveri all.<br/> <br/>Toetatavad kliendid on Windows ja Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Ava-Aud IT saab failide kohta andmeid hankida, küsida kohalikust paketihaldurist, kui nad on talle teada, ja jälgida neid faile muutuste suhtes vastavalt teistele Open-AudIT andmebaasi atribuutidele.<br/> <br/>Toetatud kliendid on ainult Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Ava-Aud IT võib salvestada teavet kohandatud väljadele, mis on seotud iga seadmega.<br/> <br/>Kui lisaväli on loodud, saab seda kasutada päringutes ja rühmades nagu iga teist andmebaasi atribuuti.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT on varustatud paljude sisseehitatud päringutega. Kui vajate konkreetset päringut ja ükski eelnevalt pakitud päringutest ei vasta teie vajadustele, on üsna lihtne luua uus ja laadida see Open-AudIT-i käivitamiseks.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT on varustatud paljude sisseehitatud kokkuvõtetega. Kui vajate konkreetset kokkuvõtet ja ükski eelnevalt pakitud kokkuvõte ei vasta teie vajadustele, on üsna lihtne luua uus ja laadida see Open-AudIT-i käivitamiseks.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT-i toetab FirstWave hämmastava toetusega. Kui eelistate aktiivset abiandjate kogukonda, on see ka olemas. Kus mujal saate otse arendajatega rääkida ja saada 24 tunni jooksul vastuse? Proovige seda teiste toodetega! Hämmastav toetus. Täielik peatus. Teil on vaja toetust, meie pakume tuge. Ei mingeid bute. Suur toetus. Punkt.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT pakub multi-rentancy kastist välja!<br/> <br/>Orgid (organisatsioonid) Open-AudIT-is on võtmeelemendid. Kasutajal on nii esmane Org kui ka Orgide nimekiri, millele nad pääsevad juurde. Kasutaja ühendab selle määratud "rollide" loendiga, mis määratleb, milliseid toiminguid nad saavad teha Orgidele määratud üksustele. Kasutajate "orgs" ja "rollid" kombinatsioon määratleb, mida nad saavad ja ei saa teha Open-AudIT-is.<br/> <br/>Enamik Open-AudIT üksusi on määratud org. Seadmed, asukohad, võrgud jne.<br/> <br/>Orgid võivad saada lapsorge. Mõtle organisatsiooni diagrammi (puu) struktuurile. Kui kasutajal on juurdepääs konkreetsele Orgile, on neil ka juurdepääs sellele Orgsi järeltulijatele. Lisateabe saamiseks vaadake seda <a href="/index.php/faq?name=Users, Roles and Orgs">KKK</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT pakub multi-rentancy kastist välja!<br/> <br/>Orgid (organisatsioonid) Open-AudIT-is on võtmeelemendid. Kasutajal on nii esmane Org kui ka Orgide nimekiri, millele nad pääsevad juurde. Kasutaja ühendab selle määratud "rollide" loendiga, mis määratleb, milliseid toiminguid nad saavad teha Orgidele määratud üksustele. Kasutajate "orgs" ja "rollid" kombinatsioon määratleb, mida nad saavad ja ei saa teha Open-AudIT-is.<br/> <br/>Enamik Open-AudIT üksusi on määratud org. Seadmed, asukohad, võrgud jne.<br/> <br/>Orgid võivad saada lapsorge. Mõtle organisatsiooni diagrammi (puu) struktuurile. Kui kasutajal on juurdepääs konkreetsele Orgile, on neil ka juurdepääs sellele Orgsi järeltulijatele.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Vaadake kiiresti oma võrgu seadmete olekut.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Rollid avaaudis See on võtmeküsimus. Kasutajal on nii esmane Org kui ka Orgide nimekiri, millele nad pääsevad juurde. Kasutaja ühendab selle määratud rollide loendiga, mis määratleb, milliseid toiminguid nad saavad teha Orgidele määratud üksustele. Kasutajate "orgs" ja "rollid" kombinatsioon määratleb, mida nad saavad ja ei saa teha Open-AudIT-is.<br/> <br/>Hankige täielik Open-AudIT Enterprise kogemus. Rollide loomine võimaldab peeneteralist kontrolli selle üle, mida teie kasutajad saavad Open-AudIT-is teha.<br/> <br/>Esmane autoriseerimismeetod (mida kasutaja saab teha) põhineb kasutajate rollidel. Vaikerollid on defineeritud kui admin, org_admin, reporter ja kasutaja. Igal rollil on iga lõpp-punkti jaoks õiguste kogum (loo, loe, uuenda, kustuta). Võimalus määratleda täiendavaid rolle ja muuta olemasolevaid rolle on lubatud Open-AudIT Enterprise\'is.<br/> <br/>Rolle saab kasutada ka LDAP (Active Directory ja OpenLDAP) loaga. Ettevõtte litsentsiga käitistel on võimalik kohandada LDAP-gruppi iga määratletud rolli jaoks.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Reeglid uurivad atribuute ja teevad sobiva reegli alusel nuhtlusi.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Skaneerimise valikud võimaldavad teil hõlpsasti rakendada avastusele valikute komplekti.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Lihtne, intuitiivne ja täpne geograafiline kaardistamine Google Mapsi poolt. Avatud auditeerimise võimendus Google Maps pakub seadme asukohtade reaalajas interaktiivset geograafilist kaardistamist. Tänavaaadresside automaatne teisendamine geokoodideks ja pikkus-/laiuskraadideks.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Tarkvarapakette kasutatakse selleks, et teha kindlaks, kas installitakse viirusetõrje, varukoopia, tulemüür, heakskiidetud või keelatud tarkvara.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Mõned näited kehtivatest Subneti atribuutidest on: 192.168.1.1 (üks IP-aadress), 192.168.1.0/24 (alamvõrk), 192.168.1-3.1-20 (valik IP-aadresse).<br/> <br/><em>MÄRKUS</em> Ainult alamvõrk (nagu näiteks - 192.168.1.0/24) suudab automaatselt luua kehtiva võrgu Open-AudIT jaoks. <br/> <br/>Kui kasutate Active Directory tüüpi, veenduge, et teil on sobivad volikirjad, et rääkida oma domeenikontrolleriga juba <a href="../credentials">volikirja</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standardid salvestatakse Open-AudIT-is.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Toetatud kliendid on ainult Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Ülesannetel on ajakava, mis peegeldab unix croni ajakava. Minuti, tunni, päev_of_kuu, kuu, päev_of_nädala atribuudid toimivad vastavalt croni definitsioonidele. Nende kordajaid saab valida komadega eraldatud väärtuste abil (tühikuid ei ole). Iga väärtuse saab valida kasutades *.<br/> <br/>Theo <code>type</code> ülesandest võib olla üks järgmistest: lähtejooned, kogujad, avastused, päringud, aruanded või kokkuvõtted.<br/> <br/>Kui soovite planeerida algtaseme või avastamise, peate need enne ülesannete loomist looma. Kasutada tuleb kirje tüübi ID- d <code>sub_resource_id</code>. Näiteks, kui soovite ajastada Discovery, kasutage seda konkreetset Discoveries ID-d <code>sub_resource_id</code>.<br/> <br/>Väärtus <code>uuid</code> See on omane igale Open-AudIT serverile. Teie unikaalset väärtust võib leida konfiguratsioonis.<br/> <br/>Theo <code>options</code> atribuut on JSON-dokument, mis sisaldab ülesande täitmiseks vajalikke täiendavaid atribuute. Aruannete, päringute ja kokkuvõtete täiendavad atribuudid on järgmised: <code>email_address</code> ja <code>format</code>. Bselinesi lisaatribuut on <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>Theo <code>type</code> Asukoha asukoht määrab selle ikooni.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Atribuutide lõpp-punkt võimaldab teil lisada kohandatud väärtusi erinevatele atribuutidele Open-AudIT-is, hetkel, mil see funktsioon töötab seadmete klassi, keskkonna, oleku ja tüübi atribuutidega, atribuudiga Tüüp nii asukohtade kui orgude jaoks ning menüükategooria päringute jaoks. Kui vaatate mõnda prvious tüüpi üksust (näiteks vaade Lkocation), märkate, et atribuut Tüüp tuleb valida rippmenüüst. See on koht, kus need väärtused salvestatakse. Seega, kui soovite lisada asukoha jaoks valitud uue tüübi, lisage see funktsiooni Atribuudid abil.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Kollektsionääride funktsioon võimaldab hõlpsasti hallata paljusid "kollektor" arvuteid, mis teostavad võrgu avastamist. Kõiki kollektsioone juhitakse serverist. Ainsad vajalikud võrgupordid koguja ja Serveri vahel on 80 ja/või 443.<br/> <br/>See muudab erinevate võrkude haldamise kiireks, lihtsaks ja lihtsaks. Open-AudIT Enterprise litsentsisaajad saavad ühe kollektsionääri litsentsi ja neil on võimalus osta rohkem vastavalt vajadusele.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>SQL- i sektsioon SELECT <em>peab</em> sisaldavad täielikult kvalifitseeritud veerge. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>Kus on sinu SQL-i osa <em>peab</em> sisaldavad <code>WHERE @filter</code> Nii et Open-AudIT teab piirata teie päringut sobivate Orgidega. SQL, mis seda tingimust ei sisalda, toob kaasa päringu loomise ebaõnnestumise, kui teil pole administraatori rolli.<br/> <br/>Näidispäring SQL, mis näitab atribuute seadmetel, millel on <code>os_group</code> atribuut "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>SQL- i sektsioon SELECT <em>peab</em> sisaldavad <code>DISTINCT(devices.id)</code>.<br/> <br/>Kus on sinu SQL-i osa <em>peab</em> sisaldavad <code>WHERE @filter</code> Nii et Open-AudIT teab piirata teie päringut sobivate Orgidega. SQL, mis seda tingimust ei sisalda, toob kaasa grupi loomise ebaõnnestumise.<br/> <br/>SQL-i näide kõigi Debiani operatsioonisüsteemis töötavate seadmete valimiseks - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Litsentsi lõpp-punkt võimaldab teil jälgida teie seadmetes leiduvate litsentside arvu.<br/> <br/>Sisestuse loomiseks teie litsentside jälgimiseks <em>peab</em> esitada nimi, organisatsioon, omandatud litsentside arv ja tarkvara nimi. Väljakul <code>match_string</code> peate esitama selle tarkvara nime, mida soovite jälgida, saate kasutada protsendimärki (%) metakaardina match_ stringis.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Võrk peaks olema kujul 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Esmased ja vabatahtlikud teisesed elemendid peaksid olema täielikult kvalifitseeritud - st seadmed. tüüp või tarkvara. nimi.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Ei ole vaja midagi teha, kui kasutate Open-AudIT Linuxi serveris.<br/><br/>Windowsi kliendid on lihtsalt trahvi ja ei vaja mingeid eritoiminguid, aga ... selle funktsiooni lubamiseks tuleb auditi skript käivitada lokaalselt siht-Windowsi süsteemis. Seda ei saa käivitada kaugjuhtimisega, nagu me teeme WMI-kõnedega, kui käivitame auditi skripti ühel Windowsi masinal, sihtides samal ajal teist Windowsi masinat. Selleks peame kopeerima auditi skripti siht-Windowsi masinasse ja seejärel käivitama. Kahjuks on teenusekonto, mille alla Apache jookseb, kohaliku süsteemi konto. Sellel kontol puudub juurdepääs võrgupõhistele (võrgupõhistele) ressurssidele. Selle probleemi lahendamiseks tuleb teenust hallata teise konto all. Kõige lihtsam on kasutada kohalikku administraatori kontot, kuid võite proovida mis tahes soovitud kontot, kui sellel on vajalikud privileegid. Kohaliku süsteemi kontol on sama palju kohalikku juurdepääsu kui kohaliku administraatori kontol.<br/><br/>Vaata meie lehekülge <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Open-AudIT Apache teenuse käivitamine Windowsi all</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Need on seadmed, mis elavad riiulis.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>See lõpp-punkt võimaldab teil lisada oma pilveinfrastruktuuri üksikasju. Open-AudIT jõuab seejärel teie pilvedesse, kasutades oma kohalikku API-d ja tagastab teie serverid, nagu iga teine Open-AudIT-i seade.<br/> <br/><em>MÄRKUS</em> - Selle funktsiooni kasutamiseks... <em>peab</em> lubada konfiguratsioonielementide match_ mac (AWS-i jaoks) ja match_ hostname (Azure\'i jaoks). Seda tehakse automaatselt esimesel korral, kui pilv avastatakse.<br/> <br/>Pilvele antud volitused ()<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> või <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) on vajalikud.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Haavatavustest teatamine NIST CVE voo põhjal.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Esialgu seadistame vaikevalikutega skriptide vaikenimekirja. Neid vaikeskripte ei saa kustutada. Võite luua täiendavaid skripte, mida vajadusel kasutada. Teie skript põhineb ühel olemasoleval skriptil ja sellel on kohandatud valikud. Seejärel saab skripte alla laadida loendi lehelt menüüs -> Avasta -> Auditi skriptid -> Auditi skriptide nimekiri<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Regexi kasutamisel sobitamiseks võib leida kasuliku lehe <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP veebileht</a>. Mõned erinevused Perl Regex võib leida <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">siin</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Vidinaid saab hõlpsasti luua, et näidata oma armatuurlaudadel teie keskkonnale omast.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Avaauditiga Professionaalne ja Enterprise saate automatiseerida ja ajastada avastusi, aruannete genereerimist või baaskontrolle, et käivitada siis, kui soovite ja nii tihti kui vaja. Planeerige oma avastused öösel ja aruanded genereeritakse ja saadetakse võtmeisikutele igal hommikul. Keerulised või lihtsad ajakavad, seadme avastamine ja aruande genereerimine on vaid kliki kaugusel.<br/> <br/>Looge iga alamvõrgu või AD-kontrolleri jaoks individuaalsed avastamisgraafikud, lisage sihtrühmadele loodud aruannetesse. Töötada välja lihtsad või keerulised ajakavad, et toetada ettevõtte vajadusi, vältida varukoopiaid või mõju tegevusele või lihtsalt levitada koormust ja kiirendada auditi lõpuleviimist.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Saate luua skripti kõigi olemasolevate auditiskriptide valikutega - mitte ainult Windowsiga. AIX, ESX, Linux, OSX ja Windows on kõik kaetud.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>% märki saab kasutada metakaardina mängus match_ string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Teie riiulid aitavad täpselt täpsustada, kus teie seadmed asuvad.<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Google Maps API Selle funktsiooni jaoks on vaja võtit.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'JSON seadme ID-de massiiv, mis laseb selle võrdlusaluse täita.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'JSON kogum objekte, mis sobivad CVE-lt võetud tarkvara nimega, mida on rikastatud Open-AudIT-i saadud tarkvara nimega.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'JSON väärtuste kogum selle haavatavuse testimiseks.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'JSON-dokument, mis sisaldab sellele kasutajale määratud orge. Isikutunnistused <code>orgs.id</code>. Kui kasutajal on juurdepääs Orgile, on neil juurdepääs sellele Orgsi järeltulijatele.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'JSON dokument, mis sisaldab vajalikke atribuute sõltuvalt <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'JSON-dokument, mis sisaldab vajalikke atribuute, mis tühistavad valitud Discover_scan_ options\'i.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'JSON dokument, mis sisaldab vajalikke atribuute, mis tühistavad vaikeseadme sobivuse valikud.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'JSON dokument, mis sisaldab sellele kasutajale määratud rolle. Rollinimed võetud <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'JSON- objekt, mis sisaldab hulka atribuute, mida muuta, kui vaste leiab aset.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'JSON- objekt, mis sisaldab hulka sobivaid atribuute.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'JSON- objekt, mis sisaldab kogu spetsiifilisi võtmeid.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'JSON objekt, mis on asustatud pilve avastamise kaudu.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'JSON esitus, mis sisaldab täidetava järjekorraelemendi üksikasju.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'JSON esindab selle integratsiooni valdkondi.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'JSONi esitus üksiktestidest ja nende tulemustest kõigil seadmetel, millega see baasjoon on läbi vaadatud.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'JSON esitus testid, mis moodustavad selle poliitika.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Allalaaditava faili URL.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Arvutatud väli, mis näitab, mitu korda seda tarkvara leiti valitud Orgi (ja selle järeltulijate) arvutitest.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Kollektsionäär on kas kollektsionääri või stand-alone režiimis.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Komadega eraldatud kohaldatavate CVEde loend.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Komadega eraldatud väärtuste loend, millest ühe saab valida.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Käsk käivitada. Kui agent on Windowsi põhine, käivitatakse see käsk Powerhelli agendi sees.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Skaneerimiseks kohandatud TCP-portide loend (22 on SSH, 135 on WMI, 62078 on iPhone sünkroonimine).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Skaneeritavate kohandatud UDP-portide loend (161 on SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Väiksem arv tähendab, et seda kohaldatakse enne teisi reegleid.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Väiksem arv tähendab, et seda kohaldatakse enne teisi reegleid. Vaikekaal on 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Parool (salvestatud räsina), mis võimaldab sisselogimist rakenduse autentimise kasutamisel.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Marsruutdomeen või aadressiruum, kus IP-aadressid ja MAC-aadressid on unikaalsed.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Turvavöönd on võrgudomeeni kuuluv haldusdomeen või poliitikadomeen.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Logikirje lühikirjeldus.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Nöör, mis sobib <code>software.name</code> atribuut. Ühe või mitme tähemärgi sobitamiseks saate kasutada standardset SQL metakaarti protsentides (%).';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Kättesaadavust mõjutav haavatavus võib lubada ründajatel häirida teenuseid, krahh süsteeme või põhjustada teenusetõkestust (DoS) (puudub, madal, kõrge).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Konfidentsiaalsust mõjutav haavatavus võib võimaldada ründajatel lugeda tundlikke andmeid, näiteks isikuandmeid, volitusi või ärisaladuse alla kuuluvaid andmeid (puudub, madal, kõrge).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Terviklikkust mõjutav haavatavus võib lubada ründajatel andmeid muuta, sisestada pahatahtlikku koodi või muuta süsteemi konfiguratsioone (puudub, madal, kõrge).';

$GLOBALS["lang"]['AD Group'] = 'AD grupp';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN jne';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'Kõik IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API dokumentatsioon';

$GLOBALS["lang"]['API Key required.'] = 'Nõutav on API võti.';

$GLOBALS["lang"]['API Result'] = 'API tulemus';

$GLOBALS["lang"]['About'] = 'Umbes';

$GLOBALS["lang"]['Accept'] = 'Nõustuge';

$GLOBALS["lang"]['access_point'] = 'Juurdepääsupunkt';

$GLOBALS["lang"]['Access Point'] = 'Juurdepääsupunkt';

$GLOBALS["lang"]['access_token'] = 'Access Token';

$GLOBALS["lang"]['Access Token'] = 'Access Token';

$GLOBALS["lang"]['ack_by'] = 'Ack';

$GLOBALS["lang"]['Ack By'] = 'Ack';

$GLOBALS["lang"]['ack_date'] = 'Ack kuupäev';

$GLOBALS["lang"]['Ack Date'] = 'Ack kuupäev';

$GLOBALS["lang"]['ack_time'] = 'Ack Time';

$GLOBALS["lang"]['Ack Time'] = 'Ack Time';

$GLOBALS["lang"]['action'] = 'Action';

$GLOBALS["lang"]['Action'] = 'Action';

$GLOBALS["lang"]['action_audit'] = 'Tegevusaudit';

$GLOBALS["lang"]['Action Audit'] = 'Tegevusaudit';

$GLOBALS["lang"]['action_command'] = 'tegevuskomando';

$GLOBALS["lang"]['Action Command'] = 'tegevuskomando';

$GLOBALS["lang"]['action_date'] = 'Tegevuse kuupäev';

$GLOBALS["lang"]['Action Date'] = 'Tegevuse kuupäev';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Asukohale määratud tegevusseadmed';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Asukohale määratud tegevusseadmed';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Orgile määratud toiminguseadmed';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Orgile määratud toiminguseadmed';

$GLOBALS["lang"]['action_download'] = 'Toiming Laadi alla';

$GLOBALS["lang"]['Action Download'] = 'Toiming Laadi alla';

$GLOBALS["lang"]['action_uninstall'] = 'Toiming Eemalda';

$GLOBALS["lang"]['Action Uninstall'] = 'Toiming Eemalda';

$GLOBALS["lang"]['actioned'] = 'Tegutsesin';

$GLOBALS["lang"]['Actioned'] = 'Tegutsesin';

$GLOBALS["lang"]['actioned_by'] = 'Tegutsesid';

$GLOBALS["lang"]['Actioned By'] = 'Tegutsesid';

$GLOBALS["lang"]['actioned_date'] = 'Toimingu kuupäev';

$GLOBALS["lang"]['Actioned Date'] = 'Toimingu kuupäev';

$GLOBALS["lang"]['actions'] = 'Tegevused';

$GLOBALS["lang"]['Actions'] = 'Tegevused';

$GLOBALS["lang"]['Activate'] = 'Aktiveeri';

$GLOBALS["lang"]['Activate Free License'] = 'Aktiveeri vaba litsents';

$GLOBALS["lang"]['Activate Key'] = 'Aktiveeri võti';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Aktiveeri tasuta ettevõtluslitsents';

$GLOBALS["lang"]['Active'] = 'Aktiivselt';

$GLOBALS["lang"]['Active / Active'] = 'Aktiivne/aktiivne';

$GLOBALS["lang"]['Active / Passive'] = 'Aktiivne/passiivne';

$GLOBALS["lang"]['Active Directory'] = 'Active Directory';

$GLOBALS["lang"]['Active Directory Domain'] = 'Aktiivse kataloogi domeen';

$GLOBALS["lang"]['active_directory_ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Active Directory serverName';

$GLOBALS["lang"]['ad_domain'] = 'Ad Domeen';

$GLOBALS["lang"]['Ad Domain'] = 'Ad Domeen';

$GLOBALS["lang"]['ad_group'] = 'Ad Group';

$GLOBALS["lang"]['Ad Group'] = 'Ad Group';

$GLOBALS["lang"]['ad_server'] = 'Ad Server';

$GLOBALS["lang"]['Ad Server'] = 'Ad Server';

$GLOBALS["lang"]['Add'] = 'Lisa';

$GLOBALS["lang"]['Add Credentials'] = 'Lisa mandaate';

$GLOBALS["lang"]['Add Device'] = 'Lisage seade';

$GLOBALS["lang"]['Add Device to Application'] = 'Seadme lisamine rakendusele';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Lisa seade klastrisse';

$GLOBALS["lang"]['Add Exception'] = 'Lisa erand';

$GLOBALS["lang"]['Add Field'] = 'Lisa väli';

$GLOBALS["lang"]['Add If'] = 'Lisa';

$GLOBALS["lang"]['Add Policies from Device'] = 'Režiimide lisamine seadmest';

$GLOBALS["lang"]['Add Policy'] = 'Lisa poliitika';

$GLOBALS["lang"]['Add Then'] = 'Lisage';

$GLOBALS["lang"]['Add image'] = 'Pildi lisamine';

$GLOBALS["lang"]['additional_items'] = 'Täiendavad kirjed';

$GLOBALS["lang"]['Additional Items'] = 'Täiendavad kirjed';

$GLOBALS["lang"]['address'] = 'Aadress';

$GLOBALS["lang"]['Address'] = 'Aadress';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'administraatori staatus';

$GLOBALS["lang"]['Admin Status'] = 'administraatori staatus';

$GLOBALS["lang"]['advanced'] = 'Advanced';

$GLOBALS["lang"]['Advanced'] = 'Advanced';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistani';

$GLOBALS["lang"]['agents'] = 'Agendid';

$GLOBALS["lang"]['Agents'] = 'Agendid';

$GLOBALS["lang"]['Aggressive'] = 'Agressiivne';

$GLOBALS["lang"]['Aland Islands'] = 'Alandi saared';

$GLOBALS["lang"]['Albania'] = 'Albaania';

$GLOBALS["lang"]['alert_style'] = 'Häirestiil';

$GLOBALS["lang"]['Alert Style'] = 'Häirestiil';

$GLOBALS["lang"]['Algeria'] = 'Alžeeria';

$GLOBALS["lang"]['algorithm'] = 'Algoritm';

$GLOBALS["lang"]['Algorithm'] = 'Algoritm';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'Kõik';

$GLOBALS["lang"]['All IPs'] = 'Kõik IPd';

$GLOBALS["lang"]['All Policies'] = 'Kõik poliitikad';

$GLOBALS["lang"]['All Queued Items'] = 'Kõik järjekorras olevad elemendid';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Fields';

$GLOBALS["lang"]['American Samoa'] = 'Ameerika Samoa';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Rida <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Rida <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Hulk objekte, mis esindavad väliseid linke rohkema informatsiooni juurde.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Krüpteeritud JSON-dokument, mis sisaldab vajalikke atribuute sõltuvalt <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Märge selle veebilehe poolt nõutava teenuse taseme kohta.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Sisemine väli, mis näitab, kas avastus on lõppenud.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Valikuline geokood';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Valikuline parool sudo kasutamiseks.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Antarktika';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua ja Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antiviirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Kõik TCP-pordid (koma eraldatud, tühikuid ei ole), mida soovite sellest avastusest välja jätta. Saadaval ainult Nmap 7+ kasutamise korral.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Kõik UDP-pordid (koma eraldatud, tühikuid ei ole), mida soovite sellest avastusest välja jätta. Saadaval ainult Nmap 7+ kasutamise korral.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Kõik täiendavad dokumendid, mida vajate.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Kõik täiendavad märkmed, mida soovite teha.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Kõik seadmed määratakse sellele orgile, kui nad käivitavad oma auditi skripti (kui see on seadistatud). Lingid <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Kõik leitud seadmed määratakse sellele asukohale, kui see on määratud. Lingid <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Kõik leitud seadmed määratakse sellele asukohale, kui nad käivitavad oma auditi skripti (kui see on seadistatud). Lingid <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Kõik avastatud seadmed omistatakse sellele orgile, kui see on määratud. Kui ei ole määratud, määratakse need <code>org_id</code> avastusest. Lingid <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Kõik vajalikud filtrid. MÄRKUS: Kui tüüp = liiklus, tähistab see fondi suurepärast ikooni.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Kõik konkreetsed TCP-pordid, mida soovid testida (koma eraldatud, tühikuid ei ole).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Iga konkreetne UDP port, mida soovid testida (koma eraldatud, tühikuid ei ole).';

$GLOBALS["lang"]['Application'] = 'Rakendus';

$GLOBALS["lang"]['application_id'] = 'Rakenduse ID';

$GLOBALS["lang"]['Application ID'] = 'Rakenduse ID';

$GLOBALS["lang"]['Application Licenses'] = 'Rakenduslitsentsid';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Rakendus, operatsioonisüsteem või riistvara.';

$GLOBALS["lang"]['applications'] = 'Rakendused';

$GLOBALS["lang"]['Applications'] = 'Rakendused';

$GLOBALS["lang"]['applied'] = 'Rakendatud';

$GLOBALS["lang"]['Applied'] = 'Rakendatud';

$GLOBALS["lang"]['Approved'] = 'Heaks kiidetud';

$GLOBALS["lang"]['April'] = 'Aprill';

$GLOBALS["lang"]['architecture'] = 'Arhitektuur';

$GLOBALS["lang"]['Architecture'] = 'Arhitektuur';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Kas tõesti kustutada see sisendelement?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Kas tõesti kustutada see väljundelement?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Oled sa kindel? See eemaldab kõik järjekordade kirjed ja takistab ülejäänud IP-de avastamist.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Oled sa kindel? See lähtestab järjekorra töötlemise arvu ja võib põhjustada serveri koormust.';

$GLOBALS["lang"]['area'] = 'Area';

$GLOBALS["lang"]['Area'] = 'Area';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armeenia';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Nagu seadmete keskkondade atribuutide puhul. Tootmine, koolitus jne.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Kui olete kogujad registreerinud, palun valige, kus seda avastust teha.';

$GLOBALS["lang"]['Ask me later'] = 'Küsi hiljem.';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Küsi abi või anna vastuseid teistele.';

$GLOBALS["lang"]['aspect_ratio'] = 'Aspektisuhe';

$GLOBALS["lang"]['Aspect Ratio'] = 'Aspektisuhe';

$GLOBALS["lang"]['Asset ID'] = 'Vara ID';

$GLOBALS["lang"]['asset_ident'] = 'Vara tunnuskood';

$GLOBALS["lang"]['Asset Ident'] = 'Vara tunnuskood';

$GLOBALS["lang"]['asset_number'] = 'Vara number';

$GLOBALS["lang"]['Asset Number'] = 'Vara number';

$GLOBALS["lang"]['asset_tag'] = 'Varamärgis';

$GLOBALS["lang"]['Asset Tag'] = 'Varamärgis';

$GLOBALS["lang"]['Assign Device to Application'] = 'Seade omistatakse rakendusele';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Seade omistatakse klastrile';

$GLOBALS["lang"]['Assign Device to Location'] = 'Seadme omistamine asukohale';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Seadme omistamine organisatsioonile';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Seadmete omistamine asukohale';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Seadmete omistamine organisatsioonile';

$GLOBALS["lang"]['Assign an Operator'] = 'Määra operaatorile';

$GLOBALS["lang"]['Assigned To'] = 'Määratud';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Praegu saame kasutada netstat_ports, tarkvara ja kasutajad.';

$GLOBALS["lang"]['attached_device_id'] = 'Kaasatud seadme ID';

$GLOBALS["lang"]['Attached Device ID'] = 'Kaasatud seadme ID';

$GLOBALS["lang"]['attached_to'] = 'Seotud';

$GLOBALS["lang"]['Attached To'] = 'Seotud';

$GLOBALS["lang"]['attachment'] = 'Kinnitus';

$GLOBALS["lang"]['Attachment'] = 'Kinnitus';

$GLOBALS["lang"]['attachments'] = 'Kaasatud';

$GLOBALS["lang"]['Attachments'] = 'Kaasatud';

$GLOBALS["lang"]['attack_complexity'] = 'Rünnaku keerukus';

$GLOBALS["lang"]['Attack Complexity'] = 'Rünnaku keerukus';

$GLOBALS["lang"]['attack_requirements'] = 'Rünnaku nõuded';

$GLOBALS["lang"]['Attack Requirements'] = 'Rünnaku nõuded';

$GLOBALS["lang"]['attack_vector'] = 'Rünnakuvektor';

$GLOBALS["lang"]['Attack Vector'] = 'Rünnakuvektor';

$GLOBALS["lang"]['Attribute'] = 'Atribuut';

$GLOBALS["lang"]['attributes'] = 'Atribuudid';

$GLOBALS["lang"]['Attributes'] = 'Atribuudid';

$GLOBALS["lang"]['Audit'] = 'Audit';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Audit ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Linuxi audit';

$GLOBALS["lang"]['audit_log'] = 'Auditi logi';

$GLOBALS["lang"]['Audit Log'] = 'Auditi logi';

$GLOBALS["lang"]['Audit My PC'] = 'Audit Minu arvuti';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Auditi tulemuste sisend';

$GLOBALS["lang"]['Audit Status'] = 'Auditi staatus';

$GLOBALS["lang"]['Audit Windows'] = 'Audit Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Seadme auditeerimine';

$GLOBALS["lang"]['Audits'] = 'Auditid';

$GLOBALS["lang"]['August'] = 'August';

$GLOBALS["lang"]['Australia'] = 'Austraaliast';

$GLOBALS["lang"]['Austria'] = 'Austria';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Autentimise paroolifraas';

$GLOBALS["lang"]['authority_key_ident'] = 'Asutuse võtme identifikaator';

$GLOBALS["lang"]['Authority Key Ident'] = 'Asutuse võtme identifikaator';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['auto_renew'] = 'Automaatne uuendamine';

$GLOBALS["lang"]['Auto Renew'] = 'Automaatne uuendamine';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Automaatselt asustatud Open-AudIT serveriga.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Automaatne';

$GLOBALS["lang"]['Automatable'] = 'Automaatne';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automaatselt asustatud vastavalt Collectors OS-ile.';

$GLOBALS["lang"]['availability'] = 'Kättesaadavus';

$GLOBALS["lang"]['Availability'] = 'Kättesaadavus';

$GLOBALS["lang"]['Azerbaijan'] = 'Aserbaidžaani';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU kokku';

$GLOBALS["lang"]['Backup'] = 'Varumees';

$GLOBALS["lang"]['Bahamas the'] = 'Bahama';

$GLOBALS["lang"]['Bahrain'] = 'Bahrein';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladeshi';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Keelatud';

$GLOBALS["lang"]['bar_code'] = 'Vöötkood';

$GLOBALS["lang"]['Bar Code'] = 'Vöötkood';

$GLOBALS["lang"]['Barbados'] = 'Barbadose';

$GLOBALS["lang"]['Base DN'] = 'Alus DN';

$GLOBALS["lang"]['base_score'] = 'Baastulemus';

$GLOBALS["lang"]['Base Score'] = 'Baastulemus';

$GLOBALS["lang"]['base_severity'] = 'Baasraskus';

$GLOBALS["lang"]['Base Severity'] = 'Baasraskus';

$GLOBALS["lang"]['based_on'] = 'Põhineb';

$GLOBALS["lang"]['Based On'] = 'Põhineb';

$GLOBALS["lang"]['baseline'] = 'Lähtejoon';

$GLOBALS["lang"]['Baseline'] = 'Lähtejoon';

$GLOBALS["lang"]['baseline_id'] = 'Lähtekood';

$GLOBALS["lang"]['Baseline ID'] = 'Lähtekood';

$GLOBALS["lang"]['baselines'] = 'lähtejooned';

$GLOBALS["lang"]['Baselines'] = 'lähtejooned';

$GLOBALS["lang"]['baselines_policies'] = 'Lähteolukorra põhimõtted';

$GLOBALS["lang"]['Baselines Policies'] = 'Lähteolukorra põhimõtted';

$GLOBALS["lang"]['Baselines Policy'] = 'Lähteolukorra põhimõtted';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Lähteolukorra poliitika üksikasjad';

$GLOBALS["lang"]['baselines_results'] = 'Lähteolukorra tulemused';

$GLOBALS["lang"]['Baselines Results'] = 'Lähteolukorra tulemused';

$GLOBALS["lang"]['Basic'] = 'Põhiline';

$GLOBALS["lang"]['Belarus'] = 'Valgevene';

$GLOBALS["lang"]['Belgium'] = 'Belgia';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'Võrdlusmärk';

$GLOBALS["lang"]['benchmark_id'] = 'Võrdlusaluse ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Võrdlusaluse ID';

$GLOBALS["lang"]['benchmarks'] = 'Võrdlusalused';

$GLOBALS["lang"]['Benchmarks'] = 'Võrdlusalused';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Võrdlusaluste erandid';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Võrdlusaluste erandid';

$GLOBALS["lang"]['benchmarks_log'] = 'Võrdlusaluste logi';

$GLOBALS["lang"]['Benchmarks Log'] = 'Võrdlusaluste logi';

$GLOBALS["lang"]['benchmarks_policies'] = 'Võrdlusalused';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Võrdlusalused';

$GLOBALS["lang"]['benchmarks_result'] = 'Võrdlustulemused';

$GLOBALS["lang"]['Benchmarks Result'] = 'Võrdlustulemused';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermuda';

$GLOBALS["lang"]['best_practises'] = 'Parimad tavad';

$GLOBALS["lang"]['Best Practises'] = 'Parimad tavad';

$GLOBALS["lang"]['Bhutan'] = 'Bhutan';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['body'] = 'Keha';

$GLOBALS["lang"]['Body'] = 'Keha';

$GLOBALS["lang"]['Bolivia'] = 'Boliivia';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y/n';

$GLOBALS["lang"]['boot_device'] = 'Boot seade';

$GLOBALS["lang"]['Boot Device'] = 'Boot seade';

$GLOBALS["lang"]['bootable'] = 'Bootable';

$GLOBALS["lang"]['Bootable'] = 'Bootable';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnia ja Hertsegoviina';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouveti saar (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasiilia';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brasiilia portugallane';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Briti India ookeani ala (Chagose saarestik)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Briti Neitsisaared';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu Total';

$GLOBALS["lang"]['Btu Total'] = 'Btu Total';

$GLOBALS["lang"]['build_number'] = 'Ehitamisnumber';

$GLOBALS["lang"]['Build Number'] = 'Ehitamisnumber';

$GLOBALS["lang"]['build_number_full'] = 'Ehita täisarv';

$GLOBALS["lang"]['Build Number Full'] = 'Ehita täisarv';

$GLOBALS["lang"]['Building'] = 'Hoone';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgaaria';

$GLOBALS["lang"]['Bulk Edit'] = 'Redigeerimine';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Puistetöötlusseadme atribuudid';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Ärilised nõuded';

$GLOBALS["lang"]['Business Requirements'] = 'Ärilised nõuded';

$GLOBALS["lang"]['Buy'] = 'Osta';

$GLOBALS["lang"]['Buy More'] = 'Osta rohkem';

$GLOBALS["lang"]['Buy More Licenses'] = 'Osta rohkem litsentse';

$GLOBALS["lang"]['By'] = 'By';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maski';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUd';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Arvutatud avastamise põhjal.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Arvutatud selle võrgu kehtivate IP-aadresside koguarv.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Selle punkti täitmiseks kulunud aeg on arvutatud pärast täitmist.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Arvutatakse integreerimise käigus ja see sisaldab selles integratsioonis olevate seadmete JSON-kujutist. Iga link <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Arvutatakse integratsiooni käigus ja see sisaldab JSON-i esitust integratsiooni asukohtadest. Iga link <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Arvutatakse integreerimise käivitamisel ja see sisaldab Open-AudIT-ist valitud seadmete arvu.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Arvutatakse integreerimise käigus ja see sisaldab valitud seadmete arvu välissüsteemis.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Arvutatakse integreerimise käigus ja see sisaldab välises süsteemis uuendatavate seadmete arvu.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Arvutatakse integratsiooni käivitamisel ja see sisaldab Open-AudIT-is uuendatud seadmete arvu.';

$GLOBALS["lang"]['Cambodia'] = 'Kambodža';

$GLOBALS["lang"]['Cameroon'] = 'Kameruni';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Saab <code>active</code>, <code>passive</code> või tühi.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Saab <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> või tühi.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Saab <code>auto</code>, <code>fixed</code>, <code>other</code> või tühi.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Saab <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> või tühi.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Saab <code>line</code>, <code>pie</code> või <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Saab <code>user</code> või <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Seda saab määrata avastamise või kasutaja abil.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Seda saab määrata avastamise või kasutaja abil. Kasutab asukohatabeli ID- d.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Kasutaja saab seda elementi muuta.';

$GLOBALS["lang"]['Canada'] = 'Kanada';

$GLOBALS["lang"]['Cancel'] = 'Tühistage';

$GLOBALS["lang"]['capabilities'] = 'Võimekus';

$GLOBALS["lang"]['Capabilities'] = 'Võimekus';

$GLOBALS["lang"]['Capacity'] = 'Võimekus';

$GLOBALS["lang"]['Cape Verde'] = 'Cabo Verde';

$GLOBALS["lang"]['Capitalise'] = 'Kapitaliseerida';

$GLOBALS["lang"]['caption'] = 'Pealkiri';

$GLOBALS["lang"]['Caption'] = 'Pealkiri';

$GLOBALS["lang"]['Cayman Islands'] = 'Kaimanisaared';

$GLOBALS["lang"]['Cellular Details'] = 'Rakkude andmed';

$GLOBALS["lang"]['Central African Republic'] = 'Kesk-Aafrika Vabariik';

$GLOBALS["lang"]['certificate'] = 'Sertifikaadi';

$GLOBALS["lang"]['Certificate'] = 'Sertifikaadi';

$GLOBALS["lang"]['certificate_file'] = 'Sertifikaadifail';

$GLOBALS["lang"]['Certificate File'] = 'Sertifikaadifail';

$GLOBALS["lang"]['certificate_name'] = 'Sertifikaadi nimi';

$GLOBALS["lang"]['Certificate Name'] = 'Sertifikaadi nimi';

$GLOBALS["lang"]['certificates'] = 'Sertifikaadid';

$GLOBALS["lang"]['Certificates'] = 'Sertifikaadid';

$GLOBALS["lang"]['Chad'] = 'Chad';

$GLOBALS["lang"]['change_id'] = 'Muuda ID';

$GLOBALS["lang"]['Change ID'] = 'Muuda ID';

$GLOBALS["lang"]['change_log'] = 'Muuda logi';

$GLOBALS["lang"]['Change Log'] = 'Muuda logi';

$GLOBALS["lang"]['change_type'] = 'Muuda tüüpi';

$GLOBALS["lang"]['Change Type'] = 'Muuda tüüpi';

$GLOBALS["lang"]['check_minutes'] = 'Kontrollprotokollid';

$GLOBALS["lang"]['Check Minutes'] = 'Kontrollprotokollid';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Kontrolli SSH- d nendes sadamates';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Kontrolli seda porti kõigi SSH teenuste osas.';

$GLOBALS["lang"]['Chile'] = 'Tšiili';

$GLOBALS["lang"]['China'] = 'Hiina';

$GLOBALS["lang"]['Choose'] = 'Vali';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Vali (valige kõigepealt OS)';

$GLOBALS["lang"]['Choose a Device'] = 'Seadme valimine';

$GLOBALS["lang"]['Choose a Table'] = 'Tabeli valimine';

$GLOBALS["lang"]['Christmas Island'] = 'jõulusaare';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Vooluringide arv';

$GLOBALS["lang"]['Circuit Count'] = 'Vooluringide arv';

$GLOBALS["lang"]['circuit_status'] = 'Vooluahela olek';

$GLOBALS["lang"]['Circuit Status'] = 'Vooluahela olek';

$GLOBALS["lang"]['city'] = 'City';

$GLOBALS["lang"]['City'] = 'City';

$GLOBALS["lang"]['class'] = 'klass';

$GLOBALS["lang"]['Class'] = 'klass';

$GLOBALS["lang"]['class_text'] = 'Klassitekst';

$GLOBALS["lang"]['Class Text'] = 'Klassitekst';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Klõpsa nupule Kustuta, et eemaldada näidisseadmed Open-AudIT-ist.<br/>See eemaldab allpool olevad seadmed andmebaasist. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Klõpsa allolevale nupule Import, et sisestada Open- AudIT seadme näidisandmetega.';

$GLOBALS["lang"]['Client ID'] = 'Kliendi ID';

$GLOBALS["lang"]['client_ident'] = 'Kliendi identifikaator';

$GLOBALS["lang"]['Client Ident'] = 'Kliendi identifikaator';

$GLOBALS["lang"]['client_secret'] = 'Kliendisaladus';

$GLOBALS["lang"]['Client Secret'] = 'Kliendisaladus';

$GLOBALS["lang"]['client_site_name'] = 'Kliendi saidi nimi';

$GLOBALS["lang"]['Client Site Name'] = 'Kliendi saidi nimi';

$GLOBALS["lang"]['Close'] = 'Sulge';

$GLOBALS["lang"]['Cloud'] = 'Pilve';

$GLOBALS["lang"]['Cloud Details'] = 'Pilveandmed';

$GLOBALS["lang"]['Cloud Discovery'] = 'Pilvede avastamine';

$GLOBALS["lang"]['cloud_id'] = 'Pilve ID';

$GLOBALS["lang"]['Cloud ID'] = 'Pilve ID';

$GLOBALS["lang"]['cloud_log'] = 'Pilvelogi';

$GLOBALS["lang"]['Cloud Log'] = 'Pilvelogi';

$GLOBALS["lang"]['cloud_name'] = 'Pilvenimi';

$GLOBALS["lang"]['Cloud Name'] = 'Pilvenimi';

$GLOBALS["lang"]['Cloud Network'] = 'Pilvevõrk';

$GLOBALS["lang"]['clouds'] = 'Pilved';

$GLOBALS["lang"]['Clouds'] = 'Pilved';

$GLOBALS["lang"]['cluster'] = 'Cluster';

$GLOBALS["lang"]['Cluster'] = 'Cluster';

$GLOBALS["lang"]['cluster_id'] = 'Klastri ID';

$GLOBALS["lang"]['Cluster ID'] = 'Klastri ID';

$GLOBALS["lang"]['cluster_name'] = 'Klastri nimi';

$GLOBALS["lang"]['Cluster Name'] = 'Klastri nimi';

$GLOBALS["lang"]['cluster_type'] = 'Klastri tüüp';

$GLOBALS["lang"]['Cluster Type'] = 'Klastri tüüp';

$GLOBALS["lang"]['clusters'] = 'klastrid';

$GLOBALS["lang"]['Clusters'] = 'klastrid';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kookossaared (Keeling)';

$GLOBALS["lang"]['Collector'] = 'Koguja';

$GLOBALS["lang"]['Collector (UUID)'] = 'Koguja (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Kollektsiooni nimi';

$GLOBALS["lang"]['collector_uuid'] = 'Koguja Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Koguja Uuid';

$GLOBALS["lang"]['collectors'] = 'Kogujad';

$GLOBALS["lang"]['Collectors'] = 'Kogujad';

$GLOBALS["lang"]['Colombia'] = 'Colombia';

$GLOBALS["lang"]['color'] = 'Värv';

$GLOBALS["lang"]['Color'] = 'Värv';

$GLOBALS["lang"]['column'] = 'Kolonn';

$GLOBALS["lang"]['Column'] = 'Kolonn';

$GLOBALS["lang"]['Columns'] = 'Kolonnid';

$GLOBALS["lang"]['command'] = 'Komando';

$GLOBALS["lang"]['Command'] = 'Komando';

$GLOBALS["lang"]['command_options'] = 'Käsu valikud';

$GLOBALS["lang"]['Command Options'] = 'Käsu valikud';

$GLOBALS["lang"]['command_output'] = 'Käsu väljund';

$GLOBALS["lang"]['Command Output'] = 'Käsu väljund';

$GLOBALS["lang"]['command_status'] = 'Juhtimise staatus';

$GLOBALS["lang"]['Command Status'] = 'Juhtimise staatus';

$GLOBALS["lang"]['command_time_to_execute'] = 'Käivitatav käsuaeg';

$GLOBALS["lang"]['Command Time To Execute'] = 'Käivitatav käsuaeg';

$GLOBALS["lang"]['comment'] = 'Kommentaar';

$GLOBALS["lang"]['Comment'] = 'Kommentaar';

$GLOBALS["lang"]['comments'] = 'Märkused';

$GLOBALS["lang"]['Comments'] = 'Märkused';

$GLOBALS["lang"]['commercial'] = 'Kaubanduslik';

$GLOBALS["lang"]['Commercial'] = 'Kaubanduslik';

$GLOBALS["lang"]['common_name'] = 'Tavanimetus';

$GLOBALS["lang"]['Common Name'] = 'Tavanimetus';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Tavaliselt nimetatakse seda klienditunnuseks.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Tavaliselt nimetatakse seda kliendisaladuseks.';

$GLOBALS["lang"]['Community'] = 'Ühenduse';

$GLOBALS["lang"]['Community Questions'] = 'Kogukonnaküsimused';

$GLOBALS["lang"]['Community String'] = 'Ühenduse keelpilli';

$GLOBALS["lang"]['Comoros the'] = 'Komoorid';

$GLOBALS["lang"]['Compact'] = 'Kompaktne';

$GLOBALS["lang"]['Company'] = 'Firma';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Rünnaku keerukus (madal või kõrge).';

$GLOBALS["lang"]['Component Table'] = 'Komponentide tabel';

$GLOBALS["lang"]['Components (All Devices)'] = 'Komponendid (kõik seadmed)';

$GLOBALS["lang"]['Compute'] = 'Arvuta';

$GLOBALS["lang"]['Condition'] = 'Seisund';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Vaikimisi seadistamine ';

$GLOBALS["lang"]['config_file'] = 'Seadistamine Fail';

$GLOBALS["lang"]['Config File'] = 'Seadistamine Fail';

$GLOBALS["lang"]['config_manager_error_code'] = 'Seadistamishalduri veakood';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Seadistamishalduri veakood';

$GLOBALS["lang"]['configuration'] = 'Seadistamine';

$GLOBALS["lang"]['Configuration'] = 'Seadistamine';

$GLOBALS["lang"]['Configure'] = 'Seadistamine';

$GLOBALS["lang"]['Congo'] = 'Kongo';

$GLOBALS["lang"]['Congo the'] = 'Kongo';

$GLOBALS["lang"]['Connected To'] = 'Ühendatud';

$GLOBALS["lang"]['connection'] = 'Ühendus';

$GLOBALS["lang"]['Connection'] = 'Ühendus';

$GLOBALS["lang"]['Connection Options'] = 'Ühenduse valikud';

$GLOBALS["lang"]['connection_status'] = 'Ühenduse olek';

$GLOBALS["lang"]['Connection Status'] = 'Ühenduse olek';

$GLOBALS["lang"]['connections'] = 'Ühendused';

$GLOBALS["lang"]['Connections'] = 'Ühendused';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Arvesta filtreeritud Sadamad lahti';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Openfilfiltreeritud Sadamad lahti';

$GLOBALS["lang"]['contact'] = 'Kontakt';

$GLOBALS["lang"]['Contact'] = 'Kontakt';

$GLOBALS["lang"]['contact_name'] = 'Kontaktinimi';

$GLOBALS["lang"]['Contact Name'] = 'Kontaktinimi';

$GLOBALS["lang"]['contained_in'] = 'Sisaldab';

$GLOBALS["lang"]['Contained In'] = 'Sisaldab';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Sisaldab JSON- objekti, mis kirjeldab seotud vidinaid ja nende asukohti.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Sisaldab välju, mis määravad, kas kasutada ssh, snmp ja wmi avastamise võimalusi. Json objekt.';

$GLOBALS["lang"]['Context Engine ID'] = 'Kontekstimootori ID';

$GLOBALS["lang"]['Context Name'] = 'Konteksti nimi';

$GLOBALS["lang"]['contractual_obligations'] = 'Lepingulised kohustused';

$GLOBALS["lang"]['Contractual Obligations'] = 'Lepingulised kohustused';

$GLOBALS["lang"]['Cook Islands'] = 'Cooki saared';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Auditi tulemuse kopeerimine ja kleepimine';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopeerige ja kleepige allolev foorumeid, mõnda muud Open-AudITi näidet või mujal, kus peate selle elemendi esitama.';

$GLOBALS["lang"]['core_count'] = 'Põhikrahv';

$GLOBALS["lang"]['Core Count'] = 'Põhikrahv';

$GLOBALS["lang"]['Cores'] = 'Cores';

$GLOBALS["lang"]['cost_center'] = 'Kulukeskus';

$GLOBALS["lang"]['Cost Center'] = 'Kulukeskus';

$GLOBALS["lang"]['cost_code'] = 'Kulukood';

$GLOBALS["lang"]['Cost Code'] = 'Kulukood';

$GLOBALS["lang"]['Costa Rica'] = 'Costa Rica';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Côte d\'Ivoire';

$GLOBALS["lang"]['count'] = 'Krahv';

$GLOBALS["lang"]['Count'] = 'Krahv';

$GLOBALS["lang"]['country'] = 'Riik';

$GLOBALS["lang"]['Country'] = 'Riik';

$GLOBALS["lang"]['country_code'] = 'Riigi kood';

$GLOBALS["lang"]['Country Code'] = 'Riigi kood';

$GLOBALS["lang"]['cpu_count'] = 'Cpu krahv';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu krahv';

$GLOBALS["lang"]['Create'] = 'Loo';

$GLOBALS["lang"]['Create Example Devices'] = 'Näiteseadmete loomine';

$GLOBALS["lang"]['create_external_count'] = 'Välise arvu loomine';

$GLOBALS["lang"]['Create External Count'] = 'Välise arvu loomine';

$GLOBALS["lang"]['create_external_from_internal'] = 'Loo väliselt sisemiselt';

$GLOBALS["lang"]['Create External From Internal'] = 'Loo väliselt sisemiselt';

$GLOBALS["lang"]['Create Geocode'] = 'Geokoodi loomine';

$GLOBALS["lang"]['create_internal_count'] = 'Sisemise loenduse loomine';

$GLOBALS["lang"]['Create Internal Count'] = 'Sisemise loenduse loomine';

$GLOBALS["lang"]['create_internal_from_external'] = 'Loo väliselt sisemine';

$GLOBALS["lang"]['Create Internal From External'] = 'Loo väliselt sisemine';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'NMIS- seadmete loomine Open- AudITist';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Avaauditi loomine Seadmed ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Avaauditi loomine NMISi seadmed';

$GLOBALS["lang"]['created_by'] = 'Loodud';

$GLOBALS["lang"]['Created By'] = 'Loodud';

$GLOBALS["lang"]['created_date'] = 'Loodud kuupäev';

$GLOBALS["lang"]['Created Date'] = 'Loodud kuupäev';

$GLOBALS["lang"]['Creating'] = 'Loomine';

$GLOBALS["lang"]['Creating Device'] = 'Seadme loomine';

$GLOBALS["lang"]['Creating a Query'] = 'Päringu loomine';

$GLOBALS["lang"]['creator'] = 'Looja';

$GLOBALS["lang"]['Creator'] = 'Looja';

$GLOBALS["lang"]['credential'] = 'Volikiri';

$GLOBALS["lang"]['Credential'] = 'Volikiri';

$GLOBALS["lang"]['credentials'] = 'Volikirjad';

$GLOBALS["lang"]['Credentials'] = 'Volikirjad';

$GLOBALS["lang"]['Credentials Client ID'] = 'Volikirjad Kliendi ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Volikirjade märkimine ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Volikirja rentniku ID';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Pilvede avastamisel kasutatud Amazon AWS-i volitused';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Microsofti volitused Pilvede avastamisel kasutatav Azure';

$GLOBALS["lang"]['Critical'] = 'Kriitiline';

$GLOBALS["lang"]['criticality'] = 'Kriitiline';

$GLOBALS["lang"]['Criticality'] = 'Kriitiline';

$GLOBALS["lang"]['Croatia'] = 'Horvaatia';

$GLOBALS["lang"]['Cuba'] = 'Kuuba';

$GLOBALS["lang"]['current'] = 'Praegune';

$GLOBALS["lang"]['Current'] = 'Praegune';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Praegused otsinguprotsessid';

$GLOBALS["lang"]['Current date & time is '] = 'Praegune kuupäev ja kellaaeg ';

$GLOBALS["lang"]['Currently Installed'] = 'Praegu paigaldatud';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Praegu toetatud tüübid <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> või <code>windows</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Kohandatud TCP-pordid';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Kohandatud UDP Sadamad';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Küpros';

$GLOBALS["lang"]['Czech'] = 'Tšehhi';

$GLOBALS["lang"]['Czech Republic'] = 'Tšehhi Vabariik';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN konto (valikuline)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Parool (valikuline)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS masinanimi';

$GLOBALS["lang"]['dashboard_id'] = 'Armatuurlaua ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Armatuurlaua ID';

$GLOBALS["lang"]['dashboards'] = 'Armatuurlauad';

$GLOBALS["lang"]['Dashboards'] = 'Armatuurlauad';

$GLOBALS["lang"]['Database'] = 'Andmebaas';

$GLOBALS["lang"]['db_action'] = 'Andmebaasitoiming';

$GLOBALS["lang"]['Database Action'] = 'Andmebaasitoiming';

$GLOBALS["lang"]['db_column'] = 'Andmebaasi veerg';

$GLOBALS["lang"]['Database Column'] = 'Andmebaasi veerg';

$GLOBALS["lang"]['Database Definition'] = 'Andmebaasi määratlus';

$GLOBALS["lang"]['db_row'] = 'Andmebaasirida';

$GLOBALS["lang"]['Database Row'] = 'Andmebaasirida';

$GLOBALS["lang"]['Database Schema'] = 'Andmebaasiskeem';

$GLOBALS["lang"]['db_table'] = 'Andmebaasitabel';

$GLOBALS["lang"]['Database Table'] = 'Andmebaasitabel';

$GLOBALS["lang"]['dataset_title'] = 'Andmekogu pealkiri';

$GLOBALS["lang"]['Dataset Title'] = 'Andmekogu pealkiri';

$GLOBALS["lang"]['date'] = 'Kuupäev';

$GLOBALS["lang"]['Date'] = 'Kuupäev';

$GLOBALS["lang"]['Date D-M-Y'] = 'Kuupäev D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Kuupäev M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Kuupäev';

$GLOBALS["lang"]['date_of_manufacture'] = 'Valmistamiskuupäev';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Valmistamiskuupäev';

$GLOBALS["lang"]['date_paid'] = 'Tasutud kuupäev';

$GLOBALS["lang"]['Date Paid'] = 'Tasutud kuupäev';

$GLOBALS["lang"]['date_received'] = 'Vastuvõtmise kuupäev';

$GLOBALS["lang"]['Date Received'] = 'Vastuvõtmise kuupäev';

$GLOBALS["lang"]['Date Y-M-D'] = 'Kuupäev Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'CVE viimase uuendamise kuupäev ja kellaaeg.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'CVE avaldamise kuupäev ja kellaaeg.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'CVE avaldamise kuupäev.';

$GLOBALS["lang"]['DateTime Now'] = 'DateTime Now';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'DateTime Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Kuupäev';

$GLOBALS["lang"]['Day Of Month'] = 'Kuupäev';

$GLOBALS["lang"]['day_of_week'] = 'nädalapäev';

$GLOBALS["lang"]['Day Of Week'] = 'nädalapäev';

$GLOBALS["lang"]['Day of Month'] = 'Kuupäev';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbusi identifikaator';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbusi identifikaator';

$GLOBALS["lang"]['Debug'] = 'Debug';

$GLOBALS["lang"]['December'] = 'detsember';

$GLOBALS["lang"]['Default'] = 'Vaikimisi';

$GLOBALS["lang"]['Default Items'] = 'Vaikimisi elemendid';

$GLOBALS["lang"]['Default Value'] = 'Vaikeväärtus';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389. aasta vaikimisi. Tavaliselt kasutatakse 636 Active Directory LDAPS-i jaoks.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Vaikimisi <code>3</code> LDAP ja Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Vaikimisi';

$GLOBALS["lang"]['delay_minutes'] = 'Viivitusminutid';

$GLOBALS["lang"]['Delay Minutes'] = 'Viivitusminutid';

$GLOBALS["lang"]['Delete'] = 'Kustuta';

$GLOBALS["lang"]['Delete Example Devices'] = 'Näiteseadmete kustutamine';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Kustuta sisemine väline';

$GLOBALS["lang"]['Delete External From Internal'] = 'Kustuta sisemine väline';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Kustuta NMIS Seadmed, kui need ei ole avatud audiofailis';

$GLOBALS["lang"]['Delete from Application'] = 'Kustuta rakendusest';

$GLOBALS["lang"]['Delete from Cluster'] = 'Kustuta klastrist';

$GLOBALS["lang"]['Denmark'] = 'Taani';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Tuletatud auditiga või käsitsi seadistatud kasutaja poolt.';

$GLOBALS["lang"]['Derived by audit.'] = 'Tuletatud auditiga.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Tuletatud <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Tuletatud <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Tuletatud kollektsiooni avastusest.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Tuletatud operatsioonisüsteemi nimest.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Tuletatud pilvede avastamisest.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Tuletatud seadmete audititest.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Tuletatud seadme tüübist ja operatsioonisüsteemist.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Tuletatud avastamisest.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Tuletatud masinanimest, süsteeminimest, dns masinanimest ja IP- st selles järjekorras.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Tuletatud täisarvu raskusastmest.';

$GLOBALS["lang"]['description'] = 'Kirjeldus';

$GLOBALS["lang"]['Description'] = 'Kirjeldus';

$GLOBALS["lang"]['destination'] = 'Sihtkoht';

$GLOBALS["lang"]['Destination'] = 'Sihtkoht';

$GLOBALS["lang"]['detail'] = 'Detail';

$GLOBALS["lang"]['Detail'] = 'Detail';

$GLOBALS["lang"]['Details'] = 'Detailid';

$GLOBALS["lang"]['details'] = 'Detailid';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Üksikasjad, kellega sellel veebisaidil tavaliselt ühendust võetakse.';

$GLOBALS["lang"]['device'] = 'Seadme';

$GLOBALS["lang"]['Device'] = 'Seadme';

$GLOBALS["lang"]['Device Audits'] = 'Seadmeauditid';

$GLOBALS["lang"]['Device ID'] = 'Seadme ID';

$GLOBALS["lang"]['device_id'] = 'Seadme ID';

$GLOBALS["lang"]['device_id_a'] = 'Seadme ID A';

$GLOBALS["lang"]['Device ID A'] = 'Seadme ID A';

$GLOBALS["lang"]['device_id_b'] = 'Seadme ID B';

$GLOBALS["lang"]['Device ID B'] = 'Seadme ID B';

$GLOBALS["lang"]['Device Name'] = 'Seadme nimi';

$GLOBALS["lang"]['Device Result'] = 'Seadme tulemus';

$GLOBALS["lang"]['Device Results'] = 'Seadme tulemused';

$GLOBALS["lang"]['Device Seed'] = 'Seadmeseeme';

$GLOBALS["lang"]['Device Seed IP'] = 'Seadme seemne IP';

$GLOBALS["lang"]['Device Status'] = 'Seadme olek';

$GLOBALS["lang"]['Device Types'] = 'Seadmetüübid';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Seade on alamvõrgus';

$GLOBALS["lang"]['Devices'] = 'Seadmed';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Asukohale määratud seadmed';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Asukohale määratud seadmed';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Orgile määratud seadmed';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Orgile määratud seadmed';

$GLOBALS["lang"]['Devices Audited'] = 'Auditeeritud seadmed';

$GLOBALS["lang"]['Devices Created in '] = 'Seadmed loodud ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Open- AUDITis loodud seadmed';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Seadmed Vaikeekraani veerud';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Seadmed Vaikeekraani veerud';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Viimased 7 päeva leitud seadmed';

$GLOBALS["lang"]['Devices Found Today'] = 'Täna leitud seadmed';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Eile leitud seadmed';

$GLOBALS["lang"]['Devices Not Audited'] = 'Auditeerimata seadmed';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Seadmed, mida ei ole nähtud 30 päeva';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Seadmed, mida ei ole nähtud 7 päeva';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Seadmed, mida ei ole nähtud 90 päeva';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'API kaudu hangitud seadmed';

$GLOBALS["lang"]['Devices Selected from '] = 'Seadmed, mille hulgast on valitud ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Open-AudITist valitud seadmed';

$GLOBALS["lang"]['Devices Updated in '] = 'Seadmed uuendatud ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Seadmed Uuendatud Open- AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Seadmeid kontrollitakse.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Seadmeid ei hinnata.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Seadmeid võiks võrrelda.';

$GLOBALS["lang"]['Devices in Running State'] = 'Seadmed sõiduolekus';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Seadmed peatatud olekus';

$GLOBALS["lang"]['Devices in this'] = 'Seadmed';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Kõrvaldatud tüübist või operatsioonisüsteemist.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp lubatud';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp lubatud';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Liising aegub';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Liising aegub';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Liising saadud';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Liising saadud';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp serverName';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp serverName';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Kas käsk lõpetas edukalt ja tagastas oodatud andmed.';

$GLOBALS["lang"]['direction'] = 'Suund';

$GLOBALS["lang"]['Direction'] = 'Suund';

$GLOBALS["lang"]['directory'] = 'Kataloog';

$GLOBALS["lang"]['Directory'] = 'Kataloog';

$GLOBALS["lang"]['disabled'] = 'Keelatud';

$GLOBALS["lang"]['Disabled'] = 'Keelatud';

$GLOBALS["lang"]['discard'] = 'Visake ära';

$GLOBALS["lang"]['Discard'] = 'Visake ära';

$GLOBALS["lang"]['Discover'] = 'Avasta';

$GLOBALS["lang"]['discoveries'] = 'Avastus';

$GLOBALS["lang"]['Discoveries'] = 'Avastus';

$GLOBALS["lang"]['Discovery'] = 'Discovery';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Discovery Change Logs';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Avastamisandmete säilitamine';

$GLOBALS["lang"]['discovery_id'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery ID'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Avastamisprobleemid';

$GLOBALS["lang"]['discovery_log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Match Options'] = 'Avastamise sobivuse valikud';

$GLOBALS["lang"]['Discovery Name'] = 'Discovery nimi';

$GLOBALS["lang"]['Discovery Options'] = 'Avastamise valikud';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Avastamisjärjekordade arv';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Avastamisjärjekorra piirang';

$GLOBALS["lang"]['discovery_run'] = 'Discovery';

$GLOBALS["lang"]['Discovery Run'] = 'Discovery';

$GLOBALS["lang"]['discovery_scan_options'] = 'Avastamise skaneerimise valikud';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Avastamise skaneerimise valikud';

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Näita versiooni';

$GLOBALS["lang"]['Display Version'] = 'Näita versiooni';

$GLOBALS["lang"]['Display in Menu'] = 'Näita menüüs';

$GLOBALS["lang"]['district'] = 'Ringkond';

$GLOBALS["lang"]['District'] = 'Ringkond';

$GLOBALS["lang"]['Djibouti'] = 'Djibouti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns domeen';

$GLOBALS["lang"]['Dns Domain'] = 'Dns domeen';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domeen Reg lubatud';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domeen Reg lubatud';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns masina nimi';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns masina nimi';

$GLOBALS["lang"]['dns_hostname'] = 'Dns masinanimi';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns masinanimi';

$GLOBALS["lang"]['dns_server'] = 'Dns Server';

$GLOBALS["lang"]['Dns Server'] = 'Dns Server';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Ärge skaneerige neid TCP porte.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Ärge skaneerige neid UDP porte.';

$GLOBALS["lang"]['Do not show me again'] = 'Ära näita mulle uuesti.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Kas soovite kasutada turvalist transporti (LDAPS) või tavalist krüpteerimata LDAP-i.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Kas soovite näha standardset külgriba vasakul.';

$GLOBALS["lang"]['documentation'] = 'Dokumentatsioon';

$GLOBALS["lang"]['Documentation'] = 'Dokumentatsioon';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Kas litsents kehtib laste orgidele?';

$GLOBALS["lang"]['domain'] = 'Domain';

$GLOBALS["lang"]['Domain'] = 'Domain';

$GLOBALS["lang"]['domain_controller_address'] = 'Domeenikontrolleri aadress';

$GLOBALS["lang"]['Domain Controller Address'] = 'Domeenikontrolleri aadress';

$GLOBALS["lang"]['domain_controller_name'] = 'Domeenikontroller Nimi';

$GLOBALS["lang"]['Domain Controller Name'] = 'Domeenikontroller Nimi';

$GLOBALS["lang"]['domain_role'] = 'Domeeni roll';

$GLOBALS["lang"]['Domain Role'] = 'Domeeni roll';

$GLOBALS["lang"]['domain_short'] = 'Domeen Lühike';

$GLOBALS["lang"]['Domain Short'] = 'Domeen Lühike';

$GLOBALS["lang"]['Dominica'] = 'Dominica';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominikaani Vabariik';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Ärge hoidke mu kätt, ma tean, mida ma teen. Puudub filter ja võime liituda kohandatud tabelitega.';

$GLOBALS["lang"]['Download'] = 'Laadi alla';

$GLOBALS["lang"]['Download a file from URL'] = 'Faili allalaadimine URL- ist';

$GLOBALS["lang"]['driver'] = 'Autojuht';

$GLOBALS["lang"]['Driver'] = 'Autojuht';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Kestus';

$GLOBALS["lang"]['Duration'] = 'Kestus';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Ecuador'] = 'Ecuador';

$GLOBALS["lang"]['Edit'] = 'Edit';

$GLOBALS["lang"]['edit_log'] = 'Muuda logi';

$GLOBALS["lang"]['Edit Log'] = 'Muuda logi';

$GLOBALS["lang"]['editable'] = 'Editable';

$GLOBALS["lang"]['Editable'] = 'Editable';

$GLOBALS["lang"]['edited_by'] = 'Toimetas';

$GLOBALS["lang"]['Edited By'] = 'Toimetas';

$GLOBALS["lang"]['edited_date'] = 'Redigeeritud kuupäev';

$GLOBALS["lang"]['Edited Date'] = 'Redigeeritud kuupäev';

$GLOBALS["lang"]['edition'] = 'Edition';

$GLOBALS["lang"]['Edition'] = 'Edition';

$GLOBALS["lang"]['Egypt'] = 'Egiptuse';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Kas Amazon, Google või Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Kas puudub või on kohal.

<strong>Mitte ükski</strong> Edukas rünnak ei sõltu haavatava süsteemi kasutuselevõtu ja täitmise tingimustest. Ründaja võib eeldada, et ta jõuab haavatavuseni ja teostab ekspluateerimise kõigi või enamiku haavatavuse juhtumite korral.

<strong>Olemas</strong> Edukas rünnak sõltub haavatava süsteemi konkreetsetest kasutuselevõtu- ja täitmistingimustest, mis võimaldavad rünnakut. Nende hulka kuuluvad:

Haavatavuse edukaks ärakasutamiseks tuleb võita rassitingimus. Rünnaku edukus sõltub hukkamistingimustest, mis ei ole ründaja täieliku kontrolli all. Rünnak võib osutuda vajalikuks mitu korda ühe sihtmärgi vastu, enne kui see õnnestub.

Võrgusüst. Ründaja peab süstima end loogilisse võrgutrajektoori sihtmärgi ja ohvri soovitud ressursi vahel (nt haavatavused, mis nõuavad ründevahendit).';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'Email';

$GLOBALS["lang"]['Email'] = 'Email';

$GLOBALS["lang"]['email_address'] = 'E-posti aadress';

$GLOBALS["lang"]['Email Address'] = 'E-posti aadress';

$GLOBALS["lang"]['Email Configuration'] = 'E- posti seadistamine';

$GLOBALS["lang"]['Email to send test to'] = 'E- kiri testi saatmiseks';

$GLOBALS["lang"]['Enable'] = 'Luba';

$GLOBALS["lang"]['enabled'] = 'Lubatud';

$GLOBALS["lang"]['Enabled'] = 'Lubatud';

$GLOBALS["lang"]['encryption'] = 'Krüpteerimine';

$GLOBALS["lang"]['Encryption'] = 'Krüpteerimine';

$GLOBALS["lang"]['encryption_method'] = 'Krüptimismeetod';

$GLOBALS["lang"]['Encryption Method'] = 'Krüptimismeetod';

$GLOBALS["lang"]['encryption_status'] = 'Krüptimise olek';

$GLOBALS["lang"]['Encryption Status'] = 'Krüptimise olek';

$GLOBALS["lang"]['end_date'] = 'Lõppkuupäev';

$GLOBALS["lang"]['End Date'] = 'Lõppkuupäev';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Olelusringi lõpu toote tunnuskood';

$GLOBALS["lang"]['end_of_life'] = 'Elulõpp';

$GLOBALS["lang"]['End Of Life'] = 'Elulõpp';

$GLOBALS["lang"]['end_of_production'] = 'Tootmise lõpp';

$GLOBALS["lang"]['End Of Production'] = 'Tootmise lõpp';

$GLOBALS["lang"]['end_of_service'] = 'Teenistuse lõpp';

$GLOBALS["lang"]['End Of Service'] = 'Teenistuse lõpp';

$GLOBALS["lang"]['end_of_service_life'] = 'Töösuhte lõpp';

$GLOBALS["lang"]['End Of Service Life'] = 'Töösuhte lõpp';

$GLOBALS["lang"]['English'] = 'inglise';

$GLOBALS["lang"]['enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Eraettevõtluse võrgustik';

$GLOBALS["lang"]['Entitlement Type'] = 'Õiguste liik';

$GLOBALS["lang"]['environment'] = 'Keskkond';

$GLOBALS["lang"]['Environment'] = 'Keskkond';

$GLOBALS["lang"]['Equal To'] = 'Võrdne';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Võrdne või suurem kui';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Võrdne või väiksem kui';

$GLOBALS["lang"]['Equals'] = 'Võrdsed';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Ekvatoriaal-Guinea';

$GLOBALS["lang"]['Eritrea'] = 'Eritrea';

$GLOBALS["lang"]['Error'] = 'Viga';

$GLOBALS["lang"]['Error Code'] = 'Veakood';

$GLOBALS["lang"]['Established'] = 'Asutatud';

$GLOBALS["lang"]['Estonia'] = 'Eesti';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etioopia';

$GLOBALS["lang"]['Every'] = 'Iga kord';

$GLOBALS["lang"]['Every Day'] = 'Iga päev';

$GLOBALS["lang"]['Exceptions'] = 'Erandid';

$GLOBALS["lang"]['exclude'] = 'Kõrvalda';

$GLOBALS["lang"]['Exclude'] = 'Kõrvalda';

$GLOBALS["lang"]['exclude_ip'] = 'IP väljajätmine';

$GLOBALS["lang"]['Exclude IP'] = 'IP väljajätmine';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'IP- aadresside väljajätmine';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCP portide väljajätmine';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Tcp portide väljajätmine';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Tcp portide väljajätmine';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP portide väljajätmine';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udp portide väljajätmine';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udp portide väljajätmine';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Nende IP- aadresside väljajätmine Nmap skaneerimisest.';

$GLOBALS["lang"]['Excluded'] = 'Välja jäetud';

$GLOBALS["lang"]['exclusion_reasons'] = 'Kõrvaldamise põhjused';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Kõrvaldamise põhjused';

$GLOBALS["lang"]['executable'] = 'hukatav';

$GLOBALS["lang"]['Executable'] = 'hukatav';

$GLOBALS["lang"]['executable_id'] = 'Käivitatav ID';

$GLOBALS["lang"]['Executable ID'] = 'Käivitatav ID';

$GLOBALS["lang"]['executables'] = 'hukatavad';

$GLOBALS["lang"]['Executables'] = 'hukatavad';

$GLOBALS["lang"]['Execute'] = 'Käivita';

$GLOBALS["lang"]['Executing'] = 'Hukkamine';

$GLOBALS["lang"]['exemption_reason'] = 'Vabastamise põhjus';

$GLOBALS["lang"]['Exemption Reason'] = 'Vabastamise põhjus';

$GLOBALS["lang"]['Existing Building'] = 'Olemasolev ehitis';

$GLOBALS["lang"]['Existing Floor'] = 'Olemasolev korrus';

$GLOBALS["lang"]['Existing Room'] = 'Olemasolev ruum';

$GLOBALS["lang"]['Existing Row'] = 'Olemasolev rida';

$GLOBALS["lang"]['expire_date'] = 'Aegumiskuupäev';

$GLOBALS["lang"]['Expire Date'] = 'Aegumiskuupäev';

$GLOBALS["lang"]['expire_minutes'] = 'Aegumisprotokollid';

$GLOBALS["lang"]['Expire Minutes'] = 'Aegumisprotokollid';

$GLOBALS["lang"]['expires'] = 'Aegub';

$GLOBALS["lang"]['Expires'] = 'Aegub';

$GLOBALS["lang"]['expiry_date'] = 'Aegumiskuupäev';

$GLOBALS["lang"]['Expiry Date'] = 'Aegumiskuupäev';

$GLOBALS["lang"]['exploit_maturity'] = 'Kasutamise tähtaeg';

$GLOBALS["lang"]['Exploit Maturity'] = 'Kasutamise tähtaeg';

$GLOBALS["lang"]['Export'] = 'Eksport';

$GLOBALS["lang"]['Export by Device'] = 'Ekspordi seadme järgi';

$GLOBALS["lang"]['Export by Policy'] = 'Eksport poliitika järgi';

$GLOBALS["lang"]['Export data to'] = 'Ekspordi andmed';

$GLOBALS["lang"]['expose'] = 'Paljastage';

$GLOBALS["lang"]['Expose'] = 'Paljastage';

$GLOBALS["lang"]['External'] = 'Välised';

$GLOBALS["lang"]['External Field Name'] = 'Välise välja nimi';

$GLOBALS["lang"]['External Field Type'] = 'Välise andmevälja tüüp';

$GLOBALS["lang"]['external_ident'] = 'Väline identifikaator';

$GLOBALS["lang"]['External Ident'] = 'Väline identifikaator';

$GLOBALS["lang"]['external_link'] = 'Väline link';

$GLOBALS["lang"]['External Link'] = 'Väline link';

$GLOBALS["lang"]['extra_columns'] = 'Lisaveerud';

$GLOBALS["lang"]['Extra Columns'] = 'Lisaveerud';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Tõrkeotsinguks luuakse rohkem ja rohkem verboosi logimist.';

$GLOBALS["lang"]['FAQ'] = 'KKK';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW läbivaatamine';

$GLOBALS["lang"]['Fail'] = 'Fail';

$GLOBALS["lang"]['Failed'] = 'Ebaõnnestunud';

$GLOBALS["lang"]['Failed Severity'] = 'Ebaõnnestunud raskused';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falklandi saared (Malviinid)';

$GLOBALS["lang"]['Family'] = 'Perekond';

$GLOBALS["lang"]['Faroe Islands'] = 'Fääri saared';

$GLOBALS["lang"]['Features'] = 'Omadused';

$GLOBALS["lang"]['February'] = 'veebruar';

$GLOBALS["lang"]['field'] = 'Field';

$GLOBALS["lang"]['Field'] = 'Field';

$GLOBALS["lang"]['field_id'] = 'Välja ID';

$GLOBALS["lang"]['Field ID'] = 'Välja ID';

$GLOBALS["lang"]['Field Name'] = 'Välinimi';

$GLOBALS["lang"]['Field Type'] = 'Väljatüüp';

$GLOBALS["lang"]['Fields'] = 'Fields';

$GLOBALS["lang"]['fields'] = 'Fields';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidži Fidži saared';

$GLOBALS["lang"]['File'] = 'Fail';

$GLOBALS["lang"]['File Import'] = 'Faili import';

$GLOBALS["lang"]['File Input'] = 'Fail Sisend';

$GLOBALS["lang"]['file_name'] = 'Faili nimi';

$GLOBALS["lang"]['File Name'] = 'Faili nimi';

$GLOBALS["lang"]['file_size'] = 'Faili suurus';

$GLOBALS["lang"]['File Size'] = 'Faili suurus';

$GLOBALS["lang"]['filename'] = 'Failinimi';

$GLOBALS["lang"]['Filename'] = 'Failinimi';

$GLOBALS["lang"]['files'] = 'Failid';

$GLOBALS["lang"]['Files'] = 'Failid';

$GLOBALS["lang"]['files_id'] = 'Faili ID';

$GLOBALS["lang"]['Files ID'] = 'Faili ID';

$GLOBALS["lang"]['filter'] = 'Filter';

$GLOBALS["lang"]['Filter'] = 'Filter';

$GLOBALS["lang"]['filtered'] = 'Filtreeritud';

$GLOBALS["lang"]['Filtered'] = 'Filtreeritud';

$GLOBALS["lang"]['Finland'] = 'Soome';

$GLOBALS["lang"]['Firewall'] = 'Tulemüür';

$GLOBALS["lang"]['firewall_rule'] = 'Tulemüürireegel';

$GLOBALS["lang"]['Firewall Rule'] = 'Tulemüürireegel';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Kindlavara revisjon';

$GLOBALS["lang"]['Firmware Revision'] = 'Kindlavara revisjon';

$GLOBALS["lang"]['First Name'] = 'Eesnimi';

$GLOBALS["lang"]['first_run'] = 'Esimene sõit';

$GLOBALS["lang"]['First Run'] = 'Esimene sõit';

$GLOBALS["lang"]['first_seen'] = 'Esmanägija';

$GLOBALS["lang"]['First Seen'] = 'Esmanägija';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'Parandatud';

$GLOBALS["lang"]['Floor'] = 'Põrand';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Järgige allolevaid linke ja leidke, kuidas kasutada Open-AudIT-i, et teada saada <b>Mis su võrgus toimub?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Seemne avastamiseks peaksin leidma IP-d ainult privaatses IP-aadressi ruumis.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Seemne avastamiseks peaksin leidma ainult valitud alamvõrgu IP-d.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Seemne avastamiseks, kas ma peaksin enne avastamist alamvõrgu pingile tõmbama.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Toore SQL- päringu täpsemaks sisestamiseks. Vastavalt päringutele peate sisaldama <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Litsentside puhul, mis ei ole tähtajatud, millal litsents aegub.';

$GLOBALS["lang"]['form_factor'] = 'Vormitegur';

$GLOBALS["lang"]['Form Factor'] = 'Vormitegur';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Prantsusmaa, Prantsuse Vabariik';

$GLOBALS["lang"]['free'] = 'Vaba';

$GLOBALS["lang"]['Free'] = 'Vaba';

$GLOBALS["lang"]['French'] = 'Prantsuse';

$GLOBALS["lang"]['French Guiana'] = 'Prantsuse Guajaana';

$GLOBALS["lang"]['French Polynesia'] = 'Prantsuse Polüneesia';

$GLOBALS["lang"]['French Southern Territories'] = 'Prantsuse Lõunaterritooriumid';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Korduma kippuvad küsimused';

$GLOBALS["lang"]['Friday'] = 'Reede';

$GLOBALS["lang"]['From 100 Devices'] = 'Alates 100 seadmest';

$GLOBALS["lang"]['From 500 Devices'] = 'Alates 500 seadmest';

$GLOBALS["lang"]['full_name'] = 'Täisnimi';

$GLOBALS["lang"]['Full Name'] = 'Täisnimi';

$GLOBALS["lang"]['function'] = 'Funktsioon';

$GLOBALS["lang"]['Function'] = 'Funktsioon';

$GLOBALS["lang"]['GROUP BY'] = 'Rühm';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Loodud';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Georgia'] = 'Georgia';

$GLOBALS["lang"]['German'] = 'saksa';

$GLOBALS["lang"]['Germany'] = 'Saksamaa';

$GLOBALS["lang"]['Get Lat/Long'] = 'Hangi Lat/Long';

$GLOBALS["lang"]['Get Started'] = 'Alusta';

$GLOBALS["lang"]['Get a Free License'] = 'Hankige tasuta litsents';

$GLOBALS["lang"]['Getting Started'] = 'Alustamine';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltarile';

$GLOBALS["lang"]['Global Discovery Options'] = 'Globaalsed otsinguvalikud';

$GLOBALS["lang"]['Go'] = 'Mine.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Mapsi API Võti';

$GLOBALS["lang"]['Greater Than'] = 'Suurem kui';

$GLOBALS["lang"]['Greater Than or Equals'] = 'suurem kui või võrdne';

$GLOBALS["lang"]['Greece'] = 'Kreeka';

$GLOBALS["lang"]['Green Query'] = 'Roheline päring';

$GLOBALS["lang"]['Greenland'] = 'Gröönimaa';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Grupp';

$GLOBALS["lang"]['group_by'] = 'Rühmitada';

$GLOBALS["lang"]['Group By'] = 'Rühmitada';

$GLOBALS["lang"]['group_id'] = 'Grupi ID';

$GLOBALS["lang"]['Group ID'] = 'Grupi ID';

$GLOBALS["lang"]['groups'] = 'Grupid';

$GLOBALS["lang"]['Groups'] = 'Grupid';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadeloupe';

$GLOBALS["lang"]['Guam'] = 'Guami';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey';

$GLOBALS["lang"]['guest_device_id'] = 'Külalisseadme ID';

$GLOBALS["lang"]['Guest Device ID'] = 'Külalisseadme ID';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Guinea';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinea-Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW läbivaatamine';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Kõvaketta indeks';

$GLOBALS["lang"]['Hard Drive Index'] = 'Kõvaketta indeks';

$GLOBALS["lang"]['hardware_revision'] = 'Riistvara revisjon';

$GLOBALS["lang"]['Hardware Revision'] = 'Riistvara revisjon';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Kas selles organisatsioonis on seda poliitikat rakendatud?';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Head'] = 'Pealik';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heardi saar ja McDonaldi saared';

$GLOBALS["lang"]['height'] = 'Kõrgus';

$GLOBALS["lang"]['Height'] = 'Kõrgus';

$GLOBALS["lang"]['Height in RU'] = 'Kõrgus REs';

$GLOBALS["lang"]['Help'] = 'Aita';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Abi ja korduma kippuvad küsimused';

$GLOBALS["lang"]['high'] = 'Kõrge';

$GLOBALS["lang"]['High'] = 'Kõrge';

$GLOBALS["lang"]['High Availability'] = 'Suur kättesaadavus';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Püha Tool (Vatikani Linnriik)';

$GLOBALS["lang"]['Home'] = 'Kodu';

$GLOBALS["lang"]['home'] = 'Kodu';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Peremees';

$GLOBALS["lang"]['Host'] = 'Peremees';

$GLOBALS["lang"]['hostname'] = 'Hostname';

$GLOBALS["lang"]['Hostname'] = 'Hostname';

$GLOBALS["lang"]['hour'] = 'Tund';

$GLOBALS["lang"]['Hour'] = 'Tund';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Kuidas ja miks on avatud audit turvalisem';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Kui kaua võttis käsu täitmine aega.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Kui kaua peaks Nmap ootama vastust seadme kohta?';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Kui palju vooluringe sellesse riiulisse jõuab.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Kui palju poliitikaid viib läbikukkumiseni.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Kui palju poliitikaid viib läbipääsuni.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Kui palju elektripistikuid on selles riiulis?';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Mitu riiulit on sellel riiulil.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Kui tihti peaks koguja küsima serverilt ülesannet.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Kuidas valida integreeritud seadmeid (kasutades atribuuti, päringut või rühma).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'kuidas haavatavust ära kasutatakse (nt võrgustik, külgnev, kohalik, füüsiline).';

$GLOBALS["lang"]['How to compare'] = 'Kuidas võrrelda';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Inimloetav selgitus haavatavuse kohta.';

$GLOBALS["lang"]['Hungary'] = 'Ungari';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hüperlõime';

$GLOBALS["lang"]['Hyperthreading'] = 'Hüperlõime';

$GLOBALS["lang"]['I have read the EULA.'] = 'Olen lugenud EULA-d.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IOS Version'] = 'IOS-i versioon';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP- aadress';

$GLOBALS["lang"]['IP Addresses'] = 'IP- aadressid';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Viimati nähtud';

$GLOBALS["lang"]['IP Set By'] = 'IP määratud';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Ainult ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Island';

$GLOBALS["lang"]['icon'] = 'Icon';

$GLOBALS["lang"]['Icon'] = 'Icon';

$GLOBALS["lang"]['Icon and Text'] = 'Ikoon ja tekst';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Ainult ikoon, ainult tekst või ikoon ja tekst.';

$GLOBALS["lang"]['id_internal'] = 'Sisemine';

$GLOBALS["lang"]['Id Internal'] = 'Sisemine';

$GLOBALS["lang"]['id_number'] = 'ID-number';

$GLOBALS["lang"]['Id Number'] = 'ID-number';

$GLOBALS["lang"]['identification'] = 'Identifitseerimine';

$GLOBALS["lang"]['Identification'] = 'Identifitseerimine';

$GLOBALS["lang"]['If'] = 'Kui';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Kui sadam reageerib filtreeritud, peaksime seda pidama kättesaadavaks.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Kui sadam reageerib avatud filtreeritud, peaksime seda pidama kättesaadavaks.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Kui Open-AudIT valitud seadmetes ei ole kaugseadet, peaksime selle välisest süsteemist kustutama.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Kui Open-AudIT seadet on muudetud, peaksime uuendama välissüsteemi.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Kui Open-AudIT seade ei ole välises süsteemis, peaksime selle looma.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Kui agent teatab, et tema esmane IP on selles alamvõrgus, sooritage toimingud.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Kui mõni neist (koma eraldatud, tühikuid ei ole) portidest avastatakse, eeldage, et SSH töötab neil ja kasutab neid auditeerimiseks. Seda porti pole vaja Custom TCP pordidesse lisada - see lisatakse automaatselt.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Sisselülitamisel sisaldab JSON rida kindlaid seadme veerge, mida kasutaja on valinud näha, välja arvatud konfiguratsiooni vaikeväärtus.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Kui agent OS-i perekond (juhutundmatu) sisaldab seda stringi, sooritage toimingud.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Kui on täidetud järgmised tingimused:<br/><ul><li>a Rollile on määratud ad_ group</li><li>Orgil on määratud ad_ group</li><li>LDAP Serverile on määratud use_ roll y</li><li>kasutaja on olemas LDAP-is (olgu see Active Directory või OpenLDAP) ja on määratud ad_gruppides</li></ul>See kasutaja saab Open-AudIT-i sisse logida ilma Open-AudIT-i konto loomiseta. Open-AudIT teeb päringu kõnealusele LDAP-ile ja kui kasutaja on nõutud rühmades, kuid mitte Open-AudIT-is, siis nende kasutaja atribuudid (nimi, täisnimi, e-post, rollid, orgid jne) täidetakse automaatselt ja need logitakse sisse.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Kui Open-AudIT-i sisse logival kasutajal ei ole juurdepääsu LDAP-i otsingule, saate kasutada teist kontot, millel see juurdepääs on.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Kui pärast seda, kui seade serveriga ühendust võttis, on möödunud mitu minutit, tehke toimingud.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Kui valite kollektsionääri, plaanitakse see käivitada järgmise 5 minuti piiril.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignored'] = 'Eirasin';

$GLOBALS["lang"]['image'] = 'Pilt';

$GLOBALS["lang"]['Image'] = 'Pilt';

$GLOBALS["lang"]['Images'] = 'Pildid';

$GLOBALS["lang"]['impact_availability'] = 'Mõju kättesaadavus';

$GLOBALS["lang"]['Impact Availability'] = 'Mõju kättesaadavus';

$GLOBALS["lang"]['impact_confidentiality'] = 'Mõju konfidentsiaalsus';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Mõju konfidentsiaalsus';

$GLOBALS["lang"]['impact_integrity'] = 'Mõju terviklikkus';

$GLOBALS["lang"]['Impact Integrity'] = 'Mõju terviklikkus';

$GLOBALS["lang"]['implementation_notes'] = 'Rakendamise märkused';

$GLOBALS["lang"]['Implementation Notes'] = 'Rakendamise märkused';

$GLOBALS["lang"]['Import'] = 'Import';

$GLOBALS["lang"]['Import Example Data'] = 'Impordi näidisandmed';

$GLOBALS["lang"]['improvement_opportunities'] = 'Parandamisvõimalused';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Parandamisvõimalused';

$GLOBALS["lang"]['In'] = 'Sisse';

$GLOBALS["lang"]['Inactive'] = 'Mitteaktiivne';

$GLOBALS["lang"]['Include'] = 'Kaasake';

$GLOBALS["lang"]['Incomplete'] = 'Mittetäielik';

$GLOBALS["lang"]['Index'] = 'Indeks';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indoneesia';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Informational'] = 'Informatiivne';

$GLOBALS["lang"]['initial_size'] = 'Esialgne suurus';

$GLOBALS["lang"]['Initial Size'] = 'Esialgne suurus';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Sisendi tüüp';

$GLOBALS["lang"]['inputs'] = 'Sisendid';

$GLOBALS["lang"]['Inputs'] = 'Sisendid';

$GLOBALS["lang"]['Insane'] = 'Hullumeelne';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Lisage näidisandmed ja avastage kõik, mida Open-AudIT teile öelda võib.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Sisesta Ostetud litsents Võti';

$GLOBALS["lang"]['install'] = 'Paigalda';

$GLOBALS["lang"]['Install'] = 'Paigalda';

$GLOBALS["lang"]['install_date'] = 'Paigaldamise kuupäev';

$GLOBALS["lang"]['Install Date'] = 'Paigaldamise kuupäev';

$GLOBALS["lang"]['install_directory'] = 'Kataloogi paigaldamine';

$GLOBALS["lang"]['Install Directory'] = 'Kataloogi paigaldamine';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Vajadusel paigalda OpenScap';

$GLOBALS["lang"]['install_source'] = 'Allika paigaldamine';

$GLOBALS["lang"]['Install Source'] = 'Allika paigaldamine';

$GLOBALS["lang"]['installed_by'] = 'Paigaldatud';

$GLOBALS["lang"]['Installed By'] = 'Paigaldatud';

$GLOBALS["lang"]['installed_on'] = 'Paigaldatud';

$GLOBALS["lang"]['Installed On'] = 'Paigaldatud';

$GLOBALS["lang"]['Installing on Linux'] = 'Paigaldamine Linuxisse';

$GLOBALS["lang"]['Installing on MacOS'] = 'MacOS- i paigaldamine';

$GLOBALS["lang"]['Installing on Windows'] = 'Paigaldamine Windowsi';

$GLOBALS["lang"]['instance'] = 'Court';

$GLOBALS["lang"]['Instance'] = 'Court';

$GLOBALS["lang"]['instance_ident'] = 'Identiteet';

$GLOBALS["lang"]['Instance Ident'] = 'Identiteet';

$GLOBALS["lang"]['instance_options'] = 'Juhtumi valikud';

$GLOBALS["lang"]['Instance Options'] = 'Juhtumi valikud';

$GLOBALS["lang"]['instance_provider'] = 'Juhtumipakkuja';

$GLOBALS["lang"]['Instance Provider'] = 'Juhtumipakkuja';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Juhtumireservatsioon Identent';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Juhtumireservatsioon Identent';

$GLOBALS["lang"]['instance_state'] = 'Court State';

$GLOBALS["lang"]['Instance State'] = 'Court State';

$GLOBALS["lang"]['instance_tags'] = 'Case Tags';

$GLOBALS["lang"]['Instance Tags'] = 'Case Tags';

$GLOBALS["lang"]['instance_type'] = 'Juhtumi tüüp';

$GLOBALS["lang"]['Instance Type'] = 'Juhtumi tüüp';

$GLOBALS["lang"]['Integer'] = 'täisarvu';

$GLOBALS["lang"]['Integration'] = 'Integratsioon';

$GLOBALS["lang"]['integrations'] = 'Integratsioon';

$GLOBALS["lang"]['Integrations'] = 'Integratsioon';

$GLOBALS["lang"]['integrations_id'] = 'Integratsiooni ID';

$GLOBALS["lang"]['Integrations ID'] = 'Integratsiooni ID';

$GLOBALS["lang"]['integrations_log'] = 'Integratsioonilogi';

$GLOBALS["lang"]['Integrations Log'] = 'Integratsioonilogi';

$GLOBALS["lang"]['interface'] = 'Liides';

$GLOBALS["lang"]['Interface'] = 'Liides';

$GLOBALS["lang"]['interface_id'] = 'Liidese ID';

$GLOBALS["lang"]['Interface ID'] = 'Liidese ID';

$GLOBALS["lang"]['interface_type'] = 'Liidese tüüp';

$GLOBALS["lang"]['Interface Type'] = 'Liidese tüüp';

$GLOBALS["lang"]['Internal'] = 'Sisemine';

$GLOBALS["lang"]['Internal Field Name'] = 'Sisemine andmevälja nimi';

$GLOBALS["lang"]['Internal ID'] = 'Sisemine ID';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Sisemine JSON massiiv kehtivad juurdepääsu märgid selle kasutaja.';

$GLOBALS["lang"]['Introduction'] = 'Sissejuhatus';

$GLOBALS["lang"]['invoice'] = 'Arve';

$GLOBALS["lang"]['Invoice'] = 'Arve';

$GLOBALS["lang"]['invoice_id'] = 'Arve ID';

$GLOBALS["lang"]['Invoice ID'] = 'Arve ID';

$GLOBALS["lang"]['invoice_item'] = 'Arvekirje';

$GLOBALS["lang"]['Invoice Item'] = 'Arvekirje';

$GLOBALS["lang"]['ios_version'] = 'Ios versioon';

$GLOBALS["lang"]['Ios Version'] = 'Ios versioon';

$GLOBALS["lang"]['ip_address_external_a'] = 'Välise A Ip aadress';

$GLOBALS["lang"]['Ip Address External A'] = 'Välise A Ip aadress';

$GLOBALS["lang"]['ip_address_external_b'] = 'Välise B- aadressi';

$GLOBALS["lang"]['Ip Address External B'] = 'Välise B- aadressi';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Sisemine A-aadress';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Sisemine A-aadress';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Sisemine B-aadress';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Sisemine B-aadress';

$GLOBALS["lang"]['ip_all_count'] = 'Ip All Count';

$GLOBALS["lang"]['Ip All Count'] = 'Ip All Count';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip auditeeritud arv';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip auditeeritud arv';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip avastatud arv';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip avastatud arv';

$GLOBALS["lang"]['ip_enabled'] = 'Ip lubatud';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip lubatud';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip vastajate arv';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip vastajate arv';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip skanneeritud arv';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip skanneeritud arv';

$GLOBALS["lang"]['Iran'] = 'Iraani';

$GLOBALS["lang"]['Iraq'] = 'Iraak';

$GLOBALS["lang"]['Ireland'] = 'Iirimaa';

$GLOBALS["lang"]['Is FRU'] = 'FRU';

$GLOBALS["lang"]['is_fru'] = 'Fru';

$GLOBALS["lang"]['Is Fru'] = 'Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Kas NMIS server on kohalik (selles Open-AudIT serveris) või kaugjuhtimispult?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Kas see konto on aktiivne? Kui on seatud <code>n</code>, ei saa kasutaja sisse logida.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Kas see on lubatud ainult litsentseeritud klientidele?';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Kas see ülesanne on lubatud (jah/ei).';

$GLOBALS["lang"]['Isle of Man'] = 'Mani saar';

$GLOBALS["lang"]['Israel'] = 'Iisraeli';

$GLOBALS["lang"]['Issue'] = 'Probleem';

$GLOBALS["lang"]['issuer'] = 'Väljaandja';

$GLOBALS["lang"]['Issuer'] = 'Väljaandja';

$GLOBALS["lang"]['issuer_name'] = 'Emitendi nimi';

$GLOBALS["lang"]['Issuer Name'] = 'Emitendi nimi';

$GLOBALS["lang"]['Issues'] = 'Probleemid';

$GLOBALS["lang"]['Italy'] = 'Itaalia';

$GLOBALS["lang"]['Items not in Baseline'] = 'Kirjed, mis ei ole baasväärtuses';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON impordib';

$GLOBALS["lang"]['Jamaica'] = 'Jamaica';

$GLOBALS["lang"]['January'] = 'jaanuar';

$GLOBALS["lang"]['Japan'] = 'Jaapan';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordani';

$GLOBALS["lang"]['July'] = 'juuli';

$GLOBALS["lang"]['June'] = 'Juuni';

$GLOBALS["lang"]['Kazakhstan'] = 'Kasahstani';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Kerneli versioon';

$GLOBALS["lang"]['Kernel Version'] = 'Kerneli versioon';

$GLOBALS["lang"]['Key'] = 'Võti';

$GLOBALS["lang"]['Key Password (optional)'] = 'Võtmeparool (valikuline)';

$GLOBALS["lang"]['keys'] = 'Võtmed';

$GLOBALS["lang"]['Keys'] = 'Võtmed';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Kuwait'] = 'Kuveit';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgiisi Vabariik';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Keel';

$GLOBALS["lang"]['Language'] = 'Keel';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Viimati muudetud';

$GLOBALS["lang"]['Last Changed'] = 'Viimati muudetud';

$GLOBALS["lang"]['last_finished'] = 'Viimane lõpetatud';

$GLOBALS["lang"]['Last Finished'] = 'Viimane lõpetatud';

$GLOBALS["lang"]['last_logon'] = 'Viimane sisselogimine';

$GLOBALS["lang"]['Last Logon'] = 'Viimane sisselogimine';

$GLOBALS["lang"]['Last Name'] = 'Perekonnanimi';

$GLOBALS["lang"]['last_os_update'] = 'Viimane Os uuendamine';

$GLOBALS["lang"]['Last Os Update'] = 'Viimane Os uuendamine';

$GLOBALS["lang"]['last_result'] = 'Viimane tulemus';

$GLOBALS["lang"]['Last Result'] = 'Viimane tulemus';

$GLOBALS["lang"]['last_run'] = 'Viimane jooks';

$GLOBALS["lang"]['Last Run'] = 'Viimane jooks';

$GLOBALS["lang"]['last_seen'] = 'Viimati nähtud';

$GLOBALS["lang"]['Last Seen'] = 'Viimati nähtud';

$GLOBALS["lang"]['last_seen_by'] = 'Viimati nähtud By';

$GLOBALS["lang"]['Last Seen By'] = 'Viimati nähtud By';

$GLOBALS["lang"]['last_user'] = 'Viimane kasutaja';

$GLOBALS["lang"]['Last User'] = 'Viimane kasutaja';

$GLOBALS["lang"]['lastModified'] = 'Viimati muudetud';

$GLOBALS["lang"]['LastModified'] = 'Viimati muudetud';

$GLOBALS["lang"]['latitude'] = 'laiuskraadi';

$GLOBALS["lang"]['Latitude'] = 'laiuskraadi';

$GLOBALS["lang"]['Latvia'] = 'Läti';

$GLOBALS["lang"]['Layout'] = 'Layout';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldapi baas Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldapi baas Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn konto';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn konto';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn parool';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn parool';

$GLOBALS["lang"]['Learn About'] = 'Õpi';

$GLOBALS["lang"]['Learn More'] = 'Õpi rohkem';

$GLOBALS["lang"]['lease_expiry_date'] = 'Liisingu aegumiskuupäev';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Liisingu aegumiskuupäev';

$GLOBALS["lang"]['Lebanon'] = 'Liibanoni';

$GLOBALS["lang"]['legal_requirements'] = 'Õiguslikud nõuded';

$GLOBALS["lang"]['Legal Requirements'] = 'Õiguslikud nõuded';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Vähem kui';

$GLOBALS["lang"]['Less Than or Equals'] = 'Vähem kui või võrdne';

$GLOBALS["lang"]['level'] = 'Tase';

$GLOBALS["lang"]['Level'] = 'Tase';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Kasutamiseks vajalike privileegide tase (puudub, madal, kõrge).';

$GLOBALS["lang"]['Liberia'] = 'Libeeria';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Liibüa Araabia Džamahirija';

$GLOBALS["lang"]['License'] = 'Litsentsi';

$GLOBALS["lang"]['License Key'] = 'Litsentsivõti';

$GLOBALS["lang"]['License Required'] = 'Nõutav litsents';

$GLOBALS["lang"]['licenses'] = 'Litsentsid';

$GLOBALS["lang"]['Licenses'] = 'Litsentsid';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Nagu';

$GLOBALS["lang"]['limit'] = 'Limit';

$GLOBALS["lang"]['Limit'] = 'Limit';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Piirake päringut esimeste X-elementidega.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Ainult 100 rida.';

$GLOBALS["lang"]['line_amount'] = 'Liinisumma';

$GLOBALS["lang"]['Line Amount'] = 'Liinisumma';

$GLOBALS["lang"]['Line Graph'] = 'Joonegraafik';

$GLOBALS["lang"]['line_number_a'] = 'A-rea number';

$GLOBALS["lang"]['Line Number A'] = 'A-rea number';

$GLOBALS["lang"]['line_number_b'] = 'B-liin';

$GLOBALS["lang"]['Line Number B'] = 'B-liin';

$GLOBALS["lang"]['line_text'] = 'reatekst';

$GLOBALS["lang"]['Line Text'] = 'reatekst';

$GLOBALS["lang"]['link'] = 'Link';

$GLOBALS["lang"]['Link'] = 'Link';

$GLOBALS["lang"]['Link (Advanced)'] = 'Link (täiustatud)';

$GLOBALS["lang"]['Linked Files'] = 'Lingitud failid';

$GLOBALS["lang"]['links'] = 'Links';

$GLOBALS["lang"]['Links'] = 'Links';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Ühendab selle avastuse seotud pilvega (kui see on nõutav). Lingid <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Lingid <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Lingid <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Lingid <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['List'] = 'Nimekiri';

$GLOBALS["lang"]['list_table_format'] = 'Tabeli vorming';

$GLOBALS["lang"]['List Table Format'] = 'Tabeli vorming';

$GLOBALS["lang"]['Lithuania'] = 'Leedu';

$GLOBALS["lang"]['Load Balancing'] = 'Koormuse tasakaalustamine';

$GLOBALS["lang"]['Local'] = 'Kohalik';

$GLOBALS["lang"]['Local Area Network'] = 'Kohalik alavõrk';

$GLOBALS["lang"]['local_port'] = 'Kohalik sadam';

$GLOBALS["lang"]['Local Port'] = 'Kohalik sadam';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Localisation'] = 'Lokaliseerimine';

$GLOBALS["lang"]['Location'] = 'Asukoht';

$GLOBALS["lang"]['Location A'] = 'Asukoht A';

$GLOBALS["lang"]['Location B'] = 'Asukoht B';

$GLOBALS["lang"]['location_id'] = 'Asukoha ID';

$GLOBALS["lang"]['Location ID'] = 'Asukoha ID';

$GLOBALS["lang"]['location_id_a'] = 'Asukoha ID A';

$GLOBALS["lang"]['Location ID A'] = 'Asukoha ID A';

$GLOBALS["lang"]['location_id_b'] = 'Asukoha ID B';

$GLOBALS["lang"]['Location ID B'] = 'Asukoha ID B';

$GLOBALS["lang"]['location_latitude'] = 'Asukoha laiuskraad';

$GLOBALS["lang"]['Location Latitude'] = 'Asukoha laiuskraad';

$GLOBALS["lang"]['location_level'] = 'Asukohatasand';

$GLOBALS["lang"]['Location Level'] = 'Asukohatasand';

$GLOBALS["lang"]['location_longitude'] = 'Asukoha pikkuskraad';

$GLOBALS["lang"]['Location Longitude'] = 'Asukoha pikkuskraad';

$GLOBALS["lang"]['location_rack'] = 'Asukoharada';

$GLOBALS["lang"]['Location Rack'] = 'Asukoharada';

$GLOBALS["lang"]['location_rack_position'] = 'Asukoha raja asukoht';

$GLOBALS["lang"]['Location Rack Position'] = 'Asukoha raja asukoht';

$GLOBALS["lang"]['location_rack_size'] = 'Asukoharaami suurus';

$GLOBALS["lang"]['Location Rack Size'] = 'Asukoharaami suurus';

$GLOBALS["lang"]['location_room'] = 'Asukoharuum';

$GLOBALS["lang"]['Location Room'] = 'Asukoharuum';

$GLOBALS["lang"]['location_suite'] = 'Asukohasviit';

$GLOBALS["lang"]['Location Suite'] = 'Asukohasviit';

$GLOBALS["lang"]['locations'] = 'Asukohad';

$GLOBALS["lang"]['Locations'] = 'Asukohad';

$GLOBALS["lang"]['Locations in this'] = 'Asukohad selles';

$GLOBALS["lang"]['log'] = 'Logi';

$GLOBALS["lang"]['Log'] = 'Logi';

$GLOBALS["lang"]['log_format'] = 'Logivorming';

$GLOBALS["lang"]['Log Format'] = 'Logivorming';

$GLOBALS["lang"]['log_path'] = 'logitee';

$GLOBALS["lang"]['Log Path'] = 'logitee';

$GLOBALS["lang"]['log_rotation'] = 'Logi pööramine';

$GLOBALS["lang"]['Log Rotation'] = 'Logi pööramine';

$GLOBALS["lang"]['log_status'] = 'Logi staatus';

$GLOBALS["lang"]['Log Status'] = 'Logi staatus';

$GLOBALS["lang"]['Logical Cores '] = 'Loogilised tuumad ';

$GLOBALS["lang"]['logical_count'] = 'Loogiline arv';

$GLOBALS["lang"]['Logical Count'] = 'Loogiline arv';

$GLOBALS["lang"]['Logout'] = 'Logi välja';

$GLOBALS["lang"]['Logs'] = 'Logid';

$GLOBALS["lang"]['longitude'] = 'Pikkuskraad';

$GLOBALS["lang"]['Longitude'] = 'Pikkuskraad';

$GLOBALS["lang"]['low'] = 'Madalamad';

$GLOBALS["lang"]['Low'] = 'Madalamad';

$GLOBALS["lang"]['Lower Case'] = 'Väiksem juhtum';

$GLOBALS["lang"]['Luxembourg'] = 'Luxembourg';

$GLOBALS["lang"]['MAC Address'] = 'MAC aadress';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Tootja';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Maci aadress';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Makedoonia';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['maintenance_expires'] = 'Hooldusaeg lõpeb';

$GLOBALS["lang"]['Maintenance Expires'] = 'Hooldusaeg lõpeb';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Tee minu vaikimisi armatuurlaud';

$GLOBALS["lang"]['Make this install a Collector'] = 'Pane paigaldama koguja';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malaisia';

$GLOBALS["lang"]['Maldives'] = 'Maldiivid';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Manage';

$GLOBALS["lang"]['Manage Licenses'] = 'Litsentside haldamine';

$GLOBALS["lang"]['Manage in NMIS'] = 'Halda NMISis';

$GLOBALS["lang"]['Managed'] = 'Juhtis';

$GLOBALS["lang"]['managed_by'] = 'Juhtis';

$GLOBALS["lang"]['Managed By'] = 'Juhtis';

$GLOBALS["lang"]['Manual Input'] = 'Manuaalne sisend';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Kasutaja poolt käsitsi seadistatud, vaikeväärtus Tootmine.';

$GLOBALS["lang"]['Manually set by user.'] = 'Kasutaja poolt käsitsi seadistatud.';

$GLOBALS["lang"]['manufacture_date'] = 'Valmistamise kuupäev';

$GLOBALS["lang"]['Manufacture Date'] = 'Valmistamise kuupäev';

$GLOBALS["lang"]['manufacturer'] = 'Tootja';

$GLOBALS["lang"]['Manufacturer'] = 'Tootja';

$GLOBALS["lang"]['manufacturer_code'] = 'Tootja kood';

$GLOBALS["lang"]['Manufacturer Code'] = 'Tootja kood';

$GLOBALS["lang"]['Map'] = 'Kaart';

$GLOBALS["lang"]['maps'] = 'Kaardid';

$GLOBALS["lang"]['Maps'] = 'Kaardid';

$GLOBALS["lang"]['March'] = 'märts';

$GLOBALS["lang"]['Marshall Islands'] = 'Marshalli Saared';

$GLOBALS["lang"]['Martinique'] = 'Martinique';

$GLOBALS["lang"]['mask'] = 'Maski';

$GLOBALS["lang"]['Mask'] = 'Maski';

$GLOBALS["lang"]['Match'] = 'Match';

$GLOBALS["lang"]['match_options'] = 'Sobivuse valikud';

$GLOBALS["lang"]['Match Options'] = 'Sobivuse valikud';

$GLOBALS["lang"]['match_string'] = 'Match String';

$GLOBALS["lang"]['Match String'] = 'Match String';

$GLOBALS["lang"]['Matching Attribute'] = 'Sobiva atribuudi sobivus';

$GLOBALS["lang"]['maturity_level'] = 'Lõpptähtaja tase';

$GLOBALS["lang"]['Maturity Level'] = 'Lõpptähtaja tase';

$GLOBALS["lang"]['maturity_score'] = 'Küpsuse punktisumma';

$GLOBALS["lang"]['Maturity Score'] = 'Küpsuse punktisumma';

$GLOBALS["lang"]['Mauritania'] = 'Mauritaania';

$GLOBALS["lang"]['Mauritius'] = 'Mauritius';

$GLOBALS["lang"]['max_file_size'] = 'Maksimaalne faili suurus';

$GLOBALS["lang"]['Max File Size'] = 'Maksimaalne faili suurus';

$GLOBALS["lang"]['Max Length'] = 'Max Pikkus';

$GLOBALS["lang"]['max_size'] = 'Maksimaalne suurus';

$GLOBALS["lang"]['Max Size'] = 'Maksimaalne suurus';

$GLOBALS["lang"]['May'] = 'May';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Mõõdab haavatavuse ründamise tõenäosust ja põhineb ekspluatatsioonitehnikate, koodi kättesaadavuse või aktiivse "loodusliku" kasutamise hetkeolukorral.';

$GLOBALS["lang"]['medium'] = 'Keskmine';

$GLOBALS["lang"]['Medium'] = 'Keskmine';

$GLOBALS["lang"]['members'] = 'Liikmed';

$GLOBALS["lang"]['Members'] = 'Liikmed';

$GLOBALS["lang"]['memory'] = 'Mälu';

$GLOBALS["lang"]['Memory'] = 'Mälu';

$GLOBALS["lang"]['memory_count'] = 'Mäluloend';

$GLOBALS["lang"]['Memory Count'] = 'Mäluloend';

$GLOBALS["lang"]['memory_slot_count'] = 'Mälestusaegade arv';

$GLOBALS["lang"]['Memory Slot Count'] = 'Mälestusaegade arv';

$GLOBALS["lang"]['menu_category'] = 'Menüükategooria';

$GLOBALS["lang"]['Menu Category'] = 'Menüükategooria';

$GLOBALS["lang"]['menu_display'] = 'Menüü kuvamine';

$GLOBALS["lang"]['Menu Display'] = 'Menüü kuvamine';

$GLOBALS["lang"]['message'] = 'Sõnum';

$GLOBALS["lang"]['Message'] = 'Sõnum';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta viimati muudetud';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta viimati muudetud';

$GLOBALS["lang"]['metric'] = 'Metric';

$GLOBALS["lang"]['Metric'] = 'Metric';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'suurlinnapiirkonna võrgustik';

$GLOBALS["lang"]['Mexico'] = 'Mehhiko';

$GLOBALS["lang"]['Micronesia'] = 'Mikroneesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikroaeg';

$GLOBALS["lang"]['Microtime'] = 'Mikroaeg';

$GLOBALS["lang"]['minute'] = 'Minut';

$GLOBALS["lang"]['Minute'] = 'Minut';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Viimasest auditist on möödunud rohkem kui';

$GLOBALS["lang"]['model'] = 'Mudel';

$GLOBALS["lang"]['Model'] = 'Mudel';

$GLOBALS["lang"]['model_family'] = 'Mudelpere';

$GLOBALS["lang"]['Model Family'] = 'Mudelpere';

$GLOBALS["lang"]['module'] = 'Moodul';

$GLOBALS["lang"]['Module'] = 'Moodul';

$GLOBALS["lang"]['module_index'] = 'Mooduliindeks';

$GLOBALS["lang"]['Module Index'] = 'Mooduliindeks';

$GLOBALS["lang"]['Modules'] = 'Moodulid';

$GLOBALS["lang"]['Moldova'] = 'Moldova';

$GLOBALS["lang"]['Monaco'] = 'Monaco';

$GLOBALS["lang"]['Monday'] = 'Esmaspäev';

$GLOBALS["lang"]['Mongolia'] = 'Mongoolia';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Kuu';

$GLOBALS["lang"]['Month'] = 'Kuu';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Maroko';

$GLOBALS["lang"]['motherboard'] = 'Emaplaat';

$GLOBALS["lang"]['Motherboard'] = 'Emaplaat';

$GLOBALS["lang"]['mount_point'] = 'Mount Point';

$GLOBALS["lang"]['Mount Point'] = 'Mount Point';

$GLOBALS["lang"]['mount_type'] = 'Mount Type';

$GLOBALS["lang"]['Mount Type'] = 'Mount Type';

$GLOBALS["lang"]['Mozambique'] = 'Mosambiik';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Peab vastama Pingile';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-N-ni';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMISi klient';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS seadme valikud';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS seadme valik';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMISi välja nimi';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS andmevälja tüüp';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS-grupp';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Roll';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'MÄRKUS - lihtsa tekstivolituste näitamist allpool saab vältida, kui määrata <code>decrypt_credentials</code> kuni <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nimi';

$GLOBALS["lang"]['Name'] = 'Nimi';

$GLOBALS["lang"]['Namibia'] = 'Namiibias';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepali';

$GLOBALS["lang"]['net_index'] = 'Netoindeks';

$GLOBALS["lang"]['Net Index'] = 'Netoindeks';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Hollandi Antillid';

$GLOBALS["lang"]['Netherlands the'] = 'Holland';

$GLOBALS["lang"]['netmask'] = 'Netmaski';

$GLOBALS["lang"]['Netmask'] = 'Netmaski';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstati põhimõtted';

$GLOBALS["lang"]['Network'] = 'Network';

$GLOBALS["lang"]['network_address'] = 'Võrguaadress';

$GLOBALS["lang"]['Network Address'] = 'Võrguaadress';

$GLOBALS["lang"]['network_domain'] = 'Võrgudomeen';

$GLOBALS["lang"]['Network Domain'] = 'Võrgudomeen';

$GLOBALS["lang"]['Network Types'] = 'Võrgutüübid';

$GLOBALS["lang"]['networks'] = 'Võrgud';

$GLOBALS["lang"]['Networks'] = 'Võrgud';

$GLOBALS["lang"]['Networks Generated By'] = 'Võrgud genereeritud';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Võrgud, mis kasutavad CIDR-maski';

$GLOBALS["lang"]['New Building Name'] = 'Uus hoone nimi';

$GLOBALS["lang"]['New Caledonia'] = 'Uus-Kaledoonia';

$GLOBALS["lang"]['New Floor Name'] = 'Uue korruse nimi';

$GLOBALS["lang"]['New Room Name'] = 'Uue toa nimi';

$GLOBALS["lang"]['New Row Name'] = 'Uue rea nimi';

$GLOBALS["lang"]['New Zealand'] = 'Uus-Meremaa';

$GLOBALS["lang"]['News'] = 'Uudised';

$GLOBALS["lang"]['next_hop'] = 'Järgmine hüpe';

$GLOBALS["lang"]['Next Hop'] = 'Järgmine hüpe';

$GLOBALS["lang"]['next_run'] = 'Järgmine';

$GLOBALS["lang"]['Next Run'] = 'Järgmine';

$GLOBALS["lang"]['Nicaragua'] = 'Nicaragua';

$GLOBALS["lang"]['Niger'] = 'Nigeri';

$GLOBALS["lang"]['Nigeria'] = 'Nigeeria';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Skaneerimise vastused';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp portideName';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp portideName';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp portideName';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp portideName';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis klient';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis klient';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Manage';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Manage';

$GLOBALS["lang"]['nmis_name'] = 'Nmis nimi';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis nimi';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Notes';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Notes';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis roll';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis roll';

$GLOBALS["lang"]['No'] = 'Ei';

$GLOBALS["lang"]['No Devices Returned'] = 'Seadmeid ei tagastata';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Google Mapsi API puudub Võtmehetkel ei saa te kaarti näidata.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Puudub litsents professionaalsele või ettevõttele';

$GLOBALS["lang"]['No Results'] = 'Tulemused puuduvad';

$GLOBALS["lang"]['No data in License Key'] = 'Litsentsivõtmes puuduvad andmed';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Andmebaasi uuendamine ei ole hetkel vajalik.';

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'Mitte ükski';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolki saar';

$GLOBALS["lang"]['Normal'] = 'Normaalne';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Põhja-Mariaanid';

$GLOBALS["lang"]['Norway'] = 'Norra';

$GLOBALS["lang"]['Not Applicable'] = 'Ei kohaldata';

$GLOBALS["lang"]['Not Checked'] = 'Kontrollimata';

$GLOBALS["lang"]['Not Equals'] = 'Ei võrdu';

$GLOBALS["lang"]['Not In'] = 'Mitte';

$GLOBALS["lang"]['Not Like'] = 'Ei meeldi';

$GLOBALS["lang"]['Not Set'] = 'Pole paika pandud';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Ei kasutata tavaliselt. Kui see on seadistatud, nõuab see, et seadmel oleks avatud port (vastavalt Scan Optionsile), et seda loetaks reageerivaks. MAC-aadressi, arp-vastust või ping-vastust ei loeta vastamiseks piisavaks. Kasulik, kui ruuter või tulemüür Open-AudIT serveri ja siht-IP vahel reageerib pordi skaneeringutele IP-de nimel.';

$GLOBALS["lang"]['Note'] = 'Märkus';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Märkus - vanema valimine tagab automaatselt juurdepääsu oma lastele (kuigi seda siin ei näidata).';

$GLOBALS["lang"]['Notes'] = 'Märkmed';

$GLOBALS["lang"]['notes'] = 'Märkmed';

$GLOBALS["lang"]['Notice'] = 'Teate';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'november';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'Tellimus';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'operatsioonisüsteemide pered';

$GLOBALS["lang"]['OS Family'] = 'OSi perekond';

$GLOBALS["lang"]['OS Group'] = 'OS Group';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Objekti identifikaator';

$GLOBALS["lang"]['Object Ident'] = 'Objekti identifikaator';

$GLOBALS["lang"]['October'] = 'Oktoober';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'On';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Üks <code>3x2</code>, <code>4x2</code>, <code>4x3</code> või <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Üks Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Üks arendamisest, katastroofide taastamisest, hindamisest, eeltootmisest, tootmisest, katsetamisest, koolitusest, kasutajate vastuvõtu testimisest';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Üks eraldatud, delegeeritud, planeeritud, reserveeritud, jaotamata, tundmatu, juhtimata. Eraldatud vaikeväärtused.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Kumbagi <code>active directory</code> või <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Üks: viirusetõrje, varukoopia, tulemüür, heakskiidetud, keelatud, ignoreeritud või muu.';

$GLOBALS["lang"]['Online Documentation'] = 'Veebidokumentatsioon';

$GLOBALS["lang"]['Open-AudIT'] = 'Open AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Avatud AudIT-kogukond';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open- AudIT seadmete valik';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'OpenAudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Kõrgetasemeline paindlik avastamis- ja auditilahendus suurtele võrkudele. Kõik omadused Professional Plus: Baselines, File Auditing, Cloud Discovery, Rack Management, konfigureeritav rollipõhine juurdepääsu juhtimine sealhulgas Active Directory ja LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'OpenAudIT välja nimi';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Avatud audio litsentsid';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open- AudIT valikud';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'OpenAudIT Professional';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-AudIT Professional. Maailm';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open AudIT ja Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap on paigaldatud';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap kasutaja Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap kasutaja Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap kasutaja liikmelisuse atribuut';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap kasutaja liikmelisuse atribuut';

$GLOBALS["lang"]['open|filtered'] = 'Open|filtreeritud';

$GLOBALS["lang"]['Open|filtered'] = 'Open|filtreeritud';

$GLOBALS["lang"]['Operating System'] = 'Operatsioonisüsteem';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Operatsioonisüsteemi pere sisaldab';

$GLOBALS["lang"]['Operating Systems'] = 'Operatsioonisüsteemid';

$GLOBALS["lang"]['optical'] = 'Optiline';

$GLOBALS["lang"]['Optical'] = 'Optiline';

$GLOBALS["lang"]['Optimized'] = 'Optimeeritud';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Vabatahtlik versioon, nagu on auditeerinud Open-AudIT. Protsentuaalse märgi% kasutamine metamärgina.';

$GLOBALS["lang"]['options'] = 'Valikud';

$GLOBALS["lang"]['Options'] = 'Valikud';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Või valige allpool olevatest väljadest.';

$GLOBALS["lang"]['org_descendants'] = 'Orgide järeltulijad';

$GLOBALS["lang"]['Org Descendants'] = 'Orgide järeltulijad';

$GLOBALS["lang"]['org_id'] = 'Orgi ID';

$GLOBALS["lang"]['Org ID'] = 'Orgi ID';

$GLOBALS["lang"]['Organisation'] = 'Organisatsioon';

$GLOBALS["lang"]['organisation'] = 'Organisatsioon';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisatsiooni järeltulijad';

$GLOBALS["lang"]['Organisations'] = 'Organisatsioonid';

$GLOBALS["lang"]['orgs'] = 'Orgid';

$GLOBALS["lang"]['Orgs'] = 'Orgid';

$GLOBALS["lang"]['Orgs Name'] = 'Orgide nimi';

$GLOBALS["lang"]['orientation'] = 'Orientatsioon';

$GLOBALS["lang"]['Orientation'] = 'Orientatsioon';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Os Display versioon';

$GLOBALS["lang"]['Os Display Version'] = 'Os Display versioon';

$GLOBALS["lang"]['os_family'] = 'Os perekond';

$GLOBALS["lang"]['Os Family'] = 'Os perekond';

$GLOBALS["lang"]['os_group'] = 'Os Group';

$GLOBALS["lang"]['Os Group'] = 'Os Group';

$GLOBALS["lang"]['os_installation_date'] = 'Os paigalduskuupäev';

$GLOBALS["lang"]['Os Installation Date'] = 'Os paigalduskuupäev';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os Litsentsi aegumine';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os Litsentsi aegumine';

$GLOBALS["lang"]['os_license'] = 'Os';

$GLOBALS["lang"]['Os License'] = 'Os';

$GLOBALS["lang"]['os_license_code'] = 'Os litsentsikood';

$GLOBALS["lang"]['Os License Code'] = 'Os litsentsikood';

$GLOBALS["lang"]['os_license_mode'] = 'Os litsentsirežiim';

$GLOBALS["lang"]['Os License Mode'] = 'Os litsentsirežiim';

$GLOBALS["lang"]['os_license_type'] = 'Os Litsentsi liik';

$GLOBALS["lang"]['Os License Type'] = 'Os Litsentsi liik';

$GLOBALS["lang"]['os_name'] = 'Os nimi';

$GLOBALS["lang"]['Os Name'] = 'Os nimi';

$GLOBALS["lang"]['os_version'] = 'Os Version';

$GLOBALS["lang"]['Os Version'] = 'Os Version';

$GLOBALS["lang"]['Other'] = 'Teised';

$GLOBALS["lang"]['Others'] = 'Teised';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Meie aeg SSH vastuseks';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Meie aeg WMI vastuseks';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Meie aeg SNMP vastuseks';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Auditi skripti vastuse aegumine';

$GLOBALS["lang"]['output'] = 'väljundi';

$GLOBALS["lang"]['Output'] = 'väljundi';

$GLOBALS["lang"]['outputs'] = 'Väljundid';

$GLOBALS["lang"]['Outputs'] = 'Väljundid';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Üldine raskusaste (0–10).';

$GLOBALS["lang"]['overwrite'] = 'Ülekirjutamine';

$GLOBALS["lang"]['Overwrite'] = 'Ülekirjutamine';

$GLOBALS["lang"]['owner'] = 'Omanik';

$GLOBALS["lang"]['Owner'] = 'Omanik';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Pakk';

$GLOBALS["lang"]['packages'] = 'Pakke';

$GLOBALS["lang"]['Packages'] = 'Pakke';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestiina territoorium';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Paapua Uus-Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Paranoid'] = 'Paranoiline';

$GLOBALS["lang"]['Parent'] = 'Vanem';

$GLOBALS["lang"]['parent_id'] = 'Vanema ID';

$GLOBALS["lang"]['Parent ID'] = 'Vanema ID';

$GLOBALS["lang"]['parent_name'] = 'Vanemanimi';

$GLOBALS["lang"]['Parent Name'] = 'Vanemanimi';

$GLOBALS["lang"]['part_number'] = 'Osanumber';

$GLOBALS["lang"]['Part Number'] = 'Osanumber';

$GLOBALS["lang"]['part_of_domain'] = 'Osa domeenist';

$GLOBALS["lang"]['Part Of Domain'] = 'Osa domeenist';

$GLOBALS["lang"]['Partition'] = 'Eraldus';

$GLOBALS["lang"]['partition_count'] = 'Jaotusarv';

$GLOBALS["lang"]['Partition Count'] = 'Jaotusarv';

$GLOBALS["lang"]['partition_disk_index'] = 'Eraldusketta indeks';

$GLOBALS["lang"]['Partition Disk Index'] = 'Eraldusketta indeks';

$GLOBALS["lang"]['Pass'] = 'Pass';

$GLOBALS["lang"]['Passed'] = 'Möödus';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Passiivne optiline kohtvõrk';

$GLOBALS["lang"]['Password'] = 'Parool';

$GLOBALS["lang"]['password'] = 'Parool';

$GLOBALS["lang"]['password_changeable'] = 'Parool Muudetav';

$GLOBALS["lang"]['Password Changeable'] = 'Parool Muudetav';

$GLOBALS["lang"]['password_disabled'] = 'Parool keelatud';

$GLOBALS["lang"]['Password Disabled'] = 'Parool keelatud';

$GLOBALS["lang"]['password_expires'] = 'Parool aegub';

$GLOBALS["lang"]['Password Expires'] = 'Parool aegub';

$GLOBALS["lang"]['password_last_changed'] = 'Parool viimati muudetud';

$GLOBALS["lang"]['Password Last Changed'] = 'Parool viimati muudetud';

$GLOBALS["lang"]['password_required'] = 'Nõutav parool';

$GLOBALS["lang"]['Password Required'] = 'Nõutav parool';

$GLOBALS["lang"]['patch_panel'] = 'Patch Panel';

$GLOBALS["lang"]['Patch Panel'] = 'Patch Panel';

$GLOBALS["lang"]['patch_panel_port'] = 'Patch Panel Port';

$GLOBALS["lang"]['Patch Panel Port'] = 'Patch Panel Port';

$GLOBALS["lang"]['path'] = 'Path';

$GLOBALS["lang"]['Path'] = 'Path';

$GLOBALS["lang"]['Performance'] = 'Performance';

$GLOBALS["lang"]['Performed'] = 'Esitati';

$GLOBALS["lang"]['permission'] = 'Luba';

$GLOBALS["lang"]['Permission'] = 'Luba';

$GLOBALS["lang"]['permissions'] = 'Load';

$GLOBALS["lang"]['Permissions'] = 'Load';

$GLOBALS["lang"]['Personal Area Network'] = 'Personal Area Network';

$GLOBALS["lang"]['Peru'] = 'Peruu';

$GLOBALS["lang"]['Philippines'] = 'Filipiinid';

$GLOBALS["lang"]['phone'] = 'Telefon';

$GLOBALS["lang"]['Phone'] = 'Telefon';

$GLOBALS["lang"]['Physical CPUs'] = 'Füüsikalised protsessorid';

$GLOBALS["lang"]['physical_count'] = 'Füüsikaline loend';

$GLOBALS["lang"]['Physical Count'] = 'Füüsikaline loend';

$GLOBALS["lang"]['physical_depth'] = 'Füüsikaline sügavus';

$GLOBALS["lang"]['Physical Depth'] = 'Füüsikaline sügavus';

$GLOBALS["lang"]['physical_height'] = 'Füüsikaline kõrgus';

$GLOBALS["lang"]['Physical Height'] = 'Füüsikaline kõrgus';

$GLOBALS["lang"]['physical_width'] = 'Füüsikaline laius';

$GLOBALS["lang"]['Physical Width'] = 'Füüsikaline laius';

$GLOBALS["lang"]['picture'] = 'Pilt';

$GLOBALS["lang"]['Picture'] = 'Pilt';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Pie Chart';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairni saared';

$GLOBALS["lang"]['placement'] = 'Paigutus';

$GLOBALS["lang"]['Placement'] = 'Paigutus';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Palun kasutage Open-AudIT administraatori logo ja uuendage andmebaasi.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Palun arvestage, et valitud kast tühistab teksti sisendkasti.';

$GLOBALS["lang"]['Please set using'] = 'Palun määrake';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Poola';

$GLOBALS["lang"]['Policies'] = 'Poliitika';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Poliitikas on erandeid.';

$GLOBALS["lang"]['policy'] = 'Poliitika';

$GLOBALS["lang"]['Policy'] = 'Poliitika';

$GLOBALS["lang"]['policy_id'] = 'Poliitika ID';

$GLOBALS["lang"]['Policy ID'] = 'Poliitika ID';

$GLOBALS["lang"]['Policy Result'] = 'Poliitika tulemus';

$GLOBALS["lang"]['Policy Results'] = 'Poliitika tulemused';

$GLOBALS["lang"]['Polite'] = 'Viisakas';

$GLOBALS["lang"]['Populated by audit.'] = 'Asustatud auditiga.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Asustatud avastuste ja auditiga.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Asustatud dünaamiliselt.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Asustatud DNS-ist.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Asustatud SNMP avastusest.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Asustatud seadmete audititest.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Asustatud hostinimest.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Asustatud masin-ID-st Linuxis.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Asustatud IP-st vaikemarsruudile või avastatud IP-le.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Asustatud masinanime käsust.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Asustatud lisaandmetega välisest süsteemist, JSON esituses.';

$GLOBALS["lang"]['port'] = 'Port';

$GLOBALS["lang"]['Port'] = 'Port';

$GLOBALS["lang"]['port_name'] = 'Porti nimi';

$GLOBALS["lang"]['Port Name'] = 'Porti nimi';

$GLOBALS["lang"]['port_number'] = 'Sadamanumber';

$GLOBALS["lang"]['Port Number'] = 'Sadamanumber';

$GLOBALS["lang"]['ports_in_order'] = 'Korralolevad sadamad';

$GLOBALS["lang"]['Ports In Order'] = 'Korralolevad sadamad';

$GLOBALS["lang"]['ports_stop_after'] = 'Sadamad peatuvad pärast';

$GLOBALS["lang"]['Ports Stop After'] = 'Sadamad peatuvad pärast';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugal, Portugali Vabariik';

$GLOBALS["lang"]['position'] = 'Asukoht';

$GLOBALS["lang"]['Position'] = 'Asukoht';

$GLOBALS["lang"]['postcode'] = 'Postkood';

$GLOBALS["lang"]['Postcode'] = 'Postkood';

$GLOBALS["lang"]['power_circuit'] = 'Toitevool';

$GLOBALS["lang"]['Power Circuit'] = 'Toitevool';

$GLOBALS["lang"]['power_sockets'] = 'Toitepistikud';

$GLOBALS["lang"]['Power Sockets'] = 'Toitepistikud';

$GLOBALS["lang"]['Predictable'] = 'Ettearvatav';

$GLOBALS["lang"]['Preferences'] = 'Eelistused';

$GLOBALS["lang"]['Prerequisites'] = 'Eeltingimused';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Eeldused ja katsed';

$GLOBALS["lang"]['present'] = 'Olemas';

$GLOBALS["lang"]['Present'] = 'Olemas';

$GLOBALS["lang"]['previous_value'] = 'Eelmine väärtus';

$GLOBALS["lang"]['Previous Value'] = 'Eelmine väärtus';

$GLOBALS["lang"]['primary'] = 'Esmane';

$GLOBALS["lang"]['Primary'] = 'Esmane';

$GLOBALS["lang"]['Primary Key'] = 'Primaarne võti';

$GLOBALS["lang"]['print_queue'] = 'Trükijärjekord';

$GLOBALS["lang"]['Print Queue'] = 'Trükijärjekord';

$GLOBALS["lang"]['printer_color'] = 'Printeri värv';

$GLOBALS["lang"]['Printer Color'] = 'Printeri värv';

$GLOBALS["lang"]['printer_duplex'] = 'Printeri dupleks';

$GLOBALS["lang"]['Printer Duplex'] = 'Printeri dupleks';

$GLOBALS["lang"]['printer_port_name'] = 'Printeripordi nimi';

$GLOBALS["lang"]['Printer Port Name'] = 'Printeripordi nimi';

$GLOBALS["lang"]['printer_shared'] = 'Jagatud printer';

$GLOBALS["lang"]['Printer Shared'] = 'Jagatud printer';

$GLOBALS["lang"]['printer_shared_name'] = 'Printeri ühisnimi';

$GLOBALS["lang"]['Printer Shared Name'] = 'Printeri ühisnimi';

$GLOBALS["lang"]['priority'] = 'Prioriteet';

$GLOBALS["lang"]['Priority'] = 'Prioriteet';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Privaatsuse paroolifraas';

$GLOBALS["lang"]['privileges_required'] = 'Nõutavad privileegid';

$GLOBALS["lang"]['Privileges Required'] = 'Nõutavad privileegid';

$GLOBALS["lang"]['processor'] = 'Protsessor';

$GLOBALS["lang"]['Processor'] = 'Protsessor';

$GLOBALS["lang"]['processor_count'] = 'Protsessorite arv';

$GLOBALS["lang"]['Processor Count'] = 'Protsessorite arv';

$GLOBALS["lang"]['processor_slot_count'] = 'Protsessori pesade arv';

$GLOBALS["lang"]['Processor Slot Count'] = 'Protsessori pesade arv';

$GLOBALS["lang"]['processor_type'] = 'Protsessori tüüp';

$GLOBALS["lang"]['Processor Type'] = 'Protsessori tüüp';

$GLOBALS["lang"]['Processors'] = 'Protsessorid';

$GLOBALS["lang"]['product_name'] = 'Toote nimetus';

$GLOBALS["lang"]['Product Name'] = 'Toote nimetus';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'CPE tootenime vaste: ';

$GLOBALS["lang"]['products'] = 'Tooted';

$GLOBALS["lang"]['Products'] = 'Tooted';

$GLOBALS["lang"]['profile'] = 'Profiil';

$GLOBALS["lang"]['Profile'] = 'Profiil';

$GLOBALS["lang"]['program'] = 'Programmi';

$GLOBALS["lang"]['Program'] = 'Programmi';

$GLOBALS["lang"]['protocol'] = 'Protokoll';

$GLOBALS["lang"]['Protocol'] = 'Protokoll';

$GLOBALS["lang"]['provider'] = 'Pakkuja';

$GLOBALS["lang"]['Provider'] = 'Pakkuja';

$GLOBALS["lang"]['published'] = 'Avaldatud';

$GLOBALS["lang"]['Published'] = 'Avaldatud';

$GLOBALS["lang"]['published_date'] = 'Avaldatud kuupäev';

$GLOBALS["lang"]['Published Date'] = 'Avaldatud kuupäev';

$GLOBALS["lang"]['publisher'] = 'Kirjastaja';

$GLOBALS["lang"]['Publisher'] = 'Kirjastaja';

$GLOBALS["lang"]['Puerto Rico'] = 'Puerto Rico';

$GLOBALS["lang"]['Purchase'] = 'Osta';

$GLOBALS["lang"]['purchase_amount'] = 'Ostusumma';

$GLOBALS["lang"]['Purchase Amount'] = 'Ostusumma';

$GLOBALS["lang"]['purchase_cost_center'] = 'Ostukulude keskus';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Ostukulude keskus';

$GLOBALS["lang"]['purchase_count'] = 'Ostuarve';

$GLOBALS["lang"]['Purchase Count'] = 'Ostuarve';

$GLOBALS["lang"]['purchase_date'] = 'Ostukuupäev';

$GLOBALS["lang"]['Purchase Date'] = 'Ostukuupäev';

$GLOBALS["lang"]['purchase_invoice'] = 'Ostuarve';

$GLOBALS["lang"]['Purchase Invoice'] = 'Ostuarve';

$GLOBALS["lang"]['purchase_order'] = 'Ostutellimus';

$GLOBALS["lang"]['Purchase Order'] = 'Ostutellimus';

$GLOBALS["lang"]['purchase_order_number'] = 'Ostutellimuse number';

$GLOBALS["lang"]['Purchase Order Number'] = 'Ostutellimuse number';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Ostuteenuse lepingu number';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Ostuteenuse lepingu number';

$GLOBALS["lang"]['purchase_vendor'] = 'Ostumüüja';

$GLOBALS["lang"]['Purchase Vendor'] = 'Ostumüüja';

$GLOBALS["lang"]['purpose'] = 'Eesmärk';

$GLOBALS["lang"]['Purpose'] = 'Eesmärk';

$GLOBALS["lang"]['Qatar'] = 'Katari';

$GLOBALS["lang"]['queries'] = 'Päringud';

$GLOBALS["lang"]['Queries'] = 'Päringud';

$GLOBALS["lang"]['Query'] = 'Päring';

$GLOBALS["lang"]['queue'] = 'Järjekord';

$GLOBALS["lang"]['Queue'] = 'Järjekord';

$GLOBALS["lang"]['Queue Limit'] = 'Järjekorrapiirang';

$GLOBALS["lang"]['Queued Device Audits'] = 'Järjekorras seadmete auditid';

$GLOBALS["lang"]['Queued IP Scans'] = 'Järjekorras IP skannimine';

$GLOBALS["lang"]['Queued Items'] = 'Järjekorras olevad elemendid';

$GLOBALS["lang"]['RU Start'] = 'RE start';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX tase';

$GLOBALS["lang"]['RX Power'] = 'RX';

$GLOBALS["lang"]['RX Profile'] = 'RX profiil';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Rack Devices';

$GLOBALS["lang"]['Rack Devices'] = 'Rack Devices';

$GLOBALS["lang"]['rack_id'] = 'Racki ID';

$GLOBALS["lang"]['Rack ID'] = 'Racki ID';

$GLOBALS["lang"]['Racks'] = 'Racks';

$GLOBALS["lang"]['racks'] = 'Racks';

$GLOBALS["lang"]['radio'] = 'Raadio';

$GLOBALS["lang"]['Radio'] = 'Raadio';

$GLOBALS["lang"]['Radio MAC'] = 'Raadio MAC';

$GLOBALS["lang"]['rationale'] = 'Rationale';

$GLOBALS["lang"]['Rationale'] = 'Rationale';

$GLOBALS["lang"]['raw'] = 'Toores';

$GLOBALS["lang"]['Raw'] = 'Toores';

$GLOBALS["lang"]['read'] = 'Loe';

$GLOBALS["lang"]['Read'] = 'Loe';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Lugege meie veebidokumentatsiooni Open-AudIT Wiki kohta.';

$GLOBALS["lang"]['Red Query'] = 'Punane päring';

$GLOBALS["lang"]['Redirect URI'] = 'URI ümbersuunamine';

$GLOBALS["lang"]['redirect_uri'] = 'Uri ümbersuunamine';

$GLOBALS["lang"]['Redirect Uri'] = 'Uri ümbersuunamine';

$GLOBALS["lang"]['references'] = 'Viited';

$GLOBALS["lang"]['References'] = 'Viited';

$GLOBALS["lang"]['region'] = 'Region';

$GLOBALS["lang"]['Region'] = 'Region';

$GLOBALS["lang"]['registered_user'] = 'Registreeritud kasutaja';

$GLOBALS["lang"]['Registered User'] = 'Registreeritud kasutaja';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Vabasta';

$GLOBALS["lang"]['remediation'] = 'Tervendamine';

$GLOBALS["lang"]['Remediation'] = 'Tervendamine';

$GLOBALS["lang"]['Remote'] = 'Kaugjuhtimispult';

$GLOBALS["lang"]['remote_address'] = 'Kaugaadress';

$GLOBALS["lang"]['Remote Address'] = 'Kaugaadress';

$GLOBALS["lang"]['remote_port'] = 'Kaugsadam';

$GLOBALS["lang"]['Remote Port'] = 'Kaugsadam';

$GLOBALS["lang"]['Remove'] = 'Eemalda';

$GLOBALS["lang"]['Remove Exception'] = 'Eemalda erand';

$GLOBALS["lang"]['Report'] = 'Raport';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Aruanne oma seadmete, võrkude ja muu kohta';

$GLOBALS["lang"]['reportable'] = 'Avaldatav';

$GLOBALS["lang"]['Reportable'] = 'Avaldatav';

$GLOBALS["lang"]['Reports'] = 'Raportid';

$GLOBALS["lang"]['request'] = 'Palu';

$GLOBALS["lang"]['Request'] = 'Palu';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Konkreetset taotlust CVE';

$GLOBALS["lang"]['requested'] = 'Palutud';

$GLOBALS["lang"]['Requested'] = 'Palutud';

$GLOBALS["lang"]['require_port'] = 'Nõutav port';

$GLOBALS["lang"]['Require Port'] = 'Nõutav port';

$GLOBALS["lang"]['Require an Open Port'] = 'Nõutav avatud port';

$GLOBALS["lang"]['Required'] = 'Nõutav';

$GLOBALS["lang"]['Reset'] = 'Taasta lähtestamine';

$GLOBALS["lang"]['Reset All Data'] = 'Kõigi andmete lähtestamine';

$GLOBALS["lang"]['Reset to Default'] = 'Lähtesta vaikimisi';

$GLOBALS["lang"]['resource'] = 'Ressursi';

$GLOBALS["lang"]['Resource'] = 'Ressursi';

$GLOBALS["lang"]['Resource Name'] = 'Ressursinimi';

$GLOBALS["lang"]['Resources'] = 'Ressursid';

$GLOBALS["lang"]['response'] = 'Vastus';

$GLOBALS["lang"]['Response'] = 'Vastus';

$GLOBALS["lang"]['responsibility'] = 'Vastutus';

$GLOBALS["lang"]['Responsibility'] = 'Vastutus';

$GLOBALS["lang"]['Restore my Licenses'] = 'Litsents taastada';

$GLOBALS["lang"]['Restrict to Private'] = 'Eraõiguse piiramine';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Piiramine alamvõrguga';

$GLOBALS["lang"]['result'] = 'Tulemus';

$GLOBALS["lang"]['Result'] = 'Tulemus';

$GLOBALS["lang"]['Results'] = 'Tulemused';

$GLOBALS["lang"]['retrieved'] = 'Vaadatud';

$GLOBALS["lang"]['Retrieved'] = 'Vaadatud';

$GLOBALS["lang"]['retrieved_ident'] = 'Otsitud identifikaator';

$GLOBALS["lang"]['Retrieved Ident'] = 'Otsitud identifikaator';

$GLOBALS["lang"]['retrieved_name'] = 'Otsitud nimi';

$GLOBALS["lang"]['Retrieved Name'] = 'Otsitud nimi';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Vaadatud seadmest - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Kokkutulek';

$GLOBALS["lang"]['revision'] = 'Revisjon';

$GLOBALS["lang"]['Revision'] = 'Revisjon';

$GLOBALS["lang"]['risk_assesment_result'] = 'Riskihindamise tulemus';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Riskihindamise tulemus';

$GLOBALS["lang"]['role'] = 'Roll';

$GLOBALS["lang"]['Role'] = 'Roll';

$GLOBALS["lang"]['roles'] = 'Rollid';

$GLOBALS["lang"]['Roles'] = 'Rollid';

$GLOBALS["lang"]['Romania'] = 'Rumeenia';

$GLOBALS["lang"]['Room'] = 'Tuba';

$GLOBALS["lang"]['route'] = 'Marsruut';

$GLOBALS["lang"]['Route'] = 'Marsruut';

$GLOBALS["lang"]['Row'] = 'Row';

$GLOBALS["lang"]['Row Count'] = 'Ridakrahvi';

$GLOBALS["lang"]['row_position'] = 'Rida asend';

$GLOBALS["lang"]['Row Position'] = 'Rida asend';

$GLOBALS["lang"]['Rows'] = 'Rows';

$GLOBALS["lang"]['ru_height'] = 'Ru Kõrgus';

$GLOBALS["lang"]['Ru Height'] = 'Ru Kõrgus';

$GLOBALS["lang"]['ru_start'] = 'Ru Start';

$GLOBALS["lang"]['Ru Start'] = 'Ru Start';

$GLOBALS["lang"]['rule_group'] = 'Reeglirühm';

$GLOBALS["lang"]['Rule Group'] = 'Reeglirühm';

$GLOBALS["lang"]['rules'] = 'Reeglid';

$GLOBALS["lang"]['Rules'] = 'Reeglid';

$GLOBALS["lang"]['Run Discovery'] = 'Käivita Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Käivita seadmetes avastamine';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Käivita avastus ja uuri välja <b>Mis su võrgus toimub?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Käivita käsk';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Open-AudIT Apache teenuse käivitamine Windowsi all';

$GLOBALS["lang"]['Russian Federation'] = 'Venemaa Föderatsioon';

$GLOBALS["lang"]['Rwanda'] = 'Rwanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx tase';

$GLOBALS["lang"]['Rx Level'] = 'Rx tase';

$GLOBALS["lang"]['rx_power'] = 'Rx';

$GLOBALS["lang"]['Rx Power'] = 'Rx';

$GLOBALS["lang"]['rx_profile'] = 'Rx profiil';

$GLOBALS["lang"]['Rx Profile'] = 'Rx profiil';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM versioon';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Detailid';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP versioon';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (täiustatud)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL loomise avaldused';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Võti';

$GLOBALS["lang"]['SW Revision'] = 'SW läbivaatamine';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'Saint Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kitts ja Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Saint Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint-Pierre ja Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Saint Vincent ja Grenadiinid';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San San San';

$GLOBALS["lang"]['San'] = 'San San San';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'São Tomé ja Príncipe';

$GLOBALS["lang"]['Saturday'] = 'Laupäev';

$GLOBALS["lang"]['Saudi Arabia'] = 'Saudi Araabia';

$GLOBALS["lang"]['Save as Default'] = 'Salvesta vaikimisi';

$GLOBALS["lang"]['scaling'] = 'Skaleerimine';

$GLOBALS["lang"]['Scaling'] = 'Skaleerimine';

$GLOBALS["lang"]['scan_options'] = 'Skaneerimise valikud';

$GLOBALS["lang"]['Scan Options'] = 'Skaneerimise valikud';

$GLOBALS["lang"]['Scan Options ID'] = 'Skaneerimisvalikute ID';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Skaneeri TCP portide Nmap top number.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Skaneeri UDP portide Nmap top number.';

$GLOBALS["lang"]['schedule'] = 'Ajakava';

$GLOBALS["lang"]['Schedule'] = 'Ajakava';

$GLOBALS["lang"]['scope'] = 'Scope';

$GLOBALS["lang"]['Scope'] = 'Scope';

$GLOBALS["lang"]['script_timeout'] = 'Skripti aegumine';

$GLOBALS["lang"]['Script Timeout'] = 'Skripti aegumine';

$GLOBALS["lang"]['scripts'] = 'Skripte';

$GLOBALS["lang"]['Scripts'] = 'Skripte';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi Bussi';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi Bussi';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi loogiline üksus';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi loogiline üksus';

$GLOBALS["lang"]['scsi_port'] = 'Scsi';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi';

$GLOBALS["lang"]['Search'] = 'Otsi';

$GLOBALS["lang"]['Search For a Device'] = 'Seadme otsing';

$GLOBALS["lang"]['Search for Device'] = 'Seadme otsimine';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Otsimine andmetabelite abil';

$GLOBALS["lang"]['secondary'] = 'Sekundaarne';

$GLOBALS["lang"]['Secondary'] = 'Sekundaarne';

$GLOBALS["lang"]['Secondary Text'] = 'Teisene tekst';

$GLOBALS["lang"]['section'] = 'Sektsioon';

$GLOBALS["lang"]['Section'] = 'Sektsioon';

$GLOBALS["lang"]['secure'] = 'Turvaline';

$GLOBALS["lang"]['Secure'] = 'Turvaline';

$GLOBALS["lang"]['Security Name'] = 'Turvanimi';

$GLOBALS["lang"]['Security Status'] = 'Turvaseisund';

$GLOBALS["lang"]['security_zone'] = 'Turvatsooni';

$GLOBALS["lang"]['Security Zone'] = 'Turvatsooni';

$GLOBALS["lang"]['seed_ip'] = 'Seemne IP';

$GLOBALS["lang"]['Seed IP'] = 'Seemne IP';

$GLOBALS["lang"]['seed_ping'] = 'Seemneping';

$GLOBALS["lang"]['Seed Ping'] = 'Seemneping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Seemnete piiramine eraviisiliselt';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Seemnete piiramine eraviisiliselt';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Seemnepiirang alamvõrgule';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Seemnepiirang alamvõrgule';

$GLOBALS["lang"]['Select'] = 'Vali';

$GLOBALS["lang"]['Select All'] = 'Vali kõik';

$GLOBALS["lang"]['select_external_attribute'] = 'Välise atribuudi valimine';

$GLOBALS["lang"]['Select External Attribute'] = 'Välise atribuudi valimine';

$GLOBALS["lang"]['select_external_count'] = 'Välise arvu valimine';

$GLOBALS["lang"]['Select External Count'] = 'Välise arvu valimine';

$GLOBALS["lang"]['select_external_type'] = 'Väline valik Tüüp';

$GLOBALS["lang"]['Select External Type'] = 'Väline valik Tüüp';

$GLOBALS["lang"]['select_external_value'] = 'Väline valik Väärtus';

$GLOBALS["lang"]['Select External Value'] = 'Väline valik Väärtus';

$GLOBALS["lang"]['select_internal_attribute'] = 'Sisemise atribuudi valimine';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Sisemise atribuudi valimine';

$GLOBALS["lang"]['select_internal_count'] = 'Sisemise arvu valimine';

$GLOBALS["lang"]['Select Internal Count'] = 'Sisemise arvu valimine';

$GLOBALS["lang"]['select_internal_type'] = 'Vali sisemine Tüüp';

$GLOBALS["lang"]['Select Internal Type'] = 'Vali sisemine Tüüp';

$GLOBALS["lang"]['select_internal_value'] = 'Vali sisemine Väärtus';

$GLOBALS["lang"]['Select Internal Value'] = 'Vali sisemine Väärtus';

$GLOBALS["lang"]['Select a Table'] = 'Tabeli valimine';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Tundlikkus';

$GLOBALS["lang"]['Sensitivity'] = 'Tundlikkus';

$GLOBALS["lang"]['September'] = 'september';

$GLOBALS["lang"]['Serbia'] = 'Serbia';

$GLOBALS["lang"]['serial'] = 'Serial';

$GLOBALS["lang"]['Serial'] = 'Serial';

$GLOBALS["lang"]['serial_imei'] = 'Seeria Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Seeria Imei';

$GLOBALS["lang"]['serial_sim'] = 'Serial';

$GLOBALS["lang"]['Serial Sim'] = 'Serial';

$GLOBALS["lang"]['series'] = 'Series';

$GLOBALS["lang"]['Series'] = 'Series';

$GLOBALS["lang"]['server'] = 'Server';

$GLOBALS["lang"]['Server'] = 'Server';

$GLOBALS["lang"]['server_id'] = 'Serveri ID';

$GLOBALS["lang"]['Server ID'] = 'Serveri ID';

$GLOBALS["lang"]['Server Is'] = 'Server on';

$GLOBALS["lang"]['server_item'] = 'Serveri element';

$GLOBALS["lang"]['Server Item'] = 'Serveri element';

$GLOBALS["lang"]['Server Status'] = 'Serveri olek';

$GLOBALS["lang"]['Servers'] = 'Serverid';

$GLOBALS["lang"]['service'] = 'Service';

$GLOBALS["lang"]['Service'] = 'Service';

$GLOBALS["lang"]['service_identifier'] = 'Teenuse identifikaator';

$GLOBALS["lang"]['Service Identifier'] = 'Teenuse identifikaator';

$GLOBALS["lang"]['service_level_a'] = 'Teenuse tase A';

$GLOBALS["lang"]['Service Level A'] = 'Teenuse tase A';

$GLOBALS["lang"]['service_level_b'] = 'Teenustase B';

$GLOBALS["lang"]['Service Level B'] = 'Teenustase B';

$GLOBALS["lang"]['service_network'] = 'Service Network';

$GLOBALS["lang"]['Service Network'] = 'Service Network';

$GLOBALS["lang"]['service_number'] = 'Teenuse number';

$GLOBALS["lang"]['Service Number'] = 'Teenuse number';

$GLOBALS["lang"]['service_pack'] = 'Teeninduspakett';

$GLOBALS["lang"]['Service Pack'] = 'Teeninduspakett';

$GLOBALS["lang"]['service_plan'] = 'Teenindusplaan';

$GLOBALS["lang"]['Service Plan'] = 'Teenindusplaan';

$GLOBALS["lang"]['service_provider'] = 'Teenusepakkuja';

$GLOBALS["lang"]['Service Provider'] = 'Teenusepakkuja';

$GLOBALS["lang"]['service_tag'] = 'Teenuse silt';

$GLOBALS["lang"]['Service Tag'] = 'Teenuse silt';

$GLOBALS["lang"]['service_type'] = 'Teenuse tüüp';

$GLOBALS["lang"]['Service Type'] = 'Teenuse tüüp';

$GLOBALS["lang"]['service_version'] = 'Teenuseversioon';

$GLOBALS["lang"]['Service Version'] = 'Teenuseversioon';

$GLOBALS["lang"]['Set'] = 'Valmis';

$GLOBALS["lang"]['set_by'] = 'Seadke';

$GLOBALS["lang"]['Set By'] = 'Seadke';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Määrab nimekirja ekraanidel olevate tabelite suuruse (tavaline või kompaktne).';

$GLOBALS["lang"]['severity'] = 'Raskuse';

$GLOBALS["lang"]['Severity'] = 'Raskuse';

$GLOBALS["lang"]['severity_text'] = 'Raskuse tekst';

$GLOBALS["lang"]['Severity Text'] = 'Raskuse tekst';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Raskusaste arvutatakse <code>base_score</code> See võib olla üks järgmistest: Puudub, madal, keskmine, kõrge, kriitiline.';

$GLOBALS["lang"]['Seychelles'] = 'Seišellid';

$GLOBALS["lang"]['share'] = 'Jaga';

$GLOBALS["lang"]['Share'] = 'Jaga';

$GLOBALS["lang"]['Share Name'] = 'Jagamisnimi';

$GLOBALS["lang"]['shared'] = 'Jagatud';

$GLOBALS["lang"]['Shared'] = 'Jagatud';

$GLOBALS["lang"]['shared_name'] = 'Jagatud nimi';

$GLOBALS["lang"]['Shared Name'] = 'Jagatud nimi';

$GLOBALS["lang"]['shell'] = 'Shell';

$GLOBALS["lang"]['Shell'] = 'Shell';

$GLOBALS["lang"]['Ship Date'] = 'Laeva kuupäev';

$GLOBALS["lang"]['short'] = 'Lühike';

$GLOBALS["lang"]['Short'] = 'Lühike';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Kas ma peaksin eemaldama kõik mitte-jooksvad andmed sellest seadmest?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Kas seda faili (või mustrit) kasutatakse failide esitamise välistamiseks? Tavaliselt on failide auditeerimiseks määratud <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Kas seda müüjat tuleks kasutada FirstWave\'i haavatavuste hankimisel.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Kas me peaksime lisama seadmeid kaugteenusest, kohapeal.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Kas peaksime seda litsentsi rakendama nii valitud Orgidele kui ka Orgsi lastele?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Kas peaksime lugema filtreeritud porti avatud pordiks - ja seetõttu märgistama selle IP seadmega?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Kas peaksime pidama avatud filtreeritud porti avatud pordiks ja seetõttu märgistama selle IP kui seadme külge kinnitamise?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Peaksime selle grupi veebiliideses paljastama.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Kas me peaksime selle päringu kuvama veebiliidese aruannete loendis aruandluse menüü all.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Kas me peaksime selle päringu kuvama aruannete loendis veebiliidese menüüs Aruanded.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Kas me peaksime sihtmasinale Open-Scap\'i paigaldama.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Kas sobitada seadmepõhine mac-aadress, isegi kui selle teadaolev tõenäoline duplikaat VMware\'ist.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Kas me sobitame seadme DNS fqdn põhjal.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Kas sobitada seade selle DNS masinanime põhjal?';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Kas sobitada seade, mis põhineb selle UUID-il.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Kas sobitada seade selle dbus id põhjal?';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Kas me sobitame seadme selle fqdn põhjal.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Kas sobitada seade selle hostinime ja UUID põhjal?';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Kas sobitada seade selle masinanime ja dbus id põhjal?';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Kas sobitada seade selle hostinime ja seerianime põhjal?';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Kas me peaksime sobitama seadme IP-l põhineva seadme, kui meil on olemasolev seade ilma andmeteta.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Kas me sobitame seadme selle ip põhjal.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Kas me sobitame seadme selle mac-aadressi põhjal.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Kas me sobitame seadme selle seeria ja tüübi põhjal.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Kas me sobitame seadme selle seerianumbri põhjal.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Kas sobitada seade, mis põhineb ainult selle SNMP süsteemil (SNMP) ja seerial.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Kas sobitada seade, mis põhineb ainult selle SNMP süsteeminimel.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Kas sobitada seade ainult selle hostinime põhjal?';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Kas me peaksime IP-d pingile panema enne, kui proovime seda skaneerida? Kui see ei reageeri pingile, jätke see seade vahele.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Peaksime sisestama välise süsteemi oma kohalikest seadmetest.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Kas me teeme auditi ja esitame selle (jah/ei).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Kas peaksime testima SNMP-d UDP porti 161 kasutades?';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Kas peaksime testima SSH-d TCP pordiga 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Kas peaksime testima WMI-d, kasutades TCP porti 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Kas eemaldada agent (jah/ei).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Kas me peaksime seda meetodit kasutama kasutajate autentimiseks. Seadke <code>y</code> või <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Kas me peaksime kasutama seda meetodit kasutajate rollide täitmiseks. Väli <code>use_auth</code> tuleb seada <code>y</code> kasutada seda. Seadke <code>y</code> või <code>n</code>.';

$GLOBALS["lang"]['Show All'] = 'Näita kõiki';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Külgriba';

$GLOBALS["lang"]['Sidebar'] = 'Külgriba';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapuri';

$GLOBALS["lang"]['Site A'] = 'Sait';

$GLOBALS["lang"]['Site B'] = 'Sait B';

$GLOBALS["lang"]['site_hours_a'] = 'Saidi tunnid A';

$GLOBALS["lang"]['Site Hours A'] = 'Saidi tunnid A';

$GLOBALS["lang"]['site_hours_b'] = 'Saidi töötunnid B';

$GLOBALS["lang"]['Site Hours B'] = 'Saidi töötunnid B';

$GLOBALS["lang"]['size'] = 'Suurus';

$GLOBALS["lang"]['Size'] = 'Suurus';

$GLOBALS["lang"]['slaves'] = 'Orjad';

$GLOBALS["lang"]['Slaves'] = 'Orjad';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakkia (Slovakkia Vabariik)';

$GLOBALS["lang"]['Slovenia'] = 'Sloveenia';

$GLOBALS["lang"]['Smart Status'] = 'Arukas olek';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp ettevõtte ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp ettevõtte ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp ettevõtte nimi';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp ettevõtte nimi';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['snmp_version'] = 'Snmp versioon';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp versioon';

$GLOBALS["lang"]['socket'] = 'Sokke';

$GLOBALS["lang"]['Socket'] = 'Sokke';

$GLOBALS["lang"]['software'] = 'Tarkvara';

$GLOBALS["lang"]['Software'] = 'Tarkvara';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Tarkvara leiti viimase 7 päeva jooksul';

$GLOBALS["lang"]['Software Found Today'] = 'Täna leitud tarkvara';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Eile leitud tarkvara';

$GLOBALS["lang"]['software_key'] = 'Tarkvaravõti';

$GLOBALS["lang"]['Software Key'] = 'Tarkvaravõti';

$GLOBALS["lang"]['software_name'] = 'Tarkvara nimi';

$GLOBALS["lang"]['Software Name'] = 'Tarkvara nimi';

$GLOBALS["lang"]['Software Policies'] = 'Tarkvarapoliitika';

$GLOBALS["lang"]['software_revision'] = 'Tarkvara läbivaatamine';

$GLOBALS["lang"]['Software Revision'] = 'Tarkvara läbivaatamine';

$GLOBALS["lang"]['software_version'] = 'Tarkvaraversioon';

$GLOBALS["lang"]['Software Version'] = 'Tarkvaraversioon';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Saalomoni Saared';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somaalia, Somaalia Vabariik';

$GLOBALS["lang"]['sound'] = 'Heli';

$GLOBALS["lang"]['Sound'] = 'Heli';

$GLOBALS["lang"]['source'] = 'Allikas';

$GLOBALS["lang"]['Source'] = 'Allikas';

$GLOBALS["lang"]['South Africa'] = 'Lõuna-Aafrika';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Lõuna-Georgia ja Lõuna-Sandwichi saared';

$GLOBALS["lang"]['Spain'] = 'Hispaania';

$GLOBALS["lang"]['Spanish'] = 'hispaania';

$GLOBALS["lang"]['Specific to Azure.'] = 'Konkreetselt Azure\'ile.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Konkreetselt OKTA-le.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Määrab skaneerimisel väljajäetavate sihtmärkide (tühikuteta) komadega eraldatud nimekirja. Nimekiri, mille sisestate, kasutab tavalist Nmapi süntaksit, nii et see võib sisaldada masinanimesid, CIDR-võrguplokke, oktetivahemikke jne.';

$GLOBALS["lang"]['speed'] = 'Kiirus';

$GLOBALS["lang"]['Speed'] = 'Kiirus';

$GLOBALS["lang"]['speed_down_a'] = 'Kiirusta A';

$GLOBALS["lang"]['Speed Down A'] = 'Kiirusta A';

$GLOBALS["lang"]['speed_down_b'] = 'Kiirus alla B';

$GLOBALS["lang"]['Speed Down B'] = 'Kiirus alla B';

$GLOBALS["lang"]['speed_up_a'] = 'Kiirenda';

$GLOBALS["lang"]['Speed Up A'] = 'Kiirenda';

$GLOBALS["lang"]['speed_up_b'] = 'Kiirendus B';

$GLOBALS["lang"]['Speed Up B'] = 'Kiirendus B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh sadamad';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh sadamad';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stand-Alone'] = 'Seisa üksi';

$GLOBALS["lang"]['Standard'] = 'Standard';

$GLOBALS["lang"]['standard_id'] = 'Standardne ID';

$GLOBALS["lang"]['Standard ID'] = 'Standardne ID';

$GLOBALS["lang"]['standards'] = 'Standardid';

$GLOBALS["lang"]['Standards'] = 'Standardid';

$GLOBALS["lang"]['standards_policies'] = 'Standardipoliitika';

$GLOBALS["lang"]['Standards Policies'] = 'Standardipoliitika';

$GLOBALS["lang"]['standards_results'] = 'Standardite tulemused';

$GLOBALS["lang"]['Standards Results'] = 'Standardite tulemused';

$GLOBALS["lang"]['start_date'] = 'Alguskuupäev';

$GLOBALS["lang"]['Start Date'] = 'Alguskuupäev';

$GLOBALS["lang"]['start_mode'] = 'Käivita režiim';

$GLOBALS["lang"]['Start Mode'] = 'Käivita režiim';

$GLOBALS["lang"]['started_date'] = 'Alguskuupäev';

$GLOBALS["lang"]['Started Date'] = 'Alguskuupäev';

$GLOBALS["lang"]['state'] = 'osariik';

$GLOBALS["lang"]['State'] = 'osariik';

$GLOBALS["lang"]['Stats'] = 'Statsi';

$GLOBALS["lang"]['status'] = 'Staatus';

$GLOBALS["lang"]['Status'] = 'Staatus';

$GLOBALS["lang"]['Storage'] = 'Hoidla';

$GLOBALS["lang"]['storage_count'] = 'Hoidlate arv';

$GLOBALS["lang"]['Storage Count'] = 'Hoidlate arv';

$GLOBALS["lang"]['Storage-Area Network'] = 'Mälestusala võrk';

$GLOBALS["lang"]['string'] = 'String';

$GLOBALS["lang"]['String'] = 'String';

$GLOBALS["lang"]['sub_resource_id'] = 'alamressursi ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'alamressursi ID';

$GLOBALS["lang"]['sub_type'] = 'alamtüüp';

$GLOBALS["lang"]['Sub Type'] = 'alamtüüp';

$GLOBALS["lang"]['subject_key_ident'] = 'Teema võtmeidentifikaator';

$GLOBALS["lang"]['Subject Key Ident'] = 'Teema võtmeidentifikaator';

$GLOBALS["lang"]['Submit'] = 'Esita';

$GLOBALS["lang"]['Submitted From'] = 'Esitatud';

$GLOBALS["lang"]['subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subscription ID'] = 'Tellimuse ID';

$GLOBALS["lang"]['suburb'] = 'äärelinna';

$GLOBALS["lang"]['Suburb'] = 'äärelinna';

$GLOBALS["lang"]['Success'] = 'Edu';

$GLOBALS["lang"]['Sudan'] = 'Sudaani';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo parool';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo parool (valikuline)';

$GLOBALS["lang"]['suite'] = 'Sviit';

$GLOBALS["lang"]['Suite'] = 'Sviit';

$GLOBALS["lang"]['summaries'] = 'Kokkuvõtted';

$GLOBALS["lang"]['Summaries'] = 'Kokkuvõtted';

$GLOBALS["lang"]['Summary'] = 'Kokkuvõte';

$GLOBALS["lang"]['Sunday'] = 'Pühapäev';

$GLOBALS["lang"]['supplier'] = 'Tarnija';

$GLOBALS["lang"]['Supplier'] = 'Tarnija';

$GLOBALS["lang"]['Support'] = 'Toeta';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Toetatud tüübid <code>subnet</code>, <code>seed</code> ja <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbardi ja Jan Mayeni saared';

$GLOBALS["lang"]['Swaziland'] = 'Svaasimaa';

$GLOBALS["lang"]['Sweden'] = 'Rootsi';

$GLOBALS["lang"]['switch_device_id'] = 'Lülita seadme ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Lülita seadme ID';

$GLOBALS["lang"]['switch_port'] = 'Lülitage port';

$GLOBALS["lang"]['Switch Port'] = 'Lülitage port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Šveits, Šveitsi Konföderatsioon';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Süüria Araabia Vabariik';

$GLOBALS["lang"]['sysContact'] = 'SysContact';

$GLOBALS["lang"]['SysContact'] = 'SysContact';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'SysLocation';

$GLOBALS["lang"]['SysLocation'] = 'SysLocation';

$GLOBALS["lang"]['sysName'] = 'SysName';

$GLOBALS["lang"]['SysName'] = 'SysName';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['SysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['system_component'] = 'Süsteemi komponent';

$GLOBALS["lang"]['System Component'] = 'Süsteemi komponent';

$GLOBALS["lang"]['System-Area Network'] = 'Süsteem-piirkondvõrk';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX tase';

$GLOBALS["lang"]['TX Power'] = 'TX võimsus';

$GLOBALS["lang"]['TX Profile'] = 'TX profiil';

$GLOBALS["lang"]['table'] = 'Tabel';

$GLOBALS["lang"]['Table'] = 'Tabel';

$GLOBALS["lang"]['tag'] = 'Silt';

$GLOBALS["lang"]['Tag'] = 'Silt';

$GLOBALS["lang"]['tag_1'] = 'Silt 1';

$GLOBALS["lang"]['Tag 1'] = 'Silt 1';

$GLOBALS["lang"]['tag_2'] = 'Silt 2';

$GLOBALS["lang"]['Tag 2'] = 'Silt 2';

$GLOBALS["lang"]['tag_3'] = 'Silt 3';

$GLOBALS["lang"]['Tag 3'] = 'Silt 3';

$GLOBALS["lang"]['tags'] = 'Sildid';

$GLOBALS["lang"]['Tags'] = 'Sildid';

$GLOBALS["lang"]['Tags :: '] = 'Sildid :: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwani';

$GLOBALS["lang"]['Tajikistan'] = 'Tadžikistan';

$GLOBALS["lang"]['Tanzania'] = 'Tansaania';

$GLOBALS["lang"]['task'] = 'Ülesanne';

$GLOBALS["lang"]['Task'] = 'Ülesanne';

$GLOBALS["lang"]['tasks'] = 'Ülesanded';

$GLOBALS["lang"]['Tasks'] = 'Ülesanded';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp pordid';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp pordid';

$GLOBALS["lang"]['tenant'] = 'Rentnik';

$GLOBALS["lang"]['Tenant'] = 'Rentnik';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Test 1';

$GLOBALS["lang"]['Test 2'] = 'Katse 2';

$GLOBALS["lang"]['Test 3'] = 'Katse 3';

$GLOBALS["lang"]['test_minutes'] = 'Katseprotokollid';

$GLOBALS["lang"]['Test Minutes'] = 'Katseprotokollid';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test alamvõrk';

$GLOBALS["lang"]['Test Subnet'] = 'Test alamvõrk';

$GLOBALS["lang"]['tests'] = 'Testid';

$GLOBALS["lang"]['Tests'] = 'Testid';

$GLOBALS["lang"]['Text'] = 'Tekst';

$GLOBALS["lang"]['Thailand'] = 'Tai';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Active Directory domeen alamvõrkude loendi hankimiseks.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Active Directory server alamvõrkude loendi hankimiseks.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automaatne mõõdik tabab vastuse küsimusele <strong>Kas ründaja saab automatiseerida selle haavatavuse ärakasutamise sündmusi mitme sihtmärgi vahel?</strong> Põhineb tapmisahela 1.-4. astmel. Need sammud on luure, relvastamine, kohaletoimetamine ja ekspluateerimine (ei ole määratletud, ei, jah).';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE identifikaator.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Pilv, kellele see ese kuulub. Lingid <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Rühm juhtis varem baasi. Lingid <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'NTU seadmetabeli ID (kuvatakse seadme nimi) ühenduse selles otsas. Lingid <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Imporditud võrdluspõhimõtte ID.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'Ühenduse selle otsa asukohatabeli ID (kuvatakse asukoht. nimi). Lingid <code>locations.id</code>. A-asukoht on tavaliselt <code>FROM</code> asukoht.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'Ühenduse selle otsa asukohatabeli ID (kuvatakse asukoht. nimi). Lingid <code>locations.id</code>. B asukoht on tavaliselt <code>TO</code> asukoht.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Seotud seadme ID (kui see on olemas). Lingid <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Seotud avastuse ID. Seotud <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'Asjaomase kaubaliigi tunnuskood.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Selle orgi vanema orgi ID. Seotud <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Teenuseosutaja antud ID.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'ID saadi pilveavastusest.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'Selle koguja IP- aadress, mida kasutati serveriga suhtlemiseks.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'Seemne avastamise käivitamise seadme IP.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'Välise liidese IP.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'Siseliidese IP.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP või Telco, mis pakub seda linki.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'JSON-i rekord Mitrelt.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'JSON-i rekord NVD-st.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Selle kasutaja LDAP OU (kui kasutatakse LDAP).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Asukoht, mis sisaldab seda võrku. Lingid <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD määras baasoleku.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmapi ajastus.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Selle paketi vastu tuleb esitada aruanne. Tühi kõigile. Protsentuaalse märgi% kasutamine metamärgina. Testitakse os_group, os_perekonna ja os_name suhtes selles järjekorras.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'OpenAudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Lingitud pilve Open- AudIT ID. Lingid <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Ava-Aud Selles failis käivitati IT-serveri kood.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Ava-Aud Selle funktsiooni raames käivitati IT-serveri kood.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organisatsioon, kellele see kirje kuulub. Lingid <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Käimasoleva seotud avastuse protsessi identifikaator.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'RE asub selle seadme ülaosas.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP kogukonna string.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 autentimise paroolifraas.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 autentimisprotokoll.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passfrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 privaatsusprotokoll.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 turvalisuse tase.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 Turvanimi.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 kontekst Mootori ID (valikuline).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 kontekstinimi (valikuline).';

$GLOBALS["lang"]['The URL of the external system.'] = 'Välise süsteemi URL.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Sinu avatud audio URL Server, millele koguja aru annab (jälitusjoont ei ole).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL, millele auditiskriptid peaksid oma tulemuse esitama.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Selle kasutaja tegelik täisnimi.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Seotud lähtejoon. Lingid <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Seotud avastus (vajaduse korral). Lingid <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Testitav atribuut (alates <code>devices</code> laud.';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Testitav atribuut (peab sobima välise välja nimega allpool).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Auditi skript, millele oma kohandused rajada.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Põhitee, kust kasutajaid otsida.';

$GLOBALS["lang"]['The benchmark type.'] = 'Võrdlusaluse tüüp.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Hoone, kus asub riiul.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Väljastpoolt loodavate seadmete arvutatud arv.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Open-AudIT-is loodavate seadmete arvutatud arv.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Kogujate sisemine IP, mida kasutatakse avastuse käivitamisel.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Veeru nimi võõrtabelist. See peaks olema üks järgmistest: klass, keskkond, staatus, tüüp või menüü_kategooria.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Otsingu ajal käivitatud sihtseadme või Open- AudIT serveri koodi käsk.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Teie klastri konfiguratsioon võib olla: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> või tühi.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Volikirja parool. Kui volikiri on SSH võti, on see võti avamiseks kasutatav parool ja see on valikuline.';

$GLOBALS["lang"]['The credentials username.'] = 'Volikirja kasutajanimi.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Pilvede avastamise hetkeseis.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Avastuse hetkeseis.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Armatuurlaud, mida selle kasutaja puhul vaikimisi näidatakse. Lingid <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Andmebaasi versioon ja veebiversioon on vastuolulised.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Litsentsi kehtivusaja lõppemise kuupäev.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Kuupäev, mil tootja lõpetab tarkvara kasutamise. Tavaliselt asendatakse see uuema versiooniga. Hooldustööd võivad olla veel kättesaadavad.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Kuupäev, mil tarkvara enam värskendusi ei saa ja on tegelikult täielikult lõpetatud. Hooldustööd lõpetatakse.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Kuupäev, mil seda kirjet muudeti või lisati (loe ainult). Märkus - see on serveri ajatempel.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Kuupäev/kellaaeg, mil tulemus loodi.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Kuupäev, mil see ülesanne tuleb täita (* iga päeva kohta).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Nädalapäev, mil see ülesanne tuleb täita (* iga päeva kohta).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Selle meetodiga loodud igale kasutajale määratud vaikekeel.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Seade peab vastama Nmap pingile enne, kui seda peetakse võrgus.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Seade Open- AudIT-is. Lingid <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Skripti otselink on';

$GLOBALS["lang"]['The email address of the reciever'] = 'Retsipiendi e- posti aadress';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Litsentsi saamiseks on vaja FirstWave\'i ettevõtte binaarset versiooni. Palun lae OpenAudIT alla';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Kogu sellega seotud lähtejoon on see tulemus.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Välise viitega asukoha ID. Tavaliselt kasutatakse pilveauditit.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Esimest korda, kui Open-AudIT sai selle seadme üksikasjad.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Põrand, millel rakk asub.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Viidatav võõras tabel. See peaks olema üks: seadmed, asukohad, orgid või päringud.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'E- postiga saadetava väljundi vorming.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Täielikult kvalifitseeritud veerg, mille järgi rühmitada. Märkus: Kui tüüp = liiklus, tähistab see punast päringu ID-d.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Täielikult kvalifitseeritud tabel. veerg. Võib olla mitu, eraldatud komaga (tühikuid ei ole).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Selle haavatavuse testimiseks genereeritud SQL- päring. Seda välja saab muuta päringu parandamiseks vastavalt vajadusele.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Seadmete rühm, mille suhtes nulljoont kasutati.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Rühm, mis esitab integratsiooniseadmete nimekirja. Lingid <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Päevatund, mil see ülesanne tuleb täita (* iga tunni kohta).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Lingitud seadme ID. Lingid <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Identifikaatori veerg (täisarv) andmebaasis (loe ainult).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Selle lähtejoone tähtsus (veel kasutamata).';

$GLOBALS["lang"]['The integer of severity.'] = 'Raskuse täisarv.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth-meetodi IP-aadress.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Keel, millesse veebiliides kasutaja jaoks tõlkida.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Viimane kuupäev ja kellaaeg, mil see element täideti (loe ainult).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Viimane kord, kui Open-AudIT sai teada selle seadme üksikasjad.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Viimane kord, kui need kriteeriumid täideti.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Viimati toimus selline integratsioon.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Teenuseosutaja poolt liinile ühenduse selles otsas määratud liininumber.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Asukoht, kus rack asub. Lingid <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Asukoha aadress.';

$GLOBALS["lang"]['The locations area.'] = 'Asukohtade piirkond.';

$GLOBALS["lang"]['The locations city.'] = 'Asukohad linn.';

$GLOBALS["lang"]['The locations country.'] = 'Asukohariik.';

$GLOBALS["lang"]['The locations district.'] = 'Asukoha piirkond.';

$GLOBALS["lang"]['The locations latitude.'] = 'Kohtade laiuskraadid.';

$GLOBALS["lang"]['The locations level.'] = 'Asukohtade tase.';

$GLOBALS["lang"]['The locations longitude.'] = 'Asukoha pikkuskraad.';

$GLOBALS["lang"]['The locations phone.'] = 'Asukoha telefon.';

$GLOBALS["lang"]['The locations postcode.'] = 'Asukoha sihtnumber.';

$GLOBALS["lang"]['The locations region.'] = 'Asukohtade piirkond.';

$GLOBALS["lang"]['The locations room.'] = 'Asukoharuum.';

$GLOBALS["lang"]['The locations state.'] = 'Asukohad on kirjas.';

$GLOBALS["lang"]['The locations suburb.'] = 'Asukohad äärelinnas.';

$GLOBALS["lang"]['The locations suite.'] = 'Asukohtade sviit.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Maksimaalne füüsiline kaal (KG-des), mida see rack võib hoida.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Maksimaalne kogu BTU, millele see rack on hinnatud.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Selle tunni minut, millal see ülesanne tuleb täita (* iga minuti kohta).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Kuu aastas, mil ülesanne tuleb täita (* iga kuu kohta).';

$GLOBALS["lang"]['The name given to this item.'] = 'Sellele kaubaartiklile antud nimi.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Sellele kaubaartiklile antud nimi. Ideaalis peaks see olema ainulaadne.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Sellele kasutajale antud nimi (kasutatakse sisselogimiseks). Ideaalis peaks see olema ainulaadne.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Seotud pilve nimi (vajaduse korral).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Tarkvarapaketi nimi, nagu on auditeerinud Open-AudIT. Protsentuaalse märgi% kasutamine metamärgina.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Kasutaja nimi, kes viimati seda elementi muutis või lisas (loe ainult).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Teenuseosutaja antud nimi.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Võrk formaadis 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Võrgu alamvõrk avastuse käivitamiseks.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Selle seadmega hõivatud REde arv.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Asjaomaste asukohtade arv. Lingid <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Seotud võrkude arv. Lingid <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Auditeeritud seadmete arv selles pilves. Lingid <code>devices.cloud_id</code> ja <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave’i käes olevate kriitilise raskusastme haavatavuste arv (ei ole teie andmebaasis).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Selle avastuse abil leitud seadmete arv.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Seadmete arv seotud grupis.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Selles pilves töötavate seadmete arv. Lingid <code>devices.cloud_id</code> ja <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Peatatud olekuga seadmete arv selles pilves. Lingid <code>devices.cloud_id</code> ja <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Seadmete arv selles pilves. Lingid <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Seadmete arv, mille alusel seda võrdlusalust täidetakse. Tuletatud <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Seadmete arv, millega seda avastust piirata.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave’i kõrge raskusastmega haavatavuste arv (ei ole teie andmebaasis).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave’i madala raskusastmega haavatavuste arv (ei ole teie andmebaasis).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'FirstWave’i keskmise raskusastmega haavatavuste arv (ei ole teie andmebaasis).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Ostetud litsentside arv.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Sekundite arv, mis kulub siht- IP- ga suhtlemiseks.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'FirstWave’i haavatavuste arv ilma raskusastmeta (ei ole teie andmebaasis).';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Vabatahtlik teisene veerg. Märkus: Kui tüüp = liiklus, tähistab see kollast päringu ID-d.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Vabatahtlik kolmas veerg. Märkus: Kui tüüp = liiklus, tähistab see rohelise päringu ID-d.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Selle seadme orientatsioon.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Atribuudi dn_ account parool.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Parool, mida kasutatakse välise süsteemi kasutamiseks.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Faili või kataloogi asukoht.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Faili või kataloogi asukoht. Kataloogid peaksid lõppema kaldkriipsuga.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Raami füüsiline sügavus (CM-des).';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Raami füüsiline kõrgus (CMdes).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Racki füüsiline kaal (KGdes) praegu.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Raami füüsiline kaal (KGdes), kui see on tühi.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Raami füüsiline laius (CMdes).';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Kapsel (kui see on olemas), mille osa see rakk on.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Vooluahel, millele see rakk kinnitub.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Põhiline andmebaasitabel, millele vidin rajada.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Järjekorra elemendi protsessi identifikaator.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Protsess, mida kasutati viimati seadme andmete hankimiseks';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Päring, mis annab integratsiooniseadmete nimekirja. Lingid <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Rack vara number.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Racki varamärk.';

$GLOBALS["lang"]['The rack bar code.'] = 'Rack bar kood.';

$GLOBALS["lang"]['The rack model.'] = 'Racki mudel.';

$GLOBALS["lang"]['The rack serial.'] = 'Rack seeria.';

$GLOBALS["lang"]['The rack series.'] = 'Rack seeria.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'See seadeldis asub seal. Lingid <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Väljaselgitatud turvanõrkuste käsitlemise ja parandamise soovitatav protsess. See hõlmab tavaliselt plaastrite, värskenduste või muude meetmete rakendamist, et kõrvaldada haavatavuste põhjustatud oht.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Kataloogi tavaline domeenitähis. Eg. <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'Käsu tulemus.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Ruum, kus rakk asub.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Rida, milles rack asub.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Salajane võti, mida kasutatakse koos teie AWS EC2 API võtmega.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Tarkvara lõppkäitluse kuupäev.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Tarkvara kasutusaja lõppkuupäev.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Konkreetse andmebaasi veerg määratud andmebaasitabelist.';

$GLOBALS["lang"]['The specific database table.'] = 'Andmebaasi eritabel.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standardsed Nmapi ajastuse valikud. Tavaliselt kasutame -T4 (agressiivne), kuna seda soovitatakse korraliku lairiba- või ethernetiühenduse jaoks.';

$GLOBALS["lang"]['The status of this integration'] = 'Integratsiooni staatus';

$GLOBALS["lang"]['The status of this queued item.'] = 'Järjekorras oleva elemendi staatus.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Siht- IP, millele see logikirje viitab (kui on).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Tulemusrea kohta genereeritava lingi mall.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Diagrammi allosa tekst joondiagrammil (ainult).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Kuvatav tekst.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Ajatempel, mille järel see ülesanne peaks kulgema. Näiteks käivitage ülesanne pärast 1. juunit 2017 kell 10, määrake see <code>2017-06-01 09:59:00</code>. See väärtus peaks olema nullpadded (st 09, mitte 9). See väärtus vaikeväärtus <code>2000-01-01 00:00:00</code> Mis tähendab vaikimisi, et ajastatud ülesanne käivitatakse järgmisel planeeritud täitmise ajal.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Top 10, 100 või 1000 (või puudub) TCP pordid, mida tavaliselt kasutatakse vastavalt Nmapile.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = '10, 100 või 1000 (või mitte ühtegi) UDP-porti, mida tavaliselt kasutatakse Nmapi järgi.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'BTU koguväljund selle raami järgi.';

$GLOBALS["lang"]['The type of device.'] = 'Seadme tüüp.';

$GLOBALS["lang"]['The type of organisation.'] = 'Organisatsiooni liik.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Racki tüüp (arvutus, võimsus, võrk jne).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Käivitatava ülesande tüüp. Üks järgmistest: baastase, võrdlusalus, pilve avastamine, avastamine, integreerimine, raport, päring.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Integratsiooni tüüp (tavaliselt nimetatud välise süsteemi järgi).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Selle serveri unikaalne identifikaator.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Kasutajakonto, mida koguja kasutab. Lingid <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Kasutajanimi, mida kasutatakse välisele süsteemile juurdepääsuks.';

$GLOBALS["lang"]['The users email address.'] = 'Kasutaja e- posti aadress.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Tavapärased töötunnid selles kohas.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Kirjele omistatud väärtus.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Selle konkreetse elemendi jaoks salvestatud väärtus.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Müüja nimi vastavalt CPE kirjetele.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Müüja võttis CPE-lt.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Veebikataloog masinal, mille Open- AudIT on paigaldatud (vajab lohisevat kaldkriipsu).';

$GLOBALS["lang"]['The widget at position '] = 'Vidin asukohas ';

$GLOBALS["lang"]['The width of this device.'] = 'Seadme laius.';

$GLOBALS["lang"]['Then'] = 'Siis';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'See CVE hangitakse ja kirjutatakse olemasolev CVE üle, kui see on olemas.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'See atribuut salvestatakse JSON-objektina. See on kõigi kogude nimekiri ja sisaldab kogu nime koos <code>c</code>, <code>r</code>, <code>u</code> ja <code>d</code> mis esindavad loomist, lugemist, värskendamist ja kustutamist. Need on toimingud, mida kasutaja saab selle konkreetse kollektsiooni objektidel teha.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'See võib olla kas varchar (tekstiväli), loend (valitavate väärtuste loend) või kuupäev.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'See koguja on universaalselt ainulaadne identifikaator.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'See kirjeldus on automaatselt asustatud ja peaks ideaalis jääma nii, nagu on.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'See funktsioon nõuab professionaalset või ettevõtluslitsentsi.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'See on tavaliselt esmane veerg, kui pole teisiti seadistatud. Märkus: Kui tüüp = liiklus, tähistab see teisejärgulist teksti.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'See element peab vastama valitud atribuudi väärtusele või sisaldama kasutatava päringu ID-d.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'See element peab vastama valitud atribuudi väärtusele.';

$GLOBALS["lang"]['This license expires on'] = 'Käesolev litsents aegub';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'See peaks olema kas 1 või riiuli kõrgus.';

$GLOBALS["lang"]['This will auto-populate.'] = 'See toimub automaatselt.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'See aeglustab oluliselt avastamisskaneerimist.';

$GLOBALS["lang"]['Thursday'] = 'neljapäeval';

$GLOBALS["lang"]['time_caption'] = 'Ajapealdis';

$GLOBALS["lang"]['Time Caption'] = 'Ajapealdis';

$GLOBALS["lang"]['time_daylight'] = 'Päevavalgus';

$GLOBALS["lang"]['Time Daylight'] = 'Päevavalgus';

$GLOBALS["lang"]['Time to Execute'] = 'Aeg käivitada';

$GLOBALS["lang"]['timeout'] = 'Aegumine';

$GLOBALS["lang"]['Timeout'] = 'Aegumine';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Aegumine sihtmärgi kohta (teised)';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Ajatempel';

$GLOBALS["lang"]['timing'] = 'Ajastus';

$GLOBALS["lang"]['Timing'] = 'Ajastus';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Pealkiri';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Tööriistariba stiil';

$GLOBALS["lang"]['Toolbar Style'] = 'Tööriistariba stiil';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP pordid';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Ülemine Nmapi UDP port';

$GLOBALS["lang"]['Traditional Chinese'] = 'Traditsiooniline hiina';

$GLOBALS["lang"]['Traffic Light'] = 'Liiklustuli';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad ja Tobago';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'LDAP- i sisselogimiste tõrkeotsing';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Proovige kõiki uusimaid funktsioone Open-AudIT Enterprise\'i TASUTA 100 seadme litsentsiga. Palun loe <a href=\"';

$GLOBALS["lang"]['Tuesday'] = 'Teisipäev';

$GLOBALS["lang"]['Tunisia'] = 'Tuneesia';

$GLOBALS["lang"]['Turkey'] = 'Türgi';

$GLOBALS["lang"]['Turkmenistan'] = 'Türkmenistani';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Turks ja Caicose saared';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx tase';

$GLOBALS["lang"]['Tx Level'] = 'Tx tase';

$GLOBALS["lang"]['tx_power'] = 'Tx võimsus';

$GLOBALS["lang"]['Tx Power'] = 'Tx võimsus';

$GLOBALS["lang"]['tx_profile'] = 'Tx profiil';

$GLOBALS["lang"]['Tx Profile'] = 'Tx profiil';

$GLOBALS["lang"]['type'] = 'Tüüp';

$GLOBALS["lang"]['Type'] = 'Tüüp';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp portide';

$GLOBALS["lang"]['Udp Ports'] = 'Udp portide';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraina';

$GLOBALS["lang"]['uninstall'] = 'Uninstall';

$GLOBALS["lang"]['Uninstall'] = 'Uninstall';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Deinstallige agent';

$GLOBALS["lang"]['United Arab Emirates'] = 'Araabia Ühendemiraadid';

$GLOBALS["lang"]['United Kingdom'] = 'Ühendkuningriik';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Ameerika Ühendriikide väikesaared';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Ameerika Ühendriikide Neitsisaared';

$GLOBALS["lang"]['United States of America'] = 'Ameerika Ühendriigid';

$GLOBALS["lang"]['Unknown'] = 'Tundmatu';

$GLOBALS["lang"]['unlock_pin'] = 'Avage pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Avage pin';

$GLOBALS["lang"]['Unscheduled'] = 'Plaaniväline';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Kasutamata punkti 5.2.0 seisuga.';

$GLOBALS["lang"]['Unused.'] = 'Kasutamata.';

$GLOBALS["lang"]['Update'] = 'Uuenda';

$GLOBALS["lang"]['update_external_count'] = 'Välise arvu uuendamine';

$GLOBALS["lang"]['Update External Count'] = 'Välise arvu uuendamine';

$GLOBALS["lang"]['update_external_from_internal'] = 'Uuendamine väliselt sisemiselt';

$GLOBALS["lang"]['Update External From Internal'] = 'Uuendamine väliselt sisemiselt';

$GLOBALS["lang"]['update_internal_count'] = 'Sisemise arvu uuendamine';

$GLOBALS["lang"]['Update Internal Count'] = 'Sisemise arvu uuendamine';

$GLOBALS["lang"]['update_internal_from_external'] = 'Sisemine uuendamine välisest';

$GLOBALS["lang"]['Update Internal From External'] = 'Sisemine uuendamine välisest';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'NMIS- seadmete uuendamine Open- AudIT- is';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Avaauditi uuendamine Seadmed ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Avaauditi uuendamine NMISi seadmed';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Uuendatakse iga kord, kui avastus on käivitatud IP-dega, mis tuvastatakse reageerima.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Uuendatakse iga kord, kui avastus on käivitatud Nmapi skaneeritud IP-dega.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Uuendatud iga kord, kui avastus on teostatud seadmetega, mida saime auditeerida.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Uuendatud iga kord, kui avastus on teostatud seadmetega, mida me saime pärida.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Uuendatakse iga kord, kui avastus on tehtud.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Uuendatakse iga kord, kui avastus on tehtud.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Uuendatakse iga kord, kui avastus on täide viidud.';

$GLOBALS["lang"]['Updating'] = 'Uuendamine';

$GLOBALS["lang"]['Upgrade'] = 'Uuenda';

$GLOBALS["lang"]['Upload an audit result file'] = 'Auditi tulemuste faili üleslaadimine';

$GLOBALS["lang"]['Upper Case'] = 'Upper Case';

$GLOBALS["lang"]['uptime'] = 'Uptime';

$GLOBALS["lang"]['Uptime'] = 'Uptime';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, Idavabariik';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Kasuta';

$GLOBALS["lang"]['Use'] = 'Kasuta';

$GLOBALS["lang"]['use_authentication'] = 'Autentimise kasutamine';

$GLOBALS["lang"]['Use Authentication'] = 'Autentimise kasutamine';

$GLOBALS["lang"]['use_authorisation'] = 'Kasutusluba';

$GLOBALS["lang"]['Use Authorisation'] = 'Kasutusluba';

$GLOBALS["lang"]['Use SNMP'] = 'SNMP kasutamine';

$GLOBALS["lang"]['Use SSH'] = 'SSH kasutamine';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Kasuta turvalist (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Teenuse versioonituvastuse kasutamine';

$GLOBALS["lang"]['Use WMI'] = 'WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Kasutamine autentimiseks';

$GLOBALS["lang"]['Use for Roles'] = 'Rollide kasutamine';

$GLOBALS["lang"]['used'] = 'Kasutatud';

$GLOBALS["lang"]['Used'] = 'Kasutatud';

$GLOBALS["lang"]['used_count'] = 'Kasutatud loend';

$GLOBALS["lang"]['Used Count'] = 'Kasutatud loend';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Kasutab ainult OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Kasutatakse sisemiselt ühe seadme avastamisel.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Kasutatakse sisemiselt ühe seadme avastamisel. Lingid <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Kasutatakse siis, kui LDAP-serverid on konfigureeritud kasutajaandmete sisestamiseks - see hõlmab Orge, millele neil on juurdepääs. Kui kasutaja kuulub sellesse LDAP-gruppi, määratakse talle see org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Kasutatakse siis, kui LDAP-serverid on konfigureeritud kasutaja andmete sisestamiseks - see hõlmab ka neile määratud rolle. Kui kasutaja on selles LDAP-grupis, määratakse talle see roll.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Kasutatakse OpenLDAP otsingul, et sobitada kasutajat UID grupiliikmetega. Vaikimisi <code>memberUid</code>. Kasutab ainult OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Kasutatakse integratsioonide ja FirstWave\'i seirerakendustega.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Kasutatakse integratsioonide ja FirstWave\'i seirerakendustega. Määra y, kui töötav SNMP tuvastatakse avastamise teel.';

$GLOBALS["lang"]['user'] = 'Kasutaja';

$GLOBALS["lang"]['User'] = 'Kasutaja';

$GLOBALS["lang"]['User DN'] = 'Kasutaja DN';

$GLOBALS["lang"]['user_group'] = 'Kasutajagrupp';

$GLOBALS["lang"]['User Group'] = 'Kasutajagrupp';

$GLOBALS["lang"]['user_id'] = 'Kasutaja ID';

$GLOBALS["lang"]['User ID'] = 'Kasutaja ID';

$GLOBALS["lang"]['user_interaction'] = 'Kasutajate suhtlus';

$GLOBALS["lang"]['User Interaction'] = 'Kasutajate suhtlus';

$GLOBALS["lang"]['User Membership Attribute'] = 'Kasutaja liikmesuse atribuut';

$GLOBALS["lang"]['user_name'] = 'Kasutajanimi';

$GLOBALS["lang"]['User Name'] = 'Kasutajanimi';

$GLOBALS["lang"]['User Policies'] = 'Kasutajapoliitika';

$GLOBALS["lang"]['Username'] = 'Kasutajanimi';

$GLOBALS["lang"]['username'] = 'Kasutajanimi';

$GLOBALS["lang"]['users'] = 'Kasutajad';

$GLOBALS["lang"]['Users'] = 'Kasutajad';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Kasutajad, rollid ja orgid';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Entra kasutamine autentimiseks';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'OKTA kasutamine autentimiseks';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Tavaliselt Mb/s, asukohast A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Tavaliselt Mb/s, asukohast B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Tavaliselt Mb/s asukohani A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Tavaliselt Mb/s asukohani B.';

$GLOBALS["lang"]['Uzbekistan'] = 'Usbekistan';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLANi ID';

$GLOBALS["lang"]['valid_from'] = 'Kehtiv';

$GLOBALS["lang"]['Valid From'] = 'Kehtiv';

$GLOBALS["lang"]['valid_from_raw'] = 'Kehtib toorest';

$GLOBALS["lang"]['Valid From Raw'] = 'Kehtib toorest';

$GLOBALS["lang"]['valid_to'] = 'Kehtiv';

$GLOBALS["lang"]['Valid To'] = 'Kehtiv';

$GLOBALS["lang"]['valid_to_raw'] = 'Kehtib toorest';

$GLOBALS["lang"]['Valid To Raw'] = 'Kehtib toorest';

$GLOBALS["lang"]['Valid Values'] = 'Kehtivad väärtused';

$GLOBALS["lang"]['value'] = 'Väärtus';

$GLOBALS["lang"]['Value'] = 'Väärtus';

$GLOBALS["lang"]['values'] = 'Väärtused';

$GLOBALS["lang"]['Values'] = 'Väärtused';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Muutuja';

$GLOBALS["lang"]['Variable'] = 'Muutuja';

$GLOBALS["lang"]['vendor'] = 'Müüja';

$GLOBALS["lang"]['Vendor'] = 'Müüja';

$GLOBALS["lang"]['vendors'] = 'Müüjad';

$GLOBALS["lang"]['Vendors'] = 'Müüjad';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Versioon';

$GLOBALS["lang"]['Version'] = 'Versioon';

$GLOBALS["lang"]['version_padded'] = 'Versioon Padded';

$GLOBALS["lang"]['Version Padded'] = 'Versioon Padded';

$GLOBALS["lang"]['version_raw'] = 'Versioon Toores';

$GLOBALS["lang"]['Version Raw'] = 'Versioon Toores';

$GLOBALS["lang"]['version_string'] = 'Versioonistring';

$GLOBALS["lang"]['Version String'] = 'Versioonistring';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnami';

$GLOBALS["lang"]['View'] = 'Vaade';

$GLOBALS["lang"]['View All'] = 'Vaade';

$GLOBALS["lang"]['View Details'] = 'Vaatamise üksikasjad';

$GLOBALS["lang"]['View Device'] = 'Vaade Seade';

$GLOBALS["lang"]['View Discovery'] = 'Vaade Avastamine';

$GLOBALS["lang"]['View Policy'] = 'Vaatepoliitika';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuaalne privaatvõrk';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualiseerimine';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Külastage meie YouTube\'i kanalit juhendavate videote jaoks.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Vlani ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlani ID';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Vm Seadme ID';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm Seadme ID';

$GLOBALS["lang"]['vm_group'] = 'Vm grupp';

$GLOBALS["lang"]['Vm Group'] = 'Vm grupp';

$GLOBALS["lang"]['vm_ident'] = 'Vm ID';

$GLOBALS["lang"]['Vm Ident'] = 'Vm ID';

$GLOBALS["lang"]['vm_server_name'] = 'Vm serveri nimi';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm serveri nimi';

$GLOBALS["lang"]['vm_vendor'] = 'Vm müüja';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm müüja';

$GLOBALS["lang"]['vuln_status'] = 'Vulni staatus';

$GLOBALS["lang"]['Vuln Status'] = 'Vulni staatus';

$GLOBALS["lang"]['vulnerabilities'] = 'Haavatavus';

$GLOBALS["lang"]['Vulnerabilities'] = 'Haavatavus';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Haavatavuste vahemälu';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Haavatavuste vahemälu';

$GLOBALS["lang"]['vulnerability_id'] = 'Haavatavuse ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Haavatavuse ID';

$GLOBALS["lang"]['WHERE'] = 'Kus';

$GLOBALS["lang"]['wall_port'] = 'Wall Port';

$GLOBALS["lang"]['Wall Port'] = 'Wall Port';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis ja Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Tahad rohkem teada?';

$GLOBALS["lang"]['Warning'] = 'Hoiatus';

$GLOBALS["lang"]['warranty'] = 'Garantii';

$GLOBALS["lang"]['Warranty'] = 'Garantii';

$GLOBALS["lang"]['warranty_duration'] = 'Garantii kestus';

$GLOBALS["lang"]['Warranty Duration'] = 'Garantii kestus';

$GLOBALS["lang"]['warranty_expires'] = 'Garantii aegub';

$GLOBALS["lang"]['Warranty Expires'] = 'Garantii aegub';

$GLOBALS["lang"]['warranty_status'] = 'Garantii staatus';

$GLOBALS["lang"]['Warranty Status'] = 'Garantii staatus';

$GLOBALS["lang"]['warranty_type'] = 'Garantii liik';

$GLOBALS["lang"]['Warranty Type'] = 'Garantii liik';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'Veebileht';

$GLOBALS["lang"]['Wednesday'] = 'Kolmapäev';

$GLOBALS["lang"]['weight'] = 'Kaal';

$GLOBALS["lang"]['Weight'] = 'Kaal';

$GLOBALS["lang"]['weight_current'] = 'Kaaluvool';

$GLOBALS["lang"]['Weight Current'] = 'Kaaluvool';

$GLOBALS["lang"]['weight_empty'] = 'Kaalutühi';

$GLOBALS["lang"]['Weight Empty'] = 'Kaalutühi';

$GLOBALS["lang"]['weight_max'] = 'Kaal Max';

$GLOBALS["lang"]['Weight Max'] = 'Kaal Max';

$GLOBALS["lang"]['Welcome'] = 'Tere tulemast.';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Tere tulemast Dashboard';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Tere tulemast FirstWave Open-Auditi';

$GLOBALS["lang"]['Western Sahara'] = 'Lääne-Sahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Mida ma võin oodata, kui mul pole mandaati';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Mis on selle riiuli eesmärk?';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Milline on selle asukoha tüüp? Lubatud tüübid <code>attributes</code> laud.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Kui integreerime seadmeid välisest süsteemist, siis kui seadet Open-AudIT-is ei eksisteeri, kas peaksime selle looma?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Kui integreerime seadmeid välisest süsteemist, siis kui seadet on välises süsteemis uuendatud, kas peaksime seda Open-AudIT-is värskendama?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Kui me leiame välise seadme, kas peaksime selle avastama?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Millal see võrdlusalus kavatsetakse täita. Tuletatud seotud üksusest <code>tasks.type</code> ja <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Kui see logi loodi.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Kui see järjekorra element alustas töötlemist.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Kui me käivitame selle lähtejoone, kas me peaksime kontrollima, kas seadmetes on elemente, mis ei ole selle lähtejoone poliitikas.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Kui me saame avatud porti, kas peaksime proovima testida teenuse versiooni, mis sellel hetkel töötab? See aitab kontrollida tegelikke teenuseid.';

$GLOBALS["lang"]['where'] = 'Kus';

$GLOBALS["lang"]['Where'] = 'Kus';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Kus seadme andmete ekraanil soovite seda välja näha.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Seal, kus riiul on reas.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Kas haavatavus mõjutab komponente väljaspool oma, kasutades mõju, kättesaadavust ja konfidentsiaalsust.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Kas kasutaja suhtlemine on vajalik (puudub, passiivne, aktiivne).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Millisele operatsioonisüsteemile see võrdlusalus kehtib.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Milliseid seadmeid peaks Open-AudIT välisest süsteemist looma (kui on). Kasutades kõiki, mitte ühtegi või antud atribuuti.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Millises alammenüüs me seda päringut näitame.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kes selle riiuli tegi.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Miks ainult Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Miks me selle poliitika välja jätame?';

$GLOBALS["lang"]['Wide Area Network'] = 'Lairibavõrk';

$GLOBALS["lang"]['Widget'] = 'Vidina';

$GLOBALS["lang"]['Widget # '] = 'Vidinat ';

$GLOBALS["lang"]['Widget Type'] = 'Vidina tüüp';

$GLOBALS["lang"]['widgets'] = 'Vidinad';

$GLOBALS["lang"]['Widgets'] = 'Vidinad';

$GLOBALS["lang"]['width'] = 'Laius';

$GLOBALS["lang"]['Width'] = 'Laius';

$GLOBALS["lang"]['windows'] = 'Windows';

$GLOBALS["lang"]['Windows'] = 'Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Windowsi testskript';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Traadita kohtvõrk';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi nurjub';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi nurjub';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Töörühm';

$GLOBALS["lang"]['Workgroup'] = 'Töörühm';

$GLOBALS["lang"]['Working Credentials'] = 'Töövolitused';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Kollane päring';

$GLOBALS["lang"]['Yemen'] = 'Jeemeni';

$GLOBALS["lang"]['Yes'] = 'Jah.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Võib-olla soovite selle URL-i kopeerida ja kleepida oma töötajatele saadetud e-kirjas.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Enne uue litsentsi lisamist peate oma olemasoleva litsentsi kustutama.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube\'i õpetused';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Sinu AWS EC2 API võti.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Teie Google Compute volikirjad on JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Litsentsid';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsofti Azure\'i kliendi ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azure\'i kliendisaladus.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Microsoft Azure\'i tellimuse ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Teie SQL valib atribuudid, mis sisestavad selle päringu.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Teie SQL valib seadmed, mis asustavad selle rühma.';

$GLOBALS["lang"]['Your SSH key.'] = 'Sinu SSH võti.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Teie juurdepääsu volikirjad, nagu see pilved native API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Selle ühenduse oleku kirjeldus (pakkumine, pensionile jäämine jne).';

$GLOBALS["lang"]['Your description of this item.'] = 'Teie kirjeldus sellest.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Selle tarkvara tüübi üldine nimi';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Teie üldine versioon selle tarkvara jaoks';

$GLOBALS["lang"]['Zambia'] = 'Sambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['active'] = 'aktiivne';

$GLOBALS["lang"]['active directory'] = 'aktiivne kataloog';

$GLOBALS["lang"]['active/active'] = 'aktiivne/aktiivne';

$GLOBALS["lang"]['active/passive'] = 'aktiivne/passiivne';

$GLOBALS["lang"]['advertisement'] = 'reklaam';

$GLOBALS["lang"]['alert'] = 'häire';

$GLOBALS["lang"]['all'] = 'kõik';

$GLOBALS["lang"]['allocated'] = 'eraldatud';

$GLOBALS["lang"]['amazon'] = 'Amazonase';

$GLOBALS["lang"]['antivirus'] = 'viirusetõrje';

$GLOBALS["lang"]['application'] = 'taotluse';

$GLOBALS["lang"]['approved'] = 'heaks kiidetud';

$GLOBALS["lang"]['attribute'] = 'atribuut';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'varukoopia';

$GLOBALS["lang"]['banned'] = 'keelatud';

$GLOBALS["lang"]['blog'] = 'blogi';

$GLOBALS["lang"]['bottom'] = 'põhja';

$GLOBALS["lang"]['browser_lang'] = 'brauser_ lang';

$GLOBALS["lang"]['building'] = 'hoone';

$GLOBALS["lang"]['cloud'] = 'pilve';

$GLOBALS["lang"]['code'] = 'kood';

$GLOBALS["lang"]['collector'] = 'koguja';

$GLOBALS["lang"]['compute'] = 'arvutada';

$GLOBALS["lang"]['config'] = 'kondiitri';

$GLOBALS["lang"]['contains'] = 'sisaldab';

$GLOBALS["lang"]['create'] = 'luua';

$GLOBALS["lang"]['created'] = 'loonud';

$GLOBALS["lang"]['critical'] = 'kriitilise';

$GLOBALS["lang"]['cve'] = 'koopa';

$GLOBALS["lang"]['database'] = 'andmebaasi';

$GLOBALS["lang"]['debug'] = 'silumist';

$GLOBALS["lang"]['delegated'] = 'delegeeritud';

$GLOBALS["lang"]['delete'] = 'kustuta';

$GLOBALS["lang"]['deleted'] = 'kustutatud';

$GLOBALS["lang"]['denied'] = 'eitas';

$GLOBALS["lang"]['devices'] = 'seadmeid';

$GLOBALS["lang"]['digitalocean'] = 'digitaalookean';

$GLOBALS["lang"]['does not equal'] = 'ei võrdu';

$GLOBALS["lang"]['emergency'] = 'hädaolukord';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'võrdne';

$GLOBALS["lang"]['error'] = 'viga';

$GLOBALS["lang"]['established'] = 'loodud';

$GLOBALS["lang"]['excluded'] = 'välistatud';

$GLOBALS["lang"]['expired'] = 'aegunud';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'Äärmuslik - ilma milleta organisatsioon ebaõnnestuks.

Väga kõrge - funktsioonid, mis on organisatsiooni ellujäämiseks hädavajalikud ja mida tuleb viivitamatult taastada.

kõrge - olulised funktsioonid, mida tuleks kiiresti taastada, kuid millel võib olla veidi pikem taastumisaeg.

keskmine - funktsioonid, mis on vajalikud, kuid taluvad pikemat seisakuaega.

madal - mitteolulised funktsioonid, mida saab edasi lükata ilma olulise mõjuta.

unassigned - vaikeväärtus kuni määramiseni.';

$GLOBALS["lang"]['fail'] = 'ebaõnnestuda';

$GLOBALS["lang"]['false'] = 'vale';

$GLOBALS["lang"]['file'] = 'faili';

$GLOBALS["lang"]['firewall'] = 'tulemüüri';

$GLOBALS["lang"]['fixed'] = 'fikseeritud';

$GLOBALS["lang"]['floor'] = 'korrusel';

$GLOBALS["lang"]['front'] = 'ees';

$GLOBALS["lang"]['front-left'] = 'esivasak';

$GLOBALS["lang"]['front-right'] = 'esiparem';

$GLOBALS["lang"]['github'] = 'kaelkirjak';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'suurem või võrdne';

$GLOBALS["lang"]['greater than'] = 'suurem';

$GLOBALS["lang"]['group'] = 'grupp';

$GLOBALS["lang"]['head'] = 'pea';

$GLOBALS["lang"]['here'] = 'siin';

$GLOBALS["lang"]['high availability'] = 'kõrge kättesaadavusega';

$GLOBALS["lang"]['howto'] = 'kuidas';

$GLOBALS["lang"]['ignored'] = 'ignoreerisid';

$GLOBALS["lang"]['in'] = 'sisse';

$GLOBALS["lang"]['inactive'] = 'mitteaktiivne';

$GLOBALS["lang"]['incomplete'] = 'ebatäielik';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (jah/ei) jne';

$GLOBALS["lang"]['is licensed to'] = 'litsentsitakse';

$GLOBALS["lang"]['left'] = 'vasakule';

$GLOBALS["lang"]['less or equals'] = 'vähem või võrdne';

$GLOBALS["lang"]['less than'] = 'vähem';

$GLOBALS["lang"]['license'] = 'litsentsi';

$GLOBALS["lang"]['like'] = 'nagu';

$GLOBALS["lang"]['line'] = 'joon';

$GLOBALS["lang"]['load balancing'] = 'koormuse tasakaalustamine';

$GLOBALS["lang"]['location'] = 'asukoht';

$GLOBALS["lang"]['managed'] = 'õnnestus';

$GLOBALS["lang"]['microsoft'] = 'mikropehme';

$GLOBALS["lang"]['mount point'] = 'kinnituspunkt';

$GLOBALS["lang"]['network'] = 'võrku';

$GLOBALS["lang"]['news'] = 'uudiseid';

$GLOBALS["lang"]['no'] = 'ei';

$GLOBALS["lang"]['node'] = 'sõlme';

$GLOBALS["lang"]['none'] = 'ükski';

$GLOBALS["lang"]['normal'] = 'normaalne';

$GLOBALS["lang"]['not applicable'] = 'ei kohaldata';

$GLOBALS["lang"]['not in'] = 'mitte';

$GLOBALS["lang"]['not like'] = 'mitte';

$GLOBALS["lang"]['notice'] = 'teate';

$GLOBALS["lang"]['notification'] = 'teade';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['openldap'] = 'avatud';

$GLOBALS["lang"]['optimized'] = 'optimeeritud';

$GLOBALS["lang"]['optionally '] = 'valikuliselt ';

$GLOBALS["lang"]['other'] = 'teised';

$GLOBALS["lang"]['package'] = 'pakett';

$GLOBALS["lang"]['partition'] = 'partitsiooni';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'menetluses';

$GLOBALS["lang"]['performance'] = 'sooritus';

$GLOBALS["lang"]['performed'] = 'sooritas';

$GLOBALS["lang"]['pie'] = 'piruka';

$GLOBALS["lang"]['planning'] = 'planeerimine';

$GLOBALS["lang"]['predictable'] = 'ennustatav';

$GLOBALS["lang"]['query'] = 'päringu';

$GLOBALS["lang"]['rear'] = 'taga';

$GLOBALS["lang"]['rear-left'] = 'tagavasak';

$GLOBALS["lang"]['rear-right'] = 'tagant paremal';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'vabasta';

$GLOBALS["lang"]['reserved'] = 'reserveeritud';

$GLOBALS["lang"]['right'] = 'õige';

$GLOBALS["lang"]['room'] = 'toas';

$GLOBALS["lang"]['row'] = 'rida';

$GLOBALS["lang"]['stand-alone'] = 'eraldiseisev';

$GLOBALS["lang"]['standard'] = 'standard';

$GLOBALS["lang"]['starts with'] = 'algab';

$GLOBALS["lang"]['storage'] = 'laohoone';

$GLOBALS["lang"]['timestamp'] = 'ajatempli';

$GLOBALS["lang"]['top'] = 'top';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'ülisalajane - sõjaväe/valitsuse klassifikatsioon. Avalikustamine põhjustaks erakordselt suurt ohtu riigi julgeolekule.

Saladus - sõjaväe / valitsuse klassifikatsioon. Avalikustamine kahjustaks tõsiselt riigi julgeolekut.

konfidentsiaalne - sõjaväe / valitsuse ja erasektori klassifikatsioon. Konfidentsiaalsed andmed hõlmavad ärisaladusi, intellektuaalseid andmeid, rakenduse programmeerimiskoodi ja muid andmeid, mis võivad volitamata avaldamise korral organisatsiooni tõsiselt mõjutada. Selle taseme andmed oleksid kättesaadavad ainult organisatsiooni töötajatele, kelle töö vajab juurdepääsu andmetele või on nendega otseselt seotud. Juurdepääs konfidentsiaalsetele andmetele nõuab tavaliselt iga juurdepääsu jaoks luba.

Erasektori klassifikatsioon (erasektori klassifikatsioon). Privaatsed andmed hõlmavad igasugust personaliga seotud teavet, sealhulgas personaliandmeid, terviseandmeid ja palgateavet, mida kasutatakse ainult organisatsioonis.

Tundlik - sõjaväe / valitsuse ja erasektori klassifikatsioon. Tundlikud andmed hõlmavad organisatsioonilist finantsteavet ja nõuavad täiendavaid meetmeid, et tagada selle CIA ja täpsus. Avalikustamine võib kahjustada riigi julgeolekut.

avalik - erasektori klassifikatsioon. Avalikud andmed on andmed, mida tavaliselt jagatakse avalikkusega ja mis ei avalda organisatsioonile negatiivset mõju. Avalikud andmed hõlmavad näiteks seda, kui palju inimesi organisatsioonis töötab ja milliseid tooteid organisatsioon toodab või müüb.

Klassifitseerimata - sõjaväe / valitsuse klassifikatsioon. Mis tahes teave, mida võib üldiselt levitada üldsusele, ohustamata riiklikke huve.

unassigned - vaikeväärtus kuni määramiseni.';

$GLOBALS["lang"]['traffic'] = 'liiklus';

$GLOBALS["lang"]['true'] = 'tõsi';

$GLOBALS["lang"]['unallocated'] = 'jaotamata';

$GLOBALS["lang"]['unauthorised'] = 'volitamata';

$GLOBALS["lang"]['unknown'] = 'tundmatu';

$GLOBALS["lang"]['unmanaged'] = 'juhtimata';

$GLOBALS["lang"]['unused'] = 'kasutamata';

$GLOBALS["lang"]['update'] = 'värskendada';

$GLOBALS["lang"]['valid'] = 'kehtiv';

$GLOBALS["lang"]['virtualisation'] = 'virtualiseerimine';

$GLOBALS["lang"]['warning'] = 'hoiatus';

$GLOBALS["lang"]['web'] = 'veebi';

$GLOBALS["lang"]['yes'] = 'jah';

$GLOBALS["lang"]['AF'] = 'AF';

$GLOBALS["lang"]['AX'] = 'AX';

$GLOBALS["lang"]['AL'] = 'AL';

$GLOBALS["lang"]['DZ'] = 'DZ';

$GLOBALS["lang"]['AS'] = 'AS';

$GLOBALS["lang"]['AD'] = 'AD';

$GLOBALS["lang"]['AO'] = 'AO';

$GLOBALS["lang"]['AI'] = 'AI';

$GLOBALS["lang"]['AQ'] = 'AQ';

$GLOBALS["lang"]['AG'] = 'AG';

$GLOBALS["lang"]['AR'] = 'AR';

$GLOBALS["lang"]['AM'] = 'AM';

$GLOBALS["lang"]['AW'] = 'AW';

$GLOBALS["lang"]['AU'] = 'AU';

$GLOBALS["lang"]['AT'] = 'AT';

$GLOBALS["lang"]['AZ'] = 'AZ';

$GLOBALS["lang"]['BS'] = 'BS';

$GLOBALS["lang"]['BH'] = 'BH';

$GLOBALS["lang"]['BD'] = 'BD';

$GLOBALS["lang"]['BB'] = 'BB';

$GLOBALS["lang"]['BY'] = 'BY';

$GLOBALS["lang"]['BE'] = 'BE';

$GLOBALS["lang"]['BZ'] = 'BZ';

$GLOBALS["lang"]['BJ'] = 'BJ';

$GLOBALS["lang"]['BM'] = 'BM';

$GLOBALS["lang"]['BT'] = 'BT';

$GLOBALS["lang"]['BO'] = 'BO';

$GLOBALS["lang"]['BA'] = 'BA';

$GLOBALS["lang"]['BW'] = 'BW';

$GLOBALS["lang"]['BV'] = 'BV';

$GLOBALS["lang"]['BR'] = 'BR';

$GLOBALS["lang"]['IO'] = 'IO';

$GLOBALS["lang"]['VG'] = 'VG';

$GLOBALS["lang"]['BN'] = 'BN';

$GLOBALS["lang"]['BG'] = 'BG';

$GLOBALS["lang"]['BF'] = 'BF';

$GLOBALS["lang"]['BI'] = 'BI';

$GLOBALS["lang"]['KH'] = 'KH';

$GLOBALS["lang"]['CM'] = 'CM';

$GLOBALS["lang"]['CA'] = 'CA';

$GLOBALS["lang"]['CV'] = 'CV';

$GLOBALS["lang"]['KY'] = 'KY';

$GLOBALS["lang"]['CF'] = 'CF';

$GLOBALS["lang"]['TD'] = 'TD';

$GLOBALS["lang"]['CL'] = 'CL';

$GLOBALS["lang"]['CN'] = 'CN';

$GLOBALS["lang"]['CX'] = 'CX';

$GLOBALS["lang"]['CC'] = 'CC';

$GLOBALS["lang"]['CO'] = 'CO';

$GLOBALS["lang"]['KM'] = 'KM';

$GLOBALS["lang"]['CD'] = 'CD';

$GLOBALS["lang"]['CG'] = 'CG';

$GLOBALS["lang"]['CK'] = 'CK';

$GLOBALS["lang"]['CR'] = 'CR';

$GLOBALS["lang"]['CI'] = 'CI';

$GLOBALS["lang"]['HR'] = 'HR';

$GLOBALS["lang"]['CU'] = 'CU';

$GLOBALS["lang"]['CY'] = 'CY';

$GLOBALS["lang"]['CZ'] = 'CZ';

$GLOBALS["lang"]['DK'] = 'DK';

$GLOBALS["lang"]['DJ'] = 'DJ';

$GLOBALS["lang"]['DM'] = 'DM';

$GLOBALS["lang"]['DO'] = 'DO';

$GLOBALS["lang"]['EC'] = 'EC';

$GLOBALS["lang"]['EG'] = 'EG';

$GLOBALS["lang"]['SV'] = 'SV';

$GLOBALS["lang"]['GQ'] = 'GQ';

$GLOBALS["lang"]['ER'] = 'ER';

$GLOBALS["lang"]['EE'] = 'EE';

$GLOBALS["lang"]['ET'] = 'ET';

$GLOBALS["lang"]['FO'] = 'FO';

$GLOBALS["lang"]['FK'] = 'FK';

$GLOBALS["lang"]['FJ'] = 'FJ';

$GLOBALS["lang"]['FI'] = 'FI';

$GLOBALS["lang"]['FR'] = 'FR';

$GLOBALS["lang"]['GF'] = 'GF';

$GLOBALS["lang"]['PF'] = 'PF';

$GLOBALS["lang"]['TF'] = 'TF';

$GLOBALS["lang"]['GA'] = 'GA';

$GLOBALS["lang"]['GM'] = 'GM';

$GLOBALS["lang"]['GE'] = 'GE';

$GLOBALS["lang"]['DE'] = 'DE';

$GLOBALS["lang"]['GH'] = 'GH';

$GLOBALS["lang"]['GI'] = 'GI';

$GLOBALS["lang"]['GR'] = 'GR';

$GLOBALS["lang"]['GL'] = 'GL';

$GLOBALS["lang"]['GD'] = 'GD';

$GLOBALS["lang"]['GP'] = 'GP';

$GLOBALS["lang"]['GU'] = 'GU';

$GLOBALS["lang"]['GT'] = 'GT';

$GLOBALS["lang"]['GG'] = 'GG';

$GLOBALS["lang"]['GN'] = 'GN';

$GLOBALS["lang"]['GW'] = 'GW';

$GLOBALS["lang"]['GY'] = 'GY';

$GLOBALS["lang"]['HT'] = 'HT';

$GLOBALS["lang"]['HM'] = 'HM';

$GLOBALS["lang"]['VA'] = 'VA';

$GLOBALS["lang"]['HN'] = 'HN';

$GLOBALS["lang"]['HK'] = 'HK';

$GLOBALS["lang"]['HU'] = 'HU';

$GLOBALS["lang"]['IS'] = 'IS';

$GLOBALS["lang"]['IN'] = 'IN';

$GLOBALS["lang"]['IR'] = 'IR';

$GLOBALS["lang"]['IQ'] = 'IQ';

$GLOBALS["lang"]['IE'] = 'IE';

$GLOBALS["lang"]['IM'] = 'IM';

$GLOBALS["lang"]['IL'] = 'IL';

$GLOBALS["lang"]['IT'] = 'IT';

$GLOBALS["lang"]['JM'] = 'JM';

$GLOBALS["lang"]['JP'] = 'JP';

$GLOBALS["lang"]['JE'] = 'JE';

$GLOBALS["lang"]['JO'] = 'JO';

$GLOBALS["lang"]['KZ'] = 'KZ';

$GLOBALS["lang"]['KE'] = 'KE';

$GLOBALS["lang"]['KI'] = 'KI';

$GLOBALS["lang"]['KP'] = 'KP';

$GLOBALS["lang"]['KR'] = 'KR';

$GLOBALS["lang"]['KW'] = 'KW';

$GLOBALS["lang"]['KG'] = 'KG';

$GLOBALS["lang"]['LA'] = 'LA';

$GLOBALS["lang"]['LV'] = 'LV';

$GLOBALS["lang"]['LB'] = 'LB';

$GLOBALS["lang"]['LS'] = 'LS';

$GLOBALS["lang"]['LR'] = 'LR';

$GLOBALS["lang"]['LY'] = 'LY';

$GLOBALS["lang"]['LI'] = 'LI';

$GLOBALS["lang"]['LT'] = 'LT';

$GLOBALS["lang"]['LU'] = 'LU';

$GLOBALS["lang"]['MO'] = 'MO';

$GLOBALS["lang"]['MK'] = 'MK';

$GLOBALS["lang"]['MG'] = 'MG';

$GLOBALS["lang"]['MW'] = 'MW';

$GLOBALS["lang"]['MY'] = 'MY';

$GLOBALS["lang"]['MV'] = 'MV';

$GLOBALS["lang"]['ML'] = 'ML';

$GLOBALS["lang"]['MT'] = 'MT';

$GLOBALS["lang"]['MH'] = 'MH';

$GLOBALS["lang"]['MQ'] = 'MQ';

$GLOBALS["lang"]['MR'] = 'MR';

$GLOBALS["lang"]['MU'] = 'MU';

$GLOBALS["lang"]['YT'] = 'YT';

$GLOBALS["lang"]['MX'] = 'MX';

$GLOBALS["lang"]['FM'] = 'FM';

$GLOBALS["lang"]['MD'] = 'MD';

$GLOBALS["lang"]['MC'] = 'MC';

$GLOBALS["lang"]['MN'] = 'MN';

$GLOBALS["lang"]['ME'] = 'ME';

$GLOBALS["lang"]['MS'] = 'MS';

$GLOBALS["lang"]['MA'] = 'MA';

$GLOBALS["lang"]['MZ'] = 'MZ';

$GLOBALS["lang"]['MM'] = 'MM';

$GLOBALS["lang"]['NA'] = 'NA';

$GLOBALS["lang"]['NR'] = 'NR';

$GLOBALS["lang"]['NP'] = 'NP';

$GLOBALS["lang"]['AN'] = 'AN';

$GLOBALS["lang"]['NL'] = 'NL';

$GLOBALS["lang"]['NC'] = 'NC';

$GLOBALS["lang"]['NZ'] = 'NZ';

$GLOBALS["lang"]['NI'] = 'NI';

$GLOBALS["lang"]['NE'] = 'NE';

$GLOBALS["lang"]['NG'] = 'NG';

$GLOBALS["lang"]['NU'] = 'NU';

$GLOBALS["lang"]['NF'] = 'NF';

$GLOBALS["lang"]['MP'] = 'MP';

$GLOBALS["lang"]['NO'] = 'NO';

$GLOBALS["lang"]['OM'] = 'OM';

$GLOBALS["lang"]['PK'] = 'PK';

$GLOBALS["lang"]['PW'] = 'PW';

$GLOBALS["lang"]['PS'] = 'PS';

$GLOBALS["lang"]['PA'] = 'PA';

$GLOBALS["lang"]['PG'] = 'PG';

$GLOBALS["lang"]['PY'] = 'PY';

$GLOBALS["lang"]['PE'] = 'PE';

$GLOBALS["lang"]['PH'] = 'PH';

$GLOBALS["lang"]['PN'] = 'PN';

$GLOBALS["lang"]['PL'] = 'PL';

$GLOBALS["lang"]['PT'] = 'PT';

$GLOBALS["lang"]['PR'] = 'PR';

$GLOBALS["lang"]['QA'] = 'QA';

$GLOBALS["lang"]['RE'] = 'RE';

$GLOBALS["lang"]['RO'] = 'RO';

$GLOBALS["lang"]['RU'] = 'RU';

$GLOBALS["lang"]['RW'] = 'RW';

$GLOBALS["lang"]['BL'] = 'BL';

$GLOBALS["lang"]['SH'] = 'SH';

$GLOBALS["lang"]['KN'] = 'KN';

$GLOBALS["lang"]['LC'] = 'LC';

$GLOBALS["lang"]['MF'] = 'MF';

$GLOBALS["lang"]['PM'] = 'PM';

$GLOBALS["lang"]['VC'] = 'VC';

$GLOBALS["lang"]['WS'] = 'WS';

$GLOBALS["lang"]['SM'] = 'SM';

$GLOBALS["lang"]['ST'] = 'ST';

$GLOBALS["lang"]['SA'] = 'SA';

$GLOBALS["lang"]['SN'] = 'SN';

$GLOBALS["lang"]['RS'] = 'RS';

$GLOBALS["lang"]['SC'] = 'SC';

$GLOBALS["lang"]['SL'] = 'SL';

$GLOBALS["lang"]['SG'] = 'SG';

$GLOBALS["lang"]['SK'] = 'SK';

$GLOBALS["lang"]['SI'] = 'SI';

$GLOBALS["lang"]['SB'] = 'SB';

$GLOBALS["lang"]['SO'] = 'SO';

$GLOBALS["lang"]['ZA'] = 'ZA';

$GLOBALS["lang"]['GS'] = 'GS';

$GLOBALS["lang"]['ES'] = 'ES';

$GLOBALS["lang"]['LK'] = 'LK';

$GLOBALS["lang"]['SD'] = 'SD';

$GLOBALS["lang"]['SR'] = 'SR';

$GLOBALS["lang"]['SJ'] = 'SJ';

$GLOBALS["lang"]['SZ'] = 'SZ';

$GLOBALS["lang"]['SE'] = 'SE';

$GLOBALS["lang"]['CH'] = 'CH';

$GLOBALS["lang"]['SY'] = 'SY';

$GLOBALS["lang"]['TW'] = 'TW';

$GLOBALS["lang"]['TJ'] = 'TJ';

$GLOBALS["lang"]['TZ'] = 'TZ';

$GLOBALS["lang"]['TH'] = 'TH';

$GLOBALS["lang"]['TL'] = 'TL';

$GLOBALS["lang"]['TG'] = 'TG';

$GLOBALS["lang"]['TK'] = 'TK';

$GLOBALS["lang"]['TO'] = 'TO';

$GLOBALS["lang"]['TT'] = 'TT';

$GLOBALS["lang"]['TN'] = 'TN';

$GLOBALS["lang"]['TR'] = 'TR';

$GLOBALS["lang"]['TM'] = 'TM';

$GLOBALS["lang"]['TC'] = 'TC';

$GLOBALS["lang"]['TV'] = 'TV';

$GLOBALS["lang"]['UG'] = 'UG';

$GLOBALS["lang"]['UA'] = 'UA';

$GLOBALS["lang"]['AE'] = 'AE';

$GLOBALS["lang"]['GB'] = 'GB';

$GLOBALS["lang"]['US'] = 'US';

$GLOBALS["lang"]['UM'] = 'UM';

$GLOBALS["lang"]['VI'] = 'VI';

$GLOBALS["lang"]['UY'] = 'UY';

$GLOBALS["lang"]['UZ'] = 'UZ';

$GLOBALS["lang"]['VU'] = 'VU';

$GLOBALS["lang"]['VE'] = 'VE';

$GLOBALS["lang"]['VN'] = 'VN';

$GLOBALS["lang"]['WF'] = 'WF';

$GLOBALS["lang"]['EH'] = 'EH';

$GLOBALS["lang"]['YE'] = 'YE';

$GLOBALS["lang"]['ZM'] = 'ZM';

$GLOBALS["lang"]['ZW'] = 'ZW';

