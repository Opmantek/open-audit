<?php
$GLOBALS["lang"][' Default, currently '] = ' Standaard, momenteel ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' wordt nu ondersteund met een taalbestand. Om uw gebruiker te wijzigen om deze taal te gebruiken, klikt u ';

$GLOBALS["lang"][' seconds'] = ' seconden';

$GLOBALS["lang"]['10 Minutes'] = '10 minuten';

$GLOBALS["lang"]['15 Minutes'] = '15 minuten';

$GLOBALS["lang"]['30 Minutes'] = '30 minuten';

$GLOBALS["lang"]['5 Minutes'] = '5 minuten';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>NOOT</strong> - U opent deze URL vanaf de lokale Open-AudIT-server. Het gedownloade script zal niet in staat zijn om te verzenden wanneer uitgevoerd op een andere machine. Als u andere machines moet controleren, kunt u het script downloaden vanaf elke externe machine, niet via een browser op de Open-AudIT server zelf.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">NOOT</strong> - U moet werken aan SSH of SSH Key referenties om benchmarks uit te voeren op een doel apparaat.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Baseline</strong> - Het overkoepelende document dat de basisdefinitie en de individuele beleidstests bevat.<br/> <br/> <strong>Beleid</strong> - De individuele tests in een basislijn. Elke test is voor een bepaald item. Een voorbeeld is het testen van SSH versie 1.2.3.<br/> <br/> <strong>Gegevens</strong> - Baselines kunnen netstat poorten, gebruikers en software vergelijken.<br/> <br/> <strong>Software</strong> - Om software te vergelijken controleren we de naam en versie. Omdat versienummers niet allemaal gestandaardiseerd zijn in formaat, wanneer we een auditresultaat ontvangen, maken we een nieuw attribuut genaamd software_padded dat we in de database opslaan samen met de rest van de softwaredetails voor elk pakket. Daarom zullen basislijnen die softwarebeleid gebruiken, niet werken wanneer ze worden uitgevoerd tegen een apparaat dat niet is gecontroleerd door 1.10 (ten minste). Software beleid kan testen tegen de versie "gelijk aan," "groter dan" of "gelijk aan of groter dan".<br/> <br/> <strong>Netstat-poorten</strong> - Netstat Ports gebruikt een combinatie van poortnummer, protocol en programma. Als iedereen aanwezig is, gaat het beleid over.<br/> <br/> <strong>Gebruikers</strong> - Gebruikers werken vergelijkbaar met Netstat Ports. Als een gebruiker bestaat met een bijpassende naam, status en wachtwoord details (changeable, expires, required) dan gaat het beleid voorbij.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Een locatie is een fysiek adres dat apparaten kan hebben die ermee geassocieerd zijn.<br/> <br/>U kunt deze coördinaten toewijzen (lat/lang) en als er apparaten zijn toegewezen, zal de locatie verschijnen op de Open-AudIT Enterprise kaart.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Een netwerk is afgeleid van ontdekkingsitems en apparaatattributen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Een samenvatting toont een lijst van items, gegroepeerd door de verschillende waarden van het attribuut gespecificeerd door de <code>table</code> en <code>column</code> attributen.<br/> <br/>Wanneer een samenvatting wordt uitgevoerd, zal het resultaat een lijst zijn van verschillende waarden voor dat <code>table</code> en <code>column</code>. Er zullen links zijn op de waarden waarmee de gebruiker de bijbehorende apparaten kan zien.<br/> <br/>Als het kenmerk van <code>extra_columns</code> wordt bevolkt, de resulterende pagina zal deze kolommen naast de standaard apparaat kolommen bevatten.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agenten laten je pc\'s controleren zonder een ontdekking. Installeer de agent en het zal check-in met de server elke dag en audit zelf. Het maakt niet uit of uw computers firewalled zijn, auditgegevens zullen nog steeds verschijnen in Open-AudIT.</p><p>Bij testen <strong>als</strong> een agent moet acties uitvoeren, alle drie de tests moeten slagen (als de test is ingesteld). <strong>Daarna</strong> de maatregelen worden genomen.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Toepassingen worden gedefinieerd door u, de gebruiker en opgeslagen voor Open-AudIT om te gebruiken en te associëren met apparaten.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Attributen worden opgeslagen voor Open-AudIT voor bepaalde velden.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>In staat zijn om te bepalen welke machines zijn geconfigureerd hetzelfde is een groot deel van de systemen administratie en auditing en nu rapportage over dat zal eenvoudig en geautomatiseerd worden gemaakt. Zodra u uw basislijn definieert zal het automatisch draaien tegen een set van apparaten op een vooraf bepaald schema. De output van deze uitgevoerde basislijnen zal beschikbaar zijn voor web viewing, importeren in een systeem van derden of zelfs als een gedrukt rapport.<br/> <br/> Uitgangen stellen u in staat om auditgegevens te combineren met een reeks attributen die u eerder hebt gedefinieerd (uw baseline) om de naleving van apparaten te bepalen.<br/> <br/> Bijvoorbeeld - u kunt een basislijn maken van een apparaat met Centos 6 dat fungeert als een van uw apache servers in een cluster. Je weet dat deze specifieke server is geconfigureerd zoals je het wilt, maar je weet niet zeker of andere servers in het cluster precies hetzelfde zijn geconfigureerd. Baselines stelt u in staat om dit te bepalen.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Clusters worden opgeslagen in Open-AudIT om apparaten te associëren om de licentiekosten beter op te nemen, te beheren en te schatten.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Componenten zijn een algemene term voor de tabellen die de attributen voor een apparaat opslaan. Deze tabellen zijn: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, moederbord, netstat, netwerk, nmap, optisch, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user_group, variable, video, vm, windows.</p><p> Daarnaast classeren we de volgende tabellen ook als apparaat gerelateerd: toepassing, bijlage, cluster, credential, afbeelding.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Geheimen worden versleuteld wanneer ze in de database worden opgeslagen.<br/> <br/>Wanneer een Discovery wordt uitgevoerd, een apparaat heeft zijn referenties opgehaald en getest voor de verbinding eerst (van de <code>credential</code> tabel). Als deze falen, dan referenties geassocieerd met de gegeven Org <code>credentials.org_id</code> wordt ook getest tegen het apparaat. Werkgegevens worden opgeslagen op een individueel apparaatniveau in de credential tabel (noot - geen "s" in de tabelnaam).<br/> <br/>SSH sleutels worden getest voor SSH gebruikersnaam / wachtwoord. Bij het testen van SSH worden referenties ook gemarkeerd als werken met sudo of root zijn.<br/> <br/>Voor gebruiksgemak mogen Windows-wachtwoorden geen enkele of dubbele offerte bevatten. Dit is een WMI-beperking op afstand, geen Open-AudIT-beperking.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Geheimen worden gebruikt om toegang te krijgen tot apparaten.<br/> <br/>Het instellen van referenties moet een van de eerste dingen zijn die je doet na het installeren van Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Definieer uw racks en wijs apparaten in hun posities. Je hebt je apparaten al in Open-AudIT en je kent je locaties. Open-AudIT breidt dit uit zodat u een rek kunt maken en apparaten kunt toewijzen. Open-AudIT zal zelfs zorgen voor een visualisatie van het rek en de apparaten binnen. Als je een beeld van een apparaat geeft, zal die foto gebruikt worden in de visualisatie. U kunt kijken naar het rek op het scherm en zien dezelfde items die je zou zien als je stond voor het.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Apparaten op uw netwerk moeten worden beheerd. Maar hoe hou je je gegevens bij? Een spreadsheet - defintley niet. Dat zal in uren of dagen verouderd zijn. Waarom handmatig proberen bij te houden. Gebruik Open-AudIT om automatisch uw netwerken te scannen en uw apparaten op te nemen - fabrikant, model, serieel en meer dan 100 andere attributen. Volledige lijsten van software, diensten, schijven, open poorten, gebruikers, enz. Automatisch zien of een attribuut is toegevoegd, verwijderd of gewijzigd.<br/> <br/>Zodra Open-AudIT is opgezet, kunt u achterover leunen en ontspannen. Hebben wijziging rapporten gemaild naar u op een schema, bijvoorbeeld - welke nieuwe apparaten hebben we ontdekt deze week? Welke nieuwe software is deze week geïnstalleerd? Waren er vorige maand hardware veranderingen?<br/> <br/>Breid de opgeslagen velden eenvoudig uit met uw eigen aangepaste attributen.<br/> <br/>Voeg zelfs apparaten toe die niet verbonden zijn met uw netwerk of apparaten die uw Open-AudIT-server niet kan bereiken.<br/> <br/>Computers, schakelaars, routers, printers of elk ander apparaat op uw netwerk - Open-AudIT kan ze allemaal controleren.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Ontdekkingen vormen het hart van wat Open-AudIT doet.<br/> <br/>Hoe weet je anders wat er op mijn netwerk staat?<br/> <br/>Ontdekkingen zijn voorbereide gegevens die u in staat stellen om een ontdekking uit te voeren op een netwerk in een enkele klik, zonder de details van dat netwerk elke keer.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Ontdekking Opties zijn een globale instelling veranderd in de <a href="../configuration?configuration.name=discovery_default_scan_option">configuratie</a>. Als je een Open-AudIT Enterprise licentie hebt, zijn deze instelbaar per ontdekking en bovendien futher aanpasbaar zoals vereist. Ontdekking Opties zijn als volgt (inclusief een indicitave tijd om een individueel IP te scannen):<br/><br/><strong>UltraFast</strong>: <i>1 seconde</i>. Scan alleen de poorten die Open-AudIT moet gebruiken om met het apparaat te praten en een IOS-apparaat te detecteren (WMI, SSH, SNMP, Apple Sync). Een <code>open|filtered</code> De haven wordt als open beschouwd. A <code>filtered</code> haven wordt niet als open beschouwd. Apparaat moet reageren op een Nmap ping. Gebruik agressieve timing.<br/><br><strong>SuperFast</strong>: <i>5 seconden</i>. Scan de top 10 TCP en UDP poorten, evenals poort 62078 (Apple IOS detectie). Een <code>open|filtered</code> De haven wordt als open beschouwd. A <code>filtered</code> haven wordt niet als open beschouwd. Apparaat moet reageren op een Nmap ping. Gebruik agressieve timing.<br><br/><strong>Snel</strong>: <i>40 seconden</i>. Scan de top 100 TCP en UDP poorten, evenals poort 62078 (Apple IOS detectie). Een <code>open|filtered</code> De haven wordt als open beschouwd. A <code>filtered</code> haven wordt niet als open beschouwd. Apparaat moet reageren op een Nmap ping. Gebruik agressieve timing.<br/><br/><strong>Middel (Klassiek)</strong>: <i>90 seconden</i>. Zo dicht bij een traditionele Open-AudIT scan als we kunnen maken. Scan de top 1000 TCP poorten, evenals 62078 (Apple IOS detectie) en UDP 161 (SNMP). Een <code>open|filtered</code> De haven wordt als open beschouwd. A <code>filtered</code> poort wordt beschouwd als open (en zal apparaatdetectie activeren). Apparaten worden gescand ongeacht een reactie op een Nmap ping. Gebruik agressieve timing.<br/><br/><strong>Middel</strong>: <i>100 seconden</i>. Scan de top 1000 TCP en de top 100 UDP poorten, evenals poort 62078 (Apple IOS detectie). Een <code>open|filtered</code> De haven wordt als open beschouwd. A <code>filtered</code> haven wordt niet als open beschouwd. Apparaat moet reageren op een Nmap ping. Gebruik agressieve timing.<br/><br/><strong>Langzaam</strong>: <i>4 minuten</i>. Scan de top 1000 TCP en de top 100 UDP poorten, evenals poort 62078 (Apple IOS detectie). Versiedetectie ingeschakeld. Een <code>open|filtered</code> De haven wordt als open beschouwd. A <code>filtered</code> poort wordt beschouwd als open (en zal apparaatdetectie activeren). Apparaat moet reageren op een Nmap ping. Gebruik normale timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minuten</i>. Niet aanbevolen. Scan de top 1000 TCP en UDP poorten, evenals poort 62078 (Apple IOS detectie). Apparaten worden gescand ongeacht een reactie op een Nmap ping. Versiedetectie ingeschakeld. Een <code>open|filtered</code> De haven wordt als open beschouwd. A <code>filtered</code> poort wordt beschouwd als open (en zal apparaatdetectie activeren). Gebruik beleefde timing.<br/><br/><strong>Aangepast</strong>: <i>Onbekende tijd</i>. Wanneer andere opties dan zoals ingesteld door een standaard ontdekkingsvoorinstelling worden gewijzigd.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Groepen worden gebruikt als eenvoudige lijsten van apparaten die voldoen aan de vereiste voorwaarden. Op verzoek van JSON wordt een lijst van <code>devices.id</code> Alleen. Indien gevraagd via de webinterface, geven ze de standaard kolom attribuutlijst terug.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Als de gebruiker die zich aanmeldt bij Open-AudIT geen toegang heeft om LDAP te zoeken (en u gebruikt OpenLDAP), kunt u een ander account gebruiken dat deze toegang heeft. Gebruik de <code>ldap_dn_account</code> en <code>ldap_dn_password</code> om dit in te stellen.<br/> <br/><strong>Hulpzame documentatie</strong><br/> <br/><a href="/index.php/auth/help">Algemene Auth-hulp</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Entra gebruiken voor Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Gebruik van OKTA voor Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Problemen oplossen LDAP-aanmeldingen</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Gebruikers, rollen en orgs</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Als u een apparaattype toevoegt, moet u het bijbehorende pictogram handmatig kopiëren naar de map:<br/><em>Linux</em>:/usr/local/open-audit/public/device_images<br/><em>Vensters</em>: c:\xampp\htdocs\open-audit\device_images<br/> <br/>Als u een locatietype toevoegt, moet u het bijbehorende pictogram handmatig kopiëren naar de map:<br/><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Vensters</em>: c:\xampp\htdocs\open-audit\images\map_iconen</p><p>Wanneer de <i>bron</i> is a <code>device</code>, geldig <i>type</i> zijn: <code>class</code>, <code>environment</code>, <code>status</code> en <code>type</code>. Indien de <i>bron</i> is <code>locations</code> of <code>org</code> de enige geldige <i>type</i> is <code>type</code>. Indien de <i>bron</i> is a <code>query</code> de enige geldige <i>type</i> is <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Als u van plan bent om uw cloud machines volledig te controleren, vergeet dan niet dat u deze referenties ook moet opslaan in Open-AudIT.</p><p>Zorg ervoor dat u de juiste poorten toestaat als u Microsoft Azure (22 voor SSH, enz.) gebruikt. Controleer uw virtuele machine -> Netwerkregels.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Als u een lijsttype selecteert, wordt het veld "waarden" ingeschakeld. U zou hier een komma gescheiden lijst van selecteerbare waarden moeten plaatsen. Deze worden weergegeven in een dropdown box wanneer het veld wordt bewerkt.<br/> <br/>Zoals de meeste andere attributen, Velden kunnen bulk bewerkt worden. Gebruik de functie Bulk Bewerken zoals u normaal zou doen en u zult zien dat de velden beschikbaar zijn voor invoer.<br/> <br/>Bekijk het scherm met de details van het apparaat, open de sectie met het veld en (als u voldoende toegang hebt) kunt u op de veldwaarde klikken om het te bewerken.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>In de steeds veranderende wereld van computerbeveiliging waar elke dag nieuwe kwetsbaarheden worden ontdekt en gepatcht, moet handhaving van de naleving van de beveiliging een continu proces zijn. Het moet ook een manier omvatten om het beleid aan te passen, alsook periodieke evaluatie en risicobewaking. Het OpenSCAP-ecosysteem biedt tools en aanpasbaar beleid voor een snelle, kosteneffectieve en flexibele implementatie van deze processen.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integraties stellen u in staat om apparaatselectie en schema\'s voor Open-AudIT in te stellen om met externe systemen te praten.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap timing details zijn te vinden onderaan deze gekoppelde pagina <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. Van die pagina:<br/> <br/><em>Als u op een fatsoenlijke breedband- of ethernetverbinding zit, zou ik u aanraden altijd -T4 (Agressief) te gebruiken. Sommige mensen houden van -T5 (Insane) maar het is te agressief voor mijn smaak. Mensen specificeren soms -T2 (Polite) omdat ze denken dat het minder waarschijnlijk is om hosts te crashen of omdat ze zichzelf beleefd vinden in het algemeen. Ze beseffen vaak niet hoe traag -T2 echt is. Hun scan kan tien keer langer duren dan een standaard scan. Machine crashes en bandbreedte problemen zijn zeldzaam met de standaard timing opties -T3 (Normaal) en dus ik normaal raden dat voor voorzichtige scanners. Het weglaten van versiedetectie is veel effectiever dan het spelen met timings om deze problemen te verminderen.</em><footer>Gordon <i>Fjodor</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT kan worden geconfigureerd om verschillende methoden te gebruiken om een gebruiker te authenticeren en daarnaast een gebruikersaccount aan te maken met behulp van toegewezen rollen en orgs op basis van groepslidmaatschap.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open Aud IT kan details over een bestand of directory van bestanden ophalen en deze bestanden controleren op wijzigingen zoals in andere attributen in de Open-AudIT database.<br/> <br/>Deze functie werkt uit het veld voor Linux Open-AudIT servers, maar moet een wijziging in de service-accountnaam onder een Windows Open-AudIT server.<br/> <br/>Ondersteunde clients zijn Windows en Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open Aud IT kan details over een bestand ophalen, de native package manager vragen of ze bekend zijn en deze bestanden controleren op wijzigingen zoals in de Open-AudIT database.<br/> <br/>Ondersteunde clients zijn alleen Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open Aud IT kan informatie opslaan in aangepaste velden die met elk apparaat worden geassocieerd.<br/> <br/>Zodra een Extra veld is aangemaakt kan het worden gebruikt in queries en groepen net als elk ander attribuut in de database.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT wordt geleverd met veel queries ingebouwd. Als u een specifieke query nodig hebt en geen van de voorverpakte queries voldoet aan uw behoeften, is het heel eenvoudig om een nieuwe aan te maken en deze in Open-AudIT te laden om te draaien.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT wordt geleverd met vele samenvattingen ingebouwd. Als u een specifieke samenvatting nodig hebt en geen van de voorverpakte samenvattingen voldoet aan uw behoeften, is het heel eenvoudig om een nieuwe aan te maken en deze in Open-AudIT te laden om te draaien.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT wordt ondersteund door FirstWave met een geweldig niveau van ondersteuning. Als je liever een actieve gemeenschap van support gevers, dat is ook. Waar anders kun je direct met de ontwikkelaars praten en binnen 24 uur een reactie krijgen? Probeer dat gewoon met andere producten! Geweldige steun. Volledige stop. Je hebt steun nodig, wij bieden steun. Geen als of maar. Geweldige steun. Punt.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT biedt multi-tenancy uit de doos!<br/> <br/>Orgs (organisaties) in Open-AudIT zijn een belangrijk item. Een gebruiker heeft een primaire Org en een lijst van Orgs die ze kunnen openen. Een gebruiker combineert dit met een lijst van toegewezen "Roles" die bepalen welke acties ze kunnen nemen op items toegewezen aan de Orgs waar ze toegang toe hebben. De combinatie van gebruikers "orgs" en "roles" bepaalt wat ze wel en niet binnen Open-AudIT kunnen doen.<br/> <br/>De meeste items in Open-AudIT worden toegewezen aan een Org. Apparaten, Locaties, Netwerken, enz.<br/> <br/>Orgs kunnen kind Orgs krijgen. Denk aan een organisatieschema (boom) structuur. Als een gebruiker toegang heeft tot een specifieke Org, hebben ze ook toegang tot die Orgs afstammelingen. Voor meer informatie, zie dit <a href="/index.php/faq?name=Users, Roles and Orgs">Veelgestelde vragen</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT biedt multi-tenancy uit de doos!<br/> <br/>Orgs (organisaties) in Open-AudIT zijn een belangrijk item. Een gebruiker heeft een primaire Org en een lijst van Orgs die ze kunnen openen. Een gebruiker combineert dit met een lijst van toegewezen "Roles" die bepalen welke acties ze kunnen nemen op items toegewezen aan de Orgs waar ze toegang toe hebben. De combinatie van gebruikers "orgs" en "roles" bepaalt wat ze wel en niet binnen Open-AudIT kunnen doen.<br/> <br/>De meeste items in Open-AudIT worden toegewezen aan een Org. Apparaten, Locaties, Netwerken, enz.<br/> <br/>Orgs kunnen kind Orgs krijgen. Denk aan een organisatieschema (boom) structuur. Als een gebruiker toegang heeft tot een specifieke Org, hebben ze ook toegang tot die Orgs afstammelingen.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Bekijk snel de status van apparaten op uw netwerk.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Rol in Open Aud IT is een belangrijk item. Een gebruiker heeft een primaire Org en een lijst van Orgs die ze kunnen openen. Een gebruiker combineert dit met een lijst van toegewezen rollen die bepalen welke acties ze kunnen nemen op items toegewezen aan de Orgs waar ze toegang toe hebben. De combinatie van gebruikers "orgs" en "roles" bepaalt wat ze wel en niet binnen Open-AudIT kunnen doen.<br/> <br/>Ontvang de volledige Open-AudIT Enterprise ervaring. Het creëren van rollen maakt fijnkorrelige controle over wat uw gebruikers kunnen doen binnen Open-AudIT.<br/> <br/>De primaire methode voor de toelating (wat een gebruiker kan doen) is gebaseerd op de gebruikersrollen. Standaardrollen worden gedefinieerd als admin, org_admin, reporter en gebruiker. Elke rol heeft een set permissies (Create, Read, Update, Delete) voor elk eindpunt. De mogelijkheid om extra rollen te definiëren en bestaande rollen te bewerken is ingeschakeld in Open-AudIT Enterprise.<br/> <br/>Rollen kunnen ook worden gebruikt met LDAP (Active Directory en OpenLDAP) vergunning. Enterprise gelicentieerde installaties hebben de mogelijkheid om de LDAP-groep voor elke gedefinieerde rol aan te passen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Regels onderzoeken eigenschappen en maken cahnges op basis van de juiste regel.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Met scanopties kunt u eenvoudig een set opties toepassen op een ontdekking.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Eenvoudige, intuïtieve, nauwkeurige geografische kaart van Google Maps. Open-AudIT hefboominstrumenten Google Maps om live, interactieve geografische kaart van apparaatlocaties te bieden. Automatische conversie van straatadressen naar geocodes en lengte/breedtegraad.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Softwarepakketten worden gebruikt om te bepalen of antivirus, back-up, firewall, goedgekeurde of verboden software is geïnstalleerd.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Enkele voorbeelden van geldige Subnet-attributen zijn: 192.168.1.1 (een enkel IP-adres), 192.168.1.0/24 (een subnet), 192.168.1-3.1-20 (een reeks IP-adressen).<br/> <br/><em>NOOT</em> - Alleen een subnet (zoals de voorbeelden - 192.168.1.0/24) kan automatisch een geldig netwerk voor Open-AudIT creëren. <br/> <br/>Als u een Active Directory type gebruikt, zorg ervoor dat u de juiste referenties om te praten met uw Domain Controller al in <a href="../credentials">referenties</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standaarden worden opgeslagen in Open-AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Ondersteunde clients zijn alleen Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Taken hebben een schema dat het Unix Cron schema weerspiegelt. De attributen voor minuut, uur, dag_of_maand, maand, dag_of_week handelen allemaal volgens de cron definities. U kunt meerdere van deze selecteren met behulp van komma gescheiden waarden (geen spaties). U kunt elke waarde selecteren met behulp van *.<br/> <br/>De <code>type</code> van de taak kan een van: basislijnen, verzamelaars, ontdekkingen, vragen, rapporten of samenvattingen.<br/> <br/>Als u een Baseline of Discovery wilt plannen, moet u deze maken voordat u de taken aanmaakt. U moet de ID gebruiken van het type item in <code>sub_resource_id</code>. Als u bijvoorbeeld een Discovery wilt plannen, gebruik dan dat specifieke Discoveries ID in <code>sub_resource_id</code>.<br/> <br/>De waarde voor <code>uuid</code> is specifiek voor elke Open-AudIT server. Uw unieke waarde vindt u in de configuratie.<br/> <br/>De <code>options</code> attribuut is een JSON-document dat alle extra attributen bevat die nodig zijn om de taak uit te voeren. De extra attributen voor rapporten, vragen en samenvattingen zijn: <code>email_address</code> en <code>format</code>. Het extra attribuut voor Bselines is <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>De <code>type</code> van de locatie zal zijn pictogram toewijzen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Het Attributen eindpunt stelt u in staat om aangepaste waarden toe te voegen aan verschillende attributen in Open-AudIT, op het moment dat deze functie werkt op de Klasse, Omgeving, Status en Type attributen op Apparaten, het Type attribuut voor zowel Locaties en Orgs als de Menu Categorie voor Queries. Als u een item van een van de prachttypen (zeg een Lkocation bekijken) ziet u dat het attribuut Type moet worden geselecteerd uit een drop-down box. Hier worden die waarden opgeslagen. Dus, als u een nieuw Type wilt toevoegen om gekozen te worden voor een Locatie, voeg het toe met behulp van de Attributen functie.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>De Collectors functie stelt u in staat om gemakkelijk te beheren veel "collector" computers die netwerkontdekking uitvoeren. Alle Verzamelaars worden centraal gecontroleerd vanuit de Server. De enige benodigde netwerkpoorten tussen de Verzamelaar en de Server zijn 80 en/of 443.<br/> <br/>Het maakt het beheer van verschillende netwerken snel, eenvoudig en eenvoudig. Open-AudIT Enterprise licentienemers krijgen een enkele verzamelaar licentie opgenomen en hebben de mogelijkheid om meer te kopen als vereist..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>Het SELECT gedeelte van uw SQL <em>moet</em> bevat volledig gekwalificeerde kolommen. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>Het WHERE gedeelte van uw SQL <em>moet</em> bevatten <code>WHERE @filter</code> Open-AudIT weet dus om uw zoekopdracht te beperken tot de juiste Orgs. SQL die deze voorwaarde niet bevat zal resulteren in het niet aanmaken van de query, tenzij je de Admin rol hebt.<br/> <br/>Een voorbeeldvraag SQL die attributen toont op apparaten met een <code>os_group</code> attribuut van "Linux" <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>Het SELECT gedeelte van uw SQL <em>moet</em> alleen bevatten <code>DISTINCT(devices.id)</code>.<br/> <br/>Het WHERE gedeelte van uw SQL <em>moet</em> bevatten <code>WHERE @filter</code> Open-AudIT weet dus om uw zoekopdracht te beperken tot de juiste Orgs. SQL die deze voorwaarde niet bevat zal resulteren in het niet aanmaken van de groep.<br/> <br/>Een voorbeeld voor SQL om alle apparaten te selecteren die het Debian OS draaien - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Met het licentie-eindpunt kunt u het aantal licenties op uw apparaten volgen.<br/> <br/>Om een item aan te maken om uw licenties te volgen u <em>moet</em> het verstrekken van een naam, een organisatie, het aantal verkregen licenties en de naam van de software. Op het veld <code>match_string</code> u moet de naam van de software die u wilt bijhouden, kunt u het percentage teken (%) gebruiken als een wildcard in de match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Het netwerk moet in het formaat 192.168.1.0/24 zijn.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>De primaire en facultatieve secundaire posten moeten volledig gekwalificeerd zijn - d.w.z. apparaten. type of software. Naam.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Het is niet nodig om iets te doen als je Open-AudIT op een Linux server gebruikt.<br/><br/>Windows clients zijn gewoon prima en vereisen geen speciale acties, echter ... om deze functie in te schakelen moet het audit script lokaal worden uitgevoerd op het doel Windows-systeem. Het kan niet op afstand worden uitgevoerd zoals we doen met WMI-aanroepen bij het uitvoeren van het audit script op een Windows-machine, terwijl het richten van een tweede Windows-machine. Om dit te doen moeten we het audit script kopiëren naar het doel Windows machine en vervolgens uitvoeren. Helaas is de service account waar Apache onder draait de Local System account. Dit account heeft geen toegang tot externe (netwerkgebaseerde) bronnen. Om rond deze kwestie te werken moet de dienst onder een andere rekening worden uitgevoerd. Het is het makkelijkst om het lokale Administrator-account te gebruiken, maar u kunt elk account dat u wilt proberen zolang het de vereiste privileges heeft. Het Local System-account heeft evenveel lokale toegang als het lokale Administrator-account.<br/><br/>Zie onze pagina over inschakelen <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Open-AudIT Apache-service draaien onder Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Dit zijn de apparaten die in een rek leven.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Dit eindpunt stelt u in staat om uw cloud infrastructuur details toe te voegen. Open-AudIT zal dan contact opnemen met uw clouds met behulp van hun eigen API en uw servers retourneren, net als elk ander apparaat in Open-AudIT.<br/> <br/><em>NOOT</em> - Om deze functie te gebruiken, we <em>moet</em> de configuratie-items match_mac (voor AWS) en match_hostname (voor Azure) inschakelen. Dit zal automatisch gebeuren de eerste keer dat een cloud ontdekking wordt uitgevoerd.<br/> <br/>Identiteiten voor uw cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> of <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) zijn vereist.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Kwetsbaarheden rapportage gebaseerd op de NIST CVE-feed.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>We hebben in eerste instantie de standaardlijst van scripts ingesteld met de standaardopties. Deze standaardscripts kunnen niet worden verwijderd. U kunt extra scripts maken voor gebruik door u zoals vereist. Uw script zal worden gebaseerd op een van de bestaande scripts en hebben aangepaste opties toegepast. De scripts kunnen vervolgens worden gedownload van de lijstpagina bij menu -> Ontdekken -> Auditscripts -> Lijstcontrolescripts<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Bij het gebruik van Regex voor matching, kan een nuttige pagina worden gevonden op de <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Enkele verschillen met Perl Regex zijn te vinden <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Hier.</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets kunnen eenvoudig worden gemaakt om te laten zien wat specifiek is voor uw omgeving op uw dashboards.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Met Open-AudIT Professional en Enterprise kunt u automatiseren en plannen ontdekkingen, rapportage generatie, of basischecks uitvoeren wanneer u wilt, en zo vaak als je nodig hebt. Plan uw ontdekkingen om nachtelijk uit te voeren en rapporten worden gegenereerd en elke ochtend gemaild naar sleutelpersoneel. Complexe of eenvoudige schema\'s, apparaat ontdekking en rapportage generatie is slechts een klik verwijderd.<br/> <br/>Maak individuele ontdekkingsschema\'s voor elk subnet of AD controller, voeg in rapporten toe die moeten worden gemaakt voor doelpubliek. Ontwikkel eenvoudige of complexe schema\'s om de behoeften van het bedrijf te ondersteunen, back-ups of impact op operaties te vermijden, of gewoon om de load en snelheid-audit voltooiing te verspreiden.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>U kunt een script maken met alle opties voor een van de bestaande audit scripts - niet alleen Windows. AIX, ESX, Linux, OSX en Windows zijn allemaal gedekt.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>U kunt het percentage % als wildcard gebruiken in de match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Uw rekken helpen verfijnen precies waar uw apparaten zijn gevestigd.<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Een Google Maps API Sleutel is vereist voor deze functie.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Een JSON-array van apparaat-ID\'s die deze benchmark zal laten uitvoeren.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'Een JSON reeks objecten die overeenkomen met de softwarenaam van de CVE, verrijkt met de softwarenaam opgehaald door Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Een JSON reeks van waarden om te testen op deze kwetsbaarheid.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Een JSON-document met de aan deze gebruiker toegewezen Orgs. ID\'s van <code>orgs.id</code>. Als een gebruiker toegang heeft tot een Org, hebben ze toegang tot die Orgs afstammelingen.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Een JSON-document met de vereiste attributen afhankelijk van <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Een JSON-document dat de vereiste attributen bevat die de gekozen discovery_scan_options overkoepelen.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Een JSON-document met de vereiste attributen die de standaard device-matchopties bepalen.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Een JSON-document met de aan deze gebruiker toegewezen rollen. Rolnamen van <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Een JSON-object dat een reeks attributen bevat om te wijzigen als de overeenkomst plaatsvindt.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Een JSON-object met een reeks attributen die moeten overeenkomen.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Een JSON object met verzameling specifieke opties.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Een JSON object bevolkt via een Cloud ontdekking.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Een JSON-representatie met de details van het uit te voeren wachtrij-item.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Een JSON vertegenwoordiging van de gebieden voor deze integratie.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Een JSON-representatie van de individuele tests en hun resultaten op alle apparaten waarmee deze basislijn is vergeleken.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Een JSON vertegenwoordiging van de tests die dit beleid vormen.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Een URL naar een te downloaden bestand.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Een berekend veld dat het aantal keer toont dat dit stuk software werd gevonden op de computers in de geselecteerde Org (en zijn nakomelingen indien geconfigureerd).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Een verzamelaar is ofwel in Collector of Stand-Alone modus.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Een komma gescheiden lijst van toepasselijke CVE\'s.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Een komma gescheiden lijst van waarden, waarvan een kan worden geselecteerd.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Een commando om uit te voeren. Wanneer de agent gebaseerd is op Windows, wordt dit commando uitgevoerd vanuit de powershell agent.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Een lijst van aangepaste TCP-poorten om te scannen (22 is SSH, 135 is WMI, 62078 is iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Een lijst van aangepaste UDP-poorten om te scannen (161 is SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Een lager aantal betekent dat het zal worden toegepast vóór andere regels.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Een lager aantal betekent dat het zal worden toegepast vóór andere regels. Het standaardgewicht is 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Een wachtwoord (opgeslagen als een hash) waarmee inloggen bij het gebruik van applicatie-authenticatie mogelijk is.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Een routeringsdomein of adresruimte waar de IP-adressen en MAC-adressen uniek zijn.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Een veiligheidszone is een administratief domein of beleidsdomein binnen het netwerkdomein.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Een korte beschrijving van het logboek.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Een tekenreeks die overeenkomt met de <code>software.name</code> kenmerk. U kunt de standaard SQL wildcard van procent (%) gebruiken om één of meer tekens te vergelijken.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Een kwetsbaarheid die van invloed is op de beschikbaarheid kan aanvallers toestaan diensten te verstoren, crash systemen, of ontkenning van de dienst (DoS) (Geen, Laag, Hoog).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Een kwetsbaarheid die van invloed is op de vertrouwelijkheid kan aanvallers in staat stellen om gevoelige gegevens te lezen, zoals persoonlijke informatie, referenties, of eigen zakelijke gegevens (Geen, Laag, Hoog).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Een kwetsbaarheid die de integriteit beïnvloedt kan aanvallers toelaten om gegevens te wijzigen, kwaadaardige code te injecteren, of systeemconfiguraties te wijzigen (Geen, laag, hoog).';

