<?php
$GLOBALS["lang"][' Default, currently '] = ' Vaikimisi ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Kui midagi ei tööta ootuspäraselt, on teie esimene asi kontrollida logisid.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' Nüüd toetatakse seda keelefailiga. Kasutaja muutmiseks selle keele kasutamiseks klõpsake ';

$GLOBALS["lang"][' seconds'] = ' sekundit';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', kuid ei pea meeles pidama eraldi logo volituste kogumit.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', millest me tarnime vaikekomplektina üle kolmekümne. Professionaalsed kasutajad ei saa neid muuta, kuid ettevõtte kasutajal on täielik kohandamisvõime - sealhulgas luua oma.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = 'sina <i>peab</i> Kasutage oma Open-AudIT serveris https-i, et kasutada Entra autentimiseks. Palun seadista Apache kasutamine <strong>https</strong> enne Entra seadistamist autentimiseks.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Selle sisselülitamiseks redigeeri ';

$GLOBALS["lang"]['10 Minutes'] = '10 minutit';

$GLOBALS["lang"]['15 Minutes'] = '15 minutit';

$GLOBALS["lang"]['30 Minutes'] = '30 minutit';

$GLOBALS["lang"]['5 Minutes'] = '5 minutit';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 juhtimist, mis on rühmitatud organisatsiooni, inimeste, füüsiliste ja tehnoloogiliste kategooriatesse';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>MÄRKUS</strong> Sellele URL-ile pääsete ligi kohalikust Open-AudIT serverist. Allalaaditud skripti ei saa esitada, kui see töötab mis tahes muus masinas. Kui teil on vaja auditeerida teisi masinaid, laadige skript alla mis tahes kaugmasinast, mitte kasutades Open-AudIT serveri brauserit.';

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

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Windowsi töölauasüsteemidel on võrgupiirangud, mis võivad mõjutada Open-AudIT jõudlust. TCP/IP pinu piirab samaaegsete mittetäielike väljaminevate TCP-ühenduse katsete arvu. Pärast limiidi saavutamist pannakse järgnevad ühendusekatsed järjekorda ja lahendatakse fikseeritud kiirusega (10 sekundis). Kui järjekorras on liiga palju, võidakse need maha jätta. Ja lõpuks, Apache taaskäivitatakse operatsioonisüsteemis. Seetõttu ei toetata Open-AudIT installimist Windowsi töölaua operatsioonisüsteemi.<br/><br/>Open-AudIT koodiga pole midagi valesti, samuti ei saa me midagi teha selle probleemi lahendamiseks Windowsi kliendiautomaatides.</p>';

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

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>MÄRKUS</strong> Sellele URL-ile pääsete ligi kohalikust Open-AudIT serverist. Allalaaditud skripti ei saa esitada, kui see töötab mis tahes muus masinas. Kui teil on vaja auditeerida teisi masinaid, laadige skript alla mis tahes kaugmasinast, mitte kasutades Open-AudIT serveri brauserit.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'CVE element, mis ei sisalda filtrit mõjutatud elemendi(te) määramiseks.';

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

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'LAN-i saab ühendada WAN-iga ruuteri abil.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Metropolitan Area Network (MAN) on suur arvutivõrk, mis ulatub tavaliselt linna või suure ülikoolilinnakuni.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Seemnete avastamine kasutab esialgset IP-d, et saada kätte mis tahes muu seadme IP-d, mida ta teab, lisab need IP-d loendisse ja skaneerib need - küsides uuesti IP-sid, mida need täiendavad seadmed teavad. Loputa ja korda. See on piisavalt intelligentne, et teada saada, kas see on juba skaneerinud teatud IP-d ja kõrvaldab juba skaneeritud (või isegi skaneeritavast loendist).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Subneti avastus skaneerib pakutavad IP-d.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Agendile antud URL, mis laadib seejärel faili alla ja salvestab selle kohalikule kettale.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Allalaaditava faili URL.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Põhivõrk on arvutivõrgu infrastruktuuri osa, mis pakub teed teabe vahetamiseks erinevate kohtvõrkude või alamvõrkude vahel. Selgroog võib ühendada erinevaid võrgustikke sama hoone sees, erinevate hoonete vahel või laial alal.<br/><br/>Näiteks võib suurettevõte rakendada selgroo võrku, et ühendada kogu maailmas asuvaid osakondi. Osakondade võrke ühendavad seadmed moodustavad võrgu selgroo. Võrgu selgroo projekteerimisel on võrgu jõudlus ja võrgu ülekoormus kriitilised tegurid, mida arvesse võtta. Tavaliselt on selgroo võrgu võimsus suurem kui sellega ühendatud üksikute võrkude võimsus.<br/><br/>Teine näide selgroo võrgust on Interneti selgroog, mis on laivõrgu (WAN) ja põhiruuterite kogum, mis seob kokku kõik Internetiga ühendatud võrgud.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Arvutatud väli, mis näitab, mitu korda seda tarkvara leiti valitud Orgi (ja selle järeltulijate) arvutitest.';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Campus ala võrk (CAN) koosneb LAN-ide ühendamisest piiratud geograafilises piirkonnas. Võrguseadmed (lülitid, ruuterid) ja edastusmeedia (optiline kiud, vasktaim, Cat5 kaabeldus jne) kuuluvad peaaegu täielikult ülikoolilinnaku rentnikule / omanikule (ettevõte, ülikool, valitsus jne).<br/><br/>Näiteks ülikooli ülikoolilinnaku võrgustik ühendab tõenäoliselt mitmesuguseid ülikoolilinnaku hooneid, et ühendada akadeemilisi kolledžeid või osakondi, raamatukogu ja üliõpilaste elukohti.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Suletud port on ligipääsetav (see võtab vastu ja vastab Nmapi sondipakettidele), kuid sellel ei ole rakendust, mida kuulata. Need võivad aidata näidata, et host on üleval IP-aadressil (host discovery või ping scanning) ja osana operatsioonisüsteemi tuvastusest. Kuna suletud sadamad on ligipääsetavad, võib see hiljem skaneerida, kui mõni avaneb. Administraatorid võivad kaaluda selliste sadamate blokeerimist tulemüüriga. Seejärel ilmuvad need filtreeritud olekus, mida arutatakse järgmisena.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Kollektsionäär on kas kollektsionääri või stand-alone režiimis.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Komadega eraldatud kohaldatavate CVEde loend.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Komadega eraldatud väärtuste loend, millest ühe saab valida.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Käsk käivitada. Kui agent on Windowsi põhine, käivitatakse see käsk Powerhelli agendi sees.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Armatuurlaud koosneb kolmest veerust ja kahest reast, mida me nimetame <i>vidinad</i>. Vidin on väga sarnane kokkuvõttega, ainult me võtame kokkuvõtte kontseptsiooni natuke kaugemale. Vidinad luuakse lihtsal viisil, kasutades paari rippkasti - või saate valida oma SQL-i täieliku kohandatavuse jaoks.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Filtreeritud porti peetakse avatuks (ja see käivitab seadme tuvastamise).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Globaalne alavõrk (GAN) on võrk, mida kasutatakse mobiilside toetamiseks suvalise arvu traadita kohtvõrkude, satelliitide levialade jne kaudu. Mobiilside puhul on peamiseks väljakutseks kasutajasuhtluse üleandmine ühest kohalikust levialast teise. IEEE projektis 802 hõlmab see maapealseid traadita kohtvõrke.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Koduvõrk (HAN) on elamute kohtvõrk, mida kasutatakse sidepidamiseks digitaalsete seadmete vahel, mida tavaliselt kasutatakse kodus, tavaliselt väike arv personaalarvuteid ja tarvikuid, näiteks printerid ja mobiilsed arvutid. Oluline funktsioon on internetiühenduse, sageli lairibateenuse jagamine kaabeltelevisiooni või digitaalse abonendiliini (DSL) pakkuja kaudu.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Skaneerimiseks kohandatud TCP-portide loend (22 on SSH, 135 on WMI, 62078 on iPhone sünkroonimine).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Skaneeritavate kohandatud UDP-portide loend (161 on SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Kohtvõrk (LAN) on võrk, mis ühendab arvuteid ja seadmeid piiratud geograafilises piirkonnas, nagu kodu, kool, büroohoone või lähedalasuv hoonete rühm. Iga arvuti või seade võrgus on sõlm. Traadiga kohtvõrgud põhinevad tõenäoliselt Etherneti tehnoloogial. Uuemad standardid nagu ITU-T G.hn pakuvad ka võimalust luua traadiga kohtvõrk, kasutades olemasolevaid juhtmeid, nagu koaksiaalkaablid, telefoniliinid ja elektriliinid.<br/><br/>Erinevalt laivõrgust (WAN) on kohtvõrgu iseloomulikud tunnused suuremad andmeedastuskiirused, piiratud geograafiline ulatus ja püsiliinide puudumine ühenduvuse pakkumisel. Praegused Etherneti või muud IEEE 802.3LAN-tehnoloogiad töötavad andmeedastuskiirusega kuni 100 Gbit/s, standardiseeris IEEE 2010. aastal. Praegu 400 Gbit/s Etherneti arendatakse.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Asukoht on füüsiline aadress, millel võivad olla sellega seotud seadmed. Saate määrata selle koordinaadid ja kui on määratud seadmed, kuvatakse asukoht kaardil, kui teil on Open-AudIT Enterprise litsents.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Asukoha nimi aitab teil neid seadmeid tulevikus leida.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Väiksem arv tähendab, et seda kohaldatakse enne teisi reegleid.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Väiksem arv tähendab, et seda kohaldatakse enne teisi reegleid. Vaikekaal on 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Uus kasutaja logis sisse Open-AudIT-i ning selle autendis ja autoriseeris LDAP sever. See kasutaja loodi seejärel Open-AudIT-is ja logiti sisse. Edu.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Pakett on installeeritud softare tükk. Pakendil on tüüp - viirusetõrje, heakskiidetud, varukoopia, keelatud, pilv, tulemüür, ignoreeritud, litsents või muu.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Parool (salvestatud räsina), mis võimaldab sisselogimist rakenduse autentimise kasutamisel.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Isikul on konto Open-AudIT rakenduses. Nende kasutajakontol on nimekiri seotud rollidest ja organisatsioonidest. Kasutaja rollid määravad, mida ta saab teha. Kasutaja otsustab, milliste objektide suhtes ta saab tegutseda.<br/><br/>Kui kasutaja taotleb toimingu sooritamist (luua, lugeda, värskendada, kustutada) kogumisüksusel, konsulteeritakse rollidega, et näha, kas neil on lubatud seda toimingut teha, siis konsulteeritakse orgidega, et teha kindlaks, kas kogumisühik kuulub orgile, mille kohta kasutajal on õigus tegutseda.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Personaalvõrk (PAN) on arvutivõrk, mida kasutatakse suhtlemiseks ühe inimese lähedal asuvate arvutite ja erinevate infotehnoloogiliste seadmete vahel. Mõned näited PAN-is kasutatavatest seadmetest on personaalarvutid, printerid, faksiaparaadid, telefonid, pihuarvutid, skannerid ja isegi videomängukonsoolid. PAN võib sisaldada traadiga ja traadita seadmeid. PAN-i ulatus ulatub tavaliselt 10 meetrini. Traadiga PAN on tavaliselt ehitatud USB- ja FireWire-ühendustega, samas kui tehnoloogiad nagu Bluetooth ja infrapunaside moodustavad tavaliselt traadita PAN-i.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Päring on sisuliselt SQL-lause. See avaldus käivitatakse andmebaasi vastu limiidi automaatse lisamisega, filtreeritakse, et see kehtiks ainult neile soovitud elementidele ja ainult nendele elementidele, mida kasutajal on õigus vaadata. Päringut saab luua menüü abil -> Halda -> Päringud -> Päringute loomine. Päringud sisaldavad org_id ja on seega piiratud asjakohaste kasutajatega. Kasutajal peab olema org_admin või reporteri roll (id) päringu loomiseks, uuendamiseks või kustutamiseks. Kõik kasutajad saavad päringu täita. Päringul on nimeatribuut, mida kasutatakse menüüelemendi puhul, samuti menüükategooria atribuut. See ütleb avatud auditi GUI-le, milline alammenüü päringu sisestamiseks on. Samuti on olemas menüü, mis peaks olema <i>y</i> päringu lubamiseks kasutajaliideses (GUI)<i>n</i> Et vältida päringu ilmumist üldse. Päring käivitatakse, kui seda kutsutakse <code>id</code>olenemata sellest, milline on menüü väärtus.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Rack on seadmete kogum, millele on määratud positsioon ja kõrgus raami sees. Seadmel võib valikuliselt olla sellega seotud pilt. Riiul asetatakse ritta. Oleme loonud väga granulaarse süsteemi riiulite positsioneerimiseks, mis on järgmine. Tipptasemel (nagu alati) on organisatsioon (Org). Orgil võib olla mitu asukohta (nagu see on alati olnud). Racksi funktsiooni lisamisega võib asukoht nüüd sisaldada ühte või mitut ehitist. Hoone võib sisaldada ühte või mitut korrust. Põrand võib sisaldada ühte või mitut tuba. Ruum võib sisaldada ühte või mitut rida. See kõlab nagu palju tööd, kuid vaikimisi luuakse teile. Loo uus asukoht ja alamkomponendid luuakse automaatselt sinu jaoks. Kui teil on vaja rohkem esemeid (hooned, ruumid jne), saate neid lisada nii, nagu soovite. Rack võib olla ka osa <i>kapsel</i> riiulite. Kauna atribuut töötab sildina, mitte range hierarhilise pärandi mudelina vastavalt hoonetele, korrustele jne.<br/><br/>Racks on funktsioon saadaval Open-AudIT Enterprise litsentseeritud klientidele.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Marsruutdomeen või aadressiruum, kus IP-aadressid ja MAC-aadressid on unikaalsed.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Linuxi proovi cron- fail on allpool. See tuleks paigutada';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Turvavöönd on võrgudomeeni kuuluv haldusdomeen või poliitikadomeen.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Seemne avastamine on teist tüüpi avastus, kus pakute ühe IP-d <i>seemne</i> seadeldis. See seade on auditeeritud ja kõik tema teadaolevad IP-d lisatakse seejärel auditeeritavate IP-de loendisse. Seejärel need seadmed auditeeritakse ja kõik neile teadaolevad IP-d lisatakse ka auditeeritavate IP-de nimekirja. See protsess jätkub kasutaja poolt seadistatud parameetrite piires.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Logikirje lühikirjeldus.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Salvestusala võrk (SAN) on spetsiaalne võrk, mis pakub juurdepääsu konsolideeritud plokitasandi andmesalvestusele. SAN-e kasutatakse peamiselt salvestusseadmete, näiteks kettamassiivide, lindi teekide ja optiliste jukekastide serveritele kättesaadavaks tegemiseks, nii et seadmed tunduvad operatsioonisüsteemile lokaalselt ühendatud seadmetena. SANil on tavaliselt oma salvestusseadmete võrk, millele teised seadmed tavaliselt kohtvõrgu kaudu ei pääse. SAN-ide maksumus ja keerukus langesid 2000. aastate alguses tasemele, mis võimaldas laiemat kasutuselevõttu nii ettevõtete kui ka väikeste ja keskmise suurusega ärikeskkondades.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Nöör, mis sobib <code>software.name</code> atribuut. Ühe või mitme tähemärgi sobitamiseks saate kasutada standardset SQL metakaarti protsentides (%).';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Struktureeritud süsteem tundliku teabe haldamiseks';

$GLOBALS["lang"]['A timestamp.'] = 'Ajatempel.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Kasutajal on nii esmane Org kui ka Orgide nimekiri, millele nad pääsevad juurde. Kasutaja ühendab selle määratud rollide loendiga, mis määratleb, milliseid toiminguid nad saavad teha Orgidele määratud üksustega. Kasutajate kombinatsioon <i>orgid</i> ja <i>rollid</i> Määrake kindlaks, mida nad saavad ja mida nad ei saa teha avatud auditooriumis.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Kasutajal on nimekiri seotud organisatsioonidest (orgs). Iga org, mis kasutajal on, võimaldab neil tegutseda selle orgi elementidega vastavalt nende rolli(dele).<br/><br/>Kõigil orgidel peale vaikeorgi on vanem. Mõtle Org Chartile. Kui kasutajal on Orgi luba, on neil ka luba selle Orgi järeltulijatele.<br/><br/>Kasutajad on ka lubatud luba lapse org näha esemeid vanemate orgid teatud kogud. Need on: armatuurlauad, Discover_scan_options, väljad, failid, grupid, päringud, aruanded, rollid, reeglid, skriptid, kokkuvõtted, vidinad.<br/><br/>Ärge unustage, et teil on granuleeritud kontroll selle üle, mida kasutajad näevad ja teevad ettevõttes.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Kasutajal on nimekiri seotud organisatsioonidest (orgs). Iga org, mis kasutajal on, võimaldab neil tegutseda selle orgi elementidega vastavalt nende rolli(dele).<br/><br/>Kõigil orgidel peale vaikeorgi on vanem. Mõtle Org Chartile. Kui kasutajal on Orgi luba, on neil ka luba selle Orgi järeltulijatele.<br/><br/>Samuti lubame kasutajal, kellel on lapse orgi luba, näha teatud kogude vanemate orgide esemeid. Need on: armatuurlauad, Discover_scan_options, väljad, failid, grupid, päringud, rollid, reeglid, skriptid, kokkuvõtted, vidinad.<br/><br/>Ärge unustage, et teil on granuleeritud kontroll selle üle, mida kasutajad näevad ja kasutavad.';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Virtuaalne privaatvõrk (VPN) on ülekattevõrk, milles mõned sõlmede vahelised lingid edastatakse avatud ühenduste või virtuaalsete ahelate kaudu mõnes suuremas võrgus (nt Internet) füüsiliste juhtmete asemel. Virtuaalvõrgu andmesidekihi protokollid olevat läbi suurema võrgu tunnelatud, kui see nii on. Üks levinud rakendus on turvaline suhtlus avaliku interneti kaudu, kuid VPN-il ei pea olema selgesõnalisi turvaelemente, näiteks autentimist või sisu krüpteerimist. Näiteks saab VPN-e kasutada erinevate kasutajaskondade liikluse eraldamiseks tugevate turvaelementidega alusvõrgust.<br/><br/>VPN-il võib olla parim jõudlus või VPN-i kliendi ja VPN-teenuse pakkuja vahel määratletud teenusetaseme kokkulepe (SLA). Üldiselt on VPN-il topoloogia keerulisem kui punkt-punkti.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Kättesaadavust mõjutav haavatavus võib lubada ründajatel häirida teenuseid, krahh süsteeme või põhjustada teenusetõkestust (DoS) (puudub, madal, kõrge).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Konfidentsiaalsust mõjutav haavatavus võib võimaldada ründajatel lugeda tundlikke andmeid, näiteks isikuandmeid, volitusi või ärisaladuse alla kuuluvaid andmeid (puudub, madal, kõrge).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Terviklikkust mõjutav haavatavus võib lubada ründajatel andmeid muuta, sisestada pahatahtlikku koodi või muuta süsteemi konfiguratsioone (puudub, madal, kõrge).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Haavatavust saab redigeerida ja esitada täpsemad paketinimed, kui rikastusandmed on ebapiisavad või genereeritud SQL ei ole päris õige.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Open-AudIT haavatavuse elementi võib pidada sisuliselt päringuks teie andmebaasi vastu, et määrata kindlaks teie potentsiaalne kokkupuude antud CVE aruandega. Haavatavus koosneb CVE aruandest koos FirstWave\'i rikastamisandmetega. Need kaks elementi kombineeritakse, et luua sobiv päring, mis laaditakse automaatselt alla FirstWave\'ist.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Lairibavõrk (inglise keeles wide area network, WAN) on arvutivõrk, mis hõlmab suurt geograafilist ala, näiteks linna, riiki või isegi mandritevahelisi vahemaid. WAN kasutab sidekanalit, mis ühendab mitut tüüpi meediaid, nagu telefoniliinid, kaablid ja õhulained. WAN kasutab sageli edastusvõimalusi, mida pakuvad tavalised vedajad, näiteks telefoniettevõtted. WAN-tehnoloogiad toimivad üldjuhul OSI võrdlusmudeli kolmel alumisel kihil: füüsilisel kihil, andmesidekihil ja võrgukihil.';

$GLOBALS["lang"]['AD Group'] = 'AD grupp';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN jne';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'Kõik IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API dokumentatsioon';

$GLOBALS["lang"]['API Key required.'] = 'Nõutav on API võti.';

$GLOBALS["lang"]['API Result'] = 'API tulemus';

$GLOBALS["lang"]['About'] = 'Umbes';

$GLOBALS["lang"]['Above are the only required items.'] = 'Ülaltoodud on ainsad vajalikud esemed.';

$GLOBALS["lang"]['Accept'] = 'Nõustuge';

$GLOBALS["lang"]['Access Model'] = 'Juurdepääsumudel';

$GLOBALS["lang"]['access_point'] = 'Juurdepääsupunkt';

$GLOBALS["lang"]['Access Point'] = 'Juurdepääsupunkt';

$GLOBALS["lang"]['access_token'] = 'Access Token';

$GLOBALS["lang"]['Access Token'] = 'Access Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Juurdepääs admin$ jagamisele ja RPC-le kasutab SMB2 protokolli.';

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

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Active Directory ja OpenLDAP';

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

$GLOBALS["lang"]['Add Your Credentials'] = 'Lisa oma volitused';

$GLOBALS["lang"]['Add image'] = 'Pildi lisamine';

$GLOBALS["lang"]['additional_items'] = 'Täiendavad kirjed';

$GLOBALS["lang"]['Additional Items'] = 'Täiendavad kirjed';

$GLOBALS["lang"]['address'] = 'Aadress';

$GLOBALS["lang"]['Address'] = 'Aadress';

$GLOBALS["lang"]['Address any nonconformities'] = 'Kõigi mittevastavuste käsitlemine';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Auditi tulemuste käsitlemine ja parandusmeetmed';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'administraatori staatus';

$GLOBALS["lang"]['Admin Status'] = 'administraatori staatus';

$GLOBALS["lang"]['advanced'] = 'Advanced';

$GLOBALS["lang"]['Advanced'] = 'Advanced';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistani';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Pärast integratsiooni loomist märkate integratsiooni üksikasju vaadates välja nimega Silumine. Vaikimisi ei ole see lubatud. Selle muutmine jah-ks annab integratsiooni teostamisel lisalogimise. Silumine ei tohiks jääda jaatavaks. Seda seetõttu, et silumisväljund sisaldab kõike, mis on saadud välistest süsteemidest - sealhulgas selliseid elemente nagu WMI ja SNMP volitused. Silumisvõimalust tuleks kasutada ainult siis, kui probleem on tekkinud ja soovite sügavamale kaevata, et näha, kas saate kindlaks teha, miks.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Pärast ülalkirjeldatu täitmist eemaldage agent.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agent? Discovery? Volikirjad?';

$GLOBALS["lang"]['agents'] = 'Agendid';

$GLOBALS["lang"]['Agents'] = 'Agendid';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Saab luua agentide kirjeid, mis määravad kestuse, võrgu ja operatsioonisüsteemi. Kui kõik testid sobivad, palub server agendil toiminguid teha. Kui ühtegi katset ei ole seatud, jäetakse see välja <i>peavad</i> nõue.<br/><br/>Saate luua mitu agenti ja lasta serveril kontrollida ühte või kõiki agendikirjeid. Võite (näiteks) määrata ühe esindaja, kes ütleb: <i>Kui agent IP on selles alamvõrgus, määra seadme asukoha_ ID</i>.<br/><br/>Teine näide ei pruugi üldse auditit käivitada, pigem laadige alla skript ja käivitage see. Kui agent on installitud administraatori õigustega, saate nüüd oma masinaid ilma avamata hallata <strong>ühtegi</strong> sadamatest maailma.<p>Täiustatud agentide lubamine tähendab, et agendile saab anda korralduse alla laadida mis tahes fail ja täita mis tahes käsk. <strong>HOIATUS</strong>: Sellega kaasnevad turvariskid. See konfiguratsioon <strong>ainult</strong> funktsioon Open-AudIT käivitamisel, kasutades HTTPS-i ja kehtivat sertifikaati </p>';

$GLOBALS["lang"]['Aggressive'] = 'Agressiivne';

$GLOBALS["lang"]['Aland Islands'] = 'Alandi saared';

$GLOBALS["lang"]['Albania'] = 'Albaania';

$GLOBALS["lang"]['Albanian'] = 'Albaania';

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

$GLOBALS["lang"]['All collections URLs use the format'] = 'Kõik kogude URL-id kasutavad vormingut';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Kõik seadme alamtabelid sisaldavad paari olulist veergu.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Kõik seadmed, mille tüüp on nagu arvuti.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Kõik seadmed, millel on arvuti või ruuter.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Kõik seadmed ilma lüliti ja printerita.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Kõik seadmed ilma lüliti ja printerita. Põhimõtteliselt sama, mis eelpool mainitud küsimus.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Kõik tavalised avastamisvalikud on saadaval ka seadme seemnete avastamiseks.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Kõik ülesanded saab luua sama Windows ja Linux. Ülesannete täitmisel kasutatakse CRON-meetodit.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Koos selle teabenõudega saadame tagasi FirstWave\'i andmepunktidesse, mis annavad meile väga vajalikku teavet funktsioonide kasutamise ja teie installimise kohta.';

$GLOBALS["lang"]['Also can be created from the'] = 'Samuti saab luua';

$GLOBALS["lang"]['Alternatives'] = 'Alternatiivid';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Fields';

$GLOBALS["lang"]['American Samoa'] = 'Ameerika Samoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Active Directory avastus pärib Active Directory võrguloendi ja skaneerib sellega seotud IP-d nagu tavaline Subneti avastamine.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Org (organisatsioon) on enamiku esemete omanik Open-AudIT kogudes. Välja arvatud globaalsed teemad nagu <i>konfiguratsiooni</i>, enamik objekte on määratud orgile (omab) Kasutajal on juurdepääs nendele elementidele kogumikus, mis allpool on kasutajal õigus.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Rakendus aktsepteerib aktiivselt TCP-ühendusi, UDP-andmegramme või SCTP-ühendusi selles pordis. Nende leidmine on sageli sadama skaneerimise peamine eesmärk. Turvatundega inimesed teavad, et iga avatud sadam on atraktsioon. Ründajad ja pliiatsitestijad tahavad avatud porte ära kasutada, samas kui administraatorid püüavad neid tulemüüridega sulgeda või kaitsta seaduslikke kasutajaid takistamata. Avatud sadamad on huvitavad ka mitteturvaliste skaneerimiste jaoks, sest need näitavad võrgus kasutamiseks saadaval olevaid teenuseid.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Rida <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Rida <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Hulk objekte, mis esindavad väliseid linke rohkema informatsiooni juurde.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Haritud ettekujutus seadme identiteedist ja tüübist';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Krüpteeritud JSON-dokument, mis sisaldab vajalikke atribuute sõltuvalt <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Ettevõtte privaatvõrk on võrk, mille üks organisatsioon ehitab oma kontorite (nt tootmiskohad, peakontorid, kaugkontorid, kauplused) ühendamiseks, et nad saaksid jagada arvutiressursse.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Sissekande saab luua veebiliidese abil, kui sisse logitud aktiivsel kasutajal on roll, mis sisaldab';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Näide JSON POST kehast on allpool. See tuleks lisada vormile „Andmed.';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Näitevidina SQL, mis näitab seadmeid, mida arvestatakse asukoha järgi.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Olemasoleva Open-AudIT kasutaja autendis ja autoriseeris LDAP server. Edu.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Märge selle veebilehe poolt nõutava teenuse taseme kohta.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Sisemine väli, mis näitab, kas avastus on lõppenud.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Open|filtreeritud porti peetakse avatud (ja see käivitab seadme tuvastamise).<br/>Eelnevalt, Open-Aud IT kaalus Nmap vastust';

$GLOBALS["lang"]['An optional GeoCode'] = 'Valikuline geokood';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Valikuline parool sudo kasutamiseks.';

$GLOBALS["lang"]['Analyzed'] = 'Analüüsitud';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Ja lõpuks klõpsake selle avastuse käivitamiseks Submit.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'Ja kui midagi läheb valesti?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Ja viimase kliki <i>Esita</i> Et luua oma Open-AudIT Auth meetod Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Ja lõpuks, mitte niivõrd julgeolekuküsimus - rohkem meelerahu. Andmestruktuurid on avatud ja dokumenteeritud. Sa võid neid vaadata.';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Ja anna nimi - me alandlikult soovitame Open-AudIT 😀, kuid võite nimetada seda, mida soovite. Veenduge, et valik <i>Integreeri kõik muud rakendused, mida galeriist ei leia (mitte-galerii)</i> valitakse. Ja siis klõpsa <i>Loo<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Ja nii palju rohkem.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'A lisa Kontrollid';

$GLOBALS["lang"]['Antarctica'] = 'Antarktika';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Viirusevastased pakendid';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua ja Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antiviirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Kõik TCP-pordid (koma eraldatud, tühikuid ei ole), mida soovite sellest avastusest välja jätta. Saadaval ainult Nmap 7+ kasutamise korral.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Kõik UDP-pordid (koma eraldatud, tühikuid ei ole), mida soovite sellest avastusest välja jätta. Saadaval ainult Nmap 7+ kasutamise korral.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Kõik täiendavad dokumendid, mida vajate.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Kõik täiendavad märkmed, mida soovite teha.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Kõik atribuudid, millele järgneb a *, näitavad, et selle välja täitmiseks kasutati CVSSi andmeid alla v4. Vaikimisi püüame kasutada v4 välju, kuid kui need ei ole asustatud, siis varundame atribuutide jaoks eelmise versiooni (d).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Kõik seadmed määratakse sellele orgile, kui nad käivitavad oma auditi skripti (kui see on seadistatud).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Kõik seadmed määratakse sellele orgile, kui nad käivitavad oma auditi skripti (kui see on seadistatud). Lingid <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Kõik leitud seadmed määratakse sellele asukohale, kui see on määratud. Lingid <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Kõik leitud seadmed määratakse sellele asukohale, kui nad käivitavad oma auditi skripti (kui see on seadistatud).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Kõik leitud seadmed määratakse sellele asukohale, kui nad käivitavad oma auditi skripti (kui see on seadistatud). Lingid <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Kõik avastatud seadmed omistatakse sellele orgile, kui see on määratud. Kui ei ole määratud, määratakse need <code>org_id</code> avastusest. Lingid <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Kõik sel viisil leitud failid salvestatakse <i>käivitatav</i> mis tahes muu seadme komponendi tabel.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Kõik vajalikud filtrid. MÄRKUS: Kui tüüp = liiklus, tähistab see fondi suurepärast ikooni.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Kõik konkreetsed TCP-pordid, mida soovid testida (koma eraldatud, tühikuid ei ole).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Iga konkreetne UDP port, mida soovid testida (koma eraldatud, tühikuid ei ole).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Kõik kasutajate üleslaaditud pildid on siin.';

$GLOBALS["lang"]['Application'] = 'Rakendus';

$GLOBALS["lang"]['Application Definitions'] = 'Rakenduse definitsioonid';

$GLOBALS["lang"]['application_id'] = 'Rakenduse ID';

$GLOBALS["lang"]['Application ID'] = 'Rakenduse ID';

$GLOBALS["lang"]['Application Licenses'] = 'Rakenduslitsentsid';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Rakendus, operatsioonisüsteem või riistvara.';

$GLOBALS["lang"]['applications'] = 'Rakendused';

$GLOBALS["lang"]['Applications'] = 'Rakendused';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Rakendused on ainult ettevõtte funktsioon.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Rakendusi tutvustatakse avatud auditeerimisprogrammis 2.2, et kontseptsiooni edasi arendada.';

$GLOBALS["lang"]['applied'] = 'Rakendatud';

$GLOBALS["lang"]['Applied'] = 'Rakendatud';

$GLOBALS["lang"]['Approved'] = 'Heaks kiidetud';

$GLOBALS["lang"]['Approved Packages'] = 'Kinnitatud pakendid';

$GLOBALS["lang"]['April'] = 'Aprill';

$GLOBALS["lang"]['Arabic'] = 'araabia';

$GLOBALS["lang"]['architecture'] = 'Arhitektuur';

$GLOBALS["lang"]['Architecture'] = 'Arhitektuur';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Kas tõesti kustutada see sisendelement?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Kas tõesti kustutada see väljundelement?';

$GLOBALS["lang"]['Are you sure?'] = 'Oled sa kindel?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Oled sa kindel? See eemaldab kõik järjekordade kirjed ja takistab ülejäänud IP-de avastamist.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Oled sa kindel? See lähtestab järjekorra töötlemise arvu ja võib põhjustada serveri koormust.';

$GLOBALS["lang"]['area'] = 'Area';

$GLOBALS["lang"]['Area'] = 'Area';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armeenia';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Meeldetuletuseks selle kohta, kuidas autoriseeringud Open-AudITis töötavad, vt';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Selle tulemusena oleme <strong>peab</strong> admin$ jagamine on saadaval avastamisvolituste kasutajale. Palun kontrollige sihti, mida Windowsi masin pakub <i>kirjutada</i> Juurdepääs otsinguandmete kasutajale.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Nagu eespool mainitud, ei räägi arendajad kõiki pakutavaid tõlkekeeli. See tähendab, et me ei saa acuracy\'ga, tõlgitud teksti üle vaadata. Me proovime läbi vaadata. Kui näete midagi, mis ei ole õigesti tõlgitud, saate seda ise muuta. Muuda sobivat keelefaili (nagu allpool) ja leia tekst, mida muuta. Võib-olla ei ole seda olemas ja peate selle lisama. Lihtsalt muutke teksti, salvestage fail ja värskendage meie lehte. Ei ole vaja taaskäivitada ühtegi teenust / deemonit, et see jõustuks. Võib-olla peate oma brauserit värskendama.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Vastavalt OpenSCAPi kriteeriumidele - <i>Ärge püüdke rakendada ühtegi selle võrdlusaluse seadistust ilma neid eelnevalt mittetöötavas keskkonnas katsetamata. Selle võrdlusaluse loojad ei vastuta selle kasutamise eest teiste osapoolte poolt ega anna mingeid otseseid ega kaudseid tagatisi selle kvaliteedi, usaldusväärsuse ega muude omaduste kohta.</i><br/><br/>Tõsiselt, ärge pimesi alustage. <i>fikseerib</i> probleemid, mis ilmnevad pärast võrdlusaluse kasutamist, ilma et neid oleks eelnevalt põhjalikult katsetatud tootmisega mitteseotud identses keskkonnas.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Nagu seadmete keskkondade atribuutide puhul. Tootmine, koolitus jne.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Kuna auditiskript kasutab bash-i, saate kataloogide ja välistuste määratlemisel kasutada * metamärki.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Nagu tavaliselt, minge menüüsse → Manage → Integrations → Create Integration. Nagu eespool, kui töötate Linuxis ja teil on samas serveris NMIS, ei pea te tegema midagi muud kui klõpsama <i>Esita</i>. Ma ei saa seda kergemaks teha.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Kui käivitame Discoveriesi ja kogume seadme tulemusi, sisestame võrkude loendi. Funktsioon Blessed Subnets kasutab seda võrkude loendit ainult nende võrkude seadmete andmete vastuvõtmiseks.';

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

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'ISMS- i halduri või meeskonna määramine';

$GLOBALS["lang"]['Assign an Operator'] = 'Määra operaatorile';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Määra sellele orgile kõik auditeeritud seadmed. Jäta tühjaks, et jätta seade parajasti määratud orgi (või määrata vaikeväärtus).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Seadme määramine asukohale';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Seade omistatakse orgile';

$GLOBALS["lang"]['Assigned To'] = 'Määratud';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Avastatud seadmete omistamine';

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

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Proovige seadet pingutada, kui me ei auditeeri kohalikku hosti.';

$GLOBALS["lang"]['Attribute'] = 'Atribuut';

$GLOBALS["lang"]['attributes'] = 'Atribuudid';

$GLOBALS["lang"]['Attributes'] = 'Atribuudid';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Atribuudid salvestatakse Open-AudIT jaoks, et neid kasutada konkreetsete väljade jaoks, praegu põhinevad kõik väljad seadmetel, asukohtadel, orgudel ja päringutabelitel. Atribuudid, mida saab muuta, on seotud järgmiste veergudega: Klass, keskkond, staatus ja tüüp.';

$GLOBALS["lang"]['Audit'] = 'Audit';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Audit DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Audit ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Linuxi audit';

$GLOBALS["lang"]['audit_log'] = 'Auditi logi';

$GLOBALS["lang"]['Audit Log'] = 'Auditi logi';

$GLOBALS["lang"]['Audit Mount Point'] = 'Audit Mount Point';

$GLOBALS["lang"]['Audit My PC'] = 'Audit Minu arvuti';

$GLOBALS["lang"]['Audit Netstat'] = 'Audit Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Auditi tulemuste sisend';

$GLOBALS["lang"]['Audit Software'] = 'Audititarkvara';

$GLOBALS["lang"]['Audit Status'] = 'Auditi staatus';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Audit Win32 Toode';

$GLOBALS["lang"]['Audit Windows'] = 'Audit Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Seadme auditeerimine';

$GLOBALS["lang"]['Audits'] = 'Auditid';

$GLOBALS["lang"]['August'] = 'August';

$GLOBALS["lang"]['Australia'] = 'Austraaliast';

$GLOBALS["lang"]['Austria'] = 'Austria';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'Autentimismeetodid';

$GLOBALS["lang"]['Authenticate only'] = 'Ainult autentimine';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Autentimise paroolifraas';

$GLOBALS["lang"]['Authentication Protocol'] = 'Autentimisprotokoll';

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

$GLOBALS["lang"]['Available Benchmarks'] = 'Saadaolevad võrdlusalused';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Oodates analüüsi';

$GLOBALS["lang"]['Azerbaijan'] = 'Aserbaidžaani';

$GLOBALS["lang"]['Azerbaijani'] = 'Aserbaidžaani';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU kokku';

$GLOBALS["lang"]['Backbone network'] = 'Põhivõrk';

$GLOBALS["lang"]['Backup'] = 'Varumees';

$GLOBALS["lang"]['Bahamas the'] = 'Bahama';

$GLOBALS["lang"]['Bahrain'] = 'Bahrein';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladeshi';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Keelatud';

$GLOBALS["lang"]['Banned Packages'] = 'Keelatud pakendid';

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

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Võrdlusalused saavad võrrelda netstat porte, kasutajaid ja tarkvara.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Võrdlusalused võimaldavad ühendada auditi andmeid eelnevalt määratletud atribuutide kogumiga (teie lähtealus), et teha kindlaks seadmete vastavus nõuetele.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Seadmete võrdlemise lähtejooned';

$GLOBALS["lang"]['Basic'] = 'Põhiline';

$GLOBALS["lang"]['Basque'] = 'Baskimaa';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Kuna me püüame olla võimalikult läbipaistvad, siis siin on teie tegelikud andmed, mida me saadame.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Võimalus määrata, millised masinad on konfigureeritud samal viisil, on süsteemide haldamise ja auditeerimise oluline osa - ja nüüd tehakse selle aruandlus lihtsaks ja automaatseks. Kui olete oma lähtejoone määratlenud, töötab see automaatselt etteantud ajakavaga seadmete vastu. Nende käivitatud lähtejoonte väljund on saadaval veebi vaatamiseks, importimiseks kolmanda osapoole süsteemi või isegi trükitud aruandena.<br/><br/>Auditeerimise ja juhtimise eesmärgil võib olla kasulik kontrollida üksikuid seadmeid fikseeritud, tuntud hea seadme vastu. Võrdlusalused võimaldavad ühendada auditi andmeid eelnevalt määratletud atribuutide kogumiga (teie lähtealus), et teha kindlaks seadmete vastavus nõuetele.';

$GLOBALS["lang"]['Belarus'] = 'Valgevene';

$GLOBALS["lang"]['Belgium'] = 'Belgia';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Allpool on näide vajalikust csv-vormingust.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Nende ridade all on koht, kus muutujad sisestatakse skripti. Meie varasema näite põhjal on Linuxi auditi skript asustatud meie kataloogiga nagu nii';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Allpool näete näidet Org Chart. Kui kasutajal on selleks luba <i>Rahandus</i> Org, neil on ka luba Dept A, B & C järeltulijate orgide kohta. Seda sõltumata sellest, millist kogumist soovitakse.<br/><br/>Kui soovitud kogumine lubab ülenejaid, siis on kasutajal juurdepääs ka ettevõtte # 1 ja vaikimisi orgi esemetele. See on (nagu eespool) päringute, rühmade jne jaoks.<br/><br/>Märkus - kasutajal võib olla juurdepääs Default Orgi päringule, kuid see on päring ise, mitte tulemus. Tulemus näitab ainult seadmeid, millele kasutajal on juurdepääs - IE seadmetelt Finance A ja Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Võrdlusmärk';

$GLOBALS["lang"]['benchmark_id'] = 'Võrdlusaluse ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Võrdlusaluse ID';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Võrdlusalused luuakse automaatselt, kui luuakse võrdlusalus.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Võrdlusaluse täitmine ja töötlemine võib võtta kaua aega, mistõttu eelistatakse neid ajastada ja mitte neid ühekordselt käivitada.';

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

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Võrdlusalused luuakse, pakkudes operatsioonisüsteemi ja versiooni koos konkreetse juhendiga ja selle täitmiseks mõeldud masinate nimekirjaga. Pärast loomist täidetakse võrdlusandmed ajakavas olevate masinate nimekirja alusel.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Parima harjutamise konfiguratsiooni võrdlusandmed';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Võrdlusalused pakuvad teie arvutitele turvasoovitusi, kasutades OpenSCAP-i tööriistu ja eeskirju.<p><i>OpenSCAPi kodulehelt:</i> Pidevalt muutuvas arvutiturbe maailmas, kus iga päev avastatakse ja lapitakse uusi haavatavusi, peab turvalisuse järgimise jõustamine olema pidev protsess. See peab hõlmama ka poliitika kohandamise viisi, samuti perioodilist hindamist ja riskiseiret. OpenSCAP pakub vahendeid ja kohandatavaid poliitikaid nende protsesside kiireks, kulutõhusaks ja paindlikuks rakendamiseks.</p>';

$GLOBALS["lang"]['Benefits'] = 'Hüved';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

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

$GLOBALS["lang"]['Both forms of'] = 'Mõlemad vormid';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouveti saar (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasiilia';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brasiilia portugallane';

$GLOBALS["lang"]['Breaking it Down'] = 'Murdke see maha';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Briti India ookeani ala (Chagose saarestik)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Briti Neitsisaared';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Sirvige puud Console Juurde -> Komponentteenused -> Arvutid -> Arvuti<br/><br/>Paremklõps <i>Arvuti</i> ja vali omadused<br/><br/>Vali <i>Vaikimisi omadused</i> vahekaart';

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

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Usalduse loomine klientide ja partneritega';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgaaria';

$GLOBALS["lang"]['Bulgarian'] = 'Bulgaaria';

$GLOBALS["lang"]['Bulk Edit'] = 'Redigeerimine';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Redigeerimisvorm';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Puistetöötlusseadme atribuudid';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Redigeerimise kiirvalikud ei jää valituks pärast järgmisel lehel klõpsamist.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Ärilised nõuded';

$GLOBALS["lang"]['Business Requirements'] = 'Ärilised nõuded';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Aga mul on ainult Windowsi kliendi masinad saadaval!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Aga ma ei taha, et pean keelefaili iga kord uuendama!';

$GLOBALS["lang"]['Buy'] = 'Osta';

$GLOBALS["lang"]['Buy More'] = 'Osta rohkem';

$GLOBALS["lang"]['Buy More Licenses'] = 'Osta rohkem litsentse';

$GLOBALS["lang"]['By'] = 'By';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Vaikimisi integreerime kõik seadmed nende nmis_manage atribuudiga, mis on määratud <i>y</i>. Koos punktiga 4.2.0 edastame ka reegli, mis ütleb: <i>Kui avastame seadme ja sellel on kehtiv SNMP OID, märkige see seade NMISi hallatavaks</i>. Loomulikult võite selle keelata, kui see pole see, mida soovite.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Vaikimisi jätame sertifikaadi valideerimise vahele, sest kliendid kasutavad enamasti ise allkirjastatud sertifikaate. Sertifikaadi valideerimise lubamiseks redigeeri allpool olevat faili';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maski';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUd';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVEd, mis on saadud, ootavad analüüsi, on analüüsil, lükatakse tagasi. Need CVEd (enamasti) ei sisalda piisavalt teavet, et saaksime genereerida õige SQL-päringu.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Arvutatud avastamise põhjal.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Arvutatud selle võrgu kehtivate IP-aadresside koguarv.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Selle punkti täitmiseks kulunud aeg on arvutatud pärast täitmist.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Arvutatakse integreerimise käigus ja see sisaldab selles integratsioonis olevate seadmete JSON-kujutist. Iga link <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Arvutatakse integratsiooni käigus ja see sisaldab JSON-i esitust integratsiooni asukohtadest. Iga link <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Arvutatakse integreerimise käivitamisel ja see sisaldab Open-AudIT-ist valitud seadmete arvu.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Arvutatakse integreerimise käigus ja see sisaldab valitud seadmete arvu välissüsteemis.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Arvutatakse integreerimise käigus ja see sisaldab välises süsteemis uuendatavate seadmete arvu.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Arvutatakse integratsiooni käivitamisel ja see sisaldab Open-AudIT-is uuendatud seadmete arvu.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Klõpsake käsku Start ja otsige <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Kambodža';

$GLOBALS["lang"]['Cameroon'] = 'Kameruni';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Campus area network'] = 'Campus\'i piirkonnavõrk';

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

$GLOBALS["lang"]['Catalan'] = 'Kataloonia';

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

$GLOBALS["lang"]['Certification'] = 'Sertifitseerimine';

$GLOBALS["lang"]['Certification Audit'] = 'Sertifitseerimisaudit';

$GLOBALS["lang"]['Certification Process'] = 'Sertifitseerimisprotsess';

$GLOBALS["lang"]['Chad'] = 'Chad';

$GLOBALS["lang"]['Change'] = 'Muuda';

$GLOBALS["lang"]['change_id'] = 'Muuda ID';

$GLOBALS["lang"]['Change ID'] = 'Muuda ID';

$GLOBALS["lang"]['change_log'] = 'Muuda logi';

$GLOBALS["lang"]['Change Log'] = 'Muuda logi';

$GLOBALS["lang"]['Change Logs'] = 'Muuda logisid';

$GLOBALS["lang"]['change_type'] = 'Muuda tüüpi';

$GLOBALS["lang"]['Change Type'] = 'Muuda tüüpi';

$GLOBALS["lang"]['check_minutes'] = 'Kontrollprotokollid';

$GLOBALS["lang"]['Check Minutes'] = 'Kontrollprotokollid';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Kontrolli SSH- d nendes sadamates';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Kontrolli seda porti kõigi SSH teenuste osas.';

$GLOBALS["lang"]['Chile'] = 'Tšiili';

$GLOBALS["lang"]['China'] = 'Hiina';

$GLOBALS["lang"]['Chinese'] = 'Hiina';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Hiina (traditsiooniline)';

$GLOBALS["lang"]['Choose'] = 'Vali';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Vali (valige kõigepealt OS)';

$GLOBALS["lang"]['Choose a Device'] = 'Seadme valimine';

$GLOBALS["lang"]['Choose a Table'] = 'Tabeli valimine';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Valige ülesande tüüp esimesest rippmenüüst. See määrab vajalikud lisaväljad sõltuvalt ülesande tüübist.';

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

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Click <i>Uus kliendisaladus</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Klõpsa käivitatavale esitamisele';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Klõpsa <i>Omadused</i> alt <i>Manage</i> päis menüü keskveerus. Kopeeri <i>Kasutaja juurdepääsu URL</i>. Pärast kopeerimist kleepige see Yout tekstiredaktorisse. Te peate kopeerima selle välja ühe osa.<br/><br/>Meie näiteväli näeb välja selline<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>Me vajame sektsiooni <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (rentniku ID). Seda kasutatakse Open-AudIT-is kui <i>Rentnik</i> põld, nii et kleebi see sinna.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Klõpsake rakenduse registreerimisel uue rakenduse loomiseks ja seejärel klõpsake uue rakenduse registreerimist. Andke sellele nimi (kasutasin Open-AudIT), valige tüübiks veebirakendus / API ja esitage mis tahes URL (URL ei ole oluline) ja klõpsake nüüd Loo.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Klõpsake OK ja sulgege DCOMCNFG aken.<br/><br/>Eespool nimetatud muudatused nõuavad jõustumiseks taaskäivitamist.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Klõpsake äsja loodud rakendusel. Näidatav rakenduse ID on kliendi ID.<br/><br/>Kliendi saladuse loomiseks klõpsake nuppu Seaded, seejärel Keys. Anna võtmenimi ja vali sobiv aegumiskuupäev ning seejärel klõpsa nupule Salvesta.<br/><br/>Väärtus on asustatud teie jaoks - see on kliendi saladus.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Klõpsa nupule Kustuta, et eemaldada näidisseadmed Open-AudIT-ist.<br/>See eemaldab allpool olevad seadmed andmebaasist. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Klõpsa nupule Redigeerimine <i>SAML Seadistamine</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Klõpsa allolevale nupule Import, et sisestada Open- AudIT seadme näidisandmetega.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Klõpsa ikoonil selle välja paremal, mida soovid redigeerida. Muuda välja ja klõpsa rohelisel ikoonil.';

$GLOBALS["lang"]['Client ID'] = 'Kliendi ID';

$GLOBALS["lang"]['Client ID and Secret'] = 'Kliendi ID ja saladus';

$GLOBALS["lang"]['client_ident'] = 'Kliendi identifikaator';

$GLOBALS["lang"]['Client Ident'] = 'Kliendi identifikaator';

$GLOBALS["lang"]['client_secret'] = 'Kliendisaladus';

$GLOBALS["lang"]['Client Secret'] = 'Kliendisaladus';

$GLOBALS["lang"]['client_site_name'] = 'Kliendi saidi nimi';

$GLOBALS["lang"]['Client Site Name'] = 'Kliendi saidi nimi';

$GLOBALS["lang"]['Close'] = 'Sulge';

$GLOBALS["lang"]['Closed'] = 'Suletud';

$GLOBALS["lang"]['Cloud'] = 'Pilve';

$GLOBALS["lang"]['Cloud Details'] = 'Pilveandmed';

$GLOBALS["lang"]['Cloud Discovery'] = 'Pilvede avastamine';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Pilvede avastamine ja auditeerimine';

$GLOBALS["lang"]['cloud_id'] = 'Pilve ID';

$GLOBALS["lang"]['Cloud ID'] = 'Pilve ID';

$GLOBALS["lang"]['cloud_log'] = 'Pilvelogi';

$GLOBALS["lang"]['Cloud Log'] = 'Pilvelogi';

$GLOBALS["lang"]['cloud_name'] = 'Pilvenimi';

$GLOBALS["lang"]['Cloud Name'] = 'Pilvenimi';

$GLOBALS["lang"]['Cloud Network'] = 'Pilvevõrk';

$GLOBALS["lang"]['clouds'] = 'Pilved';

$GLOBALS["lang"]['Clouds'] = 'Pilved';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Pilved on funktsioon, mis on saadaval Open-AudIT Enterprise\'i litsentseeritud klientidele.';

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

$GLOBALS["lang"]['Clusters and Reporting'] = 'Klastrid ja aruandlus';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kookossaared (Keeling)';

$GLOBALS["lang"]['Collection'] = 'Kollektsioon';

$GLOBALS["lang"]['Collections'] = 'Kollektsioonid';

$GLOBALS["lang"]['Collector'] = 'Koguja';

$GLOBALS["lang"]['Collector (UUID)'] = 'Koguja (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Koguja/server on ainult ettevõtte funktsioon. Ärikliendid saavad ühe kollektsionääri litsentsi tasuta. Täiendavaid kollektsionääride litsentse saab osta vastavalt vajadusele.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Kollektsionäär/server on loodud nii, et teil oleks võimalik kasutada kaugjuhtimispulti või <i>koguja</i> Open-AudIT töötab kaugmasinal. See koguja võib olla mõnes teises turvatsoonis, alamvõrgus, pilvemajutuse eksemplaris või kliendi saidil. Seejärel teeb kaugkollektor kõik seadmete avastamise ja auditeerimise kohapeal, vältides võrgustike loomist ja tulemüüride keerukust. Koguja, kui ta on registreeritud, on täielikult kontrollitud. <i>serveri</i>. See tähendab, et teil on vaja ainult HTTP või HTTPS ühendust sellest kogujast serverisse.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Kollektori armatuurlaud';

$GLOBALS["lang"]['Collector Name'] = 'Kollektsiooni nimi';

$GLOBALS["lang"]['collector_uuid'] = 'Koguja Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Koguja Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Kollektori ülesanded seadistatakse automaatselt, kui kollektori funktsioon on lubatud. Koguja ülesandeid ei tohiks luua otse kasutajad. Kollektsionääride ülesandeid saab pärast loomist muuta nende sagedust. Kui Open-AudIT serveril on kollektsionäärid selle kohta aru andnud, on ette nähtud täiendav langus. Selle valimisel saab määrata, millise kogujaga ülesanne käib. Kogujatele on toetatud ainult otsinguülesanded.';

$GLOBALS["lang"]['Collectors'] = 'Kogujad';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Kollektsionäärid saavad töötada ühes kahest režiimist: Collector ja StandAlone. Kollektori režiimis haldab Open-AudITi eksemplar põhiserverit. Üksioleku režiimis hallatakse eksemplari kohalikult ja edastatakse kõik leitud seadmed peaserverisse.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Kaugavastamise kollektsionäärid';

$GLOBALS["lang"]['Colombia'] = 'Colombia';

$GLOBALS["lang"]['color'] = 'Värv';

$GLOBALS["lang"]['Color'] = 'Värv';

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

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Kommenteerige allpool olevat rida (umbes 49. rida). Lihtsalt asetage räsi # rea algusesse.';

$GLOBALS["lang"]['comments'] = 'Märkused';

$GLOBALS["lang"]['Comments'] = 'Märkused';

$GLOBALS["lang"]['commercial'] = 'Kaubanduslik';

$GLOBALS["lang"]['Commercial'] = 'Kaubanduslik';

$GLOBALS["lang"]['Commercial Support'] = 'Kaubanduslik toetus';

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

$GLOBALS["lang"]['Complete these steps.'] = 'Lõpeta need sammud.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Rünnaku keerukus (madal või kõrge).';

$GLOBALS["lang"]['Component Table'] = 'Komponentide tabel';

$GLOBALS["lang"]['Components (All Devices)'] = 'Komponendid (kõik seadmed)';

$GLOBALS["lang"]['Compute'] = 'Arvuta';

$GLOBALS["lang"]['Condition'] = 'Seisund';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Riskihindamise läbiviimine';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Teavitus- ja koolitusprogrammide läbiviimine';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Korraldada juhtkonna ülevaatuskoosolekuid';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Korrapärased järelevalveauditid (tavaliselt kord aastas)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Korraldab akrediteeritud asutus kahes etapis';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Vaikimisi seadistamine ';

$GLOBALS["lang"]['config_file'] = 'Seadistamine Fail';

$GLOBALS["lang"]['Config File'] = 'Seadistamine Fail';

$GLOBALS["lang"]['config_manager_error_code'] = 'Seadistamishalduri veakood';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Seadistamishalduri veakood';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Konfigureeritav rollipõhine juurdepääsukontroll (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Seadistamine';

$GLOBALS["lang"]['Configuration'] = 'Seadistamine';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Konfiguratsioonimuutuste tuvastamine ja aruandlus';

$GLOBALS["lang"]['Configure'] = 'Seadistamine';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Agendiserveri poole seadistamine auditite tegemiseks ajakava järgi';

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

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Nõustamis-, rakendus- ja muud teenused on kättesaadavad';

$GLOBALS["lang"]['contact'] = 'Kontakt';

$GLOBALS["lang"]['Contact'] = 'Kontakt';

$GLOBALS["lang"]['contact_name'] = 'Kontaktinimi';

$GLOBALS["lang"]['Contact Name'] = 'Kontaktinimi';

$GLOBALS["lang"]['contained_in'] = 'Sisaldab';

$GLOBALS["lang"]['Contained In'] = 'Sisaldab';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Sisaldab JSON- objekti, mis kirjeldab seotud vidinaid ja nende asukohti.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Sisaldab välju, mis määravad, kas kasutada ssh, snmp ja wmi avastamise võimalusi. Json objekt.';

$GLOBALS["lang"]['Context & Leadership'] = 'Kontekst ja juhtimine';

$GLOBALS["lang"]['Context Engine ID'] = 'Kontekstimootori ID';

$GLOBALS["lang"]['Context Name'] = 'Konteksti nimi';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'ISMSi pidev täiustamine';

$GLOBALS["lang"]['contractual_obligations'] = 'Lepingulised kohustused';

$GLOBALS["lang"]['Contractual Obligations'] = 'Lepingulised kohustused';

$GLOBALS["lang"]['Cook Islands'] = 'Cooki saared';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Auditi tulemuse kopeerimine ja kleepimine';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopeerige ja kleepige allolev foorumeid, mõnda muud Open-AudITi näidet või mujal, kus peate selle elemendi esitama.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Kopeeri <i>Rakenduse ID</i> välja ja kleepige see Open-Auditi <i>Kliendi ID</i> uue autentimismeetodi väli.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Kopeeri <i>Kliendi ID</i> ja kleepida see Open-Auditi <i>Kliendi ID</i> väli.<br/>Kui saladust pole, kliki <i>Uue saladuse loomine</i>, siis kopeerida väärtus ja kleepida see Open-AudIT <i>Kliendisaladus</i> väli.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Kopeeri väärtus ja aseta see Open-AudIT vormi <i>Kliendisaladus</i> väli.';

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

$GLOBALS["lang"]['Create File'] = 'Faili loomine';

$GLOBALS["lang"]['Create Geocode'] = 'Geokoodi loomine';

$GLOBALS["lang"]['create_internal_count'] = 'Sisemise loenduse loomine';

$GLOBALS["lang"]['Create Internal Count'] = 'Sisemise loenduse loomine';

$GLOBALS["lang"]['create_internal_from_external'] = 'Loo väliselt sisemine';

$GLOBALS["lang"]['Create Internal From External'] = 'Loo väliselt sisemine';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'NMIS- seadmete loomine Open- AudITist';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Avaauditi loomine Seadmed ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Avaauditi loomine NMISi seadmed';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Näidisseadme lähtejoone loomine';

$GLOBALS["lang"]['Create a Discovery'] = 'Avastuse loomine';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Rakendatavuse avalduse (SoA) loomine';

$GLOBALS["lang"]['created_by'] = 'Loodud';

$GLOBALS["lang"]['Created By'] = 'Loodud';

$GLOBALS["lang"]['created_date'] = 'Loodud kuupäev';

$GLOBALS["lang"]['Created Date'] = 'Loodud kuupäev';

$GLOBALS["lang"]['Creating'] = 'Loomine';

$GLOBALS["lang"]['Creating Credentials'] = 'Volikirjade loomine';

$GLOBALS["lang"]['Creating Device'] = 'Seadme loomine';

$GLOBALS["lang"]['Creating Widgets'] = 'Vidinate loomine';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Avastuse loomine Skaneerimisvalikute kirje';

$GLOBALS["lang"]['Creating a Query'] = 'Päringu loomine';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'SQL avalduse loomine rühmadele';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'SQL-lause loomine päringute jaoks';

$GLOBALS["lang"]['Creating an Integration'] = 'Integratsiooni loomine';

$GLOBALS["lang"]['creator'] = 'Looja';

$GLOBALS["lang"]['Creator'] = 'Looja';

$GLOBALS["lang"]['credential'] = 'Volikiri';

$GLOBALS["lang"]['Credential'] = 'Volikiri';

$GLOBALS["lang"]['Credentials'] = 'Volikirjad';

$GLOBALS["lang"]['Credentials Client ID'] = 'Volikirjad Kliendi ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Volikirjade märkimine ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Volikirja rentniku ID';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Volikirjad säilitatakse <i>volikirja</i> andmebaasitabel. Tegelik volikiri on krüptitud ladustamisel. Kui käivitatakse Discovery, on seadmel oma konkreetsed volitused andmebaasist kätte saada, dekrüpteerida ja testida. Kui need ebaõnnestuvad, hangitakse ka volituste nimekiri, dekrüpteeritakse ja seejärel testitakse seadet, alustades varem teadaolevalt töötanud volitustest. Seadme spetsiifilised volikirjad salvestatakse individuaalsel seadme tasandil <i>mandaat</i> tabel (märkus - ei) <i>s</i> tabeli nimes. SSH võtmeid testitakse enne SSH kasutajanime / parooli. SSH testimisel märgitakse volikirjad ka sudoga töötamiseks või rootiks.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Volikirjad võivad olla üks väheseid erinevaid tüüpe - snmp v.1 / v.2, snmp v.3, ssh, ssh võti, aknad on kõik rakendatud. CAVEAT - ssh võtmed ei ole veel Windows Open-AudIT serveritele rakendatud.';

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

$GLOBALS["lang"]['Custom Fields'] = 'Kohandatud väljad';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Kohandatud TCP-pordid';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Kohandatud TCP pordid. Kõik konkreetsed sadamad, mida me skaneeriksime lisaks Top TCP portidele. Koma on eraldatud, tühikuid pole.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Kohandatud UDP Sadamad';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Kohandatud UDP sadamad. Kõik konkreetsed sadamad, mida me skaneeriksime lisaks Top UDP sadamatele. Koma on eraldatud, tühikuid pole.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Kohandatavad skaneerimisvalikud avastamise kohta';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Küpros';

$GLOBALS["lang"]['Czech'] = 'Tšehhi';

$GLOBALS["lang"]['Czech Republic'] = 'Tšehhi Vabariik';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN konto (valikuline)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Parool (valikuline)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS masinanimi';

$GLOBALS["lang"]['Danish'] = 'Taani';

$GLOBALS["lang"]['dashboard_id'] = 'Armatuurlaua ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Armatuurlaua ID';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Armatuurlaua vidinad';

$GLOBALS["lang"]['dashboards'] = 'Armatuurlauad';

$GLOBALS["lang"]['Dashboards'] = 'Armatuurlauad';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Armatuurlauad ja vidinad võimaldavad Enterprise\'i litsentseeritud klientidel luua, lugeda, värskendada ja kustutada mõlemad kogud, et tagada nende koduleht täpselt see, mida nad peavad nägema. Mitte ainult seda, kuid kasutaja saab määrata antud armatuurlaua oma koduleheks. Kõigil ei ole vaja kasutada sama kodulehte (dashboard) ega samu vidinaid sellel armatuurlaual. Professionaalsed litsentsitud kliendid saavad valida kahe eelnevalt määratletud armatuurlaua vahel, et seada oma koduleht.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Armatuurlauad <i>pilguheit</i> oluline nähtavus teie võrgus toimuvate muutuste jaoks, samuti kiirete linkide pakkumine seadmetüüpidele, tootjatele ja operatsioonisüsteemidele ning palju muud.';

$GLOBALS["lang"]['Dashboards use'] = 'Armatuurlaudade kasutamine';

$GLOBALS["lang"]['Data'] = 'Andmed';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Andmeeksport - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Andmete säilitamine';

$GLOBALS["lang"]['Database'] = 'Andmebaas';

$GLOBALS["lang"]['db_action'] = 'Andmebaasitoiming';

$GLOBALS["lang"]['Database Action'] = 'Andmebaasitoiming';

$GLOBALS["lang"]['db_column'] = 'Andmebaasi veerg';

$GLOBALS["lang"]['Database Column'] = 'Andmebaasi veerg';

$GLOBALS["lang"]['Database Definition'] = 'Andmebaasi määratlus';

$GLOBALS["lang"]['db_row'] = 'Andmebaasirida';

$GLOBALS["lang"]['Database Row'] = 'Andmebaasirida';

$GLOBALS["lang"]['Database Schema'] = 'Andmebaasiskeem';

$GLOBALS["lang"]['Database Server Discovery'] = 'Andmebaasiserveri avastamine';

$GLOBALS["lang"]['db_table'] = 'Andmebaasitabel';

$GLOBALS["lang"]['Database Table'] = 'Andmebaasitabel';

$GLOBALS["lang"]['Database Tables'] = 'Andmebaasitabelid';

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

$GLOBALS["lang"]['Debugging'] = 'Silumine';

$GLOBALS["lang"]['Debugging a Script'] = 'Skripti silumine';

$GLOBALS["lang"]['December'] = 'detsember';

$GLOBALS["lang"]['Decommission'] = 'Tegevuse lõpetamine';

$GLOBALS["lang"]['Default'] = 'Vaikimisi';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Vaikimisi autentimine Tase. Seadke ühendus';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Vaikimisi isikustamine Tase. Identifitseeritav';

$GLOBALS["lang"]['Default Items'] = 'Vaikimisi elemendid';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Vaikimisi orgide grupid';

$GLOBALS["lang"]['Default Roles Groups'] = 'Vaikimisi rolligrupid';

$GLOBALS["lang"]['Default Value'] = 'Vaikeväärtus';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389. aasta vaikimisi. Tavaliselt kasutatakse 636 Active Directory LDAPS-i jaoks.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Vaikimisi <code>3</code> LDAP ja Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Vaikimisi';

$GLOBALS["lang"]['Deferred'] = 'Edasi lükatud';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Projekti ulatuse ja eesmärkide määratlemine';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Määrake ISMSi rakendusala';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'organisatsiooni konteksti määratlemine (sisemised/välised küsimused);';

$GLOBALS["lang"]['delay_minutes'] = 'Viivitusminutid';

$GLOBALS["lang"]['Delay Minutes'] = 'Viivitusminutid';

$GLOBALS["lang"]['Delete'] = 'Kustuta';

$GLOBALS["lang"]['Delete Example Devices'] = 'Näiteseadmete kustutamine';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Kustuta sisemine väline';

$GLOBALS["lang"]['Delete External From Internal'] = 'Kustuta sisemine väline';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Kustuta NMIS Seadmed, kui need ei ole avatud audiofailis';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Kustuta kirje {collection}.';

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

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Üksikasjad, kellega sellel veebisaidil tavaliselt ühendust võetakse.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Määrake, kui tihti soovite käivitada baaskontrolli andmebaasi vastu ja luua ajakava aruande';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Riskikäsitlusvõimaluste kindlaksmääramine';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Töötada välja riskikäsitluskava';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Poliitikate, protseduuride ja kontrollide väljatöötamine';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Vajaliku ISMSi dokumentatsiooni väljatöötamine (poliitikad, menetlused jne)';

$GLOBALS["lang"]['device'] = 'Seadme';

$GLOBALS["lang"]['Device'] = 'Seadme';

$GLOBALS["lang"]['Device Audits'] = 'Seadmeauditid';

$GLOBALS["lang"]['Device Component Names'] = 'Seadme komponentide nimed';

$GLOBALS["lang"]['Device ID'] = 'Seadme ID';

$GLOBALS["lang"]['device_id'] = 'Seadme ID';

$GLOBALS["lang"]['device_id_a'] = 'Seadme ID A';

$GLOBALS["lang"]['Device ID A'] = 'Seadme ID A';

$GLOBALS["lang"]['device_id_b'] = 'Seadme ID B';

$GLOBALS["lang"]['Device ID B'] = 'Seadme ID B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Seadmete sobitamise reeglid';

$GLOBALS["lang"]['Device Name'] = 'Seadme nimi';

$GLOBALS["lang"]['Device Result'] = 'Seadme tulemus';

$GLOBALS["lang"]['Device Results'] = 'Seadme tulemused';

$GLOBALS["lang"]['Device Seed'] = 'Seadmeseeme';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Seadmeseeme Avastus on hea valik, kui teate, et teie võrk koosneb paljudest alamvõrkudest, kuid te pole kindel, mis need on. Seemne avastus kohaliku ruuteriga ja vaata, kuidas teie võrk teie silme ees avaneb.';

$GLOBALS["lang"]['Device Seed IP'] = 'Seadme seemne IP';

$GLOBALS["lang"]['Device Status'] = 'Seadme olek';

$GLOBALS["lang"]['Device Types'] = 'Seadmetüübid';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Seadmete ja tarkvara ning riistvara auditeerimine';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Seade on alamvõrgus';

$GLOBALS["lang"]['Devices'] = 'Seadmed';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Asukohale määratud seadmed';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Asukohale määratud seadmed';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Orgile määratud seadmed';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Orgile määratud seadmed';

$GLOBALS["lang"]['Devices Audited'] = 'Auditeeritud seadmed';

$GLOBALS["lang"]['Devices Collection'] = 'Seadmete kogu';

$GLOBALS["lang"]['Devices Created in '] = 'Seadmed loodud ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Open- AUDITis loodud seadmed';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Seadmed Vaikeekraani veerud';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Seadmed Vaikeekraani veerud';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Viimased 7 päeva leitud seadmed';

$GLOBALS["lang"]['Devices Found Today'] = 'Täna leitud seadmed';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Eile leitud seadmed';

$GLOBALS["lang"]['Devices Missing Information'] = 'Seadmed puuduvad andmed';

$GLOBALS["lang"]['Devices Not Audited'] = 'Auditeerimata seadmed';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Seadmed, mida ei ole nähtud 30 päeva';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Seadmed, mida ei ole nähtud 7 päeva';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Seadmed, mida ei ole nähtud 90 päeva';

$GLOBALS["lang"]['Devices Older Than X'] = 'Seadmed vanemad kui X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'API kaudu hangitud seadmed';

$GLOBALS["lang"]['Devices Selected from '] = 'Seadmed, mille hulgast on valitud ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Open-AudITist valitud seadmed';

$GLOBALS["lang"]['Devices Updated in '] = 'Seadmed uuendatud ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Seadmed Uuendatud Open- AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Seadmeid kontrollitakse.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Seadmeid ei hinnata.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Seadmeid võiks võrrelda.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Open- AudIT seadmed';

$GLOBALS["lang"]['Devices in Running State'] = 'Seadmed sõiduolekus';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Seadmed peatatud olekus';

$GLOBALS["lang"]['Devices in this'] = 'Seadmed';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Seadmeid ei sobitata, kui nende staatus on määratud <i>kustutatud</i>. Mis tahes muu staatus võimaldab mängu toimumist.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Aegunud garantiidega seadmed';

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

$GLOBALS["lang"]['Discoveries'] = 'Avastus';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Avastused on selle keskmes, mida Open-AudIT teeb. Kuidas muidu sa tead? <i>Mis su võrgus toimub?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Avastused on kirjed, mis võimaldavad teil käivitada avastust võrgus ühe klõpsuga, sisestamata iga kord selle võrgu üksikasju.';

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

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Discovery Valikud on lihtsalt järjekordne kollektsioon. Ettevõtte kasutajad saavad kirjeid vastavalt vajadusele luua, lugeda, uuendada ja kustutada. Professionaalsed kasutajad saavad lugeda kõiki kirjeid, kuid mitte luua uusi kirjeid, uuendada olemasolevaid kirjeid ega kustutada kirjeid. Ühenduse kasutajatel ei ole GUI-d, mis võimaldaks juurdepääsu sellele kogule.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Avastamise skaneerimise tüübid';

$GLOBALS["lang"]['Discovery Support'] = 'Avastamistoetus';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Discovery lõpetas töö';

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Näita versiooni';

$GLOBALS["lang"]['Display Version'] = 'Näita versiooni';

$GLOBALS["lang"]['Display in Menu'] = 'Näita menüüs';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Näitab standardset veebivormi POST / {collection} esitamiseks.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Näitab standardset veebivormi POST / {collection} / import.';

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

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Ärge unustage avatud audio-vikit kõigi oma dokumentide jaoks.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Ärge unustage, et vikis on dokumentatsiooni mägi.';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Ärge skaneerige neid TCP porte.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Ärge skaneerige neid UDP porte.';

$GLOBALS["lang"]['Do not show me again'] = 'Ära näita mulle uuesti.';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Kas teil on selle konfiguratsiooni kohta suurepärane näide? Võib-olla seade, mis asub laborikeskkonnas või tööjaamas, mida kasutate tööjaama VM-ide kloonimiseks.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Kas soovite kasutada turvalist transporti (LDAPS) või tavalist krüpteerimata LDAP-i.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Kas soovite näha standardset külgriba vasakul.';

$GLOBALS["lang"]['documentation'] = 'Dokumentatsioon';

$GLOBALS["lang"]['Documentation'] = 'Dokumentatsioon';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Dokumentatsioon konkreetse kogu kohta.';

$GLOBALS["lang"]['Does Not Equal'] = 'Ei ole võrdne';

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

$GLOBALS["lang"]['Download a File'] = 'Faili allalaadimine';

$GLOBALS["lang"]['Download a file from URL'] = 'Faili allalaadimine URL- ist';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Laadige test_windows_client.vbs skript otse alla';

$GLOBALS["lang"]['Download your updated version from'] = 'Laadi uuendatud versioon alla';

$GLOBALS["lang"]['driver'] = 'Autojuht';

$GLOBALS["lang"]['Driver'] = 'Autojuht';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Seadmete / puuduvate seadmete dubleerimine';

$GLOBALS["lang"]['duration'] = 'Kestus';

$GLOBALS["lang"]['Duration'] = 'Kestus';

$GLOBALS["lang"]['Dutch'] = 'Hollandi';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Iga IP skaneeritakse konfigureeritud avastusvalikutega (vt Discovery Scan Options ja Discovery - Community vs Professional vs Enterprise wiki). Üldiselt testib Nmap porte 22 (ssh), 135 (wmi), 62078 (iPhone) ja UDP 161 (snmp). 22, 135 või 161 vastuse korral hangitakse volikiri ja testitakse iga volikirja kordamööda. Esimesi töövolitusi kasutatakse edasiste päringute tegemiseks otse seadmest. Märkus - kui seade on varem avastatud ja sellel on töövolitused, testitakse neid volitusi kõigepealt. Ainult siis, kui need ebaõnnestuvad, proovitakse teisi volitusi.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Iga kord, kui seade avastatakse või auditi tulemust töödeldakse, võetakse andmebaasist kõik reeglid ja sõidetakse konkreetse seadme atribuutide vastu. Reeglid töötavad ühe seadme vastu korraga - pole võimalust öelda <i>Reeglite käivitamine kõigi seadmete vastu<i> või <i>Reeglite käivitamine nende seadmete vastu<i>. Individuaalne reegel testib seadme ühte või mitut atribuuti ja kui need vastavad reeglile, rakendatakse tulemust. Testida saab mitut atribuuti. Määrata võib mitu atribuuti. Mõelge sellele kui kui see, siis see avatud auditi süsteem.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Lihtne käivitada avastus võrgus ühe klõpsuga, sisestamata iga kord selle võrgu üksikasju.';

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

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Hajutatud COM- i lubamine selles arvutis - valik on märgitud';

$GLOBALS["lang"]['enabled'] = 'Lubatud';

$GLOBALS["lang"]['Enabled'] = 'Lubatud';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Funktsiooni lubamine Windowsi all';

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

$GLOBALS["lang"]['Endpoint'] = 'Endpoint';

$GLOBALS["lang"]['English'] = 'inglise';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Parandada õigusnormidele vastavust';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Rikastamine on lõpetatud. CVE-l on täielikud metaandmed ja seda peetakse stabiilseks.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Tagada dokumentatsiooni kontroll ja kättesaadavus';

$GLOBALS["lang"]['enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise'] = 'Enterprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Eraettevõtluse võrgustik';

$GLOBALS["lang"]['Enterprise private network'] = 'Eraettevõtluse võrgustik';

$GLOBALS["lang"]['Entitlement Type'] = 'Õiguste liik';

$GLOBALS["lang"]['Entra'] = 'Entra';

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

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Projektikava ja ajakava koostamine';

$GLOBALS["lang"]['Establish an information security policy'] = 'Luua infoturbepoliitika';

$GLOBALS["lang"]['Established'] = 'Asutatud';

$GLOBALS["lang"]['Estonia'] = 'Eesti';

$GLOBALS["lang"]['Estonian'] = 'Eesti';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etioopia';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'ISMSi sisemine hindamine';

$GLOBALS["lang"]['Every'] = 'Iga kord';

$GLOBALS["lang"]['Every Day'] = 'Iga päev';

$GLOBALS["lang"]['Example'] = 'Näide';

$GLOBALS["lang"]['Example Devices'] = 'Näidisseadmed';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Ligipääsuga orgdiagrammi näidis';

$GLOBALS["lang"]['Example text from'] = 'Näitetekst';

$GLOBALS["lang"]['Examples'] = 'Näiteid';

$GLOBALS["lang"]['Exceptions'] = 'Erandid';

$GLOBALS["lang"]['exclude'] = 'Kõrvalda';

$GLOBALS["lang"]['Exclude'] = 'Kõrvalda';

$GLOBALS["lang"]['exclude_ip'] = 'IP väljajätmine';

$GLOBALS["lang"]['Exclude IP'] = 'IP väljajätmine';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'IP- aadresside väljajätmine';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Skaneerimisest jäetakse välja IP-aadressid (individuaalne IP - 192.168.1.20, vahemikud - 192.168.1.30-40 või alamvõrgud - 192.168.1.100/30). Koma on eraldatud, tühikuid pole.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCP portide väljajätmine';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Tcp portide väljajätmine';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Tcp portide väljajätmine';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP portide väljajätmine';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udp portide väljajätmine';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udp portide väljajätmine';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Skaneerimisest jäetakse välja kõik loetletud sadamad. Koma on eraldatud, tühikuid pole.';

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

$GLOBALS["lang"]['Exporting a Device'] = 'Seadme eksportimine';

$GLOBALS["lang"]['expose'] = 'Paljastage';

$GLOBALS["lang"]['Expose'] = 'Paljastage';

$GLOBALS["lang"]['External'] = 'Välised';

$GLOBALS["lang"]['External Field Name'] = 'Välise välja nimi';

$GLOBALS["lang"]['External Field Type'] = 'Välise andmevälja tüüp';

$GLOBALS["lang"]['External Field Types'] = 'Välisvälja tüübid';

$GLOBALS["lang"]['external_ident'] = 'Väline identifikaator';

$GLOBALS["lang"]['External Ident'] = 'Väline identifikaator';

$GLOBALS["lang"]['external_link'] = 'Väline link';

$GLOBALS["lang"]['External Link'] = 'Väline link';

$GLOBALS["lang"]['extra_columns'] = 'Lisaveerud';

$GLOBALS["lang"]['Extra Columns'] = 'Lisaveerud';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Lisa- ja ajapõhine aruandlus';

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

$GLOBALS["lang"]['Fields attributes are'] = 'Väljade atribuudid on';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidži Fidži saared';

$GLOBALS["lang"]['File'] = 'Fail';

$GLOBALS["lang"]['File Auditing'] = 'Failide auditeerimine';

$GLOBALS["lang"]['File Import'] = 'Faili import';

$GLOBALS["lang"]['File Input'] = 'Fail Sisend';

$GLOBALS["lang"]['file_name'] = 'Faili nimi';

$GLOBALS["lang"]['File Name'] = 'Faili nimi';

$GLOBALS["lang"]['File Share Discovery'] = 'Failijagamise avastamine';

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

$GLOBALS["lang"]['Filtered Ports'] = 'Filtreeritud sadamad';

$GLOBALS["lang"]['Finland'] = 'Soome';

$GLOBALS["lang"]['Finnish'] = 'Soome';

$GLOBALS["lang"]['Firewall'] = 'Tulemüür';

$GLOBALS["lang"]['Firewall Packages'] = 'Tulemüüripaketid';

$GLOBALS["lang"]['firewall_rule'] = 'Tulemüürireegel';

$GLOBALS["lang"]['Firewall Rule'] = 'Tulemüürireegel';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Kindlavara revisjon';

$GLOBALS["lang"]['Firmware Revision'] = 'Kindlavara revisjon';

$GLOBALS["lang"]['First'] = 'Esimene';

$GLOBALS["lang"]['First Name'] = 'Eesnimi';

$GLOBALS["lang"]['first_run'] = 'Esimene sõit';

$GLOBALS["lang"]['First Run'] = 'Esimene sõit';

$GLOBALS["lang"]['first_seen'] = 'Esmanägija';

$GLOBALS["lang"]['First Seen'] = 'Esmanägija';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Esmalt keskenduge sellele, mis on lõppvajadus: kas proovite lähtestada tarkvara, kasutajaid või Netstati andmeid? Mis on oluline (olulised) asi (d), mida võrrelda ja millest aru anda?';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'Parandatud';

$GLOBALS["lang"]['Fixing the Issue'] = 'Probleemi lahendamine';

$GLOBALS["lang"]['Floor'] = 'Põrand';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Järgige allolevaid linke ja leidke, kuidas kasutada Open-AudIT-i, et teada saada <b>Mis su võrgus toimub?</b>';

$GLOBALS["lang"]['For'] = 'For';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'For <i>Tüüp</i> Veenduge, et valite nulljoone ja grupi jaoks peaksite valima seadmete rühma, kui see on selle baasjoone suhtes kohaldatav, mis kõige paremini esindavad seadmeid, millega baasjoont rakendada. See aitab vältida ekslikke sissekandeid.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Debian/Ubuntu jooksmiseks, kaasa arvatud dpkg seadistamine, et meeles pidada ülevõtjat, nii et apt-ge uuendus ei katke';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'SNMP jaoks saab Open-AudIT kasutada v1, v2 ja v3 volitusi. Seadet küsitakse olenemata sellest, kas see on ruuter, kommutaator (tavalised võrguseadmed) või arvuti (Linux ja Windows kasutavad seirevahendite jaoks sageli SNMP-d).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Krundi kohta cron\'is vaata seda Wikipedia lehekülge';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Seemne avastamiseks peaksin leidma IP-d ainult privaatses IP-aadressi ruumis.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Seemne avastamiseks peaksin leidma ainult valitud alamvõrgu IP-d.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Seemne avastamiseks, kas ma peaksin enne avastamist alamvõrgu pingile tõmbama.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Toore SQL- päringu täpsemaks sisestamiseks. Vastavalt päringutele peate sisaldama <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Iga kudemisprotsessi puhul toimub allpool.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Näiteks - võite luua lähtejoone seadmest, mis töötab Redhat 9-ga, mis toimib ühe teie Apache serverina klastris. Te teate, et see konkreetne server on konfigureeritud just nii, nagu soovite, kuid te pole kindel, kas teised klastri serverid on täpselt sama konfigureeritud. Lähtepunktid võimaldavad teil seda kindlaks määrata.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Näiteks - võite luua lähtejoone seadmest, mis töötab Redhat 9-ga, mis toimib ühe teie Apache serverina klastris. Te teate, et see konkreetne server on konfigureeritud just nii, nagu soovite, kuid te pole kindel, kas teised klastri serverid on täpselt sama konfigureeritud. Lähtepunktid võimaldavad teil seda kindlaks määrata.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Täpsema info saamiseks vaata wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Litsentside puhul, mis ei ole tähtajatud, millal litsents aegub.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Üksikasjalikuma teabe saamiseks vaadake Open-AudIT teadmistebaasi.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Lisateabe saamiseks vaadake järgmist juhendit, mis sisaldab videot. Kasuta';

$GLOBALS["lang"]['For more information, see'] = 'Lisateabe saamiseks vt';

$GLOBALS["lang"]['form_factor'] = 'Vormitegur';

$GLOBALS["lang"]['Form Factor'] = 'Vormitegur';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

$GLOBALS["lang"]['Forth'] = 'Forth';

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

$GLOBALS["lang"]['From that page'] = 'Sellest leheküljest';

$GLOBALS["lang"]['full_name'] = 'Täisnimi';

$GLOBALS["lang"]['Full Name'] = 'Täisnimi';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Täielik pilvaudit, mis sisaldab kõiki korrapärase avatud auditi üksikasju JA üksikasju, nagu masina tüüp ja suurus.';

$GLOBALS["lang"]['function'] = 'Funktsioon';

$GLOBALS["lang"]['Function'] = 'Funktsioon';

$GLOBALS["lang"]['GROUP BY'] = 'Rühm';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Galician'] = 'Galicia';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Lünkade analüüs (valikuline)';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Loodud';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'Geograafilised kaardid';

$GLOBALS["lang"]['Georgia'] = 'Georgia';

$GLOBALS["lang"]['German'] = 'saksa';

$GLOBALS["lang"]['Germany'] = 'Saksamaa';

$GLOBALS["lang"]['Get Lat/Long'] = 'Hangi Lat/Long';

$GLOBALS["lang"]['Get News'] = 'Uudised';

$GLOBALS["lang"]['Get Started'] = 'Alusta';

$GLOBALS["lang"]['Get a Free License'] = 'Hankige tasuta litsents';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Tutvuge Open-AudIT platvormiga ja uurige mõningaid selle funktsioone.';

$GLOBALS["lang"]['Getting Started'] = 'Alustamine';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltarile';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Globaalsed otsinguvalikud';

$GLOBALS["lang"]['Global area network'] = 'Globaalne alavõrk';

$GLOBALS["lang"]['Go'] = 'Mine.';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Minge tagasi oma Open-AudIT-serverisse ja looge alamvõrguna avastus, mille eesmärk on Windowsi arvutite IP-aadress (see säästab kogu alamvõrgu uuesti avastamisest). Käivitage avastus, võttes arvesse kõiki probleeme. Mis tahes leitud probleemide korral võtke asjakohaseid meetmeid.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Minge sihtige Windows PC (või kasutage RDP-d) ja logige sisse kasutajana, mida teie avastuse mandaatkomplekt kasutab.';

$GLOBALS["lang"]['Go to menu'] = 'Mine menüüsse';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Mine <i>Rakendused</i> -> <i>Rakenduste registreerimine</i> menüükirje vasakul. Otsi avatud audiot. Klõpsake loendis Open-AudIT kirjet (eeldades, et nimetasite rakenduse Open-AudIT).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Mine <i>Sertifikaadid ja saladused</i> menüüelement <i>Manage</i> keskmenüüs.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Mine <i>Üks sisselogimine</i> menüükirje ja klõpsa SAML <i>Ühe sisselogimismeetodi valimine</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Volikirjad';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Mapsi API Võti';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Tore, siis saad aidata! Saada Lehvitage GUI-s näidatud teksti ja seda, mida näidata. Me lisame, et keelefaili nii edasi, et tõlge on paranenud ja te ei pea muretsema selle uuendamise pärast iga väljaande jaoks!';

$GLOBALS["lang"]['Greater Than'] = 'Suurem kui';

$GLOBALS["lang"]['Greater Than or Equals'] = 'suurem kui või võrdne';

$GLOBALS["lang"]['Greece'] = 'Kreeka';

$GLOBALS["lang"]['Greek'] = 'Kreeka';

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

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Rühmasid kasutatakse nõutavatele tingimustele vastavate seadmete lihtsate nimekirjadena. Kui küsitakse JSON-i abil, tagastatakse nimekiri <i>seadmed.id</i> ainult. Kui nõutakse veebiliidese kasutamist, tagastavad nad standardse veeru atribuutide nimekirja. Gruppe saab kasutada integratsioonide, aluste ja muude objektide jaoks.';

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

$GLOBALS["lang"]['Hardware'] = 'Riistvara';

$GLOBALS["lang"]['hardware_revision'] = 'Riistvara revisjon';

$GLOBALS["lang"]['Hardware Revision'] = 'Riistvara revisjon';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Kas selles organisatsioonis on seda poliitikat rakendatud?';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Kas agent käivitab alati uusima auditi skripti (kui uuendate Open-AudIT-i ja kopeerite skriptid käsitsi eesmärkidele, siis määrake cron - peate neid skripte iga uuenduse jaoks uuendama).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Lase kasutajal avada käsuviip (kasutades <i>Käivitamine administraatorina</i>). Asetage agendi allalaadimiseks allpool olev käsk.';

$GLOBALS["lang"]['Head'] = 'Pealik';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heardi saar ja McDonaldi saared';

$GLOBALS["lang"]['Hebrew'] = 'heebrea';

$GLOBALS["lang"]['height'] = 'Kõrgus';

$GLOBALS["lang"]['Height'] = 'Kõrgus';

$GLOBALS["lang"]['Height in RU'] = 'Kõrgus REs';

$GLOBALS["lang"]['Help'] = 'Aita';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Abi ja korduma kippuvad küsimused';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Aitab hallata ja maandada infoturberiske';

$GLOBALS["lang"]['Hide Audit Window'] = 'Peida auditi aken';

$GLOBALS["lang"]['high'] = 'Kõrge';

$GLOBALS["lang"]['High'] = 'Kõrge';

$GLOBALS["lang"]['High Availability'] = 'Suur kättesaadavus';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Püha Tool (Vatikani Linnriik)';

$GLOBALS["lang"]['Home'] = 'Kodu';

$GLOBALS["lang"]['home'] = 'Kodu';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Home area network'] = 'Koduse piirkonna võrk';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Peremees';

$GLOBALS["lang"]['Host'] = 'Peremees';

$GLOBALS["lang"]['hostname'] = 'Hostname';

$GLOBALS["lang"]['Hostname'] = 'Hostname';

$GLOBALS["lang"]['hour'] = 'Tund';

$GLOBALS["lang"]['Hour'] = 'Tund';

$GLOBALS["lang"]['How Does It Work?'] = 'Kuidas see töötab?';

$GLOBALS["lang"]['How Does it Work?'] = 'Kuidas see töötab?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Kui kaua see aega võtab';

$GLOBALS["lang"]['How and Why is'] = 'Kuidas ja miks';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Kuidas ja miks on avatud audit turvalisem';

$GLOBALS["lang"]['How do they work?'] = 'Kuidas need töötavad?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Kuidas Seade Seed Discovery leida tuntud IP?';

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

$GLOBALS["lang"]['Hungarian'] = 'Ungari';

$GLOBALS["lang"]['Hungary'] = 'Ungari';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hüperlõime';

$GLOBALS["lang"]['Hyperthreading'] = 'Hüperlõime';

$GLOBALS["lang"]['I have read the EULA.'] = 'Olen lugenud EULA-d.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Loodan, et see postitus on leevendanud kõiki muresid, mis teil on avatud auditi ja turvalisuse osas. Kui teil on üldse küsimusi, palun ärge kartke meiega ühendust võtta siin FirstWave\'is. Meil on alati hea meel arutada teie muresid ja vajadusi. Ja võib-olla, kui teie küsimus ei ole midagi, mida ma olen siin käsitlenud, võin selle siia tulevastele kasutajatele lisada.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'OLULINE';

$GLOBALS["lang"]['INPUTS'] = 'SISENDID';

$GLOBALS["lang"]['IOS Version'] = 'IOS-i versioon';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP- aadress';

$GLOBALS["lang"]['IP Addresses'] = 'IP- aadressid';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Viimati nähtud';

$GLOBALS["lang"]['IP Set By'] = 'IP määratud';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

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

$GLOBALS["lang"]['Identify information assets'] = 'Andmevara identifitseerimine';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Nimetage huvitatud isikud ja nende nõuded';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Määrake kindlaks peamised sidusrühmad ja määrake rollid';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'tuvastada seade (d), mis on teie eeskuju või <i>kuldpilt</i> Sa tahad võrrelda sarnaseid seadmeid.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Turvariskide tuvastamine ja hindamine';

$GLOBALS["lang"]['If'] = 'Kui';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Kui seade avastatakse individuaalselt, kasutades <i>Avastage seade</i> link seadme andmete lehel, kontrollime kõigepealt, kas see seade on varem avastatud (Avastus) ja kui jah, kasutage selle skaneerimise avastamisvalikuid. Kui seda ei ole varem avastatud, pöördume seadistuste juurde tagasi konfiguratsioonielemendi Discover_ default_scan_option juurde.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Kui luuakse uus Org, tuletatakse nimest automaatselt LDAP grupi nimi. Näiteks kui luuakse uus Org ja sellele antakse nimeks Test, saab vastava LDAP grupi nimeks open-audit_orgs_test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Kui sadam reageerib filtreeritud, peaksime seda pidama kättesaadavaks.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Kui sadam reageerib avatud filtreeritud, peaksime seda pidama kättesaadavaks.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Kui Open-AudIT valitud seadmetes ei ole kaugseadet, peaksime selle välisest süsteemist kustutama.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Kui Open-AudIT seadet on muudetud, peaksime uuendama välissüsteemi.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Kui Open-AudIT seade ei ole välises süsteemis, peaksime selle looma.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Kui agent teatab, et tema esmane IP on selles alamvõrgus, sooritage toimingud.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Kui mõni neist (koma eraldatud, tühikuid ei ole) portidest avastatakse, eeldage, et SSH töötab neil ja kasutab neid auditeerimiseks. Seda porti pole vaja Custom TCP pordidesse lisada - see lisatakse automaatselt.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Kui operaatorit ei ole määratud, on vaikeväärtus =. Omadused peaksid olema täielikult kvalifitseeritud - st device.hostname (mitte ainult hostname).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Kui väärtust ei ole, märkida see väärtus. EG: for system.nmis_group / configuraion. gruppi';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Sisselülitamisel sisaldab JSON rida kindlaid seadme veerge, mida kasutaja on valinud näha, välja arvatud konfiguratsiooni vaikeväärtus.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Kui operatsioonisüsteemi perekond (vastavalt seadmele) sisaldab seda elementi, lubage.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Kui Open-AudIT serveril on kollektsionäärid selle kohta aru andnud, on ette nähtud täiendav langus. Selle valimisel saab määrata, millise kogujaga ülesanne käib. Kogujatele on toetatud ainult otsinguülesanded.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Kui agent OS-i perekond (juhutundmatu) sisaldab seda stringi, sooritage toimingud.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Kui binaarfaili ei leita kummaski neist asukohtadest, kuvatakse paigaldajas hoiatusteade.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Kui on täidetud järgmised tingimused:<br/><ul><li>a Rollile on määratud ad_ group</li><li>Orgil on määratud ad_ group</li><li>LDAP Serverile on määratud use_ roll y</li><li>kasutaja on olemas LDAP-is (olgu see Active Directory või OpenLDAP) ja on määratud ad_gruppides</li></ul>See kasutaja saab Open-AudIT-i sisse logida ilma Open-AudIT-i konto loomiseta. Open-AudIT teeb päringu kõnealusele LDAP-ile ja kui kasutaja on nõutud rühmades, kuid mitte Open-AudIT-is, siis nende kasutaja atribuudid (nimi, täisnimi, e-post, rollid, orgid jne) täidetakse automaatselt ja need logitakse sisse.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Kui lokaalne väli on tõene (bool) või y (string) või Y (string) või 1 (täisarv), siis sea välisandmete väärtuseks 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Kui kohalik väli on tõene (bool) või y (string) või Y (string) või 1 (täisarv), siis määrake välised andmed väärtuseks y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Kui esmane IP (nagu seadme poolt teatatud) on selles alamvõrgus, läbige.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Kui kasutajakontot ei ole Open-AudIT-is tegelikult olemas ja <code>use_authorisation</code> Kui see on määratud, luuakse kasutaja. Kui see on olemas, täidetakse sellised üksikasjad nagu e-post, täisnimi jne.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Kui kasutajal ei ole kehtivat volikirja või ta ei kuulu vähemalt ühte Open-AudIT rolli ja gruppi (kasutades <code>use_authorisation</code>Open-AudIT kasutab kohalikke Open-AudIT kasutajaandmeid ning proovib seal autentimist ja autoriseerimist. Kui see ei õnnestu, keelatakse kasutajal juurdepääs.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Kui Open-AudIT-i sisse logival kasutajal ei ole juurdepääsu LDAP-i otsingule, saate kasutada teist kontot, millel see juurdepääs on.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Kui Open-AudIT-i sisse logival kasutajal ei ole juurdepääsu OpenLDAP-i otsingule, saate kasutada teist kontot, millel see juurdepääs on. Selle seadistamiseks kasuta dn_ account ja dn_ parool.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Kui väärtust ei ole määratud, kasutatakse aktiivset ajatemplit.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Kui väärtus on määratud, kasutatakse seda ajatempli väärtust.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Kui see muutus teie jaoks ei tööta, pole kõik kadunud. Oleme lisanud konfiguratsioonielemendi (vaikimisi on see määratud n-iks, nii et see ei kasuta seda uut võimalust kastist väljas) nimega Discover_use_org_id_match. Kui muudate selle y-ks, kasutatakse vastavates mängureeglites seadmele avastamisega määratud OrgID-d.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Kui see mitu minutit (või rohkem) on möödunud sellest, kui server viimati seadet nägi, läbige.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Kui pärast seda, kui seade serveriga ühendust võttis, on möödunud mitu minutit, tehke toimingud.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Kui see juhtub, siis probleem, mida näete, on seotud veebilehel kasutatava tabeli kontrolliga. See salvestab mällu ainult vaadeldava lehekülje märkekastide oleku. Kui teete valikuid, siis lähevad need valikud edasi / tagasi. Saate siiski saavutada, mida soovite, suurendades igal lehel näidatud seadmete arvu. Ülemises vasakus nurgas on rippmenüü, millel on märge „kirjed lehekülje kohta. Kasuta seda, et suurendada kuvatavate kirjete arvu, kuni näed kõike, mida soovid valida mahtkaubana redigeerimiseks.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Kui tuvastame san-haldustarkvara, peaksime enne päringut käivitama automaatse avastamise.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Kui lisate asukoha tüübi, lisage need ikoonid';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Kui lisate seadme tüübi, peate seotud ikooni kuvamiseks käsitsi kopeerima .svg-vormindatud faili kataloogi';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Kui olete toetatud FirstWave\'i klient, muudab paar elementi teie abistamise lihtsamaks. Avage tugipilet FirstWave\'iga ja lisage logifail. Kaasatakse ka väljund ülal paremal asuvast nupust Toetus';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Kui olete toetatud klient ja avate tugipileti FirstWave\'iga, lisage need failid.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Kui teil on probleeme Google Mapsi API võtmetega või kui teie ettevõttel ei ole juurdepääsu Google Mapsi API võtmete loomiseks, võtke ühendust FirstWave\'i tugimeeskonnaga.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Kui olete Windowsis või teie NMIS-server on kaugjuhtimispult, peate selle serveri kasutamiseks esitama URL-i, kasutajanime ja parooli.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Kui teil on korralik lairiba- või ethernetiühendus, soovitaksin alati kasutada -T4 (agressiivne). Mõned inimesed armastavad -T5 (Insane), kuigi see on minu maitse jaoks liiga agressiivne. Inimesed täpsustavad mõnikord -T2 (Polite), sest nad arvavad, et see on vähem tõenäoline, et peremehed kukuvad või kuna nad peavad ennast üldiselt viisakaks. Sageli ei saa nad aru, kui aeglane T2 tegelikult on. Nende skaneerimine võib võtta kümme korda kauem kui vaikimisi skaneerimine. Masinakrahhid ja ribalaiuse probleemid on haruldased vaikeajastusvalikutega -T3 (Normal) ja seega soovitan seda tavaliselt ettevaatlikele skanneritele. Versioonituvastuse ärajätmine on nende probleemide vähendamisel palju tõhusam kui ajaväärtustega mängimine.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Kui teil on RedHat või Centos süsteem ja olete uuendanud Nmapi, lähtestage SUID binaarfailis';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Kui kasutate Linuxis Open-AudIT serverit, ei mõjuta see teid.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Kui kasutate Windowsis Open-AudIT-i või kui teie NMIS-server ei ole teie Open-AudIT-serveris (mõningate Linuxi installide puhul), peate NMIS-i kaugjuhtimispuldile andma juurdepääsu volikirjad ja URL-i - kuid see on kõik! Jah - NMISi ja Open-AudITi vahelised integratsioonid töötavad nüüd isegi Windowsi-põhise Open-AudITiga!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Kui valite kollektsionääri, plaanitakse see käivitada järgmise 5 minuti piiril.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Kui tavaliselt määrad Device_assigned_to_org ja seadistuselement on lubatud, kasutatakse sobivuse edasiseks täpsustamiseks OrgID- d.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Kui te tavaliselt ei määra seadmeid_assigned_to_org, siis see ei mõjuta. Kontrollime OrgID-d ainult siis, kui see on seadistatud avastamisel (või käsitsi auditi skriptis) ja konfiguratsioonis lubatud.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Kui lubate konfiguratsioonielemendi, kasutage avastamist orgi määramiseks ja seejärel muutke seadme OrgID-d pärast avastamist, siis on teil tõenäoliselt uus seade, mis on loodud järgmisel korral, kui avastamine töötab. Sellisel juhul peaksite tõenäoliselt enne järgmiste avastuste käivitamist lihtsalt eemaldama seadmed_assigned_to_org. Seda seetõttu, et (antud juhul) olete öelnud Open-AudITile <i>Need seadmed sellest avastusest kuuluvad Org X-le<i>, kuid siis muutis seadme org. Te olete muutnud salvestatud seadmete teavet. Sel juhul ei ole enam Org X-le kuuluvat seadet, nii et loome uue.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Kui teil on Anti-Virus tarkvara töötab, on oluline lubada Opmanteki (omkd), Apache (apache2.2) ja MySQL (mysql) teenustel automaatselt käivitada ja käivitada. Neid teenuseid kasutab Open-AudIT. Sa peaksid seda tegema ainult üks kord. Kui teie Anti-Virus programm pidevalt küsib Open-AudIT kohta, postitage foorumitesse või saatke e-kiri, et toetada oma Anti-Virus tarkvara nime ja versiooni.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Kui teil on töövolikirjad, võite oodata kogu võimalikku teavet.<br/><br/>Ilmselt on parim viis Open-AudIT-i kasutamiseks töövolituste olemasolu avastatavate seadmete jaoks (olgu need siis WMI, SSH või SNMP mandaadid).<br/><br/>Meil on ka lehekülg auditeerimise kohta ilma volitusteta.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Kui lisada väli\ "id\" <strong>ja</strong> Määrake see numbriga, seda elementi uuendatakse, mitte ei looda.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Kui teil on vaja seadistada Active Directory ligipääsu, võite tavaliselt kasutada <code>cn=Users,dc=your,dc=domain,dc=com</code> sinule <code>base_dn</code>. Pole vaja seadistada <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Kui teil on vaja seadistada OpenLDAP juurdepääsu oma kasutajatele ja teatud kasutajatele juurdepääs DN on tavaliselt <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> siis peaks <code>base_dn</code> kuni <code>dc=your,dc=domain,dc=com</code> ja <code>user_dn</code> kuni <code>uid=@username@@domain,cn=People</code>. Erisõnad <code>@username</code> ja <code>@domain</code> Asendatakse kasutaja poolt sisselogimislehel esitatud sisselogimisandmetega.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Kui käivitate avastamise alamvõrgus, kuhu server (või koguja) on otse installitud, võite vastata seadmetele';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Kui käivitate avastuse alamvõrgus, millele teie server (või koguja) ei ole otse installitud, võite vastata seadmetele';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Kui valite loendi tüübi, ilmub täiendav väli nimega Väärtused. Siin tuleks panna komadega eraldatud valitavate väärtuste nimekiri. Need kuvatakse rippmenüüs alati, kui välja redigeeritakse.';

$GLOBALS["lang"]['If you set the values for'] = 'Kui määrad väärtused';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Kui soovite sundida oma agente kasutama kindlat konfiguratsiooni, saate esitada kasutatava agentide kirje ID, nagu allpool (asenda $id kirje Agents numbriga). Kui see agent on paigaldatud, kontrollib see sevreri ja <strong>ainult</strong> kontrollige, kas Agendikirjete atribuudid (testid ja toimingud). See võib olla kasulik, kui olete MSP - looge agentide kirje konkreetsele kliendile ja lase oma seadmetel kasutada seda kirjet, mis määrab nad orgile ja asukohale.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Kui soovite integratsiooni sisse kaevata ja kohandada, klõpsake nupule Muud (ja proovige mitte olla ülekoormatud!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Kui soovite käivitada Discovery väliselt pakutavas seadmes, valige valik ja integratsiooni loomise aeg, s Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Kui soovite kasutada skripti väljaspool Discovery\'i, oleme loonud teise lõpp-punkti, mida nimetatakse <i>käsikirjad</i>. Vaata dokumentatsiooni';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Kui teie kasutajal ei ole <i>Käivitamine administraatorina</i> Õigused, nad saavad siiski agendi alla laadida (esimene käsk eespool) ja käivitada selle auditi esitamiseks allpool. See on ühekordne audit, ilma et agent oleks paigaldatud või planeeritud.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Vigase SSLi ignoreerimine';

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

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Valitud kontrollide ja menetluste rakendamine';

$GLOBALS["lang"]['Implementation'] = 'Rakendamine';

$GLOBALS["lang"]['implementation_notes'] = 'Rakendamise märkused';

$GLOBALS["lang"]['Implementation Notes'] = 'Rakendamise märkused';

$GLOBALS["lang"]['Import'] = 'Import';

$GLOBALS["lang"]['Import Example Data'] = 'Impordi näidisandmed';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Mitme { kogumine} import CSV abil.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Parandamisvõimalused';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Parandamisvõimalused';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Parandab äritegevuse järjepidevust ja vastupidavust';

$GLOBALS["lang"]['In'] = 'Sisse';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'Teises vahekaardil või aknas minge oma OKTA konsooli ja klõpsake <i>Rakenduste integreerimise loomine</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'Teises kaardis või aknas sisselogimine';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Minu isikliku arvamuse kohaselt on parim viis oma võrgu iga üksuse leidmiseks ja auditeerimiseks iga alamvõrgu Seed Discovery, mis on piiratud selle alamvõrguga (kasutades volitusi). Seemne avastamised kasutavad lülitit, ruuterit ja arvuti MAC-aadressi tabeleid, et mitte ühtegi seadet vahele jätta. Kui see on võrguga ühendatud ja kasutab TCP / IP-d, peab lüliti / marsruuter / arvuti teadma, et see on olemas - just nii TCP / IP töötab. Kombineerige see kohandatud TCP- ja / või UDP-portidega ja seejärel peaksite saama määrata ka seadme tüübi. Aga see on vaid minu isiklik eelistus.';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Selleks, et Open-AudIT saaks objektidele kasutajaõigusi rakendada, volitame kasutajat <code>WHERE @filter</code>. Kui te seda vormingut ei kasuta, visatakse päringuga „CreateForm hoiatus. Ainult administraatori rolliga kasutajatel on lubatud luua päringuid, millel see atribuut puudub, ja isegi siis alles pärast konfiguratsioonielementi. <i>edasijõudnud päringud</i> on lubatud.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Google Mapsi lubamiseks peate Google\'i API-võtme järgima seda linki ja sisse logima oma Google\'i konto,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Azure Rest API kasutamiseks peate looma Azure Active Directory rakenduse, mida kasutatakse autentimiseks.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Selle funktsiooni kasutamiseks peab see olema lubatud konfiguratsioonis - klõps';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'Komadega eraldatud nimekirjas';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'Kui <code>in</code> ja <code>notin</code>, siis tuleks lisada väärtused ümmarguste sulgude ja eraldada need kasutades koma (lihtsalt koma, mitte koma, siis ruumi).<br/><br/>Nende operaatoritega saate filtreerida üsna põhjalikult.<br/><br/>Kui lisate andmeid ja filtreerite mitu veergu, kombineeritakse need veerud kasutades <strong>Ja</strong>. Filtreerimine ei ole võimalik <strong>VÕI</strong> seisund. kaasa arvatud <code>notin</code>See tähendab, et enamik otsinguid peaks töötama. Ja neile, kes tõesti vajavad toetamata ja keerulisi valikuid, saate alati kirjutada tegeliku päringu.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Juhul kui salvestame mitu välja (tavaliselt JSON-vormingus) BIGTEXT MySQL väljal (nt: volikirjad). volikirjad - volikirja veerg volikirja tabelis, tuleb kasutada vormingut';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Käivita käsuviipe shellis allalaadimiskataloogi (tõenäoliselt) <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Mitteaktiivne';

$GLOBALS["lang"]['Incomplete'] = 'Mittetäielik';

$GLOBALS["lang"]['Index'] = 'Indeks';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indoneesia';

$GLOBALS["lang"]['Indonesian'] = 'Indoneesia';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Information only.'] = 'Ainult informatsiooni.';

$GLOBALS["lang"]['Informational'] = 'Informatiivne';

$GLOBALS["lang"]['initial_size'] = 'Esialgne suurus';

$GLOBALS["lang"]['Initial Size'] = 'Esialgne suurus';

$GLOBALS["lang"]['Initial login credentials are'] = 'Esialgsed sisselogimisvolitused on';

$GLOBALS["lang"]['Initiation'] = 'Algatamine';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Sisend';

$GLOBALS["lang"]['Input Type'] = 'Sisendi tüüp';

$GLOBALS["lang"]['inputs'] = 'Sisendid';

$GLOBALS["lang"]['Inputs'] = 'Sisendid';

$GLOBALS["lang"]['Insane'] = 'Hullumeelne';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Lisab uue {collection} kirje.';

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

$GLOBALS["lang"]['Install Support'] = 'Paigaldamise toetus';

$GLOBALS["lang"]['installed_by'] = 'Paigaldatud';

$GLOBALS["lang"]['Installed By'] = 'Paigaldatud';

$GLOBALS["lang"]['installed_on'] = 'Paigaldatud';

$GLOBALS["lang"]['Installed On'] = 'Paigaldatud';

$GLOBALS["lang"]['Installing'] = 'Paigaldamine';

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

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integratsioone saab planeerida vastavalt soovile. See jäetakse kasutaja otsustada.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integratsioone saab planeerida vastavalt avastustele, päringutele jne.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Interaktiivsed armatuurlauad';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Interaktiivsed armatuurlauad annavad kohe ülevaate võrgu inventuuri staatusest, võimaldades IT-meeskondadel silmapilkselt märgata äsja avastatud seadmeid ja seadme ebatavalist käitumist.';

$GLOBALS["lang"]['interface'] = 'Liides';

$GLOBALS["lang"]['Interface'] = 'Liides';

$GLOBALS["lang"]['interface_id'] = 'Liidese ID';

$GLOBALS["lang"]['Interface ID'] = 'Liidese ID';

$GLOBALS["lang"]['interface_type'] = 'Liidese tüüp';

$GLOBALS["lang"]['Interface Type'] = 'Liidese tüüp';

$GLOBALS["lang"]['Internal'] = 'Sisemine';

$GLOBALS["lang"]['Internal Audit'] = 'Siseaudit';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Siseaudit ja -kontroll';

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

$GLOBALS["lang"]['Irish'] = 'Iiri';

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

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'See <i>Lihtsalt toimib</i> NMISiga';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'See on saadaval menüüs -> Aidake!';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Oluline on märkida, et kui Open-AudIT määrab kokkulangevuse, siis on <i>y</i> peab täpselt sobima (ja mitte olema tühi), et Open-AudIT saaks kindlaks teha, kas leitud seade sobib juba andmebaasis oleva seadmega. Kui ükski märgitud omadustest ei ole <i>y</i> klapib, siis luuakse uus seadmekirje, mis võib põhjustada seadme topeltkirjeid. Olukorras, kus omadused on dubleeritud, näiteks dbus_id kopeeritakse VM klooni ajal, siis võib olemasolev seade valesti üle kirjutada / uuendada, selle asemel et luua uus kirje, mille tulemuseks on puuduvad seadmed.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Ei ole haruldane, et konkreetses organisatsioonis on kattuv aadressiruum. Mitte ideaalne, aga mitte ebatavaline.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'On väga tavaline, et teise astme emaplaadi tootjad ei määra seda, seadke see kõigile <i>0</i>s või isegi kõik <i>F</i>s.';

$GLOBALS["lang"]['Italian'] = 'itaallane';

$GLOBALS["lang"]['Italy'] = 'Itaalia';

$GLOBALS["lang"]['Items not in Baseline'] = 'Kirjed, mis ei ole baasväärtuses';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON impordib';

$GLOBALS["lang"]['Jamaica'] = 'Jamaica';

$GLOBALS["lang"]['January'] = 'jaanuar';

$GLOBALS["lang"]['Japan'] = 'Jaapan';

$GLOBALS["lang"]['Japanese'] = 'Jaapani';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordani';

$GLOBALS["lang"]['July'] = 'juuli';

$GLOBALS["lang"]['June'] = 'Juuni';

$GLOBALS["lang"]['Kazakhstan'] = 'Kasahstani';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Kerneli versioon';

$GLOBALS["lang"]['Kernel Version'] = 'Kerneli versioon';

$GLOBALS["lang"]['Key'] = 'Võti';

$GLOBALS["lang"]['Key Components'] = 'Põhikomponendid';

$GLOBALS["lang"]['Key Password (optional)'] = 'Võtmeparool (valikuline)';

$GLOBALS["lang"]['keys'] = 'Võtmed';

$GLOBALS["lang"]['Keys'] = 'Võtmed';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Korean'] = 'Korea';

$GLOBALS["lang"]['Kuwait'] = 'Kuveit';

$GLOBALS["lang"]['Kyrgyz'] = 'Kõrgõzstani';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgiisi Vabariik';

$GLOBALS["lang"]['LDAP Group'] = 'LDAPi grupp';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP otsiti seda kasutajat ja nende konto leiti.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP otsiti seda kasutajat ja nende kontot ei leitud. Kontrolli LDAP serveri logisid. Kasutaja andmed on töötanud, kuid kasutajat ei leitud. Samuti kontrollige, kas olete määranud õige Baasi DN atribuudi LDAP serveri loomisel Open- AudIT-is.';

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

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Viimane on WMI. Windowsi puhul, nagu ka Linuxis, eelistatakse administraatori tasemel juurdepääsuga kasutajat (vt „Sihtkliendi konfiguratsioon vikis).';

$GLOBALS["lang"]['lastModified'] = 'Viimati muudetud';

$GLOBALS["lang"]['LastModified'] = 'Viimati muudetud';

$GLOBALS["lang"]['latitude'] = 'laiuskraadi';

$GLOBALS["lang"]['Latitude'] = 'laiuskraadi';

$GLOBALS["lang"]['Latvia'] = 'Läti';

$GLOBALS["lang"]['Latvian'] = 'läti';

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

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Paneb logi silumisele. Kopeeri fail:';

$GLOBALS["lang"]['level'] = 'Tase';

$GLOBALS["lang"]['Level'] = 'Tase';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Kasutamiseks vajalike privileegide tase (puudub, madal, kõrge).';

$GLOBALS["lang"]['Liberia'] = 'Libeeria';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Raamatukogud (st kood, mida võib sisaldada mõni muu programm). Need on tavaliselt sellised esemed nagu Wordpressi laiendused, drupaalsed laiendused, node.js teegid, Android / iPhone / Windows teegid, pythoni teegid jne.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Liibüa Araabia Džamahirija';

$GLOBALS["lang"]['License'] = 'Litsentsi';

$GLOBALS["lang"]['License Key'] = 'Litsentsivõti';

$GLOBALS["lang"]['License Required'] = 'Nõutav litsents';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Litsentseeritud kasutajatel on vabadus lisada või muuta reegleid vastavalt teie äranägemisele. Kui teil on SNMP OID-ga seade, mis ei vasta juba failis olevale mudelile - nüüd saate selle hõlpsasti lisada. Ei ole enam oodata, et me anda plaaster ja lisada see koodi baasi teile.<br/><br/>Reeglite kirje loomisel peate esitama nime ja sisendite ja väljundite loendi. Sisendid ja väljundid salvestatakse andmebaasi JSON-massiividena.<br/><br/>Sisenditel on tabel ja atribuut, operaator ja väärtus. Tingimuse täitmisel toimib see nii: Kui $table. $atribute $operator $value, siis rakendatakse väljundeid.<br/><br/>SNMP OID-ga sobitamise ja mudeli seadistamise näide on allpool.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Litsentsid';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Nagu';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Nagu enamik teisi atribuute, saab täiendavaid välju redigeerida. Kasutage Bulk Edit funktsiooni nagu tavaliselt ja näete, et lisaväljad on sisendiks saadaval.';

$GLOBALS["lang"]['Like versus Equals'] = 'Nagu Võrdsete vastu';

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

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Line diagrammid peavad tagastama kuupäeva või my_date, description või my_description ja count.';

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

$GLOBALS["lang"]['Linux Packages'] = 'Linuxi paketid';

$GLOBALS["lang"]['List'] = 'Nimekiri';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Kõigi NMAP-portide, protokollide ja programmide loend iga seadme jaoks';

$GLOBALS["lang"]['List Devices'] = 'Seadmete nimekiri';

$GLOBALS["lang"]['List Discoveries'] = 'Nimekirja avastused';

$GLOBALS["lang"]['list_table_format'] = 'Tabeli vorming';

$GLOBALS["lang"]['List Table Format'] = 'Tabeli vorming';

$GLOBALS["lang"]['List Tables'] = 'Nimekirjatabelid';

$GLOBALS["lang"]['Lithuania'] = 'Leedu';

$GLOBALS["lang"]['Lithuanian'] = 'Leedu';

$GLOBALS["lang"]['Load Balancing'] = 'Koormuse tasakaalustamine';

$GLOBALS["lang"]['Local'] = 'Kohalik';

$GLOBALS["lang"]['Local Area Network'] = 'Kohalik alavõrk';

$GLOBALS["lang"]['local_port'] = 'Kohalik sadam';

$GLOBALS["lang"]['Local Port'] = 'Kohalik sadam';

$GLOBALS["lang"]['Local area network'] = 'Kohtvõrk';

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

$GLOBALS["lang"]['Location Name'] = 'Asukoha nimi';

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

$GLOBALS["lang"]['Locations'] = 'Asukohad';

$GLOBALS["lang"]['Locations in this'] = 'Asukohad selles';

$GLOBALS["lang"]['log'] = 'Logi';

$GLOBALS["lang"]['Log'] = 'Logi';

$GLOBALS["lang"]['log_format'] = 'Logivorming';

$GLOBALS["lang"]['Log Format'] = 'Logivorming';

$GLOBALS["lang"]['Log Line'] = 'Logijoon';

$GLOBALS["lang"]['log_path'] = 'logitee';

$GLOBALS["lang"]['Log Path'] = 'logitee';

$GLOBALS["lang"]['log_rotation'] = 'Logi pööramine';

$GLOBALS["lang"]['Log Rotation'] = 'Logi pööramine';

$GLOBALS["lang"]['log_status'] = 'Logi staatus';

$GLOBALS["lang"]['Log Status'] = 'Logi staatus';

$GLOBALS["lang"]['Logging in'] = 'Login';

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

$GLOBALS["lang"]['Lowercase Hostname'] = 'Väiketähe masinanimi';

$GLOBALS["lang"]['Luxembourg'] = 'Luxembourg';

$GLOBALS["lang"]['MAC Address'] = 'MAC aadress';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Tootja';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Maci aadress';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS paketid';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Makedoonia';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Säilitada andmed riskihinnangute ja ravi kohta';

$GLOBALS["lang"]['maintenance_expires'] = 'Hooldusaeg lõpeb';

$GLOBALS["lang"]['Maintenance Expires'] = 'Hooldusaeg lõpeb';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Tee minu vaikimisi armatuurlaud';

$GLOBALS["lang"]['Make this install a Collector'] = 'Pane paigaldama koguja';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Malay';

$GLOBALS["lang"]['Malaysia'] = 'Malaisia';

$GLOBALS["lang"]['Maldives'] = 'Maldiivid';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Manage';

$GLOBALS["lang"]['Manage Licenses'] = 'Litsentside haldamine';

$GLOBALS["lang"]['Manage in NMIS'] = 'Halda NMISis';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Intsidentide ja mittevastavuste haldamine';

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

$GLOBALS["lang"]['Match Order'] = 'Matšikäsk';

$GLOBALS["lang"]['Match Process'] = 'Sobivusprotsess';

$GLOBALS["lang"]['match_string'] = 'Match String';

$GLOBALS["lang"]['Match String'] = 'Match String';

$GLOBALS["lang"]['Matching Attribute'] = 'Sobiva atribuudi sobivus';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Sobivad seadmed - sealhulgas OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Linuxi seadmete sobitamine';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Sobitamine toimub järgmises järjekorras:';

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

$GLOBALS["lang"]['Metropolitan area network'] = 'Suurlinna-ala võrgustik';

$GLOBALS["lang"]['Mexico'] = 'Mehhiko';

$GLOBALS["lang"]['Micronesia'] = 'Mikroneesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikroaeg';

$GLOBALS["lang"]['Microtime'] = 'Mikroaeg';

$GLOBALS["lang"]['minute'] = 'Minut';

$GLOBALS["lang"]['Minute'] = 'Minut';

$GLOBALS["lang"]['Minutes'] = 'Protokollid';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Viimasest auditist on möödunud rohkem kui';

$GLOBALS["lang"]['model'] = 'Mudel';

$GLOBALS["lang"]['Model'] = 'Mudel';

$GLOBALS["lang"]['model_family'] = 'Mudelpere';

$GLOBALS["lang"]['Model Family'] = 'Mudelpere';

$GLOBALS["lang"]['Modified'] = 'Muudetud';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Olemasoleva skripti muutmine';

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

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'ISMSi toimimise jälgimine ja mõõtmine';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Kuu';

$GLOBALS["lang"]['Month'] = 'Kuu';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Rohkem infot';

$GLOBALS["lang"]['More Secure'] = 'Turvalisem';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Täpsemat SQL-i saab kasutada atribuutide rühmitamiseks vahemikus. Allpool on näidatud SQL seadmetele, mida ei ole näha graafikus, rühmitatuna viimati nähtud kuupäevavahemike järgi.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Lisateavet silumise kohta leiate kasulikust Stack Overflow lõimest';

$GLOBALS["lang"]['Morocco'] = 'Maroko';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Tõenäoliselt Windowsi tulemüür (või kolmanda osapoole tulemüür) eitab ühenduse katset.<br/><br/>Palun logige sisse sihtmärgiks olevasse Windowsi masinasse ja kontrollige tulemüüri seadeid.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Enamik Open-AudIT on litsentseeritud GNU AGPL-iga.';

$GLOBALS["lang"]['motherboard'] = 'Emaplaat';

$GLOBALS["lang"]['Motherboard'] = 'Emaplaat';

$GLOBALS["lang"]['mount_point'] = 'Mount Point';

$GLOBALS["lang"]['Mount Point'] = 'Mount Point';

$GLOBALS["lang"]['mount_type'] = 'Mount Type';

$GLOBALS["lang"]['Mount Type'] = 'Mount Type';

$GLOBALS["lang"]['Mozambique'] = 'Mosambiik';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Peab Pingile vastama. Sisselülitamisel püüab Nmap saata ja kuulata ICMP vastust. Kui seade ei reageeri, ei toimu edasist skaneerimist.<br/>Varem ei pidanud seade vastama pingile, et Open-AudIT jätkaks skaneerimist.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Peab vastama Pingile';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Minu AntiVirus sunnib mind eitama / lubama asju';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Mu aeg on lahtises kuulamises';

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

$GLOBALS["lang"]['NOTE'] = 'MÄRKUS';

$GLOBALS["lang"]['NOTE #2'] = 'MÄRKUS #2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'MÄRKUS - Rohkem infot DateTime\'i vormingute kohta vaata siit';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'MÄRKUS - Kui taotlete allalaaditud CSV-, XML- või JSON-vormingut (kas üks mandaat või täielik kogumine), saadetakse tegelikud volitused. Mitte krüptitud string, tegelik kasutajanimi, parool, kogukonna string jne. Tundlikke üksikasju ei kuvata veebikasutajaliideses, vaid need tehakse kättesaadavaks muude vormingute kaudu. Selle eksportimise vältimiseks on saadaval konfiguratsioonielement decrypt_credentials.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'Märkus - esitatud andmete lokkisulgusid tuleks kasutada nii, nagu on (ei asendata nagu eespool).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'MÄRKUS - lihtsa tekstivolituste näitamist allpool saab vältida, kui määrata <code>decrypt_credentials</code> kuni <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nimi';

$GLOBALS["lang"]['Name'] = 'Nimi';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Nimi: nimi, mille sa sellele väljale annad. Ideaalis peaks see olema ainulaadne.';

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

$GLOBALS["lang"]['Netstat Ports'] = 'Netstati sadamad';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports kasutab pordi numbri, protokolli ja programmi kombinatsiooni. Kui kõik on kohal, siis poliitika läbib.';

$GLOBALS["lang"]['Network'] = 'Network';

$GLOBALS["lang"]['network_address'] = 'Võrguaadress';

$GLOBALS["lang"]['Network Address'] = 'Võrguaadress';

$GLOBALS["lang"]['Network Discovery'] = 'Võrguavastamine';

$GLOBALS["lang"]['network_domain'] = 'Võrgudomeen';

$GLOBALS["lang"]['Network Domain'] = 'Võrgudomeen';

$GLOBALS["lang"]['Network Types'] = 'Võrgutüübid';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Võrgutüüp on vaikimisi määratud kohtvõrgule, kuid kasutaja saab seda muuta vastavalt oma äranägemisele. Toetatud tüübid on allpool (tänu Wikipediale).<br/><br/>Võrgustikku võib iseloomustada selle füüsiline võimekus või organisatsiooniline eesmärk. Võrgu kasutamine, sealhulgas kasutaja autoriseerimine ja juurdepääsuõigused, erinevad vastavalt.';

$GLOBALS["lang"]['networks'] = 'Võrgud';

$GLOBALS["lang"]['Networks'] = 'Võrgud';

$GLOBALS["lang"]['Networks Generated By'] = 'Võrgud genereeritud';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Võrgustikke uuendatakse iga avastusega. Sellised elemendid nagu saadaval olevad IP-d ja kasutatud IP-d koos Gatewaysi, DHCP ja DNS-serveritega lisatakse leitud kujul.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Võrgud reageerivad erinevalt sõltuvalt sellest, kuidas nad on konfigureeritud. Mõned ruuterid ja/või tulemüürid võivad reageerida <i>nimel</i> IP-d teisel pool oma liideseid Open-AudIT serveriga. On üsna tavaline, et Nmap teatab SNMP-le (UDP port 161) sondi, et vastata avatud filtreeritud seadmetele, mis on olemas ja mida ei ole olemas. See on eksitav, kuna sellel IP-l ei ole seadet, kuid see lõpeb seadme kirjega andmebaasis. 99,9% ajast, see ei ole Open-AudIT või isegi Nmap, kuid võrk põhjustab seda probleemi. Nüüd, kui meil on võimalus käsitleda avatud filtreeritud porte kas avatud või suletud sadamatena, saame selle segaduse kõrvaldada. Ettevõtete kasutajatel on isegi võimalus muuta seda avastuse alusel (rohkem kui lihtsalt keskmise (klassikalise) elemendi kasutamine, nagu eespool).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Võrgud, mis kasutavad CIDR-maski';

$GLOBALS["lang"]['New Building Name'] = 'Uus hoone nimi';

$GLOBALS["lang"]['New Caledonia'] = 'Uus-Kaledoonia';

$GLOBALS["lang"]['New Floor Name'] = 'Uue korruse nimi';

$GLOBALS["lang"]['New Room Name'] = 'Uue toa nimi';

$GLOBALS["lang"]['New Row Name'] = 'Uue rea nimi';

$GLOBALS["lang"]['New Zealand'] = 'Uus-Meremaa';

$GLOBALS["lang"]['News'] = 'Uudised';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Uudiste kontroll-in iga kord, kui logite sisse uuendatud päringute ja pakettide, konfiguratsioonisoovituste, väljalasketeadete, blogipostituste ja muu jaoks.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Uudised on meie viis hoida teid kursis viimaste paranduste, teadete, päringute värskenduste, tarkvara versioonide ja muuga.<br/><br/>Te ei pea viki peal hoidma ega kontrollima uusi väljaandeid, me võime need teile saata!';

$GLOBALS["lang"]['next_hop'] = 'Järgmine hüpe';

$GLOBALS["lang"]['Next Hop'] = 'Järgmine hüpe';

$GLOBALS["lang"]['next_run'] = 'Järgmine';

$GLOBALS["lang"]['Next Run'] = 'Järgmine';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Järgmine klikk <i>Loo oma rakendus</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Seejärel klõpsake OK, seejärel klõpsake Apache 2.4 teenust ja klõpsake Restart. Tehtud!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Seejärel klõpsake parema nupuga Apache 2.4 teenust ja valige Properties, seejärel klõpsake vahekaarti Logi sisse.';

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

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap ei suuda kindlaks teha, kas port on avatud, sest pakettide filtreerimine takistab sondi jõudmist porti. Filtreerimine võib toimuda spetsiaalsest tulemüüriseadmest, ruuteri reeglitest või hostipõhisest tulemüüritarkvarast. Need sadamad frustreerivad ründajaid, sest nad annavad nii vähe teavet. Mõnikord reageerivad nad ICMP veateadetega, näiteks 3. tüüpi koodiga 13 (sihtkoht on kättesaamatu: suhtlemine on halduslikult keelatud), kuid filtrid, mis lihtsalt ei reageeri, on palju tavalisemad. See sunnib Nmapi mitu korda uuesti proovima, kui sond langeb võrgu ülekoormuse, mitte filtreerimise tõttu. See aeglustab skaneerimist dramaatiliselt.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap asetab sadamad sellesse olekusse, kui see ei suuda kindlaks teha, kas port on avatud või filtreeritud. See toimub skaneerimistüüpide puhul, kus avatud pordid ei anna vastust. Vastuse puudumine võib tähendada ka seda, et pakettfilter kukutas sondi või mis tahes vastuse, mida see esile kutsus. Nii et Nmap ei tea kindlalt, kas port on avatud või filtreeritakse. UDP, IP-protokoll, FIN, NULL ja Xmas skaneerivad porte niimoodi klassifitseerida.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Nmap-ajastuse üksikasjad on toodud lingitud lehekülje allosas';

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

$GLOBALS["lang"]['No devices are in the database.'] = 'Andmebaasis pole ühtegi seadet.';

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'Mitte ükski';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolki saar';

$GLOBALS["lang"]['Normal'] = 'Normaalne';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Põhja-Mariaanid';

$GLOBALS["lang"]['Norway'] = 'Norra';

$GLOBALS["lang"]['Norwegian'] = 'Norra';

$GLOBALS["lang"]['Not Applicable'] = 'Ei kohaldata';

$GLOBALS["lang"]['Not Checked'] = 'Kontrollimata';

$GLOBALS["lang"]['Not Equals'] = 'Ei võrdu';

$GLOBALS["lang"]['Not In'] = 'Mitte';

$GLOBALS["lang"]['Not Like'] = 'Ei meeldi';

$GLOBALS["lang"]['Not Set'] = 'Pole paika pandud';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Mitte iga arvuti ei suuda edukalt täita võrdlusalust. Oleme näinud, et mõned katsed ebaõnnestuvad põhjustel, mis ei ole meie kontrolli all. Logid peaksid aitama suunata teid nende esemete õiges suunas.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Ei ole (komadega eraldatud) nimekirjas';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Ei kasutata tavaliselt. Kui see on seadistatud, nõuab see, et seadmel oleks avatud port (vastavalt Scan Optionsile), et seda loetaks reageerivaks. MAC-aadressi, arp-vastust või ping-vastust ei loeta vastamiseks piisavaks. Kasulik, kui ruuter või tulemüür Open-AudIT serveri ja siht-IP vahel reageerib pordi skaneeringutele IP-de nimel.';

$GLOBALS["lang"]['Note'] = 'Märkus';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Märkus - vanema valimine tagab automaatselt juurdepääsu oma lastele (kuigi seda siin ei näidata).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Pange tähele, et 100 seadme ettevõtluslitsents ei sisalda toetust.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Pange tähele, et võib-olla peate skripti käivitama';

$GLOBALS["lang"]['Notes'] = 'Märkmed';

$GLOBALS["lang"]['notes'] = 'Märkmed';

$GLOBALS["lang"]['Notice'] = 'Teate';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'november';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Nüüd, kui tellite kordustellimuse ID, klõpsake kõiki teenuseid, kordustellimusi ja kopeerige see.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Nüüd peame pakkuma Azure Active Directory rakendusele juurdepääsu teie tellimusele.<br/><br/>Klõpsake ressursigruppidel ja seejärel ressursigrupil, millele soovite, et teie Azure Active Directory rakendusel oleks juurdepääs.<br/><br/>Klõpsa Lisa. Roll peaks olema panustaja ja seejärel otsima rakendust (Open-AudIT). Siis klõpsa Salvesta.<br/><br/>Nüüd on rakendusel juurdepääs tellimusele, nii et saame teha API-kõnesid. API kõnesid küsitakse rakenduse, mitte teie kasutaja nimel.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'Tellimus';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'operatsioonisüsteemide pered';

$GLOBALS["lang"]['OS Family'] = 'OSi perekond';

$GLOBALS["lang"]['OS Group'] = 'OS Group';

$GLOBALS["lang"]['OUTPUTS'] = 'VÄLJUNDID';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Objekti identifikaator';

$GLOBALS["lang"]['Object Ident'] = 'Objekti identifikaator';

$GLOBALS["lang"]['Obtain top management support'] = 'Tippjuhtkonna toetuse saamine';

$GLOBALS["lang"]['October'] = 'Oktoober';

$GLOBALS["lang"]['Offset'] = 'Offset';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'On';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Windowsis kasutab Open-AudIT WMI-d, kuna see on peamine auditeerimismeetod. Windowsil on kurikuulus maine, kui tegemist on kaugjuhitava WMI-ga. See kipub kas <i>tööta</i> Või mingi müstiline objekt sihtmärgil nõuab muutmist. Kui teil on raskusi Windowsi kaugarvutite auditeerimisega, oleme loonud skripti nimega test_windows_client.vbs. Skripti saab käivitada <strong>kohapeal</strong> asjaomasel masinal pärast sisselogimist kasutajana, keda Open-AudIT kasutab auditi läbiviimiseks. Stsenaarium teeb <strong>muutusteta</strong> sihtseadmetesse. See kontrollib enamikku (mitte kõiki) allpool toodud üksusi ja genereerib erinevate omaduste jaoks PASS-, FAIL- ja INFO-silte. Märkus - kui teie sihtsüsteemi auditeeritakse õigesti, ei tohiks te seadeid muuta. Mõned allpool ei eksisteeri Windowsi arvutites, mida on võimalik auditeerida, ja mõned on olemas. Muuda seadeid ainult siis, kui teie avastused teatud arvutites ei tööta ettenähtud viisil.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Ülesannete nimekirja lehel klõpsake <i>Lisa uus</i> nupp ülesande seadistamiseks.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Väljakul <i>Match String</i> Peaksite esitama tarkvara nime, mida soovite jälgida. Protsentuaalset märki (%) saab vajadusel kasutada metamärgina.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Järgmisel lehel saate valida Access Keys ja näha oma võtit või luua uue võtme.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Sihtitud Windows PC-l käivitage DCOM-utiliit ja kontrollige (või määrake) alltoodud atribuudid. Start -> Käivitage, sisestage DCOMCNFG ja vajutage OK. See avab DCOMCNFG akna.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Üleval paremal (menüüriba all) näete mitut nuppu. Need võimaldavad valida teise armatuurlaua, määrata aktiivse armatuurlaua oma koduleheks (kui see pole veel olemas) ja muuta aktiivset armatuurlauda (kui teil on selleks luba).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'On-Premise, Not Cloud';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Kui lisaväli on loodud, saab seda kasutada päringutes ja rühmades nagu iga teist andmebaasi atribuuti.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Pärast kommenteerimist teie sertifikaat valideeritakse, kuid see võib ka ebaõnnestuda, kui kasutate ise allkirjastatud sertifikaate ja pole oma serverit õigesti seadistanud.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Kui skript on käivitatud sihtmärgil, peaks skript ise kustutama.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Kui need esialgsed päringud (snmp, ssh, wmi) on lõpetatud, kui seadet toetavad auditiskriptid (Windows, Linux, OSX, AIX, HP-UX, Solaris ja ESXi), kopeeritakse õige auditiskript sihtmärgile ja täidetakse. Auditi skript ise kustutatakse pärast valmimist. Tulemus salvestatakse sihtmasinale XML-failina. Seejärel hangib Open-AudIT server tulemusefaili töötlemiseks ja kustutab tulemusfaili sihtmärgil. Asukohta, kuhu auditiskript sihtseadmes kopeeritakse (vähemalt SSH auditite puhul), saab seadistada, redigeerides kirjet Discover_linux_script_ directorory config. Vaikimisi on selleks määratud /tmp/. See võib vajada muutmist, kui /tmp-il on noexec set. Tulemusfail töödeldakse seejärel ja seadme üksikasjad uuendatakse Open-AudIT-is.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Kui klõpsad nupule Käivita, käivitab Open-AudIT protsessi avastamise algatamiseks ja tagastab kasutaja avastamisandmete lehele. Äsja loodud protsess võtab seadistatud avastamisvalikud ja käivitab Nmap-käsud, et määrata kindlaks skaneeritavate IP-aadresside esialgne nimekiri (või päringud Active Directory, kui seda tüüpi kasutatakse). Iga skaneeritav IP paigutatakse järjekorda. Kui esialgne protsess on lõppenud (ja ootejärjekorras skaneeritakse IP-d), kudetakse mitu protsessi, et iga IP-d paralleelselt edasi skaneerida. See protsesside arv on seadistatav seadistuses, muuda atribuuti <i>järjekorra_ limit</i>. Vaikimisi on selleks määratud 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Kui olete oma seadmed redigeerimiseks valinud, klõpsake tabeli üleval paremal asuvat pliiatsi nuppu.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Kui olete seda teinud, püüab Open-AudIT kontrollida teie kasutaja sisselogimise üksikasju konfigureeritud autentimismeetodi alusel. kui kasutajal on kehtiv volikiri ja <code>use_authorisation</code> Määratud, Open-AudIT küsib nimekirja rühmadest, kuhu kasutaja kuulub. Kui kasutaja kuulub Open-AudIT rollide ja orgide vastavatesse rühmadesse, rakendatakse sellele kasutajale neid rolle ja orge.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Kui olete loonud baasdefinitsiooni, saate selle ajastada teatud seadmete rühma vastu.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Kui teil on need teemad, avatud auditis Ettevõtlus, mida saate menüüsse minna -> Avasta -> Pilved -> Loo Pilved, vali <i>Amazon AWS</i> trükkida ja kleepida. Valmis.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Kui teil on need teemad, avatud auditis Ettevõtlus, mida saate menüüsse minna -> Avasta -> Pilved -> Loo Pilved, vali <i>Microsoft Azure</i> trükkida ja kleepida. Valmis.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Kui teil on oma pilveandmed, on see lihtsalt uue pilve loomine ja avastuse käivitamine - või esimeste / tulevaste avastuste planeerimine. Veenduge, et teil on ka oma pilveautomaatide sisselogimiseks vajalikud volitused ja see kõik on teie jaoks tehtud nagu tavaline avastus. Pilve volitused';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Üks <code>3x2</code>, <code>4x2</code>, <code>4x3</code> või <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Üks Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Üks arendamisest, katastroofide taastamisest, hindamisest, eeltootmisest, tootmisest, katsetamisest, koolitusest, kasutajate vastuvõtu testimisest';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Üks eraldatud, delegeeritud, planeeritud, reserveeritud, jaotamata, tundmatu, juhtimata. Eraldatud vaikeväärtused.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Kumbagi <code>active directory</code> või <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Üks: viirusetõrje, varukoopia, tulemüür, heakskiidetud, keelatud, ignoreeritud või muu.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Veel üks punkt, millega tuleb ettevaatlik olla - veenduge, et kasutate oma LDAP- i hostinime (või fqdn) Server, mis sobib sellega, mis on sertifikaadis (mitte ainult LDAP serverite IP-aadress), kui luuakse LDAP kirje Open-AudIT-is.';

$GLOBALS["lang"]['Online Documentation'] = 'Veebidokumentatsioon';

$GLOBALS["lang"]['Open'] = 'Avage';

$GLOBALS["lang"]['Open Data'] = 'Avaandmed';

$GLOBALS["lang"]['Open Source'] = 'Avatud lähtekood';

$GLOBALS["lang"]['Open-AudIT'] = 'Open AudIT';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open AudIT Ühenduse lähtekood on saadaval GitHubis. Teid julgustatakse kontrollima mis tahes koodi, mille suhtes teil on probleeme, ja kuna see on avatud lähtekoodiga - teid julgustatakse ka küsima meilt mis tahes probleemide kohta, mis teil on või mis tahes järeldustest aru andma. Meil on alati rohkem kui hea meel aktsepteerida koodi sissemakseid, haavatavuse aruandeid või isegi lihtsaid küsimusi. Me oleme siin, et aidata.<br/><br/>Auditi skriptid ise (Windows, Linux, MacOS, et al) on tahtlikult kirjutatud loetavas emakeeles shelliskriptis (VBScript Windowsile, Bash * nix). Saate täpselt näha, milliseid käske kasutatakse. Saate eemaldada kõik käsud, mida te tunnete, et te ei vaja. Võite paluda kolmandal osapoolel kontrollida koodi teile ja (kui soovite) teatada mis tahes leidudest.<br/><br/>Open AudIT Enterprise täidab Open-AudIT kogukonna täiendavaid ärifunktsioone. See on lisatud ühe kompileeritud failina, millel ei ole väliseid sõltuvusi. Kui ettevõte ise täidab funktsiooni(sid), kui olete seotud mis tahes probleemidega Firstwave on hea meel töötada läbi nende teiega - lihtsalt küsida! Proovige seda teise kommertstarkvara müüjaga!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open- AudIT seadmete valik';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open AudIT Ettevõttel on võimalus valida eelnevalt kindlaks määratud avastamisskaneerimise valikute loendist ja kohandada ka individuaalseid võimalusi avastamise kohta.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Kõrgetasemeline paindlik avastamis- ja auditilahendus suurtele võrkudele. Kõik omadused Professional Plus: Baselines, File Auditing, Cloud Discovery, Rack Management, konfigureeritav rollipõhine juurdepääsu juhtimine sealhulgas Active Directory ja LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'OpenAudIT välja nimi';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Avatud audio litsentsid';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open- AudIT valikud';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT Professional ja Enterprise sisaldavad täiustatud aruandluse funktsioone, sealhulgas ajapõhiseid, ajaloolisi ja muti-query-põhiseid aruandlusfunktsioone mitmes vormingus.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open AudIT Professionaalil on võimalus valida eelnevalt määratletud avastamise skaneerimise valikute loendist iga avastuse kohta.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Open-AudIT Professional. Maailm';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Ava-Aud IT-d saab konfigureerida LDAP-serverite (Microsoft Active Directory ja/või OpenLDAP) kasutamiseks kasutaja autentimiseks ja autoriseerimiseks ning lisaks kasutajakonto loomiseks Open-AudIT-is, kasutades LDAP-grupi liikmelisusel põhinevaid määratud rolle ja orge. Kasutada võib ka';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Ava-Aud Seda saab käivitada teie serveris teie andmekeskuses. See ei vaja üldse juurdepääsu internetile. Isegi Linuxi installi, kus me kasutame oma eelduste täitmiseks jaotuspaketi haldurit, saate ettevõttesisese ja turvameeskonna poolt heaks kiidetud paketihoidla abil eitada.<br/><br/>Ava-Aud See ei salvesta teie andmeid pilves. Isegi litsentsimisteavet saab anda, ilma et oleks vaja juurdepääsu internetile Open-AudIT serverist.<br/><br/>Muidugi, see on lihtsam lubada seda juurdepääsu interneti alla laadida pakette (sh turvaparandusi) oma jaotus, kuid see on kuni teie ja oma turbepoliitika. Open-AudIT ei vaja internetti.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT saab alla laadida, parsida ja kasutada NIST CVE haavatavuse aruandeid.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Ava-Aud See võib esineda ühes paljudest keeltest. Kuidas seda parandada?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Ava-Aud IT võib salvestada teavet täiendavates väljades, mis on seotud iga seadmega.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT võib autentimismeetodina kasutada Microsoft Entrat (varem tuntud kui Microsoft Azure Active Directory). See tähendab, et teie kasutaja saab Open-AudIT-is klõpsata Logonile, kasutades sisselogimislehel Entra nuppu ja kasutada sisselogimiseks oma Entra volitusi. See kasutaja peab olema juba olemas Open-AudIT-is (ja olema määratud)';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudIT võib kasutada OKTA-d autentimismeetodina. See tähendab, et teie kasutaja saab Open-AudIT-is klõpsata Logonile, kasutades sisselogimislehel OKTA nuppu ja kasutada sisselogimiseks oma OKTA volitusi. See kasutaja peab juba olemas Open-AudIT (ja määratud Rollid ja Orgs), kuid ei pea meeles pidama eraldi komplekti sisselogimise volitusi.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT on varustatud paljude sisseehitatud päringutega. Kui vajate konkreetset päringut ja ükski eelnevalt pakitud päringutest ei vasta teie vajadustele, on üsna lihtne luua uus ja laadida see Open-AudIT-i käivitamiseks.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT-il on JSON Restful API, mida kasutatakse nii veebiliideses kui ka JSON-päringute kaudu.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Ava-Aud IT-l on granuleeritud lubade süsteem, et teha kindlaks, mida saab Open-AudIT-i kasutaja teha ja milliseid üksusi ta saab seda teha. Open-AudIT võib olla täiesti iseseisev või kasutada autentimiseks ja / või autoriseerimiseks Active Directory või OpenLDAP.<br/><br/>See sõltub täielikult Open-AudITi administraatorist, kuidas nad sooviksid, et rollipõhine juurdepääsukontroll töötaks.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Ava-Aud Sellel on võimas muutuste tuvastamise mootor. Kõik lisatud, eemaldatud või muudetud seadme atribuudid tuvastatakse ja salvestatakse. Nendest muudatustest saab teatada ja asjakohased andmed kinnitada, mida teie ettevõtte muutmise ja vabastamise protsessist oodatakse.<br/><br/>Seadme auditeerimisel jagatakse atribuudid osadeks, mis vastavad andmebaasi tabelitele.<br/><br/>Igal seadmel (arvuti, ruuter, printer jne) on kirje <code>devices</code> laud. Iga kirje seadmete tabelis on <code>id</code> veergu. See väärtus on ainulaadne - see on automaatselt kasvav ID.<br/><br/>Kui auditi tulemust töödeldakse, on iga osa iga elemendi audititulemus võrreldes sellega, mis on andmebaasis.<br/><br/>Iga jaotise puhul, kui võtmeveergudes (vt allpool olevat tabelit) on identsed väärtused, loetakse see juba paigaldatud ja <code>last_seen</code> atribuut uuendatud. Change_ logi kirjet ei looda.<br/><br/>Kui mõni võtmeveergudest ei klapi, loetakse see uueks atribuudiks ja lisatakse. A <code>change_log</code> kirje luuakse, kui seadmel on juba teisi tabelis olevaid atribuute.<br/><br/>Auditi töötlemise lõppedes loetakse kõik andmebaasi elemendid, mida ei ole uuendatud (või sisestatud), puuduvaks. Theo <code>current</code> Selle elemendi atribuut on määratud <i>n</i> ja luuakse kirje change_log.<br/><br/>Nii saame kindlaks teha, kas midagi on parajasti paigaldatud - praegune veerg on <i>y</i>.<br/><br/>Me saame kindlaks teha, millal midagi algselt avastati - <i>first_seen</i>.<br/><br/>Saame kindlaks teha, kas midagi paigaldati pärast esialgset auditit - esmakordselt nähtav on komponentide ja seadmete tabelites erinev.<br/><br/>Me saame kindlaks teha, kas midagi ei ole praegu installitud, kuid varem oli - praegune = <i>n</i>.<br/><br/>Me saame kindlaks teha, millal viimati tuvastasime elemendi - last_see.<br/><br/>Igal ajahetkel saame kindlaks teha, mis oli süsteemis - kasutades audit_log tabelit ja valides asjakohased komponendid, mis põhinevad first_see ja last_see.<br/><br/>Iga osa ja sellele vastavad võtmeveergud on allpool.<br/><br/>Märkus: Siin on mõned erandid, mida on üksikasjalikult kirjeldatud allpool.<br/><br/>*1 - Võrgukaartide puhul, kui arvuti on VMware Esx masin, kasutab ta ka net_index ja ühenduse veerud.<br/><br/>*2 - vaheseinte puhul, kui arvuti on AIX-masin, kasutame partitsiooni nime.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT on programm, mis on mõeldud teie IT ja sellega seotud varade üksikasjade ja konfiguratsiooni jälgimiseks ja aruandluseks. OpenAudIT oskab öelda <i>Mis on sinu võrgus?</i>, kuidas see on konfigureeritud ja kas on toimunud muudatusi. Open-AudIT pakub klanitud, paindlikku ja hõlpsasti kasutatavat platvormi seadmete avastamiseks, IT-auditiks ja varude haldamise automatiseerimiseks otse kastist.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Ava-Aud See võimaldab hõlpsasti redigeerida mitme seadme atribuute korraga.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Ava-Aud IT vajab konkreetseid kataloogiõigusi failide loomiseks, tulemuste üleslaadimiseks jne. Palun määrake allpool.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT pakub palju sisseehitatud päringuid ja muudab oma loomise lihtsaks.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Ava-Aud IT-laevad sisseehitatud rollidega admin, org_admin ja kasutaja jaoks.<br/><br/>Üldiselt kasutaja, kes on administraator Open-AudIT rakendus ise peaks olema admin ja võimalik org_admin rollid.<br/><br/>Kasutajal võib olla mitu rolli. Luba rakendatakse kõige lubavamal tasemel - IE, kui kasutajal on kasutaja ja org_admin rollid, saavad nad asukohti luua, sest org_admin annab selle loa, kuigi kasutaja roll seda ei tee.<br/><br/>Admin roll võimaldab juurdepääsu kogudele, nagu konfiguratsioon, andmebaas, rühmad, ldap serverid, logid, päringud ja rollid. Globaalsed elemendid, mis mõjutavad kogu rakendust.<br/><br/>Org_admin võimaldab tavaliselt luua, lugeda, värskendada ja kustutada toiminguid mis tahes kollektsioonis, mis sisaldab veergu org_id. Peaaegu kõik andmed, välja arvatud mõned eespool nimetatud kogud, sisaldavad <code>org_id</code> veergu.<br/><br/>Kasutajaroll võimaldab üldjuhul lugeda ainult kõiki kirjeid, millel on org_id veerg.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Ava-Aud IT-laevad sisseehitatud rollidega admin, org_admin ja kasutaja jaoks.<br/><br/>Üldiselt kasutaja, kes on administraator Open-AudIT rakendus ise peaks olema admin ja võimalik org_admin rollid.<br/><br/>Kasutajal võib olla mitu rolli. Luba rakendatakse kõige lubavamal tasemel - IE, kui kasutajal on kasutaja ja org_admin rollid, saavad nad asukohti luua, sest org_admin annab selle loa, kuigi kasutaja roll seda ei tee.<br/><br/>Admin roll võimaldab juurdepääsu kogudele, nagu konfiguratsioon, andmebaas, rühmad, ldap serverid, logid, päringud ja rollid. Globaalsed elemendid, mis mõjutavad kogu rakendust.<br/><br/>Org_admin võimaldab tavaliselt luua, lugeda, värskendada ja kustutada toiminguid mis tahes kollektsioonis, mis sisaldab veergu org_id. Peaaegu kõik andmed, välja arvatud mõned ülalmainitud kogud, sisaldavad veergu org_id.<br/><br/>Kasutajaroll võimaldab üldjuhul lugeda ainult kõiki kirjeid, millel on org_id veerg.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open-AudIT laevad mitme eelnevalt konfigureeritud armatuurlauaga. Kui olete professionaalne kasutaja, saate valida neist kahe vahel ja seada selle sisselogimisel vaikeleheks. Kui olete Enterprise\'i kasutaja, saate valida mitte ainult viie eelkonfigureeritud juhtpaneeli vahel, vaid teil on ka võimalus luua oma.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open-AudIT peaks olema installitud 64-bitisesse Windowsi <strong>Server</strong> ainult süsteemid. Windows 10 ja Windows 11 on <strong>ei</strong> toetas.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT kasutab oma Discovery funktsioonis Nmapi. Nmap-sondid avatud portide jaoks. Ideaalis peaksid seadmed reageerima avatud töösadamatele. Seadmed ei reageeri sellele sageli. Erinevad vastused on esitatud allpool.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT kasutab oma Discovery funktsioonis Nmapi. Ilma Nmapita ei tööta Open-AudIT korralikult. Iga Open-AudIT install eeldab, et Nmap on installitud ja testib seda ka Discovery veebilehtedel. Rohkem infot Open AudIT ja Nmap kohta leiate siit';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT kasutab oma Discovery funktsioonis Nmapi. Ilma Nmapita ei tööta Open-AudIT korralikult. Iga Open-AudIT install eeldab, et Nmap on installitud ja testib seda Discovery veebilehtedel.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Ava-Aud IT kasutab teie seadmetele juurdepääsuks volitusi. Need on krüpteeritud ja salvestatud, nagu te ootate.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT on kirjutatud inglise keelt kõneleva austraallase poolt. Kõik, mis on esitatud taotluses, kasutab ingliskeelset sõnastust. Kuid Open-AudIT on alati toetanud mitut keelt kuvamiseks. Need tõlked ei ole alati õiged, sest arendajad ei räägi emakeelena iga pakutava tõlke keelt.<br/><br/>Mida teha, kui midagi on tõlkes valesti?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap on paigaldatud';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Avad tugipileti?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap kasutaja Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap kasutaja Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap kasutaja liikmelisuse atribuut';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap kasutaja liikmelisuse atribuut';

$GLOBALS["lang"]['open|filtered'] = 'Open|filtreeritud';

$GLOBALS["lang"]['Open|filtered'] = 'Open|filtreeritud';

$GLOBALS["lang"]['Operating System'] = 'Operatsioonisüsteem';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Operatsioonisüsteemi pere sisaldab';

$GLOBALS["lang"]['Operating Systems'] = 'Operatsioonisüsteemid';

$GLOBALS["lang"]['Operators'] = 'Operaatorid';

$GLOBALS["lang"]['optical'] = 'Optiline';

$GLOBALS["lang"]['Optical'] = 'Optiline';

$GLOBALS["lang"]['Optimized'] = 'Optimeeritud';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Võimalus # 1 - Andmete muutmine';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Variant # 2 - Muuda tõlkefaili';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Vabatahtlik agendipõhine auditeerimine';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Vabatahtlik versioon, nagu on auditeerinud Open-AudIT. Protsentuaalse märgi% kasutamine metamärgina.';

$GLOBALS["lang"]['options'] = 'Valikud';

$GLOBALS["lang"]['Options'] = 'Valikud';

$GLOBALS["lang"]['Options, options, options'] = 'Valikud, valikud, valikud';

$GLOBALS["lang"]['Or'] = 'Või';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Või valige allpool olevatest väljadest.';

$GLOBALS["lang"]['org_descendants'] = 'Orgide järeltulijad';

$GLOBALS["lang"]['Org Descendants'] = 'Orgide järeltulijad';

$GLOBALS["lang"]['org_id'] = 'Orgi ID';

$GLOBALS["lang"]['Org ID'] = 'Orgi ID';

$GLOBALS["lang"]['Organisation'] = 'Organisatsioon';

$GLOBALS["lang"]['organisation'] = 'Organisatsioon';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisatsiooni järeltulijad';

$GLOBALS["lang"]['Organisations'] = 'Organisatsioonid';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organisatsioonid saavad laiendada ja parandada detailide taset, mis on salvestatud iga avastatud seadme vastu, kasutades kohandatud väljasid, ja avatud tuum võimaldab hõlpsat integreerimist CMDB-sse, ürituste haldamisesse ja piletimüügisüsteemidesse.';

$GLOBALS["lang"]['orgs'] = 'Orgid';

$GLOBALS["lang"]['Orgs'] = 'Orgid';

$GLOBALS["lang"]['Orgs Name'] = 'Orgide nimi';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgs in Open-AudIT on võtmeelement. Kasutajal on nii esmane Org kui ka Orgide nimekiri, millele nad pääsevad juurde. Kasutaja ühendab selle määratud rollide loendiga, mis määratleb, milliseid toiminguid nad saavad teha Orgidele määratud üksustega. Kasutajate kombinatsioon <i>orgid</i> ja <i>rollid</i> Määrake kindlaks, mida nad saavad ja mida nad ei saa teha avatud auditooriumis.<br/><br/>Enamik Open-AudIT elemente on määratud org. Seadmed, asukohad, võrgud jne.<br/><br/>Orgid võivad saada lapsorge. Mõtle organisatsiooni diagrammi (puu) struktuurile. Kui kasutajal on juurdepääs konkreetsele Orgile, on neil enamasti (mitte alati) juurdepääs ka sellele Orgsi järeltulijatele.';

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

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Peale selle piirangu saate vabalt valida atribuute vastavalt vajadusele. Hea mõte on kasutada menüüd';

$GLOBALS["lang"]['Others'] = 'Teised';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Meie vaikimisi integratsioon võimaldab ka avastamist mis tahes väliselt tarnitud seadmetes. Nii et me saadame vaikimisi integratsiooni vaikimisi avastamise kastist välja. Need kasutavad vaikimisi sobitamise reegleid, kuid võimaldavad ka sobitamist IP-aadressil.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Meie näidetes kasutatakse <i>tüüpi</i> veergu.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Meie raamistik laadib failid siia töötlemiseks, seejärel kustutab need. Kontrollige esitatud auditi tulemusi jne.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Meie eesmärk esialgse integratsioonide vabastamisega oli spetsiaalselt NMIS-i jaoks Open-AudIT integratsiooni jaoks. <i>tööta</i>. Kui kasutate Linuxi programme, saate integratsiooni teostamiseks sõna otseses mõttes klõpsata ühte nuppu. Rohkem pole vaja midagi. Seda öeldes on integratsioon ise äärmiselt konfigureeritav - nii et kui midagi ei ole teie eelistuse järgi, saab seda kergesti muuta.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Meie uus funktsioon nimega haavatavused annab teile võimaluse kiiresti kindlaks teha, kas mõni seade mõjutab mis tahes CVE (Common Vulnerability Exposure) - aga kuidas?<br/><br/>FirstWave tarbib pidevalt Nist NVD voo väljundit. Me võtame selle ja rakendame mõningaid piiranguid, seejärel eemaldame mõjutatud programmid ja koostame SQL-päringu aruandluseks. Teie Open-AudIT eksemplar jõuab FirstWave\'i ja nõuab regulaarselt uusi haavatavusi. Kui see saab uue haavatavuse rekordi, käivitatakse see andmebaasi vastu ja tulemus salvestatakse. Iga kord, kui seadet töödeldakse, täidetakse kõik sobivad haavatavused uuesti ja tulemus salvestatakse. See tähendab, et haavatavuse loendit vaadates ei pea me kõiki mõjutatud seadmeid arvutama - tulemus on meil juba olemas. Kui vaatate individuaalset haavatavuse rekordit, arvutame selle ainulaadse haavatavuse tulemuse tõepoolest ümber.<br/><br/>Nii et sa oled alati kursis!<br/><br/>Lisaks sellele arvutame ka kõigi seadmete kõigi haavatavuste tulemuse iga päev (tavaliselt vaiksel ajal, ütleme 2:00).<br/><br/>Open-AudIT puhul lubame teil valida, millistest müüjatest te hoolite. See tähendab, et ei ole mõtet hankida haavatavuse andmeid müüjalt, kelle tarkvara te ei kasuta või olete installinud. Vaikimisi on meie müüjate nimekiri Adobe, Apple, Cisco, Google, Microsoft, Mozilla ja Redhat.<br/><br/>See kõik kõlab väga lihtsalt, kuid kulisside taga on <b>palju</b> toimub. Näiteks sisaldab CVE kirje mõjutatud tarkvara loendit - kuid need tarkvara nimed ei vasta sellele, mida me arvuti auditeerimisel saame. Hea näide on Apache. Tavaliselt ütleb CVE kirje, et mõjutatud tarkvara on http_server. Tegelikult ilmub see apache2 (Ubuntu), httpd (Redhat), Apache HTTP server (Windows) - ja teised. Niisiis, me peame kõigepealt kindlaks tegema, milline on selle programmi tegelik nimi, mida me arvutilt küsides saame, ja seal võib olla mitu nime. Pärast seda peame parsima CVE rekordi ja looma sobiva SQL-i avalduse. Võimaldab kasutada mitut programminime, nagu eespool kirjeldatud, ning mitut versiooni, versioonivahemikku ja isegi mitut erinevat tarkvara (näiteks Thunderbird ja Firefox ühes CVE-s). Ja teie Open-AudIT-i näide peab võtma selle ja rakendama ka Orgsi filtreerimist. Ja see on vaid üks CVE. Kuidas määrata, millised CVE-d teil on ja mida ei ole? Mida teha, kui lisada müüja hiljem nimekirja? Nii palju asju, mida kaaluda!<br/><br/>Lisaks tavapärasele aruandlusele on meil ka mõned uued vidinad, mis põhinevad haavatavuste andmetel.';

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

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec on SysInternal/Microsofts populaarse PsExec-programmi vabalt levitatav taasrakendus. PAExeci eesmärk on PsExeci asendamine, nii et käsurea kasutamine on identne, toetatud on ka täiendavaid valikuid. See teos oli algselt inspireeritud Talha Tariqs RemComist.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'POSTandmed';

$GLOBALS["lang"]['Package'] = 'Pakk';

$GLOBALS["lang"]['packages'] = 'Pakke';

$GLOBALS["lang"]['Packages'] = 'Pakke';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Pakke kasutatakse sellistest asjadest teatamiseks nagu <i>keelatud tarkvara</i>, AntiVirus serverites jne<br/><br/>Open-AudIT pakub vidinaid, mis tuginevad ka tarnitud remontidele, et määrata viirusetõrje, tulemüüri ja muu tarkvara staatus.';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestiina territoorium';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Paapua Uus-Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Parameters'] = 'Parameetrid';

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

$GLOBALS["lang"]['Permission'] = 'Luba';

$GLOBALS["lang"]['Permission Required'] = 'Nõutav luba';

$GLOBALS["lang"]['permissions'] = 'Load';

$GLOBALS["lang"]['Permissions'] = 'Load';

$GLOBALS["lang"]['Persian'] = 'Pärsia';

$GLOBALS["lang"]['Personal Area Network'] = 'Personal Area Network';

$GLOBALS["lang"]['Personal area network'] = 'Isiklik alavõrk';

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

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Pie diagrammid peavad tagastama nime või minu_nimi, kirjeldus või minu_kirjeldus ja arv.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Pingsihtmärk';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairni saared';

$GLOBALS["lang"]['placement'] = 'Paigutus';

$GLOBALS["lang"]['Placement'] = 'Paigutus';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Siseauditite kavandamine ja läbiviimine';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Palun kasutage Open-AudIT administraatori logo ja uuendage andmebaasi.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Palun logige sisse ja muutke ASAP-i.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Palun logige sisse Open-AudIT serverisse (kas Windows või Linux) ja käivitage <code>nslookup IP_ADDRESS_OF_TARGET</code> käsureas või shellis. See peab olema võimeline IP-d nimetama.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Palun arvestage, et valitud kast tühistab teksti sisendkasti.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Palun vaadake KKK-d';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Palun saatke kõik kolm faili oma tugikontaktile Opmantekis ja kirjeldage oma probleemi.';

$GLOBALS["lang"]['Please set using'] = 'Palun määrake';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Palun külastage kodulehte aadressil';

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

$GLOBALS["lang"]['Polish'] = 'Poola';

$GLOBALS["lang"]['Polite'] = 'Viisakas';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Lisage allpool toodud väärtused:';

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

$GLOBALS["lang"]['Portuguese'] = 'Portugali';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugali (Brasiilia)';

$GLOBALS["lang"]['position'] = 'Asukoht';

$GLOBALS["lang"]['Position'] = 'Asukoht';

$GLOBALS["lang"]['Post-Certification'] = 'Sertifitseerimisjärgne sertifitseerimine';

$GLOBALS["lang"]['postcode'] = 'Postkood';

$GLOBALS["lang"]['Postcode'] = 'Postkood';

$GLOBALS["lang"]['power_circuit'] = 'Toitevool';

$GLOBALS["lang"]['Power Circuit'] = 'Toitevool';

$GLOBALS["lang"]['power_sockets'] = 'Toitepistikud';

$GLOBALS["lang"]['Power Sockets'] = 'Toitepistikud';

$GLOBALS["lang"]['Predictable'] = 'Ettearvatav';

$GLOBALS["lang"]['Preferences'] = 'Eelistused';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Valmistuge ümbersertifitseerimiseks iga 3 aasta tagant';

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

$GLOBALS["lang"]['Privacy Protocol'] = 'Privaatsusprotokoll';

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

$GLOBALS["lang"]['Professional'] = 'Professionaalne';

$GLOBALS["lang"]['profile'] = 'Profiil';

$GLOBALS["lang"]['Profile'] = 'Profiil';

$GLOBALS["lang"]['program'] = 'Programmi';

$GLOBALS["lang"]['Program'] = 'Programmi';

$GLOBALS["lang"]['Properties'] = 'Omadused';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Omanduslik. Kui soovite muuta HighChartsi, võib teil olla vaja';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'kaitseb konfidentsiaalsust, terviklikkust ja teabe kättesaadavust;';

$GLOBALS["lang"]['protocol'] = 'Protokoll';

$GLOBALS["lang"]['Protocol'] = 'Protokoll';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Esitage kirjeldus ja valige ja aegub kestus.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Anna nimi - me alandlikult soovitame avatud audIT 😀, kuid võite nimetada seda, mida soovite.<br/>Open-AudIT vormilt kopeerige <i>URI ümbersuunamine</i> põllule ja kleepida <i>Sisselogimise URId ümbersuunamiseks</i> väljakul.<br/>Registreerumise ümbersuunamise URI-d on valikulised, kuid soovi korral võite kasutada avatud auditit/indeksit. php/logout oma Open-AudIT serveritega http aadress, nagu kuvatõmmis.<br/>Tavaliselt Open AudIT URL näeb välja nagu';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Kui teil on õiged volitused, töötab Device Seed Discovery järgmiselt.';

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

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Päringud on Open-AudITi oluline osa. Need võimaldavad teil saada sisukat teavet kõigist seadme andmetest, mida olete avastanud. Koos kokkuvõtete ja rühmadega pakuvad nad võimsat mehhanismi olulise teabe hankimiseks.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Gruppide päringud peavad valima ainult';

$GLOBALS["lang"]['Query'] = 'Päring';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Atribuudist Active Directory küsitakse kõigepealt kasutaja tööühiku määramiseks.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Kasutaja tööühiku määramiseks küsige teiselt atribuudilt Active Directory.';

$GLOBALS["lang"]['queue'] = 'Järjekord';

$GLOBALS["lang"]['Queue'] = 'Järjekord';

$GLOBALS["lang"]['Queue Limit'] = 'Järjekorrapiirang';

$GLOBALS["lang"]['Queued Device Audits'] = 'Järjekorras seadmete auditid';

$GLOBALS["lang"]['Queued IP Scans'] = 'Järjekorras IP skannimine';

$GLOBALS["lang"]['Queued Items'] = 'Järjekorras olevad elemendid';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC Active Directory ja OpenLDAP jaoks';

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

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Rada haldamine ja aruandlus';

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

$GLOBALS["lang"]['Read through the log file at'] = 'Logifaili lugemine aadressil';

$GLOBALS["lang"]['Received'] = 'Sain kätte';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Viimasel ajal on meilt küsitud, kas teie arvates on Open-AudIT turvalisem kui teised sarnased programmid? Nagu enamiku asjade puhul, on vastus <i>sõltub</i>.<br/><br/>Ava-Aud Seda saab kasutada nii, et see oleks äärmiselt turvaline. Kuid nagu tavaliselt arvutipõhise turvalisuse puhul, seda turvalisemalt soovite midagi teha, seda ebamugavam see muutub. Vana fraas <i>Kõige turvalisem arvuti on see, mis on välja lülitatud ja kapis<i> meenub.<br/><br/>Allpool toome välja mõned võimalused, mida saab kasutada Open-AudIT-iga, mis suurendavad turvalisust. Nagu enamik Open-AudIT-i elemente, on need valikud ja mitte kohustuslikud. See, kui kaugele te turvalisusega lähete, on teie otsustada.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Taassertifitseerimine: Nõutav iga kolme aasta tagant';

$GLOBALS["lang"]['Red Query'] = 'Punane päring';

$GLOBALS["lang"]['Redirect URI'] = 'URI ümbersuunamine';

$GLOBALS["lang"]['redirect_uri'] = 'Uri ümbersuunamine';

$GLOBALS["lang"]['Redirect Uri'] = 'Uri ümbersuunamine';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Vähendada andmete rikkumise ja küberohtude riski';

$GLOBALS["lang"]['references'] = 'Viited';

$GLOBALS["lang"]['References'] = 'Viited';

$GLOBALS["lang"]['region'] = 'Region';

$GLOBALS["lang"]['Region'] = 'Region';

$GLOBALS["lang"]['registered_user'] = 'Registreeritud kasutaja';

$GLOBALS["lang"]['Registered User'] = 'Registreeritud kasutaja';

$GLOBALS["lang"]['Rejected'] = 'Tagasi lükatud';

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

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Korrake, kuni olete täielikult avastanud ja auditeerinud Windows PC.';

$GLOBALS["lang"]['Report'] = 'Raport';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Aruanne oma seadmete, võrkude ja muu kohta';

$GLOBALS["lang"]['reportable'] = 'Avaldatav';

$GLOBALS["lang"]['Reportable'] = 'Avaldatav';

$GLOBALS["lang"]['Reports'] = 'Raportid';

$GLOBALS["lang"]['request'] = 'Palu';

$GLOBALS["lang"]['Request'] = 'Palu';

$GLOBALS["lang"]['Request Method'] = 'Taotlusmeetod';

$GLOBALS["lang"]['Request Vulnerability'] = 'Haavatavuse taotlus';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Konkreetset taotlust CVE';

$GLOBALS["lang"]['requested'] = 'Palutud';

$GLOBALS["lang"]['Requested'] = 'Palutud';

$GLOBALS["lang"]['require_port'] = 'Nõutav port';

$GLOBALS["lang"]['Require Port'] = 'Nõutav port';

$GLOBALS["lang"]['Require an Open Port'] = 'Nõutav avatud port';

$GLOBALS["lang"]['Required'] = 'Nõutav';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Nõutavad AWSi kasutaja õigused';

$GLOBALS["lang"]['Required Fields'] = 'Nõutavad väljad';

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

$GLOBALS["lang"]['Resulting Function'] = 'Tulemusfunktsioon';

$GLOBALS["lang"]['Results'] = 'Tulemused';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Seadmete nimekirja hankimine';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'OS-i nimega seadmete (nt Windows 2008) loendi hankimine';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'hankige kõik andmed seadme kohta ID 88 abil.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Kõigi Windowsiga töötavate seadmete hankimine.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Kõigi seadmete hankimine standardveergudega';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'hankige esimesed 10 seadet, milles töötab hostinime järgi tellitud Windows';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Omaduste id, ip, masinanimi, domeen, tüüp hankimine kõigist seadmetest';

$GLOBALS["lang"]['retrieved'] = 'Vaadatud';

$GLOBALS["lang"]['Retrieved'] = 'Vaadatud';

$GLOBALS["lang"]['retrieved_ident'] = 'Otsitud identifikaator';

$GLOBALS["lang"]['Retrieved Ident'] = 'Otsitud identifikaator';

$GLOBALS["lang"]['retrieved_name'] = 'Otsitud nimi';

$GLOBALS["lang"]['Retrieved Name'] = 'Otsitud nimi';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Vaadatud seadmest - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Volituste nimekirja saamine';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Otsimine või loomine';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Tagastab vaikeveergudega seadmete kogu (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_ perekond, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Tagastab marsruuteritele paigaldatud moodulite nimekirja';

$GLOBALS["lang"]['Return an individual device details'] = 'Tagastab üksikseadme\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Tagastab {collection} nimekirja.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Tagastab { kollektsioon} üksikasjad.';

$GLOBALS["lang"]['Reunion'] = 'Kokkutulek';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Praeguste tavade läbivaatamine ISO 27001 nõuete alusel';

$GLOBALS["lang"]['revision'] = 'Revisjon';

$GLOBALS["lang"]['Revision'] = 'Revisjon';

$GLOBALS["lang"]['risk_assesment_result'] = 'Riskihindamise tulemus';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Riskihindamise tulemus';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Riski hindamine ja ravi';

$GLOBALS["lang"]['Risk Management'] = 'Riskijuhtimine';

$GLOBALS["lang"]['Role'] = 'Roll';

$GLOBALS["lang"]['roles'] = 'Rollid';

$GLOBALS["lang"]['Roles'] = 'Rollid';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Rolle saab luua ja redigeerida ainult siis, kui teil on Open-AudIT ettevõtte litsents. Enamiku kasutajate jaoks peaks rollide vaikekomplekt olema kõik, mis on vajalik.';

$GLOBALS["lang"]['Romania'] = 'Rumeenia';

$GLOBALS["lang"]['Romanian'] = 'Rumeenia';

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

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Reeglid luuakse ja töötavad seadme vastu, kui seade avastatakse või auditi tulemust töödeldakse. Reeglitega saab määrata seadme atribuudi teiste atribuutide põhjal.<br/><br/>Märkus - praegu ei saa me kustutada reegli sisendit või väljundit, mis sisaldab /. Seda seetõttu, et raamistik parsib / URL-i osana ja tagastab 404, isegi enne meie koodi käivitamist. Selle töö on reegli enda kustutamine, seejärel sisendite ja väljundite uuesti loomine vastavalt vajadusele. Õnneks sisendid ja väljundid, mis sisaldavad / on haruldased (tõepoolest, ükski ei eksisteeri vaikimisi).';

$GLOBALS["lang"]['Run Discovery'] = 'Käivita Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Käivita seadmetes avastamine';

$GLOBALS["lang"]['Run Your Discovery'] = 'Käivita oma avastus';

$GLOBALS["lang"]['Run a Command'] = 'Käivita käsklus';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Käivita avastus ja uuri välja <b>Mis su võrgus toimub?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Skripti käivitamine kirjutades <code>cscript test_windows_client.vbs</code> konsoolis.';

$GLOBALS["lang"]['Run this Command'] = 'Käivita käsk';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running'] = 'Jooksmine';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Open-AudIT Apache teenuse käivitamine Windowsi all';

$GLOBALS["lang"]['Russian'] = 'Vene';

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

$GLOBALS["lang"]['SAN Audit'] = 'SAN audit';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto-Discover';

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

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL, mis seda tingimust ei sisalda, toob kaasa vidina täitmata jätmise.';

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

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Salvesta ja käivita fail. Veenduge, et käivitate faili administraatorina, et see installida (parem klõpsake, käivitage administraatorina).';

$GLOBALS["lang"]['Save as Default'] = 'Salvesta vaikimisi';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Salvestab allalaaditud faili.';

$GLOBALS["lang"]['scaling'] = 'Skaleerimine';

$GLOBALS["lang"]['Scaling'] = 'Skaleerimine';

$GLOBALS["lang"]['scan_options'] = 'Skaneerimise valikud';

$GLOBALS["lang"]['Scan Options'] = 'Skaneerimise valikud';

$GLOBALS["lang"]['Scan Options ID'] = 'Skaneerimisvalikute ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Selle pordi (te) skannimine ja kui see avastatakse avatud, kasutage seda porti SSH kommunikatsiooniks. See on lisatud eespool esitatud TCP erisadamate nimekirja (kui see ei ole juba lisatud), seega ei ole vaja seda ka sellesse nimekirja lisada. Koma on eraldatud, tühikuid pole.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Skaneeri TCP portide Nmap top number.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Skaneeri UDP portide Nmap top number.';

$GLOBALS["lang"]['schedule'] = 'Ajakava';

$GLOBALS["lang"]['Schedule'] = 'Ajakava';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Ajastatud seadmete avastamine ja aruandlus muudavad Open-AudIT Professionali tõhusaks lahenduseks hõivatud IT-spetsialistidele, kes soovivad vähendada üldkulusid ja suurendada teadmisi.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Ajakava - avastamine, aruandlus ja palju muud';

$GLOBALS["lang"]['scope'] = 'Scope';

$GLOBALS["lang"]['Scope'] = 'Scope';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Ulatus on tuntud kui autoriseerimise ulatus, mis näitab, kas haavatavus mõjutab ressursse väljaspool haavatava komponendi algset julgeolekuasutust.<br/><br/>Ainsad kaks selle atribuudi kehtivat väärtust on:';

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

$GLOBALS["lang"]['Searching Using DataTables'] = 'Otsimine andmetabelite abil';

$GLOBALS["lang"]['Second'] = 'Teine';

$GLOBALS["lang"]['secondary'] = 'Sekundaarne';

$GLOBALS["lang"]['Secondary'] = 'Sekundaarne';

$GLOBALS["lang"]['Secondary Text'] = 'Teisene tekst';

$GLOBALS["lang"]['Secret Key'] = 'Salavõti';

$GLOBALS["lang"]['section'] = 'Sektsioon';

$GLOBALS["lang"]['Section'] = 'Sektsioon';

$GLOBALS["lang"]['secure'] = 'Turvaline';

$GLOBALS["lang"]['Secure'] = 'Turvaline';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Turvalisuse sisu automatiseerimise protokoll';

$GLOBALS["lang"]['Security Level'] = 'Turvatase';

$GLOBALS["lang"]['Security Name'] = 'Turvanimi';

$GLOBALS["lang"]['Security Status'] = 'Turvaseisund';

$GLOBALS["lang"]['security_zone'] = 'Turvatsooni';

$GLOBALS["lang"]['Security Zone'] = 'Turvatsooni';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Vaata ülalt. Märkus - see võib olla tingitud ka ise allkirjastatud sertifikaadist LDAP serveris. Me töötame selle nimel, et võimaldada seda tulevikus.';

$GLOBALS["lang"]['See our page on enabling'] = 'Vaata meie lehekülge';

$GLOBALS["lang"]['Seed Discoveries'] = 'Seemne avastused';

$GLOBALS["lang"]['seed_ip'] = 'Seemne IP';

$GLOBALS["lang"]['Seed IP'] = 'Seemne IP';

$GLOBALS["lang"]['seed_ping'] = 'Seemneping';

$GLOBALS["lang"]['Seed Ping'] = 'Seemneping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Seemnete piiramine eraviisiliselt';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Seemnete piiramine eraviisiliselt';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Seemnepiirang alamvõrgule';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Seemnepiirang alamvõrgule';

$GLOBALS["lang"]['Select'] = 'Vali';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Vali administraatori -> Ülesanded -> Loo Ülesanne menüüst.';

$GLOBALS["lang"]['Select All'] = 'Vali kõik';

$GLOBALS["lang"]['Select All Devices'] = 'Vali kõik seadmed';

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

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Vali menüü -> Halda -> Lähtejooned -> Lähtetasemete loend.';

$GLOBALS["lang"]['Select a Table'] = 'Tabeli valimine';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Vali akrediteeritud sertifitseerimisasutus';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Valida ja kohaldada asjakohaseid kontrolle (A lisa)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Vali <i>COM Turvalisus</i> vahekaart<br/><br/>Klõpsa pääsulubadel Muuda vaikeväärtust';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Vali <i>Kirjuta</i> kaart ja kopeeri väärtus <i>Väljaandja</i> (Lihtsalt URL ise). Aseta see avatud audiosse <i>Väljaandja</i> väli.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Vali <i>Konto</i> märkeruut ja märkida konto nimi ja parool.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Vali menüü Start ja tüüp <i>teenused<.i>. Klõpsa teenuste ikoonil.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Valige asjakohaste üksikasjade loomiseks ja sisestamiseks Auth Menthod tüüp.';

$GLOBALS["lang"]['Self Delete'] = 'Isekustuta';

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

$GLOBALS["lang"]['Servers Only'] = 'Ainult serverid';

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

$GLOBALS["lang"]['Service Under Windows'] = 'Teenus Windowsi all';

$GLOBALS["lang"]['service_version'] = 'Teenuseversioon';

$GLOBALS["lang"]['Service Version'] = 'Teenuseversioon';

$GLOBALS["lang"]['Set'] = 'Valmis';

$GLOBALS["lang"]['set_by'] = 'Seadke';

$GLOBALS["lang"]['Set By'] = 'Seadke';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Määrab funktsiooni Discovery - tavaliselt ei seadistata seda käsitsi.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Määrab audit_ domeen või Discover_ domeen skriptid. Ärge seadke.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Välise teksti määramine siseandmete suurversiooniks.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Välise teksti määramine väiketäheks.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Välise teksti määramine suurtäheks.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Määrab nimekirja ekraanidel olevate tabelite suuruse (tavaline või kompaktne).';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Sisselülitamisel sisestatakse AD- lt süsteemid, mis ei pruugi olla kontaktistatavad, kuid mida AD on alates sellest kuupäevast näinud.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Discovery seadistamine alamvõrgus on peaaegu identne tavalise Discovery käivitamisega veebiliidese kaudu. Ainsad lisapunktid on kavandatud tund ja päev (päevad) ning ajastatud ülesande enda nimi. Saate seda ära kasutada, et ajastada mitu avastust, kasutades erinevaid volikirju.<br/><br/>Subnet Discovery järgi on Active Directory Discovery lihtsalt samad väljad, mis tavalisel Active Directory Discovery\'l, millele on lisatud päev, tund (tunnid) ja nimi.<br/><br/>Kui Open-AudIT serveril on kollektsionäärid selle kohta aru andnud, on ette nähtud täiendav langus. Selle valimisel saab määrata, millise kogujaga ülesanne käib. Kogujatele on toetatud ainult otsinguülesanded. Määrab samad elemendid, mis tavalisel avastusel, kuid annab selle ülesande käivitamiseks varukogujale.';

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

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Saadetud on vaikeelementide kogum. Neid saab leida menüüst';

$GLOBALS["lang"]['short'] = 'Lühike';

$GLOBALS["lang"]['Short'] = 'Lühike';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Kas ma peaksin eemaldama kõik mitte-jooksvad andmed sellest seadmest?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Kas seda faili (või mustrit) kasutatakse failide esitamise välistamiseks? Tavaliselt on failide auditeerimiseks määratud <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Kas seda müüjat tuleks kasutada FirstWave\'i haavatavuste hankimisel.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Kas me peaksime lisama seadmeid kaugteenusest, kohapeal.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Kas peaksime seda litsentsi rakendama nii valitud Orgidele kui ka Orgsi lastele?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Kas peaksime SAN-i auditeerima, kui haldustarkvara tuvastatakse.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Kas peaksime kontrollima kinnituspunkte.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Kas me peaksime kontrollima netstat porte (jah, ei, ainult serverid).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Peaksime installitud tarkvara kontrollima.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Kas peaksime lugema filtreeritud porti avatud pordiks - ja seetõttu märgistama selle IP seadmega?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Kas peaksime pidama avatud filtreeritud porti avatud pordiks ja seetõttu märgistama selle IP kui seadme külge kinnitamise?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Kas teisendame masinanime väiketäheks.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Peaksime looma auditi tulemuste põhjal faili.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Peaksime selle grupi veebiliideses paljastama.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Kas me peaksime selle päringu kuvama veebiliidese aruannete loendis aruandluse menüü all.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Kas me peaksime selle päringu kuvama aruannete loendis veebiliidese menüüs Aruanded.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Kas peita auditi skripti aken käivitamisel?';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Kas peaksime ignoreerima kehtetut või ise allkirjastatud SSL-sertifikaati ja esitama tulemuse ikkagi.';

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

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Kas taastada kõik DNS nimed';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Kas me teeme auditi ja esitame selle (jah/ei).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Kas peaksime testima SNMP-d UDP porti 161 kasutades?';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Kas peaksime testima SSH-d TCP pordiga 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Kas peaksime testima WMI-d, kasutades TCP porti 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Kas eemaldada agent (jah/ei).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Kas me peaksime auditi tulemuse esitamiseks kasutama süsteemi või kasutaja tasandi puhverserverit?';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Kas peaksime installitud tarkvara hankimisel kasutama Win32_product WMI klassi (ei ole Microsofti poolt soovitatud).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Kas me peaksime seda meetodit kasutama kasutajate autentimiseks. Seadke <code>y</code> või <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Kas me peaksime kasutama seda meetodit kasutajate rollide täitmiseks. Väli <code>use_auth</code> tuleb seada <code>y</code> kasutada seda. Seadke <code>y</code> või <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Kas me peaksime seda väärtust kasutama väliste ja sisemiste seadmete sobitamiseks. Meie vaikimisi integratsiooni kasutab IP ja UUID siin. Kui üks neist kattub välise ja sisemise seadmega, peame neid samaks seadmeks.';

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

$GLOBALS["lang"]['Slovak'] = 'Slovaki';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakkia (Slovakkia Vabariik)';

$GLOBALS["lang"]['Slovenia'] = 'Sloveenia';

$GLOBALS["lang"]['Slovenian'] = 'Sloveenia';

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

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Nii et skript ei tööta tõrksa seadmega. Grrr. Windowsi, Linuxi ja MacOSi skriptid aktsepteerivad silumise argumenti. Seda saab määrata skriptis endas või anda käsureal. Käivitage skript, kasutades seda valikut, mis on määratud 5-le, ja peaksite nägema, millises skripti osas esineb tõrge. Näiteks';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Nii et lisaks tavalisele sõnale, millised on muud võimalused - mul on hea meel, et küsisite! Standardse Open-AudIT API järgi on meil filtreerimiseks mitu operaatorit. Operaatorid, kes võivad väärtusele eelneda, on';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Nii et teil on probleem, mis pakub oma seadmete avastamiseks Open-AudIT volitusi. Mul on vastus - ära siis! Muidugi, ma mõtlen, avastus on parim asi pärast viilutatud leiba. Sa ei pea teadma enne tähtaega <i>Mis sinu võrgus toimub?</i>. Kuid kuidas saate seadmetest andmeid välja võtta, andmata volitusi?<br/><br/>Arvutite puhul on lihtne valik kopeerida sobiv auditiskript sihtmasinatesse ja seada see graafiku järgi käivitama. Rohkem üksikasju viki kohta. Masinad saadavad oma andmed Open-AudIT-ile sellel ajakaval, peaaegu nagu oleksite avastamine. Seade lihtsalt käivitab auditi skripti ajakava järgi (jällegi saate lugeda auditi skripti) kasutajana, kellele seda ütlete, ja saadab väljundi serverile. Mingid volitused ei ole üldse seotud.<br/><br/>Ja nüüd on meil agente Windowsile. Tegeliku installeeritud agendi eelised on';

$GLOBALS["lang"]['socket'] = 'Sokke';

$GLOBALS["lang"]['Socket'] = 'Sokke';

$GLOBALS["lang"]['software'] = 'Tarkvara';

$GLOBALS["lang"]['Software'] = 'Tarkvara';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Tarkvara leiti viimase 7 päeva jooksul';

$GLOBALS["lang"]['Software Found Today'] = 'Täna leitud tarkvara';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Eile leitud tarkvara';

$GLOBALS["lang"]['software_key'] = 'Tarkvaravõti';

$GLOBALS["lang"]['Software Key'] = 'Tarkvaravõti';

$GLOBALS["lang"]['Software License Reporting'] = 'Tarkvaralitsentsi aruandlus';

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

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Mõningaid kogusid saab täita - päringuid jne - vt allpool.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Mõned näited on selle lehekülje allosas. Kõikidel lõpp-punktidel on ka minimaalne nõutavate väljade loetelu. Need on allpool.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Mõned meie mallid toetavad uut üleminekut DataTables\'ile, kasutades serveripoolset töötlemist. See massiiv parandab koormusaegu.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'LDAP-serveriga sidumisel on tekkinud veel üks viga. Sellega saab ühendust võtta (st. <i>ühendada</i> Ülaltoodu on toiminud, kuid mingil muul põhjusel ei ole sidumist toimunud. Kontrolli logisid LDAP serveris.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Midagi on tõsiselt valesti läinud. Open- AudIT ei saa lugeda <i>orgid</i> laud.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Midagi on tõsiselt valesti läinud. Open- AudIT ei saa lugeda <i>rollid</i> laud.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Mõnikord ei sobi abitu avastus lihtsalt teie kasutusjuhtumiga. Võib-olla on teie arvutitel tihedad tulemüürid. Võib-olla nad ei ole võrgus, kui teie avastused on planeeritud. Võib-olla kasutavad neid kaugtöötajad. See on koht, kus üks agent saab aidata. Paigaldage see sihtmärgi masinale ja see <i>check-in</i> Open-AudIT serveriga ajakavas ja aktsepteeri ülesandeid. Kõige tavalisem ülesanne, mida server nõuab, on see, et agent auditeeriks ennast ja saadaks tulemuse.';

$GLOBALS["lang"]['Sort'] = 'Sort';

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

$GLOBALS["lang"]['Stage 1: Documentation review'] = '1. etapp: dokumentatsiooni läbivaatamine';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = '2. etapp: rakendamine ja tõhususe läbivaatamine';

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

$GLOBALS["lang"]['Start a web browser and go to'] = 'Käivita veebilehitseja ja mine';

$GLOBALS["lang"]['started_date'] = 'Alguskuupäev';

$GLOBALS["lang"]['Started Date'] = 'Alguskuupäev';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Alates juunist 2018 Google on rakendanud Google Mapsi platvormi API-de jaoks pay-as-you-go hinnakujundusmudeli. Varem võis enamik mõõduka kasutusega kasutajaid tasuta kasutada Google Mapsi, mis on integreeritud opChartsi ja Open-AudIT Professional / Enterprise\'i. Google\'i uus poliitika on välja toodud siin,';

$GLOBALS["lang"]['Starts With'] = 'Alustab';

$GLOBALS["lang"]['state'] = 'osariik';

$GLOBALS["lang"]['State'] = 'osariik';

$GLOBALS["lang"]['Stats'] = 'Statsi';

$GLOBALS["lang"]['status'] = 'Staatus';

$GLOBALS["lang"]['Status'] = 'Staatus';

$GLOBALS["lang"]['Storage'] = 'Hoidla';

$GLOBALS["lang"]['storage_count'] = 'Hoidlate arv';

$GLOBALS["lang"]['Storage Count'] = 'Hoidlate arv';

$GLOBALS["lang"]['Storage area network'] = 'Salvestusala võrk';

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

$GLOBALS["lang"]['Submit Online'] = 'Esitage võrgus';

$GLOBALS["lang"]['Submitted From'] = 'Esitatud';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Alamvõrgu avastused';

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

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Kokkuvõtted on üks päring andmebaasis koos <i>gruppi</i> käsk. Selle lihtsa meetodi abil saame hõlpsasti luua kokkuvõtte peaaegu iga atribuudi kohta.<br/><br/>Me ei vaja enam eraldi aruannet igaühe kohta. <i>tüüpi</i> seadeldise. Nüüd on meil lihtsalt kokkuvõte, et rühmad <i>seadmeid. tüüpi</i> ja näitab tulemust. Seejärel saate loendist antud tüübile klõpsata ja näha sobivaid seadmeid. Sellisel juhul asendab üks kokkuvõte (potentsiaalselt) 78 aruannet (seadmeid on 78 tüüpi).<br/><br/>Kokkuvõte erineb päringust selle poolest, et kokkuvõte on mõeldud objektide rühmitamiseks antud atribuudiga ja seejärel esitada <i>kliki</i> link tegelikele seadmetele. Päring on lihtsalt nimekiri elementidest, millel pole rohkem linke. Nagu eespool - see kokkuvõte kui kombinatsioon <i>aruanne + alamaruanne</i>, arvestades, et päring on vaid üks aruanne.<br/><br/>Kokkuvõtetel on teistsugune kogumismall kui teistel Open-AudIT ressurssidel. See mall näitab kokkuvõtet nii, nagu te ootate, ja näitab ka nuppe teiste ressursside loendusega. See lehekülg on mõeldud Open-AudITi koduleheks.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Kokkuvõtted on mõeldud üksuste rühmitamiseks konkreetse sobiva veeru järgi ja seejärel linkide loomiseks üksikutele seadmetele. Varasemates Open-AudIT versioonides oleks see olnud kaks erinevat punkti - aruanne ja alamaruanne. Nüüd oleme need koondanud sellesse, mida me nimetame kokkuvõtteks.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Kokkuvõtted pakuvad puurimise aruandlusvõimalusi. Lihtne, intuitiivne, võimas.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Kokkuvõte võtab samu argumente kui päringud.';

$GLOBALS["lang"]['Summary'] = 'Kokkuvõte';

$GLOBALS["lang"]['Sunday'] = 'Pühapäev';

$GLOBALS["lang"]['supplier'] = 'Tarnija';

$GLOBALS["lang"]['Supplier'] = 'Tarnija';

$GLOBALS["lang"]['Support'] = 'Toeta';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Toetatud tüübid <code>subnet</code>, <code>seed</code> ja <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Toetab õiguslike ja regulatiivsete nõuete täitmist';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Järelevalveauditid: Iga-aastased auditid sertifitseerimise säilitamiseks';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbardi ja Jan Mayeni saared';

$GLOBALS["lang"]['Swaziland'] = 'Svaasimaa';

$GLOBALS["lang"]['Sweden'] = 'Rootsi';

$GLOBALS["lang"]['Swedish'] = 'rootsi';

$GLOBALS["lang"]['switch_device_id'] = 'Lülita seadme ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Lülita seadme ID';

$GLOBALS["lang"]['switch_port'] = 'Lülitage port';

$GLOBALS["lang"]['Switch Port'] = 'Lülitage port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Šveits, Šveitsi Konföderatsioon';

$GLOBALS["lang"]['Symptom'] = 'Sümptom';

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

$GLOBALS["lang"]['Table'] = 'Tabel';

$GLOBALS["lang"]['tag'] = 'Silt';

$GLOBALS["lang"]['Tag'] = 'Silt';

$GLOBALS["lang"]['tag_1'] = 'Silt 1';

$GLOBALS["lang"]['Tag 1'] = 'Silt 1';

$GLOBALS["lang"]['tag_2'] = 'Silt 2';

$GLOBALS["lang"]['Tag 2'] = 'Silt 2';

$GLOBALS["lang"]['tag_3'] = 'Silt 3';

$GLOBALS["lang"]['Tag 3'] = 'Silt 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalogi';

$GLOBALS["lang"]['tags'] = 'Sildid';

$GLOBALS["lang"]['Tags'] = 'Sildid';

$GLOBALS["lang"]['Tags :: '] = 'Sildid :: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwani';

$GLOBALS["lang"]['Tajikistan'] = 'Tadžikistan';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Võtke arvesse kõiki väljundeid ja tegevusi vastavalt vajadusele.';

$GLOBALS["lang"]['Tanzania'] = 'Tansaania';

$GLOBALS["lang"]['Target Computer'] = 'Sihtarvuti';

$GLOBALS["lang"]['task'] = 'Ülesanne';

$GLOBALS["lang"]['Task'] = 'Ülesanne';

$GLOBALS["lang"]['tasks'] = 'Ülesanded';

$GLOBALS["lang"]['Tasks'] = 'Ülesanded';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Ülesanded võivad olla üks mitmest erinevast tüübist: baas, avastamine, aruanne, päring, kokkuvõte või koguja.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp pordid';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp pordid';

$GLOBALS["lang"]['Technical Details'] = 'Tehnilised üksikasjad';

$GLOBALS["lang"]['tenant'] = 'Rentnik';

$GLOBALS["lang"]['Tenant'] = 'Rentnik';

$GLOBALS["lang"]['Tenant ID'] = 'Üürniku ID';

$GLOBALS["lang"]['Tennant ID'] = 'Tennant ID';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Test 1';

$GLOBALS["lang"]['Test 2'] = 'Katse 2';

$GLOBALS["lang"]['Test 3'] = 'Katse 3';

$GLOBALS["lang"]['Test Email'] = 'Test-email';

$GLOBALS["lang"]['test_minutes'] = 'Katseprotokollid';

$GLOBALS["lang"]['Test Minutes'] = 'Katseprotokollid';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test alamvõrk';

$GLOBALS["lang"]['Test Subnet'] = 'Test alamvõrk';

$GLOBALS["lang"]['tests'] = 'Testid';

$GLOBALS["lang"]['Tests'] = 'Testid';

$GLOBALS["lang"]['Text'] = 'Tekst';

$GLOBALS["lang"]['Thai'] = 'Tai';

$GLOBALS["lang"]['Thailand'] = 'Tai';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Täname, et alustasite oma teekonda parima avastus- ja inventeerimisvahendiga.';

$GLOBALS["lang"]['Thanks to'] = 'Tänud';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Ongi kõik! Olete just redigeerinud nii paljude seadmete atribuute kui vaja.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'Theo <i>Rollid</i> Lõpp-punkt võimaldab teil hallata õiguste kogumit (Loo, loe, värskenda, kustuta), mis on kasutajatele antud ja mida rakendatakse igale lõpp-punktile.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API kasutab küpsist. Küpsist saate taotleda, saates allpool olevale URL-ile POSTi, mis sisaldab kasutajanime ja parooli atribuute ja väärtusi:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Active Directory domeen alamvõrkude loendi hankimiseks.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Active Directory server alamvõrkude loendi hankimiseks.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Rakenduste lõpp-punkt võimaldab teil määratleda rakenduse, mille saate seejärel seostada seadmega (või seadmetega).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Atribuutide lõpp-punkt võimaldab teil lisada kohandatud väärtusi erinevatele atribuutidele Open-AudIT-is, hetkel, mil see funktsioon töötab seadmete klassi, keskkonna, oleku ja tüübi atribuutidega, atribuudiga Tüüp nii asukohtade kui orgude jaoks ning menüükategooria päringute jaoks. Kui vaatate mõnda prvious tüüpi üksust (näiteks vaade Lkocation), märkate, et atribuut Tüüp tuleb valida rippmenüüst. See on koht, kus need väärtused salvestatakse. Seega, kui soovite lisada asukoha jaoks valitud uue tüübi, lisage see funktsiooni Atribuudid abil.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automaatne mõõdik tabab vastuse küsimusele <strong>Kas ründaja saab automatiseerida selle haavatavuse ärakasutamise sündmusi mitme sihtmärgi vahel?</strong> Põhineb tapmisahela 1.-4. astmel. Need sammud on luure, relvastamine, kohaletoimetamine ja ekspluateerimine (ei ole määratletud, ei, jah).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE on CVE loendis märgitud kehtetuks või tühistatud. See jääb NVD-sse, kuid on vaikimisi otsingutulemustest välja jäetud.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE on avaldatud CVE loendis ja lisatud NVD andmekogumisse. Ainult esialgne allaneelamine.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE on pärast esialgset analüüsi uuendatud. NVD rikastamise andmed võivad olla läbi vaadatud.';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE identifikaator.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE-d rikastatakse aktiivselt CVSS-skooride, CWE-klassifikatsioonide, viitemärkide ja CPE rakendatavusega.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'CVE ei ole praegu ressursside piiratuse või muude põhjuste tõttu rikastamise prioriteet.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE ootab rikastamist NVD analüütikute poolt. Täpseid metaandmeid veel pole.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Pilv, kellele see ese kuulub. Lingid <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Seadme Seed Discovery tüüp on uusim väga tõhus meetod võrgu indekseerimiseks, mis annab teile võimaluse sihtida oma võrku nii kitsalt või laialt kui vaja. See on kiire, töötab ja on suurepärane.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'Discovery Valikud, mida me saadame, on üksikasjalikult esitatud allpool tabelis. Nagu eespool mainitud, saavad Enterprise\'i kasutajad neid rohkem luua või saadetud üksusi redigeerida.';

$GLOBALS["lang"]['The Elevated User query'] = 'Kõrgendatud kasutaja päring';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Funktsioon Executables skaneerib auditi osana seadme ketta ja kontrollib, kas iga käivitatav fail on paketihaldurile teada. Kuna see kasutab paketihaldurit, kehtib see funktsioon ainult Linuxi sihtseadmetele ja lisaks sellele ainult rpm- või deb-põhistele distributsioonidele. Kõik Redhat või Debian põhine peaks töötama.';

$GLOBALS["lang"]['The FROM'] = 'Alates';

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

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'ISO/IEC 27001 sertifitseerimisprotsess ja selle põhielemendid.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP või Telco, mis pakub seda linki.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'JSON-i rekord Mitrelt.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'JSON-i rekord NVD-st.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Selle kasutaja LDAP OU (kui kasutatakse LDAP).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'LDAP- serverit ei olnud võimalik ühendada. Üldsegi. Kontrolli, kas see on pingeeritav Open- AudIT serverist. Kontrollige, kas õige port on avatud Open-AudIT serverile. Seda näitab Open-AudIT serveri nmap. Asenda oma LDAP-serveri IP $ip-iga. Proovi:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'LDAP- serveri tüüp on vigane. See peaks olema kas <i>aktiivne kataloog</i> või <i>avatud</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'LDAP-server ühendati ja kasutajamandaadid aktsepteeriti sidumiseks.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Linux Open-AudIT installer testib ja vajadusel installib teie distributsioonihoidlast Open-AudIT-i sõltuvused, sealhulgas Nmap SetUID-i seadistamise. See on vajalik SNMP (UDP 161) tuvastamiseks mitte-juurkasutaja poolt. Seda toetavad RedHat/CentOS ja Debian/Ubuntu. Kui peate Nmapi käsitsi installima:<br/><br/>RedHat / CentOS do (MÄRKUS - kui uuendate yumi abil, peate selle uuesti rakendama <i>kemod</i> seade.';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Asukoht, mis sisaldab seda võrku. Lingid <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD määras baasoleku.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Riiklik Standardite ja Tehnoloogia Instituut on föderaalne tehnoloogiaagentuur. Nad edendavad ametlikku tehnoloogiat, mõõtmisteadust ja standardeid.';

$GLOBALS["lang"]['The Network to Discover'] = 'Avastatav võrk';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmapi ajastus.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Selle paketi vastu tuleb esitada aruanne. Tühi kõigile. Protsentuaalse märgi% kasutamine metamärgina. Testitakse os_group, os_perekonna ja os_name suhtes selles järjekorras.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'OpenAudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Lingitud pilve Open- AudIT ID. Lingid <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Ava-Aud Selles failis käivitati IT-serveri kood.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Ava-Aud Selle funktsiooni raames käivitati IT-serveri kood.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'OpenSCAPi ökosüsteem pakub mitmeid vahendeid, et aidata administraatoritel ja audiitoritel hinnata, mõõta ja jõustada turvaaluseid, sealhulgas mitmesuguseid karastamisjuhiseid ja konfiguratsiooni lähtealuseid, mille on välja töötanud avatud lähtekoodiga kogukond, tagades, et saate valida turbepoliitika, mis sobib kõige paremini teie organisatsiooni vajadustele, olenemata selle suurusest.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'OpenSCAP projekt on avatud lähtekoodiga tööriistade kogum selle standardi rakendamiseks ja jõustamiseks ning NIST on saanud 2014. aastal SCAP 1.2 sertifikaadi.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organisatsioon, kellele see kirje kuulub. Lingid <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Käimasoleva seotud avastuse protsessi identifikaator.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'RE asub selle seadme ülaosas.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Funktsiooni Racks kasutatakse selleks, et hallata ja visualiseerida teie riiuli kasutamist organisatsiooni, asukoha, hoone, põranda, ruumi ja rea abil.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP on spetsifikatsioon turvaandmete väljendamiseks ja nendega manipuleerimiseks standardiseeritud viisil. SCAP kasutab mitut individuaalset spetsifikatsiooni, et automatiseerida pidevat jälgimist, haavatavuse juhtimist ja turvapoliitika vastavuse hindamise aruandlust.';

$GLOBALS["lang"]['The SELECT'] = 'SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'Päringu SELECT osa peaks kasutama täispunktimärget ja taotlema ka välja täispunktinimega. IE - SELECT-seadmed. id AS "devices.id". Iga väli tuleb valida sel viisil, et võimaldada GUI poolatribuudi filtreerimist.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'SQL-i sektsioon SELECT peab sisaldama täielikult kvalifitseeritud veerge ja määrama teatud veerud.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP kogukonna string.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 autentimise paroolifraas.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 autentimisprotokoll.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passfrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 privaatsusprotokoll.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 turvalisuse tase.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 Turvanimi.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 kontekst Mootori ID (valikuline).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 kontekstinimi (valikuline).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL ei tohi sisaldada <strong>KUI @filter VÕI</strong>. Seda SQL-i siiski ei täideta <strong>KUI @filter JA</strong> päringud on lubatud.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Open-AudIT-is kasutatavad SQL-päringud nõuavad taustapulga - "märgi" kasutamist ja MITTE väljade standardset ühekordset tsitaati. Enamikus USA Windowsi klaviatuurides asub taustaklahv klaviatuuri ülavasakul koos plaadiga ~. US Maci klaviatuuril asub taustaklahv SHIFT-klahvi kõrval. Standardset ühtset tsitaati kasutatakse ikka veel väärtuste lisamiseks, nagu allpool toodud näited illustreerivad.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'SQL-päring on sisuliselt jagatud kolmeks osaks.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Open-AudIT standardite funktsionaalsus võimaldab teil eelnevalt täita küsimused, mida audiitorid nõuavad ISO 27001 sertifikaadi täitmisel.';

$GLOBALS["lang"]['The URL of the external system.'] = 'Välise süsteemi URL.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Sinu avatud audio URL Server, millele koguja aru annab (jälitusjoont ei ole).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL, millele auditiskriptid peaksid oma tulemuse esitama.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Kasutaja lõpp-punkt võimaldab hallata kasutajakontosid Open-AudIT raames.';

$GLOBALS["lang"]['The WHERE'] = 'Kus';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'Kus on sinu SQL-i osa <em>peab</em> sisaldavad';

$GLOBALS["lang"]['The Windows'] = 'Windows';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Windowsi logi võib öelda järgmist:';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Kontol peab olema parool; WMI ei luba tühje paroole.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Konto parool ei tohi sisaldada "" (topelttsitaadid). Seda seetõttu, et cscript (ja wscript) ei saa parsida argumentide väärtusi, mis sisaldavad topelttsitaate. Need on lihtsalt ära võetud. Ei (enne kui küsite) põgenemine ei tööta. See on cscripti piirang ja sellel pole midagi pistmist Open-AudIT-iga.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Selle kasutaja tegelik täisnimi.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Open- AudIT serveri esitamise lehekülje aadress.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Administraator andis volikirjad, mida kasutati edukalt LDAP-iga sidumiseks.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Administraator andis volikirjad LDAP-serveri sidumiseks, kuid LDAP sevrer ei ole neid aktsepteerinud. Topeltkontrollige volikirja tööd LDAP-serveris ja seejärel kontrollige (või lähtestage) Open-AudIT LDAP-serveri kirjes.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Agent ja server on ka piisavalt intelligentsed, et agendit ise uuendada, kui serverisse on installitud uuem versioon (näiteks pärast Open-AudIT uuendamist).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Agent peaks alla laadima auditi skripti uue koopia, käivitama selle ja esitama tulemuse serverile.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Rakendus loob siin ajutised auditikirjutised, kopeerib need sihtmasinatesse, seejärel kustutab need.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Seotud lähtejoon. Lingid <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Seotud avastus (vajaduse korral). Lingid <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Testitav atribuut (alates <code>devices</code> laud.';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Testitav atribuut (peab sobima välise välja nimega allpool).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Avastamisskaneerimise valikute atribuudid on järgmised.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Auditi skript, millele oma kohandused rajada.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Auditiskript kasutab failide massiivi ja hangib failide andmed.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Kõik auditiskriptid aktsepteerivad silumisargumenti. Võite käivitada skripti kasutades seda ja näha üksikasjalikumalt, mis probleem on. Ja kui te ei suuda seda välja mõelda - selleks me siin olemegi! Avage toetusjuhtum ja me saame asjad kiiresti tööle.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Põhitee, kust kasutajaid otsida.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Allpool toodud sammud ei ole Open-AudITi süü ega ainulaadne ning võivad mõjutada <strong>ühtegi</strong> Avastamisrakendus, mis kasutab kaugjuhtimispulti WMI ja/või Windowsi.';

$GLOBALS["lang"]['The benchmark type.'] = 'Võrdlusaluse tüüp.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Hoone, kus asub riiul.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Väljastpoolt loodavate seadmete arvutatud arv.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Open-AudIT-is loodavate seadmete arvutatud arv.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'Kliendi ID on Azure Active Directory rakenduse ID. Kliendi saladus on võti, mille te sellele rakendusele annate.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Koguja on sisuliselt Open-AudIT täisinstallatsioon <i>koguja</i> režiimi. Kollektor on mõeldud avastamiseks võrgus, kus see asub. See ei piirdu ainult selle võrguga, vaid ideaalis oleks see sisuliselt üks koguja alamvõrgu kohta, kui see on vajalik. Kollektorit juhib server ajakava järgi ja see käivitab võrgus avastamise, nagu määratud.<br/>Seistes Üksinda režiimis toimib kollektsionäär sõltumatu serverina, edastades kõik leitud seadmed peaserverisse.<br/><br/>Pärast installimist ja seadistamist toimub koguja juhtimine Serveris (mitte üksinda seisvas režiimis).<br/><br/>Ainsad vajalikud võrgupordid koguja ja serveri vahel on 80 või 443 (TCP-ühendus, mis on loodud kogujast Serverisse). Open-AudIT andmebaasi ei jagata (ja ei saa) nende installide vahel.<br/><br/>Vaikimisi küsib kollektor (mitte üksinda režiimis) serverilt iga 5 minuti järel mis tahes avastamistoiminguid (seda saab uute kollektsionääride serveris konfigureerida konfiguratsioonielemendi collector_check_minutes abil), mistõttu kõik kollektsionääri otsinguülesanded peaksid olema planeeritud 0, 5, 10, 15 jne minutiks.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Koguja on sisuliselt Open-AudIT täisinstallatsioon <i>koguja</i> režiimi. See režiim vähendaks nähtavat funktsionaalsust, püüdes lihtsustada ja keskenduda rakendusele. Selle eesmärk on koguda teavet kohalike võrkude ja seadmete kohta, kus tulemüür ja/või võrgutraversal on serveri probleem.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Kogujate sisemine IP, mida kasutatakse avastuse käivitamisel.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Veeru nimi võõrtabelist. See peaks olema üks järgmistest: klass, keskkond, staatus, tüüp või menüü_kategooria.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Otsingu ajal käivitatud sihtseadme või Open- AudIT serveri koodi käsk.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Teie klastri konfiguratsioon võib olla: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> või tühi.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Volikirja parool. Kui volikiri on SSH võti, on see võti avamiseks kasutatav parool ja see on valikuline.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Kasutaja antud volikirjad on ebaõnnestunud.';

$GLOBALS["lang"]['The credentials username.'] = 'Volikirja kasutajanimi.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Praegune kuupäev ja kellaaeg vormingus: Y-m-d H:i:s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Aktiivne kuupäev Y- m- d vormingus.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Pilvede avastamise hetkeseis.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Avastuse hetkeseis.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Armatuurlaud, mida selle kasutaja puhul vaikimisi näidatakse. Lingid <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Andmebaasis salvestatud andmed ei ole tõlgitud rakenduses näha. Me jätame andmed nii, nagu need on. Kuid miski ei takista teid, kasutajat, muutmast andmebaasis oleva üksuse nime (näiteks) teie keelele.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Sisestatud andmeid kasutatakse <code>LIKE</code> klausel, mitte (vastavalt API-le) <code>equals</code> klausel. Teine näide - kui sisestad <code>comput</code>Tagastaks ikka kõik arvutid. Ja kuna me kasutame <code>LIKE</code> klausel, see on tõstutundlik.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Andmebaasi skeemi leiab rakendusest, kui kasutajal on andmebaas::Loe luba menüükäsuga: Admin -> Andmebaas ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Andmebaasi versioon ja veebiversioon on vastuolulised.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Litsentsi kehtivusaja lõppemise kuupäev.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Kuupäev, mil tootja lõpetab tarkvara kasutamise. Tavaliselt asendatakse see uuema versiooniga. Hooldustööd võivad olla veel kättesaadavad.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Kuupäev, mil tarkvara enam värskendusi ei saa ja on tegelikult täielikult lõpetatud. Hooldustööd lõpetatakse.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Kuupäev, mil seda kirjet muudeti või lisati (loe ainult). Märkus - see on serveri ajatempel.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Kuupäev/kellaaeg, mil tulemus loodi.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Kuupäev, mil see ülesanne tuleb täita (* iga päeva kohta).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Nädalapäev, mil see ülesanne tuleb täita (* iga päeva kohta).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Silumistasand (väljund annab käsu kiiraknale). Väiksem tähendab vähem väljundit, 0 ei ole väljund.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Vaikimisi avastamise skaneerimise valik on UltraFast komplekt.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Selle meetodiga loodud igale kasutajale määratud vaikekeel.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Seade peab vastama Nmap pingile enne, kui seda peetakse võrgus.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Seade Open- AudIT-is. Lingid <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Skripti otselink on';

$GLOBALS["lang"]['The email address of the receiver'] = 'Retsipiendi e- posti aadress';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Litsentsi saamiseks on vaja FirstWave\'i ettevõtte binaarset versiooni. Palun lae OpenAudIT alla';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Kogu sellega seotud lähtejoon on see tulemus.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Kasutatud haavatavus võib mõjutada ressursse, mis ei kuulu haavatava komponendi julgeolekuasutuse alla. See tähendab tavaliselt privileegi või usalduspiiri ületamist (näiteks põgenemine konteinerist vastuvõtvasse operatsioonisüsteemi).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Kasutatud haavatavus mõjutab ainult sama julgeolekuasutuse ressursse kui haavatav komponent. Teisisõnu, ründaja tegevus jääb algse usalduspiiri sisse.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Välise viitega asukoha ID. Tavaliselt kasutatakse pilveauditit.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Integratsiooniga seotud väljad salvestatakse andmebaasi JSON objektide kogumina. Igal väljal on järgmised atribuudid:';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Esimest korda, kui Open-AudIT sai selle seadme üksikasjad.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Põrand, millel rakk asub.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Viidatav võõras tabel. See peaks olema üks: seadmed, asukohad, orgid või päringud.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Teie andmete vorming peaks olema vormis';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'E- postiga saadetava väljundi vorming.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Täielikult kvalifitseeritud veerg, mille järgi rühmitada. Märkus: Kui tüüp = liiklus, tähistab see punast päringu ID-d.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Täielikult kvalifitseeritud nimi, mille väline süsteem tagastab. EG: NMIS puhul kasutame konfiguratsiooni. rolli Tüüp.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Täielikult kvalifitseeritud tabel. veerg. Võib olla mitu, eraldatud komaga (tühikuid ei ole).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Selle haavatavuse testimiseks genereeritud SQL- päring. Seda välja saab muuta päringu parandamiseks vastavalt vajadusele.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Seadmete rühm, mille suhtes nulljoont kasutati.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Rühm, mis esitab integratsiooniseadmete nimekirja. Lingid <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Päevatund, mil see ülesanne tuleb täita (* iga tunni kohta).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Lingitud seadme ID. Lingid <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Identifikaatori veerg (täisarv) andmebaasis (loe ainult).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Selle lähtejoone tähtsus (veel kasutamata).';

$GLOBALS["lang"]['The integer of severity.'] = 'Raskuse täisarv.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Sisemine väärtus, vormindatud selles formaadis.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth-meetodi IP-aadress.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Keel, millesse veebiliides kasutaja jaoks tõlkida.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Viimane kuupäev ja kellaaeg, mil see element täideti (loe ainult).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Viimane kord, kui Open-AudIT sai teada selle seadme üksikasjad.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Viimane kord, kui need kriteeriumid täideti.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Viimati toimus selline integratsioon.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Litsentsi lõpp-punkt võimaldab teil jälgida teie seadmetes leiduvate litsentside arvu.';

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

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Seadme sobitamise loogika sisaldub failis devices_helper.php, mille Linuxi installimisel leiab siit';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Masin-vaikimisi loa seadistused ei anna COM-serveri rakendusele kohaliku aktiveerimise luba';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Maksimaalne füüsiline kaal (KG-des), mida see rack võib hoida.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Maksimaalne kogu BTU, millele see rack on hinnatud.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Atribuutide minimaalsed nõutavad atribuudid on';

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

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Uus agent töötab PowerShelli versiooni vanast auditiskriptist, et valmistuda VBScripti amortisatsiooniks (jah, see on tulemas).';

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

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Vahetus on seadmete arv, kust soovite andmeid tagastada.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Ainus nõutav luba / poliitika nimi (meie testimisel) on';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Vabatahtlik teisene veerg. Märkus: Kui tüüp = liiklus, tähistab see kollast päringu ID-d.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Vabatahtlik kolmas veerg. Märkus: Kui tüüp = liiklus, tähistab see rohelise päringu ID-d.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Infootsingu järjekord on snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Selle seadme orientatsioon.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Parool (kui kasutaja ei kasuta skripti).';

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

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Esmane autoriseerimismeetod (mida kasutaja saab teha) põhineb nüüd kasutajate rollidel. Rollid on defineeritud kui admin, org_admin, reporter ja vaikimisi kasutaja. Igal rollil on iga lõpp-punkti jaoks õiguste kogum (loo, loe, uuenda, kustuta). Standardsed rollid peaksid katma 99,9 protsenti kasutusjuhtudest. Võimalus määratleda täiendavaid rolle ja muuta olemasolevaid rolle on lubatud Open-AudIT Enterprise\'is.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Järjekorra elemendi protsessi identifikaator.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Protsess, mida kasutati viimati seadme andmete hankimiseks';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Selle litsentsilehe eesmärk on loetleda Firstwave Commercial toodetes sisalduvad tooted ja litsentsid, sealhulgas avatud lähtekoodiga töödel põhinevad tooted. Open-AudIT on litsentseeritud Firstwave\'ist AGPLv3 või uuema AGPLv3 alusel koos äritingimustel litsentsitud Enterprise\'i ja Professionali funktsioonidega. Open-AudIT, kui see on alla laaditud FirstWave\'ist, võib sisaldada järgmisi teeke ja projekte, mida tarnitakse modifitseerimata ja litsentsitud nagu näidatud:';

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

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Taotletud omadused peaksid olema komadega eraldatud loendis. Omadused peaksid olema täielikult kvalifitseeritud - st system.hostname (mitte ainult hostname).';

$GLOBALS["lang"]['The result of the command.'] = 'Käsu tulemus.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Ruum, kus rakk asub.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Rida, milles rack asub.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'Grupi otsimine LDAP serveris nurjus. Kontrolli LDAP serveri logisid. Kas olete loonud need rühmad (rollide ja orgide jaoks) LDAP-serveris ja määranud neile LDAP-i kasutajad?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Salajane võti, mida kasutatakse koos teie AWS EC2 API võtmega.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Tarkvara lõppkäitluse kuupäev.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Tarkvara kasutusaja lõppkuupäev.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Konkreetse andmebaasi veerg määratud andmebaasitabelist.';

$GLOBALS["lang"]['The specific database table.'] = 'Andmebaasi eritabel.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Standardsed Nmapi ajastuse valikud. Eelnevalt seatud T4 (agressiivne).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standardsed Nmapi ajastuse valikud. Tavaliselt kasutame -T4 (agressiivne), kuna seda soovitatakse korraliku lairiba- või ethernetiühenduse jaoks.';

$GLOBALS["lang"]['The status of this integration'] = 'Integratsiooni staatus';

$GLOBALS["lang"]['The status of this queued item.'] = 'Järjekorras oleva elemendi staatus.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Allpool on kirjeldatud protsessi.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Siht- IP, millele see logikirje viitab (kui on).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Sihtarvuti, mida auditeerida. \.\ tähendab localhost.';

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

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Filtreerimata olek tähendab, et port on ligipääsetav, kuid Nmap ei suuda kindlaks teha, kas see on avatud või suletud. Ainult ACK-skaneerimine, mida kasutatakse tulemüüri reeglite kaardistamiseks, klassifitseerib sadamad sellesse olekusse. Filtreerimata portide skannimine teiste skaneerimistüüpidega, nagu akna skaneerimine, SYN-skaneerimine või FIN-skaneerimine, võib aidata lahendada, kas port on avatud.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Selle serveri unikaalne identifikaator.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Kasutajakonto, mida koguja kasutab. Lingid <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Active Directory / OpenLDAP kasutaja peab olema rollide ja orgide jaoks vajalike Open-AudIT rühmade otsene liige. Grupi liige, kes on teise grupi liige, kes on Open-AudIT grupi liige, ei tööta.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Kasutaja on LDAP-is ja nende volitused on kehtivad, kuid ei ole üheski Open-AudIT LDAP grupis Orgsi jaoks.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Kasutaja on LDAP-is ja nende volitused on kehtivad, kuid ei ole üheski Open-AudIT LDAP grupis rollide jaoks.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Kasutaja on LDAP-is ja nende volitused on kehtivad, kuid ei ole üheski nõutud Open-AudIT LDAP-grupis.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Kasutaja on LDAP grupis, mis sobib selle Orgiga.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Kasutaja on LDAP grupis, mis vastab sellele rollile.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Kasutaja ei kuulu LDAP gruppi, mis sobib selle Orgiga.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Kasutaja ei kuulu LDAP gruppi, mis sobib selle rolliga.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'Määratud kasutaja on olemas LDAP-is, kuid Open-AudIT ei ole konfigureeritud LDAP-gruppe rollide jaoks tarbima ja seda kasutajat Open-AudIT-is ei ole. Valige kas <i>LDAP kasutamine rollide korral</i> avatud auditeerimisprogrammi kohta Server ekraani või luua see kasutaja jooksul Open-AudIT ja määrata rollid ja orgid.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Kasutajanimi (kui ei kasuta skripti töötavat kasutajat).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Kasutajanimi, mida kasutatakse välisele süsteemile juurdepääsuks.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Kasutajate andmeid LDAP-ist ei leitud. Kontrolli LDAP serveri logisid.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Kasutajate andmed saadi LDAP-st.';

$GLOBALS["lang"]['The users email address.'] = 'Kasutaja e- posti aadress.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Tavapärased töötunnid selles kohas.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Kirjele omistatud väärtus.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Selle konkreetse elemendi jaoks salvestatud väärtus.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Müüja nimi vastavalt CPE kirjetele.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Müüja võttis CPE-lt.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Veebikataloog masinal, mille Open- AudIT on paigaldatud (vajab lohisevat kaldkriipsu).';

$GLOBALS["lang"]['The widget at position '] = 'Vidin asukohas ';

$GLOBALS["lang"]['The width of this device.'] = 'Seadme laius.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Nende orgiidid ja nende järeltulijad';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Ainult orgiidid';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Nende orgiidid, ülenejad ja järeltulijad';

$GLOBALS["lang"]['Then'] = 'Siis';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Seejärel loo Open-AudIT-is uus autentimismeetod, minnes menüüsse -> Admin -> Autentimismeetodid -> Loo Auth. Märkida nimi ja määrata <i>tüüpi</i> Entrale.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Seejärel saate kasutada Open-AudIT (toetamatut) auditiandmete saamiseks otse klientidelt. Discovery <strong>ebaõnnestub</strong>, aga kui te ei kasuta Discoveryt (peamine funktsioon Open-AudIT oli mõeldud ümber), saate ikkagi seadme andmeid. Peate käivitama auditi skriptid otse klientidel, kasutades cronit, või kasutama funktsiooni Windows Agent (ainult ettevõte).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'JSON-i eksportimiseks on olemas nupp. See näitab ainult seadme atribuutide tabelit. Seadme eksportimiseks kõigi seotud komponentide tabelitega vaadake seadme üksikasju, seejärel lisage';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Ei ole vaja igat seadet käsitsi redigeerida.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Ei ole vaja midagi teha, kui kasutate Open-AudIT Linuxi serveris.<br/><br/>Windowsi kliendid on lihtsalt trahvi ja ei vaja mingeid eritoiminguid, aga ... selle funktsiooni lubamiseks tuleb auditi skript käivitada lokaalselt siht-Windowsi süsteemis. Seda ei saa käivitada kaugjuhtimisega, nagu me teeme WMI-kõnedega, kui käivitame auditi skripti ühel Windowsi masinal, sihtides samal ajal teist Windowsi masinat. Selleks peame kopeerima auditi skripti siht-Windowsi masinasse ja seejärel käivitama. Kahjuks on teenusekonto, mille alla Apache jookseb, kohaliku süsteemi konto. Sellel kontol puudub juurdepääs võrgupõhistele (võrgupõhistele) ressurssidele. Selle probleemi lahendamiseks tuleb teenust hallata teise konto all. Kõige lihtsam on kasutada kohalikku administraatori kontot, kuid võite proovida mis tahes soovitud kontot, kui sellel on vajalikud privileegid. Kohaliku süsteemi kontol on sama palju kohalikku juurdepääsu kui kohaliku administraatori kontol.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Need on vaid näited. Võib-olla peate neid atribuute kohandama vastavalt teie konkreetsele LDAP-le.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Need parameetrid võimaldavad teil auditeerida ainult seda, mis on teile kasulik ja asjakohane, säästes töötlemisaega ja võimaldades teil oma võrku korrapäraselt avastada.';

$GLOBALS["lang"]['Thing'] = 'Asi';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Mõtle mail.domain1.com ja mail.domain2.com - sama hostinimi.';

$GLOBALS["lang"]['Third'] = 'Kolmas';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'See CVE hangitakse ja kirjutatakse olemasolev CVE üle, kui see on olemas.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Sellel orgil ei ole määratud AD rühma. Kontrollige rollide üksikasju Open-AudIT-is.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Sellel orgil ei ole määratud AD rühma. Kontrollige rollide üksikasju Open-AudIT-is. <span class=\'\"confluence-link\"\'>Kas olete loonud need rühmad (orgide jaoks) LDAP-serveris ja määranud neile LDAP-i kasutajad?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'See roll ei ole määratud AD rühma. Kontrollige rollide üksikasju Open-AudIT-is.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'See atribuut salvestatakse JSON-objektina. See on kõigi kogude nimekiri ja sisaldab kogu nime koos <code>c</code>, <code>r</code>, <code>u</code> ja <code>d</code> mis esindavad loomist, lugemist, värskendamist ja kustutamist. Need on toimingud, mida kasutaja saab selle konkreetse kollektsiooni objektidel teha.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'See võib olla kas varchar (tekstiväli), loend (valitavate väärtuste loend) või kuupäev.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'See kood tugineb suurele tööle, mida on teinud';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'See koguja on universaalselt ainulaadne identifikaator.';

$GLOBALS["lang"]['This column is required by'] = 'Seda veergu nõuavad:';

$GLOBALS["lang"]['This column is required by '] = 'Seda veergu nõuavad: ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'See kirjeldus on automaatselt asustatud ja peaks ideaalis jääma nii, nagu on.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'See lõpp-punkt võimaldab teil lisada ühendusi, mis on osa teie võrgu infrastruktuurist, see võimaldab teil kohandada erinevaid atribuute, määrata, kus see ühendus asub ja organisatsioon, kuhu see kuulub.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'See viga näitab, et SMB1 on keelatud või sihtseadmest eemaldatud. See on tavaline Windowsi kaasaegse versiooni puhul ja seda sõnumit näete ainult siis, kui SMB2 ühenduse katse on ebaõnnestunud. Kui SMB2 ühendus ebaõnnestub, püüame SMB1 võimaldada avastamist Windowsi vanades versioonides. Kui sihtotstarbeline Windowsi masin <i>on</i> Windowsi vana versiooni käivitamine on tõenäoliselt ebaõnnestunud. Sel juhul vaata';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'See viga näitab, et määratud toimingu lõpetamiseks ei ole piisavalt virtuaalmälu või otsingufaili kvooti. Sa peaksid hiljem uuesti proovima.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'See viga näitab, et kasutatavad mandaadid on valed, neid ei ole olemas või neil ei ole piisavalt õigusi siht-Windowsi masinasse kauglogimiseks. Sa peaksid kontrollima volikirjad ja kontrollida allpool.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'See näide loob nimekirja kõikidest moodulitest, mis on märgitud kui';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'See näide loob NMAP-skaneerimisega leitud seadmete ja avatud portide, protokollide ja programmide loendi.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'See näide loob nimekirja seadmetest, kus funktsiooni või kirjelduse väljad on tühjad VÕI ostukuupäev on vaikimisi.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'See näide päring toob välja loendi seadmetest, mis on üle 3 aasta vanad. Päringut kasutatakse täna';

$GLOBALS["lang"]['This example uses'] = 'See näide kasutab';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'See funktsioon nõuab professionaalset või ettevõtluslitsentsi.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'See funktsioon, kuna see suudab sihtmärgi seadmeid tavapärasest rohkem mõjutada, peab olema käsitsi sisse lülitatud. Selle sisselülitamiseks muuda konfiguratsioonielementi feature_ executables <i>jah</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'See fail käsib Linuxil küsida rakendust, et teha kindlaks, kas on mingeid ajastatud ülesandeid, mida tuleks käivitada.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'See vorm pakub lihtsat võimalust alustada oma võrgu seadmete avastamist. Rohkem (palju rohkem) üksikasjalikke valikuid saate individuaalselt luua';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'See on ka viis, kuidas PAExec töötab.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'See on valikuline seadistusvalik, mida võimaldab globaalses seadistuses määrata Discover_use_org_id_ match.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'See on tavaliselt esmane veerg, kui pole teisiti seadistatud. Märkus: Kui tüüp = liiklus, tähistab see teisejärgulist teksti.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'See on tõenäoliselt tingitud MySQL-i ajast. MySQL kasutab tavaliselt hostseadmete aega. Sa võid seda kontrollida';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'See on seadistatav kasutajate poolt ja kuigi see peaks olema ülemaailmselt ainulaadne, ei ole see kindlasti garanteeritud.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'See on kataloog, kuhu salvestame kõik seadmete manused.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Seda kasutatakse esimese kõnepunktina, kui tõrkeotsing Open-AudIT probleeme. Selle leidmiseks JSON-failina (lisatakse tugipiletile / e-postile) saate klõpsata ülal paremal nupul Ekspordi.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'See küsimus on uurimise all.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'See element peab vastama valitud atribuudi väärtusele või sisaldama kasutatava päringu ID-d.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'See element peab vastama valitud atribuudi väärtusele.';

$GLOBALS["lang"]['This license expires on'] = 'Käesolev litsents aegub';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Seda turvaluba saab muuta komponenditeenuste haldusvahendi abil.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Seda tuleks pärast tõrkeotsingut kommenteerida, kuna silumisrežiim tekitab kettal palju logisid ilma kasuta.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'See peaks olema globaalselt ainulaadne, kuid olen näinud juhtumeid, kus seda ei ole.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'See peaks olema kas 1 või riiuli kõrgus.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'See peaks olema andmebaasis täielikult kvalifitseeritud välja nimi. Praegu on toetatud veerud süsteemist, väljad ja volikirjatabelid. EG: system.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Seda olekut kasutatakse siis, kui Nmap ei suuda kindlaks teha, kas port on suletud või filtreeritud. Seda kasutatakse ainult IP-ID jõudeoleku skannimiseks.';

$GLOBALS["lang"]['This will auto-populate.'] = 'See toimub automaatselt.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'See aeglustab oluliselt avastamisskaneerimist.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'See kustutab aktiivsed read';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'See kustutab selle litsentsi jäädavalt.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'See näitab teile Bulk Edit vormi. Kõik sellele vormile määratud atribuudid rakenduvad kõigile valitud seadmetele. Saate määrata mitu atribuuti korraga.';

$GLOBALS["lang"]['Thursday'] = 'neljapäeval';

$GLOBALS["lang"]['time_caption'] = 'Ajapealdis';

$GLOBALS["lang"]['Time Caption'] = 'Ajapealdis';

$GLOBALS["lang"]['time_daylight'] = 'Päevavalgus';

$GLOBALS["lang"]['Time Daylight'] = 'Päevavalgus';

$GLOBALS["lang"]['Time to Execute'] = 'Aeg käivitada';

$GLOBALS["lang"]['timeout'] = 'Aegumine';

$GLOBALS["lang"]['Timeout'] = 'Aegumine';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Aegumine sihtmärgi kohta (teised)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Aegumine sihtmärgi kohta. Oodake X sekundit sihtmärgi vastuse saamiseks.';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Ajatempel';

$GLOBALS["lang"]['timing'] = 'Ajastus';

$GLOBALS["lang"]['Timing'] = 'Ajastus';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Pealkiri';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Uuele failile nimega .env (samas kataloogis). Nüüd redigeeri seda uut faili ja eemalda kommentaar (eemalda #) allpool olev rida (rida 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Päringu tegelikuks täitmiseks lisa a /execute, seega /open-audit/index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Masina auditeerimiseks peab teil olema volikiri ja administraatori tasemel juurdepääs.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Kaugmasina auditeerimiseks Active Directory domeenis peab teie kasutaja (või kui seda ei ole antud, siis kasutaja, kes töötab skriptiga) olema sihtmasinate rühma Administraatorid (või alamgrupp) liige.';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Selleks, et auditeerida kaugmasinat, mis ei ole domeenis, peate kasutama administraatori kontot (mitte administraatori kontot). <i>anne</i> administraatorikonto, <i>need</i> Administraatori konto sihtarvutis. #1 ja #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Localhosti auditeerimiseks ei võeta arvesse kõiki antud volitusi ja ühendus luuakse skripti kasutava kasutaja andmeid kasutades.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Tarkvara võrdlemiseks kontrollime nime ja versiooni. Kuna versiooninumbrid ei ole kõik vormingus standarditud, siis kui saame auditi tulemuse, loome uue atribuudi nimega software_padded, mille salvestame andmebaasi koos ülejäänud tarkvara üksikasjadega iga paketi kohta. Seetõttu ei tööta tarkvarapoliitikaid kasutavad lähtejooned, kui need töötavad seadme vastu, mida ei ole 1.10-ga auditeeritud (vähemalt). Tarkvara reeglid võivad testida versiooni <i>võrdne</i>, <i>suurem</i> või <i>võrdne või suurem kui</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Uue kirje loomiseks klõpsa nupule Loo paremas ülanurgas.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Ressursi loomiseks peate sisestama vajalikud andmed.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Võimaldamaks auditeerida kaugmasinat (Vista või uuem), mis ei asu domeenis, administraatorite grupi kontol, mis ei ole tegelik administraatori konto, vt allpool UAC jaotist.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Selle võimaldamiseks loo uus Auth element menüükäsuga -> Admin -> Auth -> Loo autentimismeetod.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Windows Powerhelli skripti käivitamiseks avage käsuviip administraatorina ja kasutage järgmist käsku';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Auditi skripti käivitamiseks ava terminal ja kasuta järgmist käsku';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Omaduse väärtuse filtreerimiseks kasutage omaduse nime. Operaatorid, kes peaksid väärtusele eelnema, on';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Nmapi installimiseks Windowsis külastage Nmapi lehte aadressil';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Muudatuse tegemiseks järgige allpool toodud samme.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Rentniku ID kättesaamiseks. Avage Azure\'i portaali klõps Azure Active Directory, Properties ja rentniku ID kuvatakse teie Kataloogi ID-na - ärge süüdistage mind nime mittevastavuses, nii Microsoft rullib.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Võtme kättesaamiseks logige sisse AWS-konsooli ja valige oma kasutajanimi, seejärel My Security Credentials.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Konkreetse komponendi tagastamiseks.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Tagastab kõik elemendid konkreetse seadme kompnenditüübi jaoks.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Tagastada kõik elemendid komponendi tüübile. Kui soovite kogu tarkvara, mida kasutate';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Tagurpidi sortimiseks sisesta miinus';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Testskripti käivitamiseks siht-Windows PC-l';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Integreeritavate seadmete valimiseks kasutame nmis_manage = y, kuid teile võib meeldida (näiteks) tüüp = ruuter. Võite kasutada ka rühma või päringut, kui eelistate midagi keerukamat.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Sorteerimiseks andmebaasi veeru järgi kasutatakse';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Selle ettevõtte funktsiooni kasutamiseks peate kõigepealt looma oma kasutaja Open-AudITis nagu tavaliselt. Parooli andmine ei ole vajalik. Sa pead määrama rollid ja orgid. Open- AudIT kasutajanimi peab sobima Entraga <i>eelistatud kasutajanimi</i> atribuut. Ei ole vaja täisnime ega e-posti - need on asustatud Entra. Kui te ei tunne oma kasutajaid <i>eelistatud kasutajanimi</i>Ära karda. Saate luua uue autentimismeetodi Open-AudIT-is ja Entra ettevõtlusrakenduses ning kui kasutaja üritab Open-AudIT-i sisse logida ilma eelnevalt olemasoleva kasutajata, kontrollige logisid ja näete nende <i>eelistatud kasutajanimi</i> logitud sinu veenmiseks.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Selle ettevõtte funktsiooni kasutamiseks peate kõigepealt looma oma kasutaja Open-AudITis nagu tavaliselt. Parooli andmine ei ole vajalik. Sa pead määrama rollid ja orgid. Open- AudIT kasutajanimi peab vastama OKTA-le <i>nimi</i> atribuut. Täielikku nime või e-posti ei ole vaja - need täidetakse OKTA-st. Kui te ei tunne oma kasutajaid <i>nimi<i>Ära karda. Saate luua uue Auth Menthod Open-AudIT ja rakendus OKTA ja kui kasutaja üritab sisse logida Open-AudIT ilma eelnevalt olemasoleva kasutaja, kontrollige logid ja näete nende <i>nimi<i> logitud sinu veenmiseks.<br/><p>Seejärel loo Open-AudIT-is uus autentimismeetod, minnes menüüsse -> Admin -> Autentimismeetodid -> Loo Auth. Märkida nimi ja määrata <i>tüüpi</i> Oktasse.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Selle funktsiooni kasutamiseks peate lubama konfiguratsioonielemendid match_ mac (AWS-i jaoks) ja match_ hostname (Azure\'i jaoks). Seda tehakse automaatselt esimesel korral, kui pilv avastatakse. Lisateavet Open-AudITs sobitamise reeglite kohta leiate siit: sobitamise seadmed';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Päringu üksikasjade vaatamiseks on /open-audit/indexi standardne URL-struktuur. Kasutada tuleb php/queries/{$id}.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Tööriistariba stiil';

$GLOBALS["lang"]['Toolbar Style'] = 'Tööriistariba stiil';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP pordid';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Ports. Top 10, 100, 1000 porti skaneerida vastavalt Nmapsi "top portide" valikutele.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Ülemine Nmapi UDP port';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Ports. Top 10, 100, 1000 porti skaneerida vastavalt Nmapsi "top portide" valikutele.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Traditsiooniline hiina';

$GLOBALS["lang"]['Traffic Light'] = 'Liiklustuli';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad ja Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Tõrkeotsing';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'LDAP- i sisselogimiste tõrkeotsing';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'OpenAudIT proovi Enterprise, meile ilma ajapiiranguta. Kõik Enterprise\'i omadused. Piiratud 20 seadmega.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Proovige kõiki uusimaid funktsioone Open-AudIT Enterprise\'i TASUTA 100 seadme litsentsiga. Palun lugege ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Proovi sisse logida kasutades LDAP kasutajat. Me eeldame, et see ei õnnestu (muidu, miks te seda veel loete?). Seejärel kommenteerige rida eespool olevast failist.';

$GLOBALS["lang"]['Tuesday'] = 'Teisipäev';

$GLOBALS["lang"]['Tunisia'] = 'Tuneesia';

$GLOBALS["lang"]['Turkey'] = 'Türgi';

$GLOBALS["lang"]['Turkish'] = 'Türgi';

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

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Tüüp: See võib olla kas varchar (tekstiväli) või List (valitud väärtuste loend).';

$GLOBALS["lang"]['Types of Networks'] = 'Võrgustiku tüübid';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp portide';

$GLOBALS["lang"]['Udp Ports'] = 'Udp portide';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraina';

$GLOBALS["lang"]['Ukrainian'] = 'Ukraina';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = '1. etapi audit (dokumentide läbivaatamine)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = '2. etapi audit (rakendamise läbivaatamine)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Käimasolev analüüs';

$GLOBALS["lang"]['Unfiltered'] = 'Filtreerimata';

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

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Haavatavuste uuendamine';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Uuenda {collection} kirje atribuuti.';

$GLOBALS["lang"]['Update attributes'] = 'Atribuutide uuendamine';

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

$GLOBALS["lang"]['Urdu'] = 'Urdu';

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

$GLOBALS["lang"]['Use Proxy'] = 'Proxy kasutamine';

$GLOBALS["lang"]['Use SNMP'] = 'SNMP kasutamine';

$GLOBALS["lang"]['Use SSH'] = 'SSH kasutamine';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Kasuta turvalist (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Teenuse versioonituvastuse kasutamine';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Teenuse versioonituvastuse kasutamine. Kui tuvastatav sadam on avatud, kui see on seatud <i>y</i>, Nmap pärib sihtseadmelt, püüdes määrata selles pordis töötava teenuse versiooni.<br/>See võib olla kasulik klassifitseerimata seadmete tuvastamisel. Seda varem ei kasutatud.';

$GLOBALS["lang"]['Use WMI'] = 'WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Kasuta <i>Sisselogimise meetod</i> OIDC - OpenID Connect ja an <i>Rakenduse tüüp</i> veebirakenduse. Click <i>Järgmine</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Kasutamine autentimiseks';

$GLOBALS["lang"]['Use for Roles'] = 'Rollide kasutamine';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Standardsete installimisvalikute kasutamine kuvamisel ja kliki <i>Nõustun</i>, <i>Järgmine</i> ja <i>Paigalda</i> Nmapi paigaldamise nupud.';

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

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Kasutajad töötavad sarnaselt Netstat Ports. Kui kasutaja on olemas sobiva nime, staatuse ja parooli andmetega (muudetav, aegub, nõutav), siis poliitika läbib.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Kasutajad, rollid ja orgid';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Kasutab CodeIgniter PHP raamistikku.';

$GLOBALS["lang"]['Using'] = 'Kasutades';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Entra kasutamine autentimiseks';

$GLOBALS["lang"]['Using LDAPS'] = 'LDAPS- i kasutamine';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'OKTA kasutamine autentimiseks';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Vormingu valiku kasutamine on kasulik veebibrauseri kasutamisel, kuid soovite näha tulemust JSON-vormingus. Formaadi lisamine=json saavutab selle. Tavaliselt määrab veebibrauser oma aktsepteeritava päise HTML-ile, nii et sel juhul tagastame renderdatud lehe. API kasutamine JSON- i kättesaamiseks peaks määrama aktsepteeritava päise';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Tavaliselt Mbs, asukohast A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Tavaliselt Mbs, asukohast B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Tavaliselt Mbs, asukohani A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Tavaliselt Mbs asukohani B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Tavaliselt tuleks seada 3.';

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

$GLOBALS["lang"]['Value Types'] = 'Väärtusetüübid';

$GLOBALS["lang"]['values'] = 'Väärtused';

$GLOBALS["lang"]['Values'] = 'Väärtused';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Väärtused: Kui <i>nimekirja</i> väli, see peaks olema kehtivate väärtuste komadega eraldatud loend.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Muutuja';

$GLOBALS["lang"]['Variable'] = 'Muutuja';

$GLOBALS["lang"]['Various'] = 'Erinevad';

$GLOBALS["lang"]['vendor'] = 'Müüja';

$GLOBALS["lang"]['Vendor'] = 'Müüja';

$GLOBALS["lang"]['Vendor Report'] = 'Müüja aruanne';

$GLOBALS["lang"]['vendors'] = 'Müüjad';

$GLOBALS["lang"]['Vendors'] = 'Müüjad';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

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

$GLOBALS["lang"]['Vietnamese'] = 'Vietnami';

$GLOBALS["lang"]['View'] = 'Vaade';

$GLOBALS["lang"]['View All'] = 'Vaade';

$GLOBALS["lang"]['View Details'] = 'Vaatamise üksikasjad';

$GLOBALS["lang"]['View Device'] = 'Vaade Seade';

$GLOBALS["lang"]['View Discovery'] = 'Vaade Avastamine';

$GLOBALS["lang"]['View Policy'] = 'Vaatepoliitika';

$GLOBALS["lang"]['View Racks'] = 'Vaade Racks';

$GLOBALS["lang"]['View the'] = 'Vaata';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Vaade avastusele ja seejärel klõpsa nupule Toetus paremal tööriistaribal. See annab avastamisseaded, seadistamiselemendid, avastamisseadmete loendi ja selle konkreetse avastuse logid.';

$GLOBALS["lang"]['View the release notes on the'] = 'Avaldamismärkuste vaatamine';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuaalne privaatvõrk';

$GLOBALS["lang"]['Virtual private network'] = 'Virtuaalne privaatvõrk';

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

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Haavatavus ja tulemused';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Haavatavused avaldati algselt enne 1. jaanuari 2025 (vaikimisi). Me ei näe mõtet tagastada varasemate aastate haavatavusi. Seda saab konfiguratsioonis muuta.';

$GLOBALS["lang"]['vulnerability_id'] = 'Haavatavuse ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Haavatavuse ID';

$GLOBALS["lang"]['Vulnerability Status'] = 'Haavatavuse seisund';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'HOIATUS - tarkvarapoliitika abil lähtejoone loomisel pakivad praegu Centos ja RedHat kerneli nimede abil <i>tuuma</i> ja <i>tuumadevel</i>. Selle nimega võib olla mitu paketti ja samaaegselt installitud erinevad versioonid. Debiani-põhised distributsioonid kasutavad nimesid nagu <i>linux-image-3,13,0-24-generic</i>Pange tähele, et versiooni number sisaldub pakendi nimes. Kuna RedHatil põhinevad operatsioonisüsteemid kasutavad seda vormingut ja neil on hiljem mitu identset paketinime erinevate versioonidega, välistame me praegu <i>tuuma</i> ja <i>tuumadevel</i> tarkvarapoliitikast. Seda võib käsitleda tulevases uuendamises.';

$GLOBALS["lang"]['WHERE'] = 'Kus';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI volituste nõuded';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Oodake, kuni see lõpeb, seejärel kleepige see järgmisele reale, et paigaldada agent.';

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

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Meil on ka võimalus Ping Before Scan (oluline marsruuteritele, millel on pikaajaline ARP vahemälu). See on tavaliselt hea mõte.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Meil on ka meie tegevused (mis täidetakse allpool toodud järjekorras):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Sageli küsitakse seda küsimust ja vastus on kindlasti <i>sõltub</i>. See sõltub skaneeritavate IP-de arvust, võrguühenduse kiirusest, skaneeritavate seadmete kiirusest, skaneeritavate seadmete tüübist, testitavate erinevate volituste arvust ja Open-AudIT serveri kiirusest. Meil ei ole kalkulaatorit, mis võimaldaks meil neid muutujaid sisestada ja väärtust tagastada. See on lihtsalt liiga keeruline. Üldiselt piirdun oma avastustega 256 IP-aadressiga - st /24 alamvõrguga. Meil on olnud kliente skaneerida /16 alamvõrgud (65k aadressid) ja see ei tööta - kuid see võib võtta kaua aega. Teil on palju parem skaneerida /24 plokis. Kui te lihtsalt ei tea, millised on teie aadressivahemikud, siis on see hea juhtum seemne avastamiseks.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Meil on üksikasjalikumad juhised';

$GLOBALS["lang"]['We have tests for:'] = 'Meil on testid:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Loodame, et leiate, et avatud audit on sama kasulik kui meie.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Esialgu seadistame vaikevalikutega skriptide vaikenimekirja. Skriptiloend on nähtav aadressil /scripts. Neid vaikeskripte ei saa kustutada. Võite luua täiendavaid skripte, mida vajadusel kasutada. Teie skript põhineb ühel olemasoleval skriptil ja sellel on kohandatud valikud. Seejärel saab skripte alla laadida loendi lehelt menüüs: Avasta -> Audit Scripts -> Audit Scripts.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Meil on vaja mõningaid volitusi, et teie võrgu seadmetega tõhusalt rääkida.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Me saadame ainult minimaalse hulga andmeid ja mitte midagi tundlikku. Saadame oma litsentsiandmed (nimi, tüüp jne), oma rakenduse andmed (nimi, versioon, platvorm, ajavöönd jne), logitud vead, seadmetüüpide arvu ja kasutatud funktsioonide arvu. <i>Iga</i> Keskkonnal on seadmed ja see on ainus osa teie andmetest, mida me saadame. Ja ainult seadme tüüp ja loend. Mitte tootja, mitte mudel. Me ei saada midagi erilist. Ei mingeid võrke. IP-aadresse pole. Operatsioonisüsteemi versioone pole. Tarkvaranimesid pole. Väljad UUID ja Server on kodeeritud sha256 (nii et me ei tea väärtust). Saadame ainult andmed, mida vajame toote täiustamiseks. Loodame, et näete selle teabe kasulikkust meile kõigile. See annab meile suuna, kuhu toote parendusi ja uusi funktsioone keskenduda.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Tavaliselt kasutame Google Chrome\'i laiendust Postman tegelike rahulike päringute testimiseks. Võib-olla soovite sellega installida ja katsetada.';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Web Application Routes'] = 'Veebirakenduste marsruudid';

$GLOBALS["lang"]['Web Server Discovery'] = 'Veebiserveri avastamine';

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

$GLOBALS["lang"]['Welcome to'] = 'Tere tulemast';

$GLOBALS["lang"]['Western Sahara'] = 'Lääne-Sahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Mida ma võin oodata, kui mul pole mandaati';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Kuidas on väljadega, mida ma tahan NMIS-ilt, mis ei ole avatud auditis? Sa oled kaetud. Kõik välissüsteemi (NMIS) väljad, mida Open-AudIT-is ei ole, luuakse automaatselt Open-AudIT Custom väljadena.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Kuidas on teiste võrguseadmetega? Mõtle lülitid, ruuterid, printerid jne. Loomulikult on kõige parem, kui saate nende seadmete jaoks pakkuda mõnda SNMP mandaati. Nad vajavad ainult <i>ainult lugemisõigusega</i> ligipääsu. Kuid kui te ei soovi seda isegi teha, ei takista miski teid avastamast, leidmast seadmeid ja tegemast nende tuvastamiseks reeglit või kahte (võib-olla kasutage näiteks MAC-aadressi prefiksi koos avatud portidega). Teil ei ole palju teavet, kuid teate, et nad on võrgus, millised nad on ja millal neid viimati nähti. Samuti näete, kas võrgus ilmub midagi uut.';

$GLOBALS["lang"]['What do we send?'] = 'Mida me saadame?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Mida see sinu jaoks tegelikult tähendab?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Mis on selle riiuli eesmärk?';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Milline on selle asukoha tüüp? Lubatud tüübid <code>attributes</code> laud.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Kui Open-AudIT Linuxis avastab Windowsi masina, et täita kaugkäsk, mida me kasutame';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Kui Open-AudIT in Windows avastab Windowsi masina, et täita kaugkäsk, mida me kasutame';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Avamisel IT saab andmeid seadme kohta, kas avastades seadme auditi käigus või importides seadme kasutaja, peab ta kindlaks tegema, kas see avastatud seade vastab seadmele, mis on juba tema andmebaasis olemas, või kas see on uus seade, mis tuleks lisada. Open-AudIT kasutab selle kindlakstegemiseks kaheteistkümne kinnisvara vastete seeriat. Mängureeglid toimivad OR-võrdlustena, mitte JA-na. See tähendab, et esimene reegel, mis vastab avastatud seadme väljale ühele dB-s, laheneb olemasoleva seadmena. Kõik sobitamisreeglid peavad ebaõnnestuma, et seade oleks uus ja tulemuseks oleks uue kirje loomine.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Andmete postitamisel peate lisama juurdepääsuloa. Juurdepääsumärk luuakse iga päringutüübiga, nii et tehke GET (näiteks) ja Aktsepteeri: rakendus/json, sõeluge meta→access_token vastus ja lisage see oma sooviga. See tuleks paigutada väljaandmete [access_token], IE, kõrgeimale tasemele.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Kui seade avastatakse, sisestatakse auditiskript koos faili (või kataloogi) andmetega. Nii audit_linux.sh kui ka audit_windows.vbs täidetakse sõltumata faili asukohast. Kui sa mõtled <i>Kuid Linuxi tee panemine Windowsi masinasse murrab asju!</i>, see ei katke, te lihtsalt ei saa selle faili või kataloogi kirje andmeid.<br/>Kasutatud andmed salvestatakse <i>faili</i> Andmebaasi tabel ja salvestatakse nagu iga teine atribuut. Failiandmed salvestatakse nagu mis tahes muu atribuut ja genereeritakse hoiatusi, kui mõni järgmistest atribuutidest muutub - <i>täisnimi</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. Tabel sisaldab veerge system_id, first_see, last_seen ja current ning faili üksikasju.<br/>Registreeritud omadused on järgmised:<br/><ul><li>Windows - nimi, suurus, kataloog, SHA1 räsi (faili sisu), viimati muudetud, õigused, omanik, versioon (faili lubamine).</li><br/><li>Linux - nimi, suurus, kataloog, SHA1 hash (faili sisu), viimati muudetud, metaandmed viimati muudetud, õigused, omanik, grupp, inode.</li></ul>Näete jaotist nii Windowsi kui ka Linuxi auditi skriptides allpool';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Kui avastus käivitatakse, valitakse asjakohane avastamise skaneerimise valik ja Nmap kasutab neid seadeid sihtseadmete skannimiseks. Skaneerimisvalikud määravad, millised pordid nmap skaneerivad, kui kiiresti nad skaneerivad ja kas nmap pingit kasutatakse kõigepealt, et teha kindlaks, kas IP on elus või mitte.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Kui avastus käivitatakse, valitakse asjakohane avastamise skaneerimise valik ja need sätted, mida Nmap kasutab sihtseadmete skannimiseks. Kui võtit pole valitud, valitakse ja kasutatakse vaikeseadistuse elementi (discovery_ default_scan_option). Open-AudIT Community kasutab kõigi avastuste puhul vaikevalikuid vastavalt konfiguratsioonile.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Kui alamvõrgu avastamine on käivitatud, käivitab see kõigepealt Nmap ping-skaneerimise vahemikus või IP-aadressidel. Iga reageeriv seade skaneeritakse porti. Kui Nmap ping-skaneerimist ei nõuta, skaneeritakse iga IP-port eraldi. Millised sadamad? Selle määrab kindlaks';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Linuxi seadme auditeerimisel SSH kaudu ei võimalda mõned Linuxi distributsioonid sudo käske edastada ilma TTY-ta (mida me teeme). Ühe sellise Linuxi distributsiooni täielikuks auditeerimiseks on kõige parem pakkuda juurkasutaja volitusi. Kui juuri ei anta ja sudo ilma TTY-ta ei ole võimalik, käivitatakse auditiskript, kuid see ei sisalda andmete hulka nagu muidu. Hilisemad auditid, kus kasutatakse root-tüüpi (või kasutatakse lokaalselt sudot), annavad seega süsteemi kohta lisateavet ja tekitavad mitmeid <i>muudatusi</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Seadmete kombineerimisel, milline süsteem on autoriteetne teabeallikas.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Kui olete lõpetanud, sulgege käsuaken ja olete valmis!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Vidina loomisel, kui valid <i>Advanced</i> nupul on teil võimalus üles laadida oma kohandatud SQL.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Kui integreerime seadmeid välisest süsteemist, siis kui seadet Open-AudIT-is ei eksisteeri, kas peaksime selle looma?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Kui integreerime seadmeid välisest süsteemist, siis kui seadet on välises süsteemis uuendatud, kas peaksime seda Open-AudIT-is värskendama?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Avastamise uurimisel küsib tugi eksporditavaid avastamislogisid. Nende leidmiseks minge menüüsse -> Avastus ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Linuxil põhineva seadme sobitamisel eelistame kasutada Dbusi ID-d, mis on ühendatud hostinimega. Me võime kasutada ka teisi võimalusi vastavalt allolevale tabelile, kuid me saame Dbus ID ilma juureta taastada. UUID-i (emaplaadilt) kättesaamiseks peame käivitama dmidecode\'i, mis nõuab root-i. Kahjuks, kui te kloonite ESXi külalist, ei saa Dbus ID-d uuesti luua - seega me ühendame selle hostinimega. Siin on hea artikkel, mis kirjeldab <i>miks</i> riistvara ID-d.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'JSON-i taotlemisel ei ole vaikimisi limiiti seatud. Ekraani kuvamise taotlemisel on limiit vaikimisi 1000. Seda saab konfiguratsioonis muuta. Vaata <i>Page_ size</i> eseme';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Kui me leiame välise seadme, kas peaksime selle avastama?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Open-AudIT kasutamisel Windowsis peab Apache teenusekonto olema <i>regulaarselt</i> Kasutaja (või Administraator) See on sellepärast, et <i>Kohalik süsteem</i> kontol, mida tavaliselt kasutatakse Apache käivitamiseks, puudub juurdepääs võrguressurssidele. IE - me ei saa Apache\'i kasutada, kui kasutate kohaliku süsteemi kontot auditi skripti kopeerimiseks Windowsi arvutitesse.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Seadistuste valimisel võtame seda arvesse teatud kindlate sobivusreeglite alamhulga seadmete puhul, kus konfiguratsioonielement on lubatud. Need eeskirjad on järgmised:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Kui reeglid töötavad avastamisel, ilmuvad avastamislogis kõik sobivad reeglid. Vt näide allpool.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Millal see võrdlusalus kavatsetakse täita. Tuletatud seotud üksusest <code>tasks.type</code> ja <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Kui see logi loodi.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Kui see järjekorra element alustas töötlemist.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Open-AudIT Professional või Enterprise kasutamisel on vidinad saadaval ja kohandatavad, et neid kuvada juhtpaneelidel.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Kui me teisendame sisemiselt valitud seadet välise süsteemi objektiks, siis millised peaksid olema välised andmed. EG: täisarv, string jne';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Kui me käivitame selle lähtejoone, kas me peaksime kontrollima, kas seadmetes on elemente, mis ei ole selle lähtejoone poliitikas.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Kui me saame avatud porti, kas peaksime proovima testida teenuse versiooni, mis sellel hetkel töötab? See aitab kontrollida tegelikke teenuseid.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Kui kasutate oma Amazoni AWS-i eksemplaride avastamiseks pilve, vajate kahte mandaati - võtit ja salajast võtit. Teie võti peaks olema teile ja teie salajasele võtmele juba teada. Pange tähele, et te ei saa oma salajast võtit Amazoni pakutava AWS-konsooli abil kätte saada. Kui olete selle kaotanud, peate genereerima uue.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Kui kasutate oma Microsoft Azure\'i eksemplaride avastamiseks pilvandmetöötlust, on teil vaja nelja volitust - tellimuse ID, rentniku ID, kliendi ID ja kliendisaladus.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Kui loote avastuse, on teil võimalus Device_assigned_to_org. See tähendab, et kõik selle avastuse jaoks avastatud seadmed määratakse (on <code>devices.org_id</code> Teie valitud organisatsioon.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Kui loote uue avastuse, kui klõpsate nupule Muud, on teil veel palju võimalusi muuta, millest üks on avastuse tüüp. Tüübid on alati olnud Subnet (hõlmab ülaltoodud vahemikku, alamvõrku, ip-valikuid) ja Active Directory. Nagu v4.1, on Open-AudITil uus avastustüüp nimega Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Kui lubate päringu käivitada ajakava järgi, saadetakse päring teie valitud aadressile. Sa pead olema seadistatud e-posti kaudu menüü -> Admin -> Enterprise -> E-posti konfig. Meil on ka <i>testimispost<i> nupp sellel lehel. Sisestage oma andmed, salvestage need ja seejärel testige neid. Teil peaks olema modaalne kast, mis teavitab teid sellest, kas see on edukas või mitte, ja ilmselt peaks õnnestumise korral kohale jõudma testi e-kiri. Kui olete e-kirja konfigureerinud, saab teie ajastatud päringu konfigureerida.<br/><br/>Esitage nimi, valikuline kirjeldus, valige <i>Päring</i> sisestage, valige soovitud päring, esitage e-posti aadress, valige vorming ja määrake ajakava.<br/><br/>Andke tund (ainult tund, pole veel minuteid), andke ülesandele nimi (see ei ole tegeliku ajastatud päringu nimi), valige, millised päevad soovite päringut käivitada, valige, millist päringut soovite käivitada, esitage e-posti aadress ja valige päringu vorming ja olete valmis.<br/>Päringud saadetakse koos päringu e-kirjaga (html-vormingus) ja päringuga lisatud soovitud vormingus.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Kui sisestate teksti ühte veergude pealkirjadesse, saate lihtsalt kasutada tavalist sõna. Näiteks kui sisenete <code>computer</code> otsingukasti <i>Tüüp</i> veerg, otsing tagastab kõik seadmed tüüpi arvuti. Sisuliselt Open-Aud IT nõuab andmeid URL-i abil nagu <code>devices?devices.type=computer</code>. Nüüd on üks oluline erinevus DataTables otsingu kasutamisel võrreldes standardse';

$GLOBALS["lang"]['where'] = 'Kus';

$GLOBALS["lang"]['Where'] = 'Kus';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Kus $x on number. Need paljud LDAP-kirjed on DB-s ja on taastatud.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Kus seadme andmete ekraanil soovite seda välja näha.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Seal, kus riiul on reas.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Kas haavatavus mõjutab komponente väljaspool oma, kasutades mõju, kättesaadavust ja konfidentsiaalsust.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Kas kasutaja suhtlemine on vajalik (puudub, passiivne, aktiivne).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Millisele operatsioonisüsteemile see võrdlusalus kehtib.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Milliseid seadmeid peaks Open-AudIT välisest süsteemist looma (kui on). Kasutades kõiki, mitte ühtegi või antud atribuuti.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Millise võrgu peaksime avastama. See peaks olema vormistatud';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Millises alammenüüs me seda päringut näitame.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kes selle riiuli tegi.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Miks ainult Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Miks me selle poliitika välja jätame?';

$GLOBALS["lang"]['Wide Area Network'] = 'Lairibavõrk';

$GLOBALS["lang"]['Wide area network'] = 'Lairibavõrk';

$GLOBALS["lang"]['Widget'] = 'Vidina';

$GLOBALS["lang"]['Widget #'] = 'Vidinat';

$GLOBALS["lang"]['Widget # '] = 'Vidinat ';

$GLOBALS["lang"]['Widget Type'] = 'Vidina tüüp';

$GLOBALS["lang"]['widgets'] = 'Vidinad';

$GLOBALS["lang"]['Widgets'] = 'Vidinad';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Vidinad on mõeldud kasutamiseks armatuurlaudadel. Ettevõtte kasutajatel on täielik vabadus vidinaid vastavalt vajadusele luua, uuendada ja kustutada.';

$GLOBALS["lang"]['width'] = 'Laius';

$GLOBALS["lang"]['Width'] = 'Laius';

$GLOBALS["lang"]['windows'] = 'Windows';

$GLOBALS["lang"]['Windows'] = 'Windows';

$GLOBALS["lang"]['Windows Packages'] = 'Windowsi paketid';

$GLOBALS["lang"]['Windows Test Script'] = 'Windowsi testskript';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windowsi kasutaja tööüksus #1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windowsi kasutaja tööüksus #2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows võib ka teenuse käivitamise blokeerida. Sihtmärgil käivitage Windows Security aplett ja veenduge, et WinExeSvc käivitatav fail on lubatud käivitada (klõpsake nuppu Luba seadmel ja seejärel käivitage toimingud).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Winexe lehekülg Sambas';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe nõuab järgmiste Windowsi teenuste käivitamist ja käivitamist: netlogon ja rpc teenused töötavad.<br/><br/>Palun logige sisse sihitud Windowsi masinasse ja kontrollige, kas netlogon ja rpc teenused töötavad.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe kasutab võrguteenuse (winexesvc) installimiseks ja käivitamiseks admin$ ja RPC (net service start). See teenus initsialiseerib nimelise toru, mida kasutatakse käskude transportimiseks Open-AudIT serverist sihtmärgile ja väljund vastupidi. Kui see on valmis, siis nimitoru sulgub ja winexesvc ootab rohkem ühendusi või eemaldab (sõltuvalt antud valikutest).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Traadita kohtvõrk';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Open-AudIT versiooniga 3.3.0 tutvustasime klastri kontseptsiooni. See kaardistab intuitiivselt veebiklastri, andmebaasi klastri või failiklastri (või mõne muu eesmärgi) idee antud tüüpi (suur kättesaadavus, liiasus, skaleerimine jne).<br/><br/>Sõltuvalt valitud klastri eesmärgist on aruandlus veidi erinev.<br/><br/>Näiteks kui loote klastri virtualiseerimise eesmärgil, siis kui olete sellele lisanud seadmeid, näete ka nende seadmete virtuaalseid masinaid.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Pilvede funktsiooni kasutuselevõtuga saate esitada oma pilve, Amazon AWS-i või Microsoft Azure\'i üksikasju ning Open-AudIT kasutab asjakohast API-d, et saada loendit asukohtadest, võrkudest ja juhtumitest, seejärel avastada kõik need juhtumid.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi nurjub';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi nurjub';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Töörühm';

$GLOBALS["lang"]['Workgroup'] = 'Töörühm';

$GLOBALS["lang"]['Working Credentials'] = 'Töövolitused';

$GLOBALS["lang"]['Wrap Up'] = 'Pakkige';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Kirjutatud PHP skriptimiskeeles.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Kollane päring';

$GLOBALS["lang"]['Yemen'] = 'Jeemeni';

$GLOBALS["lang"]['Yes'] = 'Jah.';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Sul on võimalik määrata täiendavaid katalooge, mida skannitakse täitefailide kogu kirjetena. Määramisel skaneeritakse kataloog ja kõik alamkataloogid käivitatavate failide jaoks. Samuti saate määrata väljajäetavad kataloogid ja failid. Kui need aktiveeritakse, süstitakse need Linuxi auditi skripti ja viiakse läbi iga kord, kui seda käivitatakse (tavaliselt avastuse osana). Kui soovite neid skriptis käsitsi kopeerida sihtmärgile, kasutage menüüd -> Avastage -> Skriptid -> Loendi skriptid ja laadige skript sealt alla.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Teil on alati vabadus muuta auditi skripte ise vastavalt oma konkreetsetele nõuetele. Te peate need muudatused (uuesti) lisama, kui uuendate, kuna need kirjutatakse vaikeskriptidega üle. Soovitan salvestada oma muudetud skripti peakoopia, uuendada Open-AudIT, seejärel käivitada erinevus uue vaikeskripti ja muudetud skripti vahel ning rakendada erinevusi. Auditi skriptid on kohalikud skriptid (Windows on VBScript, kõik teised on Bash). Lihtne ja lihtne muuta - lihtsalt veenduge, et teil on koopia oma muudatused enne uuendamist.';

$GLOBALS["lang"]['You are running version'] = 'Kasutad versiooni';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Kollektsioonile pääseb ligi tavalise Open-AudIT JSON-il põhineva API abil. Nagu iga teine kollektsioon. Palun vaata.';

$GLOBALS["lang"]['You can also'] = 'Sa võid ka';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Lehe allosas näete ka tabelit, mis näitab seadmeid, millele muudatusi rakendatakse.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Omadusi saab määrata ka alltoodud vormingus.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Saate alati käivitada Firstwave VM-i oma virtuaalses infrastruktuuris (ESX, Azure jne). Firstwave VM jookseb Debian linux ja on vaba OS litsentsimise probleeme ja piiranguid. Või installida oma valitud Linuxi distro. Toetame Redhat 9, Ubuntu 20.04, 22.04 ja 24.04 ning Debian 11 ja 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Seadmeid saab määrata asukohale automaatselt, kasutades';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Seadmeid saab määrata kohandatud';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Saate kontrollida kaugmasinat ilma administraatori tegelikku kontot kasutamata, luues registrivõtme. Looge allolev võti igale auditeeritavale masinale ja veenduge, et kasutatav kasutajanimi on administraatorite grupi liige.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Kindlasti saate käivitada avastuse ilma kehtivate volitusteta võrgus asuvates seadmetes, kuid saadud teave on väga väike alamhulk sellest, mida Open-AudIT suudab taastada <i>koos</i> volikirja.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Saate luua lähtejoone, käivitada selle seadmete rühma vastu ja vaadata tulemusi, lisada plaanilist täitmist, lisada võrdlustabeleid (praegu on lubatud ainult tarkvara, netstat\'i pordid ja kasutajad), rakendada lähtekoodi redigeerimist, tulemuste arhiveerimist ja palju muud.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Saate luua skripti kõigi olemasolevate auditiskriptide valikutega - mitte ainult Windowsiga. AIX, ESX, Linux, OSX ja Windows on kõik kaetud.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Saate kohandada kogu integratsiooni vastavalt sellele, milline süsteem (NMIS või Open-AudIT) on asutus väljapõhiselt. Võimalusi luua ja / või värskendada seadmeid Open-AudIT või NMIS. Kas peaksime käivitama avastuse loodud või uuendatud seadmel ja palju muud. Iga elemendi kohta on selgitused lehekülje paremal küljel.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Saate määratleda rakenduse ja seostada seadme selle rakendusega. Seade võib olla seotud rohkem kui ühe rakendusega. Rakendus võib olla seotud rohkem kui ühe seadmega.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Lisavälja väärtust saab muuta iga seadme kohta seadme andmete lehel. Vaadake seadme üksikasju, avage välja sisaldav osa ja (kui teil on)';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Seade Seed Discovery võib jääda rangete parameetrite hulka, sealhulgas: <i>Piiramine alamvõrguga</i> ja <i>Eraõiguse piiramine</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Seadmeid saab käsitsi määrata';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Selle saab tühistada, pakkudes URL-is vorminguvalikut.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Üksikuid seadmeid saate valida, klõpsates nende paremal küljel asuvatel märkekastidel või valides kõik seadmed, mis klõpsavad tabeli ülemises paremas servas asuvale märkekastile (pliiatsiga sarnaneva nupu Redigeerimine all).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Integreeritavaid seadmeid saab valida, valides süsteemi (seadme) tabelis mis tahes atribuudi ja sobitades (vt menüü → Admin → Database → List Tables → süsteem väljade loendi kohta). Atribuudi vaste saab sobitada ainult ühte väärtust.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Saate muuta mis tahes serveri kogujaks, minnes menüüsse -> Admin -> Kogujad -> Pane see paigaldama koguja. Teil on vaja volikirja, et logida sisse serverisse, kuhu installitakse.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Vaatamiseks klõpsa sinise vaate ikoonil. Võite ka muuta või kustutada, kui teil on õigused.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'PHP MBString laiendust pole installitud. Kõnealune pikendamine on vajalik.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Teil ei ole PHP SNMP laiendust installitud. See laiendus on väga soovitatav.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Võib-olla soovite selle URL-i kopeerida ja kleepida oma töötajatele saadetud e-kirjas.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Võite soovida, et Active Directory või OpenLDAP autentiksid oma kasutajaid, kuid ei anna autoriseeringut. Selleks veenduge, et <i>Kasutamine autentimiseks</i> on seatud Y ja <i>Rollide kasutamine</i> on seatud N-iks. Volikirja kinnitab LDAP, kuid kasutaja peab olema Open-AudITis juba loodud ja määratud rollid. Ka see <i>automaatselt</i> kehtib';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Võib-olla olete märganud, et need mängureeglid on mõeldud esemetele, mis ei pruugi olla globaalselt ainulaadsed. Mõned näited:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Enne uue litsentsi lisamist peate oma olemasoleva litsentsi kustutama.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Sul peab olema töö SSH mandaat täita võrdlusalus. Hetkel on toetatud järgmised operatsioonisüsteemid: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Me kavatseme neid laiendada täiendavate väljaannetega.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Te peaksite kopeerima ja kleepima kogu faili tekstikasti. Allpool toodud juhtudel kopeerige kogu tekst.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Sa ei tohiks lisada väljad edited_by ja edited_date. Need seadistatakse automaatselt.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Te peaksite muutma ainult teksti teist lauset,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Sa peaksid asendama vajaliku veeru (eg, org_id) ATTRIBUTE_ NIME jaoks.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Peaksite kasutama päiserida, mis sisaldab veergude nimesid, mida soovite asustada, ja seejärel oma andmeridasid allpool.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Kasutage ainult neid tabeleid, mis sisaldavad vajalikke atribuute. Tavaliselt kasutan vasakut liitu. Näiteks';

$GLOBALS["lang"]['You will need a'] = 'Sul on vaja';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Teil on vaja WMI-porte Windowsi tulemüüril, mis on avatud igas sihtarvutis Windows. Windowsile Põhiserverid, veenduge, et lubate tulemüüri ühendusi vastavalt';

$GLOBALS["lang"]['You will see a list of'] = 'Näete nimekirja';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube\'i õpetused';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Sinu AWS EC2 API võti.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Teie Google Compute volikirjad on JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Sinu Peremees';

$GLOBALS["lang"]['Your Licenses'] = 'Litsentsid';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsofti Azure\'i kliendi ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azure\'i kliendisaladus.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Microsoft Azure\'i tellimuse ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your PHP version is'] = 'Sinu PHP versioon on';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Teie SQL valib atribuudid, mis sisestavad selle päringu.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Teie SQL valib seadmed, mis asustavad selle rühma.';

$GLOBALS["lang"]['Your SSH key.'] = 'Sinu SSH võti.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Teie juurdepääsu volikirjad, nagu see pilved native API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Teie andmed on teie andmed. Sa võid selle igal ajal välja võtta. Pakume isegi kasulik ekspordi CSV, JSON ja XML. Ja meil on Json API. Ja saate kirjutada kohandatud aruandeid ja on need väljund CSV, XML ja JSON! Jällegi, need on teie andmed - mitte keegi teine. Võite olla kindel, et teie andmete turvalisus on teie kätes.';

$GLOBALS["lang"]['Your database platform is'] = 'Sinu andmebaasiplatvorm on';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Selle ühenduse oleku kirjeldus (pakkumine, pensionile jäämine jne).';

$GLOBALS["lang"]['Your description of this item.'] = 'Teie kirjeldus sellest.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Selle tarkvara tüübi üldine nimi';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Teie üldine versioon selle tarkvara jaoks';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Kasutajal peaks nüüd olema võimalik sisse logida, klõpsates <i>Logo Entraga</i> nuppu Open-AudIT logo lehel. Nagu eespool mainitud, kui sisselogimine ebaõnnestub, kontrollige logifaili ja kontrollige kasutajaid. <i>eelistatud kasutajanimi</i>.<br/><br/>Ja see peaks olema kõik, mis seal on. Nüüd peaks teie kasutajatel olema üks vähem volikirju meeles pidada!<br/><br/>Nagu alati, kui teil on selle funktsiooniga probleeme, palun e-posti teel';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Kasutajal peaks nüüd olema võimalik sisse logida, klõpsates <i>Logi sisse OKTA-ga</i> nuppu Open-AudIT logo lehel. Nagu eespool mainitud, kui sisselogimine ebaõnnestub, kontrollige logifaili ja kontrollige kasutajaid. <i>nimi</i>.<br/><br/>Ja see peaks olema kõik, mis seal on. Nüüd peaks teie kasutajatel olema üks vähem volikirju meeles pidada!<br/><br/>Nagu alati, kui teil on selle funktsiooniga probleeme, palun e-posti teel';

$GLOBALS["lang"]['Your web server is'] = 'Sinu veebiserver on';

$GLOBALS["lang"]['Zambia'] = 'Sambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['a String'] = 'keelpilli';

$GLOBALS["lang"]['active'] = 'aktiivne';

$GLOBALS["lang"]['active directory'] = 'aktiivne kataloog';

$GLOBALS["lang"]['active/active'] = 'aktiivne/aktiivne';

$GLOBALS["lang"]['active/passive'] = 'aktiivne/passiivne';

$GLOBALS["lang"]['advertisement'] = 'reklaam';

$GLOBALS["lang"]['alert'] = 'häire';

$GLOBALS["lang"]['all'] = 'kõik';

$GLOBALS["lang"]['allocated'] = 'eraldatud';

$GLOBALS["lang"]['amazon'] = 'Amazonase';

$GLOBALS["lang"]['an Integer'] = 'täisarvu';

$GLOBALS["lang"]['and'] = 'ja';

$GLOBALS["lang"]['and / or'] = 'ja / või';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'Seejärel luuakse tugipilet ja tegutsetakse.';

$GLOBALS["lang"]['and another'] = 'teise';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'Laadige alla viimane vabastav installer. Võib-olla peate selle leidmiseks lehe alla kerima.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'ja minge rakendustesse -> Enterprise Applications (vasakpoolne menüü), seejärel klõpsake <i>Uus taotlus</i>.';

$GLOBALS["lang"]['and its current time is'] = 'ja selle praegune aeg';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'Ja otsib garantii aegumiskuupäeva enne tänast.';

$GLOBALS["lang"]['and review what is possible.'] = 'ja vaadata üle, mis on võimalik.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'ja allkirjastamise ümbersuunamise URI on';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'Viimased punktid on tõenäoliselt kõige huvitavamad. Need read peaksid andma teile täpse punkti, kus sisselogimine ebaõnnestus.';

$GLOBALS["lang"]['antivirus'] = 'viirusetõrje';

$GLOBALS["lang"]['application'] = 'taotluse';

$GLOBALS["lang"]['approved'] = 'heaks kiidetud';

$GLOBALS["lang"]['are required.'] = 'on vajalikud.';

$GLOBALS["lang"]['are used.'] = 'kasutatakse.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'Nagu seade, mis reageerib sellele pordile.<br/>See on põhjustanud mõnedele klientidele probleeme, kus tulemüürid reageerivad olematu seadme nimel ja põhjustavad seega valepositiivse seadme avastamist. Nüüd on see atribuut saadaval skaneerimise jaoks.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'võrdluspunktina ja filtreerib kõik virtuaalsed masinad süsteemi kontrollimise kaudu välja. seeriaväli VMi jaoks.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'eeldav töö- ja kliendipõhine DNS';

$GLOBALS["lang"]['attribute'] = 'atribuut';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'varukoopia';

$GLOBALS["lang"]['banned'] = 'keelatud';

$GLOBALS["lang"]['blog'] = 'blogi';

$GLOBALS["lang"]['blue'] = 'sinine';

$GLOBALS["lang"]['bottom'] = 'põhja';

$GLOBALS["lang"]['building'] = 'hoone';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'Seda saab kasutada nii kasutaja autentimiseks (kas kasutaja nimi ja parool on õiged) kui ka kasutaja autoriseerimiseks (mis rollid ja orgid kasutajal on).<br/><br/>Kui kasutaja ei ole seadistatud LDAP- s, kuid on avatud audiofailis (nt: <i>Admin</i> Open-AudIT kasutab ennast nii autentimiseks kui ka autoriseerimiseks.<br/><br/>Ava-Aud IT kasutab rollide ja orgide jaoks spetsiifilisi LDAP-gruppe. Kasutaja peab olema nende rühma(de) otsene liige, et Open-AudIT saaks kindlaks teha, et kasutajad sellele juurde pääsevad.<br/><br/>Õige konfigureerimise korral võib LDAP-i kasutamine täielikult eemaldada vajaduse luua kasutajaid Open-AudIT-is. Lihtsalt konfigureerige Open-AudIT LDAP- i kasutamiseks nii autentimiseks kui ka autoriseerimiseks. Kui kasutajat ei eksisteeri Open-AudIT-is, kuid see on olemas LDAP-is ja nende volitused on õiged ja nad on vajalike rühmade liikmed, loob Open-AudIT kasutajakonto automaatselt.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'saab nüüd failide või kataloogide kohta andmeid hankida ja jälgida nende failide muutusi vastavalt Open-AudIT andmebaasi teistele atribuutidele. See funktsioon töötab Linux Open-AudIT serverite kastist välja, kuid vajab teenuse konto nime muutmist Windows Open-AudIT serveri all. Toetatavad kliendid on Windows ja Linux.';

$GLOBALS["lang"]['changed'] = 'muutunud';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'valitud. Sealt, kui tuvastatakse WMI, SSH või SNMP port, mis vastab seadmele, küsitakse edasi, kasutades ';

$GLOBALS["lang"]['cloud'] = 'pilve';

$GLOBALS["lang"]['code'] = 'kood';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'Kogude ja detailide lehed on ikoon, mida täita.';

$GLOBALS["lang"]['collector'] = 'koguja';

$GLOBALS["lang"]['collectors'] = 'kogujad';

$GLOBALS["lang"]['column'] = 'veerg';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'veerg sisaldab kas <i>y</i> või <i>n</i>. See näitab, kas see rida on seadmes praegu olemas. Näiteks võib installida tarkvara (mis võib kaasa tuua). <i>software.current = y</i>, kuid järgneval auditil ei pruugi seda tuvastada. Open- AudIT muudab seejärel selle rea aktiivset atribuuti <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'veergu. Theo';

$GLOBALS["lang"]['compute'] = 'arvutada';

$GLOBALS["lang"]['config'] = 'kondiitri';

$GLOBALS["lang"]['console'] = 'konsooli';

$GLOBALS["lang"]['contains'] = 'sisaldab';

$GLOBALS["lang"]['create'] = 'luua';

$GLOBALS["lang"]['created'] = 'loonud';

$GLOBALS["lang"]['credentials'] = 'volikirja';

$GLOBALS["lang"]['critical'] = 'kriitilise';

$GLOBALS["lang"]['cve'] = 'koopa';

$GLOBALS["lang"]['database'] = 'andmebaasi';

$GLOBALS["lang"]['debug'] = 'silumist';

$GLOBALS["lang"]['delegated'] = 'delegeeritud';

$GLOBALS["lang"]['delete'] = 'kustuta';

$GLOBALS["lang"]['deleted'] = 'kustutatud';

$GLOBALS["lang"]['denied'] = 'eitas';

$GLOBALS["lang"]['details'] = 'üksikasju';

$GLOBALS["lang"]['devices'] = 'seadmeid';

$GLOBALS["lang"]['digitalocean'] = 'digitaalookean';

$GLOBALS["lang"]['discoveries'] = 'avastusi';

$GLOBALS["lang"]['documentation for further details.'] = 'dokumentatsioon täiendavate üksikasjade kohta.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'teeb <strong>ei</strong> esitada haavatavuse aruanded järgmiste kohta:';

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

$GLOBALS["lang"]['first'] = 'esimene';

$GLOBALS["lang"]['fixed'] = 'fikseeritud';

$GLOBALS["lang"]['floor'] = 'korrusel';

$GLOBALS["lang"]['for'] = 'jaoks';

$GLOBALS["lang"]['for authentication'] = 'autentimiseks';

$GLOBALS["lang"]['for this information.'] = 'selle teadmiseks.';

$GLOBALS["lang"]['from Audit Script Result'] = 'Auditi skripti tulemist';

$GLOBALS["lang"]['from NMIS'] = 'NMISist';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'rakenduskonteineris töötavalt aadressilt LocalHost (LRPC kasutamine)';

$GLOBALS["lang"]['front'] = 'ees';

$GLOBALS["lang"]['front-left'] = 'esivasak';

$GLOBALS["lang"]['front-right'] = 'esiparem';

$GLOBALS["lang"]['github'] = 'kaelkirjak';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'suurem või võrdne';

$GLOBALS["lang"]['greater than'] = 'suurem';

$GLOBALS["lang"]['group'] = 'grupp';

$GLOBALS["lang"]['has not been set'] = 'pole seatud';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'omama töötavat DNS-lahutatavat IP-d siht-Windows PC-le.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'neil on võime hukata. On';

$GLOBALS["lang"]['head'] = 'pea';

$GLOBALS["lang"]['here'] = 'siin';

$GLOBALS["lang"]['high availability'] = 'kõrge kättesaadavusega';

$GLOBALS["lang"]['howto'] = 'kuidas';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'Kui te kloonite Linuxi virtuaalset masinat, kui te seda käsitsi ei regenereeri (ja minu kogemuse kohaselt inimesed seda ei tee), jääb see samaks.';

$GLOBALS["lang"]['ignored'] = 'ignoreerisid';

$GLOBALS["lang"]['import the example device data'] = 'importida seadme näidisandmeid';

$GLOBALS["lang"]['in'] = 'sisse';

$GLOBALS["lang"]['in Enterprise.'] = 'Enterprise\'is.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'Sisenditel võivad olla järgmised väärtused.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'Väljunditel võivad olla järgmised väärtused.';

$GLOBALS["lang"]['inactive'] = 'mitteaktiivne';

$GLOBALS["lang"]['incomplete'] = 'ebatäielik';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'paigaldaja testib Nmapi olemasolu oma standardsetes paigalduskohtades';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (jah/ei) jne';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'USA standardit haldab National Institute of Standards and Technology';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'See on rahvusvaheline infoturbe haldamise standard. See annab raamistiku infoturbe juhtimissüsteemi (ISMS) loomiseks, rakendamiseks, haldamiseks ja pidevaks täiustamiseks.';

$GLOBALS["lang"]['is based upon'] = 'põhineb';

$GLOBALS["lang"]['is licensed to'] = 'litsentsitakse';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'on nimekirjas järgmine ja Open-AudIT saab kasutada parooli ja võtme autentimist. Open-AudIT võib kasutada ka sudo-toega kasutajat, mitte otse juurkasutust (kuigi see võib kasutada ka root). Parimate tulemuste saavutamiseks tuleks kasutada juurkasutajat või sudo-funktsiooniga kasutajat (vt Linuxi auditeerimine ilma juur- ja sihtkliendi konfiguratsioonita vikis). Windowsi seadmed võivad töötada ka ssh, kuid kui Open-AudIT tuvastab selle, peatab see SSH päringud ja kasutab selle asemel WMI-d (eeldades, et töötavad WMI-volitused).';

$GLOBALS["lang"]['is the link to the'] = 'on link';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'Konkreetsete tabelite ja nende veergude vaatamiseks. See võimaldab teil leida täpselt seda, mida vajate, selle asemel, et traalida läbi skeemi loomise skripti MySQL konsooli.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'võti, mis on vajalik lat/long ja kuvatava kaardi kättesaamiseks. Vaata';

$GLOBALS["lang"]['left'] = 'vasakule';

$GLOBALS["lang"]['less or equals'] = 'vähem või võrdne';

$GLOBALS["lang"]['less than'] = 'vähem';

$GLOBALS["lang"]['license'] = 'litsentsi';

$GLOBALS["lang"]['licenses'] = 'litsentsid';

$GLOBALS["lang"]['like'] = 'nagu';

$GLOBALS["lang"]['line'] = 'joon';

$GLOBALS["lang"]['list'] = 'nimekirja';

$GLOBALS["lang"]['list View, using the Create button'] = 'list Vaade, kasutades nuppu Loo';

$GLOBALS["lang"]['load balancing'] = 'koormuse tasakaalustamine';

$GLOBALS["lang"]['location'] = 'asukoht';

$GLOBALS["lang"]['locations'] = 'asukohad';

$GLOBALS["lang"]['managed'] = 'õnnestus';

$GLOBALS["lang"]['methods'] = 'meetodid';

$GLOBALS["lang"]['microsoft'] = 'mikropehme';

$GLOBALS["lang"]['mount point'] = 'kinnituspunkt';

$GLOBALS["lang"]['must'] = 'peab';

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

$GLOBALS["lang"]['on devices where'] = 'seadmetel, kus';

$GLOBALS["lang"]['openldap'] = 'avatud';

$GLOBALS["lang"]['optimized'] = 'optimeeritud';

$GLOBALS["lang"]['optionally '] = 'valikuliselt ';

$GLOBALS["lang"]['or'] = 'või';

$GLOBALS["lang"]['or the GitHub page at'] = 'või GitHubi lehel';

$GLOBALS["lang"]['other'] = 'teised';

$GLOBALS["lang"]['package'] = 'pakett';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'lehekülg. Ekspordi LDAP- server menüüst -> Admin -> LDAP serverid -> Üksikasjad JSON-ile ning nende andmete salvestamine ja lisamine.';

$GLOBALS["lang"]['partition'] = 'partitsiooni';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'menetluses';

$GLOBALS["lang"]['performance'] = 'sooritus';

$GLOBALS["lang"]['performed'] = 'sooritas';

$GLOBALS["lang"]['permission'] = 'luba';

$GLOBALS["lang"]['permissions required per endpoint'] = 'tulemusnäitaja kohta nõutavad õigused';

$GLOBALS["lang"]['pie'] = 'piruka';

$GLOBALS["lang"]['planning'] = 'planeerimine';

$GLOBALS["lang"]['predictable'] = 'ennustatav';

$GLOBALS["lang"]['query'] = 'päringu';

$GLOBALS["lang"]['rear'] = 'taga';

$GLOBALS["lang"]['rear-left'] = 'tagavasak';

$GLOBALS["lang"]['rear-right'] = 'tagant paremal';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'vabasta';

$GLOBALS["lang"]['removed from display, but has been set'] = 'Eemaldatakse ekraanilt, kuid on seadistatud';

$GLOBALS["lang"]['reserved'] = 'reserveeritud';

$GLOBALS["lang"]['right'] = 'õige';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'Õigused) saate selle redigeerimiseks klõpsata välja väärtusel.';

$GLOBALS["lang"]['role'] = 'rolli';

$GLOBALS["lang"]['room'] = 'toas';

$GLOBALS["lang"]['row'] = 'rida';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'teenus ei käivitunud järgmise vea tõttu';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Nii et Open-AudIT teab piirata teie päringut sobivate Orgidega.';

$GLOBALS["lang"]['stand-alone'] = 'eraldiseisev';

$GLOBALS["lang"]['standard'] = 'standard';

$GLOBALS["lang"]['starts with'] = 'algab';

$GLOBALS["lang"]['storage'] = 'laohoone';

$GLOBALS["lang"]['subnet'] = 'alamvõrgu';

$GLOBALS["lang"]['table'] = 'lauda';

$GLOBALS["lang"]['table and insert the original rows.'] = 'panna lauale ja sisestada algsed read.';

$GLOBALS["lang"]['team'] = 'meeskond';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'tekst. Esimene on massiivi indeks ja see tuleks jätta nii nagu on. Indeksit kasutatakse mallides tõlgitud teksti otsimiseks.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'Seejärel klõpsake tabeli üksikasjade nuppu.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'Seejärel klõpsake tabeli üksikasjade nuppu. Seadme andmed salvestatakse';

$GLOBALS["lang"]['timestamp'] = 'ajatempli';

$GLOBALS["lang"]['to'] = 'kuni';

$GLOBALS["lang"]['to create an item of this type'] = 'seda tüüpi elemendi loomiseks';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'URL-ile saate antud seadme täieliku andmebaasi kirje, sealhulgas kõik komponentide tabelid.';

$GLOBALS["lang"]['to the user'] = 'kasutajale';

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

$GLOBALS["lang"]['true or false (in JSON context)'] = 'tõene või väär (JSON kontekstis)';

$GLOBALS["lang"]['unallocated'] = 'jaotamata';

$GLOBALS["lang"]['unauthorised'] = 'volitamata';

$GLOBALS["lang"]['unchanged'] = 'muutumatuna';

$GLOBALS["lang"]['unknown'] = 'tundmatu';

$GLOBALS["lang"]['unmanaged'] = 'juhtimata';

$GLOBALS["lang"]['unused'] = 'kasutamata';

$GLOBALS["lang"]['update'] = 'värskendada';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'kasutab teie seadmetest kogutud andmeid ja sobib installitud tarkvara pakutava väärtusega, loeb kokku, kui palju litsentse on kasutatud ja kui palju on jäänud. See võimaldab kasutada metamärke <i>sobituskeel</i> Väli, mis sobib tarkvaraga. nimeatribuut.';

$GLOBALS["lang"]['using the main menu items.'] = 'menüü põhielementide kasutamine.';

$GLOBALS["lang"]['valid'] = 'kehtiv';

$GLOBALS["lang"]['version'] = 'versiooni';

$GLOBALS["lang"]['virtualisation'] = 'virtualiseerimine';

$GLOBALS["lang"]['warning'] = 'hoiatus';

$GLOBALS["lang"]['web'] = 'veebi';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'Kohaliku ja kaugjuurdepääsu õigustega.';

$GLOBALS["lang"]['with devices::update permission.'] = 'seadmetega::uuenda luba.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'kui sisselogimis-ümbersuunamisURI on';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'eesmärgiga pakkuda lihtsat ja intuitiivset juurdepääsu arendajatele tuttaval viisil. Lisaks sellele API-le kasutab veebiliides sama päringuvormingut ja pakub mõningaid täiendavaid toiminguid (nt HTML-vormid elementide loomiseks).';

$GLOBALS["lang"]['yes'] = 'jah';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'Te ei vaja HighChartsi litsentsi Firstwave\'i toodete kasutamiseks. Litsentsi';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'Te määrate kõik leitud seadmed sellele orgile või asukohale.';

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

