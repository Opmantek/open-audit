<?php
$GLOBALS["lang"][' Default, currently '] = ' Standaard, momenteel ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Als iets niet werkt zoals verwacht, is het eerste wat je moet doen de logs controleren.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' wordt nu ondersteund met een taalbestand. Om uw gebruiker te wijzigen om deze taal te gebruiken, klikt u ';

$GLOBALS["lang"][' seconds'] = ' seconden';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', maar zal niet nodig om een aparte set van logon referenties onthouden.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', waarvan wij meer dan dertig leveren als standaard set. Professionele gebruikers kunnen deze niet veranderen, maar een Enterprise gebruiker heeft volledige maatwerk vaardigheden - waaronder het creëren van uw eigen.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', jij <i>moet</i> Gebruik https op uw Open-AudIT-server om Entra voor Auth te gebruiken. Stel Apache in om te gebruiken <strong>https</strong> alvorens Entra voor auth te configureren.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Om dit in te schakelen, bewerk het configuratie-item voor ';

$GLOBALS["lang"]['10 Minutes'] = '10 minuten';

$GLOBALS["lang"]['15 Minutes'] = '15 minuten';

$GLOBALS["lang"]['30 Minutes'] = '30 minuten';

$GLOBALS["lang"]['5 Minutes'] = '5 minuten';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 controles gegroepeerd in organisatorische, personen, fysieke en technologische categorieën';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>NOOT</strong> - U opent deze URL vanaf de lokale Open-AudIT-server. Het gedownloade script zal niet in staat zijn om te verzenden wanneer uitgevoerd op een andere machine. Als u andere machines moet controleren, kunt u het script downloaden vanaf elke externe machine, niet via een browser op de Open-AudIT server zelf.';

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

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Windows-desktopsystemen hebben netwerkbeperkingen die de prestaties van Open-AudIT kunnen beïnvloeden. De TCP/IP stack beperkt het aantal gelijktijdige onvolledige uitgaande TCP-verbindingspogingen. Nadat de limiet is bereikt, worden de volgende verbindingspogingen in een wachtrij geplaatst en opgelost tegen een vast tarief (10 per seconde). Als er teveel in de wachtrij komen, kunnen ze vallen. En uiteindelijk wordt Apache opnieuw opgestart door het besturingssysteem. Daarom wordt het installeren van Open-AudIT op een Windows-desktopbesturingssysteem niet ondersteund.<br/><br/>Er is niets mis met de Open-AudIT-code, noch kunnen we iets doen om dit probleem op Windows-clientmachines aan te pakken.</p>';

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

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>NOOT</strong> - U opent deze URL vanaf de lokale Open-AudIT-server. Het gedownloade script zal niet in staat zijn om te verzenden wanneer uitgevoerd op een andere machine. Als u andere machines moet controleren, kunt u het script downloaden vanaf elke externe machine, niet via een browser op de Open-AudIT server zelf.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Een CVE-item dat geen filter bevat om de getroffen items te bepalen.';

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

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'Een LAN kan worden aangesloten op een WAN via een router.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Een Metropolitan Area Network (MAN) is een groot computernetwerk dat meestal een stad of een grote campus beslaat.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Seed discovery maakt gebruik van een eerste IP om de IP\'s van andere apparaten op te halen, voegt die IP\'s toe aan de lijst en scant deze - opnieuw vragend naar IP\'s die extra apparaten weten over. Spoel en herhaal. Het is intelligent genoeg om te weten of het al een bepaald IP heeft gescand in de uitvoering en gooit al gescand (of zelfs op de lijst te scannen).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Een Subnet ontdekking zal de IP\'s scannen.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Een URL die wordt verstrekt aan de agent die vervolgens het bestand zal downloaden en opslaan op de lokale schijf.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Een URL naar een te downloaden bestand.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Een backbone-netwerk maakt deel uit van een computernetwerkinfrastructuur die een pad biedt voor de uitwisseling van informatie tussen verschillende LAN\'s of subnetwerken. Een ruggengraat kan verschillende netwerken binnen hetzelfde gebouw, over verschillende gebouwen of over een groot gebied met elkaar verbinden.<br/><br/>Een groot bedrijf zou bijvoorbeeld een backbone netwerk kunnen implementeren om afdelingen te verbinden die zich over de hele wereld bevinden. De apparatuur die de departementale netwerken verbindt vormt de ruggengraat van het netwerk. Bij het ontwerpen van een netwerkbackbone zijn netwerkprestaties en netwerkcongestie cruciale factoren om rekening mee te houden. Normaal gesproken is de backbone netwerkcapaciteit groter dan die van de afzonderlijke netwerken die ermee verbonden zijn.<br/><br/>Een ander voorbeeld van een backbone-netwerk is de internetbackbone, de set van brede netwerken (WAN\'s) en kernrouters die alle netwerken verbinden die verbonden zijn met het internet.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Een berekend veld dat het aantal keer toont dat dit stuk software werd gevonden op de computers in de geselecteerde Org (en zijn nakomelingen indien geconfigureerd).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Een netwerk van campusgebieden (CAN) bestaat uit een interconnectie van LAN\'s binnen een beperkt geografisch gebied. De netwerkapparatuur (schakelaars, routers) en transmissiemedia (optische vezels, koperen fabriek, Cat5 bekabeling, enz.) zijn bijna volledig eigendom van de campus huurder / eigenaar (een onderneming, universiteit, overheid, enz.).<br/><br/>Bijvoorbeeld, een universiteit campus netwerk is waarschijnlijk een koppeling van een verscheidenheid van campus gebouwen om academische hogescholen of afdelingen, de bibliotheek, en studentenwoningen zal verbinden.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Een gesloten poort is toegankelijk (het ontvangt en reageert op Nmap sonde pakketten), maar er is geen toepassing luisteren op. Ze kunnen nuttig zijn bij het tonen dat een host is up op een IP-adres (host ontdekking, of ping scanning), en als onderdeel van OS detectie. Omdat gesloten poorten bereikbaar zijn, kan het de moeite waard zijn om later te scannen voor het geval er zich iets opent. Beheerders kunnen overwegen dergelijke poorten te blokkeren met een firewall. Dan zouden ze verschijnen in de gefilterde staat, besproken volgende.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Een verzamelaar is ofwel in Collector of Stand-Alone modus.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Een komma gescheiden lijst van toepasselijke CVE\'s.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Een komma gescheiden lijst van waarden, waarvan een kan worden geselecteerd.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Een commando om uit te voeren. Wanneer de agent gebaseerd is op Windows, wordt dit commando uitgevoerd vanuit de powershell agent.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Een dashboard bestaat uit drie kolommen en twee rijen van wat we noemen <i>widget</i>. Een widget lijkt erg op een samenvatting, alleen nemen we het samenvattingsconcept wat verder. Widgets worden gemaakt op een eenvoudige manier met behulp van een paar drop-down dozen - of u kunt ervoor kiezen om uw eigen SQL te gebruiken voor volledige aanpasbaarheid.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Een gefilterde poort wordt beschouwd als open (en zal apparaatdetectie activeren).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Een wereldwijd netwerk (gan) is een netwerk dat wordt gebruikt voor het ondersteunen van mobiele telefoons over een willekeurig aantal draadloze LAN\'s, satellietdekkingsgebieden, enz. De belangrijkste uitdaging op het gebied van mobiele communicatie is de communicatie van de gebruiker van het ene lokale dekkingsgebied naar het andere over te dragen. In IEEE Project 802 gaat het hierbij om een opeenvolging van terrestrische draadloze LAN\'s.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Een thuisnetwerk (HAN) is een residentieel LAN dat wordt gebruikt voor communicatie tussen digitale apparaten die meestal thuis worden ingezet, meestal een klein aantal personal computers en accessoires, zoals printers en mobiele computerapparatuur. Een belangrijke functie is het delen van internettoegang, vaak een breedbanddienst via een kabeltelevisie of digitale abonneelijn (DSL) provider.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Een lijst van aangepaste TCP-poorten om te scannen (22 is SSH, 135 is WMI, 62078 is iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Een lijst van aangepaste UDP-poorten om te scannen (161 is SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Een lokaal netwerk (LAN) is een netwerk dat computers en apparaten in een beperkt geografisch gebied, zoals een woning, school, kantoorgebouw, of nauw gepositioneerde groep gebouwen verbindt. Elke computer of apparaat op het netwerk is een knooppunt. Bekabelde LAN\'s zijn hoogstwaarschijnlijk gebaseerd op ethernettechnologie. Nieuwere normen zoals ITU-T G.hn bieden ook een manier om een bekabeld LAN te creëren met behulp van bestaande bedrading, zoals coaxiale kabels, telefoonlijnen en elektriciteitskabels.<br/><br/>De definiërende kenmerken van een LAN, in tegenstelling tot een breed gebiedsnetwerk (WAN), omvatten hogere overdrachtssnelheden voor gegevens, een beperkt geografisch bereik en gebrek aan vertrouwen op huurlijnen om connectiviteit te bieden. Huidige Ethernet of andere IEEE 802.3LAN-technologieën werken tegen dataoverdrachtsnelheden tot 100 Gbit/s, gestandaardiseerd door IEEE in 2010. Momenteel, 400 Gbit/s Ethernet wordt ontwikkeld.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Een locatie is een fysiek adres dat apparaten kan hebben die ermee geassocieerd zijn. U kunt deze coördinaten toewijzen en als er apparaten zijn toegewezen, verschijnt de locatie op de kaart wanneer u een Open-AudIT Enterprise licentie hebt.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Een locatienaam zal u helpen om deze apparaten in de toekomst te vinden.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Een lager aantal betekent dat het zal worden toegepast vóór andere regels.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Een lager aantal betekent dat het zal worden toegepast vóór andere regels. Het standaardgewicht is 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Een nieuwe gebruiker logde in bij Open-AudIT en werd geauthentiseerd en goedgekeurd door de LDAP sever. Die gebruiker werd vervolgens gemaakt in Open-AudIT en ingelogd. Succes.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Een pakket is een stuk geïnstalleerde softare. Een pakket heeft een type - antivirus, goedgekeurd, back-up, verboden, cloud, firewall, genegeerd, licentie of andere.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Een wachtwoord (opgeslagen als een hash) waarmee inloggen bij het gebruik van applicatie-authenticatie mogelijk is.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Een persoon heeft een account in de Open-AudIT applicatie. Hun gebruikersaccount heeft een lijst van geassocieerde rollen en organisaties. De rollen die de gebruiker heeft bepaalt wat hij kan doen. De Organisaties die een gebruiker heeft bepaalt op welke items ze kunnen reageren.<br/><br/>Wanneer een gebruiker vraagt om een bewerking (creëren, lezen, bijwerken, verwijderen) op een collectie item, worden de rollen geraadpleegd om te zien of ze zijn toegestaan om die actie uit te voeren, dan worden de orgs geraadpleegd om te bepalen of het collectie item behoort tot een org de gebruiker toestemming heeft om op te treden.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Een personal area network (PAN) is een computernetwerk dat wordt gebruikt voor communicatie tussen computer en verschillende informatietechnologie apparaten dicht bij één persoon. Enkele voorbeelden van apparaten die worden gebruikt in een PAN zijn personal computers, printers, fax machines, telefoons, PDA\'s, scanners, en zelfs video game consoles. Een PAN kan bekabelde en draadloze apparaten omvatten. Het bereik van een PAN strekt zich doorgaans uit tot 10 meter. Een bekabelde PAN is meestal gebouwd met USB- en FireWire-verbindingen terwijl technologieën zoals Bluetooth en infraroodcommunicatie meestal een draadloze PAN vormen.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Een query is in wezen een SQL statement. Deze verklaring wordt uitgevoerd tegen de database met de automatische toevoeging van de limiet, gefilterd om alleen van toepassing te zijn op de gevraagde items en alleen die items die de gebruiker heeft toestemming om te bekijken. Een zoekopdracht kan worden aangemaakt met behulp van menu -> Beheer -> Vragen -> Queries aanmaken. Queries bevatten een org_id en zijn daarom beperkt tot de juiste gebruikers. Een gebruiker moet de org_admin of reporter role(s) hebben om een query aan te maken, bij te werken of te verwijderen. Alle gebruikers kunnen een zoekopdracht uitvoeren. Een query heeft een naamattribuut gebruikt voor het menu-item en een menucategorie-attribuut. Dit vertelt de Open-Audit GUI in welk submenu de query geplaatst moet worden. Er is ook menuweergave die moet worden ingesteld op <i>y</i> de zoekopdracht in de GUI inschakelen (<i>n</i> om te voorkomen dat de query verschijnt. De query zou nog steeds draaien indien aangeroepen met behulp van de <code>id</code>, ongeacht menu toont waarde.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Een rek is een verzameling apparaten die een positie en hoogte binnen het rek worden toegewezen. Een apparaat kan optioneel een foto erbij hebben. Een rek wordt op een rij geplaatst. We hebben een zeer korrelig systeem gecreëerd voor het plaatsen van racks, dat is als volgt. Op het hoogste niveau (zoals altijd) is de Organisatie (Org). Een Org kan meerdere locaties hebben (zoals altijd het geval is geweest). Met de toevoeging van de Racks functie, kan een locatie nu een of meer gebouwen bevatten. Een gebouw kan één of meerdere verdiepingen bevatten. Een verdieping kan een of meer kamers bevatten. Een kamer kan een of meer rijen bevatten. Dit klinkt als een hoop werk, maar defaults worden gemaakt voor u. Maak een nieuwe locatie aan en de subcomponenten worden automatisch voor u aangemaakt. Als je meer items nodig hebt (gebouwen, kamers, etc) kun je ze toevoegen zoals je wilt. Een rek kan ook deel uitmaken van een <i>pod</i> van racks. De pod attribuut werkt als een tag, in plaats van een strikte hiërarchische erfenis model als per gebouwen, vloeren, enz.<br/><br/>Racks zijn een functie beschikbaar voor Open-AudIT Enterprise licentie klanten.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Een routeringsdomein of adresruimte waar de IP-adressen en MAC-adressen uniek zijn.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Een voorbeeld cron bestand voor Linux is hieronder. Dit moet in';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Een veiligheidszone is een administratief domein of beleidsdomein binnen het netwerkdomein.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Een zaad ontdekking is een ander type ontdekking, waar u het IP van een enkele <i>zaad</i> apparaat. Dit apparaat wordt gecontroleerd, en alle IP\'s die het kent worden vervolgens toegevoegd aan de lijst van IP\'s die moeten worden gecontroleerd. Vervolgens worden deze apparaten gecontroleerd en worden alle IP\'s die zij kennen ook toegevoegd aan de lijst van IP\'s voor auditing. Dit proces gaat verder binnen de parameters die door de gebruiker zijn geconfigureerd.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Een korte beschrijving van het logboek.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Een opslagruimtenetwerk (SAN) is een specifiek netwerk dat toegang biedt tot geconsolideerde, blokniveau-gegevensopslag. SAN\'s worden voornamelijk gebruikt om opslagapparaten, zoals schijfarrays, tapebibliotheken en optische jukeboxen, toegankelijk te maken voor servers zodat de apparaten verschijnen als lokaal aangesloten apparaten op het besturingssysteem. Een SAN heeft doorgaans een eigen netwerk van opslagapparaten die over het algemeen niet toegankelijk zijn via het lokale netwerk door andere apparaten. De kosten en complexiteit van SAN\'s zijn in het begin van de jaren 2000 gedaald tot niveaus die een bredere goedkeuring mogelijk maken voor zowel ondernemingen als kleine tot middelgrote ondernemingen.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Een tekenreeks die overeenkomt met de <code>software.name</code> kenmerk. U kunt de standaard SQL wildcard van procent (%) gebruiken om één of meer tekens te vergelijken.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Een gestructureerd systeem voor het beheer van gevoelige informatie';

$GLOBALS["lang"]['A timestamp.'] = 'Een tijdstempel.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Een gebruiker heeft een primaire Org en een lijst van Orgs die ze kunnen openen. Een gebruiker combineert dit met een lijst van toegewezen rollen die bepalen welke acties ze kunnen uitvoeren op items die zijn toegewezen aan de Orgs waar ze toegang toe hebben. De combinatie van een gebruiker <i>orgs</i> en <i>rollen</i> definiëren wat ze wel en niet kunnen doen binnen Open-AudIT.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Een gebruiker zal een lijst van geassocieerde organisaties (orgs) hebben. Elke org die de gebruiker heeft zal hen toestaan om te handelen op items binnen die org als per hun rol(s).<br/><br/>Alle orgs behalve de standaard org hebben een ouder. Denk aan een Org Chart. Als een gebruiker toestemming heeft voor een Org, hebben ze ook toestemming voor afstammelingen van die Org.<br/><br/>Gebruikers zijn ook toegestaan toestemming op een kind org om de items van ouder orgs voor bepaalde collecties te zien. Dat zijn: dashboards, discovery_scan_options, velden, bestanden, groepen, queries, rapporten, rollen, regels, scripts, samenvattingen, widgets.<br/><br/>Vergeet niet dat je korrelige controle hebt over wat gebruikers kunnen zien en doen met behulp van Roles in Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Een gebruiker zal een lijst van geassocieerde organisaties (orgs) hebben. Elke org die de gebruiker heeft zal hen toestaan om te handelen op items binnen die org als per hun rol(s).<br/><br/>Alle orgs behalve de standaard org hebben een ouder. Denk aan een Org Chart. Als een gebruiker toestemming heeft voor een Org, hebben ze ook toestemming voor afstammelingen van die Org.<br/><br/>We hebben ook toestaan dat een gebruiker met toestemming op een kind org om de items van ouder orgs voor bepaalde collecties te zien. Dit zijn: dashboards, discovery_scan_options, velden, bestanden, groepen, queries, rollen, regels, scripts, samenvattingen, widgets.<br/><br/>Vergeet niet dat je korrelige controle hebt over wat gebruikers kunnen zien en doen met';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Een virtueel privé netwerk (VPN) is een overlay netwerk waarin sommige verbindingen tussen knooppunten worden vervoerd door open verbindingen of virtuele circuits in een groter netwerk (bijvoorbeeld internet) in plaats van door fysieke draden. De protocollen van de datalinklaag van het virtuele netwerk zouden via het grotere netwerk worden getunneld als dit het geval is. Een gemeenschappelijke toepassing is beveiligde communicatie via het publieke internet, maar een VPN hoeft geen expliciete beveiligingsfuncties te hebben, zoals authenticatie of content-encryptie. VPN\'s kunnen bijvoorbeeld worden gebruikt om het verkeer van verschillende gebruikersgemeenschappen te scheiden over een onderliggend netwerk met sterke beveiligingsfuncties.<br/><br/>VPN kan best-forfort prestaties, of kan een gedefinieerde service level agreement (SLA) tussen de VPN-klant en de VPN-dienstverlener. In het algemeen, een VPN heeft een topologie complexer dan punt-tot-punt.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Een kwetsbaarheid die van invloed is op de beschikbaarheid kan aanvallers toestaan diensten te verstoren, crash systemen, of ontkenning van de dienst (DoS) (Geen, Laag, Hoog).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Een kwetsbaarheid die van invloed is op de vertrouwelijkheid kan aanvallers in staat stellen om gevoelige gegevens te lezen, zoals persoonlijke informatie, referenties, of eigen zakelijke gegevens (Geen, Laag, Hoog).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Een kwetsbaarheid die de integriteit beïnvloedt kan aanvallers toelaten om gegevens te wijzigen, kwaadaardige code te injecteren, of systeemconfiguraties te wijzigen (Geen, laag, hoog).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Een kwetsbaarheid kan worden geredigeerd en meer specifieke verpakkingsnamen, mits de verrijkingsgegevens onvoldoende zijn of de gegenereerde SQL niet helemaal correct is.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Een kwetsbaarheidsitem in Open-AudIT kan beschouwd worden als in wezen een vraag tegen uw database om uw potentiële blootstelling aan een bepaald CVE-rapport te bepalen. Een kwetsbaarheid bestaat uit het CVE-rapport, samen met verrijkingsgegevens van FirstWave. Deze twee items worden gecombineerd om een geschikte query te produceren die automatisch wordt gedownload van FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Een breed netwerk (WAN) is een computernetwerk dat een groot geografisch gebied bestrijkt, zoals een stad, land of zelfs intercontinentale afstanden. Een WAN gebruikt een communicatiekanaal dat vele soorten media combineert, zoals telefoonlijnen, kabels en luchtgolven. Een WAN maakt vaak gebruik van transmissiefaciliteiten van gemeenschappelijke luchtvaartmaatschappijen, zoals telefoonmaatschappijen. WAN-technologieën functioneren meestal op de onderste drie lagen van het OSI-referentiemodel: de fysieke laag, de datalinklaag en de netwerklaag.';

$GLOBALS["lang"]['AD Group'] = 'AD-groep';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFK, ISDN, enz.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'ALLE IP\'s';

$GLOBALS["lang"]['API / Web Access'] = 'API / Webtoegang';

$GLOBALS["lang"]['API Documentation'] = 'API-documentatie';

$GLOBALS["lang"]['API Key required.'] = 'API Key vereist.';

$GLOBALS["lang"]['API Result'] = 'API-resultaat';

$GLOBALS["lang"]['About'] = 'Info';

$GLOBALS["lang"]['Above are the only required items.'] = 'Hierboven zijn de enige benodigde items.';

$GLOBALS["lang"]['Accept'] = 'Accepteren';

$GLOBALS["lang"]['Access Model'] = 'Toegangsmodel';

$GLOBALS["lang"]['access_point'] = 'Toegangspunt';

$GLOBALS["lang"]['Access Point'] = 'Toegangspunt';

$GLOBALS["lang"]['access_token'] = 'Toegang tot Token';

$GLOBALS["lang"]['Access Token'] = 'Toegang tot Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Toegang tot het admin$-deel en RPC gebruikt het SMB2-protocol.';

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

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Active Directory en OpenLDAP';

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

$GLOBALS["lang"]['Add Your Credentials'] = 'Uw geloofsbrieven toevoegen';

$GLOBALS["lang"]['Add image'] = 'Afbeelding toevoegen';

$GLOBALS["lang"]['additional_items'] = 'Aanvullende items';

$GLOBALS["lang"]['Additional Items'] = 'Aanvullende items';

$GLOBALS["lang"]['address'] = 'Adres';

$GLOBALS["lang"]['Address'] = 'Adres';

$GLOBALS["lang"]['Address any nonconformities'] = 'Niet-conformiteiten aanpakken';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Aanpak van auditbevindingen en corrigerende maatregelen';

$GLOBALS["lang"]['Admin'] = 'Beheerder';

$GLOBALS["lang"]['admin_status'] = 'Beheersstatus';

$GLOBALS["lang"]['Admin Status'] = 'Beheersstatus';

$GLOBALS["lang"]['advanced'] = 'Geavanceerd';

$GLOBALS["lang"]['Advanced'] = 'Geavanceerd';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Nadat er een Integratie is gemaakt, zult u, wanneer u de details van een Integratie bekijkt, een veld met de naam Debug opmerken. Dit is standaard op nee ingesteld. Het veranderen naar ja biedt extra logging wanneer een Integratie wordt uitgevoerd. Debug mag niet als ja worden achtergelaten. Dit komt omdat de debug-uitvoer alles bevat wat uit externe systemen is opgehaald - inclusief items als WMI en SNMP-gegevens. De debug optie mag alleen worden gebruikt als er een probleem is opgetreden en u wilt dieper ingraven om te zien of u kunt bepalen waarom.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Nadat het bovenstaande is voltooid, verwijdert u het middel.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agent? Ontdekking? Geheimen?';

$GLOBALS["lang"]['agents'] = 'Middelen';

$GLOBALS["lang"]['Agents'] = 'Middelen';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Inzendingen van agenten kunnen worden gemaakt die een duur, een netwerk en een besturingssysteem specificeren. Als alle testen overeenkomen, vraagt de server de agent om acties uit te voeren. Indien geen enkele test is ingesteld, is deze van de <i>alles moet overeenkomen</i> vereiste.<br/><br/>U kunt meerdere agenten aanmaken en de server één of alle agent items laten controleren. U kunt (bijvoorbeeld) een agent specificeren die zegt <i>Als het agent IP in dit subnet zit, stel dan de locatie_id van het apparaat in</i>.<br/><br/>Een ander voorbeeld zou het uitvoeren van een audit helemaal niet, eerder een script downloaden en uitvoeren. Als de agent is geïnstalleerd met admin rechten, kunt u nu uw machines beheren zonder te openen <strong>alle</strong> Havens naar de wereld.<p>Het inschakelen van geavanceerde agenten betekent dat een agent kan worden geïnstrueerd om elk bestand te downloaden en elk commando uit te voeren. <strong>WAARSCHUWING</strong>: Dit komt met veiligheidsrisico\'s. Deze configuratie zal <strong>alleen</strong> functie bij het uitvoeren van Open-AudIT met behulp van HTTPS en een geldig (Certificate Authority voorzien) certificaat voor </p>';

$GLOBALS["lang"]['Aggressive'] = 'Agressief';

$GLOBALS["lang"]['Aland Islands'] = 'Alandeilanden';

$GLOBALS["lang"]['Albania'] = 'Albanië';

$GLOBALS["lang"]['Albanian'] = 'Albanezen';

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

$GLOBALS["lang"]['All collections URLs use the format'] = 'Alle collecties URL\'s gebruiken het formaat';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Alle subtabellen bevatten een paar belangrijke kolommen.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Alle apparaten met een type computer.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Alle apparaten met een type computer of router.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Alle apparaten zonder type schakelaar en printer.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Alle apparaten zonder type schakelaar en printer. In wezen hetzelfde als de bovenstaande vraag.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Alle reguliere ontdekkingsopties zijn ook beschikbaar voor gebruik in Device Seed Discoveries.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Alle taken kunnen hetzelfde worden gemaakt in Windows en Linux. Taken gebruiken de CRON methode voor het plannen van uitvoering.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Samen met dit verzoek om informatie, sturen we terug naar FirstWave datapoints die ons een aantal zeer noodzakelijke informatie over het gebruik van de functie en uw installatie.';

$GLOBALS["lang"]['Also can be created from the'] = 'Ook kan worden gemaakt van de';

$GLOBALS["lang"]['Alternatives'] = 'Alternatieven';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Velden';

$GLOBALS["lang"]['American Samoa'] = 'Amerikaans-Samoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Een Active Directory ontdekking zal Active Directory opvragen voor een lijst van netwerken en de bijbehorende IP\'s scannen net als een regelmatige Subnet ontdekking.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Een Org (organisatie) is eigenaar van de meeste artikelen in collecties binnen Open-AudIT. Met uitzondering van globale items zoals <i>configuratie</i>, de meeste items zijn toegewezen aan (eigendom van) een Org. Een gebruiker heeft toegang tot deze items in een verzameling, die hieronder tot een Org de gebruiker toestemming heeft op.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Een applicatie accepteert actief TCP verbindingen, UDP datagrams of SCTP associaties op deze poort. Het vinden van deze is vaak het primaire doel van port scanning. Beveiligde mensen weten dat elke open haven een aanvalsroute is. Aanvallers en pen-testers willen de open poorten exploiteren, terwijl beheerders proberen ze te sluiten of te beschermen met firewalls zonder legitieme gebruikers te dwarsbomen. Open poorten zijn ook interessant voor niet-security scans omdat ze diensten tonen die beschikbaar zijn voor gebruik op het netwerk.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Een reeks van <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Een reeks van <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Een reeks objecten die externe links naar meer informatie weergeven.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Een geschoolde gok naar de identiteit en het type apparaat';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Een versleuteld JSON-document met de vereiste attributen, afhankelijk van de <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Een privé-netwerk van ondernemingen is een netwerk dat door één enkele organisatie wordt opgebouwd om haar kantoorlocaties (bijv. productielocaties, hoofdkantoor, kantoren op afstand, winkels) te verbinden, zodat ze computerbronnen kunnen delen.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Een item kan worden gemaakt met behulp van de webinterface als de huidige gebruiker ingelogd heeft een rol die de';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Een voorbeeld JSON POST lichaam is hieronder. Dit moet bij het formulier "gegevens" worden gevoegd.';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Een voorbeeld widget SQL toont apparaten geteld per locatie.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Een bestaande Open-AudIT-gebruiker werd geauthentiseerd en goedgekeurd door de LDAP-server. Succes.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Een indicatie van het niveau van de dienstverlening vereist door deze site.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Een intern veld dat aangeeft of de ontdekking voltooid is.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Een open gefilterde poort wordt als open beschouwd (en zal de detectie van een apparaat activeren).<br/>Wat voorafging: IT beschouwde een Nmap respons van';

$GLOBALS["lang"]['An optional GeoCode'] = 'Een optionele GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Een optioneel wachtwoord om sudo te gebruiken.';

$GLOBALS["lang"]['Analyzed'] = 'Analyse';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Klik tenslotte op Submit om deze ontdekking uit te voeren.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'En als er iets misgaat?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'En tenslotte klik <i>Verzenden</i> om uw Open-AudIT Auth methode voor Entra aan te maken.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'En tot slot, niet zozeer een veiligheidsprobleem - meer gemoedsrust. De datastructuren zijn open en gedocumenteerd. U kunt ze bekijken';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'En geef een naam - wij raden u nederig Open-AudIT aan, maar u kunt het noemen wat u wilt. Zorg ervoor dat de optie voor <i>Integreer elke andere toepassing die u niet vindt in de galerij (Non-gallery)</i> is geselecteerd. En dan klikken <i>Aanmaken<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'En nog veel meer.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'Bijlage A Controles';

$GLOBALS["lang"]['Antarctica'] = 'Antarctica';

$GLOBALS["lang"]['AntiVirus'] = 'Antivirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Antiviruspakketten';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua en Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Alle TCP poorten (coma gescheiden, geen spaties) die u van deze ontdekking wilt uitsluiten. Alleen beschikbaar bij gebruik van Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Alle UDP-poorten (coma gescheiden, geen spaties) die u van deze ontdekking wilt uitsluiten. Alleen beschikbaar bij gebruik van Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Alle aanvullende documentatie die u nodig heeft.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Alle extra aantekeningen die je wilt maken.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Alle attributen gevolgd door een * geven aan dat CVSS-gegevens minder dan v4 werden gebruikt om dit veld te voltooien. Standaard proberen we v4 velden te gebruiken, maar als ze niet bevolkt zijn zullen we terugvallen op de vorige versie(s) voor attributen.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Alle apparaten worden toegewezen aan deze org wanneer ze hun auditscript uitvoeren (indien ingesteld).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Alle apparaten worden toegewezen aan deze org wanneer ze hun auditscript uitvoeren (indien ingesteld). Links naar <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Alle ontdekte apparaten zullen worden toegewezen aan deze locatie indien ingesteld. Links naar <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Elke ontdekte apparaten zullen worden toegewezen aan deze locatie wanneer ze hun audit script (indien ingesteld) uitvoeren.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Elke ontdekte apparaten zullen worden toegewezen aan deze locatie wanneer ze hun audit script (indien ingesteld) uitvoeren. Links naar <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Alle ontdekte apparaten worden toegewezen aan deze org indien ingesteld. Indien niet ingesteld, worden zij toegewezen aan de <code>org_id</code> van deze ontdekking. Links naar <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Alle bestanden gevonden op deze manier worden opgeslagen in de <i>uitvoerbaar</i> tabel zoals voor elk ander onderdeel van het apparaat.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Elk gewenst filter. OPMERKING: Wanneer type = verkeer, dit vertegenwoordigt het font-awesome pictogram.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Alle specifieke TCP-poorten die u wilt getest (coma gescheiden, geen spaties).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Alle specifieke UDP-poorten die u wilt getest (coma gescheiden, geen spaties).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Elke gebruiker geüploade afbeeldingen worden hier geplaatst.';

$GLOBALS["lang"]['Application'] = 'Toepassing';

$GLOBALS["lang"]['Application Definitions'] = 'Toepassingsdefinities';

$GLOBALS["lang"]['application_id'] = 'Programma-ID';

$GLOBALS["lang"]['Application ID'] = 'Programma-ID';

$GLOBALS["lang"]['Application Licenses'] = 'Toepassingslicenties';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Toepassing, besturingssysteem of hardware.';

$GLOBALS["lang"]['applications'] = 'Aanvragen';

$GLOBALS["lang"]['Applications'] = 'Aanvragen';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Toepassingen zijn alleen een Enterprise functie.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'In Open-AudIT 2.2 worden toepassingen geïntroduceerd om het concept verder te ontwikkelen.';

$GLOBALS["lang"]['applied'] = 'Toegepast';

$GLOBALS["lang"]['Applied'] = 'Toegepast';

$GLOBALS["lang"]['Approved'] = 'Goedgekeurd';

$GLOBALS["lang"]['Approved Packages'] = 'Goedgekeurde pakketten';

$GLOBALS["lang"]['April'] = 'april';

$GLOBALS["lang"]['Arabic'] = 'Arabisch';

$GLOBALS["lang"]['architecture'] = 'Bouwkunde';

$GLOBALS["lang"]['Architecture'] = 'Bouwkunde';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Weet u zeker dat u dit invoeritem wilt verwijderen?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Weet u zeker dat u dit item wilt verwijderen?';

$GLOBALS["lang"]['Are you sure?'] = 'Weet je het zeker?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Weet je het zeker? Dit zal alle wachtrij-items verwijderen en voorkomen dat de resterende IP\'s worden ontdekt.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Weet je het zeker? Dit zal het aantal wachtrijverwerkingen resetten en kan belasting op de server veroorzaken.';

$GLOBALS["lang"]['area'] = 'Gebied';

$GLOBALS["lang"]['Area'] = 'Gebied';

$GLOBALS["lang"]['Argentina'] = 'Argentinië';

$GLOBALS["lang"]['Armenia'] = 'Armenië';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Als herinnering aan hoe vergunningen werken in Open-AudIT, zie';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Als gevolg daarvan hebben wij <strong>moet</strong> hebben de admin$ deel beschikbaar is voor de ontdekking referenties gebruiker. Controleer het doel Windows machine biedt <i>schrijven</i> toegang tot de zoekgegevens gebruiker.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Zoals hierboven vermeld, spreken de ontwikkelaars niet alle aangeboden vertaaltalen. Dat betekent dat we de vertaalde tekst niet kunnen herzien. We proberen wel een cursieve recensie. Als je iets ziet dat niet correct vertaald is, kun je het zelf veranderen. Bewerk het juiste taalbestand (zoals hieronder) en vind de tekst te veranderen. Misschien bestaat het niet en moet je het toevoegen. Wijzig gewoon de tekst, sla het bestand op en vernieuw uw we-pagina. U hoeft geen services/daemons te herstarten om deze in werking te laten treden. Misschien moet je je browser verversen.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Volgens de benchmarks van OpenSCAP - <i>Probeer geen van de instellingen in deze benchmark te implementeren zonder ze eerst te testen in een niet-operationele omgeving. De makers van deze benchmark nemen geen enkele verantwoordelijkheid op zich voor het gebruik ervan door andere partijen en geven geen garanties, uitgedrukt of impliciet, over de kwaliteit, betrouwbaarheid of enig ander kenmerk ervan.</i><br/><br/>Serieus, begin niet blindelings <i>vaststelling</i> problemen onthuld na het uitvoeren van een benchmark zonder eerst grondig te testen in een niet-productie, identieke omgeving.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Volgens de eigenschappen voor apparaatomgevingen. Productie, opleiding, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Omdat het auditscript bash gebruikt, kunt u de wildcard van * gebruiken wanneer u directories en uitsluitingen definieert.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Ga zoals gewoonlijk naar menu → Manage → Integraties → Integratie aanmaken. Zoals hierboven, als je draait op Linux en je hebt NMIS op dezelfde server, hoeft u niets anders dan te klikken <i>Verzenden</i>. Ik kan het niet gemakkelijker maken dan dat.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Terwijl we Discoveries uitvoeren en de resultaten van het apparaat verzamelen, vullen we de lijst van netwerken aan. De functie Gezegende Subnets gebruikt deze lijst van netwerken om alleen gegevens van apparaten op die netwerken te accepteren.';

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

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Een ISMS-manager of -team toewijzen';