$GLOBALS["lang"]['AD Group'] = 'AD-groep';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFK, ISDN, enz.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'ALLE IP\'s';

$GLOBALS["lang"]['API / Web Access'] = 'API / Webtoegang';

$GLOBALS["lang"]['API Documentation'] = 'API-documentatie';

$GLOBALS["lang"]['API Key required.'] = 'API Key vereist.';

$GLOBALS["lang"]['API Result'] = 'API-resultaat';

$GLOBALS["lang"]['About'] = 'Info';

$GLOBALS["lang"]['Accept'] = 'Accepteren';

$GLOBALS["lang"]['access_point'] = 'Toegangspunt';

$GLOBALS["lang"]['Access Point'] = 'Toegangspunt';

$GLOBALS["lang"]['access_token'] = 'Toegang tot Token';

$GLOBALS["lang"]['Access Token'] = 'Toegang tot Token';

$GLOBALS["lang"]['ack_by'] = 'Ack op';

$GLOBALS["lang"]['Ack By'] = 'Ack op';

$GLOBALS["lang"]['ack_date'] = 'Ack-datum';

$GLOBALS["lang"]['Ack Date'] = 'Ack-datum';

$GLOBALS["lang"]['ack_time'] = 'Ack tijd';

$GLOBALS["lang"]['Ack Time'] = 'Ack tijd';

$GLOBALS["lang"]['action'] = 'Actie';

$GLOBALS["lang"]['Action'] = 'Actie';

$GLOBALS["lang"]['action_audit'] = 'Action Audit';

$GLOBALS["lang"]['Action Audit'] = 'Action Audit';

$GLOBALS["lang"]['action_command'] = 'Actiecommando';

$GLOBALS["lang"]['Action Command'] = 'Actiecommando';

$GLOBALS["lang"]['action_date'] = 'Actiedatum';

$GLOBALS["lang"]['Action Date'] = 'Actiedatum';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Aan locatie toegewezen actie-apparaten';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Aan locatie toegewezen actie-apparaten';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Aan org toegewezen actie-apparaten';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Aan org toegewezen actie-apparaten';

$GLOBALS["lang"]['action_download'] = 'Actiedownload';

$GLOBALS["lang"]['Action Download'] = 'Actiedownload';

$GLOBALS["lang"]['action_uninstall'] = 'Actie verwijderen';

$GLOBALS["lang"]['Action Uninstall'] = 'Actie verwijderen';

$GLOBALS["lang"]['actioned'] = 'Actief';

$GLOBALS["lang"]['Actioned'] = 'Actief';

$GLOBALS["lang"]['actioned_by'] = 'Gereed door';

$GLOBALS["lang"]['Actioned By'] = 'Gereed door';

$GLOBALS["lang"]['actioned_date'] = 'Geactieerde datum';

$GLOBALS["lang"]['Actioned Date'] = 'Geactieerde datum';

$GLOBALS["lang"]['actions'] = 'Acties';

$GLOBALS["lang"]['Actions'] = 'Acties';

$GLOBALS["lang"]['Activate'] = 'Activeer';

$GLOBALS["lang"]['Activate Free License'] = 'Vrije licentie activeren';

$GLOBALS["lang"]['Activate Key'] = 'Sleutel activeren';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Activeer een gratis Enterprise-licentie';

$GLOBALS["lang"]['Active'] = 'Actief';

$GLOBALS["lang"]['Active / Active'] = 'Actief / actief';

$GLOBALS["lang"]['Active / Passive'] = 'Actief / passief';

$GLOBALS["lang"]['Active Directory'] = 'Actieve map';

$GLOBALS["lang"]['Active Directory Domain'] = 'Actief Mapdomein';

$GLOBALS["lang"]['active_directory_ou'] = 'Actieve map Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Actieve map Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Actieve directoryserver';

$GLOBALS["lang"]['ad_domain'] = 'Ad-domein';

$GLOBALS["lang"]['Ad Domain'] = 'Ad-domein';

$GLOBALS["lang"]['ad_group'] = 'Ad-groep';

$GLOBALS["lang"]['Ad Group'] = 'Ad-groep';

$GLOBALS["lang"]['ad_server'] = 'Ad-server';

$GLOBALS["lang"]['Ad Server'] = 'Ad-server';

$GLOBALS["lang"]['Add'] = 'Voeg toe';

$GLOBALS["lang"]['Add Credentials'] = 'Geheimen toevoegen';

$GLOBALS["lang"]['Add Device'] = 'Apparaat toevoegen';

$GLOBALS["lang"]['Add Device to Application'] = 'Apparaat toevoegen aan toepassing';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Apparaat toevoegen aan cluster';

$GLOBALS["lang"]['Add Exception'] = 'Uitzondering toevoegen';

$GLOBALS["lang"]['Add Field'] = 'Veld toevoegen';

$GLOBALS["lang"]['Add If'] = 'Toevoegen als';

$GLOBALS["lang"]['Add Policies from Device'] = 'Beleid van apparaat toevoegen';

$GLOBALS["lang"]['Add Policy'] = 'Beleid toevoegen';

$GLOBALS["lang"]['Add Then'] = 'Toevoegen';

$GLOBALS["lang"]['Add image'] = 'Afbeelding toevoegen';

$GLOBALS["lang"]['additional_items'] = 'Aanvullende items';

$GLOBALS["lang"]['Additional Items'] = 'Aanvullende items';

$GLOBALS["lang"]['address'] = 'Adres';

$GLOBALS["lang"]['Address'] = 'Adres';

$GLOBALS["lang"]['Admin'] = 'Beheerder';

$GLOBALS["lang"]['admin_status'] = 'Beheersstatus';

$GLOBALS["lang"]['Admin Status'] = 'Beheersstatus';

$GLOBALS["lang"]['advanced'] = 'Geavanceerd';

$GLOBALS["lang"]['Advanced'] = 'Geavanceerd';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan';

$GLOBALS["lang"]['agents'] = 'Middelen';

$GLOBALS["lang"]['Agents'] = 'Middelen';

$GLOBALS["lang"]['Aggressive'] = 'Agressief';

$GLOBALS["lang"]['Aland Islands'] = 'Alandeilanden';

$GLOBALS["lang"]['Albania'] = 'Albanië';

$GLOBALS["lang"]['alert_style'] = 'Waarschuwingsstijl';

$GLOBALS["lang"]['Alert Style'] = 'Waarschuwingsstijl';

$GLOBALS["lang"]['Algeria'] = 'Algerije';

$GLOBALS["lang"]['algorithm'] = 'Algoritme';

$GLOBALS["lang"]['Algorithm'] = 'Algoritme';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'Alles';

$GLOBALS["lang"]['All IPs'] = 'Alle IP\'s';

$GLOBALS["lang"]['All Policies'] = 'Alle beleidsmaatregelen';

$GLOBALS["lang"]['All Queued Items'] = 'Alle in de wachtrij geplaatste items';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Velden';

$GLOBALS["lang"]['American Samoa'] = 'Amerikaans-Samoa';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Een reeks van <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Een reeks van <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Een reeks objecten die externe links naar meer informatie weergeven.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Een versleuteld JSON-document met de vereiste attributen, afhankelijk van de <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Een indicatie van het niveau van de dienstverlening vereist door deze site.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Een intern veld dat aangeeft of de ontdekking voltooid is.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Een optionele GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Een optioneel wachtwoord om sudo te gebruiken.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Antarctica';

$GLOBALS["lang"]['AntiVirus'] = 'Antivirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua en Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Alle TCP poorten (coma gescheiden, geen spaties) die u van deze ontdekking wilt uitsluiten. Alleen beschikbaar bij gebruik van Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Alle UDP-poorten (coma gescheiden, geen spaties) die u van deze ontdekking wilt uitsluiten. Alleen beschikbaar bij gebruik van Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Alle aanvullende documentatie die u nodig heeft.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Alle extra aantekeningen die je wilt maken.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Alle apparaten worden toegewezen aan deze org wanneer ze hun auditscript uitvoeren (indien ingesteld). Links naar <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Alle ontdekte apparaten zullen worden toegewezen aan deze locatie indien ingesteld. Links naar <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Elke ontdekte apparaten zullen worden toegewezen aan deze locatie wanneer ze hun audit script (indien ingesteld) uitvoeren. Links naar <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Alle ontdekte apparaten worden toegewezen aan deze org indien ingesteld. Indien niet ingesteld, worden zij toegewezen aan de <code>org_id</code> van deze ontdekking. Links naar <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Elk gewenst filter. OPMERKING: Wanneer type = verkeer, dit vertegenwoordigt het font-awesome pictogram.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Alle specifieke TCP-poorten die u wilt getest (coma gescheiden, geen spaties).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Alle specifieke UDP-poorten die u wilt getest (coma gescheiden, geen spaties).';

$GLOBALS["lang"]['Application'] = 'Toepassing';

$GLOBALS["lang"]['application_id'] = 'Programma-ID';

$GLOBALS["lang"]['Application ID'] = 'Programma-ID';

$GLOBALS["lang"]['Application Licenses'] = 'Toepassingslicenties';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Toepassing, besturingssysteem of hardware.';

$GLOBALS["lang"]['applications'] = 'Aanvragen';

$GLOBALS["lang"]['Applications'] = 'Aanvragen';

$GLOBALS["lang"]['applied'] = 'Toegepast';

$GLOBALS["lang"]['Applied'] = 'Toegepast';

$GLOBALS["lang"]['Approved'] = 'Goedgekeurd';

$GLOBALS["lang"]['April'] = 'april';

$GLOBALS["lang"]['architecture'] = 'Bouwkunde';

$GLOBALS["lang"]['Architecture'] = 'Bouwkunde';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Weet u zeker dat u dit invoeritem wilt verwijderen?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Weet u zeker dat u dit item wilt verwijderen?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Weet je het zeker? Dit zal alle wachtrij-items verwijderen en voorkomen dat de resterende IP\'s worden ontdekt.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Weet je het zeker? Dit zal het aantal wachtrijverwerkingen resetten en kan belasting op de server veroorzaken.';

$GLOBALS["lang"]['area'] = 'Gebied';

$GLOBALS["lang"]['Area'] = 'Gebied';

$GLOBALS["lang"]['Argentina'] = 'Argentinië';

$GLOBALS["lang"]['Armenia'] = 'Armenië';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Volgens de eigenschappen voor apparaatomgevingen. Productie, opleiding, et al.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Zoals je hebt Verzamelaars geregistreerd, kies dan waar deze ontdekking uit te voeren.';

$GLOBALS["lang"]['Ask me later'] = 'Vraag het me later.';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Vraag de Gemeenschap om hulp of geef anderen een antwoord.';

$GLOBALS["lang"]['aspect_ratio'] = 'Verhouding';

$GLOBALS["lang"]['Aspect Ratio'] = 'Verhouding';

$GLOBALS["lang"]['Asset ID'] = 'Activa-ID';

$GLOBALS["lang"]['asset_ident'] = 'Identiteit vermogen';

$GLOBALS["lang"]['Asset Ident'] = 'Identiteit vermogen';

$GLOBALS["lang"]['asset_number'] = 'Aantal activa';

$GLOBALS["lang"]['Asset Number'] = 'Aantal activa';

$GLOBALS["lang"]['asset_tag'] = 'Waarde-tag';

$GLOBALS["lang"]['Asset Tag'] = 'Waarde-tag';

$GLOBALS["lang"]['Assign Device to Application'] = 'Apparaat toewijzen aan toepassing';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Apparaat toewijzen aan Cluster';

$GLOBALS["lang"]['Assign Device to Location'] = 'Apparaat toewijzen aan locatie';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Apparaat toewijzen aan organisatie';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Apparaten naar locatie toewijzen';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Apparaten aan organisatie toewijzen';

$GLOBALS["lang"]['Assign an Operator'] = 'Een exploitant toewijzen';

$GLOBALS["lang"]['Assigned To'] = 'Aan';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Momenteel kunnen we netstat_ports, software en gebruikers gebruiken.';

$GLOBALS["lang"]['attached_device_id'] = 'Bijgevoegd apparaat-ID';

$GLOBALS["lang"]['Attached Device ID'] = 'Bijgevoegd apparaat-ID';

$GLOBALS["lang"]['attached_to'] = 'Verbonden aan';

$GLOBALS["lang"]['Attached To'] = 'Verbonden aan';

$GLOBALS["lang"]['attachment'] = 'Bijlage';

$GLOBALS["lang"]['Attachment'] = 'Bijlage';

$GLOBALS["lang"]['attachments'] = 'Bijlagen';

$GLOBALS["lang"]['Attachments'] = 'Bijlagen';

$GLOBALS["lang"]['attack_complexity'] = 'Aanvallen Complexiteit';

$GLOBALS["lang"]['Attack Complexity'] = 'Aanvallen Complexiteit';

$GLOBALS["lang"]['attack_requirements'] = 'Aanvalsvereisten';

$GLOBALS["lang"]['Attack Requirements'] = 'Aanvalsvereisten';

$GLOBALS["lang"]['attack_vector'] = 'Vector aanvallen';

$GLOBALS["lang"]['Attack Vector'] = 'Vector aanvallen';

$GLOBALS["lang"]['Attribute'] = 'Attribuut';

$GLOBALS["lang"]['attributes'] = 'Attributen';

$GLOBALS["lang"]['Attributes'] = 'Attributen';

$GLOBALS["lang"]['Audit'] = 'Controle';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Audit ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Auditlog';

$GLOBALS["lang"]['Audit Log'] = 'Auditlog';

$GLOBALS["lang"]['Audit My PC'] = 'Controleer mijn PC';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Invoer auditresultaat';

$GLOBALS["lang"]['Audit Status'] = 'Controlestatus';

$GLOBALS["lang"]['Audit Windows'] = 'Controlevensters';

$GLOBALS["lang"]['Audit the Device'] = 'Controleer het apparaat';

$GLOBALS["lang"]['Audits'] = 'Controles';

$GLOBALS["lang"]['August'] = 'Augustus';

$GLOBALS["lang"]['Australia'] = 'Australië';

$GLOBALS["lang"]['Austria'] = 'Oostenrijk';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Authenticatie wachtwoordzin';

$GLOBALS["lang"]['authority_key_ident'] = 'Identificatiecode autoriteit';

$GLOBALS["lang"]['Authority Key Ident'] = 'Identificatiecode autoriteit';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['auto_renew'] = 'Automatisch vernieuwen';

$GLOBALS["lang"]['Auto Renew'] = 'Automatisch vernieuwen';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Automatisch bevolkt door de Open-AudIT Server.';

$GLOBALS["lang"]['AutoRenew'] = 'Automatisch vernieuwen';

$GLOBALS["lang"]['automatable'] = 'Automatisch';

$GLOBALS["lang"]['Automatable'] = 'Automatisch';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automatisch bevolkt op basis van de Verzamelaars OS.';

$GLOBALS["lang"]['availability'] = 'Beschikbaarheid';

$GLOBALS["lang"]['Availability'] = 'Beschikbaarheid';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbeidzjan';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Totaal';

$GLOBALS["lang"]['Backup'] = 'Reservekopie';

$GLOBALS["lang"]['Bahamas the'] = 'Bahama\'s';

$GLOBALS["lang"]['Bahrain'] = 'Bahrein';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Verboden';

$GLOBALS["lang"]['bar_code'] = 'Barcode';

$GLOBALS["lang"]['Bar Code'] = 'Barcode';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'Basis-DN';

$GLOBALS["lang"]['base_score'] = 'Basisscore';

$GLOBALS["lang"]['Base Score'] = 'Basisscore';

$GLOBALS["lang"]['base_severity'] = 'Basisafscheiding';

$GLOBALS["lang"]['Base Severity'] = 'Basisafscheiding';

$GLOBALS["lang"]['based_on'] = 'Gebaseerd op';

$GLOBALS["lang"]['Based On'] = 'Gebaseerd op';

$GLOBALS["lang"]['baseline'] = 'Baseline';

$GLOBALS["lang"]['Baseline'] = 'Baseline';

$GLOBALS["lang"]['baseline_id'] = 'Basis ID';

$GLOBALS["lang"]['Baseline ID'] = 'Basis ID';

$GLOBALS["lang"]['baselines'] = 'Baseline';

$GLOBALS["lang"]['Baselines'] = 'Baseline';

$GLOBALS["lang"]['baselines_policies'] = 'Basisbeleid';

$GLOBALS["lang"]['Baselines Policies'] = 'Basisbeleid';

$GLOBALS["lang"]['Baselines Policy'] = 'Basisbeleid';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Basislijn Beleidsgegevens';

$GLOBALS["lang"]['baselines_results'] = 'Resultaten';

$GLOBALS["lang"]['Baselines Results'] = 'Resultaten';

$GLOBALS["lang"]['Basic'] = 'Basis';

$GLOBALS["lang"]['Belarus'] = 'Belarus';

$GLOBALS["lang"]['Belgium'] = 'België';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Benchmark ID';

$GLOBALS["lang"]['benchmarks'] = 'Benchmark';

$GLOBALS["lang"]['Benchmarks'] = 'Benchmark';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Uitzonderingen op benchmarks';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Uitzonderingen op benchmarks';

$GLOBALS["lang"]['benchmarks_log'] = 'Benchmarklog';

$GLOBALS["lang"]['Benchmarks Log'] = 'Benchmarklog';

$GLOBALS["lang"]['benchmarks_policies'] = 'Benchmarksbeleid';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Benchmarksbeleid';

$GLOBALS["lang"]['benchmarks_result'] = 'Resultaat benchmarks';

$GLOBALS["lang"]['Benchmarks Result'] = 'Resultaat benchmarks';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermuda';

$GLOBALS["lang"]['best_practises'] = 'Beste oefeningen';

$GLOBALS["lang"]['Best Practises'] = 'Beste oefeningen';

$GLOBALS["lang"]['Bhutan'] = 'Bhutan';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['body'] = 'Lichaam';

$GLOBALS["lang"]['Body'] = 'Lichaam';

$GLOBALS["lang"]['Bolivia'] = 'Bolivia';

$GLOBALS["lang"]['Boolean'] = 'Booleaans';

$GLOBALS["lang"]['Boolean 1/0'] = 'Booleaans 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y/n';

$GLOBALS["lang"]['boot_device'] = 'Opstartapparaat';

$GLOBALS["lang"]['Boot Device'] = 'Opstartapparaat';

$GLOBALS["lang"]['bootable'] = 'Opstartbaar';

$GLOBALS["lang"]['Bootable'] = 'Opstartbaar';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnië en Herzegovina';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazilië';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Braziliaans Portugees';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Brits gebied in de Indische Oceaan (Chagos Archipel)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Britse Maagdeneilanden';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu Totaal';

$GLOBALS["lang"]['Btu Total'] = 'Btu Totaal';

$GLOBALS["lang"]['build_number'] = 'Bouwnummer';

$GLOBALS["lang"]['Build Number'] = 'Bouwnummer';

$GLOBALS["lang"]['build_number_full'] = 'Bouwnummer vol';

$GLOBALS["lang"]['Build Number Full'] = 'Bouwnummer vol';

$GLOBALS["lang"]['Building'] = 'Gebouw';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgarije';

$GLOBALS["lang"]['Bulk Edit'] = 'Bewerken in bulk';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Apparaatattributen bewerken in bulk';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Bedrijfsvereisten';

$GLOBALS["lang"]['Business Requirements'] = 'Bedrijfsvereisten';

$GLOBALS["lang"]['Buy'] = 'Kopen';

$GLOBALS["lang"]['Buy More'] = 'Koop meer';

$GLOBALS["lang"]['Buy More Licenses'] = 'Koop meer licenties';

$GLOBALS["lang"]['By'] = 'Door';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Masker';

$GLOBALS["lang"]['cli_config'] = 'CLI Configureren';

$GLOBALS["lang"]['CLI Config'] = 'CLI Configureren';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU\'s';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Berekend door ontdekking.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Berekend totaal aantal geldige IP-adressen voor dit netwerk.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Berekend na voltooiing, de tijd die nodig is om dit item uit te voeren.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Berekend wanneer integratie wordt uitgevoerd en bevat een JSON weergave van de apparaten in deze integratie. Elke links naar <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Berekend wanneer integratie wordt uitgevoerd en bevat een JSON weergave van de locaties in deze integratie. Elke links naar <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Berekend wanneer integratie wordt uitgevoerd en bevat het aantal apparaten geselecteerd uit Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Berekend wanneer integratie wordt uitgevoerd en bevat het aantal apparaten geselecteerd het externe systeem.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Berekend wanneer integratie wordt uitgevoerd en bevat het aantal apparaten dat in het externe systeem moet worden bijgewerkt.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Berekend wanneer integratie wordt uitgevoerd en bevat het aantal apparaten bijgewerkt in Open-AudIT.';

$GLOBALS["lang"]['Cambodia'] = 'Cambodja';

$GLOBALS["lang"]['Cameroon'] = 'Kameroen';

$GLOBALS["lang"]['Campus Area Network'] = 'Netwerk campusgebied';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Kan <code>active</code>, <code>passive</code> of leeg.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Kan <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> of leeg.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Kan <code>auto</code>, <code>fixed</code>, <code>other</code> of leeg.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Kan <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> of leeg.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Kan <code>line</code>, <code>pie</code> of <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Kan <code>user</code> of <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Kan ingesteld worden door ontdekking of gebruiker.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Kan ingesteld worden door ontdekking of gebruiker. Gebruikt de ID van de locatietabel.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Kan de gebruiker dit item bewerken.';

$GLOBALS["lang"]['Canada'] = 'Canada';

$GLOBALS["lang"]['Cancel'] = 'Annuleren';

$GLOBALS["lang"]['capabilities'] = 'Mogelijkheden';

$GLOBALS["lang"]['Capabilities'] = 'Mogelijkheden';

$GLOBALS["lang"]['Capacity'] = 'Capaciteit';

$GLOBALS["lang"]['Cape Verde'] = 'Kaapverdië';

$GLOBALS["lang"]['Capitalise'] = 'Kapitalisatie';

$GLOBALS["lang"]['caption'] = 'Titel';

$GLOBALS["lang"]['Caption'] = 'Titel';

$GLOBALS["lang"]['Cayman Islands'] = 'Kaaimaneilanden';

$GLOBALS["lang"]['Cellular Details'] = 'Cellulaire details';

$GLOBALS["lang"]['Central African Republic'] = 'Centraal-Afrikaanse Republiek';

$GLOBALS["lang"]['certificate'] = 'Certificaat';

$GLOBALS["lang"]['Certificate'] = 'Certificaat';

$GLOBALS["lang"]['certificate_file'] = 'Certificaatbestand';

$GLOBALS["lang"]['Certificate File'] = 'Certificaatbestand';

$GLOBALS["lang"]['certificate_name'] = 'Naam certificaat';

$GLOBALS["lang"]['Certificate Name'] = 'Naam certificaat';

$GLOBALS["lang"]['certificates'] = 'Certificaten';

$GLOBALS["lang"]['Certificates'] = 'Certificaten';

$GLOBALS["lang"]['Chad'] = 'Tsjaad';

$GLOBALS["lang"]['change_id'] = 'ID wijzigen';

$GLOBALS["lang"]['Change ID'] = 'ID wijzigen';

$GLOBALS["lang"]['change_log'] = 'Logboek wijzigen';

$GLOBALS["lang"]['Change Log'] = 'Logboek wijzigen';

$GLOBALS["lang"]['change_type'] = 'Type wijzigen';

$GLOBALS["lang"]['Change Type'] = 'Type wijzigen';

$GLOBALS["lang"]['check_minutes'] = 'Minuten controleren';