$GLOBALS["lang"]['Assign an Operator'] = 'Een exploitant toewijzen';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Geef alle gecontroleerde apparaten aan deze org. Laat leeg om het apparaat te verlaten in momenteel toegewezen org (of om standaard in te stellen).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Het apparaat toewijzen aan een locatie';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Het apparaat toewijzen aan een Org';

$GLOBALS["lang"]['Assigned To'] = 'Aan';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Ontdekte apparaten toewijzen';

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

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Poging om het apparaat te pingen als we de localhost niet controleren.';

$GLOBALS["lang"]['Attribute'] = 'Attribuut';

$GLOBALS["lang"]['attributes'] = 'Attributen';

$GLOBALS["lang"]['Attributes'] = 'Attributen';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Attributen worden opgeslagen voor Open-AudIT te gebruiken voor bepaalde velden, op dit moment zijn alle velden gebaseerd op de apparaten, locaties, orgs en query tabellen. De attributen die u kunt bewerken worden geassocieerd met de volgende kolommen: Klasse, milieu, status en type.';

$GLOBALS["lang"]['Audit'] = 'Controle';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Audit DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Audit ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Auditlog';

$GLOBALS["lang"]['Audit Log'] = 'Auditlog';

$GLOBALS["lang"]['Audit Mount Point'] = 'Controlekoppelpunt';

$GLOBALS["lang"]['Audit My PC'] = 'Controleer mijn PC';

$GLOBALS["lang"]['Audit Netstat'] = 'Controlenetstat';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Invoer auditresultaat';

$GLOBALS["lang"]['Audit Software'] = 'Auditsoftware';

$GLOBALS["lang"]['Audit Status'] = 'Controlestatus';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Audit Win32 Product';

$GLOBALS["lang"]['Audit Windows'] = 'Controlevensters';

$GLOBALS["lang"]['Audit the Device'] = 'Controleer het apparaat';

$GLOBALS["lang"]['Audits'] = 'Controles';

$GLOBALS["lang"]['August'] = 'Augustus';

$GLOBALS["lang"]['Australia'] = 'Australië';

$GLOBALS["lang"]['Austria'] = 'Oostenrijk';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'Auth Methoden';

$GLOBALS["lang"]['Authenticate only'] = 'Alleen authenticatie';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Authenticatie wachtwoordzin';

$GLOBALS["lang"]['Authentication Protocol'] = 'Authenticatieprotocol';

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

$GLOBALS["lang"]['Available Benchmarks'] = 'Beschikbare benchmarks';

$GLOBALS["lang"]['Awaiting Analysis'] = 'In afwachting van analyse';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbeidzjan';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbeidzjan';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Totaal';

$GLOBALS["lang"]['Backbone network'] = 'Backbone-netwerk';

$GLOBALS["lang"]['Backup'] = 'Reservekopie';

$GLOBALS["lang"]['Bahamas the'] = 'Bahama\'s';

$GLOBALS["lang"]['Bahrain'] = 'Bahrein';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Verboden';

$GLOBALS["lang"]['Banned Packages'] = 'Verboden pakketten';

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

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Uitgangen kunnen netstat poorten, gebruikers en software vergelijken.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Uitgangen stellen u in staat om auditgegevens te combineren met een reeks attributen die u eerder hebt gedefinieerd (uw baseline) om de naleving van apparaten te bepalen.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Basiswaarden voor Apparaatvergelijking';

$GLOBALS["lang"]['Basic'] = 'Basis';

$GLOBALS["lang"]['Basque'] = 'Baskische';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Omdat we proberen om zo transparant mogelijk te zijn, hier is uw werkelijke gegevens die we verzenden.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'In staat zijn om te bepalen welke machines zijn geconfigureerd op dezelfde manier is een groot deel van de systemen administratie en auditing en nu rapportage over dat zal worden gemaakt eenvoudig en geautomatiseerd. Zodra u uw basislijn definieert zal het automatisch draaien tegen een set van apparaten op een vooraf bepaald schema. De output van deze uitgevoerde basislijnen zal beschikbaar zijn voor web viewing, importeren in een systeem van derden of zelfs als een gedrukt rapport.<br/><br/>Voor audit- en managementdoeleinden kan het voordelig zijn voor individuele basisapparatuur tegen een vast, bekend goed apparaat. Uitgangen stellen u in staat om auditgegevens te combineren met een reeks attributen die u eerder hebt gedefinieerd (uw baseline) om de naleving van apparaten te bepalen.';

$GLOBALS["lang"]['Belarus'] = 'Belarus';

$GLOBALS["lang"]['Belgium'] = 'België';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Hieronder is een voorbeeld van het vereiste csv formaat.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Onder deze regels worden de variabelen geïnjecteerd in het script. Na ons eerdere voorbeeld, het Linux audit script is bevolkt met onze directory zo';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Hieronder ziet u een voorbeeld van Org Chart. Als een gebruiker toestemming heeft op de <i>Financiën A</i> Org, ze hebben ook toestemming op de afstammeling Orgs van Dept A, B & C. Dit is ongeacht de gevraagde collectie.<br/><br/>Als de gevraagde collectie ascendants toelaat, dan heeft de gebruiker ook toegang tot Company #1 en Standaard Org items. Dit is voor (zoals hierboven) vragen, groepen, et al.<br/><br/>Opmerking - Een gebruiker kan toegang hebben tot een query van Standaard Org, maar dat is de query zelf niet het resultaat. Het resultaat toont alleen apparaten die de gebruiker toegang heeft tot - IE-apparaten van Finance A en Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Benchmarktaken worden automatisch aangemaakt wanneer een benchmark wordt gecreëerd.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Benchmark uitvoering en verwerking kan een lange tijd duren, vandaar de voorkeur om ze te plannen en niet ad-hoc uitvoeren.';

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

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarks worden gecreëerd door het leveren van een besturingssysteem en versie, gecombineerd met een specifieke gids en een lijst van machines om het uit te voeren. Na creatie worden benchmarks uitgevoerd met de lijst van machines op een schema.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Benchmarks voor beste praktijkconfiguratie';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Benchmarks bieden beveiligingsaanbevelingen voor uw computers, gebruikmakend van de OpenSCAP tools en beleidsmaatregelen.<p><i>Vanaf de homepage van OpenSCAP:</i> In de steeds veranderende wereld van computerbeveiliging waar elke dag nieuwe kwetsbaarheden worden ontdekt en gepatcht, moet handhaving van de naleving van de beveiliging een continu proces zijn. Het moet ook een manier omvatten om het beleid aan te passen, alsook periodieke evaluatie en risicobewaking. Het OpenSCAP-ecosysteem biedt tools en aanpasbaar beleid voor een snelle, kosteneffectieve en flexibele implementatie van deze processen.</p>';

$GLOBALS["lang"]['Benefits'] = 'Voordelen';

$GLOBALS["lang"]['Bengali'] = 'Bengaals';

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

$GLOBALS["lang"]['Both forms of'] = 'Beide vormen van';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazilië';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Braziliaans Portugees';

$GLOBALS["lang"]['Breaking it Down'] = 'Het afbreken ervan.';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Brits gebied in de Indische Oceaan (Chagos Archipel)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Britse Maagdeneilanden';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Blader door de boom naar Console Root -> Component Services -> Computers -> Mijn computer<br/><br/>Rechter muisknop op <i>Mijn computer</i> en eigenschappen selecteren<br/><br/>Selecteer de <i>Standaardeigenschappen</i> tab';

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

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Bouwt vertrouwen met klanten en partners';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgarije';

$GLOBALS["lang"]['Bulgarian'] = 'Bulgaars';

$GLOBALS["lang"]['Bulk Edit'] = 'Bewerken in bulk';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Vulvorm bewerken';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Apparaatattributen bewerken in bulk';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Bulk bewerken selecties niet blijven geselecteerd na het klikken op de volgende pagina.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Bedrijfsvereisten';

$GLOBALS["lang"]['Business Requirements'] = 'Bedrijfsvereisten';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Maar ik heb alleen Windows Client Machines beschikbaar!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Maar ik wil niet elke keer dat ik update het taalbestand te veranderen!';

$GLOBALS["lang"]['Buy'] = 'Kopen';

$GLOBALS["lang"]['Buy More'] = 'Koop meer';

$GLOBALS["lang"]['Buy More Licenses'] = 'Koop meer licenties';

$GLOBALS["lang"]['By'] = 'Door';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Standaard integreren we alle apparaten met hun nmis_manage attribuut ingesteld op <i>y</i>. Met 4.2.0 verzenden we ook een Regel die zegt: <i>Als we een apparaat ontdekken en het heeft een geldige SNMP OID, markeer dat apparaat zoals beheerd door NMIS</i>. Uiteraard kunt u dit uitschakelen als het niet is wat u wilt.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Standaard slaan we certificaatvalidatie over omdat klanten de neiging hebben om zelf ondertekende certificaten te gebruiken. Om certificaatvalidatie in te schakelen, bewerk het onderstaande bestand';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Masker';

$GLOBALS["lang"]['cli_config'] = 'CLI Configureren';

$GLOBALS["lang"]['CLI Config'] = 'CLI Configureren';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU\'s';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVE\'s met een status van ontvangen, wachtend op analyse, worden geanalyseerd, afgewezen. Deze CVE\'s (meestal) bevatten onvoldoende informatie om een correcte SQL query te genereren.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Berekend door ontdekking.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Berekend totaal aantal geldige IP-adressen voor dit netwerk.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Berekend na voltooiing, de tijd die nodig is om dit item uit te voeren.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Berekend wanneer integratie wordt uitgevoerd en bevat een JSON weergave van de apparaten in deze integratie. Elke links naar <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Berekend wanneer integratie wordt uitgevoerd en bevat een JSON weergave van de locaties in deze integratie. Elke links naar <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Berekend wanneer integratie wordt uitgevoerd en bevat het aantal apparaten geselecteerd uit Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Berekend wanneer integratie wordt uitgevoerd en bevat het aantal apparaten geselecteerd het externe systeem.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Berekend wanneer integratie wordt uitgevoerd en bevat het aantal apparaten dat in het externe systeem moet worden bijgewerkt.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Berekend wanneer integratie wordt uitgevoerd en bevat het aantal apparaten bijgewerkt in Open-AudIT.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Een opdrachtprompt oproepen door op Start te klikken en te zoeken <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Cambodja';

$GLOBALS["lang"]['Cameroon'] = 'Kameroen';

$GLOBALS["lang"]['Campus Area Network'] = 'Netwerk campusgebied';

$GLOBALS["lang"]['Campus area network'] = 'Campusnetwerk';

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

$GLOBALS["lang"]['Catalan'] = 'Catalaans';

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

$GLOBALS["lang"]['Certification'] = 'Certificering';

$GLOBALS["lang"]['Certification Audit'] = 'Certificeringscontrole';

$GLOBALS["lang"]['Certification Process'] = 'Certificeringsproces';

$GLOBALS["lang"]['Chad'] = 'Tsjaad';

$GLOBALS["lang"]['Change'] = 'Verschil';

$GLOBALS["lang"]['change_id'] = 'ID wijzigen';

$GLOBALS["lang"]['Change ID'] = 'ID wijzigen';

$GLOBALS["lang"]['change_log'] = 'Logboek wijzigen';

$GLOBALS["lang"]['Change Log'] = 'Logboek wijzigen';

$GLOBALS["lang"]['Change Logs'] = 'Logboek wijzigen';

$GLOBALS["lang"]['change_type'] = 'Type wijzigen';

$GLOBALS["lang"]['Change Type'] = 'Type wijzigen';

$GLOBALS["lang"]['check_minutes'] = 'Minuten controleren';

$GLOBALS["lang"]['Check Minutes'] = 'Minuten controleren';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Controleren op SSH op deze poorten';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Controleer deze poort voor elke SSH service.';

$GLOBALS["lang"]['Chile'] = 'Chili';

$GLOBALS["lang"]['China'] = 'China';

$GLOBALS["lang"]['Chinese'] = 'Chinees';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Chinees (traditioneel)';

$GLOBALS["lang"]['Choose'] = 'Kies';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Kies (selecteer OS eerst)';

$GLOBALS["lang"]['Choose a Device'] = 'Een apparaat kiezen';

$GLOBALS["lang"]['Choose a Table'] = 'Kies een tabel';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Kies het type taak vanaf de eerste dropdown. Dit zal de benodigde extra velden configureren afhankelijk van het type taak.';

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

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Klik <i>Nieuw clientgeheim</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Klik op verzenden om uit te voeren';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Klik op <i>Eigenschappen</i> onder de <i>Beheer</i> kop in de centrale menukolom. Kopiëren <i>Gebruikerstoegang URL</i>. Eenmaal gekopieerd, plak het in yout teksteditor. U moet een deel van dit veld kopiëren.<br/><br/>Ons voorbeeldveld ziet er zo uit<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>De sectie die we nodig hebben is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (de huurder ID). Dit wordt gebruikt in Open-AudIT als de <i>Huurder</i> veld, dus plak het erin.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Klik op App Registraties om een nieuwe Applicatie te maken, klik vervolgens op Nieuwe Applicatie Registratie. Geef het een naam (ik gebruikte Open-AudIT), selecteer Web App / API als het type en geef een URL (de URL is niet belangrijk) en klik nu op Create.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Klik op OK en sluit het DCOMCNFG venster.<br/><br/>De bovenstaande wijzigingen vereisen een herstart om van kracht te worden.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Klik op de toepassing die u zojuist hebt gemaakt. De Application ID weergegeven is de Client ID.<br/><br/>Om het client-geheim te maken, klikt u op Instellingen en vervolgens op Sleutels. Geef een sleutelnaam en selecteer een geschikte vervaldatum en klik vervolgens op Opslaan.<br/><br/>De waarde zal voor u worden bevolkt - dit is het Client Secret.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Klik op de knop Verwijderen om de voorbeeldapparaten uit Open-AudIT te verwijderen.<br/>Dit zal de onderstaande apparaten uit de database verwijderen. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Klik op de knop Bewerken voor <i>Basis SAML Instellingen</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Klik op de knop Importeren om Open-AudIT te vullen met voorbeeldapparaatgegevens.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Klik op het pictogram rechts van het veld dat u wilt bewerken. Wijzig het veld en klik op het groene pictogram om in te dienen.';

$GLOBALS["lang"]['Client ID'] = 'Client-ID';

$GLOBALS["lang"]['Client ID and Secret'] = 'Client ID en geheim';

$GLOBALS["lang"]['client_ident'] = 'Client Ident';

$GLOBALS["lang"]['Client Ident'] = 'Client Ident';

$GLOBALS["lang"]['client_secret'] = 'Client Secret';

$GLOBALS["lang"]['Client Secret'] = 'Client Secret';

$GLOBALS["lang"]['client_site_name'] = 'Naam van client-site';

$GLOBALS["lang"]['Client Site Name'] = 'Naam van client-site';

$GLOBALS["lang"]['Close'] = 'Sluiten';

$GLOBALS["lang"]['Closed'] = 'Gesloten';

$GLOBALS["lang"]['Cloud'] = 'Wolk';

$GLOBALS["lang"]['Cloud Details'] = 'Clouddetails';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Cloud Discovery en Auditing';

$GLOBALS["lang"]['cloud_id'] = 'Cloud-ID';

$GLOBALS["lang"]['Cloud ID'] = 'Cloud-ID';

$GLOBALS["lang"]['cloud_log'] = 'Cloudlog';

$GLOBALS["lang"]['Cloud Log'] = 'Cloudlog';

$GLOBALS["lang"]['cloud_name'] = 'Wolknaam';

$GLOBALS["lang"]['Cloud Name'] = 'Wolknaam';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud Network';

$GLOBALS["lang"]['clouds'] = 'Wolken';

$GLOBALS["lang"]['Clouds'] = 'Wolken';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Clouds zijn een functie beschikbaar voor Open-AudIT Enterprise gelicenseerde klanten.';

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

$GLOBALS["lang"]['Clusters and Reporting'] = 'Clusters en rapportage';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Cocoseilanden';

$GLOBALS["lang"]['Collection'] = 'Verzameling';

$GLOBALS["lang"]['Collections'] = 'Verzamelingen';

$GLOBALS["lang"]['Collector'] = 'Verzamelaar';

$GLOBALS["lang"]['Collector (UUID)'] = 'Verzamelaar (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Verzamelaar / Server is een Enterprise alleen functie. Bedrijfsklanten ontvangen gratis één Collector licentie. Extra Collector licenties kunnen worden gekocht zoals vereist.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Verzamelaar / Server is ontworpen zodat u een afstandsbediening of <i>verzamelaar</i> instantie van Open-AudIT die draait op een externe machine. Dat verzamelaar geval kan in een andere beveiligingszone, subnet, cloud hosting instantie of op een klanten site. De afstand verzamelaar doet dan al het ontdekken en controleren van apparaten lokaal vermijden van netwerken en firewalling complexiteit. De Verzamelaar wordt na registratie volledig gecontroleerd door de <i>server</i>. Dit betekent dat je alleen een HTTP- of HTTPS-verbinding van die Verzamelaar naar de Server nodig hebt.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Verzamelaar Dashboard';

$GLOBALS["lang"]['Collector Name'] = 'Naam verzamelaar';

$GLOBALS["lang"]['collector_uuid'] = 'Verzamelaar Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Verzamelaar Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Verzameltaken worden automatisch ingesteld wanneer de verzamelfunctie is ingeschakeld. Verzameltaken mogen niet direct door gebruikers worden aangemaakt. Verzamelaarstaken kunnen hun frequentie na creatie laten bewerken. Als de Open-AudIT Server Collectors er verslag van heeft, wordt een extra dropdown verstrekt. U kunt dit selecteren om aan te geven op welke Verzamelaar de taak moet draaien. Alleen Discovery taken worden ondersteund voor Collectors.';

$GLOBALS["lang"]['Collectors'] = 'Verzamelaars';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Verzamelaars kunnen werken in een van de twee modi: Verzamelaar en StandAlone. Wanneer in Collectormodus, wordt de instantie van Open-AudIT beheerd door de hoofdserver. Wanneer in Stand Alone-modus, wordt de instantie lokaal beheerd en stuurt alle gevonden apparaten door naar de hoofdserver.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Verzamelaars voor Remote Discovery';

$GLOBALS["lang"]['Colombia'] = 'Colombia';

$GLOBALS["lang"]['color'] = 'Kleur';

$GLOBALS["lang"]['Color'] = 'Kleur';

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

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Opmerking over de onderstaande regel (ongeveer lijn 49 of zo). Plaats gewoon een hash # aan het begin van de lijn.';

$GLOBALS["lang"]['comments'] = 'Opmerkingen';

$GLOBALS["lang"]['Comments'] = 'Opmerkingen';

$GLOBALS["lang"]['commercial'] = 'Handel';

$GLOBALS["lang"]['Commercial'] = 'Handel';

$GLOBALS["lang"]['Commercial Support'] = 'Commerciële steun';

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

$GLOBALS["lang"]['Complete these steps.'] = 'Maak deze stappen af.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Complexiteit van de aanval (laag of hoog).';

$GLOBALS["lang"]['Component Table'] = 'Componenttabel';

$GLOBALS["lang"]['Components (All Devices)'] = 'Componenten (alle apparaten)';

$GLOBALS["lang"]['Compute'] = 'Berekenen';

$GLOBALS["lang"]['Condition'] = 'Voorwaarde';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Een risicobeoordeling uitvoeren';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Bewustmakings- en opleidingsprogramma\'s uitvoeren';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Vergaderingen voor evaluatie van het beheer';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Regelmatige bewakingsaudits uitvoeren (meestal jaarlijks)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Gericht door een geaccrediteerde instantie in twee fasen';

$GLOBALS["lang"]['Config'] = 'Configureren';

$GLOBALS["lang"]['Config Default, currently '] = 'Configureren Standaard, momenteel ';

$GLOBALS["lang"]['config_file'] = 'Configuratiebestand';

$GLOBALS["lang"]['Config File'] = 'Configuratiebestand';

$GLOBALS["lang"]['config_manager_error_code'] = 'Foutcode configuratiebeheer';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Foutcode configuratiebeheer';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Configureerbare rolgebaseerde toegangscontrole (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Instellingen';

$GLOBALS["lang"]['Configuration'] = 'Instellingen';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Configuratie Change Detectie en rapportage';

$GLOBALS["lang"]['Configure'] = 'Instellen';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'De agent-serverzijde instellen om audits uit te voeren op een schema';

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

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Consulting, implementatie en andere diensten zijn beschikbaar via';

$GLOBALS["lang"]['contact'] = 'Contactpersoon';

$GLOBALS["lang"]['Contact'] = 'Contactpersoon';

$GLOBALS["lang"]['contact_name'] = 'Contactnaam';

$GLOBALS["lang"]['Contact Name'] = 'Contactnaam';

$GLOBALS["lang"]['contained_in'] = 'Ingesloten';

$GLOBALS["lang"]['Contained In'] = 'Ingesloten';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Bevat een JSON object details van de bijbehorende widgets en hun posities.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Bevat de velden die bepalen of we ssh, snmp en wmi discovery opties moeten gebruiken. Een JSON object.';

$GLOBALS["lang"]['Context & Leadership'] = 'Context & leiderschap';

$GLOBALS["lang"]['Context Engine ID'] = 'Context Engine ID';

$GLOBALS["lang"]['Context Name'] = 'Contextnaam';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Continu verbeteren van de ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Contractuele verplichtingen';

$GLOBALS["lang"]['Contractual Obligations'] = 'Contractuele verplichtingen';

$GLOBALS["lang"]['Cook Islands'] = 'Cookeilanden';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Een auditresultaat kopiëren en plakken';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopieer en plak de onderstaande naar de forums, een andere instantie van Open-AudIT of ergens anders die je nodig hebt om dit item te leveren.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Kopiëren <i>Programma-ID</i> veld en plak het in de Open-AudIT <i>Client-ID</i> veld voor de nieuwe Auth Methode.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Kopiëren <i>Client-ID</i> en plak het in de Open-AudIT <i>Client-ID</i> veld.<br/>Als er geen geheim is, klik <i>Nieuw geheim aanmaken</i>, kopieer dan de waarde en plak deze in de Open-AudIT <i>Client Secret</i> veld.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Kopieer de waarde en plak deze in het Open-AudIT formulier voor de <i>Client Secret</i> veld.';

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

$GLOBALS["lang"]['Create File'] = 'Bestand aanmaken';

$GLOBALS["lang"]['Create Geocode'] = 'Geocode aanmaken';

$GLOBALS["lang"]['create_internal_count'] = 'Intern aantal aanmaken';

$GLOBALS["lang"]['Create Internal Count'] = 'Intern aantal aanmaken';

$GLOBALS["lang"]['create_internal_from_external'] = 'Intern maken vanaf extern';

$GLOBALS["lang"]['Create Internal From External'] = 'Intern maken vanaf extern';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'NMIS-apparaten van Open-AudIT aanmaken';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Open-audIT aanmaken Apparaten van ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Open-audIT aanmaken Apparaten van NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Een baseline aanmaken voor het voorbeeldapparaat';

$GLOBALS["lang"]['Create a Discovery'] = 'Een ontdekking aanmaken';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Maak een verklaring van toepassing (SoA)';

$GLOBALS["lang"]['created_by'] = 'Aangemaakt door';

$GLOBALS["lang"]['Created By'] = 'Aangemaakt door';

$GLOBALS["lang"]['created_date'] = 'Aangemaakte datum';

$GLOBALS["lang"]['Created Date'] = 'Aangemaakte datum';

$GLOBALS["lang"]['Creating'] = 'Aanmaken';

$GLOBALS["lang"]['Creating Credentials'] = 'Het creëren van geloofsbrieven';

$GLOBALS["lang"]['Creating Device'] = 'Apparaat aanmaken';

$GLOBALS["lang"]['Creating Widgets'] = 'Widgets aanmaken';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Een ontdekking aanmaken Scanopties invoer';

$GLOBALS["lang"]['Creating a Query'] = 'Een zoekopdracht aanmaken';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Een SQL-verklaring voor groepen aanmaken';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Een SQL-verklaring voor vragen aanmaken';

$GLOBALS["lang"]['Creating an Integration'] = 'Een integratie creëren';

$GLOBALS["lang"]['creator'] = 'Maker';

$GLOBALS["lang"]['Creator'] = 'Maker';

$GLOBALS["lang"]['credential'] = 'Credentieel';

$GLOBALS["lang"]['Credential'] = 'Credentieel';

$GLOBALS["lang"]['Credentials'] = 'Identiteit';

$GLOBALS["lang"]['Credentials Client ID'] = 'Identiteitskaart van de cliënt';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Abonnement op de geloofsbrieven ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Identiteitskaart van de houder';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'In de <i>referenties</i> databasetabel. De werkelijke informatie wordt versleuteld in opslag. Wanneer een Discovery wordt uitgevoerd, een apparaat heeft zijn specifieke referenties opgehaald uit de database, gedecodeerd en getest. Als deze falen de lijst van referenties wordt ook opgehaald, gedecodeerd en vervolgens getest tegen het apparaat te beginnen met referenties waarvan bekend is dat eerder gewerkt. Apparaat specifieke referenties worden opgeslagen op een individueel apparaat niveau in de <i>credentieel</i> tabel (noot - nee <i>s</i> in de tabelnaam). SSH sleutels worden getest voor SSH gebruikersnaam / wachtwoord. Bij het testen van SSH worden referenties ook gemarkeerd als werken met sudo of root zijn.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Geheimen kunnen een van een paar verschillende types hebben - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows zijn allemaal geïmplementeerd. CAVEAT - ssh sleutels zijn nog niet geïmplementeerd voor Windows Open-AudIT servers.';

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

$GLOBALS["lang"]['Custom Fields'] = 'Aangepaste velden';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Aangepaste TCP-poorten';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Aangepaste TCP-poorten. Elke specifieke poort die we zouden scannen naast de Top TCP Ports. Comma gescheiden, geen ruimtes.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Aangepaste UDP Havens';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Aangepaste UDP poorten. Elke specifieke poort die we zouden scannen naast de Top UDP Ports. Comma gescheiden, geen ruimtes.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Aangepaste scanopties per ontdekking';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Cyprus';

$GLOBALS["lang"]['Czech'] = 'Tsjechisch';

$GLOBALS["lang"]['Czech Republic'] = 'Tsjechië';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN-rekening (facultatief)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN-wachtwoord (facultatief)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS-hostnaam';

$GLOBALS["lang"]['Danish'] = 'Deens';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard-ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard-ID';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Dashboard-widgets';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboards en Widgets toestaan Enterprise licentie klanten om te maken, lezen, bijwerken en verwijderen van deze collecties om ervoor te zorgen dat hun homepage is precies wat ze nodig hebben om te zien. Niet alleen dat, maar een gebruiker kan een gegeven dashboard als eigen homepage instellen. Niet iedereen hoeft dezelfde homepage (dashboard) of dezelfde widgets op dat dashboard te gebruiken. Professionele gelicenseerde klanten kunnen kiezen tussen twee vooraf gedefinieerde dashboards om als eigen homepage in te stellen.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Dashboards bieden <i>in één oogopslag</i> belangrijke zichtbaarheid voor veranderingen op uw netwerk en het verstrekken van snelle links naar apparaattypes, fabrikanten, en besturingssystemen en nog veel meer.';

$GLOBALS["lang"]['Dashboards use'] = 'Gebruik van dashboards';

$GLOBALS["lang"]['Data'] = 'Gegevens';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Data Export - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Gegevensbewaring';

$GLOBALS["lang"]['Database'] = 'Database';

$GLOBALS["lang"]['db_action'] = 'Databaseactie';

$GLOBALS["lang"]['Database Action'] = 'Databaseactie';

$GLOBALS["lang"]['db_column'] = 'Databankkolom';

$GLOBALS["lang"]['Database Column'] = 'Databankkolom';

$GLOBALS["lang"]['Database Definition'] = 'Databasedefinitie';

$GLOBALS["lang"]['db_row'] = 'Databaserij';

$GLOBALS["lang"]['Database Row'] = 'Databaserij';

$GLOBALS["lang"]['Database Schema'] = 'Databaseschema';

$GLOBALS["lang"]['Database Server Discovery'] = 'Databaseserver ontdekken';

$GLOBALS["lang"]['db_table'] = 'Databasetabel';

$GLOBALS["lang"]['Database Table'] = 'Databasetabel';

$GLOBALS["lang"]['Database Tables'] = 'Databasetabellen';

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

$GLOBALS["lang"]['Debugging'] = 'Debuggen';

$GLOBALS["lang"]['Debugging a Script'] = 'Een script debuggen';

$GLOBALS["lang"]['December'] = 'December';

$GLOBALS["lang"]['Decommission'] = 'Ontmanteling';

$GLOBALS["lang"]['Default'] = 'Standaard';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Standaard aanmeldingscontrole Niveau - Verbinden instellen';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Standaard imitatie Niveau - Aanmaken';

$GLOBALS["lang"]['Default Items'] = 'Standaard items';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Standaard orgs groepen';

$GLOBALS["lang"]['Default Roles Groups'] = 'Standaard rollengroepen';

$GLOBALS["lang"]['Default Value'] = 'Standaardwaarde';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Standaard van 389. Normaal gesproken 636 gebruikt voor Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Standaard van <code>3</code> voor LDAP en Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Standaardinstellingen';

$GLOBALS["lang"]['Deferred'] = 'Afgeleid';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Definieer het toepassingsgebied en de doelstellingen van het project';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Definieer de ISMS-scope';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Definieer de context van de organisatie (interne/externe kwesties)';

$GLOBALS["lang"]['delay_minutes'] = 'Vertragingsminuten';

$GLOBALS["lang"]['Delay Minutes'] = 'Vertragingsminuten';

$GLOBALS["lang"]['Delete'] = 'Verwijderen';

$GLOBALS["lang"]['Delete Example Devices'] = 'Voorbeeldapparaten verwijderen';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Externe verwijderen uit intern';

$GLOBALS["lang"]['Delete External From Internal'] = 'Externe verwijderen uit intern';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'NMIS verwijderen Apparaten indien niet in Open-AudIT';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Verwijder een {collectie}-item.';

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

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Details van wie meestal bereikbaar is op deze site.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Bepaal hoe vaak u de baseline check wilt uitvoeren met de database en maak een Gepland Rapport';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Opties voor risicobehandeling bepalen';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Ontwikkelen van een risicobehandelingsplan';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Beleid, procedures en controles ontwikkelen';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'De vereiste ISMS-documentatie ontwikkelen (beleid, procedures, enz.)';

$GLOBALS["lang"]['device'] = 'Apparaat';

$GLOBALS["lang"]['Device'] = 'Apparaat';

$GLOBALS["lang"]['Device Audits'] = 'Apparaataudits';

$GLOBALS["lang"]['Device Component Names'] = 'Naam apparaatcomponent';

$GLOBALS["lang"]['Device ID'] = 'Apparaat-ID';

$GLOBALS["lang"]['device_id'] = 'Apparaat-ID';

$GLOBALS["lang"]['device_id_a'] = 'Apparaat-ID A';

$GLOBALS["lang"]['Device ID A'] = 'Apparaat-ID A';

$GLOBALS["lang"]['device_id_b'] = 'Apparaat-ID B';

$GLOBALS["lang"]['Device ID B'] = 'Apparaat-ID B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Bijpassende regels voor apparaat';

$GLOBALS["lang"]['Device Name'] = 'Apparaatnaam';

$GLOBALS["lang"]['Device Result'] = 'Apparaatresultaat';

$GLOBALS["lang"]['Device Results'] = 'Apparaatresultaten';

$GLOBALS["lang"]['Device Seed'] = 'Apparaatzaad';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Apparaatzaad Ontdekkingen zijn een goede optie als je weet dat je netwerk bestaat uit een scala aan subnetten, maar je weet niet zeker wat ze zijn. Seed de ontdekking met een lokale router en kijk hoe uw netwerk zich ontvouwt voor uw ogen.';

$GLOBALS["lang"]['Device Seed IP'] = 'Apparaatzaad-IP';

$GLOBALS["lang"]['Device Status'] = 'Apparaatstatus';

$GLOBALS["lang"]['Device Types'] = 'Apparaattypen';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Apparaat, Software en Hardware Auditing';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Apparaat bevindt zich in het Subnet';

$GLOBALS["lang"]['Devices'] = 'Apparaten';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Aan locatie toegewezen apparaten';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Aan locatie toegewezen apparaten';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Aan org toegewezen apparaten';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Aan org toegewezen apparaten';

$GLOBALS["lang"]['Devices Audited'] = 'Geauditeerde apparaten';

$GLOBALS["lang"]['Devices Collection'] = 'Apparatenverzameling';

$GLOBALS["lang"]['Devices Created in '] = 'Apparaten aangemaakt in ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Apparaten aangemaakt in Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Apparaten Standaard weergegeven kolommen';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Apparaten Standaard weergegeven kolommen';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Apparaten gevonden laatste 7 dagen';

$GLOBALS["lang"]['Devices Found Today'] = 'Vandaag gevonden apparaten';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Apparaten gevonden gisteren';

$GLOBALS["lang"]['Devices Missing Information'] = 'Apparaten ontbrekende informatie';

$GLOBALS["lang"]['Devices Not Audited'] = 'Hulpmiddelen niet gecontroleerd';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Apparaten die 30 dagen niet zijn gezien';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Apparaten 7 dagen niet gezien';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Apparaten die 90 dagen niet zijn gezien';

$GLOBALS["lang"]['Devices Older Than X'] = 'Apparaten ouder dan X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Apparaten opgehaald via API';

$GLOBALS["lang"]['Devices Selected from '] = 'Apparaten geselecteerd uit ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Apparaten geselecteerd uit Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Apparaten bijgewerkt in ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Apparaten bijgewerkt in Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'De apparaten worden gebenchmarkt.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'De apparaten worden niet gebenchmarkt.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'De apparaten kunnen worden gebenchmarkt.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Apparaten van Open-AudIT';

$GLOBALS["lang"]['Devices in Running State'] = 'Apparaten in draaiende staat';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Apparaten in gestopte staat';

$GLOBALS["lang"]['Devices in this'] = 'Apparaten in deze';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Apparaten zullen niet worden aangepast als hun status is ingesteld op <i>geschrapt</i>. Elke andere status zal een overeenkomst mogelijk maken.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Apparaten met verlopen garanties';

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

$GLOBALS["lang"]['Discoveries'] = 'Ontdekkingen';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Ontdekkingen vormen het hart van wat Open-AudIT doet. Hoe weet je dat anders? <i>Wat is er op je netwerk?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Ontdekkingen zijn items die u in staat stellen om een ontdekking uit te voeren op een netwerk in een enkele klik, zonder de details van dat netwerk elke keer.';

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

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Discovery Scan Opties zijn gewoon een item verzameling. Enterprise gebruikers kunnen maken, lezen, bijwerken en verwijderen items zoals vereist. Professionele gebruikers kunnen alle items lezen, maar geen nieuwe items aanmaken, bestaande items bijwerken of items verwijderen. Communautaire gebruikers hebben geen GUI die toegang tot deze collectie mogelijk maakt.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Ontdekkingsscantypes';

$GLOBALS["lang"]['Discovery Support'] = 'Ondersteuning voor ontdekking';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Discovery is gestopt met werken';

$GLOBALS["lang"]['disk'] = 'Schijf';

$GLOBALS["lang"]['Disk'] = 'Schijf';

$GLOBALS["lang"]['display_version'] = 'Versie tonen';

$GLOBALS["lang"]['Display Version'] = 'Versie tonen';

$GLOBALS["lang"]['Display in Menu'] = 'Weergave in het menu';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Toont een standaard webformulier voor indiening bij POST /{collectie}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Toont een standaard webformulier voor het indienen bij POST /{collectie}/import.';

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

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Vergeet de Open-AudIT wiki niet voor al uw documentatie.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Vergeet niet dat er een berg van documentatie op de wiki';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Scan deze TCP-poorten niet.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Scan deze UDP-poorten niet.';

$GLOBALS["lang"]['Do not show me again'] = 'Laat me niet meer zien';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Heeft u een perfect voorbeeld van deze configuratie? Misschien een apparaat dat zich bevindt in een laboratoriumomgeving of een werkstation dat je gebruikt om werkstation VM\'s te klonen.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Wilt u veilig transport (LDAPS) of regelmatig ongecodeerde LDAP gebruiken.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Wilt u de standaard zijbalk links zien?';