$GLOBALS["lang"]['Check Minutes'] = 'Minuten controleren';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Controleren op SSH op deze poorten';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Controleer deze poort voor elke SSH service.';

$GLOBALS["lang"]['Chile'] = 'Chili';

$GLOBALS["lang"]['China'] = 'China';

$GLOBALS["lang"]['Choose'] = 'Kies';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Kies (selecteer OS eerst)';

$GLOBALS["lang"]['Choose a Device'] = 'Een apparaat kiezen';

$GLOBALS["lang"]['Choose a Table'] = 'Kies een tabel';

$GLOBALS["lang"]['Christmas Island'] = 'Christmas Island';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Aantal circuits';

$GLOBALS["lang"]['Circuit Count'] = 'Aantal circuits';

$GLOBALS["lang"]['circuit_status'] = 'Circuitstatus';

$GLOBALS["lang"]['Circuit Status'] = 'Circuitstatus';

$GLOBALS["lang"]['city'] = 'Stad';

$GLOBALS["lang"]['City'] = 'Stad';

$GLOBALS["lang"]['class'] = 'Klasse';

$GLOBALS["lang"]['Class'] = 'Klasse';

$GLOBALS["lang"]['class_text'] = 'Klassetekst';

$GLOBALS["lang"]['Class Text'] = 'Klassetekst';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Klik op de knop Verwijderen om de voorbeeldapparaten uit Open-AudIT te verwijderen.<br/>Dit zal de onderstaande apparaten uit de database verwijderen. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Klik op de knop Importeren om Open-AudIT te vullen met voorbeeldapparaatgegevens.';

$GLOBALS["lang"]['Client ID'] = 'Client-ID';

$GLOBALS["lang"]['client_ident'] = 'Client Ident';

$GLOBALS["lang"]['Client Ident'] = 'Client Ident';

$GLOBALS["lang"]['client_secret'] = 'Client Secret';

$GLOBALS["lang"]['Client Secret'] = 'Client Secret';

$GLOBALS["lang"]['client_site_name'] = 'Naam van client-site';

$GLOBALS["lang"]['Client Site Name'] = 'Naam van client-site';

$GLOBALS["lang"]['Close'] = 'Sluiten';

$GLOBALS["lang"]['Cloud'] = 'Wolk';

$GLOBALS["lang"]['Cloud Details'] = 'Clouddetails';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['cloud_id'] = 'Cloud-ID';

$GLOBALS["lang"]['Cloud ID'] = 'Cloud-ID';

$GLOBALS["lang"]['cloud_log'] = 'Cloudlog';

$GLOBALS["lang"]['Cloud Log'] = 'Cloudlog';

$GLOBALS["lang"]['cloud_name'] = 'Wolknaam';

$GLOBALS["lang"]['Cloud Name'] = 'Wolknaam';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud Network';

$GLOBALS["lang"]['clouds'] = 'Wolken';

$GLOBALS["lang"]['Clouds'] = 'Wolken';

$GLOBALS["lang"]['cluster'] = 'Cluster';

$GLOBALS["lang"]['Cluster'] = 'Cluster';

$GLOBALS["lang"]['cluster_id'] = 'Cluster-ID';

$GLOBALS["lang"]['Cluster ID'] = 'Cluster-ID';

$GLOBALS["lang"]['cluster_name'] = 'Clusternaam';

$GLOBALS["lang"]['Cluster Name'] = 'Clusternaam';

$GLOBALS["lang"]['cluster_type'] = 'Clustertype';

$GLOBALS["lang"]['Cluster Type'] = 'Clustertype';

$GLOBALS["lang"]['clusters'] = 'Clusters';

$GLOBALS["lang"]['Clusters'] = 'Clusters';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Cocoseilanden';

$GLOBALS["lang"]['Collector'] = 'Verzamelaar';

$GLOBALS["lang"]['Collector (UUID)'] = 'Verzamelaar (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Naam verzamelaar';

$GLOBALS["lang"]['collector_uuid'] = 'Verzamelaar Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Verzamelaar Uuid';

$GLOBALS["lang"]['collectors'] = 'Verzamelaars';

$GLOBALS["lang"]['Collectors'] = 'Verzamelaars';

$GLOBALS["lang"]['Colombia'] = 'Colombia';

$GLOBALS["lang"]['color'] = 'Kleur';

$GLOBALS["lang"]['Color'] = 'Kleur';

$GLOBALS["lang"]['column'] = 'Kolom';

$GLOBALS["lang"]['Column'] = 'Kolom';

$GLOBALS["lang"]['Columns'] = 'Kolommen';

$GLOBALS["lang"]['command'] = 'Commando';

$GLOBALS["lang"]['Command'] = 'Commando';

$GLOBALS["lang"]['command_options'] = 'Opdrachtopties';

$GLOBALS["lang"]['Command Options'] = 'Opdrachtopties';

$GLOBALS["lang"]['command_output'] = 'Commandouitvoer';

$GLOBALS["lang"]['Command Output'] = 'Commandouitvoer';

$GLOBALS["lang"]['command_status'] = 'Commandostatus';

$GLOBALS["lang"]['Command Status'] = 'Commandostatus';

$GLOBALS["lang"]['command_time_to_execute'] = 'Opdrachttijd om uit te voeren';

$GLOBALS["lang"]['Command Time To Execute'] = 'Opdrachttijd om uit te voeren';

$GLOBALS["lang"]['comment'] = 'Opmerking';

$GLOBALS["lang"]['Comment'] = 'Opmerking';

$GLOBALS["lang"]['comments'] = 'Opmerkingen';

$GLOBALS["lang"]['Comments'] = 'Opmerkingen';

$GLOBALS["lang"]['commercial'] = 'Handel';

$GLOBALS["lang"]['Commercial'] = 'Handel';

$GLOBALS["lang"]['common_name'] = 'Triviale naam';

$GLOBALS["lang"]['Common Name'] = 'Triviale naam';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Meestal aangeduid als de clientId.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Meestal aangeduid als de clientSecret.';

$GLOBALS["lang"]['Community'] = 'Gemeenschap';

$GLOBALS["lang"]['Community Questions'] = 'Communautaire vraagstukken';

$GLOBALS["lang"]['Community String'] = 'Community String';

$GLOBALS["lang"]['Comoros the'] = 'Comoren';

$GLOBALS["lang"]['Compact'] = 'Compact';

$GLOBALS["lang"]['Company'] = 'Onderneming';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Complexiteit van de aanval (laag of hoog).';

$GLOBALS["lang"]['Component Table'] = 'Componenttabel';

$GLOBALS["lang"]['Components (All Devices)'] = 'Componenten (alle apparaten)';

$GLOBALS["lang"]['Compute'] = 'Berekenen';

$GLOBALS["lang"]['Condition'] = 'Voorwaarde';

$GLOBALS["lang"]['Config'] = 'Configureren';

$GLOBALS["lang"]['Config Default, currently '] = 'Configureren Standaard, momenteel ';

$GLOBALS["lang"]['config_file'] = 'Configuratiebestand';

$GLOBALS["lang"]['Config File'] = 'Configuratiebestand';

$GLOBALS["lang"]['config_manager_error_code'] = 'Foutcode configuratiebeheer';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Foutcode configuratiebeheer';

$GLOBALS["lang"]['configuration'] = 'Instellingen';

$GLOBALS["lang"]['Configuration'] = 'Instellingen';

$GLOBALS["lang"]['Configure'] = 'Instellen';

$GLOBALS["lang"]['Congo'] = 'Congo';

$GLOBALS["lang"]['Congo the'] = 'Congo';

$GLOBALS["lang"]['Connected To'] = 'Verbonden met';

$GLOBALS["lang"]['connection'] = 'Verbinding';

$GLOBALS["lang"]['Connection'] = 'Verbinding';

$GLOBALS["lang"]['Connection Options'] = 'Verbindingsopties';

$GLOBALS["lang"]['connection_status'] = 'Verbindingsstatus';

$GLOBALS["lang"]['Connection Status'] = 'Verbindingsstatus';

$GLOBALS["lang"]['connections'] = 'Verbindingen';

$GLOBALS["lang"]['Connections'] = 'Verbindingen';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Gefilterd overwegen Havens openen';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Beschouw open gefilterd Havens openen';

$GLOBALS["lang"]['contact'] = 'Contactpersoon';

$GLOBALS["lang"]['Contact'] = 'Contactpersoon';

$GLOBALS["lang"]['contact_name'] = 'Contactnaam';

$GLOBALS["lang"]['Contact Name'] = 'Contactnaam';

$GLOBALS["lang"]['contained_in'] = 'Ingesloten';

$GLOBALS["lang"]['Contained In'] = 'Ingesloten';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Bevat een JSON object details van de bijbehorende widgets en hun posities.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Bevat de velden die bepalen of we ssh, snmp en wmi discovery opties moeten gebruiken. Een JSON object.';

$GLOBALS["lang"]['Context Engine ID'] = 'Context Engine ID';

$GLOBALS["lang"]['Context Name'] = 'Contextnaam';

$GLOBALS["lang"]['contractual_obligations'] = 'Contractuele verplichtingen';

$GLOBALS["lang"]['Contractual Obligations'] = 'Contractuele verplichtingen';

$GLOBALS["lang"]['Cook Islands'] = 'Cookeilanden';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Een auditresultaat kopiëren en plakken';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopieer en plak de onderstaande naar de forums, een andere instantie van Open-AudIT of ergens anders die je nodig hebt om dit item te leveren.';

$GLOBALS["lang"]['core_count'] = 'Aantal kernen';

$GLOBALS["lang"]['Core Count'] = 'Aantal kernen';

$GLOBALS["lang"]['Cores'] = 'Kernen';

$GLOBALS["lang"]['cost_center'] = 'Kostencentrum';

$GLOBALS["lang"]['Cost Center'] = 'Kostencentrum';

$GLOBALS["lang"]['cost_code'] = 'Kostencode';

$GLOBALS["lang"]['Cost Code'] = 'Kostencode';

$GLOBALS["lang"]['Costa Rica'] = 'Costa Rica';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Ivoorkust';

$GLOBALS["lang"]['count'] = 'Aantal';

$GLOBALS["lang"]['Count'] = 'Aantal';

$GLOBALS["lang"]['country'] = 'Land';

$GLOBALS["lang"]['Country'] = 'Land';

$GLOBALS["lang"]['country_code'] = 'Landcode';

$GLOBALS["lang"]['Country Code'] = 'Landcode';

$GLOBALS["lang"]['cpu_count'] = 'Aantal Cpu\'s';

$GLOBALS["lang"]['Cpu Count'] = 'Aantal Cpu\'s';

$GLOBALS["lang"]['Create'] = 'Aanmaken';

$GLOBALS["lang"]['Create Example Devices'] = 'Voorbeeldapparaten aanmaken';

$GLOBALS["lang"]['create_external_count'] = 'Extern aantal aanmaken';

$GLOBALS["lang"]['Create External Count'] = 'Extern aantal aanmaken';

$GLOBALS["lang"]['create_external_from_internal'] = 'Externe vanuit intern aanmaken';

$GLOBALS["lang"]['Create External From Internal'] = 'Externe vanuit intern aanmaken';

$GLOBALS["lang"]['Create Geocode'] = 'Geocode aanmaken';

$GLOBALS["lang"]['create_internal_count'] = 'Intern aantal aanmaken';

$GLOBALS["lang"]['Create Internal Count'] = 'Intern aantal aanmaken';

$GLOBALS["lang"]['create_internal_from_external'] = 'Intern maken vanaf extern';

$GLOBALS["lang"]['Create Internal From External'] = 'Intern maken vanaf extern';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'NMIS-apparaten van Open-AudIT aanmaken';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Open-audIT aanmaken Apparaten van ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Open-audIT aanmaken Apparaten van NMIS';

$GLOBALS["lang"]['created_by'] = 'Aangemaakt door';

$GLOBALS["lang"]['Created By'] = 'Aangemaakt door';

$GLOBALS["lang"]['created_date'] = 'Aangemaakte datum';

$GLOBALS["lang"]['Created Date'] = 'Aangemaakte datum';

$GLOBALS["lang"]['Creating'] = 'Aanmaken';

$GLOBALS["lang"]['Creating Device'] = 'Apparaat aanmaken';

$GLOBALS["lang"]['Creating a Query'] = 'Een zoekopdracht aanmaken';

$GLOBALS["lang"]['creator'] = 'Maker';

$GLOBALS["lang"]['Creator'] = 'Maker';

$GLOBALS["lang"]['credential'] = 'Credentieel';

$GLOBALS["lang"]['Credential'] = 'Credentieel';

$GLOBALS["lang"]['credentials'] = 'Identiteit';

$GLOBALS["lang"]['Credentials'] = 'Identiteit';

$GLOBALS["lang"]['Credentials Client ID'] = 'Identiteitskaart van de cliënt';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Abonnement op de geloofsbrieven ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Identiteitskaart van de houder';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Geheimen voor Amazon AWS gebruikt in Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Identiteiten voor Microsoft Azure gebruikt in Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Kritiek';

$GLOBALS["lang"]['criticality'] = 'Kritiek';

$GLOBALS["lang"]['Criticality'] = 'Kritiek';

$GLOBALS["lang"]['Croatia'] = 'Kroatië';

$GLOBALS["lang"]['Cuba'] = 'Cuba';

$GLOBALS["lang"]['current'] = 'Lopend';

$GLOBALS["lang"]['Current'] = 'Lopend';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Huidige zoekprocessen';

$GLOBALS["lang"]['Current date & time is '] = 'Huidige datum & tijd is ';

$GLOBALS["lang"]['Currently Installed'] = 'Momenteel geïnstalleerd';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Momenteel ondersteunde types zijn <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> of <code>windows</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Aangepaste TCP-poorten';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Aangepaste UDP Havens';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Cyprus';

$GLOBALS["lang"]['Czech'] = 'Tsjechisch';

$GLOBALS["lang"]['Czech Republic'] = 'Tsjechië';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN-rekening (facultatief)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN-wachtwoord (facultatief)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS-hostnaam';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard-ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard-ID';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Database'] = 'Database';

$GLOBALS["lang"]['db_action'] = 'Databaseactie';

$GLOBALS["lang"]['Database Action'] = 'Databaseactie';

$GLOBALS["lang"]['db_column'] = 'Databankkolom';

$GLOBALS["lang"]['Database Column'] = 'Databankkolom';

$GLOBALS["lang"]['Database Definition'] = 'Databasedefinitie';

$GLOBALS["lang"]['db_row'] = 'Databaserij';

$GLOBALS["lang"]['Database Row'] = 'Databaserij';

$GLOBALS["lang"]['Database Schema'] = 'Databaseschema';

$GLOBALS["lang"]['db_table'] = 'Databasetabel';

$GLOBALS["lang"]['Database Table'] = 'Databasetabel';

$GLOBALS["lang"]['dataset_title'] = 'Titel gegevensverzameling';

$GLOBALS["lang"]['Dataset Title'] = 'Titel gegevensverzameling';

$GLOBALS["lang"]['date'] = 'Datum';

$GLOBALS["lang"]['Date'] = 'Datum';

$GLOBALS["lang"]['Date D-M-Y'] = 'Datum D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Datum M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Nu datum';

$GLOBALS["lang"]['date_of_manufacture'] = 'Vervaardigingsdatum';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Vervaardigingsdatum';

$GLOBALS["lang"]['date_paid'] = 'Betaalde datum';

$GLOBALS["lang"]['Date Paid'] = 'Betaalde datum';

$GLOBALS["lang"]['date_received'] = 'Ontvangen datum';

$GLOBALS["lang"]['Date Received'] = 'Ontvangen datum';

$GLOBALS["lang"]['Date Y-M-D'] = 'Datum Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Datum en tijd waarop de CVE voor het laatst werd bijgewerkt.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Datum en tijdstip waarop de CVE werd gepubliceerd.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Datum waarop de CVE werd gepubliceerd.';

$GLOBALS["lang"]['DateTime Now'] = 'Datum Nu';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Datumtijd Y M D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Maanddag';

$GLOBALS["lang"]['Day Of Month'] = 'Maanddag';

$GLOBALS["lang"]['day_of_week'] = 'Dag van de week';

$GLOBALS["lang"]['Day Of Week'] = 'Dag van de week';

$GLOBALS["lang"]['Day of Month'] = 'Maanddag';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Debug'] = 'Debuggen';

$GLOBALS["lang"]['December'] = 'December';

$GLOBALS["lang"]['Default'] = 'Standaard';

$GLOBALS["lang"]['Default Items'] = 'Standaard items';

$GLOBALS["lang"]['Default Value'] = 'Standaardwaarde';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Standaard van 389. Normaal gesproken 636 gebruikt voor Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Standaard van <code>3</code> voor LDAP en Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Standaardinstellingen';

$GLOBALS["lang"]['delay_minutes'] = 'Vertragingsminuten';

$GLOBALS["lang"]['Delay Minutes'] = 'Vertragingsminuten';

$GLOBALS["lang"]['Delete'] = 'Verwijderen';

$GLOBALS["lang"]['Delete Example Devices'] = 'Voorbeeldapparaten verwijderen';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Externe verwijderen uit intern';

$GLOBALS["lang"]['Delete External From Internal'] = 'Externe verwijderen uit intern';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'NMIS verwijderen Apparaten indien niet in Open-AudIT';

$GLOBALS["lang"]['Delete from Application'] = 'Verwijderen uit toepassing';

$GLOBALS["lang"]['Delete from Cluster'] = 'Verwijderen uit Cluster';

$GLOBALS["lang"]['Denmark'] = 'Denemarken';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Afgeleid door audit of handmatig ingesteld door de gebruiker.';

$GLOBALS["lang"]['Derived by audit.'] = 'Afgeleid door audit.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Afgeleid uit <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Afgeleid uit <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Afgeleid van Collector ontdekking.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Afgeleid van OS Naam.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Afgeleid van cloud ontdekking.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Afgeleid van apparaataudits.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Afgeleid van apparaattype en OS.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Afgeleid van ontdekking.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Afgeleid van hostnaam, sysName, dns Hostnaam en IP in die volgorde.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Afgeleid van de integer ernst.';

$GLOBALS["lang"]['description'] = 'Omschrijving';

$GLOBALS["lang"]['Description'] = 'Omschrijving';

$GLOBALS["lang"]['destination'] = 'Bestemming';

$GLOBALS["lang"]['Destination'] = 'Bestemming';

$GLOBALS["lang"]['detail'] = 'Detail';

$GLOBALS["lang"]['Detail'] = 'Detail';

$GLOBALS["lang"]['Details'] = 'Gegevens';

$GLOBALS["lang"]['details'] = 'Gegevens';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Details van wie meestal bereikbaar is op deze site.';

$GLOBALS["lang"]['device'] = 'Apparaat';

$GLOBALS["lang"]['Device'] = 'Apparaat';

$GLOBALS["lang"]['Device Audits'] = 'Apparaataudits';

$GLOBALS["lang"]['Device ID'] = 'Apparaat-ID';

$GLOBALS["lang"]['device_id'] = 'Apparaat-ID';

$GLOBALS["lang"]['device_id_a'] = 'Apparaat-ID A';

$GLOBALS["lang"]['Device ID A'] = 'Apparaat-ID A';

$GLOBALS["lang"]['device_id_b'] = 'Apparaat-ID B';

$GLOBALS["lang"]['Device ID B'] = 'Apparaat-ID B';

$GLOBALS["lang"]['Device Name'] = 'Apparaatnaam';

$GLOBALS["lang"]['Device Result'] = 'Apparaatresultaat';

$GLOBALS["lang"]['Device Results'] = 'Apparaatresultaten';

$GLOBALS["lang"]['Device Seed'] = 'Apparaatzaad';

$GLOBALS["lang"]['Device Seed IP'] = 'Apparaatzaad-IP';

$GLOBALS["lang"]['Device Status'] = 'Apparaatstatus';

$GLOBALS["lang"]['Device Types'] = 'Apparaattypen';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Apparaat bevindt zich in het Subnet';

$GLOBALS["lang"]['Devices'] = 'Apparaten';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Aan locatie toegewezen apparaten';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Aan locatie toegewezen apparaten';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Aan org toegewezen apparaten';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Aan org toegewezen apparaten';

$GLOBALS["lang"]['Devices Audited'] = 'Geauditeerde apparaten';

$GLOBALS["lang"]['Devices Created in '] = 'Apparaten aangemaakt in ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Apparaten aangemaakt in Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Apparaten Standaard weergegeven kolommen';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Apparaten Standaard weergegeven kolommen';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Apparaten gevonden laatste 7 dagen';

$GLOBALS["lang"]['Devices Found Today'] = 'Vandaag gevonden apparaten';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Apparaten gevonden gisteren';

$GLOBALS["lang"]['Devices Not Audited'] = 'Hulpmiddelen niet gecontroleerd';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Apparaten die 30 dagen niet zijn gezien';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Apparaten 7 dagen niet gezien';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Apparaten die 90 dagen niet zijn gezien';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Apparaten opgehaald via API';

$GLOBALS["lang"]['Devices Selected from '] = 'Apparaten geselecteerd uit ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Apparaten geselecteerd uit Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Apparaten bijgewerkt in ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Apparaten bijgewerkt in Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'De apparaten worden gebenchmarkt.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'De apparaten worden niet gebenchmarkt.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'De apparaten kunnen worden gebenchmarkt.';

$GLOBALS["lang"]['Devices in Running State'] = 'Apparaten in draaiende staat';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Apparaten in gestopte staat';

$GLOBALS["lang"]['Devices in this'] = 'Apparaten in deze';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Onttroond van type of besturingssysteem.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp ingeschakeld';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp ingeschakeld';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Verloopt';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Verloopt';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease verkregen';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease verkregen';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp-server';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp-server';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Heeft het commando succesvol voltooid en verwachte gegevens teruggegeven.';

$GLOBALS["lang"]['direction'] = 'Richting';

$GLOBALS["lang"]['Direction'] = 'Richting';

$GLOBALS["lang"]['directory'] = 'Map';

$GLOBALS["lang"]['Directory'] = 'Map';

$GLOBALS["lang"]['disabled'] = 'Uitgeschakeld';

$GLOBALS["lang"]['Disabled'] = 'Uitgeschakeld';

$GLOBALS["lang"]['discard'] = 'Weggooien';

$GLOBALS["lang"]['Discard'] = 'Weggooien';

$GLOBALS["lang"]['Discover'] = 'Ontdekken';

$GLOBALS["lang"]['discoveries'] = 'Ontdekkingen';

$GLOBALS["lang"]['Discoveries'] = 'Ontdekkingen';

$GLOBALS["lang"]['Discovery'] = 'Ontdekking';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Ontdekking Logs wijzigen';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Ontdekkingsdatabewaring';

$GLOBALS["lang"]['discovery_id'] = 'Ontdekkings-ID';

$GLOBALS["lang"]['Discovery ID'] = 'Ontdekkings-ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Ontdekkingsproblemen';

$GLOBALS["lang"]['discovery_log'] = 'Ontdekkingslog';

$GLOBALS["lang"]['Discovery Log'] = 'Ontdekkingslog';

$GLOBALS["lang"]['Discovery Match Options'] = 'Discovery-matchopties';

$GLOBALS["lang"]['Discovery Name'] = 'Ontdekkingsnaam';

$GLOBALS["lang"]['Discovery Options'] = 'Ontdekkingsopties';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Aantal ontdekte wachtrijen';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Ontdekkingslimiet';

$GLOBALS["lang"]['discovery_run'] = 'Ontdekking uitvoeren';

$GLOBALS["lang"]['Discovery Run'] = 'Ontdekking uitvoeren';

$GLOBALS["lang"]['discovery_scan_options'] = 'Ontdekkingsscanopties';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Ontdekkingsscanopties';

$GLOBALS["lang"]['disk'] = 'Schijf';

$GLOBALS["lang"]['Disk'] = 'Schijf';

$GLOBALS["lang"]['display_version'] = 'Versie tonen';

$GLOBALS["lang"]['Display Version'] = 'Versie tonen';

$GLOBALS["lang"]['Display in Menu'] = 'Weergave in het menu';

$GLOBALS["lang"]['district'] = 'District';

$GLOBALS["lang"]['District'] = 'District';

$GLOBALS["lang"]['Djibouti'] = 'Djibouti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns-domein';

$GLOBALS["lang"]['Dns Domain'] = 'Dns-domein';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domain Reg ingeschakeld';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domain Reg ingeschakeld';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns-hostnaam';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns-hostnaam';

$GLOBALS["lang"]['dns_hostname'] = 'Dns-hostnaam';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns-hostnaam';

$GLOBALS["lang"]['dns_server'] = 'Dns-server';

$GLOBALS["lang"]['Dns Server'] = 'Dns-server';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Scan deze TCP-poorten niet.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Scan deze UDP-poorten niet.';

$GLOBALS["lang"]['Do not show me again'] = 'Laat me niet meer zien';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Wilt u veilig transport (LDAPS) of regelmatig ongecodeerde LDAP gebruiken.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Wilt u de standaard zijbalk links zien?';

$GLOBALS["lang"]['documentation'] = 'Documentatie';

$GLOBALS["lang"]['Documentation'] = 'Documentatie';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Is de licentie van toepassing op kind Orgs.';

$GLOBALS["lang"]['domain'] = 'Domein';

$GLOBALS["lang"]['Domain'] = 'Domein';

$GLOBALS["lang"]['domain_controller_address'] = 'Domeincontroller adres';

$GLOBALS["lang"]['Domain Controller Address'] = 'Domeincontroller adres';

$GLOBALS["lang"]['domain_controller_name'] = 'Domeincontroller Naam';

$GLOBALS["lang"]['Domain Controller Name'] = 'Domeincontroller Naam';

$GLOBALS["lang"]['domain_role'] = 'Domeinrol';

$GLOBALS["lang"]['Domain Role'] = 'Domeinrol';

$GLOBALS["lang"]['domain_short'] = 'Domeinkort';

$GLOBALS["lang"]['Domain Short'] = 'Domeinkort';

$GLOBALS["lang"]['Dominica'] = 'Dominica';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominicaanse Republiek';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Ik weet wat ik doe. Geen filter en de mogelijkheid om aangepaste tabellen aan te sluiten.';

$GLOBALS["lang"]['Download'] = 'Downloaden';

$GLOBALS["lang"]['Download a file from URL'] = 'Een bestand downloaden van URL';

$GLOBALS["lang"]['driver'] = 'Stuurprogramma';

$GLOBALS["lang"]['Driver'] = 'Stuurprogramma';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Duur';

$GLOBALS["lang"]['Duration'] = 'Duur';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Ecuador'] = 'Ecuador';

$GLOBALS["lang"]['Edit'] = 'Bewerken';

$GLOBALS["lang"]['edit_log'] = 'Log';

$GLOBALS["lang"]['Edit Log'] = 'Log';

$GLOBALS["lang"]['editable'] = 'Bewerkbaar';

$GLOBALS["lang"]['Editable'] = 'Bewerkbaar';

$GLOBALS["lang"]['edited_by'] = 'Uitgegeven door';

$GLOBALS["lang"]['Edited By'] = 'Uitgegeven door';

$GLOBALS["lang"]['edited_date'] = 'Datum bewerkt';

$GLOBALS["lang"]['Edited Date'] = 'Datum bewerkt';

$GLOBALS["lang"]['edition'] = 'Editie';

$GLOBALS["lang"]['Edition'] = 'Editie';

$GLOBALS["lang"]['Egypt'] = 'Egypte';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Amazon, Google of Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Niet of niet aanwezig.

<strong>Geen</strong> - De succesvolle aanval hangt niet af van de inzet en uitvoering van het kwetsbare systeem. De aanvaller kan verwachten in staat te zijn om de kwetsbaarheid te bereiken en de exploitatie uit te voeren onder alle of de meeste gevallen van de kwetsbaarheid.

<strong>Aanwezig</strong> - De succesvolle aanval hangt af van de aanwezigheid van specifieke inzet- en uitvoeringsomstandigheden van het kwetsbare systeem dat de aanval mogelijk maakt. Deze omvatten:

Een race voorwaarde moet worden gewonnen om de kwetsbaarheid succesvol te benutten. Het succes van de aanval is afhankelijk van executievoorwaarden die niet volledig onder controle zijn van de aanvaller. De aanval moet meerdere keren worden gelanceerd tegen een enkel doel voordat succesvol.

Netwerkinjectie. De aanvaller moet zichzelf injecteren in het logische netwerkpad tussen het doelwit en de door het slachtoffer gevraagde hulpbron (bv. kwetsbaarheden die een aanvaller op het pad vereisen).';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'E-mail';

$GLOBALS["lang"]['Email'] = 'E-mail';

$GLOBALS["lang"]['email_address'] = 'E-mailadres';

$GLOBALS["lang"]['Email Address'] = 'E-mailadres';

$GLOBALS["lang"]['Email Configuration'] = 'E-mailconfiguratie';

$GLOBALS["lang"]['Email to send test to'] = 'E-mail om test naar te sturen';

$GLOBALS["lang"]['Enable'] = 'Inschakelen';

$GLOBALS["lang"]['enabled'] = 'Ingeschakeld';

$GLOBALS["lang"]['Enabled'] = 'Ingeschakeld';

$GLOBALS["lang"]['encryption'] = 'Versleuteling';

$GLOBALS["lang"]['Encryption'] = 'Versleuteling';

$GLOBALS["lang"]['encryption_method'] = 'Versleutelingsmethode';

$GLOBALS["lang"]['Encryption Method'] = 'Versleutelingsmethode';

$GLOBALS["lang"]['encryption_status'] = 'Versleutelingsstatus';

$GLOBALS["lang"]['Encryption Status'] = 'Versleutelingsstatus';

$GLOBALS["lang"]['end_date'] = 'Einddatum';

$GLOBALS["lang"]['End Date'] = 'Einddatum';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Product-ID einde levensduur';

$GLOBALS["lang"]['end_of_life'] = 'Einde van het leven';

$GLOBALS["lang"]['End Of Life'] = 'Einde van het leven';

$GLOBALS["lang"]['end_of_production'] = 'Einde van de productie';

$GLOBALS["lang"]['End Of Production'] = 'Einde van de productie';

$GLOBALS["lang"]['end_of_service'] = 'Einde van de dienst';

$GLOBALS["lang"]['End Of Service'] = 'Einde van de dienst';

$GLOBALS["lang"]['end_of_service_life'] = 'Einde van de levensduur';

$GLOBALS["lang"]['End Of Service Life'] = 'Einde van de levensduur';

$GLOBALS["lang"]['English'] = 'Engels';

$GLOBALS["lang"]['enterprise'] = 'Onderneming';

$GLOBALS["lang"]['Enterprise'] = 'Onderneming';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Privé-netwerk van ondernemingen';

$GLOBALS["lang"]['Entitlement Type'] = 'Soort recht';

$GLOBALS["lang"]['environment'] = 'Milieu';

$GLOBALS["lang"]['Environment'] = 'Milieu';

$GLOBALS["lang"]['Equal To'] = 'Gelijk aan';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Gelijk aan of groter dan';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Gelijk aan of minder dan';

$GLOBALS["lang"]['Equals'] = 'Gelijken';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Equatoriaal-Guinea';

$GLOBALS["lang"]['Eritrea'] = 'Eritrea';

$GLOBALS["lang"]['Error'] = 'Fout';

$GLOBALS["lang"]['Error Code'] = 'Foutcode';

$GLOBALS["lang"]['Established'] = 'Opgericht';

$GLOBALS["lang"]['Estonia'] = 'Estland';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Ethiopië';

$GLOBALS["lang"]['Every'] = 'Elke';

$GLOBALS["lang"]['Every Day'] = 'Elke dag';

$GLOBALS["lang"]['Exceptions'] = 'Uitzonderingen';

$GLOBALS["lang"]['exclude'] = 'Exclusief';

$GLOBALS["lang"]['Exclude'] = 'Exclusief';

$GLOBALS["lang"]['exclude_ip'] = 'IP uitsluiten';

$GLOBALS["lang"]['Exclude IP'] = 'IP uitsluiten';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'IP-adressen uitsluiten';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCP-poorten uitsluiten';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Tcp-poorten uitsluiten';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Tcp-poorten uitsluiten';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP-poorten uitsluiten';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udp-poorten uitsluiten';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udp-poorten uitsluiten';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Deze IP-adressen uitsluiten van Nmap gescand.';

$GLOBALS["lang"]['Excluded'] = 'Uitgesloten';

$GLOBALS["lang"]['exclusion_reasons'] = 'Uitsluitingsgronden';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Uitsluitingsgronden';

$GLOBALS["lang"]['executable'] = 'Uitvoerbaar';

$GLOBALS["lang"]['Executable'] = 'Uitvoerbaar';

$GLOBALS["lang"]['executable_id'] = 'Uitvoerbaar ID';

$GLOBALS["lang"]['Executable ID'] = 'Uitvoerbaar ID';

$GLOBALS["lang"]['executables'] = 'Uitvoerbare bestanden';

$GLOBALS["lang"]['Executables'] = 'Uitvoerbare bestanden';

$GLOBALS["lang"]['Execute'] = 'Uitvoeren';

$GLOBALS["lang"]['Executing'] = 'Uitvoeren';

$GLOBALS["lang"]['exemption_reason'] = 'Vrijstelling Reden';

$GLOBALS["lang"]['Exemption Reason'] = 'Vrijstelling Reden';

$GLOBALS["lang"]['Existing Building'] = 'Bestaande bouw';

$GLOBALS["lang"]['Existing Floor'] = 'Bestaande vloer';

$GLOBALS["lang"]['Existing Room'] = 'Bestaande ruimte';

$GLOBALS["lang"]['Existing Row'] = 'Bestaande rij';

$GLOBALS["lang"]['expire_date'] = 'Datum verlopen';

$GLOBALS["lang"]['Expire Date'] = 'Datum verlopen';

$GLOBALS["lang"]['expire_minutes'] = 'Verlopen minuten';

$GLOBALS["lang"]['Expire Minutes'] = 'Verlopen minuten';

$GLOBALS["lang"]['expires'] = 'Verloopt';

$GLOBALS["lang"]['Expires'] = 'Verloopt';

$GLOBALS["lang"]['expiry_date'] = 'Einddatum';

$GLOBALS["lang"]['Expiry Date'] = 'Einddatum';

$GLOBALS["lang"]['exploit_maturity'] = 'Gebruiksduur';

$GLOBALS["lang"]['Exploit Maturity'] = 'Gebruiksduur';

$GLOBALS["lang"]['Export'] = 'Uitvoer';

$GLOBALS["lang"]['Export by Device'] = 'Exporteren op apparaat';

$GLOBALS["lang"]['Export by Policy'] = 'Uitvoer volgens beleid';

$GLOBALS["lang"]['Export data to'] = 'Gegevens exporteren naar';

$GLOBALS["lang"]['expose'] = 'Expose';

$GLOBALS["lang"]['Expose'] = 'Expose';

$GLOBALS["lang"]['External'] = 'Extern';

$GLOBALS["lang"]['External Field Name'] = 'Externe veldnaam';

$GLOBALS["lang"]['External Field Type'] = 'Extern veldtype';

$GLOBALS["lang"]['external_ident'] = 'Externe identificatie';

$GLOBALS["lang"]['External Ident'] = 'Externe identificatie';

$GLOBALS["lang"]['external_link'] = 'Externe koppeling';

$GLOBALS["lang"]['External Link'] = 'Externe koppeling';

$GLOBALS["lang"]['extra_columns'] = 'Extra kolommen';

$GLOBALS["lang"]['Extra Columns'] = 'Extra kolommen';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Extra en meer verbose logging wordt gegenereerd voor probleemoplossing.';

$GLOBALS["lang"]['FAQ'] = 'Veelgestelde vragen';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Herziening van FW';

$GLOBALS["lang"]['Fail'] = 'Fout';

$GLOBALS["lang"]['Failed'] = 'Mislukt';

$GLOBALS["lang"]['Failed Severity'] = 'Afstand mislukt';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falklandeilanden (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Familie';

$GLOBALS["lang"]['Faroe Islands'] = 'Faeröer';

$GLOBALS["lang"]['Features'] = 'Kenmerken';

$GLOBALS["lang"]['February'] = 'Februari';

$GLOBALS["lang"]['field'] = 'Veld';

$GLOBALS["lang"]['Field'] = 'Veld';

$GLOBALS["lang"]['field_id'] = 'Veld-ID';

$GLOBALS["lang"]['Field ID'] = 'Veld-ID';

$GLOBALS["lang"]['Field Name'] = 'Veldnaam';

$GLOBALS["lang"]['Field Type'] = 'Veldtype';

$GLOBALS["lang"]['Fields'] = 'Velden';

$GLOBALS["lang"]['fields'] = 'Velden';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji de Fiji-eilanden';

$GLOBALS["lang"]['File'] = 'Bestand';

$GLOBALS["lang"]['File Import'] = 'Bestand Importeren';

$GLOBALS["lang"]['File Input'] = 'Bestandsinvoer';

$GLOBALS["lang"]['file_name'] = 'Bestandnaam';

$GLOBALS["lang"]['File Name'] = 'Bestandnaam';

$GLOBALS["lang"]['file_size'] = 'Bestandsgrootte';

$GLOBALS["lang"]['File Size'] = 'Bestandsgrootte';

$GLOBALS["lang"]['filename'] = 'Bestandsnaam';

$GLOBALS["lang"]['Filename'] = 'Bestandsnaam';

$GLOBALS["lang"]['files'] = 'Bestanden';

$GLOBALS["lang"]['Files'] = 'Bestanden';

$GLOBALS["lang"]['files_id'] = 'Bestanden-ID';

$GLOBALS["lang"]['Files ID'] = 'Bestanden-ID';

$GLOBALS["lang"]['filter'] = 'Filter';

$GLOBALS["lang"]['Filter'] = 'Filter';

$GLOBALS["lang"]['filtered'] = 'Gefilterd';

$GLOBALS["lang"]['Filtered'] = 'Gefilterd';

$GLOBALS["lang"]['Finland'] = 'Finland';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Firewall-regel';

$GLOBALS["lang"]['Firewall Rule'] = 'Firewall-regel';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware Revisie';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware Revisie';

$GLOBALS["lang"]['First Name'] = 'Voornaam';

$GLOBALS["lang"]['first_run'] = 'Eerste uitvoeren';

$GLOBALS["lang"]['First Run'] = 'Eerste uitvoeren';

$GLOBALS["lang"]['first_seen'] = 'Eerste keer gezien';

$GLOBALS["lang"]['First Seen'] = 'Eerste keer gezien';

$GLOBALS["lang"]['FirstWave'] = 'Eerste golf';

$GLOBALS["lang"]['Fix'] = 'Repareren';

$GLOBALS["lang"]['Fixed'] = 'Vast';

$GLOBALS["lang"]['Floor'] = 'Verdieping';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Volg een van onderstaande links en ontdek hoe u Open-AudIT kunt gebruiken om erachter te komen <b>Wat is er op je netwerk?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Voor een zaad ontdekking, moet ik alleen IP\'s ontdekken in de privé IP adresruimte.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Voor een zaad ontdekking, moet ik alleen IP\'s ontdekken op het gekozen subnet.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Voor een zaad ontdekking, moet ik ping het subnet voordat de ontdekking.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Voor geavanceerde invoer van een ruwe SQL query. Volgens Queries, moet u <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Voor licenties die niet eeuwigdurend zijn, wanneer vervalt de licentie.';

$GLOBALS["lang"]['form_factor'] = 'Vormfactor';

$GLOBALS["lang"]['Form Factor'] = 'Vormfactor';

$GLOBALS["lang"]['format'] = 'Formaat';

$GLOBALS["lang"]['Format'] = 'Formaat';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Frankrijk, Frankrijk';

$GLOBALS["lang"]['free'] = 'Vrij';

$GLOBALS["lang"]['Free'] = 'Vrij';

$GLOBALS["lang"]['French'] = 'Frans';

$GLOBALS["lang"]['French Guiana'] = 'Frans Guyana';

$GLOBALS["lang"]['French Polynesia'] = 'Frans Polynesië';

$GLOBALS["lang"]['French Southern Territories'] = 'Franse Zuidelijke Gebieden';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Veelgestelde vragen';

$GLOBALS["lang"]['Friday'] = 'Vrijdag';

$GLOBALS["lang"]['From 100 Devices'] = 'Vanaf 100 apparaten';

$GLOBALS["lang"]['From 500 Devices'] = 'Vanaf 500 apparaten';

$GLOBALS["lang"]['full_name'] = 'Volledige naam';

$GLOBALS["lang"]['Full Name'] = 'Volledige naam';

$GLOBALS["lang"]['function'] = 'Functie';

$GLOBALS["lang"]['Function'] = 'Functie';

$GLOBALS["lang"]['GROUP BY'] = 'GROEP PER';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['gateway'] = 'Poort';

$GLOBALS["lang"]['Gateway'] = 'Poort';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Gegenereerd door';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Georgia'] = 'Georgië';

$GLOBALS["lang"]['German'] = 'Duits';

$GLOBALS["lang"]['Germany'] = 'Duitsland';

$GLOBALS["lang"]['Get Lat/Long'] = 'Lat/Lang halen';

$GLOBALS["lang"]['Get Started'] = 'Starten';

$GLOBALS["lang"]['Get a Free License'] = 'Koop een gratis licentie';

$GLOBALS["lang"]['Getting Started'] = 'Starten';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Global Discovery Options'] = 'Globale zoekopties';

$GLOBALS["lang"]['Go'] = 'Ga';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Bereken velden';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Sleutel';

$GLOBALS["lang"]['Greater Than'] = 'Groter dan';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Groter dan of gelijk aan';

$GLOBALS["lang"]['Greece'] = 'Griekenland';

$GLOBALS["lang"]['Green Query'] = 'Groene zoekopdracht';

$GLOBALS["lang"]['Greenland'] = 'Groenland';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Groep';

$GLOBALS["lang"]['group_by'] = 'Groeperen op';

$GLOBALS["lang"]['Group By'] = 'Groeperen op';

$GLOBALS["lang"]['group_id'] = 'Groeps-ID';

$GLOBALS["lang"]['Group ID'] = 'Groeps-ID';

$GLOBALS["lang"]['groups'] = 'Groepen';

$GLOBALS["lang"]['Groups'] = 'Groepen';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadeloupe';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey';

$GLOBALS["lang"]['guest_device_id'] = 'Gastapparaat-ID';

$GLOBALS["lang"]['Guest Device ID'] = 'Gastapparaat-ID';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Guinee';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinee-Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW-herziening';

$GLOBALS["lang"]['Haiti'] = 'Haïti';

$GLOBALS["lang"]['hard_drive_index'] = 'Harde schijfindex';

$GLOBALS["lang"]['Hard Drive Index'] = 'Harde schijfindex';

$GLOBALS["lang"]['hardware_revision'] = 'Hardware herziening';

$GLOBALS["lang"]['Hardware Revision'] = 'Hardware herziening';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Is dit beleid in deze organisatie toegepast?';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Head'] = 'Hoofd';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island en McDonald Islands';

$GLOBALS["lang"]['height'] = 'Hoogte';

$GLOBALS["lang"]['Height'] = 'Hoogte';

$GLOBALS["lang"]['Height in RU'] = 'Hoogte in spoorwegonderneming';

$GLOBALS["lang"]['Help'] = 'Hulp';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Hulp en veelgestelde vragen';

$GLOBALS["lang"]['high'] = 'Hoog';

$GLOBALS["lang"]['High'] = 'Hoog';

$GLOBALS["lang"]['High Availability'] = 'Hoge beschikbaarheid';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Heilige Stoel (Vaticaanstad)';

$GLOBALS["lang"]['Home'] = 'Begin';

$GLOBALS["lang"]['home'] = 'Begin';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Hostnaam';

$GLOBALS["lang"]['Hostname'] = 'Hostnaam';

$GLOBALS["lang"]['hour'] = 'Uur';

$GLOBALS["lang"]['Hour'] = 'Uur';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Hoe en waarom is Open-AudIT veiliger';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Hoe lang duurde het bevel om uit te voeren.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Hoe lang moet Nmap wachten op een reactie, per apparaat.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Hoeveel circuits naar dit rek.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Hoeveel beleidsmaatregelen resulteren in een mislukking.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Hoeveel beleidsmaatregelen resulteren in een pas.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Hoeveel stopcontacten in dit rek.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Hoeveel rack units in hoogte is dit rek.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Hoe vaak moet de verzamelaar de server om een taak vragen.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Hoe moeten we apparaten selecteren om te worden geïntegreerd (met behulp van een Attribuut, Query of een Groep).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Hoe de kwetsbaarheid wordt benut (bijvoorbeeld, Netwerk, Aangrenzend, Lokaal, Fysiek).';

$GLOBALS["lang"]['How to compare'] = 'Hoe te vergelijken';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Menselijk leesbare verklaring van de kwetsbaarheid.';

$GLOBALS["lang"]['Hungary'] = 'Hongarije';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Ik heb de EULA gelezen.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'ALS';

$GLOBALS["lang"]['IOS Version'] = 'IOS-versie';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP-adres';

$GLOBALS["lang"]['IP Addresses'] = 'IP-adressen';

$GLOBALS["lang"]['IP Last Seen'] = 'IP laatst bekeken';

$GLOBALS["lang"]['IP Set By'] = 'IP ingesteld op';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Alleen ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'IJsland';

$GLOBALS["lang"]['icon'] = 'Pictogram';

$GLOBALS["lang"]['Icon'] = 'Pictogram';

$GLOBALS["lang"]['Icon and Text'] = 'Pictogram en tekst';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Pictogram alleen, tekst alleen of pictogram en tekst.';

$GLOBALS["lang"]['id_internal'] = 'Id intern';

$GLOBALS["lang"]['Id Internal'] = 'Id intern';

$GLOBALS["lang"]['id_number'] = 'Id-nummer';

$GLOBALS["lang"]['Id Number'] = 'Id-nummer';

$GLOBALS["lang"]['identification'] = 'Identificatie';

$GLOBALS["lang"]['Identification'] = 'Identificatie';

$GLOBALS["lang"]['If'] = 'Als';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Als een poort reageert met gefilterd, moeten we het beschikbaar achten.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Als een poort reageert met een open';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Als er geen apparaat op afstand bestaat in de geselecteerde apparaten van Open-AudIT, moeten we het uit het externe systeem verwijderen.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Als een Open-AudIT apparaat is gewijzigd, moeten we het externe systeem bijwerken.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Als een Open-AudIT-apparaat niet op het externe systeem staat, moeten we het aanmaken.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Als een agent rapporteert dat zijn primaire IP in dit subnet zit, voer dan de acties uit.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Als een van deze (coma gescheiden, geen spaties) poorten worden gedetecteerd, neem dan aan dat SSH erop draait en gebruik ze voor controle. U hoeft deze poort niet toe te voegen aan de Aangepaste TCP poorten - deze wordt automatisch toegevoegd.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Indien ingesteld, bevat een JSON array van specifieke device kolommen die deze gebruiker heeft gekozen om te zien, anders dan de configuratie standaard.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Als de agent OS familie (hoofdletter ongevoelig) deze tekenreeks bevat, voer dan de acties uit.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Indien aan de volgende voorwaarden is voldaan:<br/><ul><li>a Role heeft een toegewezen ad_group</li><li>een Org heeft een toegewezen ad_groep</li><li>een LDAP Server heeft use_roles ingesteld op y</li><li>een gebruiker bestaat in LDAP (of het nu Active Directory of OpenLDAP is) en bevindt zich in de toegewezen ad_groups</li></ul>Die gebruiker kan inloggen op Open-AudIT zonder dat er een account in Open-AudIT moet worden aangemaakt. Open-AudIT zal de LDAP in kwestie opvragen en als de gebruiker in de vereiste groepen zit maar niet in Open-AudIT, worden de gebruikersattributen (naam, volledige naam, e-mail, rollen, orgs, etc) binnen Open-AudIT automatisch ingevuld en worden ze ingelogd.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Als de gebruiker die zich aanmeldt bij Open-AudIT geen toegang heeft om LDAP te zoeken, kunt u een ander account gebruiken dat deze toegang heeft.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Als dit vele of meer minuten zijn verstreken sinds het apparaat contact heeft opgenomen met de server, voer dan de acties uit.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Als u kiest voor een Verzamelaar, zal het worden gepland om uit te voeren op de volgende 5 minuten grens.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignored'] = 'Negeren';

$GLOBALS["lang"]['image'] = 'Afbeelding';

$GLOBALS["lang"]['Image'] = 'Afbeelding';

$GLOBALS["lang"]['Images'] = 'Afbeeldingen';

$GLOBALS["lang"]['impact_availability'] = 'Beschikbaarheid van effecten';

$GLOBALS["lang"]['Impact Availability'] = 'Beschikbaarheid van effecten';

$GLOBALS["lang"]['impact_confidentiality'] = 'Impactgeheim';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Impactgeheim';

$GLOBALS["lang"]['impact_integrity'] = 'Impact-integriteit';

$GLOBALS["lang"]['Impact Integrity'] = 'Impact-integriteit';

$GLOBALS["lang"]['implementation_notes'] = 'Uitvoeringsnota\'s';

$GLOBALS["lang"]['Implementation Notes'] = 'Uitvoeringsnota\'s';

$GLOBALS["lang"]['Import'] = 'Importeren';

$GLOBALS["lang"]['Import Example Data'] = 'Voorbeeldgegevens importeren';

$GLOBALS["lang"]['improvement_opportunities'] = 'Verbetering Kansen';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Verbetering Kansen';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['Inactive'] = 'Inactief';

$GLOBALS["lang"]['Include'] = 'Includeren';

$GLOBALS["lang"]['Incomplete'] = 'Onvoltooid';

$GLOBALS["lang"]['Index'] = 'Index';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indonesië';

$GLOBALS["lang"]['Info'] = 'Informatie';

$GLOBALS["lang"]['Informational'] = 'Voorlichting';

$GLOBALS["lang"]['initial_size'] = 'Oorspronkelijke grootte';

$GLOBALS["lang"]['Initial Size'] = 'Oorspronkelijke grootte';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Invoertype';

$GLOBALS["lang"]['inputs'] = 'Invoer';

$GLOBALS["lang"]['Inputs'] = 'Invoer';

$GLOBALS["lang"]['Insane'] = 'Krankzinnig';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Voeg voorbeeldgegevens in en ontdek alles wat Open-AudIT je kan vertellen.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Plaats uw Aangekochte licentie Sleutel';

$GLOBALS["lang"]['install'] = 'Installeren';

$GLOBALS["lang"]['Install'] = 'Installeren';

$GLOBALS["lang"]['install_date'] = 'Datum installeren';

$GLOBALS["lang"]['Install Date'] = 'Datum installeren';

$GLOBALS["lang"]['install_directory'] = 'Map installeren';

$GLOBALS["lang"]['Install Directory'] = 'Map installeren';

$GLOBALS["lang"]['Install OpenScap if required'] = 'OpenScap installeren indien nodig';

$GLOBALS["lang"]['install_source'] = 'Bron installeren';

$GLOBALS["lang"]['Install Source'] = 'Bron installeren';

$GLOBALS["lang"]['installed_by'] = 'Geïnstalleerd op';

$GLOBALS["lang"]['Installed By'] = 'Geïnstalleerd op';

$GLOBALS["lang"]['installed_on'] = 'Geïnstalleerd op';

$GLOBALS["lang"]['Installed On'] = 'Geïnstalleerd op';

$GLOBALS["lang"]['Installing on Linux'] = 'Installeren op Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Installeren op MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Installeren op Windows';

$GLOBALS["lang"]['instance'] = 'Instantie';

$GLOBALS["lang"]['Instance'] = 'Instantie';

$GLOBALS["lang"]['instance_ident'] = 'Instance Ident';

$GLOBALS["lang"]['Instance Ident'] = 'Instance Ident';

$GLOBALS["lang"]['instance_options'] = 'Instance Opties';

$GLOBALS["lang"]['Instance Options'] = 'Instance Opties';

$GLOBALS["lang"]['instance_provider'] = 'Instance Provider';

$GLOBALS["lang"]['Instance Provider'] = 'Instance Provider';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Instance Reservering Identiteit';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Instance Reservering Identiteit';

$GLOBALS["lang"]['instance_state'] = 'Instantie';

$GLOBALS["lang"]['Instance State'] = 'Instantie';

$GLOBALS["lang"]['instance_tags'] = 'Instance-tags';

$GLOBALS["lang"]['Instance Tags'] = 'Instance-tags';

$GLOBALS["lang"]['instance_type'] = 'Type instantie';

$GLOBALS["lang"]['Instance Type'] = 'Type instantie';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'Integratie';

$GLOBALS["lang"]['integrations'] = 'Integraties';

$GLOBALS["lang"]['Integrations'] = 'Integraties';

$GLOBALS["lang"]['integrations_id'] = 'Integratie ID';

$GLOBALS["lang"]['Integrations ID'] = 'Integratie ID';

$GLOBALS["lang"]['integrations_log'] = 'Logboek integraties';

$GLOBALS["lang"]['Integrations Log'] = 'Logboek integraties';

$GLOBALS["lang"]['interface'] = 'Interface';

$GLOBALS["lang"]['Interface'] = 'Interface';

$GLOBALS["lang"]['interface_id'] = 'Interface-ID';

$GLOBALS["lang"]['Interface ID'] = 'Interface-ID';

$GLOBALS["lang"]['interface_type'] = 'Interfacetype';

$GLOBALS["lang"]['Interface Type'] = 'Interfacetype';

$GLOBALS["lang"]['Internal'] = 'Intern';

$GLOBALS["lang"]['Internal Field Name'] = 'Interne veldnaam';

$GLOBALS["lang"]['Internal ID'] = 'Interne ID';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Interne JSON reeks geldige toegangstekens voor deze gebruiker.';

$GLOBALS["lang"]['Introduction'] = 'Inleiding';

$GLOBALS["lang"]['invoice'] = 'Factuur';

$GLOBALS["lang"]['Invoice'] = 'Factuur';

$GLOBALS["lang"]['invoice_id'] = 'Factuur-ID';

$GLOBALS["lang"]['Invoice ID'] = 'Factuur-ID';

$GLOBALS["lang"]['invoice_item'] = 'Factuuritem';

$GLOBALS["lang"]['Invoice Item'] = 'Factuuritem';

$GLOBALS["lang"]['ios_version'] = 'Ios-versie';

$GLOBALS["lang"]['Ios Version'] = 'Ios-versie';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip-adres extern A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip-adres extern A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip-adres extern B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip-adres extern B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip-adres intern A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip-adres intern A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip-adres intern B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip-adres intern B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip alle getallen';

$GLOBALS["lang"]['Ip All Count'] = 'Ip alle getallen';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Gecontroleerd aantal';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Gecontroleerd aantal';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip ontdekt aantal';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip ontdekt aantal';

$GLOBALS["lang"]['ip_enabled'] = 'Ip ingeschakeld';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip ingeschakeld';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Reageren Aantal';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Reageren Aantal';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Gescand aantal';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Gescand aantal';

$GLOBALS["lang"]['Iran'] = 'Iran';

$GLOBALS["lang"]['Iraq'] = 'Irak';

$GLOBALS["lang"]['Ireland'] = 'Ierland';

$GLOBALS["lang"]['Is FRU'] = 'Is FRU';

$GLOBALS["lang"]['is_fru'] = 'Is Fru';

$GLOBALS["lang"]['Is Fru'] = 'Is Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Is de NMIS-server lokaal (op deze Open-AudIT-server) of op afstand?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Is dit account actief? Indien ingesteld op <code>n</code>, de gebruiker kan niet inloggen.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Is deze vraag beperkt tot gelicentieerde klanten.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Is deze taak ingeschakeld (j/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Eiland Man';

$GLOBALS["lang"]['Israel'] = 'Israël';

$GLOBALS["lang"]['Issue'] = 'Onderwerp';

$GLOBALS["lang"]['issuer'] = 'Uitgever';

$GLOBALS["lang"]['Issuer'] = 'Uitgever';

$GLOBALS["lang"]['issuer_name'] = 'Naam uitgever';

$GLOBALS["lang"]['Issuer Name'] = 'Naam uitgever';

$GLOBALS["lang"]['Issues'] = 'Problemen';

$GLOBALS["lang"]['Italy'] = 'Italië';

$GLOBALS["lang"]['Items not in Baseline'] = 'Posten buiten de uitgangswaarde';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON om te importeren';

$GLOBALS["lang"]['Jamaica'] = 'Jamaica';

$GLOBALS["lang"]['January'] = 'Januari';

$GLOBALS["lang"]['Japan'] = 'Japan';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordanië';

$GLOBALS["lang"]['July'] = 'Juli';

$GLOBALS["lang"]['June'] = 'Juni';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazachstan';

$GLOBALS["lang"]['Kenya'] = 'Kenia';

$GLOBALS["lang"]['kernel_version'] = 'Kernelversie';

$GLOBALS["lang"]['Kernel Version'] = 'Kernelversie';

$GLOBALS["lang"]['Key'] = 'Sleutel';

$GLOBALS["lang"]['Key Password (optional)'] = 'Sleutelwachtwoord (facultatief)';

$GLOBALS["lang"]['keys'] = 'Sleutels';

$GLOBALS["lang"]['Keys'] = 'Sleutels';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Kuwait'] = 'Koeweit';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgizische Republiek';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Taal';

$GLOBALS["lang"]['Language'] = 'Taal';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Laatste wijziging';

$GLOBALS["lang"]['Last Changed'] = 'Laatste wijziging';

$GLOBALS["lang"]['last_finished'] = 'Laatst voltooid';

$GLOBALS["lang"]['Last Finished'] = 'Laatst voltooid';

$GLOBALS["lang"]['last_logon'] = 'Laatste logon';

$GLOBALS["lang"]['Last Logon'] = 'Laatste logon';

$GLOBALS["lang"]['Last Name'] = 'Achternaam';

$GLOBALS["lang"]['last_os_update'] = 'Laatste Os-update';

$GLOBALS["lang"]['Last Os Update'] = 'Laatste Os-update';

$GLOBALS["lang"]['last_result'] = 'Laatste resultaat';

$GLOBALS["lang"]['Last Result'] = 'Laatste resultaat';

$GLOBALS["lang"]['last_run'] = 'Laatste uitvoer';