$GLOBALS["lang"]['documentation'] = 'Documentatie';

$GLOBALS["lang"]['Documentation'] = 'Documentatie';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Documentatie over een bepaalde verzameling.';

$GLOBALS["lang"]['Does Not Equal'] = 'Niet gelijk';

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

$GLOBALS["lang"]['Download a File'] = 'Een bestand downloaden';

$GLOBALS["lang"]['Download a file from URL'] = 'Een bestand downloaden van URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Download het test_windows_client.vbs script direct';

$GLOBALS["lang"]['Download your updated version from'] = 'Download uw bijgewerkte versie van';

$GLOBALS["lang"]['driver'] = 'Stuurprogramma';

$GLOBALS["lang"]['Driver'] = 'Stuurprogramma';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Apparaten/ontbrekende apparaten dupliceren';

$GLOBALS["lang"]['duration'] = 'Duur';

$GLOBALS["lang"]['Duration'] = 'Duur';

$GLOBALS["lang"]['Dutch'] = 'Nederlands';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Elk IP wordt gescand met de ontdekte opties (zie Discovery Scan Opties en Discovery - Community vs Professional vs Enterprise op de wiki). In het algemeen zal Nmap testen op poorten 22 (ssh), 135 (wmi), 62078 (iPhone) en UDP 161 (snmp). Als 22, 135 of 161 reageren wordt de credential lijst opgehaald en elke credential getest op zijn beurt. De eerste werkgegevens worden gebruikt voor verdere vragen direct vanaf het apparaat. Opmerking - als een apparaat eerder is ontdekt en heeft werkende referenties, die referenties worden eerst getest. Alleen als die falen zijn de andere referenties dan geprobeerd.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Elke keer dat een apparaat wordt ontdekt of een auditresultaat wordt verwerkt, worden alle regels uit de database gehaald en uitgevoerd tegen de eigenschappen van het specifieke apparaat. Regels tegen één apparaat tegelijk - er is geen mogelijkheid om te zeggen <i>Voer de regels uit tegen alle apparaten<i> of <i>Voer de regels uit tegen deze apparaten<i>. Een individuele regel zal een of meer eigenschappen van het apparaat testen en als ze overeenkomen met de regel, wordt het resultaat toegepast. Verschillende eigenschappen kunnen worden getest. Verschillende attributen kunnen worden ingesteld. Zie dit als een If This, Then That system for Open-AudIT.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Eenvoudig een ontdekking uitvoeren op een netwerk in een enkele klik, zonder het invoeren van de details van dat netwerk elke keer.';

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

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Gedistribueerde COM inschakelen op deze computer - optie is aangevinkt';

$GLOBALS["lang"]['enabled'] = 'Ingeschakeld';

$GLOBALS["lang"]['Enabled'] = 'Ingeschakeld';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Het inschakelen van de functie onder Windows';

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

$GLOBALS["lang"]['Endpoint'] = 'Eindpunt';

$GLOBALS["lang"]['English'] = 'Engels';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Betere naleving van de regelgeving';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Verrijking is compleet. De CVE heeft volledige metadata en wordt als stabiel beschouwd.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Zorg ervoor dat de documentatie gecontroleerd en toegankelijk is';

$GLOBALS["lang"]['enterprise'] = 'Onderneming';

$GLOBALS["lang"]['Enterprise'] = 'Onderneming';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Privé-netwerk van ondernemingen';

$GLOBALS["lang"]['Enterprise private network'] = 'Privé-netwerk voor ondernemingen';

$GLOBALS["lang"]['Entitlement Type'] = 'Soort recht';

$GLOBALS["lang"]['Entra'] = 'Entra';

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

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Een projectplan en tijdschema opstellen';

$GLOBALS["lang"]['Establish an information security policy'] = 'Vaststelling van een beleid inzake informatiebeveiliging';

$GLOBALS["lang"]['Established'] = 'Opgericht';

$GLOBALS["lang"]['Estonia'] = 'Estland';

$GLOBALS["lang"]['Estonian'] = 'Ests';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Ethiopië';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'De ISMS intern evalueren';

$GLOBALS["lang"]['Every'] = 'Elke';

$GLOBALS["lang"]['Every Day'] = 'Elke dag';

$GLOBALS["lang"]['Example'] = 'Voorbeeld';

$GLOBALS["lang"]['Example Devices'] = 'Voorbeeldapparaten';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Voorbeeld Org grafiek met toegang';

$GLOBALS["lang"]['Example text from'] = 'Voorbeeld tekst van';

$GLOBALS["lang"]['Examples'] = 'Voorbeelden';

$GLOBALS["lang"]['Exceptions'] = 'Uitzonderingen';

$GLOBALS["lang"]['exclude'] = 'Exclusief';

$GLOBALS["lang"]['Exclude'] = 'Exclusief';

$GLOBALS["lang"]['exclude_ip'] = 'IP uitsluiten';

$GLOBALS["lang"]['Exclude IP'] = 'IP uitsluiten';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'IP-adressen uitsluiten';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Uitgesloten IP-adressen (individueel IP - 192.168.1.2000, bereik - 192.168.1.30-40 of subnetten - 192.168.1.100/30) vermeld van worden gescand. Comma gescheiden, geen ruimtes.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCP-poorten uitsluiten';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Tcp-poorten uitsluiten';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Tcp-poorten uitsluiten';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP-poorten uitsluiten';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udp-poorten uitsluiten';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udp-poorten uitsluiten';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Afsluiten van alle ports vermeld van worden gescand. Comma gescheiden, geen ruimtes.';

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

$GLOBALS["lang"]['Exporting a Device'] = 'Een apparaat exporteren';

$GLOBALS["lang"]['expose'] = 'Expose';

$GLOBALS["lang"]['Expose'] = 'Expose';

$GLOBALS["lang"]['External'] = 'Extern';

$GLOBALS["lang"]['External Field Name'] = 'Externe veldnaam';

$GLOBALS["lang"]['External Field Type'] = 'Extern veldtype';

$GLOBALS["lang"]['External Field Types'] = 'Externe veldtypes';

$GLOBALS["lang"]['external_ident'] = 'Externe identificatie';

$GLOBALS["lang"]['External Ident'] = 'Externe identificatie';

$GLOBALS["lang"]['external_link'] = 'Externe koppeling';

$GLOBALS["lang"]['External Link'] = 'Externe koppeling';

$GLOBALS["lang"]['extra_columns'] = 'Extra kolommen';

$GLOBALS["lang"]['Extra Columns'] = 'Extra kolommen';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Extra en tijd gebaseerde rapportage';

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

$GLOBALS["lang"]['Fields attributes are'] = 'Veldattributen zijn';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji de Fiji-eilanden';

$GLOBALS["lang"]['File'] = 'Bestand';

$GLOBALS["lang"]['File Auditing'] = 'Bestandscontrole';

$GLOBALS["lang"]['File Import'] = 'Bestand Importeren';

$GLOBALS["lang"]['File Input'] = 'Bestandsinvoer';

$GLOBALS["lang"]['file_name'] = 'Bestandnaam';

$GLOBALS["lang"]['File Name'] = 'Bestandnaam';

$GLOBALS["lang"]['File Share Discovery'] = 'Bestand Delen Discovery';

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

$GLOBALS["lang"]['Filtered Ports'] = 'Gefilterde poorten';

$GLOBALS["lang"]['Finland'] = 'Finland';

$GLOBALS["lang"]['Finnish'] = 'Fins';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['Firewall Packages'] = 'Firewall pakketten';

$GLOBALS["lang"]['firewall_rule'] = 'Firewall-regel';

$GLOBALS["lang"]['Firewall Rule'] = 'Firewall-regel';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware Revisie';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware Revisie';

$GLOBALS["lang"]['First'] = 'Eerste';

$GLOBALS["lang"]['First Name'] = 'Voornaam';

$GLOBALS["lang"]['first_run'] = 'Eerste uitvoeren';

$GLOBALS["lang"]['First Run'] = 'Eerste uitvoeren';

$GLOBALS["lang"]['first_seen'] = 'Eerste keer gezien';

$GLOBALS["lang"]['First Seen'] = 'Eerste keer gezien';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Eerste focus op wat de uiteindelijke behoefte is: probeer je naar basissoftware, gebruikers, of Netstat gegevens? Wat is het belangrijkste om te vergelijken en te rapporteren?';

$GLOBALS["lang"]['FirstWave'] = 'Eerste golf';

$GLOBALS["lang"]['Fix'] = 'Repareren';

$GLOBALS["lang"]['Fixed'] = 'Vast';

$GLOBALS["lang"]['Fixing the Issue'] = 'Het probleem oplossen';

$GLOBALS["lang"]['Floor'] = 'Verdieping';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Volg een van onderstaande links en ontdek hoe u Open-AudIT kunt gebruiken om erachter te komen <b>Wat is er op je netwerk?</b>';

$GLOBALS["lang"]['For'] = 'Voor';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Voor <i>Type</i> Zorg ervoor dat u Baseline selecteert, en voor Groep moet u een groep apparaten selecteren, indien van toepassing op deze basislijn, die het beste de apparaten vertegenwoordigen waarmee de basislijn kan worden toegepast. Dit voorkomt verkeerde vermeldingen.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Voor Debian/Ubuntu run, inclusief het instellen van dpkg om je override te onthouden zodat een apt-get upgrade niet breekt';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Voor SNMP Open-AudIT kan gebruik maken van v1, v2 en v3 referenties. Het apparaat wordt gevraagd ongeacht of het een router, switch (regelmatige netwerkapparaten) of een computer (Linux en Windows draaien vaak SNMP voor monitoring tools).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Voor een primer op cron, zie deze Wikipedia pagina';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Voor een zaad ontdekking, moet ik alleen IP\'s ontdekken in de privé IP adresruimte.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Voor een zaad ontdekking, moet ik alleen IP\'s ontdekken op het gekozen subnet.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Voor een zaad ontdekking, moet ik ping het subnet voordat de ontdekking.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Voor geavanceerde invoer van een ruwe SQL query. Volgens Queries, moet u <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Voor elk verkregen proces komt het volgende voor.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Bijvoorbeeld - u zou een basislijn kunnen maken van een apparaat met Redhat 9 dat fungeert als een van uw Apache servers in een cluster. Je weet dat deze specifieke server is geconfigureerd zoals je het wilt, maar je weet niet zeker of andere servers in het cluster precies hetzelfde zijn geconfigureerd. Uitgangen stellen u in staat om dit te bepalen.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Bijvoorbeeld - u zou een basislijn kunnen maken van een apparaat met Redhat 9 dat fungeert als een van uw Apache servers in een cluster. Je weet dat deze specifieke server is geconfigureerd zoals je het wilt, maar je weet niet zeker of andere servers in het cluster precies hetzelfde zijn geconfigureerd. Baselines stelt u in staat om dit te bepalen.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Voor meer informatie, zie de wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Voor licenties die niet eeuwigdurend zijn, wanneer vervalt de licentie.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Kijk voor meer informatie op de Open-AudIT Knowledge Base.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Voor meer informatie zie de onderstaande gids met een video. Gebruik';

$GLOBALS["lang"]['For more information, see'] = 'Voor meer informatie, zie';

$GLOBALS["lang"]['form_factor'] = 'Vormfactor';

$GLOBALS["lang"]['Form Factor'] = 'Vormfactor';

$GLOBALS["lang"]['format'] = 'Formaat';

$GLOBALS["lang"]['Format'] = 'Formaat';

$GLOBALS["lang"]['Forth'] = 'Forth';

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

$GLOBALS["lang"]['From that page'] = 'Van die pagina';

$GLOBALS["lang"]['full_name'] = 'Volledige naam';

$GLOBALS["lang"]['Full Name'] = 'Volledige naam';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Volledige cloud auditing met alle details van een reguliere Open-AudIT audit EN details zoals het machinetype en de grootte.';

$GLOBALS["lang"]['function'] = 'Functie';

$GLOBALS["lang"]['Function'] = 'Functie';

$GLOBALS["lang"]['GROUP BY'] = 'GROEP PER';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Galician'] = 'Galicisch';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Gapanalyse (facultatief)';

$GLOBALS["lang"]['gateway'] = 'Poort';

$GLOBALS["lang"]['Gateway'] = 'Poort';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Gegenereerd door';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'Geografische kaarten';

$GLOBALS["lang"]['Georgia'] = 'Georgië';

$GLOBALS["lang"]['German'] = 'Duits';

$GLOBALS["lang"]['Germany'] = 'Duitsland';

$GLOBALS["lang"]['Get Lat/Long'] = 'Lat/Lang halen';

$GLOBALS["lang"]['Get News'] = 'Nieuws ophalen';

$GLOBALS["lang"]['Get Started'] = 'Starten';

$GLOBALS["lang"]['Get a Free License'] = 'Koop een gratis licentie';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Maak kennis met het Open-AudIT platform en ontdek enkele van de functies.';

$GLOBALS["lang"]['Getting Started'] = 'Starten';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Globale zoekopties';

$GLOBALS["lang"]['Global area network'] = 'Wereldwijd netwerk';

$GLOBALS["lang"]['Go'] = 'Ga';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Ga terug naar uw Open-AudIT-server en creëer een ontdekking met het doel Windows-computers IP-adres als subnet (dit zal het hele subnet opnieuw moeten ontdekken). Doe de ontdekking, neem nota van eventuele problemen. Neem voor alle gevonden problemen passende maatregelen.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Ga naar het doel Windows PC (of gebruik RDP) en log in als de gebruiker die wordt gebruikt door uw ontdekking credential set.';

$GLOBALS["lang"]['Go to menu'] = 'Ga naar menu';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Ga naar de <i>Aanvragen</i> -> <i>Appregistraties</i> menu-item links. Zoek naar Open-AudIT. Klik op het Open-AudIT-item in de lijst (als je de app Open-AudIT hebt genoemd).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Ga naar de <i>Certificaten en geheimen</i> menu item onder <i>Beheer</i> in het middenmenu.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Ga naar de <i>Enig teken</i> menu item en klik op SAML voor <i>Selecteer één aanmeldmethode</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Bereken velden';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Identiteit';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Sleutel';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Geweldig, dan kun je helpen! Eerst verzenden Zwaai de tekst in de GUI en wat getoond moet worden. We zullen opnemen dat in het taalbestand zo vooruitgaan, de vertaling is verbeterd en u hoeft zich geen zorgen te maken over het bijwerken van het voor elke release!';

$GLOBALS["lang"]['Greater Than'] = 'Groter dan';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Groter dan of gelijk aan';

$GLOBALS["lang"]['Greece'] = 'Griekenland';

$GLOBALS["lang"]['Greek'] = 'Grieks';

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

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Groepen worden gebruikt als eenvoudige lijsten van apparaten die voldoen aan de vereiste voorwaarden. Op verzoek van JSON wordt een lijst van <i>devices.id</i> Alleen. Indien gevraagd via de webinterface, geven ze de standaard kolom attribuutlijst terug. Groepen kunnen worden gebruikt voor Integraties, Basislijnen en andere items.';

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

$GLOBALS["lang"]['Hardware'] = 'Hardheid';

$GLOBALS["lang"]['hardware_revision'] = 'Hardware herziening';

$GLOBALS["lang"]['Hardware Revision'] = 'Hardware herziening';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Is dit beleid in deze organisatie toegepast?';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Laat de agent altijd het laatste audit script uitvoeren (als je Open-AudIT upgrade en de scripts handmatig kopieert naar de targets, stel dan cron in - je moet deze scripts bijwerken voor elke upgrade).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Laat uw gebruiker een opdrachtprompt openen (met <i>Uitvoeren als beheerder</i>). Plak de onderstaande in de prompt om de agent te downloaden.';

$GLOBALS["lang"]['Head'] = 'Hoofd';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island en McDonald Islands';

$GLOBALS["lang"]['Hebrew'] = 'Hebreeuws';

$GLOBALS["lang"]['height'] = 'Hoogte';

$GLOBALS["lang"]['Height'] = 'Hoogte';

$GLOBALS["lang"]['Height in RU'] = 'Hoogte in spoorwegonderneming';

$GLOBALS["lang"]['Help'] = 'Hulp';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Hulp en veelgestelde vragen';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Helpt bij het beheren en beperken van informatiebeveiligingsrisico\'s';

$GLOBALS["lang"]['Hide Audit Window'] = 'Auditvenster verbergen';

$GLOBALS["lang"]['high'] = 'Hoog';

$GLOBALS["lang"]['High'] = 'Hoog';

$GLOBALS["lang"]['High Availability'] = 'Hoge beschikbaarheid';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Heilige Stoel (Vaticaanstad)';

$GLOBALS["lang"]['Home'] = 'Begin';

$GLOBALS["lang"]['home'] = 'Begin';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Home area network'] = 'Home area network';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Hostnaam';

$GLOBALS["lang"]['Hostname'] = 'Hostnaam';

$GLOBALS["lang"]['hour'] = 'Uur';

$GLOBALS["lang"]['Hour'] = 'Uur';

$GLOBALS["lang"]['How Does It Work?'] = 'Hoe werkt het?';

$GLOBALS["lang"]['How Does it Work?'] = 'Hoe werkt het?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Hoe lang duurt het?';

$GLOBALS["lang"]['How and Why is'] = 'Hoe en waarom is';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Hoe en waarom is Open-AudIT veiliger';

$GLOBALS["lang"]['How do they work?'] = 'Hoe werken ze?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Hoe vindt een Device Seed Discovery bekende IP\'s?';

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

$GLOBALS["lang"]['Hungarian'] = 'Hongaars';

$GLOBALS["lang"]['Hungary'] = 'Hongarije';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Ik heb de EULA gelezen.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Ik hoop dat dit bericht alle zorgen die je hebt over Open-AudIT en Veiligheid heeft weggenomen. Als u nog vragen heeft, aarzel dan niet om contact met ons op te nemen hier bij FirstWave. We zijn altijd blij om uw zorgen en behoeften te bespreken. En misschien als uw vraag niet iets is wat ik hier heb behandeld, kan ik het hier toevoegen voor toekomstige gebruikers';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'ALS';

$GLOBALS["lang"]['IMPORTANT'] = 'BELANGRIJK';

$GLOBALS["lang"]['INPUTS'] = 'INPUTS';

$GLOBALS["lang"]['IOS Version'] = 'IOS-versie';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP-adres';

$GLOBALS["lang"]['IP Addresses'] = 'IP-adressen';

$GLOBALS["lang"]['IP Last Seen'] = 'IP laatst bekeken';

$GLOBALS["lang"]['IP Set By'] = 'IP ingesteld op';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

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

$GLOBALS["lang"]['Identify information assets'] = 'Identificatiegegevens activa';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Vermeld de belanghebbenden en hun eisen';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'De belangrijkste belanghebbenden identificeren en rollen toewijzen';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Identificeer het apparaat(s) dat uw voorbeeldig zijn, of <i>gouden afbeelding</i> u vergelijkbare apparaten wilt vergelijken met.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Vaststelling en evaluatie van veiligheidsrisico\'s';

$GLOBALS["lang"]['If'] = 'Als';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Als een apparaat individueel wordt ontdekt met behulp van de <i>Apparaat ontdekken</i> link op de device details pagina, we eerst controleren of dit apparaat eerder is ontdekt (door Discovery) en zo ja, gebruik de ontdekkingsopties van die scan. Als het niet eerder is ontdekt, keren we terug naar de configuratie item discovery_default_scan_option de instellingen.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Als een nieuwe Org wordt aangemaakt, wordt een LDAP-groepsnaam automatisch afgeleid van de naam. Als bijvoorbeeld een nieuwe org wordt aangemaakt en Test wordt genoemd, wordt de overeenkomstige LDAP-groep open-audit_orgs_test genoemd.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Als een poort reageert met gefilterd, moeten we het beschikbaar achten.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Als een poort reageert met een open';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Als er geen apparaat op afstand bestaat in de geselecteerde apparaten van Open-AudIT, moeten we het uit het externe systeem verwijderen.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Als een Open-AudIT apparaat is gewijzigd, moeten we het externe systeem bijwerken.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Als een Open-AudIT-apparaat niet op het externe systeem staat, moeten we het aanmaken.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Als een agent rapporteert dat zijn primaire IP in dit subnet zit, voer dan de acties uit.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Als een van deze (coma gescheiden, geen spaties) poorten worden gedetecteerd, neem dan aan dat SSH erop draait en gebruik ze voor controle. U hoeft deze poort niet toe te voegen aan de Aangepaste TCP poorten - deze wordt automatisch toegevoegd.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Als er geen operator is opgegeven, is de standaard =. Eigenschappen moeten volledig gekwalificeerd zijn - dwz, devices.hostname (niet alleen hostname).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Als er geen waarde aanwezig is, geef dan deze waarde. EG: voor system.nmis_group / configuraion. groep die we gebruiken';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Indien ingesteld, bevat een JSON array van specifieke device kolommen die deze gebruiker heeft gekozen om te zien, anders dan de configuratie standaard.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Als de OS Family (zoals gemeld door het apparaat) dit item bevat, pas.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Als de Open-AudIT Server Collectors er verslag van heeft, wordt een extra dropdown verstrekt. U kunt dit selecteren om aan te geven op welke Verzamelaar de taak moet draaien. Alleen Discovery taken worden ondersteund voor Collectors.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Als de agent OS familie (hoofdletter ongevoelig) deze tekenreeks bevat, voer dan de acties uit.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Als het binaire bestand niet op een van deze locaties wordt gevonden, wordt een waarschuwingsbericht weergegeven in het installatieprogramma.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Indien aan de volgende voorwaarden is voldaan:<br/><ul><li>a Role heeft een toegewezen ad_group</li><li>een Org heeft een toegewezen ad_groep</li><li>een LDAP Server heeft use_roles ingesteld op y</li><li>een gebruiker bestaat in LDAP (of het nu Active Directory of OpenLDAP is) en bevindt zich in de toegewezen ad_groups</li></ul>Die gebruiker kan inloggen op Open-AudIT zonder dat er een account in Open-AudIT moet worden aangemaakt. Open-AudIT zal de LDAP in kwestie opvragen en als de gebruiker in de vereiste groepen zit maar niet in Open-AudIT, worden de gebruikersattributen (naam, volledige naam, e-mail, rollen, orgs, etc) binnen Open-AudIT automatisch ingevuld en worden ze ingelogd.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Als het lokale veld waar is (bool) of y (string) of Y (string) of 1 (integer) stel dan de externe gegevens in op 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Als het lokale veld waar is (bool) of y (string) of Y (string) of 1 (integer) stel dan de externe gegevens in op y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Als het primaire IP (zoals gerapporteerd door het apparaat) in dit subnet zit, pas dan.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Als het gebruikersaccount niet bestaat binnen Open-AudIT en <code>use_authorisation</code> is ingesteld, de gebruiker zal worden gemaakt. Als het bestaat, details zoals e-mail, volledige naam, etc zal worden bevolkt.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Als de gebruiker geen geldige referenties heeft of niet in ten minste één Open-AudIT Role en Group zit (bij gebruik <code>use_authorisation</code>), Open-AudIT zal terugvallen op het gebruik van lokale Open-AudIT gebruikersgegevens en poging tot authenticatie en autorisatie daar. Als dat niet lukt, zal de gebruiker geen toegang krijgen.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Als de gebruiker die zich aanmeldt bij Open-AudIT geen toegang heeft om LDAP te zoeken, kunt u een ander account gebruiken dat deze toegang heeft.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Als de gebruiker die zich aanmeldt bij Open-AudIT geen toegang heeft om te zoeken naar OpenLDAP, kunt u een ander account gebruiken dat deze toegang heeft. Gebruik het dn_account en dn_password om dit te configureren.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Als de waarde niet is ingesteld, wordt de huidige tijdstempel gebruikt.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Als de waarde is ingesteld, zal die tijdstempelwaarde worden gebruikt.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Als deze verandering niet werkt voor u, is niet alles verloren. We hebben een configuratie-item toegevoegd (standaard ingesteld op n, dus het zal niet deze nieuwe optie uit het vak gebruiken) genaamd discovery_use_org_id_match. Als je het verandert in y dan zal de OrgID toegewezen aan het apparaat door de ontdekking worden gebruikt in de relevante match regels.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Als deze vele minuten (of meer) zijn verstreken sinds de server laatst het apparaat zag, pas.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Als dit vele of meer minuten zijn verstreken sinds het apparaat contact heeft opgenomen met de server, voer dan de acties uit.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Als dit gebeurt dan is het probleem dat u ziet gerelateerd aan de tabel controle wordt gebruikt op de webpagina. Het slaat alleen in het geheugen de staat van de vakjes voor de huidige pagina worden bekeken. Als u selecties maakt, wordt de pagina vooruit/terug die selecties verloren. U kunt echter bereiken wat u wilt door het uitbreiden van het aantal apparaten op elke pagina. In de linkerbovenhoek is een drop-down-gelabeld ';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Als we de San Management software detecteren, moeten we een auto-ontdekking uitvoeren voor de query.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Als u een Locatie Type toevoegt, voeg deze pictogrammen toe aan';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Als u een apparaattype toevoegt, om het bijbehorende pictogram weer te geven moet u het .svg geformatteerde bestand handmatig kopiëren naar de map';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Als u een ondersteunde FirstWave-klant bent, zal een paar items helpen uw gemakkelijker maken. Open een support ticket met FirstWave en voeg het logbestand toe. Ook de uitvoer van de Support knop aan de rechterbovenkant van de';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Als u een ondersteunde klant bent en een support ticket opent met FirstWave, voeg dan deze bestanden bij.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Als u problemen heeft met Google Maps API sleutels of uw bedrijf heeft geen toegang tot het maken van Google Maps API sleutels, neem dan contact op met het FirstWave support team.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Als u op Windows staat of uw NMIS-server op afstand is, moet u de URL, gebruikersnaam en wachtwoord leveren om toegang te krijgen tot die server.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Als u op een fatsoenlijke breedband- of ethernetverbinding zit, zou ik u aanraden altijd -T4 (Agressief) te gebruiken. Sommige mensen houden van -T5 (Insane) maar het is te agressief voor mijn smaak. Mensen specificeren soms -T2 (Polite) omdat ze denken dat het minder waarschijnlijk is om hosts te crashen of omdat ze zichzelf beleefd vinden in het algemeen. Ze beseffen vaak niet hoe traag -T2 echt is. Hun scan kan tien keer langer duren dan een standaard scan. Machine crashes en bandbreedte problemen zijn zeldzaam met de standaard timing opties -T3 (Normaal) en dus ik normaal raden dat voor voorzichtige scanners. Het weglaten van versiedetectie is veel effectiever dan het spelen met timings om deze problemen te verminderen.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Als u een RedHat of Centos systeem draait en u Nmap hebt opgewaardeerd, reset dan de SUID op de binaire door';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Als u een Open-AudIT-server op Linux gebruikt, heeft dit geen invloed op u.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Als u Open-AudIT gebruikt op Windows of als uw NMIS-server niet op uw Open-AudIT-server staat (in het geval van sommige Linux-installs), dan moet u toegangsgegevens en een URL aan de externe NMIS leveren - maar dat is alles! Ja - Integraties tussen NMIS en Open-AudIT werken nu zelfs met Windows-gebaseerde Open-AudIT!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Als u kiest voor een Verzamelaar, zal het worden gepland om uit te voeren op de volgende 5 minuten grens.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Als u normaal devices_ansigned_to_org instelt en het configuratie-item is ingeschakeld, wordt de OrgID gebruikt om de match verder te verfijnen.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Als u devices_ansigned_to_org normaal gesproken niet instelt, dan heeft het geen effect. We controleren alleen met behulp van de OrgID of het is ingesteld in ontdekking (of handmatig in een audit script) en ingeschakeld in de configuratie.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Als je het configuratie-item inschakelt, gebruik dan ontdekking om een Org toe te wijzen en verander vervolgens de OrgID van een apparaat na ontdekking, dan heb je waarschijnlijk een nieuw apparaat aangemaakt de volgende keer dat de ontdekking loopt. In dit geval moet je waarschijnlijk gewoon devices_ansigned_to_org uitschakelen voordat je volgende ontdekkingen uitvoert. Dit komt omdat (in dit geval) je Open-AudIT hebt verteld <i>deze apparaten van deze ontdekking behoren tot Org X<i>, maar veranderde de Org van het apparaat. U hebt de opgeslagen apparateninformatie gewijzigd. In dit geval - er is niet langer een apparaat van Org X, dus we maken een nieuwe.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Als u Anti-Virus software draait, waardoor de diensten van Opmantek (omkd), Apache (apache2.2) en MySQL (mysql) automatisch starten en uitvoeren is essentieel. Deze diensten worden gebruikt door Open-AudIT. Je hoeft dit maar één keer te doen. Als uw Anti-Virus programma u blijft vragen over Open-AudIT, post dan naar de forums of stuur een e-mail naar ondersteuning met de naam en versie van uw Anti-Virus software.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Als u werkgegevens, kunt u verwachten dat de volledige hoeveelheid informatie mogelijk.<br/><br/>Uiteraard is de beste manier om Open-AudIT te gebruiken het hebben van werkgegevens voor de apparaten die worden ontdekt (zij het WMI, SSH, of SNMP referenties).<br/><br/>We hebben ook een pagina over controle zonder referenties.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Als u het veld \"id\" invoegt <strong>en</strong> stel het in met een nummer, dat item zal worden bijgewerkt in plaats van gemaakt.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Als u Active Directory toegang moet configureren, kunt u meestal het voorbeeld van <code>cn=Users,dc=your,dc=domain,dc=com</code> voor uw <code>base_dn</code>. Er is geen noodzaak om in te stellen <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Als u OpenLDAP toegang voor uw gebruikers moet configureren en een bepaalde gebruiker toegang tot DN is normaal <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> Dan moet je <code>base_dn</code> tot <code>dc=your,dc=domain,dc=com</code> en <code>user_dn</code> tot <code>uid=@username@@domain,cn=People</code>. De bijzondere woorden <code>@username</code> en <code>@domain</code> zal worden vervangen door de login gegevens die door uw gebruiker op de login pagina.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Als u de ontdekking uitvoert op een subnet waar de Server (of Verzamelaar) direct op is geïnstalleerd, kunt u het volgende verwachten voor reagerende apparaten';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Als u ontdekking uitvoert op een subnet waar uw Server (of Verzamelaar) niet direct op is geïnstalleerd, kunt u het volgende verwachten voor reagerende apparaten';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Als u een Lijsttype selecteert, verschijnt er een extra veld genaamd Waarden. U zou hier een komma gescheiden lijst van selecteerbare waarden moeten plaatsen. Deze worden weergegeven in een dropdown box wanneer het veld wordt bewerkt.';