$GLOBALS["lang"]['Last Run'] = 'Laatste uitvoer';

$GLOBALS["lang"]['last_seen'] = 'Laatst gezien';

$GLOBALS["lang"]['Last Seen'] = 'Laatst gezien';

$GLOBALS["lang"]['last_seen_by'] = 'Laatst gezien Door';

$GLOBALS["lang"]['Last Seen By'] = 'Laatst gezien Door';

$GLOBALS["lang"]['last_user'] = 'Laatste gebruiker';

$GLOBALS["lang"]['Last User'] = 'Laatste gebruiker';

$GLOBALS["lang"]['lastModified'] = 'LastModified';

$GLOBALS["lang"]['LastModified'] = 'LastModified';

$GLOBALS["lang"]['latitude'] = 'Breedtegraad';

$GLOBALS["lang"]['Latitude'] = 'Breedtegraad';

$GLOBALS["lang"]['Latvia'] = 'Letland';

$GLOBALS["lang"]['Layout'] = 'Indeling';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn-account';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn-account';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Wachtwoord';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Wachtwoord';

$GLOBALS["lang"]['Learn About'] = 'Leren over';

$GLOBALS["lang"]['Learn More'] = 'Meer informatie';

$GLOBALS["lang"]['lease_expiry_date'] = 'Datum van het verstrijken van het huurcontract';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Datum van het verstrijken van het huurcontract';

$GLOBALS["lang"]['Lebanon'] = 'Libanon';

$GLOBALS["lang"]['legal_requirements'] = 'Wettelijke vereisten';

$GLOBALS["lang"]['Legal Requirements'] = 'Wettelijke vereisten';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Minder dan';

$GLOBALS["lang"]['Less Than or Equals'] = 'Minder dan of gelijk aan';

$GLOBALS["lang"]['level'] = 'Niveau';

$GLOBALS["lang"]['Level'] = 'Niveau';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Niveau van privileges die nodig zijn om te exploiteren (Geen, Laag, Hoog).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libië';

$GLOBALS["lang"]['License'] = 'Licentie';

$GLOBALS["lang"]['License Key'] = 'Licentiesleutel';

$GLOBALS["lang"]['License Required'] = 'Vergunning vereist';

$GLOBALS["lang"]['licenses'] = 'Vergunningen';

$GLOBALS["lang"]['Licenses'] = 'Vergunningen';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Zoals';

$GLOBALS["lang"]['limit'] = 'Maximumhoeveelheid';

$GLOBALS["lang"]['Limit'] = 'Maximumhoeveelheid';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Beperk de zoekopdracht tot de eerste X-items.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Beperkt tot 100 rijen.';

$GLOBALS["lang"]['line_amount'] = 'Regelbedrag';

$GLOBALS["lang"]['Line Amount'] = 'Regelbedrag';

$GLOBALS["lang"]['Line Graph'] = 'Regelgrafiek';

$GLOBALS["lang"]['line_number_a'] = 'Regel nummer A';

$GLOBALS["lang"]['Line Number A'] = 'Regel nummer A';

$GLOBALS["lang"]['line_number_b'] = 'Regel nummer B';

$GLOBALS["lang"]['Line Number B'] = 'Regel nummer B';

$GLOBALS["lang"]['line_text'] = 'Regeltekst';

$GLOBALS["lang"]['Line Text'] = 'Regeltekst';

$GLOBALS["lang"]['link'] = 'Verband';

$GLOBALS["lang"]['Link'] = 'Verband';

$GLOBALS["lang"]['Link (Advanced)'] = 'Link (Geavanceerd)';

$GLOBALS["lang"]['Linked Files'] = 'Gekoppelde bestanden';

$GLOBALS["lang"]['links'] = 'Links';

$GLOBALS["lang"]['Links'] = 'Links';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Koppelt deze ontdekking aan de bijbehorende cloud (indien nodig). Links naar <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Links naar <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Links naar <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Links naar <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['List'] = 'Lijst';

$GLOBALS["lang"]['list_table_format'] = 'Lijsttabelformaat';

$GLOBALS["lang"]['List Table Format'] = 'Lijsttabelformaat';

$GLOBALS["lang"]['Lithuania'] = 'Litouwen';

$GLOBALS["lang"]['Load Balancing'] = 'Laden balanceren';

$GLOBALS["lang"]['Local'] = 'Lokaal';

$GLOBALS["lang"]['Local Area Network'] = 'Lokaal netwerk';

$GLOBALS["lang"]['local_port'] = 'Lokale poort';

$GLOBALS["lang"]['Local Port'] = 'Lokale poort';

$GLOBALS["lang"]['Localhost'] = 'Lokalehost';

$GLOBALS["lang"]['Localisation'] = 'Lokalisatie';

$GLOBALS["lang"]['Location'] = 'Locatie';

$GLOBALS["lang"]['Location A'] = 'Locatie A';

$GLOBALS["lang"]['Location B'] = 'Locatie B';

$GLOBALS["lang"]['location_id'] = 'Locatie-ID';

$GLOBALS["lang"]['Location ID'] = 'Locatie-ID';

$GLOBALS["lang"]['location_id_a'] = 'Locatie-ID A';

$GLOBALS["lang"]['Location ID A'] = 'Locatie-ID A';

$GLOBALS["lang"]['location_id_b'] = 'Locatie-ID B';

$GLOBALS["lang"]['Location ID B'] = 'Locatie-ID B';

$GLOBALS["lang"]['location_latitude'] = 'Locatie Breedtegraad';

$GLOBALS["lang"]['Location Latitude'] = 'Locatie Breedtegraad';

$GLOBALS["lang"]['location_level'] = 'Locatieniveau';

$GLOBALS["lang"]['Location Level'] = 'Locatieniveau';

$GLOBALS["lang"]['location_longitude'] = 'Locatielengte';

$GLOBALS["lang"]['Location Longitude'] = 'Locatielengte';

$GLOBALS["lang"]['location_rack'] = 'Locatierek';

$GLOBALS["lang"]['Location Rack'] = 'Locatierek';

$GLOBALS["lang"]['location_rack_position'] = 'Locatie Rack-positie';

$GLOBALS["lang"]['Location Rack Position'] = 'Locatie Rack-positie';

$GLOBALS["lang"]['location_rack_size'] = 'Locatie Rack-grootte';

$GLOBALS["lang"]['Location Rack Size'] = 'Locatie Rack-grootte';

$GLOBALS["lang"]['location_room'] = 'Locatieruimte';

$GLOBALS["lang"]['Location Room'] = 'Locatieruimte';

$GLOBALS["lang"]['location_suite'] = 'Locatie Suite';

$GLOBALS["lang"]['Location Suite'] = 'Locatie Suite';

$GLOBALS["lang"]['locations'] = 'Locaties';

$GLOBALS["lang"]['Locations'] = 'Locaties';

$GLOBALS["lang"]['Locations in this'] = 'Locaties in deze';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Logformaat';

$GLOBALS["lang"]['Log Format'] = 'Logformaat';

$GLOBALS["lang"]['log_path'] = 'Logpad';

$GLOBALS["lang"]['Log Path'] = 'Logpad';

$GLOBALS["lang"]['log_rotation'] = 'Logrotatie';

$GLOBALS["lang"]['Log Rotation'] = 'Logrotatie';

$GLOBALS["lang"]['log_status'] = 'Logstatus';

$GLOBALS["lang"]['Log Status'] = 'Logstatus';

$GLOBALS["lang"]['Logical Cores '] = 'Logische kernen ';

$GLOBALS["lang"]['logical_count'] = 'Logisch aantal';

$GLOBALS["lang"]['Logical Count'] = 'Logisch aantal';

$GLOBALS["lang"]['Logout'] = 'Afmelden';

$GLOBALS["lang"]['Logs'] = 'Logs';

$GLOBALS["lang"]['longitude'] = 'Lengtegraad';

$GLOBALS["lang"]['Longitude'] = 'Lengtegraad';

$GLOBALS["lang"]['low'] = 'Laag';

$GLOBALS["lang"]['Low'] = 'Laag';

$GLOBALS["lang"]['Lower Case'] = 'Kleine letters';

$GLOBALS["lang"]['Luxembourg'] = 'Luxemburg';

$GLOBALS["lang"]['MAC Address'] = 'MAC adres';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Fabrikant';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac-adres';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Macau';

$GLOBALS["lang"]['Macedonia'] = 'Macedonië';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['maintenance_expires'] = 'Onderhoud verloopt';

$GLOBALS["lang"]['Maintenance Expires'] = 'Onderhoud verloopt';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Mijn standaard dashboard maken';

$GLOBALS["lang"]['Make this install a Collector'] = 'Maak van deze installatie een verzamelaar';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Maleisië';

$GLOBALS["lang"]['Maldives'] = 'Maldiven';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Beheer';

$GLOBALS["lang"]['Manage Licenses'] = 'Licentiebeheer';

$GLOBALS["lang"]['Manage in NMIS'] = 'Beheer in NMIS';

$GLOBALS["lang"]['Managed'] = 'Beheerd';

$GLOBALS["lang"]['managed_by'] = 'Beheerd door';

$GLOBALS["lang"]['Managed By'] = 'Beheerd door';

$GLOBALS["lang"]['Manual Input'] = 'Handmatige invoer';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Handmatig ingesteld door gebruiker, standaard op Productie.';

$GLOBALS["lang"]['Manually set by user.'] = 'Handmatig ingesteld door gebruiker.';

$GLOBALS["lang"]['manufacture_date'] = 'Vervaardigingsdatum';

$GLOBALS["lang"]['Manufacture Date'] = 'Vervaardigingsdatum';

$GLOBALS["lang"]['manufacturer'] = 'Fabrikant';

$GLOBALS["lang"]['Manufacturer'] = 'Fabrikant';

$GLOBALS["lang"]['manufacturer_code'] = 'Fabrikantcode';

$GLOBALS["lang"]['Manufacturer Code'] = 'Fabrikantcode';

$GLOBALS["lang"]['Map'] = 'Kaart';

$GLOBALS["lang"]['maps'] = 'Kaarten';

$GLOBALS["lang"]['Maps'] = 'Kaarten';

$GLOBALS["lang"]['March'] = 'Maart';

$GLOBALS["lang"]['Marshall Islands'] = 'Marshalleilanden';

$GLOBALS["lang"]['Martinique'] = 'Martinique';

$GLOBALS["lang"]['mask'] = 'Masker';

$GLOBALS["lang"]['Mask'] = 'Masker';

$GLOBALS["lang"]['Match'] = 'Match';

$GLOBALS["lang"]['match_options'] = 'Matchopties';

$GLOBALS["lang"]['Match Options'] = 'Matchopties';

$GLOBALS["lang"]['match_string'] = 'Match tekenreeks';

$GLOBALS["lang"]['Match String'] = 'Match tekenreeks';

$GLOBALS["lang"]['Matching Attribute'] = 'Matching Attribuut';

$GLOBALS["lang"]['maturity_level'] = 'Looptijd';

$GLOBALS["lang"]['Maturity Level'] = 'Looptijd';

$GLOBALS["lang"]['maturity_score'] = 'Looptijdscore';

$GLOBALS["lang"]['Maturity Score'] = 'Looptijdscore';

$GLOBALS["lang"]['Mauritania'] = 'Mauritanië';

$GLOBALS["lang"]['Mauritius'] = 'Mauritius';

$GLOBALS["lang"]['max_file_size'] = 'Maximale bestandsgrootte';

$GLOBALS["lang"]['Max File Size'] = 'Maximale bestandsgrootte';

$GLOBALS["lang"]['Max Length'] = 'Maximale lengte';

$GLOBALS["lang"]['max_size'] = 'Max. grootte';

$GLOBALS["lang"]['Max Size'] = 'Max. grootte';

$GLOBALS["lang"]['May'] = 'Mei';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Meten van de waarschijnlijkheid van de kwetsbaarheid wordt aangevallen, en is gebaseerd op de huidige staat van exploitatie technieken, exploit code beschikbaarheid, of actieve, in-the-wild exploitatie.';

$GLOBALS["lang"]['medium'] = 'Middel';

$GLOBALS["lang"]['Medium'] = 'Middel';

$GLOBALS["lang"]['members'] = 'Leden';

$GLOBALS["lang"]['Members'] = 'Leden';

$GLOBALS["lang"]['memory'] = 'Geheugen';

$GLOBALS["lang"]['Memory'] = 'Geheugen';

$GLOBALS["lang"]['memory_count'] = 'Geheugenaantal';

$GLOBALS["lang"]['Memory Count'] = 'Geheugenaantal';

$GLOBALS["lang"]['memory_slot_count'] = 'Aantal geheugenslots';

$GLOBALS["lang"]['Memory Slot Count'] = 'Aantal geheugenslots';

$GLOBALS["lang"]['menu_category'] = 'Menu Categorie';

$GLOBALS["lang"]['Menu Category'] = 'Menu Categorie';

$GLOBALS["lang"]['menu_display'] = 'Menuweergave';

$GLOBALS["lang"]['Menu Display'] = 'Menuweergave';

$GLOBALS["lang"]['message'] = 'Bericht';

$GLOBALS["lang"]['Message'] = 'Bericht';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta laatst gewijzigd';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta laatst gewijzigd';

$GLOBALS["lang"]['metric'] = 'Metrisch';

$GLOBALS["lang"]['Metric'] = 'Metrisch';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Metropolitan Area Network';

$GLOBALS["lang"]['Mexico'] = 'Mexico';

$GLOBALS["lang"]['Micronesia'] = 'Micronesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure-velden';

$GLOBALS["lang"]['microtime'] = 'Microtime';

$GLOBALS["lang"]['Microtime'] = 'Microtime';

$GLOBALS["lang"]['minute'] = 'Minuut';

$GLOBALS["lang"]['Minute'] = 'Minuut';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minuten Sinds de laatste audit zijn groter dan';

$GLOBALS["lang"]['model'] = 'Model';

$GLOBALS["lang"]['Model'] = 'Model';

$GLOBALS["lang"]['model_family'] = 'Modelfamilie';

$GLOBALS["lang"]['Model Family'] = 'Modelfamilie';

$GLOBALS["lang"]['module'] = 'Module';

$GLOBALS["lang"]['Module'] = 'Module';

$GLOBALS["lang"]['module_index'] = 'Moduleindex';

$GLOBALS["lang"]['Module Index'] = 'Moduleindex';

$GLOBALS["lang"]['Modules'] = 'Modules';

$GLOBALS["lang"]['Moldova'] = 'Moldavië';

$GLOBALS["lang"]['Monaco'] = 'Monaco';

$GLOBALS["lang"]['Monday'] = 'Maandag';

$GLOBALS["lang"]['Mongolia'] = 'Mongolië';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Maand';

$GLOBALS["lang"]['Month'] = 'Maand';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Marokko';

$GLOBALS["lang"]['motherboard'] = 'Moederbord';

$GLOBALS["lang"]['Motherboard'] = 'Moederbord';

$GLOBALS["lang"]['mount_point'] = 'Aankoppelpunt';

$GLOBALS["lang"]['Mount Point'] = 'Aankoppelpunt';

$GLOBALS["lang"]['mount_type'] = 'Aankoppeltype';

$GLOBALS["lang"]['Mount Type'] = 'Aankoppeltype';

$GLOBALS["lang"]['Mozambique'] = 'Mozambique';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Moet reageren op ping';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-tot-1';

$GLOBALS["lang"]['N-to-N'] = 'N-naar-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS-klant';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS-apparaatopties';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS-apparaatselectie';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS-veldnaam';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS-veldtype';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS-Groep';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Rol';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'OPMERKING - U kunt voorkomen dat platte tekst referenties worden weergegeven onder door het instellen van de configuratie-item voor <code>decrypt_credentials</code> tot <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Naam';

$GLOBALS["lang"]['Name'] = 'Naam';

$GLOBALS["lang"]['Namibia'] = 'Namibië';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepal';

$GLOBALS["lang"]['net_index'] = 'Netto-index';

$GLOBALS["lang"]['Net Index'] = 'Netto-index';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Nederlandse Antillen';

$GLOBALS["lang"]['Netherlands the'] = 'Nederland';

$GLOBALS["lang"]['netmask'] = 'Netmasker';

$GLOBALS["lang"]['Netmask'] = 'Netmasker';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Netwerkbeleid';

$GLOBALS["lang"]['Network'] = 'Netwerk';

$GLOBALS["lang"]['network_address'] = 'Netwerkadres';

$GLOBALS["lang"]['Network Address'] = 'Netwerkadres';

$GLOBALS["lang"]['network_domain'] = 'Netwerkdomein';

$GLOBALS["lang"]['Network Domain'] = 'Netwerkdomein';

$GLOBALS["lang"]['Network Types'] = 'Netwerktypes';

$GLOBALS["lang"]['networks'] = 'Netwerken';

$GLOBALS["lang"]['Networks'] = 'Netwerken';

$GLOBALS["lang"]['Networks Generated By'] = 'Netwerken gegenereerd door';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Netwerken met een CIDR-masker van';

$GLOBALS["lang"]['New Building Name'] = 'Naam nieuw gebouw';

$GLOBALS["lang"]['New Caledonia'] = 'Nieuw-Caledonië';

$GLOBALS["lang"]['New Floor Name'] = 'Nieuwe vloernaam';

$GLOBALS["lang"]['New Room Name'] = 'Naam nieuwe ruimte';

$GLOBALS["lang"]['New Row Name'] = 'Nieuwe rijnaam';

$GLOBALS["lang"]['New Zealand'] = 'Nieuw-Zeeland';

$GLOBALS["lang"]['News'] = 'Nieuws';

$GLOBALS["lang"]['next_hop'] = 'Volgende Hop';

$GLOBALS["lang"]['Next Hop'] = 'Volgende Hop';

$GLOBALS["lang"]['next_run'] = 'Volgende uitvoeren';

$GLOBALS["lang"]['Next Run'] = 'Volgende uitvoeren';

$GLOBALS["lang"]['Nicaragua'] = 'Nicaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigeria';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Kaart';

$GLOBALS["lang"]['Nmap'] = 'Kaart';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning Reacties';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp-poorten';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp-poorten';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Upp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Upp Ports';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis-klant';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis-klant';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis beheren';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis beheren';

$GLOBALS["lang"]['nmis_name'] = 'Nmis naam';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis naam';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Notes';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Notes';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Noot';

$GLOBALS["lang"]['Nmis Role'] = 'Noot';

$GLOBALS["lang"]['No'] = 'Nee';

$GLOBALS["lang"]['No Devices Returned'] = 'Geen apparaten geretourneerd';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Geen Google Maps API Sleutel aanwezig, zult u niet in staat zijn om de kaart weer te geven.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Geen licentie voor Professional of Enterprise';

$GLOBALS["lang"]['No Results'] = 'Geen resultaten';

$GLOBALS["lang"]['No data in License Key'] = 'Geen gegevens in licentiesleutel';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Geen database upgrade vereist op dit moment.';

$GLOBALS["lang"]['Node'] = 'Knooppunt';

$GLOBALS["lang"]['None'] = 'Geen';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk';

$GLOBALS["lang"]['Normal'] = 'Normaal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Noordelijke Marianen';

$GLOBALS["lang"]['Norway'] = 'Noorwegen';

$GLOBALS["lang"]['Not Applicable'] = 'Niet van toepassing';

$GLOBALS["lang"]['Not Checked'] = 'Niet gecontroleerd';

$GLOBALS["lang"]['Not Equals'] = 'Niet gelijk';

$GLOBALS["lang"]['Not In'] = 'Niet in';

$GLOBALS["lang"]['Not Like'] = 'Niet zoals';

$GLOBALS["lang"]['Not Set'] = 'Niet ingesteld';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Normaal gesproken niet gebruikt. Indien ingesteld, moet het apparaat een open poort hebben (zoals bij Scanopties) om te worden beschouwd als reagerend. Een MAC-adres, arprespons of pingrespons wordt niet voldoende geacht om te worden beschouwd als respons. Nuttig als een router of firewall tussen de Open-AudIT server en target IP namens de IP\'s reageert op poortscans.';

$GLOBALS["lang"]['Note'] = 'Opmerking';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Opmerking - Een ouder selecteren geeft automatisch toegang tot zijn kinderen (hoewel het hier niet getoond wordt).';

$GLOBALS["lang"]['Notes'] = 'Opmerkingen';

$GLOBALS["lang"]['notes'] = 'Opmerkingen';

$GLOBALS["lang"]['Notice'] = 'Kennisgeving';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'November';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'BESCHIKKING VAN';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Families';

$GLOBALS["lang"]['OS Family'] = 'OS Family';

$GLOBALS["lang"]['OS Group'] = 'OS-groep';

$GLOBALS["lang"]['oae_manage'] = 'Oae-beheer';

$GLOBALS["lang"]['Oae Manage'] = 'Oae-beheer';

$GLOBALS["lang"]['object_ident'] = 'Objectident';

$GLOBALS["lang"]['Object Ident'] = 'Objectident';

$GLOBALS["lang"]['October'] = 'oktober';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Aan';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Een van de <code>3x2</code>, <code>4x2</code>, <code>4x3</code> of <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Een van Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Een van de ontwikkeling, rampenherstel, evaluatie, pre-productie, productie, testen, training, gebruikersacceptatie testen';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Een van toegewezen, gedelegeerde, planning, gereserveerd, niet toegewezen, onbekend, onbeheerd. Standaardinstellingen die toegewezen worden.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Eén van beide <code>active directory</code> of <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Een van: antivirus, back-up, firewall, goedgekeurd, verboden, genegeerd of andere.';

$GLOBALS["lang"]['Online Documentation'] = 'Online documentatie';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open Audit-gemeenschap';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Apparaatselectie openen';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open Audit Enterprise. Op grote schaal flexibele oplossing voor ontdekking en audit voor grote netwerken. Alle functies van Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configureerbare Role Based Access Control inclusief Active Directory en LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT veldnaam';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT-licenties';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT-opties';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open-AudIT Professional';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open Audit Professional. De wereld\\';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-AudIT en Nup';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap is geïnstalleerd';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap-gebruiker-dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap-gebruiker-dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap gebruikerslidmaatschap-attribuut';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap gebruikerslidmaatschap-attribuut';

$GLOBALS["lang"]['open|filtered'] = 'Open gefilterd';

$GLOBALS["lang"]['Open|filtered'] = 'Open gefilterd';

$GLOBALS["lang"]['Operating System'] = 'Besturingssysteem';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Familie van het besturingssysteem bevat';

$GLOBALS["lang"]['Operating Systems'] = 'Bedrijfssystemen';

$GLOBALS["lang"]['optical'] = 'Optisch';

$GLOBALS["lang"]['Optical'] = 'Optisch';

$GLOBALS["lang"]['Optimized'] = 'Geoptimaliseerd';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Optionele versie zoals gecontroleerd door Open-AudIT. Gebruik het percentage teken % als een wildcard.';

$GLOBALS["lang"]['options'] = 'Opties';

$GLOBALS["lang"]['Options'] = 'Opties';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Of selecteer uit de onderstaande velden.';

$GLOBALS["lang"]['org_descendants'] = 'Org-afstammelingen';

$GLOBALS["lang"]['Org Descendants'] = 'Org-afstammelingen';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = 'Organisatie';

$GLOBALS["lang"]['organisation'] = 'Organisatie';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisatie Afstammelingen';

$GLOBALS["lang"]['Organisations'] = 'Organisaties';

$GLOBALS["lang"]['orgs'] = 'Orgen';

$GLOBALS["lang"]['Orgs'] = 'Orgen';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs-naam';

$GLOBALS["lang"]['orientation'] = 'Oriëntatie';

$GLOBALS["lang"]['Orientation'] = 'Oriëntatie';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os bit';

$GLOBALS["lang"]['Os Bit'] = 'Os bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Versie tonen';

$GLOBALS["lang"]['Os Display Version'] = 'Versie tonen';

$GLOBALS["lang"]['os_family'] = 'Os familie';

$GLOBALS["lang"]['Os Family'] = 'Os familie';

$GLOBALS["lang"]['os_group'] = 'Os Group';

$GLOBALS["lang"]['Os Group'] = 'Os Group';

$GLOBALS["lang"]['os_installation_date'] = 'Os installatiedatum';

$GLOBALS["lang"]['Os Installation Date'] = 'Os installatiedatum';

$GLOBALS["lang"]['os_licence_expiry'] = 'O Licentie verstreken';

$GLOBALS["lang"]['Os Licence Expiry'] = 'O Licentie verstreken';

$GLOBALS["lang"]['os_license'] = 'Os-licentie';

$GLOBALS["lang"]['Os License'] = 'Os-licentie';

$GLOBALS["lang"]['os_license_code'] = 'Os Licentiecode';

$GLOBALS["lang"]['Os License Code'] = 'Os Licentiecode';

$GLOBALS["lang"]['os_license_mode'] = 'Os-licentiemodus';

$GLOBALS["lang"]['Os License Mode'] = 'Os-licentiemodus';

$GLOBALS["lang"]['os_license_type'] = 'Os-licentietype';

$GLOBALS["lang"]['Os License Type'] = 'Os-licentietype';

$GLOBALS["lang"]['os_name'] = 'Os naam';

$GLOBALS["lang"]['Os Name'] = 'Os naam';

$GLOBALS["lang"]['os_version'] = 'O-versie';

$GLOBALS["lang"]['Os Version'] = 'O-versie';

$GLOBALS["lang"]['Other'] = 'Andere';

$GLOBALS["lang"]['Others'] = 'Overige';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Onze timeout voor een SSH reactie';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Onze timeout voor een WMI reactie';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Onze timeout voor een SNMP response';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Onze timeout voor een auditscript response';

$GLOBALS["lang"]['output'] = 'Uitvoer';

$GLOBALS["lang"]['Output'] = 'Uitvoer';

$GLOBALS["lang"]['outputs'] = 'Uitvoer';

$GLOBALS["lang"]['Outputs'] = 'Uitvoer';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Algemene ernstscore (0';

$GLOBALS["lang"]['overwrite'] = 'Overschrijven';

$GLOBALS["lang"]['Overwrite'] = 'Overschrijven';

$GLOBALS["lang"]['owner'] = 'Eigenaar';

$GLOBALS["lang"]['Owner'] = 'Eigenaar';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Verpakking';

$GLOBALS["lang"]['packages'] = 'Verpakkingen';

$GLOBALS["lang"]['Packages'] = 'Verpakkingen';

$GLOBALS["lang"]['pagefile'] = 'Paginabestand';

$GLOBALS["lang"]['Pagefile'] = 'Paginabestand';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestijnse gebieden';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papoea-Nieuw-Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Paranoid'] = 'Paranoïde';

$GLOBALS["lang"]['Parent'] = 'Ouder';

$GLOBALS["lang"]['parent_id'] = 'Ouder-ID';

$GLOBALS["lang"]['Parent ID'] = 'Ouder-ID';

$GLOBALS["lang"]['parent_name'] = 'Achternaam';

$GLOBALS["lang"]['Parent Name'] = 'Achternaam';

$GLOBALS["lang"]['part_number'] = 'Deelnummer';

$GLOBALS["lang"]['Part Number'] = 'Deelnummer';

$GLOBALS["lang"]['part_of_domain'] = 'Deel van domein';

$GLOBALS["lang"]['Part Of Domain'] = 'Deel van domein';

$GLOBALS["lang"]['Partition'] = 'Partitie';

$GLOBALS["lang"]['partition_count'] = 'Aantal partities';

$GLOBALS["lang"]['Partition Count'] = 'Aantal partities';

$GLOBALS["lang"]['partition_disk_index'] = 'Partitieschijfindex';

$GLOBALS["lang"]['Partition Disk Index'] = 'Partitieschijfindex';

$GLOBALS["lang"]['Pass'] = 'Passeer';

$GLOBALS["lang"]['Passed'] = 'geslaagd';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Passief optisch lokaal netwerk';

$GLOBALS["lang"]['Password'] = 'Wachtwoord';

$GLOBALS["lang"]['password'] = 'Wachtwoord';

$GLOBALS["lang"]['password_changeable'] = 'Wachtwoord kan worden gewijzigd';

$GLOBALS["lang"]['Password Changeable'] = 'Wachtwoord kan worden gewijzigd';

$GLOBALS["lang"]['password_disabled'] = 'Wachtwoord uitgeschakeld';

$GLOBALS["lang"]['Password Disabled'] = 'Wachtwoord uitgeschakeld';

$GLOBALS["lang"]['password_expires'] = 'Wachtwoord verloopt';

$GLOBALS["lang"]['Password Expires'] = 'Wachtwoord verloopt';

$GLOBALS["lang"]['password_last_changed'] = 'Wachtwoord laatst gewijzigd';

$GLOBALS["lang"]['Password Last Changed'] = 'Wachtwoord laatst gewijzigd';

$GLOBALS["lang"]['password_required'] = 'Wachtwoord vereist';

$GLOBALS["lang"]['Password Required'] = 'Wachtwoord vereist';

$GLOBALS["lang"]['patch_panel'] = 'Paneel Patchen';

$GLOBALS["lang"]['Patch Panel'] = 'Paneel Patchen';

$GLOBALS["lang"]['patch_panel_port'] = 'Paneelpoort patchen';

$GLOBALS["lang"]['Patch Panel Port'] = 'Paneelpoort patchen';

$GLOBALS["lang"]['path'] = 'Pad';

$GLOBALS["lang"]['Path'] = 'Pad';

$GLOBALS["lang"]['Performance'] = 'Prestaties';

$GLOBALS["lang"]['Performed'] = 'Uitgevoerd';

$GLOBALS["lang"]['permission'] = 'Toestemming';

$GLOBALS["lang"]['Permission'] = 'Toestemming';

$GLOBALS["lang"]['permissions'] = 'Rechten';

$GLOBALS["lang"]['Permissions'] = 'Rechten';

$GLOBALS["lang"]['Personal Area Network'] = 'Persoonlijk netwerk';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Filipijnen';

$GLOBALS["lang"]['phone'] = 'Telefoon';

$GLOBALS["lang"]['Phone'] = 'Telefoon';

$GLOBALS["lang"]['Physical CPUs'] = 'Fysische CPU\'s';

$GLOBALS["lang"]['physical_count'] = 'Lichamelijk aantal';

$GLOBALS["lang"]['Physical Count'] = 'Lichamelijk aantal';

$GLOBALS["lang"]['physical_depth'] = 'Fysische diepte';

$GLOBALS["lang"]['Physical Depth'] = 'Fysische diepte';

$GLOBALS["lang"]['physical_height'] = 'Fysische hoogte';

$GLOBALS["lang"]['Physical Height'] = 'Fysische hoogte';

$GLOBALS["lang"]['physical_width'] = 'Fysische breedte';

$GLOBALS["lang"]['Physical Width'] = 'Fysische breedte';

$GLOBALS["lang"]['picture'] = 'Afbeelding';

$GLOBALS["lang"]['Picture'] = 'Afbeelding';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Pie Chart';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairneilanden';

$GLOBALS["lang"]['placement'] = 'Plaatsing';

$GLOBALS["lang"]['Placement'] = 'Plaatsing';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Laat een Open-AudIT administrator inloggen en upgrade van de database.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Houd er rekening mee dat het selectievakje het tekstinvoervak zal overschrijven.';

$GLOBALS["lang"]['Please set using'] = 'Instellen met';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Polen';

$GLOBALS["lang"]['Policies'] = 'Beleid';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Beleid heeft uitzonderingen.';

$GLOBALS["lang"]['policy'] = 'Beleid';

$GLOBALS["lang"]['Policy'] = 'Beleid';

$GLOBALS["lang"]['policy_id'] = 'Beleids-ID';

$GLOBALS["lang"]['Policy ID'] = 'Beleids-ID';

$GLOBALS["lang"]['Policy Result'] = 'Beleidsresultaat';

$GLOBALS["lang"]['Policy Results'] = 'Beleidsresultaten';

$GLOBALS["lang"]['Polite'] = 'Beleefd';

$GLOBALS["lang"]['Populated by audit.'] = 'Gepopuleerd door audit.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Gepopuleerd door ontdekking en audit.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Gepopuleerd dynamisch.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Gepopuleerd van DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Gepopuleerd van SNMP ontdekking.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Gepopuleerd van apparaat audits.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Gepopuleerd van hostnaam.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Gepopuleerd van machine-id op Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Gepopuleerd vanaf het IP voor de standaard route of het IP gedetecteerd in ontdekking.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Gepopuleerd van het commando hostnaam.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Gepopuleerd met extra gegevens van het externe systeem, in een JSON-representatie.';

$GLOBALS["lang"]['port'] = 'Haven';

$GLOBALS["lang"]['Port'] = 'Haven';

$GLOBALS["lang"]['port_name'] = 'Poortnaam';

$GLOBALS["lang"]['Port Name'] = 'Poortnaam';

$GLOBALS["lang"]['port_number'] = 'Poortnummer';

$GLOBALS["lang"]['Port Number'] = 'Poortnummer';

$GLOBALS["lang"]['ports_in_order'] = 'Havens in volgorde';

$GLOBALS["lang"]['Ports In Order'] = 'Havens in volgorde';

$GLOBALS["lang"]['ports_stop_after'] = 'Havens stoppen na';

$GLOBALS["lang"]['Ports Stop After'] = 'Havens stoppen na';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugal, Portugese Republiek';

$GLOBALS["lang"]['position'] = 'Positie';

$GLOBALS["lang"]['Position'] = 'Positie';

$GLOBALS["lang"]['postcode'] = 'Postcode';

$GLOBALS["lang"]['Postcode'] = 'Postcode';

$GLOBALS["lang"]['power_circuit'] = 'Stroomkring';

$GLOBALS["lang"]['Power Circuit'] = 'Stroomkring';

$GLOBALS["lang"]['power_sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Predictable'] = 'Voorspelbaar';

$GLOBALS["lang"]['Preferences'] = 'Voorkeuren';

$GLOBALS["lang"]['Prerequisites'] = 'Vereisten';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Vereisten en tests';

$GLOBALS["lang"]['present'] = 'Aanwezig';

$GLOBALS["lang"]['Present'] = 'Aanwezig';

$GLOBALS["lang"]['previous_value'] = 'Vorige waarde';

$GLOBALS["lang"]['Previous Value'] = 'Vorige waarde';

$GLOBALS["lang"]['primary'] = 'Primair';

$GLOBALS["lang"]['Primary'] = 'Primair';

$GLOBALS["lang"]['Primary Key'] = 'Primaire sleutel';

$GLOBALS["lang"]['print_queue'] = 'Afdrukwachtrij';

$GLOBALS["lang"]['Print Queue'] = 'Afdrukwachtrij';

$GLOBALS["lang"]['printer_color'] = 'Printerkleur';

$GLOBALS["lang"]['Printer Color'] = 'Printerkleur';

$GLOBALS["lang"]['printer_duplex'] = 'Printerduplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Printerduplex';

$GLOBALS["lang"]['printer_port_name'] = 'Naam printerpoort';

$GLOBALS["lang"]['Printer Port Name'] = 'Naam printerpoort';

$GLOBALS["lang"]['printer_shared'] = 'Printer gedeeld';

$GLOBALS["lang"]['Printer Shared'] = 'Printer gedeeld';

$GLOBALS["lang"]['printer_shared_name'] = 'Gedeelde printernaam';

$GLOBALS["lang"]['Printer Shared Name'] = 'Gedeelde printernaam';

$GLOBALS["lang"]['priority'] = 'Prioriteit';

$GLOBALS["lang"]['Priority'] = 'Prioriteit';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Privacy-wachtwoordzin';

$GLOBALS["lang"]['privileges_required'] = 'Vereiste voorrechten';

$GLOBALS["lang"]['Privileges Required'] = 'Vereiste voorrechten';

$GLOBALS["lang"]['processor'] = 'Verwerker';

$GLOBALS["lang"]['Processor'] = 'Verwerker';

$GLOBALS["lang"]['processor_count'] = 'Aantal verwerkers';

$GLOBALS["lang"]['Processor Count'] = 'Aantal verwerkers';

$GLOBALS["lang"]['processor_slot_count'] = 'Aantal processors';

$GLOBALS["lang"]['Processor Slot Count'] = 'Aantal processors';

$GLOBALS["lang"]['processor_type'] = 'Type processor';

$GLOBALS["lang"]['Processor Type'] = 'Type processor';

$GLOBALS["lang"]['Processors'] = 'Verwerkers';

$GLOBALS["lang"]['product_name'] = 'Productnaam';

$GLOBALS["lang"]['Product Name'] = 'Productnaam';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Productnaam Match van CPE: ';

$GLOBALS["lang"]['products'] = 'Producten';

$GLOBALS["lang"]['Products'] = 'Producten';

$GLOBALS["lang"]['profile'] = 'Profiel';

$GLOBALS["lang"]['Profile'] = 'Profiel';

$GLOBALS["lang"]['program'] = 'Programma';

$GLOBALS["lang"]['Program'] = 'Programma';

$GLOBALS["lang"]['protocol'] = 'Protocol';

$GLOBALS["lang"]['Protocol'] = 'Protocol';

$GLOBALS["lang"]['provider'] = 'Aanbieder';

$GLOBALS["lang"]['Provider'] = 'Aanbieder';

$GLOBALS["lang"]['published'] = 'Gepubliceerd';

$GLOBALS["lang"]['Published'] = 'Gepubliceerd';

$GLOBALS["lang"]['published_date'] = 'Gepubliceerde datum';

$GLOBALS["lang"]['Published Date'] = 'Gepubliceerde datum';

$GLOBALS["lang"]['publisher'] = 'Uitgever';

$GLOBALS["lang"]['Publisher'] = 'Uitgever';

$GLOBALS["lang"]['Puerto Rico'] = 'Puerto Rico';

$GLOBALS["lang"]['Purchase'] = 'Aankoop';

$GLOBALS["lang"]['purchase_amount'] = 'Aankoopbedrag';

$GLOBALS["lang"]['Purchase Amount'] = 'Aankoopbedrag';

$GLOBALS["lang"]['purchase_cost_center'] = 'Aankoopkostencentrum';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Aankoopkostencentrum';

$GLOBALS["lang"]['purchase_count'] = 'Aantal aankopen';

$GLOBALS["lang"]['Purchase Count'] = 'Aantal aankopen';

$GLOBALS["lang"]['purchase_date'] = 'Aankoopdatum';

$GLOBALS["lang"]['Purchase Date'] = 'Aankoopdatum';

$GLOBALS["lang"]['purchase_invoice'] = 'Aankoopfactuur';

$GLOBALS["lang"]['Purchase Invoice'] = 'Aankoopfactuur';

$GLOBALS["lang"]['purchase_order'] = 'Aankooporder';

$GLOBALS["lang"]['Purchase Order'] = 'Aankooporder';

$GLOBALS["lang"]['purchase_order_number'] = 'Koopordernummer';

$GLOBALS["lang"]['Purchase Order Number'] = 'Koopordernummer';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Nummer aankoopdienstcontract';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Nummer aankoopdienstcontract';

$GLOBALS["lang"]['purchase_vendor'] = 'Verkoper kopen';

$GLOBALS["lang"]['Purchase Vendor'] = 'Verkoper kopen';

$GLOBALS["lang"]['purpose'] = 'Betreft';

$GLOBALS["lang"]['Purpose'] = 'Betreft';

$GLOBALS["lang"]['Qatar'] = 'Qatar';

$GLOBALS["lang"]['queries'] = 'Vragen';

$GLOBALS["lang"]['Queries'] = 'Vragen';

$GLOBALS["lang"]['Query'] = 'Opvragen';

$GLOBALS["lang"]['queue'] = 'Wachtrij';

$GLOBALS["lang"]['Queue'] = 'Wachtrij';

$GLOBALS["lang"]['Queue Limit'] = 'Wachtrijlimiet';

$GLOBALS["lang"]['Queued Device Audits'] = 'Audits van het apparaat in de wachtrij';

$GLOBALS["lang"]['Queued IP Scans'] = 'IP-scans in wachtrij';

$GLOBALS["lang"]['Queued Items'] = 'Items in de wachtrij';

$GLOBALS["lang"]['RU Start'] = 'RU Start';

$GLOBALS["lang"]['RX Bitrate'] = 'RX-bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX-niveau';

$GLOBALS["lang"]['RX Power'] = 'RX-vermogen';

$GLOBALS["lang"]['RX Profile'] = 'RX-profiel';

$GLOBALS["lang"]['Rack'] = 'Rek';

$GLOBALS["lang"]['rack_devices'] = 'Rekapparaten';

$GLOBALS["lang"]['Rack Devices'] = 'Rekapparaten';

$GLOBALS["lang"]['rack_id'] = 'Rack-ID';

$GLOBALS["lang"]['Rack ID'] = 'Rack-ID';

$GLOBALS["lang"]['Racks'] = 'Rekken';

$GLOBALS["lang"]['racks'] = 'Rekken';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Rationeel';

$GLOBALS["lang"]['Rationale'] = 'Rationeel';

$GLOBALS["lang"]['raw'] = 'ruw';

$GLOBALS["lang"]['Raw'] = 'ruw';

$GLOBALS["lang"]['read'] = 'Gelezen';

$GLOBALS["lang"]['Read'] = 'Gelezen';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Lees onze online documentatie op de Open-AudIT Wiki.';

$GLOBALS["lang"]['Red Query'] = 'Rode zoekopdracht';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Uri omleiden';

$GLOBALS["lang"]['Redirect Uri'] = 'Uri omleiden';

$GLOBALS["lang"]['references'] = 'Referenties';

$GLOBALS["lang"]['References'] = 'Referenties';

$GLOBALS["lang"]['region'] = 'Gebieden';

$GLOBALS["lang"]['Region'] = 'Gebieden';

$GLOBALS["lang"]['registered_user'] = 'Geregistreerde gebruiker';

$GLOBALS["lang"]['Registered User'] = 'Geregistreerde gebruiker';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Loslaten';

$GLOBALS["lang"]['remediation'] = 'Remediatie';

$GLOBALS["lang"]['Remediation'] = 'Remediatie';

$GLOBALS["lang"]['Remote'] = 'Op afstand';

$GLOBALS["lang"]['remote_address'] = 'Adres op afstand';

$GLOBALS["lang"]['Remote Address'] = 'Adres op afstand';

$GLOBALS["lang"]['remote_port'] = 'Haven op afstand';

$GLOBALS["lang"]['Remote Port'] = 'Haven op afstand';

$GLOBALS["lang"]['Remove'] = 'Verwijderen';

$GLOBALS["lang"]['Remove Exception'] = 'Uitzondering verwijderen';

$GLOBALS["lang"]['Report'] = 'Verslag';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Rapporteer op uw apparaten, netwerken en meer';

$GLOBALS["lang"]['reportable'] = 'Te rapporteren';

$GLOBALS["lang"]['Reportable'] = 'Te rapporteren';

$GLOBALS["lang"]['Reports'] = 'Verslagen';

$GLOBALS["lang"]['request'] = 'Verzoek';

$GLOBALS["lang"]['Request'] = 'Verzoek';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Verzoek om een specifiek CVE';

$GLOBALS["lang"]['requested'] = 'Verzoek';

$GLOBALS["lang"]['Requested'] = 'Verzoek';

$GLOBALS["lang"]['require_port'] = 'Poort nodig';

$GLOBALS["lang"]['Require Port'] = 'Poort nodig';

$GLOBALS["lang"]['Require an Open Port'] = 'Een open poort nodig';

$GLOBALS["lang"]['Required'] = 'Vereist';

$GLOBALS["lang"]['Reset'] = 'Reset';

$GLOBALS["lang"]['Reset All Data'] = 'Alle gegevens herstellen';

$GLOBALS["lang"]['Reset to Default'] = 'Terugzetten naar standaard';

$GLOBALS["lang"]['resource'] = 'Hulpbron';

$GLOBALS["lang"]['Resource'] = 'Hulpbron';

$GLOBALS["lang"]['Resource Name'] = 'Bronnaam';

$GLOBALS["lang"]['Resources'] = 'Middelen';

$GLOBALS["lang"]['response'] = 'Respons';

$GLOBALS["lang"]['Response'] = 'Respons';

$GLOBALS["lang"]['responsibility'] = 'Verantwoordelijkheid';

$GLOBALS["lang"]['Responsibility'] = 'Verantwoordelijkheid';

$GLOBALS["lang"]['Restore my Licenses'] = 'Mijn licenties herstellen';

$GLOBALS["lang"]['Restrict to Private'] = 'Beperken tot privé';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Beperken tot Subnet';

$GLOBALS["lang"]['result'] = 'Resultaat';

$GLOBALS["lang"]['Result'] = 'Resultaat';

$GLOBALS["lang"]['Results'] = 'Resultaten';

$GLOBALS["lang"]['retrieved'] = 'Opgehaald';

$GLOBALS["lang"]['Retrieved'] = 'Opgehaald';

$GLOBALS["lang"]['retrieved_ident'] = 'Opgehaald identificatienummer';

$GLOBALS["lang"]['Retrieved Ident'] = 'Opgehaald identificatienummer';

$GLOBALS["lang"]['retrieved_name'] = 'Naam opgehaald';

$GLOBALS["lang"]['Retrieved Name'] = 'Naam opgehaald';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Opgehaald van het apparaat - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbies, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Reünie';

$GLOBALS["lang"]['revision'] = 'Herziening';

$GLOBALS["lang"]['Revision'] = 'Herziening';

$GLOBALS["lang"]['risk_assesment_result'] = 'Risicobeoordelingsresultaat';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Risicobeoordelingsresultaat';

$GLOBALS["lang"]['role'] = 'Rol';

$GLOBALS["lang"]['Role'] = 'Rol';

$GLOBALS["lang"]['roles'] = 'Rol';

$GLOBALS["lang"]['Roles'] = 'Rol';

$GLOBALS["lang"]['Romania'] = 'Roemenië';

$GLOBALS["lang"]['Room'] = 'Kamer';

$GLOBALS["lang"]['route'] = 'Route';

$GLOBALS["lang"]['Route'] = 'Route';

$GLOBALS["lang"]['Row'] = 'Rij';

$GLOBALS["lang"]['Row Count'] = 'Aantal rijen';

$GLOBALS["lang"]['row_position'] = 'Rijpositie';

$GLOBALS["lang"]['Row Position'] = 'Rijpositie';

$GLOBALS["lang"]['Rows'] = 'Rijen';

$GLOBALS["lang"]['ru_height'] = 'Ru Hoogte';

$GLOBALS["lang"]['Ru Height'] = 'Ru Hoogte';

$GLOBALS["lang"]['ru_start'] = 'Ru Start';

$GLOBALS["lang"]['Ru Start'] = 'Ru Start';

$GLOBALS["lang"]['rule_group'] = 'Regelgroep';

$GLOBALS["lang"]['Rule Group'] = 'Regelgroep';

$GLOBALS["lang"]['rules'] = 'Regels';

$GLOBALS["lang"]['Rules'] = 'Regels';

$GLOBALS["lang"]['Run Discovery'] = 'Ontdekking uitvoeren';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Ontdekking uitvoeren op apparaten';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Doe een ontdekking en kom erachter <b>Wat is er op je netwerk?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Dit commando uitvoeren';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Open-AudIT Apache-service draaien onder Windows';

$GLOBALS["lang"]['Russian Federation'] = 'Russische Federatie';

$GLOBALS["lang"]['Rwanda'] = 'Rwanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx-bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx-bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx-niveau';

$GLOBALS["lang"]['Rx Level'] = 'Rx-niveau';

$GLOBALS["lang"]['rx_power'] = 'Rx vermogen';

$GLOBALS["lang"]['Rx Power'] = 'Rx vermogen';

$GLOBALS["lang"]['rx_profile'] = 'Rx-profiel';

$GLOBALS["lang"]['Rx Profile'] = 'Rx-profiel';

$GLOBALS["lang"]['SELECT'] = 'SELECTIE';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM-versie';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Gegevens';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP-versie';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Geavanceerd)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL Creation Statements';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Sleutel';

$GLOBALS["lang"]['SW Revision'] = 'SW-herziening';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'Sint-Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kitts en Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Saint Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint-Pierre en Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Saint Vincent en de Grenadines';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San';

$GLOBALS["lang"]['San'] = 'San';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Sao Tomé en Principe';

$GLOBALS["lang"]['Saturday'] = 'Zaterdag';

$GLOBALS["lang"]['Saudi Arabia'] = 'Saudi-Arabië';

$GLOBALS["lang"]['Save as Default'] = 'Opslaan als standaard';

$GLOBALS["lang"]['scaling'] = 'Schalen';

$GLOBALS["lang"]['Scaling'] = 'Schalen';

$GLOBALS["lang"]['scan_options'] = 'Scanopties';

$GLOBALS["lang"]['Scan Options'] = 'Scanopties';

$GLOBALS["lang"]['Scan Options ID'] = 'Scanopties ID';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Scan het Nmap bovenste aantal TCP poorten.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Scan het Nmap bovenste aantal UDP-poorten.';

$GLOBALS["lang"]['schedule'] = 'Schema';

$GLOBALS["lang"]['Schedule'] = 'Schema';

$GLOBALS["lang"]['scope'] = 'Toepassingsgebied';

$GLOBALS["lang"]['Scope'] = 'Toepassingsgebied';

$GLOBALS["lang"]['script_timeout'] = 'Script Timeout';

$GLOBALS["lang"]['Script Timeout'] = 'Script Timeout';

$GLOBALS["lang"]['scripts'] = 'Scripts';

$GLOBALS["lang"]['Scripts'] = 'Scripts';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi Bus';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi Bus';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi logische eenheid';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi logische eenheid';

$GLOBALS["lang"]['scsi_port'] = 'Scsi-poort';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi-poort';

$GLOBALS["lang"]['Search'] = 'Zoeken';

$GLOBALS["lang"]['Search For a Device'] = 'Zoeken naar een apparaat';

$GLOBALS["lang"]['Search for Device'] = 'Apparaat zoeken';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Zoeken met behulp van gegevenstabellen';

$GLOBALS["lang"]['secondary'] = 'Secundair';

$GLOBALS["lang"]['Secondary'] = 'Secundair';

$GLOBALS["lang"]['Secondary Text'] = 'Secundaire tekst';

$GLOBALS["lang"]['section'] = 'Sectie';

$GLOBALS["lang"]['Section'] = 'Sectie';

$GLOBALS["lang"]['secure'] = 'Veilig';

$GLOBALS["lang"]['Secure'] = 'Veilig';

$GLOBALS["lang"]['Security Name'] = 'Beveiligingsnaam';

$GLOBALS["lang"]['Security Status'] = 'Beveiligingsstatus';

$GLOBALS["lang"]['security_zone'] = 'Veiligheidszone';

$GLOBALS["lang"]['Security Zone'] = 'Veiligheidszone';

$GLOBALS["lang"]['seed_ip'] = 'IP zaad';

$GLOBALS["lang"]['Seed IP'] = 'IP zaad';

$GLOBALS["lang"]['seed_ping'] = 'Zaadping';

$GLOBALS["lang"]['Seed Ping'] = 'Zaadping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Zaad beperken tot privé';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Zaad beperken tot privé';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Seed Restrikt to Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Seed Restrikt to Subnet';

$GLOBALS["lang"]['Select'] = 'Selecteren';

$GLOBALS["lang"]['Select All'] = 'Alles selecteren';

$GLOBALS["lang"]['select_external_attribute'] = 'Selecteer extern attribuut';

$GLOBALS["lang"]['Select External Attribute'] = 'Selecteer extern attribuut';

$GLOBALS["lang"]['select_external_count'] = 'Externe telling selecteren';

$GLOBALS["lang"]['Select External Count'] = 'Externe telling selecteren';

$GLOBALS["lang"]['select_external_type'] = 'Extern selecteren Type';

$GLOBALS["lang"]['Select External Type'] = 'Extern selecteren Type';

$GLOBALS["lang"]['select_external_value'] = 'Extern selecteren Waarde';

$GLOBALS["lang"]['Select External Value'] = 'Extern selecteren Waarde';

$GLOBALS["lang"]['select_internal_attribute'] = 'Interne attribuut selecteren';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Interne attribuut selecteren';

$GLOBALS["lang"]['select_internal_count'] = 'Interne telling selecteren';

$GLOBALS["lang"]['Select Internal Count'] = 'Interne telling selecteren';

$GLOBALS["lang"]['select_internal_type'] = 'Intern selecteren Type';

$GLOBALS["lang"]['Select Internal Type'] = 'Intern selecteren Type';

$GLOBALS["lang"]['select_internal_value'] = 'Intern selecteren Waarde';

$GLOBALS["lang"]['Select Internal Value'] = 'Intern selecteren Waarde';

$GLOBALS["lang"]['Select a Table'] = 'Selecteer een tabel';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Gevoeligheid';

$GLOBALS["lang"]['Sensitivity'] = 'Gevoeligheid';

$GLOBALS["lang"]['September'] = 'September';

$GLOBALS["lang"]['Serbia'] = 'Servië';

$GLOBALS["lang"]['serial'] = 'Serieel';

$GLOBALS["lang"]['Serial'] = 'Serieel';

$GLOBALS["lang"]['serial_imei'] = 'Serie Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Serie Imei';

$GLOBALS["lang"]['serial_sim'] = 'Seriële Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Seriële Sim';

$GLOBALS["lang"]['series'] = 'Serie';

$GLOBALS["lang"]['Series'] = 'Serie';

$GLOBALS["lang"]['server'] = 'Server';

$GLOBALS["lang"]['Server'] = 'Server';

$GLOBALS["lang"]['server_id'] = 'Server-ID';

$GLOBALS["lang"]['Server ID'] = 'Server-ID';

$GLOBALS["lang"]['Server Is'] = 'Server is';

$GLOBALS["lang"]['server_item'] = 'Server-item';

$GLOBALS["lang"]['Server Item'] = 'Server-item';

$GLOBALS["lang"]['Server Status'] = 'Serverstatus';

$GLOBALS["lang"]['Servers'] = 'Servers';

$GLOBALS["lang"]['service'] = 'Dienst';

$GLOBALS["lang"]['Service'] = 'Dienst';

$GLOBALS["lang"]['service_identifier'] = 'Dienstidentificatie';

$GLOBALS["lang"]['Service Identifier'] = 'Dienstidentificatie';

$GLOBALS["lang"]['service_level_a'] = 'Serviceniveau A';

$GLOBALS["lang"]['Service Level A'] = 'Serviceniveau A';

$GLOBALS["lang"]['service_level_b'] = 'Serviceniveau B';

$GLOBALS["lang"]['Service Level B'] = 'Serviceniveau B';

$GLOBALS["lang"]['service_network'] = 'Servicenetwerk';

$GLOBALS["lang"]['Service Network'] = 'Servicenetwerk';

$GLOBALS["lang"]['service_number'] = 'Dienstnummer';

$GLOBALS["lang"]['Service Number'] = 'Dienstnummer';

$GLOBALS["lang"]['service_pack'] = 'Service Pack';

$GLOBALS["lang"]['Service Pack'] = 'Service Pack';

$GLOBALS["lang"]['service_plan'] = 'Serviceplan';

$GLOBALS["lang"]['Service Plan'] = 'Serviceplan';

$GLOBALS["lang"]['service_provider'] = 'Dienstaanbieder';

$GLOBALS["lang"]['Service Provider'] = 'Dienstaanbieder';

$GLOBALS["lang"]['service_tag'] = 'Service-tag';

$GLOBALS["lang"]['Service Tag'] = 'Service-tag';

$GLOBALS["lang"]['service_type'] = 'Diensttype';

$GLOBALS["lang"]['Service Type'] = 'Diensttype';

$GLOBALS["lang"]['service_version'] = 'Serviceversie';

$GLOBALS["lang"]['Service Version'] = 'Serviceversie';

$GLOBALS["lang"]['Set'] = 'Instellen';

$GLOBALS["lang"]['set_by'] = 'Geselecteerd op';

$GLOBALS["lang"]['Set By'] = 'Geselecteerd op';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Stel de grootte (normaal of compact) in van de tabellen op de Lijstschermen.';

$GLOBALS["lang"]['severity'] = 'Severity';

$GLOBALS["lang"]['Severity'] = 'Severity';

$GLOBALS["lang"]['severity_text'] = 'Severity-tekst';

$GLOBALS["lang"]['Severity Text'] = 'Severity-tekst';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'De ernst wordt berekend uit de <code>base_score</code> En kan een van: Geen, Laag, Medium, Hoog, Kritisch.';

$GLOBALS["lang"]['Seychelles'] = 'Seychellen';

$GLOBALS["lang"]['share'] = 'Delen';

$GLOBALS["lang"]['Share'] = 'Delen';

$GLOBALS["lang"]['Share Name'] = 'Naam delen';

$GLOBALS["lang"]['shared'] = 'Delen';

$GLOBALS["lang"]['Shared'] = 'Delen';

$GLOBALS["lang"]['shared_name'] = 'Gedeelde naam';

$GLOBALS["lang"]['Shared Name'] = 'Gedeelde naam';

$GLOBALS["lang"]['shell'] = 'Shell';

$GLOBALS["lang"]['Shell'] = 'Shell';

$GLOBALS["lang"]['Ship Date'] = 'Vaartuigdatum';

$GLOBALS["lang"]['short'] = 'Kort';