$GLOBALS["lang"]['If you set the values for'] = 'Als u de waarden voor';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Als u uw Agenten wilt dwingen om een bepaalde configuratie te gebruiken, kunt u de ID van de agenten invoer te gebruiken, zoals hieronder (vervang $id door het nummer van de Agenten invoer). Wanneer deze agent is geïnstalleerd, zal het inchecken met de sevrer en <strong>alleen</strong> controleer of één persoon Agent entrys attributen (tests en acties). Dit kan handig zijn als u een MSP bent - maak een Agents-item voor een bepaalde klant en laat hun apparaten allemaal dit item gebruiken, dat hen toewijst aan een Org en Locatie.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Als u wilt ingraven en aanpassen van de integratie, klik op de Geavanceerde knop (en probeer niet te worden overweldigd!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Als u een Discovery wilt uitvoeren op een extern apparaat, selecteert u de optie en wanneer de Integratie wordt gemaakt, dus de Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Als je het script buiten Discovery wilt gebruiken hebben we een ander eindpunt gecreëerd, genaamd <i>scripts</i>. Zie de documentatie';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Als uw gebruiker geen <i>Uitvoeren als beheerder</i> rechten, ze kunnen nog steeds downloaden de agent (eerste commando hierboven) en uitvoeren om een audit als hieronder indienen. Het zal een eenmalige controle zijn zonder dat de agent wordt geïnstalleerd of gepland.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ongeldige SSL negeren';

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

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Geselecteerde controles en procedures uitvoeren';

$GLOBALS["lang"]['Implementation'] = 'Uitvoering';

$GLOBALS["lang"]['implementation_notes'] = 'Uitvoeringsnota\'s';

$GLOBALS["lang"]['Implementation Notes'] = 'Uitvoeringsnota\'s';

$GLOBALS["lang"]['Import'] = 'Importeren';

$GLOBALS["lang"]['Import Example Data'] = 'Voorbeeldgegevens importeren';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Meerdere {collectie} importeren met een CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Verbetering Kansen';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Verbetering Kansen';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Verbetert de bedrijfscontinuïteit en veerkracht';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'Ga in een tweede tabblad of venster naar uw OKTA-console en klik <i>App-integratie aanmaken</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'In een tweede tabblad of venster aanmelden bij uw';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Naar mijn persoonlijke mening is de beste manier om elk item op uw netwerk te vinden en te controleren een Seed Discovery voor elk subnet, beperkt tot dat subnet (met behulp van referenties). Seed Discoveries gebruiken switch, router en computer MAC Adres tabellen om geen enkel apparaat te missen. Als het is aangesloten op het netwerk en TCP/IP gebruikt, moet een switch/router/computer weten dat het er is - dat is precies hoe TCP/IP werkt. Combineer dat met aangepaste TCP- en/of UDP-poorten en je moet dan ook het apparaattype kunnen bepalen. Maar dat is gewoon mijn persoonlijke voorkeur';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Om Open-AudIT in staat te stellen gebruikersrechten toe te passen op items, geven wij de gebruiker van <code>WHERE @filter</code>. Als u dit formaat niet gebruikt, zal de queryCreateForm een waarschuwing geven. Alleen gebruikers met de Admin rol mogen query\'s maken die dit attribuut missen en zelfs dan pas na het configuratie-item voor <i>geavanceerde_queries</i> is ingeschakeld.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Om Google Maps in te schakelen moet u een Google API Key volgen en inloggen met uw Google-account,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Om de Azure Rest API te gebruiken, moet u een Azure Active Directory Application maken die wordt gebruikt voor authenticatie.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Om deze functionaliteit te kunnen gebruiken, moet deze ingeschakeld zijn in de configuratie - klik';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'In de (gescheiden) lijst';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'In geval van <code>in</code> en <code>notin</code>, je moet de waarden in ronde haakjes omsluiten en ze scheiden met behulp van een komma (alleen een komma, geen komma, dan ruimte).<br/><br/>Met deze operators kunt u zeer uitgebreid filteren.<br/><br/>Wanneer u gegevens toevoegt en filtert op meerdere kolommen, worden deze kolommen gecombineerd met <strong>EN</strong>. U kunt niet filteren met een <strong>OF</strong> conditie. Met de toevoeging van <code>notin</code>, moet u in staat zijn om de meeste zoekopdrachten werken. En voor degenen die echt niet ondersteund en complexe selecties nodig hebben, kun je altijd een echte query schrijven.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'In het geval waarin we meerdere velden (meestal in JSON formaat) opslaan in een BIGTEXT MySQL veld (bijv: referenties. referenties - de kolom referenties in de gegevenstabel), moet u het formaat gebruiken';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'In de opdrachtprompt shell, navigeer naar de download directory (waarschijnlijk <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Inactief';

$GLOBALS["lang"]['Incomplete'] = 'Onvoltooid';

$GLOBALS["lang"]['Index'] = 'Index';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indonesië';

$GLOBALS["lang"]['Indonesian'] = 'Indonesische';

$GLOBALS["lang"]['Info'] = 'Informatie';

$GLOBALS["lang"]['Information only.'] = 'Alleen informatie.';

$GLOBALS["lang"]['Informational'] = 'Voorlichting';

$GLOBALS["lang"]['initial_size'] = 'Oorspronkelijke grootte';

$GLOBALS["lang"]['Initial Size'] = 'Oorspronkelijke grootte';

$GLOBALS["lang"]['Initial login credentials are'] = 'Initiële aanmeldgegevens zijn';

$GLOBALS["lang"]['Initiation'] = 'Inleiding';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Invoer';

$GLOBALS["lang"]['Input Type'] = 'Invoertype';

$GLOBALS["lang"]['inputs'] = 'Invoer';

$GLOBALS["lang"]['Inputs'] = 'Invoer';

$GLOBALS["lang"]['Insane'] = 'Krankzinnig';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Een nieuw item {collectie} invoegen.';

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

$GLOBALS["lang"]['Install Support'] = 'Ondersteuning installeren';

$GLOBALS["lang"]['installed_by'] = 'Geïnstalleerd op';

$GLOBALS["lang"]['Installed By'] = 'Geïnstalleerd op';

$GLOBALS["lang"]['installed_on'] = 'Geïnstalleerd op';

$GLOBALS["lang"]['Installed On'] = 'Geïnstalleerd op';

$GLOBALS["lang"]['Installing'] = 'Installatie';

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

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integraties kunnen naar wens worden gepland. Dit wordt overgelaten aan de gebruiker.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integraties kunnen volgens Discoveries, Queries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Interactieve dashboards';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Interactieve dashboards bieden direct zicht op de status van netwerkinventarissen zodat IT-teams in één oogopslag nieuw ontdekte apparaten en ongebruikelijk apparaatgedrag kunnen spotten.';

$GLOBALS["lang"]['interface'] = 'Interface';

$GLOBALS["lang"]['Interface'] = 'Interface';

$GLOBALS["lang"]['interface_id'] = 'Interface-ID';

$GLOBALS["lang"]['Interface ID'] = 'Interface-ID';

$GLOBALS["lang"]['interface_type'] = 'Interfacetype';

$GLOBALS["lang"]['Interface Type'] = 'Interfacetype';

$GLOBALS["lang"]['Internal'] = 'Intern';

$GLOBALS["lang"]['Internal Audit'] = 'Interne audit';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Interne audit en evaluatie';

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

$GLOBALS["lang"]['Irish'] = 'Iers';

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

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Het <i>Gewoon werkt</i> met NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Het is beschikbaar bij Menu -> Hulp ->';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Het is belangrijk op te merken dat wanneer Open-AudIT een match bepaalt met de eigenschappen die ingesteld zijn op <i>y</i> moet exact overeenkomen (en niet leeg zijn) met Open-AudIT om te bepalen dat het ontdekte apparaat overeenkomt met een apparaat dat al in de database staat. Indien geen van de gemarkeerde eigenschappen <i>y</i> match, dan wordt er een nieuwe apparaatinvoer aangemaakt, wat kan resulteren in dubbele apparaatvermeldingen. In situaties waarin eigenschappen worden gedupliceerd, bijvoorbeeld een dbus_id wordt gekopieerd tijdens een VM-kloon, dan kan een bestaand apparaat verkeerd worden overschreven/geüpdateerd in plaats van een nieuw item dat resulteert in ontbrekende apparaten.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Het is niet ongewoon om in een bepaalde organisatie een overlappende adresruimte te hebben. Niet ideaal, maar niet ongewoon.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Het is zeer gebruikelijk voor tweede niveau moederbord fabrikanten om dit niet in te stellen, om het op alle <i>0</i>s of zelfs alle <i>F</i>s.';

$GLOBALS["lang"]['Italian'] = 'Italiaans';

$GLOBALS["lang"]['Italy'] = 'Italië';

$GLOBALS["lang"]['Items not in Baseline'] = 'Posten buiten de uitgangswaarde';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON om te importeren';

$GLOBALS["lang"]['Jamaica'] = 'Jamaica';

$GLOBALS["lang"]['January'] = 'Januari';

$GLOBALS["lang"]['Japan'] = 'Japan';

$GLOBALS["lang"]['Japanese'] = 'Japans';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordanië';

$GLOBALS["lang"]['July'] = 'Juli';

$GLOBALS["lang"]['June'] = 'Juni';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazachstan';

$GLOBALS["lang"]['Kenya'] = 'Kenia';

$GLOBALS["lang"]['kernel_version'] = 'Kernelversie';

$GLOBALS["lang"]['Kernel Version'] = 'Kernelversie';

$GLOBALS["lang"]['Key'] = 'Sleutel';

$GLOBALS["lang"]['Key Components'] = 'Sleutelcomponenten';

$GLOBALS["lang"]['Key Password (optional)'] = 'Sleutelwachtwoord (facultatief)';

$GLOBALS["lang"]['keys'] = 'Sleutels';

$GLOBALS["lang"]['Keys'] = 'Sleutels';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Korean'] = 'Koreaans';

$GLOBALS["lang"]['Kuwait'] = 'Koeweit';

$GLOBALS["lang"]['Kyrgyz'] = 'Kirgizië';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgizische Republiek';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP-groep';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP werd gezocht naar deze gebruiker en hun account werd gevonden.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP werd gezocht naar deze gebruiker en hun account werd niet gevonden. Controleer de LDAP server logs. De gebruikersgegevens hebben gewerkt, maar de gebruiker is niet gevonden. Controleer ook of u het juiste Base DN-attribuut heeft opgegeven toen u de LDAP-server in Open-AudIT aanmaakte.';

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

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'De laatste is WMI. Voor Windows zoals in Linux heeft een gebruiker met Administratorniveau de voorkeur (zie Target Client Configuration op de wiki).';

$GLOBALS["lang"]['lastModified'] = 'LastModified';

$GLOBALS["lang"]['LastModified'] = 'LastModified';

$GLOBALS["lang"]['latitude'] = 'Breedtegraad';

$GLOBALS["lang"]['Latitude'] = 'Breedtegraad';

$GLOBALS["lang"]['Latvia'] = 'Letland';

$GLOBALS["lang"]['Latvian'] = 'Lets';

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

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Laten we de logging op debug zetten. Bestand kopiëren:';

$GLOBALS["lang"]['level'] = 'Niveau';

$GLOBALS["lang"]['Level'] = 'Niveau';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Niveau van privileges die nodig zijn om te exploiteren (Geen, Laag, Hoog).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Bibliotheken (dat wil zeggen, code die een ander programma zou kunnen bevatten). Dit zijn typisch items zoals Wordpress extensies, drupal extensies, node.js bibliotheken, Android / iPhone / Windows bibliotheken, python bibliotheken, enz.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libië';

$GLOBALS["lang"]['License'] = 'Licentie';

$GLOBALS["lang"]['License Key'] = 'Licentiesleutel';

$GLOBALS["lang"]['License Required'] = 'Vergunning vereist';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Gelicentieerde gebruikers zijn vrij om de regels toe te voegen of te wijzigen als u dat nodig acht. Als je een apparaat met een SNMP OID hebt dat niet overeenkomt met een model dat al in het bestand staat - nu kun je het eenvoudig toevoegen. Niet meer wachten op ons om een patch en voeg het toe aan de code basis voor u.<br/><br/>Wanneer u een Regelinvoer aanmaakt, moet u een naam en een lijst met inputs en outputs opgeven. De ingangen en uitgangen worden opgeslagen als JSON arrays in de database.<br/><br/>Invoeren hebben een tabel en attribuut, een operator en een waarde. Bij het uitvoeren van de voorwaarde werkt het dus: Als $table. $attribuut $operator $waarde dan de outputs toepassen.<br/><br/>Een voorbeeldregel om een SNMP OID te matchen en het model hieronder in te stellen.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Vergunningen';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Zoals';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Zoals de meeste andere attributen kunnen Additional Fields bulk bewerkt worden. Gebruik de Bulk Bewerken functie zoals u normaal zou doen en u zult zien dat de Extra Velden beschikbaar zijn voor invoer.';

$GLOBALS["lang"]['Like versus Equals'] = 'Zoals versus Equals';

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

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Regeldiagrammen moeten datum of my_date, beschrijving of my_description en count teruggeven.';

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

$GLOBALS["lang"]['Linux Packages'] = 'Linux pakketten';

$GLOBALS["lang"]['List'] = 'Lijst';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Alle NMAP-poorten, protocollen en programma\'s voor elk apparaat tonen';

$GLOBALS["lang"]['List Devices'] = 'Lijstapparaten';

$GLOBALS["lang"]['List Discoveries'] = 'Lijstontdekkingen';

$GLOBALS["lang"]['list_table_format'] = 'Lijsttabelformaat';

$GLOBALS["lang"]['List Table Format'] = 'Lijsttabelformaat';

$GLOBALS["lang"]['List Tables'] = 'Lijsttabellen';

$GLOBALS["lang"]['Lithuania'] = 'Litouwen';

$GLOBALS["lang"]['Lithuanian'] = 'Litouws';

$GLOBALS["lang"]['Load Balancing'] = 'Laden balanceren';

$GLOBALS["lang"]['Local'] = 'Lokaal';

$GLOBALS["lang"]['Local Area Network'] = 'Lokaal netwerk';

$GLOBALS["lang"]['local_port'] = 'Lokale poort';

$GLOBALS["lang"]['Local Port'] = 'Lokale poort';

$GLOBALS["lang"]['Local area network'] = 'Lokaal netwerk';

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

$GLOBALS["lang"]['Location Name'] = 'Locatienaam';

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

$GLOBALS["lang"]['Locations'] = 'Locaties';

$GLOBALS["lang"]['Locations in this'] = 'Locaties in deze';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Logformaat';

$GLOBALS["lang"]['Log Format'] = 'Logformaat';

$GLOBALS["lang"]['Log Line'] = 'Logregel';

$GLOBALS["lang"]['log_path'] = 'Logpad';

$GLOBALS["lang"]['Log Path'] = 'Logpad';

$GLOBALS["lang"]['log_rotation'] = 'Logrotatie';

$GLOBALS["lang"]['Log Rotation'] = 'Logrotatie';

$GLOBALS["lang"]['log_status'] = 'Logstatus';

$GLOBALS["lang"]['Log Status'] = 'Logstatus';

$GLOBALS["lang"]['Logging in'] = 'Aanmelden';

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

$GLOBALS["lang"]['Lowercase Hostname'] = 'Kleinschalige hostnaam';

$GLOBALS["lang"]['Luxembourg'] = 'Luxemburg';

$GLOBALS["lang"]['MAC Address'] = 'MAC adres';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Fabrikant';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac-adres';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS-pakketten';

$GLOBALS["lang"]['Macao'] = 'Macau';

$GLOBALS["lang"]['Macedonia'] = 'Macedonië';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Bijhouden van registers van risicobeoordelingen en behandelingen';

$GLOBALS["lang"]['maintenance_expires'] = 'Onderhoud verloopt';

$GLOBALS["lang"]['Maintenance Expires'] = 'Onderhoud verloopt';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Mijn standaard dashboard maken';

$GLOBALS["lang"]['Make this install a Collector'] = 'Maak van deze installatie een verzamelaar';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Maleis';

$GLOBALS["lang"]['Malaysia'] = 'Maleisië';

$GLOBALS["lang"]['Maldives'] = 'Maldiven';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Beheer';

$GLOBALS["lang"]['Manage Licenses'] = 'Licentiebeheer';

$GLOBALS["lang"]['Manage in NMIS'] = 'Beheer in NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Beheer van incidenten en non-conformiteiten';

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

$GLOBALS["lang"]['Match Order'] = 'Volgorde';

$GLOBALS["lang"]['Match Process'] = 'Match proces';

$GLOBALS["lang"]['match_string'] = 'Match tekenreeks';

$GLOBALS["lang"]['Match String'] = 'Match tekenreeks';

$GLOBALS["lang"]['Matching Attribute'] = 'Matching Attribuut';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Matching Devices - Inclusief OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Bijpassende Linux-apparaten';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Matching wordt uitgevoerd in de volgende volgorde';

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

$GLOBALS["lang"]['Metropolitan area network'] = 'Netwerk van metropolitane gebieden';

$GLOBALS["lang"]['Mexico'] = 'Mexico';

$GLOBALS["lang"]['Micronesia'] = 'Micronesia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure-velden';

$GLOBALS["lang"]['microtime'] = 'Microtime';

$GLOBALS["lang"]['Microtime'] = 'Microtime';

$GLOBALS["lang"]['minute'] = 'Minuut';

$GLOBALS["lang"]['Minute'] = 'Minuut';

$GLOBALS["lang"]['Minutes'] = 'Notulen';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minuten Sinds de laatste audit zijn groter dan';

$GLOBALS["lang"]['model'] = 'Model';

$GLOBALS["lang"]['Model'] = 'Model';

$GLOBALS["lang"]['model_family'] = 'Modelfamilie';

$GLOBALS["lang"]['Model Family'] = 'Modelfamilie';

$GLOBALS["lang"]['Modified'] = 'Gewijzigd';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Een bestaand script wijzigen';

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

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'ISMS-prestaties monitoren en meten';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Maand';

$GLOBALS["lang"]['Month'] = 'Maand';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Meer informatie';

$GLOBALS["lang"]['More Secure'] = 'Veiliger';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Meer uitgebreide SQL kan worden gebruikt om attributen binnen een bereik te groeperen. Hieronder ziet u de SQL voor apparaten die niet in een taartdiagram zijn te zien, gegroepeerd door de laatst geziene datumbereiken.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Meer informatie over debuggen is te vinden op een behulpzame Stack Overflow thread';

$GLOBALS["lang"]['Morocco'] = 'Marokko';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Waarschijnlijk ontkent de Windows firewall (of een externe firewall) de verbindingspoging.<br/><br/>Gelieve in te loggen op het doel Windows machine en controleer de firewall instellingen.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Het grootste deel van Open-AudIT is gelicentieerd met GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Moederbord';

$GLOBALS["lang"]['Motherboard'] = 'Moederbord';

$GLOBALS["lang"]['mount_point'] = 'Aankoppelpunt';

$GLOBALS["lang"]['Mount Point'] = 'Aankoppelpunt';

$GLOBALS["lang"]['mount_type'] = 'Aankoppeltype';

$GLOBALS["lang"]['Mount Type'] = 'Aankoppeltype';

$GLOBALS["lang"]['Mozambique'] = 'Mozambique';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Moet reageren op Ping. Indien ingesteld zal Nmap proberen een ICMP-respons te versturen en te luisteren. Als het apparaat niet reageert, zal er geen verder scannen plaatsvinden.<br/>Eerder hoefde een apparaat niet te reageren op een ping voor Open-AudIT om verder te scannen.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Moet reageren op ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Mijn AntiVirus vraagt me om dingen te ontkennen/toestaan';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Mijn tijd is vrij in Open-AudIT';

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

$GLOBALS["lang"]['NOTE'] = 'NOOT';

$GLOBALS["lang"]['NOTE #2'] = 'NOOT #2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'OPMERKING - Voor meer informatie over DateTime formaten, zie';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'OPMERKING - Als u een gedownloade CSV, XML of JSON formaat (een enkele credential, of de volledige collectie) aanvraagt, worden de feitelijke credential details verzonden. Niet de gecodeerde string, de werkelijke gebruikersnaam, wachtwoord, community string, enz. Alle gevoelige details worden niet weergegeven in de web GUI, maar worden beschikbaar gesteld via andere formaten. Om dit exporteren te voorkomen is een configuratie-item beschikbaar genaamd decrypt_cinthities.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'OPMERKING - De krullende haakjes in de ingediende gegevens moeten worden gebruikt als-is (niet vervangen zoals hierboven beschreven).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'OPMERKING - U kunt voorkomen dat platte tekst referenties worden weergegeven onder door het instellen van de configuratie-item voor <code>decrypt_credentials</code> tot <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Naam';

$GLOBALS["lang"]['Name'] = 'Naam';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Naam: De naam die u aan dit veld geeft. Idealiter zou het uniek moeten zijn.';

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

$GLOBALS["lang"]['Netstat Ports'] = 'Netstat-poorten';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports gebruikt een combinatie van poortnummer, protocol en programma. Als iedereen aanwezig is, gaat het beleid over.';

$GLOBALS["lang"]['Network'] = 'Netwerk';

$GLOBALS["lang"]['network_address'] = 'Netwerkadres';

$GLOBALS["lang"]['Network Address'] = 'Netwerkadres';

$GLOBALS["lang"]['Network Discovery'] = 'Netwerkontdekking';

$GLOBALS["lang"]['network_domain'] = 'Netwerkdomein';

$GLOBALS["lang"]['Network Domain'] = 'Netwerkdomein';

$GLOBALS["lang"]['Network Types'] = 'Netwerktypes';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Netwerktype is standaard ingesteld op Local Area Network, maar kan door de gebruiker worden gewijzigd naar hun mening geschikt. De ondersteunde types zijn hieronder (met dank aan Wikipedia).<br/><br/>Een netwerk kan worden gekenmerkt door zijn fysieke capaciteit of zijn organisatiedoel. Het gebruik van het netwerk, met inbegrip van de machtiging van gebruikers en toegangsrechten, verschilt dienovereenkomstig.';

$GLOBALS["lang"]['networks'] = 'Netwerken';

$GLOBALS["lang"]['Networks'] = 'Netwerken';

$GLOBALS["lang"]['Networks Generated By'] = 'Netwerken gegenereerd door';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Netwerken worden bijgewerkt met elke ontdekking. Items zoals IPs Beschikbaar en IPs Gebruikt, samen met Gateways, DHCP en DNS Servers worden toegevoegd zoals gevonden.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Netwerken reageren anders afhankelijk van hoe ze zijn geconfigureerd. Sommige routers en/of firewalls kunnen reageren <i>namens</i> van IP\'s aan de andere kant van hun interfaces met de Open-AudIT Server. Het is vrij gebruikelijk om Nmap een sonde voor SNMP (UDP-poort 161) te zien reageren als open gefilterd voor apparaten die wel en niet bestaan. Dit is misleidend omdat er geen apparaat op dat IP, toch eindigt met een apparaat ingang in de database. 99,9% van de tijd, het is niet Open-AudIT, noch zelfs Nmap, maar het netwerk veroorzaakt dit probleem. Nu we de opties hebben om open gefilterde poorten als open of gesloten te behandelen, kunnen we veel van deze verwarring elimineren. Enterprise gebruikers hebben zelfs de mogelijkheid om dit te wijzigen op een per ontdekking basis (meer dan alleen met behulp van de Medium (Classic) item, zoals hierboven).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Netwerken met een CIDR-masker van';

$GLOBALS["lang"]['New Building Name'] = 'Naam nieuw gebouw';

$GLOBALS["lang"]['New Caledonia'] = 'Nieuw-Caledonië';

$GLOBALS["lang"]['New Floor Name'] = 'Nieuwe vloernaam';

$GLOBALS["lang"]['New Room Name'] = 'Naam nieuwe ruimte';

$GLOBALS["lang"]['New Row Name'] = 'Nieuwe rijnaam';

$GLOBALS["lang"]['New Zealand'] = 'Nieuw-Zeeland';

$GLOBALS["lang"]['News'] = 'Nieuws';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Nieuws checks-in elke keer dat u inlogt voor bijgewerkte vragen & pakketten, configuratie aanbevelingen, release aankondigingen, blog berichten en meer.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Nieuws is onze manier om u up-to-date te houden met de nieuwste fixes, aankondigingen, query updates, softwareversies en meer.<br/><br/>Je hoeft niet op de wiki te blijven staan of te controleren op nieuwe releases, we kunnen deze naar je toe sturen!';

$GLOBALS["lang"]['next_hop'] = 'Volgende Hop';

$GLOBALS["lang"]['Next Hop'] = 'Volgende Hop';

$GLOBALS["lang"]['next_run'] = 'Volgende uitvoeren';

$GLOBALS["lang"]['Next Run'] = 'Volgende uitvoeren';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Volgende klik <i>Uw eigen toepassing aanmaken</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Klik vervolgens op OK, klik dan met de rechtermuisknop op de Apache 2.4 service en klik op Herstarten. Klaar!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Klik vervolgens met de rechtermuisknop op de Apache2.4 service en selecteer Eigenschappen en klik vervolgens op het tabblad Aanmelden.';

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

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap kan niet bepalen of de poort open is omdat pakketfiltering voorkomt dat de sondes de poort bereiken. De filtering kan zijn van een specifiek firewall apparaat, router regels, of host-based firewall software. Deze havens frustreren aanvallers omdat ze zo weinig informatie geven. Soms reageren ze met ICMP foutmeldingen zoals type 3 code 13 (bestemming onbereikbaar: communicatie administratief verboden), maar filters die eenvoudigweg sondes laten vallen zonder te reageren komen veel vaker voor. Dit dwingt Nmap om meerdere keren opnieuw te proberen voor het geval de sonde werd gedropt als gevolg van netwerkverstopping in plaats van filteren. Dit vertraagt de scan dramatisch.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap plaatst poorten in deze staat wanneer het niet kan bepalen of een poort geopend of gefilterd is. Dit gebeurt voor scan types waarin open poorten geen reactie geven. Het gebrek aan respons kan ook betekenen dat een pakketfilter de sonde liet vallen of een reactie veroorzaakte. Nmap weet dus niet zeker of de poort open is of gefilterd wordt. Het UDP, IP protocol, FIN, NULL en Xmas scans classificeren poorten op deze manier.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Nmap timing details zijn te vinden onderaan deze gekoppelde pagina';

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

$GLOBALS["lang"]['No devices are in the database.'] = 'Er zijn geen apparaten in de database.';

$GLOBALS["lang"]['Node'] = 'Knooppunt';

$GLOBALS["lang"]['None'] = 'Geen';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk';

$GLOBALS["lang"]['Normal'] = 'Normaal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Noordelijke Marianen';

$GLOBALS["lang"]['Norway'] = 'Noorwegen';

$GLOBALS["lang"]['Norwegian'] = 'Noors';

$GLOBALS["lang"]['Not Applicable'] = 'Niet van toepassing';

$GLOBALS["lang"]['Not Checked'] = 'Niet gecontroleerd';

$GLOBALS["lang"]['Not Equals'] = 'Niet gelijk';

$GLOBALS["lang"]['Not In'] = 'Niet in';

$GLOBALS["lang"]['Not Like'] = 'Niet zoals';

$GLOBALS["lang"]['Not Set'] = 'Niet ingesteld';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Niet elke computer zal in staat zijn om een benchmark succesvol te voltooien. We hebben gezien in sommige mislukkingen in het testen om redenen buiten onze controle. De logs moeten helpen wijzen u in de juiste richting voor deze items.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Niet in de (gescheiden) lijst';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Normaal gesproken niet gebruikt. Indien ingesteld, moet het apparaat een open poort hebben (zoals bij Scanopties) om te worden beschouwd als reagerend. Een MAC-adres, arprespons of pingrespons wordt niet voldoende geacht om te worden beschouwd als respons. Nuttig als een router of firewall tussen de Open-AudIT server en target IP namens de IP\'s reageert op poortscans.';

$GLOBALS["lang"]['Note'] = 'Opmerking';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Opmerking - Een ouder selecteren geeft automatisch toegang tot zijn kinderen (hoewel het hier niet getoond wordt).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Merk op dat de 100 apparaat Enterprise licentie geen ondersteuning bevat.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Let op, het kan nodig zijn om het script uitvoerbaar te maken met';

$GLOBALS["lang"]['Notes'] = 'Opmerkingen';

$GLOBALS["lang"]['notes'] = 'Opmerkingen';

$GLOBALS["lang"]['Notice'] = 'Kennisgeving';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'November';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Nu voor het abonnement ID, klik op Alle Diensten, Abonnementen en kopieer het.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Nu moeten we de Azure Active Directory applicatie toegang geven tot uw abonnement.<br/><br/>Klik op Resource Groups en vervolgens op de resource groep waar u graag uw Azure Active Directory Application toegang tot wilt hebben.<br/><br/>Klik op Toevoegen. De rol moet bijdragers zijn en vervolgens zoeken naar de app (Open-AudIT). Klik vervolgens op Opslaan.<br/><br/>Nu heeft de applicatie toegang tot het abonnement, zodat we API-gesprekken kunnen voeren. De API-oproepen worden gevraagd namens de applicatie, niet namens uw gebruiker.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'BESCHIKKING VAN';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Families';

$GLOBALS["lang"]['OS Family'] = 'OS Family';

$GLOBALS["lang"]['OS Group'] = 'OS-groep';

$GLOBALS["lang"]['OUTPUTS'] = 'OUTPUTS';

$GLOBALS["lang"]['oae_manage'] = 'Oae-beheer';

$GLOBALS["lang"]['Oae Manage'] = 'Oae-beheer';

$GLOBALS["lang"]['object_ident'] = 'Objectident';

$GLOBALS["lang"]['Object Ident'] = 'Objectident';

$GLOBALS["lang"]['Obtain top management support'] = 'Ondersteuning voor topmanagement verkrijgen';

$GLOBALS["lang"]['October'] = 'oktober';

$GLOBALS["lang"]['Offset'] = 'Verschuiving';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Aan';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Op Windows, Open-AudIT maakt gebruik van WMI als het is de primaire methode van de controle. Windows heeft een beruchte reputatie als het gaat om WMI op afstand. Het heeft de neiging om <i>gewoon werken</i> of een mysterieus item op het doel moet veranderen. Als u problemen ondervindt met het controleren van externe Windows-pc\'s, hebben we een script gemaakt genaamd test_windows_client.vbs. U kunt dit script draaien <strong>lokaal</strong> op de machine in kwestie, na het aanmelden als gebruiker die door Open-AudIT wordt gebruikt om de audit uit te voeren. Het script maakt <strong>geen wijzigingen</strong> naar de doelapparatuur. Het controleert de meeste (niet alle) van de onderstaande items en genereert PASS, FAIL en INFO tags voor verschillende eigenschappen. OPMERKING - Als uw doelsysteem correct wordt gecontroleerd, moet u geen instellingen wijzigen. Sommige van de onderstaande bestaan niet op Windows-pc\'s die kunnen worden gecontroleerd en sommige bestaan. Wijzig alleen instellingen als uw ontdekkingen op bepaalde pc\'s niet werken zoals bedoeld.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Klik op de pagina Takenlijst <i>Nieuw toevoegen</i> knop om een taak in te stellen.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Op het veld <i>Match tekenreeks</i> moet u de naam van de software die u wilt volgen. U kunt het percentage teken (%) gebruiken als een wildcard waar nodig.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Op de volgende pagina kunt u Access Keys selecteren en uw sleutel zien of een nieuwe sleutel aanmaken.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Op het doel Windows PC, voer het DCOM hulpprogramma en verifieer (of stel) de onderstaande attributen. Start -> Rennen, voer DCOMCNFG in en druk op OK. Dit opent het DCOMCNFG-venster.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Rechtsboven (onder de menubalk) ziet u verschillende knoppen. Hiermee kunt u een ander dashboard selecteren, het huidige dashboard instellen als uw homepage (als het nog niet is) en het huidige dashboard bewerken (als u toestemming heeft).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'On-premise, Not Cloud';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Zodra een Extra veld is aangemaakt kan het worden gebruikt in queries en groepen net als elk ander attribuut in de database.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Na commentaar zal uw certificaat worden gevalideerd, maar kan deze validatie ook mislukken als u zelf ondertekende certificaten gebruikt en uw server niet correct heeft geconfigureerd.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Zodra het script is uitgevoerd op een doel, moet het script zelf verwijderen.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Zodra deze eerste vragen (snmp, ssh, wmi) zijn voltooid, als het apparaat wordt ondersteund door de audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris en ESXi), zal het juiste audit script worden gekopieerd naar het doel en uitgevoerd. Het auditscript zal zelf verwijderen na voltooiing. Het resultaat wordt opgeslagen op de doelmachine als een XML-bestand. De Open-AudIT server zal dan het resultaatbestand voor verwerking ophalen en het resultaatbestand op het doel verwijderen. De locatie waarnaar het auditscript wordt gekopieerd op het doelapparaat (tenminste voor SSH audits) is configureerbaar door het discovery_linux_script_directory config item te bewerken. Standaard is het ingesteld op /tmp/. Dit kan veranderen als /tmp noexec heeft ingesteld. Het resultaatbestand wordt vervolgens verwerkt en de apparaatdetails bijgewerkt binnen Open-AudIT.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Zodra u op de uitvoerknop klikt, zal Open-AudIT een proces starten om de ontdekking te starten en de gebruiker terug te sturen naar de pagina details van de ontdekking. Het nieuwe proces neemt de geconfigureerde ontdekkingsopties en voert Nmap commando\'s uit om de initiële lijst van te scannen IP-adressen te bepalen (of queries Active Directory als dat type wordt gebruikt). Elk te scannen IP wordt in een wachtrij geplaatst. Zodra het eerste proces is voltooid (en er zijn IP\'s te scannen in de wachtrij) zal een aantal processen worden voortgebracht om elk IP parallel verder te scannen. Dit aantal processen is instelbaar in de configuratie, bewerk het attribuut <i>_limiet in wachtrij</i>. Standaard is dit ingesteld op 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Zodra u uw apparaten hebt gekozen om te bewerken, klikt u op de potloodknop rechtsboven in de tabel.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Zodra u dit hebt gedaan, zal Open-AudIT proberen om uw gebruikerslogongegevens te verifiëren tegen de geconfigureerde Auth-methode. Als de gebruiker geldige referenties heeft en <code>use_authorisation</code> Open-AudIT zal vragen naar de lijst van groepen waartoe de gebruiker behoort. Als de gebruiker in de overeenkomstige groepen zit voor Open-AudIT-rollen en orgs, worden deze rollen en orgs op die gebruiker toegepast.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Zodra u een Baseline Definition hebt gegenereerd, kunt u het plannen om uitgevoerd te worden tegen een bepaalde groep apparaten.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Zodra je die items hebt, in Open-AudIT Enterprise kunt u naar menu -> Ontdekken -> Wolken -> Aanmaken Wolken, selecteer de <i>Amazon AWS</i> typ en plak ze in. Klaar.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Zodra je die items hebt, in Open-AudIT Enterprise kunt u naar menu -> Ontdekken -> Wolken -> Aanmaken Wolken, selecteer de <i>Microsoft Azure</i> typ en plak ze in. Klaar.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Als je eenmaal je cloudgegevens hebt, is het slechts een kwestie van het creëren van een nieuwe cloud en het uitvoeren van de ontdekking - of het plannen van eerste/toekomstige ontdekkingen. Zorg ervoor dat u ook de vereiste referenties om in te loggen op uw cloud machines, en het is allemaal gedaan voor u net als een regelmatige ontdekking. Identiteiten voor uw cloud';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Een van de <code>3x2</code>, <code>4x2</code>, <code>4x3</code> of <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Een van Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Een van de ontwikkeling, rampenherstel, evaluatie, pre-productie, productie, testen, training, gebruikersacceptatie testen';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Een van toegewezen, gedelegeerde, planning, gereserveerd, niet toegewezen, onbekend, onbeheerd. Standaardinstellingen die toegewezen worden.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Eén van beide <code>active directory</code> of <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Een van: antivirus, back-up, firewall, goedgekeurd, verboden, genegeerd of andere.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Een ander item om voorzichtig voor te zijn - zorg ervoor dat u de hostnaam (of fqdn) van uw LDAP gebruikt Server die overeenkomt met wat er in het certificaat staat (niet alleen het LDAP-server IP-adres) bij het aanmaken van het LDAP-item in Open-AudIT.';

$GLOBALS["lang"]['Online Documentation'] = 'Online documentatie';

$GLOBALS["lang"]['Open'] = 'Open';

$GLOBALS["lang"]['Open Data'] = 'Data openen';

$GLOBALS["lang"]['Open Source'] = 'Bron openen';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open-AudIT Communautaire broncode is beschikbaar op GitHub. U wordt aangemoedigd om alle codes te inspecteren waar u zich zorgen over maakt, en omdat het open source is - u wordt ook aangemoedigd om ons te vragen over eventuele problemen die u heeft of eventuele bevindingen te melden. We zijn altijd meer dan blij met code bijdragen, kwetsbaarheid rapporten, of zelfs eenvoudige vragen te accepteren. We zijn hier om te helpen.<br/><br/>De audit scripts zelf (Windows, Linux, MacOS, et al) zijn opzettelijk geschreven in leesbaar native shell script (VBScript voor Windows, Bash voor *nix). Je kunt precies zien welke commando\'s worden uitgevoerd. U kunt alle commando\'s verwijderen die u niet nodig vindt. U kunt een derde partij vragen om de code voor u te inspecteren en (als u wilt) eventuele bevindingen te melden.<br/><br/>Open-AudIT Ondernemingen vervullen de add-on commerciële functies voor Open-AudIT Community. Het is opgenomen als een enkel samengesteld bestand zonder externe afhankelijkheden. Wanneer Enterprise zelf de functie(s) uitvoert, als u betrokken bent bij eventuele problemen Firstwave is blij om met je mee te werken - vraag het gewoon! Probeer dat met een andere commerciële software leverancier!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Apparaatselectie openen';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open-AudIT Enterprise heeft de mogelijkheid om te kiezen uit een vooraf gedefinieerde lijst van ontdekkingsscan opties en ook om individuele opties per ontdekking aan te passen.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open Audit Enterprise. Op grote schaal flexibele oplossing voor ontdekking en audit voor grote netwerken. Alle functies van Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configureerbare Role Based Access Control inclusief Active Directory en LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT veldnaam';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT-licenties';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT-opties';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT Professional en Enterprise omvatten Enhanced Reporting features, waaronder op tijd gebaseerde, historische en op mutiquery gebaseerde rapportagefuncties in meerdere formaten.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open-AudIT Professional heeft de mogelijkheid om te kiezen uit een vooraf gedefinieerde lijst van ontdekkingsscan opties, per ontdekking.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Open Audit Professional. De wereld\\';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open Aud IT kan worden geconfigureerd om LDAP-servers (Microsoft Active Directory en/of OpenLDAP) te gebruiken om een gebruiker te authenticeren en te machtigen en daarnaast een gebruikersaccount aan te maken in Open-AudIT met behulp van toegewezen rollen en orgs op basis van LDAP groep lidmaatschap. Het kan ook';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open Aud IT kan worden uitgevoerd op uw server in uw datacenter. Het heeft helemaal geen toegang tot internet nodig. Zelfs de installatie op Linux waar we de distributie package manager gebruiken voor onze voorwaarden kan worden genegeerd door gebruik te maken van een in-house en security team goedgekeurde pakket repository.<br/><br/>Open Aud IT slaat geen van uw gegevens op in de cloud. Zelfs licentie-informatie kan worden verstrekt zonder toegang tot het internet vanaf de Open-AudIT-server.<br/><br/>Zeker, het is gemakkelijker om het toegang te geven tot het internet om pakketten te downloaden (inclusief security fixes) voor uw distributie, maar dat is aan u en uw veiligheidsbeleid. Open-AudIT heeft geen internet nodig.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT kan NIST CVE Vulnerability rapporten downloaden, verwerken en gebruiken.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open Aud IT kan in een van de verschillende talen worden getoond. Hoe kun je dit verbeteren?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open Aud IT kan informatie opslaan in extra velden die met elk apparaat geassocieerd zijn.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT kan Microsoft Entra (voorheen Microsoft Azure Active Directory) als authenticatiemethode gebruiken. Dit betekent dat uw gebruiker in Open-AudIT de Logon kan klikken met de Entra-knop op de inlogpagina en hun Entra-gegevens kan gebruiken om in te loggen. Die gebruiker moet al bestaan binnen Open-AudIT (en toegewezen worden';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudIT kan OKTA als authenticatiemethode gebruiken. Dit betekent dat uw gebruiker in Open-AudIT op de Logon kan klikken met de knop OKTA op de inlogpagina en hun OKTA-gegevens kan gebruiken om in te loggen. Die gebruiker moet al bestaan binnen Open-AudIT (en toegewezen worden aan Roles en Orgs), maar hoeft zich geen aparte set logongegevens te herinneren.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT wordt geleverd met veel queries ingebouwd. Als u een specifieke query nodig hebt en geen van de voorverpakte queries voldoet aan uw behoeften, is het heel eenvoudig om een nieuwe aan te maken en deze in Open-AudIT te laden om te draaien.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT heeft een JSON Restful API te gebruiken zowel in de webinterface als via JSON verzoeken.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open Aud IT heeft een granulair permissiesysteem om te bepalen wat een gebruiker binnen Open-AudIT kan doen, en wat hij kan doen. Open-AudIT kan volledig zelfstandig zijn, of Active Directory of OpenLDAP gebruiken voor authenticatie en/of autorisatie.<br/><br/>Het is volledig aan de beheerder van Open-AudIT hoe ze willen dat de Role Based Access Control werkt.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open Aud IT heeft een krachtige veranderingsdetectiemotor. Alle apparaatattributen die worden toegevoegd, verwijderd of gewijzigd worden gedetecteerd en opgeslagen. Deze veranderingen kunnen worden gerapporteerd en de relevante gegevens bevestigd over wat er werd verwacht van uw bedrijf verandering en release proces.<br/><br/>Wanneer een apparaat wordt gecontroleerd, worden attributen onderverdeeld in secties die overeenkomen met tabellen in de database.<br/><br/>Elk apparaat (computer, router, printer, et al) heeft een ingang in de <code>devices</code> tafel. Elke ingang in de apparaattabel heeft een <code>id</code> kolom. Deze waarde is uniek - het is een auto-incrementing id.<br/><br/>Wanneer het auditresultaat wordt verwerkt, heeft elk item in elke sectie zijn auditresultaat vergeleken met wat er in de database staat.<br/><br/>Indien de kolommen (zie onderstaande tabel) voor elk onderdeel dezelfde waarden bevatten, wordt zij geacht reeds geïnstalleerd te zijn en heeft zij <code>last_seen</code> attribuut bijgewerkt. Er is geen change_log item aangemaakt.<br/><br/>Als een van de kolommen niet overeenkomen, wordt het beschouwd als een nieuw kenmerk en wordt ingevoegd. A <code>change_log</code> invoer wordt aangemaakt als het apparaat al andere attributen in de tabel had.<br/><br/>Bij de voltooiing van de auditverwerking worden alle niet (of ingevoegde) database-items geacht niet aanwezig te zijn. De <code>current</code> attribuut voor dit item is ingesteld op <i>n</i> en een change_log ingang wordt gegenereerd.<br/><br/>Dus, we kunnen bepalen of er iets is geïnstalleerd - de huidige kolom is <i>y</i>.<br/><br/>We kunnen bepalen wanneer iets in eerste instantie werd gedetecteerd - de <i>eerste _gezien</i>.<br/><br/>We kunnen bepalen of er iets is geïnstalleerd na de eerste audit - het eerst gezien zal anders zijn in de component en apparaat tabellen.<br/><br/>We kunnen bepalen of er iets niet is geïnstalleerd, maar eerder was - stroom = <i>n</i>.<br/><br/>We kunnen bepalen wanneer we voor het laatst iets gevonden hebben.<br/><br/>Op elk gegeven moment kunnen we bepalen wat er op een systeem zat - door gebruik te maken van de audit_log tabel en de relevante componenten te selecteren op basis van first_seen en last_seen.<br/><br/>Elk deel en de bijbehorende kolommen staan hieronder.<br/><br/>OPMERKING - Er zijn enkele uitzonderingen zoals hieronder beschreven.<br/><br/>*1 - Voor netwerkkaarten, als de computer een VMware Esx machine is, gebruikt het ook de net_index en verbindingszuilen.<br/><br/>*2 - Voor partities gebruiken we de partitienaam f de computer is een AIX machine.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT is een programma dat is ontworpen om uw IT-gegevens en bijbehorende assets te volgen en te rapporteren. Open-AudIT kan zeggen <i>Wat is op uw netwerk?</i>, hoe het is geconfigureerd en of er wijzigingen zijn opgetreden. Open-AudIT levert een strak, flexibel en eenvoudig te gebruiken platform voor apparaatontdekking, IT-audit en voorraadbeheer automatisering direct uit de doos.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open Aud IT maakt het eenvoudig om de eigenschappen van meerdere apparaten tegelijk te bewerken.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open Aud IT heeft specifieke directoryrechten nodig om bestanden te kunnen maken, resultaten te uploaden, enz. Stel als volgt in.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT biedt veel ingebouwde queries en maakt het eenvoudig om je eigen te maken.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open Aud IT heeft ingebouwde rollen voor admin, org_admin en gebruiker.<br/><br/>Over het algemeen moet een gebruiker die een beheerder is van de Open-AudIT applicatie zelf admin en mogelijke org_admin rollen hebben.<br/><br/>Een gebruiker kan meerdere rollen hebben. De toestemming zal worden toegepast op het meest permissieve niveau - IE, als een gebruiker de rollen van gebruiker en org_admin heeft, zullen ze in staat zijn om locaties te creëren omdat org_admin deze toestemming verleent, ook al is de gebruikersrol dat niet.<br/><br/>De admin rol geeft toegang tot collecties zoals configuratie, database, groepen, ldap servers, logs, queries en rollen. Wereldwijde items die van invloed zijn op de gehele toepassing.<br/><br/>De rol van org_admin maakt het meestal mogelijk om acties aan te maken, te lezen, bij te werken en te verwijderen voor elke verzameling die de kolom org_id bevat. Vrijwel alle gegevens behalve sommige van de hierboven genoemde collecties bevatten een <code>org_id</code> kolom.<br/><br/>De gebruikersrol geeft over het algemeen alleen leestoegang tot alle items met een kolom org_id.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open Aud IT heeft ingebouwde rollen voor admin, org_admin en gebruiker.<br/><br/>Over het algemeen moet een gebruiker die een beheerder is van de Open-AudIT applicatie zelf admin en mogelijke org_admin rollen hebben.<br/><br/>Een gebruiker kan meerdere rollen hebben. De toestemming zal worden toegepast op het meest permissieve niveau - IE, als een gebruiker de rollen van gebruiker en org_admin heeft, zullen ze in staat zijn om locaties te creëren omdat org_admin deze toestemming verleent, ook al is de gebruikersrol dat niet.<br/><br/>De admin rol geeft toegang tot collecties zoals configuratie, database, groepen, ldap servers, logs, queries en rollen. Wereldwijde items die van invloed zijn op de gehele toepassing.<br/><br/>De rol van org_admin maakt het meestal mogelijk om acties aan te maken, te lezen, bij te werken en te verwijderen voor elke verzameling die de kolom org_id bevat. Vrijwel alle gegevens behalve sommige van de bovengenoemde collecties zullen een kolom org_id bevatten.<br/><br/>De gebruikersrol geeft over het algemeen alleen leestoegang tot alle items met een kolom org_id.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open-AudIT schepen met verschillende vooraf geconfigureerde Dashboards. Als u een professionele gebruiker bent, kunt u kiezen tussen twee van deze en instellen als uw standaard pagina wanneer u inlogt. Als u een Enterprise-gebruiker bent, kunt u niet alleen kiezen tussen de vijf vooraf geconfigureerde Dashboards, maar u heeft ook de mogelijkheid om uw eigen te maken.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open-AudIT moet worden geïnstalleerd op 64bit Windows <strong>Server</strong> Alleen systemen. Windows 10 en Windows 11 zijn <strong>niet</strong> gesteund.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT gebruikt Nmap in zijn Discovery functie. Nmap sondes voor open poorten. Apparaten idealiter moeten reageren met open voor werkende poorten. Apparaten reageren hier vaak niet mee. De verschillende reacties worden hieronder beschreven.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT gebruikt Nmap in zijn Discovery functie. Zonder Nmap zal Open-AudIT niet goed functioneren. Elke Open-AudIT installatie gaat ervan uit dat Nmap is geïnstalleerd en zal er ook voor testen op de Discovery webpagina\'s. Meer informatie over Open-AudIT en Nmap is hier beschikbaar';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT gebruikt Nmap in zijn Discovery functie. Zonder Nmap zal Open-AudIT niet goed functioneren. Elke Open-AudIT installatie gaat ervan uit dat Nmap is geïnstalleerd en zal testen op de Discovery webpagina\'s.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open Aud IT gebruikt referenties om toegang te krijgen tot uw apparaten. Deze zijn gecodeerd en opgeslagen, zoals u zou verwachten.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT werd geschreven door een Engelstalige Australiër. Alles in de applicatie gebruikt Engelse tekst. Open-AudIT heeft echter altijd meerdere talen voor weergave ondersteund. Deze vertalingen zijn niet altijd correct, omdat de ontwikkelaars niet de taal van elke aangeboden vertaling spreken.<br/><br/>Wat kunt u doen als er iets niet klopt in de vertaling?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap is geïnstalleerd';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Een Support Ticket openen?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap-gebruiker-dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap-gebruiker-dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap gebruikerslidmaatschap-attribuut';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap gebruikerslidmaatschap-attribuut';

$GLOBALS["lang"]['open|filtered'] = 'Open gefilterd';

$GLOBALS["lang"]['Open|filtered'] = 'Open gefilterd';

$GLOBALS["lang"]['Operating System'] = 'Besturingssysteem';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Familie van het besturingssysteem bevat';

$GLOBALS["lang"]['Operating Systems'] = 'Bedrijfssystemen';

$GLOBALS["lang"]['Operators'] = 'Exploitanten';

$GLOBALS["lang"]['optical'] = 'Optisch';

$GLOBALS["lang"]['Optical'] = 'Optisch';

$GLOBALS["lang"]['Optimized'] = 'Geoptimaliseerd';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Optie #1 - Gegevens wijzigen';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Optie #2 - Verander het vertaalbestand';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Facultatief op agent gebaseerde auditing';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Optionele versie zoals gecontroleerd door Open-AudIT. Gebruik het percentage teken % als een wildcard.';

$GLOBALS["lang"]['options'] = 'Opties';

$GLOBALS["lang"]['Options'] = 'Opties';

$GLOBALS["lang"]['Options, options, options'] = 'Opties, opties, opties';

$GLOBALS["lang"]['Or'] = 'Of';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Of selecteer uit de onderstaande velden.';

$GLOBALS["lang"]['org_descendants'] = 'Org-afstammelingen';

$GLOBALS["lang"]['Org Descendants'] = 'Org-afstammelingen';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = 'Organisatie';

$GLOBALS["lang"]['organisation'] = 'Organisatie';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisatie Afstammelingen';

$GLOBALS["lang"]['Organisations'] = 'Organisaties';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organisaties kunnen het niveau van detail uitbreiden en verbeteren dat wordt opgeslagen tegen elk ontdekt apparaat met behulp van aangepaste velden en de open kern zorgt voor een gemakkelijke integratie in CMDB, event management en ticketing systemen.';

$GLOBALS["lang"]['orgs'] = 'Orgen';

$GLOBALS["lang"]['Orgs'] = 'Orgen';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs-naam';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgs in Open-AudIT zijn een belangrijk item. Een gebruiker heeft een primaire Org en een lijst van Orgs die ze kunnen openen. Een gebruiker combineert dit met een lijst van toegewezen rollen die bepalen welke acties ze kunnen uitvoeren op items die zijn toegewezen aan de Orgs waar ze toegang toe hebben. De combinatie van een gebruiker <i>orgs</i> en <i>rollen</i> definiëren wat ze wel en niet kunnen doen binnen Open-AudIT.<br/><br/>De meeste items in Open-AudIT worden toegewezen aan een Org. Apparaten, Locaties, Netwerken, enz.<br/><br/>Orgs kunnen kind Orgs krijgen. Denk aan een organisatieschema (boom) structuur. Als een gebruiker toegang heeft tot een specifieke Org, hebben ze meestal (niet altijd) ook toegang tot die Orgs afstammelingen.';

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

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Anders dan die beperking, bent u vrij om attributen te selecteren zoals vereist. Het is een goed idee om het menu te gebruiken';

$GLOBALS["lang"]['Others'] = 'Overige';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Onze standaard Integratie maakt ook een ontdekking mogelijk op externe apparaten. Dus we verzenden een standaard ontdekking voor de Standaard Integratie uit de doos. Deze maken gebruik van de standaard matching regels, maar maken het ook mogelijk om op IP-adres aan te passen.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Onze voorbeelden zullen de <i>type</i> kolom.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Ons kader uploadt hier bestanden voor verwerking en verwijdert ze dan. Denk aan ingediende auditresultaten, enz.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Ons doel met de eerste integratie release was specifiek voor NMIS om Open-AudIT integratie aan <i>gewoon werken</i>. Als je de programma\'s op Linux gebruikt, kun je letterlijk op één knop klikken om de integratie uit te voeren. Er is niets meer nodig. Dat gezegd hebbende, de integratie zelf is uiterst configureerbaar - dus als iets niet aan uw voorkeur, kan het gemakkelijk worden veranderd.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Onze nieuwe functie genaamd kwetsbaarheden geeft u de mogelijkheid om snel te bepalen of een apparaat wordt beïnvloed door een CVE (Common Vulnerability Exposure) - maar hoe?<br/><br/>FirstWave verbruikt voortdurend de output van de Nist NVD-feed. We nemen dit en passen een paar beperkingen toe, halen dan de getroffen programma\'s uit en bouwen een SQL query voor rapportage. Uw Open-AudIT instantie bereikt FirstWave en vraagt regelmatig om nieuwe kwetsbaarheden. Wanneer het een nieuwe kwetsbaarheid record ontvangt, wordt het uitgevoerd tegen de database en het resultaat opgeslagen. Elke keer als een apparaat wordt verwerkt, worden alle bijbehorende kwetsbaarheden opnieuw uitgevoerd en het resultaat opgeslagen. Dit betekent dat we bij het bekijken van een kwetsbaarheidslijst niet alle getroffen apparaten hoeven te berekenen - we hebben het resultaat al. Wanneer je een individuele kwetsbaarheidsrecord bekijkt, herberekenen we inderdaad het resultaat voor deze enkelvoudige kwetsbaarheid.<br/><br/>Dus je bent altijd up-to-date!<br/><br/>Naast deze, berekenen we ook het resultaat van alle kwetsbaarheden voor alle apparaten dagelijks (meestal op een rustige tijd, zeg 2am).<br/><br/>In uw geval van Open-AudIT kunnen wij u laten kiezen om welke leveranciers u geeft. Er is dus geen gebruik van het ophalen van kwetsbaarheidsrecords van een leverancier wiens software u niet gebruikt of hebt geïnstalleerd. Standaard is onze leverancierslijst Adobe, Apple, Cisco, Google, Microsoft, Mozilla en Redhat.<br/><br/>Dit klinkt allemaal heel eenvoudig, maar achter de schermen een <b>partij</b> Het gaat door. Zo bevat het CVE-record een lijst van getroffen software - maar die softwarenamen komen niet overeen met wat we ontvangen wanneer we een computer controleren. Een goed voorbeeld is Apache. Typisch, een CVE record zal zeggen dat de getroffen software is http_server. In werkelijkheid verschijnt dit als apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - en anderen. Dus, we moeten eerst bepalen wat de werkelijke naam is van het programma dat we ontvangen wanneer we een computer vragen, en er kunnen meerdere namen zijn. Daarna moeten we de CVE record ontleden en een bijpassende SQL statement maken. Toestaan voor meerdere programmanamen zoals hierboven, en meerdere versies, versiebereiken, en zelfs meerdere verschillende stukken software (een voorbeeld is Thunderbird en Firefox in een enkele CVE). En jouw geval van Open-AudIT moet dit aannemen en ook Orgs filteren. En dat is slechts een enkele CVE. Hoe zit het met het bepalen welke CVE\'s je hebt en niet hebt? Hoe zit het met het toevoegen van een verkoper aan de lijst later? Zoveel dingen om over na te denken!<br/><br/>Naast de gebruikelijke rapportage, hebben we ook een paar nieuwe widgets beschikbaar voor Dashboards, gebaseerd op kwetsbaarheden gegevens.';

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

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec is een vrij herverdeelbare re-implementatie van SysInternal/Microsofts populaire PsExec programma. PAExec wil een drop in vervanger zijn voor PsExec, dus het commando-line gebruik is identiek, met extra opties ook ondersteund. Dit werk werd oorspronkelijk geïnspireerd door Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'POSTgegevens';

$GLOBALS["lang"]['Package'] = 'Verpakking';

$GLOBALS["lang"]['packages'] = 'Verpakkingen';

$GLOBALS["lang"]['Packages'] = 'Verpakkingen';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Pakketten worden gebruikt om te rapporteren over zaken zoals <i>verboden software</i>, AntiVirus op servers, enz.<br/><br/>Open-AudIT biedt widgets die voortbouwen op ook geleverd repots om de status van antivirus, firewall en andere software detemin.';

$GLOBALS["lang"]['pagefile'] = 'Paginabestand';

$GLOBALS["lang"]['Pagefile'] = 'Paginabestand';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestijnse gebieden';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papoea-Nieuw-Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Parameters'] = 'Parameters';

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

$GLOBALS["lang"]['Permission'] = 'Toestemming';

$GLOBALS["lang"]['Permission Required'] = 'Toestemming vereist';

$GLOBALS["lang"]['permissions'] = 'Rechten';

$GLOBALS["lang"]['Permissions'] = 'Rechten';

$GLOBALS["lang"]['Persian'] = 'Perzisch';

$GLOBALS["lang"]['Personal Area Network'] = 'Persoonlijk netwerk';

$GLOBALS["lang"]['Personal area network'] = 'Persoonlijk netwerk';

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

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Pie-diagrammen moeten naam of mijn_naam, beschrijving of my_description en count teruggeven.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Ping-doel';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairneilanden';

$GLOBALS["lang"]['placement'] = 'Plaatsing';

$GLOBALS["lang"]['Placement'] = 'Plaatsing';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Interne audits plannen en uitvoeren';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Laat een Open-AudIT administrator inloggen en upgrade van de database.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Log in en wijzig deze zo snel mogelijk.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Log in op de Open-AudIT Server (of Windows of Linux) en voer <code>nslookup IP_ADDRESS_OF_TARGET</code> in de opdrachtprompt of shell. Het moet in staat zijn om het IP op een naam op te lossen.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Houd er rekening mee dat het selectievakje het tekstinvoervak zal overschrijven.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Zie de FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Stuur alle drie bestanden naar uw supportcontact bij Opmantek en beschrijf uw probleem.';

$GLOBALS["lang"]['Please set using'] = 'Instellen met';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Bezoek de homepage op';

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

$GLOBALS["lang"]['Polish'] = 'Pools';

$GLOBALS["lang"]['Polite'] = 'Beleefd';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Populeer de onderstaande waarden:';

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

$GLOBALS["lang"]['Portuguese'] = 'Portugees';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugees (Brazilië)';

$GLOBALS["lang"]['position'] = 'Positie';

$GLOBALS["lang"]['Position'] = 'Positie';

$GLOBALS["lang"]['Post-Certification'] = 'Postcertificatie';

$GLOBALS["lang"]['postcode'] = 'Postcode';

$GLOBALS["lang"]['Postcode'] = 'Postcode';

$GLOBALS["lang"]['power_circuit'] = 'Stroomkring';

$GLOBALS["lang"]['Power Circuit'] = 'Stroomkring';

$GLOBALS["lang"]['power_sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Predictable'] = 'Voorspelbaar';

$GLOBALS["lang"]['Preferences'] = 'Voorkeuren';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Voorbereiding op hercertificering om de 3 jaar';

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

$GLOBALS["lang"]['Privacy Protocol'] = 'Privacyprotocol';

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

$GLOBALS["lang"]['Professional'] = 'Professioneel';

$GLOBALS["lang"]['profile'] = 'Profiel';

$GLOBALS["lang"]['Profile'] = 'Profiel';

$GLOBALS["lang"]['program'] = 'Programma';

$GLOBALS["lang"]['Program'] = 'Programma';

$GLOBALS["lang"]['Properties'] = 'Eigenschappen';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Eigenlijk. Als u HighCharts wilt aanpassen, kunt u een';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Beschermt vertrouwelijkheid, integriteit en beschikbaarheid van informatie';

$GLOBALS["lang"]['protocol'] = 'Protocol';

$GLOBALS["lang"]['Protocol'] = 'Protocol';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Geef een beschrijving en selecteer en verstrijkt duur.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Geef een naam - wij bevelen nederig Open-AudIT aan, maar je kunt het noemen wat je wilt.<br/>Van het Open-AudIT formulier, kopieer de waarde voor de <i>Redirect URI</i> veld en plak het in de <i>Aanmeld-redirect-URI\'s</i> veld in OKTA.<br/>De Sign-out redirect URI\'s zijn optioneel, maar als u wilt kunt u open-audit/index gebruiken. php/logout met uw Open-AudIT-servers http adres, zoals weergegeven in de screenshot.<br/>Normaal gesproken Open-AudIT-URL zal er ongeveer zo uitzien';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Mits u de juiste referenties, Device Seed Discovery werkt als volgt';

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

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Vragen zijn een belangrijk onderdeel van Open-AudIT. Zij zijn wat u in staat stelt om zinvolle informatie te krijgen van alle apparaatgegevens die u hebt ontdekt. Samen met samenvattingen en groepen bieden ze een krachtig mechanisme om cruciale informatie te extraheren.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Vragen voor groepen moeten alleen de';

$GLOBALS["lang"]['Query'] = 'Opvragen';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Vraag eerst naar deze Active Directory om de werkeenheid van de gebruikers te bepalen.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Vraag deze Active Directory attribuut tweede om de gebruikers werkeenheid te bepalen.';

$GLOBALS["lang"]['queue'] = 'Wachtrij';

$GLOBALS["lang"]['Queue'] = 'Wachtrij';

$GLOBALS["lang"]['Queue Limit'] = 'Wachtrijlimiet';

$GLOBALS["lang"]['Queued Device Audits'] = 'Audits van het apparaat in de wachtrij';

$GLOBALS["lang"]['Queued IP Scans'] = 'IP-scans in wachtrij';

$GLOBALS["lang"]['Queued Items'] = 'Items in de wachtrij';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC voor Active Directory en openLDAP';

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

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Rack Management en rapportage';

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

$GLOBALS["lang"]['Read through the log file at'] = 'Lees het logbestand op';

$GLOBALS["lang"]['Received'] = 'Ontvangen';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Onlangs hebben we de vraag gesteld - vind je Open-AudIT veiliger dan andere soortgelijke programma\'s? Zoals met de meeste dingen, is het antwoord <i>Het hangt ervan af.</i>.<br/><br/>Open Aud IT kan op zo\'n manier worden bediend dat het uiterst veilig is. Maar zoals gewoonlijk met computer-gebaseerde beveiliging, hoe veiliger je iets wilt maken, hoe lastiger het wordt om te gebruiken. De oude zin <i>de veiligste computer is er een die is uitgeschakeld en in de kast<i> Komt in me op.<br/><br/>Hieronder zullen we enkele opties schetsen die kunnen worden gebruikt met Open-AudIT die de beveiliging zal verhogen. Zoals de meeste items binnen Open-AudIT zijn dit opties en niet verplicht. Hoe ver je gaat met de beveiliging is aan jou.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Hercertificering: Vereist om de drie jaar';

$GLOBALS["lang"]['Red Query'] = 'Rode zoekopdracht';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Uri omleiden';

$GLOBALS["lang"]['Redirect Uri'] = 'Uri omleiden';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Vermindert het risico van datalekken en cyberdreigingen';

$GLOBALS["lang"]['references'] = 'Referenties';

$GLOBALS["lang"]['References'] = 'Referenties';

$GLOBALS["lang"]['region'] = 'Gebieden';

$GLOBALS["lang"]['Region'] = 'Gebieden';

$GLOBALS["lang"]['registered_user'] = 'Geregistreerde gebruiker';

$GLOBALS["lang"]['Registered User'] = 'Geregistreerde gebruiker';

$GLOBALS["lang"]['Rejected'] = 'Afgewezen';

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

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Herhaal tot je een volledig ontdekte en gecontroleerde Windows-pc hebt.';

$GLOBALS["lang"]['Report'] = 'Verslag';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Rapporteer op uw apparaten, netwerken en meer';

$GLOBALS["lang"]['reportable'] = 'Te rapporteren';

$GLOBALS["lang"]['Reportable'] = 'Te rapporteren';

$GLOBALS["lang"]['Reports'] = 'Verslagen';

$GLOBALS["lang"]['request'] = 'Verzoek';

$GLOBALS["lang"]['Request'] = 'Verzoek';

$GLOBALS["lang"]['Request Method'] = 'Verzoekmethode';

$GLOBALS["lang"]['Request Vulnerability'] = 'Kwetsbaarheid aanvragen';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Verzoek om een specifiek CVE';

$GLOBALS["lang"]['requested'] = 'Verzoek';

$GLOBALS["lang"]['Requested'] = 'Verzoek';

$GLOBALS["lang"]['require_port'] = 'Poort nodig';

$GLOBALS["lang"]['Require Port'] = 'Poort nodig';

$GLOBALS["lang"]['Require an Open Port'] = 'Een open poort nodig';

$GLOBALS["lang"]['Required'] = 'Vereist';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Vereiste AWS gebruikersrechten';

$GLOBALS["lang"]['Required Fields'] = 'Vereiste velden';

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

$GLOBALS["lang"]['Resulting Function'] = 'Resultaatfunctie';

$GLOBALS["lang"]['Results'] = 'Resultaten';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Een lijst van apparaten in de';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Een lijst van apparaten met OS-naam zoals Windows 2008 ophalen';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Alle details over het apparaat met id 88 ophalen.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Alle apparaten met Windows ophalen.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Alle apparaten met de standaard kolommen ophalen';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Ophalen van de eerste 10 apparaten met Windows besteld door hostnaam';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'De eigenschappen id, ip, hostname, domein, type van alle apparaten ophalen';

$GLOBALS["lang"]['retrieved'] = 'Opgehaald';

$GLOBALS["lang"]['Retrieved'] = 'Opgehaald';

$GLOBALS["lang"]['retrieved_ident'] = 'Opgehaald identificatienummer';

$GLOBALS["lang"]['Retrieved Ident'] = 'Opgehaald identificatienummer';

$GLOBALS["lang"]['retrieved_name'] = 'Naam opgehaald';

$GLOBALS["lang"]['Retrieved Name'] = 'Naam opgehaald';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Opgehaald van het apparaat - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbies, AIX:uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Het ophalen van een lijst van geloofsbrieven';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Ophalen of aanmaken';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Retourneren van een verzameling apparaten met de standaard set van kolommen (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.fabrikant, devices.os_family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Geef een lijst van alle modules geïnstalleerd op Routers';

$GLOBALS["lang"]['Return an individual device details'] = 'Een individueel apparaat teruggeven\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Geeft een lijst van {collectie} terug.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Geeft een {collectie} details terug.';

$GLOBALS["lang"]['Reunion'] = 'Reünie';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'De huidige praktijken toetsen aan ISO 27001-eisen';

$GLOBALS["lang"]['revision'] = 'Herziening';

$GLOBALS["lang"]['Revision'] = 'Herziening';

$GLOBALS["lang"]['risk_assesment_result'] = 'Risicobeoordelingsresultaat';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Risicobeoordelingsresultaat';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Risicobeoordeling en behandeling';

$GLOBALS["lang"]['Risk Management'] = 'Risicobeheer';

$GLOBALS["lang"]['Role'] = 'Rol';

$GLOBALS["lang"]['roles'] = 'Rol';

$GLOBALS["lang"]['Roles'] = 'Rol';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Roles kunnen alleen worden aangemaakt en bewerkt als je een Open-AudIT Enterprise licentie hebt. Voor de meeste gebruikers, de standaard set van rollen moet alles wat nodig is.';

$GLOBALS["lang"]['Romania'] = 'Roemenië';

$GLOBALS["lang"]['Romanian'] = 'Roemeens';

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

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Regels worden gemaakt en uitgevoerd tegen een apparaat wanneer het apparaat wordt ontdekt of een audit resultaat wordt verwerkt. Regels kunnen worden gebruikt om een apparaatattribuut op basis van andere attributen in te stellen.<br/><br/>OPMERKING - Momenteel kunnen we geen regelinvoer of uitvoer verwijderen die een / bevat. Dit komt omdat het kader de / als onderdeel van de URL ontleedt en een 404 teruggeeft, zelfs voordat onze code draait. De oplossing hiervoor is om de Regel zelf te verwijderen en vervolgens de input en outputs na te maken zoals vereist. Gelukkig zijn inputs en outputs die een / bevatten zeldzaam (er bestaan er geen standaard).';

$GLOBALS["lang"]['Run Discovery'] = 'Ontdekking uitvoeren';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Ontdekking uitvoeren op apparaten';

$GLOBALS["lang"]['Run Your Discovery'] = 'Uw ontdekking uitvoeren';

$GLOBALS["lang"]['Run a Command'] = 'Een commando uitvoeren';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Doe een ontdekking en kom erachter <b>Wat is er op je netwerk?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Voer het script uit door te typen <code>cscript test_windows_client.vbs</code> In de console.';

$GLOBALS["lang"]['Run this Command'] = 'Dit commando uitvoeren';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running'] = 'Uitvoeren';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Open-AudIT Apache-service draaien onder Windows';

$GLOBALS["lang"]['Russian'] = 'Russisch';

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

$GLOBALS["lang"]['SAN Audit'] = 'SAN Audit';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto-Discover';

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

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL die deze voorwaarde niet bevat zal resulteren in het widget dat niet uitgevoerd wordt.';

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

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Opslaan en uitvoeren van het bestand. Zorg ervoor dat u het bestand als een Administrator uitvoeren om het te installeren (rechter muisklik, Uitvoeren als Administrator).';

$GLOBALS["lang"]['Save as Default'] = 'Opslaan als standaard';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Sla het gedownloade bestand op.';

$GLOBALS["lang"]['scaling'] = 'Schalen';

$GLOBALS["lang"]['Scaling'] = 'Schalen';

$GLOBALS["lang"]['scan_options'] = 'Scanopties';

$GLOBALS["lang"]['Scan Options'] = 'Scanopties';

$GLOBALS["lang"]['Scan Options ID'] = 'Scanopties ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Scannen naar deze poort(s) en indien gedetecteerd open, gebruik deze poort voor SSH communicatie. Dit wordt toegevoegd aan de lijst met aangepaste TCP-poorten hierboven (indien niet reeds opgenomen), dus het is niet nodig om het ook in die lijst op te nemen. Comma gescheiden, geen ruimtes.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Scan het Nmap bovenste aantal TCP poorten.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Scan het Nmap bovenste aantal UDP-poorten.';

$GLOBALS["lang"]['schedule'] = 'Schema';

$GLOBALS["lang"]['Schedule'] = 'Schema';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Geplande apparaatontdekking en rapportage maken Open-AudIT Professional tot een efficiënte oplossing voor drukke IT-professionals die op zoek zijn naar minder algemene kosten en meer inzichten.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Planning - ontdekking, rapportage & meer';

$GLOBALS["lang"]['scope'] = 'Toepassingsgebied';

$GLOBALS["lang"]['Scope'] = 'Toepassingsgebied';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Toepassingsgebied staat bekend als Authorization Scope, wat aangeeft of een kwetsbaarheid van invloed is op middelen buiten de oorspronkelijke veiligheidsautoriteit van de kwetsbare component.<br/><br/>De enige twee geldige waarden voor deze eigenschap zijn';

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

$GLOBALS["lang"]['Searching Using DataTables'] = 'Zoeken met behulp van gegevenstabellen';

$GLOBALS["lang"]['Second'] = 'Tweede';

$GLOBALS["lang"]['secondary'] = 'Secundair';

$GLOBALS["lang"]['Secondary'] = 'Secundair';

$GLOBALS["lang"]['Secondary Text'] = 'Secundaire tekst';

$GLOBALS["lang"]['Secret Key'] = 'Geheime sleutel';

$GLOBALS["lang"]['section'] = 'Sectie';

$GLOBALS["lang"]['Section'] = 'Sectie';

$GLOBALS["lang"]['secure'] = 'Veilig';

$GLOBALS["lang"]['Secure'] = 'Veilig';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Veiligheidsinhoud Automatiseringsprotocol';

$GLOBALS["lang"]['Security Level'] = 'Beveiligingsniveau';

$GLOBALS["lang"]['Security Name'] = 'Beveiligingsnaam';

$GLOBALS["lang"]['Security Status'] = 'Beveiligingsstatus';

$GLOBALS["lang"]['security_zone'] = 'Veiligheidszone';

$GLOBALS["lang"]['Security Zone'] = 'Veiligheidszone';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Zie hierboven. OPMERKING - Dit kan ook worden veroorzaakt door een zelf ondertekend certificaat op de LDAP-server. We werken hieraan in een toekomstige release.';

$GLOBALS["lang"]['See our page on enabling'] = 'Zie onze pagina over inschakelen';

$GLOBALS["lang"]['Seed Discoveries'] = 'Zaadontdekkingen';

$GLOBALS["lang"]['seed_ip'] = 'IP zaad';

$GLOBALS["lang"]['Seed IP'] = 'IP zaad';

$GLOBALS["lang"]['seed_ping'] = 'Zaadping';

$GLOBALS["lang"]['Seed Ping'] = 'Zaadping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Zaad beperken tot privé';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Zaad beperken tot privé';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Seed Restrikt to Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Seed Restrikt to Subnet';

$GLOBALS["lang"]['Select'] = 'Selecteren';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Beheerder selecteren -> Taken -> Aanmaken Taak uit het menu.';

$GLOBALS["lang"]['Select All'] = 'Alles selecteren';

$GLOBALS["lang"]['Select All Devices'] = 'Alle apparaten selecteren';

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

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Menu selecteren -> Beheer -> Baselines -> List Baselins.';

$GLOBALS["lang"]['Select a Table'] = 'Selecteer een tabel';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Selecteer een geaccrediteerde certificeringsinstantie';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'De passende controles selecteren en toepassen (bijlage A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Selecteer de <i>COM Beveiliging</i> tab<br/><br/>Klik op Toegangsrechten Standaard bewerken';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Selecteer de <i>Aanmelden</i> tab en kopieer de waarde voor <i>Uitgever</i> (alleen de URL zelf). Plak dit in de Open-AudIT <i>Uitgever</i> veld.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Selecteer de <i>Deze account</i> checkbox en geef de accountnaam en wachtwoord.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Selecteer het menu Start en typ <i>diensten<.i>. Klik op het pictogram Services.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Selecteer het type Auth Menthod om de relevante details aan te maken en in te voeren.';

$GLOBALS["lang"]['Self Delete'] = 'Zelf verwijderen';

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

$GLOBALS["lang"]['Servers Only'] = 'Alleen servers';

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

$GLOBALS["lang"]['Service Under Windows'] = 'Service onder vensters';

$GLOBALS["lang"]['service_version'] = 'Serviceversie';

$GLOBALS["lang"]['Service Version'] = 'Serviceversie';

$GLOBALS["lang"]['Set'] = 'Instellen';

$GLOBALS["lang"]['set_by'] = 'Geselecteerd op';

$GLOBALS["lang"]['Set By'] = 'Geselecteerd op';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Door de Discovery functie ingesteld - zet dit normaal gesproken niet handmatig in.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Ingesteld door het audit_domein of ontdek_domeinscripts. Niet instellen.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Stel de externe tekst in op gekapitaliseerde versie van de interne gegevens.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Stel de externe tekst in op kleine letters.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Stel de externe tekst in op hoofdletter.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Stel de grootte (normaal of compact) in van de tabellen op de Lijstschermen.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Stel dit in als u systemen van AD wilt invoegen die mogelijk niet bereikbaar zijn, maar sinds die datum door AD gezien zijn.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Het instellen van Discovery op een subnet is bijna identiek aan het uitvoeren van een reguliere Discovery via de webinterface. De enige extra items zijn het geplande uur en dag(s) en een naam voor de Geplande taak zelf. U kunt hiervan profiteren om meerdere ontdekkingen te plannen met behulp van verschillende sets van referenties.<br/><br/>Zoals de Subnet Discovery, de Active Directory Discovery is ook gewoon dezelfde velden als een reguliere Active Directory Discovery met de toevoeging van een dag, uur(s) en naam.<br/><br/>Als de Open-AudIT Server Collectors er verslag van heeft, wordt een extra dropdown verstrekt. U kunt dit selecteren om aan te geven op welke Verzamelaar de taak moet draaien. Alleen Discovery taken worden ondersteund voor Collectors. Geef dezelfde items als een reguliere Discovery, maar geef de alternatieve Verzamelaar om deze taak uit te voeren.';

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

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Verzonden zijn een set standaard items. Deze kunnen gevonden worden door naar menu te gaan';

$GLOBALS["lang"]['short'] = 'Kort';

$GLOBALS["lang"]['Short'] = 'Kort';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Moet ik alle niet-huidige gegevens van dit apparaat verwijderen?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Moet dit bestand (of patroon) worden gebruikt om te voorkomen dat bestanden worden gerapporteerd. Normaal gesproken, om bestanden te controleren, is dit ingesteld op <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Moet deze verkoper worden gebruikt bij het ophalen van kwetsbaarheden van FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Moeten we apparaten van de remote service toevoegen, lokaal.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Moeten we deze licentie toepassen op de geselecteerde Org en de Orgs kinderen?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Moeten we een SAN controleren als de managementsoftware wordt gedetecteerd.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Moeten we punten controleren.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Moeten we netstat poorten controleren (alleen ja, nee, servers).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Moeten we de geïnstalleerde software controleren.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Moeten we een gefilterde poort als een open poort beschouwen - en daarom dit IP als een apparaat gebruiken?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Moeten we een open gefilterde poort beschouwen als een open poort - en daarom dit IP als een apparaat hebben?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Moeten we de hostnaam omzetten naar kleine letters.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Moeten we een bestand maken op basis van het auditresultaat.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Moeten we deze groep ontmaskeren in de webinterface.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Moeten we deze query blootleggen in de lijst van rapporten onder het Rapport menu in de webinterface.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Moeten we deze query blootleggen in de lijst van rapporten onder het Rapporten menu in de webinterface.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Moeten we het audit script venster verbergen bij het uitvoeren.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Moeten we een ongeldig of zelf ondertekend SSL certificaat negeren en het resultaat toch indienen.';

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

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Moeten we alle DNS namen ophalen';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Moeten we een audit uitvoeren en indienen (j/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Moeten we testen op SNMP met behulp van UDP poort 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Moeten we testen op SSH met behulp van TCP poort 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Moeten we testen op WMI met behulp van TCP poort 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Moeten we de agent verwijderen (y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Moeten we het systeem of de proxy van het gebruikersniveau gebruiken om het auditresultaat in te dienen.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Moeten we de win32_product WMI klasse (niet aanbevolen door Microsoft) gebruiken bij het ophalen van geïnstalleerde software.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Moeten we deze methode gebruiken om gebruikersgegevens te authenticeren. Instellen op <code>y</code> of <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Moeten we deze methode gebruiken om een gebruikersrol te bevolken. Het veld <code>use_auth</code> moet ingesteld worden op <code>y</code> Om dit te gebruiken. Instellen op <code>y</code> of <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Moeten we deze waarde gebruiken om externe en interne apparaten te vergelijken. Onze standaard Integratie gebruikt hier IP en UUID. Als een van deze matchen tussen extern en intern apparaat, beschouwen we ze als hetzelfde apparaat.';

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

$GLOBALS["lang"]['Slovak'] = 'Slowaaks';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slowakije (Slowakije)';

$GLOBALS["lang"]['Slovenia'] = 'Slovenië';

$GLOBALS["lang"]['Slovenian'] = 'Sloveens';

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

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Dus een script werkt niet op een recalcitrant apparaat. Grrr. De scripts voor Windows, Linux en MacOS accepteren allemaal het debuggen argument. Dit kan worden ingesteld in het script zelf, of worden geleverd op de opdrachtregel. Voer het script uit met behulp van die optie ingesteld op 5 en je moet zien in welke sectie van het script de fout optreedt. Bijvoorbeeld';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Dus afgezien van een regelmatig woord, welke andere opties zijn er - ik ben blij dat u gevraagd! Volgens de standaard Open-AudIT API hebben we verschillende operators voor het filteren. Exploitanten die de waarde kunnen voorgaan zijn';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Dus je hebt een probleem met Open-AudIT referenties om je apparaten te ontdekken. Ik heb een antwoord. Zeker, ik bedoel, ontdekking is het beste sinds gesneden brood. Je hoeft het niet van te voren te weten. <i>Wat is er op uw netwerk</i>. Maar hoe kunt u gegevens uit apparaten halen zonder het verstrekken van referenties?<br/><br/>In het geval van computers is een eenvoudige optie om het juiste auditscript naar de doelmachines te kopiëren en het op een schema uit te voeren. Meer details over de wiki. De machines sturen hun gegevens naar Open-AudIT op dat schema, bijna alsof je ontdekkingen doet. Het apparaat draait het audit script gewoon op een schema (weer kun je het audit script lezen) als de gebruiker die je het vertelt en stuurt de uitvoer naar de server. Er zijn geen referenties bij betrokken.<br/><br/>En nu hebben we agenten voor Windows. De voordelen van een daadwerkelijk geïnstalleerde agent zijn';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software gevonden laatste 7 dagen';

$GLOBALS["lang"]['Software Found Today'] = 'Software gevonden vandaag';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software gevonden gisteren';

$GLOBALS["lang"]['software_key'] = 'Softwaresleutel';

$GLOBALS["lang"]['Software Key'] = 'Softwaresleutel';

$GLOBALS["lang"]['Software License Reporting'] = 'Software License Reporting';

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

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Sommige collecties kunnen worden uitgevoerd - vragen, etc - zie hieronder.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Enkele voorbeelden staan onderaan deze pagina. Alle eindpunten hebben ook een minimale lijst van vereiste velden. Deze zijn beneden.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Sommige van onze sjablonen ondersteunen de nieuwe verhuizing naar dataTables, met behulp van server-side processing. Deze massivley verbetert de laadtijden.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Er is een andere fout opgetreden bij het verbinden met de LDAP-server. Het is contacteerbaar (d.w.z. de <i>verbinden</i> Boven heeft gewerkt), maar om een andere reden, binding is niet opgetreden. Controleer de logs op de LDAP-server.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Er is iets ernstig misgegaan. Open-AudIT kan de <i>orgs</i> tafel.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Er is iets ernstig misgegaan. Open-AudIT kan de <i>rollen</i> tafel.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Soms past agentless ontdekking gewoon niet bij uw use-case. Misschien hebben je pc\'s strakke firewalls. Misschien zijn ze niet op het netwerk als je ontdekkingen gepland staan. Misschien worden ze gebruikt door afstandsbedieningen. Hoe dan ook, hier kan een agent helpen. Installeer het op de doelmachine en het zal <i>inchecken</i> met uw Open-AudIT server op een schema en accepteer taken. De meest voorkomende taak die de server vraagt is dat de agent zichzelf controleert en het resultaat verstuurt.';

$GLOBALS["lang"]['Sort'] = 'Sorteren';

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

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Fase 1: Overzicht van de documentatie';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Fase 2: Evaluatie van de uitvoering en de doeltreffendheid';

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

$GLOBALS["lang"]['Start a web browser and go to'] = 'Start een webbrowser en ga naar';

$GLOBALS["lang"]['started_date'] = 'Begindatum';

$GLOBALS["lang"]['Started Date'] = 'Begindatum';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Vanaf juni 2018 Google heeft een pay-as-you-go prijsmodel geïmplementeerd voor de Google Maps Platform API\'s. Eerder konden de meeste gebruikers met matig gebruik Google Maps gebruiken, die zijn ingebed in opCharts en Open-AudIT Professional/Enterprise, gratis. Googles nieuwe beleid wordt hier geschetst,';

$GLOBALS["lang"]['Starts With'] = 'Begint met';

$GLOBALS["lang"]['state'] = 'Staat';

$GLOBALS["lang"]['State'] = 'Staat';

$GLOBALS["lang"]['Stats'] = 'Statistieken';

$GLOBALS["lang"]['status'] = 'Status';

$GLOBALS["lang"]['Status'] = 'Status';

$GLOBALS["lang"]['Storage'] = 'Opslag';

$GLOBALS["lang"]['storage_count'] = 'Aantal opslagruimtes';

$GLOBALS["lang"]['Storage Count'] = 'Aantal opslagruimtes';

$GLOBALS["lang"]['Storage area network'] = 'Netwerk voor opslagruimte';

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

$GLOBALS["lang"]['Submit Online'] = 'Online verzenden';

$GLOBALS["lang"]['Submitted From'] = 'Ingediend van';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Subnet-ontdekkingen';

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

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Samenvattingen zijn een enkele vraag tegen de database met een <i>groeperen op</i> Commando. Met behulp van deze eenvoudige methode kunnen we eenvoudig een samenvatting maken voor vrijwel elke eigenschap.<br/><br/>Wij hebben niet langer een afzonderlijk verslag nodig voor elk <i>type</i> van een apparaat. We hebben nu gewoon een samenvatting die groepen van <i>apparaten. type</i> en toont het resultaat. U kunt dan klikken op een bepaald type uit de lijst en de bijbehorende apparaten te zien. In dit geval vervangt één Samenvatting (mogelijk) 78 rapporten (er zijn 78 apparaattypen).<br/><br/>Een samenvatting is anders dan een query in die zin dat een samenvatting is ontworpen om items te groeperen door een bepaalde eigenschap dan een <i>klik door</i> link naar de werkelijke apparaten. Een query is gewoon een lijst van items zonder verdere links. Zoals hierboven - dit van een samenvatting als een gecombineerde <i>rapport + subrapport</i>, terwijl een vraag slechts één verslag is.<br/><br/>Samenvattingen hebben een andere collectie template dan de andere bronnen binnen Open-AudIT. Dit sjabloon toont de Samenvatting zoals je zou verwachten en toont ook knoppen met het aantal andere bronnen. Deze pagina is ontworpen als de HomePage van Open-AudIT.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Samenvattingen zijn ontworpen om items te groeperen door een bepaalde overeenkomende kolom en vervolgens om een link naar individuele apparaten te bieden. In de vorige versies van Open-AudIT zou dit twee verschillende punten zijn geweest - een rapport en subrapport. We hebben deze nu gebundeld in wat we een samenvatting noemen.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Samenvattingen bieden de mogelijkheid om de rapportage uit te voeren. Eenvoudig, intuïtief, krachtig.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Samenvattingen nemen dezelfde argumenten als Queries.';

$GLOBALS["lang"]['Summary'] = 'Samenvatting';

$GLOBALS["lang"]['Sunday'] = 'Zondag';

$GLOBALS["lang"]['supplier'] = 'Fabrikant';

$GLOBALS["lang"]['Supplier'] = 'Fabrikant';

$GLOBALS["lang"]['Support'] = 'Steun';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Ondersteunde types zijn <code>subnet</code>, <code>seed</code> en <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Ondersteunt de naleving van wettelijke en regelgevende voorschriften';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Toezichtaudits: Jaarlijkse audits om de certificering te handhaven';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayeneilanden';

$GLOBALS["lang"]['Swaziland'] = 'Swaziland';

$GLOBALS["lang"]['Sweden'] = 'Zweden';

$GLOBALS["lang"]['Swedish'] = 'Zweeds';

$GLOBALS["lang"]['switch_device_id'] = 'Switch Apparaat-ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Switch Apparaat-ID';

$GLOBALS["lang"]['switch_port'] = 'Switch poort';

$GLOBALS["lang"]['Switch Port'] = 'Switch poort';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Zwitserland, Zwitserse Bondsstaat';

$GLOBALS["lang"]['Symptom'] = 'Symptoom';

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

$GLOBALS["lang"]['Table'] = 'Tabel';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Label 1';

$GLOBALS["lang"]['Tag 1'] = 'Label 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Label 3';

$GLOBALS["lang"]['Tag 3'] = 'Label 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Tags';

$GLOBALS["lang"]['Tags'] = 'Tags';

$GLOBALS["lang"]['Tags :: '] = 'Tags: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tadzjikistan';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Neem nota van alle output en actie elk item waar van toepassing.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['Target Computer'] = 'Doelcomputer';

$GLOBALS["lang"]['task'] = 'Taak';

$GLOBALS["lang"]['Task'] = 'Taak';

$GLOBALS["lang"]['tasks'] = 'Taken';

$GLOBALS["lang"]['Tasks'] = 'Taken';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Taken kunnen een van verschillende soorten zijn: Baseline, Discovery, Report, Query, Summary of Collector.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp-poorten';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp-poorten';

$GLOBALS["lang"]['Technical Details'] = 'Technische details';

$GLOBALS["lang"]['tenant'] = 'Huurder';

$GLOBALS["lang"]['Tenant'] = 'Huurder';

$GLOBALS["lang"]['Tenant ID'] = 'Huurder ID';

$GLOBALS["lang"]['Tennant ID'] = 'Tennant ID';

$GLOBALS["lang"]['ternary'] = 'Ternair';

$GLOBALS["lang"]['Ternary'] = 'Ternair';

$GLOBALS["lang"]['Test 1'] = 'Test 1';

$GLOBALS["lang"]['Test 2'] = 'Test 2';

$GLOBALS["lang"]['Test 3'] = 'Test 3';

$GLOBALS["lang"]['Test Email'] = 'E-mail testen';

$GLOBALS["lang"]['test_minutes'] = 'Testminuten';

$GLOBALS["lang"]['Test Minutes'] = 'Testminuten';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Testsubnet';

$GLOBALS["lang"]['Test Subnet'] = 'Testsubnet';

$GLOBALS["lang"]['tests'] = 'Tests';

$GLOBALS["lang"]['Tests'] = 'Tests';

$GLOBALS["lang"]['Text'] = 'Tekst';

$GLOBALS["lang"]['Thai'] = 'Thais';

$GLOBALS["lang"]['Thailand'] = 'Thailand';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Bedankt voor het starten van uw reis met de beste ontdekking en inventaris tool rond.';

$GLOBALS["lang"]['Thanks to'] = 'Dankzij';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Dat is het! Je hebt net de eigenschappen van zoveel apparaten bewerkt als nodig is.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'De <i>Rol</i> eindpunt kunt u de set van permissies(Create, Read, Update, Delete) die worden verleend aan de gebruikers te beheren en worden toegepast op elk eindpunt.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'De API gebruikt een cookie. U kunt een cookie aanvragen door een POST naar onderstaande URL te sturen, met de gebruikersnaam en wachtwoord attributen en waarden:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Het Active Directory domein om een lijst van subnets op te halen.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'De Active Directory server om een lijst van subnets op te halen.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Met het Applications eindpunt kunt u een toepassing definiëren die u vervolgens kunt associëren met een apparaat (of apparaten).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Het Attributen eindpunt stelt u in staat om aangepaste waarden toe te voegen aan verschillende attributen in Open-AudIT, op het moment dat deze functie werkt op de Klasse, Omgeving, Status en Type attributen op Apparaten, het Type attribuut voor zowel Locaties en Orgs als de Menu Categorie voor Queries. Als u een item van een van de prachttypen (zeg een Lkocation bekijken) ziet u dat het attribuut Type moet worden geselecteerd uit een drop-down box. Hier worden die waarden opgeslagen. Dus, als u een nieuw Type wilt toevoegen om gekozen te worden voor een Locatie, voeg het toe met behulp van de Attributen functie.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'De Automatable metriek vangt het antwoord op de vraag <strong>Kan een aanvaller exploitatie gebeurtenissen automatiseren voor deze kwetsbaarheid over meerdere doelen?</strong> gebaseerd op stappen 1-4 van de kill chain. Deze stappen zijn verkenning, bewapening, levering en exploitatie (niet bepaald, Nee, Ja).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'De CVE is ongeldig of ingetrokken in de CVE-lijst. Het blijft in de NVD, maar is uitgesloten van standaard zoekresultaten.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'De CVE is gepubliceerd aan de CVE List en opgenomen in de NVD dataset. Uitsluitend eerste inname.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'De CVE is na de eerste analyse bijgewerkt. NVD verrijkingsgegevens kunnen zijn herzien.';

$GLOBALS["lang"]['The CVE identifier.'] = 'De CVE-identificatiecode.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'De CVE wordt actief verrijkt met CVSS-scores, CWE-classificaties, referentietags en CPE-toepassing.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'De CVE is momenteel niet geprioriteerd voor verrijking vanwege grondstoffenbeperkingen of andere redenen.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'De CVE staat in de rij voor verrijking door NVD-analisten. Nog geen gedetailleerde metagegevens.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'De Cloud die dit item bezit. Links naar <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'De Device Seed Discovery type is de nieuwste zeer effectieve methode voor netwerk kruipen, waardoor u de mogelijkheid om uw netwerk te richten zo smal of zo breed als je nodig hebt. Het is snel, het werkt en het is geweldig.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'De ontdekkingsscan Opties die wij verzenden zijn gedetailleerd in de tabel hieronder. Zoals hierboven, Enterprise gebruikers kunnen meer van deze maken of de verzonden items bewerken.';

$GLOBALS["lang"]['The Elevated User query'] = 'De verhoogde gebruikersopdracht';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'De Uitvoerbare functies scant de schijf van een apparaat als onderdeel van de audit en controleert of elk uitvoerbaar bestand bekend is bij de pakketbeheerder. Omdat het de package manager gebruikt, is de functie alleen van toepassing op Linux target apparaten, en verder dan dat, alleen rpm of deb gebaseerde distributies. Alles van Redhat of Debian moet werken.';

$GLOBALS["lang"]['The FROM'] = 'DE UIT';

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

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'Het ISO/IEC 27001-certificeringsproces en de belangrijkste elementen daarvan.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'De ISP of Telco leveren deze link.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Het JSON record van Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Het JSON-record van de NVD-feed.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'De LDAP OU van deze gebruiker (als LDAP wordt gebruikt).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'De LDAP-server kon niet worden aangesloten. Helemaal niet. Controleer of het pingable is vanaf de Open-AudIT server. Controleer of de juiste poort geopend is voor de Open-AudIT-server. Een nmap van de Open-AudIT-server zal dit laten zien. Vervang je LDAP servers IP voor $ip. Probeer:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'Het LDAP-servertype is ongeldig. Het moet ofwel <i>actieve map</i> of <i>openldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'De LDAP-server was verbonden met en de gebruikersgegevens aanvaard voor binden.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Het Linux Open-AudIT installatieprogramma test en installeert indien nodig de afhankelijkheden van Open-AudITs vanuit uw distributies repository, inclusief het instellen van de Nmap SetUID. Dit is vereist voor SNMP (UDP 161) detectie door een niet-root gebruiker. Dit wordt ondersteund op RedHat/CentOS en Debian/Ubuntu. Als u Nmap handmatig moet installeren:<br/><br/>Voor RedHat/CentOS doen (NOTE - als je upgrade met yum, moet je dit opnieuw toepassen <i>chmod</i> instelling).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'De Locatie die dit netwerk bevat. Links naar <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'De NVD toegewezen basisstatus.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Het National Institute of Standards and Technology is het federale technologiebureau. Ze bevorderen officiële technologie, meetwetenschap en standaarden.';

$GLOBALS["lang"]['The Network to Discover'] = 'Het te ontdekken netwerk';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'De Nmap timing vooraf ingesteld.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Het besturingssysteem waartegen dit pakket moet worden gerapporteerd. Blank voor iedereen. Gebruik het percentage teken % als een wildcard. Wordt getest tegen os_group, os_family en os_name in die volgorde.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'De Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'De Open-AudIT id van de gekoppelde cloud. Links naar <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'De Open Aud IT-servercode werd gebruikt in dit bestand.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'De Open Aud IT-servercode werd gebruikt binnen deze functie.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'Het OpenSCAP-ecosysteem biedt meerdere tools om beheerders en auditors te helpen bij het beoordelen, meten en handhaven van beveiligingsbases, waaronder een breed scala aan verhardingshandleidingen en configuratie-bases ontwikkeld door de open source community, zodat u kunt kiezen voor een beveiligingsbeleid dat het beste past bij de behoeften van uw organisatie, ongeacht de grootte ervan.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'Het OpenSCAP project is een verzameling van open source tools voor de implementatie en handhaving van deze norm, en heeft in 2014 de SCAP 1.2 certificering gekregen van NIST.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'De organisatie die eigenaar is van dit item. Links naar <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'De procesidentificatie van de lopende bijbehorende ontdekking.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'De RU positon van de bovenkant van dit apparaat.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'De Racks-functie wordt gebruikt om uw rekgebruik te beheren en te visualiseren met een organisatie, locatie, gebouw, vloer, kamer en rij.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'De SCAP is een specificatie voor het uitdrukken en manipuleren van beveiligingsgegevens op gestandaardiseerde manieren. SCAP gebruikt verschillende individuele specificaties in overleg om continue monitoring, kwetsbaarheid management en veiligheidsbeleid compliance evaluatie rapportage automatiseren';

$GLOBALS["lang"]['The SELECT'] = 'De SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'De SELECT-sectie van de query moet volledige stippennotatie gebruiken en ook het veld met de volledige stipnaam opvragen. IE - SELECT-apparaten. id AS devices.id Elk veld moet op deze manier worden geselecteerd om GUI side attribuut filtering in te schakelen.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'De SELECT-sectie van uw SQL moet volledig gekwalificeerde kolommen bevatten en bepaalde kolommen specificeren.';

$GLOBALS["lang"]['The SNMP community string.'] = 'De SNMP community string.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'De SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Het SNMP v3 Authenticatie Protocol.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'De SNMP v3 Privacy Wachtwoordzin.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Het SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Het SNMP v3 beveiligingsniveau.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'De SNMP v3 Beveiligingsnaam.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'De SNMPv3 context Engine ID (facultatief).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'De SNMPv3 contextnaam (facultatief).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'De SQL kan niet bevatten <strong>WAAR @filter OF</strong>. Dat SQL niet zal worden uitgevoerd, echter <strong>WAAR @filter EN</strong> Vragen zijn toegestaan.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'De SQL-queries die gebruikt worden in Open-AudIT vereisen het gebruik van de backtick-teken en NIET de standaard enkele quote voor velden. Op de meeste Amerikaanse Windows toetsenborden bevindt de backtick toets zich in de linkerbovenzijde van het toetsenbord samen met de tilde ~. Op een US Mac-toetsenbord bevindt zich de backtick-toets naast de SHIFT-toets. De standaard enkele offerte wordt nog steeds gebruikt om waarden te omsluiten zoals de onderstaande voorbeelden illustreren.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'De SQL query is in wezen in drie delen opgesplitst.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'De Normen functionaliteit in Open-AudIT kunt u, voordat u de vragen auditors vereisen bij het invullen van ISO 27001-certificering.';

$GLOBALS["lang"]['The URL of the external system.'] = 'De URL van het externe systeem.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'De URL van uw Open-AudIT Server waaraan deze Verzamelaar zal rapporteren (geen trailing slash).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'De URL waar de auditscripts hun resultaat moeten indienen.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Met het gebruikerseindpunt kunt u gebruikersaccounts beheren binnen Open-AudIT.';

$GLOBALS["lang"]['The WHERE'] = 'WHERE';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'Het WHERE gedeelte van uw SQL <em>moet</em> bevatten';

$GLOBALS["lang"]['The Windows'] = 'De vensters';

$GLOBALS["lang"]['The Windows log may say the following'] = 'De Windows log kan het volgende zeggen';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Het account moet een wachtwoord hebben; WMI staat geen lege wachtwoorden toe.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Het wachtwoord van het account mag GEEN \" bevatten (dubbele aanhalingstekens). Dit komt omdat cscript (en wscript) argumentwaarden met dubbele citaten niet kunnen verwerken. Ze zijn gewoon gestript. Nee (voordat je het vraagt) ontsnappen zal niet werken. Dit is een cscript beperking en niets te maken met Open-AudIT.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'De werkelijke volledige naam van deze gebruiker.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Het adres van de pagina van de Open-AudIT-server.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'De beheerder verstrekte referenties die succesvol werden gebruikt om te binden aan LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'De beheerder gaf aan om te binden aan de LDAP-server, maar ze zijn niet geaccepteerd door de LDAP sevrer. Controleer de referenties op de LDAP-server dubbel en controleer ze (of reset ze) in het Open-AudIT LDAP-server-item.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'De agent en server zijn ook intelligent genoeg om de agent zelf te updaten als er een nieuwere versie op de server is geïnstalleerd (zeg na het upgraden van Open-AudIT).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'De agent moet een nieuwe kopie van het auditscript downloaden, uitvoeren en het resultaat naar de server sturen.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'De applicatie creëert tijdelijke audit scripts hier, kopieert ze naar de doelmachines, verwijdert ze vervolgens.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'De geassocieerde uitgangswaarde. Links naar <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'De bijbehorende ontdekking (indien vereist). Links naar <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Het te testen kenmerk (van <code>devices</code> tabel).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Het te testen attribuut (moet overeenkomen met een externe veldnaam van hieronder).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'De eigenschappen voor ontdekking scan opties zijn als hieronder.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Het auditscript waarop je je maatwerk baseert.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Het audit script zal de bestanden[ ] array gebruiken en de bestandsdetails ophalen.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'De auditscripts accepteren allemaal een debug argument. U kunt het script uitvoeren met behulp van dat en meer in detail zien wat het probleem is. En als je het niet snapt - daar zijn we voor! Open een support case en we krijgen de dingen aan de gang in een mum van tijd.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Het basispad om gebruikers te zoeken.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'De onderstaande stappen zijn niet de schuld van of uniek voor Open-AudIT en zou invloed hebben <strong>alle</strong> zoekprogramma met behulp van externe WMI en/of Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'Het benchmarktype.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Het gebouw waar het rek zich bevindt.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Het berekende aantal apparaten dat extern moet worden aangemaakt.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Het berekende aantal apparaten dat in Open-AudIT moet worden aangemaakt.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'De client ID is het ID van een Azure Active Directory applicatie. Het cliëntgeheim is de sleutel die je die aanvraag geeft.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'De collector is in wezen een volledige installatie van Open-AudIT in <i>verzamelaar</i> modus. De verzamelaar is ontworpen om ontdekking uit te voeren op het netwerk waarin hij zich bevindt. Het is niet beperkt tot alleen dat netwerk, maar idealiter zou het in wezen één verzamelaar per subnet waar nodig zijn. De collector wordt aangedreven op een schema door de server en draait ontdekking op het netwerk zoals gespecificeerd.<br/>Wanneer in stand Alleenmodus de Verzamelaar fungeert als een onafhankelijke server, gewoon doorsturen van alle apparaten gevonden naar de hoofdserver.<br/><br/>Eenmaal geïnstalleerd en ingesteld, wordt de controle van de Verzamelaar uitgevoerd op de Server (niet in Stand Alone modus).<br/><br/>De enige vereiste netwerkpoorten tussen de collector en de server zijn 80 of 443 (TCP-verbinding van de Verzamelaar naar de Server). De Open-AudIT database wordt niet (en kan niet) gedeeld tussen deze installs.<br/><br/>Standaard zal de collector (niet in Stand Alone mode) elke zoekopdracht om de 5 minuten van de server aanvragen (u kunt dit instellen op de server voor nieuwe verzamelaars met behulp van de configuratie item collector_check_minutes) zodat elke ontdekking taken voor de collector moet worden gepland voor 0, 5, 10, 15, etc minuten.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'De collector is in wezen een volledige installatie van Open-AudIT in <i>verzamelaar</i> modus. Deze modus zou zichtbare functionaliteit verminderen in een poging om de toepassing te vereenvoudigen en te concentreren. Het is ontworpen om informatie te verzamelen over lokale netwerken en apparaten, waar firewall en/of netwerktraversal een probleem is van de server.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'De verzamelaars interne IP gebruikt bij het uitvoeren van een ontdekking.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'De kolomnaam uit de buitenlandse tabel. Moet een van: klasse, omgeving, status, type of menu_categorie zijn.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Het commando uitgevoerd op het doel apparaat of Open-AudIT server code uitgevoerd tijdens ontdekking.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'De configuratie van uw cluster kan zijn: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> of leeg.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Het ID wachtwoord. Als de referenties zijn een SSH Key, dit is het wachtwoord gebruikt om de sleutel te ontgrendelen en is optioneel.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'De door de gebruiker opgegeven gegevens zijn mislukt.';

$GLOBALS["lang"]['The credentials username.'] = 'De gebruikersnaam van de referenties.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'De huidige datum en tijd in het formaat: Y-m-d H:i:s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'De huidige datum in Y-m-d formaat.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'De huidige status van de Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'De huidige status van de ontdekking.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Het dashboard dat standaard voor deze gebruiker wordt getoond. Links naar <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'De gegevens die in de database zijn opgeslagen tonen niet in de vertaalde toepassing. We laten de gegevens zoals ze zijn. Er is echter niets om u, de gebruiker, te stoppen door de naam (bijvoorbeeld) van een item in de database te veranderen in uw taal.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'De gegevens die u invoert worden gebruikt in een <code>LIKE</code> clausule, niet (volgens de API) en <code>equals</code> clausule. Een ander voorbeeld - als je invoert <code>comput</code>Het zou nog steeds alle computers terugbrengen. En omdat we een <code>LIKE</code> Het is hoofdletterongevoelig.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Het databaseschema kan gevonden worden in de toepassing als de gebruiker database heeft::read permission by going to menu: Admin -> Database ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'De database versie en web versie zijn inconsistent.';

$GLOBALS["lang"]['The date of license expiration.'] = 'De datum van het verstrijken van de vergunning.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'De datum waarop de software door de fabrikant wordt stopgezet. Meestal vervangen door een nieuwere versie. Onderhoud kan nog steeds beschikbaar zijn.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'De datum waarop de software geen updates meer ontvangt en effectief volledig wordt stopgezet. Het onderhoud wordt gestaakt.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'De datum waarop dit item is gewijzigd of toegevoegd (alleen lezen). OPMERKING - Dit is het tijdstempel van de server.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'De datum/tijd waarop dit resultaat werd aangemaakt.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'De dag van de maand waarop deze taak moet worden uitgevoerd (* voor elke dag).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'De dag van de week waarop deze taak moet worden uitgevoerd (* voor elke dag).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Het debugniveau (wordt uitgevoerd naar het commandoprompt venster). Lager betekent minder uitvoer met 0 geen uitvoer.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'De standaard discovery scan optie is de UltraFast set.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'De standaardtaal toegewezen aan elke gebruiker die met deze methode is gemaakt.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Het apparaat moet reageren op een Nmap ping voordat het wordt beschouwd als online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Het apparaat binnen Open-AudIT. Links naar <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'De directe link voor het script is';

$GLOBALS["lang"]['The email address of the receiver'] = 'Het e-mailadres van de reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'De enterprise binary van FirstWave is vereist voor een licentie. Download Open-AudIT van';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'De gehele geassocieerde baseline is dit resultaat van.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'De geëxploiteerde kwetsbaarheid kan van invloed zijn op middelen buiten de veiligheidsautoriteit van de kwetsbare component. Dit betekent meestal dat een privilege of vertrouwen grens wordt overschreden (bijvoorbeeld, ontsnappen uit een container aan de gastheer OS).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'De geëxploiteerde kwetsbaarheid heeft alleen gevolgen voor middelen binnen dezelfde veiligheidsautoriteit als de kwetsbare component. Met andere woorden, de aanvaller blijft binnen de oorspronkelijke vertrouwensgrens.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Het extern referentielocatie-ID. Meestal bevolkt door Cloud audits.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'De velden geassocieerd met een Integratie worden opgeslagen in de database als een JSON-array van objecten. Elk veld heeft de volgende eigenschappen:';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'De eerste keer dat Open-AudIT details van dit apparaat ophaalde.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'De vloer waarop het rek zich bevindt.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'De buitenlandse tabel ter referentie. Moet een van: apparaten, locaties, orgs of vragen.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Het formaat van uw gegevens moet in de vorm';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Het formaat dat gebruikt wordt voor de uitvoer die gemaild moet worden.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'De volledig gekwalificeerde kolom waarop te groeperen door. OPMERKING: Wanneer type = verkeer, dit vertegenwoordigt de rode query id.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'De volledig gekwalificeerde naam teruggegeven door het externe systeem. EG: voor NMIS gebruiken we configuratie. rol Type.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'De volledig gekwalificeerde tabel.kolom. Meerdere kunnen worden verstrekt, gescheiden door een komma (geen spaties).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'De gegenereerde SQL query om deze kwetsbaarheid te testen. Dit veld kan worden bewerkt om de query te corrigeren zoals vereist.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'De groep apparaten waarop de uitgangswaarde werd vergeleken.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'De groep die een lijst geeft van apparaten voor de integratie. Links naar <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Het uur van de dag waarop deze taak uitgevoerd moet worden.';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Het ID van het gekoppelde apparaat. Links naar <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'De identificatiekolom (integer) in de database (alleen lezen).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Het belang van deze baseline (nog niet gebruikt).';

$GLOBALS["lang"]['The integer of severity.'] = 'Het geheel van ernst.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'De interne waarde, geformatteerd in dit formaat.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Het IP adres van de Auth methode.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'De taal om de webinterface te vertalen naar de gebruiker.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'De laatste datum en tijd dat dit item werd uitgevoerd (alleen lezen).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'De laatste keer dat Open-AudIT details van dit apparaat ophaalde.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'De laatste keer dat deze benchmarks werden uitgevoerd.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'De laatste keer dat deze integratie werd uitgevoerd.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Met het licentie-eindpunt kunt u het aantal licenties op uw apparaten volgen.';

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

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'De logica voor apparaat matching is opgenomen in het devices_helper.php bestand, die op een Linux installatie kan worden gevonden hier';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'De machine-standaard toestemmingsinstellingen verlenen geen toestemming voor lokale activering voor de COM-servertoepassing met';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Het maximale fysieke gewicht (in KGs) dat dit rek kan houden.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'De maximale totale BTU\'s waarvoor dit rek is beoordeeld.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'De minimaal vereiste attributen voor attributen zijn';

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

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'De nieuwe Agent heeft een PowerShell versie van het oude audit script ter voorbereiding van de afschrijving van VBScript (ja, het komt eraan).';

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

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'De offset is het aantal apparaten waarvan u gegevens wilt terugsturen.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'De enige vereiste toestemming / policy naam (in onze testen) is';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'De optionele tweede kolom. OPMERKING: Wanneer type = verkeer, dit staat voor de gele query id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'De optionele derde kolom. OPMERKING: Wanneer type = verkeer, dit de groene query id.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'De volgorde van informatie ophalen is snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'De oriëntatie van dit apparaat.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Het wachtwoord (als de gebruiker het script niet gebruikt).';

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

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'De primaire methode voor autorisatie (wat een gebruiker kan doen) is nu gebaseerd op de gebruikers Roles. De rollen worden standaard gedefinieerd als admin, org_admin, reporter en gebruiker. Elke rol heeft een set permissies (Create, Read, Update, Delete) voor elk eindpunt. Standaard rollen als verzonden moet 99,9 procent van de use-cases. De mogelijkheid om extra rollen te definiëren en bestaande rollen te bewerken is ingeschakeld in Open-AudIT Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'De procesidentificatie van dit wachtrij-item.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Het proces dat het laatst werd gebruikt om details over het apparaat op te halen';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Het doel van deze licentie pagina is om de producten en licenties opgenomen in Firstwave Commerciële producten met inbegrip van producten op basis van open source werken. Open-AudIT heeft een licentie van Firstwave onder AGPLv3 of later met Enterprise en Professional functionaliteit gelicentieerd onder commerciële voorwaarden. Open-AudIT kan bij het downloaden van FirstWave de volgende bibliotheken en projecten omvatten, die ongewijzigd en gelicentieerd worden geleverd zoals aangegeven:';

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

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'De gevraagde eigenschappen moeten in een door komma\'s gescheiden lijst staan. Eigenschappen moeten volledig gekwalificeerd zijn - dwz, system.hostname (niet alleen hostnaam).';

$GLOBALS["lang"]['The result of the command.'] = 'Het resultaat van het bevel.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'De kamer waar het rek zich bevindt.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'De rij waarin het rek zich bevindt.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'Het zoeken naar groep op de LDAP-server is mislukt. Controleer de LDAP server logs. Hebt u deze groepen (voor rollen en orgs) op de LDAP-server gemaakt en LDAP-gebruikers aan hen toegewezen?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'De geheime sleutel gebruikt in combinatie met uw AWS EC2 API sleutel.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'De einddatum van de software.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'De software einde van de levensduur.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'De specifieke kolom van de database uit de gespecificeerde databasetabel.';

$GLOBALS["lang"]['The specific database table.'] = 'De specifieke databasetabel.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'De standaard Nmap timing opties. Eerder ingesteld op T4 (agressief).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'De standaard Nmap timing opties. Meestal gebruiken we -T4 (Agressieve) omdat dit wordt aanbevolen voor een fatsoenlijke breedband- of ethernetverbinding.';

$GLOBALS["lang"]['The status of this integration'] = 'De status van deze integratie';

$GLOBALS["lang"]['The status of this queued item.'] = 'De status van dit item in de wachtrij.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'De onderstaande stappen schetsen het proces.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Het doel IP dit log item referers naar (indien aanwezig).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'De doelcomputer om te controleren. \".\" betekent localhost.';

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

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'De ongefilterde staat betekent dat een poort toegankelijk is, maar Nmap kan niet bepalen of deze open of gesloten is. Alleen de ACK scan, die wordt gebruikt om firewall regels in kaart te brengen, classificeert poorten in deze staat. Het scannen van ongefilterde poorten met andere scantypes zoals Windowscan, SYN-scan of FIN-scan kan helpen oplossen of de poort open is.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'De unieke identificatie van deze server.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Het gebruikersaccount dat deze collector gebruikt. Links naar <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'De gebruiker in Active Directory / OpenLDAP moet direct lid zijn van de vereiste Open-AudIT groepen voor Roles en Orgs. Een lid van een groep die lid is een andere groep die lid is van de Open-AudIT groep zal niet werken.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'De gebruiker is in LDAP en zijn referenties geldig, maar is niet in een van de Open-AudIT LDAP groepen voor Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'De gebruiker is in LDAP en hun referenties zijn geldig, maar is niet in een van de Open-AudIT LDAP groepen voor rollen.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'De gebruiker is in LDAP en zijn referenties zijn geldig, maar is niet in een van de vereiste Open-AudIT LDAP groepen.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'De gebruiker zit in de LDAP groep die overeenkomt met deze Org.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'De gebruiker is in de LDAP-groep die overeenkomt met deze rol.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'De gebruiker zit niet in de LDAP-groep die overeenkomt met deze Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'De gebruiker zit niet in de LDAP-groep die met deze rol overeenkomt.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'De gebruiker die werd opgegeven bestaat in LDAP, maar Open-AudIT is niet geconfigureerd om de LDAP groepen te gebruiken voor rollen en die gebruiker bestaat niet binnen Open-AudIT. Selecteer <i>LDAP gebruiken voor rollen</i> over de Open-AudIT LDAP Serverscherm of maak deze gebruiker binnen Open-AudIT en wijs rollen en orgs toe.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'De gebruikersnaam (als de gebruiker het script niet gebruikt).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'De gebruikersnaam die wordt gebruikt om toegang te krijgen tot het externe systeem.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'De gebruikersgegevens werden niet opgehaald van LDAP. Controleer de LDAP server logs.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'De gebruikersgegevens werden opgehaald van LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'Het gebruikers e-mailadres.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'De gebruikelijke werkuren op deze site.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'De waarde die aan het item is toegekend.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'De waarde die wordt opgeslagen voor dit specifieke item.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'De verkoopnaam volgens CPE-vermeldingen.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'De verkoper van de CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'De web directory op de host die Open-AudIT is geïnstalleerd (vereist een trailing slash).';

$GLOBALS["lang"]['The widget at position '] = 'Het widget op positie ';

$GLOBALS["lang"]['The width of this device.'] = 'De breedte van dit apparaat.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Hun OrgID\'s en hun nakomelingen';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Alleen hun OrgID\'s';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Hun OrgID\'s, nakomelingen en nakomelingen';

$GLOBALS["lang"]['Then'] = 'Daarna';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Maak dan een nieuwe Auth methode in Open-AudIT door naar menu -> te gaan Beheerder -> Auth Methoden -> Maak Auth. Geef een naam en stel de <i>type</i> naar Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Dan kunt u Open-AudIT (niet ondersteund) gebruiken om auditgegevens direct van de klanten te ontvangen. Ontdekking <strong>zal falen</strong>, maar als u Discovery niet gebruikt (de belangrijkste functie Open-AudIT is ontworpen rond), kunt u nog steeds apparaatgegevens te krijgen. U moet de audit scripts direct uitvoeren op de clients met behulp van cron, of gebruik maken van de Windows Agent functie (Enterprise alleen).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Er is een knop om naar JSON te exporteren. Dit zal alleen de apparaattabel van attributen weergeven. Om het apparaat te exporteren met alle bijbehorende componenttabellen, de details van het apparaat bekijken, dan toevoegen';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Het is absoluut niet nodig om elk individueel apparaat handmatig te bewerken.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Het is niet nodig om iets te doen als je Open-AudIT op een Linux server gebruikt.<br/><br/>Windows clients zijn gewoon prima en vereisen geen speciale acties, echter ... om deze functie in te schakelen moet het audit script lokaal worden uitgevoerd op het doel Windows-systeem. Het kan niet op afstand worden uitgevoerd zoals we doen met WMI-aanroepen bij het uitvoeren van het audit script op een Windows-machine, terwijl het richten van een tweede Windows-machine. Om dit te doen moeten we het audit script kopiëren naar het doel Windows machine en vervolgens uitvoeren. Helaas is de service account waar Apache onder draait de Local System account. Dit account heeft geen toegang tot externe (netwerkgebaseerde) bronnen. Om rond deze kwestie te werken moet de dienst onder een andere rekening worden uitgevoerd. Het is het makkelijkst om het lokale Administrator-account te gebruiken, maar u kunt elk account dat u wilt proberen zolang het de vereiste privileges heeft. Het Local System-account heeft evenveel lokale toegang als het lokale Administrator-account.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Dit zijn slechts voorbeelden. Het kan nodig zijn deze attributen aan te passen aan uw specifieke LDAP.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Deze parameters stellen u in staat om alleen te controleren wat nuttig en relevant is voor u, het besparen van de verwerking tijd en zodat u uw netwerk te ontdekken op een ordelijke manier.';

$GLOBALS["lang"]['Thing'] = 'Ding';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Denk aan mail.domein1.com en mail.domein2.com - dezelfde hostnaam.';

$GLOBALS["lang"]['Third'] = 'Derde';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Deze CVE zal worden opgehaald en de bestaande CVE overschrijven als het bestaat.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Deze Org heeft geen AD-groep opgegeven. Controleer de rollendetails binnen Open-AudIT.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Deze Org heeft geen AD-groep opgegeven. Controleer de rollendetails binnen Open-AudIT. <span class=\'\"confluence-link\"\'>Hebt u deze groepen (voor orgs) op de LDAP-server gemaakt en LDAP-gebruikers aan hen toegewezen?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Deze rol heeft geen AD-groep opgegeven. Controleer de rollendetails binnen Open-AudIT.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Dit attribuut wordt opgeslagen als een JSON-object. Het is de lijst van alle collecties en bevat de verzamelnaam samen met <code>c</code>, <code>r</code>, <code>u</code> en,of <code>d</code> die het maken, lezen, bijwerken en verwijderen vertegenwoordigen. Dit zijn de acties die een gebruiker kan uitvoeren op items uit die specifieke collectie.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Dit kan ofwel een varchar (een tekstveld), een lijst (een lijst van waarden die kunnen worden geselecteerd) of een datum zijn.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Deze code is gebaseerd op het grote werk van de';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Deze verzamelaars universeel unieke identificatiecode.';

$GLOBALS["lang"]['This column is required by'] = 'Deze kolom is vereist door';

$GLOBALS["lang"]['This column is required by '] = 'Deze kolom is vereist door ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Deze beschrijving is auto-bevolkt en moet idealiter worden gelaten als-is.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Dit eindpunt stelt u in staat om de verbindingen toe te voegen die deel uitmaken van uw netwerkinfrastructuur, het stelt u in staat om een verscheidenheid van eigenschappen aan te passen, te specificeren waar deze verbinding zich bevindt en de organisatie die het behoort.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Deze fout geeft aan dat SMB1 is uitgeschakeld of verwijderd van de doelmachine. Dit is normaal voor de moderne versie van Windows en u zult dit bericht alleen zien wanneer de SMB2-verbinding poging is mislukt. Als de SMB2-verbinding mislukt, proberen we SMB1 om ontdekking op oude versies van Windows mogelijk te maken. Als het doel Windows machine <i>is</i> het uitvoeren van een oude versie van Windows, het is waarschijnlijk uw referenties zijn mislukt. In dat geval, zie';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Deze fout geeft aan dat er niet genoeg virtueel geheugen of paging bestand quotum beschikbaar is om de gespecificeerde bewerking te voltooien. Probeer het later nog eens.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Deze fout geeft aan dat de gebruikte referenties onjuist zijn, niet bestaan of niet genoeg privileges hebben om op afstand in te loggen op de doel Windows-machine. U moet de referenties controleren en de onderstaande controleren.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Dit voorbeeld maakt een lijst van alle modules gemarkeerd als';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Dit voorbeeld maakt een lijst van apparaten en de open poorten, protocollen en programma\'s gevonden door de NMAP scan.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Dit voorbeeld maakt een lijst aan van apparaten waar de velden Functie of Beschrijving leeg zijn OF de aankoopdatum is de standaard.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Dit voorbeeld query haalt een lijst van apparaten over 3 jaar. De query gebruikt vandaag';

$GLOBALS["lang"]['This example uses'] = 'Dit voorbeeld gebruikt';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Deze functie vereist een Professional of een Enterprise licentie.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Deze functie, omdat het de mogelijkheid heeft om doelapparaten meer dan normaal te beïnvloeden moet handmatig worden ingeschakeld. Om deze functie in te schakelen, wijzig de configuratie item feature_executables naar <i>ja</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Dit bestand vertelt Linux om de toepassing te peilen om te bepalen of er geplande taken moeten worden uitgevoerd.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Dit formulier biedt een eenvoudige manier om de apparaten op uw netwerk te ontdekken. Voor meer (veel meer) gedetailleerde opties kunt u individueel';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Dit is ook de manier waarop PAExec werkt.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Dit is een optionele configuratie optie, ingeschakeld door het instellen van discovery_use_org_id_match in de globale configuratie.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Dit is meestal de primaire kolom, tenzij anders geconfigureerd. OPMERKING: Wanneer het type = verkeer, dit vertegenwoordigt de secundaire tekst.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Dit is waarschijnlijk te wijten aan MySQL tijd vrij. MySQL gebruikt meestal de host apparaten tijd. U kunt dit controleren door';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Dit is instelbaar door gebruikers en dus, hoewel het wereldwijd uniek moet zijn, is er zeker geen garantie van dit.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Dit is de map waar we bijlagen aan apparaten opslaan.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Dit wordt gebruikt als het eerste aanroeppunt bij het oplossen van Open-AudIT problemen. U kunt op de knop Exporteren rechtsboven klikken om dit als JSON-bestand op te halen (toe te voegen aan het support ticket / e-mail.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Deze kwestie wordt onderzocht.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Dit item moet overeenkomen met de waarde van het geselecteerde attribuut of bevat de ID van de te gebruiken query.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Dit item moet overeenkomen met de waarde van het geselecteerde kenmerk.';

$GLOBALS["lang"]['This license expires on'] = 'Deze licentie vervalt op';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Deze beveiligingsmachtiging kan worden gewijzigd met behulp van het administratieve hulpmiddel Component Services.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Dit moet worden opgemerkt na het oplossen van problemen als debug-modus zal veel logs op de schijf genereren voor geen enkel voordeel.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Dit zou wereldwijd uniek moeten zijn, maar ik heb gezien dat het niet zo is.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Dit moet worden ingesteld op 1 of de hoogte van het rek.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Dit moet de volledig gekwalificeerde veldnaam in de database zijn. Momenteel worden kolommen uit het systeem, velden en referenties tabellen ondersteund. EG: system.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Deze status wordt gebruikt wanneer Nmap niet kan bepalen of een poort is gesloten of gefilterd. Het wordt alleen gebruikt voor de IP ID-inactieve scan.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Dit zal automatisch populair worden.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Dit zal de ontdekkingsscan aanzienlijk vertragen.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Dit zal de huidige rijen in de';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Dit zal deze licentie definitief delete.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Dit toont u het Bulk Bewerken formulier. Alle attributen die u op dit formulier instelt, worden toegepast op alle geselecteerde apparaten. U kunt meerdere attributen tegelijk instellen.';

$GLOBALS["lang"]['Thursday'] = 'donderdag';

$GLOBALS["lang"]['time_caption'] = 'Tijdtitel';

$GLOBALS["lang"]['Time Caption'] = 'Tijdtitel';

$GLOBALS["lang"]['time_daylight'] = 'Tijd daglicht';

$GLOBALS["lang"]['Time Daylight'] = 'Tijd daglicht';

$GLOBALS["lang"]['Time to Execute'] = 'Tijd om uit te voeren';

$GLOBALS["lang"]['timeout'] = 'Tijdslimiet';

$GLOBALS["lang"]['Timeout'] = 'Tijdslimiet';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Tijdslimiet per doelstelling (seconden)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Timeout per Target. Wacht op X seconden voor een doelrespons.';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Tijdstempel';

$GLOBALS["lang"]['timing'] = 'Tijdschema';

$GLOBALS["lang"]['Timing'] = 'Tijdschema';

$GLOBALS["lang"]['Timor-Leste'] = 'Oost-Timor';

$GLOBALS["lang"]['Title'] = 'Titel';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Naar een nieuw bestand genaamd .env (in dezelfde map). Bewerk nu dat nieuwe bestand en verwijder commentaar (verwijder de #) de regel hieronder (regel 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Om de query daadwerkelijk uit te voeren, voeg een /execute toe, dus /open-audit/index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Om een machine te controleren, moet u referenties en toegang tot de beheerder niveau.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Om een externe machine te controleren op een Active Directory-domein, moet uw bijgeleverde gebruiker (of indien geen beschikbaar, de gebruiker die het script uitvoert) lid zijn van de administratorgroep (of subgroep).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Om een externe machine te controleren die niet in een domein zit, moet u het Administrator-account gebruiken (niet <i>a</i> beheerrekening, <i>de</i> Beheerder account) op de doel PC. #1 en #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Om localhost te controleren, worden alle opgegeven referenties genegeerd en de verbinding wordt gemaakt met behulp van de details van de gebruiker die het script draait.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Om software te vergelijken controleren we de naam en versie. Omdat versienummers niet allemaal gestandaardiseerd zijn in formaat, wanneer we een auditresultaat ontvangen, maken we een nieuw attribuut genaamd software_padded dat we in de database opslaan samen met de rest van de softwaredetails voor elk pakket. Daarom zullen basislijnen die softwarebeleid gebruiken, niet werken wanneer ze worden uitgevoerd tegen een apparaat dat niet is gecontroleerd door 1.10 (ten minste). Software beleid kan testen tegen de versie die <i>gelijk aan</i>, <i>groter dan</i> of <i>gelijk aan of groter dan</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Om een nieuw item aan te maken klikt u op de knop Maak in de rechterbovenhoek.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Om een bron te maken, moet u de vereiste gegevens POST.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Om een externe machine (Vista of hoger) te laten controleren die zich niet op een domein bevindt, door een account in de Administrators groep, anders dan de werkelijke Administrator account, zie de onderstaande sectie over UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Om dit aan te zetten, maak een nieuw Auth-item door naar menu -> te gaan Beheerder -> Auth -> Auth-methode aanmaken.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Om het Windows powershell script uit te voeren, open een opdrachtprompt als Administrator en gebruik het volgende commando';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Om het auditscript uit te voeren, open een terminal en gebruik het volgende commando';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Om te filteren op een eigenschap waarde, gebruik de eigenschap naam. Exploitanten die vooraf moeten gaan aan de waarde zijn';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Om Nmap op Windows te installeren, bezoek de Nmap pagina op';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Om de verandering te maken, volg gewoon de onderstaande stappen.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Om de huurder ID op te halen. Open de Azure portal klik op Azure Active Directory, Eigenschappen en de Huurder ID wordt weergegeven als uw Directory-ID - geef mij niet de schuld voor de naam mismatch, dat is hoe Microsoft roll.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Om uw sleutel op te halen, logt u in op de AWS Console en selecteert u uw gebruikersnaam, dan Mijn Beveiligingsredenen.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Om een specifiek onderdeel te retourneren.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Alle items retourneren voor een compent type voor een bepaald apparaat.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Alle items voor een componenttype retourneren. Als u wilde alle software die u zou gebruiken';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Om terug te sorteren, voeg een min in, dus';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Om het testscript uit te voeren op het doel Windows PC';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Om apparaten te selecteren die geïntegreerd moeten worden, gebruiken we nmis_manage = y, maar je zou het (bijvoorbeeld) type = router kunnen waarderen. U kunt ook een Groep of Query gebruiken als u liever iets complexers.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Om te sorteren met een database kolom, gebruik';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Om deze Enterprise functie te gebruiken, moet u eerst uw gebruiker in Open-AudIT maken zoals gebruikelijk. Een wachtwoord toewijzen is niet nodig. Je moet wel Roles en Orgs toewijzen. De gebruikersnaam in Open-AudIT moet overeenkomen met de Entra <i>voorkeurs gebruikersnaam</i> kenmerk. Er is geen behoefte aan een volledige naam of e-mail - deze zullen worden bevolkt vanuit Entra. Als u uw gebruikers niet kent <i>voorkeurs gebruikersnaam</i>, vrees niet. U kunt de nieuwe Auth Methode maken in Open-AudIT en de Enterprise Application in Entra en wanneer een gebruiker probeert zich aan te melden bij Open-AudIT zonder een reeds bestaande gebruiker, controleer dan de logs en u ziet hun <i>voorkeurs gebruikersnaam</i> Gelogd voor uw hoffelijkheid.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Om deze Enterprise functie te gebruiken, moet u eerst uw gebruiker in Open-AudIT maken zoals gebruikelijk. Een wachtwoord toewijzen is niet nodig. Je moet wel Roles en Orgs toewijzen. De gebruikersnaam in Open-AudIT moet overeenkomen met de OKTA <i>naam</i> kenmerk. Er is geen behoefte aan een volledige naam of e-mail - deze zullen worden bevolkt vanuit OKTA. Als u uw gebruikers niet kent <i>naam<i>, vrees niet. U kunt de nieuwe Auth Menthod in Open-AudIT en de toepassing in OKTA en wanneer een gebruiker probeert aan te melden bij Open-AudIT zonder een reeds bestaande gebruiker, controleer de logs en u zult hun <i>naam<i> Gelogd voor uw hoffelijkheid.<br/><p>Maak dan een nieuwe Auth methode in Open-AudIT door naar menu -> te gaan Beheerder -> Auth Methoden -> Maak Auth. Geef een naam en stel de <i>type</i> Naar Okta.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Om deze functie te gebruiken moet u de configuratie-items match_mac (voor AWS) en match_hostname (voor Azure) inschakelen. Dit zal automatisch gebeuren de eerste keer dat een cloud ontdekking wordt uitgevoerd. Voor meer informatie over Open-Audits matching regels zie HIER: Bijpassende apparaten';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Om de details van een query te bekijken, de standaard URL-structuur van /open-audit/index. php/queries/{$id} moet worden gebruikt.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Werkbalkstijl';

$GLOBALS["lang"]['Toolbar Style'] = 'Werkbalkstijl';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top-Nmap TCP-poorten';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Ports. De top 10, 100, 1000 poorten te scannen als per Nmaps "top poorten" opties.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top-Nmap UDP-poorten';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP-poorten. De top 10, 100, 1000 poorten te scannen als per Nmaps "top poorten" opties.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Traditioneel Chinees';

$GLOBALS["lang"]['Traffic Light'] = 'Verkeerslicht';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad en Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Problemen oplossen';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Problemen oplossen LDAP-aanmeldingen';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Open-AudIT proberen Enterprise, op ons zonder tijdslimiet. Alle kenmerken van Enterprise. Beperkt tot 20 apparaten.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Probeer alle nieuwste functies met een GRATIS 100 apparaat licentie van Open-Audit Enterprise. Lees alstublieft de ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Probeer in te loggen met een LDAP-gebruiker. We gaan ervan uit dat dit zal mislukken (anders, waarom lees je dit nog steeds?). Volgende, commentaar op de regel uit ther bestand hierboven.';

$GLOBALS["lang"]['Tuesday'] = 'Dinsdag';

$GLOBALS["lang"]['Tunisia'] = 'Tunesië';

$GLOBALS["lang"]['Turkey'] = 'Turkije';

$GLOBALS["lang"]['Turkish'] = 'Turks';

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

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Type: Dit kan een varchar zijn (een tekstveld) of een Lijst (een lijst van waarden die geselecteerd kunnen worden).';

$GLOBALS["lang"]['Types of Networks'] = 'Soorten netwerken';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp-poorten';

$GLOBALS["lang"]['Udp Ports'] = 'Udp-poorten';

$GLOBALS["lang"]['Uganda'] = 'Oeganda';

$GLOBALS["lang"]['Ukraine'] = 'Oekraïne';

$GLOBALS["lang"]['Ukrainian'] = 'Oekraïens';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Fase 1 audit in het kader van de controle van de documenten';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Controle in fase 2 (uitvoeringsbeoordeling)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Onderliggende analyse';

$GLOBALS["lang"]['Unfiltered'] = 'Niet gefilterd';

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

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Kwetsbaarheden bijwerken';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Een attribuut van een {collectie}-item bijwerken.';

$GLOBALS["lang"]['Update attributes'] = 'Attributen bijwerken';

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

$GLOBALS["lang"]['Urdu'] = 'Urdu';

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

$GLOBALS["lang"]['Use Proxy'] = 'Proxy gebruiken';

$GLOBALS["lang"]['Use SNMP'] = 'SNMP gebruiken';

$GLOBALS["lang"]['Use SSH'] = 'Gebruik SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Veilig gebruiken (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Detectie van de Serviceversie gebruiken';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Gebruik Service Version Detection. Wanneer een gedetecteerde poort als open wordt gedetecteerd, indien ingesteld op <i>y</i>, Nmap zal het doel apparaat in een poging om de versie van de dienst die op deze poort.<br/>Dit kan nuttig zijn bij het identificeren van niet-geclassificeerde apparaten. Dit werd niet eerder gebruikt.';

$GLOBALS["lang"]['Use WMI'] = 'WMI gebruiken';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Gebruik a <i>Aanmeldmethode</i> van OIDC - OpenID Connect en een <i>Toepassingstype</i> van Web Toepassing. Klik <i>Volgende</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Gebruik voor aanmeldingscontrole';

$GLOBALS["lang"]['Use for Roles'] = 'Gebruik voor rollen';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Gebruik de standaard installatie opties wanneer weergegeven en klik op de <i>Ik ga akkoord.</i>, <i>Volgende</i> en <i>Installeren</i> knoppen om Nmap te installeren.';

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

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Gebruikers werken vergelijkbaar met Netstat Ports. Als een gebruiker bestaat met een bijpassende naam, status en wachtwoord details (changeable, expires, required) dan gaat het beleid voorbij.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Gebruikers, rollen en orgs';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Gebruikt het CodeIgniter PHP Framework.';

$GLOBALS["lang"]['Using'] = 'Gebruik';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Entra gebruiken voor Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'LDAPS gebruiken';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Gebruik van OKTA voor Auth';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Het gebruik van de format optie is nuttig bij het gebruik van een webbrowser, maar u wilt het resultaat zien in JSON formaat. Het toevoegen van formaat=json bereikt dit. Normaal gesproken zal een webbrowser zijn accept header instellen op HTML, dus in dat geval geven we de weergegeven pagina terug. Met behulp van een API om JSON op te halen moet u de accept header instellen op';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Meestal Mbs, van locatie A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Meestal Mbs, van locatie B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Meestal Mbs, naar locatie A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Meestal Mbs, naar locatie B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Meestal moet worden ingesteld op 3.';

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

$GLOBALS["lang"]['Value Types'] = 'Waardetypes';

$GLOBALS["lang"]['values'] = 'Waarden';

$GLOBALS["lang"]['Values'] = 'Waarden';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Waarden: In geval van een <i>lijst</i> veld, dit moet een komma gescheiden lijst van geldige waarden zijn.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variabele';

$GLOBALS["lang"]['Variable'] = 'Variabele';

$GLOBALS["lang"]['Various'] = 'Diverse';

$GLOBALS["lang"]['vendor'] = 'Verkoper';

$GLOBALS["lang"]['Vendor'] = 'Verkoper';

$GLOBALS["lang"]['Vendor Report'] = 'Verslag van de leverancier';

$GLOBALS["lang"]['vendors'] = 'Verkopers';

$GLOBALS["lang"]['Vendors'] = 'Verkopers';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

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

$GLOBALS["lang"]['Vietnamese'] = 'Vietnamees';

$GLOBALS["lang"]['View'] = 'Beeld';

$GLOBALS["lang"]['View All'] = 'Alles tonen';

$GLOBALS["lang"]['View Details'] = 'Details bekijken';

$GLOBALS["lang"]['View Device'] = 'Beeldapparaat';

$GLOBALS["lang"]['View Discovery'] = 'Bekijken Ontdekking';

$GLOBALS["lang"]['View Policy'] = 'Beleid bekijken';

$GLOBALS["lang"]['View Racks'] = 'Weergave racks';

$GLOBALS["lang"]['View the'] = 'Bekijk de';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Bekijk de ontdekking in kwestie, klik vervolgens op de knop Ondersteuning in de rechter bovenwerkbalk. Dit zal de ontdekking instellingen, config items, de ontdekking apparaat lijst en de logs voor deze specifieke ontdekking.';

$GLOBALS["lang"]['View the release notes on the'] = 'Bekijk de release notes op de';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtueel privénetwerk';

$GLOBALS["lang"]['Virtual private network'] = 'Virtueel privénetwerk';

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

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Kwetsbaarheden en resultaten';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Kwetsbaarheden oorspronkelijk gepubliceerd vóór 1 januari 2025 (standaard). We zien geen zin in het teruggeven van kwetsbaarheden van jaren eerder. Dit kan veranderd worden in de configuratie.';

$GLOBALS["lang"]['vulnerability_id'] = 'Kwetsbaarheid ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Kwetsbaarheid ID';

$GLOBALS["lang"]['Vulnerability Status'] = 'Kwetsbaarheidsstatus';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'WAARSCHUWING - Bij het maken van een basislijn met behulp van softwarebeleid, momenteel Centos en RedHat pakket de kernel met behulp van de namen <i>kernel</i> en <i>kernel-devel</i>. Er kunnen meerdere pakketten met deze naam en verschillende versies gelijktijdig geïnstalleerd zijn. Debian gebaseerde distributies gebruiken namen als <i>linux-image-3.13.0-24-generiek</i>, let op het versienummer is opgenomen in de verpakking naam. Omdat RedHat gebaseerde besturingssystemen gebruik maken van dit formaat en vervolgens hebben meerdere identieke pakketnamen met verschillende versies we momenteel uitsluiten <i>kernel</i> en <i>kernel-devel</i> van softwarebeleid. Dit kan worden aangepakt in een toekomstige update.';

$GLOBALS["lang"]['WHERE'] = 'WAAR';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'Vereisten inzake WMI-gegevens';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Wacht tot het klaar is, plak dan in deze volgende regel om het Agent te installeren.';

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

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'We hebben ook een optie voor Ping Before Scan (belangrijk voor routers met lange ARP caches). Dit is meestal een goed idee.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'We hebben ook onze actie items (die worden uitgevoerd in de onderstaande volgorde):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'We worden vaak gevraagd deze vraag en het antwoord is zeker <i>Het hangt ervan af.</i>. Het hangt af van het aantal te scannen IP\'s, de netwerkverbindingssnelheid, de snelheid van de apparaten die worden gescand, het type apparaten dat wordt gescand, het aantal verschillende referenties dat wordt getest en de snelheid van de Open-AudIT-server. We hebben geen rekenmachine waarmee we die variabelen kunnen invoeren en een waarde teruggeven. Het is gewoon te complex. Over het algemeen beperkt ik mijn ontdekkingen tot 256 IP adressen - dwz, een /24 subnet. Wij hebben klanten laten scannen /16 subnetten (65k adressen) en het werkt - maar het kan een lange tijd duren. Je bent veel beter af met scannen in /24 blokken. Als u gewoon niet weet wat uw adresbereiken zijn, dan is dit een goede zaak voor een Zaad ontdekking.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'We hebben meer gedetailleerde instructies op';

$GLOBALS["lang"]['We have tests for:'] = 'We hebben tests voor:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'We hopen dat u Open-AudIT net zo nuttig vindt als wij.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'We hebben in eerste instantie de standaardlijst van scripts ingesteld met de standaardopties. De lijst met scripts is te zien op /scripts. Deze standaardscripts kunnen niet worden verwijderd. U kunt extra scripts maken voor gebruik door u zoals vereist. Uw script zal worden gebaseerd op een van de bestaande scripts en hebben aangepaste opties toegepast. De scripts kunnen vervolgens worden gedownload van de lijstpagina bij menu: Ontdek -> Audit Scripts -> Lijst Audit Scripts.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'We hebben wat referenties nodig om effectief te kunnen praten met de apparaten op uw netwerk.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'We sturen alleen de minimale hoeveelheid gegevens en niets van gevoelige aard. We sturen onze licentiegegevens (naam, type, enz.), onze applicatiegegevens (naam, versie, platform, tijdzone, enz.), eventuele ingelogde fouten, een aantal apparaattypes en een aantal van de gebruikte functies. <i>Alle</i> omgeving heeft apparaten en dat is het enige stuk van uw gegevens die wij verzenden. En alleen het type apparaat en een telling. Niet de fabrikant, niet het model. We sturen niets speciaals. Geen netwerken. Geen IP adressen. Geen OS versies. Geen softwarenamen. De velden UUID en Server zijn sha256 gecodeerd (dus we kennen de waarde niet). We sturen alleen de gegevens die we nodig hebben om het product te verbeteren. We hopen dat u het voordeel voor ons allemaal ziet met deze informatie. Het zal ons begeleiden richting waar verbeteringen en nieuwe functies in het product te richten.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'We hebben de neiging om de Google Chrome extensie genaamd Postman gebruiken voor het testen van echte rustgevende vragen. Misschien wil je daarmee installeren en testen.';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Web Application Routes'] = 'Webapplicatieroutes';

$GLOBALS["lang"]['Web Server Discovery'] = 'Ontdekking van webserver';

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

$GLOBALS["lang"]['Welcome to'] = 'Welkom bij';

$GLOBALS["lang"]['Western Sahara'] = 'Westelijke Sahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Wat kan ik verwachten als ik geen geloofsbrieven heb?';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Hoe zit het met velden die ik van NMIS wil die niet in Open-AudIT staan? We hebben je gedekt. Alle velden in het externe systeem (NMIS) die niet bestaan in Open-AudIT worden automatisch aangemaakt als Open-AudIT aangepaste velden.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'En andere netwerkapparaten? Denkschakelaars, routers, printers, enz. Uiteraard is het het beste als u een aantal SNMP referenties voor deze apparaten. Ze hoeven alleen maar <i>alleen-lezen</i> Toegang. Maar als je zelfs dat niet wilt doen, is er niets dat je tegenhoudt om ontdekkingen uit te voeren, de apparaten te vinden en een of twee regels te maken om ze te identificeren (gebruik bijvoorbeeld MAC Address prefix in combinatie met open poorten). Je zult niet veel informatie hebben, maar je zult weten dat ze op het netwerk zijn, wat ze zijn, en wanneer de laatste keer dat ze werden gezien was. U zult ook zien of er iets nieuws op het netwerk verschijnt.';

$GLOBALS["lang"]['What do we send?'] = 'Wat sturen we?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Wat betekent dit eigenlijk voor jou?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Wat is het doel van dit rek.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Wat is het type van deze locatie. Toelaatbare typen aangehouden in <code>attributes</code> tafel.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Wanneer Open-AudIT op Linux een Windows-machine ontdekt, om een extern commando uit te voeren dat we gebruiken';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Wanneer Open-AudIT op Windows een Windows-machine ontdekt, om een extern commando uit te voeren dat wij gebruiken';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Wanneer Open-Aud IT ontvangt gegevens over een apparaat, hetzij door het apparaat te ontdekken tijdens een auditrun, hetzij door de gebruiker die het apparaat importeert, moet het bepalen of dit ontdekte apparaat overeenkomt met een apparaat dat al bestaat in zijn database, of dat het een nieuw apparaat is dat moet worden toegevoegd. Open-AudIT gebruikt een reeks van twaalf eigendomsmatchen om dit te bepalen. De Match Rules werken als OF vergelijkingen, niet EN. Dit betekent de eerste regel die overeenkomt met een veld in het ontdekte apparaat met een in de dB-oplossing als bestaand apparaat. Alle Matching Rules moeten falen om een apparaat nieuw te laten zijn en een nieuw record te creëren.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Wanneer POSTing gegevens, moet u een toegang token. Een access token wordt gegenereerd met elk type verzoek, dus maak een GET (bijvoorbeeld) en Accepteer: applicatie/json, ontleed het antwoord voor meta→access_token, en voeg dat toe met uw verzoek. Dit moet worden geplaatst in het veld data[access_token], IE, het hoogste niveau.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Wanneer een apparaat wordt ontdekt, wordt het auditscript geïnjecteerd met de details van het bestand (of directory). Zowel audit_linux.sh als audit_windows.vbs zullen worden bevolkt, ongeacht het bestandspad. Als u denkt <i>maar het plaatsen van een Linux pad in een Windows-machine zal dingen breken!</i>, het zal niet breken, je gewoon geen gegevens ontvangen van dat bestand of directory ingang.<br/>Opgehaalde gegevens worden opgeslagen in de <i>bestand</i> database tabel en worden opgeslagen als elk ander attribuut. Bestandsdetails worden opgeslagen als een ander attribuut en genereren waarschuwingen als een van de volgende eigenschappen verandert - <i>volledige _naam</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. De tabel bevat zowel een systeem_id, first_seen, last_seen en huidige kolommen als de bestandsdetails.<br/>Attributen zijn opgenomen:<br/><ul><li>Windows - naam, grootte, map, SHA1 hash (van de bestandsinhoud), laatst gewijzigd, toegangsrechten, eigenaar, versie (bestand toestaan).</li><br/><li>Linux - naam, grootte, directory, SHA1 hash (van de bestandsinhoud), laatst gewijzigd, metagegevens laatst gewijzigd, toegangsrechten, eigenaar, groep, inode.</li></ul>U ziet een sectie in zowel de Windows als Linux audit scripts als hieronder';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Wanneer een ontdekking wordt uitgevoerd, wordt de relevante discovery scan optie gekozen en die instellingen worden gebruikt door Nmap om de doelapparaten te scannen. De scanopties bepalen welke poorten nmap scant, hoe snel ze scannen en of nmap ping eerst wordt gebruikt om te bepalen of het IP live is of niet.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Wanneer een ontdekking wordt uitgevoerd, wordt de relevante discovery scan optie gekozen en die instellingen gebruikt door Nmap om de doelapparaten te scannen. Als er geen optie is gekozen, wordt het standaard configuratie-item (discovery_default_scan_option) geselecteerd en gebruikt. Open-AudIT Community zal de standaardopties gebruiken volgens de configuratie voor alle ontdekkingen.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Wanneer een subnet ontdekking wordt uitgevoerd, draait het eerst, indien geselecteerd, een Nmap ping scan op het bereik of IP-adressen. Elk apparaat dat reageert, wordt gescand. Als een Nmap ping scan niet wordt gevraagd, wordt elk IP afzonderlijk gescand. Welke havens? Dat wordt bepaald door de';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Bij de auditing van een Linux apparaat via SSH, staan sommige Linux distributies niet toe dat sudo commando\'s worden doorgegeven zonder een TTY (wat we doen). Om een van deze linux distributies volledig te controleren is het het beste om de root gebruikersgegevens te leveren. Als er geen root wordt geleverd en sudo zonder een TTY is niet mogelijk, zal het auditscript worden uitgevoerd, maar zal niet de hoeveelheid gegevens bevatten zoals anders. Latere audits met behulp van root (of lokaal uitvoeren met behulp van sudo) geeft daarom extra details over het systeem en het genereren van meerdere <i>wijzigingen</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Bij het combineren van apparaten, welk systeem is de gezaghebbende bron voor informatie.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Sluit het commandovenster als u klaar bent!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Bij het aanmaken van een widget, als u de <i>Geavanceerd</i> knop hebt u de mogelijkheid om uw eigen aangepaste SQL uploaden.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Bij het integreren van apparaten van het externe systeem, als het apparaat niet bestaat in Open-AudIT, moeten we het dan maken?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Bij het integreren van apparaten van het externe systeem, als het apparaat is bijgewerkt in het externe systeem moeten we het updaten in Open-AudIT?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Bij het onderzoeken van een Discovery zal ondersteuning de Exported Discovery Logs aanvragen. Om deze op te halen, ga naar menu -> Ontdekkingen ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Bij het aanpassen van een Linux gebaseerd apparaat, gebruiken we liever de Dbus id samengevoegd met de hostnaam. We kunnen ook andere opties gebruiken volgens de onderstaande tabel, maar we kunnen de Dbus ID zonder root ophalen. Om de UUID op te halen (van het moederbord), moeten we dmidecode uitvoeren, wat root nodig heeft. Helaas, als je een ESXi gast clone, de Dbus ID wordt niet nagemaakt - vandaar dat we dit samenvoegen met de hostnaam. Er is hier een goed artikel gekoppeld dat de <i>waarom</i> van hardware ID\'s.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Bij het aanvragen van JSON is standaard geen limiet ingesteld. Bij het aanvragen van schermweergave wordt de limiet standaard ingesteld op 1000. Dit kan veranderd worden in de configuratie. Zie <i>pagina_grootte</i> item';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Als we een extern apparaat ophalen, moeten we het dan ontdekken?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Bij het uitvoeren van Open-AudIT op Windows moet het Apache service account die van een <i>regelmatig</i> gebruiker (of de beheerder). Dit is omdat de <i>Lokaal systeem</i> account dat normaal wordt gebruikt om Apache uit te voeren heeft geen toegang tot netwerkbronnen. IE - We kunnen Apache niet gebruiken als Local System-account om het auditscript naar Windows-pc\'s te kopiëren.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Wanneer de configuratieoptie is ingesteld, houden we hiermee rekening voor apparaten voor een bepaalde subset van matchregels waar het configuratie-item is ingeschakeld. Deze regels zijn:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Wanneer de regels lopen in ontdekking, zullen eventuele overeenkomstige regels verschijnen in het ontdekkingslogboek. Zie hieronder voor een voorbeeld.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Wanneer deze benchmark wordt uitgevoerd. Afgeleid uit de geassocieerde landen <code>tasks.type</code> en <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Toen dit logboek werd aangemaakt.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Toen dit wachtrij-item begon te verwerken.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Bij gebruik van Open-AudIT Professional of Enterprise zijn widgets beschikbaar en aanpasbaar om te worden weergegeven op Dashboards.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Wanneer we een intern geselecteerd apparaat omzetten naar een object voor het externe systeem, wat moeten de externe gegevens zijn. EG: integer, string, enz.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Wanneer we deze basislijn uitvoeren, moeten we controleren op items op apparaten die niet in een beleid voor deze basislijn.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Als we een open poort ontvangen, moeten we dan proberen te testen op de versie van de dienst die er momenteel op draait? Dit helpt bij het bevestigen van de werkelijke lopende diensten.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Wanneer u Clouds gebruikt om uw Amazon AWS instanties te ontdekken, hebt u twee credential items nodig - sleutel en geheime sleutel. Uw sleutel moet al bekend zijn bij u en uw geheime sleutel ook. Merk op dat u uw geheime sleutel niet kunt ophalen met behulp van de AWS Console van Amazon. Als je het misplaatst hebt, moet je een nieuwe genereren.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Wanneer u Clouds gebruikt om uw Microsoft Azure instances te ontdekken, heeft u vier credential items nodig - abonnement id, huurder id, client id en client secret.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Wanneer je een ontdekking maakt, heb je een optie voor devices_ansigned_to_org. Dit betekent dat alle apparaten ontdekt voor deze ontdekking zal worden toegewezen (hebben <code>devices.org_id</code> uw gekozen organisatie.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Wanneer je een nieuwe ontdekking maakt als je op de Geavanceerde knop klikt, heb je nog veel meer opties om te veranderen, een van hen is het type ontdekking. Types zijn altijd Subnet (met de bovenstaande range, subnet, ip opties) en Active Directory geweest. Zoals bij v4.1, heeft Open-AudIT een nieuw type ontdekking genaamd Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Wanneer u een zoekopdracht op een schema laat draaien, wordt de zoekopdracht naar uw gekozen adres gemaild. U moet e-mail hebben ingesteld via menu -> Beheerder -> Enterprise -> E-mailconfiguratie. We hebben ook een <i>testmail<i> Knoop op die pagina. Voer je gegevens in, sla het op en test het dan. U moet een modal box die u informeert of het succesvol of niet en uiteraard een test e-mail moet komen als het succesvol is. Zodra u e-mail geconfigureerd hebt, kan uw geplande zoekopdracht worden geconfigureerd.<br/><br/>Geef een naam, optionele beschrijving, kies <i>Opvragen</i> type, selecteer de gewenste query, geef een e-mailadres, kies een formaat en stel het schema in.<br/><br/>Geef een uur (alleen een uur, nog geen minuten), geef de taak een naam (dit is niet de naam van de eigenlijke geplande query zelf), selecteer welke dagen u de query wilt uitvoeren, kies welke query u wilt uitvoeren, geef een e-mailadres en kies een query-formaat en u bent klaar.<br/>Vragen zullen worden verzonden met een e-mailtekst van de query (in html-formaat) en de query in het gevraagde formaat.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Als je tekst invoert in een van de kolommen, kun je gewoon een normaal woord gebruiken. Bijvoorbeeld, wanneer u invoert <code>computer</code> in het zoekveld boven de <i>Type</i> kolom, de zoekopdracht zal alle apparaten met het type computer. In wezen, Open Aud IT vraagt gegevens aan via een URL zoals <code>devices?devices.type=computer</code>. Nu is er een significant verschil bij het gebruik van de dataTables search, versus de standaard';

$GLOBALS["lang"]['where'] = 'waarbij';

$GLOBALS["lang"]['Where'] = 'waarbij';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Waar $x een getal is. Deze vele LDAP ingangen zijn in de DB en zijn opgehaald.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Waar op het scherm Device Details wilt u dit veld zien verschijnen.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Waar het rek op de rij staat.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Of de kwetsbaarheid invloed heeft op componenten buiten zijn eigen gebruik van Impact, Beschikbaarheid en Vertrouwelijkheid.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Of gebruikersinteractie vereist is (Geen, Passief, Actief).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Op welke OS deze benchmark van toepassing is.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Welke apparaten moeten Open-AudIT maken vanuit het externe systeem (indien aanwezig). Allen gebruiken, Geen of een bepaalde eigenschap.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Welk netwerk moeten we ontdekken. Dit moet in de vorm van';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'In welk submenu moeten we deze vraag tonen.';

$GLOBALS["lang"]['Who made this rack.'] = 'Wie heeft dit rek gemaakt?';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Waarom alleen Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Waarom sluiten we dit beleid uit?';

$GLOBALS["lang"]['Wide Area Network'] = 'Breed Area Network';

$GLOBALS["lang"]['Wide area network'] = 'Breed netwerk';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget #'] = 'Widget #';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Widgettype';

$GLOBALS["lang"]['widgets'] = 'Eigenschappen';

$GLOBALS["lang"]['Widgets'] = 'Eigenschappen';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Widgets zijn ontworpen voor gebruik op Dashboards. Enterprise gebruikers hebben volledige vrijheid om widgets te maken, bijwerken en verwijderen als nodig.';

$GLOBALS["lang"]['width'] = 'Breedte';

$GLOBALS["lang"]['Width'] = 'Breedte';

$GLOBALS["lang"]['windows'] = 'Vensters';

$GLOBALS["lang"]['Windows'] = 'Vensters';

$GLOBALS["lang"]['Windows Packages'] = 'Windows pakketten';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windows User Work Unit #1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windows User Work Unit #2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows kan ook hebben geblokkeerd de dienst te starten. Op het doel start de Windows Security-applet en zorg ervoor dat het WinExeSvc uitvoerbare bestand mag worden uitgevoerd (klik op Toestaan op Apparaat en start vervolgens acties).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Wijnxe pagina over Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe vereist dat de volgende Windows-diensten worden gestart en uitgevoerd: netlogon en rpc-services worden uitgevoerd.<br/><br/>Gelieve in te loggen op het doel Windows machine en controleer de diensten voor netlogon en rpc worden uitgevoerd.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe gebruikt de admin$ en RPC (net service start) om een remote service te installeren en te starten (winexesvc). Deze service initialiseert een pijp die wordt gebruikt om commando\'s van de Open-AudIT server naar het doel en de uitvoer op de omgekeerde manier te transporteren. Als het klaar is, sluit de genoemde pijp en wacht de winexesvc op meer verbindingen of uninstalls (afhankelijk van de gegeven opties).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Draadloos lokaal netwerk';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Met de 3.3.0 release van Open-AudIT hebben we het concept van een Cluster geïntroduceerd. Dit intuïtief in kaart brengen naar het idee van een webcluster, databasecluster of bestandscluster (of een van meerdere andere doeleinden) in een bepaald type (hoge beschikbaarheid, redundantie, schaalvergroting, etc).<br/><br/>Afhankelijk van het doel van cluster gekozen, zal de rapportage iets anders zijn.<br/><br/>Bijvoorbeeld, als je een Cluster maakt met een doel van virtualisatie, wanneer je apparaten hebt toegevoegd, zie je ook de virtuele machines op die apparaten.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Met de introductie van de Clouds-functie, kunt u details van uw cloud, Amazon AWS of Microsoft Azure, en Open-AudIT zal de relevante API gebruiken om een lijst van locaties, netwerken en instanties op te halen, en vervolgens elk van deze gevallen te ontdekken.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi mislukt';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi mislukt';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Werkgroep';

$GLOBALS["lang"]['Workgroup'] = 'Werkgroep';

$GLOBALS["lang"]['Working Credentials'] = 'Werkredenen';

$GLOBALS["lang"]['Wrap Up'] = 'Inpakken';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Geschreven in de PHP scripting taal.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Gele zoekopdracht';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Ja.';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'U kunt extra directories definiëren om te worden gescand als items in de collectie Uitvoerbare bestanden. Wanneer gedefinieerd, worden de directory en alle sub-mappen gescand op bestanden die uitvoerbaar zijn. U kunt ook mappen en bestanden definiëren die moeten worden uitgesloten. Wanneer geactiveerd, worden deze geïnjecteerd in het Linux audit script en uitgevoerd wanneer het wordt uitgevoerd (meestal als onderdeel van een ontdekking). Als u deze wilt in een script kunt u handmatig kopiëren naar het doel, gebruik menu -> Ontdek -> Scripts -> List Scripts en download het script vanaf daar.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'U bent altijd vrij om de auditscripts zelf aan te passen aan uw specifieke eisen. U moet deze wijzigingen (her) opnemen wanneer u upgrade als ze zullen worden overschreven door de standaard scripts. Ik stel voor om een hoofdkopie van je aangepaste script op te slaan, Open-AudIT te upgraden en vervolgens een verschil te maken tussen het nieuwe standaardscript en je aangepaste script en de verschillen toe te passen. De audit scripts zijn native scripts (Windows is VBScript, alle anderen zijn Bash). Eenvoudig en eenvoudig aan te passen - zorg ervoor dat u een kopie van uw wijzigingen voordat u upgrade.';

$GLOBALS["lang"]['You are running version'] = 'U draait versie';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'U kunt toegang krijgen tot de collectie met behulp van de normale op Open-AudIT JSON gebaseerde API. Net als elke andere collectie. Zie';

$GLOBALS["lang"]['You can also'] = 'U kunt ook';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'U kunt ook onderaan de pagina een tabel zien met de apparaten waarop de wijzigingen zullen worden toegepast.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'U kunt ook eigenschappen specificeren met behulp van het onderstaande formaat.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'U kunt altijd de Firstwave VM draaien op uw virtuele infrastructuur (ESX, Azure, et al). De Firstwave VM runt Debian linux en is vrij van OS licentieproblemen en beperkingen. Of installeer op je eigen Linux distro van keuze. Wij steunen Redhat 9, Ubuntu 20.04, 22.04 en 24.04 evenals Debian 11 en 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'U kunt apparaten automatisch toewijzen aan een locatie via';

$GLOBALS["lang"]['You can assign devices using custom'] = 'U kunt apparaten toewijzen met behulp van aangepaste';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'U kunt een remote machine te controleren zonder het gebruik van de werkelijke Administrator account door het maken van een registersleutel. Maak de onderstaande sleutel op elke machine die gecontroleerd moet worden en zorg ervoor dat de gebruikte gebruikersgegevens een lid van de Beheerdersgroep zijn.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'U kunt zeker een ontdekking uitvoeren zonder geldige referenties op de apparaten binnen het netwerk, maar de opgehaalde informatie zal een zeer kleine subset van wat Open-AudIT heeft de mogelijkheid om op te halen <i>met</i> referenties.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'U kunt een basislijn maken, uitvoeren met een groep apparaten en de resultaten bekijken, geplande uitvoering toevoegen, meer tabellen toevoegen voor vergelijking (momenteel zijn alleen software, netstat poorten en gebruikers ingeschakeld), in plaats van baseline bewerken, archiveren van resultaten en meer.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'U kunt een script maken met alle opties voor een van de bestaande audit scripts - niet alleen Windows. AIX, ESX, Linux, OSX en Windows zijn allemaal gedekt.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'U kunt de volledige integratie aanpassen aan welk systeem (NMIS of Open-AudIT) per veld de autoriteit is. Er zijn opties om apparaten te maken en/of te updaten in Open-AudIT of NMIS. Moeten we een ontdekking doen op een gemaakt of bijgewerkt apparaat en nog veel meer. Er zijn verklaringen voor elk item aan de rechterkant van de pagina.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'U kunt een toepassing definiëren en een apparaat associëren met deze toepassing. Een apparaat kan aan meer dan één toepassing worden gekoppeld. Een toepassing kan met meer dan één apparaat worden geassocieerd.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'U kunt de waarde van het veld Extra bewerken voor elk individueel apparaat op de pagina Details van het apparaat. Bekijk het scherm de details van het apparaat, open de sectie met het veld en (als u';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'U kunt de Device Seed Discovery beperken tot een strikte reeks parameters, waaronder: <i>Beperken tot Subnet</i> en <i>Beperken tot privé</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'U kunt handmatig toewijzen apparaten met behulp van';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'U kunt dit overnemen door de formatteringsoptie in de URL aan te bieden.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'U kunt individuele apparaten selecteren door op hun keuzevakken aan de rechterkant te klikken of alle apparaten te selecteren die op het keuzevakje rechtsboven in de tabel klikken (onder de knop Bewerken die op een potlood lijkt).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'U kunt de apparaten selecteren die moeten worden geïntegreerd door een attribuut te kiezen in de systeem (apparaat) tabel en matching (zie menu → Beheer → Database → Lijst Tabellen → systeem voor een lijst van velden). Een attribuutmatch kan slechts overeenkomen met een enkele waarde.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'U kunt elke server in een verzamelaar veranderen door naar menu -> te gaan Beheerder -> Verzamelaars -> Maak van deze installatie een Verzamelaar. U heeft referenties nodig om in te loggen op de server waar deze installatie zal rapporteren.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'U kunt bekijken door te klikken op de blauwe weergave pictogram. U kunt ook bewerken of verwijderen als u machtigingen hebt.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'U heeft de PHP MBString extensie niet geïnstalleerd. Deze uitbreiding is vereist.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'U heeft de PHP SNMP extensie niet geïnstalleerd. Deze uitbreiding wordt ten zeerste aanbevolen.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'U kunt deze URL kopiëren en plakken in een e-mail naar uw medewerkers.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'U wenst mogelijk Active Directory of OpenLDAP uw gebruikers te laten authenticeren, maar geeft geen toestemming. Om dit te doen, zorg ervoor dat <i>Gebruik voor aanmeldingscontrole</i> is ingesteld op Y en <i>Gebruik voor rollen</i> is ingesteld op N. De referenties zullen worden gevalideerd door LDAP, maar u moet de gebruiker reeds aangemaakt en toegewezen Roles in Open-AudIT. Dit <i>automatisch</i> van toepassing op';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Je hebt misschien gemerkt dat deze match regels zijn voor items die misschien niet wereldwijd uniek zijn. Enkele voorbeelden:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'U moet uw bestaande licentie verwijderen voordat u een nieuwe licentie toevoegt.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'U moet SSH-gegevens hebben om een benchmark uit te voeren. De volgende besturingssystemen worden momenteel ondersteund: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We zijn van plan deze verder uit te breiden met verdere releases.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'U moet het hele bestand kopiëren en plakken in het tekstvak. Kopieer in het onderstaande geval ALLE teksten.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'U mag de velden Edited_by en Edited_date niet opnemen. Deze worden automatisch ingesteld.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'U moet alleen de tweede zin van de tekst, de';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'U dient de vereiste kolom (bijv. org_id) te vervangen door ATTRIBUTE_NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Je moet een header regel gebruiken met de namen van de kolommen die je wilt bevolken, dan je data regels hieronder.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Je moet alleen die tabellen gebruiken die attributen bevatten die je nodig hebt. Ik gebruik meestal een linkse join. Bijvoorbeeld';

$GLOBALS["lang"]['You will need a'] = 'U zult een';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'U moet de poorten voor WMI op de Windows firewall geopend op elk doel Windows-computer. Voor Windows Core servers, zorg ervoor dat u de firewall verbindingen per';

$GLOBALS["lang"]['You will see a list of'] = 'U ziet een lijst van';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Uw AWS EC2 API sleutel.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Uw Google Bereken referenties als JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Uw Host is';

$GLOBALS["lang"]['Your Licenses'] = 'Uw licenties';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Uw Microsoft Azure Client ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Je Microsoft Azure Client Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Uw Microsoft Azure Abonnement ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Je Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your PHP version is'] = 'Uw PHP versie is';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Uw SQL om attributen te selecteren die deze query zullen vullen.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Uw SQL om apparaten te selecteren die deze groep zullen bevolken.';

$GLOBALS["lang"]['Your SSH key.'] = 'Je SSH sleutel.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Uw toegangsgegevens, zoals dat clouds inheemse API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Uw gegevens zijn uw gegevens. Je kunt het eruit halen wanneer je wilt. We bieden zelfs nuttig export naar CSV, JSON en XML. En we hebben een JSON API. En je kunt aangepaste rapporten schrijven en die output hebben in CSV, XML en JSON! Nogmaals, het zijn uw gegevens - niet iemand anders. U kunt er zeker van zijn dat de veiligheid van uw gegevens in uw handen is.';

$GLOBALS["lang"]['Your database platform is'] = 'Uw database platform is';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Uw beschrijving van de status van deze verbinding (verzorgd, gepensioneerd, etc).';

$GLOBALS["lang"]['Your description of this item.'] = 'Uw beschrijving van dit item.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Uw algemene naam voor dit stuk software';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Uw generieke versie voor dit stuk software';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Uw gebruiker moet nu kunnen inloggen door te klikken op de <i>Logon met Entra</i> knop op de pagina Open-AudIT-logon. Zoals hierboven vermeld, als de logon mislukt, controleer dan het logbestand en controleer de gebruikers <i>voorkeurs gebruikersnaam</i>.<br/><br/>En dat zou alles moeten zijn. Nu uw gebruikers moeten hebben een set minder referenties te onthouden!<br/><br/>Zoals altijd, als u problemen met deze functie, e-mail';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Uw gebruiker moet nu kunnen inloggen door te klikken op de <i>Logon met OKTA</i> knop op de pagina Open-AudIT-logon. Zoals hierboven vermeld, als de logon mislukt, controleer dan het logbestand en controleer de gebruikers <i>naam</i>.<br/><br/>En dat zou alles moeten zijn. Nu uw gebruikers moeten hebben een set minder referenties te onthouden!<br/><br/>Zoals altijd, als u problemen met deze functie, e-mail';

$GLOBALS["lang"]['Your web server is'] = 'Uw webserver is';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['a String'] = 'a tekenreeks';

$GLOBALS["lang"]['active'] = 'actief';

$GLOBALS["lang"]['active directory'] = 'actieve map';

$GLOBALS["lang"]['active/active'] = 'actief/actief';

$GLOBALS["lang"]['active/passive'] = 'actief/passief';

$GLOBALS["lang"]['advertisement'] = 'reclame';

$GLOBALS["lang"]['alert'] = 'alarm';

$GLOBALS["lang"]['all'] = 'alle';

$GLOBALS["lang"]['allocated'] = 'toegewezen';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['an Integer'] = 'een Integer';

$GLOBALS["lang"]['and'] = 'en';

$GLOBALS["lang"]['and / or'] = 'en / of';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'en een support ticket zal worden gemaakt en uitgevoerd.';

$GLOBALS["lang"]['and another'] = 'en nog een';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'En download de nieuwste Release zelfinstaller. Het kan nodig zijn om de pagina te scrollen om het te vinden.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'en ga naar Applications -> Enterprise Applications (ver links menu), klik vervolgens op <i>Nieuwe toepassing</i>.';

$GLOBALS["lang"]['and its current time is'] = 'en de huidige tijd is';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'en zoekt naar een garantie vervaldatum voor vandaag.';

$GLOBALS["lang"]['and review what is possible.'] = 'en bekijken wat mogelijk is.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'en de afmelden redirect URI is';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'en de laatste lijnen zullen waarschijnlijk van het grootste belang zijn. Deze regels moeten u het exacte punt geven waarop de login mislukt is.';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'toepassing';

$GLOBALS["lang"]['approved'] = 'goedgekeurd';

$GLOBALS["lang"]['are required.'] = 'zijn vereist.';

$GLOBALS["lang"]['are used.'] = 'worden gebruikt.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'als een apparaat dat reageert op deze poort.<br/>Dit heeft sommige klanten problemen veroorzaakt waarbij firewalls reageren namens een niet-bestaande apparaat, en dus vals positieve apparaat detectie veroorzaken. We hebben nu dit attribuut beschikbaar om per scan in te stellen.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'als referentiepunt en filtert alle virtuele machines via een controle van het systeem. Serieel veld voor VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'aannemen werken en client bevolkt DNS';

$GLOBALS["lang"]['attribute'] = 'eigenschap';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'back-up';

$GLOBALS["lang"]['banned'] = 'verboden';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['blue'] = 'blauw';

$GLOBALS["lang"]['bottom'] = 'onder';

$GLOBALS["lang"]['building'] = 'gebouw';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'kan worden gebruikt voor gebruikersauthenticatie (is de gebruikersnaam en het wachtwoord correct) en gebruikersmachtiging (welke rollen en orgs heeft een gebruiker).<br/><br/>Als een gebruiker niet in de geconfigureerde LDAP staat maar in Open-AudIT (bijv.: de <i>admin</i> gebruiker), Open-AudIT zal terugvallen om zichzelf te gebruiken voor zowel authenticatie als autorisatie.<br/><br/>Open Aud IT gebruikt specifieke LDAP-groepen voor rollen en orgs. Een gebruiker moet een direct lid zijn van deze groep(s) zodat Open-AudIT kan bepalen dat gebruikers toegang hebben.<br/><br/>Indien correct geconfigureerd, kan LDAP-gebruik de noodzaak om gebruikers te maken in Open-AudIT volledig verwijderen. Stel gewoon Open-AudIT in om LDAP te gebruiken voor zowel authenticatie als autorisatie. Als de gebruiker niet bestaat in Open-AudIT maar wel bestaat in LDAP en hun referenties correct zijn en ze lid zijn van de vereiste groepen Open-AudIT zal automatisch het gebruikersaccount aanmaken.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'kan nu details over een bestand of directory van bestanden ophalen en deze bestanden controleren op wijzigingen zoals in andere attributen in de Open-AudIT database. Deze functie werkt uit het veld voor Linux Open-AudIT servers, maar moet een wijziging in de service-accountnaam onder een Windows Open-AudIT server. Ondersteunde clients zijn Windows en Linux.';

$GLOBALS["lang"]['changed'] = 'gewijzigd';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'gekozen. Vanaf daar als een poort voor WMI, SSH of SNMP wordt gedetecteerd reageert het apparaat wordt verder gevraagd met behulp van ';

$GLOBALS["lang"]['cloud'] = 'cloud';

$GLOBALS["lang"]['code'] = 'code';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'collecties en details pagina\'s is een pictogram om uit te voeren.';

$GLOBALS["lang"]['collector'] = 'verzamelaar';

$GLOBALS["lang"]['collectors'] = 'verzamelaars';

$GLOBALS["lang"]['column'] = 'Kolom';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'kolom bevat ofwel <i>y</i> of <i>n</i>. Dit geeft aan of deze rij momenteel aanwezig is op het apparaat. Bijvoorbeeld software kan worden geïnstalleerd (die zou resulteren in <i>software.current = y</i>), maar bij een volgende controle kan het niet worden gedetecteerd. Open-AudIT zal dan deze rijen huidige attribuut wijzigen in <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'kolom. De';

$GLOBALS["lang"]['compute'] = 'berekenen';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['console'] = 'console';

$GLOBALS["lang"]['contains'] = 'bevat';

$GLOBALS["lang"]['create'] = 'aanmaken';

$GLOBALS["lang"]['created'] = 'aangemaakt';

$GLOBALS["lang"]['credentials'] = 'referenties';

$GLOBALS["lang"]['critical'] = 'kritiek';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'database';

$GLOBALS["lang"]['debug'] = 'debuggen';

$GLOBALS["lang"]['delegated'] = 'gedelegeerd';

$GLOBALS["lang"]['delete'] = 'verwijderen';

$GLOBALS["lang"]['deleted'] = 'geschrapt';

$GLOBALS["lang"]['denied'] = 'geweigerd';

$GLOBALS["lang"]['details'] = 'details';

$GLOBALS["lang"]['devices'] = 'apparaten';

$GLOBALS["lang"]['digitalocean'] = 'digitaaloceaan';

$GLOBALS["lang"]['discoveries'] = 'ontdekkingen';

$GLOBALS["lang"]['documentation for further details.'] = 'documentatie voor verdere details.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'doet <strong>niet</strong> kwetsbaarheidsrapporten verstrekken voor het volgende:';

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

$GLOBALS["lang"]['first'] = 'eerst';

$GLOBALS["lang"]['fixed'] = 'vast';

$GLOBALS["lang"]['floor'] = 'vloer';

$GLOBALS["lang"]['for'] = 'voor';

$GLOBALS["lang"]['for authentication'] = 'voor authenticatie';

$GLOBALS["lang"]['for this information.'] = 'voor deze informatie.';

$GLOBALS["lang"]['from Audit Script Result'] = 'van Audit Script Resultaat';

$GLOBALS["lang"]['from NMIS'] = 'van NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'vanaf adres LocalHost (met behulp van LRPC) dat in de toepassingscontainer draait';

$GLOBALS["lang"]['front'] = 'voor';

$GLOBALS["lang"]['front-left'] = 'linksvoor';

$GLOBALS["lang"]['front-right'] = 'rechtsvoor';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'meer of gelijk aan';

$GLOBALS["lang"]['greater than'] = 'groter dan';

$GLOBALS["lang"]['group'] = 'groep';

$GLOBALS["lang"]['has not been set'] = 'is niet ingesteld';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'hebben een werkende omgekeerde DNS op te lossen IP naar het doel Windows PC.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'kunnen worden uitgevoerd. Op de';

$GLOBALS["lang"]['head'] = 'kop';

$GLOBALS["lang"]['here'] = 'Hier.';

$GLOBALS["lang"]['high availability'] = 'hoge beschikbaarheid';

$GLOBALS["lang"]['howto'] = 'howto';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'Als je een Linux virtuele machine kloont, tenzij je dit handmatig regenereert (en in mijn ervaring, mensen niet) blijft het hetzelfde.';

$GLOBALS["lang"]['ignored'] = 'genegeerd';

$GLOBALS["lang"]['import the example device data'] = 'importeer de voorbeeld apparaatgegevens';

$GLOBALS["lang"]['in'] = 'in';

$GLOBALS["lang"]['in Enterprise.'] = 'Enterprise.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'in Inputs kunnen de volgende waarden hebben.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'in Outputs kunnen de volgende waarden hebben.';

$GLOBALS["lang"]['inactive'] = 'inactief';

$GLOBALS["lang"]['incomplete'] = 'onvolledig';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'installateur zal testen op de aanwezigheid van Nmap in de standaard installatie locaties van';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y/n), enz.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'is de Amerikaanse standaard onderhouden door National Institute of Standards and Technology';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'is een internationale norm voor het beheer van informatiebeveiliging. Het biedt een kader voor het opzetten, uitvoeren, onderhouden en voortdurend verbeteren van een informatiebeveiligingssysteem (ISMS).';

$GLOBALS["lang"]['is based upon'] = 'is gebaseerd op';

$GLOBALS["lang"]['is licensed to'] = 'heeft een vergunning';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'is volgende op de lijst en Open-AudIT kan gebruik maken van wachtwoord en sleutel authenticatie. Open-AudIT kan ook een sudo gebruiker gebruiken in tegenstelling tot het root gebruik direct (hoewel het ook root kan gebruiken). Voor de beste resultaten moet de root gebruiker of een sudo gebruiker worden gebruikt (zie Auditing Linux zonder root en Target Client configuratie op de wiki). Windows-apparaten kunnen ook ssh uitvoeren, maar als Open-AudIT dit detecteert, zal het de SSH-queries stoppen en in plaats daarvan WMI gebruiken (als WMI-gegevens werken).';

$GLOBALS["lang"]['is the link to the'] = 'is de link naar de';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'punt om de specifieke tabellen en hun kolommen te bekijken. Dit zal u in staat stellen om precies te vinden wat je nodig hebt, in plaats van trawlen door de MySQL console van het schema creatie script.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'sleutel nodig om lat / lang op te halen en kaart weer te geven. Zie';

$GLOBALS["lang"]['left'] = 'links';

$GLOBALS["lang"]['less or equals'] = 'min of gelijk aan';

$GLOBALS["lang"]['less than'] = 'minder dan';

$GLOBALS["lang"]['license'] = 'licentie';

$GLOBALS["lang"]['licenses'] = 'licenties';

$GLOBALS["lang"]['like'] = 'zoals';

$GLOBALS["lang"]['line'] = 'regel';

$GLOBALS["lang"]['list'] = 'lijst';

$GLOBALS["lang"]['list View, using the Create button'] = 'lijstweergave, met behulp van de knop Aanmaken';

$GLOBALS["lang"]['load balancing'] = 'belastingsbalancering';

$GLOBALS["lang"]['location'] = 'locatie';

$GLOBALS["lang"]['locations'] = 'locaties';

$GLOBALS["lang"]['managed'] = 'beheerd';

$GLOBALS["lang"]['methods'] = 'methoden';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'koppelpunt';

$GLOBALS["lang"]['must'] = 'moet';

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

$GLOBALS["lang"]['on devices where'] = 'op inrichtingen waarbij';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'geoptimaliseerd';

$GLOBALS["lang"]['optionally '] = 'facultatief ';

$GLOBALS["lang"]['or'] = 'of';

$GLOBALS["lang"]['or the GitHub page at'] = 'of de GitHub pagina op';

$GLOBALS["lang"]['other'] = 'Andere';

$GLOBALS["lang"]['package'] = 'pakket';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'blz. Exporteer uw LDAP-server vanuit menu -> Beheerder -> LDAP-servers -> Details aan JSON en opslaan en omvatten deze gegevens ook.';

$GLOBALS["lang"]['partition'] = 'partitie';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'in behandeling';

$GLOBALS["lang"]['performance'] = 'prestaties';

$GLOBALS["lang"]['performed'] = 'uitgevoerd';

$GLOBALS["lang"]['permission'] = 'toestemming';

$GLOBALS["lang"]['permissions required per endpoint'] = 'per eindpunt vereiste machtigingen';

$GLOBALS["lang"]['pie'] = 'taart';

$GLOBALS["lang"]['planning'] = 'planning';

$GLOBALS["lang"]['predictable'] = 'voorspelbaar';

$GLOBALS["lang"]['query'] = 'query';

$GLOBALS["lang"]['rear'] = 'achter';

$GLOBALS["lang"]['rear-left'] = 'linksachter';

$GLOBALS["lang"]['rear-right'] = 'rechtsachter';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'release';

$GLOBALS["lang"]['removed from display, but has been set'] = 'verwijderd uit het display, maar is ingesteld';

$GLOBALS["lang"]['reserved'] = 'gereserveerd';

$GLOBALS["lang"]['right'] = 'rechts';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'rechten) kunt u klikken op het veld waarde om het te bewerken.';

$GLOBALS["lang"]['role'] = 'rol';

$GLOBALS["lang"]['room'] = 'kamer';

$GLOBALS["lang"]['row'] = 'rij';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'service kon niet starten vanwege de volgende fout';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Open-AudIT weet dus om uw zoekopdracht te beperken tot de juiste Orgs.';

$GLOBALS["lang"]['stand-alone'] = 'standalone';

$GLOBALS["lang"]['standard'] = 'standaard';

$GLOBALS["lang"]['starts with'] = 'begint met';

$GLOBALS["lang"]['storage'] = 'opslag';

$GLOBALS["lang"]['subnet'] = 'subnet';

$GLOBALS["lang"]['table'] = 'tabel';

$GLOBALS["lang"]['table and insert the original rows.'] = 'tafel en plaats de originele rijen.';

$GLOBALS["lang"]['team'] = 'team';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'tekst. De eerste is de array index en moet worden gelaten als-is. De index wordt gebruikt in de sjablonen om de vertaalde tekst op te zoeken.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'klik vervolgens op de details knop voor de tabel.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'klik vervolgens op de details knop voor de tabel. De details van het apparaat worden opgeslagen in de';

$GLOBALS["lang"]['timestamp'] = 'tijdstempel';

$GLOBALS["lang"]['to'] = 'tot';

$GLOBALS["lang"]['to create an item of this type'] = 'om een item van dit type aan te maken';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'naar de URL, krijgt u de volledige database ingang, inclusief alle component tabellen, van een bepaald apparaat.';

$GLOBALS["lang"]['to the user'] = 'aan de gebruiker';

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

$GLOBALS["lang"]['true or false (in JSON context)'] = 'waar of onwaar (in JSON context)';

$GLOBALS["lang"]['unallocated'] = 'niet toegewezen';

$GLOBALS["lang"]['unauthorised'] = 'onbevoegd';

$GLOBALS["lang"]['unchanged'] = 'ongewijzigd';

$GLOBALS["lang"]['unknown'] = 'onbekend';

$GLOBALS["lang"]['unmanaged'] = 'onbeheerd';

$GLOBALS["lang"]['unused'] = 'ongebruikte';

$GLOBALS["lang"]['update'] = 'bijwerken';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'maakt gebruik van de gegevens verzameld van uw apparaten en past de geïnstalleerde software met de opgegeven waarde, het telt de wedstrijden berekent hoeveel licenties zijn gebruikt en hoeveel er nog zijn. Het maakt het gebruik van wildcards op de <i>match string</i> veld dat overeenkomt met de software. naamattribuut.';

$GLOBALS["lang"]['using the main menu items.'] = 'de hoofdmenu-items gebruiken.';

$GLOBALS["lang"]['valid'] = 'geldig';

$GLOBALS["lang"]['version'] = 'versie';

$GLOBALS["lang"]['virtualisation'] = 'virtualisatie';

$GLOBALS["lang"]['warning'] = 'waarschuwing';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'met lokale en externe toegangsrechten ingesteld.';

$GLOBALS["lang"]['with devices::update permission.'] = 'met apparaten:: update toestemming.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'met de Aanmeld-Redirect URI die';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'met de bedoeling eenvoudige en intuïtieve toegang te bieden op een manier die ontwikkelaars bekend is. Naast deze API zal de webinterface hetzelfde aanvraagformaat gebruiken en enkele extra acties leveren (bijv. HTML-formulieren voor het maken van items).';

$GLOBALS["lang"]['yes'] = 'ja';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'U heeft geen HighCharts-licentie nodig om Firstwave-producten te gebruiken. Licentie';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'U zult alle gevonden apparaten toewijzen aan die Org of locatie.';

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