$GLOBALS["lang"]['Short'] = 'Kort';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Moet ik alle niet-huidige gegevens van dit apparaat verwijderen?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Moet dit bestand (of patroon) worden gebruikt om te voorkomen dat bestanden worden gerapporteerd. Normaal gesproken, om bestanden te controleren, is dit ingesteld op <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Moet deze verkoper worden gebruikt bij het ophalen van kwetsbaarheden van FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Moeten we apparaten van de remote service toevoegen, lokaal.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Moeten we deze licentie toepassen op de geselecteerde Org en de Orgs kinderen?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Moeten we een gefilterde poort als een open poort beschouwen - en daarom dit IP als een apparaat gebruiken?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Moeten we een open gefilterde poort beschouwen als een open poort - en daarom dit IP als een apparaat hebben?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Moeten we deze groep ontmaskeren in de webinterface.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Moeten we deze query blootleggen in de lijst van rapporten onder het Rapport menu in de webinterface.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Moeten we deze query blootleggen in de lijst van rapporten onder het Rapporten menu in de webinterface.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Moeten we Open-Scap installeren op de doelmachine.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Moeten we overeenkomen met een apparaat gebaseerd mac adres, zelfs als het een bekende mogelijke duplicatie van VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op zijn DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Moeten we overeenkomen met een apparaat op basis van zijn DNS hostnaam.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op de UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op zijn Dbus ID.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op zijn fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op zijn hostnaam en UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op zijn hostnaam en dbus id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op zijn hostnaam en serieel.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op de ip als we een bestaand apparaat zonder gegevens.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op zijn ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Moeten we een apparaat vergelijken gebaseerd op zijn Mac adres.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op zijn serie en type.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op zijn serienummer.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op de SNMP sysNaam en seriële.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op de SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Moeten we overeenkomen met een apparaat gebaseerd op zijn hostnaam.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Moeten we het IP pingen voordat we het proberen te scannen? Als het niet reageert op de ping, sla dit apparaat over.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Moeten we het externe systeem bevolken vanaf onze lokale apparaten.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Moeten we een audit uitvoeren en indienen (j/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Moeten we testen op SNMP met behulp van UDP poort 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Moeten we testen op SSH met behulp van TCP poort 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Moeten we testen op WMI met behulp van TCP poort 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Moeten we de agent verwijderen (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Moeten we deze methode gebruiken om gebruikersgegevens te authenticeren. Instellen op <code>y</code> of <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Moeten we deze methode gebruiken om een gebruikersrol te bevolken. Het veld <code>use_auth</code> moet ingesteld worden op <code>y</code> Om dit te gebruiken. Instellen op <code>y</code> of <code>n</code>.';

$GLOBALS["lang"]['Show All'] = 'Alles tonen';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Zijbalk';

$GLOBALS["lang"]['Sidebar'] = 'Zijbalk';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapore';

$GLOBALS["lang"]['Site A'] = 'Site A';

$GLOBALS["lang"]['Site B'] = 'Site B';

$GLOBALS["lang"]['site_hours_a'] = 'Site Uren A';

$GLOBALS["lang"]['Site Hours A'] = 'Site Uren A';

$GLOBALS["lang"]['site_hours_b'] = 'Site Uren B';

$GLOBALS["lang"]['Site Hours B'] = 'Site Uren B';

$GLOBALS["lang"]['size'] = 'Grootte';

$GLOBALS["lang"]['Size'] = 'Grootte';

$GLOBALS["lang"]['slaves'] = 'Slaven';

$GLOBALS["lang"]['Slaves'] = 'Slaven';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slowakije (Slowakije)';

$GLOBALS["lang"]['Slovenia'] = 'Slovenië';

$GLOBALS["lang"]['Smart Status'] = 'Slimme status';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Stiekem';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp Enterprise naam';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp Enterprise naam';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Tijdslimiet';

$GLOBALS["lang"]['Snmp Timeout'] = 'Tijdslimiet';

$GLOBALS["lang"]['snmp_version'] = 'Snmpversie';

$GLOBALS["lang"]['Snmp Version'] = 'Snmpversie';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software gevonden laatste 7 dagen';

$GLOBALS["lang"]['Software Found Today'] = 'Software gevonden vandaag';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software gevonden gisteren';

$GLOBALS["lang"]['software_key'] = 'Softwaresleutel';

$GLOBALS["lang"]['Software Key'] = 'Softwaresleutel';

$GLOBALS["lang"]['software_name'] = 'Softwarenaam';

$GLOBALS["lang"]['Software Name'] = 'Softwarenaam';

$GLOBALS["lang"]['Software Policies'] = 'Softwarebeleid';

$GLOBALS["lang"]['software_revision'] = 'Software-revisie';

$GLOBALS["lang"]['Software Revision'] = 'Software-revisie';

$GLOBALS["lang"]['software_version'] = 'Softwareversie';

$GLOBALS["lang"]['Software Version'] = 'Softwareversie';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Salomonseilanden';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalië, Somalische Republiek';

$GLOBALS["lang"]['sound'] = 'Geluid';

$GLOBALS["lang"]['Sound'] = 'Geluid';

$GLOBALS["lang"]['source'] = 'Bron';

$GLOBALS["lang"]['Source'] = 'Bron';

$GLOBALS["lang"]['South Africa'] = 'Zuid-Afrika';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Zuid-Georgië en de Zuidelijke Sandwicheilanden';

$GLOBALS["lang"]['Spain'] = 'Spanje';

$GLOBALS["lang"]['Spanish'] = 'Spaans';

$GLOBALS["lang"]['Specific to Azure.'] = 'Specifiek voor Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Specifiek voor OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Specificeert een door komma\'s gescheiden lijst van doelwitten (geen spaties) die van de scan moeten worden uitgesloten. De lijst waarin u doorgeeft gebruikt een normale Nmap syntax, zodat het hostnamen, CIDR netblocks, octet ranges, enz. kan bevatten.';

$GLOBALS["lang"]['speed'] = 'Snelheid';

$GLOBALS["lang"]['Speed'] = 'Snelheid';

$GLOBALS["lang"]['speed_down_a'] = 'Snelheid omlaag A';

$GLOBALS["lang"]['Speed Down A'] = 'Snelheid omlaag A';

$GLOBALS["lang"]['speed_down_b'] = 'Snelheid omlaag B';

$GLOBALS["lang"]['Speed Down B'] = 'Snelheid omlaag B';

$GLOBALS["lang"]['speed_up_a'] = 'Snelheid A';

$GLOBALS["lang"]['Speed Up A'] = 'Snelheid A';

$GLOBALS["lang"]['speed_up_b'] = 'Snelheid B';

$GLOBALS["lang"]['Speed Up B'] = 'Snelheid B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh-poorten';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh-poorten';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stand-Alone'] = 'Stand-alone';

$GLOBALS["lang"]['Standard'] = 'Standaard';

$GLOBALS["lang"]['standard_id'] = 'Standaard ID';

$GLOBALS["lang"]['Standard ID'] = 'Standaard ID';

$GLOBALS["lang"]['standards'] = 'Normen';

$GLOBALS["lang"]['Standards'] = 'Normen';

$GLOBALS["lang"]['standards_policies'] = 'Standaardbeleid';

$GLOBALS["lang"]['Standards Policies'] = 'Standaardbeleid';

$GLOBALS["lang"]['standards_results'] = 'Resultaten van normen';

$GLOBALS["lang"]['Standards Results'] = 'Resultaten van normen';

$GLOBALS["lang"]['start_date'] = 'Begindatum';

$GLOBALS["lang"]['Start Date'] = 'Begindatum';

$GLOBALS["lang"]['start_mode'] = 'Beginmodus';

$GLOBALS["lang"]['Start Mode'] = 'Beginmodus';

$GLOBALS["lang"]['started_date'] = 'Begindatum';

$GLOBALS["lang"]['Started Date'] = 'Begindatum';

$GLOBALS["lang"]['state'] = 'Staat';

$GLOBALS["lang"]['State'] = 'Staat';

$GLOBALS["lang"]['Stats'] = 'Statistieken';

$GLOBALS["lang"]['status'] = 'Status';

$GLOBALS["lang"]['Status'] = 'Status';

$GLOBALS["lang"]['Storage'] = 'Opslag';

$GLOBALS["lang"]['storage_count'] = 'Aantal opslagruimtes';

$GLOBALS["lang"]['Storage Count'] = 'Aantal opslagruimtes';

$GLOBALS["lang"]['Storage-Area Network'] = 'Storage-Area Network';

$GLOBALS["lang"]['string'] = 'Tekenreeks';

$GLOBALS["lang"]['String'] = 'Tekenreeks';

$GLOBALS["lang"]['sub_resource_id'] = 'Subbron-ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'Subbron-ID';

$GLOBALS["lang"]['sub_type'] = 'Subtype';

$GLOBALS["lang"]['Sub Type'] = 'Subtype';

$GLOBALS["lang"]['subject_key_ident'] = 'Onderwerp Sleutel Identiteit';

$GLOBALS["lang"]['Subject Key Ident'] = 'Onderwerp Sleutel Identiteit';

$GLOBALS["lang"]['Submit'] = 'Verzenden';

$GLOBALS["lang"]['Submitted From'] = 'Ingediend van';

$GLOBALS["lang"]['subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subscription ID'] = 'Abonnement ID';

$GLOBALS["lang"]['suburb'] = 'Voorstad';

$GLOBALS["lang"]['Suburb'] = 'Voorstad';

$GLOBALS["lang"]['Success'] = 'Succes';

$GLOBALS["lang"]['Sudan'] = 'Soedan';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo-wachtwoord';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo-wachtwoord (facultatief)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Samenvattingen';

$GLOBALS["lang"]['Summaries'] = 'Samenvattingen';

$GLOBALS["lang"]['Summary'] = 'Samenvatting';

$GLOBALS["lang"]['Sunday'] = 'Zondag';

$GLOBALS["lang"]['supplier'] = 'Fabrikant';

$GLOBALS["lang"]['Supplier'] = 'Fabrikant';

$GLOBALS["lang"]['Support'] = 'Steun';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Ondersteunde types zijn <code>subnet</code>, <code>seed</code> en <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayeneilanden';

$GLOBALS["lang"]['Swaziland'] = 'Swaziland';

$GLOBALS["lang"]['Sweden'] = 'Zweden';

$GLOBALS["lang"]['switch_device_id'] = 'Switch Apparaat-ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Switch Apparaat-ID';

$GLOBALS["lang"]['switch_port'] = 'Switch poort';

$GLOBALS["lang"]['Switch Port'] = 'Switch poort';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Zwitserland, Zwitserse Bondsstaat';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Syrië';

$GLOBALS["lang"]['sysContact'] = 'SysContact';

$GLOBALS["lang"]['SysContact'] = 'SysContact';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'SysLocatie';

$GLOBALS["lang"]['SysLocation'] = 'SysLocatie';

$GLOBALS["lang"]['sysName'] = 'SysName';

$GLOBALS["lang"]['SysName'] = 'SysName';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['SysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['system_component'] = 'Systeemcomponent';

$GLOBALS["lang"]['System Component'] = 'Systeemcomponent';

$GLOBALS["lang"]['System-Area Network'] = 'System-Area Network';

$GLOBALS["lang"]['TX Bitrate'] = 'TX-bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX-niveau';

$GLOBALS["lang"]['TX Power'] = 'TX-vermogen';

$GLOBALS["lang"]['TX Profile'] = 'TX-profiel';

$GLOBALS["lang"]['table'] = 'Tabel';

$GLOBALS["lang"]['Table'] = 'Tabel';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Label 1';

$GLOBALS["lang"]['Tag 1'] = 'Label 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Label 3';

$GLOBALS["lang"]['Tag 3'] = 'Label 3';

$GLOBALS["lang"]['tags'] = 'Tags';

$GLOBALS["lang"]['Tags'] = 'Tags';

$GLOBALS["lang"]['Tags :: '] = 'Tags: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tadzjikistan';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['task'] = 'Taak';

$GLOBALS["lang"]['Task'] = 'Taak';

$GLOBALS["lang"]['tasks'] = 'Taken';

$GLOBALS["lang"]['Tasks'] = 'Taken';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp-poorten';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp-poorten';

$GLOBALS["lang"]['tenant'] = 'Huurder';

$GLOBALS["lang"]['Tenant'] = 'Huurder';

$GLOBALS["lang"]['ternary'] = 'Ternair';

$GLOBALS["lang"]['Ternary'] = 'Ternair';

$GLOBALS["lang"]['Test 1'] = 'Test 1';

$GLOBALS["lang"]['Test 2'] = 'Test 2';

$GLOBALS["lang"]['Test 3'] = 'Test 3';

$GLOBALS["lang"]['test_minutes'] = 'Testminuten';

$GLOBALS["lang"]['Test Minutes'] = 'Testminuten';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Testsubnet';

$GLOBALS["lang"]['Test Subnet'] = 'Testsubnet';

$GLOBALS["lang"]['tests'] = 'Tests';

$GLOBALS["lang"]['Tests'] = 'Tests';

$GLOBALS["lang"]['Text'] = 'Tekst';

$GLOBALS["lang"]['Thailand'] = 'Thailand';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Het Active Directory domein om een lijst van subnets op te halen.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'De Active Directory server om een lijst van subnets op te halen.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'De Automatable metriek vangt het antwoord op de vraag <strong>Kan een aanvaller exploitatie gebeurtenissen automatiseren voor deze kwetsbaarheid over meerdere doelen?</strong> gebaseerd op stappen 1-4 van de kill chain. Deze stappen zijn verkenning, bewapening, levering en exploitatie (niet bepaald, Nee, Ja).';

$GLOBALS["lang"]['The CVE identifier.'] = 'De CVE-identificatiecode.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'De Cloud die dit item bezit. Links naar <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'De groep gebruikte de basislijn. Links naar <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'De ID van de apparatentabel (de apparaten.name wordt weergegeven) van de NTU aan dit einde van de verbinding. Links naar <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'De ID van het geïmporteerde benchmarkbeleid.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'Het ID van de locatietabel (de locatie.name wordt weergegeven) van dit einde van de verbinding. Links naar <code>locations.id</code>. De A locatie is meestal de <code>FROM</code> locatie.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'Het ID van de locatietabel (de locatie.name wordt weergegeven) van dit einde van de verbinding. Links naar <code>locations.id</code>. De B-locatie is meestal de <code>TO</code> locatie.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'De identificatie van het bijbehorende apparaat (indien aanwezig). Links naar <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Het ID van de bijbehorende ontdekking. Verbonden aan <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'De ID van het item van het bijbehorende type.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Het ID van deze orgs ouder org. Verbonden aan <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Het door de aanbieder verstrekte ID.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Het ID kwam van een Cloud ontdekking.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'Het IP-adres van deze verzamelaar gebruikt om te communiceren met de server.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'De IP van het apparaat om een zaad ontdekking met te beginnen.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'Het IP van de externe interface.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'Het IP van de interne interface.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'De ISP of Telco leveren deze link.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Het JSON record van Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Het JSON-record van de NVD-feed.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'De LDAP OU van deze gebruiker (als LDAP wordt gebruikt).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'De Locatie die dit netwerk bevat. Links naar <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'De NVD toegewezen basisstatus.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'De Nmap timing vooraf ingesteld.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Het besturingssysteem waartegen dit pakket moet worden gerapporteerd. Blank voor iedereen. Gebruik het percentage teken % als een wildcard. Wordt getest tegen os_group, os_family en os_name in die volgorde.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'De Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'De Open-AudIT id van de gekoppelde cloud. Links naar <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'De Open Aud IT-servercode werd gebruikt in dit bestand.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'De Open Aud IT-servercode werd gebruikt binnen deze functie.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'De organisatie die eigenaar is van dit item. Links naar <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'De procesidentificatie van de lopende bijbehorende ontdekking.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'De RU positon van de bovenkant van dit apparaat.';

$GLOBALS["lang"]['The SNMP community string.'] = 'De SNMP community string.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'De SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Het SNMP v3 Authenticatie Protocol.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'De SNMP v3 Privacy Wachtwoordzin.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Het SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Het SNMP v3 beveiligingsniveau.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'De SNMP v3 Beveiligingsnaam.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'De SNMPv3 context Engine ID (facultatief).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'De SNMPv3 contextnaam (facultatief).';

$GLOBALS["lang"]['The URL of the external system.'] = 'De URL van het externe systeem.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'De URL van uw Open-AudIT Server waaraan deze Verzamelaar zal rapporteren (geen trailing slash).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'De URL waar de auditscripts hun resultaat moeten indienen.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'De werkelijke volledige naam van deze gebruiker.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'De geassocieerde uitgangswaarde. Links naar <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'De bijbehorende ontdekking (indien vereist). Links naar <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Het te testen kenmerk (van <code>devices</code> tabel).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Het te testen attribuut (moet overeenkomen met een externe veldnaam van hieronder).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Het auditscript waarop je je maatwerk baseert.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Het basispad om gebruikers te zoeken.';

$GLOBALS["lang"]['The benchmark type.'] = 'Het benchmarktype.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Het gebouw waar het rek zich bevindt.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Het berekende aantal apparaten dat extern moet worden aangemaakt.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Het berekende aantal apparaten dat in Open-AudIT moet worden aangemaakt.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'De verzamelaars interne IP gebruikt bij het uitvoeren van een ontdekking.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'De kolomnaam uit de buitenlandse tabel. Moet een van: klasse, omgeving, status, type of menu_categorie zijn.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Het commando uitgevoerd op het doel apparaat of Open-AudIT server code uitgevoerd tijdens ontdekking.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'De configuratie van uw cluster kan zijn: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> of leeg.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Het ID wachtwoord. Als de referenties zijn een SSH Key, dit is het wachtwoord gebruikt om de sleutel te ontgrendelen en is optioneel.';

$GLOBALS["lang"]['The credentials username.'] = 'De gebruikersnaam van de referenties.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'De huidige status van de Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'De huidige status van de ontdekking.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Het dashboard dat standaard voor deze gebruiker wordt getoond. Links naar <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'De database versie en web versie zijn inconsistent.';

$GLOBALS["lang"]['The date of license expiration.'] = 'De datum van het verstrijken van de vergunning.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'De datum waarop de software door de fabrikant wordt stopgezet. Meestal vervangen door een nieuwere versie. Onderhoud kan nog steeds beschikbaar zijn.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'De datum waarop de software geen updates meer ontvangt en effectief volledig wordt stopgezet. Het onderhoud wordt gestaakt.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'De datum waarop dit item is gewijzigd of toegevoegd (alleen lezen). OPMERKING - Dit is het tijdstempel van de server.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'De datum/tijd waarop dit resultaat werd aangemaakt.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'De dag van de maand waarop deze taak moet worden uitgevoerd (* voor elke dag).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'De dag van de week waarop deze taak moet worden uitgevoerd (* voor elke dag).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'De standaardtaal toegewezen aan elke gebruiker die met deze methode is gemaakt.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Het apparaat moet reageren op een Nmap ping voordat het wordt beschouwd als online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Het apparaat binnen Open-AudIT. Links naar <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'De directe link voor het script is';

$GLOBALS["lang"]['The email address of the reciever'] = 'Het e-mailadres van de reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'De enterprise binary van FirstWave is vereist voor een licentie. Download Open-AudIT van';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'De gehele geassocieerde baseline is dit resultaat van.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Het extern referentielocatie-ID. Meestal bevolkt door Cloud audits.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'De eerste keer dat Open-AudIT details van dit apparaat ophaalde.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'De vloer waarop het rek zich bevindt.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'De buitenlandse tabel ter referentie. Moet een van: apparaten, locaties, orgs of vragen.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Het formaat dat gebruikt wordt voor de uitvoer die gemaild moet worden.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'De volledig gekwalificeerde kolom waarop te groeperen door. OPMERKING: Wanneer type = verkeer, dit vertegenwoordigt de rode query id.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'De volledig gekwalificeerde tabel.kolom. Meerdere kunnen worden verstrekt, gescheiden door een komma (geen spaties).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'De gegenereerde SQL query om deze kwetsbaarheid te testen. Dit veld kan worden bewerkt om de query te corrigeren zoals vereist.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'De groep apparaten waarop de uitgangswaarde werd vergeleken.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'De groep die een lijst geeft van apparaten voor de integratie. Links naar <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Het uur van de dag waarop deze taak uitgevoerd moet worden.';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Het ID van het gekoppelde apparaat. Links naar <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'De identificatiekolom (integer) in de database (alleen lezen).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Het belang van deze baseline (nog niet gebruikt).';

$GLOBALS["lang"]['The integer of severity.'] = 'Het geheel van ernst.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Het IP adres van de Auth methode.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'De taal om de webinterface te vertalen naar de gebruiker.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'De laatste datum en tijd dat dit item werd uitgevoerd (alleen lezen).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'De laatste keer dat Open-AudIT details van dit apparaat ophaalde.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'De laatste keer dat deze benchmarks werden uitgevoerd.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'De laatste keer dat deze integratie werd uitgevoerd.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Het regelnummer dat door de provider aan de lijn aan dit einde van de verbinding wordt toegekend.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'De locatie waar het rek zich bevindt. Links naar <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Het adres van de locatie.';

$GLOBALS["lang"]['The locations area.'] = 'De locatie.';

$GLOBALS["lang"]['The locations city.'] = 'De locaties stad.';

$GLOBALS["lang"]['The locations country.'] = 'Het land van de locaties.';

$GLOBALS["lang"]['The locations district.'] = 'De locatie district.';

$GLOBALS["lang"]['The locations latitude.'] = 'De locaties breedtegraad.';

$GLOBALS["lang"]['The locations level.'] = 'Het niveau van de locaties.';

$GLOBALS["lang"]['The locations longitude.'] = 'De lengtegraden.';

$GLOBALS["lang"]['The locations phone.'] = 'De locatie telefoon.';

$GLOBALS["lang"]['The locations postcode.'] = 'De postcode van de locaties.';

$GLOBALS["lang"]['The locations region.'] = 'De locatie regio.';

$GLOBALS["lang"]['The locations room.'] = 'De locatieruimte.';

$GLOBALS["lang"]['The locations state.'] = 'De locatie staat.';

$GLOBALS["lang"]['The locations suburb.'] = 'De locaties buitenwijk.';

$GLOBALS["lang"]['The locations suite.'] = 'De locaties suite.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Het maximale fysieke gewicht (in KGs) dat dit rek kan houden.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'De maximale totale BTU\'s waarvoor dit rek is beoordeeld.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'De minuut van het uur waarop deze taak moet worden uitgevoerd (* voor elke minuut).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'De maand waarin deze taak moet worden uitgevoerd (* voor elke maand).';

$GLOBALS["lang"]['The name given to this item.'] = 'De naam die aan dit item is gegeven.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'De naam die aan dit item is gegeven. Idealiter zou het uniek moeten zijn.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'De naam die aan deze gebruiker is gegeven (gebruikt om in te loggen). Idealiter zou het uniek moeten zijn.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'De naam van de bijbehorende cloud (indien vereist).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'De naam van het softwarepakket, zoals gecontroleerd door Open-AudIT. Gebruik het percentage teken % als een wildcard.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'De naam van de gebruiker die dit item voor het laatst heeft gewijzigd of toegevoegd (alleen lezen).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'De door de aanbieder opgegeven naam.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Het netwerk in het formaat 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Het netwerk subnet om de ontdekking uit te voeren.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Het aantal spoorwegondernemingen dat dit apparaat bezet.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Het aantal bijbehorende locaties. Links naar <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Het aantal aangesloten netwerken. Links naar <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Het aantal gecontroleerde apparaten in deze cloud. Links naar <code>devices.cloud_id</code> en <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Het aantal kritieke ernst kwetsbaarheden in handen van FirstWave (niet in uw database).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Het aantal apparaten gevonden door deze ontdekking.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Het aantal apparaten in de geassocieerde groep.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Het aantal apparaten in deze cloud met een staat van draaien. Links naar <code>devices.cloud_id</code> en <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Het aantal apparaten in deze cloud met een staat van stilstand. Links naar <code>devices.cloud_id</code> en <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Het aantal apparaten in deze cloud. Links naar <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Het aantal apparaten waarop deze benchmark zal worden uitgevoerd. Afgeleid uit <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Het aantal apparaten om deze ontdekking te beperken.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Het aantal ernstige kwetsbaarheden van FirstWave (niet in uw database).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Het aantal zwakke plekken van FirstWave (niet in uw database).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Het aantal zwakheden van FirstWave (niet in uw database).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Het aantal gekochte licenties.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Het aantal seconden om te proberen te communiceren met het doel IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Het aantal kwetsbaarheden zonder een strengheid van FirstWave (niet in uw database).';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'De optionele tweede kolom. OPMERKING: Wanneer type = verkeer, dit staat voor de gele query id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'De optionele derde kolom. OPMERKING: Wanneer type = verkeer, dit de groene query id.';

$GLOBALS["lang"]['The orientation of this device.'] = 'De oriëntatie van dit apparaat.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Het wachtwoord voor het dn_account-attribuut.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Het wachtwoord gebruikt om toegang te krijgen tot het externe systeem.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Het pad naar het bestand of de map.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Het pad naar het bestand of de map. Mappen moeten eindigen met een achterwaartse slash.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'De fysieke diepte (in CMs) van het rek.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'De fysieke hoogte (in CMs) van het rek.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Het fysieke gewicht (in KGs) van het rek momenteel.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Het fysieke gewicht (in KGs) van het rek wanneer leeg.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'De fysieke breedte (in CMs) van het rek.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'De capsule (indien aanwezig) waar dit rek deel van uitmaakt.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Het stroomcircuit waar dit rek aan vastzit.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'De primaire databasetabel waarop dit widget kan worden gebaseerd.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'De procesidentificatie van dit wachtrij-item.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Het proces dat het laatst werd gebruikt om details over het apparaat op te halen';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'De query die een lijst geeft van apparaten voor de integratie. Links naar <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Het aanwinstnummer.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Het rek activa label.';

$GLOBALS["lang"]['The rack bar code.'] = 'De rack bar code.';

$GLOBALS["lang"]['The rack model.'] = 'Het rekmodel.';

$GLOBALS["lang"]['The rack serial.'] = 'Het rek serieel.';

$GLOBALS["lang"]['The rack series.'] = 'De rack serie.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Het rek waar dit apparaat in zit. Links naar <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Het aanbevolen proces van het aanpakken en vaststellen van geïdentificeerde beveiligingskwetsbaarheden. Dit betekent meestal het toepassen van patches, updates, of andere maatregelen om het risico van de kwetsbaarheden te elimineren.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'De reguliere domeinnotatie van uw directory. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'Het resultaat van het bevel.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'De kamer waar het rek zich bevindt.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'De rij waarin het rek zich bevindt.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'De geheime sleutel gebruikt in combinatie met uw AWS EC2 API sleutel.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'De einddatum van de software.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'De software einde van de levensduur.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'De specifieke kolom van de database uit de gespecificeerde databasetabel.';

$GLOBALS["lang"]['The specific database table.'] = 'De specifieke databasetabel.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'De standaard Nmap timing opties. Meestal gebruiken we -T4 (Agressieve) omdat dit wordt aanbevolen voor een fatsoenlijke breedband- of ethernetverbinding.';

$GLOBALS["lang"]['The status of this integration'] = 'De status van deze integratie';

$GLOBALS["lang"]['The status of this queued item.'] = 'De status van dit item in de wachtrij.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Het doel IP dit log item referers naar (indien aanwezig).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'De template voor de link die per resultaatregel moet worden gegenereerd.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'De tekst voor de onderkant van de grafiek in een lijndiagram (alleen).';

$GLOBALS["lang"]['The text that is displayed.'] = 'De tekst die wordt weergegeven.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Het tijdstempel waarna deze taak moet worden uitgevoerd. Bijvoorbeeld, start een taak na 1 juni 2017 om 10 uur, zet deze op <code>2017-06-01 09:59:00</code>. Deze waarde moet nul zijn (d.w.z. 09, niet 9). Deze waarde is standaard <code>2000-01-01 00:00:00</code> wat betekent dat standaard, een geplande taak zal draaien op de volgende geplande uitvoeringstijd.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'De top 10, 100 of 1000 (of geen) TCP-poorten worden vaak gebruikt volgens Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'De top 10, 100 of 1000 (of geen) UDP-poorten worden vaak gebruikt volgens Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'De totale BTU output van dit rek.';

$GLOBALS["lang"]['The type of device.'] = 'Het type apparaat.';

$GLOBALS["lang"]['The type of organisation.'] = 'Het type organisatie.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Het type rack (compute, power, network, etc).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Het soort taak dat uitgevoerd moet worden. Een van: baseline, benchmark, cloud ontdekking, ontdekking, integratie, rapport, query.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Het type integratie (meestal genoemd naar het externe systeem).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'De unieke identificatie van deze server.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Het gebruikersaccount dat deze collector gebruikt. Links naar <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'De gebruikersnaam die wordt gebruikt om toegang te krijgen tot het externe systeem.';

$GLOBALS["lang"]['The users email address.'] = 'Het gebruikers e-mailadres.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'De gebruikelijke werkuren op deze site.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'De waarde die aan het item is toegekend.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'De waarde die wordt opgeslagen voor dit specifieke item.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'De verkoopnaam volgens CPE-vermeldingen.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'De verkoper van de CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'De web directory op de host die Open-AudIT is geïnstalleerd (vereist een trailing slash).';

$GLOBALS["lang"]['The widget at position '] = 'Het widget op positie ';

$GLOBALS["lang"]['The width of this device.'] = 'De breedte van dit apparaat.';

$GLOBALS["lang"]['Then'] = 'Daarna';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Deze CVE zal worden opgehaald en de bestaande CVE overschrijven als het bestaat.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Dit attribuut wordt opgeslagen als een JSON-object. Het is de lijst van alle collecties en bevat de verzamelnaam samen met <code>c</code>, <code>r</code>, <code>u</code> en,of <code>d</code> die het maken, lezen, bijwerken en verwijderen vertegenwoordigen. Dit zijn de acties die een gebruiker kan uitvoeren op items uit die specifieke collectie.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Dit kan ofwel een varchar (een tekstveld), een lijst (een lijst van waarden die kunnen worden geselecteerd) of een datum zijn.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Deze verzamelaars universeel unieke identificatiecode.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Deze beschrijving is auto-bevolkt en moet idealiter worden gelaten als-is.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Deze functie vereist een Professional of een Enterprise licentie.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Dit is meestal de primaire kolom, tenzij anders geconfigureerd. OPMERKING: Wanneer het type = verkeer, dit vertegenwoordigt de secundaire tekst.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Dit item moet overeenkomen met de waarde van het geselecteerde attribuut of bevat de ID van de te gebruiken query.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Dit item moet overeenkomen met de waarde van het geselecteerde kenmerk.';

$GLOBALS["lang"]['This license expires on'] = 'Deze licentie vervalt op';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Dit moet worden ingesteld op 1 of de hoogte van het rek.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Dit zal automatisch populair worden.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Dit zal de ontdekkingsscan aanzienlijk vertragen.';

$GLOBALS["lang"]['Thursday'] = 'donderdag';

$GLOBALS["lang"]['time_caption'] = 'Tijdtitel';

$GLOBALS["lang"]['Time Caption'] = 'Tijdtitel';

$GLOBALS["lang"]['time_daylight'] = 'Tijd daglicht';

$GLOBALS["lang"]['Time Daylight'] = 'Tijd daglicht';

$GLOBALS["lang"]['Time to Execute'] = 'Tijd om uit te voeren';

$GLOBALS["lang"]['timeout'] = 'Tijdslimiet';

$GLOBALS["lang"]['Timeout'] = 'Tijdslimiet';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Tijdslimiet per doelstelling (seconden)';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Tijdstempel';

$GLOBALS["lang"]['timing'] = 'Tijdschema';

$GLOBALS["lang"]['Timing'] = 'Tijdschema';

$GLOBALS["lang"]['Timor-Leste'] = 'Oost-Timor';

$GLOBALS["lang"]['Title'] = 'Titel';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Werkbalkstijl';

$GLOBALS["lang"]['Toolbar Style'] = 'Werkbalkstijl';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top-Nmap TCP-poorten';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top-Nmap UDP-poorten';

$GLOBALS["lang"]['Traditional Chinese'] = 'Traditioneel Chinees';

$GLOBALS["lang"]['Traffic Light'] = 'Verkeerslicht';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad en Tobago';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Problemen oplossen LDAP-aanmeldingen';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Probeer alle nieuwste functies met een GRATIS 100 apparaat licentie van Open-Audit Enterprise. Lees de <a href=\"';

$GLOBALS["lang"]['Tuesday'] = 'Dinsdag';

$GLOBALS["lang"]['Tunisia'] = 'Tunesië';

$GLOBALS["lang"]['Turkey'] = 'Turkije';

$GLOBALS["lang"]['Turkmenistan'] = 'Turks';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Turks- en Caicoseilanden';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx-bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx-bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx-niveau';

$GLOBALS["lang"]['Tx Level'] = 'Tx-niveau';

$GLOBALS["lang"]['tx_power'] = 'Tx-vermogen';

$GLOBALS["lang"]['Tx Power'] = 'Tx-vermogen';

$GLOBALS["lang"]['tx_profile'] = 'Tx-profiel';

$GLOBALS["lang"]['Tx Profile'] = 'Tx-profiel';

$GLOBALS["lang"]['type'] = 'Type';

$GLOBALS["lang"]['Type'] = 'Type';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp-poorten';

$GLOBALS["lang"]['Udp Ports'] = 'Udp-poorten';

$GLOBALS["lang"]['Uganda'] = 'Oeganda';

$GLOBALS["lang"]['Ukraine'] = 'Oekraïne';

$GLOBALS["lang"]['uninstall'] = 'Verwijderen';

$GLOBALS["lang"]['Uninstall'] = 'Verwijderen';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Verwijder de agent';

$GLOBALS["lang"]['United Arab Emirates'] = 'Verenigde Arabische Emiraten';

$GLOBALS["lang"]['United Kingdom'] = 'Verenigd Koninkrijk';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Verenigde Staten Kleine afgelegen eilanden';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Amerikaanse Maagdeneilanden';

$GLOBALS["lang"]['United States of America'] = 'Verenigde Staten';

$GLOBALS["lang"]['Unknown'] = 'Onbekend';

$GLOBALS["lang"]['unlock_pin'] = 'Pin ontgrendelen';

$GLOBALS["lang"]['Unlock Pin'] = 'Pin ontgrendelen';

$GLOBALS["lang"]['Unscheduled'] = 'Ongepland';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Niet gebruikt op 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Ongebruikt.';

$GLOBALS["lang"]['Update'] = 'Bijwerken';

$GLOBALS["lang"]['update_external_count'] = 'Extern aantal bijwerken';

$GLOBALS["lang"]['Update External Count'] = 'Extern aantal bijwerken';

$GLOBALS["lang"]['update_external_from_internal'] = 'Externe update vanuit intern';

$GLOBALS["lang"]['Update External From Internal'] = 'Externe update vanuit intern';

$GLOBALS["lang"]['update_internal_count'] = 'Intern aantal bijwerken';

$GLOBALS["lang"]['Update Internal Count'] = 'Intern aantal bijwerken';

$GLOBALS["lang"]['update_internal_from_external'] = 'Intern bijwerken vanuit extern';

$GLOBALS["lang"]['Update Internal From External'] = 'Intern bijwerken vanuit extern';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'NMIS-apparaten van Open-AudIT bijwerken';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Open-AudIT bijwerken Apparaten van ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Open-AudIT bijwerken Apparaten van NMIS';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Bijgewerkt elke keer dat ontdekking is uitgevoerd met IPs gedetecteerd om te reageren.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Bijgewerkt elke keer dat ontdekking is uitgevoerd met IP\'s die zijn gescand door Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Bijgewerkt elke keer dat ontdekking is uitgevoerd met apparaten die we konden controleren.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Bijgewerkt elke keer dat ontdekking is uitgevoerd met apparaten die we konden vragen.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Bijgewerkt elke keer dat ontdekking is uitgevoerd.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Bijgewerkt elke keer als de ontdekking is uitgevoerd.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Bijgewerkt elke keer dat de ontdekking is voltooid uitvoering.';

$GLOBALS["lang"]['Updating'] = 'Bijwerken';

$GLOBALS["lang"]['Upgrade'] = 'Upgrade';

$GLOBALS["lang"]['Upload an audit result file'] = 'Een audit resultaatbestand uploaden';

$GLOBALS["lang"]['Upper Case'] = 'Hoofdletter';

$GLOBALS["lang"]['uptime'] = 'Uptime';

$GLOBALS["lang"]['Uptime'] = 'Uptime';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, Republiek ten oosten van';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Gebruik';

$GLOBALS["lang"]['Use'] = 'Gebruik';

$GLOBALS["lang"]['use_authentication'] = 'Aanmeldingscontrole gebruiken';

$GLOBALS["lang"]['Use Authentication'] = 'Aanmeldingscontrole gebruiken';

$GLOBALS["lang"]['use_authorisation'] = 'Gebruiksvergunning';

$GLOBALS["lang"]['Use Authorisation'] = 'Gebruiksvergunning';

$GLOBALS["lang"]['Use SNMP'] = 'SNMP gebruiken';

$GLOBALS["lang"]['Use SSH'] = 'Gebruik SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Veilig gebruiken (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Detectie van de Serviceversie gebruiken';

$GLOBALS["lang"]['Use WMI'] = 'WMI gebruiken';

$GLOBALS["lang"]['Use for Authentication'] = 'Gebruik voor aanmeldingscontrole';

$GLOBALS["lang"]['Use for Roles'] = 'Gebruik voor rollen';

$GLOBALS["lang"]['used'] = 'Gebruikt';

$GLOBALS["lang"]['Used'] = 'Gebruikt';

$GLOBALS["lang"]['used_count'] = 'Aantal gebruikte exemplaren';

$GLOBALS["lang"]['Used Count'] = 'Aantal gebruikte exemplaren';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Alleen door OpenLDAP gebruikt.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Intern gebruikt bij het ontdekken van een enkel apparaat.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Intern gebruikt bij het ontdekken van een enkel apparaat. Links naar <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Gebruikt wanneer LDAP-servers zijn geconfigureerd om een gebruikersdetails te vullen - dit omvat de Orgs waartoe ze toegang hebben. Als een gebruiker in deze LDAP-groep zit, worden ze deze org toegewezen.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Gebruikt wanneer LDAP-servers zijn geconfigureerd om een gebruikersdetails te vullen - dit omvat de Roles die ze worden toegewezen. Als een gebruiker in deze LDAP-groep zit, krijgen ze deze rol toegewezen.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Gebruikt bij het zoeken naar OpenLDAP om een gebruikers uid aan een groepsleden te koppelen. Standaard van <code>memberUid</code>. Alleen door OpenLDAP gebruikt.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Gebruikt met integraties en FirstWave monitoring toepassingen.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Gebruikt met integraties en FirstWave monitoring toepassingen. Stel in op y als het werken van SNMP gedetecteerd door ontdekking.';

$GLOBALS["lang"]['user'] = 'Gebruiker';

$GLOBALS["lang"]['User'] = 'Gebruiker';

$GLOBALS["lang"]['User DN'] = 'Gebruiker-DN';

$GLOBALS["lang"]['user_group'] = 'Gebruikersgroep';

$GLOBALS["lang"]['User Group'] = 'Gebruikersgroep';

$GLOBALS["lang"]['user_id'] = 'Gebruikers-ID';

$GLOBALS["lang"]['User ID'] = 'Gebruikers-ID';

$GLOBALS["lang"]['user_interaction'] = 'Gebruikersinteractie';

$GLOBALS["lang"]['User Interaction'] = 'Gebruikersinteractie';

$GLOBALS["lang"]['User Membership Attribute'] = 'Attribuut gebruikerslidmaatschap';

$GLOBALS["lang"]['user_name'] = 'Gebruikersnaam';

$GLOBALS["lang"]['User Name'] = 'Gebruikersnaam';

$GLOBALS["lang"]['User Policies'] = 'Gebruikersbeleid';

$GLOBALS["lang"]['Username'] = 'Gebruikersnaam';

$GLOBALS["lang"]['username'] = 'Gebruikersnaam';

$GLOBALS["lang"]['users'] = 'Gebruikers';

$GLOBALS["lang"]['Users'] = 'Gebruikers';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Gebruikers, rollen en orgs';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Entra gebruiken voor Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Gebruik van OKTA voor Auth';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Meestal Mb/s, vanaf locatie A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Meestal Mb/s, vanaf locatie B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Meestal Mb/s, naar locatie A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Meestal Mb/s, naar locatie B.';

$GLOBALS["lang"]['Uzbekistan'] = 'Oezbekistan';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

$GLOBALS["lang"]['valid_from'] = 'Geldig van';

$GLOBALS["lang"]['Valid From'] = 'Geldig van';

$GLOBALS["lang"]['valid_from_raw'] = 'Geldig van ruw';

$GLOBALS["lang"]['Valid From Raw'] = 'Geldig van ruw';

$GLOBALS["lang"]['valid_to'] = 'Geldig naar';

$GLOBALS["lang"]['Valid To'] = 'Geldig naar';

$GLOBALS["lang"]['valid_to_raw'] = 'Geldig voor ruw';

$GLOBALS["lang"]['Valid To Raw'] = 'Geldig voor ruw';

$GLOBALS["lang"]['Valid Values'] = 'Geldige waarden';

$GLOBALS["lang"]['value'] = 'Waarde';

$GLOBALS["lang"]['Value'] = 'Waarde';

$GLOBALS["lang"]['values'] = 'Waarden';

$GLOBALS["lang"]['Values'] = 'Waarden';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variabele';

$GLOBALS["lang"]['Variable'] = 'Variabele';

$GLOBALS["lang"]['vendor'] = 'Verkoper';

$GLOBALS["lang"]['Vendor'] = 'Verkoper';

$GLOBALS["lang"]['vendors'] = 'Verkopers';

$GLOBALS["lang"]['Vendors'] = 'Verkopers';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Versie';

$GLOBALS["lang"]['Version'] = 'Versie';

$GLOBALS["lang"]['version_padded'] = 'Versie gewatteerde';

$GLOBALS["lang"]['Version Padded'] = 'Versie gewatteerde';

$GLOBALS["lang"]['version_raw'] = 'Raw versie';

$GLOBALS["lang"]['Version Raw'] = 'Raw versie';

$GLOBALS["lang"]['version_string'] = 'Versietekenreeks';

$GLOBALS["lang"]['Version String'] = 'Versietekenreeks';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['View'] = 'Beeld';

$GLOBALS["lang"]['View All'] = 'Alles tonen';

$GLOBALS["lang"]['View Details'] = 'Details bekijken';

$GLOBALS["lang"]['View Device'] = 'Beeldapparaat';

$GLOBALS["lang"]['View Discovery'] = 'Bekijken Ontdekking';

$GLOBALS["lang"]['View Policy'] = 'Beleid bekijken';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtueel privénetwerk';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualisatie';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Bezoek ons YouTube kanaal voor instructievideo\'s.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Vm-apparaat-ID';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm-apparaat-ID';

$GLOBALS["lang"]['vm_group'] = 'Vm-groep';

$GLOBALS["lang"]['Vm Group'] = 'Vm-groep';

$GLOBALS["lang"]['vm_ident'] = 'Vm Identiteit';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Identiteit';

$GLOBALS["lang"]['vm_server_name'] = 'Vm-servernaam';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm-servernaam';

$GLOBALS["lang"]['vm_vendor'] = 'Vm leverancier';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm leverancier';

$GLOBALS["lang"]['vuln_status'] = 'Vuln Status';

$GLOBALS["lang"]['Vuln Status'] = 'Vuln Status';

$GLOBALS["lang"]['vulnerabilities'] = 'Kwetsbaarheden';

$GLOBALS["lang"]['Vulnerabilities'] = 'Kwetsbaarheden';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Kwetsbaarheden cache';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Kwetsbaarheden cache';

$GLOBALS["lang"]['vulnerability_id'] = 'Kwetsbaarheid ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Kwetsbaarheid ID';

$GLOBALS["lang"]['WHERE'] = 'WAAR';

$GLOBALS["lang"]['wall_port'] = 'Muurpoort';

$GLOBALS["lang"]['Wall Port'] = 'Muurpoort';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis en Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Wil je meer weten?';

$GLOBALS["lang"]['Warning'] = 'Waarschuwing';

$GLOBALS["lang"]['warranty'] = 'Garantie';

$GLOBALS["lang"]['Warranty'] = 'Garantie';

$GLOBALS["lang"]['warranty_duration'] = 'Garantieduur';

$GLOBALS["lang"]['Warranty Duration'] = 'Garantieduur';

$GLOBALS["lang"]['warranty_expires'] = 'Garantie Verloopt';

$GLOBALS["lang"]['Warranty Expires'] = 'Garantie Verloopt';

$GLOBALS["lang"]['warranty_status'] = 'Garantiestatus';

$GLOBALS["lang"]['Warranty Status'] = 'Garantiestatus';

$GLOBALS["lang"]['warranty_type'] = 'Garantietype';

$GLOBALS["lang"]['Warranty Type'] = 'Garantietype';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'website';

$GLOBALS["lang"]['Wednesday'] = 'Woensdag';

$GLOBALS["lang"]['weight'] = 'Gewicht';

$GLOBALS["lang"]['Weight'] = 'Gewicht';

$GLOBALS["lang"]['weight_current'] = 'Gewicht Huidig';

$GLOBALS["lang"]['Weight Current'] = 'Gewicht Huidig';

$GLOBALS["lang"]['weight_empty'] = 'Gewicht leeg';

$GLOBALS["lang"]['Weight Empty'] = 'Gewicht leeg';

$GLOBALS["lang"]['weight_max'] = 'Gewicht Max';

$GLOBALS["lang"]['Weight Max'] = 'Gewicht Max';

$GLOBALS["lang"]['Welcome'] = 'Welkom';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Welkom Dashboard';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Welkom bij FirstWave Open-AudIT';

$GLOBALS["lang"]['Western Sahara'] = 'Westelijke Sahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Wat kan ik verwachten als ik geen geloofsbrieven heb?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Wat is het doel van dit rek.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Wat is het type van deze locatie. Toelaatbare typen aangehouden in <code>attributes</code> tafel.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Bij het integreren van apparaten van het externe systeem, als het apparaat niet bestaat in Open-AudIT, moeten we het dan maken?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Bij het integreren van apparaten van het externe systeem, als het apparaat is bijgewerkt in het externe systeem moeten we het updaten in Open-AudIT?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Als we een extern apparaat ophalen, moeten we het dan ontdekken?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Wanneer deze benchmark wordt uitgevoerd. Afgeleid uit de geassocieerde landen <code>tasks.type</code> en <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Toen dit logboek werd aangemaakt.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Toen dit wachtrij-item begon te verwerken.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Wanneer we deze basislijn uitvoeren, moeten we controleren op items op apparaten die niet in een beleid voor deze basislijn.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Als we een open poort ontvangen, moeten we dan proberen te testen op de versie van de dienst die er momenteel op draait? Dit helpt bij het bevestigen van de werkelijke lopende diensten.';

$GLOBALS["lang"]['where'] = 'waarbij';

$GLOBALS["lang"]['Where'] = 'waarbij';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Waar op het scherm Device Details wilt u dit veld zien verschijnen.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Waar het rek op de rij staat.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Of de kwetsbaarheid invloed heeft op componenten buiten zijn eigen gebruik van Impact, Beschikbaarheid en Vertrouwelijkheid.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Of gebruikersinteractie vereist is (Geen, Passief, Actief).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Op welke OS deze benchmark van toepassing is.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Welke apparaten moeten Open-AudIT maken vanuit het externe systeem (indien aanwezig). Allen gebruiken, Geen of een bepaalde eigenschap.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'In welk submenu moeten we deze vraag tonen.';

$GLOBALS["lang"]['Who made this rack.'] = 'Wie heeft dit rek gemaakt?';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Waarom alleen Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Waarom sluiten we dit beleid uit?';

$GLOBALS["lang"]['Wide Area Network'] = 'Breed Area Network';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Widgettype';

$GLOBALS["lang"]['widgets'] = 'Eigenschappen';

$GLOBALS["lang"]['Widgets'] = 'Eigenschappen';

$GLOBALS["lang"]['width'] = 'Breedte';

$GLOBALS["lang"]['Width'] = 'Breedte';

$GLOBALS["lang"]['windows'] = 'Vensters';

$GLOBALS["lang"]['Windows'] = 'Vensters';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Draadloos lokaal netwerk';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi mislukt';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi mislukt';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Werkgroep';

$GLOBALS["lang"]['Workgroup'] = 'Werkgroep';

$GLOBALS["lang"]['Working Credentials'] = 'Werkredenen';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Gele zoekopdracht';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Ja.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'U kunt deze URL kopiëren en plakken in een e-mail naar uw medewerkers.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'U moet uw bestaande licentie verwijderen voordat u een nieuwe licentie toevoegt.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Uw AWS EC2 API sleutel.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Uw Google Bereken referenties als JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Uw licenties';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Uw Microsoft Azure Client ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Je Microsoft Azure Client Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Uw Microsoft Azure Abonnement ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Je Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Uw SQL om attributen te selecteren die deze query zullen vullen.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Uw SQL om apparaten te selecteren die deze groep zullen bevolken.';

$GLOBALS["lang"]['Your SSH key.'] = 'Je SSH sleutel.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Uw toegangsgegevens, zoals dat clouds inheemse API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Uw beschrijving van de status van deze verbinding (verzorgd, gepensioneerd, etc).';

$GLOBALS["lang"]['Your description of this item.'] = 'Uw beschrijving van dit item.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Uw algemene naam voor dit stuk software';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Uw generieke versie voor dit stuk software';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['active'] = 'actief';

$GLOBALS["lang"]['active directory'] = 'actieve map';

$GLOBALS["lang"]['active/active'] = 'actief/actief';

$GLOBALS["lang"]['active/passive'] = 'actief/passief';

$GLOBALS["lang"]['advertisement'] = 'reclame';

$GLOBALS["lang"]['alert'] = 'alarm';

$GLOBALS["lang"]['all'] = 'alle';

$GLOBALS["lang"]['allocated'] = 'toegewezen';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'toepassing';

$GLOBALS["lang"]['approved'] = 'goedgekeurd';

$GLOBALS["lang"]['attribute'] = 'eigenschap';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'back-up';

$GLOBALS["lang"]['banned'] = 'verboden';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['bottom'] = 'onder';

$GLOBALS["lang"]['browser_lang'] = 'browser_lang';

$GLOBALS["lang"]['building'] = 'gebouw';

$GLOBALS["lang"]['cloud'] = 'cloud';

$GLOBALS["lang"]['code'] = 'code';

$GLOBALS["lang"]['collector'] = 'verzamelaar';

$GLOBALS["lang"]['compute'] = 'berekenen';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['contains'] = 'bevat';

$GLOBALS["lang"]['create'] = 'aanmaken';

$GLOBALS["lang"]['created'] = 'aangemaakt';

$GLOBALS["lang"]['critical'] = 'kritiek';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'database';

$GLOBALS["lang"]['debug'] = 'debuggen';

$GLOBALS["lang"]['delegated'] = 'gedelegeerd';

$GLOBALS["lang"]['delete'] = 'verwijderen';

$GLOBALS["lang"]['deleted'] = 'geschrapt';

$GLOBALS["lang"]['denied'] = 'geweigerd';

$GLOBALS["lang"]['devices'] = 'apparaten';

$GLOBALS["lang"]['digitalocean'] = 'digitaaloceaan';

$GLOBALS["lang"]['does not equal'] = 'is niet gelijk';

$GLOBALS["lang"]['emergency'] = 'nood';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'gelijk aan';

$GLOBALS["lang"]['error'] = 'fout';

$GLOBALS["lang"]['established'] = 'vastgesteld';

$GLOBALS["lang"]['excluded'] = 'uitgesloten';

$GLOBALS["lang"]['expired'] = 'verlopen';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'extreem - Zonder dat zou de organisatie falen.

zeer hoog - functies die essentieel zijn voor het voortbestaan van de organisaties en onmiddellijk moeten worden hersteld.

hoog - Belangrijke functies die snel moeten worden hersteld, maar kunnen een iets langere hersteltijd hebben.

medium - Functies die nodig zijn maar langer uitval kunnen verdragen.

laag - Niet-essentiële functies die kunnen worden vertraagd zonder significante impact.

niet toegewezen - De standaard totdat ingesteld.';

$GLOBALS["lang"]['fail'] = 'falen';

$GLOBALS["lang"]['false'] = 'onwaar';

$GLOBALS["lang"]['file'] = 'bestand';

$GLOBALS["lang"]['firewall'] = 'firewall';

$GLOBALS["lang"]['fixed'] = 'vast';

$GLOBALS["lang"]['floor'] = 'vloer';

$GLOBALS["lang"]['front'] = 'voor';

$GLOBALS["lang"]['front-left'] = 'linksvoor';

$GLOBALS["lang"]['front-right'] = 'rechtsvoor';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'meer of gelijk aan';

$GLOBALS["lang"]['greater than'] = 'groter dan';

$GLOBALS["lang"]['group'] = 'groep';

$GLOBALS["lang"]['head'] = 'kop';

$GLOBALS["lang"]['here'] = 'Hier.';

$GLOBALS["lang"]['high availability'] = 'hoge beschikbaarheid';

$GLOBALS["lang"]['howto'] = 'howto';

$GLOBALS["lang"]['ignored'] = 'genegeerd';

$GLOBALS["lang"]['in'] = 'in';

$GLOBALS["lang"]['inactive'] = 'inactief';

$GLOBALS["lang"]['incomplete'] = 'onvolledig';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y/n), enz.';

$GLOBALS["lang"]['is licensed to'] = 'heeft een vergunning';

$GLOBALS["lang"]['left'] = 'links';

$GLOBALS["lang"]['less or equals'] = 'min of gelijk aan';

$GLOBALS["lang"]['less than'] = 'minder dan';

$GLOBALS["lang"]['license'] = 'licentie';

$GLOBALS["lang"]['like'] = 'zoals';

$GLOBALS["lang"]['line'] = 'regel';

$GLOBALS["lang"]['load balancing'] = 'belastingsbalancering';

$GLOBALS["lang"]['location'] = 'locatie';

$GLOBALS["lang"]['managed'] = 'beheerd';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'koppelpunt';

$GLOBALS["lang"]['network'] = 'netwerk';

$GLOBALS["lang"]['news'] = 'nieuws';

$GLOBALS["lang"]['no'] = 'nee';

$GLOBALS["lang"]['node'] = 'knooppunt';

$GLOBALS["lang"]['none'] = 'geen';

$GLOBALS["lang"]['normal'] = 'normaal';

$GLOBALS["lang"]['not applicable'] = 'niet noodzakelijk';

$GLOBALS["lang"]['not in'] = 'niet in';

$GLOBALS["lang"]['not like'] = 'niet zoals';

$GLOBALS["lang"]['notice'] = 'kennisgeving';

$GLOBALS["lang"]['notification'] = 'kennisgeving';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'geoptimaliseerd';

$GLOBALS["lang"]['optionally '] = 'facultatief ';

$GLOBALS["lang"]['other'] = 'Andere';

$GLOBALS["lang"]['package'] = 'pakket';

$GLOBALS["lang"]['partition'] = 'partitie';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'in behandeling';

$GLOBALS["lang"]['performance'] = 'prestaties';

$GLOBALS["lang"]['performed'] = 'uitgevoerd';

$GLOBALS["lang"]['pie'] = 'taart';

$GLOBALS["lang"]['planning'] = 'planning';

$GLOBALS["lang"]['predictable'] = 'voorspelbaar';

$GLOBALS["lang"]['query'] = 'query';

$GLOBALS["lang"]['rear'] = 'achter';

$GLOBALS["lang"]['rear-left'] = 'linksachter';

$GLOBALS["lang"]['rear-right'] = 'rechtsachter';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'release';

$GLOBALS["lang"]['reserved'] = 'gereserveerd';

$GLOBALS["lang"]['right'] = 'rechts';

$GLOBALS["lang"]['room'] = 'kamer';

$GLOBALS["lang"]['row'] = 'rij';

$GLOBALS["lang"]['stand-alone'] = 'standalone';

$GLOBALS["lang"]['standard'] = 'standaard';

$GLOBALS["lang"]['starts with'] = 'begint met';

$GLOBALS["lang"]['storage'] = 'opslag';

$GLOBALS["lang"]['timestamp'] = 'tijdstempel';

$GLOBALS["lang"]['top'] = 'boven';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'top secret - Militair / Regering classificatie. Openbaarmaking zou een uitzonderlijk groot gevaar voor de nationale veiligheid opleveren.

geheim - Militaire / Regering classificatie. Openbaarmaking zou ernstige schade toebrengen aan de nationale veiligheid.

vertrouwelijk - classificatie militaire / overheid en particuliere sector. Gegevens die vertrouwelijk zijn omvatten bedrijfsgeheimen, intellectuele gegevens, applicatie programmeringscode, en andere gegevens die de organisatie ernstig kunnen beïnvloeden als ongeoorloofde openbaarmaking heeft plaatsgevonden. Gegevens op dit niveau zouden alleen beschikbaar zijn voor personeel in de organisatie waarvan de werkbehoeften, of rechtstreeks verband houden met, de geraadpleegde gegevens. Toegang tot vertrouwelijke gegevens vereist gewoonlijk een vergunning voor elke toegang.

particuliere - classificatie particuliere sector. Gegevens die privé zijn omvat alle informatie met betrekking tot personeel, met inbegrip van personeelsdossiers, medische dossiers en salarisinformatie, die alleen binnen de organisatie wordt gebruikt.

gevoelig - classificatie militaire / overheid en particuliere sector. Gegevens die gevoelig zijn omvat organisatorische financiële informatie en vereist extra maatregelen om de CIA en nauwkeurigheid te waarborgen. Openbaarmaking kan de nationale veiligheid schaden.

publiek - classificatie van de particuliere sector. Publieke gegevens zijn gegevens die over het algemeen met het publiek worden gedeeld en geen negatieve gevolgen voor de organisatie zouden hebben. Voorbeelden van openbare gegevens zijn onder meer hoeveel mensen in de organisatie werken en welke producten een organisatie produceert of verkoopt.

Niet geclassificeerd - Militaire / Regeringsclassificatie. Alle informatie die over het algemeen onder het publiek kan worden verspreid zonder enig gevaar voor nationaal belang.

niet toegewezen - De standaard totdat ingesteld.';

$GLOBALS["lang"]['traffic'] = 'verkeer';

$GLOBALS["lang"]['true'] = 'waar';

$GLOBALS["lang"]['unallocated'] = 'niet toegewezen';

$GLOBALS["lang"]['unauthorised'] = 'onbevoegd';

$GLOBALS["lang"]['unknown'] = 'onbekend';

$GLOBALS["lang"]['unmanaged'] = 'onbeheerd';

$GLOBALS["lang"]['unused'] = 'ongebruikte';

$GLOBALS["lang"]['update'] = 'bijwerken';

$GLOBALS["lang"]['valid'] = 'geldig';

$GLOBALS["lang"]['virtualisation'] = 'virtualisatie';

$GLOBALS["lang"]['warning'] = 'waarschuwing';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['yes'] = 'ja';

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

